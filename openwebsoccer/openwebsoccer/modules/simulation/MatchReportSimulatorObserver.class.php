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
* Observer which creates match report texts for each action.
*/
class MatchReportSimulatorObserver implements ISimulatorObserver
{
	private $_availableTexts; // key=action type; value=array of message ID
	private $_websoccer;
	private $_db;
	/**
	*
	* @param WebSoccer $websoccer request context.
	* @param DbConnection $db database connection.
	*/
	function __construct(WebSoccer $websoccer, DbConnection $db)
	{
		$this->_availableTexts = array();
		$this->_websoccer = $websoccer;
		$this->_db = $db;
		// get available text messages
		$fromTable = $websoccer->getConfig('db_prefix') . '_spiel_text';
		$columns = 'id, aktion AS actiontype';
		// only load text messages for substitutions, because this observer does not observes anything else
		$whereCondition = 'aktion = \'Auswechslung\'';
		$result = $db->querySelect($columns, $fromTable, $whereCondition);
		while ($text = $result->fetch_array()) {
			$this->_availableTexts[$text['actiontype']][] = $text['id'];
		}
		$result->free();
	}
	/**
	* @see ISimulatorObserver::onSubstitution()
	*/
	public function onSubstitution(SimulationMatch $match, SimulationSubstitution $substitution)
	{
		$this->_createMessage($match, 'Auswechslung', array($substitution->playerIn->name, $substitution->playerOut->name),
				($substitution->playerIn->team->id == $match->homeTeam->id));
	}
	private function _createMessage($match, $messageType, $playerNames = null, $isHomeActive = TRUE)
	{
		if (!isset($this->_availableTexts[$messageType])) {
			return;
		}
		$texts = count($this->_availableTexts[$messageType]);
		$index = SimulationHelper::getMagicNumber(0, $texts - 1);
		$messageId = $this->_availableTexts[$messageType][$index];
		$players = '';
		if ($playerNames != null) {
			$players = implode(';', $playerNames);
		}
		$fromTable = $this->_websoccer->getConfig('db_prefix') . '_matchreport';
		$columns['match_id'] = $match->id;
		$columns['minute'] = $match->minute;
		$columns['message_id'] = $messageId;
		$columns['playernames'] = $players;
		$columns['active_home'] = $isHomeActive;
		$this->_db->queryInsert($columns, $fromTable);
	}
	/**
	* @see ISimulatorObserver::onMatchCompleted()
	*/
	public function onMatchCompleted(SimulationMatch $match)
	{
		// do nothing since it does not require any special message.
	}
	/**
	* @see ISimulatorObserver::onBeforeMatchStarts()
	*/
	public function onBeforeMatchStarts(SimulationMatch $match)
	{
		// do nothing since it does not require any special message.
	}
}
