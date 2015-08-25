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

// Start: Auswahl der Liga - wird in zwei Dateien genutzt

if ($this->_leagueId == 0 && $clubId > 0) {
	$result = $db->querySelect("liga_id", $this->_websoccer->getConfig("db_prefix") . "_verein",
		"id = %d", $clubId, 1);
	  $club = $result->fetch_array();
	$result->free();

	$this->_leagueId = $club["liga_id"];
}

// End: Auswahl der Liga by Rolf Joseph / ErdemCan
?>