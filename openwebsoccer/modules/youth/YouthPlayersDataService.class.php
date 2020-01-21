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
class YouthPlayersDataService
{
	FUNCTION getYouthPlayerById(WebSoccer $websoccer,DbConnection $db,I18n $i18n,$playerId)
	{
		$fromTable = $websoccer->getConfig("db_prefix") . "_youthplayer";
		$players = $db->queryCachedSelect("*",$fromTable,"id = %d",$playerId);
		if (!count($players)) {
			throw new Exception($i18n->getMessage("error_page_not_found"));
		}
		return $players[0];
	}
	FUNCTION getYouthPlayersOfTeam(WebSoccer $websoccer,DbConnection $db,$teamId)
	{
		$fromTable = $websoccer->getConfig("db_prefix") . "_youthplayer";
		$whereCondition = "team_id = %d ORDER BY position ASC,lastname ASC,firstname ASC";
		$players = $db->queryCachedSelect("*",$fromTable,$whereCondition,$teamId);
		return $players;
	}
	FUNCTION countYouthPlayersOfTeam(WebSoccer $websoccer,DbConnection $db,$teamId)
	{
		$fromTable = $websoccer->getConfig("db_prefix") . "_youthplayer";
		$result = $db->querySelect("COUNT(*) AS hits",$fromTable,"team_id = %d",$teamId);
		$players = $result->fetch_array();
		$result->free();
		if ($players) {
			return $players["hits"];
		}
		return NULL;
	}
	FUNCTION computeSalarySumOfYouthPlayersOfTeam(WebSoccer $websoccer,DbConnection $db,$teamId)
	{
		$fromTable = $websoccer->getConfig("db_prefix") . "_youthplayer";
		$result = $db->querySelect("SUM(strength) AS strengthsum",$fromTable,"team_id = %d",$teamId);
		$players = $result->fetch_array();
		$result->free();
		if ($players) {
			return $players["strengthsum"] * $websoccer->getConfig("youth_salary_per_strength");
		}
		return NULL;
	}
	FUNCTION getYouthPlayersOfTeamByPosition(WebSoccer $websoccer,DbConnection $db,$clubId,$positionSort = "ASC")
	{
		$columns = "*";
		$fromTable = $websoccer->getConfig("db_prefix") . "_youthplayer";
		$whereCondition = "team_id = %d ORDER BY position ". $positionSort . ",lastname ASC,firstname ASC";
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$clubId,50);
		$players = array();
		while ($player = $result->fetch_array()) {
			$player["position"] = PlayersDataService::_convertPosition($player["position"]);
			$player["player_nationality"] = $player["nation"]; // make compliant with professional matches formation form
			$player["player_nationality_filename"] = PlayersDataService::getFlagFilename($player["nation"]);
			$players[$player["position"]][] = $player;
		}
		$result->free();
		return $players;
	}
	FUNCTION countTransferableYouthPlayers(WebSoccer $websoccer,DbConnection $db,$positionFilter = NULL)
	{
		$fromTable = $websoccer->getConfig("db_prefix") . "_youthplayer";
		$parameters = "";
		$whereCondition = "transfer_fee > 0";
		if ($positionFilter != NULL) {
			$whereCondition .= " AND position = '%s'";
			$parameters = $positionFilter;
		}
		$result = $db->querySelect("COUNT(*) AS hits",$fromTable,$whereCondition,$parameters);
		$players = $result->fetch_array();
		$result->free();
		if ($players) {
			return $players["hits"];
		}
		return NULL;
	}
	FUNCTION getTransferableYouthPlayers(WebSoccer $websoccer,DbConnection $db,$positionFilter = NULL,$startIndex,$entries_per_page)
	{
		$columns = array(
				"P.id" => "player_id",
				"P.firstname" => "firstname",
				"P.lastname" => "lastname",
				"P.position" => "position",
				"P.nation" => "nation",
				"P.transfer_fee" => "transfer_fee",
				"P.age" => "age",
				"P.strength" => "strength",
				"P.st_matches" => "st_matches",
				"P.st_goals" => "st_goals",
				"P.st_assists" => "st_assists",
				"P.st_cards_yellow" => "st_cards_yellow",
				"P.st_cards_yellow_red" => "st_cards_yellow_red",
				"P.st_cards_red" => "st_cards_red",
				"P.team_id" => "team_id",
				"C.name" => "team_name",
				"C.bild" => "team_picture",
				"C.user_id" => "user_id",
				"U.nick" => "user_nick",
				"U.email" => "user_email",
				"U.picture" => "user_picture"
				);
		$fromTable = $websoccer->getConfig("db_prefix") . "_youthplayer AS P";
		$fromTable .= " INNER JOIN " . $websoccer->getConfig("db_prefix") . "_verein AS C ON C.id = P.team_id";
		$fromTable .= " LEFT JOIN " . $websoccer->getConfig("db_prefix") . "_user AS U ON U.id = C.user_id";
		$parameters = "";
		$whereCondition = "P.transfer_fee > 0";
		if ($positionFilter != NULL) {
			$whereCondition .= " AND P.position = '%s'";
			$parameters = $positionFilter;
		}
		$whereCondition .= " ORDER BY P.strength DESC";
		$players = array();
		$limit = $startIndex .",". $entries_per_page;
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$parameters,$limit);
		while ($player = $result->fetch_array()) {
			$player["user_picture"] = UsersDataService::getUserProfilePicture($websoccer,$player["user_picture"],$player["user_email"],20);
			$player["nation_flagfile"] = PlayersDataService::getFlagFilename($player["nation"]);
			$players[] = $player;
		}
		$result->free();
		return $players;
	}
	FUNCTION getScouts(WebSoccer $websoccer,DbConnection $db,$sortColumns = "expertise DESC,name ASC")
	{
		$result = $db->querySelect("*",$websoccer->getConfig("db_prefix") . "_youthscout","1=1 ORDER BY " . $sortColumns);
		$scouts = array();
		while ($scout = $result->fetch_array()) {
			$scouts[] = $scout;
		}
		$result->free();
		return $scouts;
	}
	FUNCTION getScoutById(WebSoccer $websoccer,DbConnection $db,I18n $i18n,$scoutId)
	{
		$result = $db->querySelect("*",$websoccer->getConfig("db_prefix") . "_youthscout","id = %d",$scoutId);
		$scout = $result->fetch_array();
		$result->free();
		if (!$scout) {
			throw new Exception($i18n->getMessage("youthteam_scouting_err_invalidscout"));
		}
		return $scout;
	}
	FUNCTION getLastScoutingExecutionTime(WebSoccer $websoccer,DbConnection $db,$teamId) {
		$result = $db->querySelect("scouting_last_execution",$websoccer->getConfig("db_prefix") . "_verein","id = %d",$teamId);
		$scouted = $result->fetch_array();
		$result->free();
		if (!$scouted) {
			return NULL;
		}
		return $scouted["scouting_last_execution"];
	}
	FUNCTION getPossibleScoutingCountries()
	{
		$iterator = new DirectoryIterator(ROOT . "/admin/config/names/");
		$countries = array();
		while($iterator->valid()) {
			if ($iterator->isDir() && !$iterator->isDot()) {
				$countries[] = $iterator->getFilename();
			}
			$iterator->next();
		}
		return $countries;
	}
	FUNCTION countMatchRequests(WebSoccer $websoccer,DbConnection $db)
	{
		$fromTable = $websoccer->getConfig("db_prefix") . "_youthmatch_request";
		$result = $db->querySelect("COUNT(*) AS hits",$fromTable,"1=1");
		$requests = $result->fetch_array();
		$result->free();
		if ($requests) {
			return $requests["hits"];
		}
		return NULL;
	}
	FUNCTION getMatchRequests(WebSoccer $websoccer,DbConnection $db,$startIndex,$entries_per_page)
	{
		$columns = array(
				"R.id" => "request_id",
				"R.matchdate" => "matchdate",
				"R.reward" => "reward",
				"C.name" => "team_name",
				"C.id" => "team_id",
				"U.id" => "user_id",
				"U.nick" => "user_nick",
				"U.email" => "user_email",
				"U.picture" => "user_picture"
		);
		$fromTable = $websoccer->getConfig("db_prefix") . "_youthmatch_request AS R";
		$fromTable .= " INNER JOIN " . $websoccer->getConfig("db_prefix") . "_verein AS C ON C.id = R.team_id";
		$fromTable .= " INNER JOIN " . $websoccer->getConfig("db_prefix") . "_user AS U ON U.id = C.user_id";
		$whereCondition = "1=1 ORDER BY R.matchdate ASC";
		$requests = array();
		$limit = $startIndex .",". $entries_per_page;
		$result = $db->querySelect($columns,$fromTable,$whereCondition,null,$limit);
		while ($request = $result->fetch_array()) {
			$request["user_picture"] = UsersDataService::getUserProfilePicture($websoccer,$request["user_picture"],$request["user_email"]);
			$requests[] = $request;
		}
		$result->free();
		return $requests;
	}
	FUNCTION deleteInvalidOpenMatchRequests(WebSoccer $websoccer,DbConnection $db)
	{
		$timeBoundary = $websoccer->getNowAsTimestamp() + $websoccer->getConfig("youth_matchrequest_accept_hours_in_advance");
		$db->queryDelete($websoccer->getConfig("db_prefix") . "_youthmatch_request","matchdate <= %d",$timeBoundary);
	}
}
