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
SEC;
class YouthMatchReportSimulationObserver
{
	private $_websoccer;
	private $_db;
	function __construct(WebSoccer $websoccer, DbConnection $db) {
		$this->_websoccer = $websoccer;
		$this->_db = $db;
	}
	public function onGoal(SimulationMatch $match, SimulationPlayer $scorer, SimulationPlayer $goaly)
	{
		YouthMatchesDataService::createMatchReportItem($this->_websoccer, $this->_db, $match->id, $match->minute,
			'ymreport_goal', array('scorer' => $scorer->name), $scorer->team->id == $match->homeTeam->id);
	}
	public function onShootFailure(SimulationMatch $match, SimulationPlayer $scorer, SimulationPlayer $goaly)
	{
		YouthMatchesDataService::createMatchReportItem($this->_websoccer, $this->_db, $match->id, $match->minute,
			'ymreport_attempt', array('scorer' => $scorer->name), $scorer->team->id == $match->homeTeam->id);
	}
	public function onAfterTackle(SimulationMatch $match, SimulationPlayer $winner, SimulationPlayer $looser)
	{
		YouthMatchesDataService::createMatchReportItem($this->_websoccer, $this->_db, $match->id, $match->minute,
			'ymreport_tackle', array('winner' => $winner->name, 'loser' => $looser->name), $winner->team->id == $match->homeTeam->id);
	}
	public function onBallPassSuccess(SimulationMatch $match, SimulationPlayer $player)
	{
	}
	public function onBallPassFailure(SimulationMatch $match, SimulationPlayer $player)
	{
	}
	public function onInjury(SimulationMatch $match, SimulationPlayer $player, $numberOfMatches)
	{
		YouthMatchesDataService::createMatchReportItem($this->_websoccer, $this->_db, $match->id, $match->minute,
			'ymreport_injury', array('player' => $player->name), $player->team->id == $match->homeTeam->id);
	}
	public function onYellowCard(SimulationMatch $match, SimulationPlayer $player)
	{
		if ($player->yellowCards > 1) {
			YouthMatchesDataService::createMatchReportItem($this->_websoccer, $this->_db, $match->id, $match->minute,
				'ymreport_card_yellowred', array('player' => $player->name), $player->team->id == $match->homeTeam->id);
		} else {
			YouthMatchesDataService::createMatchReportItem($this->_websoccer, $this->_db, $match->id, $match->minute,
				'ymreport_card_yellow', array('player' => $player->name), $player->team->id == $match->homeTeam->id);
		}
	}
	public function onRedCard(SimulationMatch $match, SimulationPlayer $player, $matchesBlocked)
	{
		YouthMatchesDataService::createMatchReportItem($this->_websoccer, $this->_db, $match->id, $match->minute,
				'ymreport_card_red', array('player' => $player->name), $player->team->id == $match->homeTeam->id);
	}
	public function onPenaltyShoot(SimulationMatch $match, SimulationPlayer $player, SimulationPlayer $goaly, $successful)
	{
		if ($successful) {
			YouthMatchesDataService::createMatchReportItem($this->_websoccer, $this->_db, $match->id, $match->minute,
				'ymreport_penalty_success', array('player' => $player->name), $player->team->id == $match->homeTeam->id);
		} else {
			YouthMatchesDataService::createMatchReportItem($this->_websoccer, $this->_db, $match->id, $match->minute,
				'ymreport_penalty_failure', array('player' => $player->name), $player->team->id == $match->homeTeam->id);
		}
	}
	public function onCorner(SimulationMatch $match, SimulationPlayer $concededByPlayer, SimulationPlayer $targetPlayer)
	{
	}
	public function onFreeKick(SimulationMatch $match, SimulationPlayer $player, SimulationPlayer $goaly, $successful)
	{
		if ($successful) {
			$this->onGoal($match, $player, $goaly);
		}
	}
}