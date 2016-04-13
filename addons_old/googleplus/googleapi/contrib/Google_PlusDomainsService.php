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
 * The "activities" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusService = new Google_PlusService(...);
 *   $activities = $plusService->activities;
 *  </code>
 */
class Google_ActivitiesServiceResource extends Google_ServiceResource
{

    /**
     * Get an activity. (activities.get)
     *
     * @param string $activityId The ID of the activity to get.
     * @param array $optParams Optional parameters.
     * @return Google_Activity
     * @throws Google_Exception
     */
    public function get($activityId, $optParams = [])
    {
        $params = ['activityId' => $activityId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Activity($data);
        } else {
            return $data;
        }
    }

    /**
     * Create a new activity for the authenticated user. (activities.insert)
     *
     * @param string $userId The ID of the user to create the activity on behalf of. Its value should be "me", to indicate the authenticated user.
     * @param Google_Activity $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Activity
     * @throws Google_Exception
     * @opt_param bool preview If "true", extract the potential media attachments for a url. The response will include all possible attachments for a url, including video, photos, and articles based on the content of the page.
     */
    public function insert($userId, Google_Activity $postBody, $optParams = [])
    {
        $params = ['userId' => $userId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Activity($data);
        } else {
            return $data;
        }
    }

    /**
     * List all of the activities in the specified collection for a particular user.
     * (activities.list)
     *
     * @param string $userId The ID of the user to get activities for. The special value "me" can be used to indicate the authenticated user.
     * @param string $collection The collection of activities to list.
     * @param array $optParams Optional parameters.
     * @return Google_ActivityFeed
     * @throws Google_Exception
     * @opt_param string maxResults The maximum number of activities to include in the response, which is used for paging. For any response, the actual number returned might be less than the specified maxResults.
     * @opt_param string pageToken The continuation token, which is used to page through large result sets. To get the next page of results, set this parameter to the value of "nextPageToken" from the previous response.
     */
    public function listActivities($userId, $collection, $optParams = [])
    {
        $params = ['userId' => $userId, 'collection' => $collection];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_ActivityFeed($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "audiences" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusService = new Google_PlusService(...);
 *   $audiences = $plusService->audiences;
 *  </code>
 */
class Google_AudiencesServiceResource extends Google_ServiceResource
{

    /**
     * List all of the audiences to which a user can share. (audiences.list)
     *
     * @param string $userId The ID of the user to get audiences for. The special value "me" can be used to indicate the authenticated user.
     * @param array $optParams Optional parameters.
     * @return Google_AudiencesFeed
     * @throws Google_Exception
     * @opt_param string maxResults The maximum number of circles to include in the response, which is used for paging. For any response, the actual number returned might be less than the specified maxResults.
     * @opt_param string pageToken The continuation token, which is used to page through large result sets. To get the next page of results, set this parameter to the value of "nextPageToken" from the previous response.
     */
    public function listAudiences($userId, $optParams = [])
    {
        $params = ['userId' => $userId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_AudiencesFeed($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "circles" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusService = new Google_PlusService(...);
 *   $circles = $plusService->circles;
 *  </code>
 */
class Google_CirclesServiceResource extends Google_ServiceResource
{

    /**
     * Add a person to a circle. Google+ limits certain circle operations, including
     * the number of circle adds. Learn More. (circles.addPeople)
     *
     * @param string $circleId The ID of the circle to add the person to.
     * @param array $optParams Optional parameters.
     * @return Google_Circle
     * @throws Google_Exception
     * @opt_param string email Email of the people to add to the circle. Optional, can be repeated.
     * @opt_param string userId IDs of the people to add to the circle. Optional, can be repeated.
     */
    public function addPeople($circleId, $optParams = [])
    {
        $params = ['circleId' => $circleId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('addPeople', [$params]);
        if ($this->useObjects()) {
            return new Google_Circle($data);
        } else {
            return $data;
        }
    }

    /**
     * Get a circle. (circles.get)
     *
     * @param string $circleId The ID of the circle to get.
     * @param array $optParams Optional parameters.
     * @return Google_Circle
     * @throws Google_Exception
     */
    public function get($circleId, $optParams = [])
    {
        $params = ['circleId' => $circleId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Circle($data);
        } else {
            return $data;
        }
    }

    /**
     * Create a new circle for the authenticated user. (circles.insert)
     *
     * @param string $userId The ID of the user to create the circle on behalf of. The value "me" can be used to indicate the authenticated user.
     * @param Google_Circle $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Circle
     * @throws Google_Exception
     */
    public function insert($userId, Google_Circle $postBody, $optParams = [])
    {
        $params = ['userId' => $userId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Circle($data);
        } else {
            return $data;
        }
    }

    /**
     * List all of the circles for a user. (circles.list)
     *
     * @param string $userId The ID of the user to get circles for. The special value "me" can be used to indicate the authenticated user.
     * @param array $optParams Optional parameters.
     * @return Google_CircleFeed
     * @throws Google_Exception
     * @opt_param string maxResults The maximum number of circles to include in the response, which is used for paging. For any response, the actual number returned might be less than the specified maxResults.
     * @opt_param string pageToken The continuation token, which is used to page through large result sets. To get the next page of results, set this parameter to the value of "nextPageToken" from the previous response.
     */
    public function listCircles($userId, $optParams = [])
    {
        $params = ['userId' => $userId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_CircleFeed($data);
        } else {
            return $data;
        }
    }

    /**
     * Update a circle. This method supports patch semantics. (circles.patch)
     *
     * @param string $circleId The ID of the circle to update.
     * @param Google_Circle $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Circle
     * @throws Google_Exception
     */
    public function patch($circleId, Google_Circle $postBody, $optParams = [])
    {
        $params = ['circleId' => $circleId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Circle($data);
        } else {
            return $data;
        }
    }

    /**
     * Delete a circle. (circles.remove)
     *
     * @param string $circleId The ID of the circle to delete.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function remove($circleId, $optParams = [])
    {
        $params = ['circleId' => $circleId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('remove', [$params]);
        return $data;
    }

    /**
     * Remove a person from a circle. (circles.removePeople)
     *
     * @param string $circleId The ID of the circle to remove the person from.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     * @opt_param string email Email of the people to add to the circle. Optional, can be repeated.
     * @opt_param string userId IDs of the people to remove from the circle. Optional, can be repeated.
     */
    public function removePeople($circleId, $optParams = [])
    {
        $params = ['circleId' => $circleId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('removePeople', [$params]);
        return $data;
    }

    /**
     * Update a circle. (circles.update)
     *
     * @param string $circleId The ID of the circle to update.
     * @param Google_Circle $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Circle
     * @throws Google_Exception
     */
    public function update($circleId, Google_Circle $postBody, $optParams = [])
    {
        $params = ['circleId' => $circleId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Circle($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "comments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusService = new Google_PlusService(...);
 *   $comments = $plusService->comments;
 *  </code>
 */
class Google_CommentsServiceResource extends Google_ServiceResource
{

    /**
     * Get a comment. (comments.get)
     *
     * @param string $commentId The ID of the comment to get.
     * @param array $optParams Optional parameters.
     * @return Google_Comment
     * @throws Google_Exception
     */
    public function get($commentId, $optParams = [])
    {
        $params = ['commentId' => $commentId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Comment($data);
        } else {
            return $data;
        }
    }

    /**
     * Create a new comment in reply to an activity. (comments.insert)
     *
     * @param string $activityId The ID of the activity to reply to.
     * @param Google_Comment $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Comment
     * @throws Google_Exception
     */
    public function insert($activityId, Google_Comment $postBody, $optParams = [])
    {
        $params = ['activityId' => $activityId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Comment($data);
        } else {
            return $data;
        }
    }

    /**
     * List all of the comments for an activity. (comments.list)
     *
     * @param string $activityId The ID of the activity to get comments for.
     * @param array $optParams Optional parameters.
     * @return Google_CommentFeed
     * @throws Google_Exception
     * @opt_param string maxResults The maximum number of comments to include in the response, which is used for paging. For any response, the actual number returned might be less than the specified maxResults.
     * @opt_param string pageToken The continuation token, which is used to page through large result sets. To get the next page of results, set this parameter to the value of "nextPageToken" from the previous response.
     * @opt_param string sortOrder The order in which to sort the list of comments.
     */
    public function listComments($activityId, $optParams = [])
    {
        $params = ['activityId' => $activityId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_CommentFeed($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "media" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusService = new Google_PlusService(...);
 *   $media = $plusService->media;
 *  </code>
 */
class Google_MediaServiceResource extends Google_ServiceResource
{

    /**
     * Add a new media item to an album. The current upload size limitations are
     * 36MB for a photo and 1GB for a video. Uploads will not count against quota if
     * photos are less than 2048 pixels on their longest side or videos are less
     * than 15 minutes in length. (media.insert)
     *
     * @param string $userId The ID of the user to create the activity on behalf of.
     * @param string $collection
     * @param Google_Media $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Media
     * @throws Google_Exception
     */
    public function insert($userId, $collection, Google_Media $postBody, $optParams = [])
    {
        $params = ['userId' => $userId, 'collection' => $collection, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Media($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "people" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusService = new Google_PlusService(...);
 *   $people = $plusService->people;
 *  </code>
 */
class Google_PeopleServiceResource extends Google_ServiceResource
{

    /**
     * Get a person's profile. (people.get)
     *
     * @param string $userId The ID of the person to get the profile for. The special value "me" can be used to indicate the authenticated user.
     * @param array $optParams Optional parameters.
     * @return Google_Person
     * @throws Google_Exception
     */
    public function get($userId, $optParams = [])
    {
        $params = ['userId' => $userId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Person($data);
        } else {
            return $data;
        }
    }

    /**
     * List all of the people in the specified collection. (people.list)
     *
     * @param string $userId Get the collection of people for the person identified. Use "me" to indicate the authenticated user.
     * @param string $collection The collection of people to list.
     * @param array $optParams Optional parameters.
     * @return Google_PeopleFeed
     * @throws Google_Exception
     * @opt_param string maxResults The maximum number of people to include in the response, which is used for paging. For any response, the actual number returned might be less than the specified maxResults.
     * @opt_param string orderBy The order to return people in.
     * @opt_param string pageToken The continuation token, which is used to page through large result sets. To get the next page of results, set this parameter to the value of "nextPageToken" from the previous response.
     */
    public function listPeople($userId, $collection, $optParams = [])
    {
        $params = ['userId' => $userId, 'collection' => $collection];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_PeopleFeed($data);
        } else {
            return $data;
        }
    }

    /**
     * List all of the people in the specified collection for a particular activity.
     * (people.listByActivity)
     *
     * @param string $activityId The ID of the activity to get the list of people for.
     * @param string $collection The collection of people to list.
     * @param array $optParams Optional parameters.
     * @return Google_PeopleFeed
     * @throws Google_Exception
     * @opt_param string maxResults The maximum number of people to include in the response, which is used for paging. For any response, the actual number returned might be less than the specified maxResults.
     * @opt_param string pageToken The continuation token, which is used to page through large result sets. To get the next page of results, set this parameter to the value of "nextPageToken" from the previous response.
     */
    public function listByActivity($activityId, $collection, $optParams = [])
    {
        $params = ['activityId' => $activityId, 'collection' => $collection];
        $params = array_merge($params, $optParams);
        $data = $this->__call('listByActivity', [$params]);
        if ($this->useObjects()) {
            return new Google_PeopleFeed($data);
        } else {
            return $data;
        }
    }

    /**
     * List all of the people who are members of a circle. (people.listByCircle)
     *
     * @param string $circleId The ID of the circle to get the members of.
     * @param array $optParams Optional parameters.
     * @return Google_PeopleFeed
     * @throws Google_Exception
     * @opt_param string maxResults The maximum number of people to include in the response, which is used for paging. For any response, the actual number returned might be less than the specified maxResults.
     * @opt_param string pageToken The continuation token, which is used to page through large result sets. To get the next page of results, set this parameter to the value of "nextPageToken" from the previous response.
     */
    public function listByCircle($circleId, $optParams = [])
    {
        $params = ['circleId' => $circleId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('listByCircle', [$params]);
        if ($this->useObjects()) {
            return new Google_PeopleFeed($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Plus (v1domains).
 *
 * <p>
 * The Google+ API enables developers to build on top of the Google+ platform.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/+/api/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_PlusService extends Google_Service
{
    /**
     * @var Google_ActivitiesServiceResource
     */
    public $activities;
    /**
     * @var Google_AudiencesServiceResource
     */
    public $audiences;
    /**
     * @var Google_CirclesServiceResource
     */
    public $circles;
    /**
     * @var Google_CommentsServiceResource
     */
    public $comments;
    /**
     * @var Google_MediaServiceResource
     */
    public $media;
    /**
     * @var Google_PeopleServiceResource
     */
    public $people;

    /**
     * Constructs the internal representation of the Plus service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'plus/v1domains/';
        $this->version = 'v1domains';
        $this->serviceName = 'plus';

        $client->addService($this->serviceName, $this->version);
        $this->activities = new Google_ActivitiesServiceResource($this, $this->serviceName, 'activities', json_decode('{"methods": {"get": {"id": "plus.activities.get", "path": "activities/{activityId}", "httpMethod": "GET", "parameters": {"activityId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Activity"}, "scopes": ["https://www.googleapis.com/auth/plus.login", "https://www.googleapis.com/auth/plus.me"]}, "insert": {"id": "plus.activities.insert", "path": "people/{userId}/activities", "httpMethod": "POST", "parameters": {"preview": {"type": "boolean", "location": "query"}, "userId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Activity"}, "response": {"$ref": "Activity"}, "scopes": ["https://www.googleapis.com/auth/plus.login", "https://www.googleapis.com/auth/plus.me"]}, "list": {"id": "plus.activities.list", "path": "people/{userId}/activities/{collection}", "httpMethod": "GET", "parameters": {"collection": {"type": "string", "required": true, "enum": ["user"], "location": "path"}, "maxResults": {"type": "integer", "default": "20", "format": "uint32", "minimum": "1", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "userId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "ActivityFeed"}, "scopes": ["https://www.googleapis.com/auth/plus.login", "https://www.googleapis.com/auth/plus.me"]}}}', true));
        $this->audiences = new Google_AudiencesServiceResource($this, $this->serviceName, 'audiences', json_decode('{"methods": {"list": {"id": "plus.audiences.list", "path": "people/{userId}/audiences", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "default": "20", "format": "uint32", "minimum": "1", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "userId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "AudiencesFeed"}, "scopes": ["https://www.googleapis.com/auth/plus.login", "https://www.googleapis.com/auth/plus.me"]}}}', true));
        $this->circles = new Google_CirclesServiceResource($this, $this->serviceName, 'circles', json_decode('{"methods": {"addPeople": {"id": "plus.circles.addPeople", "path": "circles/{circleId}/people", "httpMethod": "PUT", "parameters": {"circleId": {"type": "string", "required": true, "location": "path"}, "email": {"type": "string", "repeated": true, "location": "query"}, "userId": {"type": "string", "repeated": true, "location": "query"}}, "response": {"$ref": "Circle"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "get": {"id": "plus.circles.get", "path": "circles/{circleId}", "httpMethod": "GET", "parameters": {"circleId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Circle"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "insert": {"id": "plus.circles.insert", "path": "people/{userId}/circles", "httpMethod": "POST", "parameters": {"userId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Circle"}, "response": {"$ref": "Circle"}, "scopes": ["https://www.googleapis.com/auth/plus.login", "https://www.googleapis.com/auth/plus.me"]}, "list": {"id": "plus.circles.list", "path": "people/{userId}/circles", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "default": "20", "format": "uint32", "minimum": "1", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "userId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CircleFeed"}, "scopes": ["https://www.googleapis.com/auth/plus.login", "https://www.googleapis.com/auth/plus.me"]}, "patch": {"id": "plus.circles.patch", "path": "circles/{circleId}", "httpMethod": "PATCH", "parameters": {"circleId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Circle"}, "response": {"$ref": "Circle"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "remove": {"id": "plus.circles.remove", "path": "circles/{circleId}", "httpMethod": "DELETE", "parameters": {"circleId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "removePeople": {"id": "plus.circles.removePeople", "path": "circles/{circleId}/people", "httpMethod": "DELETE", "parameters": {"circleId": {"type": "string", "required": true, "location": "path"}, "email": {"type": "string", "repeated": true, "location": "query"}, "userId": {"type": "string", "repeated": true, "location": "query"}}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "update": {"id": "plus.circles.update", "path": "circles/{circleId}", "httpMethod": "PUT", "parameters": {"circleId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Circle"}, "response": {"$ref": "Circle"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}}}', true));
        $this->comments = new Google_CommentsServiceResource($this, $this->serviceName, 'comments', json_decode('{"methods": {"get": {"id": "plus.comments.get", "path": "comments/{commentId}", "httpMethod": "GET", "parameters": {"commentId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Comment"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "insert": {"id": "plus.comments.insert", "path": "activities/{activityId}/comments", "httpMethod": "POST", "parameters": {"activityId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Comment"}, "response": {"$ref": "Comment"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "list": {"id": "plus.comments.list", "path": "activities/{activityId}/comments", "httpMethod": "GET", "parameters": {"activityId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "default": "20", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "sortOrder": {"type": "string", "default": "ascending", "enum": ["ascending", "descending"], "location": "query"}}, "response": {"$ref": "CommentFeed"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}}}', true));
        $this->media = new Google_MediaServiceResource($this, $this->serviceName, 'media', json_decode('{"methods": {"insert": {"id": "plus.media.insert", "path": "people/{userId}/media/{collection}", "httpMethod": "POST", "parameters": {"collection": {"type": "string", "required": true, "enum": ["cloud"], "location": "path"}, "userId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Media"}, "response": {"$ref": "Media"}, "scopes": ["https://www.googleapis.com/auth/plus.login"], "supportsMediaUpload": true, "mediaUpload": {"accept": ["image/*", "video/*"], "protocols": {"simple": {"multipart": true, "path": "/upload/plus/v1domains/people/{userId}/media/{collection}"}, "resumable": {"multipart": true, "path": "/resumable/upload/plus/v1domains/people/{userId}/media/{collection}"}}}}}}', true));
        $this->people = new Google_PeopleServiceResource($this, $this->serviceName, 'people', json_decode('{"methods": {"get": {"id": "plus.people.get", "path": "people/{userId}", "httpMethod": "GET", "parameters": {"userId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Person"}, "scopes": ["https://www.googleapis.com/auth/plus.login", "https://www.googleapis.com/auth/plus.me", "https://www.googleapis.com/auth/plus.profiles.read"]}, "list": {"id": "plus.people.list", "path": "people/{userId}/people/{collection}", "httpMethod": "GET", "parameters": {"collection": {"type": "string", "required": true, "enum": ["circled"], "location": "path"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "1", "maximum": "100", "location": "query"}, "orderBy": {"type": "string", "enum": ["alphabetical", "best"], "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "userId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "PeopleFeed"}, "scopes": ["https://www.googleapis.com/auth/plus.login", "https://www.googleapis.com/auth/plus.me"]}, "listByActivity": {"id": "plus.people.listByActivity", "path": "activities/{activityId}/people/{collection}", "httpMethod": "GET", "parameters": {"activityId": {"type": "string", "required": true, "location": "path"}, "collection": {"type": "string", "required": true, "enum": ["plusoners", "resharers", "sharedto"], "location": "path"}, "maxResults": {"type": "integer", "default": "20", "format": "uint32", "minimum": "1", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "PeopleFeed"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "listByCircle": {"id": "plus.people.listByCircle", "path": "circles/{circleId}/people", "httpMethod": "GET", "parameters": {"circleId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "default": "20", "format": "uint32", "minimum": "1", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "PeopleFeed"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}}}', true));

    }
}


/**
 * Class Google_Acl
 */
class Google_Acl extends Google_Model
{
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $domainRestricted;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_PlusAclentryResource';
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
     * @param $domainRestricted
     */
    public function setDomainRestricted($domainRestricted)
    {
        $this->domainRestricted = $domainRestricted;
    }

    /**
     * @return mixed
     */
    public function getDomainRestricted()
    {
        return $this->domainRestricted;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_PlusAclentryResource) */
        $items)
    {
        $this->assertIsArray($items, 'Google_PlusAclentryResource', __METHOD__);
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
}

/**
 * Class Google_Activity
 */
class Google_Activity extends Google_Model
{
    /**
     * @var string
     */
    protected $__accessType = 'Google_Acl';
    /**
     * @var string
     */
    protected $__accessDataType = '';
    /**
     * @var
     */
    public $access;
    /**
     * @var string
     */
    protected $__actorType = 'Google_ActivityActor';
    /**
     * @var string
     */
    protected $__actorDataType = '';
    /**
     * @var
     */
    public $actor;
    /**
     * @var
     */
    public $address;
    /**
     * @var
     */
    public $annotation;
    /**
     * @var
     */
    public $crosspostSource;
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $geocode;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__locationType = 'Google_Place';
    /**
     * @var string
     */
    protected $__locationDataType = '';
    /**
     * @var
     */
    public $location;
    /**
     * @var string
     */
    protected $__objectType = 'Google_ActivityObject';
    /**
     * @var string
     */
    protected $__objectDataType = '';
    /**
     * @var
     */
    public $object;
    /**
     * @var
     */
    public $placeId;
    /**
     * @var
     */
    public $placeName;
    /**
     * @var string
     */
    protected $__providerType = 'Google_ActivityProvider';
    /**
     * @var string
     */
    protected $__providerDataType = '';
    /**
     * @var
     */
    public $provider;
    /**
     * @var
     */
    public $published;
    /**
     * @var
     */
    public $radius;
    /**
     * @var
     */
    public $title;
    /**
     * @var
     */
    public $updated;
    /**
     * @var
     */
    public $url;
    /**
     * @var
     */
    public $verb;

    /**
     * @param Google_Acl $access
     */
    public function setAccess(Google_Acl $access)
    {
        $this->access = $access;
    }

    /**
     * @return mixed
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * @param Google_ActivityActor $actor
     */
    public function setActor(Google_ActivityActor $actor)
    {
        $this->actor = $actor;
    }

    /**
     * @return mixed
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @param $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param $annotation
     */
    public function setAnnotation($annotation)
    {
        $this->annotation = $annotation;
    }

    /**
     * @return mixed
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }

    /**
     * @param $crosspostSource
     */
    public function setCrosspostSource($crosspostSource)
    {
        $this->crosspostSource = $crosspostSource;
    }

    /**
     * @return mixed
     */
    public function getCrosspostSource()
    {
        return $this->crosspostSource;
    }

    /**
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param $geocode
     */
    public function setGeocode($geocode)
    {
        $this->geocode = $geocode;
    }

    /**
     * @return mixed
     */
    public function getGeocode()
    {
        return $this->geocode;
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
     * @param Google_Place $location
     */
    public function setLocation(Google_Place $location)
    {
        $this->location = $location;
    }

    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param Google_ActivityObject $object
     */
    public function setObject(Google_ActivityObject $object)
    {
        $this->object = $object;
    }

    /**
     * @return mixed
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param $placeId
     */
    public function setPlaceId($placeId)
    {
        $this->placeId = $placeId;
    }

    /**
     * @return mixed
     */
    public function getPlaceId()
    {
        return $this->placeId;
    }

    /**
     * @param $placeName
     */
    public function setPlaceName($placeName)
    {
        $this->placeName = $placeName;
    }

    /**
     * @return mixed
     */
    public function getPlaceName()
    {
        return $this->placeName;
    }

    /**
     * @param Google_ActivityProvider $provider
     */
    public function setProvider(Google_ActivityProvider $provider)
    {
        $this->provider = $provider;
    }

    /**
     * @return mixed
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param $published
     */
    public function setPublished($published)
    {
        $this->published = $published;
    }

    /**
     * @return mixed
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * @param $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getUpdated()
    {
        return $this->updated;
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
     * @param $verb
     */
    public function setVerb($verb)
    {
        $this->verb = $verb;
    }

    /**
     * @return mixed
     */
    public function getVerb()
    {
        return $this->verb;
    }
}

/**
 * Class Google_ActivityActor
 */
class Google_ActivityActor extends Google_Model
{
    /**
     * @var
     */
    public $displayName;
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__imageType = 'Google_ActivityActorImage';
    /**
     * @var string
     */
    protected $__imageDataType = '';
    /**
     * @var
     */
    public $image;
    /**
     * @var string
     */
    protected $__nameType = 'Google_ActivityActorName';
    /**
     * @var string
     */
    protected $__nameDataType = '';
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $url;

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
     * @param Google_ActivityActorImage $image
     */
    public function setImage(Google_ActivityActorImage $image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param Google_ActivityActorName $name
     */
    public function setName(Google_ActivityActorName $name)
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
}

/**
 * Class Google_ActivityActorImage
 */
class Google_ActivityActorImage extends Google_Model
{
    /**
     * @var
     */
    public $url;

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
}

/**
 * Class Google_ActivityActorName
 */
class Google_ActivityActorName extends Google_Model
{
    /**
     * @var
     */
    public $familyName;
    /**
     * @var
     */
    public $givenName;

    /**
     * @param $familyName
     */
    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
    }

    /**
     * @return mixed
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * @param $givenName
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }

    /**
     * @return mixed
     */
    public function getGivenName()
    {
        return $this->givenName;
    }
}

/**
 * Class Google_ActivityFeed
 */
class Google_ActivityFeed extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Activity';
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
    public $nextLink;
    /**
     * @var
     */
    public $nextPageToken;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $title;
    /**
     * @var
     */
    public $updated;

    /**
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
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
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Activity) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Activity', __METHOD__);
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
     * @param $nextLink
     */
    public function setNextLink($nextLink)
    {
        $this->nextLink = $nextLink;
    }

    public function getNextLink()
    {
        return $this->nextLink;
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
     * @param $selfLink
     */
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getUpdated()
    {
        return $this->updated;
    }
}

/**
 * Class Google_ActivityObject
 */
class Google_ActivityObject extends Google_Model
{
    /**
     * @var string
     */
    protected $__actorType = 'Google_ActivityObjectActor';
    /**
     * @var string
     */
    protected $__actorDataType = '';
    /**
     * @var
     */
    public $actor;
    /**
     * @var string
     */
    protected $__attachmentsType = 'Google_ActivityObjectAttachments';
    /**
     * @var string
     */
    protected $__attachmentsDataType = 'array';
    /**
     * @var
     */
    public $attachments;
    /**
     * @var
     */
    public $content;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $objectType;
    /**
     * @var
     */
    public $originalContent;
    /**
     * @var string
     */
    protected $__plusonersType = 'Google_ActivityObjectPlusoners';
    /**
     * @var string
     */
    protected $__plusonersDataType = '';
    /**
     * @var
     */
    public $plusoners;
    /**
     * @var string
     */
    protected $__repliesType = 'Google_ActivityObjectReplies';
    /**
     * @var string
     */
    protected $__repliesDataType = '';
    /**
     * @var
     */
    public $replies;
    /**
     * @var string
     */
    protected $__resharersType = 'Google_ActivityObjectResharers';
    /**
     * @var string
     */
    protected $__resharersDataType = '';
    /**
     * @var
     */
    public $resharers;
    /**
     * @var string
     */
    protected $__statusForViewerType = 'Google_ActivityObjectStatusForViewer';
    /**
     * @var string
     */
    protected $__statusForViewerDataType = '';
    /**
     * @var
     */
    public $statusForViewer;
    /**
     * @var
     */
    public $url;

    /**
     * @param Google_ActivityObjectActor $actor
     */
    public function setActor(Google_ActivityObjectActor $actor)
    {
        $this->actor = $actor;
    }

    /**
     * @return mixed
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @param $attachments
     * @throws Google_Exception
     */
    public function setAttachments(/* array(Google_ActivityObjectAttachments) */
        $attachments)
    {
        $this->assertIsArray($attachments, 'Google_ActivityObjectAttachments', __METHOD__);
        $this->attachments = $attachments;
    }

    /**
     * @return mixed
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
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
     * @param $objectType
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    }

    /**
     * @return mixed
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * @param $originalContent
     */
    public function setOriginalContent($originalContent)
    {
        $this->originalContent = $originalContent;
    }

    /**
     * @return mixed
     */
    public function getOriginalContent()
    {
        return $this->originalContent;
    }

    /**
     * @param Google_ActivityObjectPlusoners $plusoners
     */
    public function setPlusoners(Google_ActivityObjectPlusoners $plusoners)
    {
        $this->plusoners = $plusoners;
    }

    /**
     * @return mixed
     */
    public function getPlusoners()
    {
        return $this->plusoners;
    }

    /**
     * @param Google_ActivityObjectReplies $replies
     */
    public function setReplies(Google_ActivityObjectReplies $replies)
    {
        $this->replies = $replies;
    }

    /**
     * @return mixed
     */
    public function getReplies()
    {
        return $this->replies;
    }

    /**
     * @param Google_ActivityObjectResharers $resharers
     */
    public function setResharers(Google_ActivityObjectResharers $resharers)
    {
        $this->resharers = $resharers;
    }

    /**
     * @return mixed
     */
    public function getResharers()
    {
        return $this->resharers;
    }

    /**
     * @param Google_ActivityObjectStatusForViewer $statusForViewer
     */
    public function setStatusForViewer(Google_ActivityObjectStatusForViewer $statusForViewer)
    {
        $this->statusForViewer = $statusForViewer;
    }

    /**
     * @return mixed
     */
    public function getStatusForViewer()
    {
        return $this->statusForViewer;
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
}

/**
 * Class Google_ActivityObjectActor
 */
class Google_ActivityObjectActor extends Google_Model
{
    /**
     * @var
     */
    public $displayName;
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__imageType = 'Google_ActivityObjectActorImage';
    /**
     * @var string
     */
    protected $__imageDataType = '';
    /**
     * @var
     */
    public $image;
    /**
     * @var
     */
    public $url;

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
     * @param Google_ActivityObjectActorImage $image
     */
    public function setImage(Google_ActivityObjectActorImage $image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
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
}

/**
 * Class Google_ActivityObjectActorImage
 */
class Google_ActivityObjectActorImage extends Google_Model
{
    /**
     * @var
     */
    public $url;

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
}

/**
 * Class Google_ActivityObjectAttachments
 */
class Google_ActivityObjectAttachments extends Google_Model
{
    /**
     * @var
     */
    public $content;
    /**
     * @var
     */
    public $displayName;
    /**
     * @var string
     */
    protected $__embedType = 'Google_ActivityObjectAttachmentsEmbed';
    /**
     * @var string
     */
    protected $__embedDataType = '';
    /**
     * @var
     */
    public $embed;
    /**
     * @var string
     */
    protected $__fullImageType = 'Google_ActivityObjectAttachmentsFullImage';
    /**
     * @var string
     */
    protected $__fullImageDataType = '';
    /**
     * @var
     */
    public $fullImage;
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__imageType = 'Google_ActivityObjectAttachmentsImage';
    /**
     * @var string
     */
    protected $__imageDataType = '';
    /**
     * @var
     */
    public $image;
    /**
     * @var
     */
    public $objectType;
    /**
     * @var string
     */
    protected $__previewThumbnailsType = 'Google_ActivityObjectAttachmentsPreviewThumbnails';
    /**
     * @var string
     */
    protected $__previewThumbnailsDataType = 'array';
    /**
     * @var
     */
    public $previewThumbnails;
    /**
     * @var string
     */
    protected $__thumbnailsType = 'Google_ActivityObjectAttachmentsThumbnails';
    /**
     * @var string
     */
    protected $__thumbnailsDataType = 'array';
    /**
     * @var
     */
    public $thumbnails;
    /**
     * @var
     */
    public $url;

    /**
     * @param $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
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
     * @param Google_ActivityObjectAttachmentsEmbed $embed
     */
    public function setEmbed(Google_ActivityObjectAttachmentsEmbed $embed)
    {
        $this->embed = $embed;
    }

    /**
     * @return mixed
     */
    public function getEmbed()
    {
        return $this->embed;
    }

    /**
     * @param Google_ActivityObjectAttachmentsFullImage $fullImage
     */
    public function setFullImage(Google_ActivityObjectAttachmentsFullImage $fullImage)
    {
        $this->fullImage = $fullImage;
    }

    /**
     * @return mixed
     */
    public function getFullImage()
    {
        return $this->fullImage;
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
     * @param Google_ActivityObjectAttachmentsImage $image
     */
    public function setImage(Google_ActivityObjectAttachmentsImage $image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param $objectType
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    }

    /**
     * @return mixed
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * @param $previewThumbnails
     * @throws Google_Exception
     */
    public function setPreviewThumbnails(/* array(Google_ActivityObjectAttachmentsPreviewThumbnails) */
        $previewThumbnails)
    {
        $this->assertIsArray($previewThumbnails, 'Google_ActivityObjectAttachmentsPreviewThumbnails', __METHOD__);
        $this->previewThumbnails = $previewThumbnails;
    }

    /**
     * @return mixed
     */
    public function getPreviewThumbnails()
    {
        return $this->previewThumbnails;
    }

    /**
     * @param $thumbnails
     * @throws Google_Exception
     */
    public function setThumbnails(/* array(Google_ActivityObjectAttachmentsThumbnails) */
        $thumbnails)
    {
        $this->assertIsArray($thumbnails, 'Google_ActivityObjectAttachmentsThumbnails', __METHOD__);
        $this->thumbnails = $thumbnails;
    }

    /**
     * @return mixed
     */
    public function getThumbnails()
    {
        return $this->thumbnails;
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
}

/**
 * Class Google_ActivityObjectAttachmentsEmbed
 */
class Google_ActivityObjectAttachmentsEmbed extends Google_Model
{
    /**
     * @var
     */
    public $type;
    /**
     * @var
     */
    public $url;

    /**
     * @param $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
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
}

/**
 * Class Google_ActivityObjectAttachmentsFullImage
 */
class Google_ActivityObjectAttachmentsFullImage extends Google_Model
{
    /**
     * @var
     */
    public $height;
    /**
     * @var
     */
    public $type;
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
     * @param $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
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
 * Class Google_ActivityObjectAttachmentsImage
 */
class Google_ActivityObjectAttachmentsImage extends Google_Model
{
    /**
     * @var
     */
    public $height;
    /**
     * @var
     */
    public $type;
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

    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
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

    public function getWidth()
    {
        return $this->width;
    }
}

/**
 * Class Google_ActivityObjectAttachmentsPreviewThumbnails
 */
class Google_ActivityObjectAttachmentsPreviewThumbnails extends Google_Model
{
    /**
     * @var
     */
    public $url;

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
}

/**
 * Class Google_ActivityObjectAttachmentsThumbnails
 */
class Google_ActivityObjectAttachmentsThumbnails extends Google_Model
{
    /**
     * @var
     */
    public $description;
    /**
     * @var string
     */
    protected $__imageType = 'Google_ActivityObjectAttachmentsThumbnailsImage';
    /**
     * @var string
     */
    protected $__imageDataType = '';
    /**
     * @var
     */
    public $image;
    /**
     * @var
     */
    public $url;

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
     * @param Google_ActivityObjectAttachmentsThumbnailsImage $image
     */
    public function setImage(Google_ActivityObjectAttachmentsThumbnailsImage $image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
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
}

/**
 * Class Google_ActivityObjectAttachmentsThumbnailsImage
 */
class Google_ActivityObjectAttachmentsThumbnailsImage extends Google_Model
{
    /**
     * @var
     */
    public $height;
    /**
     * @var
     */
    public $type;
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

    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
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

    public function getWidth()
    {
        return $this->width;
    }
}

/**
 * Class Google_ActivityObjectPlusoners
 */
class Google_ActivityObjectPlusoners extends Google_Model
{
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $totalItems;

    /**
     * @param $selfLink
     */
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    /**
     * @param $totalItems
     */
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }

    public function getTotalItems()
    {
        return $this->totalItems;
    }
}

/**
 * Class Google_ActivityObjectReplies
 */
class Google_ActivityObjectReplies extends Google_Model
{
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $totalItems;

    /**
     * @param $selfLink
     */
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    /**
     * @param $totalItems
     */
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }

    public function getTotalItems()
    {
        return $this->totalItems;
    }
}

/**
 * Class Google_ActivityObjectResharers
 */
class Google_ActivityObjectResharers extends Google_Model
{
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $totalItems;

    /**
     * @param $selfLink
     */
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    /**
     * @param $totalItems
     */
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }

    public function getTotalItems()
    {
        return $this->totalItems;
    }
}

/**
 * Class Google_ActivityObjectStatusForViewer
 */
class Google_ActivityObjectStatusForViewer extends Google_Model
{
    /**
     * @var
     */
    public $canComment;
    /**
     * @var
     */
    public $canPlusone;
    /**
     * @var
     */
    public $isPlusOned;
    /**
     * @var
     */
    public $resharingDisabled;

    /**
     * @param $canComment
     */
    public function setCanComment($canComment)
    {
        $this->canComment = $canComment;
    }

    /**
     * @return mixed
     */
    public function getCanComment()
    {
        return $this->canComment;
    }

    /**
     * @param $canPlusone
     */
    public function setCanPlusone($canPlusone)
    {
        $this->canPlusone = $canPlusone;
    }

    /**
     * @return mixed
     */
    public function getCanPlusone()
    {
        return $this->canPlusone;
    }

    /**
     * @param $isPlusOned
     */
    public function setIsPlusOned($isPlusOned)
    {
        $this->isPlusOned = $isPlusOned;
    }

    /**
     * @return mixed
     */
    public function getIsPlusOned()
    {
        return $this->isPlusOned;
    }

    /**
     * @param $resharingDisabled
     */
    public function setResharingDisabled($resharingDisabled)
    {
        $this->resharingDisabled = $resharingDisabled;
    }

    /**
     * @return mixed
     */
    public function getResharingDisabled()
    {
        return $this->resharingDisabled;
    }
}

/**
 * Class Google_ActivityProvider
 */
class Google_ActivityProvider extends Google_Model
{
    /**
     * @var
     */
    public $title;

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}

/**
 * Class Google_Audience
 */
class Google_Audience extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemType = 'Google_PlusAclentryResource';
    /**
     * @var string
     */
    protected $__itemDataType = '';
    /**
     * @var
     */
    public $item;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $visibility;

    /**
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param Google_PlusAclentryResource $item
     */
    public function setItem(Google_PlusAclentryResource $item)
    {
        $this->item = $item;
    }

    /**
     * @return mixed
     */
    public function getItem()
    {
        return $this->item;
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
     * @param $visibility
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
    }

    /**
     * @return mixed
     */
    public function getVisibility()
    {
        return $this->visibility;
    }
}

/**
 * Class Google_AudiencesFeed
 */
class Google_AudiencesFeed extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Audience';
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
    public $totalItems;

    /**
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Audience) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Audience', __METHOD__);
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
     * @param $totalItems
     */
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }

    public function getTotalItems()
    {
        return $this->totalItems;
    }
}

/**
 * Class Google_Circle
 */
class Google_Circle extends Google_Model
{
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $displayName;
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__peopleType = 'Google_CirclePeople';
    /**
     * @var string
     */
    protected $__peopleDataType = '';
    /**
     * @var
     */
    public $people;
    /**
     * @var
     */
    public $selfLink;

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
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
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
     * @param Google_CirclePeople $people
     */
    public function setPeople(Google_CirclePeople $people)
    {
        $this->people = $people;
    }

    /**
     * @return mixed
     */
    public function getPeople()
    {
        return $this->people;
    }

    /**
     * @param $selfLink
     */
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }
}

/**
 * Class Google_CircleFeed
 */
class Google_CircleFeed extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Circle';
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
    public $nextLink;
    /**
     * @var
     */
    public $nextPageToken;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $title;
    /**
     * @var
     */
    public $totalItems;

    /**
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Circle) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Circle', __METHOD__);
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
     * @param $nextLink
     */
    public function setNextLink($nextLink)
    {
        $this->nextLink = $nextLink;
    }

    public function getNextLink()
    {
        return $this->nextLink;
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
     * @param $selfLink
     */
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param $totalItems
     */
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }

    public function getTotalItems()
    {
        return $this->totalItems;
    }
}

/**
 * Class Google_CirclePeople
 */
class Google_CirclePeople extends Google_Model
{
    /**
     * @var
     */
    public $totalItems;

    /**
     * @param $totalItems
     */
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }

    public function getTotalItems()
    {
        return $this->totalItems;
    }
}

/**
 * Class Google_Comment
 */
class Google_Comment extends Google_Model
{
    /**
     * @var string
     */
    protected $__actorType = 'Google_CommentActor';
    /**
     * @var string
     */
    protected $__actorDataType = '';
    /**
     * @var
     */
    public $actor;
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__inReplyToType = 'Google_CommentInReplyTo';
    /**
     * @var string
     */
    protected $__inReplyToDataType = 'array';
    /**
     * @var
     */
    public $inReplyTo;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__objectType = 'Google_CommentObject';
    /**
     * @var string
     */
    protected $__objectDataType = '';
    /**
     * @var
     */
    public $object;
    /**
     * @var string
     */
    protected $__plusonersType = 'Google_CommentPlusoners';
    /**
     * @var string
     */
    protected $__plusonersDataType = '';
    /**
     * @var
     */
    public $plusoners;
    /**
     * @var
     */
    public $published;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $updated;
    /**
     * @var
     */
    public $verb;

    /**
     * @param Google_CommentActor $actor
     */
    public function setActor(Google_CommentActor $actor)
    {
        $this->actor = $actor;
    }

    /**
     * @return mixed
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
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
     * @param $inReplyTo
     * @throws Google_Exception
     */
    public function setInReplyTo(/* array(Google_CommentInReplyTo) */
        $inReplyTo)
    {
        $this->assertIsArray($inReplyTo, 'Google_CommentInReplyTo', __METHOD__);
        $this->inReplyTo = $inReplyTo;
    }

    /**
     * @return mixed
     */
    public function getInReplyTo()
    {
        return $this->inReplyTo;
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
     * @param Google_CommentObject $object
     */
    public function setObject(Google_CommentObject $object)
    {
        $this->object = $object;
    }

    /**
     * @return mixed
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param Google_CommentPlusoners $plusoners
     */
    public function setPlusoners(Google_CommentPlusoners $plusoners)
    {
        $this->plusoners = $plusoners;
    }

    /**
     * @return mixed
     */
    public function getPlusoners()
    {
        return $this->plusoners;
    }

    /**
     * @param $published
     */
    public function setPublished($published)
    {
        $this->published = $published;
    }

    /**
     * @return mixed
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * @param $selfLink
     */
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    /**
     * @param $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param $verb
     */
    public function setVerb($verb)
    {
        $this->verb = $verb;
    }

    /**
     * @return mixed
     */
    public function getVerb()
    {
        return $this->verb;
    }
}

/**
 * Class Google_CommentActor
 */
class Google_CommentActor extends Google_Model
{
    /**
     * @var
     */
    public $displayName;
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__imageType = 'Google_CommentActorImage';
    /**
     * @var string
     */
    protected $__imageDataType = '';
    /**
     * @var
     */
    public $image;
    /**
     * @var
     */
    public $url;

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
     * @param Google_CommentActorImage $image
     */
    public function setImage(Google_CommentActorImage $image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
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
}

/**
 * Class Google_CommentActorImage
 */
class Google_CommentActorImage extends Google_Model
{
    /**
     * @var
     */
    public $url;

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
}

/**
 * Class Google_CommentFeed
 */
class Google_CommentFeed extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Comment';
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
    public $nextLink;
    /**
     * @var
     */
    public $nextPageToken;
    /**
     * @var
     */
    public $title;
    /**
     * @var
     */
    public $updated;

    /**
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
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
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Comment) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Comment', __METHOD__);
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
     * @param $nextLink
     */
    public function setNextLink($nextLink)
    {
        $this->nextLink = $nextLink;
    }

    public function getNextLink()
    {
        return $this->nextLink;
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
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getUpdated()
    {
        return $this->updated;
    }
}

/**
 * Class Google_CommentInReplyTo
 */
class Google_CommentInReplyTo extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $url;

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
}

/**
 * Class Google_CommentObject
 */
class Google_CommentObject extends Google_Model
{
    /**
     * @var
     */
    public $content;
    /**
     * @var
     */
    public $objectType;
    /**
     * @var
     */
    public $originalContent;

    /**
     * @param $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param $objectType
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    }

    /**
     * @return mixed
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * @param $originalContent
     */
    public function setOriginalContent($originalContent)
    {
        $this->originalContent = $originalContent;
    }

    /**
     * @return mixed
     */
    public function getOriginalContent()
    {
        return $this->originalContent;
    }
}

/**
 * Class Google_CommentPlusoners
 */
class Google_CommentPlusoners extends Google_Model
{
    /**
     * @var
     */
    public $totalItems;

    /**
     * @param $totalItems
     */
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }

    public function getTotalItems()
    {
        return $this->totalItems;
    }
}

/**
 * Class Google_Media
 */
class Google_Media extends Google_Model
{
    /**
     * @var string
     */
    protected $__authorType = 'Google_MediaAuthor';
    /**
     * @var string
     */
    protected $__authorDataType = '';
    /**
     * @var
     */
    public $author;
    /**
     * @var
     */
    public $displayName;
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__exifType = 'Google_MediaExif';
    /**
     * @var string
     */
    protected $__exifDataType = '';
    /**
     * @var
     */
    public $exif;
    /**
     * @var
     */
    public $height;
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
    public $mediaUrl;
    /**
     * @var
     */
    public $published;
    /**
     * @var
     */
    public $sizeBytes;
    /**
     * @var string
     */
    protected $__streamsType = 'Google_Videostream';
    /**
     * @var string
     */
    protected $__streamsDataType = 'array';
    /**
     * @var
     */
    public $streams;
    /**
     * @var
     */
    public $summary;
    /**
     * @var
     */
    public $updated;
    /**
     * @var
     */
    public $url;
    /**
     * @var
     */
    public $videoDuration;
    /**
     * @var
     */
    public $videoStatus;
    /**
     * @var
     */
    public $width;

    /**
     * @param Google_MediaAuthor $author
     */
    public function setAuthor(Google_MediaAuthor $author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
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
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param Google_MediaExif $exif
     */
    public function setExif(Google_MediaExif $exif)
    {
        $this->exif = $exif;
    }

    /**
     * @return mixed
     */
    public function getExif()
    {
        return $this->exif;
    }

    /**
     * @param $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
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
     * @param $mediaUrl
     */
    public function setMediaUrl($mediaUrl)
    {
        $this->mediaUrl = $mediaUrl;
    }

    /**
     * @return mixed
     */
    public function getMediaUrl()
    {
        return $this->mediaUrl;
    }

    /**
     * @param $published
     */
    public function setPublished($published)
    {
        $this->published = $published;
    }

    /**
     * @return mixed
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * @param $sizeBytes
     */
    public function setSizeBytes($sizeBytes)
    {
        $this->sizeBytes = $sizeBytes;
    }

    /**
     * @return mixed
     */
    public function getSizeBytes()
    {
        return $this->sizeBytes;
    }

    /**
     * @param $streams
     * @throws Google_Exception
     */
    public function setStreams(/* array(Google_Videostream) */
        $streams)
    {
        $this->assertIsArray($streams, 'Google_Videostream', __METHOD__);
        $this->streams = $streams;
    }

    /**
     * @return mixed
     */
    public function getStreams()
    {
        return $this->streams;
    }

    /**
     * @param $summary
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    /**
     * @return mixed
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getUpdated()
    {
        return $this->updated;
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
     * @param $videoDuration
     */
    public function setVideoDuration($videoDuration)
    {
        $this->videoDuration = $videoDuration;
    }

    /**
     * @return mixed
     */
    public function getVideoDuration()
    {
        return $this->videoDuration;
    }

    /**
     * @param $videoStatus
     */
    public function setVideoStatus($videoStatus)
    {
        $this->videoStatus = $videoStatus;
    }

    /**
     * @return mixed
     */
    public function getVideoStatus()
    {
        return $this->videoStatus;
    }

    /**
     * @param $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }
}

/**
 * Class Google_MediaAuthor
 */
class Google_MediaAuthor extends Google_Model
{
    /**
     * @var
     */
    public $displayName;
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__imageType = 'Google_MediaAuthorImage';
    /**
     * @var string
     */
    protected $__imageDataType = '';
    /**
     * @var
     */
    public $image;
    /**
     * @var
     */
    public $url;

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
     * @param Google_MediaAuthorImage $image
     */
    public function setImage(Google_MediaAuthorImage $image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
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
}

/**
 * Class Google_MediaAuthorImage
 */
class Google_MediaAuthorImage extends Google_Model
{
    /**
     * @var
     */
    public $url;

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
}

/**
 * Class Google_MediaExif
 */
class Google_MediaExif extends Google_Model
{
    /**
     * @var
     */
    public $time;

    /**
     * @param $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }
}

/**
 * Class Google_PeopleFeed
 */
class Google_PeopleFeed extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Person';
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
    public $selfLink;
    /**
     * @var
     */
    public $title;
    /**
     * @var
     */
    public $totalItems;

    /**
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Person) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Person', __METHOD__);
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
     * @param $selfLink
     */
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param $totalItems
     */
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }

    public function getTotalItems()
    {
        return $this->totalItems;
    }
}

/**
 * Class Google_Person
 */
class Google_Person extends Google_Model
{
    /**
     * @var
     */
    public $aboutMe;
    /**
     * @var
     */
    public $birthday;
    /**
     * @var
     */
    public $braggingRights;
    /**
     * @var
     */
    public $circledByCount;
    /**
     * @var string
     */
    protected $__coverType = 'Google_PersonCover';
    /**
     * @var string
     */
    protected $__coverDataType = '';
    /**
     * @var
     */
    public $cover;
    /**
     * @var
     */
    public $currentLocation;
    /**
     * @var
     */
    public $displayName;
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $gender;
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__imageType = 'Google_PersonImage';
    /**
     * @var string
     */
    protected $__imageDataType = '';
    /**
     * @var
     */
    public $image;
    /**
     * @var
     */
    public $isPlusUser;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__nameType = 'Google_PersonName';
    /**
     * @var string
     */
    protected $__nameDataType = '';
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $nickname;
    /**
     * @var
     */
    public $objectType;
    /**
     * @var string
     */
    protected $__organizationsType = 'Google_PersonOrganizations';
    /**
     * @var string
     */
    protected $__organizationsDataType = 'array';
    /**
     * @var
     */
    public $organizations;
    /**
     * @var string
     */
    protected $__placesLivedType = 'Google_PersonPlacesLived';
    /**
     * @var string
     */
    protected $__placesLivedDataType = 'array';
    /**
     * @var
     */
    public $placesLived;
    /**
     * @var
     */
    public $plusOneCount;
    /**
     * @var
     */
    public $relationshipStatus;
    /**
     * @var
     */
    public $tagline;
    /**
     * @var
     */
    public $url;
    /**
     * @var string
     */
    protected $__urlsType = 'Google_PersonUrls';
    /**
     * @var string
     */
    protected $__urlsDataType = 'array';
    /**
     * @var
     */
    public $urls;
    /**
     * @var
     */
    public $verified;

    /**
     * @param $aboutMe
     */
    public function setAboutMe($aboutMe)
    {
        $this->aboutMe = $aboutMe;
    }

    /**
     * @return mixed
     */
    public function getAboutMe()
    {
        return $this->aboutMe;
    }

    /**
     * @param $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param $braggingRights
     */
    public function setBraggingRights($braggingRights)
    {
        $this->braggingRights = $braggingRights;
    }

    /**
     * @return mixed
     */
    public function getBraggingRights()
    {
        return $this->braggingRights;
    }

    /**
     * @param $circledByCount
     */
    public function setCircledByCount($circledByCount)
    {
        $this->circledByCount = $circledByCount;
    }

    /**
     * @return mixed
     */
    public function getCircledByCount()
    {
        return $this->circledByCount;
    }

    /**
     * @param Google_PersonCover $cover
     */
    public function setCover(Google_PersonCover $cover)
    {
        $this->cover = $cover;
    }

    /**
     * @return mixed
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * @param $currentLocation
     */
    public function setCurrentLocation($currentLocation)
    {
        $this->currentLocation = $currentLocation;
    }

    /**
     * @return mixed
     */
    public function getCurrentLocation()
    {
        return $this->currentLocation;
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
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
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
     * @param Google_PersonImage $image
     */
    public function setImage(Google_PersonImage $image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param $isPlusUser
     */
    public function setIsPlusUser($isPlusUser)
    {
        $this->isPlusUser = $isPlusUser;
    }

    /**
     * @return mixed
     */
    public function getIsPlusUser()
    {
        return $this->isPlusUser;
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
     * @param Google_PersonName $name
     */
    public function setName(Google_PersonName $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $nickname
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

    /**
     * @return mixed
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @param $objectType
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    }

    /**
     * @return mixed
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * @param $organizations
     * @throws Google_Exception
     */
    public function setOrganizations(/* array(Google_PersonOrganizations) */
        $organizations)
    {
        $this->assertIsArray($organizations, 'Google_PersonOrganizations', __METHOD__);
        $this->organizations = $organizations;
    }

    /**
     * @return mixed
     */
    public function getOrganizations()
    {
        return $this->organizations;
    }

    /**
     * @param $placesLived
     * @throws Google_Exception
     */
    public function setPlacesLived(/* array(Google_PersonPlacesLived) */
        $placesLived)
    {
        $this->assertIsArray($placesLived, 'Google_PersonPlacesLived', __METHOD__);
        $this->placesLived = $placesLived;
    }

    /**
     * @return mixed
     */
    public function getPlacesLived()
    {
        return $this->placesLived;
    }

    /**
     * @param $plusOneCount
     */
    public function setPlusOneCount($plusOneCount)
    {
        $this->plusOneCount = $plusOneCount;
    }

    /**
     * @return mixed
     */
    public function getPlusOneCount()
    {
        return $this->plusOneCount;
    }

    /**
     * @param $relationshipStatus
     */
    public function setRelationshipStatus($relationshipStatus)
    {
        $this->relationshipStatus = $relationshipStatus;
    }

    /**
     * @return mixed
     */
    public function getRelationshipStatus()
    {
        return $this->relationshipStatus;
    }

    /**
     * @param $tagline
     */
    public function setTagline($tagline)
    {
        $this->tagline = $tagline;
    }

    /**
     * @return mixed
     */
    public function getTagline()
    {
        return $this->tagline;
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
     * @param $urls
     * @throws Google_Exception
     */
    public function setUrls(/* array(Google_PersonUrls) */
        $urls)
    {
        $this->assertIsArray($urls, 'Google_PersonUrls', __METHOD__);
        $this->urls = $urls;
    }

    /**
     * @return mixed
     */
    public function getUrls()
    {
        return $this->urls;
    }

    /**
     * @param $verified
     */
    public function setVerified($verified)
    {
        $this->verified = $verified;
    }

    /**
     * @return mixed
     */
    public function getVerified()
    {
        return $this->verified;
    }
}

/**
 * Class Google_PersonCover
 */
class Google_PersonCover extends Google_Model
{
    /**
     * @var string
     */
    protected $__coverInfoType = 'Google_PersonCoverCoverInfo';
    /**
     * @var string
     */
    protected $__coverInfoDataType = '';
    /**
     * @var
     */
    public $coverInfo;
    /**
     * @var string
     */
    protected $__coverPhotoType = 'Google_PersonCoverCoverPhoto';
    /**
     * @var string
     */
    protected $__coverPhotoDataType = '';
    /**
     * @var
     */
    public $coverPhoto;
    /**
     * @var
     */
    public $layout;

    /**
     * @param Google_PersonCoverCoverInfo $coverInfo
     */
    public function setCoverInfo(Google_PersonCoverCoverInfo $coverInfo)
    {
        $this->coverInfo = $coverInfo;
    }

    /**
     * @return mixed
     */
    public function getCoverInfo()
    {
        return $this->coverInfo;
    }

    /**
     * @param Google_PersonCoverCoverPhoto $coverPhoto
     */
    public function setCoverPhoto(Google_PersonCoverCoverPhoto $coverPhoto)
    {
        $this->coverPhoto = $coverPhoto;
    }

    /**
     * @return mixed
     */
    public function getCoverPhoto()
    {
        return $this->coverPhoto;
    }

    /**
     * @param $layout
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    /**
     * @return mixed
     */
    public function getLayout()
    {
        return $this->layout;
    }
}

/**
 * Class Google_PersonCoverCoverInfo
 */
class Google_PersonCoverCoverInfo extends Google_Model
{
    /**
     * @var
     */
    public $leftImageOffset;
    /**
     * @var
     */
    public $topImageOffset;

    /**
     * @param $leftImageOffset
     */
    public function setLeftImageOffset($leftImageOffset)
    {
        $this->leftImageOffset = $leftImageOffset;
    }

    /**
     * @return mixed
     */
    public function getLeftImageOffset()
    {
        return $this->leftImageOffset;
    }

    /**
     * @param $topImageOffset
     */
    public function setTopImageOffset($topImageOffset)
    {
        $this->topImageOffset = $topImageOffset;
    }

    /**
     * @return mixed
     */
    public function getTopImageOffset()
    {
        return $this->topImageOffset;
    }
}

/**
 * Class Google_PersonCoverCoverPhoto
 */
class Google_PersonCoverCoverPhoto extends Google_Model
{
    /**
     * @var
     */
    public $height;
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

    public function getHeight()
    {
        return $this->height;
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

    public function getWidth()
    {
        return $this->width;
    }
}

/**
 * Class Google_PersonImage
 */
class Google_PersonImage extends Google_Model
{
    /**
     * @var
     */
    public $url;

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
}

/**
 * Class Google_PersonName
 */
class Google_PersonName extends Google_Model
{
    /**
     * @var
     */
    public $familyName;
    /**
     * @var
     */
    public $formatted;
    /**
     * @var
     */
    public $givenName;
    /**
     * @var
     */
    public $honorificPrefix;
    /**
     * @var
     */
    public $honorificSuffix;
    /**
     * @var
     */
    public $middleName;

    /**
     * @param $familyName
     */
    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
    }

    /**
     * @return mixed
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * @param $formatted
     */
    public function setFormatted($formatted)
    {
        $this->formatted = $formatted;
    }

    /**
     * @return mixed
     */
    public function getFormatted()
    {
        return $this->formatted;
    }

    /**
     * @param $givenName
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }

    /**
     * @return mixed
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * @param $honorificPrefix
     */
    public function setHonorificPrefix($honorificPrefix)
    {
        $this->honorificPrefix = $honorificPrefix;
    }

    /**
     * @return mixed
     */
    public function getHonorificPrefix()
    {
        return $this->honorificPrefix;
    }

    /**
     * @param $honorificSuffix
     */
    public function setHonorificSuffix($honorificSuffix)
    {
        $this->honorificSuffix = $honorificSuffix;
    }

    /**
     * @return mixed
     */
    public function getHonorificSuffix()
    {
        return $this->honorificSuffix;
    }

    /**
     * @param $middleName
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }

    /**
     * @return mixed
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }
}

/**
 * Class Google_PersonOrganizations
 */
class Google_PersonOrganizations extends Google_Model
{
    /**
     * @var
     */
    public $department;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $endDate;
    /**
     * @var
     */
    public $location;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $primary;
    /**
     * @var
     */
    public $startDate;
    /**
     * @var
     */
    public $title;
    /**
     * @var
     */
    public $type;

    /**
     * @param $department
     */
    public function setDepartment($department)
    {
        $this->department = $department;
    }

    /**
     * @return mixed
     */
    public function getDepartment()
    {
        return $this->department;
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
     * @param $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getLocation()
    {
        return $this->location;
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
     * @param $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}

/**
 * Class Google_PersonPlacesLived
 */
class Google_PersonPlacesLived extends Google_Model
{
    /**
     * @var
     */
    public $primary;
    /**
     * @var
     */
    public $value;

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
     * @param $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}

/**
 * Class Google_PersonUrls
 */
class Google_PersonUrls extends Google_Model
{
    /**
     * @var
     */
    public $label;
    /**
     * @var
     */
    public $type;
    /**
     * @var
     */
    public $value;

    /**
     * @param $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    /**
     * @param $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}

/**
 * Class Google_Place
 */
class Google_Place extends Google_Model
{
    /**
     * @var string
     */
    protected $__addressType = 'Google_PlaceAddress';
    /**
     * @var string
     */
    protected $__addressDataType = '';
    /**
     * @var
     */
    public $address;
    /**
     * @var
     */
    public $displayName;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__positionType = 'Google_PlacePosition';
    /**
     * @var string
     */
    protected $__positionDataType = '';
    /**
     * @var
     */
    public $position;

    /**
     * @param Google_PlaceAddress $address
     */
    public function setAddress(Google_PlaceAddress $address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
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
     * @param Google_PlacePosition $position
     */
    public function setPosition(Google_PlacePosition $position)
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }
}

/**
 * Class Google_PlaceAddress
 */
class Google_PlaceAddress extends Google_Model
{
    /**
     * @var
     */
    public $formatted;

    /**
     * @param $formatted
     */
    public function setFormatted($formatted)
    {
        $this->formatted = $formatted;
    }

    /**
     * @return mixed
     */
    public function getFormatted()
    {
        return $this->formatted;
    }
}

/**
 * Class Google_PlacePosition
 */
class Google_PlacePosition extends Google_Model
{
    /**
     * @var
     */
    public $latitude;
    /**
     * @var
     */
    public $longitude;

    /**
     * @param $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
}

/**
 * Class Google_PlusAclentryResource
 */
class Google_PlusAclentryResource extends Google_Model
{
    /**
     * @var
     */
    public $displayName;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $type;

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
     * @param $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}

/**
 * Class Google_Videostream
 */
class Google_Videostream extends Google_Model
{
    /**
     * @var
     */
    public $height;
    /**
     * @var
     */
    public $type;
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

    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
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

    public function getWidth()
    {
        return $this->width;
    }
}
