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
class PremiumDataService
{
	FUNCTION countAccountStatementsOfUser($websoccer, $db, $userId)
	{
		$columns = 'COUNT(*) AS hits';
		$fromTable = $websoccer->getConfig('db_prefix') . '_premiumstatement';
		$whereCondition = 'user_id = %d';
		$result = $db->querySelect($columns, $fromTable, $whereCondition, $userId);
		$statements = $result->fetch_array();
		$result->free();
		if (isset($statements['hits'])) {
			return $statements['hits'];
		}
		return NULL;
	}
	FUNCTION getAccountStatementsOfUser($websoccer, $db, $userId, $startIndex, $entries_per_page)
	{
		$limit = $startIndex . ',' . $entries_per_page;
		$fromTable = $websoccer->getConfig('db_prefix') . '_premiumstatement';
		$whereCondition = 'user_id = %d ORDER BY created_date DESC';
		$result = $db->querySelect('*', $fromTable, $whereCondition, $userId, $limit);
		$statements = [];
		while ($statement = $result->fetch_array()) {
			$statements[] = $statement;
		}
		$result->free();
		return $statements;
	}
	FUNCTION creditAmount($websoccer, $db, $userId, $amount, $subject, $data = null)
	{
		if ($amount === 0) {
			return;
		}
		$user = UsersDataService::getUserById($websoccer, $db, $userId);
		if (!isset($user['premium_balance'])) {
			throw new Exception('user not found: ' . $userId);
		}
		if ($amount < 0) {
			throw new Exception('amount illegal: ' . $amount);
		} else {
			self::createTransaction($websoccer, $db, $user, $userId, $amount, $subject, $data);
		}
	}
	FUNCTION debitAmount($websoccer, $db, $userId, $amount, $subject, $data = null)
	{
		if ($amount === 0) {
			return;
		}
		$user = UsersDataService::getUserById($websoccer, $db, $userId);
		if (!isset($user['premium_balance'])) {
			throw new Exception('user not found: ' . $userId);
		}
		if ($amount < 0) {
			throw new Exception('amount illegal: ' . $amount);
		}
		// is balance enough?
		if ($user['premium_balance'] < $amount) {
			$i18n = I18n::getInstance($websoccer->getConfig('supported_languages'));
			throw new Exception($i18n->getMessage('premium_balance_notenough'));
		}
		$amount = 0 - $amount;
		self::createTransaction($websoccer, $db, $user, $userId, $amount, $subject, $data);
	}
	private static function createTransaction($websoccer, $db, $user, $userId, $amount, $subject, $data)
	{
		// create transaction
		$fromTable = $websoccer->getConfig('db_prefix') . '_premiumstatement';
		$columns = [
			'user_id' => $userId,
			'action_id' => $subject,
			'amount' => $amount,
			'created_date' => $websoccer->getNowAsTimestamp(),
			'subject_data' => json_encode($data)
		];
		$db->queryInsert($columns, $fromTable);
		// update user budget
		$newBudget = $user['premium_balance'] + $amount;
		$updateColumns = ['premium_balance' => $newBudget];
		$fromTable = $websoccer->getConfig('db_prefix') . '_user';
		$whereCondition = 'id = %d';
		$parameters = $userId;
		$db->queryUpdate($updateColumns, $fromTable, $whereCondition, $parameters);
		// also update user profile, if executed by user.
		if ($userId === $websoccer->getUser()->id) {
			$websoccer->getUser()->premiumBalance = $newBudget;
		}
	}
	FUNCTION createPaymentAndCreditPremium($websoccer, $db, $userId, $amount, $subject)
	{
		if ($amount <= 0) {
			throw new Exception('Illegal amount: ' . $amount);
		}
		$realAmount = $amount * 100;
		// create payment statement
		$db->queryInsert([
			'user_id' => $userId,
			'amount' => $realAmount,
			'created_date' => $websoccer->getNowAsTimestamp()
		], $websoccer->getConfig('db_prefix') . '_premiumpayment');
		// get premium amount to credit
		$priceOptions = explode(',', $websoccer->getConfig('premium_price_options'));
		if (count($priceOptions)) {
			foreach ($priceOptions as $priceOption) {
				$optionParts = explode(':', $priceOption);
				$realMoney = trim($optionParts[0]);
				$realMoneyAmount = $realMoney * 100;
				$premiumMoney = trim($optionParts[1]);
				// credit amount and end here
				if ($realAmount === $realMoneyAmount) {
					self::creditAmount($websoccer, $db, $userId, $premiumMoney, $subject);
					return;
				}
			}
		}
		// if reached here, no price option has been found for this amount
		throw new Exception('No price option found for amount: ' . $amount);
	}
	FUNCTION getPaymentsOfUser($websoccer, $db, $userId, $limit)
	{
		$fromTable = $websoccer->getConfig('db_prefix') . '_premiumpayment';
		$whereCondition = 'user_id = %d ORDER BY created_date DESC';
		$result = $db->querySelect('*', $fromTable, $whereCondition, $userId, $limit);
		$statements = [];
		while ($statement = $result->fetch_array()) {
			$statement['amount'] /= 100;
			$statements[] = $statement;
		}
		$result->free();
		return $statements;
	}
}