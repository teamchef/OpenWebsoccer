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
class NotificationsDataService
{
	FUNCTION createNotification($websoccer,$db,$userId,$messageKey,$messageData = null,$type = null,$targetPageId = null,$targetPageQueryString = null,$teamId = null)
	{
		$columns = [ 'user_id' => $userId,'eventdate' => $websoccer->getNowAsTimestamp(),'message_key' => $messageKey ];
		if ($messageData !== null) {
			$columns['message_data'] = json_encode($messageData);
		}
		if ($type !== null) {
			$columns['eventtype'] = $type;
		}
		if ($targetPageId !== null) {
			$columns['target_pageid'] = $targetPageId;
		}
		if ($targetPageQueryString !== null) {
			$columns['target_querystr'] = $targetPageQueryString;
		}
		if ($teamId !== null) {
			$columns['team_id'] = $teamId;
		}
		$db->queryInsert($columns,$websoccer->getConfig('db_prefix') . '_notification');
	}
	FUNCTION countUnseenNotifications($websoccer,$db,$userId,$teamId)
	{
		$result = $db->querySelect('COUNT(*) AS hits',$websoccer->getConfig('db_prefix') . '_notification','user_id = %d AND seen = \'0\' AND (team_id = %d OR team_id IS NULL)',[$userId,$teamId]);
		$rows = $result->fetch_array();
		$result->free();
		if ($rows) {
			return $rows['hits'];
		}
		return NULL;
	}
	FUNCTION getLatestNotifications($websoccer,$db,$i18n,$userId,$teamId,$limit)
	{
		$result = $db->querySelect('*',$websoccer->getConfig('db_prefix') . '_notification','user_id = %d AND (team_id = %d OR team_id IS NULL) ORDER BY eventdate DESC',[$userId,$teamId],$limit);
		$notifications = [];
		while ($row = $result->fetch_array()) {
			$notification = [ 'id' => $row['id'],'eventdate' => $row['eventdate'],'eventtype' => $row['eventtype'],'seen' => $row['seen'] ];
			// prepare message
			if ($i18n->hasMessage($row['message_key'])) {
				$message = $i18n->getMessage($row['message_key']);
			} else {
				$message = $row['message_key'];
			}
			// replace place holders
			if (strlen($row['message_data'])) {
				$messageData = json_decode($row['message_data'],true);
				if ($messageData) {
					foreach ($messageData as $placeholderName => $placeholderValue) {
						$message = str_replace('{' . $placeholderName . '}',htmlspecialchars($placeholderValue,ENT_COMPAT,'UTF-8'),$message);
					}
				}
			}
			$notification['message'] = $message;
			// add target link
			$link = '';
			if ($row['target_pageid']) {
				if ($row['target_querystr']) {
					$link = $websoccer->getInternalUrl($row['target_pageid'],$row['target_querystr']);
				} else {
					$link = $websoccer->getInternalUrl($row['target_pageid']);
				}
			}
			$notification['link'] = $link;
			$notifications[] = $notification;
		}
		return $notifications;
	}
}
