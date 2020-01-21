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
class SimulationTeam {
	/**
	 * @var int actual ID
	 */
	public $id;
	/**
	 * @var string team name.
	 */
	public $name;
	/**
	 * @var boolean Indicates whether team is a national team.
	 */
	public $isNationalTeam;
	/**
	 * @var boolean Indicates whether team is managed by an interim manager.
	 */
	public $isManagedByInterimManager;
	/**
	 * @var array with key=player position,value=array of players at this position
	 */
	public $positionsAndPlayers;
	/**
	 * @var array array with key=player ID and value=player instance
	 */
	public $playersOnBench;
	/**
	 * @var int percent of how offensive the team shall play.
	 */
	public $offensive;
	/**
	 * @var string formation setup (e.g. 4-1-3-1-1)
	 */
	public $setup;
	/**
	 * @var int number of shot goals.
	 */
	private $goals;
	/**
	 * @var array Array of SimulationSubstitution. Contains both planned and actual substitutions,maximum 3.
	 */
	public $substitutions;
	/**
	 * @var array Removed (due to red card or substitution) players. array with key=player ID,value=player instance
	 */
	public $removedPlayers;
	/**
	 * @var boolean TRUE if team has no valid formation set.
	 */
	public $noFormationSet;
	/**
	 * @var boolean TRUE if players shall try long passes.
	 */
	public $longPasses;
	/**
	 * @var boolean TRUE if players shall try counterattacks.
	 */
	public $counterattacks;
	/**
	 * @var int Team morale in per cent. 0 means,it is not considerable.
	 */
	public $morale;
	/**
	 * @var SimulationPlayer Please who takes free kicks. Not always be set.
	 */
	public $freeKickPlayer;
    FUNCTION __construct($id,$offensive = null) {
    	$this->id = $id;
    	$this->offensive = $offensive;
    	$this->positionsAndPlayers[PLAYER_POSITION_GOALY] = array();
    	$this->positionsAndPlayers[PLAYER_POSITION_DEFENCE] = array();
    	$this->positionsAndPlayers[PLAYER_POSITION_MIDFIELD] = array();
    	$this->positionsAndPlayers[PLAYER_POSITION_STRIKER] = array();
    	$this->goals = 0;
    	$this->morale = 0;
    	$this->noFormationSet = FALSE;
    	$this->longPasses = FALSE;
    	$this->counterattacks = FALSE;
    }
    FUNCTION getGoals() {
    	return $this->goals;
    }
    FUNCTION setGoals($goals) {
    	if ($this->goals !== $goals) {
    		$this->goals = $goals;
    	}
    }
    FUNCTION removePlayer($playerToRemove) {
    	$newPositionsAndAplayers = array();
    	$newPositionsAndAplayers[PLAYER_POSITION_GOALY] = array();
    	$newPositionsAndAplayers[PLAYER_POSITION_DEFENCE] = array();
    	$newPositionsAndAplayers[PLAYER_POSITION_MIDFIELD] = array();
    	$newPositionsAndAplayers[PLAYER_POSITION_STRIKER] = array();
    	foreach ($this->positionsAndPlayers as $position => $players) {
    		foreach ($players as $player) {
    			if ($player->id !== $playerToRemove->id) {
    				$newPositionsAndAplayers[$player->position][] = $player;
    			}
    		}
    	}
    	$this->positionsAndPlayers = $newPositionsAndAplayers;
    	$this->removedPlayers[$playerToRemove->id] = $playerToRemove;
    	if ($this->freeKickPlayer != NULL && $this->freeKickPlayer->id == $playerToRemove->id) {
    		$this->freeKickPlayer = NULL;
    	}
    }
    FUNCTION computeTotalStrength(WebSoccer $websoccer,SimulationMatch $match) {
    	$sum = 0;
    	foreach ($this->positionsAndPlayers as $position => $players) {
    		foreach ($players as $player) {
    			$sum += $player->getTotalStrength($websoccer,$match);
    		}
    	}
    	return $sum;
    }
    FUNCTION cleanReferences() {
    	unset($this->substitutions);
    	unset($this->positionsAndPlayers);
    	unset($this->playersOnBench);
    	unset($this->removedPlayers);
    }
}
