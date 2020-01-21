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
// SEC;
class ModuleConfigHelper
{
	FUNCTION findDependentEntities($dbtable)
	{
		$modules = scandir(FOLDER_MODULES);
		$entities = array();
		foreach ($modules as $module) {
			if (is_dir(FOLDER_MODULES .'/'. $module)) {
				$files = scandir(FOLDER_MODULES .'/'. $module);
				foreach ($files as $file) {
					$pathToFile = FOLDER_MODULES .'/'. $module .'/' . $file;
					if ($file == MODULE_CONFIG_FILENAME) {
						self::_findDependentEntity($entities,$pathToFile,$dbtable);
					}
				}
			}
		}
		return $entities;
	}
	FUNCTION findModuleConfigAsXmlObject($moduleName)
	{
		$pathToFile = FOLDER_MODULES .'/'. $moduleName .'/'. MODULE_CONFIG_FILENAME;
		if (!file_exists($pathToFile)) {
			throw new Exception('Config file for module \''. $moduleName . '\' not found.');
		}
		return simplexml_load_file($pathToFile);
	}
	FUNCTION removeAliasFromDbTableName($tableName)
	{
		$spaceTablePos = strrpos($tableName,' ');
		return ($spaceTablePos) ? substr($tableName,0,strpos($tableName,' ')) : $tableName;
	}
	FUNCTION _findDependentEntity(&$entities,$pathToFile,$dbtable)
	{
		$xml = simplexml_load_file($pathToFile);
		$foundFields = $xml->xpath('//field[@jointable = \''. $dbtable . '\']');
		if ($foundFields) {
			foreach ($foundFields as $field) {
				$entity = $field->xpath('../..');
				$entities[] = array('dbtable' => self::removeAliasFromDbTableName((string) $entity[0]->attributes()->dbtable),
									'columnid' => (string) $field->attributes()->id,
									'cascade' => (string) $field->attributes()->cascade);
			}
		}
	}
}
