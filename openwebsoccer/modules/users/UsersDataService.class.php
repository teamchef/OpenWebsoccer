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
class UsersDataService
{
	FUNCTION createLocalUser($websoccer,$db,$nick = null,$email = null)
	{
		$username = trim($nick);
		$emailAddress = strtolower(trim($email));
		// check if either nick or e-mail is provided. If not,it most probably is a wrong API call,
		// hence message is not required to be translated.
		if (!strlen($username) && !strlen($emailAddress)) {
			throw new Exception('UsersDataService::createBlankUser(): Either user name or e-mail must be provided in order to create a new internal user.');
		}
		// verify that there is not already such a user. If so,the calling function is wrongly implemented,hence
		// no translation of message.
		if (strlen($username) && self::getUserIdByNick($websoccer,$db,$username) > 0) {
			throw new Exception('Nick name is already in use.');
		}
		if (strlen($emailAddress) && self::getUserIdByEmail($websoccer,$db,$emailAddress) > 0) {
			throw new Exception('E-Mail address is already in use.');
		}
		// creates user.
		$i18n = I18n::getInstance($websoccer->getConfig('supported_languages'));
		$columns = [
			'nick' => $username,
			'email' => $emailAddress,
			'status' => '1',
			'datum_anmeldung' => $websoccer->getNowAsTimestamp(),
			'lang' => $i18n->getCurrentLanguage()
		];
		if ($websoccer->getConfig('premium_initial_credit')) {
			$columns['premium_balance'] = $websoccer->getConfig('premium_initial_credit');
		}
		$db->queryInsert($columns,$websoccer->getConfig('db_prefix') . '_user');
		// provide ID of created user.
		if (strlen($username)) {
			$userId = self::getUserIdByNick($websoccer,$db,$username);
		} else {
			$userId = self::getUserIdByEmail($websoccer,$db,$emailAddress);
		}
		// trigger plug-ins
		$event = new UserRegisteredEvent($websoccer,$db,I18n::getInstance($websoccer->getConfig('supported_languages')),$userId,$username,$emailAddress);
		PluginMediator::dispatchEvent($event);
		return $userId;
	}
	FUNCTION countActiveUsersWithHighscore($websoccer,$db)
	{
		$columns = 'COUNT(id) AS hits';
		$fromTable = $websoccer->getConfig('db_prefix') . '_user';
		$whereCondition = 'status = 1 AND highscore > 0 GROUP BY id';
		$result = $db->querySelect($columns,$fromTable,$whereCondition);
		if (!$result) {
			$users = 0;
		} else {
			$users = $result->num_rows;
		}
		$result->free();
		return $users;
	}
	FUNCTION getActiveUsersWithHighscore($websoccer,$db,$startIndex,$entries_per_page)
	{
		$columns['U.id'] = 'id';
		$columns['nick'] = 'nick';
		$columns['email'] = 'email';
		$columns['U.picture'] = 'picture';
		$columns['highscore'] = 'highscore';
		$columns['datum_anmeldung'] = 'registration_date';
		$columns['C.id'] = 'team_id';
		$columns['C.name'] = 'team_name';
		$columns['C.bild'] = 'team_picture';
		$limit = $startIndex . ',' . $entries_per_page;
		$fromTable = $websoccer->getConfig('db_prefix') . '_user AS U';
		$fromTable .= ' LEFT JOIN ' . $websoccer->getConfig('db_prefix') . '_verein AS C ON C.user_id = U.id';
		$whereCondition = 'U.status = 1 AND highscore > 0 GROUP BY id ORDER BY highscore DESC,datum_anmeldung ASC';
		$result = $db->querySelect($columns,$fromTable,$whereCondition,null,$limit);
		$users = [];
		while ($user = $result->fetch_array()) {
			$user['picture'] = self::getUserProfilePicture($websoccer,$user['picture'],$user['email']);
			$users[] = $user;
		}
		$result->free();
		return $users;
	}
	FUNCTION getUserById($websoccer,$db,$userId)
	{
		$columns['id'] = 'id';
		$columns['nick'] = 'nick';
		$columns['email'] = 'email';
		$columns['highscore'] = 'highscore';
		$columns['fanbeliebtheit'] = 'popularity';
		$columns['datum_anmeldung'] = 'registration_date';
		$columns['lastonline'] = 'lastonline';
		$columns['picture'] = 'picture';
		$columns['history'] = 'history';
		$columns['name'] = 'name';
		$columns['wohnort'] = 'place';
		$columns['land'] = 'country';
		$columns['geburtstag'] = 'birthday';
		$columns['beruf'] = 'occupation';
		$columns['interessen'] = 'interests';
		$columns['lieblingsverein'] = 'favorite_club';
		$columns['homepage'] = 'homepage';
		$columns['premium_balance'] = 'premium_balance';
		$fromTable = $websoccer->getConfig('db_prefix') . '_user';
		$whereCondition = 'id = %d AND status = 1';
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$userId);
		$user = $result->fetch_array();
		$result->free();
		if ($user) {
			$user['picture_uploadfile'] = $user['picture'];
			$user['picture'] = self::getUserProfilePicture($websoccer,$user['picture'],$user['email'],120);
		}
		return $user;
	}
	FUNCTION getUserIdByNick($websoccer,$db,$nick)
	{
		$columns = 'id';
		$fromTable = $websoccer->getConfig('db_prefix') . '_user';
		$whereCondition = 'nick = "%s" AND status = 1';
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$nick);
		$user = $result->fetch_array();
		$result->free();
		if (isset($user['id'])) {
			return $user['id'];
		}
		return -1;
	}
	FUNCTION getUserIdByEmail($websoccer,$db,$email)
	{
		$columns = 'id';
		$fromTable = $websoccer->getConfig('db_prefix') . '_user';
		$whereCondition = 'email = "%s" AND status = 1';
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$email);
		$user = $result->fetch_array();
		$result->free();
		if (isset($user['id'])) {
			return $user['id'];
		}
		return -1;
	}
	FUNCTION findUsernames($websoccer,$db,$nickStart)
	{
		$columns = 'nick';
		$fromTable = $websoccer->getConfig('db_prefix') . '_user';
		$whereCondition = 'UPPER(nick) LIKE "%%%s%%" AND status = 1';
		$result = $db->querySelect($columns,$fromTable,$whereCondition,strtoupper($nickStart),10);
		$users = [];
		while ($user = $result->fetch_array()) {
			$users[] = $user['nick'];
		}
		$result->free();
		return $users;
	}
	FUNCTION getUserProfilePicture($websoccer,$fileName,$email,$size = 40)
	{
		if (strlen($fileName)) {
			return $websoccer->getConfig('context_root') . '/uploads/users/' . $fileName;
		}
		return self::getGravatarUserProfilePicture($websoccer,$email,$size);
	}
	FUNCTION getGravatarUserProfilePicture($websoccer,$email,$size = 40)
	{
		// use gravatar
		if (strlen($email) && $websoccer->getConfig('gravatar_enable')) {
			if (empty($_SERVER['HTTPS'])) {
				$picture = 'http://www.';
			} else {
				$picture = 'https://secure.';
			}
			$picture .= 'gravatar.com/avatar/' . md5(strtolower($email));
			$picture .= '?s=' . $size; // size param
			$picture .= '&d=mm'; // use "mystery man" as default icon
			return $picture;
		} else {
			return NULL;
		}
	}
	FUNCTION countOnlineUsers($websoccer,$db)
	{
		// augenblickliche Zeit
		$timeBoundary = $websoccer->getNowAsTimestamp() - 1 * 20;
		// Zeit der Inaktivität bis 20 Minuten
		$timeBoundarylate = $websoccer->getNowAsTimestamp() - 20 * 60;
		// Wer ist gerade Aktiv
		$result = $db->querySelect('COUNT(*) AS hits',$websoccer->getConfig('db_prefix') . '_user','lastonline >= %d',$timeBoundary);
		$userstb = $result->fetch_array();
		$result->free();
		// Wer liegt im 20 Minuten Zeitrahmen
		$result = $db->querySelect('COUNT(*) AS hits',$websoccer->getConfig('db_prefix') . '_user','lastonline >= %d',$timeBoundarylate);
		$userstblate = $result->fetch_array();
		$result->free();
		// Wer ist als eingeloggt gekennzeichnet - ip_time wurde bisher nicht genutzt
		$result = $db->querySelect('COUNT(*) AS hits',$websoccer->getConfig('db_prefix') . '_user','ip_time = 1');
		$usersno = $result->fetch_array();
		$result->free();
		// Abfrage um ausgeloggte User sofort aus dem Zähler zu nehmen
		// auch User die sich nicht ausloggen,werden nach dem Zeitfenster nicht mehr berücksichtigt
		if ($userstb === $userstblate) {
			$users = $userstb;
		}
		if ($userstb <= $usersno) {
			$users = $userstb;
		}
		if (isset($users['hits'])) {
			return $users['hits'];
		}
		return NULL;
	}
	FUNCTION getOnlineUsers($websoccer,$db,$startIndex,$entries_per_page)
	{
		$timeBoundary = $websoccer->getNowAsTimestamp() - 15 * 60;
		$columns['U.id'] = 'id';
		$columns['nick'] = 'nick';
		$columns['email'] = 'email';
		$columns['U.picture'] = 'picture';
		$columns['lastonline'] = 'lastonline';
		$columns['lastaction'] = 'lastaction';
		$columns['c_hideinonlinelist'] = 'hideinonlinelist';
		$columns['C.id'] = 'team_id';
		$columns['C.name'] = 'team_name';
		$columns['C.bild'] = 'team_picture';
		$limit = $startIndex . ',' . $entries_per_page;
		$fromTable = $websoccer->getConfig('db_prefix') . '_user AS U';
		$fromTable .= ' LEFT JOIN ' . $websoccer->getConfig('db_prefix') . '_verein AS C ON C.user_id = U.id';
		$whereCondition = 'U.status = 1 AND lastonline >= %d GROUP BY id ORDER BY lastonline DESC';
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$timeBoundary,$limit);
		$users = [];
		while ($user = $result->fetch_array()) {
			$user['picture'] = self::getUserProfilePicture($websoccer,$user['picture'],$user['email']);
			$users[] = $user;
		}
		$result->free();
		return $users;
	}
	FUNCTION countTotalUsers($websoccer,$db)
	{
		$result = $db->querySelect('COUNT(*) AS hits',$websoccer->getConfig('db_prefix') . '_user','status = 1');
		$users = $result->fetch_array();
		$result->free();
		if (isset($users['hits'])) {
			return $users['hits'];
		}
		return NULL;
	}
}
