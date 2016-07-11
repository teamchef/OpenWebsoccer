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
class BuyYouthPlayerController extends BaseModel
{
	FUNCTION __construct($i18n, $websoccer, $db)
	{
		parent::__construct($db, $i18n, $websoccer);
	}
	FUNCTION executeAction($parameters)
	{
		// check if feature is enabled
		if (!$this->_websoccer->getConfig("youth_enabled")) {
			return NULL;
		}
		$user = $this->_websoccer->getUser();
		$clubId = $user->getClubId($this->_websoccer, $this->_db);
		if ($clubId < 1) {
			throw new Exception($this->_i18n->getMessage("feature_requires_team"));
		}
		// check if it is already own player
		$player = YouthPlayersDataService::getYouthPlayerById($this->_websoccer, $this->_db, $this->_i18n, $parameters["id"]);
		if ($clubId == $player["team_id"]) {
			throw new Exception($this->_i18n->getMessage("youthteam_buy_err_ownplayer"));
		}
		// player must not be tranfered from one of user's other teams
		$result = $this->_db->querySelect("user_id", $this->_websoccer->getConfig("db_prefix") . "_verein", "id = %d", $player["team_id"]);
		$playerteam = $result->fetch_array();
		$result->free_result();
		if ($playerteam["user_id"] == $user->id) {
			throw new Exception($this->_i18n->getMessage("youthteam_buy_err_ownplayer_otherteam"));
		}
		// check if enough budget
		$team = TeamsDataService::getTeamSummaryById($this->_websoccer, $this->_db, $clubId);
		if ($team["team_budget"] <= $player["transfer_fee"]) {
			throw new Exception($this->_i18n->getMessage("youthteam_buy_err_notenoughbudget"));
		}
		// credit / debit amount
		$prevTeam = TeamsDataService::getTeamSummaryById($this->_websoccer, $this->_db, $player["team_id"]);
		BankAccountDataService::debitAmount($this->_websoccer, $this->_db, $clubId, $player["transfer_fee"], "youthteam_transferfee_subject",
			$prevTeam["team_name"]);
		BankAccountDataService::creditAmount($this->_websoccer, $this->_db, $player["team_id"], $player["transfer_fee"], "youthteam_transferfee_subject",
			$team["team_name"]);
		// update player
		$this->_db->queryUpdate(array("team_id" => $clubId, "transfer_fee" => 0),
				$this->_websoccer->getConfig("db_prefix") . "_youthplayer", "id = %d", $parameters["id"]);
		// create notification
		NotificationsDataService::createNotification($this->_websoccer, $this->_db, $prevTeam["user_id"], "youthteam_transfer_notification",
			array("player" => $player["firstname"] . " " . $player["lastname"],
				"newteam" => $team["team_name"]), "youth_transfer", "team", "id=" . $clubId);
		// success message
		$this->_websoccer->addFrontMessage(new FrontMessage(MESSAGE_TYPE_SUCCESS,
				$this->_i18n->getMessage("youthteam_buy_success"),
				""));
		return "youth-team";
	}
}