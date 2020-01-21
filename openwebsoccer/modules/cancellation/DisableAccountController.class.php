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
class DisableAccountController extends BaseModel
{
	FUNCTION __construct($i18n,$websoccer,$db)
	{
		parent::__construct($db,$i18n,$websoccer);
	}
	FUNCTION executeAction($parameters)
	{
		// User beim Verein freistellen und denn Kapitänsposten frei stellen
		$clubId = $this->_websoccer->getUser()->getClubId($this->_websoccer,$this->_db);
		if ($clubId) {
			$this->_db->queryUpdate(['user_id' => '','captain_id' => ''],$this->_websoccer->getConfig('db_prefix') . '_verein','user_id = %d',$this->_websoccer->getUser()->id);
		}
		// User deaktiviren
		$this->_db->queryUpdate(['status' => '0'],$this->_websoccer->getConfig('db_prefix') . '_user','id = %d',$this->_websoccer->getUser()->id);
		// User abmelden und Abmeldung bestätigen
		$authenticatorClasses = explode('','',$this->_websoccer->getConfig('authentication_mechanism'));
		foreach ($authenticatorClasses as $authenticatorClass) {
		$authenticatorClass = trim($authenticatorClass);
		if (!class_exists($authenticatorClass)) {
			throw new Exception('Class not found: ' . $authenticatorClass);
		}
		$authenticator = new $authenticatorClass($this->_websoccer);
		$authenticator->logoutUser($this->_websoccer->getUser());
		}
		$this->_websoccer->addFrontMessage(new FrontMessage(MESSAGE_TYPE_SUCCESS,$this->_i18n->getMessage('cancellation_success'),''));
		return 'home';
	}
}
