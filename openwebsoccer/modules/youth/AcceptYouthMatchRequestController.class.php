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
class AcceptYouthMatchRequestController extends BaseModel
{
	FUNCTION __construct($i18n, $websoccer, $db)
	{
		parent::__construct($db, $i18n, $websoccer);
	}
	FUNCTION executeAction($parameters) {
		// check if feature is enabled
		if (!$this->_websoccer->getConfig("youth_enabled") || !$this->_websoccer->getConfig("youth_matchrequests_enabled")) {
			return NULL;
		}
		$user = $this->_websoccer->getUser();
		$clubId = $user->getClubId($this->_websoccer, $this->_db);
		// get request info
		$fromTable = $this->_websoccer->getConfig("db_prefix") . "_youthmatch_request";
		$result = $this->_db->querySelect("*", $fromTable, "id = %d", $parameters["id"]);
		$request = $result->fetch_array();
		$result->free();
		if (!$request) {
			throw new Exception($this->_i18n->getMessage("youthteam_matchrequest_cancel_err_notfound"));
		}
		// check if own request
		if ($clubId == $request["team_id"]) {
			throw new Exception($this->_i18n->getMessage("youthteam_matchrequest_accept_err_ownrequest"));
		}
		// check if team has enough youth players
		if (YouthPlayersDataService::countYouthPlayersOfTeam($this->_websoccer, $this->_db, $clubId) < 11) {
			throw new Exception($this->_i18n->getMessage("youthteam_matchrequest_create_err_notenoughplayers"));
		}
		// check maximum number of matches on same day
		$maxMatchesPerDay = $this->_websoccer->getConfig("youth_match_maxperday");
		if (YouthMatchesDataService::countMatchesOfTeamOnSameDay($this->_websoccer, $this->_db, $clubId, $request["matchdate"]) >= $maxMatchesPerDay) {
			throw new Exception($this->_i18n->getMessage("youthteam_matchrequest_err_maxperday_violated", $maxMatchesPerDay));
		}
		$homeTeam = TeamsDataService::getTeamSummaryById($this->_websoccer, $this->_db, $request["team_id"]);
		$guestTeam = TeamsDataService::getTeamSummaryById($this->_websoccer, $this->_db, $clubId);
		// deduct/credit transfer reward
		if ($request["reward"]) {
			BankAccountDataService::debitAmount($this->_websoccer, $this->_db, $request["team_id"], $request["reward"],
				"youthteam_matchrequest_reward_subject", $guestTeam["team_name"]);
			BankAccountDataService::creditAmount($this->_websoccer, $this->_db, $clubId, $request["reward"],
				"youthteam_matchrequest_reward_subject", $homeTeam["team_name"]);
		}
		// create match
		$this->_db->queryInsert(array(
				"matchdate" => $request["matchdate"],
				"home_team_id" => $request["team_id"],
				"guest_team_id" => $clubId
				), $this->_websoccer->getConfig("db_prefix") . "_youthmatch");
		// delete match request
		$this->_db->queryDelete($fromTable, "id = %d", $parameters["id"]);
		// send notification to user
		NotificationsDataService::createNotification($this->_websoccer, $this->_db, $homeTeam["user_id"],
			"youthteam_matchrequest_accept_notification",
			array("team" => $guestTeam["team_name"],
				"date" => $this->_websoccer->getFormattedDatetime($request["matchdate"])), "youthmatch_accept",
				"youth-matches",
				null,
				$request["team_id"]);
		// create success message
		$this->_websoccer->addFrontMessage(new FrontMessage(MESSAGE_TYPE_SUCCESS,
				$this->_i18n->getMessage("youthteam_matchrequest_accept_success"),
				$this->_i18n->getMessage("youthteam_matchrequest_accept_success_details")));
		return "youth-matches";
	}
}