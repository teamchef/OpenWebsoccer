<?php
/******************************************************

  This file is part of OpenWebSoccer-Sim.

  OpenWebSoccer-Sim is free software: you can redistribute it
  and/or modify it under the terms of the
  GNU Lesser General Public License
  as published by the Free Software Foundation, either version 3 of
  the License, or any later version.

  OpenWebSoccer-Sim is distributed in the hope that it will be
  useful, but WITHOUT ANY WARRANTY; without even the implied
  warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
  See the GNU Lesser General Public License for more details.

  You should have received a copy of the GNU Lesser General Public
  License along with OpenWebSoccer-Sim.
  If not, see <http://www.gnu.org/licenses/>.

******************************************************/

echo '<h1>'. $i18n->getMessage('clearcache_title') .'</h1>';

$website->resetConfigCache();

	if (file_exists(BASE_FOLDER . '/install')){
		require 'deldir.inc.php';
		deldir ('../install');
	}
	if (file_exists(BASE_FOLDER . '/update')){
		require 'deldir.inc.php';
		deldir ('../update');
	}

	require (BASE_FOLDER . '/admin/pages/deldir.inc.php');
	deldir (BASE_FOLDER .'/cache');
	mkdir (BASE_FOLDER .'/cache', 0700);

// clear templates cache
$website->getTemplateEngine($i18n)->clearCache();

echo createSuccessMessage($i18n->getMessage('clearcache_success_title'), $i18n->getMessage('clearcache_success_message'));

?>