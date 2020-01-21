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
class WebSoccer
{
	private static $_instance;
	private $_skin;
	private $_pageId;
	private $_templateEngine;
	private $_frontMessages;
	private $_isAjaxRequest;
	private $_user;
	private $_contextParameters;
	FUNCTION __construct(){
		$this->_isAjaxRequest = FALSE;
	}
	FUNCTION getInstance(){
		if (self::$_instance === NULL) {
			self::$_instance = new WebSoccer();
		}
		return self::$_instance;
	}
	FUNCTION getUser(){
		if ($this->_user === null) {
			$this->_user = new User();
		}
		return $this->_user;
	}
	FUNCTION getConfig($name){
		global $conf;
		if (!isset($conf[$name])) {
			throw new Exception('Kofigurationseintrag nicht vorhanden: ' . $name);
		}
		return $conf[$name];
	}
	FUNCTION getAction($id){
		global $action;
		if (!isset($action[$id])) {
			throw new Exception('Action wurde nicht gefunden: ' . $id);
		}
		return $action[$id];
	}
	FUNCTION getSkin(){
		if ($this->_skin === NULL) {
			$skinName = $this->getConfig('skin');
			if (class_exists($skinName)) {
				$this->_skin = new $skinName($this);
			} else {
				throw new Exception('Der konfigurierter Skin \'' . $skinName . '\' wurde nicht gefunden. Schauen sie in den Systemeinstellungen nach !');
			}
		}
		return $this->_skin;
	}
	FUNCTION getPageId(){
		return $this->_pageId;
	}
	FUNCTION setPageId($pageId){
		$this->_pageId = $pageId;
	}
	FUNCTION getTemplateEngine($i18n,ViewHandler $viewHandler = null){
		if ($this->_templateEngine === NULL) {
			$this->_templateEngine = new TemplateEngine($this,$i18n,$viewHandler);
		}
		return $this->_templateEngine;
	}
	FUNCTION getRequestParameter($name){
		if (isset($_REQUEST[$name])) {
			$value = trim($_REQUEST[$name]);
			if ($value) {
				return $value;
			}
		}
		return NULL;
	}
	FUNCTION getInternalUrl($pageId = null,$queryString = '',$fullUrl = FALSE){
		if ($pageId === null) {
			$pageId = $this->getPageId();
		}
		if ($queryString) {
			$queryString = '&' . $queryString;
		}
		if ($fullUrl) {
			$url = $this->getConfig('homepage') . $this->getConfig('context_root');
			// do not provide full path to home page until required,in order to improve SEO.
			if ($pageId !== 'home' || $queryString) {
				$url .= '/?page=' . $pageId . $queryString;
			}
		} else {
			$url = $this->getConfig('context_root') . '/?page=' . $pageId . $queryString;
		}
		return $url;
	}
	FUNCTION getInternalActionUrl($actionId,$queryString = '',$pageId = null,$fullUrl = FALSE){
		if ($pageId === null) {
			$pageId = $this->getRequestParameter('page');
		}
		if ($queryString) {
			$queryString = '&' . $queryString;
		}
		$url = $this->getConfig('context_root') . '/?page=' . $pageId . $queryString . '&action=' . $actionId;
		if ($fullUrl) {
			$url = $this->getConfig('homepage') . $url;
		}
		return $url;
	}
	FUNCTION getFormattedDate($timestamp = null){
		if ($timestamp === null) {
			$timestamp = $this->getNowAsTimestamp();
		}
		return date($this->getConfig('date_format'),$timestamp);
	}
	FUNCTION getFormattedDatetime($timestamp,I18n $i18n = null){
		if ($timestamp === null) {
			$timestamp = $this->getNowAsTimestamp();
		}
		if ($i18n !== null) {
			$dateWord = StringUtil::convertTimestampToWord($timestamp,$this->getNowAsTimestamp(),$i18n);
			if ($dateWord) {
				return $dateWord . ',' . date($this->getConfig('time_format'),$timestamp);
			}
		}
		return date($this->getConfig('datetime_format'),$timestamp);
	}
	FUNCTION getNowAsTimestamp(){
		return time() + $this->getConfig('time_offset');
	}
	FUNCTION resetConfigCache(){
		mkdir('/cache',0700);
		$i18n = I18n::getInstance($this->getConfig('supported_languages'));
		$cacheBuilder = new ConfigCacheFileWriter($i18n->getSupportedLanguages());
		$cacheBuilder->buildConfigCache();
	}
	FUNCTION addFrontMessage(FrontMessage $message){
		$this->_frontMessages[] = $message;
	}
	FUNCTION getFrontMessages(){
		if ($this->_frontMessages === null) {
			$this->_frontMessages = [];
		}
		return $this->_frontMessages;
	}
	FUNCTION setAjaxRequest($isAjaxRequest){
		$this->_isAjaxRequest = $isAjaxRequest;
	}
	FUNCTION isAjaxRequest(){
		return $this->_isAjaxRequest;
	}
	FUNCTION getContextParameters(){
		if ($this->_contextParameters === null) {
			$this->_contextParameters = [];
		}
		return $this->_contextParameters;
	}
	FUNCTION addContextParameter($name,$value){
		if ($this->_contextParameters === null) {
			$this->_contextParameters = [];
		}
		$this->_contextParameters[$name] = $value;
	}
}
