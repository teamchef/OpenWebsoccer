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
class PlayerDetailsWithDependenciesModel extends BaseModel
{
	FUNCTION getTemplateParameters()
	{
		$playerId = (int) $this->_websoccer->getRequestParameter("id");
		if ($playerId < 1) {
			throw new Exception($this->_i18n->getMessage(MSG_KEY_ERROR_PAGENOTFOUND));
		}
		$player = PlayersDataService::getPlayerById($this->_websoccer, $this->_db, $playerId);
		if (!isset($player["player_id"])) {
			throw new Exception($this->_i18n->getMessage(MSG_KEY_ERROR_PAGENOTFOUND));
		}
		$grades = $this->_getGrades($playerId);
		$transfers = TransfermarketDataService::getCompletedTransfersOfPlayer($this->_websoccer, $this->_db, $playerId);
		return array("player" => $player, "grades" => $grades, "completedtransfers" => $transfers);
	}
	FUNCTION _getGrades($playerId)
	{
		$grades = array();
		$fromTable = $this->_websoccer->getConfig("db_prefix") ."_spiel_berechnung";
		$columns = "note AS grade";
		$whereCondition = "spieler_id = %d AND minuten_gespielt > 0 ORDER BY id DESC";
		$parameters = $playerId;
		$result = $this->_db->querySelect($columns, $fromTable, $whereCondition, $parameters, 10);
		while ($grade = $result->fetch_array()) {
			$grades[] = $grade["grade"];
		}
		$grades = array_reverse($grades);
		return $grades;
	}
}