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
class SendShoutBoxMessageController extends BaseModel
{
	FUNCTION __construct($i18n,$websoccer,$db)
	{
		parent::__construct($db,$i18n,$websoccer);
	}
	FUNCTION executeAction($parameters)
	{
		$userId = $this->_websoccer->getUser()->id;
		$message = $parameters['msgtext'];
		$matchId = $parameters['id'];
		$date = $this->_websoccer->getNowAsTimestamp();
		$fromTable = $this->_websoccer->getConfig('db_prefix') . '_shoutmessage';
		$this->_db->queryInsert([
			'user_id' => $userId,
			'message' => $message,
			'created_date' => $date,
			'match_id' => $matchId
		],$fromTable);
		// delete old messages
		if (!isset($_SESSION['msgdeleted'])) {
			// delete messages which are older than 14 days
			$threshold = $date - 24 * 3600 * 14;
			$this->_db->queryDelete($fromTable,'created_date < %d',$threshold);
			$_SESSION['msgdeleted'] = 1;
		}
		return NULL;
	}
}
