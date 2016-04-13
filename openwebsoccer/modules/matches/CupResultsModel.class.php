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
 * Provides fixtures of a specified cup round.
 */
class CupResultsModel extends BaseModel
{
	public function getTemplateParameters()
	{
		$cupName = $this->_websoccer->getRequestParameter('cup');
		$cupRound = $this->_websoccer->getRequestParameter('round');
		// get cup round info
		$columns['C.logo'] = 'cup_logo';
		$columns['R.id'] = 'round_id';
		$columns['R.firstround_date'] = 'firstround_date';
		$columns['R.secondround_date'] = 'secondround_date';
		$columns['R.finalround'] = 'is_finalround';
		$columns['R.groupmatches'] = 'is_groupround';
		$columns['PREVWINNERS.name'] = 'prev_round_winners';
		$columns['PREVLOOSERS.name'] = 'prev_round_loosers';
		$fromTable = $this->_websoccer->getConfig('db_prefix') . '_cup_round AS R';
		$fromTable .= ' INNER JOIN ' . $this->_websoccer->getConfig('db_prefix') . '_cup AS C ON C.id = R.cup_id';
		$fromTable .= ' LEFT JOIN ' . $this->_websoccer->getConfig('db_prefix') . '_cup_round AS PREVWINNERS ON PREVWINNERS.id = R.from_winners_round_id';
		$fromTable .= ' LEFT JOIN ' . $this->_websoccer->getConfig('db_prefix') . '_cup_round AS PREVLOOSERS ON PREVLOOSERS.id = R.from_loosers_round_id';
		$result = $this->_db->querySelect($columns, $fromTable, 'C.name = \'%s\' AND R.name = \'%s\'', array($cupName, $cupRound), 1);
		$round = $result->fetch_array();
		$result->free();
		$groups = array();
		$preSelectedGroup = '';
		if ($round['is_groupround']) {
			$userTeamId = $this->_websoccer->getUser()->getClubId($this->_websoccer, $this->_db);
			$result = $this->_db->querySelect('name,team_id', $this->_websoccer->getConfig('db_prefix') . '_cup_round_group',
					'cup_round_id = %d ORDER BY name ASC', array($round['round_id']));
			while ($group = $result->fetch_array()) {
				if (!isset($groups[$group['name']])) {
					$groups[$group['name']] = $group['name'];
				}
				if ($group['team_id'] == $userTeamId) {
					$preSelectedGroup = $group['name'];
				}
			}
			$result->free();
			$matches = array();
		} else {
			$matches = MatchesDataService::getMatchesByCupRound($this->_websoccer, $this->_db, $cupName, $cupRound);
		}
		return array('matches' => $matches, 'round' => $round, 'groups' => $groups, 'preSelectedGroup' => $preSelectedGroup);
	}
}
