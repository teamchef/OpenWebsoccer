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
// Basis-Ordner für die Klassendatein definieren
define('TEMPLATE_MODUL_FOLDER',ROOT . '/modules');
// alle Unterordner des Basis-Ordners einbinden
$directory = TEMPLATE_MODUL_FOLDER . "/";
$files = glob($directory . "*");
foreach($files as $file){
	if(is_dir($file)){
		$twigarray[]=$file;
	}
}
// die gefundenen Ordner als globale Array-Konstante setzen
define('CLASSPATH',$twigarray);
define('DEBUG',FALSE);
if (DEBUG) {
	error_reporting(E_ALL);
} else {
	error_reporting(E_ERROR);
}
// Die angeforderte Klasse suchen und einbinnden
function classes_autoloader($class) {
	set_include_path(implode(PATH_SEPARATOR,CLASSPATH));
	@include( $class . '.class.php');
}
// die gefundene Klasse registrieren
spl_autoload_register('classes_autoloader');
define('FOLDER_MODULES',ROOT . '/modules');
define('MODULE_CONFIG_FILENAME','module.xml');
define('GLOBAL_CONFIG_FILE',ROOT . '/generated/config.inc.php');
define('CONFIGCACHE_FILE_FRONTEND',ROOT . '/cache/wsconfigfront.inc.php');
define('CONFIGCACHE_FILE_ADMIN',ROOT . '/cache/wsconfigadmin.inc.php');
define('CONFIGCACHE_MESSAGES',ROOT . '/cache/messages_%s.inc.php');
define('CONFIGCACHE_ADMINMESSAGES',ROOT . '/cache/adminmessages_%s.inc.php');
define('CONFIGCACHE_ENTITYMESSAGES',ROOT . '/cache/entitymessages_%s.inc.php');
define('CONFIGCACHE_SETTINGS',ROOT . '/cache/settingsconfig.inc.php');
define('CONFIGCACHE_EVENTS',ROOT . '/cache/eventsconfig.inc.php');
define('UPLOAD_FOLDER',ROOT . '/uploads/');
define('IMPRINT_FILE',ROOT . '/generated/imprint.php');
define('TEMPLATES_FOLDER',ROOT . '/templates');
define('PROFPIC_UPLOADFOLDER',UPLOAD_FOLDER . 'users');
include(GLOBAL_CONFIG_FILE);
if (!isset($conf)) {
	header('location: install/index.php');
	exit;
}
$page = null;
$action = null;
$block = null;
try {
	$website = WebSoccer::getInstance();
	if (!file_exists(CONFIGCACHE_FILE_FRONTEND)) {
		$website->resetConfigCache();
	}
} catch(Exception $e) {
	try {
		$log = new FileWriter('errorlog.txt');
		$log->writeLine('Website Configuration Error: ' . $e->getMessage());
		$log->close();
	} catch(Exception $e) {}
	header('HTTP/1.0 500 Error');
	die();
}
try {
	$db = DbConnection::getInstance();
	$db->connect($website->getConfig('db_host'),
			$website->getConfig('db_user'),
			$website->getConfig('db_passwort'),
			$website->getConfig('db_name'));
} catch(Exception $e) {
	try {
		$log = new FileWriter('dberrorlog.txt');
		$log->writeLine('DB Error: ' . $e->getMessage());
		$log->close();
	} catch(Exception $e) {}
	die('<h1>Die Datenbank ist zur Zeit nicht erreichbar</h1><p>Wir bitten um Gedduld.</p>');
}
$handler = new DbSessionManager($db,$website);
session_set_save_handler(
	array($handler,'open'),
	array($handler,'close'),
	array($handler,'read'),
	array($handler,'write'),
	array($handler,'destroy'),
	array($handler,'gc')
);
session_start();
// Um eine PHP Warnung vorzubeugen wird die Zeitzone gesetzt
try {
	date_default_timezone_set($website->getConfig('time_zone'));
} catch (Exception $e) {}
