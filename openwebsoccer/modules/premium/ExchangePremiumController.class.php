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
class ExchangePremiumController extends BaseModel
{
	FUNCTION __construct($i18n,$websoccer,$db)
	{
		parent::__construct($db,$i18n,$websoccer);
	}
	FUNCTION executeAction($parameters)
	{
		$user = $this->_websoccer->getUser();
		// check if feature is enabled
		$exchangeRate = (int)$this->_websoccer->getConfig('premium_exchangerate_gamecurrency');
		if ($exchangeRate <= 0) {
			throw new Exception('featue is disabled!');
		}
		// check if user has a club.
		$clubId = $user->getClubId($this->_websoccer,$this->_db);
		if (!$clubId) {
			throw new Exception($this->_i18n->getMessage('feature_requires_team'));
		}
		// check if balance is enough
		$amount = $parameters['amount'];
		$balance = $user->premiumBalance;
		if ($balance < $amount) {
			throw new Exception($this->_i18n->getMessage('premium-exchange_err_balancenotenough'));
		}
		// validation only: redirect to confirmation page
		if ($parameters['validateonly']) {
			return 'premium-exchange-confirm';
		}
		// credit amount on team account
		BankAccountDataService::creditAmount($this->_websoccer,$this->_db,$clubId,$amount * $exchangeRate,'premium-exchange_team_subject',$user->username);
		// debit premium amount
		PremiumDataService::debitAmount($this->_websoccer,$this->_db,$user->id,$amount,'exchange-premium');
		// success message
		$this->_websoccer->addFrontMessage(new FrontMessage(MESSAGE_TYPE_SUCCESS,$this->_i18n->getMessage('premium-exchange_success'),''));
		return 'premiumaccount';
	}
}
