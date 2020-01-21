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
 *   $adminService = new Google_ReportsService(...);
 *   $activities = $adminService->activities;
 *  </code>
 */
class Google_ActivitiesServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves a list of activities for a specific customer and application. (activities.list)
     *
     * @param string $userKey Represents the profile id or the user email for which the data should be filtered. When 'all' is specified as the userKey, it returns usageReports for all users.
     * @param string $applicationName Application name for which the events are to be retrieved.
     * @param array $optParams Optional parameters.
     * @return Google_Activities
     * @throws Google_Exception
     * @opt_param string actorIpAddress IP Address of host where the event was performed. Supports both IPv4 and IPv6 addresses.
     * @opt_param string endTime Return events which occured at or before this time.
     * @opt_param string eventName Name of the event being queried.
     * @opt_param string filters Event parameters in the form [parameter1 name][operator][parameter1 value],[parameter2 name][operator][parameter2 value],...
     * @opt_param int maxResults Number of activity records to be shown in each page.
     * @opt_param string pageToken Token to specify next page.
     * @opt_param string startTime Return events which occured at or after this time.
     */
    public function listActivities($userKey, $applicationName, $optParams = [])
    {
        $params = ['userKey' => $userKey, 'applicationName' => $applicationName];
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
 * The "customerUsageReports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_ReportsService(...);
 *   $customerUsageReports = $adminService->customerUsageReports;
 *  </code>
 */
class Google_CustomerUsageReportsServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves a report which is a collection of properties / statistics for a specific customer.
     * (customerUsageReports.get)
     *
     * @param string $date Represents the date in yyyy-mm-dd format for which the data is to be fetched.
     * @param array $optParams Optional parameters.
     * @return Google_UsageReports
     * @throws Google_Exception
     * @opt_param string pageToken Token to specify next page.
     * @opt_param string parameters Represents the application name, parameter name pairs to fetch in csv as app_name1:param_name1, app_name2:param_name2.
     */
    public function get($date, $optParams = [])
    {
        $params = ['date' => $date];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_UsageReports($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "userUsageReport" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_ReportsService(...);
 *   $userUsageReport = $adminService->userUsageReport;
 *  </code>
 */
class Google_UserUsageReportServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves a report which is a collection of properties / statistics for a set of users.
     * (userUsageReport.get)
     *
     * @param string $userKey Represents the profile id or the user email for which the data should be filtered.
     * @param string $date Represents the date in yyyy-mm-dd format for which the data is to be fetched.
     * @param array $optParams Optional parameters.
     * @return Google_UsageReports
     * @throws Google_Exception
     * @opt_param string filters Represents the set of filters including parameter operator value.
     * @opt_param string maxResults Maximum number of results to return. Maximum allowed is 1000
     * @opt_param string pageToken Token to specify next page.
     * @opt_param string parameters Represents the application name, parameter name pairs to fetch in csv as app_name1:param_name1, app_name2:param_name2.
     */
    public function get($userKey, $date, $optParams = [])
    {
        $params = ['userKey' => $userKey, 'date' => $date];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_UsageReports($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Reports (reports_v1).
 *
 * <p>
 * Allows the administrators of Google Apps customers to fetch reports about the usage, collaboration, security and risk for their users.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/admin-sdk/reports/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_ReportsService extends Google_Service
{
    /**
     * @var Google_ActivitiesServiceResource
     */
    public $activities;
    /**
     * @var Google_CustomerUsageReportsServiceResource
     */
    public $customerUsageReports;
    /**
     * @var Google_UserUsageReportServiceResource
     */
    public $userUsageReport;

    /**
     * Constructs the internal representation of the Reports service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'admin/reports/v1/';
        $this->version = 'reports_v1';
        $this->serviceName = 'admin';

        $client->addService($this->serviceName, $this->version);
        $this->activities = new Google_ActivitiesServiceResource($this, $this->serviceName, 'activities', json_decode('{"methods": {"list": {"id": "reports.activities.list", "path": "activity/users/{userKey}/applications/{applicationName}", "httpMethod": "GET", "parameters": {"actorIpAddress": {"type": "string", "location": "query"}, "applicationName": {"type": "string", "required": true, "location": "path"}, "endTime": {"type": "string", "location": "query"}, "eventName": {"type": "string", "location": "query"}, "filters": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "1", "maximum": "1000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "startTime": {"type": "string", "location": "query"}, "userKey": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Activities"}, "scopes": ["https://www.googleapis.com/auth/admin.reports.audit.readonly"]}}}', true));
        $this->customerUsageReports = new Google_CustomerUsageReportsServiceResource($this, $this->serviceName, 'customerUsageReports', json_decode('{"methods": {"get": {"id": "reports.customerUsageReports.get", "path": "usage/dates/{date}", "httpMethod": "GET", "parameters": {"date": {"type": "string", "required": true, "location": "path"}, "pageToken": {"type": "string", "location": "query"}, "parameters": {"type": "string", "location": "query"}}, "response": {"$ref": "UsageReports"}, "scopes": ["https://www.googleapis.com/auth/admin.reports.usage.readonly"]}}}', true));
        $this->userUsageReport = new Google_UserUsageReportServiceResource($this, $this->serviceName, 'userUsageReport', json_decode('{"methods": {"get": {"id": "reports.userUsageReport.get", "path": "usage/users/{userKey}/dates/{date}", "httpMethod": "GET", "parameters": {"date": {"type": "string", "required": true, "location": "path"}, "filters": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "maximum": "1000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "parameters": {"type": "string", "location": "query"}, "userKey": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "UsageReports"}, "scopes": ["https://www.googleapis.com/auth/admin.reports.usage.readonly"]}}}', true));

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
    public $nextPageToken;

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
     * @var
     */
    public $profileId;

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

    /**
     * @param $profileId
     */
    public function setProfileId($profileId)
    {
        $this->profileId = $profileId;
    }

    /**
     * @return mixed
     */
    public function getProfileId()
    {
        return $this->profileId;
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
     * @var
     */
    public $type;

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
 * Class Google_ActivityEventsParameters
 */
class Google_ActivityEventsParameters extends Google_Model
{
    /**
     * @var
     */
    public $boolValue;
    /**
     * @var
     */
    public $intValue;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $value;

    /**
     * @param $boolValue
     */
    public function setBoolValue($boolValue)
    {
        $this->boolValue = $boolValue;
    }

    /**
     * @return mixed
     */
    public function getBoolValue()
    {
        return $this->boolValue;
    }

    /**
     * @param $intValue
     */
    public function setIntValue($intValue)
    {
        $this->intValue = $intValue;
    }

    /**
     * @return mixed
     */
    public function getIntValue()
    {
        return $this->intValue;
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
    public $applicationName;
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
    public $uniqueQualifier;

    /**
     * @param $applicationName
     */
    public function setApplicationName($applicationName)
    {
        $this->applicationName = $applicationName;
    }

    /**
     * @return mixed
     */
    public function getApplicationName()
    {
        return $this->applicationName;
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
     * @param $uniqueQualifier
     */
    public function setUniqueQualifier($uniqueQualifier)
    {
        $this->uniqueQualifier = $uniqueQualifier;
    }

    /**
     * @return mixed
     */
    public function getUniqueQualifier()
    {
        return $this->uniqueQualifier;
    }
}

/**
 * Class Google_UsageReport
 */
class Google_UsageReport extends Google_Model
{
    /**
     * @var
     */
    public $date;
    /**
     * @var string
     */
    protected $__entityType = 'Google_UsageReportEntity';
    /**
     * @var string
     */
    protected $__entityDataType = '';
    /**
     * @var
     */
    public $entity;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__parametersType = 'Google_UsageReportParameters';
    /**
     * @var string
     */
    protected $__parametersDataType = 'array';
    /**
     * @var
     */
    public $parameters;

    /**
     * @param $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param Google_UsageReportEntity $entity
     */
    public function setEntity(Google_UsageReportEntity $entity)
    {
        $this->entity = $entity;
    }

    /**
     * @return mixed
     */
    public function getEntity()
    {
        return $this->entity;
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
     * @param $parameters
     * @throws Google_Exception
     */
    public function setParameters(/* array(Google_UsageReportParameters) */
        $parameters)
    {
        $this->assertIsArray($parameters, 'Google_UsageReportParameters', __METHOD__);
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
 * Class Google_UsageReportEntity
 */
class Google_UsageReportEntity extends Google_Model
{
    /**
     * @var
     */
    public $customerId;
    /**
     * @var
     */
    public $profileId;
    /**
     * @var
     */
    public $type;
    /**
     * @var
     */
    public $userEmail;

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
     * @param $profileId
     */
    public function setProfileId($profileId)
    {
        $this->profileId = $profileId;
    }

    /**
     * @return mixed
     */
    public function getProfileId()
    {
        return $this->profileId;
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
     * @param $userEmail
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
    }

    /**
     * @return mixed
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }
}

/**
 * Class Google_UsageReportParameters
 */
class Google_UsageReportParameters extends Google_Model
{
    /**
     * @var
     */
    public $boolValue;
    /**
     * @var
     */
    public $datetimeValue;
    /**
     * @var
     */
    public $intValue;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $stringValue;

    /**
     * @param $boolValue
     */
    public function setBoolValue($boolValue)
    {
        $this->boolValue = $boolValue;
    }

    /**
     * @return mixed
     */
    public function getBoolValue()
    {
        return $this->boolValue;
    }

    /**
     * @param $datetimeValue
     */
    public function setDatetimeValue($datetimeValue)
    {
        $this->datetimeValue = $datetimeValue;
    }

    /**
     * @return mixed
     */
    public function getDatetimeValue()
    {
        return $this->datetimeValue;
    }

    /**
     * @param $intValue
     */
    public function setIntValue($intValue)
    {
        $this->intValue = $intValue;
    }

    /**
     * @return mixed
     */
    public function getIntValue()
    {
        return $this->intValue;
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
     * @param $stringValue
     */
    public function setStringValue($stringValue)
    {
        $this->stringValue = $stringValue;
    }

    /**
     * @return mixed
     */
    public function getStringValue()
    {
        return $this->stringValue;
    }
}

/**
 * Class Google_UsageReports
 */
class Google_UsageReports extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $nextPageToken;
    /**
     * @var string
     */
    protected $__usageReportsType = 'Google_UsageReport';
    /**
     * @var string
     */
    protected $__usageReportsDataType = 'array';
    /**
     * @var
     */
    public $usageReports;
    /**
     * @var string
     */
    protected $__warningsType = 'Google_UsageReportsWarnings';
    /**
     * @var string
     */
    protected $__warningsDataType = 'array';
    /**
     * @var
     */
    public $warnings;

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
     * @param $usageReports
     * @throws Google_Exception
     */
    public function setUsageReports(/* array(Google_UsageReport) */
        $usageReports)
    {
        $this->assertIsArray($usageReports, 'Google_UsageReport', __METHOD__);
        $this->usageReports = $usageReports;
    }

    /**
     * @return mixed
     */
    public function getUsageReports()
    {
        return $this->usageReports;
    }

    /**
     * @param $warnings
     * @throws Google_Exception
     */
    public function setWarnings(/* array(Google_UsageReportsWarnings) */
        $warnings)
    {
        $this->assertIsArray($warnings, 'Google_UsageReportsWarnings', __METHOD__);
        $this->warnings = $warnings;
    }

    /**
     * @return mixed
     */
    public function getWarnings()
    {
        return $this->warnings;
    }
}

/**
 * Class Google_UsageReportsWarnings
 */
class Google_UsageReportsWarnings extends Google_Model
{
    /**
     * @var
     */
    public $code;
    /**
     * @var string
     */
    protected $__dataType = 'Google_UsageReportsWarningsData';
    /**
     * @var string
     */
    protected $__dataDataType = 'array';
    /**
     * @var
     */
    public $data;
    /**
     * @var
     */
    public $message;

    /**
     * @param $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param $data
     * @throws Google_Exception
     */
    public function setData(/* array(Google_UsageReportsWarningsData) */
        $data)
    {
        $this->assertIsArray($data, 'Google_UsageReportsWarningsData', __METHOD__);
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
}

/**
 * Class Google_UsageReportsWarningsData
 */
class Google_UsageReportsWarningsData extends Google_Model
{
    /**
     * @var
     */
    public $key;
    /**
     * @var
     */
    public $value;

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
