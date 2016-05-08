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
* Base Version: OpenWebSoccer-Sim  5.2.4-SNAPSHOT - 2015
*
* This Version called "OpenWebsoccer" is a advanced modification
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
defined('OpenWebsoccer') or header('location: ../../index.php');
/**
 * Provides data for information about user's stadium.
 */
class StadiumModel extends BaseModel
{
	public function getTemplateParameters()
	{
		$teamId = $this->_websoccer->getUser()->getClubId($this->_websoccer, $this->_db);
		$stadium = StadiumsDataService::getStadiumByTeamId($this->_websoccer, $this->_db, $teamId);
		$construction = StadiumsDataService::getCurrentConstructionOrderOfTeam($this->_websoccer, $this->_db, $teamId);
		$upgradeCosts = [];
		if ($stadium) {
			$upgradeCosts['pitch'] = StadiumsDataService::computeUpgradeCosts($this->_websoccer, 'pitch', $stadium);
			$upgradeCosts['videowall'] = StadiumsDataService::computeUpgradeCosts($this->_websoccer, 'videowall', $stadium);
			$upgradeCosts['seatsquality'] = StadiumsDataService::computeUpgradeCosts($this->_websoccer, 'seatsquality', $stadium);
			$upgradeCosts['vipquality'] = StadiumsDataService::computeUpgradeCosts($this->_websoccer, 'vipquality', $stadium);
		}
		return ['stadium' => $stadium, 'construction' => $construction, 'upgradeCosts' => $upgradeCosts];
	}
}
