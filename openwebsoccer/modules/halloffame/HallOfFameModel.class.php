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
/**
* Provides completed seasons and completed cup competitions.
*/
class HallOfFameModel extends BaseModel
{
	FUNCTION getTemplateParameters()
	{
		$leagues = [];
		$cups = [];
		// get seasons
		$columns = [ 'L.name' => 'league_name', 'L.land' => 'league_country', 'S.name' => 'season_name', 'C.id' => 'team_id', 'C.name' => 'team_name', 'C.bild' => 'team_picture' ];
		$fromTable = $this->_websoccer->getConfig('db_prefix') . '_saison AS S';
		$fromTable .= ' INNER JOIN ' . $this->_websoccer->getConfig('db_prefix') . '_liga AS L ON L.id = S.liga_id';
		$fromTable .= ' INNER JOIN ' . $this->_websoccer->getConfig('db_prefix') . '_verein AS C ON C.id = S.platz_1_id';
		$whereCondition = 'S.beendet = \'1\' ORDER BY L.land ASC, L.name ASC, S.id DESC';
		$result = $this->_db->querySelect($columns, $fromTable, $whereCondition);
		while ($season = $result->fetch_array()) {
			$leagues[$season['league_name']][] = $season;
		}
		$result->free();
		// cups
		$columns = [ 'CUP.name' => 'cup_name', 'C.id' => 'team_id', 'C.name' => 'team_name', 'C.bild' => 'team_picture' ];
		$fromTable = $this->_websoccer->getConfig('db_prefix') . '_cup AS CUP';
		$fromTable .= ' INNER JOIN ' . $this->_websoccer->getConfig('db_prefix') . '_verein AS C ON C.id = CUP.winner_id';
		$whereCondition = 'CUP.winner_id IS NOT NULL ORDER BY CUP.id DESC';
		$result = $this->_db->querySelect($columns, $fromTable, $whereCondition);
		while ($cup = $result->fetch_array()) {
			$cups[] = $cup;
		}
		$result->free();
		return ['leagues' => $leagues, 'cups' => $cups];
	}
}