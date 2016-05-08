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
defined('OpenWebsoccer') or header('location: ../../index.php');
class ProfileModel extends BaseModel
{
	public function getTemplateParameters()
	{
		$fromTable = $this->_websoccer->getConfig('db_prefix') . '_user';
		$user = $this->_websoccer->getUser();
		$columns['name'] = 'realname';
		$columns['wohnort'] = 'place';
		$columns['land'] = 'country';
		$columns['geburtstag'] = 'birthday';
		$columns["beruf"] = "occupation";
		$columns["interessen"] = "interests";
		$columns["lieblingsverein"] = "favorite_club";
		$columns["homepage"] = "homepage";
		$columns["c_hideinonlinelist"] = "c_hideinonlinelist";
		$whereCondition = "id = %d";
		$result = $this->_db->querySelect($columns, $fromTable, $whereCondition, $user->id, 1);
		$userinfo = $result->fetch_array();
		$result->free();
		if (!strlen($userinfo["birthday"]) || substr($userinfo["birthday"], 0, 4) == "0000") {
			$userinfo["birthday"] = "";
		} else {
			$userinfo["birthday"] = DateTime::createFromFormat("Y-m-d", $userinfo["birthday"])->format($this->_websoccer->getConfig("date_format"));
		}
		foreach ($columns as $dbColumn) {
			if ($this->_websoccer->getRequestParameter($dbColumn)) {
				$userinfo[$dbColumn] = $this->_websoccer->getRequestParameter($dbColumn);
			}
		}
		return array("user" => $userinfo);
	}
}
