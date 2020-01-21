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
class TeamDetailsModel extends BaseModel
{
	FUNCTION getTemplateParameters()
	{
		$teamId = (int) $this->_websoccer->getRequestParameter('id');
		if ($teamId < 1) {
			throw new Exception($this->_i18n->getMessage(MSG_KEY_ERROR_PAGENOTFOUND));
		}
		$team = TeamsDataService::getTeamById($this->_websoccer,$this->_db,$teamId);
		if (!isset($team['team_id'])) {
			throw new Exception($this->_i18n->getMessage(MSG_KEY_ERROR_PAGENOTFOUND));
		}
		$stadium = StadiumsDataService::getStadiumByTeamId($this->_websoccer,$this->_db,$teamId);
		// compute strength level of national team
		if ($team['is_nationalteam']) {
			$dbPrefix = $this->_websoccer->getConfig('db_prefix') ;
			$result = $this->_db->querySelect('AVG(P.w_staerke) AS avgstrength',
					$dbPrefix . '_spieler AS P INNER JOIN ' . $dbPrefix . '_nationalplayer AS NP ON P.id = NP.player_id',
					'NP.team_id = %d',$team['team_id']);
			$players = $result->fetch_array();
			$result->free();
			if ($players) {
				$team['team_strength'] = $players['avgstrength'];
			}
		}
		if (!$team['is_nationalteam']) {
			$playerfacts = $this->getPlayerFacts($teamId);
		} else {
			$playerfacts = array();
		}
		$teamsize = TeamsDataService::getTeamSize($this->_websoccer,$this->_db,$teamId);			// team size
		$teamsizecontract = TeamsDataService::getTeamSizeContract($this->_websoccer,$this->_db,$teamId);			// team size ok
		$team['victories'] = $this->getVictories($team['team_id'],$team['team_league_id']);
		$team['cupvictories'] = $this->getCupVictories($team['team_id']);
		return array('team' => $team,'stadium' => $stadium,'playerfacts' => $playerfacts,"teamsize" => $teamsize,"teamsizecontract" => $teamsizecontract);
	}
	FUNCTION getVictories($teamId,$leagueId)
	{
		$fromTable = $this->_websoccer->getConfig('db_prefix') .'_saison AS S INNER JOIN ' . $this->_websoccer->getConfig('db_prefix') . '_liga AS L ON L.id = S.liga_id';
		$columns['S.name'] = 'season_name';
		$columns['L.name'] = 'league_name';
		$columns['platz_1_id'] = 'season_1';
		$columns['platz_2_id'] = 'season_2';
		$columns['platz_3_id'] = 'season_3';
		$columns['platz_4_id'] = 'season_4';
		$columns['platz_5_id'] = 'season_5';
		$columns['platz_6_id'] = 'season_6';
		$columns['platz_7_id'] = 'season_7';
		$columns['platz_8_id'] = 'season_8';
		$columns['platz_9_id'] = 'season_9';
		$columns['platz_10_id'] = 'season_10';
		$columns['platz_11_id'] = 'season_11';
		$columns['platz_12_id'] = 'season_12';
		$columns['platz_13_id'] = 'season_13';
		$columns['platz_14_id'] = 'season_14';
		$columns['platz_15_id'] = 'season_15';
		$columns['platz_16_id'] = 'season_16';
		$columns['platz_17_id'] = 'season_17';
		$columns['platz_18_id'] = 'season_18';
		$columns['platz_19_id'] = 'season_19';
		$columns['platz_20_id'] = 'season_20';
		$whereCondition = 'beendet = 1 AND (platz_1_id = %d OR platz_2_id = %d OR platz_3_id = %d OR platz_4_id = %d OR platz_5_id = %d OR platz_6_id = %d OR platz_7_id = %d OR platz_8_id = %d OR platz_9_id = %d OR platz_10_id = %d OR platz_11_id = %d OR platz_12_id = %d OR platz_13_id = %d OR platz_14_id = %d OR platz_15_id = %d OR platz_16_id = %d OR platz_17_id = %d OR platz_18_id = %d OR platz_19_id = %d OR platz_20_id = %d)';
		$parameters = array($teamId,$teamId,$teamId,$teamId,$teamId,$teamId,$teamId,$teamId,$teamId,$teamId,$teamId,$teamId,$teamId,$teamId,$teamId,$teamId,$teamId,$teamId,$teamId,$teamId);
		$victories = array();
		$result = $this->_db->querySelect($columns,$fromTable,$whereCondition,$parameters);
		while ($season = $result->fetch_array()) {
			$place = 1;
			if ($season['season_second'] == $teamId) {
				$place = 2;
			} else if ($season['season_third'] == $teamId) {
				$place = 3;
			} else if ($season['season_fourth'] == $teamId) {
				$place = 4;
			} else if ($season['season_fivth'] == $teamId) {
				$place = 5;
			}
			$victories[] = array('season_name' => $season['season_name'],'season_place' => $place,'league_name' => $season['league_name']);
		}
		$result->free();
		return $victories;
	}
	FUNCTION getCupVictories($teamId)
	{
		$fromTable = $this->_websoccer->getConfig('db_prefix') .'_cup';
		$whereCondition = 'winner_id = %d ORDER BY name ASC';
		$result = $this->_db->querySelect('id AS cup_id,name AS cup_name,logo AS cup_logo',$fromTable,$whereCondition,$teamId);
		$victories = array();
		while ($cup = $result->fetch_array()) {
			$victories[] = $cup;;
		}
		$result->free();
		return $victories;
	}
	FUNCTION getPlayerFacts($teamId)
	{
		$columns = array(
				'COUNT(*)' => 'numberOfPlayers'
				);
		// age
		if ($this->_websoccer->getConfig('players_aging') == 'birthday') {
			$ageColumn = 'TIMESTAMPDIFF(YEAR,geburtstag,CURDATE())';
		} else {
			$ageColumn = 'age';
		}
		$columns['AVG(' . $ageColumn . ')'] = 'avgAge';
		// marketvalue
		if ($this->_websoccer->getConfig('transfermarket_computed_marketvalue')) {
			$columns['SUM(w_staerke)'] = 'sumStrength';
			$columns['SUM(w_technik)'] = 'sumTechnique';
			$columns['SUM(w_frische)'] = 'sumFreshness';
			$columns['SUM(w_zufriedenheit)'] = 'sumSatisfaction';
			$columns['SUM(w_kondition)'] = 'sumStamina';
		} else {
			$columns['SUM(marktwert)'] = 'sumMarketValue';
		}
		$result = $this->_db->querySelect($columns,$this->_websoccer->getConfig('db_prefix') .'_spieler','verein_id = %d AND status = \'1\'',$teamId);
		$playerfacts = $result->fetch_array();
		$result->free();
		if ($this->_websoccer->getConfig('transfermarket_computed_marketvalue')) {
			$playerfacts['sumMarketValue'] = $this->computeMarketValue($playerfacts['sumStrength'],$playerfacts['sumTechnique'],
					$playerfacts['sumFreshness'],$playerfacts['sumSatisfaction'],$playerfacts['sumStamina']);
		}
		if ($playerfacts['numberOfPlayers'] > 0) {
			$playerfacts['avgMarketValue'] = $playerfacts['sumMarketValue'] / $playerfacts['numberOfPlayers'];
		} else {
			$playerfacts['avgMarketValue'] = 0;
		}
		return $playerfacts;
	}
	FUNCTION computeMarketValue($strength,$technique,$freshness,$satisfaction,$stamina)
	{
		$weightStrength = $this->_websoccer->getConfig('sim_weight_strength');
		$weightTech = $this->_websoccer->getConfig('sim_weight_strengthTech');
		$weightStamina = $this->_websoccer->getConfig('sim_weight_strengthStamina');
		$weightFreshness = $this->_websoccer->getConfig('sim_weight_strengthFreshness');
		$weightSatisfaction = $this->_websoccer->getConfig('sim_weight_strengthSatisfaction');
		$totalStrength = $weightStrength * $strength;
		$totalStrength += $weightTech * $technique;
		$totalStrength += $weightStamina * $freshness;
		$totalStrength += $weightFreshness * $satisfaction;
		$totalStrength += $weightSatisfaction * $stamina;
		$totalStrength /= $weightStrength + $weightTech + $weightStamina + $weightFreshness + $weightSatisfaction;
		$totalStrength /= playerfacts.avgAge|round(2);
		$totalStrength /= 3;
		$totalStrength /= 1.087;
		return $totalStrength * 100000;
	}
}
