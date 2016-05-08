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
defined('OpenWebsoccer') or header('location: ../../index.php');
/**
* Data service for sponsors.
*/
class SponsorsDataService
{
	/**
	* @param WebSoccer $websoccer
	* @param DbConnection $db
	* @param $clubId
	* @return mixed
	* @throws Exception
	*/
	public static function getSponsorinfoByTeamId($websoccer, $db, $clubId)
	{
		$columns['T.sponsor_spiele'] = 'matchdays';
		$columns['S.id'] = 'sponsor_id';
		$columns['S.name'] = 'name';
		$columns['S.b_spiel'] = 'amount_match';
		$columns['S.b_heimzuschlag'] = 'amount_home_bonus';
		$columns['S.b_sieg'] = 'amount_win';
		$columns['S.b_meisterschaft'] = 'amount_championship';
		$columns['S.bild'] = 'picture';
		$fromTable = $websoccer->getConfig('db_prefix') . '_sponsor AS S';
		$fromTable .= ' INNER JOIN ' . $websoccer->getConfig('db_prefix') . '_verein AS T ON T.sponsor_id = S.id';
		$whereCondition = 'T.id = %d AND T.sponsor_spiele > 0';
		$result = $db->querySelect($columns, $fromTable, $whereCondition, $clubId, 1);
		$sponsor = $result->fetch_array();
		$result->free();
		return $sponsor;
	}
	/**
	* @param WebSoccer $websoccer
	* @param DbConnection $db
	* @param $teamId
	* @return array
	* @throws Exception
	*/
	public static function getSponsorOffers($websoccer, $db, $teamId)
	{
		$team = TeamsDataService::getTeamSummaryById($websoccer, $db, $teamId);
		$teamRank = TeamsDataService::getTableRankOfTeam($websoccer, $db, $teamId);
		$columns['S.id'] = 'sponsor_id';
		$columns['S.name'] = 'name';
		$columns['S.b_spiel'] = 'amount_match';
		$columns['S.b_heimzuschlag'] = 'amount_home_bonus';
		$columns['S.b_sieg'] = 'amount_win';
		$columns['S.b_meisterschaft'] = 'amount_championship';
		$fromTable = $websoccer->getConfig('db_prefix') . '_sponsor AS S';
		$whereCondition = 'S.liga_id = %d AND (S.min_platz = 0 OR S.min_platz >= %d)' . ' AND (S.max_teams <= 0 OR S.max_teams > (SELECT COUNT(*) FROM ' . $websoccer->getConfig('db_prefix') . '_verein AS T WHERE T.sponsor_id = S.id AND T.sponsor_spiele > 0))' . ' ORDER BY S.b_spiel DESC';
		$parameters = [$team['team_league_id'], $teamRank];
		return $db->queryCachedSelect($columns, $fromTable, $whereCondition, $parameters, 20);
	}
}
