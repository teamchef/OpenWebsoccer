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
* Base Version: OpenWebSoccer-Sim 5.2.4-Snapshot vom 21. Juni
*
* This Version called "OpenWebsoccer" is a advanced modification
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
echo '<h1>'. $i18n->getMessage('clearcache_title') .'</h1>';
$website->resetConfigCache();
if (file_exists(ROOT . '/install')){
	require ('deldir.inc.php');
	deldir ('../install');
}
if (file_exists(ROOT . '/update')){
	require ('deldir.inc.php');
	deldir ('../update');
}
require ('deldir.inc.php');
deldir (ROOT . '/cache');
mkdir (ROOT . '/cache',0700);
// $website->getTemplateEngine($i18n)->clearCache();
echo createSuccessMessage($i18n->getMessage('clearcache_success_title'),$i18n->getMessage('clearcache_success_message'));
