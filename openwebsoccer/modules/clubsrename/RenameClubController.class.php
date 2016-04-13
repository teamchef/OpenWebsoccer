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
* Renames user's current club.
*/
class RenameClubController extends BaseModel
{
	public function __construct($i18n, $websoccer, $db)
	{
		parent::__construct($db, $i18n, $websoccer);
	}
	public function executeAction($parameters)
	{
		// check if feature is enabled
		if (!$this->_websoccer->getConfig('rename_club_enabled')) {
			throw new Exception('feature is disabled');
		}
		$user = $this->_websoccer->getUser();
		$clubId = $user->getClubId($this->_websoccer, $this->_db);
		$team = TeamsDataService::getTeamSummaryById($this->_websoccer, $this->_db, $clubId);
		if (!$team) {
			return NULL;
		}
		// rename club
		$short = strtoupper($parameters['kurz']);
		$this->_db->queryUpdate(['name' => $parameters['name'], 'kurz' => $short],
		$this->_websoccer->getConfig('db_prefix') . '_verein', 'id = %d', $clubId);
		// rename stadium
		$this->_db->queryUpdate(['S.name' => $parameters['stadium']],
		$this->_websoccer->getConfig('db_prefix') . '_verein AS C INNER JOIN ' . $this->_websoccer->getConfig('db_prefix') . '_stadion AS S ON S.id = C.stadion_id', 'C.id = %d', $clubId);
		// success message
		$this->_websoccer->addFrontMessage(new FrontMessage(MESSAGE_TYPE_SUCCESS,
		$this->_i18n->getMessage('rename-club_success'), ''));
		return 'league';
	}
}