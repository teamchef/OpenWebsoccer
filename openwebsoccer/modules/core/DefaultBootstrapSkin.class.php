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
class DefaultBootstrapSkin
{
	protected $_websoccer;
	FUNCTION __construct($websoccer)
	{
		$this->_websoccer = $websoccer;
	}
	FUNCTION getTemplatesSubDirectory()
	{
		return 'default';
	}
	FUNCTION getCssSources()
	{
		if ($this->_websoccer->getConfig('cdn_root_set')) {
			$files[] = $this->_websoccer->getConfig('cdn_root').'/css/openwebsoccer.min.css';
			$files[] = $this->_websoccer->getConfig('cdn_root').'/css/jquery.simple-dtpicker.css';
		} else {
			$files[] = $this->_websoccer->getConfig('context_root').'/css/openwebsoccer.min.css';
			// $files[] = $this->_websoccer->getConfig('context_root').'/css/jquery.simple-dtpicker.css';
			$files[] = $this->_websoccer->getConfig('context_root').'/css/bootstrap-timepicker.min.css';
			$files[] = $this->_websoccer->getConfig('context_root').'/css/datepicker.css';
			$files[] = $this->_websoccer->getConfig('context_root').'/css/friendly.css';
		}
		return $files;
	}
	FUNCTION getJavaScriptSources()
	{
		if ($this->_websoccer->getConfig('cdn_root_set')) {
			$files[] = $this->_websoccer->getConfig('cdn_root').'/js/websoccer.min.js';
			$files[] = $this->_websoccer->getConfig('cdn_root').'/js/flot/jquery.flot.min.js';
			$files[] = $this->_websoccer->getConfig('cdn_root').'/js/flot/jquery.flot.pie.min.js';
			$files[] = $this->_websoccer->getConfig('cdn_root').'/js/jquery.simple-dtpicker.js';
		} else {
			$files[] = $this->_websoccer->getConfig('context_root').'/js/websoccer.min.js';
			$files[] = $this->_websoccer->getConfig('context_root').'/js/flot/jquery.flot.min.js';
			$files[] = $this->_websoccer->getConfig('context_root').'/js/flot/jquery.flot.pie.min.js';
			// $files[] = $this->_websoccer->getConfig('context_root').'/js/jquery.simple-dtpicker.js';
			$files[] = $this->_websoccer->getConfig('context_root').'/js/friendly.js';
			$files[] = $this->_websoccer->getConfig('context_root').'/js/bootstrap-timepicker.min.js';
			$files[] = $this->_websoccer->getConfig('context_root').'/js/bootstrap-datepicker.de.js';
			$files[] = $this->_websoccer->getConfig('context_root').'/js/bootstrap-datepicker.js';
		}
		return $files;
	}
	FUNCTION getTemplate($templateName)
	{
		return $templateName .'.twig';
	}
	FUNCTION getImage($fileName)
	{
		if ($this->_websoccer->getConfig('cdn_root_set')) {
			$files[] = $this->_websoccer->getConfig('cdn_root').'/img/' . $fileName;
		} else {
			$files[] = $this->_websoccer->getConfig('context_root').'/img/' . $fileName;
		}
		return FALSE;
	}
	FUNCTION __toString()
	{
		return 'DefaultBootstrapSkin';
	}
}