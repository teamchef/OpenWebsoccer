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
include('../jobsxmlrepair.php');
// Autorefresh der Jobs-Seite
echo("<meta http-equiv='refresh' content='60'>");
$mainTitle = $i18n->getMessage("jobs_navlabel");
if (!$admin["r_admin"] && !$admin["r_demo"] && !$admin[$page["permissionrole"]]) {
	throw new Exception($i18n->getMessage("error_access_denied"));
}
if (!$show) {
?>
<h1><?php echo $mainTitle; ?></h1>
<p><?php echo $i18n->getMessage("jobs_introduction"); ?></p>
<div class="alert">
	<?php echo $i18n->getMessage("jobs_warning"); ?>
</div>
<?php
if ($action == "execute" && !$admin["r_demo"]) {
	$jobId = $_REQUEST["id"];
	$xml = simplexml_load_file(JOBS_CONFIG_FILE);
	$jobConfig = $xml->xpath("//job[@id = '". $jobId . "']");
	if (!$jobConfig) {
		throw new Exception("Die Job Konfiguration konnte nicht gefunden werden.");
	}
	$jobClass = (string) $jobConfig[0]->attributes()->class;
	if (class_exists($jobClass)) {
		$job = new $jobClass($website,$db,$i18n,$jobId);
	} else {
		throw new Exception("Klasse nicht gefunden: " . $jobClass);
	}
	$job->execute();
		echo createSuccessMessage($i18n->getMessage("jobs_executed"),"");
	}
?>
<table class="table table-striped">
	<thead>
		<tr>
			<th><?php echo $i18n->getMessage("jobs_head_name"); ?></th>
			<th><?php echo $i18n->getMessage("jobs_head_last_execution"); ?></th>
			<th><?php echo $i18n->getMessage("jobs_head_interval"); ?></th>
			<th><?php echo $i18n->getMessage("jobs_head_status"); ?></th>
			<th><?php echo $i18n->getMessage("jobs_head_startstop"); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php
		$doc = new DOMDocument();
		$loaded = @$doc->load(JOBS_CONFIG_FILE);
		if (!$loaded) {
			throw new Exception("Das XML config File konnte nicht geladen werden: " + JOBS_CONFIG_FILE);
		}
		$items = $doc->getElementsByTagName("job");
		$now = $website->getNowAsTimestamp();
		foreach ($items as $item) {
			echo "<tr>";
			$jobid = (string) $item->getAttribute("id");
			$i18nJobNameAttr = "name_" . $i18n->getCurrentLanguage();
			if ($item->hasAttribute($i18nJobNameAttr)) {
				$name = (string) $item->getAttribute($i18nJobNameAttr);
			} else {
				$name = (string) $item->getAttribute("name");
			}
			$class = (string) $item->getAttribute("class");
			$interval = (string) $item->getAttribute("interval");
			$lastPing = (int) $item->getAttribute("last_ping");
			$error = (string) $item->getAttribute("error");
			$stop = (string) $item->getAttribute("stop");
			$minPing = $now - $interval * 60 - 3;
			$running = ($stop == 0 && $lastPing > $minPing);
			if ($running) {
				$status = "<span class=\"label label-success\">". $i18n->getMessage("jobs_status_running") ."</span>";
			} else {
				$status = "<span class=\"label label-important\">". $i18n->getMessage("jobs_status_notrunning") ."</span>";
			}
			echo "<td>" . $name;
			if (strlen($error)) {
				echo createErrorMessage($i18n->getMessage("subpage_error_title"),$error);
			}
			echo "</td>";
			echo "<td>";
			if ($lastPing > 0) {
				echo $website->getFormattedDatetime($lastPing);
			} else {
				echo "-";
			}
			echo "</td>";
			echo "<td>" . $interval . " ". $i18n->getMessage("unit_minutes") ."</td>";
			echo "<td>" . $status . "</td>";
			echo "<td>";
			if ($running) {
				echo "<a href=\"job.php?action=stop&id=". $jobid . "\" class=\"btn startStopJobLink\">". $i18n->getMessage("jobs_button_stop") ."</a>";
			} else {
				echo "<a href=\"job.php?action=start&id=". $jobid . "\" class=\"btn btn-primary startStopJobLink\">". $i18n->getMessage("jobs_button_start") ."</a>";
				echo " <a href=\"?site=". $site . "&action=execute&id=". $jobid . "\" class=\"btn\">". $i18n->getMessage("jobs_button_execute_once") ."</a>";
			}
			echo "</td>";
			echo "</tr>";
		}
	?>
	</tbody>
</table>
<?php
}
function my_file($url) {
	// URL zerlegen
	$parsedurl = @parse_url($url);
	// Host ermitteln
	$host = $parsedurl['host'];
	// Pfadangabe ermitteln
	$documentpath = empty($parsedurl['path']) ? '/' : $documentpath = $parsedurl['path'];
	// Parameter ermitteln
	if (!empty($parsedurl['query'])) $documentpath .= '?'.$parsedurl['query'];
	// Port ermitteln
	$port = empty($parsedurl['port']) ? 80 : $port = $parsedurl['port'];
	// Socket �ffnen
	$fp = fsockopen ($host,$port,$errno,$errstr,30);
	if (!$fp) return null;
	// Request senden
	fputs ($fp,"GET {$documentpath} HTTP/1.0\r\nHost: {$host}\r\n\r\n");
	// Header auslesen
	$header = '';
	do {
		$line = chop(fgets($fp));
		$header .= $line."\n";
	} while (!empty($line) and !feof($fp));
	// Daten auslesen
	$result = Array();
	while (!feof($fp)) {
		$result[] = fgets($fp);
	}
	// Socket schliessen
	fclose($fp);
}
