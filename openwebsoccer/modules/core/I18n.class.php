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
* Base Version: OpenWebSoccer-Sim 5.2.4-Snapshot vom 21. Juni 2015
*
* This Version called "OpenWebsoccer" is a advanced modifikation
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
// SEC;
define('PAGE_NAV_LABEL_SUFFIX', '_navlabel');
define('LANG_SESSION_PARAM', 'lang');
class I18n
{
	private static $_instance;
	private $_currentLanguage;
	private $_supportedLanguages;
	FUNCTION getInstance($supportedLanguages)
	{
		if(self::$_instance == NULL) {
			self::$_instance = new I18n($supportedLanguages);
		}
		return self::$_instance;
	}
	FUNCTION getCurrentLanguage()
	{
		if ($this->_currentLanguage == null) {
			// from session
			if (isset($_SESSION[LANG_SESSION_PARAM])) {
				$lang = $_SESSION[LANG_SESSION_PARAM];
			// from browser
			}elseif (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
				$lang = strtolower(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
			} else {
				// return default language
				$lang = $this->_supportedLanguages[0];
			}
			if (!in_array($lang, $this->_supportedLanguages)) {
				$lang = $this->_supportedLanguages[0];
			}
			$this->_currentLanguage = $lang;
		}
		return $this->_currentLanguage;
	}
	FUNCTION setCurrentLanguage($language)
	{
		if ($language == $this->_currentLanguage) {
			return;
		}
		$lang = strtolower($language);
		if (!in_array($lang, $this->_supportedLanguages)) {
			$lang = $this->getCurrentLanguage();
		}
		$_SESSION[LANG_SESSION_PARAM] = $lang;
		$this->_currentLanguage = $lang;
	}
	FUNCTION getMessage($messageKey, $paramaters = null)
	{
		global $msg;
		if (!$this->hasMessage($messageKey)) {
			return '???' . $messageKey .'???';
		}
		$message = stripslashes($msg[$messageKey]);
		if ($paramaters != null) {
			$message = sprintf($message, $paramaters);
		}
		return $message;
	}
	FUNCTION hasMessage($messageKey)
	{
		global $msg;
		return isset($msg[$messageKey]);
	}
	FUNCTION getNavigationLabel($pageId)
	{
		return $this->getMessage($pageId . PAGE_NAV_LABEL_SUFFIX);
	}
	FUNCTION getSupportedLanguages()
	{
		return $this->_supportedLanguages;
	}
	FUNCTION __construct($supportedLanguages)
	{
		$this->_supportedLanguages = array_map('trim', explode(',', $supportedLanguages));
	}
}