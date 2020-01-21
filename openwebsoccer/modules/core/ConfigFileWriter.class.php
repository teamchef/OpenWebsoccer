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
* This Version called "OpenWebsoccer" is a advanced modifikation
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
SEC;
class ConfigFileWriter
{
	private static $_instance;
	private $_settings;
	public static function getInstance($settings)
	{
		if(self::$_instance == NULL) {
			self::$_instance = new ConfigFileWriter($settings);
		}
		return self::$_instance;
	}
	FUNCTION saveSettings($newSettings)
	{
 		// update or add values
 		foreach($newSettings as $settingId => $settingValue) {
 			$this->_settings[$settingId] = $settingValue;
 		}
	 	$this->_writeToFile();
	}
	FUNCTION _writeToFile()
	{
 		$content = "<?php" . PHP_EOL;
 		foreach ($this->_settings as $id => $value) {
 			$content .= "\$conf[\"". $id . "\"] = \"". addslashes($value) ."\";". PHP_EOL;
 		}
 		$content .= "?>";
 		$fw = new FileWriter(GLOBAL_CONFIG_FILE);
 		$fw->writeLine($content);
 		$fw->close();
 	}
	// hide constructor
	FUNCTION __construct($settings)
	{
 		$this->_settings = $settings;
	}
}
