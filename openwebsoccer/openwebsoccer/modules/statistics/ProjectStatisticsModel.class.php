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
* Provides general statistics about this website/project.
*/
class ProjectStatisticsModel extends BaseModel
{
	public function getTemplateParameters()
	{
		return ['usersOnline' => UsersDataService::countOnlineUsers($this->_websoccer, $this->_db), 'usersTotal' => UsersDataService::countTotalUsers($this->_websoccer, $this->_db), 'numberOfLeagues' => LeagueDataService::countTotalLeagues($this->_websoccer, $this->_db), 'numberOfFreeTeams' => TeamsDataService::countTeamsWithoutManager($this->_websoccer, $this->_db)];
	}
}
