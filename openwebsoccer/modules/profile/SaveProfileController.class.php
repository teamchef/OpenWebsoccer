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
/**
* Updates user's own account profile and settings.
*/
class SaveProfileController extends BaseModel
{
	public function __construct($i18n, $websoccer, $db)
	{
		parent::__construct($db, $i18n, $websoccer);
	}
	public function executeAction($parameters)
	{
		$user = $this->_websoccer->getUser();
		$columns = [];
		// save new password
		if ($parameters['newpassword'] !== null) {
			// always create new salt (in order to invalid old cookies)
			$salt = SecurityUtil::generatePasswordSalt();
			$hashedPassword = SecurityUtil::hashPassword($parameters['newpassword'], $salt);
			$columns['passwort_salt'] = $salt;
			$columns['passwort'] = $hashedPassword;
		}
		// handle new e-mail
		if ($parameters['newemail'] !== null) {
			$activationKey = SecurityUtil::generatePassword();
			$columns['schluessel'] = $activationKey;
			$columns['status'] = 2;
			$columns['email'] = $parameters['newemail'];
			$user->email = $parameters['newemail'];
			// send e-mail
			$querystr = 'key=' . $columns['schluessel'] . '&userid=' . $user->id;
			$tplparameters['activationlink'] = $this->_websoccer->getInternalActionUrl('activate', $querystr, 'activate-user', TRUE);
			// send e-mail
			EmailHelper::sendSystemEmailFromTemplate($this->_websoccer, $this->_i18n,
				$user->email,
				$this->_i18n->getMessage('activation_changedemail_subject'),
				'changed_email_activation',
				$tplparameters);
			$this->_websoccer->addFrontMessage(new FrontMessage(MESSAGE_TYPE_WARNING,
			$this->_i18n->getMessage('profile_changedemail_message_title'),
			$this->_i18n->getMessage('profile_changedemail_message_content')));
		}
		$columns['name'] = $parameters['realname'];
		$columns['wohnort'] = $parameters['place'];
		$columns['land'] = $parameters['country'];
		$columns['beruf'] = $parameters['occupation'];
		$columns['interessen'] = $parameters['interests'];
		$columns['lieblingsverein'] = $parameters['favorite_club'];
		$columns['homepage'] = $parameters['homepage'];
		$columns['c_hideinonlinelist'] = $parameters['c_hideinonlinelist'];
		if ($parameters['birthday']) {
			$dateObj = DateTime::createFromFormat($this->_websoccer->getConfig('date_format'), $parameters['birthday']);
			$columns['geburtstag'] = $dateObj->format('Y-m-d');
		}
		// update record
		if (count($columns)) {
			$fromTable = $this->_websoccer->getConfig('db_prefix') . '_user';
			$whereCondition = 'id = %d';
			$this->_db->queryUpdate($columns, $fromTable, $whereCondition, $user->id);
		}
		// success message
		$this->_websoccer->addFrontMessage(new FrontMessage(MESSAGE_TYPE_SUCCESS,
		$this->_i18n->getMessage('saved_message_title'), ''));
		return 'profile';
	}
}