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
class ReportAbsenceController extends BaseModel
{
	FUNCTION __construct($i18n,$websoccer,$db)
	{
		parent::__construct($db,$i18n,$websoccer);
	}
	FUNCTION executeAction($parameters)
	{
		$userId = $this->_websoccer->getUser()->id;
		// find deputy
		$deputyId = UsersDataService::getUserIdByNick($this->_websoccer,$this->_db,$parameters['deputynick']);
		if ($deputyId < 1) {
			throw new Exception($this->_i18n->getMessage('absence_err_invaliddeputy'));
		}
		// cannot assign to himself
		if ($userId === $deputyId) {
			throw new Exception($this->_i18n->getMessage('absence_err_deputyisself'));
		}
		AbsencesDataService::makeUserAbsent($this->_websoccer,$this->_db,$userId,$deputyId,$parameters['days']);
		// success message
		$this->_websoccer->addFrontMessage(new FrontMessage(MESSAGE_TYPE_SUCCESS,$this->_i18n->getMessage('absence_report_success'),''));
		return NULL;
	}
}
