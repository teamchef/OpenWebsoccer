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
SEC;
class SaveUsernameController extends BaseModel
{
	FUNCTION __construct($i18n, $websoccer, $db)
	{
		parent::__construct($db, $i18n, $websoccer);
	}
	FUNCTION executeAction($parameters)
	{
		// check if user name is already set
		if (empty($this->_websoccer->getUser()->username)) {
			throw new Exception('user name is already set.');
		}
		// illegal user name?
		$illegalUsernames = explode(',', strtolower(str_replace(', ', ',', $this->_websoccer->getConfig('illegal_usernames'))));
		if (in_array(strtolower($parameters['nick']), $illegalUsernames)) {
			throw new Exception($this->_i18n->getMessage('registration_illegal_username'));
		}
		$fromTable = $this->_websoccer->getConfig('db_prefix') . '_user';
		// check if user name exists
		$wherePart = 'UPPER(nick) = "%s"';
		$result = $this->_db->querySelect('COUNT(*) AS hits', $fromTable, $wherePart, strtoupper($parameters['nick']));
		$rows = $result->fetch_array();
		$result->free();
		if ($rows['hits']) {
			throw new Exception($this->_i18n->getMessage('registration_user_exists'));
		}
		// update user
		$this->_db->queryUpdate(['nick' => $parameters['nick']], $fromTable, 'id = %d', $this->_websoccer->getUser()->id);
		$this->_websoccer->getUser()->username = $parameters['nick'];
		return 'office';
	}
}