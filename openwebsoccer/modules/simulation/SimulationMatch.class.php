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
/**
 * Holds the state of a match during a match simulation.
 */
class SimulationMatch
{
	/**
	 * @var int match ID
	 */
	public $id;
	/**
	 * @var string match type,as defined in the database.
	 */
	public $type;
	/**
	 * @var SimulationTeam home team.
	 */
	public $homeTeam;
	/**
	 * @var SimulationTeam guest team.
	 */
	public $guestTeam;
	/**
	 * @var int current simulation minute (= how many minutes have been simulated so far + 1).
	 */
	public $minute;
	/**
	 * @var boolean TRUE if penaly shooting shall be simulated in case there is no winner.
	 */
	public $penaltyShootingEnabled;
	/**
	 * @var boolean TRUE if match has been fully simulated.
	 */
	public $isCompleted;
	/**
	 * @var string cup name in case it is a cup match.
	 */
	public $cupName;
	/**
	 * @var string cup round name in case it is a cup match.
	 */
	public $cupRoundName;
	/**
	 * @var string cup round group name in case it is a cup match.
	 */
	public $cupRoundGroup;
	/**
	 * @var boolean TRUE if all tickets are sold. FALSE otherwise.
	 */
	public $isSoldOut;
	/**
	 * @var SimulationPlayer player who currently has the ball.
	 */
	private $playerWithBall;
	/**
	 * @var SimulationPlayer player who previously had the ball. Will be stored in order to identfy goal assists.
	 */
	private $previousPlayerWithBall;
	/**
	 * @var boolean TRUE if stadium is not home team's one.
	 */
	public $isAtForeignStadium;
	FUNCTION __construct($id,$homeTeam,$guestTeam,$minute,$playerWithBall = null,$previousPlayerWithBall = null)
	{
		$this->id = $id;
 		$this->homeTeam = $homeTeam;
 		$this->guestTeam = $guestTeam;
		$this->minute = $minute;
 		$this->playerWithBall = $playerWithBall;
 		$this->previousPlayerWithBall = $previousPlayerWithBall;
		$this->isCompleted = FALSE;
 		$this->penaltyShootingEnabled = FALSE;
 		$this->isSoldOut = FALSE;
	}
	FUNCTION getPlayerWithBall()
	{
 		return $this->playerWithBall;
	}
	FUNCTION getPreviousPlayerWithBall()
	{
 		return $this->previousPlayerWithBall;
	}
	FUNCTION setPreviousPlayerWithBall($player)
	{
 		$this->previousPlayerWithBall = $player;
	}
	FUNCTION setPlayerWithBall($player)
	{
 		if ($this->playerWithBall !== NULL && $this->playerWithBall->id !== $player->id) {
 			$player->setBallContacts($player->getBallContacts() + 1);
 			$this->previousPlayerWithBall = $this->playerWithBall;
 		}
 		$this->playerWithBall = $player;
	}
	FUNCTION cleanReferences()
	{
 		$this->homeTeam->cleanReferences();
 		$this->guestTeam->cleanReferences();
 		unset($this->homeTeam);
 		unset($this->guestTeam);
 		unset($this->playerWithBall);
 		unset($this->previousPlayerWithBall);
	}
}
