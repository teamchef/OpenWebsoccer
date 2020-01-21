<?php
/******************************************************
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
******************************************************/
// SEC;
class DbConnection {
	public $connection;
	private static $_instance;
	private $_queryCache;
	public static function getInstance()
	{
		if(self::$_instance == NULL) {
			self::$_instance = new DbConnection();
		}
		return self::$_instance;
	}
	FUNCTION __construct()
	{
	}
	FUNCTION connect($host,$user,$password,$dbname)
	{
		@$this->connection = new mysqli($host,$user,$password,$dbname);
		@$this->connection->set_charset('utf8');
		if (mysqli_connect_error()) {
			throw new Exception('Database Connection Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
		}
	}
	FUNCTION close()
	{
		$this->connection->close();
	}
	FUNCTION querySelect($columns,$fromTable,$whereCondition,$parameters = null,$limit = null)
	{
		$queryStr = $this->buildQueryString($columns,$fromTable,$whereCondition,$parameters,$limit);
		return $this->executeQuery($queryStr);
	}
	FUNCTION queryCachedSelect($columns,$fromTable,$whereCondition,$parameters = null,$limit = null)
	{
		$queryStr = $this->buildQueryString($columns,$fromTable,$whereCondition,$parameters,$limit);
		// get result from cache
		if (isset($this->_queryCache[$queryStr])) {
			return $this->_queryCache[$queryStr];
		}
		// build result list
		$result = $this->executeQuery($queryStr);
		$rows = array();
		while ($row = $result->fetch_array()) {
			$rows[] = $row;
		}
		$result->free();
		$this->_queryCache[$queryStr] = $rows;
		return $rows;
	}
	FUNCTION queryUpdate($columns,$fromTable,$whereCondition,$parameters)
	{
		$queryStr = 'UPDATE ' . $fromTable . ' SET ';
		$queryStr = $queryStr . self::buildColumnsValueList($columns);
		// WHERE
		$queryStr = $queryStr . ' WHERE ';
		$wherePart = self::buildWherePart($whereCondition,$parameters);
		$queryStr = $queryStr . $wherePart;
		$this->executeQuery($queryStr);
		// refresh cache
		$this->_queryCache = array();
	}
	FUNCTION queryDelete($fromTable,$whereCondition,$parameters)
	{
		$queryStr = 'DELETE FROM ' . $fromTable;
		// WHERE
		$queryStr = $queryStr . ' WHERE ';
		$wherePart = self::buildWherePart($whereCondition,$parameters);
		$queryStr = $queryStr . $wherePart;
		$this->executeQuery($queryStr);
		// refresh cache
		$this->_queryCache = array();
	}
	FUNCTION queryInsert($columns,$fromTable)
	{
		$queryStr = 'INSERT ' . $fromTable . ' SET ';
		$queryStr = $queryStr . $this->buildColumnsValueList($columns);
		$this->executeQuery($queryStr);
	}
	FUNCTION getLastInsertedId()
	{
		return $this->connection->insert_id;
	}
	FUNCTION buildQueryString($columns,$fromTable,$whereCondition,$parameters = null,$limit = null)
	{
		$queryStr = 'SELECT ';
		// columns
		if (is_array($columns)) {
			$firstColumn = TRUE;
			foreach($columns as $dbName => $aliasName) {
				if (!$firstColumn) {
					$queryStr = $queryStr .',';
				} else {
					$firstColumn = FALSE;
				}
				if (is_numeric($dbName)) {
					$dbName = $aliasName;
				}
				$queryStr = $queryStr . $dbName. ' AS '. $aliasName;
			}
		} else {
			$queryStr = $queryStr . $columns;
		}
		// FROM
		$queryStr = $queryStr . ' FROM ' . $fromTable . ' WHERE ';
		// WHERE
		$wherePart = self::buildWherePart($whereCondition,$parameters);
		// add limit
		if (!empty($limit)) {
			$wherePart = $wherePart . ' LIMIT ' . $limit;
		}
		$queryStr = $queryStr . $wherePart;
		return $queryStr;
	}
	FUNCTION buildColumnsValueList($columns)
	{
		$queryStr = '';
		$firstColumn = TRUE;
		foreach($columns as $dbName => $value) {
			if (!$firstColumn) {
				$queryStr = $queryStr . ',';
			} else {
				$firstColumn = FALSE;
			}
			if (strlen($value)) {
				$columnValue = '\'' . $this->connection->real_escape_string($value) .'\'';
			} else {
				$columnValue = 'DEFAULT';
			}
			$queryStr = $queryStr . $dbName . '=' . $columnValue;
		}
		return $queryStr;
	}
	FUNCTION buildWherePart($whereCondition,$parameters)
	{
		$maskedParameters = self::prepareParameters($parameters);
		return vsprintf($whereCondition,$maskedParameters);
	}
	FUNCTION prepareParameters($parameters)
	{
		if(!is_array($parameters)){
			$parameters = array($parameters);
		}
		// mask input
		$arrayLength = count($parameters);
		for($i = 0; $i < $arrayLength; $i++) {
			$parameters[$i] = $this->connection->real_escape_string(trim($parameters[$i]));
		}
		return $parameters;
	}
	FUNCTION executeQuery($queryStr)
	{
		$queryResult = $this->connection->query($queryStr);
		if (!$queryResult) {
			throw new Exception('Database Query Error: ' . $this->connection->error);
		}
		return $queryResult;
	}
}
