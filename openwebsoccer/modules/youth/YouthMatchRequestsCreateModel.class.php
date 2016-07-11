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
class YouthMatchRequestsCreateModel extends BaseModel
{
	FUNCTION renderView()
	{
		return $this->_websoccer->getConfig("youth_enabled");
	}
	FUNCTION getTemplateParameters()
	{
		$timeOptions = array();
		$maxDays = $this->_websoccer->getConfig("youth_matchrequest_max_futuredays");
		$times = explode(",", $this->_websoccer->getConfig("youth_matchrequest_allowedtimes"));
		$validTimes = array();
		foreach($times as $time) {
			$validTimes[] = explode(":", $time);
		}
		$dateOptions = array();
		$dateObj = new DateTime();
		$dateFormat = $this->_websoccer->getConfig("datetime_format");
		for ($day = 1; $day <= $maxDays; $day++) {
			$dateObj->add(new DateInterval('P1D'));
			foreach ($validTimes as $validTime) {
				$hour = $validTime[0];
				$minute = $validTime[1];
				$dateObj->setTime($hour, $minute);
				$dateOptions[$dateObj->getTimestamp()] = $dateObj->format($dateFormat);
			}
		}
		return array("dateOptions" => $dateOptions);
	}
}