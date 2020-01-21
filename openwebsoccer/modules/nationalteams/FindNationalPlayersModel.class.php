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
class FindNationalPlayersModel extends BaseModel
{
	FUNCTION renderView()
	{
		return $this->_websoccer->getConfig("nationalteams_enabled");
	}
	FUNCTION getTemplateParameters()
	{
		// get team info
		$teamId = NationalteamsDataService::getNationalTeamManagedByCurrentUser($this->_websoccer,$this->_db);
		if (!$teamId) {
			throw new Exception($this->_i18n->getMessage("nationalteams_user_requires_team"));
		}
		$result = $this->_db->querySelect("name",$this->_websoccer->getConfig("db_prefix") . "_verein","id = %d",$teamId);
		$team = $result->fetch_array();
		$result->free();
		// query players
		$firstName = $this->_websoccer->getRequestParameter("fname");
		$lastName = $this->_websoccer->getRequestParameter("lname");
		$position = $this->_websoccer->getRequestParameter("position");
		$mainPosition = $this->_websoccer->getRequestParameter("position_main");
		$playersCount = NationalteamsDataService::findPlayersCount($this->_websoccer,$this->_db,$team["name"],$teamId,
				$firstName,$lastName,$position,$mainPosition);
		// setup paginator
		$eps = $this->_websoccer->getConfig("entries_per_page");
		$paginator = new Paginator($playersCount,$eps,$this->_websoccer);
		$paginator->addParameter("fname",$firstName);
		$paginator->addParameter("lname",$lastName);
		$paginator->addParameter("position",$position);
		$paginator->addParameter("position_main",$mainPosition);
		$paginator->addParameter("search","true");
		// get players records
		if ($playersCount > 0) {
			$players = NationalteamsDataService::findPlayers($this->_websoccer,$this->_db,$team["name"],$teamId,
				$firstName,$lastName,$position,$mainPosition,$paginator->getFirstIndex(),$eps);
		} else {
			$players = array();
		}
		return array("team_name" => $team["name"],"playersCount" => $playersCount,"players" => $players,"paginator" => $paginator);
	}
}
