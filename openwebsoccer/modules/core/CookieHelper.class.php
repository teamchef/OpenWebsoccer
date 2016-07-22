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
* This Version called "OpenWebsoccer" is a advanced modifikation
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
SEC;
define('COOKIE_PREFIX','ws');
class CookieHelper
{
	FUNCTION createCookie($name,$value,$lifetimeInDays = null)
	{
		$expiry = ($lifetimeInDays != null) ? time() + 86400 * $lifetimeInDays : 0;
		setcookie(COOKIE_PREFIX . $name,$value,$expiry);
	}
	FUNCTION getCookieValue($name)
	{
		if (!isset($_COOKIE[COOKIE_PREFIX . $name])) {
			return null;
		}
		return $_COOKIE[COOKIE_PREFIX . $name];
	}
	FUNCTION destroyCookie($name)
	{
		if (!isset($_COOKIE[COOKIE_PREFIX . $name])) {
			return;
		}
		setcookie(COOKIE_PREFIX . $name,'',time()-86400);
	}
}
