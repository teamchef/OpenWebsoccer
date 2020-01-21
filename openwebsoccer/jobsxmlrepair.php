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
* This Version called "OpenWebsoccer" is a advanced modification
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
$sapi_type = php_sapi_name();if (!substr($sapi_type,0,3) == 'cgi') include('/lib/iosec/iosec.php');
//	* Start: defekte job.xml - by Rolf Joseph / ErdemCan
//	* Voraussetzung ist,das im Ordner /admin/config/ die Datei jobs_backup.xml vorhanden ist
//	* die letzte job.xml wird als error_jobs.xml gespeichert
//	*
//	kann die jobs.xml geladen werden,wenn nein,dann mit der Kopie ersetzen
	$doc = new DOMDocument();
	$loaded = @$doc->load(dirname ( realpath ( __FILE__ ) ).'/admin/config/jobs.xml');
	if (!$loaded)
	{
 		copy(dirname ( realpath ( __FILE__ ) ). "/admin/config/jobs.xml",dirname ( realpath ( __FILE__ ) ). "/admin/config/error_jobs.xml");
 		copy(dirname ( realpath ( __FILE__ ) ). "/admin/config/jobs_backup.xml",dirname ( realpath ( __FILE__ ) ). "/admin/config/jobs.xml");
	}
//	* End: defekte job.xml - by Rolf Joseph / ErdemCan
