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
class SelectTeamController extends BaseModel
{
	FUNCTION __construct($i18n, $websoccer, $db)
	{
		parent::__construct($db, $i18n, $websoccer);
	}
	FUNCTION executeAction($parameters)
	{
		$user = $this->_websoccer->getUser();
		$teamId = $parameters['id'];
		// do not do anything is club is already selected
		if ($user->getClubId($this->_websoccer, $this->_db) === $teamId) {
			return;
		}
		// check whether club is one of user's teams
		$fromTable = $this->_websoccer->getConfig('db_prefix') . '_verein';
		$whereCondition = 'id = %d AND user_id = %d AND status = "1" AND nationalteam != "1"';
		$result = $this->_db->querySelect('id', $fromTable, $whereCondition, [$teamId, $user->id]);
		$club = $result->fetch_array();
		$result->free();
		if (!isset($club['id'])) {
			throw new Exception('illegal club ID');
		}
		$user->setClubId($teamId);
		return NULL;
	}
}