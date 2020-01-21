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
 *   $auditService = new Google_AuditService(...);
 *   $activities = $auditService->activities;
 *  </code>
 */
class Google_ActivitiesServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves a list of activities for a specific customer and application. (activities.list)
     *
     * @param string $customerId Represents the customer who is the owner of target object on which action was performed.
     * @param string $applicationId Application ID of the application on which the event was performed.
     * @param array $optParams Optional parameters.
     * @return Google_Activities
     * @throws Google_Exception
     * @opt_param string actorApplicationId Application ID of the application which interacted on behalf of the user while performing the event.
     * @opt_param string actorEmail Email address of the user who performed the action.
     * @opt_param string actorIpAddress IP Address of host where the event was performed. Supports both IPv4 and IPv6 addresses.
     * @opt_param string caller Type of the caller.
     * @opt_param string continuationToken Next page URL.
     * @opt_param string endTime Return events which occured at or before this time.
     * @opt_param string eventName Name of the event being queried.
     * @opt_param int maxResults Number of activity records to be shown in each page.
     * @opt_param string startTime Return events which occured at or after this time.
     */
    public function listActivities($customerId, $applicationId, $optParams = [])
    {
        $params = ['customerId' => $customerId, 'applicationId' => $applicationId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Activities($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Audit (v1).
 *
 * <p>
 * Lets you access user activities in your enterprise made through various applications.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/google-apps/admin-audit/get_started" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_AuditService extends Google_Service
{
    /**
     * @var Google_ActivitiesServiceResource
     */
    public $activities;

    /**
     * Constructs the internal representation of the Audit service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'apps/reporting/audit/v1/';
        $this->version = 'v1';
        $this->serviceName = 'audit';

        $client->addService($this->serviceName, $this->version);
        $this->activities = new Google_ActivitiesServiceResource($this, $this->serviceName, 'activities', json_decode('{"methods": {"list": {"id": "audit.activities.list", "path": "{customerId}/{applicationId}", "httpMethod": "GET", "parameters": {"actorApplicationId": {"type": "string", "format": "int64", "location": "query"}, "actorEmail": {"type": "string", "location": "query"}, "actorIpAddress": {"type": "string", "location": "query"}, "applicationId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "caller": {"type": "string", "enum": ["application_owner", "customer"], "location": "query"}, "continuationToken": {"type": "string", "location": "query"}, "customerId": {"type": "string", "required": true, "location": "path"}, "endTime": {"type": "string", "location": "query"}, "eventName": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "1", "maximum": "1000", "location": "query"}, "startTime": {"type": "string", "location": "query"}}, "response": {"$ref": "Activities"}}}}', true));

    }
}


/**
 * Class Google_Activities
 */
class Google_Activities extends Google_Model
{
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
    public $next;

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

    /**
     * @return mixed
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param $next
     */
    public function setNext($next)
    {
        $this->next = $next;
    }

    /**
     * @return mixed
     */
    public function getNext()
    {
        return $this->next;
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
     * @var string
     */
    protected $__eventsType = 'Google_ActivityEvents';
    /**
     * @var string
     */
    protected $__eventsDataType = 'array';
    /**
     * @var
     */
    public $events;
    /**
     * @var string
     */
    protected $__idType = 'Google_ActivityId';
    /**
     * @var string
     */
    protected $__idDataType = '';
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $ipAddress;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $ownerDomain;

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
     * @param $events
     * @throws Google_Exception
     */
    public function setEvents(/* array(Google_ActivityEvents) */
        $events)
    {
        $this->assertIsArray($events, 'Google_ActivityEvents', __METHOD__);
        $this->events = $events;
    }

    /**
     * @return mixed
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param Google_ActivityId $id
     */
    public function setId(Google_ActivityId $id)
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
     * @param $ipAddress
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * @return mixed
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
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

    /**
     * @param $ownerDomain
     */
    public function setOwnerDomain($ownerDomain)
    {
        $this->ownerDomain = $ownerDomain;
    }

    /**
     * @return mixed
     */
    public function getOwnerDomain()
    {
        return $this->ownerDomain;
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
    public $applicationId;
    /**
     * @var
     */
    public $callerType;
    /**
     * @var
     */
    public $email;
    /**
     * @var
     */
    public $key;

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
     * @param $callerType
     */
    public function setCallerType($callerType)
    {
        $this->callerType = $callerType;
    }

    /**
     * @return mixed
     */
    public function getCallerType()
    {
        return $this->callerType;
    }

    /**
     * @param $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }
}

/**
 * Class Google_ActivityEvents
 */
class Google_ActivityEvents extends Google_Model
{
    /**
     * @var
     */
    public $eventType;
    /**
     * @var
     */
    public $name;
    /**
     * @var string
     */
    protected $__parametersType = 'Google_ActivityEventsParameters';
    /**
     * @var string
     */
    protected $__parametersDataType = 'array';
    /**
     * @var
     */
    public $parameters;

    /**
     * @param $eventType
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
    }

    /**
     * @return mixed
     */
    public function getEventType()
    {
        return $this->eventType;
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
     * @param $parameters
     * @throws Google_Exception
     */
    public function setParameters(/* array(Google_ActivityEventsParameters) */
        $parameters)
    {
        $this->assertIsArray($parameters, 'Google_ActivityEventsParameters', __METHOD__);
        $this->parameters = $parameters;
    }

    /**
     * @return mixed
     */
    public function getParameters()
    {
        return $this->parameters;
    }
}

/**
 * Class Google_ActivityEventsParameters
 */
class Google_ActivityEventsParameters extends Google_Model
{
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $value;

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
 * Class Google_ActivityId
 */
class Google_ActivityId extends Google_Model
{
    /**
     * @var
     */
    public $applicationId;
    /**
     * @var
     */
    public $customerId;
    /**
     * @var
     */
    public $time;
    /**
     * @var
     */
    public $uniqQualifier;

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
     * @param $customerId
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }

    /**
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

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

    /**
     * @param $uniqQualifier
     */
    public function setUniqQualifier($uniqQualifier)
    {
        $this->uniqQualifier = $uniqQualifier;
    }

    /**
     * @return mixed
     */
    public function getUniqQualifier()
    {
        return $this->uniqQualifier;
    }
}
