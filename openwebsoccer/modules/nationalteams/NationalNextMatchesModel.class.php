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
 * Provides next matches of current user's national team.
 */
class NationalNextMatchesModel extends BaseModel {
	public function renderView() {
		return $this->_websoccer->getConfig("nationalteams_enabled");
	}
	public function getTemplateParameters() {
		// get team info
		$teamId = NationalteamsDataService::getNationalTeamManagedByCurrentUser($this->_websoccer, $this->_db);
		if (!$teamId) {
			throw new Exception($this->_i18n->getMessage("nationalteams_user_requires_team"));
		}
		$matchesCount = NationalteamsDataService::countNextMatches($this->_websoccer, $this->_db, $teamId);
		// setup paginator
		$eps = 5;
		$paginator = new Paginator($matchesCount, $eps, $this->_websoccer);
		$paginator->addParameter("block", "national-next-matches");
		$matches = array();
		if ($matchesCount) {
			$matches = NationalteamsDataService::getNextMatches($this->_websoccer, $this->_db, $teamId, $paginator->getFirstIndex(), $eps);
		}
		return array("paginator" => $paginator, "matches" => $matches);
	}
}