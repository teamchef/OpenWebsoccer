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
class PasswordValidator
{
	private $_i18n;
	private $_websoccer;
	private $_value;
	FUNCTION __construct($i18n,$websoccer,$value) {
		$this->_i18n = $i18n;
		$this->_websoccer = $websoccer;
		$this->_value = $value;
	}
	FUNCTION isValid()
	{
		// must contain at least one letter and one number
		if (!preg_match('/[A-Za-z]/',$this->_value) || !preg_match('/[0-9]/',$this->_value)) {
			return FALSE;
		}
		// validate against blacklist.
		// see also http://splashdata.com/splashid/worst-passwords/index.htm
		$blacklist = ['test123','abc123','passw0rd','passw0rt'];
		if (in_array(strtolower($this->_value),$blacklist)) {
			return FALSE;
		}
		return TRUE;
	}
	FUNCTION getMessage()
	{
		return $this->_i18n->getMessage('validation_error_password');
	}
}
