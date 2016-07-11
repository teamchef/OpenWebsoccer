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
class MyScheduleModel extends BaseModel
{
	FUNCTION getTemplateParameters() {
		$matches = array();
		$paginator = null;
		$clubId = $this->_websoccer->getUser()->getClubId($this->_websoccer, $this->_db);
		$whereCondition = '(home_verein = %d OR gast_verein = %d) AND berechnet != \'1\'';
		$parameters = array($clubId, $clubId);
		$result = $this->_db->querySelect('COUNT(*) AS hits', $this->_websoccer->getConfig('db_prefix') . '_spiel', $whereCondition, $parameters);
		$matchesCnt = $result->fetch_array();
		$result->free();
		if ($matchesCnt) {
			$count = $matchesCnt['hits'];
		} else {
			$count = 0;
		}
		if ($count) {
			$whereCondition .= ' ORDER BY M.datum ASC';
			$eps = $this->_websoccer->getConfig("entries_per_page");
			$paginator = new Paginator($count, $eps, $this->_websoccer);
			$matches = MatchesDataService::getMatchesByCondition($this->_websoccer, $this->_db, $whereCondition, $parameters,
					$paginator->getFirstIndex() . ',' . $eps);
		}
		return array("matches" => $matches, "paginator" => $paginator);
	}
}