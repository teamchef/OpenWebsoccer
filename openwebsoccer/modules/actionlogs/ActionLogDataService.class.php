<?php
/******************************************************

  This file is part of OpenWebSoccer-Sim.

  OpenWebSoccer-Sim is free software: you can redistribute it
  and/or modify it under the terms of the
  GNU Lesser General Public License
  as published by the Free Software Foundation, either version 3 of
  the License, or any later version.

  OpenWebSoccer-Sim is distributed in the hope that it will be
  useful, but WITHOUT ANY WARRANTY; without even the implied
  warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
  See the GNU Lesser General Public License for more details.

  You should have received a copy of the GNU Lesser General Public
  License along with OpenWebSoccer-Sim.
  If not, see <http://www.gnu.org/licenses/>.

******************************************************/

//  Start: Zusätzliche Funktion: getAllActionLogs und Auslagerung der Array-Teile


class ActionLogDataService {

	public static function getActionLogsOfUser(WebSoccer $websoccer, DbConnection $db, $userId) {
		include 'columns.php';
		$result = $db->querySelect($columns, $fromTable, 'L.user_id = %d ORDER BY L.created_date DESC', $userId);
		include 'logs.php';
		return $logs;
	}

	public static function getLatestActionLogs(WebSoccer $websoccer, DbConnection $db) {
		include 'columns.php';
		$result = $db->querySelect($columns, $fromTable, '1 ORDER BY L.id DESC', null, 10);
		include 'logs.php';
		return $logs;
	}

	public static function getAllActionLogs(WebSoccer $websoccer, DbConnection $db) {
		include 'columns.php';
		$result = $db->querySelect($columns, $fromTable, '1 ORDER BY L.id DESC', null);
		include 'logs.php';
		return $logs;
	}

	public static function createOrUpdateActionLog(WebSoccer $websoccer, DbConnection $db, $userId, $actionId) {

		$fromTable = $websoccer->getConfig('db_prefix') . '_useractionlog';

		$deleteTimeThreshold = $websoccer->getNowAsTimestamp() - 24 * 3600 * 20;
		$db->queryDelete($fromTable, 'user_id = %d AND created_date < %d', array($userId, $deleteTimeThreshold));

		$timeThreshold = $websoccer->getNowAsTimestamp() - 30 * 60;
		$result = $db->querySelect('id', $fromTable, 'user_id = %d AND action_id = \'%s\' AND created_date >= %d ORDER BY created_date DESC',
				array($userId, $actionId, $timeThreshold), 1);

		$lastLog = $result->fetch_array();
		$result->free();

		if ($lastLog) { $db->queryUpdate(array('created_date' => $websoccer->getNowAsTimestamp()), $fromTable, 'id = %d', $lastLog['id']);

		} else {$db->queryInsert(array(	
					'user_id' => $userId,
					'action_id' => $actionId,
					'created_date' => $websoccer->getNowAsTimestamp()
					), $fromTable);
		}
	}
}

//  End: Zusätzliche Funktion: getAllActionLogs und Auslagerung der Array-Teile by Rolf Joseph / ErdemCan

?>