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
* Data service for user messages.
*/
class MessagesDataService
{
	/**
	* @param WebSoccer $websoccer
	* @param DbConnection $db
	* @param $startIndex
	* @param $entries_per_page
	* @return array
	*/
	public static function getInboxMessages($websoccer, $db, $startIndex, $entries_per_page)
	{
		$whereCondition = "L.empfaenger_id = %d AND L.typ = 'eingang' ORDER BY L.datum DESC";
		$parameters = $websoccer->getUser()->id;
		return self::getMessagesByCondition($websoccer, $db, $startIndex, $entries_per_page, $whereCondition, $parameters);
	}
	/**
	* @param WebSoccer $websoccer
	* @param DbConnection $db
	* @param $startIndex
	* @param $entries_per_page
	* @return array
	*/
	public static function getOutboxMessages($websoccer, $db, $startIndex, $entries_per_page)
	{
		$whereCondition = "L.absender_id = %d AND L.typ = 'ausgang' ORDER BY L.datum DESC";
		$parameters = $websoccer->getUser()->id;
		return self::getMessagesByCondition($websoccer, $db, $startIndex, $entries_per_page, $whereCondition, $parameters);
	}
	/**
	* @param WebSoccer $websoccer
	* @param DbConnection $db
	* @param $id
	* @return null
	*/
	public static function getMessageById($websoccer, $db, $id)
	{
		$whereCondition = '(L.empfaenger_id = %d OR L.absender_id = %d) AND L.id = %d';
		$userId = $websoccer->getUser()->id;
		$parameters = [$userId, $userId, $id];
		$messages = self::getMessagesByCondition($websoccer, $db, 0, 1, $whereCondition, $parameters);
		if (count($messages)) {
			return $messages[0];
		}
		return NULL;
	}
	/**
	* @param WebSoccer $websoccer
	* @param DbConnection $db
	* @param $userId
	* @return null
	*/
	public static function getLastMessageOfUserId($websoccer, $db, $userId)
	{
		$whereCondition = 'L.absender_id = %d ORDER BY L.datum DESC';
		$userId = $websoccer->getUser()->id;
		$messages = self::getMessagesByCondition($websoccer, $db, 0, 1, $whereCondition, $userId);
		if (count($messages)) {
			return $messages[0];
		}
		return NULL;
	}
	/**
	* @param WebSoccer $websoccer
	* @param DbConnection $db
	* @param $startIndex
	* @param $entries_per_page
	* @param $whereCondition
	* @param $parameters
	* @return array
	* @throws Exception
	*/
	private static function getMessagesByCondition($websoccer, $db, $startIndex, $entries_per_page, $whereCondition, $parameters)
	{
		$columns['L.id'] = 'message_id';
		$columns['L.betreff'] = 'subject';
		$columns['L.nachricht'] = 'content';
		$columns['L.datum'] = 'date';
		$columns['L.gelesen'] = 'seen';
		$columns['R.id'] = 'recipient_id';
		$columns['R.nick'] = 'recipient_name';
		$columns['S.id'] = 'sender_id';
		$columns['S.nick'] = 'sender_name';
		$fromTable = $websoccer->getConfig('db_prefix') . '_briefe AS L';
		$fromTable .= ' INNER JOIN ' . $websoccer->getConfig('db_prefix') . '_user AS R ON R.id = L.empfaenger_id';
		$fromTable .= ' LEFT JOIN ' . $websoccer->getConfig('db_prefix') . '_user AS S ON S.id = L.absender_id';
		$limit = $startIndex . ',' . $entries_per_page;
		$result = $db->querySelect($columns, $fromTable, $whereCondition, $parameters, $limit);
		$messages = [];
		while ($message = $result->fetch_array()) {
			$messages[] = $message;
		}
		$result->free();
		return $messages;
	}
	/**
	* @param WebSoccer $websoccer
	* @param DbConnection $db
	* @return int
	* @throws Exception
	*/
	public static function countInboxMessages($websoccer, $db)
	{
		$userId = $websoccer->getUser()->id;
		$columns = 'COUNT(*) AS hits';
		$fromTable = $websoccer->getConfig('db_prefix') . '_briefe AS L';
		$whereCondition = 'L.empfaenger_id = %d AND typ = "eingang"';
		$result = $db->querySelect($columns, $fromTable, $whereCondition, $userId);
		$letters = $result->fetch_array();
		$result->free();
		if (isset($letters['hits'])) {
			return $letters['hits'];
		}
		return NULL;
	}
	/**
	* @param WebSoccer $websoccer
	* @param DbConnection $db
	* @return int
	* @throws Exception
	*/
	public static function countUnseenInboxMessages($websoccer, $db)
	{
		$userId = $websoccer->getUser()->id;
		$columns = 'COUNT(*) AS hits';
		$fromTable = $websoccer->getConfig('db_prefix') . '_briefe AS L';
		$whereCondition = 'L.empfaenger_id = %d AND typ = "eingang" AND gelesen = "0"';
		$result = $db->querySelect($columns, $fromTable, $whereCondition, $userId);
		$letters = $result->fetch_array();
		$result->free();
		if (isset($letters['hits'])) {
			return $letters['hits'];
		}
		return NULL;
	}
	/**
	* @param WebSoccer $websoccer
	* @param DbConnection $db
	* @return int
	* @throws Exception
	*/
	public static function countOutboxMessages($websoccer, $db)
	{
		$userId = $websoccer->getUser()->id;
		$columns = 'COUNT(*) AS hits';
		$fromTable = $websoccer->getConfig('db_prefix') . '_briefe AS L';
		$whereCondition = 'L.absender_id = %d AND typ = "ausgang"';
		$result = $db->querySelect($columns, $fromTable, $whereCondition, $userId);
		$letters = $result->fetch_array();
		$result->free();
		if (isset($letters['hits'])) {
			return $letters['hits'];
		}
		return NULL;
	}
}
