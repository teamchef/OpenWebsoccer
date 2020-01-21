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
SEC;
class TrainingDataService
{
	FUNCTION countTrainers(WebSoccer $websoccer,DbConnection $db)
	{
		$fromTable = $websoccer->getConfig('db_prefix') . '_trainer';
		$whereCondition = '1=1';
		$columns = 'COUNT(*) AS hits';
		$result = $db->querySelect($columns,$fromTable,$whereCondition);
		$trainers = $result->fetch_array();
		$result->free();
		return $trainers['hits'];
	}
	FUNCTION getTrainers(WebSoccer $websoccer,DbConnection $db,$startIndex,$entries_per_page)
	{
		$fromTable = $websoccer->getConfig('db_prefix') . '_trainer';
		$whereCondition = '1=1 ORDER BY salary DESC';
		$columns = '*';
		$limit = $startIndex .','. $entries_per_page;
		$trainers = [];
		$result = $db->querySelect($columns,$fromTable,$whereCondition,null,$limit);
		while ($trainer = $result->fetch_array()) {
			$trainers[] = $trainer;
		}
		$result->free();
		return $trainers;
	}
	FUNCTION getTrainerById(WebSoccer $websoccer,DbConnection $db,$trainerId)
	{
		$fromTable = $websoccer->getConfig('db_prefix') . '_trainer';
		$whereCondition = 'id = %d';
		$columns = '*';
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$trainerId);
		$trainer = $result->fetch_array();
		$result->free();
		return $trainer;
	}
	FUNCTION countRemainingTrainingUnits(WebSoccer $websoccer,DbConnection $db,$teamId)
	{
		$columns = 'COUNT(*) AS hits';
		$fromTable = $websoccer->getConfig('db_prefix') . '_training_unit';
		$whereCondition = 'team_id = %d AND date_executed = 0 OR date_executed IS NULL';
		$parameters = $teamId;
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$parameters);
		$units = $result->fetch_array();
		$result->free();
		return $units['hits'];
	}
	FUNCTION getLatestTrainingExecutionTime(WebSoccer $websoccer,DbConnection $db,$teamId)
	{
		$columns = 'date_executed';
		$fromTable = $websoccer->getConfig('db_prefix') . '_training_unit';
		$whereCondition = 'team_id = %d AND date_executed > 0 ORDER BY date_executed DESC';
		$parameters = $teamId;
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$parameters,1);
		$unit = $result->fetch_array();
		$result->free();
		if (isset($unit['date_executed'])) {
			return $unit['date_executed'];
		} else {
			return NULL;
		}
	}
	FUNCTION getValidTrainingUnit(WebSoccer $websoccer,DbConnection $db,$teamId)
	{
		$columns = 'id,trainer_id';
		$fromTable = $websoccer->getConfig('db_prefix') . '_training_unit';
		$whereCondition = 'team_id = %d AND date_executed = 0 OR date_executed IS NULL ORDER BY id ASC';
		$parameters = $teamId;
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$parameters,1);
		$unit = $result->fetch_array();
		$result->free();
		return $unit;
	}
	FUNCTION getTrainingUnitById(WebSoccer $websoccer,DbConnection $db,$teamId,$unitId)
	{
		$columns = '*';
		$fromTable = $websoccer->getConfig('db_prefix') . '_training_unit';
		$whereCondition = 'id = %d AND team_id = %d';
		$parameters = array($unitId,$teamId);
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$parameters,1);
		$unit = $result->fetch_array();
		$result->free();
		return $unit;
	}
}
