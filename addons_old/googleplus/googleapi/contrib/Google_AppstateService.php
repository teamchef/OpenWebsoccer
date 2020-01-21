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
 * The "states" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appstateService = new Google_AppstateService(...);
 *   $states = $appstateService->states;
 *  </code>
 */
class Google_StatesServiceResource extends Google_ServiceResource
{

    /**
     * Clears (sets to empty) the data for the passed key if and only if the passed version matches the
     * currently stored version. This method results in a conflict error on version mismatch.
     * (states.clear)
     *
     * @param int $stateKey The key for the data to be retrieved.
     * @param array $optParams Optional parameters.
     * @return Google_WriteResult
     * @throws Google_Exception
     * @opt_param string currentDataVersion The version of the data to be cleared. Version strings are returned by the server.
     */
    public function clear($stateKey, $optParams = [])
    {
        $params = ['stateKey' => $stateKey];
        $params = array_merge($params, $optParams);
        $data = $this->__call('clear', [$params]);
        if ($this->useObjects()) {
            return new Google_WriteResult($data);
        } else {
            return $data;
        }
    }

    /**
     * Deletes a key and the data associated with it. The key is removed and no longer counts against
     * the key quota. Note that since this method is not safe in the face of concurrent modifications,
     * it should only be used for development and testing purposes. Invoking this method in shipping
     * code can result in data loss and data corruption. (states.delete)
     *
     * @param int $stateKey The key for the data to be retrieved.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($stateKey, $optParams = [])
    {
        $params = ['stateKey' => $stateKey];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Retrieves the data corresponding to the passed key. (states.get)
     *
     * @param int $stateKey The key for the data to be retrieved.
     * @param array $optParams Optional parameters.
     * @return Google_GetResponse
     * @throws Google_Exception
     */
    public function get($stateKey, $optParams = [])
    {
        $params = ['stateKey' => $stateKey];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_GetResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists all the states keys, and optionally the state data. (states.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_ListResponse
     * @throws Google_Exception
     * @opt_param bool includeData Whether to include the full data in addition to the version number
     */
    public function listStates($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_ListResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Update the data associated with the input key if and only if the passed version matches the
     * currently stored version. This method is safe in the face of concurrent writes. Maximum per-key
     * size is 128KB. (states.update)
     *
     * @param int $stateKey The key for the data to be retrieved.
     * @param Google_UpdateRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_WriteResult
     * @throws Google_Exception
     * @opt_param string currentStateVersion The version of the app state your application is attempting to update. If this does not match the current version, this method will return a conflict error. If there is no data stored on the server for this key, the update will succeed irrespective of the value of this parameter.
     */
    public function update($stateKey, Google_UpdateRequest $postBody, $optParams = [])
    {
        $params = ['stateKey' => $stateKey, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_WriteResult($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Appstate (v1).
 *
 * <p>
 * The Google App State API.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/games/services/web/api/states" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_AppstateService extends Google_Service
{
    /**
     * @var Google_StatesServiceResource
     */
    public $states;

    /**
     * Constructs the internal representation of the Appstate service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'appstate/v1/';
        $this->version = 'v1';
        $this->serviceName = 'appstate';

        $client->addService($this->serviceName, $this->version);
        $this->states = new Google_StatesServiceResource($this, $this->serviceName, 'states', json_decode('{"methods": {"clear": {"id": "appstate.states.clear", "path": "states/{stateKey}/clear", "httpMethod": "POST", "parameters": {"currentDataVersion": {"type": "string", "location": "query"}, "stateKey": {"type": "integer", "required": true, "format": "int32", "minimum": "0", "maximum": "3", "location": "path"}}, "response": {"$ref": "WriteResult"}, "scopes": ["https://www.googleapis.com/auth/appstate"]}, "delete": {"id": "appstate.states.delete", "path": "states/{stateKey}", "httpMethod": "DELETE", "parameters": {"stateKey": {"type": "integer", "required": true, "format": "int32", "minimum": "0", "maximum": "3", "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/appstate"]}, "get": {"id": "appstate.states.get", "path": "states/{stateKey}", "httpMethod": "GET", "parameters": {"stateKey": {"type": "integer", "required": true, "format": "int32", "minimum": "0", "maximum": "3", "location": "path"}}, "response": {"$ref": "GetResponse"}, "scopes": ["https://www.googleapis.com/auth/appstate"]}, "list": {"id": "appstate.states.list", "path": "states", "httpMethod": "GET", "parameters": {"includeData": {"type": "boolean", "default": "false", "location": "query"}}, "response": {"$ref": "ListResponse"}, "scopes": ["https://www.googleapis.com/auth/appstate"]}, "update": {"id": "appstate.states.update", "path": "states/{stateKey}", "httpMethod": "PUT", "parameters": {"currentStateVersion": {"type": "string", "location": "query"}, "stateKey": {"type": "integer", "required": true, "format": "int32", "minimum": "0", "maximum": "3", "location": "path"}}, "request": {"$ref": "UpdateRequest"}, "response": {"$ref": "WriteResult"}, "scopes": ["https://www.googleapis.com/auth/appstate"]}}}', true));

    }
}


/**
 * Class Google_GetResponse
 */
class Google_GetResponse extends Google_Model
{
    /**
     * @var
     */
    public $currentStateVersion;
    /**
     * @var
     */
    public $data;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $stateKey;

    /**
     * @param $currentStateVersion
     */
    public function setCurrentStateVersion($currentStateVersion)
    {
        $this->currentStateVersion = $currentStateVersion;
    }

    /**
     * @return mixed
     */
    public function getCurrentStateVersion()
    {
        return $this->currentStateVersion;
    }

    /**
     * @param $data
     */
    public function setData($data)
    {
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
     * @param $stateKey
     */
    public function setStateKey($stateKey)
    {
        $this->stateKey = $stateKey;
    }

    /**
     * @return mixed
     */
    public function getStateKey()
    {
        return $this->stateKey;
    }
}

/**
 * Class Google_ListResponse
 */
class Google_ListResponse extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_GetResponse';
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
    public $maximumKeyCount;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_GetResponse) */
        $items)
    {
        $this->assertIsArray($items, 'Google_GetResponse', __METHOD__);
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
     * @param $maximumKeyCount
     */
    public function setMaximumKeyCount($maximumKeyCount)
    {
        $this->maximumKeyCount = $maximumKeyCount;
    }

    /**
     * @return mixed
     */
    public function getMaximumKeyCount()
    {
        return $this->maximumKeyCount;
    }
}

/**
 * Class Google_UpdateRequest
 */
class Google_UpdateRequest extends Google_Model
{
    /**
     * @var
     */
    public $data;
    /**
     * @var
     */
    public $kind;

    /**
     * @param $data
     */
    public function setData($data)
    {
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
 * Class Google_WriteResult
 */
class Google_WriteResult extends Google_Model
{
    /**
     * @var
     */
    public $currentStateVersion;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $stateKey;

    /**
     * @param $currentStateVersion
     */
    public function setCurrentStateVersion($currentStateVersion)
    {
        $this->currentStateVersion = $currentStateVersion;
    }

    /**
     * @return mixed
     */
    public function getCurrentStateVersion()
    {
        return $this->currentStateVersion;
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
     * @param $stateKey
     */
    public function setStateKey($stateKey)
    {
        $this->stateKey = $stateKey;
    }

    /**
     * @return mixed
     */
    public function getStateKey()
    {
        return $this->stateKey;
    }
}
