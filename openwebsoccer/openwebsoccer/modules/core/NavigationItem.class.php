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
 * Model class which represents a navigation item.
 */
class NavigationItem
{
	/**
	 * @var string target page ID
	 */
	public $pageId;
	/**
	 * @var string Translated label
	 */
	public $label;
	/**
	 * @var array Array of NavigationItems which are the item's children
	 */
	public $children;
	/**
	 * @var boolean TRUE if navigation item is marked as active.
	 */
	public $isActive;
	/**
	 * @var int weight which determines the position of this item within the navigation bar.
	 */
	public $weight;
	/**
	 *
	 * @param string $pageId target page ID
	 * @param string $label Translated label
	 * @param array $children Array of NavigationItems which are the item's children
	 * @param boolean $isActive TRUE if navigation item is marked as active.
	 * @param int $weight weight which determines the position of this item within the navigation bar.
	 */
	function __construct($pageId, $label, $children, $isActive, $weight)
	{
		$this->pageId = $pageId;
		$this->label = $label;
		$this->children = $children;
		$this->isActive = $isActive;
		$this->weight = $weight;
	}
}
