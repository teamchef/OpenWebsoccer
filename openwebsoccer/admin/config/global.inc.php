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

define('DEBUG', FALSE);

if (DEBUG) {
	error_reporting(E_ALL);
} else {
	error_reporting(E_ERROR);
}

// loads required classes on demand
function classes_autoloader($class) {

// Start - alternative Class-Loader-Structur
// Die Klassen werden nicht nur in den ursprünglich gesetzten Pfaden gesucht, sondern zusätzlich in den Modulordnern, um bei Bedarf geladen zu werden.
// Dies ist der 1. Teil, um alle nötigen Dateien eines Moduls im Modulordner packen zu können, was nicht nur die Übersicht erhöht, sondern auch einfacher entwickelt und gepflegt werden kann.


// Das Array gibt die zu druchsuchenden Pfade vor, in dem die benötigten Klassen stehen und bei Bedarf geladen werden.
// Das System des Ordners classes mit seinen Subordnern, wurde durch die zugehörige Verteilung der Klassen zu den Mmodulen abgelöst.
// Module können ganz einfach durch das Umbenennen der Datei module.xml in z.B. module_.xml deaktiviert werden.


// Definierung der Suchpfade in einem Array

$paths = array(

	// einbinden der ursprünglichen Pfade

    BASE_FOLDER . '/classes/',
    BASE_FOLDER . '/classes/' . '/converters/',
    BASE_FOLDER . '/classes/' . '/skins/',
    BASE_FOLDER . '/classes/' . '/models/',
    BASE_FOLDER . '/classes/' . '/validators/',
    BASE_FOLDER . '/classes/' . '/actions/',
    BASE_FOLDER . '/classes/' . '/services/',
    BASE_FOLDER . '/classes/' . '/jobs/',
    BASE_FOLDER . '/classes/' . '/loginmethods/',
    BASE_FOLDER . '/classes/' . '/evnets/',
    BASE_FOLDER . '/classes/' . '/plugins/',

	// einbinden der Modulpfade

    BASE_FOLDER . '/modules/' . '/actionlogs/',
    BASE_FOLDER . '/modules/' . '/alltimetable/',
    BASE_FOLDER . '/modules/' . '/cancellation/',
    BASE_FOLDER . '/modules/' . '/clubs/',
    BASE_FOLDER . '/modules/' . '/clubslogo/',
    BASE_FOLDER . '/modules/' . '/clubsrename/',
    BASE_FOLDER . '/modules/' . '/core/',
    BASE_FOLDER . '/modules/' . '/cups/',
    BASE_FOLDER . '/modules/' . '/facebook/',
    BASE_FOLDER . '/modules/' . '/firemanagers/',
    BASE_FOLDER . '/modules/' . '/fireplayer/',
    BASE_FOLDER . '/modules/' . '/formation/',
    BASE_FOLDER . '/modules/' . '/formauthentication/',
    BASE_FOLDER . '/modules/' . '/freeclubs/',
    BASE_FOLDER . '/modules/' . '/frontend/',
    BASE_FOLDER . '/modules/' . '/frontendads/',
    BASE_FOLDER . '/modules/' . '/generator/',
    BASE_FOLDER . '/modules/' . '/googleplus/',
    BASE_FOLDER . '/modules/' . '/gravatar/',
    BASE_FOLDER . '/modules/' . '/halloffame/',
    BASE_FOLDER . '/modules/' . '/help/',
    BASE_FOLDER . '/modules/' . '/joomlalogin/',
    BASE_FOLDER . '/modules/' . '/languageswitcher/',
    BASE_FOLDER . '/modules/' . '/leagues/',
    BASE_FOLDER . '/modules/' . '/lending/',
    BASE_FOLDER . '/modules/' . '/matches/',
    BASE_FOLDER . '/modules/' . '/messages/',
    BASE_FOLDER . '/modules/' . '/moneytransactions/',
    BASE_FOLDER . '/modules/' . '/nationalteams/',
    BASE_FOLDER . '/modules/' . '/news/',
    BASE_FOLDER . '/modules/' . '/notifications/',
    BASE_FOLDER . '/modules/' . '/office/',
    BASE_FOLDER . '/modules/' . '/players/',
    BASE_FOLDER . '/modules/' . '/playerssearch/',
    BASE_FOLDER . '/modules/' . '/premium/',
    BASE_FOLDER . '/modules/' . '/premiummicropayment/',
    BASE_FOLDER . '/modules/' . '/premiumpaypal/',
    BASE_FOLDER . '/modules/' . '/premiumsofortcom/',
    BASE_FOLDER . '/modules/' . '/profile/',
    BASE_FOLDER . '/modules/' . '/randomevents/',
    BASE_FOLDER . '/modules/' . '/rss/',
    BASE_FOLDER . '/modules/' . '/season/',
    BASE_FOLDER . '/modules/' . '/shoutbox/',
    BASE_FOLDER . '/modules/' . '/simulation/',
    BASE_FOLDER . '/modules/' . '/socialrecommendations/',
    BASE_FOLDER . '/modules/' . '/sponsor/',
    BASE_FOLDER . '/modules/' . '/stadium/',
    BASE_FOLDER . '/modules/' . '/stadiumenvironment/',
    BASE_FOLDER . '/modules/' . '/statistics/',
    BASE_FOLDER . '/modules/' . '/tables/',
    BASE_FOLDER . '/modules/' . '/teamofday/',
    BASE_FOLDER . '/modules/' . '/termsandconditions/',
    BASE_FOLDER . '/modules/' . '/training/',
    BASE_FOLDER . '/modules/' . '/trainingcamp/',
    BASE_FOLDER . '/modules/' . '/transfermarket/',
    BASE_FOLDER . '/modules/' . '/transferoffers/',
    BASE_FOLDER . '/modules/' . '/transfers/',
    BASE_FOLDER . '/modules/' . '/userabsence/',
    BASE_FOLDER . '/modules/' . '/userauthentication/',
    BASE_FOLDER . '/modules/' . '/userbadges/',
    BASE_FOLDER . '/modules/' . '/userregistration/',
    BASE_FOLDER . '/modules/' . '/users/',
    BASE_FOLDER . '/modules/' . '/usersonline/',
    BASE_FOLDER . '/modules/' . '/webjobexecution/',
    BASE_FOLDER . '/modules/' . '/wordpresslogin/',
    BASE_FOLDER . '/modules/' . '/youth/',
);
	// Pfade werden zur Verfügung gestellt

set_include_path(implode(PATH_SEPARATOR, $paths));

	// gefundene Klassen werden eingebunden

@include( $class . '.class.php');
}

// End - altrtnative Class-Loader-Structur - by Rolf Joseph / ErdemCan

spl_autoload_register('classes_autoloader');

// constants
define('FOLDER_MODULES', BASE_FOLDER . '/modules');
define('MODULE_CONFIG_FILENAME', 'module.xml');
define('GLOBAL_CONFIG_FILE', BASE_FOLDER . '/generated/config.inc.php');
define('CONFIGCACHE_FILE_FRONTEND', BASE_FOLDER . '/cache/wsconfigfront.inc.php');
define('CONFIGCACHE_FILE_ADMIN', BASE_FOLDER . '/cache/wsconfigadmin.inc.php');
define('CONFIGCACHE_MESSAGES', BASE_FOLDER . '/cache/messages_%s.inc.php');
define('CONFIGCACHE_ADMINMESSAGES', BASE_FOLDER . '/cache/adminmessages_%s.inc.php');
define('CONFIGCACHE_ENTITYMESSAGES', BASE_FOLDER . '/cache/entitymessages_%s.inc.php');
define('CONFIGCACHE_SETTINGS', BASE_FOLDER . '/cache/settingsconfig.inc.php');
define('CONFIGCACHE_EVENTS', BASE_FOLDER . '/cache/eventsconfig.inc.php');
define('UPLOAD_FOLDER', BASE_FOLDER . '/uploads/');
define('IMPRINT_FILE', BASE_FOLDER . '/generated/imprint.php');
define('TEMPLATES_FOLDER', BASE_FOLDER . '/templates');
define('PROFPIC_UPLOADFOLDER', UPLOAD_FOLDER . 'users');

// dependencies
include(GLOBAL_CONFIG_FILE);

if (!isset($conf)) {
	header('location: install/index.php');
	exit;
}

$page = null;
$action = null;
$block = null;

// init application
try {
	$website = WebSoccer::getInstance();
	if (!file_exists(CONFIGCACHE_FILE_FRONTEND)) {
		$website->resetConfigCache();
	}
} catch(Exception $e) {
	// write to log
	try {
		$log = new FileWriter('errorlog.txt');
		$log->writeLine('Website Configuration Error: ' . $e->getMessage());
		$log->close();
	} catch(Exception $e) {
		// ignore
	}
	header('HTTP/1.0 500 Error');
	die();
}

// connect to DB
try {
	$db = DbConnection::getInstance();
	$db->connect($website->getConfig('db_host'),
			$website->getConfig('db_user'),
			$website->getConfig('db_passwort'),
			$website->getConfig('db_name'));
} catch(Exception $e) {
	// write to log
	try {
		$log = new FileWriter('dberrorlog.txt');
		$log->writeLine('DB Error: ' . $e->getMessage());
		$log->close();
	} catch(Exception $e) {
		// ignore
	}
	die('<h1>Sorry, our data base is currently not available</h1><p>We are working on it.</p>');
}

// register own session handler
$handler = new DbSessionManager($db, $website);
session_set_save_handler(
	array($handler, 'open'),
	array($handler, 'close'),
	array($handler, 'read'),
	array($handler, 'write'),
	array($handler, 'destroy'),
	array($handler, 'gc')
);

// the following prevents unexpected effects when using objects as save handlers
// see http://php.net/manual/en/function.session-set-save-handler.php
register_shutdown_function('session_write_close');
session_start();

// always set time zone in order to prevent PHP warnings
try {
	date_default_timezone_set($website->getConfig('time_zone'));
} catch (Exception $e) {
	// do not set time zone. This Exception can appear in particular when updating from older version.
}

?>