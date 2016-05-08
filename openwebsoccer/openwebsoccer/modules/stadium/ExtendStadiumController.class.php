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
* Base Version: OpenWebSoccer-Sim  5.2.4-SNAPSHOT - 2015
*
* This Version called "OpenWebsoccer" is a advanced modification
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
defined('OpenWebsoccer') or header('location: ../../index.php');
/**
 * Validates or executes a stadium extension order.
 */
class ExtendStadiumController extends BaseModel
{
	public function __construct($i18n, $websoccer, $db)
	{
		parent::__construct($db, $i18n, $websoccer);
	}
	public function executeAction($parameters)
	{
		$user = $this->_websoccer->getUser();
		$teamId = $user->getClubId($this->_websoccer, $this->_db);
		if ($teamId < 1) {
			return NULL;
		}
		// any number entered?
		if (!$parameters['side_standing'] && !$parameters['side_seats'] && !$parameters['grand_standing'] && !$parameters['grand_seats'] && !$parameters['vip'] ) {
			return NULL;
		}
		$stadium = StadiumsDataService::getStadiumByTeamId($this->_websoccer, $this->_db, $teamId);
		if (!$stadium) {
			return NULL;
		}
		// max limit exceeded?
		$seatsSide = $stadium['places_stands'] + $stadium['places_seats'] + $parameters['side_standing'] + $parameters['side_seats'];
		if ($seatsSide > $this->_websoccer->getConfig('stadium_max_side')) {
			throw new Exception($this->_i18n->getMessage('stadium_extend_err_exceed_max_side', $this->_websoccer->getConfig('stadium_max_side')));
		}
		$seatsGrand = $stadium['places_stands_grand'] + $stadium['places_seats_grand'] + $parameters['grand_standing'] + $parameters['grand_seats'];
		if ($seatsGrand > $this->_websoccer->getConfig('stadium_max_grand')) {
			throw new Exception($this->_i18n->getMessage('stadium_extend_err_exceed_max_grand', $this->_websoccer->getConfig('stadium_max_grand')));
		}
		$seatsVip = $stadium['places_vip'] + $parameters['vip'];
		if ($seatsVip > $this->_websoccer->getConfig('stadium_max_vip')) {
			throw new Exception($this->_i18n->getMessage('stadium_extend_err_exceed_max_vip', $this->_websoccer->getConfig('stadium_max_vip')));
		}
		// is construction already on-going?
		if (StadiumsDataService::getCurrentConstructionOrderOfTeam($this->_websoccer, $this->_db, $teamId) !== NULL) {
			throw new Exception($this->_i18n->getMessage('stadium_extend_err_constructionongoing'));
		}
		if (isset($parameters['validate-only']) && $parameters['validate-only']) {
			return 'stadium-extend-confirm';
		}
		// builder got selected? Illegal builder ID can only happen due to a bug or user input manipulation.
		$builderId = $this->_websoccer->getRequestParameter('offerid');
		$offers = StadiumsDataService::getBuilderOffersForExtension($this->_websoccer, $this->_db, $teamId,
			(int)$this->_websoccer->getRequestParameter('side_standing'),
			(int)$this->_websoccer->getRequestParameter('side_seats'),
			(int)$this->_websoccer->getRequestParameter('grand_standing'),
			(int)$this->_websoccer->getRequestParameter('grand_seats'),
			(int)$this->_websoccer->getRequestParameter('vip'));
		if ($builderId === NULL || !isset($offers[$builderId])) {
			throw new Exception('Illegal offer ID.');
		}
		// can user afford it?
		$offer = $offers[$builderId];
		$team = TeamsDataService::getTeamSummaryById($this->_websoccer, $this->_db, $teamId);
		$totalCosts = $offer['totalCosts'];
		if ($team['team_budget'] <= $totalCosts) {
			throw new Exception($this->_i18n->getMessage('stadium_extend_err_too_expensive'));
		}
		// try to debit premium fee
		if ($offer['builder_premiumfee']) {
			PremiumDataService::debitAmount($this->_websoccer, $this->_db, $user->id, $offer['builder_premiumfee'], 'extend-stadium');
		}
		// debit money
		BankAccountDataService::debitAmount($this->_websoccer, $this->_db, $teamId, $totalCosts, 'stadium_extend_transaction_subject', $offer['builder_name']);
		// create construction order
		$this->_db->queryInsert([
			'team_id' => $teamId,
			'builder_id' => $builderId,
			'started' => $this->_websoccer->getNowAsTimestamp(),
			'deadline' => $offer['deadline'],
			'p_steh' => $parameters['side_standing'] ? $parameters['side_standing'] : 0,
			'p_sitz' => $parameters['side_seats'] ? $parameters['side_seats'] : 0,
			'p_haupt_steh' => $parameters['grand_standing'] ? $parameters['grand_standing'] : 0,
			'p_haupt_sitz' => $parameters['grand_seats'] ? $parameters['grand_seats'] : 0,
			'p_vip' => $parameters['vip'] ? $parameters['vip'] : 0
		], $this->_websoccer->getConfig('db_prefix') . '_stadium_construction');
		// success message
		$this->_websoccer->addFrontMessage(new FrontMessage(MESSAGE_TYPE_SUCCESS, $this->_i18n->getMessage('stadium_extend_success'), ''));
		// create action log manually here, ceause of this great "validate-only" idea...
		ActionLogDataService::createOrUpdateActionLog($this->_websoccer, $this->_db, $user->id, 'extend-stadium');
		$seats = $parameters['side_standing'] + $parameters['side_seats'] + $parameters['grand_standing'] + $parameters['grand_seats'] + $parameters['vip'];
		BadgesDataService::awardBadgeIfApplicable($this->_websoccer, $this->_db, $user->id, 'stadium_construction_by_x', $seats);
		return 'stadium';
	}
}
