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
* Base Version: OpenWebSoccer-Sim 5.2.4-Snapshot vom 21. Juni
*
* This Version called "OpenWebsoccer" is a advanced modification
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
include('../jobsxmlrepair.php');
/*
* Startet den internen Job neu, wenn dieser vom Server beendet wurde.
*/
// Sofort Abbruch, wenn kein Sicherheitsslüssel in der URL übergeben wird
if (!isset($_REQUEST["sectoken"])) { die("kein Key"); }
// Basis-Verzeichnis setzen
define("ROOT", dirname(dirname($_SERVER['SCRIPT_FILENAME'])) . '/');
// global.inc.php einbinden
include(ROOT . "/admin/config/global.inc.php");
// die globale Variable wird hier nicht benötigt, sondern um die Pfade in der AbstractJob.class.php zu händeln
define("JOBS_CONFIG_FILE", ROOT . "/admin/config/jobs.xml");
// Sicherheitsschlüssel aus der global.inc.php und aus dem URL-Parameter werden verglichen und ggf. abgebrochen
if ($website->getConfig("webjobexecution_key") !== $_REQUEST["sectoken"]) { exit; }
// kann die jobs.xml geladen werden, wenn nein, dann mit der Kopie ersetzen
$doc = new DOMDocument();
$loaded = @$doc->load(JOBS_CONFIG_FILE);
$jobId = $_REQUEST['id'];
$xml = simplexml_load_file(JOBS_CONFIG_FILE);
$jobConfig = $xml->xpath('//job[@id = \''. $jobId . '\']');
if (!$jobConfig) {
	throw new Exception('Job config not found.');
}
$jobClass = (string) $jobConfig[0]->attributes()->class;
if (class_exists($jobClass)) {
	$job = new $jobClass($website, $db, $i18n, $jobId, $action !== 'stop');
}
$job->start();