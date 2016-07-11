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
SEC;
class StringUtil
{
	FUNCTION startsWith($message, $needle)
	{
		return !strncmp($message, $needle, strlen($needle));
	}
	FUNCTION endsWith($message, $needle)
	{
		$length = strlen($needle);
		if ($length == 0) {
			return true;
		}
		return (substr($message, -$length) === $needle);
	}
	FUNCTION convertTimestampToWord($timestamp, $nowAsTimestamp, I18n $i18n)
	{
		if ($timestamp >= strtotime('tomorrow', $nowAsTimestamp) + 24 * 3600) {
			return '';
		}
		if ($timestamp >= strtotime('tomorrow', $nowAsTimestamp)) {
			return $i18n->getMessage('date_tomorrow');
		} else if ($timestamp >= strtotime('today', $nowAsTimestamp)) {
			return $i18n->getMessage('date_today');
		} else if ($timestamp >= strtotime('yesterday', $nowAsTimestamp)) {
			return $i18n->getMessage('date_yesterday');
		}
		return '';
	}
}