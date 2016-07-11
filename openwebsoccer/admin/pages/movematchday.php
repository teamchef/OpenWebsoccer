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
* This Version called "OpenWebsoccer" is a advanced modification
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
*
* Modul: MoveMatchDay
*
* Author: Schabbell
*
******************************************************************/
$r_titel = $i18n->getMessage("movematchday_navlabel");
echo "<h1>$r_titel</h1>";
if (!$admin["r_admin"] && !$admin["r_demo"] && !$admin[$page["permissionrole"]]) {
	throw new Exception($i18n->getMessage("error_access_denied"));
}
$leagueid = (isset($_REQUEST["leagueid"])) ? $_REQUEST["leagueid"] : 0;
$id = (isset($_REQUEST["id"])) ? $_REQUEST["id"] : 0;
//********** Startseite **********
if (!$show) {
	?>
	<form class="form-inline">
 		<label for="leagueid"><?php echo $i18n->getMessage("movematchday_label_league") ?></label>
 		<select name="leagueid" id="leagueid">
 			<option></option>
 			<?php
 			$columns = "id,land,name";
 			$fromTable = $website->getConfig("db_prefix") . "_liga";
 			$result = $db->querySelect($columns, $fromTable, "1 ORDER BY land ASC, name ASC", array());
 			while ($league = $result->fetch_array()) {
				echo "<option value=\"". $league["id"] . "\"";
				if ($leagueid == $league["id"]) echo " selected";
				echo ">". $league["land"] . " - " . $league["name"] . "</option>";
			}
			$result->free();
 			?>
 		</select>
	 	<button type="submit" class="btn btn-primary"><?php echo $i18n->getMessage("button_display") ?></button>
	 	<input type="hidden" name="site" value="<?php echo $site ?>" />
	</form>
	<?php
	if ($leagueid > 0) {
		$columns = "id,saison_id,liga_id,spieltag,berechnet,datum";
		$fromTable = $conf['db_prefix'] . "_spiel";
		$whereCondition = "liga_id = %d AND berechnet = '0'";
		$result = $db->querySelect($columns, $fromTable, $whereCondition, $leagueid);
		if (!$result->num_rows) {
			echo "<p>" . createInfoMessage($i18n->getMessage("movematchday_no_matchday"),"") . "</p>";
		} else {
			$columns = array();
			$columns["G1.id"] = "id";
			$columns["G1.saison_id"] = "saison_id";
			$columns["G1.liga_id"] = "liga_id";
			$columns["G1.spieltag"] = "spieltag";
			$columns["G1.berechnet"] = "berechnet";
			$columns["G1.datum"] = "datum";
			$columns["(SELECT name FROM " . $conf['db_prefix'] . "_saison AS S WHERE S.id = G1.saison_id)"] = "saisonname";
			$columns["(SELECT name FROM " . $conf['db_prefix'] . "_liga AS L WHERE L.id = G1.liga_id)"] = "liganame";
			$fromTable = $conf['db_prefix'] . "_spiel AS G1";
			$whereCondition = "G1.liga_id = %d AND G1.berechnet = '0' GROUP BY spieltag ORDER BY spieltag ASC";
			$result = $db->querySelect($columns, $fromTable, $whereCondition, $leagueid);
	 		?>
			<h4 style="margin-top:20px"><?php echo $i18n->getMessage("movematchday_description"); ?></h4>
			<table class="table table-condensed table-bordered">
				<thead>
					<tr>
						<th><?php echo $i18n->getMessage("movematchday_date"); ?></th>
						<th><?php echo $i18n->getMessage("movematchday_matchday"); ?></th>
						<th><?php echo $i18n->getMessage("movematchday_season"); ?></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
					while ($check = $result->fetch_array()) {
						$url = "?site=" . $site . "&show=edit&id=" . $check["id"];
						if ($check['berechnet'] == 0) $edit = "<a href=\"". $url ."\" title=\"". $i18n->getMessage("movematchday_tooltip") . "\"><i class=\"icon-pencil\"></i></a>";
						else $edit = "";
	 						echo "<tr>";
	 						echo "<td>". date("d.m.y, H:i",$check["datum"]) . "</td>";
							echo "<td>". $check["spieltag"] . "</td>";
	 						echo "<td>". $check["liganame"] ." (".$check["saisonname"].")". "</td>";
							echo "<td>". $edit ."</td>";
	 						echo "</tr>";
	 					}
	 				?>
				</tbody>
			</table>
			<?php
		}
		$result->free();
	}
}
// form
elseif ($show == "edit") {
	$columns = '*';
	$whereCondition = 'id = %d';
	$result = $db->querySelect($columns, $conf['db_prefix'] .'_spiel', $whereCondition, $id, 1);
	$spiel = $result->fetch_array();
	?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal">
		<input type="hidden" name="show" value="save">
		<input type="hidden" name="site" value="<?php echo $site; ?>">
		<input type="hidden" name="teamid" value="<?php echo $teamid; ?>">
		<input type="hidden" name="liga_id" value="<?php echo $spiel['liga_id']; ?>">
		<input type="hidden" name="spieltag" value="<?php echo $spiel['spieltag']; ?>">
		<input type="hidden" name="datum" value="<?php echo $spiel['datum']; ?>">
		<fieldset>
			<legend><?php echo $i18n->getMessage("movematchday_navlabel"); ?></legend>
			<?php
			$formFields = array();
			$formFields["movematchday_newdate"] = array("type" => "timestamp", "value" =>  $spiel['datum']);
			foreach ($formFields as $fieldId => $fieldInfo) {
				echo FormBuilder::createFormGroup($i18n, $fieldId, $fieldInfo, $fieldInfo["value"], "");
			}
			?>
		</fieldset>
		<div class="form-actions">
			<input type="submit" class="btn btn-primary" accesskey="s" title="Alt + s" value="<?php echo $i18n->getMessage("button_save"); ?>">
		</div>
	</form>
	<?php
}
//********** validate, generate **********
elseif ($show == "save") {
	$dateObj = DateTime::createFromFormat($website->getConfig("date_format") .", H:i", $_POST["movematchday_newdate_date"] .", ". $_POST["movematchday_newdate_time"]);
	$fieldValue = ($dateObj) ? $dateObj->getTimestamp() : 0;
	if ($admin['r_demo']) $err[] = $i18n->getMessage("validationerror_no_changes_as_demo");
	if ($fieldValue <= $website->getNowAsTimestamp()) $err[] = $i18n->getMessage("movematchday_alert");
	//##### Evtl. Fehler ausgeben #####
	if (isset($err)) {
		include("validationerror.inc.php");
	}
	//##### Abspeichern #####
else {
	$columns = 'id, liga_id, datum, spieltag';
	$fromTable = $conf['db_prefix'] .'_spiel';
	$whereCondition = "liga_id = ".$_POST['liga_id']." AND spieltag = ".$_POST['spieltag']." AND datum =  ".$_POST['datum']." ORDER BY id ASC";
	$parameter = "";
	$result = $db->querySelect($columns, $fromTable, $whereCondition, $parameter);
	$counter = 0;
	while($spiel = $result->fetch_array()) {
			// update match
			$db->queryUpdate(array(
				"datum" => $fieldValue
			), $website->getConfig("db_prefix") . "_spiel", 'id = %d' , $spiel['id']);
			$counter++;
		}
		$result->free();
		echo createSuccessMessage($i18n->getMessage("movematchday_success",$counter), "");
	}
}
echo "<p>".$i18n->getMessage("movematchday_version")." Developped 2014 by <b>".$i18n->getMessage("movematchday_author")."</b> powered by ".$i18n->getMessage("movematchday_poweredauthor")."</p>"."OpenSource seit 14.05.2016";