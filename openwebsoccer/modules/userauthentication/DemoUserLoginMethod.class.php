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
class DemoUserLoginMethod
{
	private $_websoccer;
	private $_db;
	FUNCTION __construct($website,$db)
	{
		$this->_websoccer = $website;
		$this->_db = $db;
	}
	FUNCTION authenticateWithEmail($email,$password)
	{
		// connect to a data base
		// Note: If your source application shares the same data base,you can simply use $this->_db,rather than open another connection.
		$mysqli = new mysqli($this->_websoccer->getConfig('db_host'),
							 $this->_websoccer->getConfig('db_user'),
							 $this->_websoccer->getConfig('db_passwort'),
							 $this->_websoccer->getConfig('db_name'));
		// get user from your source table
		$escapedEMail = $mysqli->real_escape_string($email);
		$dbresult = $mysqli->query('SELECT password FROM mydummy_table WHERE email = \'' . $escapedEMail . '\'');
		if (!$dbresult) {
			throw new Exception('Database Query Error: ' . $mysqli->error);
		}
		$myUser = $dbresult->fetch_array();
		$dbresult->free();
		$mysqli->close();
		// could not find user
		if (!$myUser) {
			return FALSE;
		}
		// check is password is correct (in this sample case a simple MD5 hashing is applied).
		if ($myUser['password'] !== md5($password)) {
 			return FALSE;
		}
		// user is valid user according to custom authentication check. Now test if user already exists in local DB and return its ID.
		$existingUserId = UsersDataService::getUserIdByEmail($this->_websoccer,$this->_db,strtolower($email));
		if ($existingUserId > 0) {
			return $existingUserId;
		}
		// if user does not exist,create a new one. Nick name can be entered by user later.
		return UsersDataService::createLocalUser($this->_websoccer,$this->_db,null,$email);
	}
	FUNCTION authenticateWithUsername()
	{
		// we can also just throw an exception if we do not support log-in with user name (because it
		// might not make sense at all)
		throw new Exception('Unsupported action.');
	}
}
