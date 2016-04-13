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
class PlayersSearchModel extends BaseModel
{
	public function renderView()
	{
		$this->_firstName = $this->_websoccer->getRequestParameter('fname');
		$this->_lastName = $this->_websoccer->getRequestParameter('lname');
		$this->_club = $this->_websoccer->getRequestParameter('club');
		$this->_position = $this->_websoccer->getRequestParameter('position');
		$this->_strength = $this->_websoccer->getRequestParameter('strength');
		$this->_lendableOnly = ($this->_websoccer->getRequestParameter('lendable') === '1') ? TRUE : FALSE;
		// display content only if user entered any filter
		return ($this->_firstName !== null || $this->_lastName !== null || $this->_club !== null || $this->_position !== null || $this->_strength !== null || $this->_lendableOnly);
	}
	public function getTemplateParameters()
	{
		$playersCount = PlayersDataService::findPlayersCount($this->_websoccer, $this->_db, $this->_firstName, $this->_lastName, $this->_club, $this->_position, $this->_strength, $this->_lendableOnly);
		// setup paginator
		$eps = $this->_websoccer->getConfig('entries_per_page');
		$paginator = new Paginator($playersCount, $eps, $this->_websoccer);
		$paginator->addParameter('block', 'playerssearch-results');
		$paginator->addParameter('fname', $this->_firstName);
		$paginator->addParameter('lname', $this->_lastName);
		$paginator->addParameter('club', $this->_club);
		$paginator->addParameter('position', $this->_position);
		$paginator->addParameter('strength', $this->_strength);
		$paginator->addParameter('lendable', $this->_lendableOnly);
		// get players records
		if ($playersCount > 0) {
			$players = PlayersDataService::findPlayers($this->_websoccer, $this->_db, $this->_firstName, $this->_lastName, $this->_club, $this->_position, $this->_strength, $this->_lendableOnly, $paginator->getFirstIndex(), $eps);
		} else {
			$players = [];
		}
		return ['playersCount' => $playersCount, 'players' => $players, 'paginator' => $paginator];
	}
}