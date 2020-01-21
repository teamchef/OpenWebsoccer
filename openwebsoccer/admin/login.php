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
if (version_compare(PHP_VERSION,'5.4.0') <= 0) {
	echo 'Ihre PHP Version ist ' . PHP_VERSION . ' und daher nicht f�r den OpenWebsoccer geeignet.';
	stop();
}
define('ROOT',$_SERVER['DOCUMENT_ROOT']. dirname($_SERVER['PHP_SELF']) . '/..');
if (!file_exists('../cache')){ mkdir  (ROOT . '/cache'); }
include(ROOT . '/admin/config/global.inc.php');
include(ROOT . '/admin/functions.inc.php');
include(CONFIGCACHE_FILE_ADMIN);
$i18n = I18n::getInstance($website->getConfig('supported_languages'));
if (isset($_GET['lang'])) {
	$i18n->setCurrentLanguage($_GET['lang']);
}
include(sprintf(CONFIGCACHE_ADMINMESSAGES,$i18n->getCurrentLanguage()));
$errors = array();
$inputUser = (isset($_POST['inputUser'])) ? $_POST['inputUser'] : FALSE;
$inputPassword = (isset($_POST['inputPassword'])) ? $_POST['inputPassword'] : FALSE;
$forwarded = (isset($_GET['forwarded']) && $_GET['forwarded'] == 1) ? TRUE : FALSE;
$loggedout = (isset($_GET['loggedout']) && $_GET['loggedout'] == 1) ? TRUE : FALSE;
$newpwd = (isset($_GET['newpwd']) && $_GET['newpwd'] == 1) ? TRUE : FALSE;
if ($inputUser or $inputPassword) {
	if (!$inputUser) {
		$errors['inputUser'] = $i18n->getMessage('login_error_nousername');
	}
	if (!$inputPassword) {
		$errors['inputPassword'] = $i18n->getMessage('login_error_nopassword');
	}
	if (count($errors) == 0) {
		$columns = '*';
		$fromTable = $conf['db_prefix'] .'_admin';
		$whereCondition = 'name = \'%s\'';
		$parameters = $inputUser;
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$parameters);
		if($result->num_rows < 1) {
			$errors['inputUser'] = $i18n->getMessage('login_error_unknownusername');
		} else {
			$admin = $result->fetch_array();
			$hashedPw = SecurityUtil::hashPassword($inputPassword,$admin['passwort_salt']);
			$hashed = SecurityUtil::create_hash($inputPassword);
			if ($hashedPw == $admin['passwort'] || $hashedPw == $admin['passwort_neu'] || $hashed) {
			// if ($admin['passwort'] == $hashedPw || $admin['passwort_neu'] == $hashedPw) {
				if (version_compare(PHP_VERSION,'6.0.0') >= 0) {
					// Start: Anpassung f�r PHP 7,da session_regenerate_id(); so nicht mehr funktioniert
					session_destroy();
					session_start();
					// Ende: Anpassung f�r PHP 7,da session_regenerate_id(); so nicht mehr funktioniert
				}
				else if (version_compare(PHP_VERSION,'5.4.0') >= 0) {
					session_regenerate_id();
				}
				$_SESSION['valid'] = 1;
				$_SESSION['userid'] = $admin['id'];
				// update new PW
				if ($admin['passwort_neu'] == $hashedPw) {
					$columns = array('passwort' => $hashedPw,'passwort_neu_angefordert' => 0,'passwort_neu' => '');
					$fromTable = $conf['db_prefix'] .'_admin';
					$whereCondition = 'id = %d';
					$parameter = $admin['id'];
					$db->queryUpdate($columns,$fromTable,$whereCondition,$parameter);
				}
				// write log
				  if ($admin['name']) {
					$ip = getenv('REMOTE_ADDR');
					$content = $admin['name'] .','. $ip .','. date('d.m.y - H:i:s');
					$content .= "\n";
					$datei = '../generated/adminlog.php';
					$fp = fopen($datei,'a+');
					if (filesize($datei)) {
						$inhalt = fread($fp,filesize($datei));
					} else {
						$inhalt = '';
					}

					$inhalt .= $content;
					fwrite($fp, $content);
					fclose($fp);
					// Login eines Admins an die System-Mail-Adresse senden
					$adminlogintosystememail = $website->getConfig("adminlogintosystememail");
					if ($adminlogintosystememail)
					{
						$empfaenger = $website->getConfig("systememail");
						$betreff = 'Admin-Login von ' . $admin['name'];
						$from = 'From:' . $website->getConfig("projectname") . ' - Admin-Login' . '<' . $website->getConfig("systememail") . '>';
						$from .= 'Content-Type: text/html\n';
						$text = $content;
						mail($empfaenger, $betreff, $text, $from);
					}
				  }
				header('location: index.php');
			} else {
				$errors['inputPassword'] = $i18n->getMessage('login_error_invalidpassword');
				sleep(5);
			}
		}
		$result->free();
	}
}
header('Content-type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang='de'>
	<head>
		<title><?php echo $i18n->getMessage('login_title');?></title>
		<link href='bootstrap/css/bootstrap.min.css' rel='stylesheet' media='screen'>
		<link rel='shortcut icon' type='image/x-icon' href='../favicon.ico' />
		<meta charset='UTF-8'>
		<style type='text/css'>
			body { padding-top: 100px; padding-bottom: 40px; }
		</style>
	</head>
	<body>
		<div class='container'>
			<h1><?php echo $i18n->getMessage('login_title');?></h1>
			<?php
				if ($forwarded) {
					echo createWarningMessage($i18n->getMessage('login_alert_accessdenied_title'),$i18n->getMessage('login_alert_accessdenied_content'));
				} else if ($loggedout) {
					echo createSuccessMessage($i18n->getMessage('login_alert_logoutsuccess_title'),$i18n->getMessage('login_alert_logoutsuccess_content'));
				} else if ($newpwd) {
					echo createSuccessMessage($i18n->getMessage('login_alert_sentpassword_title'),$i18n->getMessage('login_alert_sentpassword_content'));
				} else if (count($errors) > 0) {
					echo createErrorMessage($i18n->getMessage('login_alert_error_title'),$i18n->getMessage('login_alert_error_content'));
				}
			?>
			<p><a href='?lang=de'>Deutsch</a></p>
			<form action='login.php' method='post' class='form-horizontal'>
				<div class='control-group<?php if (isset($errors['inputUser'])) echo ' error'; ?>'>
					<label class='control-label' for='inputUser'><?php echo $i18n->getMessage('login_label_user');?></label>
					<div class='controls'>
						<input type='text' name='inputUser' id='inputUser' placeholder='<?php echo $i18n->getMessage('login_label_user');?>' required>
					</div>
				</div>
				<div class='control-group<?php if (isset($errors['inputPassword'])) echo ' error'; ?>'>
					<label class='control-label' for='inputPassword'><?php echo $i18n->getMessage('login_label_password');?></label>
					<div class='controls'>
						<input type='password' name='inputPassword' id='inputPassword' placeholder='<?php echo $i18n->getMessage('login_label_password');?>'>
					</div>
				</div>
				<div class='control-group'>
					<div class='controls'>
			  			<button type='submit' class='btn'><?php echo $i18n->getMessage('login_button_logon');?></button>
					</div>
				</div>
			</form>
			<p><a href='forgot-password.php'><?php echo $i18n->getMessage('login_link_forgotpassword');?></a>
			<hr>
			<footer>
 				<div id="footer">
	 				<a href="https://github.com/rolfjoseph/OpenWebsoccer" target="_blank"> <?php readfile('../admin/config/version.txt'); readfile('../build.txt'); ?>
				</div>
			</footer>
		</div>
		<script src='https://code.jquery.com/jquery-latest.min.js'></script>
		<script src='bootstrap/js/bootstrap.min.js'></script>
	</body>
</html>