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
class MatchReportSimulationObserver implements ISimulationObserver {
	private $_availableTexts; // key=action type; value=array of message ID
	private $_websoccer;
	private $_db;
	FUNCTION __construct(WebSoccer $websoccer,DbConnection $db)
	{
		$this->_availableTexts = array();
		$this->_websoccer = $websoccer;
		$this->_db = $db;
		// get available text messages
		$fromTable = $websoccer->getConfig('db_prefix') . '_spiel_text';
		$columns = 'id,aktion AS actiontype';
		$result = $db->querySelect($columns,$fromTable,'1=1');
		while ($text = $result->fetch_array()) {
			$this->_availableTexts[$text['actiontype']][] = $text['id'];
		}
		$result->free();
	}
	FUNCTION onGoal(SimulationMatch $match,SimulationPlayer $scorer,SimulationPlayer $goaly)
	{
		$assistPlayerName = ($match->getPreviousPlayerWithBall() !== NULL && $match->getPreviousPlayerWithBall()->team->id == $scorer->team->id)
			? $match->getPreviousPlayerWithBall()->name : '';
		if (strlen($assistPlayerName)) {
			$this->_createMessage($match,'Tor_mit_vorlage',array($scorer->name,$assistPlayerName),($scorer->team->id == $match->homeTeam->id));
		} else {
			$this->_createMessage($match,'Tor',array($scorer->name,$goaly->name),($scorer->team->id == $match->homeTeam->id));
		}
	}
	FUNCTION onShootFailure(SimulationMatch $match,SimulationPlayer $scorer,SimulationPlayer $goaly)
	{
		if (SimulationHelper::getMagicNumber(0,1)) {
			$this->_createMessage($match,'Torschuss_daneben',array($scorer->name,$goaly->name),($scorer->team->id == $match->homeTeam->id));
		} else {
			$this->_createMessage($match,'Torschuss_auf_Tor',array($scorer->name,$goaly->name),($scorer->team->id == $match->homeTeam->id));
		}
	}
	FUNCTION onAfterTackle(SimulationMatch $match,SimulationPlayer $winner,SimulationPlayer $looser)
	{
		if (SimulationHelper::getMagicNumber(0,1)) {
			$this->_createMessage($match,'Zweikampf_gewonnen',array($winner->name,$looser->name),($winner->team->id == $match->homeTeam->id));
		} else {
			$this->_createMessage($match,'Zweikampf_verloren',array($looser->name,$winner->name),($looser->team->id == $match->homeTeam->id));
		}
	}
	FUNCTION onBallPassSuccess(SimulationMatch $match,SimulationPlayer $player)
	{
	}
	FUNCTION onBallPassFailure(SimulationMatch $match,SimulationPlayer $player)
	{
		if ($player->position != PLAYER_POSITION_GOALY) {
			// select random theoretical pass target
			$targetPlayer = SimulationHelper::selectPlayer($player->team,$player->position,$player);
			$this->_createMessage($match,'Pass_daneben',array($player->name,$targetPlayer->name),($player->team->id == $match->homeTeam->id));
		}
	}
	FUNCTION onInjury(SimulationMatch $match,SimulationPlayer $player,$numberOfMatches)
	{
		$this->_createMessage($match,'Verletzung',array($player->name),($player->team->id == $match->homeTeam->id));
	}
	FUNCTION onYellowCard(SimulationMatch $match,SimulationPlayer $player)
	{
		if ($player->yellowCards > 1) {
			$this->_createMessage($match,'Karte_gelb_rot',array($player->name),($player->team->id == $match->homeTeam->id));
		} else {
			$this->_createMessage($match,'Karte_gelb',array($player->name),($player->team->id == $match->homeTeam->id));
		}
	}
	FUNCTION onRedCard(SimulationMatch $match,SimulationPlayer $player,$matchesBlocked)
	{
		$this->_createMessage($match,'Karte_rot',array($player->name),($player->team->id == $match->homeTeam->id));
	}
	FUNCTION onPenaltyShoot(SimulationMatch $match,SimulationPlayer $player,SimulationPlayer $goaly,$successful)
	{
		if ($successful) {
			$this->_createMessage($match,'Elfmeter_erfolg',array($player->name,$goaly->name),($player->team->id == $match->homeTeam->id));
		} else {
			$this->_createMessage($match,'Elfmeter_verschossen',array($player->name,$goaly->name),($player->team->id == $match->homeTeam->id));
		}
	}
	FUNCTION onCorner(SimulationMatch $match,SimulationPlayer $concededByPlayer,SimulationPlayer $targetPlayer)
	{
		$this->_createMessage($match,'Ecke',array($concededByPlayer->name,$targetPlayer->name),($concededByPlayer->team->id == $match->homeTeam->id));
	}
	FUNCTION onFreeKick(SimulationMatch $match,SimulationPlayer $player,SimulationPlayer $goaly,$successful)
	{
		if ($successful) {
			$this->_createMessage($match,'Freistoss_treffer',array($player->name,$goaly->name),($player->team->id == $match->homeTeam->id));
		} else {
			$this->_createMessage($match,'Freistoss_daneben',array($player->name,$goaly->name),($player->team->id == $match->homeTeam->id));
		}
	}
	FUNCTION _createMessage($match,$messageType,$playerNames = null,$isHomeActive = TRUE)
	{
		if (!isset($this->_availableTexts[$messageType])) {
			return;
		}
		$texts = count($this->_availableTexts[$messageType]);
		$index = SimulationHelper::getMagicNumber(0,$texts - 1);
		$messageId = $this->_availableTexts[$messageType][$index];
		$players = '';
		if ($playerNames != null) {
			$players = implode(';',$playerNames);
		}
		$fromTable = $this->_websoccer->getConfig('db_prefix') . '_matchreport';
		$columns['match_id'] = $match->id;
		$columns['minute'] = $match->minute;
		$columns['message_id'] = $messageId;
		$columns['playernames'] = $players;
		$columns['goals'] = $match->homeTeam->getGoals() . ':' . $match->guestTeam->getGoals();
		$columns['active_home'] = $isHomeActive;
		$this->_db->queryInsert($columns,$fromTable);
	}
}
