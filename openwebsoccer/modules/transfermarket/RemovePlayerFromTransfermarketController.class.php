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
class RemovePlayerFromTransfermarketController extends BaseModel
{
	FUNCTION __construct($i18n,$websoccer,$db)
	{
		parent::__construct($db,$i18n,$websoccer);
	}
	FUNCTION executeAction($parameters)
	{
		// check if feature is enabled
		if (!$this->_websoccer->getConfig('transfermarket_enabled')) {
			return NULL;
		}
		$user = $this->_websoccer->getUser();
		$clubId = $user->getClubId($this->_websoccer,$this->_db);
		// check if it is own player
		$player = PlayersDataService::getPlayerById($this->_websoccer,$this->_db,$parameters['id']);
		if ($clubId !== $player['team_id']) {
			throw new Exception('nice try');
		}
		// check if there is already a bid
		$highestBid = TransfermarketDataService::getHighestBidForPlayer($this->_websoccer,$this->_db,$parameters['id'],$player['transfer_start'],$player['transfer_end']);
		if ($highestBid) {
			throw new Exception($this->_i18n->getMessage('transfermarket_remove_err_bidexists'));
		}
		$this->_db->queryUpdate([
			'transfermarkt' => '0',
			'transfer_start' => 0,
			'transfer_ende' => 0
		],$this->_websoccer->getConfig('db_prefix') . '_spieler','id = %d',$parameters['id']);
		// success message
		$this->_websoccer->addFrontMessage(new FrontMessage(MESSAGE_TYPE_SUCCESS,
			$this->_i18n->getMessage('transfermarket_remove_success'),
			''));
		return 'myteam';
	}
}
