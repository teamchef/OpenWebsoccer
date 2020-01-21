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
class RemoveNationalPlayerController extends BaseModel
{
	FUNCTION __construct($i18n,$websoccer,$db)
	{
		parent::__construct($db,$i18n,$websoccer);
	}
	FUNCTION executeAction($parameters)
	{
		if (!$this->_websoccer->getConfig("nationalteams_enabled")) {
			return NULL;
		}
		// get team info
		$teamId = NationalteamsDataService::getNationalTeamManagedByCurrentUser($this->_websoccer,$this->_db);
		if (!$teamId) {
			throw new Exception($this->_i18n->getMessage("nationalteams_user_requires_team"));
		}
		$result = $this->_db->querySelect("name",$this->_websoccer->getConfig("db_prefix") . "_verein","id = %d",$teamId);
		$team = $result->fetch_array();
		$result->free();
		// get player info
		$fromTable = $this->_websoccer->getConfig("db_prefix") . "_spieler";
		$result = $this->_db->querySelect("nation",$fromTable,"id = %d",$parameters["id"]);
		$player = $result->fetch_array();
		$result->free();
		if (!$player) {
			throw new Exception($this->_i18n->getMessage(MSG_KEY_ERROR_PAGENOTFOUND));
		}
		// check if from same nation. If not,user most probably tries to cheat,hence i18n not important.
		if ($player["nation"] != $team["name"]) {
			throw new Exception("Player is from different nation.");
		}
		// remove from team team
		$this->_db->queryDelete($this->_websoccer->getConfig("db_prefix") . "_nationalplayer","player_id = %d AND team_id = %d",array($parameters["id"],$teamId));
		// create success message
		$this->_websoccer->addFrontMessage(new FrontMessage(MESSAGE_TYPE_SUCCESS,$this->_i18n->getMessage("nationalteams_removeplayer_success"),""));
		return "nationalteam";
	}
}
