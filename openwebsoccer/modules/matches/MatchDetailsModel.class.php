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
class MatchDetailsModel extends BaseModel
{
	FUNCTION getTemplateParameters()
	{
		$matchId = (int) $this->_websoccer->getRequestParameter('id');
		if ($matchId < 1) {
			throw new Exception($this->_i18n->getMessage(MSG_KEY_ERROR_PAGENOTFOUND));
		}
		$match = MatchesDataService::getMatchById($this->_websoccer,$this->_db,$matchId);
		if (!isset($match['match_id'])) {
			throw new Exception($this->_i18n->getMessage(MSG_KEY_ERROR_PAGENOTFOUND));
		}
		$allowTacticChanges = FALSE;
		$reportmessages = array();
		if ($match['match_minutes'] > 0) {
			$reportmessages = MatchesDataService::getMatchReportMessages($this->_websoccer,$this->_db,$this->_i18n,$matchId);
			$userTeamId = $this->_websoccer->getUser()->getClubId($this->_websoccer,$this->_db);
			$userNationalTeamId = NationalteamsDataService::getNationalTeamManagedByCurrentUser($this->_websoccer,$this->_db);
			if (!$match['match_simulated'] && $this->_websoccer->getConfig('sim_allow_livechanges')
					&& ($match['match_home_id'] == $userTeamId || $match['match_guest_id'] == $userTeamId
					|| $match['match_home_id'] == $userNationalTeamId || $match['match_guest_id'] == $userNationalTeamId)) {
				$allowTacticChanges = TRUE;
			}
		}
		$homeStrikerMessages = array();
		$guestStrikerMessages = array();
		foreach ($reportmessages as $reportMessage) {
			$type = $reportMessage['type'];
			if ($type == 'Tor' || $type == 'Tor_mit_vorlage' || $type == 'Elfmeter_erfolg' || $type == 'Freistoss_treffer') {
				if ($reportMessage['active_home']) {
					array_unshift($homeStrikerMessages,$reportMessage);
				} else {
					array_unshift($guestStrikerMessages,$reportMessage);
				}
			}
		}
		return array('match' => $match,'reportmessages' => $reportmessages,'allowTacticChanges' => $allowTacticChanges,	'homeStrikerMessages' => $homeStrikerMessages,'guestStrikerMessages' => $guestStrikerMessages);
	}
}