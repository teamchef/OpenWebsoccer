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
 * The "taskqueues" collection of methods.
 * Typical usage is:
 *  <code>
 *   $taskqueueService = new Google_TaskqueueService(...);
 *   $taskqueues = $taskqueueService->taskqueues;
 *  </code>
 */
class Google_TaskqueuesServiceResource extends Google_ServiceResource
{

    /**
     * Get detailed information about a TaskQueue. (taskqueues.get)
     *
     * @param string $project The project under which the queue lies.
     * @param string $taskqueue The id of the taskqueue to get the properties of.
     * @param array $optParams Optional parameters.
     * @return Google_TaskQueue
     * @throws Google_Exception
     * @opt_param bool getStats Whether to get stats. Optional.
     */
    public function get($project, $taskqueue, $optParams = [])
    {
        $params = ['project' => $project, 'taskqueue' => $taskqueue];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_TaskQueue($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "tasks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $taskqueueService = new Google_TaskqueueService(...);
 *   $tasks = $taskqueueService->tasks;
 *  </code>
 */
class Google_TasksServiceResource extends Google_ServiceResource
{

    /**
     * Delete a task from a TaskQueue. (tasks.delete)
     *
     * @param string $project The project under which the queue lies.
     * @param string $taskqueue The taskqueue to delete a task from.
     * @param string $task The id of the task to delete.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($project, $taskqueue, $task, $optParams = [])
    {
        $params = ['project' => $project, 'taskqueue' => $taskqueue, 'task' => $task];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Get a particular task from a TaskQueue. (tasks.get)
     *
     * @param string $project The project under which the queue lies.
     * @param string $taskqueue The taskqueue in which the task belongs.
     * @param string $task The task to get properties of.
     * @param array $optParams Optional parameters.
     * @return Google_Task
     * @throws Google_Exception
     */
    public function get($project, $taskqueue, $task, $optParams = [])
    {
        $params = ['project' => $project, 'taskqueue' => $taskqueue, 'task' => $task];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Task($data);
        } else {
            return $data;
        }
    }

    /**
     * Insert a new task in a TaskQueue (tasks.insert)
     *
     * @param string $project The project under which the queue lies
     * @param string $taskqueue The taskqueue to insert the task into
     * @param Google_Task $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Task
     * @throws Google_Exception
     */
    public function insert($project, $taskqueue, Google_Task $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'taskqueue' => $taskqueue, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Task($data);
        } else {
            return $data;
        }
    }

    /**
     * Lease 1 or more tasks from a TaskQueue. (tasks.lease)
     *
     * @param string $project The project under which the queue lies.
     * @param string $taskqueue The taskqueue to lease a task from.
     * @param int $numTasks The number of tasks to lease.
     * @param int $leaseSecs The lease in seconds.
     * @param array $optParams Optional parameters.
     * @return Google_Tasks
     * @throws Google_Exception
     * @opt_param bool groupByTag When true, all returned tasks will have the same tag
     * @opt_param string tag The tag allowed for tasks in the response. Must only be specified if group_by_tag is true. If group_by_tag is true and tag is not specified the tag will be that of the oldest task by eta, i.e. the first available tag
     */
    public function lease($project, $taskqueue, $numTasks, $leaseSecs, $optParams = [])
    {
        $params = ['project' => $project, 'taskqueue' => $taskqueue, 'numTasks' => $numTasks, 'leaseSecs' => $leaseSecs];
        $params = array_merge($params, $optParams);
        $data = $this->__call('lease', [$params]);
        if ($this->useObjects()) {
            return new Google_Tasks($data);
        } else {
            return $data;
        }
    }

    /**
     * List Tasks in a TaskQueue (tasks.list)
     *
     * @param string $project The project under which the queue lies.
     * @param string $taskqueue The id of the taskqueue to list tasks from.
     * @param array $optParams Optional parameters.
     * @return Google_Tasks2
     * @throws Google_Exception
     */
    public function listTasks($project, $taskqueue, $optParams = [])
    {
        $params = ['project' => $project, 'taskqueue' => $taskqueue];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Tasks2($data);
        } else {
            return $data;
        }
    }

    /**
     * Update tasks that are leased out of a TaskQueue. This method supports patch semantics.
     * (tasks.patch)
     *
     * @param string $project The project under which the queue lies.
     * @param string $taskqueue
     * @param string $task
     * @param int $newLeaseSeconds The new lease in seconds.
     * @param Google_Task $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Task
     * @throws Google_Exception
     */
    public function patch($project, $taskqueue, $task, $newLeaseSeconds, Google_Task $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'taskqueue' => $taskqueue, 'task' => $task, 'newLeaseSeconds' => $newLeaseSeconds, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Task($data);
        } else {
            return $data;
        }
    }

    /**
     * Update tasks that are leased out of a TaskQueue. (tasks.update)
     *
     * @param string $project The project under which the queue lies.
     * @param string $taskqueue
     * @param string $task
     * @param int $newLeaseSeconds The new lease in seconds.
     * @param Google_Task $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Task
     * @throws Google_Exception
     */
    public function update($project, $taskqueue, $task, $newLeaseSeconds, Google_Task $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'taskqueue' => $taskqueue, 'task' => $task, 'newLeaseSeconds' => $newLeaseSeconds, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Task($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Taskqueue (v1beta2).
 *
 * <p>
 * Lets you access a Google App Engine Pull Task Queue over REST.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/appengine/docs/python/taskqueue/rest" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_TaskqueueService extends Google_Service
{
    /**
     * @var Google_TaskqueuesServiceResource
     */
    public $taskqueues;
    /**
     * @var Google_TasksServiceResource
     */
    public $tasks;

    /**
     * Constructs the internal representation of the Taskqueue service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'taskqueue/v1beta2/projects/';
        $this->version = 'v1beta2';
        $this->serviceName = 'taskqueue';

        $client->addService($this->serviceName, $this->version);
        $this->taskqueues = new Google_TaskqueuesServiceResource($this, $this->serviceName, 'taskqueues', json_decode('{"methods": {"get": {"id": "taskqueue.taskqueues.get", "path": "{project}/taskqueues/{taskqueue}", "httpMethod": "GET", "parameters": {"getStats": {"type": "boolean", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "taskqueue": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "TaskQueue"}, "scopes": ["https://www.googleapis.com/auth/taskqueue", "https://www.googleapis.com/auth/taskqueue.consumer"]}}}', true));
        $this->tasks = new Google_TasksServiceResource($this, $this->serviceName, 'tasks', json_decode('{"methods": {"delete": {"id": "taskqueue.tasks.delete", "path": "{project}/taskqueues/{taskqueue}/tasks/{task}", "httpMethod": "DELETE", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "task": {"type": "string", "required": true, "location": "path"}, "taskqueue": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/taskqueue", "https://www.googleapis.com/auth/taskqueue.consumer"]}, "get": {"id": "taskqueue.tasks.get", "path": "{project}/taskqueues/{taskqueue}/tasks/{task}", "httpMethod": "GET", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "task": {"type": "string", "required": true, "location": "path"}, "taskqueue": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Task"}, "scopes": ["https://www.googleapis.com/auth/taskqueue", "https://www.googleapis.com/auth/taskqueue.consumer"]}, "insert": {"id": "taskqueue.tasks.insert", "path": "{project}/taskqueues/{taskqueue}/tasks", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "taskqueue": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Task"}, "response": {"$ref": "Task"}, "scopes": ["https://www.googleapis.com/auth/taskqueue", "https://www.googleapis.com/auth/taskqueue.consumer"]}, "lease": {"id": "taskqueue.tasks.lease", "path": "{project}/taskqueues/{taskqueue}/tasks/lease", "httpMethod": "POST", "parameters": {"groupByTag": {"type": "boolean", "location": "query"}, "leaseSecs": {"type": "integer", "required": true, "format": "int32", "location": "query"}, "numTasks": {"type": "integer", "required": true, "format": "int32", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "tag": {"type": "string", "location": "query"}, "taskqueue": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Tasks"}, "scopes": ["https://www.googleapis.com/auth/taskqueue", "https://www.googleapis.com/auth/taskqueue.consumer"]}, "list": {"id": "taskqueue.tasks.list", "path": "{project}/taskqueues/{taskqueue}/tasks", "httpMethod": "GET", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "taskqueue": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Tasks2"}, "scopes": ["https://www.googleapis.com/auth/taskqueue", "https://www.googleapis.com/auth/taskqueue.consumer"]}, "patch": {"id": "taskqueue.tasks.patch", "path": "{project}/taskqueues/{taskqueue}/tasks/{task}", "httpMethod": "PATCH", "parameters": {"newLeaseSeconds": {"type": "integer", "required": true, "format": "int32", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "task": {"type": "string", "required": true, "location": "path"}, "taskqueue": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Task"}, "response": {"$ref": "Task"}, "scopes": ["https://www.googleapis.com/auth/taskqueue", "https://www.googleapis.com/auth/taskqueue.consumer"]}, "update": {"id": "taskqueue.tasks.update", "path": "{project}/taskqueues/{taskqueue}/tasks/{task}", "httpMethod": "POST", "parameters": {"newLeaseSeconds": {"type": "integer", "required": true, "format": "int32", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "task": {"type": "string", "required": true, "location": "path"}, "taskqueue": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Task"}, "response": {"$ref": "Task"}, "scopes": ["https://www.googleapis.com/auth/taskqueue", "https://www.googleapis.com/auth/taskqueue.consumer"]}}}', true));

    }
}


/**
 * Class Google_Task
 */
class Google_Task extends Google_Model
{
    /**
     * @var
     */
    public $enqueueTimestamp;
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
    public $leaseTimestamp;
    /**
     * @var
     */
    public $payloadBase64;
    /**
     * @var
     */
    public $queueName;
    /**
     * @var
     */
    public $retry_count;
    /**
     * @var
     */
    public $tag;

    /**
     * @param $enqueueTimestamp
     */
    public function setEnqueueTimestamp($enqueueTimestamp)
    {
        $this->enqueueTimestamp = $enqueueTimestamp;
    }

    /**
     * @return mixed
     */
    public function getEnqueueTimestamp()
    {
        return $this->enqueueTimestamp;
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
     * @param $leaseTimestamp
     */
    public function setLeaseTimestamp($leaseTimestamp)
    {
        $this->leaseTimestamp = $leaseTimestamp;
    }

    /**
     * @return mixed
     */
    public function getLeaseTimestamp()
    {
        return $this->leaseTimestamp;
    }

    /**
     * @param $payloadBase64
     */
    public function setPayloadBase64($payloadBase64)
    {
        $this->payloadBase64 = $payloadBase64;
    }

    /**
     * @return mixed
     */
    public function getPayloadBase64()
    {
        return $this->payloadBase64;
    }

    /**
     * @param $queueName
     */
    public function setQueueName($queueName)
    {
        $this->queueName = $queueName;
    }

    /**
     * @return mixed
     */
    public function getQueueName()
    {
        return $this->queueName;
    }

    /**
     * @param $retry_count
     */
    public function setRetry_count($retry_count)
    {
        $this->retry_count = $retry_count;
    }

    /**
     * @return mixed
     */
    public function getRetry_count()
    {
        return $this->retry_count;
    }

    /**
     * @param $tag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    }

    /**
     * @return mixed
     */
    public function getTag()
    {
        return $this->tag;
    }
}

/**
 * Class Google_TaskQueue
 */
class Google_TaskQueue extends Google_Model
{
    /**
     * @var string
     */
    protected $__aclType = 'Google_TaskQueueAcl';
    /**
     * @var string
     */
    protected $__aclDataType = '';
    /**
     * @var
     */
    public $acl;
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
    public $maxLeases;
    /**
     * @var string
     */
    protected $__statsType = 'Google_TaskQueueStats';
    /**
     * @var string
     */
    protected $__statsDataType = '';
    /**
     * @var
     */
    public $stats;

    /**
     * @param Google_TaskQueueAcl $acl
     */
    public function setAcl(Google_TaskQueueAcl $acl)
    {
        $this->acl = $acl;
    }

    /**
     * @return mixed
     */
    public function getAcl()
    {
        return $this->acl;
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
     * @param $maxLeases
     */
    public function setMaxLeases($maxLeases)
    {
        $this->maxLeases = $maxLeases;
    }

    /**
     * @return mixed
     */
    public function getMaxLeases()
    {
        return $this->maxLeases;
    }

    /**
     * @param Google_TaskQueueStats $stats
     */
    public function setStats(Google_TaskQueueStats $stats)
    {
        $this->stats = $stats;
    }

    /**
     * @return mixed
     */
    public function getStats()
    {
        return $this->stats;
    }
}

/**
 * Class Google_TaskQueueAcl
 */
class Google_TaskQueueAcl extends Google_Model
{
    /**
     * @var
     */
    public $adminEmails;
    /**
     * @var
     */
    public $consumerEmails;
    /**
     * @var
     */
    public $producerEmails;

    /**
     * @param $adminEmails
     * @throws Google_Exception
     */
    public function setAdminEmails(/* array(Google_string) */
        $adminEmails)
    {
        $this->assertIsArray($adminEmails, 'Google_string', __METHOD__);
        $this->adminEmails = $adminEmails;
    }

    /**
     * @return mixed
     */
    public function getAdminEmails()
    {
        return $this->adminEmails;
    }

    /**
     * @param $consumerEmails
     * @throws Google_Exception
     */
    public function setConsumerEmails(/* array(Google_string) */
        $consumerEmails)
    {
        $this->assertIsArray($consumerEmails, 'Google_string', __METHOD__);
        $this->consumerEmails = $consumerEmails;
    }

    /**
     * @return mixed
     */
    public function getConsumerEmails()
    {
        return $this->consumerEmails;
    }

    /**
     * @param $producerEmails
     * @throws Google_Exception
     */
    public function setProducerEmails(/* array(Google_string) */
        $producerEmails)
    {
        $this->assertIsArray($producerEmails, 'Google_string', __METHOD__);
        $this->producerEmails = $producerEmails;
    }

    /**
     * @return mixed
     */
    public function getProducerEmails()
    {
        return $this->producerEmails;
    }
}

/**
 * Class Google_TaskQueueStats
 */
class Google_TaskQueueStats extends Google_Model
{
    /**
     * @var
     */
    public $leasedLastHour;
    /**
     * @var
     */
    public $leasedLastMinute;
    /**
     * @var
     */
    public $oldestTask;
    /**
     * @var
     */
    public $totalTasks;

    /**
     * @param $leasedLastHour
     */
    public function setLeasedLastHour($leasedLastHour)
    {
        $this->leasedLastHour = $leasedLastHour;
    }

    /**
     * @return mixed
     */
    public function getLeasedLastHour()
    {
        return $this->leasedLastHour;
    }

    /**
     * @param $leasedLastMinute
     */
    public function setLeasedLastMinute($leasedLastMinute)
    {
        $this->leasedLastMinute = $leasedLastMinute;
    }

    /**
     * @return mixed
     */
    public function getLeasedLastMinute()
    {
        return $this->leasedLastMinute;
    }

    /**
     * @param $oldestTask
     */
    public function setOldestTask($oldestTask)
    {
        $this->oldestTask = $oldestTask;
    }

    /**
     * @return mixed
     */
    public function getOldestTask()
    {
        return $this->oldestTask;
    }

    /**
     * @param $totalTasks
     */
    public function setTotalTasks($totalTasks)
    {
        $this->totalTasks = $totalTasks;
    }

    /**
     * @return mixed
     */
    public function getTotalTasks()
    {
        return $this->totalTasks;
    }
}

/**
 * Class Google_Tasks
 */
class Google_Tasks extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Task';
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
    public function setItems(/* array(Google_Task) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Task', __METHOD__);
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
 * Class Google_Tasks2
 */
class Google_Tasks2 extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Task';
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
    public function setItems(/* array(Google_Task) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Task', __METHOD__);
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
