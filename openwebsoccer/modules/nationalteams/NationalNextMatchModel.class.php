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
class NationalNextMatchModel extends BaseModel {
	FUNCTION renderView() {
		if (!$this->_websoccer->getConfig('nationalteams_enabled')) {
			return FALSE;
		}
		// get team info
		$this->_teamId = NationalteamsDataService::getNationalTeamManagedByCurrentUser($this->_websoccer, $this->_db);
		if (!$this->_teamId) {
			return FALSE;
		}
		$matchesCount = NationalteamsDataService::countNextMatches($this->_websoccer, $this->_db, $this->_teamId);
		if (!$matchesCount) {
			return FALSE;
		}
		return TRUE;
	}
	FUNCTION getTemplateParameters() {
		$matches = NationalteamsDataService::getNextMatches($this->_websoccer, $this->_db, $this->_teamId, 0, 1);
		return array('match' => $matches[0]);
	}
}