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

 /*
 * Ersetzt die alte job.php
 *
 * In der config.inc.php sind die Einträge für die Jobausführungen eingetragen.
 *
 * Ausführung: http:/meineDomain.de/websoccer/job.php?jobid=sim&sectoken=xyz
 *
 * Voraussetzung: Systemeinstellung -> Allgemien -> Haken geseetzt bei
 *                Spielesimulation durch externe Webseiten ausführen, statt durch Jobs.
 *                Sowie einen ausgedachten Sicherheitsschlüssel wie oben beschreiben z.B. xyz
 *
 * by ErdemCan
 */


// Sofort Abbruch, wenn kein Sicherheitsslüssel in der URL übergeben wird
if (!isset($_REQUEST["sectoken"])) { die("kein Key"); }

// Basis-Verzeichnis setzen
define("BASE_FOLDER", __DIR__);

// global.inc.php einbinden
include(BASE_FOLDER . "/admin/config/global.inc.php");

// die globale Variable wird hier nicht benötigt, sondern um die Pfsde in der AbstractJob.class.php zu händeln
define("JOBS_CONFIG_FILE", BASE_FOLDER . "/admin/config/jobs.xml");

// Sicherheitsschlüssel aus der global.inc.php und aus dem URL-Parameter werden vergllichen und ggf. abgebrochen
if ($website->getConfig("webjobexecution_key") !== $_REQUEST["sectoken"]) { die(); }

// kann die jobs.xml geladen werden, wenn nein, dann mit der Kopie ersetzen
$doc = new DOMDocument();
$loaded = @$doc->load(JOBS_CONFIG_FILE);
if (!$loaded) {
	copy(BASE_FOLDER . "/admin/config/jobs.xml", BASE_FOLDER . "/admin/config/error_jobs.xml");

	copy(BASE_FOLDER . "/admin/config/jobs_backup.xml", BASE_FOLDER . "/admin/config/jobs.xml");
}

// Sprachunterstützung wird in eine Object-Variable geladen
$i18n     = I18n::getInstance($website->getConfig("supported_languages"));

// mittels der Job-ID wird aus der config.inc.php die Job-Class ausgelesen und verwendet
$jobClass = $website->getConfig($_REQUEST["jobid"]);

// Aus allen Objekten und Variablen wird eine neue PHP-Klasse erstellt
$job      = new $jobClass($website, $db, $i18n, $_REQUEST["jobid"]);

// die Anweisungen in der Klasse werden ausgeführt
$job->execute();

?>


