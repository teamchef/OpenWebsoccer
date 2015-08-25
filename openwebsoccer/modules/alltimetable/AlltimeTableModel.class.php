<?php
/******************************************************

  This file is part of OpenWebSoccer-Sim.

  OpenWebSoccer-Sim is free software: you can redistribute it
  and/or modify it under the terms of the
  GNU Lesser General Public License
  as published by the Free Software Foundation, either version 3 of
  the License, or any later version.

  OpenWebSoccer-Sim is distributed in the hope that it will be
  useful, but WITHOUT ANY WARRANTY; without even the implied
  warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
  See the GNU Lesser General Public License for more details.

  You should have received a copy of the GNU Lesser General Public
  License along with OpenWebSoccer-Sim.
  If not, see <http://www.gnu.org/licenses/>.

******************************************************/

class AlltimeTableModel implements IModel {

	public function __construct($db, $i18n, $websoccer) {
		$this->_db = $db;
		$this->_i18n = $i18n;
		$this->_websoccer = $websoccer;

		$this->_leagueId = (int) $this->_websoccer->getRequestParameter("id");
		$this->_type = $this->_websoccer->getRequestParameter("type");

		$clubId = $this->_websoccer->getUser()->getClubId($this->_websoccer, $this->_db);

		include 'set_league.php';
	}

	public function renderView() {

		return ($this->_leagueId  > 0);
	}

	public function getTemplateParameters() {
		$teams = TeamsDataService::getTeamsOfLeagueOrderedByAlltimeTableCriteria($this->_websoccer, $this->_db, $this->_leagueId, $this->_type);

		return array("leagueId" => $this->_leagueId, "teams" => $teams);
	}
}

?>