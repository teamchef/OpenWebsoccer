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
include('antiflood.php');
$sapi_type = php_sapi_name();if (!substr($sapi_type,0,3) == 'cgi') include('/lib/iosec/iosec.php');
/*
* Calls an action and/or renders a block. Accepts request parameters:
* 		action: ID of action to execute.
* 		block: ID of block to render.
* 		contentonly: If "1",not a JSON string,but the rendered block will be printed.
*
* Result is by default a JSON string with an object having two properties: messages (front messages); content (HTML to display).
* However,if request parameter "contentonly=1" is provided,then only the HTML to display will be delivered.
*/
define('OpenWebsoccer',TRUE);
// Sicherheit: erlaubt keinen direkten Aufruf eines Ajax-Request
// direkter Aufruf des Ajax-Requests unterbinden und zur Einstiegsseite leiten
// in die geschützten PHP-Scripte muss folgendes oben im Script stehen:
// defined('OpenWebsoccer') or header('location: index.php');
define('ROOT',$_SERVER['DOCUMENT_ROOT']. dirname($_SERVER['PHP_SELF']));
require(ROOT . '/frontbase.inc.php');
$website->setAjaxRequest(TRUE);
$output['messages'] = '';
$output['content'] = '';
header('Content-type: application/json; charset=utf-8');
// do not provide anything in offline mode
if ($website->getConfig('offline') !== 'offline'){
	$parameters = array();
	$validationMessages = null;
	// handle action
	$actionId = $website->getRequestParameter(PARAM_ACTION);
	if ($actionId !== NULL) {
		try {
			ActionHandler::handleAction($website,$db,$i18n,$actionId);
		} catch (ValidationException $ve) {
			$validationMessages = $ve->getMessages();
			$website->addFrontMessage(new FrontMessage(MESSAGE_TYPE_ERROR,
					$i18n->getMessage('validation_error_box_title'),
					$i18n->getMessage('validation_error_box_message')));
		} catch (Exception $e) {
			$website->addFrontMessage(new FrontMessage(MESSAGE_TYPE_ERROR,
					$i18n->getMessage('errorpage_title'),
					$e->getMessage()));
		}
	}
	$viewHandler = new ViewHandler($website,$db,$i18n,$page,$block,$validationMessages);
	try {
		// get and render target block
		$blockId = $website->getRequestParameter(PARAM_BLOCK);
		if (strlen($blockId) && isset($block[$blockId])) {
			$output['content'] = $viewHandler->renderBlock($blockId,json_decode($block[$blockId],TRUE),$parameters);
		} else {
			// get and render page
			$pageId = $website->getRequestParameter(PARAM_PAGE);
			if ($pageId != null) {
				$website->setPageId($pageId);
				$output['content'] = $viewHandler->handlePage($pageId,$parameters);
			}
		}
	} catch (Exception $e) {
		$website->addFrontMessage(new FrontMessage(MESSAGE_TYPE_ERROR,
				$i18n->getMessage('errorpage_title'),
				$e->getMessage()));
		$output['messages'] = $e->getMessage();
	}
}
if ($website->getRequestParameter('contentonly')) {
	echo $output['content'];
} else {
	$output['messages'] = $viewHandler->renderBlock('messagesblock',json_decode($block['messagesblock'],TRUE));
	echo json_encode($output);
}
