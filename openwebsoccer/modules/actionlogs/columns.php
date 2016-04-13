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
// Start: Auslagerung des Array $columns
$fromTable = $websoccer->getConfig('db_prefix') . '_useractionlog AS L';
$fromTable .= ' INNER JOIN ' . $websoccer->getConfig('db_prefix') . '_user AS U ON U.id = L.user_id';
$columns = ['L.id' => 'log_id', 'L.action_id' => 'action_id', 'L.user_id' => 'user_id', 'L.created_date' => 'created_date', 'U.nick' => 'user_name'];
//  End: Auslagerung des Array $columns  by Rolf Joseph / ErdemCan