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
defined('OpenWebsoccer') or header('location: ../../index.php');
/**
 * <p>Any model must implement this interface.</p>
 *
 * <p>Models provide data for templates. They will be assigned to one or more template files through module configuration files (module.xml).</p>
 *
 * <p><strong>Note:</strong> Model Names must end with 'Model', e.g. 'MyFooModel'.</p>
 */
interface IModel
{
	/**
	 * @param DbConnection $db database connection
	 * @param I18n $i18n i18n instance.
	 * @param WebSoccer $websoccer Websoccer instance.
	 */
	public function __construct($db, $i18n, $websoccer);
	/**
	 * Determines whether the associated view shall be rendered or not.
	 *
	 * @return TRUE if the view shall be displayed. FALSE otherweise.
	 */
	public function renderView();
	/**
	 * @return array of template placeholder values (key=placeholder name, value=placeholder value).
	 */
	public function getTemplateParameters();
}
