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
 * The "tasklists" collection of methods.
 * Typical usage is:
 *  <code>
 *   $tasksService = new Google_TasksService(...);
 *   $tasklists = $tasksService->tasklists;
 *  </code>
 */
class Google_TasklistsServiceResource extends Google_ServiceResource
{

    /**
     * Deletes the authenticated user's specified task list. (tasklists.delete)
     *
     * @param string $tasklist Task list identifier.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($tasklist, $optParams = [])
    {
        $params = ['tasklist' => $tasklist];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Returns the authenticated user's specified task list. (tasklists.get)
     *
     * @param string $tasklist Task list identifier.
     * @param array $optParams Optional parameters.
     * @return Google_TaskList
     * @throws Google_Exception
     */
    public function get($tasklist, $optParams = [])
    {
        $params = ['tasklist' => $tasklist];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_TaskList($data);
        } else {
            return $data;
        }
    }

    /**
     * Creates a new task list and adds it to the authenticated user's task lists. (tasklists.insert)
     *
     * @param Google_TaskList $postBody
     * @param array $optParams Optional parameters.
     * @return Google_TaskList
     * @throws Google_Exception
     */
    public function insert(Google_TaskList $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_TaskList($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns all the authenticated user's task lists. (tasklists.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_TaskLists
     * @throws Google_Exception
     * @opt_param string maxResults Maximum number of task lists returned on one page. Optional. The default is 100.
     * @opt_param string pageToken Token specifying the result page to return. Optional.
     */
    public function listTasklists($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_TaskLists($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates the authenticated user's specified task list. This method supports patch semantics.
     * (tasklists.patch)
     *
     * @param string $tasklist Task list identifier.
     * @param Google_TaskList $postBody
     * @param array $optParams Optional parameters.
     * @return Google_TaskList
     * @throws Google_Exception
     */
    public function patch($tasklist, Google_TaskList $postBody, $optParams = [])
    {
        $params = ['tasklist' => $tasklist, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_TaskList($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates the authenticated user's specified task list. (tasklists.update)
     *
     * @param string $tasklist Task list identifier.
     * @param Google_TaskList $postBody
     * @param array $optParams Optional parameters.
     * @return Google_TaskList
     * @throws Google_Exception
     */
    public function update($tasklist, Google_TaskList $postBody, $optParams = [])
    {
        $params = ['tasklist' => $tasklist, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_TaskList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "tasks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $tasksService = new Google_TasksService(...);
 *   $tasks = $tasksService->tasks;
 *  </code>
 */
class Google_TasksServiceResource extends Google_ServiceResource
{

    /**
     * Clears all completed tasks from the specified task list. The affected tasks will be marked as
     * 'hidden' and no longer be returned by default when retrieving all tasks for a task list.
     * (tasks.clear)
     *
     * @param string $tasklist Task list identifier.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function clear($tasklist, $optParams = [])
    {
        $params = ['tasklist' => $tasklist];
        $params = array_merge($params, $optParams);
        $data = $this->__call('clear', [$params]);
        return $data;
    }

    /**
     * Deletes the specified task from the task list. (tasks.delete)
     *
     * @param string $tasklist Task list identifier.
     * @param string $task Task identifier.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($tasklist, $task, $optParams = [])
    {
        $params = ['tasklist' => $tasklist, 'task' => $task];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Returns the specified task. (tasks.get)
     *
     * @param string $tasklist Task list identifier.
     * @param string $task Task identifier.
     * @param array $optParams Optional parameters.
     * @return Google_Task
     * @throws Google_Exception
     */
    public function get($tasklist, $task, $optParams = [])
    {
        $params = ['tasklist' => $tasklist, 'task' => $task];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Task($data);
        } else {
            return $data;
        }
    }

    /**
     * Creates a new task on the specified task list. (tasks.insert)
     *
     * @param string $tasklist Task list identifier.
     * @param Google_Task $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Task
     * @throws Google_Exception
     * @opt_param string parent Parent task identifier. If the task is created at the top level, this parameter is omitted. Optional.
     * @opt_param string previous Previous sibling task identifier. If the task is created at the first position among its siblings, this parameter is omitted. Optional.
     */
    public function insert($tasklist, Google_Task $postBody, $optParams = [])
    {
        $params = ['tasklist' => $tasklist, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Task($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns all tasks in the specified task list. (tasks.list)
     *
     * @param string $tasklist Task list identifier.
     * @param array $optParams Optional parameters.
     * @return Google_Tasks
     * @throws Google_Exception
     * @opt_param string completedMax Upper bound for a task's completion date (as a RFC 3339 timestamp) to filter by. Optional. The default is not to filter by completion date.
     * @opt_param string completedMin Lower bound for a task's completion date (as a RFC 3339 timestamp) to filter by. Optional. The default is not to filter by completion date.
     * @opt_param string dueMax Upper bound for a task's due date (as a RFC 3339 timestamp) to filter by. Optional. The default is not to filter by due date.
     * @opt_param string dueMin Lower bound for a task's due date (as a RFC 3339 timestamp) to filter by. Optional. The default is not to filter by due date.
     * @opt_param string maxResults Maximum number of task lists returned on one page. Optional. The default is 100.
     * @opt_param string pageToken Token specifying the result page to return. Optional.
     * @opt_param bool showCompleted Flag indicating whether completed tasks are returned in the result. Optional. The default is True.
     * @opt_param bool showDeleted Flag indicating whether deleted tasks are returned in the result. Optional. The default is False.
     * @opt_param bool showHidden Flag indicating whether hidden tasks are returned in the result. Optional. The default is False.
     * @opt_param string updatedMin Lower bound for a task's last modification time (as a RFC 3339 timestamp) to filter by. Optional. The default is not to filter by last modification time.
     */
    public function listTasks($tasklist, $optParams = [])
    {
        $params = ['tasklist' => $tasklist];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Tasks($data);
        } else {
            return $data;
        }
    }

    /**
     * Moves the specified task to another position in the task list. This can include putting it as a
     * child task under a new parent and/or move it to a different position among its sibling tasks.
     * (tasks.move)
     *
     * @param string $tasklist Task list identifier.
     * @param string $task Task identifier.
     * @param array $optParams Optional parameters.
     * @return Google_Task
     * @throws Google_Exception
     * @opt_param string parent New parent task identifier. If the task is moved to the top level, this parameter is omitted. Optional.
     * @opt_param string previous New previous sibling task identifier. If the task is moved to the first position among its siblings, this parameter is omitted. Optional.
     */
    public function move($tasklist, $task, $optParams = [])
    {
        $params = ['tasklist' => $tasklist, 'task' => $task];
        $params = array_merge($params, $optParams);
        $data = $this->__call('move', [$params]);
        if ($this->useObjects()) {
            return new Google_Task($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates the specified task. This method supports patch semantics. (tasks.patch)
     *
     * @param string $tasklist Task list identifier.
     * @param string $task Task identifier.
     * @param Google_Task $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Task
     * @throws Google_Exception
     */
    public function patch($tasklist, $task, Google_Task $postBody, $optParams = [])
    {
        $params = ['tasklist' => $tasklist, 'task' => $task, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Task($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates the specified task. (tasks.update)
     *
     * @param string $tasklist Task list identifier.
     * @param string $task Task identifier.
     * @param Google_Task $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Task
     * @throws Google_Exception
     */
    public function update($tasklist, $task, Google_Task $postBody, $optParams = [])
    {
        $params = ['tasklist' => $tasklist, 'task' => $task, 'postBody' => $postBody];
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
 * Service definition for Google_Tasks (v1).
 *
 * <p>
 * Lets you manage your tasks and task lists.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/google-apps/tasks/firstapp" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_TasksService extends Google_Service
{
    /**
     * @var Google_TasklistsServiceResource
     */
    public $tasklists;
    /**
     * @var Google_TasksServiceResource
     */
    public $tasks;

    /**
     * Constructs the internal representation of the Tasks service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'tasks/v1/';
        $this->version = 'v1';
        $this->serviceName = 'tasks';

        $client->addService($this->serviceName, $this->version);
        $this->tasklists = new Google_TasklistsServiceResource($this, $this->serviceName, 'tasklists', json_decode('{"methods": {"delete": {"id": "tasks.tasklists.delete", "path": "users/@me/lists/{tasklist}", "httpMethod": "DELETE", "parameters": {"tasklist": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/tasks"]}, "get": {"id": "tasks.tasklists.get", "path": "users/@me/lists/{tasklist}", "httpMethod": "GET", "parameters": {"tasklist": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "TaskList"}, "scopes": ["https://www.googleapis.com/auth/tasks", "https://www.googleapis.com/auth/tasks.readonly"]}, "insert": {"id": "tasks.tasklists.insert", "path": "users/@me/lists", "httpMethod": "POST", "request": {"$ref": "TaskList"}, "response": {"$ref": "TaskList"}, "scopes": ["https://www.googleapis.com/auth/tasks"]}, "list": {"id": "tasks.tasklists.list", "path": "users/@me/lists", "httpMethod": "GET", "parameters": {"maxResults": {"type": "string", "format": "int64", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "TaskLists"}, "scopes": ["https://www.googleapis.com/auth/tasks", "https://www.googleapis.com/auth/tasks.readonly"]}, "patch": {"id": "tasks.tasklists.patch", "path": "users/@me/lists/{tasklist}", "httpMethod": "PATCH", "parameters": {"tasklist": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "TaskList"}, "response": {"$ref": "TaskList"}, "scopes": ["https://www.googleapis.com/auth/tasks"]}, "update": {"id": "tasks.tasklists.update", "path": "users/@me/lists/{tasklist}", "httpMethod": "PUT", "parameters": {"tasklist": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "TaskList"}, "response": {"$ref": "TaskList"}, "scopes": ["https://www.googleapis.com/auth/tasks"]}}}', true));
        $this->tasks = new Google_TasksServiceResource($this, $this->serviceName, 'tasks', json_decode('{"methods": {"clear": {"id": "tasks.tasks.clear", "path": "lists/{tasklist}/clear", "httpMethod": "POST", "parameters": {"tasklist": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/tasks"]}, "delete": {"id": "tasks.tasks.delete", "path": "lists/{tasklist}/tasks/{task}", "httpMethod": "DELETE", "parameters": {"task": {"type": "string", "required": true, "location": "path"}, "tasklist": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/tasks"]}, "get": {"id": "tasks.tasks.get", "path": "lists/{tasklist}/tasks/{task}", "httpMethod": "GET", "parameters": {"task": {"type": "string", "required": true, "location": "path"}, "tasklist": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Task"}, "scopes": ["https://www.googleapis.com/auth/tasks", "https://www.googleapis.com/auth/tasks.readonly"]}, "insert": {"id": "tasks.tasks.insert", "path": "lists/{tasklist}/tasks", "httpMethod": "POST", "parameters": {"parent": {"type": "string", "location": "query"}, "previous": {"type": "string", "location": "query"}, "tasklist": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Task"}, "response": {"$ref": "Task"}, "scopes": ["https://www.googleapis.com/auth/tasks"]}, "list": {"id": "tasks.tasks.list", "path": "lists/{tasklist}/tasks", "httpMethod": "GET", "parameters": {"completedMax": {"type": "string", "location": "query"}, "completedMin": {"type": "string", "location": "query"}, "dueMax": {"type": "string", "location": "query"}, "dueMin": {"type": "string", "location": "query"}, "maxResults": {"type": "string", "format": "int64", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "showCompleted": {"type": "boolean", "location": "query"}, "showDeleted": {"type": "boolean", "location": "query"}, "showHidden": {"type": "boolean", "location": "query"}, "tasklist": {"type": "string", "required": true, "location": "path"}, "updatedMin": {"type": "string", "location": "query"}}, "response": {"$ref": "Tasks"}, "scopes": ["https://www.googleapis.com/auth/tasks", "https://www.googleapis.com/auth/tasks.readonly"]}, "move": {"id": "tasks.tasks.move", "path": "lists/{tasklist}/tasks/{task}/move", "httpMethod": "POST", "parameters": {"parent": {"type": "string", "location": "query"}, "previous": {"type": "string", "location": "query"}, "task": {"type": "string", "required": true, "location": "path"}, "tasklist": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Task"}, "scopes": ["https://www.googleapis.com/auth/tasks"]}, "patch": {"id": "tasks.tasks.patch", "path": "lists/{tasklist}/tasks/{task}", "httpMethod": "PATCH", "parameters": {"task": {"type": "string", "required": true, "location": "path"}, "tasklist": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Task"}, "response": {"$ref": "Task"}, "scopes": ["https://www.googleapis.com/auth/tasks"]}, "update": {"id": "tasks.tasks.update", "path": "lists/{tasklist}/tasks/{task}", "httpMethod": "PUT", "parameters": {"task": {"type": "string", "required": true, "location": "path"}, "tasklist": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Task"}, "response": {"$ref": "Task"}, "scopes": ["https://www.googleapis.com/auth/tasks"]}}}', true));

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
    public $completed;
    /**
     * @var
     */
    public $deleted;
    /**
     * @var
     */
    public $due;
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $hidden;
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
    protected $__linksType = 'Google_TaskLinks';
    /**
     * @var string
     */
    protected $__linksDataType = 'array';
    /**
     * @var
     */
    public $links;
    /**
     * @var
     */
    public $notes;
    /**
     * @var
     */
    public $parent;
    /**
     * @var
     */
    public $position;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $status;
    /**
     * @var
     */
    public $title;
    /**
     * @var
     */
    public $updated;

    /**
     * @param $completed
     */
    public function setCompleted($completed)
    {
        $this->completed = $completed;
    }

    /**
     * @return mixed
     */
    public function getCompleted()
    {
        return $this->completed;
    }

    /**
     * @param $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    /**
     * @return mixed
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param $due
     */
    public function setDue($due)
    {
        $this->due = $due;
    }

    /**
     * @return mixed
     */
    public function getDue()
    {
        return $this->due;
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
     * @param $hidden
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;
    }

    /**
     * @return mixed
     */
    public function getHidden()
    {
        return $this->hidden;
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
     * @param $links
     * @throws Google_Exception
     */
    public function setLinks(/* array(Google_TaskLinks) */
        $links)
    {
        $this->assertIsArray($links, 'Google_TaskLinks', __METHOD__);
        $this->links = $links;
    }

    /**
     * @return mixed
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * @return mixed
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * @return mixed
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param $position
     */
    public function setPosition($position)
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

    /**
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}

/**
 * Class Google_TaskLinks
 */
class Google_TaskLinks extends Google_Model
{
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $link;
    /**
     * @var
     */
    public $type;

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
     * @param $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
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
 * Class Google_TaskList
 */
class Google_TaskList extends Google_Model
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
     * @var
     */
    public $kind;
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

    /**
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}

/**
 * Class Google_TaskLists
 */
class Google_TaskLists extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_TaskList';
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
    public function setItems(/* array(Google_TaskList) */
        $items)
    {
        $this->assertIsArray($items, 'Google_TaskList', __METHOD__);
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
 * Class Google_Tasks
 */
class Google_Tasks extends Google_Model
{
    /**
     * @var
     */
    public $etag;
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
     * @var
     */
    public $nextPageToken;

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
