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
* Base Version: OpenWebSoccer-Sim 5.2.3 - 2015
*
* This Version called "OpenWebsoccer" is a advanced modification
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
defined('OpenWebsoccer') or header('location: ../../index.php');
/**
 * Provides ranking history of current season.
 */
class TableHistoryModel extends BaseModel
{
	public function getTemplateParameters()
	{
		$teamId = (int)$this->_websoccer->getRequestParameter('id');
		if ($teamId < 1) {
			throw new Exception($this->_i18n->getMessage(MSG_KEY_ERROR_PAGENOTFOUND));
		}
		$team = TeamsDataService::getTeamById($this->_websoccer, $this->_db, $teamId);
		if (!isset($team['team_id'])) {
			throw new Exception($this->_i18n->getMessage(MSG_KEY_ERROR_PAGENOTFOUND));
		}
		// get current season
		$result = $this->_db->querySelect('id', $this->_websoccer->getConfig('db_prefix') . '_saison', 'liga_id = %d AND beendet = \'0\' ORDER BY name DESC', $team['team_league_id'], 1);
		$season = $result->fetch_array();
		$result->free();
		// get records
		$history = [];
		if ($season) {
			$columns = [ 'H.matchday' => 'matchday', 'H.rank' => 'rank' ];
			$fromTable = $this->_websoccer->getConfig('db_prefix') . '_leaguehistory AS H';
			$result = $this->_db->querySelect('matchday, rank', $fromTable, 'season_id = %d AND team_id = %s ORDER BY matchday ASC', [$season['id'], $team['team_id']]);
			while ($historyRecord = $result->fetch_array()) {
				$history[] = $historyRecord;
			}
			$result->free();
		}
		// count teams in league
		$result = $this->_db->querySelect('COUNT(*) AS cnt', $this->_websoccer->getConfig('db_prefix') . '_verein', 'liga_id = %d AND status = \'1\'', $team['team_league_id'], 1);
		$teams = $result->fetch_array();
		$result->free();
		return ['teamName' => $team['team_name'], 'history' => $history, 'noOfTeamsInLeague' => $teams['cnt'], 'leagueid' => $team['team_league_id']];
	}
}