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
SEC;
class FinancesSummaryModel extends BaseModel
{
	private $_teamId;
	FUNCTION __construct($db, $i18n, $websoccer)
	{
		parent::__construct($db, $i18n, $websoccer);
		$this->_teamId = $this->_websoccer->getUser()->getClubId($this->_websoccer, $this->_db);
	}
	FUNCTION renderView()
	{
		return ($this->_teamId > 0);
	}
	FUNCTION getTemplateParameters()
	{
		$minDate = $this->_websoccer->getNowAsTimestamp() - 365 * 3600 * 24;
		$columns = array(
				'verwendung' => 'subject',
				'SUM(betrag)' => 'balance',
				'AVG(betrag)' => 'avgAmount'
				);
		$result = $this->_db->querySelect($columns,
				$this->_websoccer->getConfig('db_prefix') . '_konto',
				'verein_id = %d AND datum > %d GROUP BY verwendung HAVING COUNT(*) > 5', array($this->_teamId, $minDate));
		$majorPositions = array();
		while ($position = $result->fetch_array()) {
			$majorPositions[] = $position;
		}
		$result->free();
		return array('majorPositions' => $majorPositions);
	}
}