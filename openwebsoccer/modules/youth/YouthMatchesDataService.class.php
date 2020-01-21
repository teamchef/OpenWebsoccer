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
class YouthMatchesDataService
{
	FUNCTION getYouthMatchinfoById(WebSoccer $websoccer,DbConnection $db,I18n $i18n,$matchId)
	{
		$columns = "M.*,HOME.name AS home_team_name,GUEST.name AS guest_team_name";
		$fromTable = $websoccer->getConfig("db_prefix") . "_youthmatch AS M";
		$fromTable .= " INNER JOIN " . $websoccer->getConfig("db_prefix") . "_verein AS HOME ON HOME.id = M.home_team_id";
		$fromTable .= " INNER JOIN " . $websoccer->getConfig("db_prefix") . "_verein AS GUEST ON GUEST.id = M.guest_team_id";
		$result = $db->querySelect($columns,$fromTable,"M.id = %d",$matchId);
		$match = $result->fetch_array();
		$result->free();
		if (!$match) {
			throw new Exception($i18n->getMessage(MSG_KEY_ERROR_PAGENOTFOUND));
		}
		return $match;
	}
	FUNCTION countMatchesOfTeamOnSameDay(WebSoccer $websoccer,DbConnection $db,$teamId,$timestamp)
	{
		$fromTable = $websoccer->getConfig("db_prefix") . "_youthmatch";
		$dateObj = new DateTime();
		$dateObj->setTimestamp($timestamp);
		$dateObj->setTime(0,0,0);
		$minTimeBoundary = $dateObj->getTimestamp();
		$dateObj->setTime(23,59,59);
		$maxTimeBoundary = $dateObj->getTimestamp();
		$result = $db->querySelect("COUNT(*) AS hits",$fromTable,
				"(home_team_id = %d OR guest_team_id = %d) AND matchdate BETWEEN %d AND %d",
				array($teamId,$teamId,$minTimeBoundary,$maxTimeBoundary));
		$rows = $result->fetch_array();
		$result->free();
		if ($rows) {
			return $rows["hits"];
		}
		return NULL;
	}
	FUNCTION countMatchesOfTeam(WebSoccer $websoccer,DbConnection $db,$teamId)
	{
		$fromTable = $websoccer->getConfig("db_prefix") . "_youthmatch";
		$result = $db->querySelect("COUNT(*) AS hits",$fromTable,
				"(home_team_id = %d OR guest_team_id = %d)",
				array($teamId,$teamId));
		$rows = $result->fetch_array();
		$result->free();
		if ($rows) {
			return $rows["hits"];
		}
		return NULL;
	}
	FUNCTION getMatchesOfTeam(WebSoccer $websoccer,DbConnection $db,$teamId,$startIndex,$entries_per_page)
	{
		$tablePrefix = $websoccer->getConfig("db_prefix");
		$fromTable = $tablePrefix . "_youthmatch AS M";
		$fromTable .= " INNER JOIN " . $tablePrefix . "_verein AS HOME ON M.home_team_id = HOME.id";
		$fromTable .= " INNER JOIN " . $tablePrefix . "_verein AS GUEST ON M.guest_team_id = GUEST.id";
		$fromTable .= " LEFT JOIN " . $tablePrefix . "_user AS HOMEUSER ON HOME.user_id = HOMEUSER.id";
		$fromTable .= " LEFT JOIN " . $tablePrefix . "_user AS GUESTUSER ON GUEST.user_id = GUESTUSER.id";
		// select
		$columns["M.id"] = "match_id";
		$columns["HOME.name"] = "home_team";
		$columns["HOME.bild"] = "home_team_picture";
		$columns["HOME.id"] = "home_id";
		$columns["HOMEUSER.id"] = "home_user_id";
		$columns["HOMEUSER.nick"] = "home_user_nick";
		$columns["HOMEUSER.email"] = "home_user_email";
		$columns["HOMEUSER.picture"] = "home_user_picture";
		$columns["GUEST.name"] = "guest_team";
		$columns["GUEST.bild"] = "guest_team_picture";
		$columns["GUEST.id"] = "guest_id";
		$columns["GUESTUSER.id"] = "guest_user_id";
		$columns["GUESTUSER.nick"] = "guest_user_nick";
		$columns["GUESTUSER.email"] = "guest_user_email";
		$columns["GUESTUSER.picture"] = "guest_user_picture";
		$columns["M.home_goals"] = "home_goals";
		$columns["M.guest_goals"] = "guest_goals";
		$columns["M.simulated"] = "simulated";
		$columns["M.matchdate"] = "date";
		$matches = array();
		$limit = $startIndex . "," . $entries_per_page;
		$result = $db->querySelect($columns,$fromTable,"(home_team_id = %d OR guest_team_id = %d) ORDER BY M.matchdate DESC",
				array($teamId,$teamId),$limit);
		while ($matchinfo = $result->fetch_array()) {
			$matchinfo["home_user_picture"] = UsersDataService::getUserProfilePicture($websoccer,$matchinfo["home_user_picture"],$matchinfo["home_user_email"]);
			$matchinfo["guest_user_picture"] = UsersDataService::getUserProfilePicture($websoccer,$matchinfo["guest_user_picture"],$matchinfo["guest_user_email"]);
			$matches[] = $matchinfo;
		}
		$result->free();
		return $matches;
	}
	FUNCTION createMatchReportItem(WebSoccer $websoccer,DbConnection $db,$matchId,$minute,$messageKey,$messageData = null,$isHomeTeamWithBall = FALSE)
	{
		$messageDataStr = "";
		if (is_array($messageData)) {
			$messageDataStr = json_encode($messageData);
		}
		$columns = array(
				"match_id" => $matchId,
				"minute" => $minute,
				"message_key" => $messageKey,
				"message_data" => $messageDataStr,
				"home_on_ball" => ($isHomeTeamWithBall) ? "1" : "0"
				);
		$db->queryInsert($columns,$websoccer->getConfig("db_prefix") . "_youthmatch_reportitem");
	}
	FUNCTION getMatchReportItems(WebSoccer $websoccer,DbConnection $db,I18n $i18n,$matchId)
	{
		$result = $db->querySelect("*",$websoccer->getConfig("db_prefix") . "_youthmatch_reportitem","match_id = %d ORDER BY minute ASC",$matchId);
		// create formatted items
		$items = array();
		while ($item = $result->fetch_array()) {
			$message = $i18n->getMessage($item["message_key"]);
			// replace place holders
			if (strlen($item["message_data"])) {
				$messageData = json_decode($item["message_data"],true);
				if ($messageData) {
					foreach ($messageData as $placeholderName => $placeholderValue) {
						$message = str_replace("{" . $placeholderName . "}",
								htmlspecialchars($placeholderValue,ENT_COMPAT,"UTF-8"),$message);
					}
				}
			}
			// create mapped item
			$items[] = array(
					"minute" => $item["minute"],
					"active_home" => $item["home_on_ball"],
					"message_key" => $item["message_key"],
					"message" => $message
					);
		}
		$result->free();
		return $items;
	}
}
