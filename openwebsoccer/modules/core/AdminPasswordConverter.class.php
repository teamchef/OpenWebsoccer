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
* This Version called "OpenWebsoccer" is a advanced modifikation
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
defined('OpenWebsoccer') or header('location: ../../index.php');
/**
 * Handles admin user passwords.
 */
class AdminPasswordConverter extends BaseConverter
{
	public function toDbValue($value)
	{
		if (isset($_POST['id']) && $_POST['id']) {
			$db = DbConnection::getInstance();
			$columns = 'passwort, passwort_salt';
			$fromTable = $this->_websoccer->getConfig('db_prefix') .'_admin';
			$whereCondition = 'id = %d';
			$result = $db->querySelect($columns, $fromTable, $whereCondition, $_POST['id'], 1);
			$admin = $result->fetch_array();
			$result->free();

				$passwort = $admin['passwort'];
		} else {
			$passwort = SecurityUtil::hashPassword($value, '');
		}
		return $passwort;
	}
}