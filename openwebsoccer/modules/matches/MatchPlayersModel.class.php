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
class MatchPlayersModel extends BaseModel
{
	FUNCTION getTemplateParameters()
	{
		$matchId = (int) $this->_websoccer->getRequestParameter("id");
		if ($matchId < 1) {
			throw new Exception($this->_i18n->getMessage(MSG_KEY_ERROR_PAGENOTFOUND));
		}
		$match = MatchesDataService::getMatchById($this->_websoccer,$this->_db,$matchId,FALSE,TRUE);
		$home_players = MatchesDataService::getMatchReportPlayerRecords($this->_websoccer,$this->_db,
				$matchId,$match["match_home_id"]);
		$guest_players = MatchesDataService::getMatchReportPlayerRecords($this->_websoccer,$this->_db,
				$matchId,$match["match_guest_id"]);
		// check if any player is member of team of the day
		if ($match["match_simulated"]) {
			$result = $this->_db->querySelect("player_id",$this->_websoccer->getConfig("db_prefix") . "_teamoftheday",
					"season_id = %d AND matchday = %d",array($match["match_season_id"],$match["match_matchday"]));
			$topPlayerIds = array();
			while ($topmember = $result->fetch_array()) {
				$topPlayerIds[] = $topmember["player_id"];
			}
			$result->free();
			if (count($topPlayerIds)) {
				for($playerIndex = 0; $playerIndex < count($home_players); $playerIndex++) {
					if (in_array($home_players[$playerIndex]["id"],$topPlayerIds)) {
						$home_players[$playerIndex]["is_best_player_of_day"] = TRUE;
					}
				}
				for($playerIndex = 0; $playerIndex < count($guest_players); $playerIndex++) {
					if (in_array($guest_players[$playerIndex]["id"],$topPlayerIds)) {
						$guest_players[$playerIndex]["is_best_player_of_day"] = TRUE;
					}
				}
			}
		}
		return array("match" => $match,"home_players" => $home_players,"guest_players" => $guest_players);
	}
}
