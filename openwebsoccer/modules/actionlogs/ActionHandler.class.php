<?php
/******************************************************************
*
* This file is part of OpenWebSoccer-Sim.
*
* OpenWebSoccer-Sim is free software: you can redistribute it
* and/or modify it under the terms of the
* GNU Lesser General Public License
* as published by the Free Software Foundation,either version 3 of
* the License,or any later version.
*
* OpenWebSoccer-Sim is distributed in the hope that it will be
* useful,but WITHOUT ANY WARRANTY; without even the implied
* warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
* See the GNU Lesser General Public License for more details.
*
* You should have received a copy of the GNU Lesser General Public
* License along with OpenWebSoccer-Sim.
* If not,see <http://www.gnu.org/licenses/>.
*
* Author: Ingo Hofmann
* Base Version: OpenWebSoccer-Sim 5.2.4-Snapshot vom 21. Juni 2015
*
* This Version called "OpenWebsoccer" is a advanced modification
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
SEC;
define('DOUBLE_SUBMIT_CHECK_SECONDS',3);
define('DOUBLE_SUBMIT_CHECK_SESSIONKEY_TIME','laction_time');
define('DOUBLE_SUBMIT_CHECK_SESSIONKEY_ACTIONID','laction_id');
/**
* Aktionsverarbeitung: Eine Aktion steuert jede Art der Ausf�hrungs-Logik,um den Benutzer umzuleiten,nachdem die
* Aktion bearbeitet wurde. Es best�tigt auch Anfrage-Parameter entsprechend der Moduleinstellungen. *
*/
class ActionHandler
{
	/**
	* Sicherer Aktionsaufruft: Vor dem eigentlichen Aufruf,validiert dieser Handler alle in der module.xml definierten
	* Parameter und �berpr�ft die Benutzerberechtigungen.
	* @return string|NULL ID der Seite die nach der Aktionsausf�hrung angezeigt werden soll. Ist die ID = NULL,so wird die aufgerufene Seite angezeigt.
	* @throws Exception ( Fehleranzeige ) wenn die Aktion nicht gefunden,eine doppelte Ausf�hrung ermittelt,
	* der Zugriff verweigert,oder der Controller nicht gefunden wird bzw. der Controller selbst ein Exception bewirkt.
	*/
	FUNCTION handleAction($website,$db,$i18n,$actionId)
	{
		if ($actionId === NULL) {
			return NULL;
		}
		/** �berpr�fung auf doppelte Ausf�hrung */
		if (isset($_SESSION[DOUBLE_SUBMIT_CHECK_SESSIONKEY_ACTIONID])
			&& $_SESSION[DOUBLE_SUBMIT_CHECK_SESSIONKEY_ACTIONID] === $actionId
			&& isset($_SESSION[DOUBLE_SUBMIT_CHECK_SESSIONKEY_TIME])
			&& ($_SESSION[DOUBLE_SUBMIT_CHECK_SESSIONKEY_TIME] + DOUBLE_SUBMIT_CHECK_SECONDS) > $website->getNowAsTimestamp()) {
			throw new Exception($i18n->getMessage('error_double_submit'));
		}
		$actionConfig = json_decode($website->getAction($actionId),true);
		$actionXml = ModuleConfigHelper::findModuleConfigAsXmlObject($actionConfig['module']);
		/** �berpr�fung auf $user Berechtigung */
		$user = $website->getUser();
		/** �berpr�fung auf admin Berechtigung */
		if (strpos($actionConfig['role'],'admin') !== false) {
			if (!$user->isAdmin()) {
				throw new AccessDeniedException($i18n->getMessage('error_access_denied'));
			}
		} else {
			/** �berpr�fung auf sonstige Aktionen */
			$requiredRoles = explode(',',$actionConfig['role']);
			if (!in_array($user->getRole(),$requiredRoles)) {
				throw new AccessDeniedException($i18n->getMessage('error_access_denied'));
			}
		}
		/** Validierung der Parameter */
		$params = $actionXml->xpath('//action[@id = "' . $actionId . '"]/param');
		$validatedParams = [];
		if ($params) {
			$validatedParams = self::_validateParameters($params,$website,$i18n);
		}
		$controllerName = $actionConfig['controller'];
		/** Premium Aktionen erkennen */
		if (isset($actionConfig['premiumBalanceMin']) && $actionConfig['premiumBalanceMin']) {
			return self::_handlePremiumAction($website,$db,$i18n,$actionId,$actionConfig['premiumBalanceMin'],$validatedParams,$controllerName);
		}
		$actionReturn = self::_executeAction($website,$db,$i18n,$actionId,$controllerName,$validatedParams);
		/** Logeintrag vornehmen */
		if (isset($actionConfig['log']) && $actionConfig['log'] && $website->getUser()->id) {
			ActionLogDataService::createOrUpdateActionLog($website,$db,$website->getUser()->id,$actionId);
		}
		return $actionReturn;
	}
	FUNCTION _validateParameters($params,$website,$i18n)
	{
		$errorMessages = [];
		$validatedParams = [];
		foreach ($params as $param) {
		$paramId = (string)$param->attributes()->id;
		$type = (string)$param->attributes()->type;
		$required = ($param->attributes()->required === 'true');
		$min = (int)$param->attributes()->min;
		$max = (int)$param->attributes()->max;
		$validatorName = (string)$param->attributes()->validator;
		$paramValue = $website->getRequestParameter($paramId);
		if ($type === 'boolean') {
			$paramValue = $paramValue ? '1' : '0';
		}
		/** Validierung der Parameter */
		if ($required && $paramValue === null) {
			$errorMessages[$paramId] = $i18n->getMessage('validation_error_required');
		} else
			if ($paramValue !== null) {
				/** Textgr��e �ber minimum / maximum begrenzen */
				if ($type === 'text' && $min > 0 && strlen($paramValue) < $min) {
					$errorMessages[$paramId] = sprintf($i18n->getMessage('validation_error_min_length'),$min);
				} else if ($type === 'text' && $max > 0 && strlen($paramValue) > $max) {
					$errorMessages[$paramId] = sprintf($i18n->getMessage('validation_error_max_length'),$max);
					/** �berpr�fung der Nummereingabe */
				} else if ($type === 'number' && !is_numeric($paramValue)) {
					$errorMessages[$paramId] = $i18n->getMessage('validation_error_not_a_number');
				} else if ($type === 'number' && $paramValue < $min) {
					$errorMessages[$paramId] = $i18n->getMessage('validation_error_min_number',$min);
				} else if ($type === 'number' && $max > 0 && $paramValue > $max) {
					$errorMessages[$paramId] = $i18n->getMessage('validation_error_max_number',$max);
				} else if ($type === 'url' && !filter_var($paramValue,FILTER_VALIDATE_URL)) {
					$errorMessages[$paramId] = $i18n->getMessage('validation_error_not_a_url');
				} else if ($type === 'date') {
					$format = $website->getConfig('date_format');
					if (!DateTime::createFromFormat($format,$paramValue)) {
						$errorMessages[$paramId] = $i18n->getMessage('validation_error_invaliddate',$format);
					}
				}
				if ($validatorName) {
					if (!class_exists($validatorName)) {
						throw new Exception('Validator not found: ' . $validatorName);
					}
					$validator = new $validatorName($i18n,$website,$paramValue);
					if (!$validator->isValid()) {
						$errorMessages[$paramId] = $validator->getMessage();
					}
				}
			}
			if (!isset($errorMessages[$paramId])) {
				$validatedParams[$paramId] = $paramValue;
			}
		}
		if (count($errorMessages)) {
			throw new ValidationException($errorMessages);
		}
		return $validatedParams;
	}
	FUNCTION _executeAction($website,$db,$i18n,$actionId,$controllerName,$validatedParams)
	{
		if (!class_exists($controllerName)) {
			throw new Exception('Controller not found: ' . $controllerName);
		}
		/** �berpr�fung auf doppelter Aktion */
		$_SESSION[DOUBLE_SUBMIT_CHECK_SESSIONKEY_ACTIONID] = $actionId;
		$_SESSION[DOUBLE_SUBMIT_CHECK_SESSIONKEY_TIME] = $website->getNowAsTimestamp();
		$controller = new $controllerName($i18n,$website,$db);
		return $controller->executeAction($validatedParams);
	}
	FUNCTION _handlePremiumAction($website,$db,$i18n,$actionId,$creditsRequired,$validatedParams,$controllerName)
	{
		/** �berpr�fung,ob der User genug Geld hat */
		if ($creditsRequired > $website->getUser()->premiumBalance) {
			$targetPage = $website->getConfig('premium_infopage');
			/** Redirect zur externen Infoseite */
			if (filter_var($targetPage,FILTER_VALIDATE_URL)) {
				header('location: ' . $targetPage);
				exit;
				/** Infoseite ausgeben */
			} else {
				$website->addContextParameter('premium_balance_required',$creditsRequired);
				return $targetPage;
			}
		}
		/** Premiumkosten abziehen und die Aktion ausf�hren */
		if ($website->getRequestParameter('premiumconfirmed')) {
			PremiumDataService::debitAmount($website,$db,$website->getUser()->id,$creditsRequired,$actionId);
			return self::_executeAction($website,$db,$i18n,$actionId,$controllerName,$validatedParams);
		}
		/** Redirect zur bezahlten Seite */
		$website->addContextParameter('premium_balance_required',$creditsRequired);
		$website->addContextParameter('actionparameters',$validatedParams);
		$website->addContextParameter('actionid',$actionId);
		$website->addContextParameter('srcpage',$website->getPageId());
		return 'premium-confirm-action';
	}
}
