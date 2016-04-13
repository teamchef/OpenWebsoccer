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
* Base Version: OpenWebSoccer-Sim 5.2.3 - 2015
*
* This Version called "OpenWebsoccer" is a advanced modifikation
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
defined('OpenWebsoccer') or header('location: ../../index.php');
define('MESSAGE_TYPE_INFO', 'info');
define('MESSAGE_TYPE_WARNING', 'warning');
define('MESSAGE_TYPE_SUCCESS', 'success');
define('MESSAGE_TYPE_ERROR', 'error');
/**
 * Message which will be displayed as an alert on the front page.
 */
class FrontMessage
{
	/**
	 * @var string message type. Must be MESSAGE_TYPE_INFO|MESSAGE_TYPE_SUCCESS|MESSAGE_TYPE_ERROR
	 */
	public $type;
	/**
	 * @var string title which will be highlighted.
	 */
	public $title;
	/**
	 * @var string message details.
	 */
	public $message;
	/**
	 *
	 * @param string $type message type. Must be MESSAGE_TYPE_INFO|MESSAGE_TYPE_SUCCESS|MESSAGE_TYPE_WARNING|MESSAGE_TYPE_ERROR
	 * @param string $title title which will be highlighted.
	 * @param string $message message details.
	 * @throws Exception when the type is invalid.
	 */
	public function __construct($type, $title, $message)
	{
		if ($type !== MESSAGE_TYPE_INFO && $type !== MESSAGE_TYPE_SUCCESS && $type !== MESSAGE_TYPE_ERROR && $type !== MESSAGE_TYPE_WARNING) {
			throw new Exception('unknown FrontMessage type: ' . $type);
		}
		$this->type = $type;
		$this->title = $title;
		$this->message = $message;
	}
}