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
 * Provides data for starting a new souting execution and also determines whether execution is possible at all.
 */
class YouthScoutingModel extends BaseModel
{
	public function renderView()
	{
		return $this->_websoccer->getConfig("youth_enabled") && $this->_websoccer->getConfig("youth_scouting_enabled");
	}
	public function getTemplateParameters()
	{
		$lastExecutionTimestamp = YouthPlayersDataService::getLastScoutingExecutionTime($this->_websoccer, $this->_db, $this->_websoccer->getUser()->getClubId($this->_websoccer, $this->_db));
		$nextPossibleExecutionTimestamp = $lastExecutionTimestamp + $this->_websoccer->getConfig("youth_scouting_break_hours") * 3600;
		$now = $this->_websoccer->getNowAsTimestamp();
		$scouts = array();
		$countries = array();
		$scoutingPossible = ($nextPossibleExecutionTimestamp <= $now);
		if ($scoutingPossible) {
			$scoutId = (int) $this->_websoccer->getRequestParameter("scoutid");
			if ($scoutId > 0) {
				$countries = YouthPlayersDataService::getPossibleScoutingCountries();
			} else {
				$scouts = YouthPlayersDataService::getScouts($this->_websoccer, $this->_db);
			}
		}
		return array("lastExecutionTimestamp" => $lastExecutionTimestamp,
				"nextPossibleExecutionTimestamp" => $nextPossibleExecutionTimestamp,
				"scoutingPossible" => $scoutingPossible,
				"scouts" => $scouts,
				"countries" => $countries);
	}
}
