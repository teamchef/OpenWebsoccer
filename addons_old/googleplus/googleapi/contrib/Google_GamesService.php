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
 * The "achievementDefinitions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_GamesService(...);
 *   $achievementDefinitions = $gamesService->achievementDefinitions;
 *  </code>
 */
class Google_AchievementDefinitionsServiceResource extends Google_ServiceResource
{

    /**
     * Lists all the achievement definitions for your application. (achievementDefinitions.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_AchievementDefinitionsListResponse
     * @throws Google_Exception
     * @opt_param string language The preferred language to use for strings returned by this method.
     * @opt_param int maxResults The maximum number of achievement resources to return in the response, used for paging. For any response, the actual number of achievement resources returned may be less than the specified maxResults.
     * @opt_param string pageToken The token returned by the previous request.
     */
    public function listAchievementDefinitions($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_AchievementDefinitionsListResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "achievements" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_GamesService(...);
 *   $achievements = $gamesService->achievements;
 *  </code>
 */
class Google_AchievementsServiceResource extends Google_ServiceResource
{

    /**
     * Increments the steps of the achievement with the given ID for the currently authenticated player.
     * (achievements.increment)
     *
     * @param string $achievementId The ID of the achievement used by this method.
     * @param int $stepsToIncrement The number of steps to increment.
     * @param array $optParams Optional parameters.
     * @return Google_AchievementIncrementResponse
     * @throws Google_Exception
     * @opt_param string requestId A randomly generated numeric ID for each request specified by the caller. This number is used at the server to ensure that the increment is performed correctly across retries.
     */
    public function increment($achievementId, $stepsToIncrement, $optParams = [])
    {
        $params = ['achievementId' => $achievementId, 'stepsToIncrement' => $stepsToIncrement];
        $params = array_merge($params, $optParams);
        $data = $this->__call('increment', [$params]);
        if ($this->useObjects()) {
            return new Google_AchievementIncrementResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists the progress for all your application's achievements for the currently authenticated
     * player. (achievements.list)
     *
     * @param string $playerId A player ID. A value of me may be used in place of the authenticated player's ID.
     * @param array $optParams Optional parameters.
     * @return Google_PlayerAchievementListResponse
     * @throws Google_Exception
     * @opt_param string language The preferred language to use for strings returned by this method.
     * @opt_param int maxResults The maximum number of achievement resources to return in the response, used for paging. For any response, the actual number of achievement resources returned may be less than the specified maxResults.
     * @opt_param string pageToken The token returned by the previous request.
     * @opt_param string state Tells the server to return only achievements with the specified state. If this parameter isn't specified, all achievements are returned.
     */
    public function listAchievements($playerId, $optParams = [])
    {
        $params = ['playerId' => $playerId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_PlayerAchievementListResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Sets the state of the achievement with the given ID to REVEALED for the currently authenticated
     * player. (achievements.reveal)
     *
     * @param string $achievementId The ID of the achievement used by this method.
     * @param array $optParams Optional parameters.
     * @return Google_AchievementRevealResponse
     * @throws Google_Exception
     */
    public function reveal($achievementId, $optParams = [])
    {
        $params = ['achievementId' => $achievementId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('reveal', [$params]);
        if ($this->useObjects()) {
            return new Google_AchievementRevealResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Unlocks this achievement for the currently authenticated player. (achievements.unlock)
     *
     * @param string $achievementId The ID of the achievement used by this method.
     * @param array $optParams Optional parameters.
     * @return Google_AchievementUnlockResponse
     * @throws Google_Exception
     */
    public function unlock($achievementId, $optParams = [])
    {
        $params = ['achievementId' => $achievementId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('unlock', [$params]);
        if ($this->useObjects()) {
            return new Google_AchievementUnlockResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "applications" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_GamesService(...);
 *   $applications = $gamesService->applications;
 *  </code>
 */
class Google_ApplicationsServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves the metadata of the application with the given ID. If the requested application is not
     * available for the specified platformType, the returned response will not include any instance
     * data. (applications.get)
     *
     * @param string $applicationId The application being requested.
     * @param array $optParams Optional parameters.
     * @return Google_Application
     * @throws Google_Exception
     * @opt_param string language The preferred language to use for strings returned by this method.
     * @opt_param string platformType Restrict application details returned to the specific platform.
     */
    public function get($applicationId, $optParams = [])
    {
        $params = ['applicationId' => $applicationId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Application($data);
        } else {
            return $data;
        }
    }

    /**
     * Indicate that the the currently authenticated user is playing your application.
     * (applications.played)
     *
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function played($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('played', [$params]);
        return $data;
    }
}

/**
 * The "leaderboards" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_GamesService(...);
 *   $leaderboards = $gamesService->leaderboards;
 *  </code>
 */
class Google_LeaderboardsServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves the metadata of the leaderboard with the given ID. (leaderboards.get)
     *
     * @param string $leaderboardId The ID of the leaderboard.
     * @param array $optParams Optional parameters.
     * @return Google_Leaderboard
     * @throws Google_Exception
     * @opt_param string language The preferred language to use for strings returned by this method.
     */
    public function get($leaderboardId, $optParams = [])
    {
        $params = ['leaderboardId' => $leaderboardId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Leaderboard($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists all the leaderboard metadata for your application. (leaderboards.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_LeaderboardListResponse
     * @throws Google_Exception
     * @opt_param string language The preferred language to use for strings returned by this method.
     * @opt_param int maxResults The maximum number of leaderboards to return in the response. For any response, the actual number of leaderboards returned may be less than the specified maxResults.
     * @opt_param string pageToken The token returned by the previous request.
     */
    public function listLeaderboards($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_LeaderboardListResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "players" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_GamesService(...);
 *   $players = $gamesService->players;
 *  </code>
 */
class Google_PlayersServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves the Player resource with the given ID. To retrieve the player for the currently
     * authenticated user, set playerId to me. (players.get)
     *
     * @param string $playerId A player ID. A value of me may be used in place of the authenticated player's ID.
     * @param array $optParams Optional parameters.
     * @return Google_Player
     * @throws Google_Exception
     */
    public function get($playerId, $optParams = [])
    {
        $params = ['playerId' => $playerId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Player($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "revisions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_GamesService(...);
 *   $revisions = $gamesService->revisions;
 *  </code>
 */
class Google_RevisionsServiceResource extends Google_ServiceResource
{

    /**
     * Checks whether the games client is out of date. (revisions.check)
     *
     * @param string $clientRevision The revision of the client SDK used by your application.
     * @param array $optParams Optional parameters.
     * @return Google_RevisionCheckResponse
     * @throws Google_Exception
     */
    public function check($clientRevision, $optParams = [])
    {
        $params = ['clientRevision' => $clientRevision];
        $params = array_merge($params, $optParams);
        $data = $this->__call('check', [$params]);
        if ($this->useObjects()) {
            return new Google_RevisionCheckResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "rooms" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_GamesService(...);
 *   $rooms = $gamesService->rooms;
 *  </code>
 */
class Google_RoomsServiceResource extends Google_ServiceResource
{

    /**
     * Create a room. For internal use by the Games SDK only. Calling this method directly is
     * unsupported. (rooms.create)
     *
     * @param Google_RoomCreateRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Room
     * @throws Google_Exception
     * @opt_param string language The preferred language to use for strings returned by this method.
     */
    public function create(Google_RoomCreateRequest $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('create', [$params]);
        if ($this->useObjects()) {
            return new Google_Room($data);
        } else {
            return $data;
        }
    }

    /**
     * Decline an invitation to join a room. For internal use by the Games SDK only. Calling this method
     * directly is unsupported. (rooms.decline)
     *
     * @param string $roomId The ID of the room.
     * @param array $optParams Optional parameters.
     * @return Google_Room
     * @throws Google_Exception
     */
    public function decline($roomId, $optParams = [])
    {
        $params = ['roomId' => $roomId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('decline', [$params]);
        if ($this->useObjects()) {
            return new Google_Room($data);
        } else {
            return $data;
        }
    }

    /**
     * Dismiss an invitation to join a room. For internal use by the Games SDK only. Calling this method
     * directly is unsupported. (rooms.dismiss)
     *
     * @param string $roomId The ID of the room.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function dismiss($roomId, $optParams = [])
    {
        $params = ['roomId' => $roomId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('dismiss', [$params]);
        return $data;
    }

    /**
     * Get the data for a room. (rooms.get)
     *
     * @param string $roomId The ID of the room.
     * @param array $optParams Optional parameters.
     * @return Google_Room
     * @throws Google_Exception
     * @opt_param string language Specify the preferred language to use to format room info.
     */
    public function get($roomId, $optParams = [])
    {
        $params = ['roomId' => $roomId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Room($data);
        } else {
            return $data;
        }
    }

    /**
     * Join a room. For internal use by the Games SDK only. Calling this method directly is unsupported.
     * (rooms.join)
     *
     * @param string $roomId The ID of the room.
     * @param Google_RoomJoinRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Room
     * @throws Google_Exception
     */
    public function join($roomId, Google_RoomJoinRequest $postBody, $optParams = [])
    {
        $params = ['roomId' => $roomId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('join', [$params]);
        if ($this->useObjects()) {
            return new Google_Room($data);
        } else {
            return $data;
        }
    }

    /**
     * Leave a room. For internal use by the Games SDK only. Calling this method directly is
     * unsupported. (rooms.leave)
     *
     * @param string $roomId The ID of the room.
     * @param Google_RoomLeaveRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Room
     * @throws Google_Exception
     */
    public function leave($roomId, Google_RoomLeaveRequest $postBody, $optParams = [])
    {
        $params = ['roomId' => $roomId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('leave', [$params]);
        if ($this->useObjects()) {
            return new Google_Room($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns invitations to join rooms. (rooms.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_RoomList
     * @throws Google_Exception
     * @opt_param string language The preferred language to use for strings returned by this method.
     * @opt_param int maxResults The maximum number of rooms to return in the response, used for paging. For any response, the actual number of rooms to return may be less than the specified maxResults.
     * @opt_param string pageToken The token returned by the previous request.
     */
    public function listRooms($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_RoomList($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates sent by a client reporting the status of peers in a room. For internal use by the Games
     * SDK only. Calling this method directly is unsupported. (rooms.reportStatus)
     *
     * @param string $roomId The ID of the room.
     * @param Google_RoomP2PStatuses $postBody
     * @param array $optParams Optional parameters.
     * @return Google_RoomStatus
     * @throws Google_Exception
     */
    public function reportStatus($roomId, Google_RoomP2PStatuses $postBody, $optParams = [])
    {
        $params = ['roomId' => $roomId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('reportStatus', [$params]);
        if ($this->useObjects()) {
            return new Google_RoomStatus($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "scores" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Google_GamesService(...);
 *   $scores = $gamesService->scores;
 *  </code>
 */
class Google_ScoresServiceResource extends Google_ServiceResource
{

    /**
     * Get high scores and optionally, ranks in leaderboards for the currently authenticated player. For
     * a specific time span, leaderboardId can be set to ALL to retrieve data for all leaderboards in a
     * given time span. (scores.get)
     *
     * @param string $playerId A player ID. A value of me may be used in place of the authenticated player's ID.
     * @param string $leaderboardId The ID of the leaderboard.
     * @param string $timeSpan The time span for the scores and ranks you're requesting.
     * @param array $optParams Optional parameters.
     * @return Google_PlayerLeaderboardScoreListResponse
     * @throws Google_Exception
     * @opt_param string includeRankType The types of ranks to return. If the parameter is omitted, no ranks will be returned.
     * @opt_param string language The preferred language to use for strings returned by this method.
     * @opt_param int maxResults The maximum number of leaderboard scores to return in the response. For any response, the actual number of leaderboard scores returned may be less than the specified maxResults.
     * @opt_param string pageToken The token returned by the previous request.
     */
    public function get($playerId, $leaderboardId, $timeSpan, $optParams = [])
    {
        $params = ['playerId' => $playerId, 'leaderboardId' => $leaderboardId, 'timeSpan' => $timeSpan];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_PlayerLeaderboardScoreListResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists the scores in a leaderboard, starting from the top. (scores.list)
     *
     * @param string $leaderboardId The ID of the leaderboard.
     * @param string $collection The collection of scores you're requesting.
     * @param string $timeSpan The time span for the scores and ranks you're requesting.
     * @param array $optParams Optional parameters.
     * @return Google_LeaderboardScores
     * @throws Google_Exception
     * @opt_param string language The preferred language to use for strings returned by this method.
     * @opt_param int maxResults The maximum number of leaderboard scores to return in the response. For any response, the actual number of leaderboard scores returned may be less than the specified maxResults.
     * @opt_param string pageToken The token returned by the previous request.
     */
    public function listScores($leaderboardId, $collection, $timeSpan, $optParams = [])
    {
        $params = ['leaderboardId' => $leaderboardId, 'collection' => $collection, 'timeSpan' => $timeSpan];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_LeaderboardScores($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists the scores in a leaderboard around (and including) a player's score. (scores.listWindow)
     *
     * @param string $leaderboardId The ID of the leaderboard.
     * @param string $collection The collection of scores you're requesting.
     * @param string $timeSpan The time span for the scores and ranks you're requesting.
     * @param array $optParams Optional parameters.
     * @return Google_LeaderboardScores
     * @throws Google_Exception
     * @opt_param string language The preferred language to use for strings returned by this method.
     * @opt_param int maxResults The maximum number of leaderboard scores to return in the response. For any response, the actual number of leaderboard scores returned may be less than the specified maxResults.
     * @opt_param string pageToken The token returned by the previous request.
     * @opt_param int resultsAbove The preferred number of scores to return above the player's score. More scores may be returned if the player is at the bottom of the leaderboard; fewer may be returned if the player is at the top. Must be less than or equal to maxResults.
     * @opt_param bool returnTopIfAbsent True if the top scores should be returned when the player is not in the leaderboard. Defaults to true.
     */
    public function listWindow($leaderboardId, $collection, $timeSpan, $optParams = [])
    {
        $params = ['leaderboardId' => $leaderboardId, 'collection' => $collection, 'timeSpan' => $timeSpan];
        $params = array_merge($params, $optParams);
        $data = $this->__call('listWindow', [$params]);
        if ($this->useObjects()) {
            return new Google_LeaderboardScores($data);
        } else {
            return $data;
        }
    }

    /**
     * Submits a score to the specified leaderboard. (scores.submit)
     *
     * @param string $leaderboardId The ID of the leaderboard.
     * @param string $score The score you're submitting. The submitted score is ignored if it is worse than a previously submitted score, where worse depends on the leaderboard sort order. The meaning of the score value depends on the leaderboard format type. For fixed-point, the score represents the raw value. For time, the score represents elapsed time in milliseconds. For currency, the score represents a value in micro units.
     * @param array $optParams Optional parameters.
     * @return Google_PlayerScoreResponse
     * @throws Google_Exception
     * @opt_param string language The preferred language to use for strings returned by this method.
     */
    public function submit($leaderboardId, $score, $optParams = [])
    {
        $params = ['leaderboardId' => $leaderboardId, 'score' => $score];
        $params = array_merge($params, $optParams);
        $data = $this->__call('submit', [$params]);
        if ($this->useObjects()) {
            return new Google_PlayerScoreResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Submits multiple scores to leaderboards. (scores.submitMultiple)
     *
     * @param Google_PlayerScoreSubmissionList $postBody
     * @param array $optParams Optional parameters.
     * @return Google_PlayerScoreListResponse
     * @throws Google_Exception
     * @opt_param string language The preferred language to use for strings returned by this method.
     */
    public function submitMultiple(Google_PlayerScoreSubmissionList $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('submitMultiple', [$params]);
        if ($this->useObjects()) {
            return new Google_PlayerScoreListResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Games (v1).
 *
 * <p>
 * The API for Google Play Game Services.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/games/services/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_GamesService extends Google_Service
{
    /**
     * @var Google_AchievementDefinitionsServiceResource
     */
    public $achievementDefinitions;
    /**
     * @var Google_AchievementsServiceResource
     */
    public $achievements;
    /**
     * @var Google_ApplicationsServiceResource
     */
    public $applications;
    /**
     * @var Google_LeaderboardsServiceResource
     */
    public $leaderboards;
    /**
     * @var Google_PlayersServiceResource
     */
    public $players;
    /**
     * @var Google_RevisionsServiceResource
     */
    public $revisions;
    /**
     * @var Google_RoomsServiceResource
     */
    public $rooms;
    /**
     * @var Google_ScoresServiceResource
     */
    public $scores;

    /**
     * Constructs the internal representation of the Games service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'games/v1/';
        $this->version = 'v1';
        $this->serviceName = 'games';

        $client->addService($this->serviceName, $this->version);
        $this->achievementDefinitions = new Google_AchievementDefinitionsServiceResource($this, $this->serviceName, 'achievementDefinitions', json_decode('{"methods": {"list": {"id": "games.achievementDefinitions.list", "path": "achievements", "httpMethod": "GET", "parameters": {"language": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "1", "maximum": "200", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AchievementDefinitionsListResponse"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}}}', true));
        $this->achievements = new Google_AchievementsServiceResource($this, $this->serviceName, 'achievements', json_decode('{"methods": {"increment": {"id": "games.achievements.increment", "path": "achievements/{achievementId}/increment", "httpMethod": "POST", "parameters": {"achievementId": {"type": "string", "required": true, "location": "path"}, "requestId": {"type": "string", "format": "int64", "location": "query"}, "stepsToIncrement": {"type": "integer", "required": true, "format": "int32", "minimum": "1", "location": "query"}}, "response": {"$ref": "AchievementIncrementResponse"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "list": {"id": "games.achievements.list", "path": "players/{playerId}/achievements", "httpMethod": "GET", "parameters": {"language": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "1", "maximum": "200", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "playerId": {"type": "string", "required": true, "location": "path"}, "state": {"type": "string", "enum": ["ALL", "HIDDEN", "REVEALED", "UNLOCKED"], "location": "query"}}, "response": {"$ref": "PlayerAchievementListResponse"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "reveal": {"id": "games.achievements.reveal", "path": "achievements/{achievementId}/reveal", "httpMethod": "POST", "parameters": {"achievementId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "AchievementRevealResponse"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "unlock": {"id": "games.achievements.unlock", "path": "achievements/{achievementId}/unlock", "httpMethod": "POST", "parameters": {"achievementId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "AchievementUnlockResponse"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}}}', true));
        $this->applications = new Google_ApplicationsServiceResource($this, $this->serviceName, 'applications', json_decode('{"methods": {"get": {"id": "games.applications.get", "path": "applications/{applicationId}", "httpMethod": "GET", "parameters": {"applicationId": {"type": "string", "required": true, "location": "path"}, "language": {"type": "string", "location": "query"}, "platformType": {"type": "string", "enum": ["ANDROID", "IOS", "WEB_APP"], "location": "query"}}, "response": {"$ref": "Application"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "played": {"id": "games.applications.played", "path": "applications/played", "httpMethod": "POST", "scopes": ["https://www.googleapis.com/auth/plus.login"]}}}', true));
        $this->leaderboards = new Google_LeaderboardsServiceResource($this, $this->serviceName, 'leaderboards', json_decode('{"methods": {"get": {"id": "games.leaderboards.get", "path": "leaderboards/{leaderboardId}", "httpMethod": "GET", "parameters": {"language": {"type": "string", "location": "query"}, "leaderboardId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Leaderboard"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "list": {"id": "games.leaderboards.list", "path": "leaderboards", "httpMethod": "GET", "parameters": {"language": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "1", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "LeaderboardListResponse"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}}}', true));
        $this->players = new Google_PlayersServiceResource($this, $this->serviceName, 'players', json_decode('{"methods": {"get": {"id": "games.players.get", "path": "players/{playerId}", "httpMethod": "GET", "parameters": {"playerId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Player"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}}}', true));
        $this->revisions = new Google_RevisionsServiceResource($this, $this->serviceName, 'revisions', json_decode('{"methods": {"check": {"id": "games.revisions.check", "path": "revisions/check", "httpMethod": "GET", "parameters": {"clientRevision": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "RevisionCheckResponse"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}}}', true));
        $this->rooms = new Google_RoomsServiceResource($this, $this->serviceName, 'rooms', json_decode('{"methods": {"create": {"id": "games.rooms.create", "path": "rooms/create", "httpMethod": "POST", "parameters": {"language": {"type": "string", "location": "query"}}, "request": {"$ref": "RoomCreateRequest"}, "response": {"$ref": "Room"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "decline": {"id": "games.rooms.decline", "path": "rooms/{roomId}/decline", "httpMethod": "POST", "parameters": {"roomId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Room"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "dismiss": {"id": "games.rooms.dismiss", "path": "rooms/{roomId}/dismiss", "httpMethod": "POST", "parameters": {"roomId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "get": {"id": "games.rooms.get", "path": "rooms/{roomId}", "httpMethod": "GET", "parameters": {"language": {"type": "string", "location": "query"}, "roomId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Room"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "join": {"id": "games.rooms.join", "path": "rooms/{roomId}/join", "httpMethod": "POST", "parameters": {"roomId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "RoomJoinRequest"}, "response": {"$ref": "Room"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "leave": {"id": "games.rooms.leave", "path": "rooms/{roomId}/leave", "httpMethod": "POST", "parameters": {"roomId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "RoomLeaveRequest"}, "response": {"$ref": "Room"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "list": {"id": "games.rooms.list", "path": "rooms", "httpMethod": "GET", "parameters": {"language": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "1", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "RoomList"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "reportStatus": {"id": "games.rooms.reportStatus", "path": "rooms/{roomId}/reportstatus", "httpMethod": "POST", "parameters": {"roomId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "RoomP2PStatuses"}, "response": {"$ref": "RoomStatus"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}}}', true));
        $this->scores = new Google_ScoresServiceResource($this, $this->serviceName, 'scores', json_decode('{"methods": {"get": {"id": "games.scores.get", "path": "players/{playerId}/leaderboards/{leaderboardId}/scores/{timeSpan}", "httpMethod": "GET", "parameters": {"includeRankType": {"type": "string", "enum": ["ALL", "PUBLIC", "SOCIAL"], "location": "query"}, "language": {"type": "string", "location": "query"}, "leaderboardId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "1", "maximum": "25", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "playerId": {"type": "string", "required": true, "location": "path"}, "timeSpan": {"type": "string", "required": true, "enum": ["ALL", "ALL_TIME", "DAILY", "WEEKLY"], "location": "path"}}, "response": {"$ref": "PlayerLeaderboardScoreListResponse"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "list": {"id": "games.scores.list", "path": "leaderboards/{leaderboardId}/scores/{collection}", "httpMethod": "GET", "parameters": {"collection": {"type": "string", "required": true, "enum": ["PUBLIC", "SOCIAL"], "location": "path"}, "language": {"type": "string", "location": "query"}, "leaderboardId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "1", "maximum": "25", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "timeSpan": {"type": "string", "required": true, "enum": ["ALL_TIME", "DAILY", "WEEKLY"], "location": "query"}}, "response": {"$ref": "LeaderboardScores"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "listWindow": {"id": "games.scores.listWindow", "path": "leaderboards/{leaderboardId}/window/{collection}", "httpMethod": "GET", "parameters": {"collection": {"type": "string", "required": true, "enum": ["PUBLIC", "SOCIAL"], "location": "path"}, "language": {"type": "string", "location": "query"}, "leaderboardId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "1", "maximum": "25", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "resultsAbove": {"type": "integer", "format": "int32", "location": "query"}, "returnTopIfAbsent": {"type": "boolean", "location": "query"}, "timeSpan": {"type": "string", "required": true, "enum": ["ALL_TIME", "DAILY", "WEEKLY"], "location": "query"}}, "response": {"$ref": "LeaderboardScores"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "submit": {"id": "games.scores.submit", "path": "leaderboards/{leaderboardId}/scores", "httpMethod": "POST", "parameters": {"language": {"type": "string", "location": "query"}, "leaderboardId": {"type": "string", "required": true, "location": "path"}, "score": {"type": "string", "required": true, "format": "int64", "location": "query"}}, "response": {"$ref": "PlayerScoreResponse"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "submitMultiple": {"id": "games.scores.submitMultiple", "path": "leaderboards/scores", "httpMethod": "POST", "parameters": {"language": {"type": "string", "location": "query"}}, "request": {"$ref": "PlayerScoreSubmissionList"}, "response": {"$ref": "PlayerScoreListResponse"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}}}', true));

    }
}


/**
 * Class Google_AchievementDefinition
 */
class Google_AchievementDefinition extends Google_Model
{
    /**
     * @var
     */
    public $achievementType;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $formattedTotalSteps;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $initialState;
    /**
     * @var
     */
    public $isRevealedIconUrlDefault;
    /**
     * @var
     */
    public $isUnlockedIconUrlDefault;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $revealedIconUrl;
    /**
     * @var
     */
    public $totalSteps;
    /**
     * @var
     */
    public $unlockedIconUrl;

    /**
     * @param $achievementType
     */
    public function setAchievementType($achievementType)
    {
        $this->achievementType = $achievementType;
    }

    /**
     * @return mixed
     */
    public function getAchievementType()
    {
        return $this->achievementType;
    }

    /**
     * @param $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $formattedTotalSteps
     */
    public function setFormattedTotalSteps($formattedTotalSteps)
    {
        $this->formattedTotalSteps = $formattedTotalSteps;
    }

    /**
     * @return mixed
     */
    public function getFormattedTotalSteps()
    {
        return $this->formattedTotalSteps;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $initialState
     */
    public function setInitialState($initialState)
    {
        $this->initialState = $initialState;
    }

    /**
     * @return mixed
     */
    public function getInitialState()
    {
        return $this->initialState;
    }

    /**
     * @param $isRevealedIconUrlDefault
     */
    public function setIsRevealedIconUrlDefault($isRevealedIconUrlDefault)
    {
        $this->isRevealedIconUrlDefault = $isRevealedIconUrlDefault;
    }

    /**
     * @return mixed
     */
    public function getIsRevealedIconUrlDefault()
    {
        return $this->isRevealedIconUrlDefault;
    }

    /**
     * @param $isUnlockedIconUrlDefault
     */
    public function setIsUnlockedIconUrlDefault($isUnlockedIconUrlDefault)
    {
        $this->isUnlockedIconUrlDefault = $isUnlockedIconUrlDefault;
    }

    /**
     * @return mixed
     */
    public function getIsUnlockedIconUrlDefault()
    {
        return $this->isUnlockedIconUrlDefault;
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
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $revealedIconUrl
     */
    public function setRevealedIconUrl($revealedIconUrl)
    {
        $this->revealedIconUrl = $revealedIconUrl;
    }

    /**
     * @return mixed
     */
    public function getRevealedIconUrl()
    {
        return $this->revealedIconUrl;
    }

    /**
     * @param $totalSteps
     */
    public function setTotalSteps($totalSteps)
    {
        $this->totalSteps = $totalSteps;
    }

    /**
     * @return mixed
     */
    public function getTotalSteps()
    {
        return $this->totalSteps;
    }

    /**
     * @param $unlockedIconUrl
     */
    public function setUnlockedIconUrl($unlockedIconUrl)
    {
        $this->unlockedIconUrl = $unlockedIconUrl;
    }

    /**
     * @return mixed
     */
    public function getUnlockedIconUrl()
    {
        return $this->unlockedIconUrl;
    }
}

/**
 * Class Google_AchievementDefinitionsListResponse
 */
class Google_AchievementDefinitionsListResponse extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_AchievementDefinition';
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
    public function setItems(/* array(Google_AchievementDefinition) */
        $items)
    {
        $this->assertIsArray($items, 'Google_AchievementDefinition', __METHOD__);
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
 * Class Google_AchievementIncrementResponse
 */
class Google_AchievementIncrementResponse extends Google_Model
{
    /**
     * @var
     */
    public $currentSteps;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $newlyUnlocked;

    /**
     * @param $currentSteps
     */
    public function setCurrentSteps($currentSteps)
    {
        $this->currentSteps = $currentSteps;
    }

    /**
     * @return mixed
     */
    public function getCurrentSteps()
    {
        return $this->currentSteps;
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
     * @param $newlyUnlocked
     */
    public function setNewlyUnlocked($newlyUnlocked)
    {
        $this->newlyUnlocked = $newlyUnlocked;
    }

    /**
     * @return mixed
     */
    public function getNewlyUnlocked()
    {
        return $this->newlyUnlocked;
    }
}

/**
 * Class Google_AchievementRevealResponse
 */
class Google_AchievementRevealResponse extends Google_Model
{
    /**
     * @var
     */
    public $currentState;
    /**
     * @var
     */
    public $kind;

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
}

/**
 * Class Google_AchievementUnlockResponse
 */
class Google_AchievementUnlockResponse extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $newlyUnlocked;

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
     * @param $newlyUnlocked
     */
    public function setNewlyUnlocked($newlyUnlocked)
    {
        $this->newlyUnlocked = $newlyUnlocked;
    }

    /**
     * @return mixed
     */
    public function getNewlyUnlocked()
    {
        return $this->newlyUnlocked;
    }
}

/**
 * Class Google_AggregateStats
 */
class Google_AggregateStats extends Google_Model
{
    /**
     * @var
     */
    public $count;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $max;
    /**
     * @var
     */
    public $min;
    /**
     * @var
     */
    public $sum;

    /**
     * @param $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
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
     * @param $max
     */
    public function setMax($max)
    {
        $this->max = $max;
    }

    /**
     * @return mixed
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @param $min
     */
    public function setMin($min)
    {
        $this->min = $min;
    }

    /**
     * @return mixed
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * @param $sum
     */
    public function setSum($sum)
    {
        $this->sum = $sum;
    }

    /**
     * @return mixed
     */
    public function getSum()
    {
        return $this->sum;
    }
}

/**
 * Class Google_AnonymousPlayer
 */
class Google_AnonymousPlayer extends Google_Model
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

    /**
     * @return mixed
     */
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
}

/**
 * Class Google_Application
 */
class Google_Application extends Google_Model
{
    /**
     * @var
     */
    public $achievement_count;
    /**
     * @var string
     */
    protected $__assetsType = 'Google_ImageAsset';
    /**
     * @var string
     */
    protected $__assetsDataType = 'array';
    /**
     * @var
     */
    public $assets;
    /**
     * @var
     */
    public $author;
    /**
     * @var string
     */
    protected $__categoryType = 'Google_ApplicationCategory';
    /**
     * @var string
     */
    protected $__categoryDataType = '';
    /**
     * @var
     */
    public $category;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__instancesType = 'Google_Instance';
    /**
     * @var string
     */
    protected $__instancesDataType = 'array';
    /**
     * @var
     */
    public $instances;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $lastUpdatedTimestamp;
    /**
     * @var
     */
    public $leaderboard_count;
    /**
     * @var
     */
    public $name;

    /**
     * @param $achievement_count
     */
    public function setAchievement_count($achievement_count)
    {
        $this->achievement_count = $achievement_count;
    }

    /**
     * @return mixed
     */
    public function getAchievement_count()
    {
        return $this->achievement_count;
    }

    /**
     * @param $assets
     * @throws Google_Exception
     */
    public function setAssets(/* array(Google_ImageAsset) */
        $assets)
    {
        $this->assertIsArray($assets, 'Google_ImageAsset', __METHOD__);
        $this->assets = $assets;
    }

    /**
     * @return mixed
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * @param $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param Google_ApplicationCategory $category
     */
    public function setCategory(Google_ApplicationCategory $category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $instances
     * @throws Google_Exception
     */
    public function setInstances(/* array(Google_Instance) */
        $instances)
    {
        $this->assertIsArray($instances, 'Google_Instance', __METHOD__);
        $this->instances = $instances;
    }

    /**
     * @return mixed
     */
    public function getInstances()
    {
        return $this->instances;
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
     * @param $lastUpdatedTimestamp
     */
    public function setLastUpdatedTimestamp($lastUpdatedTimestamp)
    {
        $this->lastUpdatedTimestamp = $lastUpdatedTimestamp;
    }

    /**
     * @return mixed
     */
    public function getLastUpdatedTimestamp()
    {
        return $this->lastUpdatedTimestamp;
    }

    /**
     * @param $leaderboard_count
     */
    public function setLeaderboard_count($leaderboard_count)
    {
        $this->leaderboard_count = $leaderboard_count;
    }

    /**
     * @return mixed
     */
    public function getLeaderboard_count()
    {
        return $this->leaderboard_count;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

/**
 * Class Google_ApplicationCategory
 */
class Google_ApplicationCategory extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $primary;
    /**
     * @var
     */
    public $secondary;

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
     * @param $primary
     */
    public function setPrimary($primary)
    {
        $this->primary = $primary;
    }

    /**
     * @return mixed
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * @param $secondary
     */
    public function setSecondary($secondary)
    {
        $this->secondary = $secondary;
    }

    /**
     * @return mixed
     */
    public function getSecondary()
    {
        return $this->secondary;
    }
}

/**
 * Class Google_ImageAsset
 */
class Google_ImageAsset extends Google_Model
{
    /**
     * @var
     */
    public $height;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $url;
    /**
     * @var
     */
    public $width;

    /**
     * @param $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
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
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }
}

/**
 * Class Google_Instance
 */
class Google_Instance extends Google_Model
{
    /**
     * @var
     */
    public $acquisitionUri;
    /**
     * @var string
     */
    protected $__androidInstanceType = 'Google_InstanceAndroidDetails';
    /**
     * @var string
     */
    protected $__androidInstanceDataType = '';
    /**
     * @var
     */
    public $androidInstance;
    /**
     * @var string
     */
    protected $__iosInstanceType = 'Google_InstanceIosDetails';
    /**
     * @var string
     */
    protected $__iosInstanceDataType = '';
    /**
     * @var
     */
    public $iosInstance;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $platformType;
    /**
     * @var
     */
    public $realtimePlay;
    /**
     * @var
     */
    public $turnBasedPlay;
    /**
     * @var string
     */
    protected $__webInstanceType = 'Google_InstanceWebDetails';
    /**
     * @var string
     */
    protected $__webInstanceDataType = '';
    /**
     * @var
     */
    public $webInstance;

    /**
     * @param $acquisitionUri
     */
    public function setAcquisitionUri($acquisitionUri)
    {
        $this->acquisitionUri = $acquisitionUri;
    }

    /**
     * @return mixed
     */
    public function getAcquisitionUri()
    {
        return $this->acquisitionUri;
    }

    /**
     * @param Google_InstanceAndroidDetails $androidInstance
     */
    public function setAndroidInstance(Google_InstanceAndroidDetails $androidInstance)
    {
        $this->androidInstance = $androidInstance;
    }

    /**
     * @return mixed
     */
    public function getAndroidInstance()
    {
        return $this->androidInstance;
    }

    /**
     * @param Google_InstanceIosDetails $iosInstance
     */
    public function setIosInstance(Google_InstanceIosDetails $iosInstance)
    {
        $this->iosInstance = $iosInstance;
    }

    /**
     * @return mixed
     */
    public function getIosInstance()
    {
        return $this->iosInstance;
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
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $platformType
     */
    public function setPlatformType($platformType)
    {
        $this->platformType = $platformType;
    }

    /**
     * @return mixed
     */
    public function getPlatformType()
    {
        return $this->platformType;
    }

    /**
     * @param $realtimePlay
     */
    public function setRealtimePlay($realtimePlay)
    {
        $this->realtimePlay = $realtimePlay;
    }

    /**
     * @return mixed
     */
    public function getRealtimePlay()
    {
        return $this->realtimePlay;
    }

    /**
     * @param $turnBasedPlay
     */
    public function setTurnBasedPlay($turnBasedPlay)
    {
        $this->turnBasedPlay = $turnBasedPlay;
    }

    /**
     * @return mixed
     */
    public function getTurnBasedPlay()
    {
        return $this->turnBasedPlay;
    }

    /**
     * @param Google_InstanceWebDetails $webInstance
     */
    public function setWebInstance(Google_InstanceWebDetails $webInstance)
    {
        $this->webInstance = $webInstance;
    }

    /**
     * @return mixed
     */
    public function getWebInstance()
    {
        return $this->webInstance;
    }
}

/**
 * Class Google_InstanceAndroidDetails
 */
class Google_InstanceAndroidDetails extends Google_Model
{
    /**
     * @var
     */
    public $enablePiracyCheck;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $packageName;
    /**
     * @var
     */
    public $preferred;

    /**
     * @param $enablePiracyCheck
     */
    public function setEnablePiracyCheck($enablePiracyCheck)
    {
        $this->enablePiracyCheck = $enablePiracyCheck;
    }

    /**
     * @return mixed
     */
    public function getEnablePiracyCheck()
    {
        return $this->enablePiracyCheck;
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
     * @param $packageName
     */
    public function setPackageName($packageName)
    {
        $this->packageName = $packageName;
    }

    /**
     * @return mixed
     */
    public function getPackageName()
    {
        return $this->packageName;
    }

    /**
     * @param $preferred
     */
    public function setPreferred($preferred)
    {
        $this->preferred = $preferred;
    }

    /**
     * @return mixed
     */
    public function getPreferred()
    {
        return $this->preferred;
    }
}

/**
 * Class Google_InstanceIosDetails
 */
class Google_InstanceIosDetails extends Google_Model
{
    /**
     * @var
     */
    public $bundleIdentifier;
    /**
     * @var
     */
    public $itunesAppId;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $preferredForIpad;
    /**
     * @var
     */
    public $preferredForIphone;
    /**
     * @var
     */
    public $supportIpad;
    /**
     * @var
     */
    public $supportIphone;

    /**
     * @param $bundleIdentifier
     */
    public function setBundleIdentifier($bundleIdentifier)
    {
        $this->bundleIdentifier = $bundleIdentifier;
    }

    /**
     * @return mixed
     */
    public function getBundleIdentifier()
    {
        return $this->bundleIdentifier;
    }

    /**
     * @param $itunesAppId
     */
    public function setItunesAppId($itunesAppId)
    {
        $this->itunesAppId = $itunesAppId;
    }

    /**
     * @return mixed
     */
    public function getItunesAppId()
    {
        return $this->itunesAppId;
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
     * @param $preferredForIpad
     */
    public function setPreferredForIpad($preferredForIpad)
    {
        $this->preferredForIpad = $preferredForIpad;
    }

    /**
     * @return mixed
     */
    public function getPreferredForIpad()
    {
        return $this->preferredForIpad;
    }

    /**
     * @param $preferredForIphone
     */
    public function setPreferredForIphone($preferredForIphone)
    {
        $this->preferredForIphone = $preferredForIphone;
    }

    /**
     * @return mixed
     */
    public function getPreferredForIphone()
    {
        return $this->preferredForIphone;
    }

    /**
     * @param $supportIpad
     */
    public function setSupportIpad($supportIpad)
    {
        $this->supportIpad = $supportIpad;
    }

    /**
     * @return mixed
     */
    public function getSupportIpad()
    {
        return $this->supportIpad;
    }

    /**
     * @param $supportIphone
     */
    public function setSupportIphone($supportIphone)
    {
        $this->supportIphone = $supportIphone;
    }

    /**
     * @return mixed
     */
    public function getSupportIphone()
    {
        return $this->supportIphone;
    }
}

/**
 * Class Google_InstanceWebDetails
 */
class Google_InstanceWebDetails extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $launchUrl;
    /**
     * @var
     */
    public $preferred;

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
     * @param $launchUrl
     */
    public function setLaunchUrl($launchUrl)
    {
        $this->launchUrl = $launchUrl;
    }

    /**
     * @return mixed
     */
    public function getLaunchUrl()
    {
        return $this->launchUrl;
    }

    /**
     * @param $preferred
     */
    public function setPreferred($preferred)
    {
        $this->preferred = $preferred;
    }

    /**
     * @return mixed
     */
    public function getPreferred()
    {
        return $this->preferred;
    }
}

/**
 * Class Google_Leaderboard
 */
class Google_Leaderboard extends Google_Model
{
    /**
     * @var
     */
    public $iconUrl;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $isIconUrlDefault;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $order;

    /**
     * @param $iconUrl
     */
    public function setIconUrl($iconUrl)
    {
        $this->iconUrl = $iconUrl;
    }

    /**
     * @return mixed
     */
    public function getIconUrl()
    {
        return $this->iconUrl;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $isIconUrlDefault
     */
    public function setIsIconUrlDefault($isIconUrlDefault)
    {
        $this->isIconUrlDefault = $isIconUrlDefault;
    }

    /**
     * @return mixed
     */
    public function getIsIconUrlDefault()
    {
        return $this->isIconUrlDefault;
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
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }
}

/**
 * Class Google_LeaderboardEntry
 */
class Google_LeaderboardEntry extends Google_Model
{
    /**
     * @var
     */
    public $formattedScore;
    /**
     * @var
     */
    public $formattedScoreRank;
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
     * @var
     */
    public $scoreRank;
    /**
     * @var
     */
    public $scoreValue;
    /**
     * @var
     */
    public $timeSpan;
    /**
     * @var
     */
    public $writeTimestampMillis;

    /**
     * @param $formattedScore
     */
    public function setFormattedScore($formattedScore)
    {
        $this->formattedScore = $formattedScore;
    }

    /**
     * @return mixed
     */
    public function getFormattedScore()
    {
        return $this->formattedScore;
    }

    /**
     * @param $formattedScoreRank
     */
    public function setFormattedScoreRank($formattedScoreRank)
    {
        $this->formattedScoreRank = $formattedScoreRank;
    }

    /**
     * @return mixed
     */
    public function getFormattedScoreRank()
    {
        return $this->formattedScoreRank;
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

    /**
     * @param $scoreRank
     */
    public function setScoreRank($scoreRank)
    {
        $this->scoreRank = $scoreRank;
    }

    /**
     * @return mixed
     */
    public function getScoreRank()
    {
        return $this->scoreRank;
    }

    /**
     * @param $scoreValue
     */
    public function setScoreValue($scoreValue)
    {
        $this->scoreValue = $scoreValue;
    }

    /**
     * @return mixed
     */
    public function getScoreValue()
    {
        return $this->scoreValue;
    }

    /**
     * @param $timeSpan
     */
    public function setTimeSpan($timeSpan)
    {
        $this->timeSpan = $timeSpan;
    }

    /**
     * @return mixed
     */
    public function getTimeSpan()
    {
        return $this->timeSpan;
    }

    /**
     * @param $writeTimestampMillis
     */
    public function setWriteTimestampMillis($writeTimestampMillis)
    {
        $this->writeTimestampMillis = $writeTimestampMillis;
    }

    /**
     * @return mixed
     */
    public function getWriteTimestampMillis()
    {
        return $this->writeTimestampMillis;
    }
}

/**
 * Class Google_LeaderboardListResponse
 */
class Google_LeaderboardListResponse extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Leaderboard';
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
    public function setItems(/* array(Google_Leaderboard) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Leaderboard', __METHOD__);
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
 * Class Google_LeaderboardScoreRank
 */
class Google_LeaderboardScoreRank extends Google_Model
{
    /**
     * @var
     */
    public $formattedNumScores;
    /**
     * @var
     */
    public $formattedRank;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $numScores;
    /**
     * @var
     */
    public $rank;

    /**
     * @param $formattedNumScores
     */
    public function setFormattedNumScores($formattedNumScores)
    {
        $this->formattedNumScores = $formattedNumScores;
    }

    /**
     * @return mixed
     */
    public function getFormattedNumScores()
    {
        return $this->formattedNumScores;
    }

    /**
     * @param $formattedRank
     */
    public function setFormattedRank($formattedRank)
    {
        $this->formattedRank = $formattedRank;
    }

    /**
     * @return mixed
     */
    public function getFormattedRank()
    {
        return $this->formattedRank;
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
     * @param $numScores
     */
    public function setNumScores($numScores)
    {
        $this->numScores = $numScores;
    }

    /**
     * @return mixed
     */
    public function getNumScores()
    {
        return $this->numScores;
    }

    /**
     * @param $rank
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
    }

    /**
     * @return mixed
     */
    public function getRank()
    {
        return $this->rank;
    }
}

/**
 * Class Google_LeaderboardScores
 */
class Google_LeaderboardScores extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_LeaderboardEntry';
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
     * @var
     */
    public $numScores;
    /**
     * @var string
     */
    protected $__playerScoreType = 'Google_LeaderboardEntry';
    /**
     * @var string
     */
    protected $__playerScoreDataType = '';
    /**
     * @var
     */
    public $playerScore;
    /**
     * @var
     */
    public $prevPageToken;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_LeaderboardEntry) */
        $items)
    {
        $this->assertIsArray($items, 'Google_LeaderboardEntry', __METHOD__);
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

    /**
     * @param $numScores
     */
    public function setNumScores($numScores)
    {
        $this->numScores = $numScores;
    }

    /**
     * @return mixed
     */
    public function getNumScores()
    {
        return $this->numScores;
    }

    /**
     * @param Google_LeaderboardEntry $playerScore
     */
    public function setPlayerScore(Google_LeaderboardEntry $playerScore)
    {
        $this->playerScore = $playerScore;
    }

    /**
     * @return mixed
     */
    public function getPlayerScore()
    {
        return $this->playerScore;
    }

    /**
     * @param $prevPageToken
     */
    public function setPrevPageToken($prevPageToken)
    {
        $this->prevPageToken = $prevPageToken;
    }

    /**
     * @return mixed
     */
    public function getPrevPageToken()
    {
        return $this->prevPageToken;
    }
}

/**
 * Class Google_NetworkDiagnostics
 */
class Google_NetworkDiagnostics extends Google_Model
{
    /**
     * @var
     */
    public $androidNetworkSubtype;
    /**
     * @var
     */
    public $androidNetworkType;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $registrationLatencyMillis;

    /**
     * @param $androidNetworkSubtype
     */
    public function setAndroidNetworkSubtype($androidNetworkSubtype)
    {
        $this->androidNetworkSubtype = $androidNetworkSubtype;
    }

    /**
     * @return mixed
     */
    public function getAndroidNetworkSubtype()
    {
        return $this->androidNetworkSubtype;
    }

    /**
     * @param $androidNetworkType
     */
    public function setAndroidNetworkType($androidNetworkType)
    {
        $this->androidNetworkType = $androidNetworkType;
    }

    /**
     * @return mixed
     */
    public function getAndroidNetworkType()
    {
        return $this->androidNetworkType;
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
     * @param $registrationLatencyMillis
     */
    public function setRegistrationLatencyMillis($registrationLatencyMillis)
    {
        $this->registrationLatencyMillis = $registrationLatencyMillis;
    }

    /**
     * @return mixed
     */
    public function getRegistrationLatencyMillis()
    {
        return $this->registrationLatencyMillis;
    }
}

/**
 * Class Google_PeerChannelDiagnostics
 */
class Google_PeerChannelDiagnostics extends Google_Model
{
    /**
     * @var string
     */
    protected $__bytesReceivedType = 'Google_AggregateStats';
    /**
     * @var string
     */
    protected $__bytesReceivedDataType = '';
    /**
     * @var
     */
    public $bytesReceived;
    /**
     * @var string
     */
    protected $__bytesSentType = 'Google_AggregateStats';
    /**
     * @var string
     */
    protected $__bytesSentDataType = '';
    /**
     * @var
     */
    public $bytesSent;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $numMessagesLost;
    /**
     * @var
     */
    public $numMessagesReceived;
    /**
     * @var
     */
    public $numMessagesSent;
    /**
     * @var
     */
    public $numSendFailures;
    /**
     * @var string
     */
    protected $__roundtripLatencyMillisType = 'Google_AggregateStats';
    /**
     * @var string
     */
    protected $__roundtripLatencyMillisDataType = '';
    /**
     * @var
     */
    public $roundtripLatencyMillis;

    /**
     * @param Google_AggregateStats $bytesReceived
     */
    public function setBytesReceived(Google_AggregateStats $bytesReceived)
    {
        $this->bytesReceived = $bytesReceived;
    }

    /**
     * @return mixed
     */
    public function getBytesReceived()
    {
        return $this->bytesReceived;
    }

    /**
     * @param Google_AggregateStats $bytesSent
     */
    public function setBytesSent(Google_AggregateStats $bytesSent)
    {
        $this->bytesSent = $bytesSent;
    }

    /**
     * @return mixed
     */
    public function getBytesSent()
    {
        return $this->bytesSent;
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
     * @param $numMessagesLost
     */
    public function setNumMessagesLost($numMessagesLost)
    {
        $this->numMessagesLost = $numMessagesLost;
    }

    /**
     * @return mixed
     */
    public function getNumMessagesLost()
    {
        return $this->numMessagesLost;
    }

    /**
     * @param $numMessagesReceived
     */
    public function setNumMessagesReceived($numMessagesReceived)
    {
        $this->numMessagesReceived = $numMessagesReceived;
    }

    /**
     * @return mixed
     */
    public function getNumMessagesReceived()
    {
        return $this->numMessagesReceived;
    }

    /**
     * @param $numMessagesSent
     */
    public function setNumMessagesSent($numMessagesSent)
    {
        $this->numMessagesSent = $numMessagesSent;
    }

    /**
     * @return mixed
     */
    public function getNumMessagesSent()
    {
        return $this->numMessagesSent;
    }

    /**
     * @param $numSendFailures
     */
    public function setNumSendFailures($numSendFailures)
    {
        $this->numSendFailures = $numSendFailures;
    }

    /**
     * @return mixed
     */
    public function getNumSendFailures()
    {
        return $this->numSendFailures;
    }

    /**
     * @param Google_AggregateStats $roundtripLatencyMillis
     */
    public function setRoundtripLatencyMillis(Google_AggregateStats $roundtripLatencyMillis)
    {
        $this->roundtripLatencyMillis = $roundtripLatencyMillis;
    }

    /**
     * @return mixed
     */
    public function getRoundtripLatencyMillis()
    {
        return $this->roundtripLatencyMillis;
    }
}

/**
 * Class Google_PeerSessionDiagnostics
 */
class Google_PeerSessionDiagnostics extends Google_Model
{
    /**
     * @var
     */
    public $connectedTimestampMillis;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $participantId;
    /**
     * @var string
     */
    protected $__reliableChannelType = 'Google_PeerChannelDiagnostics';
    /**
     * @var string
     */
    protected $__reliableChannelDataType = '';
    /**
     * @var
     */
    public $reliableChannel;
    /**
     * @var string
     */
    protected $__unreliableChannelType = 'Google_PeerChannelDiagnostics';
    /**
     * @var string
     */
    protected $__unreliableChannelDataType = '';
    /**
     * @var
     */
    public $unreliableChannel;

    /**
     * @param $connectedTimestampMillis
     */
    public function setConnectedTimestampMillis($connectedTimestampMillis)
    {
        $this->connectedTimestampMillis = $connectedTimestampMillis;
    }

    /**
     * @return mixed
     */
    public function getConnectedTimestampMillis()
    {
        return $this->connectedTimestampMillis;
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
     * @param $participantId
     */
    public function setParticipantId($participantId)
    {
        $this->participantId = $participantId;
    }

    /**
     * @return mixed
     */
    public function getParticipantId()
    {
        return $this->participantId;
    }

    /**
     * @param Google_PeerChannelDiagnostics $reliableChannel
     */
    public function setReliableChannel(Google_PeerChannelDiagnostics $reliableChannel)
    {
        $this->reliableChannel = $reliableChannel;
    }

    /**
     * @return mixed
     */
    public function getReliableChannel()
    {
        return $this->reliableChannel;
    }

    /**
     * @param Google_PeerChannelDiagnostics $unreliableChannel
     */
    public function setUnreliableChannel(Google_PeerChannelDiagnostics $unreliableChannel)
    {
        $this->unreliableChannel = $unreliableChannel;
    }

    /**
     * @return mixed
     */
    public function getUnreliableChannel()
    {
        return $this->unreliableChannel;
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

    /**
     * @return mixed
     */
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
 * Class Google_PlayerAchievement
 */
class Google_PlayerAchievement extends Google_Model
{
    /**
     * @var
     */
    public $achievementState;
    /**
     * @var
     */
    public $currentSteps;
    /**
     * @var
     */
    public $formattedCurrentStepsString;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $lastUpdatedTimestamp;

    /**
     * @param $achievementState
     */
    public function setAchievementState($achievementState)
    {
        $this->achievementState = $achievementState;
    }

    /**
     * @return mixed
     */
    public function getAchievementState()
    {
        return $this->achievementState;
    }

    /**
     * @param $currentSteps
     */
    public function setCurrentSteps($currentSteps)
    {
        $this->currentSteps = $currentSteps;
    }

    /**
     * @return mixed
     */
    public function getCurrentSteps()
    {
        return $this->currentSteps;
    }

    /**
     * @param $formattedCurrentStepsString
     */
    public function setFormattedCurrentStepsString($formattedCurrentStepsString)
    {
        $this->formattedCurrentStepsString = $formattedCurrentStepsString;
    }

    /**
     * @return mixed
     */
    public function getFormattedCurrentStepsString()
    {
        return $this->formattedCurrentStepsString;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
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
     * @param $lastUpdatedTimestamp
     */
    public function setLastUpdatedTimestamp($lastUpdatedTimestamp)
    {
        $this->lastUpdatedTimestamp = $lastUpdatedTimestamp;
    }

    /**
     * @return mixed
     */
    public function getLastUpdatedTimestamp()
    {
        return $this->lastUpdatedTimestamp;
    }
}

/**
 * Class Google_PlayerAchievementListResponse
 */
class Google_PlayerAchievementListResponse extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_PlayerAchievement';
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
    public function setItems(/* array(Google_PlayerAchievement) */
        $items)
    {
        $this->assertIsArray($items, 'Google_PlayerAchievement', __METHOD__);
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
 * Class Google_PlayerLeaderboardScore
 */
class Google_PlayerLeaderboardScore extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $leaderboard_id;
    /**
     * @var string
     */
    protected $__publicRankType = 'Google_LeaderboardScoreRank';
    /**
     * @var string
     */
    protected $__publicRankDataType = '';
    /**
     * @var
     */
    public $publicRank;
    /**
     * @var
     */
    public $scoreString;
    /**
     * @var
     */
    public $scoreValue;
    /**
     * @var string
     */
    protected $__socialRankType = 'Google_LeaderboardScoreRank';
    /**
     * @var string
     */
    protected $__socialRankDataType = '';
    /**
     * @var
     */
    public $socialRank;
    /**
     * @var
     */
    public $timeSpan;
    /**
     * @var
     */
    public $writeTimestamp;

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
     * @param $leaderboard_id
     */
    public function setLeaderboard_id($leaderboard_id)
    {
        $this->leaderboard_id = $leaderboard_id;
    }

    /**
     * @return mixed
     */
    public function getLeaderboard_id()
    {
        return $this->leaderboard_id;
    }

    /**
     * @param Google_LeaderboardScoreRank $publicRank
     */
    public function setPublicRank(Google_LeaderboardScoreRank $publicRank)
    {
        $this->publicRank = $publicRank;
    }

    /**
     * @return mixed
     */
    public function getPublicRank()
    {
        return $this->publicRank;
    }

    /**
     * @param $scoreString
     */
    public function setScoreString($scoreString)
    {
        $this->scoreString = $scoreString;
    }

    /**
     * @return mixed
     */
    public function getScoreString()
    {
        return $this->scoreString;
    }

    /**
     * @param $scoreValue
     */
    public function setScoreValue($scoreValue)
    {
        $this->scoreValue = $scoreValue;
    }

    /**
     * @return mixed
     */
    public function getScoreValue()
    {
        return $this->scoreValue;
    }

    /**
     * @param Google_LeaderboardScoreRank $socialRank
     */
    public function setSocialRank(Google_LeaderboardScoreRank $socialRank)
    {
        $this->socialRank = $socialRank;
    }

    /**
     * @return mixed
     */
    public function getSocialRank()
    {
        return $this->socialRank;
    }

    /**
     * @param $timeSpan
     */
    public function setTimeSpan($timeSpan)
    {
        $this->timeSpan = $timeSpan;
    }

    /**
     * @return mixed
     */
    public function getTimeSpan()
    {
        return $this->timeSpan;
    }

    /**
     * @param $writeTimestamp
     */
    public function setWriteTimestamp($writeTimestamp)
    {
        $this->writeTimestamp = $writeTimestamp;
    }

    /**
     * @return mixed
     */
    public function getWriteTimestamp()
    {
        return $this->writeTimestamp;
    }
}

/**
 * Class Google_PlayerLeaderboardScoreListResponse
 */
class Google_PlayerLeaderboardScoreListResponse extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_PlayerLeaderboardScore';
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
    public function setItems(/* array(Google_PlayerLeaderboardScore) */
        $items)
    {
        $this->assertIsArray($items, 'Google_PlayerLeaderboardScore', __METHOD__);
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
 * Class Google_PlayerScore
 */
class Google_PlayerScore extends Google_Model
{
    /**
     * @var
     */
    public $formattedScore;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $score;
    /**
     * @var
     */
    public $timeSpan;

    /**
     * @param $formattedScore
     */
    public function setFormattedScore($formattedScore)
    {
        $this->formattedScore = $formattedScore;
    }

    /**
     * @return mixed
     */
    public function getFormattedScore()
    {
        return $this->formattedScore;
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
     * @param $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param $timeSpan
     */
    public function setTimeSpan($timeSpan)
    {
        $this->timeSpan = $timeSpan;
    }

    /**
     * @return mixed
     */
    public function getTimeSpan()
    {
        return $this->timeSpan;
    }
}

/**
 * Class Google_PlayerScoreListResponse
 */
class Google_PlayerScoreListResponse extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__submittedScoresType = 'Google_PlayerScoreResponse';
    /**
     * @var string
     */
    protected $__submittedScoresDataType = 'array';
    /**
     * @var
     */
    public $submittedScores;

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
     * @param $submittedScores
     * @throws Google_Exception
     */
    public function setSubmittedScores(/* array(Google_PlayerScoreResponse) */
        $submittedScores)
    {
        $this->assertIsArray($submittedScores, 'Google_PlayerScoreResponse', __METHOD__);
        $this->submittedScores = $submittedScores;
    }

    /**
     * @return mixed
     */
    public function getSubmittedScores()
    {
        return $this->submittedScores;
    }
}

/**
 * Class Google_PlayerScoreResponse
 */
class Google_PlayerScoreResponse extends Google_Model
{
    /**
     * @var
     */
    public $beatenScoreTimeSpans;
    /**
     * @var
     */
    public $formattedScore;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $leaderboardId;
    /**
     * @var string
     */
    protected $__unbeatenScoresType = 'Google_PlayerScore';
    /**
     * @var string
     */
    protected $__unbeatenScoresDataType = 'array';
    /**
     * @var
     */
    public $unbeatenScores;

    /**
     * @param $beatenScoreTimeSpans
     * @throws Google_Exception
     */
    public function setBeatenScoreTimeSpans(/* array(Google_string) */
        $beatenScoreTimeSpans)
    {
        $this->assertIsArray($beatenScoreTimeSpans, 'Google_string', __METHOD__);
        $this->beatenScoreTimeSpans = $beatenScoreTimeSpans;
    }

    /**
     * @return mixed
     */
    public function getBeatenScoreTimeSpans()
    {
        return $this->beatenScoreTimeSpans;
    }

    /**
     * @param $formattedScore
     */
    public function setFormattedScore($formattedScore)
    {
        $this->formattedScore = $formattedScore;
    }

    /**
     * @return mixed
     */
    public function getFormattedScore()
    {
        return $this->formattedScore;
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
     * @param $leaderboardId
     */
    public function setLeaderboardId($leaderboardId)
    {
        $this->leaderboardId = $leaderboardId;
    }

    /**
     * @return mixed
     */
    public function getLeaderboardId()
    {
        return $this->leaderboardId;
    }

    /**
     * @param $unbeatenScores
     * @throws Google_Exception
     */
    public function setUnbeatenScores(/* array(Google_PlayerScore) */
        $unbeatenScores)
    {
        $this->assertIsArray($unbeatenScores, 'Google_PlayerScore', __METHOD__);
        $this->unbeatenScores = $unbeatenScores;
    }

    /**
     * @return mixed
     */
    public function getUnbeatenScores()
    {
        return $this->unbeatenScores;
    }
}

/**
 * Class Google_PlayerScoreSubmissionList
 */
class Google_PlayerScoreSubmissionList extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__scoresType = 'Google_ScoreSubmission';
    /**
     * @var string
     */
    protected $__scoresDataType = 'array';
    /**
     * @var
     */
    public $scores;

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
     * @param $scores
     * @throws Google_Exception
     */
    public function setScores(/* array(Google_ScoreSubmission) */
        $scores)
    {
        $this->assertIsArray($scores, 'Google_ScoreSubmission', __METHOD__);
        $this->scores = $scores;
    }

    /**
     * @return mixed
     */
    public function getScores()
    {
        return $this->scores;
    }
}

/**
 * Class Google_RevisionCheckResponse
 */
class Google_RevisionCheckResponse extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $revisionStatus;

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
     * @param $revisionStatus
     */
    public function setRevisionStatus($revisionStatus)
    {
        $this->revisionStatus = $revisionStatus;
    }

    /**
     * @return mixed
     */
    public function getRevisionStatus()
    {
        return $this->revisionStatus;
    }
}

/**
 * Class Google_Room
 */
class Google_Room extends Google_Model
{
    /**
     * @var
     */
    public $applicationId;
    /**
     * @var string
     */
    protected $__autoMatchingCriteriaType = 'Google_RoomAutoMatchingCriteria';
    /**
     * @var string
     */
    protected $__autoMatchingCriteriaDataType = '';
    /**
     * @var
     */
    public $autoMatchingCriteria;
    /**
     * @var string
     */
    protected $__autoMatchingStatusType = 'Google_RoomAutoMatchStatus';
    /**
     * @var string
     */
    protected $__autoMatchingStatusDataType = '';
    /**
     * @var
     */
    public $autoMatchingStatus;
    /**
     * @var string
     */
    protected $__creationDetailsType = 'Google_RoomModification';
    /**
     * @var string
     */
    protected $__creationDetailsDataType = '';
    /**
     * @var
     */
    public $creationDetails;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__lastUpdateDetailsType = 'Google_RoomModification';
    /**
     * @var string
     */
    protected $__lastUpdateDetailsDataType = '';
    /**
     * @var
     */
    public $lastUpdateDetails;
    /**
     * @var string
     */
    protected $__participantsType = 'Google_RoomParticipant';
    /**
     * @var string
     */
    protected $__participantsDataType = 'array';
    /**
     * @var
     */
    public $participants;
    /**
     * @var
     */
    public $roomId;
    /**
     * @var
     */
    public $roomStatusVersion;
    /**
     * @var
     */
    public $status;
    /**
     * @var
     */
    public $variant;

    /**
     * @param $applicationId
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;
    }

    /**
     * @return mixed
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }

    /**
     * @param Google_RoomAutoMatchingCriteria $autoMatchingCriteria
     */
    public function setAutoMatchingCriteria(Google_RoomAutoMatchingCriteria $autoMatchingCriteria)
    {
        $this->autoMatchingCriteria = $autoMatchingCriteria;
    }

    /**
     * @return mixed
     */
    public function getAutoMatchingCriteria()
    {
        return $this->autoMatchingCriteria;
    }

    /**
     * @param Google_RoomAutoMatchStatus $autoMatchingStatus
     */
    public function setAutoMatchingStatus(Google_RoomAutoMatchStatus $autoMatchingStatus)
    {
        $this->autoMatchingStatus = $autoMatchingStatus;
    }

    /**
     * @return mixed
     */
    public function getAutoMatchingStatus()
    {
        return $this->autoMatchingStatus;
    }

    /**
     * @param Google_RoomModification $creationDetails
     */
    public function setCreationDetails(Google_RoomModification $creationDetails)
    {
        $this->creationDetails = $creationDetails;
    }

    /**
     * @return mixed
     */
    public function getCreationDetails()
    {
        return $this->creationDetails;
    }

    /**
     * @param $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
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
     * @param Google_RoomModification $lastUpdateDetails
     */
    public function setLastUpdateDetails(Google_RoomModification $lastUpdateDetails)
    {
        $this->lastUpdateDetails = $lastUpdateDetails;
    }

    /**
     * @return mixed
     */
    public function getLastUpdateDetails()
    {
        return $this->lastUpdateDetails;
    }

    /**
     * @param $participants
     * @throws Google_Exception
     */
    public function setParticipants(/* array(Google_RoomParticipant) */
        $participants)
    {
        $this->assertIsArray($participants, 'Google_RoomParticipant', __METHOD__);
        $this->participants = $participants;
    }

    /**
     * @return mixed
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * @param $roomId
     */
    public function setRoomId($roomId)
    {
        $this->roomId = $roomId;
    }

    /**
     * @return mixed
     */
    public function getRoomId()
    {
        return $this->roomId;
    }

    /**
     * @param $roomStatusVersion
     */
    public function setRoomStatusVersion($roomStatusVersion)
    {
        $this->roomStatusVersion = $roomStatusVersion;
    }

    /**
     * @return mixed
     */
    public function getRoomStatusVersion()
    {
        return $this->roomStatusVersion;
    }

    /**
     * @param $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param $variant
     */
    public function setVariant($variant)
    {
        $this->variant = $variant;
    }

    /**
     * @return mixed
     */
    public function getVariant()
    {
        return $this->variant;
    }
}

/**
 * Class Google_RoomAutoMatchStatus
 */
class Google_RoomAutoMatchStatus extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $waitEstimateSeconds;

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
     * @param $waitEstimateSeconds
     */
    public function setWaitEstimateSeconds($waitEstimateSeconds)
    {
        $this->waitEstimateSeconds = $waitEstimateSeconds;
    }

    /**
     * @return mixed
     */
    public function getWaitEstimateSeconds()
    {
        return $this->waitEstimateSeconds;
    }
}

/**
 * Class Google_RoomAutoMatchingCriteria
 */
class Google_RoomAutoMatchingCriteria extends Google_Model
{
    /**
     * @var
     */
    public $exclusiveBitmask;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $maxAutoMatchingPlayers;
    /**
     * @var
     */
    public $minAutoMatchingPlayers;

    /**
     * @param $exclusiveBitmask
     */
    public function setExclusiveBitmask($exclusiveBitmask)
    {
        $this->exclusiveBitmask = $exclusiveBitmask;
    }

    /**
     * @return mixed
     */
    public function getExclusiveBitmask()
    {
        return $this->exclusiveBitmask;
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
     * @param $maxAutoMatchingPlayers
     */
    public function setMaxAutoMatchingPlayers($maxAutoMatchingPlayers)
    {
        $this->maxAutoMatchingPlayers = $maxAutoMatchingPlayers;
    }

    /**
     * @return mixed
     */
    public function getMaxAutoMatchingPlayers()
    {
        return $this->maxAutoMatchingPlayers;
    }

    /**
     * @param $minAutoMatchingPlayers
     */
    public function setMinAutoMatchingPlayers($minAutoMatchingPlayers)
    {
        $this->minAutoMatchingPlayers = $minAutoMatchingPlayers;
    }

    /**
     * @return mixed
     */
    public function getMinAutoMatchingPlayers()
    {
        return $this->minAutoMatchingPlayers;
    }
}

/**
 * Class Google_RoomClientAddress
 */
class Google_RoomClientAddress extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $xmppAddress;

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
     * @param $xmppAddress
     */
    public function setXmppAddress($xmppAddress)
    {
        $this->xmppAddress = $xmppAddress;
    }

    /**
     * @return mixed
     */
    public function getXmppAddress()
    {
        return $this->xmppAddress;
    }
}

/**
 * Class Google_RoomCreateRequest
 */
class Google_RoomCreateRequest extends Google_Model
{
    /**
     * @var string
     */
    protected $__autoMatchingCriteriaType = 'Google_RoomAutoMatchingCriteria';
    /**
     * @var string
     */
    protected $__autoMatchingCriteriaDataType = '';
    /**
     * @var
     */
    public $autoMatchingCriteria;
    /**
     * @var
     */
    public $capabilities;
    /**
     * @var string
     */
    protected $__clientAddressType = 'Google_RoomClientAddress';
    /**
     * @var string
     */
    protected $__clientAddressDataType = '';
    /**
     * @var
     */
    public $clientAddress;
    /**
     * @var
     */
    public $invitedPlayerIds;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__networkDiagnosticsType = 'Google_NetworkDiagnostics';
    /**
     * @var string
     */
    protected $__networkDiagnosticsDataType = '';
    /**
     * @var
     */
    public $networkDiagnostics;
    /**
     * @var
     */
    public $variant;

    /**
     * @param Google_RoomAutoMatchingCriteria $autoMatchingCriteria
     */
    public function setAutoMatchingCriteria(Google_RoomAutoMatchingCriteria $autoMatchingCriteria)
    {
        $this->autoMatchingCriteria = $autoMatchingCriteria;
    }

    /**
     * @return mixed
     */
    public function getAutoMatchingCriteria()
    {
        return $this->autoMatchingCriteria;
    }

    /**
     * @param $capabilities
     * @throws Google_Exception
     */
    public function setCapabilities(/* array(Google_string) */
        $capabilities)
    {
        $this->assertIsArray($capabilities, 'Google_string', __METHOD__);
        $this->capabilities = $capabilities;
    }

    /**
     * @return mixed
     */
    public function getCapabilities()
    {
        return $this->capabilities;
    }

    /**
     * @param Google_RoomClientAddress $clientAddress
     */
    public function setClientAddress(Google_RoomClientAddress $clientAddress)
    {
        $this->clientAddress = $clientAddress;
    }

    /**
     * @return mixed
     */
    public function getClientAddress()
    {
        return $this->clientAddress;
    }

    /**
     * @param $invitedPlayerIds
     * @throws Google_Exception
     */
    public function setInvitedPlayerIds(/* array(Google_string) */
        $invitedPlayerIds)
    {
        $this->assertIsArray($invitedPlayerIds, 'Google_string', __METHOD__);
        $this->invitedPlayerIds = $invitedPlayerIds;
    }

    /**
     * @return mixed
     */
    public function getInvitedPlayerIds()
    {
        return $this->invitedPlayerIds;
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
     * @param Google_NetworkDiagnostics $networkDiagnostics
     */
    public function setNetworkDiagnostics(Google_NetworkDiagnostics $networkDiagnostics)
    {
        $this->networkDiagnostics = $networkDiagnostics;
    }

    /**
     * @return mixed
     */
    public function getNetworkDiagnostics()
    {
        return $this->networkDiagnostics;
    }

    /**
     * @param $variant
     */
    public function setVariant($variant)
    {
        $this->variant = $variant;
    }

    /**
     * @return mixed
     */
    public function getVariant()
    {
        return $this->variant;
    }
}

/**
 * Class Google_RoomJoinRequest
 */
class Google_RoomJoinRequest extends Google_Model
{
    /**
     * @var
     */
    public $capabilities;
    /**
     * @var string
     */
    protected $__clientAddressType = 'Google_RoomClientAddress';
    /**
     * @var string
     */
    protected $__clientAddressDataType = '';
    /**
     * @var
     */
    public $clientAddress;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__networkDiagnosticsType = 'Google_NetworkDiagnostics';
    /**
     * @var string
     */
    protected $__networkDiagnosticsDataType = '';
    /**
     * @var
     */
    public $networkDiagnostics;

    /**
     * @param $capabilities
     * @throws Google_Exception
     */
    public function setCapabilities(/* array(Google_string) */
        $capabilities)
    {
        $this->assertIsArray($capabilities, 'Google_string', __METHOD__);
        $this->capabilities = $capabilities;
    }

    /**
     * @return mixed
     */
    public function getCapabilities()
    {
        return $this->capabilities;
    }

    /**
     * @param Google_RoomClientAddress $clientAddress
     */
    public function setClientAddress(Google_RoomClientAddress $clientAddress)
    {
        $this->clientAddress = $clientAddress;
    }

    /**
     * @return mixed
     */
    public function getClientAddress()
    {
        return $this->clientAddress;
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
     * @param Google_NetworkDiagnostics $networkDiagnostics
     */
    public function setNetworkDiagnostics(Google_NetworkDiagnostics $networkDiagnostics)
    {
        $this->networkDiagnostics = $networkDiagnostics;
    }

    /**
     * @return mixed
     */
    public function getNetworkDiagnostics()
    {
        return $this->networkDiagnostics;
    }
}

/**
 * Class Google_RoomLeaveDiagnostics
 */
class Google_RoomLeaveDiagnostics extends Google_Model
{
    /**
     * @var
     */
    public $androidNetworkSubtype;
    /**
     * @var
     */
    public $androidNetworkType;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__peerSessionType = 'Google_PeerSessionDiagnostics';
    /**
     * @var string
     */
    protected $__peerSessionDataType = 'array';
    /**
     * @var
     */
    public $peerSession;
    /**
     * @var
     */
    public $socketsUsed;

    /**
     * @param $androidNetworkSubtype
     */
    public function setAndroidNetworkSubtype($androidNetworkSubtype)
    {
        $this->androidNetworkSubtype = $androidNetworkSubtype;
    }

    /**
     * @return mixed
     */
    public function getAndroidNetworkSubtype()
    {
        return $this->androidNetworkSubtype;
    }

    /**
     * @param $androidNetworkType
     */
    public function setAndroidNetworkType($androidNetworkType)
    {
        $this->androidNetworkType = $androidNetworkType;
    }

    /**
     * @return mixed
     */
    public function getAndroidNetworkType()
    {
        return $this->androidNetworkType;
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
     * @param $peerSession
     * @throws Google_Exception
     */
    public function setPeerSession(/* array(Google_PeerSessionDiagnostics) */
        $peerSession)
    {
        $this->assertIsArray($peerSession, 'Google_PeerSessionDiagnostics', __METHOD__);
        $this->peerSession = $peerSession;
    }

    /**
     * @return mixed
     */
    public function getPeerSession()
    {
        return $this->peerSession;
    }

    /**
     * @param $socketsUsed
     */
    public function setSocketsUsed($socketsUsed)
    {
        $this->socketsUsed = $socketsUsed;
    }

    /**
     * @return mixed
     */
    public function getSocketsUsed()
    {
        return $this->socketsUsed;
    }
}

/**
 * Class Google_RoomLeaveRequest
 */
class Google_RoomLeaveRequest extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__leaveDiagnosticsType = 'Google_RoomLeaveDiagnostics';
    /**
     * @var string
     */
    protected $__leaveDiagnosticsDataType = '';
    /**
     * @var
     */
    public $leaveDiagnostics;
    /**
     * @var
     */
    public $reason;

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
     * @param Google_RoomLeaveDiagnostics $leaveDiagnostics
     */
    public function setLeaveDiagnostics(Google_RoomLeaveDiagnostics $leaveDiagnostics)
    {
        $this->leaveDiagnostics = $leaveDiagnostics;
    }

    /**
     * @return mixed
     */
    public function getLeaveDiagnostics()
    {
        return $this->leaveDiagnostics;
    }

    /**
     * @param $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    /**
     * @return mixed
     */
    public function getReason()
    {
        return $this->reason;
    }
}

/**
 * Class Google_RoomList
 */
class Google_RoomList extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Room';
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
    public function setItems(/* array(Google_Room) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Room', __METHOD__);
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
 * Class Google_RoomModification
 */
class Google_RoomModification extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $modifiedTimestampMillis;
    /**
     * @var
     */
    public $participantId;

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
     * @param $modifiedTimestampMillis
     */
    public function setModifiedTimestampMillis($modifiedTimestampMillis)
    {
        $this->modifiedTimestampMillis = $modifiedTimestampMillis;
    }

    /**
     * @return mixed
     */
    public function getModifiedTimestampMillis()
    {
        return $this->modifiedTimestampMillis;
    }

    /**
     * @param $participantId
     */
    public function setParticipantId($participantId)
    {
        $this->participantId = $participantId;
    }

    /**
     * @return mixed
     */
    public function getParticipantId()
    {
        return $this->participantId;
    }
}

/**
 * Class Google_RoomP2PStatus
 */
class Google_RoomP2PStatus extends Google_Model
{
    /**
     * @var
     */
    public $connectionSetupLatencyMillis;
    /**
     * @var
     */
    public $error;
    /**
     * @var
     */
    public $error_reason;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $participantId;
    /**
     * @var
     */
    public $status;
    /**
     * @var
     */
    public $unreliableRoundtripLatencyMillis;

    /**
     * @param $connectionSetupLatencyMillis
     */
    public function setConnectionSetupLatencyMillis($connectionSetupLatencyMillis)
    {
        $this->connectionSetupLatencyMillis = $connectionSetupLatencyMillis;
    }

    /**
     * @return mixed
     */
    public function getConnectionSetupLatencyMillis()
    {
        return $this->connectionSetupLatencyMillis;
    }

    /**
     * @param $error
     */
    public function setError($error)
    {
        $this->error = $error;
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param $error_reason
     */
    public function setError_reason($error_reason)
    {
        $this->error_reason = $error_reason;
    }

    /**
     * @return mixed
     */
    public function getError_reason()
    {
        return $this->error_reason;
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
     * @param $participantId
     */
    public function setParticipantId($participantId)
    {
        $this->participantId = $participantId;
    }

    /**
     * @return mixed
     */
    public function getParticipantId()
    {
        return $this->participantId;
    }

    /**
     * @param $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param $unreliableRoundtripLatencyMillis
     */
    public function setUnreliableRoundtripLatencyMillis($unreliableRoundtripLatencyMillis)
    {
        $this->unreliableRoundtripLatencyMillis = $unreliableRoundtripLatencyMillis;
    }

    /**
     * @return mixed
     */
    public function getUnreliableRoundtripLatencyMillis()
    {
        return $this->unreliableRoundtripLatencyMillis;
    }
}

/**
 * Class Google_RoomP2PStatuses
 */
class Google_RoomP2PStatuses extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__updatesType = 'Google_RoomP2PStatus';
    /**
     * @var string
     */
    protected $__updatesDataType = 'array';
    /**
     * @var
     */
    public $updates;

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
     * @param $updates
     * @throws Google_Exception
     */
    public function setUpdates(/* array(Google_RoomP2PStatus) */
        $updates)
    {
        $this->assertIsArray($updates, 'Google_RoomP2PStatus', __METHOD__);
        $this->updates = $updates;
    }

    /**
     * @return mixed
     */
    public function getUpdates()
    {
        return $this->updates;
    }
}

/**
 * Class Google_RoomParticipant
 */
class Google_RoomParticipant extends Google_Model
{
    /**
     * @var string
     */
    protected $__autoMatchedPlayerType = 'Google_AnonymousPlayer';
    /**
     * @var string
     */
    protected $__autoMatchedPlayerDataType = '';
    /**
     * @var
     */
    public $autoMatchedPlayer;
    /**
     * @var
     */
    public $capabilities;
    /**
     * @var string
     */
    protected $__clientAddressType = 'Google_RoomClientAddress';
    /**
     * @var string
     */
    protected $__clientAddressDataType = '';
    /**
     * @var
     */
    public $clientAddress;
    /**
     * @var
     */
    public $connected;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $leaveReason;
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
     * @var
     */
    public $status;

    /**
     * @param Google_AnonymousPlayer $autoMatchedPlayer
     */
    public function setAutoMatchedPlayer(Google_AnonymousPlayer $autoMatchedPlayer)
    {
        $this->autoMatchedPlayer = $autoMatchedPlayer;
    }

    /**
     * @return mixed
     */
    public function getAutoMatchedPlayer()
    {
        return $this->autoMatchedPlayer;
    }

    /**
     * @param $capabilities
     * @throws Google_Exception
     */
    public function setCapabilities(/* array(Google_string) */
        $capabilities)
    {
        $this->assertIsArray($capabilities, 'Google_string', __METHOD__);
        $this->capabilities = $capabilities;
    }

    /**
     * @return mixed
     */
    public function getCapabilities()
    {
        return $this->capabilities;
    }

    /**
     * @param Google_RoomClientAddress $clientAddress
     */
    public function setClientAddress(Google_RoomClientAddress $clientAddress)
    {
        $this->clientAddress = $clientAddress;
    }

    /**
     * @return mixed
     */
    public function getClientAddress()
    {
        return $this->clientAddress;
    }

    /**
     * @param $connected
     */
    public function setConnected($connected)
    {
        $this->connected = $connected;
    }

    /**
     * @return mixed
     */
    public function getConnected()
    {
        return $this->connected;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
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
     * @param $leaveReason
     */
    public function setLeaveReason($leaveReason)
    {
        $this->leaveReason = $leaveReason;
    }

    /**
     * @return mixed
     */
    public function getLeaveReason()
    {
        return $this->leaveReason;
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

    /**
     * @param $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }
}

/**
 * Class Google_RoomStatus
 */
class Google_RoomStatus extends Google_Model
{
    /**
     * @var string
     */
    protected $__autoMatchingStatusType = 'Google_RoomAutoMatchStatus';
    /**
     * @var string
     */
    protected $__autoMatchingStatusDataType = '';
    /**
     * @var
     */
    public $autoMatchingStatus;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__participantsType = 'Google_RoomParticipant';
    /**
     * @var string
     */
    protected $__participantsDataType = 'array';
    /**
     * @var
     */
    public $participants;
    /**
     * @var
     */
    public $roomId;
    /**
     * @var
     */
    public $status;
    /**
     * @var
     */
    public $statusVersion;

    /**
     * @param Google_RoomAutoMatchStatus $autoMatchingStatus
     */
    public function setAutoMatchingStatus(Google_RoomAutoMatchStatus $autoMatchingStatus)
    {
        $this->autoMatchingStatus = $autoMatchingStatus;
    }

    /**
     * @return mixed
     */
    public function getAutoMatchingStatus()
    {
        return $this->autoMatchingStatus;
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
     * @param $participants
     * @throws Google_Exception
     */
    public function setParticipants(/* array(Google_RoomParticipant) */
        $participants)
    {
        $this->assertIsArray($participants, 'Google_RoomParticipant', __METHOD__);
        $this->participants = $participants;
    }

    /**
     * @return mixed
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * @param $roomId
     */
    public function setRoomId($roomId)
    {
        $this->roomId = $roomId;
    }

    /**
     * @return mixed
     */
    public function getRoomId()
    {
        return $this->roomId;
    }

    /**
     * @param $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param $statusVersion
     */
    public function setStatusVersion($statusVersion)
    {
        $this->statusVersion = $statusVersion;
    }

    /**
     * @return mixed
     */
    public function getStatusVersion()
    {
        return $this->statusVersion;
    }
}

/**
 * Class Google_ScoreSubmission
 */
class Google_ScoreSubmission extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $leaderboardId;
    /**
     * @var
     */
    public $score;

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
     * @param $leaderboardId
     */
    public function setLeaderboardId($leaderboardId)
    {
        $this->leaderboardId = $leaderboardId;
    }

    /**
     * @return mixed
     */
    public function getLeaderboardId()
    {
        return $this->leaderboardId;
    }

    /**
     * @param $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }
}
