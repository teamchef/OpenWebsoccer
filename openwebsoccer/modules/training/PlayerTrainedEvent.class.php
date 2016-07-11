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
class PlayerTrainedEvent extends AbstractEvent
{
	/**
	 * @var int ID of player.
	 */
	public $playerId;
	/**
	 * @var int ID of team.
	 */
	public $teamId;
	/**
	 * @var int ID of trainer.
	 */
	public $trainerId;
	/**
	 * @var reference reference to integer indicating training effect of attribute freshness.
	 */
	public $effectFreshness;
	/**
	 * @var reference reference to integer indicating training effect of attribute technique.
	 */
	public $effectTechnique;
	/**
	 * @var reference reference to integer indicating training effect of attribute stamina.
	 */
	public $effectStamina;
	/**
	 * @var reference reference to integer indicating training effect of attribute satisfaction.
	 */
	public $effectSatisfaction;
	FUNCTION __construct(WebSoccer $websoccer, DbConnection $db, I18n $i18n,
			$playerId, $teamId, $trainerId,
			&$effectFreshness, &$effectTechnique, &$effectStamina, &$effectSatisfaction)
	{
		parent::__construct($websoccer, $db, $i18n);
		$this->playerId = $playerId;
		$this->teamId = $teamId;
		$this->trainerId = $trainerId;
		$this->effectFreshness =& $effectFreshness;
		$this->effectTechnique =& $effectTechnique;
		$this->effectStamina =& $effectStamina;
		$this->effectSatisfaction =& $effectSatisfaction;
	}
}
