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
class Simulator
{
	private $_db;
	private $_websoccer;
	private $_simStrategy;
	private $_observers;
	FUNCTION getSimulationStrategy()
	{
		return $this->_simStrategy;
	}
    FUNCTION __construct(DbConnection $db,WebSoccer $websoccer)
    {
    	$strategyClass = $websoccer->getConfig('sim_strategy');
    	if (!class_exists($strategyClass)) {
    		throw new Exception('simulation strategy class not found: ' . $strategyClass);
    	}
    	$this->_websoccer = $websoccer;
    	$this->_db = $db;
    	$this->_simStrategy = new $strategyClass($websoccer);
    	$this->_simStrategy->attachObserver(new DefaultSimulationObserver());
    	$this->_observers = array();
    }
    FUNCTION attachObserver(ISimulatorObserver $observer) {
    	$this->_observers[] = $observer;
    }
    FUNCTION simulateMatch(SimulationMatch $match,$minutes) {
    	if ($match->minute == null) {
    		$match->minute = 0;
    	}
    	// start the match
    	if ($match->minute == 0) {
	    	foreach ($this->_observers as $observer) {
	    		$observer->onBeforeMatchStarts($match);
	    	}
    	}
    	// match might be completed already before simulation,e.g. when there is no formation provided
    	if ($match->isCompleted) {
    		$this->completeMatch($match);
    		return;
    	}
    	// complete match if team has no players
    	if (!$this->_hasPlayers($match->homeTeam) || !$this->_hasPlayers($match->guestTeam)) {
    		$this->completeMatch($match);
    		return;
    	}
    	for ($simMinute = 1; $simMinute <= $minutes; $simMinute++) {
    		$match->minute = $match->minute + 1;
    		if ($match->minute == 1) {
    			$this->_simStrategy->kickoff($match);
    		} else {
    			SimulationHelper::checkAndExecuteSubstitutions($match,$match->homeTeam,$this->_observers);
    			SimulationHelper::checkAndExecuteSubstitutions($match,$match->guestTeam,$this->_observers);
    		}
    		// execute next action
    		$actionName = $this->_simStrategy->nextAction($match);
    		$this->_simStrategy->$actionName($match);
    		// increase minutes played
    		$this->_increaseMinutesPlayed($match->homeTeam);
    		$this->_increaseMinutesPlayed($match->guestTeam);
    		// match ended?
    		// two possibilities:
    		// a. Normal matches end after regular time
    		// b. if penalty shooting is enabled,play extension if there is no result after 90 minutes
    		$lastMinute = 90 + SimulationHelper::getMagicNumber(1,5);
    		if ($match->penaltyShootingEnabled || $match->type == 'Pokalspiel') {
    			// match ended after regular or extension time with a winner
    			if (($match->minute == 91 || $match->minute == 121)
    				&& ($match->type != 'Pokalspiel' && $match->homeTeam->getGoals() != $match->guestTeam->getGoals()
    						|| $match->type == 'Pokalspiel' && !SimulationCupMatchHelper::checkIfExtensionIsRequired($this->_websoccer,$this->_db,$match))) {
    				$this->completeMatch($match);
    				break;
    				// no winner after extension time -> penalty shooting
    			} elseif ($match->minute == 121
    					&& ($match->type != 'Pokalspiel' && $match->homeTeam->getGoals() == $match->guestTeam->getGoals()
    							|| $match->type == 'Pokalspiel' && SimulationCupMatchHelper::checkIfExtensionIsRequired($this->_websoccer,$this->_db,$match))) {
    				$this->_simStrategy->penaltyShooting($match);
    				// we have a winner now
    				if ($match->type == 'Pokalspiel') {
    					// home team won
    					if ($match->homeTeam->getGoals() > $match->guestTeam->getGoals()) {
    						SimulationCupMatchHelper::createNextRoundMatchAndPayAwards($this->_websoccer,$this->_db,
    							$match->homeTeam->id,$match->guestTeam->id,$match->cupName,$match->cupRoundName);
    					// guest team won
    					} else {
    						SimulationCupMatchHelper::createNextRoundMatchAndPayAwards($this->_websoccer,$this->_db,
    							$match->guestTeam->id,$match->homeTeam->id,$match->cupName,$match->cupRoundName);
    					}
    				}
    				$this->completeMatch($match);
    				break;
    			}
    			// regular match
    		} elseif ($match->minute >= $lastMinute) {
    			$this->completeMatch($match);
    			break;
    		}
    	}
    }
    FUNCTION completeMatch($match) {
    	$match->isCompleted = TRUE;
    	foreach ($this->_observers as $observer) {
    		$observer->onMatchCompleted($match);
    	}
    	// trigger plug-ins
    	$event = new MatchCompletedEvent($this->_websoccer,$this->_db,I18n::getInstance($this->_websoccer->getConfig('supported_languages')),
    			$match);
    	PluginMediator::dispatchEvent($event);
    }
    // updates player statistics after each played minute (players loose freshness over time etc.)
    FUNCTION _increaseMinutesPlayed(SimulationTeam $team) {
    	foreach ($team->positionsAndPlayers as $position => $players) {
    		foreach ($players as $player) {
    			$player->setMinutesPlayed($player->getMinutesPlayed() + 1,
    					$this->_websoccer->getConfig('sim_decrease_freshness'));
    		}
    	}
    }
    // determines whether team has enough players on pitch.
    FUNCTION _hasPlayers(SimulationTeam $team) {
    	if (!is_array($team->positionsAndPlayers) || count($team->positionsAndPlayers) == 0) {
    		return FALSE;
    	}
    	$noOfPlayers = 0;
    	foreach ($team->positionsAndPlayers as $position => $players) {
    		foreach ($players as $player) {
    			$noOfPlayers++;
    		}
    	}
    	return ($noOfPlayers > 5);
    }
}
