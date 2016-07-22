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
class CupsDataService
{
	FUNCTION getTeamsOfCupGroupInRankingOrder($websoccer,$db,$roundId,$groupName) {
		$fromTable = $websoccer->getConfig("db_prefix") . "_cup_round_group AS G";
		$fromTable .= " INNER JOIN " . $websoccer->getConfig("db_prefix") . "_verein AS T ON T.id = G.team_id";
		$fromTable .= " LEFT JOIN " . $websoccer->getConfig("db_prefix") . "_user AS U ON U.id = T.user_id";
		$whereCondition = "G.cup_round_id = %d AND G.name = '%s'";
		// order (do not use "Direktvergleich",but compare total score so far)
		$whereCondition .= "ORDER BY G.tab_points DESC,(G.tab_goals - G.tab_goalsreceived) DESC,G.tab_wins DESC,T.st_punkte DESC";
		$parameters = array($roundId,$groupName);
		$columns["T.id"] = "id";
		$columns["T.name"] = "name";
		$columns["T.user_id"] = "user_id";
		$columns["U.nick"] = "user_name";
		$columns["G.tab_points"] = "score";
		$columns["G.tab_goals"] = "goals";
		$columns["G.tab_goalsreceived"] = "goals_received";
		$columns["G.tab_wins"] = "wins";
		$columns["G.tab_draws"] = "draws";
		$columns["G.tab_losses"] = "defeats";
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$parameters);
		$teams = array();
		while($team = $result->fetch_array()) {
			$teams[] = $team;
		}
		$result->free();
		return $teams;
	}
}
