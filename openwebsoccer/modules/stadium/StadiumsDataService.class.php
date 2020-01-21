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
* Base Version: OpenWebSoccer-Sim 5.2.4-Snapshot vom 21. Juni
*
* This Version called "OpenWebsoccer" is a advanced modification
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
SEC;
class StadiumsDataService {

	FUNCTION getStadiumByTeamId(WebSoccer $websoccer,DbConnection $db,$clubId)
	{
		if (!$clubId) {
			return NULL;
		}
		$columns["S.id"] = "stadium_id";
		$columns["S.name"] = "name";
		$columns["S.picture"] = "picture";
		$columns["S.p_steh"] = "places_stands";
		$columns["S.p_sitz"] = "places_seats";
		$columns["S.p_haupt_steh"] = "places_stands_grand";
		$columns["S.p_haupt_sitz"] = "places_seats_grand";
		$columns["S.p_vip"] = "places_vip";
		$columns["S.level_pitch"] = "level_pitch";
		$columns["S.level_videowall"] = "level_videowall";
		$columns["S.level_seatsquality"] = "level_seatsquality";
		$columns["S.level_vipquality"] = "level_vipquality";
		$fromTable = $websoccer->getConfig("db_prefix") . "_stadion AS S";
		$fromTable .= " INNER JOIN " . $websoccer->getConfig("db_prefix") . "_verein AS T ON T.stadion_id = S.id";
		$whereCondition = "T.id = %d";
		$result = $db->querySelect($columns,$fromTable,$whereCondition,$clubId,1);
		$stadium = $result->fetch_array();
		$result->free();
		return $stadium;
	}
	FUNCTION getBuilderOffersForExtension(WebSoccer $websoccer,DbConnection $db,$clubId,$newSideStanding = 0,$newSideSeats = 0,$newGrandStanding = 0,$newGrandSeats = 0,$newVips = 0)
	{
		$offers = array();
		$totalNew = $newSideStanding + $newSideSeats + $newGrandStanding + $newGrandSeats + $newVips;
		if (!$totalNew) {
			return $offers;
		}
		$stadium = self::getStadiumByTeamId($websoccer,$db,$clubId);
		$existingCapacity = $stadium["places_stands"] + $stadium["places_seats"] + $stadium["places_stands_grand"] + $stadium["places_seats_grand"] + $stadium["places_vip"];
		// query builders and calculate offers
		$result = $db->querySelect("*",$websoccer->getConfig("db_prefix") . "_stadium_builder",
				"min_stadium_size <= %d AND (max_stadium_size = 0 OR max_stadium_size >= %d)",
				array($existingCapacity,$existingCapacity));
		while ($builder = $result->fetch_array()) {
			$constructionTime = max($builder["construction_time_days_min"],
					$builder["construction_time_days"] * ceil($totalNew / 5000));
			$costsPerSeat = $builder["cost_per_seat"];
			$costsSideStanding = $newSideStanding * ($websoccer->getConfig("stadium_cost_standing") + $costsPerSeat);
			$costsSideSeats = $newSideSeats * ($websoccer->getConfig("stadium_cost_seats") + $costsPerSeat);
			$costsGrandStanding = $newGrandStanding * ($websoccer->getConfig("stadium_cost_standing_grand") + $costsPerSeat);
			$costsGrandSeats = $newGrandSeats * ($websoccer->getConfig("stadium_cost_seats_grand") + $costsPerSeat);
			$costsVip = $newVips * ($websoccer->getConfig("stadium_cost_vip") + $costsPerSeat);
			$offer = array(
						"builder_id" => $builder["id"],
						"builder_name" => $builder["name"],
						"builder_picture" => $builder["picture"],
						"builder_premiumfee" => $builder["premiumfee"],
						"deadline" => $websoccer->getNowAsTimestamp() + $constructionTime * 24 * 3600,
						"deadline_days" => $constructionTime,
						"reliability" => $builder["reliability"],
						"fixedcosts" => $builder["fixedcosts"],
						"costsSideStanding" => $costsSideStanding,
						"costsSideSeats" => $costsSideSeats,
						"costsGrandStanding" => $costsGrandStanding,
						"costsGrandSeats" => $costsGrandSeats,
						"costsVip" => $costsVip,
						"totalCosts" => $builder["fixedcosts"] + $costsSideStanding + $costsSideSeats + $costsGrandStanding + $costsGrandSeats + $costsVip
					);
			$offers[$builder["id"]] = $offer;
		}
		$result->free();
		return $offers;
	}
	FUNCTION getCurrentConstructionOrderOfTeam(WebSoccer $websoccer,DbConnection $db,$clubId)
	{
		$fromTable = $websoccer->getConfig("db_prefix") . "_stadium_construction AS C";
		$fromTable .= " INNER JOIN " . $websoccer->getConfig("db_prefix") . "_stadium_builder AS B ON B.id = C.builder_id";
		$result = $db->querySelect("C.*,B.name AS builder_name,B.reliability AS builder_reliability",$fromTable,"C.team_id = %d",$clubId);
		$order = $result->fetch_array();
		$result->free();
		if ($order) {
			return $order;
		} else {
			return NULL;
		}
	}
	FUNCTION getDueConstructionOrders(WebSoccer $websoccer,DbConnection $db)
	{
		$fromTable = $websoccer->getConfig("db_prefix") . "_stadium_construction AS C";
		$fromTable .= " INNER JOIN " . $websoccer->getConfig("db_prefix") . "_stadium_builder AS B ON B.id = C.builder_id";
		$fromTable .= " INNER JOIN " . $websoccer->getConfig("db_prefix") . "_verein AS T ON T.id = C.team_id";
		$result = $db->querySelect("C.*,T.user_id AS user_id,B.reliability AS builder_reliability",$fromTable,"C.deadline <= %d",
				$websoccer->getNowAsTimestamp());
		$orders = array();
		while ($order = $result->fetch_array()) {
			$orders[] = $order;
		}
		$result->free();
		return $orders;
	}
	FUNCTION computeUpgradeCosts(WebSoccer $websoccer,$type,$stadium)
	{
		$existingLevel = $stadium["level_" . $type];
		if ($existingLevel >= 5) {
			return NULL;
		}
		$baseCost = $websoccer->getConfig("stadium_". $type . "_price");
		// costs per seat
		if ($type == "seatsquality") {
			$baseCost = $baseCost * ($stadium["places_seats"] + $stadium["places_seats_grand"]);
		} elseif ($type == "vipquality") {
			$baseCost = $baseCost * $stadium["places_vip"];
		}
		// additional charge for levels > 1
		$additionFactor = $websoccer->getConfig("stadium_maintenance_priceincrease_per_level") * $existingLevel / 100;
		return round($baseCost + $baseCost * $additionFactor);
	}
}
