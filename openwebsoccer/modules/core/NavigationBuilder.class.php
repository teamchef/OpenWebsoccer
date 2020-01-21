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
class NavigationBuilder
{
	FUNCTION getNavigationItems($website,$i18n,$pages,$currentPageId)
	{
		$items = array();
		$addedItemsCache = array();
		foreach ($pages as $pageId => $pageJson) {
			self::_createItem($items,$addedItemsCache,$pageId,$pageJson,$website,$i18n,$currentPageId,$pages);
		}
		usort($items,array('NavigationBuilder','sortByWeight'));
		// sort children
		foreach ($items as $item) {
			if ($item->children != null) {
				usort($item->children,array('NavigationBuilder','sortByWeight'));
			}
		}
		return $items;
	}
	FUNCTION _createItem(&$items,&$addedItemsCache,$pageId,$pageJson,$website,$i18n,$currentPageId,&$pages)
	{
		// already created?
		if (isset($addedItemsCache[$pageId])) {
			return;
		}
		$pageConfig = json_decode($pageJson,TRUE);
		// check permissions
		$requiredRoles = explode(',',$pageConfig['role']);
		if (!in_array($website->getUser()->getRole(),$requiredRoles)) {
			return;
		}
		// create parent item first
		if (isset($pageConfig['parentItem']) && strlen($pageConfig['parentItem']) && !isset($addedItemsCache[$pageConfig['parentItem']])) {
			self::_createItem($items,$addedItemsCache,$pageConfig['parentItem'],$pages[$pageConfig['parentItem']],$website,$i18n,$currentPageId,$pages);
		}
		$isActive = ($currentPageId == $pageId);
		// mark parent item active as well
		if ($isActive && isset($pageConfig['parentItem']) && strlen($pageConfig['parentItem'])
				&& isset($addedItemsCache[$pageConfig['parentItem']])) {
			$addedItemsCache[$pageConfig['parentItem']]->isActive = TRUE;
		}
		if (!isset($pageConfig['navitem']) || $pageConfig['navitem'] != 'true') {
			return;
		}
		// dependent on config parameter
		if (isset($pageConfig['ConfigEnabled']) && !$website->getConfig($pageConfig['ConfigEnabled'])) {
			return;
		}
		$itemWeight = (isset($pageConfig['navweight']) && strlen($pageConfig['navweight'])) ? $pageConfig['navweight'] : 0;
		$item = new NavigationItem($pageId,$i18n->getNavigationLabel($pageId),array(),$isActive,$itemWeight);
		$itemParent = (isset($pageConfig['parentItem']) && strlen($pageConfig['parentItem'])) ? $pageConfig['parentItem'] : null;
		self::_addToItems($items,$addedItemsCache,$item,$itemWeight,$itemParent);
	}
	FUNCTION _addToItems(&$items,&$addedItemsCache,$item,$itemWeight,$itemParent)
	{
		$listToAdd = &$items;
		if ($itemParent != null) {
			$listToAdd = &$addedItemsCache[$itemParent]->children;
		}
		$addedItemsCache[$item->pageId] = $item;
		$listToAdd[] = $item;
	}
	FUNCTION sortByWeight($a,$b)
	{
		return $a->weight - $b->weight;
	}
}
