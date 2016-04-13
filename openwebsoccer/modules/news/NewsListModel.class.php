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
* Base Version: OpenWebSoccer-Sim 5.2.3 - 2015
*
* This Version called "OpenWebsoccer" is a advanced modification
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
defined('OpenWebsoccer') or header('location: ../../index.php');
define('NEWS_ENTRIES_PER_PAGE', 5);
define('NEWS_TEASER_MAXLENGTH', 256);
/**
* Class NewsListModel
*/
class NewsListModel extends BaseModel
{
	public function getTemplateParameters()
	{
		$fromTable = $this->_websoccer->getConfig('db_prefix') . '_news';
		$whereCondition = 'status = %d';
		$parameters = '1';
		// count items for pagination
		$result = $this->_db->querySelect('COUNT(*) AS hits', $fromTable, $whereCondition, $parameters);
		$rows = $result->fetch_array();
		$result->free();
		// enable paginations
		$eps = NEWS_ENTRIES_PER_PAGE;
		$paginator = new Paginator($rows['hits'], $eps, $this->_websoccer);
		// select
		$columns = 'id, titel, datum, nachricht';
		$whereCondition .= ' ORDER BY datum DESC';
		$limit = $paginator->getFirstIndex() . ',' . $eps;
		$result = $this->_db->querySelect($columns, $fromTable, $whereCondition, $parameters, $limit);
		$articles = [];
		while ($article = $result->fetch_array()) {
			$articles[] = ['id' => $article['id'], 'title' => $article['titel'], 'date' => $this->_websoccer->getFormattedDate($article['datum']), 'teaser' => $this->_shortenMessage($article['nachricht'])];
		}
		$result->free();
		return ['articles' => $articles, 'paginator' => $paginator];
	}
	private function _shortenMessage($message)
	{
		if (strlen($message) > NEWS_TEASER_MAXLENGTH) {
			$message = wordwrap($message, NEWS_TEASER_MAXLENGTH);
			$message = substr($message, 0, strpos($message, '\n')) . '...';
		}
		return $message;
	}
}