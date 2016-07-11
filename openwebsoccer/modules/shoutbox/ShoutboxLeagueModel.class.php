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
class ShoutboxLeagueModel extends BaseModel
{
	FUNCTION renderView()
	{
		$this->_leagueId = $this->_websoccer->getRequestParameter('id');
		return ($this->_leagueId !== NULL);
	}
	FUNCTION getTemplateParameters()
	{
		$messages = [];
		// query latest shoutbox messages from the same competition
		$tablePrefix = $this->_websoccer->getConfig('db_prefix');
		$fromTable = $tablePrefix . '_shoutmessage AS MESSAGE';
		$fromTable .= ' INNER JOIN ' . $tablePrefix . '_user AS U ON U.id = MESSAGE.user_id';
		$fromTable .= ' INNER JOIN ' . $tablePrefix . '_spiel AS M ON M.id = MESSAGE.match_id';
		$fromTable .= ' INNER JOIN ' . $tablePrefix . '_verein AS HOME ON HOME.id = M.home_verein';
		$fromTable .= ' INNER JOIN ' . $tablePrefix . '_verein AS GUEST ON GUEST.id = M.gast_verein';
		$fromTable .= ' INNER JOIN ' . $tablePrefix . '_saison AS SEASON ON (M.saison_id = SEASON.id)';
		$fromTable .= ' INNER JOIN ' . $tablePrefix . '_liga AS L ON (L.id = SEASON.liga_id)';
		$whereCondition = 'L.id = %d ORDER BY MESSAGE.created_date DESC';
		$columns = [
			'MESSAGE.id' => 'message_id',
			'MESSAGE.message' => 'message',
			'MESSAGE.created_date' => 'date',
			'U.id' => 'user_id',
			'U.nick' => 'user_name',
			'HOME.name' => 'home_name',
			'GUEST.name' => 'guest_name',
			'M.id' => 'match_id'
		];
		$result = $this->_db->querySelect($columns, $fromTable, $whereCondition, $this->_leagueId, 10);
		while ($message = $result->fetch_array()) {
			$messages[] = $message;
		}
		$result->free();
		return ['messages' => $messages, 'hidesubmit' => TRUE];
	}
}