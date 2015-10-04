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


error_reporting(E_ALL);
define("BASE_FOLDER", __DIR__ ."/..");
define("WRITABLE_FOLDERS", "generated/");
define("CONFIGFILE", BASE_FOLDER . "/generated/config.inc.php");
define("CONFIGFILE_OLD", BASE_FOLDER . "/admin/config/config.inc.php");

session_start();
$supportedLanguages = array("de" => "Deutsch");

ignore_user_abort(TRUE);
set_time_limit(0);

include(BASE_FOLDER . "/modules/DbConnection.class.php");
?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <title>OpenWebsoccer Select-Update Installation</title>
    <link href="../admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
    <meta charset="UTF-8">
    <style type="text/css">
      body {
        padding-top: 100px;
        padding-bottom: 40px;
      }
    </style>
  </head>
  <body>

	<div class="container">

		<h1>OpenWebsoccer Select-Update Installation</h1>

		<hr>

		<?php

		// Start - PHP-Vorababfrage mit Hinweisen
		if (strnatcmp(phpversion(),'5.3.1')<= 0) {
			echo 'Es muss mindestens PHP 5.3.0 sein, es ist die Version: ' . PHP_VERSION . ' installiert.' ;
			echo '<p>Powered by <a href="http://www.websoccer-sim.com" target="_blank">OpenWebSoccer-Sim</a></p>';
			echo '<p>"OpenWebsoocer / Co-Powered by Rolf Joseph / ErdemCan"</p>';
			exit;
		}

		else if (version_compare(PHP_VERSION, '7.0.1', '>=')) {
			echo 'Ihre PHP Version ' . PHP_VERSION . ' ist zu hoch, daher funktioniert die Installation eventuell nicht.';
		}

		else {
			echo 'Ihre PHP Version ist ' . PHP_VERSION . ' und das Update kann beginnen.';
		}
		// Ende - PHP-Vorababfrage mit Hinweisen - by Rolf Josaeph / ErdemCan

		$errors = array();

		$messagesIncluded = FALSE;
		if(isset($_SESSION["lang"])) {
			include("messages_" . $_SESSION["lang"] . ".inc.php");
			$messagesIncluded = $_SESSION["lang"];
		}

		$action = (isset($_REQUEST["action"])) ? $_REQUEST["action"] : "";
		if (!strlen($action) || substr($action, 0, 6) !== "action") {
			$view = "UpdateScreen";
		} else {
			$view = $action();
		}

		if(isset($_SESSION["lang"]) && $_SESSION["lang"] !== $messagesIncluded) {
			include("messages_" . $_SESSION["lang"] . ".inc.php");
		}

		if (count($errors)) {
			foreach($errors as $error) {
				echo "<div class=\"alert alert-error\">$error</div>";
			}
		}

		if (isset($messages)) {
			$view($messages);
		} else {
			$view();
}

		?>

		<?php

/** Update */
function UpdateScreen($messages) {
	?>
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
			<br><p><b>Update - Auswahl<br/></b><br>
			<input type="checkbox" name="stadionausbau_status" /> Stadionausbau Status-Feld setzen<br />
			<input type="checkbox" name="stadionausbau" /> Stadionausbau<br />
			<input type="checkbox" name="zufallsereignisse_status" /> Zufallsereignisse Status-Feld setzen<br />
			<input type="checkbox" name="zufallsereignisse" /> Zufallsereignisse<br />
			<input type="checkbox" name="spielberichtsmeldungen" /> Spielberichtsmeldungen<br />
			<input type="checkbox" name="generated" /> Erzeugte Dateien von der Quelle in den Ordner generated verschieben<br />
			</p><br>
			<input type="submit" name="formSubmit" value="Update ausführen" /> <input type="reset" value=" Auswahl zurücksetzen"> <input type="button" value="Admincenter / Update abbrechen" onclick="document.location.href = '../admin/index.php'" /> <br><br><b>Hinweis: das Update wird abgeschlossen, wenn man im Admincenter die Cacheleerung ausführt ( das Update-Verzeichnis wird gelöscht ) !</b><br><br>
		</form>

	<?php
			$servername = "localhost";
			$username = "root";
			$password = "root";
			$dbname = "websoccer";

			echo("<p><b>Es wurden folgende Updates installiert: </b>");
			echo("</p>");

			if(isset($_POST['stadionausbau'])) { $_POST['stadionausbau_status'] = ''; }
			if(isset($_POST['zufallsereignisse'])) { $_POST['zufallsereignisse_status'] = ''; }

			if(isset($_POST['stadionausbau_status']))
        	{
        		echo ' Stadionausbau Status-Feld setzen ->';
				$sql = "ALTER TABLE _stadiumbuilding ADD status enum('1','0');";

				try {
    				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    				$stmt = $conn->prepare($sql);
    				$stmt->execute();
    				echo " ausgeführt<br>";
    			}
				catch(PDOException $e) { echo $sql . $e->getMessage() . "<br>"; }
				$conn = null;
        	}
			if(isset($_POST['stadionausbau']))
        	{
        		echo ' Stadionausbau ->';
				$sql = "SET FOREIGN_KEY_CHECKS = 0;
INSERT INTO `_stadiumbuilding` (`id`, `name`, `description`, `picture`, `required_building_id`, `costs`, `premiumfee`, `construction_time_days`, `effect_training`, `effect_youthscouting`, `effect_tickets`, `effect_fanpopularity`, `effect_injury`, `effect_income`, `status`) VALUES
( '10001', 'Parkplatz (niedrig)', 'Parkplätze', NULL, NULL, 250000, 0, 30, 0, 0, 5, 1, 0, 1000, 0),
( '10002', 'Parkhaus (mittel)', 'Parkhaus', NULL, 10001, 500000, 0, 60, 0, 0, 10, 2, 0, 2000, 0),
( '10003', 'Parkhaus (hoch)', 'Parkhaus', NULL, 10002, 2000000, 0, 90, 0, 0, 20, 5, 0, 10000, 0),
( '10004', 'Trainingsplatz (niedrig)', 'Trainingsplatz ohne Rasenheizung', NULL, NULL, 250000, 0, 30, 1, 0, 0, 1, 0, 1000, 0),
( '10005', 'Trainingsplatz (mittel)', 'Trainingsplatz mit Rasenheizung', NULL, 10004, 500000, 0, 60, 2, 0, 0, 2, 0, 2000, 0),
( '10006', 'Trainingsplatz (hoch)', 'Trainingszentrum mit Sporthalle', NULL, 10005, 2000000, 0, 90, 4, 0, 0, 5, 0, 10000, 0),
( '10007', 'Fanshopmobil (niedrig)', 'Fanshop ', NULL, NULL, 250000, 0, 30, 0, 0, 1, 1, 0, 1000, 0),
( '10008', 'Fanshop (mittel)', 'Fanshop ', NULL, 10007, 500000, 0, 60, 0, 0, 2, 2, 0, 2000, 0),
( '10009', 'Fancenter (hoch)', 'Fancenter ', NULL, 10008, 2000000, 0, 90, 0, 0, 5, 5, 0, 10000, 0),
( '10010', 'Pommesbude (niedrig)', 'Pommesbude', NULL, NULL, 250000, 0, 30, 0, 0, 1, 1, 0, 1000, 0),
( '10011', 'Fast-Food Shop (mittel)', 'Fast Food Shop', NULL, 10010, 500000, 0, 60, 0, 0, 2, 2, 0, 2000, 0),
( '10012', 'Restaurant (hoch)', 'Restaurant', NULL, 10011, 2000000, 0, 90, 0, 0, 5, 5, 0, 10000, 0),
( '10013', 'Vereinshaus (niedrig)', 'Vereinshaus', NULL, NULL, 250000, 0, 30, 0, 1, 0, 1, 0, 1000, 0),
( '10014', 'Vereinszentrum (mittel)', 'Vereinszentrum', NULL, 10013, 500000, 0, 60, 1, 2, 0, 2, 0, 2000, 0),
( '10015', 'Vereinskomplex (hoch)', 'Vereinskomplex', NULL, 10014, 2000000, 0, 90, 2, 5, 0, 5, 0, 10000, 0),
( '10016', 'Jugendhaus (niedrig)', 'Jugendhaus', NULL, NULL, 250000, 0, 30, 0, 5, 0, 1, 0, 1000, 0),
( '10017', 'Jugendhaus (mittel)', 'Jugendhaus mit Sportplatz', NULL, 10016, 500000, 0, 60, 0, 10, 0, 2, 0, 2000, 0),
( '10018', 'Jugendinternat (hoch)', 'Jugendinternat', NULL, 10017, 2000000, 0, 90, 0, 20, 0, 5, 0, 10000, 0),
( '10019', 'Vereinsmuseum (niedrig)', 'Museum', NULL, NULL, 250000, 0, 30, 0, 0, 1, 1, 0, 1000, 0),
( '10020', 'Vereinsmuseum (mittel)', 'Vereinsmuseum mit Unikaten', NULL, 10019, 500000, 0, 60, 0, 0, 2, 2, 0, 2000, 0),
( '10021', 'Vereinsmuseum (hoch)', 'Historisches Vereinsmuseum ', NULL, 10020, 2000000, 0, 90, 0, 0, 5, 5, 0, 10000, 0),
( '10022', 'Fanclubverwaltung (niedrig)', 'Fanclubverwaltung', NULL, NULL, 250000, 0, 30, 0, 0, 1, 1, 0, 1000, 0),
( '10023', 'Fanclubverwaltung (mittel)', 'Fanclubverwaltung mit Poststelle', NULL, 10022, 500000, 0, 60, 0, 0, 2, 2, 0, 2000, 0),
( '10024', 'Fanclubverwaltung (hoch)', 'Fanclubverwaltung mit EDV Abteilung', NULL, 10023, 2000000, 0, 90, 0, 0, 5, 5, 0, 10000, 0),
( '10025', 'EDV Raum (niedrig)', 'EDV Raum', NULL, NULL, 250000, 0, 30, 0, 0, 0, 10, 0, 1000, 0),
( '10026', 'EDV Lager (mittel)', 'EDV Lager', NULL, 10025, 500000, 0, 60, 0, 0, 0, 20, 0, 2000, 0),
( '10027', 'EDV Komplex (hoch)', 'EDV Komplex', NULL, 10026, 2000000, 0, 90, 0, 0, 0, 50, 0, 10000, 0),
( '10028', 'Scoutingraum (niedrig)', 'Scoutingraum', NULL, NULL, 250000, 0, 30, 0, 5, 0, 1, 0, 1000, 0),
( '10029', 'Scoutinghaus (mittel)', 'Scoutinghaus ', NULL, 10028, 500000, 0, 60, 0, 10, 0, 2, 0, 2000, 0),
( '10030', 'Scoutingkomplex (hoch)', 'Scoutingbereich mit modernster Ausstattung', NULL, 10029, 2000000, 0, 90, 0, 20, 0, 5, 0, 10000, 0),
( '10031', 'Fahrradständer (niedrig)', 'Anreise per Fahrrad', NULL, NULL, 250000, 0, 30, 0, 1, 0, 1, 0, 1000, 0),
( '10032', 'Busbahnhof (mittel)', 'Busbahnhof zur Anreise', NULL, 10031, 500000, 0, 60, 0, 2, 0, 2, 0, 2000, 0),
( '10033', 'S-Bahn (hoch)', 'Straßenbahn zur Anreise', NULL, 10032, 2000000, 0, 90, 0, 5, 0, 5, 0, 10000, 0),
( '10034', 'U-Bahnhof (Luxus)', 'U-Bahn zur Anreise', NULL, 10033, 8000000, 0, 120, 0, 20, 0, 20, 0, 50000, 0),
( '10035', 'Tiefgarage (Luxus)', 'Tiefgarage ', NULL, 10003, 8000000, 0, 120, 0, 0, 30, 20, 0, 50000, 0),
( '10036', 'Arztraum (niedrig)', 'Arztraum zur Heilung der Spieler', NULL, NULL, 250000, 0, 30, 2, 0, 0, 1, 0, 1000, 0),
( '10037', 'Arzthaus (mittel)', 'Arzthaus', NULL, 10036, 500000, 0, 60, 4, 0, 0, 2, 0, 2000, 0),
( '10038', 'Arztpraxis (hoch)', 'Arztpraxis', NULL, 10037, 2000000, 0, 90, 6, 0, 0, 5, 0, 10000, 0),
( '10039', 'Krankenhaus (Luxus)', 'Krankenhaus', NULL, 10038, 8000000, 0, 120, 8, 0, 0, 20, 0, 50000, 0),
( '10040', 'Wellnessraum (niedrig)', 'Wellnessraum ', NULL, NULL, 250000, 0, 30, 1, 0, 0, 1, 0, 1000, 0),
( '10041', 'Wellnessoase (mittel)', 'Wellnessoase ', NULL, 10040, 500000, 0, 60, 2, 0, 0, 2, 0, 2000, 0),
( '10042', 'Wellnessbereich (hoch)', 'Wellnessbereich ', NULL, 10041, 2000000, 5, 90, 0, 0, 0, 5, 0, 10000, 0),
( '10043', 'Wellnesskomplex (Luxus)', 'Wellnesskomplex', NULL, 10042, 8000000, 10, 120, 0, 0, 0, 20, 0, 50000, 0),
( '10044', 'Kiosk (niedrig)', 'Kiosk ', NULL, NULL, 250000, 0, 30, 0, 0, 1, 1, 0, 1000, 0),
( '10045', 'Kioskladen (mittel)', 'Kioskladen ', NULL, 10044, 500000, 0, 60, 0, 0, 2, 2, 0, 2000, 0);
INSERT INTO `_stadiumbuilding` (`id`, `name`, `description`, `picture`, `required_building_id`, `costs`, `premiumfee`, `construction_time_days`, `effect_training`, `effect_youthscouting`, `effect_tickets`, `effect_fanpopularity`, `effect_injury`, `effect_income`, `status`) VALUES
( '10046', 'Kioskkomplex (hoch)', 'Großer Kiosk-Store', NULL, 10045, 2000000, 0, 90, 0, 0, 5, 5, 0, 10000, 0),
( '10047', 'Dixie Klo (niedrig)', 'Dixie Klo', NULL, NULL, 250000, 0, 30, 0, 0, 1, 1, 0, 1000, 0),
( '10048', 'Toilettenwagen (mittel)', 'Toilettenwagen', NULL, 10047, 500000, 0, 60, 0, 0, 2, 2, 0, 2000, 0),
( '10049', 'Toiletten (hoch)', 'Toiletten', NULL, 10048, 2000000, 0, 90, 0, 0, 5, 5, 0, 10000, 0),
( '10050', 'Toiletten modern (Luxus)', 'Toiletten modern', NULL, 10049, 8000000, 0, 120, 0, 0, 20, 20, 0, 50000, 0),
( '10051', 'Flutlichtmast (niedrig)', 'Flutlichtmast', NULL, NULL, 250000, 0, 30, 0, 0, 5, 1, 0, 1000, 0),
( '10052', 'Flutlicht (mittel)', 'Flutlich', NULL, 10051, 500000, 0, 60, 0, 0, 10, 2, 0, 2000, 0),
( '10053', 'Flutlichtanlage (hoch)', 'Flutlichtanlage', NULL, 10052, 2000000, 0, 90, 0, 0, 20, 5, 0, 10000, 0),
( '10054', 'Manufaktur (niedrig)', 'Manufaktur zur Herstellung von Merchandising ', NULL, NULL, 250000, 0, 30, 0, 0, 10, 1, 0, 1000, 0),
( '10055', 'Werkhalle (mittel)', 'Werkhalle zur Herstellung von Merchandising ', NULL, 10054, 500000, 0, 60, 0, 0, 20, 2, 0, 2000, 0),
( '10056', 'Maschinenhalle (hoch)', 'Maschinenhalle zur Herstellung von Merchandising ', NULL, 10055, 2000000, 0, 90, 0, 0, 30, 5, 0, 10000, 0),
( '10057', 'Moderne Fabrik (Luxus)', 'Automatisierte Maschinenhalle zur Herstellung von Merchandising ', NULL, 10056, 8000000, 0, 120, 0, 0, 40, 20, 0, 50000, 0),
( '10058', 'Drive-In-Resturant (Luxus)', 'Restaurant', NULL, 10012, 8000000, 0, 120, 0, 0, 2, 20, 0, 50000, 0),
( '10059', 'Vereinszentrale (Luxus)', 'Vereinszentrale', NULL, 10015, 8000000, 0, 120, 0, 0, 20, 20, 0, 50000, 0),
( '10060', 'Kraftraum (niedrig)', 'Kraftraum', NULL, NULL, 250000, 0, 30, 1, 0, 0, 1, 0, 1000, 0),
( '10061', 'Krafträume (mittel)', 'Krafträume', NULL, 10060, 500000, 0, 60, 2, 0, 0, 2, 0, 2000, 0),
( '10062', 'Fitnessstudio (hoch)', 'Fitnessstudio', NULL, 10061, 2000000, 0, 90, 3, 0, 0, 5, 0, 10000, 0),
( '10063', 'Sportleistungszentrum (Luxus)', 'Sportleistungszentrum', NULL, 10062, 8000000, 0, 120, 4, 0, 0, 20, 0, 50000, 0),
( '10064', 'Fanstatue', 'Fanstatue', NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
( '10065', 'Parkplätze','Parkplatzausbau', NULL, NULL, 500000, 0, 50, 0, 0, 10, 20, 0, 0, 0),
( '10066', 'Fanshop', 'Alles was der Fan begehrt', NULL, 10069, 50000, 0, 10, 0, 0, 5, 10, 0, 500, 0),
( '10067', 'Aachener Printen Ecke im Fanshop', 'Gentleman lädt zum Naschen ein', NULL, 10066, 1000, 0, 2, 0, 0, 0, 1, 0, 100, 0),
( '10068', 'Bushaltestelle', 'direkte Anbindung zum Busnetz', NULL, NULL, 20000, 0, 3, 0, 0, 2, 5, 0, 0, 0),
( '10069', 'Stadion-Center', 'Center für Shopvermietung', NULL, NULL, 1000000, 0, 50, 0, 0, 10, 20, 0, 0, 0),
( '10070', 'Sport-Center', 'Center für die Spielerbetreuung', NULL, NULL, 1000000, 0, 50, 0, 0, 0, 0, 0, 0, 0),
( '10071', 'Getränke-Shop', NULL, NULL, 69, 10000, 0, 20, 0, 0, 0, 10, 0, 1000, 0),
( '10072', 'Imbiss', NULL, NULL, 69, 5000, 0, 10, 0, 0, 0, 5, 0, 500, 0),
( '10073', 'Reha-Abteilung', 'Förderung der Genesung', NULL, 10070, 200000, 0, 20, 0, 0, 0, 0, 1, 0, 0),
( '10074', 'Scouting Abteilung', 'Management für das Scouting von Jugendspielern', NULL, 10070, 100000, 0, 10, 0, 10, 0, 0, 0, 0, 0),
( '10075', 'Fitness- und Relax Bereich', 'zusätzliche  Frische und Zufriedenheit pro Trainingseinheit', NULL, 70, 100000, 0, 0, 1, 0, 0, 0, 0, 0, 0),
( '10076', 'U-Bahn Anschluss', NULL, NULL, NULL, 500000, 0, 50, 0, 0, 15, 15, 0, 0, 0),
( '10077', 'Restaurant', 'Erlebnis Essen', NULL, 10069, 100000, 0, 30, 0, 0, 0, 5, 0, 5000, 0),
( '10078', 'Parkanlage', 'Das grüne Erlebnis für die ganze Familie', NULL, NULL, 1000000, 0, 90, 0, 0, 10, 10, 0, 0, 0),
( '10079', 'Therme', NULL, NULL, NULL, 500000, 0, 90, 1, 0, 1, 10, 0, 10000, 0),
( '10080', 'Salinen', 'Die Lunge wird sich freuen.', NULL, NULL, 200000, 0, 30, 0, 0, 5, 5, 0, 0, 0),
( '10082', 'Polizeiwache', 'Mehr Zuschauer, aber kostet dafür auch Geld.', NULL, NULL, 500000, 0, 50, 0, 0, 10, 0, 0, '-10000', 0),
( '10083', 'Fanbetreungs Punkt', 'Kostet etwas, aber bringt auch mehr Zuschauer.', NULL, NULL, 50000, 0, 30, 0, 0, 5, 0, 0, '-1000', 0);
SET FOREIGN_KEY_CHECKS = 1;";

				try {
    				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    				$stmt = $conn->prepare($sql);
    				$stmt->execute();
    				echo " ausgeführt<br>";
    			}
				catch(PDOException $e) { echo $sql . $e->getMessage() . "<br>"; }
				$conn = null;
        	}
        	if(isset($_POST['zufallsereignisse_status']))
        	{
				echo ' Zufallsereignisse Status-Feld setzen ->';
				$sql = "ALTER TABLE _randomevent ADD status enum('1','0');";

				try {
    				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    				$stmt = $conn->prepare($sql);
    				$stmt->execute();
    				echo " ausgeführt<br>";
    			}
				catch(PDOException $e) { echo $sql . $e->getMessage() . "<br>"; }
				$conn = null;
        	}
			if(isset($_POST['zufallsereignisse']))
        	{
        		echo 'Zufallsereignisse ->';
				$sql = "SET FOREIGN_KEY_CHECKS = 0;
INSERT INTO `_randomevent` (`id`, `message`, `effect`, `effect_money_amount`, `effect_blocked_matches`, `effect_skillchange`, `weight`, `status`) VALUES
( '10001', 'Sie gewinnen im Lotto', 'money', 100000, 0, 0, 3, 0),
( '10002', 'Sie finden Geld auf der Straße. Sie sind ein Glückspilz', 'money', 500, 0, 0, 3, 0),
( '10003', 'Sie bekommen Steuern erstattet!', 'money', 15000, 0, 0, 3, 0),
( '10004', 'Ein Sponsor überweißt Ihnen einen Bonus', 'money', 25000, 0, 0, 3, 0),
( '10005', 'Sie sind der Sieger eines Fotowettbewerbes', 'money', 1000, 0, 0, 3, 0),
( '10006', 'Für eine Homestory bekommen Sie einen Bonus', 'money', 50000, 0, 0, 3, 0),
( '10007', '{playername} fällt nach einer Disconacht aus.', 'player_injured', 0, 1, -1, 3, 0),
( '10008', '{playername} lässt sich von seiner Frau scheiden', 'player_happiness', 0, 0, -2, 3, 0),
( '10009', '{playername} heiratet seine Freundin', 'player_happiness', 0, 0, 2, 3, 0),
( '10010', '{playername} trainiert neben dem Training im Kraftraum.', 'player_stamina', 0, 0, 2, 3, 0),
( '10011', '{playername} stolpert die Treppe runter und verletzt sich', 'player_injured', 0, 2, -1, 3, 0),
( '10012', '{playername} bekommt ein Kind', 'player_fitness', 0, 0, -2, 3, 0),
( '10013', '{playername} bekommt mit seiner Frau Zwillinge', 'player_happiness', 0, 0, 2, 3, 0),
( '10014', 'Durch eine Fanleihe gewinnen Sie Geld', 'money', 250000, 0, 0, 3, 0),
( '10015', 'Deine Mitarbeiter erwirtschaften ein dickes Plus in der Kasser', 'money', 75000, 0, 0, 3, 0),
( '10016', 'Deine Mitarbeiter streiken vorm Vereinshaus', 'money', -50000, 0, 0, 3, 0),
( '10017', 'Ein Angestellter des Vereins brennt mit dem Tagesgeld durch', 'money', -150000, 0, 0, 3, 0),
( '10018', 'Ein anonymer Fan spendet Ihrem Verein', 'money', 5000, 0, 0, 3, 0),
( '10019', 'Ein Hacker legt die EDV Abteilung des Vereins lahm', 'money', -15000, 0, 0, 3, 0),
( '10020', 'Ein Mitarbeiter telefoniert auf Vereinskosten', 'money', -1000, 0, 0, 3, 0),
( '10021', 'Ein Brand im Lagerraum zerstört die gesamte EDV Anlage', 'money', -225000, 0, 0, 3, 0),
( '10022', 'Wegen Hooligans wird ihr Verein zu einer Geldstrafe verdonnert', 'money', -275000, 0, 0, 3, 0),
( '10023', 'Renovierungen im Stadionumfeld sind von Nöten', 'money', -200000, 0, 0, 3, 0),
( '10024', 'Ihr Sponsor ist sehr zufrieden und zahlt dem Verein einen Bonus', 'money', 350000, 0, 0, 3, 0),
( '10025', 'Ihr Verein bekommt eine Spende von einem Fanclub', 'money', 100000, 0, 0, 3, 0),
( '10026', 'Ihr Verein steht in der Presse schlecht da. Sie starten eine Imagekapampagne', 'money', -15000, 0, 0, 3, 0),
( '10027', 'Ihr Verein wird für vorbildliche Fans ausgezeichnet', 'money', 300000, 0, 0, 3, 0),
( '10028', '{playername} fällt nach einer Schiedsrichterbeleidigung aus', 'player_blocked', 0, 2, 0, 3, 0),
( '10029', '{playername} fällt nach einer Trainingskeilerei aus', 'player_injured', 0, 1, 0, 3, 0),
( '10030', '{playername} verdreht sich das Knie beim Joggen', 'player_injured', 0, 4, 0, 3, 0),
( '10031', '{playername} plaudert Internas aus und wird suspendiert', 'player_blocked', 0, 5, 0, 3, 0),
( '10032', '{playername} trauert seiner Ex-Freundin hinterher', 'player_fitness', 0, 0, -2, 3, 0),
( '10033', '{playername} bekommt viel Lob von der Presse', 'player_happiness', 0, 0, 3, 3, 0),
( '10034', '{playername} geht nach dem Training zum Wasseraerobic', 'player_fitness', 0, 0, 2, 3, 0),
( '10035', '{playername} holt sich ein Hexenschuss als er sein Kind hebt', 'player_injured', 0, 0, -1, 3, 0),
( '10036', 'Sie gewinnen im Casino', 'money', 750000, 0, 0, 3, 0),
( '10037', 'Sie erhalten einen Preis eines Sportmagazines', 'money', 75000, 0, 0, 3, 0),
( '10038', 'Sie veräußern eine Immobilie gewinnbringend', 'money', 125000, 0, 0, 3, 0),
( '10039', '{playername} streitet sich mit mehreren Mitspielern', 'player_happiness', 0, 0, -2, 3, 0),
( '10040', '{playername} lädt seine Mannschaftskollegen zum Mannschaftsabend ein', 'player_happiness', 0, 0, 2, 3, 0),
( '10041', '{playername} lädt seine Teamkollegen zum gemeinsamen Essen ein', 'player_happiness', 0, 0, 2, 3, 0),
( '10042', '{playername} bekommt einen neuen Ausrüstervertrag', 'player_happiness', 0, 0, 2, 3, 0),
( '10043', '{playername} verliert einen Ausrüstervertrag', 'player_happiness', 0, 0, -2, 3, 0),
( '10044', '{playername} erkrankt schwer', 'player_injured', 0, 2, 0, 3, 0),
( '10045', '{playername} knickt unglücklich um als er einen Trick ausprobiert', 'player_injured', 0, 1, 0, 3, 0);
INSERT INTO `_randomevent` (`id`, `message`, `effect`, `effect_money_amount`, `effect_blocked_matches`, `effect_skillchange`, `weight`, `status`) VALUES
( '10046', '{playername} wird beim Rückwärts ausparken von seinem Teamkollegen übersehen. Sein Fuß ist danach kaputt.', 'player_injured', 0, 1, 0, 3, 0),
( '10047', '{playername} geht privat sehr viel Joggen,was sich auf die Kondition auswirkt.', 'player_stamina', 0, 0, 2, 3, 0),
( '10048', '{playername} diskutiert viel mit seinem Trainer und lernt wertvolles.', 'player_happiness', 0, 0, 2, 3, 0),
( '10049', '{playername} wütet nach der Niederlage gegen seine Mitspieler. Sie suspendieren Ihn.', 'player_blocked', 0, 2, 0, 3, 0),
( '10050', '{playername} verbessert sein Standing im Team', 'player_happiness', 0, 0, 1, 3, 0),
( '10051', 'Sie verlieren eine Sportwette gegen ein alten Trainerkollegen. Und werden zur Kasse gebeten.', 'money', -1000, 0, 0, 3, 0),
( '10052', 'Sie laden ihre Spieler zum Bowlingabend ein und zahlen diesen.', 'money', -1250, 0, 0, 3, 0),
( '10053', 'Sie laden ihr Team zum Kanu-Trip ein.', 'money', -800, 0, 0, 3, 0),
( '10054', 'Sie kommen zu spät zum Training und zahlen dafür in die Mannschaftskasse ein', 'money', 500, 0, 0, 3, 0),
( '10055', 'Sie beschaffen sich eine Taktik Tafel für zu Hause', 'money', -375, 0, 0, 3, 0),
( '10056', '{playername} wird viel mit Vereinen in Verbindung gebracht. Seine Vorbereitung schleift dadurch', 'player_happiness', 0, 0, -2, 3, 0),
( '10057', '{playername} wird mit großen Clubs in Verbindung gebracht. Das imponiert ihm sehr und er hängt sich mehr rein.', 'player_happiness', 0, 0, 3, 3, 0),
( '10058', '{playername} verkracht sich mit seinem besten Kumpel.', 'player_fitness', 0, 0, -2, 3, 0),
( '10059', '{playername} kommt verspätet zum Training', 'player_blocked', 0, 1, 0, 3, 0),
( '10060', '{playername} trauert um seine Oma', 'player_happiness', 0, 0, -2, 3, 0),
( '10061', 'Durch eine Fehl-Bestellung entstehen erhöhte Kosten', 'money', -3500, 0, 0, 3, 0),
( '10062', 'Sie gewinnen einen Preis für die Beste Jugendabteilung', 'money', 30000, 0, 0, 3, 0),
( '10063', 'Sie platzieren eine Sportwette und gewinnen diese auch noch.', 'money', 1750, 0, 0, 3, 0),
( '10064', 'Sie finden einen Alukoffer und öffnen diesen', 'money', 75750, 0, 0, 3, 0),
( '10065', 'Ein Mitarbeiter verletzt sich im Büro. Sie kaufen Ihn eine Aufmerksamkeit.', 'money', -500, 0, 0, 3, 0);
SET FOREIGN_KEY_CHECKS = 1;";

				try {
    				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    				$stmt = $conn->prepare($sql);
    				$stmt->execute();
    				echo " ausgeführt<br>";
    			}
				catch(PDOException $e) { echo $sql . $e->getMessage() . "<br>"; }
				$conn = null;
        	}
        	if(isset($_POST['spielberichtsmeldungen']))
        	{
				echo 'Spielberichtsmeldungen ->';
				$sql = "DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 1;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 2;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 3;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 4;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 5;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 6;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 7;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 8;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 9;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 10;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 11;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 12;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 13;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 14;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 15;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 16;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 17;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 18;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 19;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 20;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 21;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 22;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 23;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 24;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 25;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 26;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 27;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 28;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 29;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 30;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 31;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 32;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 33;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 34;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 35;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 36;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 37;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 38;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 39;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 40;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 41;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 42;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 43;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 44;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 45;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 46;
DELETE FROM `websoccer`.`_spiel_text` WHERE `_spiel_text`.`id` = 47;
INSERT INTO `_spiel_text` (`id`, `aktion`, `nachricht`) VALUES
( '10001', 'Tor', '<b>{ma1} : </b>Tor von {sp1} !'),
( '10002', 'Tor', '<b>{ma1} : </b>{sp1} schießt..... TOR !'),
( '10003', 'Tor', '<b>{ma1} : </b>TOR - wunderschön gemacht von {sp1}'),
( '10004', 'Tor', '<b>{ma1} : </b>{sp1} schießt auf das Tor... und der Ball ist drin !'),
( '10005', 'Auswechslung', '<b>{ma1} : </b><i>{sp1} kommt für {sp2}.</i>'),
( '10006', 'Zweikampf_gewonnen', '{sp1} geht auf seinen Gegenspieler zu und gewinnt den Zweikampf!'),
( '10007', 'Zweikampf_gewonnen', '{sp1} in einem Zweikampf.... gewonnen!'),
( '10008', 'Zweikampf_gewonnen', '{sp1} läuft mit dem Ball am Fuß auf seinen Gegenspieler zu... und gewinnt den Zweikampf.'),
( '10009', 'Zweikampf_gewonnen', '{sp1} nimmt seinem Gegenspieler gekonnt den Ball von den Füßen.'),
( '10010', 'Zweikampf_verloren', '{sp1} geht auf {sp2} zu... und verliert den Zweikampf.'),
( '10011', 'Zweikampf_verloren', '{sp1} in einem Zweikampf.... und verliert ihn.'),
( '10012', 'Zweikampf_verloren', '{sp1} geht mit dem Ball am Fuß auf seinen Gegenspieler zu... und verliert ihn.'),
( '10013', 'Zweikampf_verloren', '{sp1} sieht seinen Gegenspieler gegenüber und lässt sich den Ball abnehmen.'),
( '10014', 'Pass_daneben', 'Flanke von {sp1}... in die Wolken!'),
( '10015', 'Pass_daneben', '{sp1} passt den Ball in die Mitte... genau auf die Füße des Gegners.'),
( '10016', 'Pass_daneben', '{sp1} passt den Ball steil nach vorne... Abschlag!'),
( '10017', 'Pass_daneben', 'Pass von {sp1}... ins Seitenaus.'),
( '10018', 'Torschuss_daneben', '<b>{ma1} : </b>{sp1} hat freie Bahn und schießt... weit über das Tor.'),
( '10019', 'Torschuss_daneben', '<b>{ma1} : </b>{sp1} schießt..... daneben.'),
( '10020', 'Torschuss_daneben', '<b>{ma1} : </b>{sp1} schießt auf das Tor... aber genau auf den Torwart.'),
( '10021', 'Torschuss_daneben', '<b>{ma1} : </b>Kopfball {sp1}... daneben.'),
( '10022', 'Torschuss_daneben', '<b>{ma1} : </b>{sp1} haut mit aller Kraft auf den Ball... Abschlag.'),
( '10023', 'Torschuss_daneben', '<b>{ma1} : </b>{sp1} schießt..... in die Wolken.'),
( '10024', 'Torschuss_auf_Tor', '<b>{ma1} : </b>{sp1} schießt..... Glanzparade des Torwarts!'),
( '10025', 'Torschuss_auf_Tor', '<b>{ma1} : </b>{sp1} schießt auf das Tor... aber der Torwart macht einen Hechtsprung und hat den Ball.'),
( '10026', 'Torschuss_auf_Tor', '<b>{ma1} : </b>{sp1} hat freie Bahn und schießt... aber der Torwart kann den Ball gerade noch so um den Pfosten drehen.'),
( '10027', 'Torschuss_auf_Tor', '<b>{ma1} : </b>{sp1} kommt zum Kopfball... ganz knapp daneben.'),
( '10028', 'Tor', '<b>{ma1} : </b>{sp1} kommt zum Kopfball... und da flattert der Ball im Netz !'),
( '10029', 'Karte_gelb', '<b>{ma1} : </b>{sp1} bekommt nach einem Foul die gelbe Karte.'),
( '10030', 'Karte_gelb', '<b>{ma1} : </b>{sp1} sieht die gelbe Karte.'),
( '10031', 'Karte_gelb', '<b>{ma1} : </b>{sp1} haut seinen Gegenspieler um und bekommt dafür die gelbe Karte.'),
( '10032', 'Karte_rot', '<b>{ma1} : </b><i>{sp1} springt von hinten in die Beine seinen Gegenspielers und sieht sofort die Rote Karte.</i>'),
( '10033', 'Karte_rot', '<b>{ma1} : </b><i>{sp1} haut seinen Gegenspieler um und sieht dafür die Rote Karte.</i>'),
( '10034', 'Karte_rot', '<b>{ma1} : </b><i>{sp1} bekommt die Rote Karte wegen Tätlichkeit.</i>'),
( '10035', 'Karte_gelb_rot', '<b>{ma1} : </b><i>{sp1} sieht die Gelb-Rote Karte und muss vom Platz.</i>'),
( '10036', 'Karte_gelb_rot', '<b>{ma1} : </b><i>{sp1} haut seinen Gegenspieler um und bekommt dafür die Gelb-Rote Karte.</i>'),
( '10037', 'Karte_rot', '<b>{ma1} : </b><i>{sp1} sieht nach einem bösen Foul die Rote Karte und muss vom Platz.</i>'),
( '10038', 'Verletzung', '<b>{ma1} : </b><i>{sp1} ist verletzt und muss vom Spielfeld getragen werden.</i>'),
( '10039', 'Verletzung', '<b>{ma1} : </b><i>{sp1} hat sich verletzt und kann nicht mehr weiterspielen.</i>'),
( '10040', 'Elfmeter_erfolg', ' <b>{ma1} : </b>{sp1} tritt an: Und trifft !'),
( '10041', 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} tritt an: Aber {sp2} hält den Ball !!'),
( '10042', 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} legt sich den Ball zurecht. Etwas unsicherer Anlauf... und haut den Ball über das Tor.'),
( '10043', 'Taktikaenderung', '<b>{ma1} : </b>{sp1} macht eine Taktikänderung !'),
( '10044', 'Ecke', '<b>{ma1} : </b>Ecke ! {sp1} spielt auf {sp2}...'),
( '10045', 'Freistoss_daneben', '<b>{ma1} : </b>Freistoß ! {sp1} schießt, aber zu ungenau.');
INSERT INTO `_spiel_text` (`id`, `aktion`, `nachricht`) VALUES
( '10046', 'Freistoss_treffer', '<b>{ma1} : </b>{sp1} tritt den direkten Freistoß und trifft  für {ma1} !'),
( '10047', 'Tor_mit_vorlage', ' <b>{ma1} : </b>Tooor für {ma1} ! {sp2} legt auf {sp1} ab, der nur noch einschieben muss.'),
( '10048', 'Zweikampf_verloren', '{sp1} begibt sich ins Laufduell mit {sp2}, kann aber nicht vorbeiziehen.'),
( '10049', 'Torschuss_daneben', '<b>{ma1} : </b>{sp1} wird von {sp2} bedient, zieht im Volltempo in den Strafraum und ab - rechts vorbei.'),
( '10050', 'Torschuss_auf_Tor', '<b>{ma1} : </b>Ein weiter Schlag soll bei {sp1} landen, finden allerdings nur die offenen Arme von Keeper {sp2}.'),
( '10051', 'Karte_gelb', '<b>{ma1} : </b>{sp1} mit einem weiteren Foul, dieses Mal hagelt es die Gelbe Karte.'),
( '10052', 'Auswechslung', '<b>{ma1} : </b>{sp1} für {sp2} Ist {sp1} vielleicht der Matchwinner?'),
( '10053', 'Auswechslung', '<b>{ma1} : </b>{sp1} für {sp2} {sp1} soll den Druck verstärken.'),
( '10054', 'Auswechslung', '<b>{ma1} : </b>{sp1} für {sp2} der womöglich ausgelaugt ist.'),
( '10055', 'Tor_mit_vorlage', '<b>{ma1} : </b>Nach der Vorlage von {sp2} nimmt {sp1} den Ball in einer Bewegung und donnert den Ball rein.'),
( '10056', 'Tor_mit_vorlage', '<b>{ma1} : </b>Nach einem Steilpass von {sp2} braucht {sp1} nur noch rein zuschieben.'),
( '10057', 'Tor_mit_vorlage', ' <b>{ma1} : </b>{sp1} nimmt die Flanke von {sp2} direkt ab, so das der Torhüter keine Chance hat.'),
( '10058', 'Tor_mit_vorlage', '<b>{ma1} : </b>Nach einem Kurzpass von {sp2} wird {sp1} in Szene gesetzt, der eiskalt verwandelt.'),
( '10059', 'Auswechslung', '<b>{ma1} : </b>{sp2} hatte alles versucht und wird nun von {sp1} ersetzt.'),
( '10060', 'Auswechslung', '<b>{ma1} : </b>Warum {sp2} ausgewechselt wird weiß nur der Trainer, der nun {sp1} bringt'),
( '10061', 'Auswechslung', '<b>{ma1} : </b>{sp1} kommt ins Spiel, ob er Belebung ins Spiel bringen kann ? Dafür muss {sp2} weichen.'),
( '10062', 'Auswechslung', '<b>{ma1} : </b>Unter Protest verlässt {sp2} den Platz, der dem eingewechselten {sp1} weichen muss.'),
( '10063', 'Auswechslung', '<b>{ma1} : </b>Oh Mann, warum kommt den nun {sp1} für {sp2} auf den Platz.'),
( '10064', 'Auswechslung', '<b>{ma1} : </b>Jetzt kommt {sp1} für {sp2} rein, der Gegner muss sich warm anziehen.'),
( '10065', 'Tor', '<b>{ma1} : </b>Dumm gelaufen für den Torwart den {sp1} macht seinen Treffer.'),
( '10066', 'Tor', '<b>{ma1} : </b>Knallhart setzte {sp1} den Ball unter der Latte ins Tor.'),
( '10067', 'Tor', '<b>{ma1} : </b>Manchmal braucht man nur den Fuß hin zuhalten und drin war er für {sp2}.'),
( '10068', 'Tor', '<b>{ma1} : </b>Nach einer Ball-Stafette machte {sp1} das Tor.'),
( '10069', 'Tor', '<b>{ma1} : </b>Tolle Sache, mit dem Heber konnte {sp1} sein Torkonto bereichern.'),
( '10070', 'Verletzung', '<b>{ma1} : </b><i>Da hat der Gegenspieler voll zugelangt, so das {sp1} vom Platz muss.</i>'),
( '10071', 'Verletzung', '<b>{ma1} : </b><i>{sp1} war schon die ganze Zeit angeschlagen und darf nun vom Platz.</i>'),
( '10072', 'Verletzung', '<b>{ma1} : </b><i>Vorsorglich wird {sp1} vom Platz genommen.</i>'),
( '10073', 'Karte_gelb_rot', '<b>{ma1} : </b><i>Das Foul musste nicht sein, dafür kassiert {sp1} nun Gelb/Rot.</i>'),
( '10074', 'Karte_gelb_rot', '<b>{ma1} : </b><i>{sp1} hatte nun ein taktisches Foul zu viel und muss nach der zweiten groben Aktion nun vom Platz.</i>'),
( '10075', 'Karte_gelb_rot', '<b>{ma1} : </b><i>Jetzt reicht es dem Schiedsrichter, {sp1} sieht nun endlich Gelb/Rot.</i>'),
( '10076', 'Karte_gelb', '<b>{ma1} : </b>Ein verstecktes Foul bringt {sp1} nun die gelbe Karte ein.'),
( '10077', 'Karte_gelb', '<b>{ma1} : </b>{sp1} wollte die Hand nicht vom Trikot des Gegners lassen und sieht Gelb.'),
( '10078', 'Karte_gelb', '<b>{ma1} : </b>Für diese Schauspieleinlage bekommt {sp1} zurecht die Gelbe.'),
( '10079', 'Karte_gelb', '<b>{ma1} : </b>{sp1} glaubt es nicht, er bekommt die gelbe Karte zu Unrecht.'),
( '10080', 'Karte_gelb', '<b>{ma1} : </b>{sp1} drischt den Ball einfach weg, obwohl der Schiedsrichter das Spiel schon unterbrochen hatte.'),
( '10081', 'Karte_gelb', '<b>{ma1} : </b>Konsequenter Weise bekommt {sp1} Gelb für diese Unsportlichkeit. '),
( '10082', 'Taktikaenderung', '<b>{ma1} : </b>Ob dieser Schachzug vom {sp1} zum Erfolg führt ?'),
( '10083', 'Taktikaenderung', '<b>{ma1} : </b>Auch wenn {sp1} nun handelt, muss das Spiel nicht unbedingt besser werden.'),
( '10084', 'Taktikaenderung', '<b>{ma1} : </b>Das wurde aber auch Zeit, ob die Änderung von {sp1} zum jetzigen Zeitpunkt noch greift ?'),
( '10085', 'Taktikaenderung', '<b>{ma1} : </b>Die Taktikumstellung von {sp1} hatte keiner vorhersehen können.'),
( '10086', 'Pass_daneben', 'Wieder lässt sich {sp1} unnötig den Ball abnehmen.'),
( '10087', 'Pass_daneben', '{sp1} macht einen Querpass, der aber nicht ankommt.'),
( '10088', 'Pass_daneben', '{sp1} versuchte mit einem weiten Pass das Spiel zu öffnen, der aber nicht ankommt. '),
( '10089', 'Pass_daneben', '{sp1} überzeugte mit seinem Passspiel wenig.'),
( '10090', 'Pass_daneben', '{sp1}´s Direktabnahme hatte nicht die gewünschte Wirkung. ');
INSERT INTO `_spiel_text` (`id`, `aktion`, `nachricht`) VALUES
( '10091', 'Pass_daneben', '{sp1}´s Pass klebt am Fuß des Gegners.'),
( '10092', 'Zweikampf_gewonnen', '{sp1} steigt energisch ein und nimmt {sp2} den Ball von den Füßen. '),
( '10093', 'Zweikampf_gewonnen', '{sp2} hatte das Nachsehen, als {sp1} ihm gekonnt den Ball weg lupfte.'),
( '10094', 'Zweikampf_gewonnen', '{sp1} ließ {sp2} einfach stehen, der einfach nicht nachkommen konnte.'),
( '10095', 'Zweikampf_gewonnen', 'Den Ball von Rechts auf Links gelegt und schon war {sp1} am {sp2} vorbei.'),
( '10096', 'Zweikampf_gewonnen', 'Immer wieder schön zu sehen, wenn {sp1} den Ball gekonnt mitnimmt.'),
( '10097', 'Zweikampf_gewonnen', '{sp1} darf man nicht aus den Augen lassen, denn so hat man keine Chance ihn aufzuhalten.'),
( '10098', 'Zweikampf_verloren', '{sp1} macht einfach gar nichts und verliert den Ball.'),
( '10099', 'Zweikampf_verloren', '{sp1} macht einfach gar nichts und verliert den Ball.'),
( '10100', 'Zweikampf_verloren', '{sp2} spielt Katz und Maus mit {sp1}.'),
( '10101', 'Zweikampf_verloren', 'Da sieht man, das {sp2} mehr kann als er sonst zeigt. denn {sp1} kann ihm nicht den Ball nehmen.'),
( '10102', 'Zweikampf_verloren', '{sp1} geht problemlos an {sp2} vorbei.'),
( '10103', 'Torschuss_auf_Tor', '<b>{ma1} : </b>Ein Heberversuch von {sp1}, doch der Torhüter bekommt noch den Ball.'),
( '10104', 'Torschuss_auf_Tor', '<b>{ma1} : </b>Kein Tor für {ma1} der Torhüter war auf den Posten.'),
( '10105', 'Torschuss_auf_Tor', '<b>{ma1} : </b>Das wäre es fast gewesen für {ma1}, doch der Ball geht vorbei.'),
( '10106', 'Torschuss_auf_Tor', '<b>{ma1} : </b>Man was für ein Lattenknaller, so bleibt es für {ma1} beim Spielstand.'),
( '10107', 'Torschuss_auf_Tor', '<b>{ma1} : </b>Auch wenn {ma1} noch so drängt, der Pfosten hilft  {ma2} im Spiel zu bleiben.'),
( '10108', 'Torschuss_auf_Tor', '<b>{ma1} : </b>Glück für {ma2} Unterkante Latte und doch nicht im Tor für  {ma1}.'),
( '10109', 'Torschuss_daneben', '<b>{ma1} : </b>{sp1} versucht es mit einem Fallrückzieher, aber doch daneben.'),
( '10110', 'Torschuss_daneben', '<b>{ma1} : </b>War es eine Flanke oder ein Torschuss ? Der Ball nahm den Weg neben das Tor.'),
( '10111', 'Torschuss_daneben', '<b>{ma1} : </b>Volleyschuss aufs Tor, doch knapp drüber.'),
( '10112', 'Torschuss_daneben', '<b>{ma1} : </b>Knapp vorbei, weil {sp1} zu genau gezielt hat.'),
( '10113', 'Zweikampf_verloren', '{sp1} versucht mit einem Übersteiger an {sp2} vorbei zu kommen, doch er verliert den Ball.'),
( '10114', 'Zweikampf_verloren', '{sp1} dribbelt sich da durch zwei gegnerische Spieler gleichzeitig durch, will auch noch durch {sp2}, aber das geht nicht!'),
( '10115', 'Zweikampf_verloren', ' Entweder ist man sich schon zu sicher oder zu lustlos, jedenfalls verliert {sp1} schon wieder den Ball an {sp2}.'),
( '10116', 'Zweikampf_verloren', '{sp1} läuft und läuft und scheint {sp2} gar nicht zu sehen, jedenfalls laufen die beiden genau gegeneinander und der Ballbesitz wechselt die Seiten.'),
( '10117', 'Zweikampf_verloren', 'Toller Pass aus der Bedrängnis in die Spitze zu {sp1}. Der bekommt den Ball aber nicht wirklich unter Kontrolle und vertändelt ihn gegen {sp2}. '),
( '10118', 'Zweikampf_verloren', '{sp1} läuft sich in dieser Situation fest, {sp2} gewinnt den Zweikampf. '),
( '10119', 'Zweikampf_verloren', 'Die schnelle Ballverarbeitung ist noch nie seine Stärke gewesen, aber die letzte Szene war einfach nur peinlich. {sp1} schaut {sp2} noch immer verdutzt hinterher, denn der führt den Ball jetzt am Fuß. '),
( '10120', 'Zweikampf_gewonnen', '{sp1} legt den Ball rechts an {sp2} vorbei und sprintet links an ihm vorbei. Damit hat {sp2} überhaupt nicht gerechnet.'),
( '10121', 'Zweikampf_gewonnen', '{sp1} tanzt da elegant durch das Mittelfeld und kann sogar einer Grätsche von {sp2} entkommen.'),
( '10122', 'Zweikampf_gewonnen', '{sp1} läuft alleine Richtung gegnerischem Strafraum und direkt auf {sp2} zu, kann diesem jedoch mit Hilfe einer schönen Pirouette ausweichen.'),
( '10123', 'Zweikampf_gewonnen', '{sp1} kämpft sich durch die Reihen, tritt und stolpert vor sich her und kann irgendwie noch dem Bein von {sp2} entgleiten.'),
( '10124', 'Zweikampf_gewonnen', 'Geschickter Ballgewinn von {sp1}. Routiniert spitzelt er dem verdutzt dreinblickenden {sp2} den Ball von den Füßen. '),
( '10125', 'Zweikampf_gewonnen', 'Gut aufgepasst von {sp1}, der im richtigen Moment die Tür zumacht. {sp2} wäre sonst durchgestartet.'),
( '10126', 'Zweikampf_gewonnen', 'Nachdem der erste Zweikampf schon gewonnen wurde, blockt {sp1} jetzt auch noch den Passversuch von {sp2}. '),
( '10127', 'Zweikampf_gewonnen', 'Das ist einfach klasse. {sp1} macht das in dieser Szene ganz clever, indem er seinem Gegner einfach den Ball abläuft. '),
( '10128', 'Zweikampf_gewonnen', '{sp2} setzt zum Tempodribbling an und umkurvt den ersten Gegenspieler. Doch {sp1} geht da mit der richtigen Härte rein und gewinnt den Zweikampf.'),
( '10129', 'Zweikampf_gewonnen', 'Nasse Bodenverhältnisse auf den ein Dribbling schwer ist. {sp2} kommt angerutscht und nimmt {sp1} den Ball ab.'),
( '10130', 'Zweikampf_gewonnen', 'Mit dieser präzisen Grätsche gegen {sp2} unterbindet {sp1} den schnellen Konter von {ma2}.'),
( '10131', 'Zweikampf_gewonnen', '{sp1} erobert mit einem beherzten Einsteigen den Ball. {sp2} wirkt danach etwas angeschlagen, aber da lief alles fair ab.'),
( '10132', 'Verletzung', '<b>{ma1} : </b>Bittere Pille für {ma1}. {sp1} setzt zum Volley an, aber {sp2} haut ihn voll um. {sp1} welzt sich am Boden und wird jetzt vom Platz getragen.'),
( '10133', 'Verletzung', ' <b>{ma1} : </b>Das ist Bitter für {sp1}, der nach einem rüden Foul von {sp2} vom Platz getragen werden muss.'),
( '10134', 'Verletzung', '<b>{ma1} : </b>{sp1} verfehlt den Ball und knallt mit dem Kopf gegen den Pfosten !'),
( '10135', 'Verletzung', '<b>{ma1} : </b>Mitten im Sprint knickt {sp1} weg. Er hat sich das Bein so verdreht, dass er mit schmerzverzerrtem Gesicht in die Umkleide humpelt.');
INSERT INTO `_spiel_text` (`id`, `aktion`, `nachricht`) VALUES
( '10136', 'Verletzung', '<b>{ma1} : </b>{sp1} bekommt den Ellbogen von seinem Gegenspieler gegen die Nase und muss blutüberströmt vom Feld. Er wird heute nicht wieder kommen können.'),
( '10137', 'Verletzung', '<b>{ma1} : </b>Nach diesem unglücklichen Tritt in den Rasen ist für {sp1} die Partie vorzeitig beendet. '),
( '10138', 'Verletzung', '<b>{ma1} : </b>Der Trainer wird zum Wechsel gezwungen. Eine Muskelverhärtung im Oberschenkel zwingt {sp1} zur Aufgabe.'),
( '10139', 'Verletzung', '<b>{ma1} : </b>Was für eine unschöne Szene. {sp1} erhält von einem gegnerischen Spieler einen Schubser, der zu einem Zusammenprall mit einem Mannschaftskollegen führt. Mit blutender Nase wird {sp1} vom Platz geführt.'),
( '10140', 'Verletzung', '<b>{ma1} : </b>Eine unfaire Attacke dort am Seitenrand. Der Gegenspieler steigt {sp1} hier mit übermäßigem Einsatz auf den Fuß, was letztlich darin endet, dass für {sp1} das Spiel an dieser Stelle zu Ende ist.'),
( '10141', 'Verletzung', '<b>{ma1} : </b>Das sieht nicht gut aus. {sp1} wird da unglücklich im Gesicht getroffen und muss das Spielfeld, mit einer stark blutenden Wunde am Mund, verlassen. '),
( '10142', 'Verletzung', '<b>{ma1} : </b>{sp1} bleibt nach diesem Zweikampf am Boden liegen. Nach einer kurzen Behandlungspause ist es Gewissheit, dass er nicht mehr weitermachen kann.'),
( '10143', 'Verletzung', '<b>{ma1} : </b>Mit schmerzverzerrtem Gesicht wird {sp1} mit der Trage vom Platz getragen. Hoffen wir, dass es nichts Schlimmes ist.'),
( '10144', 'Torschuss_daneben', '<b>{ma1} : </b>Wie Slalomstangen umkurvt {sp1} dort seine Gegenspieler und hat auch noch das Auge um zu sehen, dass {sp2} viel zu weit vor seinem Kasten steht – die Idee es mit einem Schlenzer zu probieren ist gut, aber {sp1} setzt den Ball drüber.'),
( '10145', 'Torschuss_daneben', '<b>{ma1} : </b>Und wieder pennt das Team. Diesmal verliert {sp2} völlig unnötig den Ball gegen den heranstürmenden {sp1}, der den Ball aber völlig überhastet am Pfosten vorbeischiebt.'),
( '10146', 'Torschuss_daneben', '<b>{ma1} : </b>Seinen Optimismus in allen Ehren, aber dieser Schuss von {sp1} ging wirklich meilenweit daneben.'),
( '10147', 'Torschuss_daneben', '<b>{ma1} : </b>{sp1} wird schön freigespielt, rutscht in den Ball, der am heraus eilenden {sp2} vorbei auf das Tor zurollt, aber auf der falschen Seite des Pfostens landet.'),
( '10148', 'Torschuss_daneben', '<b>{ma1} : </b>{sp1} nimmt sich ein Herz und geht mit schnellen Schritten quer zum Strafraum an zwei Gegenspielern vorbei. Sein Abschluss geht haarscharf über das Gebälk. '),
( '10149', 'Torschuss_daneben', '<b>{ma1} : </b>Das Team ist jetzt an der Torauslinie und probiert es mit einer Flanke, die {sp2} versucht abzufangen. Er kann den Ball jedoch nur ablenken, {sp1} ist in guter Einschussposition - befördert den Ball aber in Rücklage über den Kasten.'),
( '10150', 'Torschuss_daneben', '<b>{ma1} : </b>Da hat die Abwehr von {ma2} nicht aufgepasst und {sp1} nun mit der Chance. Schuss... ohjeee.. Hoffentlich bleiben die Scheinwerfer ganz, das Ding hat nen Pilotenschein verdient.'),
( '10151', 'Torschuss_daneben', '<b>{ma1} : </b>{sp1} ist auf halbrechts durch. {sp2} kommt aus seinem Tor und stürmt auf {sp1} zu, der sich von dem Auftreten so nervös machen lässt, dass er zu früh den Abschluss sucht und meilenweit daneben schießt.'),
( '10152', 'Torschuss_daneben', '<b>{ma1} : </b>Riesenchance für {ma1}. Da jagt ein Mannschaftskamerad von {sp1} einem Gegenspieler den Ball ab, könnte selbst schießen, aber spielt uneigennützig weiter zu {sp1}, der mit seinem Schuss nur knapp scheitert.'),
( '10153', 'Torschuss_daneben', '<b>{ma1} : </b>Ein Verzweiflungsschuß aus gut 38 Metern von {sp1} der in die Wolken fliegt'),
( '10154', 'Torschuss_daneben', '<b>{ma1} : </b>Diese Ecke von {sp1} dreht sich direkt ins Tor aus.'),
( '10155', 'Torschuss_daneben', '<b>{ma1} : </b>{sp1} schaut sich um und sieht keine andere Möglichkeit, als selber abzuschließen. Doch dieser Schuss bleibt ungefährlich. Der Ball segelt über die Tribünen.'),
( '10156', 'Torschuss_daneben', '<b>{ma1} : </b>Zwei Spieler von {ma1} behindern sich da gegenseitig im Strafraum, weswegen eine schöne Chance zunichte ist. '),
( '10157', 'Torschuss_daneben', '<b>{ma1} : </b>Jetzt geben Sie mächtig Gas und sind gleich gefährlich - der platzierte Heber von {sp1} segelt nur knapp über die Latte. '),
( '10158', 'Torschuss_auf_Tor', '<b>{ma1} : </b>Was für eine gute Torchance. Aus spitzem Winkel versucht {sp1} den Ball im Tor unterzubringen, doch {sp2} wirft sich waghalsig dazwischen und bewahrt seine Mannschaft vor einem Gegentreffer.'),
( '10159', 'Torschuss_auf_Tor', '<b>{ma1} : </b>Was für ein Bock von {sp2} im eigenen Strafraum. Vertändelt er den Ball gegen {sp1}, der es sofort mit einem Torschuss probiert, aber mindestens genauso alles falsch macht, was man in einer solchen Situation falsch machen kann.'),
( '10160', 'Torschuss_auf_Tor', '<b>{ma1} : </b>{sp2} steht jetzt unter Dauerbeschuss - den platzierten Schuss von {sp2} kann er gerade noch so aus dem bedrohten Eck fischen.'),
( '10161', 'Torschuss_auf_Tor', '<b>{ma1} : </b>Am zweiten Pfosten kommt {sp1} jetzt an den Ball, doch wieder ist {sp2} Herr der Lage und bekommt noch die Finger dazwischen.'),
( '10162', 'Torschuss_auf_Tor', '<b>{ma1} : </b>Jetzt wird mit mehr Finesse nach vorn gespielt. Einen langen Ball kann {sp1} am zweiten Pfosten auf das Tor köpfen, aber {sp2} kann ihn noch mit den Fingerspitzen über das Tor manövrieren.'),
( '10163', 'Torschuss_auf_Tor', '<b>{ma1} : </b>Auch in dieser Szene ist {ma1} das bessere Team. Über die linke Seite findet der Ball den Weg auf den kurzen Pfosten, {sp1} mit dem Schuss aus kürzester Distanz, aber genau auf {sp2}. Das hätte das Tor sein müssen!'),
( '10164', 'Torschuss_auf_Tor', '<b>{ma1} : </b>Fantastischer Pass auf {sp1} und {ma1} nun mit der Chance. {sp1} schießt einfach mal drauf und ... Ja, mit dem Ball kann er {sp2} nicht in Bedrängnis bringen.'),
( '10165', 'Torschuss_auf_Tor', '<b>{ma1} : </b>{sp1} will das Ding in den rechten Winkel zirkeln, doch {sp2} rettet den Ball ohne Probleme und puscht seine Hinterleute gleich darauf auf.'),
( '10166', 'Torschuss_auf_Tor', '<b>{ma1} : </b>{sp2} spielt super mit! Der Hintermann von {ma2} sieht {sp1} kommen, läuft raus und macht den Winkel zu kurz für einen guten Abschluss.'),
( '10167', 'Torschuss_auf_Tor', '<b>{ma1} : </b>{sp1} setzt mit diesem Weitschuss eine erste Duftmarke, doch {sp2} steht sicher und fängt den Ball ohne Probleme aus der Luft. '),
( '10168', 'Torschuss_auf_Tor', '<b>{ma1} : </b>Nach der gegnerischen Ecke geht es jetzt ganz schnell. {ma1} kombiniert sich durch das verwaiste Mittelfeld, doch der finale Pass wird von {sp1} verstolpert, so dass {sp2} in höchster Not klären kann.'),
( '10169', 'Torschuss_auf_Tor', '<b>{ma1} : </b>Ein Flankenball aus dem Halbfeld. Der Ball wird länger und länger, bis {sp1} sich in die Höhe schraubt und den Ball gegen die Laufrichtung von {sp2} knapp neben das Tor befördert'),
( '10170', 'Torschuss_auf_Tor', '<b>{ma1} : </b>Wieder legt {ma1} los ! {sp1} bombardiert das Tor von {sp2}. Beim ersten Schuss wehrt {sp2} ab, den Nachschuss setzt {sp1} an den Pfosten und dann hat der Keeper den Ball sicher !'),
( '10171', 'Torschuss_auf_Tor', '<b>{ma1} : </b>Blitzschneller Konter der {ma1}. {sp1} schaltet schnell, schickt sich selbst und kann dann nur ein harmloses Schüsschen abgeben.'),
( '10172', 'Torschuss_auf_Tor', '<b>{ma1} : </b>{sp1} behauptet sich gegen {sp2} und kommt schließlich zum Abschluss. Der platzierte Schuss prallt jedoch vom Pfosten ins Toraus. '),
( '10173', 'Torschuss_auf_Tor', '<b>{ma1} : </b>Das ist die Chance für {sp1}. Schuss. Der Trainer von {ma1} reißt schon die Arme hoch, doch {sp2} fischt den Ball noch aus dem Winkel. Unglaubliche Aktion.'),
( '10174', 'Tor_mit_vorlage', '<b>{ma1} : </b>{sp1} läuft sich frei und bekommt den Ball, er zieht an den Verteidigern vorbei und schießt aus gut 25 Metern auf´s Gehäuse - TOOOR für {ma1} - der war unhaltbar !'),
( '10175', 'Tor_mit_vorlage', '<b>{ma1} : </b>{sp1} lauert am Elfmeterpunkt und erhält tatsächlich das Zuspiel. Der Gegnerische Torwart versucht sich lang zu machen, aber der Schuss ist zu platziert, um ihn noch abwehren zu können.'),
( '10176', 'Tor', '<b>{ma1} : </b>Nach einem schnellen Einwurf und nach zwei weiteren Stationen kommt der Ball schließlich bei {sp1} an, der sich die Ecke praktisch aussuchen kann und in bester Torjägermanier vollendet.'),
( '10177', 'Tor', '<b>{ma1} : </b>Was für ein Knaller ! In der Abwehr von {ma2} fehlt die Zuordnung, so dass {sp1} letztlich die freigewordene Lücke nutzt und den Ball aus vollem Lauf in den Winkel ballert. {sp2} war absolut chancenlos.'),
( '10178', 'Tor', '<b>{ma1} : </b>Das verdiente Tor für. Zu zweit wird dort die komplette Abwehr ausgehebelt. Letztlich versucht {sp2} zu retten, was zu retten ist, doch das kluge Rückspiel zu {sp1} kommt im richtigen Moment und er weiß dieses zu verwerten – Tor !'),
( '10179', 'Tor', '<b>{ma1} : </b>Die Verteidigung des Gegners ist nicht sattelfest. Der erste Patzer bleibt noch ohne Folgen, der nächste Fehlpass wird aber bestraft. {sp1} spritzt dazwischen, marschiert durch, lässt {sp2} ins Leere grätschen und vollendet gekonnt.'),
( '10180', 'Tor', '<b>{ma1} : </b>Da ist es passiert. Ein Pressschlag im Strafraumzentrum landet direkt bei {sp1}, der direkt abnimmt und {sp2} keine Chance zur Reaktion lässt.');
INSERT INTO `_spiel_text` (`id`, `aktion`, `nachricht`) VALUES
( '10181', 'Tor', '<b>{ma1} : </b>Über dieses Tor wird noch zu reden sein! Da wird {sp2} möglicherweise im Duell mit einem weiteren Gegenspieler von {ma1} behindert, weswegen er den Ball nur abklatschen kann. {sp1} bekommt den Ball auf den Schlappen und trifft.'),
( '10182', 'Tor', '<b>{ma1} : </b>Unfassbar ! {ma1} dringt in den Strafraum ein, der Ball wird von einem Mittelfeldspieler flach hereingebracht, {sp2} verlässt sein Tor und will sich auf den Ball werfen, verfehlt ihn aber, so dass {sp1} in das verwaiste Tor trifft.'),
( '10183', 'Tor', '<b>{ma1} : </b>Doppelpass am Strafraumrand, {sp1} geht durch und kommt rechts im Strafraum zum Schuss aus spitzem Winkel. Ein eigentlich dankbarer Ball für den Keeper rollt aber dennoch durch die Beine von {sp2} hinein ins Tor.'),
( '10184', 'Tor', '<b>{ma1} : </b>Die Flanke aus dem Halbfeld landet bei {sp1}, der gegen den vor seinem Strafraum zu zaghaft vorgehenden {sp2} an den Ball kommt und vom Strafraumrand nur noch in das verlassene Tor einschieben muss.'),
( '10185', 'Tor', '<b>{ma1} : </b>Was war das denn für ein Kunstschuss ? {sp1} lässt aus 20 Metern einen Flatterball mit dem rechten Fuß ab. {sp2} ist unterwegs ins linke Eck, doch die Kugel schlägt im rechten ein. Unglaublich !'),
( '10186', 'Tor', '<b>{ma1} : </b>Wirrwarr im Strafraum von {ma2}! Nach einer Ecke kann {sp2} den Ball zunächst zweimal klären, bis letztlich {sp1} mit dem dritten Versuch doch noch erfolgreich ist.'),
( '10187', 'Tor', '<b>{ma1} : </b>Wenn er rauskommt, muss er ihn auch haben! {sp2} irrt durch den Strafraum und kann nur noch zusehen, wie {sp1} den Ball mühelos ins Tor nickt.'),
( '10188', 'Tor', '<b>{ma1} : </b>Blitzsauberer Angriff von {ma1}. Über rechts wird das Spiel schnell gemacht, schließlich erfolgt der Pass in den Rücken der Abwehr und {sp1} muss nur noch seinen Fuß hinhalten, um das Tor zu erzielen.'),
( '10189', 'Tor', '<b>{ma1} : </b>Da wird der Ball aus zentraler Position schön halblinks zu {sp1} in den Strafraum durchgesteckt, dessen Knaller aus elf Metern im Winkel einschlägt.'),
( '10190', 'Tor', '<b>{ma1} : </b>Mit Tempo kommt der Ball in die Mitte, wo {sp1} den Ball annehmen kann, in den Sechzehner eindringt und aus kurzer Distanz {sp2} keine Abwehrchance lässt.'),
( '10191', 'Tor', '<b>{ma1} : </b>So postiert man sich richtig im gegnerischen Strafraum. Die Flanke wird vom Mannschaftskollegen noch verfehlt, dahinter steht jedoch bereits {sp1} bereit und verwandelt trocken ins kurze Eck.'),
( '10192', 'Tor', '<b>{ma1} : </b>Den Lupfer stoppt {sp1} gekonnt mit der Fußspitze und jagt ihn dann per Seitfallzieher unhaltbar auf das Tor – ein fantastisches Tor !'),
( '10193', 'Tor', '<b>{ma1} : </b>Da wehrt {ma2} den Ball nach einer Ecke zu kurz ab, wo {sp1} sich nicht lange bitten lässt und den Ball durch die Beine von {sp2} im Tor unter bringt.'),
( '10194', 'Tor', '<b>{ma1} : </b>Das war einfach ! Völlig frei nutzt {sp1} seine Chance und dreht nach seinem Schuss aus 12 Metern zum Jubel ab.'),
( '10195', 'Tor', '<b>{ma1} : </b>Noch leicht abgefälscht landet der Ball vor den Füßen von {sp1}, der aus kurzer Distanz eiskalt verwandelt.'),
( '10196', 'Tor', '<b>{ma1} : </b>{ma2} bekommt den Ball einfach nicht weg. {sp1} bedankt sich für die Einladung und setzt den Ball neben den linken Pfosten. Unhaltbar war er aber dennoch nicht.'),
( '10197', 'Tor', '<b>{ma1} : </b>Was für eine Kombination! {ma1} zeigt hier ihr ganzes Können und spielt wie im Training. {sp1} setzt dem Ganzen mit diesem Drehschuss aus knapp 15 Metern noch die Krone auf.'),
( '10198', 'Tor', '<b>{ma1} : </b>Das ist wirklich bitter. Ein eigentlich harmloser Schuss von {sp1} erhält durch eine kleine Unebenheit im Boden die entscheidende Richtungsänderung und trudelt am geschlagenen {sp2} ins Tor.'),
( '10199', 'Tor', '<b>{ma1} : </b>Mit den schnellen Gegenstößen ist {ma2} heute einfach überfordert. Zwar kann {sp2} den ersten Schuss noch parieren, doch gegen die Nachschusschance von {sp1} ist auch er schließlich machtlos.'),
( '10200', 'Tor', '<b>{ma1} : </b>Ein wirklich unglückliches Gegentor für {ma2}. Die Faustabwehr von {sp2} prallt gegen den Kopf von {sp1} und von da direkt ins Tor.'),
( '10201', 'Tor', '<b>{ma1} : </b>Ein klasse Konter, souverän ausgespielt. {ma1} mit Überzahlspiel, der Pass genau im richtigen Moment gespielt und {sp1} lässt {sp2} keine Chance.'),
( '10202', 'Tor', '<b>{ma1} : </b>Ein Flankenball aus dem Halbfeld. Der Ball wird länger und länger, bis {sp1} sich in die Höhe schraubt und den Ball gegen die Laufrichtung von {sp2} ins Tor befördert.'),
( '10203', 'Tor', '<b>{ma1} : </b>Da stiehlt sich {sp1} an der Strafraumgrenze eiskalt den Ball und verwandelt ihn nach einer herrlichen Drehung wunderbar ins untere linke Eck.'),
( '10204', 'Tor', '<b>{ma1} : </b>{sp1} nimmt sich einfach mal den Mut und drescht das Ding unhaltbar für {sp2} mit voller Wucht in die Mitte des Tores. Der {ma1} wirkt nun sichtlich engagierter.'),
( '10205', 'Tor', '<b>{ma1} : </b>Die Überlegenheit von {ma1} zahlt sich aus! {sp1} nutzt endlich seine Chance zum Tor und wirft {ma2} mitsamt {sp2} in die Verzweiflung. Was ist hier noch drin ?'),
( '10206', 'Tor', '<b>{ma1} : </b>{sp1} schafft es {sp2} auszuribbeln und braucht den Ball nur noch einzuschieben...TOR !'),
( '10207', 'Tor', '<b>{ma1} : </b>Katastrophaler Fehler,der sofort bestraft wird, {sp1} mit einem klasse Solo, dass durch ein TOR belohnt wird.'),
( '10208', 'Tor', '<b>{ma1} : </b>{sp1} traut sich was, er zieht aus 26 Metern ab, der Ball wird unhaltbar für {sp2} abgefälscht.'),
( '10209', 'Tor', '<b>{ma1} : </b>Da wurde der Gegner gnadenlos ausgekontert ! Es ist {sp1} der eiskalt zuschlägt und {sp2} mit einem Lupfer überrascht.'),
( '10210', 'Tor', '<b>{ma1} : </b>TOOOOOR von {sp1} dribbelt sich durch die Abwehr von {ma2} und probierte es einfach.'),
( '10211', 'Tor', '<b>{ma1} : </b>{ma2} mit einem Stellungsfehler in der Abwehr - {sp1} nutzt den Schnitzer und schiebt den Ball ins Gehäuse.'),
( '10212', 'Tor', '<b>{ma1} : </b>Nach einer guten Kombination steckt er den Ball durch und {sp1} verwandelt alleine vorm Keeper sicher in der 1-1 Situation.'),
( '10213', 'Taktikaenderung', '<b>{ma1} : </b>Der Manager {sp1} ist stocksauer auf sein Team und greift deshalb ins Spielgeschehen ein.'),
( '10214', 'Taktikaenderung', '<b>{ma1} : </b>Der Trainer {sp1} gestikuliert wild an der Seitenlinie, er scheint Taktisch umstellen zu wollen.'),
( '10215', 'Pass_daneben', 'Ein schlimmer Fehlpass von {sp1} vernichtet den Angriff schon in der eigenen Hälfte.'),
( '10216', 'Pass_daneben', '{sp1} kommt, schaut sich um und ... spielt den Ball ins Aus! Das kann {ma1} nun wirklich nicht gebrauchen.'),
( '10217', 'Pass_daneben', 'Ja was macht der denn da? {sp1} kann den Ball hervorragend halten doch dieser Passversuch über das halbe Spielfeld scheitert schon an der eigenen Unfähigkeit.'),
( '10218', 'Karte_gelb', '<b>{ma1} : </b>Das Team darf sich um eine weitere Karte in ihrer Sammlung freuen. {sp1} war der Sündenbock.'),
( '10219', 'Karte_gelb', '<b>{ma1} : </b>{sp1} war in dieser Szene etwas zu wild.'),
( '10220', 'Karte_gelb', '<b>{ma1} : </b>{sp1} zettelt einen Streit an und kassiert folglich die gelbe Karte.'),
( '10221', 'Karte_gelb', '<b>{ma1} : </b>{sp1} ist nicht einverstanden mit der Auslegung der Situation und bekommt fürs Meckern die gelbe Karte.'),
( '10222', 'Karte_gelb', '<b>{ma1} : </b>Der Gegenspieler krümmt sich vor Schmerzen am Boden, und {sp1} hat großes Glück, dass er für diese Aktion nur gelb bekommen hat.'),
( '10223', 'Karte_gelb', '<b>{ma1} : </b>Oh ja die Karte hat {sp1} jetzt auch heraufbeschwört, er sollte jetzt besser etwas runter fahren ...'),
( '10224', 'Karte_gelb', '<b>{ma1} : </b>Dieses taktische Foul von {sp1} zieht nun doch die Karte nach sich.'),
( '10225', 'Karte_gelb', '<b>{ma1} : </b>Für dieses klare Zeitspiel erhält {sp1} die gelbe Karte.');
INSERT INTO `_spiel_text` (`id`, `aktion`, `nachricht`) VALUES
( '10226', 'Karte_gelb', '<b>{ma1} : </b>{sp1} hat das Timing für die Grätsche kräftig verpasst und knüppelt seinen Gegenspieler um. Das tut weh und wird mit Gelb bestraft. '),
( '10227', 'Karte_gelb', '<b>{ma1} : </b>Passend zur aufkommenden Hektik auf dem Rasen kommt es zur gelben Karte für {sp1}, der nicht etwa das Spiel in geordnete Bahnen lenkt, sondern einfach das Bein stehen lässt und seinen Gegner zu Fall bringt. '),
( '10228', 'Karte_gelb', '<b>{ma1} : </b>{sp1} will den Ball nach vorne schlagen, doch der Gegner hält einfach den Fuß drauf – dafür gibt’s die gelbe Karte.'),
( '10229', 'Karte_gelb', '<b>{ma1} : </b>Derzeit hat das Team deutliche Feldvorteile - symptomatisch deshalb das wiederholt unfaire Einsteigen von {sp1}, das diesmal mit einer gelben Karte bestraft wird.'),
( '10230', 'Karte_gelb', '<b>{ma1} : </b>Das ist einfach dumm. {sp1} löst sich zu früh aus der Mauer und kassiert dafür zu Recht den gelben Karton.'),
( '10231', 'Karte_gelb_rot', '<b>{ma1} : </b>Eine wirklich dumme Aktion: Mit Anlauf versucht {sp1} gegen seinen Gegner zu retten, springt diesem aber übermotiviert von hinten in die Beine. Jede Diskussion erübrigt sich hier. Sein 2 hartes Foul'),
( '10232', 'Karte_gelb_rot', '<b>{ma1} : </b>Das sah nach Absicht hat aus. Mit einem Ellbogencheck entledigt sich {sp1} seinem Verfolger, was dem Schiedsrichter allerdings nicht verborgen bleibt. Er hatte schon Gelb'),
( '10233', 'Karte_gelb_rot', '<b>{ma1} : </b>Kurz vor dem Strafraum verschätzt sich {sp1} bei einem aufspringenden Ball und hält den durcheilenden Stürmer. Als letzter Mann verhindert er damit eine klare Torchance und kassiert die Gelb-Rote Karte.'),
( '10234', 'Karte_rot', '<b>{ma1} : </b>Klare Notbremse ! {sp1} ist alleine unterwegs und kann einfach nur noch seinen Gegenspieler mit unfairen Mitteln das Tor verhindern, zur Folge die Rote Karte !'),
( '10235', 'Karte_rot', '<b>{ma1} : </b>Und nun wird es hitzig hier. {sp1} und sein Gegenspieler geraten aneinander. Bei {sp1} reißen die Nerven durch und er schlägt ihm ins Gesicht. Der Schiedsrichter sieht das und zeigt absolut gerechtfertigt die Rote Karte.'),
( '10236', 'Karte_rot', '<b>{ma1} : </b>{sp1} läuft alleine aufs Tor. {sp2} kann ihn nicht mehr aufhalten und begeht eine Notbremse. Die Fans auf den Tribünen toben. Der Schiri zeigt {sp2} folgerichtig die rote Karte.'),
( '10237', 'Karte_rot', '<b>{ma1} : </b>{sp1} springt da hoch und scheint seinen Gegenspieler ganz zu übersehen, der dessen Stollen gefährlich ins Gesicht bekommt.'),
( '10238', 'Karte_rot', '<b>{ma1} : </b>{sp1} springt seinem Gegenüber von hinten in die Beine, sodass er mehrere Minuten behandelt werden muss. Für diese Aktion fliegt der Übeltäter vom Platz - und das zurecht.'),
( '10239', 'Karte_rot', '<b>{ma1} : </b>{sp1} steigt zum Kopfball hoch. Doch was war das !? Ein klarer Ellbogencheck gegen seinen Gegenspieler.  Dem Schiedsrichter bleibt nichts anderes übrig als ihn zum Duschen zu schicken.'),
( '10240', 'Karte_rot', '<b>{ma1} : </b>{sp1} lässt {sp2} im Strafraum gekonnt aussteigen. {sp2} greift daraufhin das Trikot von {sp1} und lässt sich meterweit mitschleppen. Der Schiedsrichter entscheidet zu Recht auf Notbremse und folgerichtig rote Karte.'),
( '10241', 'Karte_rot', '<b>{ma1} : </b>Jetzt wird es hitzig. Nach einem intensiven Zweikampf scheinen sich die beiden Kontrahenten noch ein paar wichtige Dinge zu sagen zu haben. {sp1} wird wohl zu bunt, weswegen er seinem Diskussionspartner umstößt – klare Sache: Rot! '),
( '10242', 'Karte_rot', '<b>{ma1} : </b>Laufduell auf der linken Außenbahn. Bevor dieses läuferisch entschieden wird, stoppt {sp1} den Ball einfach per Hand und kassiert dafür eine klare rote Karte. Dafür wird er nach dem Spiel sicherlich einiges zu hören bekommen. '),
( '10243', 'Karte_rot', '<b>{ma1} : </b>Nach einem Gerangel mit dem gegnerischen Spieler tritt {sp1} unsportlich nach und erhält dafür umgehend eine Freikarte für die Dusche.'),
( '10244', 'Freistoss_treffer', '<b>{ma1} : </b>{sp1} </b>legt sich die Kugel bereit und nimmt Anlauuuuuf… TOR! Da sieht die schlecht postierte Mauer samt Torwart nicht gut aus, das Gegentor war für {ma2} vermeidbar !'),
( '10245', 'Freistoss_treffer', '<b>{ma1} : </b>{ma1} : </b>{sp2} stoppt den quer gelegten Ball, {sp1} kommt angerauscht und hämmert das Leder in Richtung Giebel, wo der Ball wie eine Bombe einschlägt! Der geschlagene Keeper sah nur einen Strich !'),
( '10246', 'Freistoss_treffer', '<b>{ma1} : </b>Was ein Hammer ! {sp1} haut den Freistoß aus rund 25 Metern ins rechte Eck. Wie ein Strich zieht der Ball über die Mauer hinweg ins Tor.'),
( '10247', 'Freistoss_treffer', '<b>{ma1} : </b>{ma1} : </b>Ein Tor, das das Prädikat „Traumtor“ wirklich verdient hat. Der Freistoß von {sp1} aus halbrechter Position wird immer länger, touchiert die Unterkante der Latte und landet schließlich im langen Eck.'),
( '10248', 'Freistoss_treffer', '<b>{ma1} : </b>Ein Freistoß von rechts führt letztlich zum Erfolg. {sp1} entledigt sich erst seinem Bewacher, um dann noch einen gezielten Kopfball abzugeben. {sp2} kann nur noch zuschauen, wie der Ball im kurzen Eck einschlägt.'),
( '10249', 'Freistoss_daneben', '<b>{ma1} : </b>„Ready for Takeoff“, denkt sich {sp1} und zündet die Rakete in den weiten Stadion-Orbit hinein! Der arme Lurch erfindet die Definition des Begriffs „Rückenlage“ damit komplett neu!'),
( '10250', 'Freistoss_daneben', '<b>{ma1} : </b>{sp1} streichelt den Ball nochmal, bevor er ihn gleich böse treten wird… Oha! Field Goal! Field Goal! Wir haben hier Jemanden, der die Sportart verwechselt hat!'),
( '10251', 'Freistoss_daneben', '<b>{ma1} : </b>{sp1} schlenzt den Freistoß aus halbrechter Position auf das Tor – der Ball prallt von der Querlatte zurück ins Spielfeld.'),
( '10252', 'Freistoss_daneben', '<b>{ma1} : </b>Da klingelt es fast im Tor. Nach diesem Freistoß aus dem Halbfeld kommt {sp1} im Luftkampf mit der Stirn an den Ball und drückt ihn knapp an der Torlinie vorbei – {sp2} sah dabei alles andere als gut aus.'),
( '10253', 'Elfmeter_erfolg', '<b>{ma1} : </b>{sp1} schreitet an den Punkt, wirkt aber sehr nervös… Schwacher Ball… Das gibt es doch nicht! Dieser einfache Ball rutscht dem Torwart durch die Hosenträger durch !'),
( '10254', 'Elfmeter_erfolg', '<b>{ma1} : </b>Ball hinlegen. Anlauf nehmen. Schuss. Tor! So einfach kann man einen Elfmeter verwandeln. {sp1} hat hier alles richtig gemacht !'),
( '10255', 'Elfmeter_erfolg', '<b>{ma1} : </b>Ruhig legt sich {sp1} den Ball hin. Guckt sich eine Ecke aus und schickt den Torwart in die andere Ecke, klasse Elfmeter !'),
( '10256', 'Elfmeter_erfolg', '<b>Laute Pfiffe doch {sp1} macht das souverän, wie er den Ball unten in die Ecke schiebt.</b>'),
( '10257', 'Elfmeter_erfolg', '<b>{ma1} : </b>Ein riesen Druck lastet jetzt auf ihm, denn es geht um den Sieg ! {sp1} trifft den Pfosten, doch im Nachschuss trifft er, und der am Boden liegende Torwart schaut nur machtlos hinterher.'),
( '10258', 'Elfmeter_erfolg', '<b>{ma1} : </b>Kurioser Elfmeter. {sp1} rutscht beim Anlauf weg, doch der Ball trudelt langsam unten rechts ins Tor.'),
( '10259', 'Elfmeter_erfolg', '<b>{ma1} : </b>{sp1} schießt mit voller Gewalt an die Latte. Der Torwart feiert schon aber bekommt den Ball unglücklich an den Rücken und von dort geht der Ball ins Tor.'),
( '10260', 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} versucht lässig den Ball in die Mitte zu lupfen. Der Keeper riecht den Braten und hält den schlechten Elfmeter'),
( '10261', 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} läuft an und schießt den Ball 5m über den Gegnerischen Kasten. Ganz schlechter Elfmeter'),
( '10262', 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} läuft an - verzögert kurz und schießt den Ball an den rechten Pfosten'),
( '10263', 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} läuft an - verzögert kurz und schießt den Ball an den linken Pfosten'),
( '10264', 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} läuft an - verzögert kurz und schießt den Ball an die Querlatte'),
( '10265', 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} läuft an und rutscht unglücklich mit dem Standbein weg. Chance vertan !'),
( '10266', 'Elfmeter_verschossen', '<b>{ma1} : </b>Elfmeter also für {ma1}, {sp1} tritt an… Gehalten! Das war einfach zu wenig, der Torhüter kann den Ball zur Ecke abwehren !'),
( '10267', 'Elfmeter_verschossen', 'Elfmeter für {ma1}. Ein präziser Schuss von {sp1}, doch der Keeper bekommt seine Finger doch noch an den eigentlich unhaltbaren Ball und wehrt ihn zur Ecke ab! Was für eine Heldentat!'),
( '10268', 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} läuft an und schießt den Ball 5m über den Gegnerischen Kasten. Ganz schlechter Elfmeter'),
( '10269', 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} läuft an - verzögert kurz und schießt den Ball an den rechten Pfosten'),
( '10270', 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} läuft an - verzögert kurz und schießt den Ball an den linken Pfosten');
INSERT INTO `_spiel_text` (`id`, `aktion`, `nachricht`) VALUES
( '10271', 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} läuft an - verzögert kurz und schießt den Ball an die Querlatte'),
( '10272', 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} läuft an und rutscht unglücklich mit dem Standbein weg. Chance vertan !'),
( '10273', 'Elfmeter_verschossen', '<b>{ma1} : </b>Elfmeter also für {ma1}, {sp1} tritt an… Gehalten! Das war einfach zu wenig, der Torhüter kann den Ball zur Ecke abwehren !'),
( '10274', 'Elfmeter_verschossen', '<b>{ma1} : </b>Elfmeter für {ma1}. Ein präziser Schuss von {sp1}, doch der Keeper bekommt seine Finger doch noch an den eigentlich unhaltbaren Ball und wehrt ihn zur Ecke ab! Was für eine Heldentat !'),
( '10275', 'Elfmeter_verschossen', '<b>{ma1} : </b>Einmal zweiter Stock bitte, dieser Elfmeter von {sp1} verfehlte sein Ziel um mehrere Meter.'),
( '10276', 'Elfmeter_verschossen', '<b>{ma1} : </b>{sp1} lässt sich viel Zeit bei der Ausführung dieses Elfmeters. Verzögerter Anlauf, und ein ganz ganz schwacher Schuss in die Mitte des Tores. {sp2} hält den Ball und wird gefeiert.'),
( '10277', 'Ecke', '<b>{ma1} : </b>{sp1} schlägt die Ecke zentral in den Strafraum, wo aber weit und breit kein Mitspieler steht.'),
( '10278', 'Ecke', '<b>{ma1} : </b>Die Flanke von {sp1} ist dann doch etwas zu hoch, um vom gestarteten Mitspieler noch irgendwie erreicht zu werden.'),
( '10279', 'Ecke', '<b>{ma1} : </b>Die Flanke von {sp1} segelt über den Strafraum und geht ins Seitenaus.'),
( '10280', 'Ecke', '<b>{ma1} : </b>Kurze Ecke von {sp1}, doch der Gegner hat den Braten gerochen und unterbindet den Angriff.'),
( '10281', 'Auswechslung', '<b>{ma1} : </b>Wechsel ! {sp2} verlässt unter tosendem Applaus das Feld, für ihn kommt {sp1}.'),
( '10282', 'Auswechslung', '<b>{ma1} : </b>{sp2} verlässt unter Pfiffen das Feld. Der Trainer hofft das {sp1} seine Sache besser macht.'),
( '10283', 'Auswechslung', '<b>{ma1} : </b>{sp2} verlässt den Platz, ohne seinen Trainer abzuklatschen geht er duschen. {sp1} ersetzt ihn.'),
( '10284', 'Auswechslung', '<b>{ma1} : </b>will hier noch eins drauflegen und schickt {sp1} für {sp2} in den Kampf.'),
( '10285', 'Auswechslung', '<b>{ma1} : </b>{sp2} hat sein bestes gegeben, doch wirkt er so langsam etwas außer Atem. {sp1} wird nun seine Chance bekommen.'),
( '10286', 'Auswechslung', '<b>{ma1} : </b>Nachdem sich {sp1} im Training hervorgehoben hat, gibt ihm der Trainer auch hier und jetzt für {sp2} die Möglichkeit sich zu präsentieren.'),
( '10287', 'Auswechslung', '<b>{ma1} : </b>Damit ist die Partie für {sp2} beendet. Viel gelang ihm in diesem Spiel nicht, weswegen {sp1} an seiner Stelle nun sein Glück versuchen darf.'),
( '10288', 'Auswechslung', '<b>{ma1} : </b>Der Trainer gibt letzte Instruktionen an {sp1}, der nun für {sp2} in die Partie kommt und die nötigen Impulse setzen soll.'),
( '10289', 'Auswechslung', '<b>{ma1} : </b>Mit viel Applaus für seine heutige Leistung wird {sp2} von den Fans verabschiedet, {sp1} will es sicherlich genauso gut machen. '),
( '10290', 'Auswechslung', '<b>{ma1} : </b>Die Magen-Darm-Probleme waren dann doch schlimmer als gedacht. Für {sp2} kommt der frische {sp1} in die Partie.'),
( '10291', 'Auswechslung', '<b>{ma1} : </b> Wechsel ! Für {sp2} kommt jetzt eine frische Kraft. {sp1} wird jetzt die benötigte Verstärkung darstellen.'),
( '10292', 'Auswechslung', '<b>{ma1} : </b>{sp2} macht kein schlechtes Spiel, muss aber trotzdem für {sp1} das Feld räumen, so die Entscheidung des Trainers.'),
( '10293', 'Taktikaenderung', '<b>{ma1} : </b>{sp1} wischt die Hände über den Kopf und handelt jetzt.'),
( '10294', 'Taktikaenderung', '<b>{ma1} : </b> Das Team ist nicht auf der Spur, so muss {sp1} die Weichen stellen.'),
( '10295', 'Taktikaenderung', '<b>{ma1} : </b>{sp1} macht große Augen, dreht sich kurz zur Bank, um dann dem Käpten auf dem Feld neue Anweisungen zu geben.'),
( '10296', 'Taktikaenderung', '<b>{ma1} : </b>Nun ist Schluß mit dem zähen Spiel. {sp1} will neue Akzente setzen. '),
( '10297', 'Taktikaenderung', '<b>{ma1} : </b>{sp1} schaut auf die Uhr, zieht die Hände aus der Tasche und gibt neue Anweisungen aus.'),
( '10298', 'Taktikaenderung', '<b>{ma1} : </b>Mit dieser Änderung von {sp1} sollte das Spiel mehr Pep bekommen.'),
( '10299', 'Taktikaenderung', '<b>{ma1} : </b>{sp1} ist der Geduldsfaden gerissen. Neue Laufwege sollen dem Gegner Schwierigkeiten bereiten.'),
( '10300', 'Taktikaenderung', '<b>{ma1} : </b>{sp1} gibt die Anweisung, das mehr Druck aufgebaut werden soll.');
";
				try {
    				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    				$stmt = $conn->prepare($sql);
    				$stmt->execute();
    				echo " ausgeführt<br>";
    			}
				catch(PDOException $e) { echo $sql . $e->getMessage() . "<br>"; }
				$conn = null;
        	}
		}
		if(isset($_POST['generated']))
        	{
        		echo 'Erzeugte Dateien von der Quelle in den Ordner generated verschieben ->';

				printSystemCheck();
        	}

function printSystemCheck() {
	echo "<h2>Systemanforderungen testen</h2>";

	$requirments = array();

	$writableFiles = explode(",", WRITABLE_FOLDERS);
	foreach ($writableFiles as $writableFile) {
		$file = BASE_FOLDER . "/" . $writableFile;

		$requirments[] = array(
				"requirement" => "Datei/Ordner hat Schreibrechte ( in Linux, führe aus: CHMOD a+w <filename> ): <i> " . $writableFile . "</i>",
				"min" => "Ja",
				"actual" => (is__writable($file)) ? "Ja" : "Nein",
				"status" => (is__writable($file)) ? "success" : "error"
		);
	}

	?>

	<table class="table">
		<thead>
			<tr>
				<th><?php echo 'Anforderung' ?></th>
				<th><?php echo 'Erforderlicher Wert' ?></th>
				<th><?php echo 'Tatsächlicher Wert' ?></th>
			</tr>
		</thead>
		<tbody>
		<?php
		$valid = TRUE;
		foreach($requirments as $requirement) {
			echo "<tr class=\"".  $requirement["status"] . "\">";
			echo "<td>" . $requirement["requirement"] . "</td>";
			echo "<td>" . $requirement["min"] . "</td>";
			echo "<td>" . $requirement["actual"] . "</td>";
			echo "</tr>";

			if ($requirement["status"] == "error") {
				$valid = FALSE;
			}
		}
		?>
		</tbody>
	</table>

	<?php

	if ($valid) {
		echo "<form method=\"post\">";
		echo "<button type=\"submit\" class=\"btn\">". 'weiter' . "</button>";
		echo "<input type=\"hidden\" name=\"action\" value=\"actionMoveFiles\">";
		echo "</form>";
	} else {
		echo "<p>Die Mindestanforderungen sind auf diesem Webserver nicht erfüllt. Sie können die Software mit dieser Konfiguration nicht installieren. Kontaktieren Sie Ihren Webhoster oder den Hersteller. . </p>";
	}
}


function actionMoveFiles() {

	$fileNames = array("config.inc.php", "adminlog.php", "imprint.php", "entitylog.php");
	$oldDir = BASE_FOLDER . "/admin/config/";
	$newDir = BASE_FOLDER . "/generated/";

	foreach ($fileNames as $fileName) {
		if (file_exists($oldDir . $fileName)) {
			rename($oldDir . $fileName, $newDir . $fileName);
		}
	}

	echo "<form method=\"post\">";
	echo "<br>Erzeugte Dateien von der Quelle in den Ordner generated verschieben -> ausgeführt<br><br><br>";
	echo "<button type=\"submit\" class=\"btn\">". 'Zurück zum Update-Screen' . "</button>";
	echo "<input type=\"hidden\" name=\"action\" value=\"UpdateScreen\">";
	echo "</form>";
}

?>


      <hr>

      <footer>
      	<a href="https://github.com/rolfjoseph/OpenWebsoccer" target="_blank"> <?php readfile('../admin/config/version.txt'); readfile('../modules/core/step.txt'); ?>
      </footer>
	</div>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../admin/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>






<?php
// real is_writable (http://www.php.net/manual/en/function.is-writable.php#73596)
function is__writable($path) {
	//will work in despite of Windows ACLs bug
	//NOTE: use a trailing slash for folders!!!
	//see http://bugs.php.net/bug.php?id=27609
	//see http://bugs.php.net/bug.php?id=30931

	if ($path{strlen($path)-1}=='/') // recursively return a temporary file path
		return is__writable($path.uniqid(mt_rand()).'.tmp');
	else if (is_dir($path))
		return is__writable($path.'/'.uniqid(mt_rand()).'.tmp');
	// check tmp file for read/write capabilities
	$rm = file_exists($path);
	$f = @fopen($path, 'a');
	if ($f===false)
		return false;
	fclose($f);
	if (!$rm)
		unlink($path);
	return true;
}
?>


