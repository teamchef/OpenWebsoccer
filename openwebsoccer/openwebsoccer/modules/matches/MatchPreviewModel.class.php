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
 * Provides match preview information.
 */
class MatchPreviewModel extends BaseModel {
	private $_match;
	public function __construct($db, $i18n, $websoccer)
	{
		parent::__construct($db, $i18n, $websoccer);
		$matchId = (int) $this->_websoccer->getRequestParameter('id');
		$this->_match = MatchesDataService::getMatchById($this->_websoccer, $this->_db, $matchId);
	}
	public function renderView()
	{
		return ($this->_match['match_simulated'] != '1' && !$this->_match['match_minutes']);
	}
	public function getTemplateParameters()
	{
		$latestMatchesHome = $this->_getLatestMatchesByTeam($this->_match['match_home_id']);
		$latestMatchesGuest = $this->_getLatestMatchesByTeam($this->_match['match_guest_id']);
		return array('match' => $this->_match,
				'latestMatchesHome' => $latestMatchesHome, 'latestMatchesGuest' => $latestMatchesGuest,
				'homeUser' => $this->_getUserInfoByTeam($this->_match['match_home_id']),
				'guestUser' => $this->_getUserInfoByTeam($this->_match['match_guest_id']));
	}
	private function _getLatestMatchesByTeam($teamId)
	{
		$whereCondition = "M.berechnet = 1 AND (HOME.id = %d OR GUEST.id = %d)";
		$parameters = array($teamId, $teamId);
		if ($this->_match['match_season_id']) {
			$whereCondition .= ' AND M.saison_id = %d';
			$parameters[] = $this->_match['match_season_id'];
		} elseif (strlen($this->_match['match_cup_name'])) {
			$whereCondition .= ' AND M.pokalname = \'%s\'';
			$parameters[] = $this->_match['match_cup_name'];
		} else {
			$whereCondition .= ' AND M.spieltyp = \'Freundschaft\'';
		}
		$whereCondition .= " ORDER BY M.datum DESC";
		return MatchesDataService::getMatchesByCondition($this->_websoccer, $this->_db, $whereCondition, $parameters, 5);
	}
	private function _getUserInfoByTeam($teamId)
	{
		$columns = 'U.id AS user_id, nick, email, picture';
		$fromTable = $this->_websoccer->getConfig('db_prefix') . '_user AS U INNER JOIN ' . $this->_websoccer->getConfig('db_prefix') . '_verein AS C ON C.user_id = U.id';
		$result = $this->_db->querySelect($columns, $fromTable, 'C.id = %d', $teamId);
		$user = $result->fetch_array();
		$result->free();
		if ($user) {
			$user['picture'] = UsersDataService::getUserProfilePicture($this->_websoccer, $user['picture'], $user['email'], 120);
		}
		return $user;
	}
}
