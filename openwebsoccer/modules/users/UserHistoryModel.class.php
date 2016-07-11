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
class UserHistoryModel extends BaseModel
{
	FUNCTION renderView()
	{
		$this->_userId = (int)$this->_websoccer->getRequestParameter('userid');
		return $this->_userId > 0;
	}
	FUNCTION getTemplateParameters()
	{
		$columns = [
			'TEAM.id' => 'team_id',
			'TEAM.name' => 'team_name',
			'L.name' => 'league_name',
			'SEASON.name' => 'season_name',
			'A.rank' => 'season_rank',
			'A.id' => 'achievement_id',
			'A.date_recorded' => 'achievement_date',
			'CUP.name' => 'cup_name',
			'CUPROUND.name' => 'cup_round_name'
		];
		$tablePrefix = $this->_websoccer->getConfig('db_prefix');
		$fromTable = $tablePrefix . '_achievement AS A';
		$fromTable .= ' INNER JOIN ' . $tablePrefix . '_verein AS TEAM ON TEAM.id = A.team_id';
		$fromTable .= ' LEFT JOIN ' . $tablePrefix . '_saison AS SEASON ON SEASON.id = A.season_id';
		$fromTable .= ' LEFT JOIN ' . $tablePrefix . '_liga AS L ON SEASON.liga_id = L.id';
		$fromTable .= ' LEFT JOIN ' . $tablePrefix . '_cup_round AS CUPROUND ON CUPROUND.id = A.cup_round_id';
		$fromTable .= ' LEFT JOIN ' . $tablePrefix . '_cup AS CUP ON CUP.id = CUPROUND.cup_id';
		$whereCondition = 'A.user_id = %d ORDER BY A.date_recorded DESC';
		$result = $this->_db->querySelect($columns, $fromTable, $whereCondition, $this->_userId);
		$leagues = [];
		$cups = [];
		while ($achievement = $result->fetch_array()) {
			if (strlen($achievement['league_name'])) {
				$leagues[$achievement['league_name']][] = $achievement;
			} else if (!isset($cups[$achievement['cup_name']])) {
				$cups[$achievement['cup_name']] = $achievement;
				// delete achievement, since it is an older cup round than already saved
			} else {
				$this->_db->queryDelete($tablePrefix . '_achievement', 'id = %d', $achievement['achievement_id']);
			}
		}
		$result->free();
		return ['leagues' => $leagues, 'cups' => $cups];
	}
}