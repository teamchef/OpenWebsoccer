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
     * List all of the activities in the specified collection for a particular user. (activities.list)
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

    /**
     * Search public activities. (activities.search)
     *
     * @param string $query Full-text search query string.
     * @param array $optParams Optional parameters.
     * @return Google_ActivityFeed
     * @throws Google_Exception
     * @opt_param string language Specify the preferred language to search with. See search language codes for available values.
     * @opt_param string maxResults The maximum number of activities to include in the response, which is used for paging. For any response, the actual number returned might be less than the specified maxResults.
     * @opt_param string orderBy Specifies how to order search results.
     * @opt_param string pageToken The continuation token, which is used to page through large result sets. To get the next page of results, set this parameter to the value of "nextPageToken" from the previous response. This token can be of any length.
     */
    public function search($query, $optParams = [])
    {
        $params = ['query' => $query];
        $params = array_merge($params, $optParams);
        $data = $this->__call('search', [$params]);
        if ($this->useObjects()) {
            return new Google_ActivityFeed($data);
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
 * The "moments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusService = new Google_PlusService(...);
 *   $moments = $plusService->moments;
 *  </code>
 */
class Google_MomentsServiceResource extends Google_ServiceResource
{

    /**
     * Record a moment representing a user's activity such as making a purchase or commenting on a blog.
     * (moments.insert)
     *
     * @param string $userId The ID of the user to record activities for. The only valid values are "me" and the ID of the authenticated user.
     * @param string $collection The collection to which to write moments.
     * @param Google_Moment $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Moment
     * @throws Google_Exception
     * @opt_param bool debug Return the moment as written. Should be used only for debugging.
     */
    public function insert($userId, $collection, Google_Moment $postBody, $optParams = [])
    {
        $params = ['userId' => $userId, 'collection' => $collection, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Moment($data);
        } else {
            return $data;
        }
    }

    /**
     * List all of the moments for a particular user. (moments.list)
     *
     * @param string $userId The ID of the user to get moments for. The special value "me" can be used to indicate the authenticated user.
     * @param string $collection The collection of moments to list.
     * @param array $optParams Optional parameters.
     * @return Google_MomentsFeed
     * @throws Google_Exception
     * @opt_param string maxResults The maximum number of moments to include in the response, which is used for paging. For any response, the actual number returned might be less than the specified maxResults.
     * @opt_param string pageToken The continuation token, which is used to page through large result sets. To get the next page of results, set this parameter to the value of "nextPageToken" from the previous response.
     * @opt_param string targetUrl Only moments containing this targetUrl will be returned.
     * @opt_param string type Only moments of this type will be returned.
     */
    public function listMoments($userId, $collection, $optParams = [])
    {
        $params = ['userId' => $userId, 'collection' => $collection];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_MomentsFeed($data);
        } else {
            return $data;
        }
    }

    /**
     * Delete a moment. (moments.remove)
     *
     * @param string $id The ID of the moment to delete.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function remove($id, $optParams = [])
    {
        $params = ['id' => $id];
        $params = array_merge($params, $optParams);
        $data = $this->__call('remove', [$params]);
        return $data;
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
     * Get a person's profile. If your app uses scope https://www.googleapis.com/auth/plus.login, this
     * method is guaranteed to return ageRange and language. (people.get)
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
     * Search all public profiles. (people.search)
     *
     * @param string $query Specify a query string for full text search of public text in all profiles.
     * @param array $optParams Optional parameters.
     * @return Google_PeopleFeed
     * @throws Google_Exception
     * @opt_param string language Specify the preferred language to search with. See search language codes for available values.
     * @opt_param string maxResults The maximum number of people to include in the response, which is used for paging. For any response, the actual number returned might be less than the specified maxResults.
     * @opt_param string pageToken The continuation token, which is used to page through large result sets. To get the next page of results, set this parameter to the value of "nextPageToken" from the previous response. This token can be of any length.
     */
    public function search($query, $optParams = [])
    {
        $params = ['query' => $query];
        $params = array_merge($params, $optParams);
        $data = $this->__call('search', [$params]);
        if ($this->useObjects()) {
            return new Google_PeopleFeed($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Plus (v1).
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
     * @var Google_CommentsServiceResource
     */
    public $comments;
    /**
     * @var Google_MomentsServiceResource
     */
    public $moments;
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
        $this->servicePath = 'plus/v1/';
        $this->version = 'v1';
        $this->serviceName = 'plus';

        $client->addService($this->serviceName, $this->version);
        $this->activities = new Google_ActivitiesServiceResource($this, $this->serviceName, 'activities', json_decode('{"methods": {"get": {"id": "plus.activities.get", "path": "activities/{activityId}", "httpMethod": "GET", "parameters": {"activityId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Activity"}, "scopes": ["https://www.googleapis.com/auth/plus.login", "https://www.googleapis.com/auth/plus.me"]}, "list": {"id": "plus.activities.list", "path": "people/{userId}/activities/{collection}", "httpMethod": "GET", "parameters": {"collection": {"type": "string", "required": true, "enum": ["public"], "location": "path"}, "maxResults": {"type": "integer", "default": "20", "format": "uint32", "minimum": "1", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "userId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "ActivityFeed"}, "scopes": ["https://www.googleapis.com/auth/plus.login", "https://www.googleapis.com/auth/plus.me"]}, "search": {"id": "plus.activities.search", "path": "activities", "httpMethod": "GET", "parameters": {"language": {"type": "string", "default": "en-US", "location": "query"}, "maxResults": {"type": "integer", "default": "10", "format": "uint32", "minimum": "1", "maximum": "20", "location": "query"}, "orderBy": {"type": "string", "default": "recent", "enum": ["best", "recent"], "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "query": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "ActivityFeed"}, "scopes": ["https://www.googleapis.com/auth/plus.login", "https://www.googleapis.com/auth/plus.me"]}}}', true));
        $this->comments = new Google_CommentsServiceResource($this, $this->serviceName, 'comments', json_decode('{"methods": {"get": {"id": "plus.comments.get", "path": "comments/{commentId}", "httpMethod": "GET", "parameters": {"commentId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Comment"}, "scopes": ["https://www.googleapis.com/auth/plus.login", "https://www.googleapis.com/auth/plus.me"]}, "list": {"id": "plus.comments.list", "path": "activities/{activityId}/comments", "httpMethod": "GET", "parameters": {"activityId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "default": "20", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "sortOrder": {"type": "string", "default": "ascending", "enum": ["ascending", "descending"], "location": "query"}}, "response": {"$ref": "CommentFeed"}, "scopes": ["https://www.googleapis.com/auth/plus.login", "https://www.googleapis.com/auth/plus.me"]}}}', true));
        $this->moments = new Google_MomentsServiceResource($this, $this->serviceName, 'moments', json_decode('{"methods": {"insert": {"id": "plus.moments.insert", "path": "people/{userId}/moments/{collection}", "httpMethod": "POST", "parameters": {"collection": {"type": "string", "required": true, "enum": ["vault"], "location": "path"}, "debug": {"type": "boolean", "location": "query"}, "userId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Moment"}, "response": {"$ref": "Moment"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "list": {"id": "plus.moments.list", "path": "people/{userId}/moments/{collection}", "httpMethod": "GET", "parameters": {"collection": {"type": "string", "required": true, "enum": ["vault"], "location": "path"}, "maxResults": {"type": "integer", "default": "20", "format": "uint32", "minimum": "1", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "targetUrl": {"type": "string", "location": "query"}, "type": {"type": "string", "location": "query"}, "userId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "MomentsFeed"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "remove": {"id": "plus.moments.remove", "path": "moments/{id}", "httpMethod": "DELETE", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}}}', true));
        $this->people = new Google_PeopleServiceResource($this, $this->serviceName, 'people', json_decode('{"methods": {"get": {"id": "plus.people.get", "path": "people/{userId}", "httpMethod": "GET", "parameters": {"userId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Person"}, "scopes": ["https://www.googleapis.com/auth/plus.login", "https://www.googleapis.com/auth/plus.me"]}, "list": {"id": "plus.people.list", "path": "people/{userId}/people/{collection}", "httpMethod": "GET", "parameters": {"collection": {"type": "string", "required": true, "enum": ["visible"], "location": "path"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "1", "maximum": "100", "location": "query"}, "orderBy": {"type": "string", "enum": ["alphabetical", "best"], "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "userId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "PeopleFeed"}, "scopes": ["https://www.googleapis.com/auth/plus.login"]}, "listByActivity": {"id": "plus.people.listByActivity", "path": "activities/{activityId}/people/{collection}", "httpMethod": "GET", "parameters": {"activityId": {"type": "string", "required": true, "location": "path"}, "collection": {"type": "string", "required": true, "enum": ["plusoners", "resharers"], "location": "path"}, "maxResults": {"type": "integer", "default": "20", "format": "uint32", "minimum": "1", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "PeopleFeed"}, "scopes": ["https://www.googleapis.com/auth/plus.login", "https://www.googleapis.com/auth/plus.me"]}, "search": {"id": "plus.people.search", "path": "people", "httpMethod": "GET", "parameters": {"language": {"type": "string", "default": "en-US", "location": "query"}, "maxResults": {"type": "integer", "default": "25", "format": "uint32", "minimum": "1", "maximum": "50", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "query": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "PeopleFeed"}, "scopes": ["https://www.googleapis.com/auth/plus.login", "https://www.googleapis.com/auth/plus.me"]}}}', true));

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

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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
     * @param $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
    public function getTotalItems()
    {
        return $this->totalItems;
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

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
    public function getTotalItems()
    {
        return $this->totalItems;
    }
}

/**
 * Class Google_ItemScope
 */
class Google_ItemScope extends Google_Model
{
    /**
     * @var string
     */
    protected $__aboutType = 'Google_ItemScope';
    /**
     * @var string
     */
    protected $__aboutDataType = '';
    /**
     * @var
     */
    public $about;
    /**
     * @var
     */
    public $additionalName;
    /**
     * @var string
     */
    protected $__addressType = 'Google_ItemScope';
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
    public $addressCountry;
    /**
     * @var
     */
    public $addressLocality;
    /**
     * @var
     */
    public $addressRegion;
    /**
     * @var string
     */
    protected $__associated_mediaType = 'Google_ItemScope';
    /**
     * @var string
     */
    protected $__associated_mediaDataType = 'array';
    /**
     * @var
     */
    public $associated_media;
    /**
     * @var
     */
    public $attendeeCount;
    /**
     * @var string
     */
    protected $__attendeesType = 'Google_ItemScope';
    /**
     * @var string
     */
    protected $__attendeesDataType = 'array';
    /**
     * @var
     */
    public $attendees;
    /**
     * @var string
     */
    protected $__audioType = 'Google_ItemScope';
    /**
     * @var string
     */
    protected $__audioDataType = '';
    /**
     * @var
     */
    public $audio;
    /**
     * @var string
     */
    protected $__authorType = 'Google_ItemScope';
    /**
     * @var string
     */
    protected $__authorDataType = 'array';
    /**
     * @var
     */
    public $author;
    /**
     * @var
     */
    public $bestRating;
    /**
     * @var
     */
    public $birthDate;
    /**
     * @var string
     */
    protected $__byArtistType = 'Google_ItemScope';
    /**
     * @var string
     */
    protected $__byArtistDataType = '';
    /**
     * @var
     */
    public $byArtist;
    /**
     * @var
     */
    public $caption;
    /**
     * @var
     */
    public $contentSize;
    /**
     * @var
     */
    public $contentUrl;
    /**
     * @var string
     */
    protected $__contributorType = 'Google_ItemScope';
    /**
     * @var string
     */
    protected $__contributorDataType = 'array';
    /**
     * @var
     */
    public $contributor;
    /**
     * @var
     */
    public $dateCreated;
    /**
     * @var
     */
    public $dateModified;
    /**
     * @var
     */
    public $datePublished;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $duration;
    /**
     * @var
     */
    public $embedUrl;
    /**
     * @var
     */
    public $endDate;
    /**
     * @var
     */
    public $familyName;
    /**
     * @var
     */
    public $gender;
    /**
     * @var string
     */
    protected $__geoType = 'Google_ItemScope';
    /**
     * @var string
     */
    protected $__geoDataType = '';
    /**
     * @var
     */
    public $geo;
    /**
     * @var
     */
    public $givenName;
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
    public $image;
    /**
     * @var string
     */
    protected $__inAlbumType = 'Google_ItemScope';
    /**
     * @var string
     */
    protected $__inAlbumDataType = '';
    /**
     * @var
     */
    public $inAlbum;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $latitude;
    /**
     * @var string
     */
    protected $__locationType = 'Google_ItemScope';
    /**
     * @var string
     */
    protected $__locationDataType = '';
    /**
     * @var
     */
    public $location;
    /**
     * @var
     */
    public $longitude;
    /**
     * @var
     */
    public $name;
    /**
     * @var string
     */
    protected $__partOfTVSeriesType = 'Google_ItemScope';
    /**
     * @var string
     */
    protected $__partOfTVSeriesDataType = '';
    /**
     * @var
     */
    public $partOfTVSeries;
    /**
     * @var string
     */
    protected $__performersType = 'Google_ItemScope';
    /**
     * @var string
     */
    protected $__performersDataType = 'array';
    /**
     * @var
     */
    public $performers;
    /**
     * @var
     */
    public $playerType;
    /**
     * @var
     */
    public $postOfficeBoxNumber;
    /**
     * @var
     */
    public $postalCode;
    /**
     * @var
     */
    public $ratingValue;
    /**
     * @var string
     */
    protected $__reviewRatingType = 'Google_ItemScope';
    /**
     * @var string
     */
    protected $__reviewRatingDataType = '';
    /**
     * @var
     */
    public $reviewRating;
    /**
     * @var
     */
    public $startDate;
    /**
     * @var
     */
    public $streetAddress;
    /**
     * @var
     */
    public $text;
    /**
     * @var string
     */
    protected $__thumbnailType = 'Google_ItemScope';
    /**
     * @var string
     */
    protected $__thumbnailDataType = '';
    /**
     * @var
     */
    public $thumbnail;
    /**
     * @var
     */
    public $thumbnailUrl;
    /**
     * @var
     */
    public $tickerSymbol;
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
     * @var
     */
    public $worstRating;

    /**
     * @param Google_ItemScope $about
     */
    public function setAbout(Google_ItemScope $about)
    {
        $this->about = $about;
    }

    /**
     * @return mixed
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * @param $additionalName
     * @throws Google_Exception
     */
    public function setAdditionalName(/* array(Google_string) */
        $additionalName)
    {
        $this->assertIsArray($additionalName, 'Google_string', __METHOD__);
        $this->additionalName = $additionalName;
    }

    /**
     * @return mixed
     */
    public function getAdditionalName()
    {
        return $this->additionalName;
    }

    /**
     * @param Google_ItemScope $address
     */
    public function setAddress(Google_ItemScope $address)
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
     * @param $addressCountry
     */
    public function setAddressCountry($addressCountry)
    {
        $this->addressCountry = $addressCountry;
    }

    /**
     * @return mixed
     */
    public function getAddressCountry()
    {
        return $this->addressCountry;
    }

    /**
     * @param $addressLocality
     */
    public function setAddressLocality($addressLocality)
    {
        $this->addressLocality = $addressLocality;
    }

    /**
     * @return mixed
     */
    public function getAddressLocality()
    {
        return $this->addressLocality;
    }

    /**
     * @param $addressRegion
     */
    public function setAddressRegion($addressRegion)
    {
        $this->addressRegion = $addressRegion;
    }

    /**
     * @return mixed
     */
    public function getAddressRegion()
    {
        return $this->addressRegion;
    }

    /**
     * @param $associated_media
     * @throws Google_Exception
     */
    public function setAssociated_media(/* array(Google_ItemScope) */
        $associated_media)
    {
        $this->assertIsArray($associated_media, 'Google_ItemScope', __METHOD__);
        $this->associated_media = $associated_media;
    }

    /**
     * @return mixed
     */
    public function getAssociated_media()
    {
        return $this->associated_media;
    }

    /**
     * @param $attendeeCount
     */
    public function setAttendeeCount($attendeeCount)
    {
        $this->attendeeCount = $attendeeCount;
    }

    /**
     * @return mixed
     */
    public function getAttendeeCount()
    {
        return $this->attendeeCount;
    }

    /**
     * @param $attendees
     * @throws Google_Exception
     */
    public function setAttendees(/* array(Google_ItemScope) */
        $attendees)
    {
        $this->assertIsArray($attendees, 'Google_ItemScope', __METHOD__);
        $this->attendees = $attendees;
    }

    /**
     * @return mixed
     */
    public function getAttendees()
    {
        return $this->attendees;
    }

    /**
     * @param Google_ItemScope $audio
     */
    public function setAudio(Google_ItemScope $audio)
    {
        $this->audio = $audio;
    }

    /**
     * @return mixed
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * @param $author
     * @throws Google_Exception
     */
    public function setAuthor(/* array(Google_ItemScope) */
        $author)
    {
        $this->assertIsArray($author, 'Google_ItemScope', __METHOD__);
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
     * @param $bestRating
     */
    public function setBestRating($bestRating)
    {
        $this->bestRating = $bestRating;
    }

    /**
     * @return mixed
     */
    public function getBestRating()
    {
        return $this->bestRating;
    }

    /**
     * @param $birthDate
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return mixed
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param Google_ItemScope $byArtist
     */
    public function setByArtist(Google_ItemScope $byArtist)
    {
        $this->byArtist = $byArtist;
    }

    /**
     * @return mixed
     */
    public function getByArtist()
    {
        return $this->byArtist;
    }

    /**
     * @param $caption
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
    }

    /**
     * @return mixed
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * @param $contentSize
     */
    public function setContentSize($contentSize)
    {
        $this->contentSize = $contentSize;
    }

    /**
     * @return mixed
     */
    public function getContentSize()
    {
        return $this->contentSize;
    }

    /**
     * @param $contentUrl
     */
    public function setContentUrl($contentUrl)
    {
        $this->contentUrl = $contentUrl;
    }

    /**
     * @return mixed
     */
    public function getContentUrl()
    {
        return $this->contentUrl;
    }

    /**
     * @param $contributor
     * @throws Google_Exception
     */
    public function setContributor(/* array(Google_ItemScope) */
        $contributor)
    {
        $this->assertIsArray($contributor, 'Google_ItemScope', __METHOD__);
        $this->contributor = $contributor;
    }

    /**
     * @return mixed
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * @param $dateCreated
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * @return mixed
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param $dateModified
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;
    }

    /**
     * @return mixed
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * @param $datePublished
     */
    public function setDatePublished($datePublished)
    {
        $this->datePublished = $datePublished;
    }

    /**
     * @return mixed
     */
    public function getDatePublished()
    {
        return $this->datePublished;
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
     * @param $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param $embedUrl
     */
    public function setEmbedUrl($embedUrl)
    {
        $this->embedUrl = $embedUrl;
    }

    /**
     * @return mixed
     */
    public function getEmbedUrl()
    {
        return $this->embedUrl;
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
     * @param Google_ItemScope $geo
     */
    public function setGeo(Google_ItemScope $geo)
    {
        $this->geo = $geo;
    }

    /**
     * @return mixed
     */
    public function getGeo()
    {
        return $this->geo;
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
     * @param $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param Google_ItemScope $inAlbum
     */
    public function setInAlbum(Google_ItemScope $inAlbum)
    {
        $this->inAlbum = $inAlbum;
    }

    /**
     * @return mixed
     */
    public function getInAlbum()
    {
        return $this->inAlbum;
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
     * @param Google_ItemScope $location
     */
    public function setLocation(Google_ItemScope $location)
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
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
     * @param Google_ItemScope $partOfTVSeries
     */
    public function setPartOfTVSeries(Google_ItemScope $partOfTVSeries)
    {
        $this->partOfTVSeries = $partOfTVSeries;
    }

    /**
     * @return mixed
     */
    public function getPartOfTVSeries()
    {
        return $this->partOfTVSeries;
    }

    /**
     * @param $performers
     * @throws Google_Exception
     */
    public function setPerformers(/* array(Google_ItemScope) */
        $performers)
    {
        $this->assertIsArray($performers, 'Google_ItemScope', __METHOD__);
        $this->performers = $performers;
    }

    /**
     * @return mixed
     */
    public function getPerformers()
    {
        return $this->performers;
    }

    /**
     * @param $playerType
     */
    public function setPlayerType($playerType)
    {
        $this->playerType = $playerType;
    }

    /**
     * @return mixed
     */
    public function getPlayerType()
    {
        return $this->playerType;
    }

    /**
     * @param $postOfficeBoxNumber
     */
    public function setPostOfficeBoxNumber($postOfficeBoxNumber)
    {
        $this->postOfficeBoxNumber = $postOfficeBoxNumber;
    }

    /**
     * @return mixed
     */
    public function getPostOfficeBoxNumber()
    {
        return $this->postOfficeBoxNumber;
    }

    /**
     * @param $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param $ratingValue
     */
    public function setRatingValue($ratingValue)
    {
        $this->ratingValue = $ratingValue;
    }

    /**
     * @return mixed
     */
    public function getRatingValue()
    {
        return $this->ratingValue;
    }

    /**
     * @param Google_ItemScope $reviewRating
     */
    public function setReviewRating(Google_ItemScope $reviewRating)
    {
        $this->reviewRating = $reviewRating;
    }

    /**
     * @return mixed
     */
    public function getReviewRating()
    {
        return $this->reviewRating;
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
     * @param $streetAddress
     */
    public function setStreetAddress($streetAddress)
    {
        $this->streetAddress = $streetAddress;
    }

    /**
     * @return mixed
     */
    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    /**
     * @param $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param Google_ItemScope $thumbnail
     */
    public function setThumbnail(Google_ItemScope $thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * @return mixed
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param $thumbnailUrl
     */
    public function setThumbnailUrl($thumbnailUrl)
    {
        $this->thumbnailUrl = $thumbnailUrl;
    }

    /**
     * @return mixed
     */
    public function getThumbnailUrl()
    {
        return $this->thumbnailUrl;
    }

    /**
     * @param $tickerSymbol
     */
    public function setTickerSymbol($tickerSymbol)
    {
        $this->tickerSymbol = $tickerSymbol;
    }

    /**
     * @return mixed
     */
    public function getTickerSymbol()
    {
        return $this->tickerSymbol;
    }

    /**
     * @param $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
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

    /**
     * @param $worstRating
     */
    public function setWorstRating($worstRating)
    {
        $this->worstRating = $worstRating;
    }

    /**
     * @return mixed
     */
    public function getWorstRating()
    {
        return $this->worstRating;
    }
}

/**
 * Class Google_Moment
 */
class Google_Moment extends Google_Model
{
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
    protected $__resultType = 'Google_ItemScope';
    /**
     * @var string
     */
    protected $__resultDataType = '';
    /**
     * @var
     */
    public $result;
    /**
     * @var
     */
    public $startDate;
    /**
     * @var string
     */
    protected $__targetType = 'Google_ItemScope';
    /**
     * @var string
     */
    protected $__targetDataType = '';
    /**
     * @var
     */
    public $target;
    /**
     * @var
     */
    public $type;

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
     * @param Google_ItemScope $result
     */
    public function setResult(Google_ItemScope $result)
    {
        $this->result = $result;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
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
     * @param Google_ItemScope $target
     */
    public function setTarget(Google_ItemScope $target)
    {
        $this->target = $target;
    }

    /**
     * @return mixed
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
}

/**
 * Class Google_MomentsFeed
 */
class Google_MomentsFeed extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Moment';
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

    /**
     * @return mixed
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Moment) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Moment', __METHOD__);
        $this->items = $items;
    }

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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
     * @var string
     */
    protected $__ageRangeType = 'Google_PersonAgeRange';
    /**
     * @var string
     */
    protected $__ageRangeDataType = '';
    /**
     * @var
     */
    public $ageRange;
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
     * @var
     */
    public $language;
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
     * @param Google_PersonAgeRange $ageRange
     */
    public function setAgeRange(Google_PersonAgeRange $ageRange)
    {
        $this->ageRange = $ageRange;
    }

    /**
     * @return mixed
     */
    public function getAgeRange()
    {
        return $this->ageRange;
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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
     * @param $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param Google_PersonName $name
     */
    public function setName(Google_PersonName $name)
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
 * Class Google_PersonAgeRange
 */
class Google_PersonAgeRange extends Google_Model
{
    /**
     * @var
     */
    public $max;
    /**
     * @var
     */
    public $min;

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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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
