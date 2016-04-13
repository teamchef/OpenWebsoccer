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
class SaveTicketsController extends BaseModel
{
	public function __construct($i18n, $websoccer, $db)
	{
		parent::__construct($db, $i18n, $websoccer);
	}
	public function executeAction($parameters)
	{
		$user = $this->_websoccer->getUser();
		$clubId = $user->getClubId($this->_websoccer, $this->_db);
		if (!$clubId) {
			return null;
		}
		$columns["preis_stehen"] = $parameters["p_stands"];
		$columns["preis_sitz"] = $parameters["p_seats"];
		$columns["preis_haupt_stehen"] = $parameters["p_stands_grand"];
		$columns["preis_haupt_sitze"] = $parameters["p_seats_grand"];
		$columns["preis_vip"] = $parameters["p_vip"];
		$fromTable = $this->_websoccer->getConfig("db_prefix") . "_verein";
		$whereCondition = "id = %d";
		$parameters = $clubId;
		$this->_db->queryUpdate($columns, $fromTable, $whereCondition, $parameters);
		// success message
		$this->_websoccer->addFrontMessage(new FrontMessage(MESSAGE_TYPE_SUCCESS, $this->_i18n->getMessage("saved_message_title"), ""));
		return null;
	}
}