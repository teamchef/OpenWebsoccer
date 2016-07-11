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
class RegisterFormModel extends BaseModel
{
	FUNCTION getTemplateParameters()
	{
		if (!$this->_websoccer->getConfig('allow_userregistration')) {
			throw new Exception($this->_i18n->getMessage('registration_disabled'));
		}
		$parameters = [];
		if ($this->_websoccer->getConfig('register_use_captcha')
			&& strlen($this->_websoccer->getConfig('register_captcha_publickey'))
			&& strlen($this->_websoccer->getConfig('register_captcha_privatekey'))
		) {
			include_once(ROOT . '/lib/recaptcha/recaptchalib.php');
			// support SSL
			$useSsl = (!empty($_SERVER['HTTPS']));
			$captchaCode = recaptcha_get_html($this->_websoccer->getConfig('register_captcha_publickey'), null, $useSsl);
			$parameters['captchaCode'] = $captchaCode;
		}
		return $parameters;
	}
}