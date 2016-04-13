<?php
/******************************************************************
*
* This file is part of OpenWebSoccer-Sim.
*
* OpenWebSoccer-Sim is free software: you can redistribute it
* and/or modify it under the terms of the
* GNU Lesser General Public License
* as published by the Free Software Foundation, either version 3 of
* the License, or any later version.
*
* OpenWebSoccer-Sim is distributed in the hope that it will be
* useful, but WITHOUT ANY WARRANTY; without even the implied
* warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
* See the GNU Lesser General Public License for more details.
*
* You should have received a copy of the GNU Lesser General Public
* License along with OpenWebSoccer-Sim.
* If not, see <http://www.gnu.org/licenses/>.
*
* Author: Ingo Hofmann
* Base Version: OpenWebSoccer-Sim 5.2.3 - 2015
*
* This Version called "OpenWebsoccer" is a advanced modification
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
defined('OpenWebsoccer') or header('location: index.php');
define('PARAM_ACTION', 'action');
define('PARAM_PAGE', 'page');
define('PARAM_BLOCK', 'block');
define('PARAM_PAGENUMBER', 'pageno');
define('MSG_KEY_ERROR_PAGENOTFOUND', 'error_page_not_found');

require(BASE_FOLDER . '/admin/config/global.inc.php');

// load configuration
include(CONFIGCACHE_FILE_FRONTEND);

// log-in user
$authenticatorClasses = explode(',', $website->getConfig('authentication_mechanism'));
foreach ($authenticatorClasses as $authenticatorClass) {
	$authenticatorClass = trim($authenticatorClass);
	if (!class_exists($authenticatorClass)) {
		throw new Exception('Class not found: ' . $authenticatorClass);
	}
	$authenticator = new $authenticatorClass($website);
	$authenticator->verifyAndUpdateCurrentUser($website->getUser());
}

// load i18n messages
$i18n = I18n::getInstance($website->getConfig('supported_languages'));
if ($website->getUser()->language != null) {
	try {
		$i18n->setCurrentLanguage($website->getUser()->language);
	} catch (Exception $e) {
		// ignore and use default language
	}
}
include(sprintf(CONFIGCACHE_MESSAGES, $i18n->getCurrentLanguage()));
include(sprintf(CONFIGCACHE_ENTITYMESSAGES, $i18n->getCurrentLanguage()));

?>
