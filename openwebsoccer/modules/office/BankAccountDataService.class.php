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
class BankAccountDataService
{
	FUNCTION countAccountStatementsOfTeam($websoccer,$db,$teamId)
	{
		$columns = "COUNT(*) AS hits";
		$fromTable = $websoccer->getConfig("db_prefix") . "_konto";
		$whereCondition = "verein_id = %d";
		$parameters = $teamId;
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$parameters);
		$statements = $result->fetch_array();
		$result->free();
		if (isset($statements["hits"])) {
			return $statements["hits"];
		}
		return NULL;
	}
	FUNCTION getAccountStatementsOfTeam($websoccer,$db,$teamId,$startIndex,$entries_per_page)
	{
		$columns["absender"] = "sender";
		$columns["betrag"] = "amount";
		$columns["datum"] = "date";
		$columns["verwendung"] = "subject";
		$limit = $startIndex .",". $entries_per_page;
		$fromTable = $websoccer->getConfig("db_prefix") . "_konto";
		$whereCondition = "verein_id = %d ORDER BY datum DESC";
		$parameters = $teamId;
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$parameters,$limit);
		$statements = array();
		while ($statement = $result->fetch_array()) {
			$statements[] = $statement;
		}
		$result->free();
		return $statements;
	}
	FUNCTION creditAmount(WebSoccer $websoccer,DbConnection $db,$teamId,$amount,$subject,$sender)
	{
		if ($amount == 0) {
			return;
		}
		$team = TeamsDataService::getTeamSummaryById($websoccer,$db,$teamId);
		if (!isset($team["team_id"])) {
			throw new Exception("team not found: " . $teamId);
		}
		if ($amount < 0) {
			throw new Exception("amount illegal: " . $amount);
		} else {
			self::createTransaction($websoccer,$db,$team,$teamId,$amount,$subject,$sender);
		}
	}
	FUNCTION debitAmount(WebSoccer $websoccer,DbConnection $db,$teamId,$amount,$subject,$sender)
	{
		if ($amount == 0) {
			return;
		}
		$team = TeamsDataService::getTeamSummaryById($websoccer,$db,$teamId);
		if (!isset($team["team_id"])) {
			throw new Exception("team not found: " . $teamId);
		}
		if ($amount < 0) {
			throw new Exception("amount illegal: " . $amount);
		}
		$amount = 0 - $amount;
		self::createTransaction($websoccer,$db,$team,$teamId,$amount,$subject,$sender);
	}
	FUNCTION createTransaction(WebSoccer $websoccer,DbConnection $db,$team,$teamId,$amount,$subject,$sender)
	{
		// ignore transaction if team is without user and option is enabled
		if (!$team["user_id"] && $websoccer->getConfig("no_transactions_for_teams_without_user")) {
			return;
		}
		// create transaction
		$fromTable = $websoccer->getConfig("db_prefix") ."_konto";
		$columns["verein_id"] = $teamId;
		$columns["absender"] = $sender;
		$columns["betrag"] = $amount;
		$columns["datum"] = $websoccer->getNowAsTimestamp();
		$columns["verwendung"] = $subject;
		$db->queryInsert($columns,$fromTable);
		// update team budget
		$newBudget = $team["team_budget"] + $amount;
		$updateColumns["finanz_budget"] = $newBudget;
		$fromTable = $websoccer->getConfig("db_prefix") ."_verein";
		$whereCondition = "id = %d";
		$parameters = $teamId;
		$db->queryUpdate($updateColumns,$fromTable,$whereCondition,$parameters);
	}
}
