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
******************************************************************/
if (file_exists('../admin/config/config.inc.php')) {
	require '../admin/pages/deldir.inc.php';
	deldir ('../install');
	header('Location: ../update/index.php');
}
error_reporting(E_ALL);
define('BASE_FOLDER', $_SERVER['DOCUMENT_ROOT'].'/openwebsoccer/');
define("PHP_MIN_VERSION", "7.0.0");
define("WRITABLE_FOLDERS", "generated/,uploads/club/,uploads/cup/,uploads/player/,uploads/sponsor/,uploads/stadium/,uploads/stadiumbuilder/,uploads/stadiumbuilding/,uploads/users/,cache/,admin/config/adminlog.php,admin/config/entitylog.php,admin/config/config.inc.php,admin/config/imprint.php,admin/config/jobs.xml,admin/config/termsandconditions.xml");
define("DEFAULT_DB_PREFIX", "");
define("CONFIGFILE", BASE_FOLDER . "/generated/config.inc.php");
define("DDL_FULL", "ddl_full.sql");
session_start();
$supportedLanguages = array("de" => "Deutsch");
ignore_user_abort(TRUE);
set_time_limit(0);
include(BASE_FOLDER . "/modules/core/DbConnection.class.php");
include(BASE_FOLDER . "/modules/core/SecurityUtil.class.php");
/**
* Step 1:  Startseite
*/
function printWelcomeScreen()
{
	global $supportedLanguages;
	echo "<h2>Sprache</h2>";
	echo "<form method=\"post\">";
	$first = TRUE;
	foreach ($supportedLanguages as $langId => $langLabel) {
		echo "<label class=\"radio\">";
		echo "<input type=\"radio\" name=\"lang\" id=\"$langId\" value=\"$langId\"";
		if ($first) {
			echo " checked";
			$first = FALSE;
		}
		echo "> $langLabel";
		echo "</label>";
	}
	echo "<button type=\"submit\" class=\"btn\">weiter</button>";
	echo "<input type=\"hidden\" name=\"action\" value=\"actionSetLanguage\">";
	echo "</form>";
}
function actionSetLanguage()
{
	if (!isset($_POST["lang"])) {
		global $errors;
		$errors[] = "Please select a language.";
		return "printWelcomeScreen";
	}
	global $supportedLanguages;
	$lang = $_POST["lang"];
	if (key_exists($lang, $supportedLanguages)) {
		$_SESSION["lang"] = $lang;
		return "printSystemCheck";
	}
	return "printWelcomeScreen";
}
/**
* Step 2: System Check
*/
function printSystemCheck($messages)
{
	echo "<h2>". $messages["check_title"] . "</h2>";
	$requirments = array();
	$requirments[] = array(
			"requirement" => $messages["check_req_php"],
			"min" => PHP_MIN_VERSION,
			"actual" => PHP_VERSION,
			"status" => (version_compare(PHP_VERSION, PHP_MIN_VERSION) > -1) ? "success" : "error"
	);
	$requirments[] = array(
			"requirement" => $messages["check_req_json"],
			"min" => $messages["check_req_yes"],
			"actual" => (function_exists("json_encode")) ? $messages["check_req_yes"] : $messages["check_req_no"],
			"status" => (function_exists("json_encode")) ? "success" : "error"
	);
	$requirments[] = array(
			"requirement" => $messages["check_req_gd"],
			"min" => $messages["check_req_yes"],
			"actual" => (function_exists("getimagesize")) ? $messages["check_req_yes"] : $messages["check_req_no"],
			"status" => (function_exists("getimagesize")) ? "success" : "error"
	);
	$requirments[] = array(
			"requirement" => $messages["check_req_safemode"],
			"min" => $messages["check_req_off"],
			"actual" => (!ini_get('safe_mode')) ? $messages["check_req_off"] : $messages["check_req_on"],
			"status" => (!ini_get('safe_mode')) ? "success" : "error"
	);
	$writableFiles = explode(",", WRITABLE_FOLDERS);
	foreach ($writableFiles as $writableFile) {
		$file = BASE_FOLDER . "/" . $writableFile;
		$requirments[] = array(
				"requirement" => $messages["check_req_writable"] . " <i>" . $writableFile . "</i>",
				"min" => $messages["check_req_yes"],
				"actual" => (is__writable($file)) ? $messages["check_req_yes"] : $messages["check_req_no"],
				"status" => (is__writable($file)) ? "success" : "error"
		);
	}
	?>
	<table class="table">
		<thead>
			<tr>
				<th><?php echo $messages["check_head_requirement"] ?></th>
				<th><?php echo $messages["check_head_required_value"] ?></th>
				<th><?php echo $messages["check_head_actual_value"] ?></th>
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
		echo "<button type=\"submit\" class=\"btn\">". $messages["button_next"] . "</button>";
		echo "<input type=\"hidden\" name=\"action\" value=\"actionGotoConfig\">";
		echo "</form>";
	} else {
		echo "<p>". $messages["check_req_error"] . "</p>";
	}
}
/**
* Step 3: Eingabe der Konfigurationsdaten
*/
function actionGotoConfig() {
	return "printConfigForm";
}
function printConfigForm($messages)
{
	?>
	<form method="post" class="form-horizontal">
		<fieldset>
			<legend><?php echo $messages["config_formtitle"] ?></legend>
			<div class="control-group">
			    <label class="control-label" for="db_host"><?php echo $messages["label_db_host"] ?></label>
			    <div class="controls">
			      <input type="text" id="db_host" name="db_host" required
			      	value="<?php echo (isset($_POST["db_host"])) ? $_POST["db_host"] : "localhost"; ?>">
			      <span class="help-inline"><?php echo $messages["label_db_host_help"] ?></span>
			    </div>
			</div>
			<div class="control-group">
			    <label class="control-label" for="db_name"><?php echo $messages["label_db_name"] ?></label>
			    <div class="controls">
			      <input type="text" id="db_name" name="db_name" required
			      	value="<?php echo (isset($_POST["db_name"])) ? $_POST["db_name"] : ""; ?>">
			    </div>
			</div>
			<div class="control-group">
			    <label class="control-label" for="db_user"><?php echo $messages["label_db_user"] ?></label>
			    <div class="controls">
			      <input type="text" id="db_user" name="db_user" required
			      	value="<?php echo (isset($_POST["db_user"])) ? $_POST["db_user"] : ""; ?>">
			    </div>
			</div>
			<div class="control-group">
			    <label class="control-label" for="db_password"><?php echo $messages["label_db_password"] ?></label>
			    <div class="controls">
			      <input type="text" id="db_password" name="db_password" required
			      	value="<?php echo (isset($_POST["db_password"])) ? $_POST["db_password"] : ""; ?>">
			    </div>
			</div>
			<hr>
			<div class="control-group">
			    <label class="control-label" for="projectname"><?php echo $messages["label_projectname"] ?></label>
			    <div class="controls">
			      <input type="text" id="projectname" name="projectname" required
			      	value="<?php echo (isset($_POST["projectname"])) ? $_POST["projectname"] : ""; ?>">
			      <span class="help-inline"><?php echo $messages["label_projectname_help"] ?></span>
			    </div>
			</div>
			<div class="control-group">
			    <label class="control-label" for="projectname"><?php echo $messages["label_systememail"] ?></label>
			    <div class="controls">
			      <input type="email" id="systememail" name="systememail" required
			      	value="<?php echo (isset($_POST["systememail"])) ? $_POST["systememail"] : ""; ?>">
			      <span class="help-inline"><?php echo $messages["label_systememail_help"] ?></span>
			    </div>
			</div>
			<?php $defaultUrl = "http://" . $_SERVER["HTTP_HOST"]; ?>
			<div class="control-group">
			    <label class="control-label" for="url"><?php echo $messages["label_url"] ?></label>
			    <div class="controls">
			      <input type="url" id="url" name="url" required
			      	value="<?php echo (isset($_POST["url"])) ? $_POST["url"] : $defaultUrl; ?>">
			      	<span class="help-inline"><?php echo $messages["label_url_help"] ?></span>
			    </div>
			</div>
			<?php $defaultRoot = substr($_SERVER["REQUEST_URI"], 0, strrpos($_SERVER["REQUEST_URI"], "/install")); ?>
			<div class="control-group">
			    <label class="control-label" for="context_root"><?php echo $messages["label_context_root"] ?></label>
			    <div class="controls">
			      <input type="text" id="context_root" name="context_root"
			      	value="<?php echo (isset($_POST["context_root"])) ? $_POST["context_root"] : $defaultRoot; ?>">
			      	<span class="help-inline"><?php echo $messages["label_context_root_help"] ?></span>
			    </div>
			</div>
		</fieldset>
		<div class="form-actions">
		  <button type="submit" class="btn btn-primary"><?php echo $messages["button_next"]; ?></button>
		</div>
		<input type="hidden" name="action" value="actionSaveConfig">
	</form>
	<?php
}
function actionSaveConfig()
{
	global $errors;
	global $messages;
	$requiredFields = array("db_host", "db_name", "db_user", "db_password", "projectname", "systememail", "url");
	foreach($requiredFields as $requiredField) {
		if (!isset($_POST[$requiredField]) || !strlen($_POST[$requiredField])) {
			$errors[] = $messages["requires_value"] . ": " . $messages["label_" . $requiredField];
		}
	}
	if (count($errors)) {
		return "printConfigForm";
	}
	// Ist ein Configfile schon angelegt ?
	if (file_exists(CONFIGFILE)) {
		include(CONFIGFILE);
	}
	if (isset($conf) && count($conf)) {
		$errors[] = $messages["err_already_installed"];
	} else {
		// Datenbankverbindung testen
		try {
			$db = DbConnection::getInstance();
			$db->connect($_POST["db_host"], $_POST["db_user"], $_POST["db_password"], $_POST["db_name"]);
			$db->close();
		} catch(Exception $e) {
			$errors[] = $messages["invalid_db_credentials"];
		}
	}
	if (count($errors)) {
		return "printConfigForm";
	}
	$prefix = isset($_POST["db_prefix"]) ? $_POST["db_prefix"] : DEFAULT_DB_PREFIX;
	$filecontent = "<<?php" . PHP_EOL;
	$filecontent .= "\$conf['head_code'] = \"\";" . PHP_EOL;
	$filecontent .= "\$conf['db_host'] = \"". $_POST["db_host"] . "\";" . PHP_EOL;
	$filecontent .= "\$conf['db_user'] = \"". $_POST["db_user"] . "\";" . PHP_EOL;
	$filecontent .= "\$conf['db_passwort'] = \"". $_POST["db_password"] . "\";" . PHP_EOL;
	$filecontent .= "\$conf['db_name'] = \"". $_POST["db_name"] . "\";" . PHP_EOL;
	$filecontent .= "\$conf['db_prefix'] = \"". $prefix . "\";" . PHP_EOL;
	$filecontent .= "\$conf['supported_languages'] = \"de\";" . PHP_EOL;
	$filecontent .= "\$conf['homepage'] = \"". $_POST["url"] . "\";" . PHP_EOL;
	$filecontent .= "\$conf['context_root'] = \"". $_POST["context_root"] . "\";" . PHP_EOL;
	$filecontent .= "\$conf['projectname'] = \"". $_POST["projectname"] . "\";" . PHP_EOL;
	$filecontent .= "\$conf['systememail'] = \"". $_POST["systememail"] . "\";" . PHP_EOL;
	$filecontent .= "\$conf['session_lifetime'] = \"". '3600' . "\";" . PHP_EOL;
	$filecontent .= "\$conf['time_offset'] = \"". '0' . "\";" . PHP_EOL;
	$filecontent .= "\$conf['game_currency'] = \"". '€' . "\";" . PHP_EOL;
	$filecontent .= "?>" . PHP_EOL;
	$fp = fopen(CONFIGFILE, 'w+');
	fwrite($fp, $filecontent);
	fclose($fp);
	if (file_exists(CONFIGFILE)) {
		return "printPreDbCreate";
	}
}
/**
* Step 4: Neue Datenbank anlegen
*/
function printPreDbCreate($messages)
{
	?>
	<h2><?php echo $messages["predb_title"]; ?></h2>
	<form method="post">
		<label class="radio">
			<input type="radio" name="install" value="new" checked> <?php echo $messages["predb_label_new"]; ?>
		</label>
		<button type="submit" class="btn btn-primary"><?php echo $messages["button_next"]; ?></button>
		<input type="hidden" name="action" value="actionCreateDb">
	</form>
	<p><i class="icon-warning-sign"></i> <?php echo $messages["predb_label_warning"]; ?></p>
	<?php
}
function actionCreateDb()
{
	include(CONFIGFILE);
	$db = DbConnection::getInstance();
	$db->connect($conf["db_host"], $conf["db_user"], $conf["db_passwort"], $conf["db_name"]);
	try {
		if ($_POST["install"] == "new") {
			loadAndExecuteDdl(DDL_FULL, $conf["db_prefix"], $db);
		}
	} catch(Exception $e) {
		global $errors;
		$errors[] = $e->getMessage();
		return "printPreDbCreate";
	}
	$db->close();
	return "printCreateUserForm";
}
function loadAndExecuteDdl($file, $prefix, DbConnection $db)
{
	$script = file_get_contents($file);
	// replace prefix
	if ($prefix !== DEFAULT_DB_PREFIX) {
		$script = str_replace(DEFAULT_DB_PREFIX . "_", $prefix . "_", $script);
	}
	$queryResult = $db->connection->multi_query($script);
	// eine exportierte Datenbank kann in der Regel nicht eingelesen werden
	// da Scripte nach einigen Minuten aus Sicherheitsgr�nden beendet werden
	while ($db->connection->more_results() && $db->connection->next_result());
	if (!$queryResult) {
		throw new Exception("Database Query Error: " . $db->connection->error);
	}
}
/**
* Step 5: Adminkonto erstellen
* Ist der Server mit einer Development PHP-Version installiert, wird das Konto erstellt
* aber der Login funktioniert nicht, da eine Library nicht eingebunden wurde
*/
function printCreateUserForm($messages)
{
	?>
	<form method="post" class="form-horizontal">
		<fieldset>
			<legend><?php echo $messages["user_formtitle"] ?></legend>
			<div class="control-group">
			    <label class="control-label" for="name"><?php echo $messages["label_name"] ?></label>
			    <div class="controls">
			      <input type="text" id="name" name="name" required
			      	value="<?php echo (isset($_POST["name"])) ? $_POST["name"] : ""; ?>">
			    </div>
			</div>
			<div class="control-group">
			    <label class="control-label" for="password"><?php echo $messages["label_password"] ?></label>
			    <div class="controls">
			      <input type="password" id="password" name="password" required
			      	value="<?php echo (isset($_POST["password"])) ? $_POST["password"] : ""; ?>">
			    </div>
			</div>
			<div class="control-group">
			    <label class="control-label" for="email"><?php echo $messages["label_email"] ?></label>
			    <div class="controls">
			      <input type="email" id="email" name="email" required
			      	value="<?php echo (isset($_POST["email"])) ? $_POST["email"] : ""; ?>">
			    </div>
			</div>
		</fieldset>
		<div class="form-actions">
		  <button type="submit" class="btn btn-primary"><?php echo $messages["button_next"]; ?></button>
		</div>
		<input type="hidden" name="action" value="actionSaveUser">
	</form>
	<?php
}
function actionSaveUser()
{
	global $errors;
	global $messages;
	$requiredFields = array("name", "password", "email");
	foreach($requiredFields as $requiredField) {
		if (!isset($_POST[$requiredField]) || !strlen($_POST[$requiredField])) {
			$errors[] = $messages["requires_value"] . ": " . $messages["label_" . $requiredField];
		}
	}
	if (count($errors)) {
		return "printCreateUserForm";
	}
	$salt = SecurityUtil::generatePasswordSalt();
	$password = SecurityUtil::hashPassword($_POST["password"], $salt);
	$columns["name"] = $_POST["name"];
	$columns["passwort"] = $password;
	$columns["passwort_salt"] = $salt;
	$columns["email"] = $_POST["email"];
	$columns["r_admin"] = "1";
	include(CONFIGFILE);
	$db = DbConnection::getInstance();
	$db->connect($conf["db_host"], $conf["db_user"], $conf["db_passwort"], $conf["db_name"]);
	$db->queryInsert($columns, $conf["db_prefix"] . "_admin");
	return "printFinalPage";
}
/**
* Abschlu�seite
*/
function printFinalPage($messages)
{
	include(CONFIGFILE);
	?>
	<div class="alert alert-success"><strong><?php echo $messages["final_success_alert"]; ?></strong></div>
	<div class="alert"><strong><?php echo $messages["final_success_note"]; ?></strong></div>
	<p><i class="icon-arrow-right"></i> <a href="<?php echo $conf["context_root"]; ?>/admin"><?php echo $messages["final_link"]; ?></a></p>
	<?php
	require '../admin/pages/deldir.inc.php';
	deldir ('../install');
	deldir ('../update');
	deldir ('../cache');
	mkdir('../cache', 0700);
}
?>
<!DOCTYPE html>
<html lang="de">
	<head>
		<title>OpenWebsoccer Installation</title>
		<link href="../admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
		<meta charset="UTF-8">
		<style type="text/css">
			body {padding-top: 100px; padding-bottom: 40px;}
		</style>
	</head>
	<body>
	<div class="container">
		<h1>OpenWebsoccer Installation</h1>
		<hr>
		<?php
		// Start - PHP-Vorababfrage mit Hinweisen
		if (strnatcmp(phpversion(),'6.99.99')<= 0) {
			echo 'Diese OpenWebsoccer-Version ist auf PHP 7 optimiert, es ist die Version: ' . PHP_VERSION . ' installiert.' ;
			echo 'Achtung ! Die Nutzung auf PHP 5 ist nicht vorgesehen !' ;
			echo '<p>Powered by <a href="http://www.websoccer-sim.com" target="_blank">OpenWebSoccer-Sim</a></p>';
			echo '<p>"OpenWebsoocer / Co-Powered by Rolf Joseph / ErdemCan"</p>';
			exit;
		}
		else if (version_compare(PHP_VERSION, '7.1.0', '>')) {
			echo 'Ihre PHP Version ' . PHP_VERSION . ' ist zu hoch, daher funktioniert die Installation eventuell nicht.';
		}
		else {
			echo 'Ihre PHP Version ist ' . PHP_VERSION . ' und die Installation kann beginnen.';
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
			$view = "printWelcomeScreen";
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
		<hr>
			<footer>
				<a href="https://github.com/rolfjoseph/OpenWebsoccer" target="_blank"> <?php readfile('../admin/config/version.txt'); readfile('../build.txt'); ?>
			</footer>
		</div>
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="../admin/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
<?php
function is__writable($path) {
	//NOTE: use a trailing slash for folders!!!
	if ($path{strlen($path)-1}=='/') // recursively return a temporary file path
		return is__writable($path.uniqid(mt_rand()).'.tmp');
	else if (is_dir($path))
		return is__writable($path.'/'.uniqid(mt_rand()).'.tmp');
	// File auf read/write Rechte pr�fen
	$rm = file_exists($path);
	$f = @fopen($path, 'a');
	if ($f===false)
		return false;
	fclose($f);
	if (!$rm)
		unlink($path);
	return true;
}