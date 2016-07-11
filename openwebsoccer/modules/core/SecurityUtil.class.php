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
* This Version called "OpenWebsoccer" is a advanced modifikation
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
// SEC;
class SecurityUtil
{
	FUNCTION hashPassword($password, $salt)
	{
		return hash('sha256', $salt . hash('sha256', $password));
	}
	FUNCTION isAdminLoggedIn() {
		// prevent session hijacking
		if (isset($_SESSION['HTTP_USER_AGENT'])) {
			if ($_SESSION['HTTP_USER_AGENT'] != md5($_SERVER['HTTP_USER_AGENT'])) {
				self::logoutAdmin();
				return FALSE;
			}
		} else {
			$_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']);
		}
		return (isset($_SESSION['valid']) && $_SESSION['valid']);
	}
	FUNCTION logoutAdmin()
	{
		$_SESSION = array();
		session_destroy();
	}
	FUNCTION generatePassword()
	{
		$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789%!=?';
		return substr(str_shuffle($chars), 0, 8);
	}
	FUNCTION generatePasswordSalt()
	{
		return substr(self::generatePassword(), 0, 4);
	}
	FUNCTION generateSessionToken($userId, $salt)
	{
		$useragent = (isset($_SESSION['HTTP_USER_AGENT'])) ? $_SESSION['HTTP_USER_AGENT'] : 'n.a.';
		return md5($salt . $useragent . $userId);
	}
	FUNCTION loginFrontUserUsingApplicationSession(WebSoccer $websoccer, $userId)
	{
		// actual log-in
		$_SESSION['frontuserid'] = $userId;
		session_regenerate_id();
		// update user data
		$userProvider = new SessionBasedUserAuthentication($websoccer);
		$userProvider->verifyAndUpdateCurrentUser($websoccer->getUser());
	}
}