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
class NationalMatchResultsModel extends BaseModel
{
	FUNCTION renderView()
	{
		return $this->_websoccer->getConfig("nationalteams_enabled");
	}
	FUNCTION getTemplateParameters()
	{
		// get team info
		$teamId = NationalteamsDataService::getNationalTeamManagedByCurrentUser($this->_websoccer,$this->_db);
		if (!$teamId) {
			throw new Exception($this->_i18n->getMessage("nationalteams_user_requires_team"));
		}
		$matchesCount = NationalteamsDataService::countSimulatedMatches($this->_websoccer,$this->_db,$teamId);
		// setup paginator
		$eps = 5;
		$paginator = new Paginator($matchesCount,$eps,$this->_websoccer);
		$paginator->addParameter("block","national-match-results");
		$matches = array();
		if ($matchesCount) {
			$matches = NationalteamsDataService::getSimulatedMatches($this->_websoccer,$this->_db,$teamId,
					$paginator->getFirstIndex(),$eps);
		}
		return array("paginator" => $paginator,"matches" => $matches);
	}
}
