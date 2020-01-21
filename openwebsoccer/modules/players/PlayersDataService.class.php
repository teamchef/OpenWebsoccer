<?php
/******************************************************
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
* This Version called "OpenWebsoccer" is a advanced modifikation
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************/
SEC;
class PlayersDataService
{
	FUNCTION getPlayersOfTeamByPosition(WebSoccer $websoccer,DbConnection $db,$clubId,$positionSort = 'ASC',$considerBlocksForCups = FALSE,$considerBlocks = TRUE)
	{
		$columns = array(
				'id' => 'id',
				'vorname' => 'firstname',
				'nachname' => 'lastname',
				'kunstname' => 'pseudonym',
				'verletzt' => 'matches_injured',
				'position' => 'position',
				'position_main' => 'position_main',
				'position_second' => 'position_second',
				'w_staerke' => 'strength',
				'w_technik' => 'strength_technique',
				'w_kondition' => 'strength_stamina',
				'w_frische' => 'strength_freshness',
				'w_zufriedenheit' => 'strength_satisfaction',
				'transfermarkt' => 'transfermarket',
				'nation' => 'player_nationality',
				'picture' => 'picture',
				'sa_tore' => 'st_goals',
				'sa_spiele' => 'st_matches',
				'sa_karten_gelb' => 'st_cards_yellow',
				'sa_karten_gelb_rot' => 'st_cards_yellow_red',
				'sa_karten_rot' => 'st_cards_red',
				'marktwert' => 'marketvalue'
				);
		if ($websoccer->getConfig('players_aging') == 'birthday') {
			$ageColumn = 'TIMESTAMPDIFF(YEAR,geburtstag,CURDATE())';
		} else {
			$ageColumn = 'age';
		}
		$columns[$ageColumn] = 'age';
		if ($considerBlocksForCups) {
			$columns['gesperrt_cups'] = 'matches_blocked';
		} else if ($considerBlocks) {
			$columns['gesperrt'] = 'matches_blocked';
		}
		$fromTable = $websoccer->getConfig('db_prefix') . '_spieler';
		$whereCondition = 'status = 1 AND verein_id = %d ORDER BY position '. $positionSort . ',position_main ASC,nachname ASC,vorname ASC';
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$clubId,50);
		$players = array();
		while ($player = $result->fetch_array()) {
			$player['position'] = self::_convertPosition($player['position']);
			$player['player_nationality_filename'] = self::getFlagFilename($player['player_nationality']);
			$player['marketvalue'] = self::getMarketValue($websoccer,$player,'');
			$players[$player['position']][] = $player;
		}
		$result->free();
		return $players;
	}
	FUNCTION getPlayersOfTeamById(WebSoccer $websoccer,DbConnection $db,$clubId,$nationalteam = FALSE,$considerBlocksForCups = FALSE,$considerBlocks = TRUE)
	{
		$columns = array(
				'id' => 'id',
				'vorname' => 'firstname',
				'nachname' => 'lastname',
				'kunstname' => 'pseudonym',
				'verletzt' => 'matches_injured',
				'position' => 'position',
				'position_main' => 'position_main',
				'position_second' => 'position_second',
				'w_staerke' => 'strength',
				'w_technik' => 'strength_technic',
				'w_kondition' => 'strength_stamina',
				'w_frische' => 'strength_freshness',
				'w_zufriedenheit' => 'strength_satisfaction',
				'transfermarkt' => 'transfermarket',
				'nation' => 'player_nationality',
				'picture' => 'picture',
				'sa_tore' => 'st_goals',
				'sa_spiele' => 'st_matches',
				'sa_karten_gelb' => 'st_cards_yellow',
				'sa_karten_gelb_rot' => 'st_cards_yellow_red',
				'sa_karten_rot' => 'st_cards_red',
				'marktwert' => 'marketvalue',
				'vertrag_spiele' => 'contract_matches',
				'vertrag_gehalt' => 'contract_salary',
				'unsellable' => 'unsellable',
				'lending_matches' => 'lending_matches',
				'lending_fee' => 'lending_fee',
				'lending_owner_id' => 'lending_owner_id',
				'transfermarkt' => 'transfermarket'
		);
		if ($websoccer->getConfig('players_aging') == 'birthday') {
			$ageColumn = 'TIMESTAMPDIFF(YEAR,geburtstag,CURDATE())';
		} else {
			$ageColumn = 'age';
		}
		$columns[$ageColumn] = 'age';
		if (!$nationalteam) {
			if ($considerBlocksForCups) {
				$columns['gesperrt_cups'] = 'matches_blocked';
			} elseif ($considerBlocks) {
				$columns['gesperrt'] = 'matches_blocked';
			} else {
				$columns['\'0\''] = 'matches_blocked';
			}
			$fromTable = $websoccer->getConfig('db_prefix') . '_spieler';
			$whereCondition = 'status = 1 AND verein_id = %d';
		} else {
			$columns['gesperrt_nationalteam'] = 'matches_blocked';
			$fromTable = $websoccer->getConfig('db_prefix') . '_spieler AS P';
			$fromTable .= ' INNER JOIN ' . $websoccer->getConfig('db_prefix') . '_nationalplayer AS NP ON NP.player_id = P.id';
			$whereCondition = 'status = 1 AND NP.team_id = %d';
		}
		$whereCondition .= ' ORDER BY position ASC,position_main ASC,nachname ASC,vorname ASC';
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$clubId,50);
		$players = array();
		while ($player = $result->fetch_array()) {
			$player['position'] = self::_convertPosition($player['position']);
			$players[$player['id']] = $player;
		}
		$result->free();
		return $players;
	}
	FUNCTION getPlayersOnTransferList(WebSoccer $websoccer,DbConnection $db,$startIndex,$entries_per_page,$positionFilter = null)
	{
		$columns['P.id'] = 'id';
		$columns['P.vorname'] = 'firstname';
		$columns['P.nachname'] = 'lastname';
		$columns['P.kunstname'] = 'pseudonym';
		$columns['P.position'] = 'position';
		$columns['P.position_main'] = 'position_main';
		$columns['P.vertrag_gehalt'] = 'contract_salary';
		$columns['P.vertrag_torpraemie'] = 'contract_goalbonus';
		$columns['P.w_staerke'] = 'strength';
		$columns['P.w_technik'] = 'strength_technique';
		$columns['P.w_kondition'] = 'strength_stamina';
		$columns['P.w_frische'] = 'strength_freshness';
		$columns['P.w_zufriedenheit'] = 'strength_satisfaction';
		$columns['P.transfermarkt'] = 'transfermarket';
		$columns['P.marktwert'] = 'marketvalue';
		$columns['P.transfer_start'] = 'transfer_start';
		$columns['P.transfer_ende'] = 'transfer_deadline';
		$columns['P.transfer_mindestgebot'] = 'min_bid';
		$columns['C.id'] = 'team_id';
		$columns['C.name'] = 'team_name';
		$fromTable = $websoccer->getConfig('db_prefix') . '_spieler AS P';
		$fromTable .= ' LEFT JOIN ' . $websoccer->getConfig('db_prefix') . '_verein AS C ON C.id = P.verein_id';
		$whereCondition = 'P.status = 1 AND P.transfermarkt = 1 AND P.transfer_ende > %d';
		$parameters[] = $websoccer->getNowAsTimestamp();
		if ($positionFilter != null) {
			$whereCondition .= ' AND P.position = \'%s\'';
			$parameters[] = $positionFilter;
		}
		$whereCondition .= ' ORDER BY P.transfer_ende ASC,P.nachname ASC,P.vorname ASC';
		$limit = $startIndex .','. $entries_per_page;
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$parameters,$limit);
		$players = array();
		while ($player = $result->fetch_array()) {
			$player['position'] = self::_convertPosition($player['position']);
			$player['highestbid'] = TransfermarketDataService::getHighestBidForPlayer($websoccer,$db,$player['id'],$player['transfer_start'],$player['transfer_deadline']);
			$players[] = $player;
		}
		$result->free();
		return $players;
	}
	FUNCTION countPlayersOnTransferList(WebSoccer $websoccer,DbConnection $db,$positionFilter = null)
	{
		$columns = 'COUNT(*) AS hits';
		$fromTable = $websoccer->getConfig('db_prefix') . '_spieler AS P';
		$whereCondition = 'P.status = 1 AND P.transfermarkt = 1 AND P.transfer_ende > %d';
		$parameters[] = $websoccer->getNowAsTimestamp();
		if ($positionFilter != null) {
			$whereCondition .= ' AND P.position = \'%s\'';
			$parameters[] = $positionFilter;
		}
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$parameters);
		$players = $result->fetch_array();
		$result->free();
		if (isset($players['hits'])) {
			return $players['hits'];
		}
		return NULL;
	}
	FUNCTION getPlayerById(WebSoccer $websoccer,DbConnection $db,$playerId)
	{
		$columns['P.id'] = 'player_id';
		$columns['P.vorname'] = 'player_firstname';
		$columns['P.nachname'] = 'player_lastname';
		$columns['P.kunstname'] = 'player_pseudonym';
		$columns['P.position'] = 'player_position';
		$columns['P.position_main'] = 'player_position_main';
		$columns['P.position_second'] = 'player_position_second';
		$columns['P.geburtstag'] = 'player_birthday';
		$columns['P.nation'] = 'player_nationality';
		$columns['P.picture'] = 'player_picture';
		if ($websoccer->getConfig('players_aging') == 'birthday') {
			$ageColumn = 'TIMESTAMPDIFF(YEAR,P.geburtstag,CURDATE())';
		} else {
			$ageColumn = 'P.age';
		}
		$columns[$ageColumn] = 'player_age';
		$columns['P.verletzt'] = 'player_matches_injured';
		$columns['P.gesperrt'] = 'player_matches_blocked';
		$columns['P.gesperrt_cups'] = 'player_matches_blocked_cups';
		$columns['P.gesperrt_nationalteam'] = 'player_matches_blocked_nationalteam';
		$columns['P.vertrag_gehalt'] = 'player_contract_salary';
		$columns['P.vertrag_spiele'] = 'player_contract_matches';
		$columns['P.vertrag_torpraemie'] = 'player_contract_goalbonus';
		$columns['P.w_staerke'] = 'player_strength';
		$columns['P.w_technik'] = 'player_strength_technique';
		$columns['P.w_kondition'] = 'player_strength_stamina';
		$columns['P.w_frische'] = 'player_strength_freshness';
		$columns['P.w_zufriedenheit'] = 'player_strength_satisfaction';
		$columns['P.sa_tore'] = 'player_season_goals';
		$columns['P.sa_assists'] = 'player_season_assists';
		$columns['P.sa_spiele'] = 'player_season_matches';
		$columns['P.sa_karten_gelb'] = 'player_season_yellow';
		$columns['P.sa_karten_gelb_rot'] = 'player_season_yellow_red';
		$columns['P.sa_karten_rot'] = 'player_season_red';
		$columns['P.st_tore'] = 'player_total_goals';
		$columns['P.st_assists'] = 'player_total_assists';
		$columns['P.st_spiele'] = 'player_total_matches';
		$columns['P.st_karten_gelb'] = 'player_total_yellow';
		$columns['P.st_karten_gelb_rot'] = 'player_total_yellow_red';
		$columns['P.st_karten_rot'] = 'player_total_red';
		$columns['P.transfermarkt'] = 'player_transfermarket';
		$columns['P.marktwert'] = 'player_marketvalue';
		$columns['P.transfer_start'] = 'transfer_start';
		$columns['P.transfer_ende'] = 'transfer_end';
		$columns['P.transfer_mindestgebot'] = 'transfer_min_bid';
		$columns['P.history'] = 'player_history';
		$columns['P.unsellable'] = 'player_unsellable';
		$columns['P.lending_owner_id'] = 'lending_owner_id';
		$columns['L.name'] = 'lending_owner_name';
		$columns['P.lending_fee'] = 'lending_fee';
		$columns['P.lending_matches'] = 'lending_matches';
		$columns['C.id'] = 'team_id';
		$columns['C.name'] = 'team_name';
		$columns['C.finanz_budget'] = 'team_budget';
		$columns['C.user_id'] = 'team_user_id';
		$columns['(SELECT CONCAT(AVG(S.note),\';\',SUM(S.assists)) FROM ' . $websoccer->getConfig('db_prefix') . '_spiel_berechnung AS S WHERE S.spieler_id = P.id AND S.minuten_gespielt > 0 AND S.note > 0)'] = 'matches_info';
		$fromTable = $websoccer->getConfig('db_prefix') . '_spieler AS P';
		$fromTable .= ' LEFT JOIN ' . $websoccer->getConfig('db_prefix') . '_verein AS C ON C.id = P.verein_id';
		$fromTable .= ' LEFT JOIN ' . $websoccer->getConfig('db_prefix') . '_verein AS L ON L.id = P.lending_owner_id';
		$whereCondition = 'P.status = 1 AND P.id = %d';
		$players = $db->queryCachedSelect($columns,$fromTable,$whereCondition,$playerId,1);
		if (count($players)) {
			$player = $players[0];
			$player['player_position'] = self::_convertPosition($player['player_position']);
			$player['player_marketvalue'] = self::getMarketValue($websoccer,$player);
			$player['player_nationality_filename'] = self::getFlagFilename($player['player_nationality']);
			$matchesInfo = explode(';',$player['matches_info']);
			$player['player_avg_grade'] = round($matchesInfo[0],2);
			if (isset($matchesInfo[1])) {
				$player['player_assists'] = $matchesInfo[1];
			} else {
				$player['player_assists'] = 0;
			}
		} else {
			$player = array();
		}
		return $player;
	}
	FUNCTION getTopStrikers(WebSoccer $websoccer,DbConnection $db,$limit = 20,$leagueId = null)
	{
		$parameters = array();
		$columns['P.id'] = 'id';
		$columns['P.vorname'] = 'firstname';
		$columns['P.nachname'] = 'lastname';
		$columns['P.kunstname'] = 'pseudonym';
		$columns['P.sa_tore'] = 'goals';
		$columns['P.sa_spiele'] = 'matches';
		$columns['P.transfermarkt'] = 'transfermarket';
		$columns['C.id'] = 'team_id';
		$columns['C.name'] = 'team_name';
		$fromTable = $websoccer->getConfig('db_prefix') . '_spieler AS P';
		$fromTable .= ' LEFT JOIN ' . $websoccer->getConfig('db_prefix') . '_verein AS C ON C.id = P.verein_id';
		$whereCondition = 'P.status = 1 AND P.sa_tore > 0';
		if ($leagueId != null) {
			$whereCondition .= ' AND liga_id = %d';
			$parameters[] = (int) $leagueId;
		}
		$whereCondition .= ' ORDER BY P.sa_tore DESC,P.sa_spiele ASC';
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$parameters,$limit);
		$players = array();
		while ($player = $result->fetch_array()) {
			$players[] = $player;
		}
		$result->free();
		return $players;
	}
	FUNCTION getTopScorers(WebSoccer $websoccer,DbConnection $db,$limit = 20,$leagueId = null)
	{
		$parameters = array();
		$columns['P.id'] = 'id';
		$columns['P.vorname'] = 'firstname';
		$columns['P.nachname'] = 'lastname';
		$columns['P.kunstname'] = 'pseudonym';
		$columns['P.sa_tore'] = 'goals';
		$columns['P.sa_assists'] = 'assists';
		$columns['P.sa_spiele'] = 'matches';
		$columns['(P.sa_tore + P.sa_assists)'] = 'score';
		$columns['P.transfermarkt'] = 'transfermarket';
		$columns['C.id'] = 'team_id';
		$columns['C.name'] = 'team_name';
		$fromTable = $websoccer->getConfig('db_prefix') . '_spieler AS P';
		$fromTable .= ' LEFT JOIN ' . $websoccer->getConfig('db_prefix') . '_verein AS C ON C.id = P.verein_id';
		$whereCondition = 'P.status = \'1\' AND (P.sa_tore + P.sa_assists) > 0';
		if ($leagueId != null) {
			$whereCondition .= ' AND liga_id = %d';
			$parameters[] = (int) $leagueId;
		}
		$whereCondition .= ' ORDER BY score DESC,P.sa_assists DESC,P.sa_tore DESC,P.sa_spiele ASC,P.id ASC';
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$parameters,$limit);
		$players = array();
		while ($player = $result->fetch_array()) {
			$players[] = $player;
		}
		$result->free();
		return $players;
	}
	FUNCTION findPlayers(WebSoccer $websoccer,DbConnection $db,$firstName,$lastName,$clubName,$position,$strengthMax,$lendableOnly,$startIndex,$entries_per_page)
	{
		$columns['P.id'] = 'id';
		$columns['P.vorname'] = 'firstname';
		$columns['P.nachname'] = 'lastname';
		$columns['P.kunstname'] = 'pseudonym';
		$columns['P.position'] = 'position';
		$columns['P.position_main'] = 'position_main';
		$columns['P.position_second'] = 'position_second';
		$columns['P.transfermarkt'] = 'transfermarket';
		$columns['P.unsellable'] = 'unsellable';
		$columns['P.w_staerke'] = 'strength';
		$columns['P.w_technik'] = 'strength_technique';
		$columns['P.w_kondition'] = 'strength_stamina';
		$columns['P.w_frische'] = 'strength_freshness';
		$columns['P.w_zufriedenheit'] = 'strength_satisfaction';
		$columns['P.vertrag_gehalt'] = 'contract_salary';
		$columns['P.vertrag_spiele'] = 'contract_matches';
		$columns['P.lending_owner_id'] = 'lending_owner_id';
		$columns['P.lending_fee'] = 'lending_fee';
		$columns['P.lending_matches'] = 'lending_matches';
		$columns['C.id'] = 'team_id';
		$columns['C.name'] = 'team_name';
		$limit = $startIndex .','. $entries_per_page;
		$result = self::executeFindQuery($websoccer,$db,$columns,$limit,$firstName,$lastName,$clubName,$position,$strengthMax,$lendableOnly);
		$players = array();
		while ($player = $result->fetch_array()) {
			$player['position'] = self::_convertPosition($player['position']);
			$players[] = $player;
		}
		$result->free();
		return $players;
	}
	FUNCTION findPlayersCount(WebSoccer $websoccer,DbConnection $db,$firstName,$lastName,$clubName,$position,$strengthMax,$lendableOnly)
	{
		$columns = 'COUNT(*) AS hits';
		$result = self::executeFindQuery($websoccer,$db,$columns,1,$firstName,$lastName,$clubName,$position,$strengthMax,$lendableOnly);
		$players = $result->fetch_array();
		$result->free();
		if (isset($players['hits'])) {
			return $players['hits'];
		}
		return NULL;
	}
	private static function executeFindQuery(WebSoccer $websoccer,DbConnection $db,$columns,$limit,$firstName,$lastName,$clubName,$position,$strengthMax,$lendableOnly)
	{
		$whereCondition = 'P.status = 1';
		$parameters = array();
		if ($firstName != null) {
			$firstName = ucfirst($firstName);
			$whereCondition .= ' AND P.vorname LIKE \'%%%s%%\'';
			$parameters[] = $firstName;
		}
		if ($lastName != null) {
			$lastName = ucfirst($lastName);
			$whereCondition .= ' AND (P.nachname LIKE \'%%%s%%\' OR P.kunstname LIKE \'%%%s%%\')';
			$parameters[] = $lastName;
			$parameters[] = $lastName;
		}
		if ($clubName != null) {
			$whereCondition .= ' AND C.name = \'%s\'';
			$parameters[] = $clubName;
		}
		if ($position != null) {
			$whereCondition .= ' AND P.position = \'%s\'';
			$parameters[] = $position;
		}
		if ($strengthMax != null && $websoccer->getConfig('hide_strength_attributes') !== '1') {
			$strengthMinValue = $strengthMax - 20;
			$strengthMaxValue = $strengthMax;
			$whereCondition .= ' AND P.w_staerke > %d AND P.w_staerke <= %d';
			$parameters[] = $strengthMinValue;
			$parameters[] = $strengthMaxValue;
		}
		if ($lendableOnly) {
			$whereCondition .= ' AND P.lending_fee > 0 AND (P.lending_owner_id IS NULL OR P.lending_owner_id = 0)';
		}
		$fromTable = $websoccer->getConfig('db_prefix') . '_spieler AS P';
		$fromTable .= ' LEFT JOIN ' . $websoccer->getConfig('db_prefix') . '_verein AS C ON C.id = P.verein_id';
		return $db->querySelect($columns,$fromTable,$whereCondition,$parameters,$limit);
	}
	FUNCTION _convertPosition($dbPosition)
	{
		switch ($dbPosition) {
			case 'Torwart':
				return 'goaly';
			case 'Abwehr':
				return 'defense';
			case 'Mittelfeld':
				return 'midfield';
			default:
				return 'striker';
		}
	}
	FUNCTION getMarketValue(WebSoccer $websoccer,$player,$columnPrefix = 'player_')
	{
		if (!$websoccer->getConfig('transfermarket_computed_marketvalue')) {
			return $player[$columnPrefix . 'marketvalue'];
		}
		// compute market value
		$totalStrength = $websoccer->getConfig('sim_weight_strength') * $player[$columnPrefix . 'strength'] * 4;
		$totalStrength += $websoccer->getConfig('sim_weight_strengthTech') * $player[$columnPrefix . 'strength_technique'] * 4;
		$totalStrength += $websoccer->getConfig('sim_weight_strengthStamina') * $player[$columnPrefix . 'strength_stamina'] * 4;
		$totalStrength += $websoccer->getConfig('sim_weight_strengthFreshness') * $player[$columnPrefix . 'strength_freshness'] * 4;
		$totalStrength += $websoccer->getConfig('sim_weight_strengthSatisfaction') * $player[$columnPrefix . 'strength_satisfaction'] * 4;
		$totalStrength /= $websoccer->getConfig('sim_weight_strength')
						+ $websoccer->getConfig('sim_weight_strengthTech')
						+ $websoccer->getConfig('sim_weight_strengthStamina')
						+ $websoccer->getConfig('sim_weight_strengthFreshness')
						+ $websoccer->getConfig('sim_weight_strengthSatisfaction');
		$totalStrength /=  $player[$columnPrefix . 'age'];
		return $totalStrength * 100000;
	}
	FUNCTION getFlagFilename($nationality)
	{
		if (!strlen($nationality)) {
			return $nationality;
		}
		// remove umlauts
		$filename = str_replace('??','Ae',$nationality);
		$filename = str_replace('??','Oe',$filename);
		$filename = str_replace('??','Ue',$filename);
		$filename = str_replace('??','ae',$filename);
		$filename = str_replace('??','oe',$filename);
		$filename = str_replace('??','ue',$filename);
		return $filename;
	}
	FUNCTION getTopAssist(WebSoccer $websoccer,DbConnection $db,$limit = 20,$leagueId = null)
	{
		$parameters = array();
		$columns['P.id'] = 'id';
		$columns['P.vorname'] = 'firstname';
		$columns['P.nachname'] = 'lastname';
		$columns['P.kunstname'] = 'pseudonym';
		$columns['P.sa_tore'] = 'goals';
		$columns['P.sa_assists'] = 'assists';
		$columns['P.sa_spiele'] = 'matches';
		$columns['P.transfermarkt'] = 'transfermarket';
		$columns['C.id'] = 'team_id';
		$columns['C.name'] = 'team_name';
		$fromTable = $websoccer->getConfig('db_prefix') . '_spieler AS P';
		$fromTable .= ' LEFT JOIN ' . $websoccer->getConfig('db_prefix') . '_verein AS C ON C.id = P.verein_id';
		$whereCondition = 'P.status = \'1\' AND P.sa_assists > 0';
		if ($leagueId != null) {
			$whereCondition .= ' AND liga_id = %d';
			$parameters[] = (int) $leagueId;
		}
		$whereCondition .= ' ORDER BY P.sa_assists DESC,P.sa_tore DESC,P.sa_spiele ASC,P.id ASC';
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$parameters,$limit);
		$players = array();
		while ($player = $result->fetch_array()) {
			$players[] = $player;
		}
		$result->free();
		return $players;
	}
}
