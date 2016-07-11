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
class LeagueDataService
{
	FUNCTION getLeagueById(WebSoccer $websoccer, DbConnection $db, $leagueId) {
		$fromTable = $websoccer->getConfig("db_prefix") . "_liga AS L";
		$whereCondition = "L.id = %d";
		$parameters = $leagueId;
		$columns["L.id"] = "league_id";
		$columns["L.name"] = "league_name";
		$columns["L.kurz"] = "league_short";
		$columns["L.land"] = "league_country";
		$leagueinfos = $db->queryCachedSelect($columns, $fromTable, $whereCondition, $parameters, 1);
		$league = (isset($leagueinfos[0])) ? $leagueinfos[0] : array();
		return $league;
	}
	FUNCTION getLeaguesSortedByCountry(WebSoccer $websoccer, DbConnection $db) {
		$fromTable = $websoccer->getConfig("db_prefix") . "_liga AS L";
		$whereCondition = "1 ORDER BY league_country ASC, league_name ASC";
		$columns["L.id"] = "league_id";
		$columns["L.name"] = "league_name";
		$columns["L.kurz"] = "league_short";
		$columns["L.land"] = "league_country";
		return $db->queryCachedSelect($columns, $fromTable, $whereCondition);
	}
	FUNCTION countTotalLeagues(WebSoccer $websoccer, DbConnection $db) {
		$result = $db->querySelect("COUNT(*) AS hits", $websoccer->getConfig("db_prefix") . "_liga", "1=1");
		$leagues = $result->fetch_array();
		$result->free();
		if (isset($leagues["hits"])) {
			return $leagues["hits"];
		}
		return 0;
	}
}