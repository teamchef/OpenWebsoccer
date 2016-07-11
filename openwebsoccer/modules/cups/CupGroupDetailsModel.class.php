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
class CupGroupDetailsModel extends BaseModel
{
	FUNCTION getTemplateParameters() {
		$cupRoundId = $this->_websoccer->getRequestParameter("roundid");
		$cupGroup = $this->_websoccer->getRequestParameter("group");
		$columns = "C.name AS cup_name, R.name AS round_name";
		$fromTable = $this->_websoccer->getConfig("db_prefix") . "_cup_round AS R";
		$fromTable .= " INNER JOIN " . $this->_websoccer->getConfig("db_prefix") . "_cup AS C ON C.id = R.cup_id";
		$result = $this->_db->querySelect($columns, $fromTable, "R.id = %d", $cupRoundId);
		$round = $result->fetch_array();
		$result->free();
		$matches = MatchesDataService::getMatchesByCupRoundAndGroup($this->_websoccer, $this->_db, $round["cup_name"], $round["round_name"], $cupGroup);
		return array("matches" => $matches, "groupteams" => CupsDataService::getTeamsOfCupGroupInRankingOrder($this->_websoccer, $this->_db, $cupRoundId, $cupGroup));
	}
}