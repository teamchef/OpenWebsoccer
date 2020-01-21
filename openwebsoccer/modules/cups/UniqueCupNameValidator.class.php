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
class UniqueCupNameValidator
{
	FUNCTION __construct($i18n,$websoccer,$value) {
		$this->_i18n = $i18n;
		$this->_websoccer = $websoccer;
		$this->_value = $value;
	}
	FUNCTION isValid() {
		$db = DbConnection::getInstance();
		// any cup with same name (but different ID)?
		$result = $db->querySelect("id",$this->_websoccer->getConfig("db_prefix") . "_cup","name = '%s'",$this->_value,1);
		$cups = $result->fetch_array();
		$result->free();
		if (isset($cups["id"]) && (!isset($_POST["id"]) || $_POST["id"] !== $cups["id"])) {
			return FALSE;
		}
		// any match using the name for cup name?
		$result = $db->querySelect("COUNT(*) AS hits",$this->_websoccer->getConfig("db_prefix") . "_spiel","pokalname = '%s'",$this->_value);
		$matches = $result->fetch_array();
		$result->free();
		if ($matches["hits"] && !isset($_POST["id"])) {
			return FALSE;
		}
		return TRUE;
	}
	FUNCTION getMessage() {
		return $this->_i18n->getMessage("validation_error_uniquecupname");
	}
}
