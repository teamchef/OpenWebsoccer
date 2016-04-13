<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */


/**
 * The "achievements" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesManagementService = new Google_GamesManagementService(...);
 *   $achievements = $gamesManagementService->achievements;
 *  </code>
 */
class Google_AchievementsServiceResource extends Google_ServiceResource
{

    /**
     * Resets the achievement with the given ID. This method is only accessible to whitelisted tester
     * accounts for your application. (achievements.reset)
     *
     * @param string $achievementId The ID of the achievement used by this method.
     * @param array $optParams Optional parameters.
     * @return Google_AchievementResetResponse
     * @throws Google_Exception
     */
    public function reset($achievementId, $optParams = [])
    {
        $params = ['achievementId' => $achievementId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('reset', [$params]);
        if ($this->useObjects()) {
            return new Google_AchievementResetResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Resets all achievements for the currently authenticated player for your application. This method
     * is only accessible to whitelisted tester accounts for your application. (achievements.resetAll)
     *
     * @param array $optParams Optional parameters.
     * @return Google_AchievementResetAllResponse
     * @throws Google_Exception
     */
    public function resetAll($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('resetAll', [$params]);
        if ($this->useObjects()) {
            return new Google_AchievementResetAllResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "applications" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesManagementService = new Google_GamesManagementService(...);
 *   $applications = $gamesManagementService->applications;
 *  </code>
 */
class Google_ApplicationsServiceResource extends Google_ServiceResource
{

    /**
     * Get the list of players hidden from the given application. This method is only available to user
     * accounts for your developer console. (applications.listHidden)
     *
     * @param string $applicationId The application being requested.
     * @param array $optParams Optional parameters.
     * @return Google_HiddenPlayerList
     * @throws Google_Exception
     * @opt_param int maxResults The maximum number of player resources to return in the response, used for paging. For any response, the actual number of player resources returned may be less than the specified maxResults.
     * @opt_param string pageToken The token returned by the previous request.
     */
    public function listHidden($applicationId, $optParams = [])
    {
        $params = ['applicationId' => $applicationId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('listHidden', [$params]);
        if ($this->useObjects()) {
            return new Google_HiddenPlayerList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "players" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesManagementService = new Google_GamesManagementService(...);
 *   $players = $gamesManagementService->players;
 *  </code>
 */
class Google_PlayersServiceResource extends Google_ServiceResource
{

    /**
     * Hide the given player's leaderboard scores from the given application. This method is only
     * available to user accounts for your developer console. (players.hide)
     *
     * @param string $applicationId The application being requested.
     * @param string $playerId A player ID. A value of me may be used in place of the authenticated player's ID.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function hide($applicationId, $playerId, $optParams = [])
    {
        $params = ['applicationId' => $applicationId, 'playerId' => $playerId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('hide', [$params]);
        return $data;
    }

    /**
     * Unhide the given player's leaderboard scores from the given application. This method is only
     * available to user accounts for your developer console. (players.unhide)
     *
     * @param string $applicationId The application being requested.
     * @param string $playerId A player ID. A value of me may be used in place of the authenticated player's ID.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function unhide($applicationId, $playerId, $optParams = [])
    {
        $params = ['applicationId' => $applicationId, 'playerId' => $playerId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('unhide', [$params]);
        return $data;
    }
}

/**
 * The "rooms" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesManagementService = new Google_GamesManagementService(...);
 *   $rooms = $gamesManagementService->rooms;
 *  </code>
 */
class Google_RoomsServiceResource extends Google_ServiceResource
{

    /**
     * Reset all rooms for the currently authenticated player for your application. This method is only
     * accessible to whitelisted tester accounts for your application. (rooms.reset)
     *
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function reset($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('reset', [$params]);
        return $data;
    }
}

/**
 * The "scores" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesManagementService = new Google_GamesManagementService(...);
 *   $scores = $gamesManagementService->scores;
 *  </code>
 */
class Google_ScoresServiceResource extends Google_ServiceResource
{

    /**
     * Reset scores for the specified leaderboard, resetting the leaderboard to empty. This method is
     * only accessible to whitelisted tester accounts for your application. (scores.reset)
     *
     * @param string $leaderboardId The ID of the leaderboard.
     * @param array $optParams Optional parameters.
     * @return Google_PlayerScoreResetResponse
     * @throws Google_Exception
     */
    public function reset($leaderboardId, $optParams = [])
    {
        $params = ['leaderboardId' => $leaderboardId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('reset', [$params]);
        if ($this->useObjects()) {
            return new Google_PlayerScoreResetResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_GamesManagement (v1management).
 *
 * <p>
 * The Management API for Google Play Game Services.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/games/services" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_GamesManagementService extends Google_Service
{
    /**
     * @var Google_AchievementsServiceResource
     */
    public $achievements;
    /**
     * @var Google_ApplicationsServiceResource
     */
    public $applications;
    /**
     * @var Google_PlayersServiceResource
     */
    public $players;
    /**
     * @var Google_RoomsServiceResource
     */
    public $rooms;
    /**
     * @var Google_ScoresServiceResource
     */
    public $scores;

    /**
     * Constructs the internal representation of the GamesManagement service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'games/v1management/';
        $this->version = 'v1management';
        $this->serviceName = 'gamesManagement';

        $client->addService($this->serviceName, $this->version);
        $this->achievements = new Google_AchievementsServiceResource($this, $this->serviceName, 'achievements', json_decode('{"methods": {"reset": {"id": "gamesManagement.achievements.reset", "path": "achievements/{achievementId}/reset", "httpMethod": "POST", "parameters": {"achievementId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "AchievementResetResponse"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "resetAll": {"id": "gamesManagement.achievements.resetAll", "path": "achievements/reset", "httpMethod": "POST", "response": {"$ref": "AchievementResetAllResponse"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}}}', true));
        $this->applications = new Google_ApplicationsServiceResource($this, $this->serviceName, 'applications', json_decode('{"methods": {"listHidden": {"id": "gamesManagement.applications.listHidden", "path": "applications/{applicationId}/players/hidden", "httpMethod": "GET", "parameters": {"applicationId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "1", "maximum": "15", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "HiddenPlayerList"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}}}', true));
        $this->players = new Google_PlayersServiceResource($this, $this->serviceName, 'players', json_decode('{"methods": {"hide": {"id": "gamesManagement.players.hide", "path": "applications/{applicationId}/players/hidden/{playerId}", "httpMethod": "POST", "parameters": {"applicationId": {"type": "string", "required": true, "location": "path"}, "playerId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "unhide": {"id": "gamesManagement.players.unhide", "path": "applications/{applicationId}/players/hidden/{playerId}", "httpMethod": "DELETE", "parameters": {"applicationId": {"type": "string", "required": true, "location": "path"}, "playerId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}}}', true));
        $this->rooms = new Google_RoomsServiceResource($this, $this->serviceName, 'rooms', json_decode('{"methods": {"reset": {"id": "gamesManagement.rooms.reset", "path": "rooms/reset", "httpMethod": "POST", "scopes": ["https://www.googleapis.com/auth/plus.login"]}}}', true));
        $this->scores = new Google_ScoresServiceResource($this, $this->serviceName, 'scores', json_decode('{"methods": {"reset": {"id": "gamesManagement.scores.reset", "path": "leaderboards/{leaderboardId}/scores/reset", "httpMethod": "POST", "parameters": {"leaderboardId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "PlayerScoreResetResponse"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}}}', true));

    }
}


/**
 * Class Google_AchievementResetAllResponse
 */
class Google_AchievementResetAllResponse extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__resultsType = 'Google_AchievementResetResponse';
    /**
     * @var string
     */
    protected $__resultsDataType = 'array';
    /**
     * @var
     */
    public $results;

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param $results
     * @throws Google_Exception
     */
    public function setResults(/* array(Google_AchievementResetResponse) */
        $results)
    {
        $this->assertIsArray($results, 'Google_AchievementResetResponse', __METHOD__);
        $this->results = $results;
    }

    /**
     * @return mixed
     */
    public function getResults()
    {
        return $this->results;
    }
}

/**
 * Class Google_AchievementResetResponse
 */
class Google_AchievementResetResponse extends Google_Model
{
    /**
     * @var
     */
    public $currentState;
    /**
     * @var
     */
    public $definitionId;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $updateOccurred;

    /**
     * @param $currentState
     */
    public function setCurrentState($currentState)
    {
        $this->currentState = $currentState;
    }

    /**
     * @return mixed
     */
    public function getCurrentState()
    {
        return $this->currentState;
    }

    /**
     * @param $definitionId
     */
    public function setDefinitionId($definitionId)
    {
        $this->definitionId = $definitionId;
    }

    /**
     * @return mixed
     */
    public function getDefinitionId()
    {
        return $this->definitionId;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param $updateOccurred
     */
    public function setUpdateOccurred($updateOccurred)
    {
        $this->updateOccurred = $updateOccurred;
    }

    /**
     * @return mixed
     */
    public function getUpdateOccurred()
    {
        return $this->updateOccurred;
    }
}

/**
 * Class Google_HiddenPlayer
 */
class Google_HiddenPlayer extends Google_Model
{
    /**
     * @var
     */
    public $hiddenTimeMillis;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__playerType = 'Google_Player';
    /**
     * @var string
     */
    protected $__playerDataType = '';
    /**
     * @var
     */
    public $player;

    /**
     * @param $hiddenTimeMillis
     */
    public function setHiddenTimeMillis($hiddenTimeMillis)
    {
        $this->hiddenTimeMillis = $hiddenTimeMillis;
    }

    /**
     * @return mixed
     */
    public function getHiddenTimeMillis()
    {
        return $this->hiddenTimeMillis;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param Google_Player $player
     */
    public function setPlayer(Google_Player $player)
    {
        $this->player = $player;
    }

    /**
     * @return mixed
     */
    public function getPlayer()
    {
        return $this->player;
    }
}

/**
 * Class Google_HiddenPlayerList
 */
class Google_HiddenPlayerList extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_HiddenPlayer';
    /**
     * @var string
     */
    protected $__itemsDataType = 'array';
    /**
     * @var
     */
    public $items;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $nextPageToken;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_HiddenPlayer) */
        $items)
    {
        $this->assertIsArray($items, 'Google_HiddenPlayer', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param $nextPageToken
     */
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
}

/**
 * Class Google_Player
 */
class Google_Player extends Google_Model
{
    /**
     * @var
     */
    public $avatarImageUrl;
    /**
     * @var
     */
    public $displayName;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $playerId;

    /**
     * @param $avatarImageUrl
     */
    public function setAvatarImageUrl($avatarImageUrl)
    {
        $this->avatarImageUrl = $avatarImageUrl;
    }

    /**
     * @return mixed
     */
    public function getAvatarImageUrl()
    {
        return $this->avatarImageUrl;
    }

    /**
     * @param $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param $playerId
     */
    public function setPlayerId($playerId)
    {
        $this->playerId = $playerId;
    }

    /**
     * @return mixed
     */
    public function getPlayerId()
    {
        return $this->playerId;
    }
}

/**
 * Class Google_PlayerScoreResetResponse
 */
class Google_PlayerScoreResetResponse extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $resetScoreTimeSpans;

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param $resetScoreTimeSpans
     * @throws Google_Exception
     */
    public function setResetScoreTimeSpans(/* array(Google_string) */
        $resetScoreTimeSpans)
    {
        $this->assertIsArray($resetScoreTimeSpans, 'Google_string', __METHOD__);
        $this->resetScoreTimeSpans = $resetScoreTimeSpans;
    }

    /**
     * @return mixed
     */
    public function getResetScoreTimeSpans()
    {
        return $this->resetScoreTimeSpans;
    }
}
