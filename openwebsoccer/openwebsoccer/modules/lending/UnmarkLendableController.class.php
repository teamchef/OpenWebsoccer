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
defined('OpenWebsoccer') or header('location: ../../index.php');
/**
* Removes offer to borrow a player.
*/
class UnmarkLendableController extends BaseModel
{
	public function __construct($i18n, $websoccer, $db)
	{
		parent::__construct($db, $i18n, $websoccer);
	}
	public function executeAction($parameters)
	{
		$user = $this->_websoccer->getUser();
		$clubId = $user->getClubId($this->_websoccer, $this->_db);
		// check if it is own player. Might be already lent in the meanwhile. Or someone tries to cheat.
		$player = PlayersDataService::getPlayerById($this->_websoccer, $this->_db, $parameters['id']);
		if ($clubId !== $player['team_id']) {
			throw new Exception($this->_i18n->getMessage('lending_err_notownplayer'));
		}
		// check if he is already lent.
		// Then the player is lent to the user itself and he tries to cheat, hence message is not that important.
		if ($player['lending_owner_id'] > 0) {
			throw new Exception($this->_i18n->getMessage('lending_err_borrowed_player'));
		}
		$columns = ['lending_fee' => 0];
		$fromTable = $this->_websoccer->getConfig('db_prefix') . '_spieler';
		$whereCondition = 'id = %d';
		$parameters = $parameters['id'];
		$this->_db->queryUpdate($columns, $fromTable, $whereCondition, $parameters);
		// success message
		$this->_websoccer->addFrontMessage(new FrontMessage(MESSAGE_TYPE_SUCCESS,
		$this->_i18n->getMessage('lending_lendable_unmark_success'), ''));
		return NULL;
	}
}
