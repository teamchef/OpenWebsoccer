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
// defined('OpenWebsoccer') or header('location: ../../index.php');
/**
 * Any validator must implement this interface.
 *
 * Validators can be referenced at action parameters (see module.xml) and will be called before the actual action is executed.
 *
 * <strong>Note:</strong> Validator Names must end with 'Converter', e.g. 'MyFooValidator'.
 *
 * @author Ingo Hofmann
 */
interface IValidator
{
	/**
	 * @param I18n $i18n i18n instance.
	 * @param WebSoccer $websoccer Websoccer instance.
	 * @param mixed $value value to be validated.
	 */
	public function __construct($i18n, $websoccer, $value);
	/**
	 * @return boolean TRUE if value to be validated is considered as valid, FALSE otherwise.
	 */
	public function isValid();
	/**
	 * @return string Internationalized validation message which can be displayed at view.
	 */
	public function getMessage();
}