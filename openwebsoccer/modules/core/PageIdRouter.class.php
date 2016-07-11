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
define('DEFAULT_PAGE_ID', 'home');
define('LOGIN_PAGE_ID', 'login');
define('ENTERUSERNAME_PAGE_ID', 'enter-username');
class PageIdRouter
{
	FUNCTION getTargetPageId(WebSoccer $websoccer, I18n $i18n, $requestedPageId)
	{
		$pageId = $requestedPageId;
		// set default page ID
		if ($pageId == NULL) {
			$pageId = DEFAULT_PAGE_ID;
		}
		// redirect to log-in form if website is generally protected
		$user = $websoccer->getUser();
		if ($websoccer->getConfig('password_protected') && $user->getRole() == ROLE_GUEST) {
			// list of page IDs that needs to be excluded.
			$freePageIds = array(LOGIN_PAGE_ID, 'register', 'register-success', 'activate-user', 'forgot-password', 'imprint', 'logout', 'termsandconditions');
			if (!$websoccer->getConfig('password_protected_startpage')) {
				$freePageIds[] = DEFAULT_PAGE_ID;
			}
			if (!in_array($pageId, $freePageIds)) {
				// create warning message
				$websoccer->addFrontMessage(new FrontMessage(MESSAGE_TYPE_WARNING,
						$i18n->getMessage('requireslogin_box_title'),
						$i18n->getMessage('requireslogin_box_message')));
				$pageId = LOGIN_PAGE_ID;
			}
		}
		// exception rule: If user clicks at breadcrumb navigation on team details, there will be no ID given, so redirect to leagues
		if ($pageId == 'team' && $websoccer->getRequestParameter('id') == null) {
			$pageId = 'leagues';
		}
		// prompt user to enter user name, after he has been created without user name (e.g. by a custom LoginMethod).
		if ($user->getRole() == ROLE_USER && !strlen($user->username)) {
			$pageId = ENTERUSERNAME_PAGE_ID;
		}
		return $pageId;
	}
}