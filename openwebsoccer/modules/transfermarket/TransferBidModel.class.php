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
class TransferBidModel extends BaseModel
{
	public function renderView()
	{
		$playerId = (int)$this->_websoccer->getRequestParameter('id');
		if ($playerId < 1) {
			throw new Exception($this->_i18n->getMessage(MSG_KEY_ERROR_PAGENOTFOUND));
		}
		$this->_player = PlayersDataService::getPlayerById($this->_websoccer, $this->_db, $playerId);
		return ($this->_player['transfer_end'] > $this->_websoccer->getNowAsTimestamp());
	}
	public function getTemplateParameters()
	{
		$highestBid = TransfermarketDataService::getHighestBidForPlayer($this->_websoccer, $this->_db, $this->_player['player_id'], $this->_player['transfer_start'], $this->_player['transfer_end']);
		return ['player' => $this->_player, 'highestbid' => $highestBid];
	}
}