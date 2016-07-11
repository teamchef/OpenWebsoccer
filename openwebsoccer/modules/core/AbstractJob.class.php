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
* This Version called "OpenWebsoccer" is a advanced modifikation
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
SEC;
abstract class AbstractJob extends BaseModel
{
	private $jobId;
	FUNCTION __construct($websoccer, $db, $i18n, $jobId, $errorOnAlreadyRunning = TRUE)
	{
		parent::__construct($db, $i18n, $websoccer);
		$this->_id = $jobId;
		$xmlConfig = $this->getXmlConfig();
		// Überprüfung, ob eine andere Instance schon läuft.
		// Der Timeout ist auf 3 Minuten gesetzt ( Prävention bei Privider-Timeouts )
		if ($errorOnAlreadyRunning) {
			$initTime = (int) $xmlConfig->attributes()->inittime;
			$now = $websoccer->getNowAsTimestamp();
			$timeoutTime = $now - 3 * 60;
			if ($initTime > $timeoutTime) {
				throw new Exception('Another instance of this job is already running.');
			}
			$this->replaceAttribute('inittime', $now);
		}
		$interval = (int) $xmlConfig->attributes()->interval;
		$this->_interval = $interval * 60;
		ignore_user_abort(TRUE);
		// versuchen den Job unendlich laufen zu lassen
		set_time_limit(0);
		// Garbage Collection aktivieren, wenn es nicht per default aktiviert ist
		gc_enable();
	}
	FUNCTION __destruct()
	{
		// little hack: set the ping so that 'last execution' also works for external job executions.
		// Better solution would be a AOP implementation which creates an interceptor for execute() function,
		// but for now this should also lead to the same behavior.
		$this->_ping($this->_websoccer->getNowAsTimestamp());
		$this->replaceAttribute('inittime', 0);
	}
	/**
	* Job starten und nach jeder Ausführung für die eingestellte Intervallzeit anhalten.
	*/
	FUNCTION start()
	{
		// Setzt die Attribute für stop und error zurück.
		$this->replaceAttribute('stop', '0');
		$this->replaceAttribute('error', '');
		$this->_ping(0);
		do {
			$xmlConfig = $this->getXmlConfig();
			$stop = (int) $xmlConfig->attributes()->stop;
			if ($stop === 1) {
				$this->stop();
			}
			$now = $this->_websoccer->getNowAsTimestamp();
			// Überprüfung, ob ein anderer Job den Eintrag lastping gesetzt hat.
			// Wenn ja, wird die erneute Job-Ausführung verhindert.
			$lastPing = (int) $xmlConfig->attributes()->last_ping;
			if ($lastPing > 0) {
				$myOwnLastPing = $now - $this->_interval + 5; // Plus Toleranz
				if ($lastPing > $myOwnLastPing) {
					exit;
				}
			}
			$this->_ping($now);
			try {
				// Datenbankverbindung aufbauen
				$this->_db->close();
				$this->_db->connect(
				$this->_websoccer->getConfig('db_host'),
				$this->_websoccer->getConfig('db_user'),
				$this->_websoccer->getConfig('db_passwort'),
				$this->_websoccer->getConfig('db_name'));
				$this->execute();
				// expliziet den Speicher von Variablen, Objekten usw. durch den Garbage Collector frei geben
				gc_collect_cycles();
			} catch (Exception $e) {
				$this->replaceAttribute('error', $e->getMessage());
				$this->stop();
			}
			$this->_db->close();
			// Job-Ausführung für die Intervallzeit anhalten.
			sleep($this->_interval);
		} while(true);
	}
	/**
	* Job anhalten
	*/
	FUNCTION stop()
	{
		$this->replaceAttribute('stop', '1');
		exit;
	}
	FUNCTION _ping($time)
	{
		// aktuelle Pingzeit setzen
		$this->replaceAttribute('last_ping', $time);
	}
	FUNCTION getXmlConfig()
	{
		// jobs.xml laden
		$xml = simplexml_load_file(JOBS_CONFIG_FILE);
		// auszuführenden Job finden
		$xmlConfig = $xml->xpath('//job[@id = \''. $this->_id . '\']');
		// wurde der Job nicht gefunden, Hinweis ausgeben
		if (!$xmlConfig) {
			throw new Exception('Der Job konnte nicht gefunden werden.');
		}
		return $xmlConfig[0];
	}
	FUNCTION replaceAttribute($name, $value)
	{
		// lock file for this transaction
		$fp = file_get_contents(ROOT . '/admin/config/lockfile.txt', 'r');
		flock($fp, LOCK_EX);
		$xml = simplexml_load_file(JOBS_CONFIG_FILE);
		if ($xml === FALSE) {
			$errorMessages = '';
			$errors = libxml_get_errors();
			foreach ($errors as $error) {
				$errorMessages = $errorMessages . "\n" . $error;
			}
			throw new Exception('Job with ID \'' . $this->_id . '\': der Eintrag konnte nicht erneuert werden \'' . $name . '\' with value \'' . $value . '\'. Errors: ' . $errorMessages);
		}
		$xmlConfig = $xml->xpath('//job[@id = \''. $this->_id . '\']');
		$xmlConfig[0][$name] = $value;
		$successfulWritten = $xml->asXML(JOBS_CONFIG_FILE);
		if (!$successfulWritten) {
			throw new Exception('Job with ID \'' . $this->_id . '\': der Eintrag konnte nicht gespeichert werden \'' . $name . '\' with value \'' . $value . '\'.');
		}
		// unlock
		flock($fp, LOCK_UN);
	}
	/**
	* Ausführung des Codes
	* abstract muss hier stehen, sonst funktioniert es nicht
	*/
	abstract FUNCTION execute();
}