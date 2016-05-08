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
* This Version called "OpenWebsoccer" is a advanced modification
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
// defined('OpenWebsoccer') or header('location: ../../index.php');
/**
* Core functions and application context state of the current request.
*/
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
	protected function __construct(){
		$this->_isAjaxRequest = FALSE;
	}
	public static function getInstance(){
		if (self::$_instance === NULL) {
			self::$_instance = new WebSoccer();
		}
		return self::$_instance;
	}
	public function getUser(){
		if ($this->_user === null) {
			$this->_user = new User();
		}
		return $this->_user;
	}
	public function getConfig($name){
		global $conf;
		if (!isset($conf[$name])) {
			throw new Exception('Kofigurationseintrag nicht vorhanden: ' . $name);
		}
		return $conf[$name];
	}
	public function getAction($id){
		global $action;
		if (!isset($action[$id])) {
			throw new Exception('Action wurde nicht gefunden: ' . $id);
		}
		return $action[$id];
	}
	public function getSkin(){
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
	public function getPageId(){
		return $this->_pageId;
	}
	public function setPageId($pageId){
		$this->_pageId = $pageId;
	}
	public function getTemplateEngine($i18n, ViewHandler $viewHandler = null){
		if ($this->_templateEngine === NULL) {
			$this->_templateEngine = new TemplateEngine($this, $i18n, $viewHandler);
		}
		return $this->_templateEngine;
	}
	public function getRequestParameter($name){
		if (isset($_REQUEST[$name])) {
			$value = trim($_REQUEST[$name]);
			if ($value) {
				return $value;
			}
		}
		return NULL;
	}
	public function getInternalUrl($pageId = null, $queryString = '', $fullUrl = FALSE){
		if ($pageId === null) {
			$pageId = $this->getPageId();
		}
		if ($queryString) {
			$queryString = '&' . $queryString;
		}
		if ($fullUrl) {
			$url = $this->getConfig('homepage') . $this->getConfig('context_root');
			// do not provide full path to home page until required, in order to improve SEO.
			if ($pageId !== 'home' || $queryString) {
				$url .= '/?page=' . $pageId . $queryString;
			}
		} else {
			$url = $this->getConfig('context_root') . '/?page=' . $pageId . $queryString;
		}
		return $url;
	}
	public function getInternalActionUrl($actionId, $queryString = '', $pageId = null, $fullUrl = FALSE){
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
	public function getFormattedDate($timestamp = null){
		if ($timestamp === null) {
			$timestamp = $this->getNowAsTimestamp();
		}
		return date($this->getConfig('date_format'), $timestamp);
	}
	public function getFormattedDatetime($timestamp, I18n $i18n = null){
		if ($timestamp === null) {
			$timestamp = $this->getNowAsTimestamp();
		}
		if ($i18n !== null) {
			$dateWord = StringUtil::convertTimestampToWord($timestamp, $this->getNowAsTimestamp(), $i18n);
			if ($dateWord) {
				return $dateWord . ', ' . date($this->getConfig('time_format'), $timestamp);
			}
		}
		return date($this->getConfig('datetime_format'), $timestamp);
	}
	public function getNowAsTimestamp(){
		return time() + $this->getConfig('time_offset');
	}
	public function resetConfigCache(){
		mkdir('./cache', 0700);
		$i18n = I18n::getInstance($this->getConfig('supported_languages'));
		$cacheBuilder = new ConfigCacheFileWriter($i18n->getSupportedLanguages());
		$cacheBuilder->buildConfigCache();
	}
	public function addFrontMessage(FrontMessage $message){
		$this->_frontMessages[] = $message;
	}
	public function getFrontMessages(){
		if ($this->_frontMessages === null) {
			$this->_frontMessages = [];
		}
		return $this->_frontMessages;
	}
	public function setAjaxRequest($isAjaxRequest){
		$this->_isAjaxRequest = $isAjaxRequest;
	}
	public function isAjaxRequest(){
		return $this->_isAjaxRequest;
	}
	public function getContextParameters(){
		if ($this->_contextParameters === null) {
			$this->_contextParameters = [];
		}
		return $this->_contextParameters;
	}
	public function addContextParameter($name, $value){
		if ($this->_contextParameters === null) {
			$this->_contextParameters = [];
		}
		$this->_contextParameters[$name] = $value;
	}
}
