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
* This Version called "OpenWebsoccer" is a advanced modifikation
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
// SEC;
class DbSessionManager
{
	private $_db;
	private $_websoccer;
	FUNCTION __construct(DbConnection $db, WebSoccer $websoccer)
	{
		$this->_db = $db;
		$this->_websoccer = $websoccer;
	}
	FUNCTION open($save_path, $session_name)
	{
		return true;
	}
	FUNCTION close()
	{
		return true;
	}
	FUNCTION destroy($sessionId)
	{
		$fromTable = $this->_websoccer->getConfig('db_prefix') . '_session';
		$whereCondition = 'session_id = \'%s\'';
		$this->_db->queryDelete($fromTable, $whereCondition, $sessionId);
		return true;
	}
	FUNCTION read($sessionId)
	{
		$columns = 'expires, session_data';
		$fromTable = $this->_websoccer->getConfig('db_prefix') . '_session';
		$whereCondition = 'session_id = \'%s\'';
		$data = NULL;
		$result = $this->_db->querySelect($columns, $fromTable, $whereCondition, $sessionId);
		if ($result->num_rows > 0) {
			$row = $result->fetch_array();
			// check whether expired
			if ($row['expires'] < $this->_websoccer->getNowAsTimestamp()) {
				$this->destroy($sessionId);
			} else {
				$data = $row['session_data'];
				if ($data == null) {
					$data = '';
				}
			}
		}
		$result->free();
		return $data;
	}
	FUNCTION write($sessionId, $data)
	{
		$lifetime = (int) $this->_websoccer->getConfig('session_lifetime');
		$expiry = $this->_websoccer->getNowAsTimestamp() + $lifetime;
		$fromTable = $this->_websoccer->getConfig('db_prefix') . '_session';
		$columns['session_data'] = $data;
		$columns['expires'] = $expiry;
		// either insert or update
		if ($this->read($sessionId) !== NULL) {
			$whereCondition = 'session_id = \'%s\'';
			$this->_db->queryUpdate($columns, $fromTable, $whereCondition, $sessionId);
		} else {
			$columns['session_id'] = $sessionId;
			$this->_db->queryInsert($columns, $fromTable);
		}
	}
	FUNCTION gc()
	{
		$this->_deleteExpiredSessions();
		return true;
	}
	FUNCTION _deleteExpiredSessions()
	{
		$fromTable = $this->_websoccer->getConfig('db_prefix') . '_session';
		$whereCondition = 'expires < %d';
		$this->_db->queryDelete($fromTable, $whereCondition, $this->_websoccer->getNowAsTimestamp());
	}
}