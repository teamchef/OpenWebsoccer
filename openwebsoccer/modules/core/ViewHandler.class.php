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
* This Version called "OpenWebsoccer" is a advanced modifikation
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
SEC;
class ViewHandler
{
	private $_website;
	private $_db;
	private $_i18n;
	private $_pages;
	private $_blocks;
	private $_validationMessages;
	FUNCTION __construct($website,$db,$i18n,&$pages,&$blocks,$validationMessages = null)
	{
		$this->_website = $website;
		$this->_db = $db;
		$this->_i18n = $i18n;
		$this->_pages = $pages;
		$this->_blocks = $blocks;
		$this->_validationMessages = $validationMessages;
	}
	FUNCTION handlePage($pageId,$parameters)
	{
		if ($pageId == NULL) {
			return;
		}
		if (!isset($this->_pages[$pageId])) {
			throw new Exception($this->_i18n->getMessage(MSG_KEY_ERROR_PAGENOTFOUND));
		}
		$pageConfig = json_decode($this->_pages[$pageId],TRUE);
		// check permissions
		$requiredRoles = explode(',',$pageConfig['role']);
		if (!in_array($this->_website->getUser()->getRole(),$requiredRoles)) {
			throw new AccessDeniedException($this->_i18n->getMessage('error_access_denied'));
		}
		// check if premium page
		if (isset($pageConfig['premiumBalanceMin'])) {
			$minPremiumBalanceRequired = (int) $pageConfig['premiumBalanceMin'];
			if ($minPremiumBalanceRequired > $this->_website->getUser()->premiumBalance) {
				$targetPage = $this->_website->getConfig('premium_infopage');
				// redirect to external info page
				if (filter_var($targetPage,FILTER_VALIDATE_URL)) {
					header('location: ' . $targetPage);
					exit;
					// render info page
				} else {
					$this->_website->addContextParameter('premium_balance_required',$minPremiumBalanceRequired);
					return $this->handlePage($targetPage,$parameters);
				}
			}
		}
		$template = $this->_website->getTemplateEngine($this->_i18n,$this)->loadTemplate('views/' . $pageConfig['template']);
		if (isset($pageConfig['model'])) {
			$class = $pageConfig['model'];
			if (!class_exists($class)) {
				throw new Exception('The model class \''. $class . '\' does not exist.');
			}
			$model = new $class($this->_db,$this->_i18n,$this->_website);
			if (!$model->renderView()) {
				return '';
			}
			$parameters = array_merge($parameters,$model->getTemplateParameters());
		}
		// validation error messages
		$parameters['validationMsg'] = $this->_validationMessages;
		$parameters['frontMessages'] = $this->_website->getFrontMessages();
		$parameters['ajaxRequest'] = $this->_website->isAjaxRequest();
		// get blocks
		$parameters['blocks'] = $this->_getBlocksForPage($pageId);
		// Page specific JS resources
		$scriptReferences = array();
		if (isset($pageConfig['scripts'])) {
			foreach ($pageConfig['scripts'] as $reference) {
				if ((DEBUG && (!isset($reference['productiononly']) || !$reference['productiononly']))
						|| (!DEBUG && (!isset($reference['debugonly']) || !$reference['debugonly']))) {
					$scriptReferences[] = $reference['file'];
				}
			}
		}
		$parameters['scriptReferences'] = $scriptReferences;
		// CSS resources
		$cssReferences = array();
		if (isset($pageConfig['csss'])) {
			foreach ($pageConfig['csss'] as $reference) {
				if ((DEBUG && (!isset($reference['productiononly']) || !$reference['productiononly']))
						|| (!DEBUG && (!isset($reference['debugonly']) || !$reference['debugonly']))) {
					$cssReferences[] = $reference['file'];
				}
			}
		}
		$parameters['cssReferences'] = $cssReferences;
		return $template->render($parameters);
	}
	FUNCTION renderBlock($blockId,$viewConfig = null,$parameters = null)
	{
		if ($viewConfig == null) {
			if (!isset($this->_blocks[$blockId])) {
				return '';
			}
			$viewConfig = json_decode($this->_blocks[$blockId],true);
		}
		if ($parameters == null) {
			$parameters = array();
		}
		if (isset($viewConfig['model'])) {
			$class = $viewConfig['model'];
			if (!class_exists($class)) {
				throw new Exception('The model class \''. $class . '\' does not exist.');
			}
			$model = new $class($this->_db,$this->_i18n,$this->_website);
			if (!$model->renderView()) {
				return '';
			}
			$parameters = array_merge($parameters,$model->getTemplateParameters());
		}
		// check permissions
		$userRole = $this->_website->getUser()->getRole();
		$roles = explode(',',$viewConfig['role']);
		if (!in_array($userRole,$roles)) {
			return '';
		}
		// check premium balance
		$minPremiumBalanceRequired = (isset($viewConfig['premiumBalanceMin'])) ? $viewConfig['premiumBalanceMin'] : 0;
		if ($minPremiumBalanceRequired > $this->_website->getUser()->premiumBalance) {
			return '';
		}
		// validation error messages
		$parameters['validationMsg'] = $this->_validationMessages;
		$parameters['frontMessages'] = $this->_website->getFrontMessages();
		$template = $this->_website->getTemplateEngine($this->_i18n,$this)->loadTemplate('blocks/' . $viewConfig['template']);
		$parameters['blockId'] = $blockId;
		$output =$template->render($parameters);
		return $output;
	}
	FUNCTION _getBlocksForPage($pageId)
	{
		$blocks = array();
		$userRole = $this->_website->getUser()->getRole();
		foreach($this->_blocks as $blockId => $blockData) {
			$blockConfig = json_decode($blockData,TRUE);
			$includepages = explode(',',$blockConfig['includepages']);
			$excludepages = (isset($blockConfig['excludepages'])) ? explode(',',$blockConfig['excludepages']) : array();
			$roles = explode(',',$blockConfig['role']);
			$minPremiumBalanceRequired = (isset($blockConfig['premiumBalanceMin'])) ? $blockConfig['premiumBalanceMin'] : 0;
			if (in_array($userRole,$roles) && ($includepages[0] == 'all' && !in_array($pageId,$excludepages)
					|| in_array($pageId,$includepages))
					&& $minPremiumBalanceRequired <= $this->_website->getUser()->premiumBalance) {
				$blocks[$blockConfig['area']][] = $blockConfig;
			}
		}
		foreach($blocks as $uiblock => $blockdata) {
			if ($uiblock != 'custom') {
				usort($blocks[$uiblock],array('ViewHandler','sortByWeight'));
			}
		}
		return $blocks;
	}
	FUNCTION sortByWeight(&$a,&$b)
	{
		if (!isset($a['weight']) || !isset($b['weight'])) {
			return NULL;
		}
		return $a['weight'] - $b['weight'];
	}
}
