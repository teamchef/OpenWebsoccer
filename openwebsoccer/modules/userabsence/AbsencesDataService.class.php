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
class AbsencesDataService
{
	FUNCTION getCurrentAbsenceOfUser(WebSoccer $websoccer,DbConnection $db,$userId)
	{
		$result = $db->querySelect('*',$websoccer->getConfig('db_prefix') . '_userabsence',
				'user_id = %d ORDER BY from_date DESC',$userId,1);
		$absence = $result->fetch_array();
		$result->free();
		return $absence;
	}
	FUNCTION makeUserAbsent(WebSoccer $websoccer,DbConnection $db,$userId,$deputyId,$days)
	{
		// create absence record
		$fromDate = $websoccer->getNowAsTimestamp();
		$toDate = $fromDate + 24 * 3600 * $days;
		$db->queryInsert(array(
				'user_id' => $userId,
				'deputy_id' => $deputyId,
				'from_date' => $fromDate,
				'to_date' => $toDate
		),$websoccer->getConfig('db_prefix') . '_userabsence');
		// update manager reference of managed teams
		$db->queryUpdate(array(
				'user_id' => $deputyId,
				'user_id_actual' => $userId
				),$websoccer->getConfig('db_prefix') . '_verein','user_id = %d',$userId);
		// create notification for deputy
		$user = UsersDataService::getUserById($websoccer,$db,$userId);
		NotificationsDataService::createNotification($websoccer,$db,$deputyId,
			'absence_notification',array('until' => $toDate,'user' => $user['nick']),
			'absence','user');
	}
	FUNCTION confirmComeback(WebSoccer $websoccer,DbConnection $db,$userId)
	{
		$absence = self::getCurrentAbsenceOfUser($websoccer,$db,$userId);
		if (!$absence) {
			return;
		}
		// give back teams
		$db->queryUpdate(array(
				'user_id' => $userId,
				'user_id_actual' => NULL
		),$websoccer->getConfig('db_prefix') . '_verein','user_id_actual = %d',$userId);
		// delete absence(s)
		$db->queryDelete($websoccer->getConfig('db_prefix') . '_userabsence','user_id',$userId);
		// notify deputy
		if ($absence['deputy_id']) {
			$user = UsersDataService::getUserById($websoccer,$db,$userId);
			NotificationsDataService::createNotification($websoccer,$db,$absence['deputy_id'],
				'absence_comeback_notification',array('user' => $user['nick']),
				'absence','user');
		}
	}
}
