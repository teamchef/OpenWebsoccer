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
include('antiflood.php');
$sapi_type = php_sapi_name();if (!substr($sapi_type,0,3) == 'cgi') include('/lib/iosec/iosec.php');
include('defines.php');
define('OpenWebsoccer',TRUE);
if (!file_exists('cache')){ mkdir('cache'); }
// Sicherheit: erlaubt keinen direkten Aufruf von PHP-Scripten
// - Hacking Pr�vention - DeepLink Pr�vention -
// direkter Aufruf des PHP-Scripts unterbinden und zur Einstiegsseite leiten
// in die gesch�tzten PHP-Scripte muss folgendes oben im Script stehen:
// defined('OpenWebsoccer') or header('location: index.php');
if (file_exists('/install')){ require './admin/pages/deldir.inc.php'; deldir ('/cache'); mkdir  ('/cache'); header('Location: /install/'); }
if (file_exists('/update')){ require './admin/pages/deldir.inc.php'; deldir ('/cache'); mkdir  ('/cache'); header('Location: /update/'); }
include('frontbase.inc.php');
include('../grav/system/defines.php');
$parts = parse_url($_SERVER['HTTP_REFERER']);
$path_parts= explode('/',$parts[path]);
$grafref = $path_parts[1];
$owsref = $path_parts[1];
if ($owsref == 'openwebsoccer') {
	include('../grav/system/defines.php');
}
else {
	if ($grafref !== 'grav') {
		if ($website->getConfig('grav_enabled') == '1') {
			header("Location: ../grav/");
 			exit;
		}
	}
}
// offline mode
$isOffline = FALSE;
if ($website->getConfig('offline') == 'offline') {
	$isOffline = TRUE;
	// is recurring offline mode active?
} else {
	$offlineTimeSpansConfig = $website->getConfig('offline_times');
	if (strlen($offlineTimeSpansConfig)) {
		$timeSpans = explode(',',$offlineTimeSpansConfig);
		$now = $website->getNowAsTimestamp();
		foreach ($timeSpans as $timeSpan) {
			$timeSpanElements = explode('-',trim($timeSpan));
			if (count($timeSpanElements) != 2) {
				throw new Exception('Configuration error: Recurring offline mode time span must have a format like 15:00-17:00.');
			}
			$fromTimestamp = strtotime('today ' . trim($timeSpanElements[0]));
			$toTimestamp = strtotime('today ' . trim($timeSpanElements[1]));
			if ($fromTimestamp <= $now && $now <= $toTimestamp) {
				$isOffline = TRUE;
				break;
			}
		}
	}
}
if ($isOffline) {
	$parameters['offline_message'] = nl2br($website->getConfig('offline_text'));
	echo $website->getTemplateEngine($i18n)->loadTemplate('views/offline')->render($parameters);
	// show page
} else {
	// check once per session if a new badge for user is applicable
	if (!isset($_SESSION['badgechecked']) && $website->getUser()->getRole() == ROLE_USER
			&& $website->getUser()->getClubId($website,$db)) {
		$userId = $website->getUser()->id;
		$result = $db->querySelect('datum_anmeldung',$website->getConfig('db_prefix') . '_user','id = %d',$userId);
		$userinfo = $result->fetch_array();
		$result->free();
		// consider only users who have a registration date (in particular manually created users might not have).
		if ($userinfo['datum_anmeldung']) {
			$numberOfRegisteredDays = round(($website->getNowAsTimestamp() - $userinfo['datum_anmeldung']) / (3600 * 24));
			BadgesDataService::awardBadgeIfApplicable($website,$db,$userId,'membership_since_x_days',$numberOfRegisteredDays);
		}
		$_SESSION['badgechecked'] = 1;
	}
	// get page ID and parse it by router
	$pageId = $website->getRequestParameter(PARAM_PAGE);
	$pageId = PageIdRouter::getTargetPageId($website,$i18n,$pageId);
	$website->setPageId($pageId);
	$validationMessages = null;
	// handle action
	$actionId = $website->getRequestParameter(PARAM_ACTION);
	if ($actionId !== NULL) {
		try {
			$targetId = ActionHandler::handleAction($website,$db,$i18n,$actionId);
			if ($targetId != null) {
				$pageId = $targetId;
			}
		} catch (ValidationException $ve) {
			$validationMessages = $ve->getMessages();
			$website->addFrontMessage(new FrontMessage(MESSAGE_TYPE_ERROR,
					$i18n->getMessage('validation_error_box_title'),
					$i18n->getMessage('validation_error_box_message')));
		} catch (Exception $e) {
			$website->addFrontMessage(new FrontMessage(MESSAGE_TYPE_ERROR,
					$i18n->getMessage('errorpage_title'),
					$e->getMessage()));
		}
	}
	$website->setPageId($pageId);
	// get and set navigation items
	$navItems = NavigationBuilder::getNavigationItems($website,$i18n,$page,$pageId);
	$parameters['navItems'] = $navItems;
	// get and set breadcrumb
	$parameters['breadcrumbItems'] = BreadcrumbBuilder::getBreadcrumbItems($website,$i18n,$page,$pageId);
	// get and render target page
	header('Content-type: text/html; charset=utf-8');
	$viewHandler = new ViewHandler($website,$db,$i18n,$page,$block,$validationMessages);
	try {
		echo $viewHandler->handlePage($pageId,$parameters);
	} catch (AccessDeniedException $e) {
		// show log-in form for user
		if ($website->getUser()->getRole() == ROLE_GUEST) {
			$website->addFrontMessage(new FrontMessage(MESSAGE_TYPE_ERROR,
					$e->getMessage(),
					''));
			echo $viewHandler->handlePage('login',$parameters);
		} else {
			renderErrorPage($website,$i18n,$viewHandler,$e->getMessage(),$parameters);
		}
	} catch (Exception $e) {
		renderErrorPage($website,$i18n,$viewHandler,$e->getMessage(),$parameters);
	}
}
function renderErrorPage($website,$i18n,$viewHandler,$message,$parameters) {
	$parameters['title'] = $message;
	$parameters['message'] = '';
	echo $website->getTemplateEngine($i18n,$viewHandler)->loadTemplate('error')->render($parameters);
}
