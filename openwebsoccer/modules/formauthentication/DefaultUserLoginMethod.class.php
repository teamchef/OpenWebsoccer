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
* This Version called "OpenWebsoccer" is a advanced modification
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
defined('OpenWebsoccer') or header('location: ../../index.php');
/**
 * Default login method which hashes password and compares credentials with internal data base table.
 * Also supports sending a new password.
 */
class DefaultUserLoginMethod
{
	private $_websoccer;
	private $_db;
	/**
	 * Creates instance.
	 * @param WebSoccer $website Application context.
	 * @param DbConnection $db DB connection.
	 */
	public function __construct(WebSoccer $website, DbConnection $db)
	{
		$this->_websoccer = $website;
		$this->_db = $db;
	}
	public function authenticateWithEmail($email, $password)
	{
		return $this->authenticate('UPPER(email)', strtoupper($email), $password);
	}
	public function authenticateWithUsername($nick, $password)
	{
		return $this->authenticate('nick', $nick, $password);
	}
	private function authenticate($column, $loginstr, $password)
	{
		$fromTable = $this->_websoccer->getConfig('db_prefix') .'_user';
		// get user data
		$columns = 'id, passwort, passwort_neu, passwort_salt';
		$wherePart = $column . ' = \'%s\' AND status = 1';
		$parameter = $loginstr;
		$result = $this->_db->querySelect($columns, $fromTable, $wherePart, $parameter);
		$userdata = $result->fetch_array();
		$result->free();
		// user does not exist
		if (!$userdata['id']) {
			return FALSE;
		}
		// check password
		$inputPassword = SecurityUtil::hashPassword($password, $userdata['passwort_salt']);
		if ($inputPassword != $userdata['passwort'] && $inputPassword != $userdata['passwort_neu']) {
			return FALSE;
		}
		// update password after a generated one
		if ($userdata['passwort_neu'] == $inputPassword) {
			$columns = array('passwort' => $inputPassword, 'passwort_neu_angefordert' => 0, 'passwort_neu' => '');
			$whereCondition = 'id = %d';
			$parameter = $userdata['id'];
			$this->_db->queryUpdate($columns, $fromTable, $whereCondition, $parameter);
		}
		return $userdata['id'];
	}
}
