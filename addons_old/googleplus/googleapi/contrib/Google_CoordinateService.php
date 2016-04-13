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
 * The "customFieldDef" collection of methods.
 * Typical usage is:
 *  <code>
 *   $coordinateService = new Google_CoordinateService(...);
 *   $customFieldDef = $coordinateService->customFieldDef;
 *  </code>
 */
class Google_CustomFieldDefServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves a list of custom field definitions for a team. (customFieldDef.list)
     *
     * @param string $teamId Team ID
     * @param array $optParams Optional parameters.
     * @return Google_CustomFieldDefListResponse
     * @throws Google_Exception
     */
    public function listCustomFieldDef($teamId, $optParams = [])
    {
        $params = ['teamId' => $teamId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_CustomFieldDefListResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "jobs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $coordinateService = new Google_CoordinateService(...);
 *   $jobs = $coordinateService->jobs;
 *  </code>
 */
class Google_JobsServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves a job, including all the changes made to the job. (jobs.get)
     *
     * @param string $teamId Team ID
     * @param string $jobId Job number
     * @param array $optParams Optional parameters.
     * @return Google_Job
     * @throws Google_Exception
     */
    public function get($teamId, $jobId, $optParams = [])
    {
        $params = ['teamId' => $teamId, 'jobId' => $jobId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Job($data);
        } else {
            return $data;
        }
    }

    /**
     * Inserts a new job. Only the state field of the job should be set. (jobs.insert)
     *
     * @param string $teamId Team ID
     * @param string $address Job address as newline (Unix) separated string
     * @param double $lat The latitude coordinate of this job's location.
     * @param double $lng The longitude coordinate of this job's location.
     * @param string $title Job title
     * @param Google_Job $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Job
     * @throws Google_Exception
     * @opt_param string assignee Assignee email address, or empty string to unassign.
     * @opt_param string customField Map from custom field id (from /team//custom_fields) to the field value. For example '123=Alice'
     * @opt_param string customerName Customer name
     * @opt_param string customerPhoneNumber Customer phone number
     * @opt_param string note Job note as newline (Unix) separated string
     */
    public function insert($teamId, $address, $lat, $lng, $title, Google_Job $postBody, $optParams = [])
    {
        $params = ['teamId' => $teamId, 'address' => $address, 'lat' => $lat, 'lng' => $lng, 'title' => $title, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Job($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves jobs created or modified since the given timestamp. (jobs.list)
     *
     * @param string $teamId Team ID
     * @param array $optParams Optional parameters.
     * @return Google_JobListResponse
     * @throws Google_Exception
     * @opt_param string maxResults Maximum number of results to return in one page.
     * @opt_param string minModifiedTimestampMs Minimum time a job was modified in milliseconds since epoch.
     * @opt_param string pageToken Continuation token
     */
    public function listJobs($teamId, $optParams = [])
    {
        $params = ['teamId' => $teamId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_JobListResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates a job. Fields that are set in the job state will be updated. This method supports patch
     * semantics. (jobs.patch)
     *
     * @param string $teamId Team ID
     * @param string $jobId Job number
     * @param Google_Job $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Job
     * @throws Google_Exception
     * @opt_param string address Job address as newline (Unix) separated string
     * @opt_param string assignee Assignee email address, or empty string to unassign.
     * @opt_param string customField Map from custom field id (from /team//custom_fields) to the field value. For example '123=Alice'
     * @opt_param string customerName Customer name
     * @opt_param string customerPhoneNumber Customer phone number
     * @opt_param double lat The latitude coordinate of this job's location.
     * @opt_param double lng The longitude coordinate of this job's location.
     * @opt_param string note Job note as newline (Unix) separated string
     * @opt_param string progress Job progress
     * @opt_param string title Job title
     */
    public function patch($teamId, $jobId, Google_Job $postBody, $optParams = [])
    {
        $params = ['teamId' => $teamId, 'jobId' => $jobId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Job($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates a job. Fields that are set in the job state will be updated. (jobs.update)
     *
     * @param string $teamId Team ID
     * @param string $jobId Job number
     * @param Google_Job $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Job
     * @throws Google_Exception
     * @opt_param string address Job address as newline (Unix) separated string
     * @opt_param string assignee Assignee email address, or empty string to unassign.
     * @opt_param string customField Map from custom field id (from /team//custom_fields) to the field value. For example '123=Alice'
     * @opt_param string customerName Customer name
     * @opt_param string customerPhoneNumber Customer phone number
     * @opt_param double lat The latitude coordinate of this job's location.
     * @opt_param double lng The longitude coordinate of this job's location.
     * @opt_param string note Job note as newline (Unix) separated string
     * @opt_param string progress Job progress
     * @opt_param string title Job title
     */
    public function update($teamId, $jobId, Google_Job $postBody, $optParams = [])
    {
        $params = ['teamId' => $teamId, 'jobId' => $jobId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Job($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "location" collection of methods.
 * Typical usage is:
 *  <code>
 *   $coordinateService = new Google_CoordinateService(...);
 *   $location = $coordinateService->location;
 *  </code>
 */
class Google_LocationServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves a list of locations for a worker. (location.list)
     *
     * @param string $teamId Team ID
     * @param string $workerEmail Worker email address.
     * @param string $startTimestampMs Start timestamp in milliseconds since the epoch.
     * @param array $optParams Optional parameters.
     * @return Google_LocationListResponse
     * @throws Google_Exception
     * @opt_param string maxResults Maximum number of results to return in one page.
     * @opt_param string pageToken Continuation token
     */
    public function listLocation($teamId, $workerEmail, $startTimestampMs, $optParams = [])
    {
        $params = ['teamId' => $teamId, 'workerEmail' => $workerEmail, 'startTimestampMs' => $startTimestampMs];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_LocationListResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "schedule" collection of methods.
 * Typical usage is:
 *  <code>
 *   $coordinateService = new Google_CoordinateService(...);
 *   $schedule = $coordinateService->schedule;
 *  </code>
 */
class Google_ScheduleServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves the schedule for a job. (schedule.get)
     *
     * @param string $teamId Team ID
     * @param string $jobId Job number
     * @param array $optParams Optional parameters.
     * @return Google_Schedule
     * @throws Google_Exception
     */
    public function get($teamId, $jobId, $optParams = [])
    {
        $params = ['teamId' => $teamId, 'jobId' => $jobId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Schedule($data);
        } else {
            return $data;
        }
    }

    /**
     * Replaces the schedule of a job with the provided schedule. This method supports patch semantics.
     * (schedule.patch)
     *
     * @param string $teamId Team ID
     * @param string $jobId Job number
     * @param Google_Schedule $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Schedule
     * @throws Google_Exception
     * @opt_param bool allDay Whether the job is scheduled for the whole day. Time of day in start/end times is ignored if this is true.
     * @opt_param string duration Job duration in milliseconds.
     * @opt_param string endTime Scheduled end time in milliseconds since epoch.
     * @opt_param string startTime Scheduled start time in milliseconds since epoch.
     */
    public function patch($teamId, $jobId, Google_Schedule $postBody, $optParams = [])
    {
        $params = ['teamId' => $teamId, 'jobId' => $jobId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Schedule($data);
        } else {
            return $data;
        }
    }

    /**
     * Replaces the schedule of a job with the provided schedule. (schedule.update)
     *
     * @param string $teamId Team ID
     * @param string $jobId Job number
     * @param Google_Schedule $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Schedule
     * @throws Google_Exception
     * @opt_param bool allDay Whether the job is scheduled for the whole day. Time of day in start/end times is ignored if this is true.
     * @opt_param string duration Job duration in milliseconds.
     * @opt_param string endTime Scheduled end time in milliseconds since epoch.
     * @opt_param string startTime Scheduled start time in milliseconds since epoch.
     */
    public function update($teamId, $jobId, Google_Schedule $postBody, $optParams = [])
    {
        $params = ['teamId' => $teamId, 'jobId' => $jobId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Schedule($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "worker" collection of methods.
 * Typical usage is:
 *  <code>
 *   $coordinateService = new Google_CoordinateService(...);
 *   $worker = $coordinateService->worker;
 *  </code>
 */
class Google_WorkerServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves a list of workers in a team. (worker.list)
     *
     * @param string $teamId Team ID
     * @param array $optParams Optional parameters.
     * @return Google_WorkerListResponse
     * @throws Google_Exception
     */
    public function listWorker($teamId, $optParams = [])
    {
        $params = ['teamId' => $teamId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_WorkerListResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Coordinate (v1).
 *
 * <p>
 * Lets you view and manage jobs in a Coordinate team.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/coordinate/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_CoordinateService extends Google_Service
{
    /**
     * @var Google_CustomFieldDefServiceResource
     */
    public $customFieldDef;
    /**
     * @var Google_JobsServiceResource
     */
    public $jobs;
    /**
     * @var Google_LocationServiceResource
     */
    public $location;
    /**
     * @var Google_ScheduleServiceResource
     */
    public $schedule;
    /**
     * @var Google_WorkerServiceResource
     */
    public $worker;

    /**
     * Constructs the internal representation of the Coordinate service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'coordinate/v1/teams/';
        $this->version = 'v1';
        $this->serviceName = 'coordinate';

        $client->addService($this->serviceName, $this->version);
        $this->customFieldDef = new Google_CustomFieldDefServiceResource($this, $this->serviceName, 'customFieldDef', json_decode('{"methods": {"list": {"id": "coordinate.customFieldDef.list", "path": "{teamId}/custom_fields", "httpMethod": "GET", "parameters": {"teamId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CustomFieldDefListResponse"}, "scopes": ["https://www.googleapis.com/auth/coordinate", "https://www.googleapis.com/auth/coordinate.readonly"]}}}', true));
        $this->jobs = new Google_JobsServiceResource($this, $this->serviceName, 'jobs', json_decode('{"methods": {"get": {"id": "coordinate.jobs.get", "path": "{teamId}/jobs/{jobId}", "httpMethod": "GET", "parameters": {"jobId": {"type": "string", "required": true, "format": "uint64", "location": "path"}, "teamId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Job"}, "scopes": ["https://www.googleapis.com/auth/coordinate", "https://www.googleapis.com/auth/coordinate.readonly"]}, "insert": {"id": "coordinate.jobs.insert", "path": "{teamId}/jobs", "httpMethod": "POST", "parameters": {"address": {"type": "string", "required": true, "location": "query"}, "assignee": {"type": "string", "location": "query"}, "customField": {"type": "string", "repeated": true, "location": "query"}, "customerName": {"type": "string", "location": "query"}, "customerPhoneNumber": {"type": "string", "location": "query"}, "lat": {"type": "number", "required": true, "format": "double", "location": "query"}, "lng": {"type": "number", "required": true, "format": "double", "location": "query"}, "note": {"type": "string", "location": "query"}, "teamId": {"type": "string", "required": true, "location": "path"}, "title": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "Job"}, "response": {"$ref": "Job"}, "scopes": ["https://www.googleapis.com/auth/coordinate"]}, "list": {"id": "coordinate.jobs.list", "path": "{teamId}/jobs", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "uint32", "location": "query"}, "minModifiedTimestampMs": {"type": "string", "format": "uint64", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "teamId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "JobListResponse"}, "scopes": ["https://www.googleapis.com/auth/coordinate", "https://www.googleapis.com/auth/coordinate.readonly"]}, "patch": {"id": "coordinate.jobs.patch", "path": "{teamId}/jobs/{jobId}", "httpMethod": "PATCH", "parameters": {"address": {"type": "string", "location": "query"}, "assignee": {"type": "string", "location": "query"}, "customField": {"type": "string", "repeated": true, "location": "query"}, "customerName": {"type": "string", "location": "query"}, "customerPhoneNumber": {"type": "string", "location": "query"}, "jobId": {"type": "string", "required": true, "format": "uint64", "location": "path"}, "lat": {"type": "number", "format": "double", "location": "query"}, "lng": {"type": "number", "format": "double", "location": "query"}, "note": {"type": "string", "location": "query"}, "progress": {"type": "string", "enum": ["COMPLETED", "IN_PROGRESS", "NOT_ACCEPTED", "NOT_STARTED", "OBSOLETE"], "location": "query"}, "teamId": {"type": "string", "required": true, "location": "path"}, "title": {"type": "string", "location": "query"}}, "request": {"$ref": "Job"}, "response": {"$ref": "Job"}, "scopes": ["https://www.googleapis.com/auth/coordinate"]}, "update": {"id": "coordinate.jobs.update", "path": "{teamId}/jobs/{jobId}", "httpMethod": "PUT", "parameters": {"address": {"type": "string", "location": "query"}, "assignee": {"type": "string", "location": "query"}, "customField": {"type": "string", "repeated": true, "location": "query"}, "customerName": {"type": "string", "location": "query"}, "customerPhoneNumber": {"type": "string", "location": "query"}, "jobId": {"type": "string", "required": true, "format": "uint64", "location": "path"}, "lat": {"type": "number", "format": "double", "location": "query"}, "lng": {"type": "number", "format": "double", "location": "query"}, "note": {"type": "string", "location": "query"}, "progress": {"type": "string", "enum": ["COMPLETED", "IN_PROGRESS", "NOT_ACCEPTED", "NOT_STARTED", "OBSOLETE"], "location": "query"}, "teamId": {"type": "string", "required": true, "location": "path"}, "title": {"type": "string", "location": "query"}}, "request": {"$ref": "Job"}, "response": {"$ref": "Job"}, "scopes": ["https://www.googleapis.com/auth/coordinate"]}}}', true));
        $this->location = new Google_LocationServiceResource($this, $this->serviceName, 'location', json_decode('{"methods": {"list": {"id": "coordinate.location.list", "path": "{teamId}/workers/{workerEmail}/locations", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "uint32", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "startTimestampMs": {"type": "string", "required": true, "format": "uint64", "location": "query"}, "teamId": {"type": "string", "required": true, "location": "path"}, "workerEmail": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "LocationListResponse"}, "scopes": ["https://www.googleapis.com/auth/coordinate", "https://www.googleapis.com/auth/coordinate.readonly"]}}}', true));
        $this->schedule = new Google_ScheduleServiceResource($this, $this->serviceName, 'schedule', json_decode('{"methods": {"get": {"id": "coordinate.schedule.get", "path": "{teamId}/jobs/{jobId}/schedule", "httpMethod": "GET", "parameters": {"jobId": {"type": "string", "required": true, "format": "uint64", "location": "path"}, "teamId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Schedule"}, "scopes": ["https://www.googleapis.com/auth/coordinate", "https://www.googleapis.com/auth/coordinate.readonly"]}, "patch": {"id": "coordinate.schedule.patch", "path": "{teamId}/jobs/{jobId}/schedule", "httpMethod": "PATCH", "parameters": {"allDay": {"type": "boolean", "location": "query"}, "duration": {"type": "string", "format": "uint64", "location": "query"}, "endTime": {"type": "string", "format": "uint64", "location": "query"}, "jobId": {"type": "string", "required": true, "format": "uint64", "location": "path"}, "startTime": {"type": "string", "format": "uint64", "location": "query"}, "teamId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Schedule"}, "response": {"$ref": "Schedule"}, "scopes": ["https://www.googleapis.com/auth/coordinate"]}, "update": {"id": "coordinate.schedule.update", "path": "{teamId}/jobs/{jobId}/schedule", "httpMethod": "PUT", "parameters": {"allDay": {"type": "boolean", "location": "query"}, "duration": {"type": "string", "format": "uint64", "location": "query"}, "endTime": {"type": "string", "format": "uint64", "location": "query"}, "jobId": {"type": "string", "required": true, "format": "uint64", "location": "path"}, "startTime": {"type": "string", "format": "uint64", "location": "query"}, "teamId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Schedule"}, "response": {"$ref": "Schedule"}, "scopes": ["https://www.googleapis.com/auth/coordinate"]}}}', true));
        $this->worker = new Google_WorkerServiceResource($this, $this->serviceName, 'worker', json_decode('{"methods": {"list": {"id": "coordinate.worker.list", "path": "{teamId}/workers", "httpMethod": "GET", "parameters": {"teamId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "WorkerListResponse"}, "scopes": ["https://www.googleapis.com/auth/coordinate", "https://www.googleapis.com/auth/coordinate.readonly"]}}}', true));

    }
}


/**
 * Class Google_CustomField
 */
class Google_CustomField extends Google_Model
{
    /**
     * @var
     */
    public $customFieldId;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $value;

    /**
     * @param $customFieldId
     */
    public function setCustomFieldId($customFieldId)
    {
        $this->customFieldId = $customFieldId;
    }

    /**
     * @return mixed
     */
    public function getCustomFieldId()
    {
        return $this->customFieldId;
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
 * Class Google_CustomFieldDef
 */
class Google_CustomFieldDef extends Google_Model
{
    /**
     * @var
     */
    public $enabled;
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
    public $name;
    /**
     * @var
     */
    public $requiredForCheckout;
    /**
     * @var
     */
    public $type;

    /**
     * @param $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * @return mixed
     */
    public function getEnabled()
    {
        return $this->enabled;
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
     * @param $requiredForCheckout
     */
    public function setRequiredForCheckout($requiredForCheckout)
    {
        $this->requiredForCheckout = $requiredForCheckout;
    }

    /**
     * @return mixed
     */
    public function getRequiredForCheckout()
    {
        return $this->requiredForCheckout;
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
 * Class Google_CustomFieldDefListResponse
 */
class Google_CustomFieldDefListResponse extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_CustomFieldDef';
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
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_CustomFieldDef) */
        $items)
    {
        $this->assertIsArray($items, 'Google_CustomFieldDef', __METHOD__);
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
 * Class Google_CustomFields
 */
class Google_CustomFields extends Google_Model
{
    /**
     * @var string
     */
    protected $__customFieldType = 'Google_CustomField';
    /**
     * @var string
     */
    protected $__customFieldDataType = 'array';
    /**
     * @var
     */
    public $customField;
    /**
     * @var
     */
    public $kind;

    /**
     * @param $customField
     * @throws Google_Exception
     */
    public function setCustomField(/* array(Google_CustomField) */
        $customField)
    {
        $this->assertIsArray($customField, 'Google_CustomField', __METHOD__);
        $this->customField = $customField;
    }

    /**
     * @return mixed
     */
    public function getCustomField()
    {
        return $this->customField;
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
 * Class Google_Job
 */
class Google_Job extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__jobChangeType = 'Google_JobChange';
    /**
     * @var string
     */
    protected $__jobChangeDataType = 'array';
    /**
     * @var
     */
    public $jobChange;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__stateType = 'Google_JobState';
    /**
     * @var string
     */
    protected $__stateDataType = '';
    /**
     * @var
     */
    public $state;

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
     * @param $jobChange
     * @throws Google_Exception
     */
    public function setJobChange(/* array(Google_JobChange) */
        $jobChange)
    {
        $this->assertIsArray($jobChange, 'Google_JobChange', __METHOD__);
        $this->jobChange = $jobChange;
    }

    /**
     * @return mixed
     */
    public function getJobChange()
    {
        return $this->jobChange;
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
     * @param Google_JobState $state
     */
    public function setState(Google_JobState $state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }
}

/**
 * Class Google_JobChange
 */
class Google_JobChange extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__stateType = 'Google_JobState';
    /**
     * @var string
     */
    protected $__stateDataType = '';
    /**
     * @var
     */
    public $state;
    /**
     * @var
     */
    public $timestamp;

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
     * @param Google_JobState $state
     */
    public function setState(Google_JobState $state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
}

/**
 * Class Google_JobListResponse
 */
class Google_JobListResponse extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Job';
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
    public function setItems(/* array(Google_Job) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Job', __METHOD__);
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
 * Class Google_JobState
 */
class Google_JobState extends Google_Model
{
    /**
     * @var
     */
    public $assignee;
    /**
     * @var string
     */
    protected $__customFieldsType = 'Google_CustomFields';
    /**
     * @var string
     */
    protected $__customFieldsDataType = '';
    /**
     * @var
     */
    public $customFields;
    /**
     * @var
     */
    public $customerName;
    /**
     * @var
     */
    public $customerPhoneNumber;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__locationType = 'Google_Location';
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
    public $note;
    /**
     * @var
     */
    public $progress;
    /**
     * @var
     */
    public $title;

    /**
     * @param $assignee
     */
    public function setAssignee($assignee)
    {
        $this->assignee = $assignee;
    }

    /**
     * @return mixed
     */
    public function getAssignee()
    {
        return $this->assignee;
    }

    /**
     * @param Google_CustomFields $customFields
     */
    public function setCustomFields(Google_CustomFields $customFields)
    {
        $this->customFields = $customFields;
    }

    /**
     * @return mixed
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @param $customerName
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
    }

    /**
     * @return mixed
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param $customerPhoneNumber
     */
    public function setCustomerPhoneNumber($customerPhoneNumber)
    {
        $this->customerPhoneNumber = $customerPhoneNumber;
    }

    /**
     * @return mixed
     */
    public function getCustomerPhoneNumber()
    {
        return $this->customerPhoneNumber;
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
     * @param Google_Location $location
     */
    public function setLocation(Google_Location $location)
    {
        $this->location = $location;
    }

    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param $note
     * @throws Google_Exception
     */
    public function setNote(/* array(Google_string) */
        $note)
    {
        $this->assertIsArray($note, 'Google_string', __METHOD__);
        $this->note = $note;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param $progress
     */
    public function setProgress($progress)
    {
        $this->progress = $progress;
    }

    /**
     * @return mixed
     */
    public function getProgress()
    {
        return $this->progress;
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
}

/**
 * Class Google_Location
 */
class Google_Location extends Google_Model
{
    /**
     * @var
     */
    public $addressLine;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $lat;
    /**
     * @var
     */
    public $lng;

    /**
     * @param $addressLine
     * @throws Google_Exception
     */
    public function setAddressLine(/* array(Google_string) */
        $addressLine)
    {
        $this->assertIsArray($addressLine, 'Google_string', __METHOD__);
        $this->addressLine = $addressLine;
    }

    /**
     * @return mixed
     */
    public function getAddressLine()
    {
        return $this->addressLine;
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
     * @param $lat
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    }

    /**
     * @return mixed
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @param $lng
     */
    public function setLng($lng)
    {
        $this->lng = $lng;
    }

    /**
     * @return mixed
     */
    public function getLng()
    {
        return $this->lng;
    }
}

/**
 * Class Google_LocationListResponse
 */
class Google_LocationListResponse extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_LocationRecord';
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
     * @var string
     */
    protected $__tokenPaginationType = 'Google_TokenPagination';
    /**
     * @var string
     */
    protected $__tokenPaginationDataType = '';
    /**
     * @var
     */
    public $tokenPagination;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_LocationRecord) */
        $items)
    {
        $this->assertIsArray($items, 'Google_LocationRecord', __METHOD__);
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
     * @param Google_TokenPagination $tokenPagination
     */
    public function setTokenPagination(Google_TokenPagination $tokenPagination)
    {
        $this->tokenPagination = $tokenPagination;
    }

    /**
     * @return mixed
     */
    public function getTokenPagination()
    {
        return $this->tokenPagination;
    }
}

/**
 * Class Google_LocationRecord
 */
class Google_LocationRecord extends Google_Model
{
    /**
     * @var
     */
    public $collectionTime;
    /**
     * @var
     */
    public $confidenceRadius;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $latitude;
    /**
     * @var
     */
    public $longitude;

    /**
     * @param $collectionTime
     */
    public function setCollectionTime($collectionTime)
    {
        $this->collectionTime = $collectionTime;
    }

    /**
     * @return mixed
     */
    public function getCollectionTime()
    {
        return $this->collectionTime;
    }

    /**
     * @param $confidenceRadius
     */
    public function setConfidenceRadius($confidenceRadius)
    {
        $this->confidenceRadius = $confidenceRadius;
    }

    /**
     * @return mixed
     */
    public function getConfidenceRadius()
    {
        return $this->confidenceRadius;
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
 * Class Google_Schedule
 */
class Google_Schedule extends Google_Model
{
    /**
     * @var
     */
    public $allDay;
    /**
     * @var
     */
    public $duration;
    /**
     * @var
     */
    public $endTime;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $startTime;

    /**
     * @param $allDay
     */
    public function setAllDay($allDay)
    {
        $this->allDay = $allDay;
    }

    /**
     * @return mixed
     */
    public function getAllDay()
    {
        return $this->allDay;
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
     * @param $endTime
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
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
     * @param $startTime
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }
}

/**
 * Class Google_TokenPagination
 */
class Google_TokenPagination extends Google_Model
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
     * @var
     */
    public $previousPageToken;

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
     * @param $previousPageToken
     */
    public function setPreviousPageToken($previousPageToken)
    {
        $this->previousPageToken = $previousPageToken;
    }

    /**
     * @return mixed
     */
    public function getPreviousPageToken()
    {
        return $this->previousPageToken;
    }
}

/**
 * Class Google_Worker
 */
class Google_Worker extends Google_Model
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
}

/**
 * Class Google_WorkerListResponse
 */
class Google_WorkerListResponse extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Worker';
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
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Worker) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Worker', __METHOD__);
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
