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
class TeamsDataService
{
	FUNCTION getTeamById(WebSoccer $websoccer,DbConnection $db,$teamId)
	{
		$fromTable = self::_getFromPart($websoccer);
		// where
		$whereCondition = 'C.id = %d AND C.status = 1';
		$parameters = $teamId;
		// select
		$columns['C.id'] = 'team_id';
		$columns['C.bild'] = 'team_logo';
		$columns['C.name'] = 'team_name';
		$columns['C.kurz'] = 'team_short';
		$columns['C.strength'] = 'team_strength';
		$columns['C.finanz_budget'] = 'team_budget';
		$columns['C.min_target_rank'] = 'team_min_target_rank';
		$columns['C.nationalteam'] = 'is_nationalteam';
		$columns['C.captain_id'] = 'captain_id';
		$columns['C.interimmanager'] = 'interimmanager';
		$columns['C.history'] = 'team_history';
		$columns['L.name'] = 'team_league_name';
		$columns['L.id'] = 'team_league_id';
		$columns['SPON.name'] = 'team_sponsor_name';
		$columns['SPON.bild'] = 'team_sponsor_picture';
		$columns['SPON.id'] = 'team_sponsor_id';
		$columns['U.nick'] = 'team_user_name';
		$columns['U.id'] = 'team_user_id';
		$columns['U.email'] = 'team_user_email';
		$columns['U.picture'] = 'team_user_picture';
		$columns['DEPUTY.nick'] = 'team_deputyuser_name';
		$columns['DEPUTY.id'] = 'team_deputyuser_id';
		$columns['DEPUTY.email'] = 'team_deputyuser_email';
		$columns['DEPUTY.picture'] = 'team_deputyuser_picture';
		// statistic
		$columns['C.sa_tore'] = 'team_season_goals';
		$columns['C.sa_gegentore'] = 'team_season_againsts';
		$columns['C.sa_spiele'] = 'team_season_matches';
		$columns['C.sa_siege'] = 'team_season_wins';
		$columns['C.sa_niederlagen'] = 'team_season_losses';
		$columns['C.sa_unentschieden'] = 'team_season_draws';
		$columns['C.sa_punkte'] = 'team_season_score';
		$columns['C.st_tore'] = 'team_total_goals';
		$columns['C.st_gegentore'] = 'team_total_againsts';
		$columns['C.st_spiele'] = 'team_total_matches';
		$columns['C.st_siege'] = 'team_total_wins';
		$columns['C.st_niederlagen'] = 'team_total_losses';
		$columns['C.st_unentschieden'] = 'team_total_draws';
		$columns['C.st_punkte'] = 'team_total_score';
		$teaminfos = $db->queryCachedSelect($columns,$fromTable,$whereCondition,$parameters,1);
		$team = (isset($teaminfos[0])) ? $teaminfos[0] : array();
		if (isset($team['team_user_email'])) {
			$team['user_picture'] = UsersDataService::getUserProfilePicture($websoccer,$team['team_user_picture'],$team['team_user_email'],20);
		}
		if (isset($team['team_deputyuser_email'])) {
			$team['deputyuser_picture'] = UsersDataService::getUserProfilePicture($websoccer,$team['team_deputyuser_picture'],$team['team_deputyuser_email'],20);
		}
		return $team;
	}
	FUNCTION getTeamSummaryById(WebSoccer $websoccer,DbConnection $db,$teamId)
	{
		if (!$teamId) {
			return NULL;
		}
		$tablePrefix = $websoccer->getConfig('db_prefix');
		$fromTable = $tablePrefix . '_verein AS C';
		$fromTable .= ' LEFT JOIN ' . $tablePrefix . '_liga AS L ON C.liga_id = L.id';
		$whereCondition = 'C.status = 1 AND C.id = %d';
		$parameters = $teamId;
		$columns['C.id'] = 'team_id';
		$columns['C.name'] = 'team_name';
		$columns['C.finanz_budget'] = 'team_budget';
		$columns['C.bild'] = 'team_picture';
		$columns['C.user_id'] = 'user_id';
		$columns['L.name'] = 'team_league_name';
		$columns['L.id'] = 'team_league_id';
		$teaminfos = $db->queryCachedSelect($columns,$fromTable,$whereCondition,$parameters,1);
		$team = (isset($teaminfos[0])) ? $teaminfos[0] : array();
		return $team;
	}
	FUNCTION getTeamsOfLeagueOrderedByTableCriteria(WebSoccer $websoccer,DbConnection $db,$leagueId)
	{
		// get current season
		$result = $db->querySelect('id',$websoccer->getConfig('db_prefix') .'_saison',
				'liga_id = %d AND beendet = \'0\' ORDER BY name DESC',$leagueId,1);
		$season = $result->fetch_array();
		$result->free();
		$fromTable = $websoccer->getConfig('db_prefix') . '_verein AS C';
		$fromTable .= ' LEFT JOIN ' . $websoccer->getConfig('db_prefix') . '_user AS U ON C.user_id = U.id';
		$fromTable .= ' LEFT JOIN ' . $websoccer->getConfig('db_prefix') . '_leaguehistory AS PREVDAY ON (PREVDAY.team_id = C.id AND PREVDAY.matchday = (C.sa_spiele - 1)';
		if ($season) {
			$fromTable .= ' AND PREVDAY.season_id = ' . $season['id'];
		}
		$fromTable .= ')';
		$columns = array();
		$columns['C.id'] = 'id';
		$columns['C.name'] = 'name';
		$columns['C.sa_punkte'] = 'score';
		$columns['C.sa_tore'] = 'goals';
		$columns['C.sa_gegentore'] = 'goals_received';
		$columns['(C.sa_tore - C.sa_gegentore)'] = 'goals_diff';
		$columns['C.sa_siege'] = 'wins';
		$columns['C.sa_niederlagen'] = 'defeats';
		$columns['C.sa_unentschieden'] = 'draws';
		$columns['C.sa_spiele'] = 'matches';
		$columns['C.bild'] = 'picture';
		$columns['U.id'] = 'user_id';
		$columns['U.nick'] = 'user_name';
		$columns['U.email'] = 'user_email';
		$columns['U.picture'] = 'user_picture';
		$columns['PREVDAY.rank'] = 'previous_rank';
		// order by
		$whereCondition = 'C.liga_id = %d AND C.status = \'1\' ORDER BY score DESC,goals_diff DESC,wins DESC,draws DESC,goals DESC,name ASC';
		$parameters = $leagueId;
		$teams = array();
		// shall update league history? DO this only every 10 minutes
		$now = $websoccer->getNowAsTimestamp();
		$updateHistory = FALSE;
		if ($season && (!isset($_SESSION['leaguehist']) || $_SESSION['leaguehist'] < ($now - 600))) {
			$_SESSION['leaguehist'] = $now;
			$updateHistory = TRUE;
			$queryTemplate = 'REPLACE INTO ' . $websoccer->getConfig('db_prefix') . '_leaguehistory ';
			$queryTemplate .= '(team_id,season_id,user_id,matchday,rank) ';
			$queryTemplate .= 'VALUES (%d,' . $season['id'] . ',%s,%d,%d);';
		}
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$parameters);
		$rank = 0;
		while ($team = $result->fetch_array()) {
			$rank++;
			$team['user_picture'] = UsersDataService::getUserProfilePicture($websoccer,$team['user_picture'],$team['user_email'],20);
			$teams[] = $team;
			// update history
			if ($updateHistory && $team['matches']) {
				$userId = ($team['user_id']) ? $team['user_id'] : 'DEFAULT';
				$query = sprintf($queryTemplate,$team['id'],$userId,$team['matches'],$rank);
				$db->executeQuery($query);
			}
		}
		$result->free();
		return $teams;
	}
	FUNCTION getTeamsOfSeasonOrderedByTableCriteria(WebSoccer $websoccer,DbConnection $db,$seasonId,$type)
	{
		$fromTable = $websoccer->getConfig('db_prefix') . '_team_league_statistics AS S';
		$fromTable .= ' INNER JOIN ' . $websoccer->getConfig('db_prefix') . '_verein AS C ON C.id = S.team_id';
		$fromTable .= ' LEFT JOIN ' . $websoccer->getConfig('db_prefix') . '_user AS U ON C.user_id = U.id';
		$whereCondition = 'S.season_id = %d';
		$parameters = $seasonId;
		$columns['C.id'] = 'id';
		$columns['C.name'] = 'name';
		$columns['C.bild'] = 'picture';
		$fieldPrefix = 'total';
		if ($type == 'home') {
			$fieldPrefix = 'home';
		} else if ($type == 'guest') {
			$fieldPrefix = 'guest';
		}
		$columns['S.' . $fieldPrefix . '_points'] = 'score';
		$columns['S.' . $fieldPrefix . '_goals'] = 'goals';
		$columns['S.' . $fieldPrefix . '_goalsreceived'] = 'goals_received';
		$columns['S.' . $fieldPrefix . '_goalsdiff'] = 'goals_diff';
		$columns['S.' . $fieldPrefix . '_wins'] = 'wins';
		$columns['S.' . $fieldPrefix . '_draws'] = 'draws';
		$columns['S.' . $fieldPrefix . '_losses'] = 'defeats';
		$columns['(S.' . $fieldPrefix . '_wins + S.' . $fieldPrefix . '_draws + S.' . $fieldPrefix . '_losses)'] = 'matches';
		$columns['U.id'] = 'user_id';
		$columns['U.nick'] = 'user_name';
		$columns['U.email'] = 'user_email';
		$columns['U.picture'] = 'user_picture';
		$teams = array();
		$whereCondition .= ' ORDER BY score DESC,goals_diff DESC,wins DESC,draws DESC,goals DESC,name ASC';
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$parameters);
		while ($team = $result->fetch_array()) {
			$team['user_picture'] = UsersDataService::getUserProfilePicture($websoccer,$team['user_picture'],$team['user_email'],20);
			$teams[] = $team;
		}
		$result->free();
		return $teams;
	}
	FUNCTION getTeamsOfLeagueOrderedByAlltimeTableCriteria(WebSoccer $websoccer,DbConnection $db,$leagueId,$type = null)
	{
		$fromTable = $websoccer->getConfig('db_prefix') . '_team_league_statistics AS S';
		$fromTable .= ' INNER JOIN ' . $websoccer->getConfig('db_prefix') . '_verein AS C ON C.id = S.team_id';
		$fromTable .= ' INNER JOIN ' . $websoccer->getConfig('db_prefix') . '_saison AS SEASON ON SEASON.id = S.season_id';
		$fromTable .= ' LEFT JOIN ' . $websoccer->getConfig('db_prefix') . '_user AS U ON C.user_id = U.id';
		$whereCondition = 'SEASON.liga_id = %d';
		$parameters = $leagueId;
		$columns['C.id'] = 'id';
		$columns['C.name'] = 'name';
		$columns['C.bild'] = 'picture';
		$fieldPrefix = 'total';
		if ($type == 'home') {
			$fieldPrefix = 'home';
		} else if ($type == 'guest') {
			$fieldPrefix = 'guest';
		}
		$columns['SUM(S.' . $fieldPrefix . '_points)'] = 'score';
		$columns['SUM(S.' . $fieldPrefix . '_goals)'] = 'goals';
		$columns['SUM(S.' . $fieldPrefix . '_goalsreceived)'] = 'goals_received';
		$columns['SUM(S.' . $fieldPrefix . '_goalsdiff)'] = 'goals_diff';
		$columns['SUM(S.' . $fieldPrefix . '_wins)'] = 'wins';
		$columns['SUM(S.' . $fieldPrefix . '_draws)'] = 'draws';
		$columns['SUM(S.' . $fieldPrefix . '_losses)'] = 'defeats';
		$columns['SUM((S.' . $fieldPrefix . '_wins + S.' . $fieldPrefix . '_draws + S.' . $fieldPrefix . '_losses))'] = 'matches';
		$columns['U.id'] = 'user_id';
		$columns['U.nick'] = 'user_name';
		$columns['U.email'] = 'user_email';
		$columns['U.picture'] = 'user_picture';
		$teams = array();
		$whereCondition .= ' GROUP BY C.id ORDER BY score DESC,goals_diff DESC,wins DESC,draws DESC,goals DESC,name ASC';
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$parameters);
		while ($team = $result->fetch_array()) {
			$team['user_picture'] = UsersDataService::getUserProfilePicture($websoccer,$team['user_picture'],$team['user_email'],20);
			$teams[] = $team;
		}
		$result->free();
		return $teams;
	}
	FUNCTION getTableRankOfTeam(WebSoccer $websoccer,DbConnection $db,$teamId)
	{
		$subQuery = '(SELECT COUNT(*) FROM ' . $websoccer->getConfig('db_prefix') . '_verein AS T2 WHERE' . ' T2.liga_id = T1.liga_id'
				. ' AND (T2.sa_punkte > T1.sa_punkte'
				. ' OR T2.sa_punkte = T1.sa_punkte AND (T2.sa_tore - T2.sa_gegentore) > (T1.sa_tore - T1.sa_gegentore)'
				. ' OR T2.sa_punkte = T1.sa_punkte AND (T2.sa_tore - T2.sa_gegentore) = (T1.sa_tore - T1.sa_gegentore) AND T2.sa_siege > T1.sa_siege'
				. ' OR T2.sa_punkte = T1.sa_punkte AND (T2.sa_tore - T2.sa_gegentore) = (T1.sa_tore - T1.sa_gegentore) AND T2.sa_siege = T1.sa_siege AND T2.sa_tore > T1.sa_tore))';
		$columns = $subQuery . ' + 1 AS RNK';
		$fromTable = $websoccer->getConfig('db_prefix') . '_verein AS T1';
		$whereCondition = 'T1.id = %d';
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$teamId);
		$teamRank = $result->fetch_array();
		$result->free();
		if ($teamRank) {
			return (int) $teamRank['RNK'];
		}
		return NULL;
	}
	FUNCTION getTeamsWithoutUser(WebSoccer $websoccer,DbConnection $db)
	{
		$fromTable = $websoccer->getConfig('db_prefix') . '_verein AS C';
		$fromTable .= ' INNER JOIN ' . $websoccer->getConfig('db_prefix') . '_liga AS L ON C.liga_id = L.id';
		$fromTable .= ' LEFT JOIN ' . $websoccer->getConfig('db_prefix') . '_stadion AS S ON C.stadion_id = S.id';
		$whereCondition = 'nationalteam != \'1\' AND (C.user_id = 0 OR C.user_id IS NULL OR C.interimmanager = \'1\') AND C.status = 1';
		$columns['C.id'] = 'team_id';
		$columns['C.name'] = 'team_name';
		$columns['C.finanz_budget'] = 'team_budget';
		$columns['C.bild'] = 'team_picture';
		$columns['C.strength'] = 'team_strength';
		$columns['L.id'] = 'league_id';
		$columns['L.name'] = 'league_name';
		$columns['L.land'] = 'league_country';
		$columns['S.p_steh'] = 'stadium_p_steh';
		$columns['S.p_sitz'] = 'stadium_p_sitz';
		$columns['S.p_haupt_steh'] = 'stadium_p_haupt_steh';
		$columns['S.p_haupt_sitz'] = 'stadium_p_haupt_sitz';
		$columns['S.p_vip'] = 'stadium_p_vip';
		// order by
		$whereCondition .= ' ORDER BY league_country ASC,league_name ASC,team_name ASC';
		$teams = array();
		$result = $db->querySelect($columns,$fromTable,$whereCondition,array(),300);
		while ($team = $result->fetch_array()) {
			$teams[$team['league_country']][] = $team;
		}
		$result->free();
		return $teams;
	}
	FUNCTION countTeamsWithoutManager(WebSoccer $websoccer,DbConnection $db)
	{
		$result = $db->querySelect('COUNT(*) AS hits',$websoccer->getConfig('db_prefix') . '_verein','(user_id = 0 OR user_id IS NULL) AND status = 1');
		$teams = $result->fetch_array();
		$result->free();
		if (isset($teams['hits'])) {
			return $teams['hits'];
		}
		return NULL;
	}
	FUNCTION findTeamNames(WebSoccer $websoccer,DbConnection $db,$query) {
		$columns = 'name';
		$fromTable = $websoccer->getConfig('db_prefix') . '_verein';
		$whereCondition = 'UPPER(name) LIKE \'%%%s%%\' AND status = 1';
		$result = $db->querySelect($columns,$fromTable,$whereCondition,strtoupper($query),10);
		$teams = array();
		while($team = $result->fetch_array()) {
			$teams[] = $team['name'];
		}
		$result->free();
		return $teams;
	}
	FUNCTION getTeamSize(WebSoccer $websoccer,DbConnection $db,$clubId)
	{
		$columns = 'COUNT(*) AS number';
		$fromTable = $websoccer->getConfig('db_prefix') .'_spieler';
		$whereCondition = 'verein_id = %d AND status = \'1\' AND transfermarkt != \'1\' AND lending_fee = 0';
		$parameters = $clubId;
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$parameters);
		$players = $result->fetch_array();
		$result->free();
		return ($players['number']) ? $players['number'] : 0;
	}
	FUNCTION getTotalPlayersSalariesOfTeam(WebSoccer $websoccer,DbConnection $db,$clubId)
	{
		$columns = 'SUM(vertrag_gehalt) AS salary';
		$fromTable = $websoccer->getConfig('db_prefix') .'_spieler';
		$whereCondition = 'verein_id = %d AND status = \'1\'';
		$parameters = $clubId;
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$parameters);
		$players = $result->fetch_array();
		$result->free();
		return ($players['salary']) ? $players['salary'] : 0;
	}
	FUNCTION getTeamCaptainIdOfTeam(WebSoccer $websoccer,DbConnection $db,$clubId)
	{
		$result = $db->querySelect('captain_id',$websoccer->getConfig('db_prefix') .'_verein','id = %d',$clubId);
		$team = $result->fetch_array();
		$result->free();
		return (isset($team['captain_id'])) ? $team['captain_id'] : 0;
	}
	FUNCTION validateWhetherTeamHasEnoughBudgetForSalaryBid(WebSoccer $websoccer,DbConnection $db,I18n $i18n,$clubId,$salary)
	{
		// get salary sum of all players
		$result = $db->querySelect('SUM(vertrag_gehalt) AS salary_sum',$websoccer->getConfig('db_prefix') .'_spieler','verein_id = %d',$clubId);
		$players = $result->fetch_array();
		$result->free();
		// check if team can afford at least X matches
		$minBudget = ($players['salary_sum'] + $salary) * 2;
		$team = self::getTeamSummaryById($websoccer,$db,$clubId);
		if ($team['team_budget'] < $minBudget) {
			throw new Exception($i18n->getMessage("extend-contract_cannot_afford_offer"));
		}
	}
	FUNCTION _getFromPart(WebSoccer $websoccer)
	{
		$tablePrefix = $websoccer->getConfig('db_prefix');
		$fromTable = $tablePrefix . '_verein AS C';
		$fromTable .= ' LEFT JOIN ' . $tablePrefix . '_liga AS L ON C.liga_id = L.id';
		$fromTable .= ' LEFT JOIN ' . $tablePrefix . '_sponsor AS SPON ON C.sponsor_id = SPON.id';
		$fromTable .= ' LEFT JOIN ' . $tablePrefix . '_user AS U ON C.user_id = U.id';
		$fromTable .= ' LEFT JOIN ' . $tablePrefix . '_user AS DEPUTY ON C.user_id_actual = DEPUTY.id';
		return $fromTable;
	}
	FUNCTION countPlayersOfTeamById($websoccer,$db,$teamId)
	{
		$columns = "COUNT(*) AS size,SUM(marktwert) AS market_value";
		$fromTable = $websoccer->getConfig("db_prefix") . "_spieler";
		$whereCondition = "verein_id = %d and status = 1";
		$result = $db->queryCachedSelect($columns,$fromTable,$whereCondition,$teamId);
		$teamsize = (isset($result[0])) ? $result[0] : array();
		return $teamsize;
	}
	FUNCTION countOutOfLeagueNationPlayersOfTeamById($websoccer,$db,$teamId,$country)
	{
		$columns = "COUNT(*) AS size";
		$fromTable = $websoccer->getConfig("db_prefix") . "_spieler";
		$whereCondition = "verein_id = %d AND status = 1 AND nation != '".$country."'";
		$result = $db->queryCachedSelect($columns,$fromTable,$whereCondition,$teamId);
		$teamoutsize = (isset($result[0])) ? $result[0] : array();
		return $teamoutsize;
	}
	FUNCTION getTeamSizeContract($websoccer,$db,$clubId)
	{
		$columns = 'COUNT(*) AS number';
		$fromTable = $websoccer->getConfig('db_prefix') .'_spieler';
		$whereCondition = 'verein_id = %d AND status = \'1\' AND vertrag_spiele >= 33' ;
		$parameters = $clubId;
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$parameters);
		$players = $result->fetch_array();
		$result->free();
		return ($players['number']) ? $players['number'] : 0;
	}
}