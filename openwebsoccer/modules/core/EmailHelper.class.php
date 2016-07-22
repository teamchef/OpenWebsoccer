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
* This Version called "OpenWebsoccer" is a advanced modifikation
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
SEC;
class EmailHelper
{
	FUNCTION sendSystemEmailFromTemplate(WebSoccer $websoccer,I18n $i18n,$recipient,$subject,$templateName,$parameters)
	{
		$emailTemplateEngine = new TemplateEngine($websoccer,$i18n,null);
		$template = $emailTemplateEngine->loadTemplate('emails/' . $templateName);
		$content = $template->render($parameters);
		self::sendSystemEmail($websoccer,$recipient,$subject,$content);
	}
	FUNCTION sendSystemEmail(WebSoccer $websoccer,$recipient,$subject,$content)
	{
		$fromName = $websoccer->getConfig('projectname');
		$fromEmail = $websoccer->getConfig('systememail');
		$headers   = array();
		$headers[] = 'Content-type: text/plain; charset = \'UTF-8\'';
		$headers[] = 'From: '. $fromName .' <'. $fromEmail . '>';
		$encodedsubject = '=?UTF-8?B?'.base64_encode($subject).'?=';
		if (@mail($recipient,$encodedsubject,$content,implode("\r\n",$headers)) == FALSE) {
			throw new Exception('e-mail not sent.');
		}
	}
}
