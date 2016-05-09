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
* Base Version: OpenWebSoccer-Sim 5.2.4-Snapshot vom 21. Juni
*
* This Version called "OpenWebsoccer" is a advanced modification
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
defined('OpenWebsoccer') or header('location: ../../index.php');
/**
 * This event is triggered when a the ticket sold rate is computed during a match simulation, just before the
 * the revenue is saved in DB.
 */
class TicketsComputedEvent extends AbstractEvent
{
	public $match;
	public $stadiumId;
	public $rateStands;
	public $rateSeats;
	public $rateStandsGrand;
	public $rateSeatsGrand;
	public $rateVip;
	function __construct(WebSoccer $websoccer, DbConnection $db, I18n $i18n,
			SimulationMatch $match, $stadiumId,
			&$rateStands, &$rateSeats, &$rateStandsGrand, &$rateSeatsGrand, &$rateVip) {
		parent::__construct($websoccer, $db, $i18n);
		$this->match = $match;
		$this->stadiumId = $stadiumId;
		$this->rateStands =& $rateStands;
		$this->rateSeats =& $rateSeats;
		$this->rateStandsGrand =& $rateStandsGrand;
		$this->rateSeatsGrand =& $rateSeatsGrand;
		$this->rateVip =& $rateVip;
	}
}
