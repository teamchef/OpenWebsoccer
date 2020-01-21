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
class DirectTransferOfferModel extends BaseModel {
	FUNCTION __construct($db,$i18n,$websoccer) {
		parent::__construct($db,$i18n,$websoccer);
		$playerId = (int) $this->_websoccer->getRequestParameter("id");
		if ($playerId < 1) {
			throw new Exception($this->_i18n->getMessage(MSG_KEY_ERROR_PAGENOTFOUND));
		}
		$this->_player = PlayersDataService::getPlayerById($this->_websoccer,$this->_db,$playerId);
	}
	FUNCTION renderView() {
		// is feature enabled?
		if (!$this->_websoccer->getConfig("transferoffers_enabled")) {
			return FALSE;
		}
		// is player seallable and is playing in a team with a manager; and is not borrowed
		return (!$this->_player["player_unsellable"] && $this->_player["team_user_id"] > 0
				&& $this->_player["team_user_id"] !== $this->_websoccer->getUser()->id
				&& !$this->_player["player_transfermarket"]
				&& $this->_player["lending_owner_id"] == 0);
	}
	FUNCTION getTemplateParameters() {
		$players = array();
		if ($this->_websoccer->getRequestParameter("loadformdata")) {
			$players = PlayersDataService::getPlayersOfTeamByPosition($this->_websoccer,$this->_db,
					 $this->_websoccer->getUser()->getClubId($this->_websoccer,$this->_db));
		}
		return array("players" => $players,"player" => $this->_player);
	}
}
