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
class TrainingCampsModel extends BaseModel
{
	public function getTemplateParameters()
	{
		$user = $this->_websoccer->getUser();
		$teamId = $user->getClubId($this->_websoccer, $this->_db);
		if ($teamId < 1) {
			throw new Exception($this->_i18n->getMessage('feature_requires_team'));
		}
		$camps = [];
		$bookedCamp = [];
		$bookedCamps = TrainingcampsDataService::getCampBookingsByTeam($this->_websoccer, $this->_db, $teamId);
		$listCamps = TRUE;
		if (count($bookedCamps)) {
			$bookedCamp = $bookedCamps[0];
			if ($bookedCamp['date_end'] < $this->_websoccer->getNowAsTimestamp()) {
				TrainingcampsDataService::executeCamp($this->_websoccer, $this->_db, $teamId, $bookedCamp);
				$bookedCamp = [];
			} else {
				$listCamps = FALSE;
			}
		}
		// provide camps to book
		if ($listCamps) {
			$camps = TrainingcampsDataService::getCamps($this->_websoccer, $this->_db);
		}
		return ['bookedCamp' => $bookedCamp, 'camps' => $camps];
	}
}
