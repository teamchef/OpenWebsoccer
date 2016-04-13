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
 * Provides all transferable youth players.
 */
class YouthMarketplaceModel extends BaseModel
{
	public function renderView()
	{
		return $this->_websoccer->getConfig("youth_enabled");
	}
	public function getTemplateParameters()
	{
		$positionFilter = $this->_websoccer->getRequestParameter("position");
		$count = YouthPlayersDataService::countTransferableYouthPlayers($this->_websoccer, $this->_db, $positionFilter);
		$eps = $this->_websoccer->getConfig("entries_per_page");
		$paginator = new Paginator($count, $eps, $this->_websoccer);
		if ($positionFilter != null) {
			$paginator->addParameter("position", $positionFilter);
		}
		$players = YouthPlayersDataService::getTransferableYouthPlayers($this->_websoccer, $this->_db, $positionFilter, $paginator->getFirstIndex(), $eps);
		return array("players" => $players, "paginator" => $paginator);
	}
}