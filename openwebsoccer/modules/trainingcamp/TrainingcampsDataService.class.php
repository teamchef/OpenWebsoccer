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
class TrainingcampsDataService
{
	FUNCTION getCamps($websoccer,$db)
	{
		$fromTable = $websoccer->getConfig('db_prefix') . '_trainingslager';
		// where
		$whereCondition = '1=1 ORDER BY name ASC';
		$camps = [];
		$result = $db->querySelect(self::_getColumns(),$fromTable,$whereCondition);
		while ($camp = $result->fetch_array()) {
			$camps[] = $camp;
		}
		$result->free();
		return $camps;
	}
	FUNCTION getCampBookingsByTeam($websoccer,$db,$teamId)
	{
		$fromTable = $websoccer->getConfig('db_prefix') . '_trainingslager_belegung AS B';
		$fromTable .= ' INNER JOIN ' . $websoccer->getConfig('db_prefix') . '_trainingslager AS C ON C.id = B.lager_id';
		$columns['B.id'] = 'id';
		$columns['B.datum_start'] = 'date_start';
		$columns['B.datum_ende'] = 'date_end';
		$columns['C.name'] = 'name';
		$columns['C.land'] = 'country';
		$columns['C.preis_spieler_tag'] = 'costs';
		$columns['C.p_staerke'] = 'effect_strength';
		$columns['C.p_technik'] = 'effect_strength_technique';
		$columns['C.p_kondition'] = 'effect_strength_stamina';
		$columns['C.p_frische'] = 'effect_strength_freshness';
		$columns['C.p_zufriedenheit'] = 'effect_strength_satisfaction';
		// where
		$whereCondition = 'B.verein_id = %d ORDER BY B.datum_start DESC';
		$camps = [];
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$teamId);
		while ($camp = $result->fetch_array()) {
			$camps[] = $camp;
		}
		$result->free();
		return $camps;
	}
	FUNCTION getCampById($websoccer,$db,$campId)
	{
		$fromTable = $websoccer->getConfig('db_prefix') . '_trainingslager';
		$whereCondition = 'id = %d';
		$result = $db->querySelect(self::_getColumns(),$fromTable,$whereCondition,$campId);
		$camp = $result->fetch_array();
		$result->free();
		return $camp;
	}
	FUNCTION executeCamp($websoccer,$db,$teamId,$bookingInfo)
	{
		$players = PlayersDataService::getPlayersOfTeamById($websoccer,$db,$teamId);
		if (count($players)) {
			$playerTable = $websoccer->getConfig('db_prefix') . '_spieler';
			$updateCondition = 'id = %d';
			$duration = round(($bookingInfo['date_end'] - $bookingInfo['date_start']) / (24 * 3600));
			// update players
			foreach ($players as $player) {
				if ($player['matches_injured'] > 0) {
					continue;
				}
				$columns = [];
				$columns['w_staerke'] = min(100,max(1,$bookingInfo['effect_strength'] * $duration + $player['strength']));
				$columns['w_technik'] = min(100,max(1,$bookingInfo['effect_strength_technique'] * $duration + $player['strength_technic']));
				$columns['w_kondition'] = min(100,max(1,$bookingInfo['effect_strength_stamina'] * $duration + $player['strength_stamina']));
				$columns['w_frische'] = min(100,max(1,$bookingInfo['effect_strength_freshness'] * $duration + $player['strength_freshness']));
				$columns['w_zufriedenheit'] = min(100,max(1,$bookingInfo['effect_strength_satisfaction'] * $duration + $player['strength_satisfaction']));
				$db->queryUpdate($columns,$playerTable,$updateCondition,$player['id']);
			}
		}
		// delete booking
		$db->queryDelete($websoccer->getConfig('db_prefix') . '_trainingslager_belegung','id = %d',$bookingInfo['id']);
	}
	FUNCTION _getColumns()
	{
		$columns['id'] = 'id';
		$columns['name'] = 'name';
		$columns['land'] = 'country';
		$columns['preis_spieler_tag'] = 'costs';
		$columns['p_staerke'] = 'effect_strength';
		$columns['p_technik'] = 'effect_strength_technique';
		$columns['p_kondition'] = 'effect_strength_stamina';
		$columns['p_frische'] = 'effect_strength_freshness';
		$columns['p_zufriedenheit'] = 'effect_strength_satisfaction';
		return $columns;
	}
}
