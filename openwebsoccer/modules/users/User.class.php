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
define('ROLE_GUEST','guest');
define('ROLE_USER','user');
define('USER_STATUS_ENABLED',1);
define('USER_STATUS_UNCONFIRMED',2);
class User
{
	FUNCTION __construct()
	{
		$this->premiumBalance = 0;
		$this->_isAdmin = NULL;
	}
	FUNCTION getRole()
	{
		if ($this->id === null) {
			return ROLE_GUEST;
		} else {
			return ROLE_USER;
		}
	}
	FUNCTION getClubId($websoccer = null,$db = null)
	{
		if ($this->id !== null && $this->_clubId === null) {
			// get from session
			if (isset($_SESSION['clubid'])) {
				$this->_clubId = $_SESSION['clubid'];
			} else if ($websoccer !== null && $db !== null) {
				// default implementation: get first available club which is not managed as interim manager (user might have several clubs)
				$fromTable = $websoccer->getConfig('db_prefix') . '_verein';
				$whereCondition = 'status = 1 AND user_id = %d AND nationalteam != \'1\' ORDER BY interimmanager DESC';
				$columns = 'id';
				$result = $db->querySelect($columns,$fromTable,$whereCondition,$this->id,1);
				$club = $result->fetch_array();
				$result->free();
				if ($club) {
					$this->setClubId($club['id']);
				}
			}
		}
		return $this->_clubId;
	}
	FUNCTION setClubId($clubId)
	{
		$_SESSION['clubid'] = $clubId;
		$this->_clubId = $clubId;
	}
	FUNCTION getProfilePicture()
	{
		if ($this->_profilePicture === null) {
			if (strlen($this->email)) {
				$this->_profilePicture = UsersDataService::getUserProfilePicture(WebSoccer::getInstance(),null,$this->email);
			} else {
				$this->_profilePicture = '';
			}
		}
		return $this->_profilePicture;
	}
	FUNCTION setProfilePicture($websoccer,$fileName)
	{
		if (strlen($fileName)) {
			$this->_profilePicture = UsersDataService::getUserProfilePicture($websoccer,$fileName,null);
		}
	}
	FUNCTION isAdmin()
	{
		if ($this->_isAdmin === NULL) {
			$websoccer = WebSoccer::getInstance();
			$db = DbConnection::getInstance();
			$result = $db->querySelect('id',$websoccer->getConfig('db_prefix') . '_admin','email = \'%s\' AND r_admin = \'1\'',$this->email);
			if ($result->num_rows) {
				$this->_isAdmin = TRUE;
			} else {
				$this->_isAdmin = FALSE;
			}
			$result->free();
		}
		return $this->_isAdmin;
	}
}
