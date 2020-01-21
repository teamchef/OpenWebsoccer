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
class SimulationHelper
{
	FUNCTION selectItemFromProbabilities($probabilities)
	{
		$magicNo = self::getMagicNumber();
		$oldBoundary = 0;
		foreach ($probabilities as $key => $probability) {
			$newBounday = $oldBoundary + $probability;
			if ($magicNo > $oldBoundary && $magicNo <= $newBounday) {
				return $key;
			}
			$oldBoundary = $newBounday;
		}
		// return last element,since probabilities are not 100 per cent
		return end($probabilities);
	}
	FUNCTION getMagicNumber($min = 1,$max = 100) {
		if ($min == $max) {
			return $min;
		}
		return mt_rand($min,$max);
	}
	FUNCTION selectPlayer($team,$position,$excludePlayer = null)
	{
		$players = array();
		if (isset($team->positionsAndPlayers[$position])) {
			if ($excludePlayer == null || $excludePlayer->position != $position) {
				$players = $team->positionsAndPlayers[$position];
				// filter excludePlayer
			} else {
				foreach ($team->positionsAndPlayers[$position] as $player) {
					if ($player->id !== $excludePlayer->id) {
						$players[] = $player;
					}
				}
			}
		}
		$noOfPlayers = count($players);
		// no player at this position,take next best position
		if ($noOfPlayers < 1) {
			if ($position == PLAYER_POSITION_STRIKER) {
				return self::selectPlayer($team,PLAYER_POSITION_MIDFIELD,$excludePlayer);
			} else if ($position == PLAYER_POSITION_MIDFIELD) {
				return self::selectPlayer($team,PLAYER_POSITION_DEFENCE,$excludePlayer);
			} else if ($position == PLAYER_POSITION_DEFENCE) {
				return self::selectPlayer($team,PLAYER_POSITION_GOALY,$excludePlayer);
			}
			// if no goaly available,get just next available player in order to avoid infinite loop
			foreach ($team->positionsAndPlayers as $pposition => $pplayers) {
				foreach ($pplayers as $player) {
					if ($player->id !== $excludePlayer->id) {
						return $player;
					}
				}
			}
		}
		$player = $players[SimulationHelper::getMagicNumber(0,$noOfPlayers - 1)];
		return $player;
	}
	FUNCTION getOpponentTeam($player,$match)
	{
		return ($match->homeTeam->id == $player->team->id) ? $match->guestTeam : $match->homeTeam;
	}
	FUNCTION getOpponentTeamOfTeam($team,$match)
	{
		return ($match->homeTeam->id == $team->id) ? $match->guestTeam : $match->homeTeam;
	}
	FUNCTION checkAndExecuteSubstitutions(SimulationMatch $match,SimulationTeam $team,$observers)
	{
		$substitutions = $team->substitutions;
		if (!count($substitutions)) {
			return;
		}
		foreach ($substitutions as $substitution) {
			if ($substitution->minute == $match->minute
					&& !isset($team->removedPlayers[$substitution->playerOut->id])
					&& isset($team->playersOnBench[$substitution->playerIn->id])) {
				// check condition
				if ($substitution->condition == SUB_CONDITION_TIE && $match->homeTeam->getGoals() != $match->guestTeam->getGoals()
						|| $substitution->condition == SUB_CONDITION_LEADING && $team->getGoals() <= self::getOpponentTeamOfTeam($team,$match)->getGoals()
						|| $substitution->condition == SUB_CONDITION_DEFICIT && $team->getGoals() >= self::getOpponentTeamOfTeam($team,$match)->getGoals()) {
					// set minute as unreachable,so that it could be replaced by an unplanned substitution.
					// do not simply remove it,because it might become out of sync with DB table entry on state saving.
					$substitution->minute = 999;
					continue;
				}
				$team->removePlayer($substitution->playerOut);
				// determine main position.
				// first: is it specified at substition config?
				// second: has the player a main position? Note that youth players have main position "-"
				// third: add player to his general position,without any main position
				if (strlen($substitution->position)) {
					$mainPosition = $substitution->position;
				} else if (strlen($substitution->playerIn->mainPosition) && $substitution->playerIn->mainPosition != "-") {
					$mainPosition = $substitution->playerIn->mainPosition;
				} else {
					$mainPosition = NULL;
				}
				// determine general position
				if ($mainPosition == NULL) {
					$position = $substitution->playerIn->position;
				} else {
					$positionMapping = self::getPositionsMapping();
					$position = $positionMapping[$mainPosition];
				}
				// strength deduction needed?
				$strength = $substitution->playerIn->strength;
				if ($position != $substitution->playerIn->position) {
					$strength = round($strength * (1 - WebSoccer::getInstance()->getConfig("sim_strength_reduction_wrongposition") / 100));
				} else if ($mainPosition != NULL && $mainPosition != $substitution->playerIn->mainPosition) {
					$strength = round($strength * (1 - WebSoccer::getInstance()->getConfig("sim_strength_reduction_secondary") / 100));
				}
				// updates values
				$substitution->playerIn->position = $position;
				$substitution->playerIn->strength = $strength;
				$substitution->playerIn->mainPosition = $mainPosition;
				// add to playground
				$team->positionsAndPlayers[$substitution->playerIn->position][] = $substitution->playerIn;
				// remove from bench
				unset($team->playersOnBench[$substitution->playerIn->id]);
				foreach ($observers as $observer) {
					$observer->onSubstitution($match,$substitution);
				}
			}
		}
	}
	FUNCTION createUnplannedSubstitutionForPlayer($minute,SimulationPlayer $playerOut)
	{
		$team = $playerOut->team;
		// no players on bench
		if (count($team->playersOnBench) < 1) {
			return FALSE;
		}
		$position = $playerOut->position;
		$player = self::selectPlayerFromBench($team->playersOnBench,$position);
		// no striker on bench,try other positions
		if ($player == NULL && $position == PLAYER_POSITION_STRIKER) {
			$player = self::selectPlayerFromBench($team->playersOnBench,PLAYER_POSITION_MIDFIELD);
			if ($player == NULL) {
				$player = self::selectPlayerFromBench($team->playersOnBench,PLAYER_POSITION_DEFENCE);
			}
			// no midfielder
		} else if ($player == NULL && $position == PLAYER_POSITION_MIDFIELD) {
			$player = self::selectPlayerFromBench($team->playersOnBench,PLAYER_POSITION_DEFENCE);
			if ($player == NULL) {
				$player = self::selectPlayerFromBench($team->playersOnBench,PLAYER_POSITION_STRIKER);
			}
			// no defender
		} else if ($player == NULL && $position == PLAYER_POSITION_DEFENCE) {
			$player = self::selectPlayerFromBench($team->playersOnBench,PLAYER_POSITION_MIDFIELD);
			if ($player == NULL) {
				$player = self::selectPlayerFromBench($team->playersOnBench,PLAYER_POSITION_STRIKER);
			}
		}
		// no appropriate player found
		if ($player == NULL) {
			return FALSE;
		}
		$newsub = new SimulationSubstitution($minute,$player,$playerOut);
		return self::addUnplannedSubstitution($minute,$newsub);
	}
	FUNCTION getPlayersForPenaltyShooting(SimulationTeam $team)
	{
		$players = array();
		$goalkeeper = null;
		foreach($team->positionsAndPlayers as $position => $playersAtPosition) {
			if ($position == PLAYER_POSITION_GOALY && count($playersAtPosition)) {
				$goalkeeper = $playersAtPosition[0];
				continue;
			}
			$players = array_merge($players,$playersAtPosition);
		}
		// sort by strength
		usort($players,array("SimulationHelper","sortByStrength"));
		// append goalkepper to end
		if ($goalkeeper != null) {
			$players[] = $goalkeeper;
		}
		return $players;
	}
	FUNCTION selectPlayerFromBench(&$players,$position)
	{
		foreach ($players as $player) {
			if ($player->position == $position) {
				return $player;
			}
		}
		return NULL;
	}
	FUNCTION addUnplannedSubstitution($minute,SimulationSubstitution $substitution)
	{
		$team = $substitution->playerIn->team;
		// check if player is on bench
		if (!isset($team->playersOnBench[$substitution->playerIn->id]) || $team->playersOnBench[$substitution->playerIn->id] == null) {
			return FALSE;
		}
		// append sub if not yet 3 subs planned
		if (count($team->substitutions) < 3) {
			$team->substitutions[] = $substitution;
			return TRUE;
		}
		// check if player from bench was anyway scheduled for a substitution later.
		// In this case,this later substitution would not be possible,because the player is already on the field.
		// Hence,replace this invalid sub.
		$index = 0;
		foreach ($team->substitutions as $existingSub) {
			if ($existingSub->minute > $minute && $existingSub->playerIn->id == $substitution->playerIn->id) {
				$team->substitutions[$index] = $substitution;
				return TRUE;
			}
			$index++;
		}
		// otherwise replace first sub you can find that has not been executed
		$index = 0;
		foreach ($team->substitutions as $existingSub) {
			if ($existingSub->minute > $minute) {
				$team->substitutions[$index] = $substitution;
				return TRUE;
			}
			$index++;
		}
		return FALSE;
	}
	FUNCTION sortByStrength(SimulationPlayer $a,SimulationPlayer $b)
	{
		return $b->strength - $a->strength;
	}
	FUNCTION getPositionsMapping()
	{
		return array(
				'T' => 'Torwart',
				'LV' => 'Abwehr',
				'IV' => 'Abwehr',
				'RV' => 'Abwehr',
				'DM' => 'Mittelfeld',
				'OM' => 'Mittelfeld',
				'ZM' => 'Mittelfeld',
				'LM' => 'Mittelfeld',
				'RM' => 'Mittelfeld',
				'LS' => 'Sturm',
				'MS' => 'Sturm',
				'RS' => 'Sturm'
		);
	}
}
