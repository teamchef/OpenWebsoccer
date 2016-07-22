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
class BadgesDataService
{
	FUNCTION awardBadgeIfApplicable($websoccer,$db,$userId,$badgeEvent,$benchmark = NULL)
	{
		// get possible badge
		$badgeTable = $websoccer->getConfig('db_prefix') . '_badge';
		$badgeUserTable = $websoccer->getConfig('db_prefix') . '_badge_user';
		$parameters = [$badgeEvent];
		$whereCondition = 'event = \'%s\'';
		if ($benchmark !== NULL) {
			$whereCondition .= ' AND event_benchmark <= %d';
			$parameters[] = $benchmark;
		}
		$whereCondition .= ' ORDER BY level DESC';
		$result = $db->querySelect('id,name,level',$badgeTable,$whereCondition,$parameters,1);
		$badge = $result->fetch_array();
		$result->free();
		if (!$badge) {
			return;
		}
		// check whether it is better than what the user already has
		$fromTable = $badgeTable . ' INNER JOIN ' . $badgeUserTable . ' ON id = badge_id';
		$whereCondition = 'user_id = %d AND event = \'%s\' AND level >= \'%s\'';
		$result = $db->querySelect('COUNT(*) AS hits',$fromTable,$whereCondition,[$userId,$badgeEvent,$badge['level']],1);
		$userBadges = $result->fetch_array();
		$result->free();
		if ($userBadges && $userBadges['hits']) {
			return;
		}
		self::awardBadge($websoccer,$db,$userId,$badge['id']);
	}
	FUNCTION awardBadge($websoccer,$db,$userId,$badgeId)
	{
		$badgeUserTable = $websoccer->getConfig('db_prefix') . '_badge_user';
		// create assignment
		$db->queryInsert([ 'user_id' => $userId,'badge_id' => $badgeId,'date_rewarded' => $websoccer->getNowAsTimestamp()
		],$badgeUserTable);
		// notify lucky user
		NotificationsDataService::createNotification($websoccer,$db,$userId,'badge_notification',null,'badge','user','id=' . $userId);
	}
}
