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
class ProfileBlockModel extends BaseModel
{
	FUNCTION renderView()
	{
		return strlen($this->_websoccer->getUser()->username) ? TRUE : FALSE;
	}
	FUNCTION getTemplateParameters()
	{
		$fromTable = $this->_websoccer->getConfig('db_prefix') . '_user';
		$user = $this->_websoccer->getUser();
		// select general information
		$columns = 'fanbeliebtheit AS user_popularity,highscore AS user_highscore';
		$whereCondition = 'id = %d';
		$result = $this->_db->querySelect($columns,$fromTable,$whereCondition,$user->id,1);
		$userinfo = $result->fetch_array();
		$result->free();
		$clubId = $user->getClubId($this->_websoccer,$this->_db);
		// get team info
		$team = null;
		if ($clubId > 0) {
			$team = TeamsDataService::getTeamSummaryById($this->_websoccer,$this->_db,$clubId);
		}
		$this->_teamId = NationalteamsDataService::getNationalTeamManagedByCurrentUser($this->_websoccer,$this->_db);
		if ($this->_teamId) {
			$nationalMatch = MatchesDataService::getNextMatch($this->_websoccer,$this->_db,$this->_teamId);
		}
		// team size
		$teamsize = TeamsDataService::getTeamSize($this->_websoccer,$this->_db,$clubId);            // Zeile hinzugef�gt
		//team rank
		$teamRank = TeamsDataService::getTableRankOfTeam($this->_websoccer,$this->_db,$clubId);        // Zeile hinzugef�gt
		// unread messages
		$unseenMessages = MessagesDataService::countUnseenInboxMessages($this->_websoccer,$this->_db);
		// unseen notifications
		$unseenNotifications = NotificationsDataService::countUnseenNotifications($this->_websoccer,$this->_db,$user->id,$clubId);
		$nextMatch = MatchesDataService::getNextMatch($this->_websoccer,$this->_db,$clubId);
		$secondnextMatch = MatchesDataService::getsecondNextMatch($this->_websoccer,$this->_db,$clubId);
		$thirdnextMatch = MatchesDataService::getthirdNextMatch($this->_websoccer,$this->_db,$clubId);
		$fourthnextMatch = MatchesDataService::getfourthNextMatch($this->_websoccer,$this->_db,$clubId);
		return array('tableRank' => $teamRank,'profile' => $userinfo,'userteam' => $team,'unseenMessages' => $unseenMessages,'unseenNotifications' => $unseenNotifications,'teamsize' => $teamsize,'nextMatch' => $nextMatch,'secondnextMatch' => $secondnextMatch,'thirdnextMatch' => $thirdnextMatch,'fourthnextMatch' => $fourthnextMatch,'nationalMatch' => $nationalMatch,'nationalteam' => $this->_teamId);
	}
}
