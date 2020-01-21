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
 * The "datasets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $datastoreService = new Google_DatastoreService(...);
 *   $datasets = $datastoreService->datasets;
 *  </code>
 */
class Google_DatasetsServiceResource extends Google_ServiceResource
{

    /**
     * Allocate IDs for incomplete keys (useful for referencing an entity before it is inserted).
     * (datasets.allocateIds)
     *
     * @param string $datasetId Identifies the dataset.
     * @param Google_AllocateIdsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_AllocateIdsResponse
     * @throws Google_Exception
     */
    public function allocateIds($datasetId, Google_AllocateIdsRequest $postBody, $optParams = [])
    {
        $params = ['datasetId' => $datasetId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('allocateIds', [$params]);
        if ($this->useObjects()) {
            return new Google_AllocateIdsResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Begin a new transaction. (datasets.beginTransaction)
     *
     * @param string $datasetId Identifies the dataset.
     * @param Google_BeginTransactionRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_BeginTransactionResponse
     * @throws Google_Exception
     */
    public function beginTransaction($datasetId, Google_BeginTransactionRequest $postBody, $optParams = [])
    {
        $params = ['datasetId' => $datasetId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('beginTransaction', [$params]);
        if ($this->useObjects()) {
            return new Google_BeginTransactionResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Create, delete or modify some entities outside a transaction. (datasets.blindWrite)
     *
     * @param string $datasetId Identifies the dataset.
     * @param Google_BlindWriteRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_BlindWriteResponse
     * @throws Google_Exception
     */
    public function blindWrite($datasetId, Google_BlindWriteRequest $postBody, $optParams = [])
    {
        $params = ['datasetId' => $datasetId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('blindWrite', [$params]);
        if ($this->useObjects()) {
            return new Google_BlindWriteResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Commit a transaction, optionally creating, deleting or modifying some entities. (datasets.commit)
     *
     * @param string $datasetId Identifies the dataset.
     * @param Google_CommitRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_CommitResponse
     * @throws Google_Exception
     */
    public function commit($datasetId, Google_CommitRequest $postBody, $optParams = [])
    {
        $params = ['datasetId' => $datasetId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('commit', [$params]);
        if ($this->useObjects()) {
            return new Google_CommitResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Look up some entities by key. (datasets.lookup)
     *
     * @param string $datasetId Identifies the dataset.
     * @param Google_LookupRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_LookupResponse
     * @throws Google_Exception
     */
    public function lookup($datasetId, Google_LookupRequest $postBody, $optParams = [])
    {
        $params = ['datasetId' => $datasetId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('lookup', [$params]);
        if ($this->useObjects()) {
            return new Google_LookupResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Roll back a transaction. (datasets.rollback)
     *
     * @param string $datasetId Identifies the dataset.
     * @param Google_RollbackRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_RollbackResponse
     * @throws Google_Exception
     */
    public function rollback($datasetId, Google_RollbackRequest $postBody, $optParams = [])
    {
        $params = ['datasetId' => $datasetId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('rollback', [$params]);
        if ($this->useObjects()) {
            return new Google_RollbackResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Query for entities. (datasets.runQuery)
     *
     * @param string $datasetId Identifies the dataset.
     * @param Google_RunQueryRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_RunQueryResponse
     * @throws Google_Exception
     */
    public function runQuery($datasetId, Google_RunQueryRequest $postBody, $optParams = [])
    {
        $params = ['datasetId' => $datasetId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('runQuery', [$params]);
        if ($this->useObjects()) {
            return new Google_RunQueryResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Datastore (v1beta1).
 *
 * <p>
 * API for accessing Google Cloud Datastore.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/datastore/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_DatastoreService extends Google_Service
{
    /**
     * @var Google_DatasetsServiceResource
     */
    public $datasets;

    /**
     * Constructs the internal representation of the Datastore service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'datastore/v1beta1/datasets/';
        $this->version = 'v1beta1';
        $this->serviceName = 'datastore';

        $client->addService($this->serviceName, $this->version);
        $this->datasets = new Google_DatasetsServiceResource($this, $this->serviceName, 'datasets', json_decode('{"methods": {"allocateIds": {"id": "datastore.datasets.allocateIds", "path": "{datasetId}/allocateIds", "httpMethod": "POST", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "AllocateIdsRequest"}, "response": {"$ref": "AllocateIdsResponse"}, "scopes": ["https://www.googleapis.com/auth/userinfo.email"]}, "beginTransaction": {"id": "datastore.datasets.beginTransaction", "path": "{datasetId}/beginTransaction", "httpMethod": "POST", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "BeginTransactionRequest"}, "response": {"$ref": "BeginTransactionResponse"}, "scopes": ["https://www.googleapis.com/auth/userinfo.email"]}, "blindWrite": {"id": "datastore.datasets.blindWrite", "path": "{datasetId}/blindWrite", "httpMethod": "POST", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "BlindWriteRequest"}, "response": {"$ref": "BlindWriteResponse"}, "scopes": ["https://www.googleapis.com/auth/userinfo.email"]}, "commit": {"id": "datastore.datasets.commit", "path": "{datasetId}/commit", "httpMethod": "POST", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "CommitRequest"}, "response": {"$ref": "CommitResponse"}, "scopes": ["https://www.googleapis.com/auth/userinfo.email"]}, "lookup": {"id": "datastore.datasets.lookup", "path": "{datasetId}/lookup", "httpMethod": "POST", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "LookupRequest"}, "response": {"$ref": "LookupResponse"}, "scopes": ["https://www.googleapis.com/auth/userinfo.email"]}, "rollback": {"id": "datastore.datasets.rollback", "path": "{datasetId}/rollback", "httpMethod": "POST", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "RollbackRequest"}, "response": {"$ref": "RollbackResponse"}, "scopes": ["https://www.googleapis.com/auth/userinfo.email"]}, "runQuery": {"id": "datastore.datasets.runQuery", "path": "{datasetId}/runQuery", "httpMethod": "POST", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "RunQueryRequest"}, "response": {"$ref": "RunQueryResponse"}, "scopes": ["https://www.googleapis.com/auth/userinfo.email"]}}}', true));

    }
}


/**
 * Class Google_AllocateIdsRequest
 */
class Google_AllocateIdsRequest extends Google_Model
{
    /**
     * @var string
     */
    protected $__keysType = 'Google_Key';
    /**
     * @var string
     */
    protected $__keysDataType = 'array';
    /**
     * @var
     */
    public $keys;

    /**
     * @param $keys
     * @throws Google_Exception
     */
    public function setKeys(/* array(Google_Key) */
        $keys)
    {
        $this->assertIsArray($keys, 'Google_Key', __METHOD__);
        $this->keys = $keys;
    }

    /**
     * @return mixed
     */
    public function getKeys()
    {
        return $this->keys;
    }
}

/**
 * Class Google_AllocateIdsResponse
 */
class Google_AllocateIdsResponse extends Google_Model
{
    /**
     * @var string
     */
    protected $__keysType = 'Google_Key';
    /**
     * @var string
     */
    protected $__keysDataType = 'array';
    /**
     * @var
     */
    public $keys;
    /**
     * @var
     */
    public $kind;

    /**
     * @param $keys
     * @throws Google_Exception
     */
    public function setKeys(/* array(Google_Key) */
        $keys)
    {
        $this->assertIsArray($keys, 'Google_Key', __METHOD__);
        $this->keys = $keys;
    }

    /**
     * @return mixed
     */
    public function getKeys()
    {
        return $this->keys;
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
 * Class Google_BeginTransactionRequest
 */
class Google_BeginTransactionRequest extends Google_Model
{
    /**
     * @var
     */
    public $isolationLevel;

    /**
     * @param $isolationLevel
     */
    public function setIsolationLevel($isolationLevel)
    {
        $this->isolationLevel = $isolationLevel;
    }

    /**
     * @return mixed
     */
    public function getIsolationLevel()
    {
        return $this->isolationLevel;
    }
}

/**
 * Class Google_BeginTransactionResponse
 */
class Google_BeginTransactionResponse extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $transaction;

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
     * @param $transaction
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * @return mixed
     */
    public function getTransaction()
    {
        return $this->transaction;
    }
}

/**
 * Class Google_BlindWriteRequest
 */
class Google_BlindWriteRequest extends Google_Model
{
    /**
     * @var string
     */
    protected $__mutationType = 'Google_Mutation';
    /**
     * @var string
     */
    protected $__mutationDataType = '';
    /**
     * @var
     */
    public $mutation;

    /**
     * @param Google_Mutation $mutation
     */
    public function setMutation(Google_Mutation $mutation)
    {
        $this->mutation = $mutation;
    }

    /**
     * @return mixed
     */
    public function getMutation()
    {
        return $this->mutation;
    }
}

/**
 * Class Google_BlindWriteResponse
 */
class Google_BlindWriteResponse extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__mutationResultType = 'Google_MutationResult';
    /**
     * @var string
     */
    protected $__mutationResultDataType = '';
    /**
     * @var
     */
    public $mutationResult;

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
     * @param Google_MutationResult $mutationResult
     */
    public function setMutationResult(Google_MutationResult $mutationResult)
    {
        $this->mutationResult = $mutationResult;
    }

    /**
     * @return mixed
     */
    public function getMutationResult()
    {
        return $this->mutationResult;
    }
}

/**
 * Class Google_CommitRequest
 */
class Google_CommitRequest extends Google_Model
{
    /**
     * @var string
     */
    protected $__mutationType = 'Google_Mutation';
    /**
     * @var string
     */
    protected $__mutationDataType = '';
    /**
     * @var
     */
    public $mutation;
    /**
     * @var
     */
    public $transaction;

    /**
     * @param Google_Mutation $mutation
     */
    public function setMutation(Google_Mutation $mutation)
    {
        $this->mutation = $mutation;
    }

    /**
     * @return mixed
     */
    public function getMutation()
    {
        return $this->mutation;
    }

    /**
     * @param $transaction
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * @return mixed
     */
    public function getTransaction()
    {
        return $this->transaction;
    }
}

/**
 * Class Google_CommitResponse
 */
class Google_CommitResponse extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__mutationResultType = 'Google_MutationResult';
    /**
     * @var string
     */
    protected $__mutationResultDataType = '';
    /**
     * @var
     */
    public $mutationResult;

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
     * @param Google_MutationResult $mutationResult
     */
    public function setMutationResult(Google_MutationResult $mutationResult)
    {
        $this->mutationResult = $mutationResult;
    }

    /**
     * @return mixed
     */
    public function getMutationResult()
    {
        return $this->mutationResult;
    }
}

/**
 * Class Google_CompositeFilter
 */
class Google_CompositeFilter extends Google_Model
{
    /**
     * @var string
     */
    protected $__filtersType = 'Google_Filter';
    /**
     * @var string
     */
    protected $__filtersDataType = 'array';
    /**
     * @var
     */
    public $filters;
    /**
     * @var
     */
    public $operator;

    /**
     * @param $filters
     * @throws Google_Exception
     */
    public function setFilters(/* array(Google_Filter) */
        $filters)
    {
        $this->assertIsArray($filters, 'Google_Filter', __METHOD__);
        $this->filters = $filters;
    }

    /**
     * @return mixed
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * @param $operator
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }

    /**
     * @return mixed
     */
    public function getOperator()
    {
        return $this->operator;
    }
}

/**
 * Class Google_Entity
 */
class Google_Entity extends Google_Model
{
    /**
     * @var string
     */
    protected $__keyType = 'Google_Key';
    /**
     * @var string
     */
    protected $__keyDataType = '';
    /**
     * @var
     */
    public $key;
    /**
     * @var string
     */
    protected $__propertiesType = 'Google_Property';
    /**
     * @var string
     */
    protected $__propertiesDataType = 'map';
    /**
     * @var
     */
    public $properties;

    /**
     * @param Google_Key $key
     */
    public function setKey(Google_Key $key)
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
    /* lynchb@ Made a modification here to remove the typing
     * allow for an array of properties to be set
     * on an entity. Otherwise the file is unchanged
     * from the generator.
     */
    /**
     * @param $properties
     */
    public function setProperties($properties)
    {
        $this->properties = $properties;
    }

    /**
     * @return mixed
     */
    public function getProperties()
    {
        return $this->properties;
    }
}

/**
 * Class Google_EntityResult
 */
class Google_EntityResult extends Google_Model
{
    /**
     * @var string
     */
    protected $__entityType = 'Google_Entity';
    /**
     * @var string
     */
    protected $__entityDataType = '';
    /**
     * @var
     */
    public $entity;

    /**
     * @param Google_Entity $entity
     */
    public function setEntity(Google_Entity $entity)
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
}

/**
 * Class Google_Filter
 */
class Google_Filter extends Google_Model
{
    /**
     * @var string
     */
    protected $__compositeFilterType = 'Google_CompositeFilter';
    /**
     * @var string
     */
    protected $__compositeFilterDataType = '';
    /**
     * @var
     */
    public $compositeFilter;
    /**
     * @var string
     */
    protected $__propertyFilterType = 'Google_PropertyFilter';
    /**
     * @var string
     */
    protected $__propertyFilterDataType = '';
    /**
     * @var
     */
    public $propertyFilter;

    /**
     * @param Google_CompositeFilter $compositeFilter
     */
    public function setCompositeFilter(Google_CompositeFilter $compositeFilter)
    {
        $this->compositeFilter = $compositeFilter;
    }

    /**
     * @return mixed
     */
    public function getCompositeFilter()
    {
        return $this->compositeFilter;
    }

    /**
     * @param Google_PropertyFilter $propertyFilter
     */
    public function setPropertyFilter(Google_PropertyFilter $propertyFilter)
    {
        $this->propertyFilter = $propertyFilter;
    }

    /**
     * @return mixed
     */
    public function getPropertyFilter()
    {
        return $this->propertyFilter;
    }
}

/**
 * Class Google_Key
 */
class Google_Key extends Google_Model
{
    /**
     * @var string
     */
    protected $__partitionIdType = 'Google_PartitionId';
    /**
     * @var string
     */
    protected $__partitionIdDataType = '';
    /**
     * @var
     */
    public $partitionId;
    /**
     * @var string
     */
    protected $__pathType = 'Google_KeyPathElement';
    /**
     * @var string
     */
    protected $__pathDataType = 'array';
    /**
     * @var
     */
    public $path;

    /**
     * @param Google_PartitionId $partitionId
     */
    public function setPartitionId(Google_PartitionId $partitionId)
    {
        $this->partitionId = $partitionId;
    }

    /**
     * @return mixed
     */
    public function getPartitionId()
    {
        return $this->partitionId;
    }

    /**
     * @param $path
     * @throws Google_Exception
     */
    public function setPath(/* array(Google_KeyPathElement) */
        $path)
    {
        $this->assertIsArray($path, 'Google_KeyPathElement', __METHOD__);
        $this->path = $path;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }
}

/**
 * Class Google_KeyPathElement
 */
class Google_KeyPathElement extends Google_Model
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
     * @var
     */
    public $name;

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
}

/**
 * Class Google_KindExpression
 */
class Google_KindExpression extends Google_Model
{
    /**
     * @var
     */
    public $name;

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
 * Class Google_LookupRequest
 */
class Google_LookupRequest extends Google_Model
{
    /**
     * @var string
     */
    protected $__keysType = 'Google_Key';
    /**
     * @var string
     */
    protected $__keysDataType = 'array';
    /**
     * @var
     */
    public $keys;
    /**
     * @var string
     */
    protected $__readOptionsType = 'Google_ReadOptions';
    /**
     * @var string
     */
    protected $__readOptionsDataType = '';
    /**
     * @var
     */
    public $readOptions;

    /**
     * @param $keys
     * @throws Google_Exception
     */
    public function setKeys(/* array(Google_Key) */
        $keys)
    {
        $this->assertIsArray($keys, 'Google_Key', __METHOD__);
        $this->keys = $keys;
    }

    /**
     * @return mixed
     */
    public function getKeys()
    {
        return $this->keys;
    }

    /**
     * @param Google_ReadOptions $readOptions
     */
    public function setReadOptions(Google_ReadOptions $readOptions)
    {
        $this->readOptions = $readOptions;
    }

    /**
     * @return mixed
     */
    public function getReadOptions()
    {
        return $this->readOptions;
    }
}

/**
 * Class Google_LookupResponse
 */
class Google_LookupResponse extends Google_Model
{
    /**
     * @var string
     */
    protected $__deferredType = 'Google_Key';
    /**
     * @var string
     */
    protected $__deferredDataType = 'array';
    /**
     * @var
     */
    public $deferred;
    /**
     * @var string
     */
    protected $__foundType = 'Google_EntityResult';
    /**
     * @var string
     */
    protected $__foundDataType = 'array';
    /**
     * @var
     */
    public $found;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__missingType = 'Google_EntityResult';
    /**
     * @var string
     */
    protected $__missingDataType = 'array';
    /**
     * @var
     */
    public $missing;

    /**
     * @param $deferred
     * @throws Google_Exception
     */
    public function setDeferred(/* array(Google_Key) */
        $deferred)
    {
        $this->assertIsArray($deferred, 'Google_Key', __METHOD__);
        $this->deferred = $deferred;
    }

    /**
     * @return mixed
     */
    public function getDeferred()
    {
        return $this->deferred;
    }

    /**
     * @param $found
     * @throws Google_Exception
     */
    public function setFound(/* array(Google_EntityResult) */
        $found)
    {
        $this->assertIsArray($found, 'Google_EntityResult', __METHOD__);
        $this->found = $found;
    }

    /**
     * @return mixed
     */
    public function getFound()
    {
        return $this->found;
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
     * @param $missing
     * @throws Google_Exception
     */
    public function setMissing(/* array(Google_EntityResult) */
        $missing)
    {
        $this->assertIsArray($missing, 'Google_EntityResult', __METHOD__);
        $this->missing = $missing;
    }

    /**
     * @return mixed
     */
    public function getMissing()
    {
        return $this->missing;
    }
}

/**
 * Class Google_Mutation
 */
class Google_Mutation extends Google_Model
{
    /**
     * @var string
     */
    protected $__deleteType = 'Google_Key';
    /**
     * @var string
     */
    protected $__deleteDataType = 'array';
    /**
     * @var
     */
    public $delete;
    /**
     * @var
     */
    public $force;
    /**
     * @var string
     */
    protected $__insertType = 'Google_Entity';
    /**
     * @var string
     */
    protected $__insertDataType = 'array';
    /**
     * @var
     */
    public $insert;
    /**
     * @var string
     */
    protected $__insertAutoIdType = 'Google_Entity';
    /**
     * @var string
     */
    protected $__insertAutoIdDataType = 'array';
    /**
     * @var
     */
    public $insertAutoId;
    /**
     * @var string
     */
    protected $__updateType = 'Google_Entity';
    /**
     * @var string
     */
    protected $__updateDataType = 'array';
    /**
     * @var
     */
    public $update;
    /**
     * @var string
     */
    protected $__upsertType = 'Google_Entity';
    /**
     * @var string
     */
    protected $__upsertDataType = 'array';
    /**
     * @var
     */
    public $upsert;

    /**
     * @param $delete
     * @throws Google_Exception
     */
    public function setDelete(/* array(Google_Key) */
        $delete)
    {
        $this->assertIsArray($delete, 'Google_Key', __METHOD__);
        $this->delete = $delete;
    }

    /**
     * @return mixed
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * @param $force
     */
    public function setForce($force)
    {
        $this->force = $force;
    }

    /**
     * @return mixed
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * @param $insert
     * @throws Google_Exception
     */
    public function setInsert(/* array(Google_Entity) */
        $insert)
    {
        $this->assertIsArray($insert, 'Google_Entity', __METHOD__);
        $this->insert = $insert;
    }

    /**
     * @return mixed
     */
    public function getInsert()
    {
        return $this->insert;
    }

    /**
     * @param $insertAutoId
     * @throws Google_Exception
     */
    public function setInsertAutoId(/* array(Google_Entity) */
        $insertAutoId)
    {
        $this->assertIsArray($insertAutoId, 'Google_Entity', __METHOD__);
        $this->insertAutoId = $insertAutoId;
    }

    /**
     * @return mixed
     */
    public function getInsertAutoId()
    {
        return $this->insertAutoId;
    }

    /**
     * @param $update
     * @throws Google_Exception
     */
    public function setUpdate(/* array(Google_Entity) */
        $update)
    {
        $this->assertIsArray($update, 'Google_Entity', __METHOD__);
        $this->update = $update;
    }

    /**
     * @return mixed
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * @param $upsert
     * @throws Google_Exception
     */
    public function setUpsert(/* array(Google_Entity) */
        $upsert)
    {
        $this->assertIsArray($upsert, 'Google_Entity', __METHOD__);
        $this->upsert = $upsert;
    }

    /**
     * @return mixed
     */
    public function getUpsert()
    {
        return $this->upsert;
    }
}

/**
 * Class Google_MutationResult
 */
class Google_MutationResult extends Google_Model
{
    /**
     * @var
     */
    public $indexUpdates;
    /**
     * @var string
     */
    protected $__insertAutoIdKeysType = 'Google_Key';
    /**
     * @var string
     */
    protected $__insertAutoIdKeysDataType = 'array';
    /**
     * @var
     */
    public $insertAutoIdKeys;

    /**
     * @param $indexUpdates
     */
    public function setIndexUpdates($indexUpdates)
    {
        $this->indexUpdates = $indexUpdates;
    }

    /**
     * @return mixed
     */
    public function getIndexUpdates()
    {
        return $this->indexUpdates;
    }

    /**
     * @param $insertAutoIdKeys
     * @throws Google_Exception
     */
    public function setInsertAutoIdKeys(/* array(Google_Key) */
        $insertAutoIdKeys)
    {
        $this->assertIsArray($insertAutoIdKeys, 'Google_Key', __METHOD__);
        $this->insertAutoIdKeys = $insertAutoIdKeys;
    }

    /**
     * @return mixed
     */
    public function getInsertAutoIdKeys()
    {
        return $this->insertAutoIdKeys;
    }
}

/**
 * Class Google_PartitionId
 */
class Google_PartitionId extends Google_Model
{
    /**
     * @var
     */
    public $datasetId;
    /**
     * @var
     */
    public $namespace;

    /**
     * @param $datasetId
     */
    public function setDatasetId($datasetId)
    {
        $this->datasetId = $datasetId;
    }

    /**
     * @return mixed
     */
    public function getDatasetId()
    {
        return $this->datasetId;
    }

    /**
     * @param $namespace
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
    }

    /**
     * @return mixed
     */
    public function getNamespace()
    {
        return $this->namespace;
    }
}

/**
 * Class Google_Property
 */
class Google_Property extends Google_Model
{
    /**
     * @var
     */
    public $multi;
    /**
     * @var string
     */
    protected $__valuesType = 'Google_Value';
    /**
     * @var string
     */
    protected $__valuesDataType = 'array';
    /**
     * @var
     */
    public $values;

    /**
     * @param $multi
     */
    public function setMulti($multi)
    {
        $this->multi = $multi;
    }

    /**
     * @return mixed
     */
    public function getMulti()
    {
        return $this->multi;
    }

    /**
     * @param $values
     * @throws Google_Exception
     */
    public function setValues(/* array(Google_Value) */
        $values)
    {
        $this->assertIsArray($values, 'Google_Value', __METHOD__);
        $this->values = $values;
    }

    /**
     * @return mixed
     */
    public function getValues()
    {
        return $this->values;
    }
}

/**
 * Class Google_PropertyExpression
 */
class Google_PropertyExpression extends Google_Model
{
    /**
     * @var
     */
    public $aggregationFunction;
    /**
     * @var string
     */
    protected $__propertyType = 'Google_PropertyReference';
    /**
     * @var string
     */
    protected $__propertyDataType = '';
    /**
     * @var
     */
    public $property;

    /**
     * @param $aggregationFunction
     */
    public function setAggregationFunction($aggregationFunction)
    {
        $this->aggregationFunction = $aggregationFunction;
    }

    /**
     * @return mixed
     */
    public function getAggregationFunction()
    {
        return $this->aggregationFunction;
    }

    /**
     * @param Google_PropertyReference $property
     */
    public function setProperty(Google_PropertyReference $property)
    {
        $this->property = $property;
    }

    /**
     * @return mixed
     */
    public function getProperty()
    {
        return $this->property;
    }
}

/**
 * Class Google_PropertyFilter
 */
class Google_PropertyFilter extends Google_Model
{
    /**
     * @var
     */
    public $operator;
    /**
     * @var string
     */
    protected $__propertyType = 'Google_PropertyReference';
    /**
     * @var string
     */
    protected $__propertyDataType = '';
    /**
     * @var
     */
    public $property;
    /**
     * @var string
     */
    protected $__valueType = 'Google_Value';
    /**
     * @var string
     */
    protected $__valueDataType = '';
    /**
     * @var
     */
    public $value;

    /**
     * @param $operator
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }

    /**
     * @return mixed
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @param Google_PropertyReference $property
     */
    public function setProperty(Google_PropertyReference $property)
    {
        $this->property = $property;
    }

    /**
     * @return mixed
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * @param Google_Value $value
     */
    public function setValue(Google_Value $value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}

/**
 * Class Google_PropertyOrder
 */
class Google_PropertyOrder extends Google_Model
{
    /**
     * @var
     */
    public $direction;
    /**
     * @var string
     */
    protected $__propertyType = 'Google_PropertyReference';
    /**
     * @var string
     */
    protected $__propertyDataType = '';
    /**
     * @var
     */
    public $property;

    /**
     * @param $direction
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
    }

    /**
     * @return mixed
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * @param Google_PropertyReference $property
     */
    public function setProperty(Google_PropertyReference $property)
    {
        $this->property = $property;
    }

    /**
     * @return mixed
     */
    public function getProperty()
    {
        return $this->property;
    }
}

/**
 * Class Google_PropertyReference
 */
class Google_PropertyReference extends Google_Model
{
    /**
     * @var
     */
    public $name;

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
 * Class Google_Query
 */
class Google_Query extends Google_Model
{
    /**
     * @var
     */
    public $endCursor;
    /**
     * @var string
     */
    protected $__filterType = 'Google_Filter';
    /**
     * @var string
     */
    protected $__filterDataType = '';
    /**
     * @var
     */
    public $filter;
    /**
     * @var string
     */
    protected $__groupByType = 'Google_PropertyReference';
    /**
     * @var string
     */
    protected $__groupByDataType = 'array';
    /**
     * @var
     */
    public $groupBy;
    /**
     * @var string
     */
    protected $__kindsType = 'Google_KindExpression';
    /**
     * @var string
     */
    protected $__kindsDataType = 'array';
    /**
     * @var
     */
    public $kinds;
    /**
     * @var
     */
    public $limit;
    /**
     * @var
     */
    public $offset;
    /**
     * @var string
     */
    protected $__orderType = 'Google_PropertyOrder';
    /**
     * @var string
     */
    protected $__orderDataType = 'array';
    /**
     * @var
     */
    public $order;
    /**
     * @var string
     */
    protected $__projectionType = 'Google_PropertyExpression';
    /**
     * @var string
     */
    protected $__projectionDataType = 'array';
    /**
     * @var
     */
    public $projection;
    /**
     * @var
     */
    public $startCursor;

    /**
     * @param $endCursor
     */
    public function setEndCursor($endCursor)
    {
        $this->endCursor = $endCursor;
    }

    /**
     * @return mixed
     */
    public function getEndCursor()
    {
        return $this->endCursor;
    }

    /**
     * @param Google_Filter $filter
     */
    public function setFilter(Google_Filter $filter)
    {
        $this->filter = $filter;
    }

    /**
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @param $groupBy
     * @throws Google_Exception
     */
    public function setGroupBy(/* array(Google_PropertyReference) */
        $groupBy)
    {
        $this->assertIsArray($groupBy, 'Google_PropertyReference', __METHOD__);
        $this->groupBy = $groupBy;
    }

    /**
     * @return mixed
     */
    public function getGroupBy()
    {
        return $this->groupBy;
    }

    /**
     * @param $kinds
     * @throws Google_Exception
     */
    public function setKinds(/* array(Google_KindExpression) */
        $kinds)
    {
        $this->assertIsArray($kinds, 'Google_KindExpression', __METHOD__);
        $this->kinds = $kinds;
    }

    /**
     * @return mixed
     */
    public function getKinds()
    {
        return $this->kinds;
    }

    /**
     * @param $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    /**
     * @return mixed
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param $offset
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
    }

    /**
     * @return mixed
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param $order
     * @throws Google_Exception
     */
    public function setOrder(/* array(Google_PropertyOrder) */
        $order)
    {
        $this->assertIsArray($order, 'Google_PropertyOrder', __METHOD__);
        $this->order = $order;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param $projection
     * @throws Google_Exception
     */
    public function setProjection(/* array(Google_PropertyExpression) */
        $projection)
    {
        $this->assertIsArray($projection, 'Google_PropertyExpression', __METHOD__);
        $this->projection = $projection;
    }

    /**
     * @return mixed
     */
    public function getProjection()
    {
        return $this->projection;
    }

    /**
     * @param $startCursor
     */
    public function setStartCursor($startCursor)
    {
        $this->startCursor = $startCursor;
    }

    /**
     * @return mixed
     */
    public function getStartCursor()
    {
        return $this->startCursor;
    }
}

/**
 * Class Google_QueryResultBatch
 */
class Google_QueryResultBatch extends Google_Model
{
    /**
     * @var
     */
    public $endCursor;
    /**
     * @var
     */
    public $entityResultType;
    /**
     * @var string
     */
    protected $__entityResultsType = 'Google_EntityResult';
    /**
     * @var string
     */
    protected $__entityResultsDataType = 'array';
    /**
     * @var
     */
    public $entityResults;
    /**
     * @var
     */
    public $moreResults;
    /**
     * @var
     */
    public $skippedResults;

    /**
     * @param $endCursor
     */
    public function setEndCursor($endCursor)
    {
        $this->endCursor = $endCursor;
    }

    /**
     * @return mixed
     */
    public function getEndCursor()
    {
        return $this->endCursor;
    }

    /**
     * @param $entityResultType
     */
    public function setEntityResultType($entityResultType)
    {
        $this->entityResultType = $entityResultType;
    }

    /**
     * @return mixed
     */
    public function getEntityResultType()
    {
        return $this->entityResultType;
    }

    /**
     * @param $entityResults
     * @throws Google_Exception
     */
    public function setEntityResults(/* array(Google_EntityResult) */
        $entityResults)
    {
        $this->assertIsArray($entityResults, 'Google_EntityResult', __METHOD__);
        $this->entityResults = $entityResults;
    }

    /**
     * @return mixed
     */
    public function getEntityResults()
    {
        return $this->entityResults;
    }

    /**
     * @param $moreResults
     */
    public function setMoreResults($moreResults)
    {
        $this->moreResults = $moreResults;
    }

    /**
     * @return mixed
     */
    public function getMoreResults()
    {
        return $this->moreResults;
    }

    /**
     * @param $skippedResults
     */
    public function setSkippedResults($skippedResults)
    {
        $this->skippedResults = $skippedResults;
    }

    /**
     * @return mixed
     */
    public function getSkippedResults()
    {
        return $this->skippedResults;
    }
}

/**
 * Class Google_ReadOptions
 */
class Google_ReadOptions extends Google_Model
{
    /**
     * @var
     */
    public $readConsistency;
    /**
     * @var
     */
    public $transaction;

    /**
     * @param $readConsistency
     */
    public function setReadConsistency($readConsistency)
    {
        $this->readConsistency = $readConsistency;
    }

    /**
     * @return mixed
     */
    public function getReadConsistency()
    {
        return $this->readConsistency;
    }

    /**
     * @param $transaction
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * @return mixed
     */
    public function getTransaction()
    {
        return $this->transaction;
    }
}

/**
 * Class Google_RollbackRequest
 */
class Google_RollbackRequest extends Google_Model
{
    /**
     * @var
     */
    public $transaction;

    /**
     * @param $transaction
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * @return mixed
     */
    public function getTransaction()
    {
        return $this->transaction;
    }
}

/**
 * Class Google_RollbackResponse
 */
class Google_RollbackResponse extends Google_Model
{
    /**
     * @var
     */
    public $kind;

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
 * Class Google_RunQueryRequest
 */
class Google_RunQueryRequest extends Google_Model
{
    /**
     * @var string
     */
    protected $__partitionIdType = 'Google_PartitionId';
    /**
     * @var string
     */
    protected $__partitionIdDataType = '';
    /**
     * @var
     */
    public $partitionId;
    /**
     * @var string
     */
    protected $__queryType = 'Google_Query';
    /**
     * @var string
     */
    protected $__queryDataType = '';
    /**
     * @var
     */
    public $query;
    /**
     * @var string
     */
    protected $__readOptionsType = 'Google_ReadOptions';
    /**
     * @var string
     */
    protected $__readOptionsDataType = '';
    /**
     * @var
     */
    public $readOptions;

    /**
     * @param Google_PartitionId $partitionId
     */
    public function setPartitionId(Google_PartitionId $partitionId)
    {
        $this->partitionId = $partitionId;
    }

    /**
     * @return mixed
     */
    public function getPartitionId()
    {
        return $this->partitionId;
    }

    /**
     * @param Google_Query $query
     */
    public function setQuery(Google_Query $query)
    {
        $this->query = $query;
    }

    /**
     * @return mixed
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param Google_ReadOptions $readOptions
     */
    public function setReadOptions(Google_ReadOptions $readOptions)
    {
        $this->readOptions = $readOptions;
    }

    /**
     * @return mixed
     */
    public function getReadOptions()
    {
        return $this->readOptions;
    }
}

/**
 * Class Google_RunQueryResponse
 */
class Google_RunQueryResponse extends Google_Model
{
    /**
     * @var string
     */
    protected $__batchType = 'Google_QueryResultBatch';
    /**
     * @var string
     */
    protected $__batchDataType = '';
    /**
     * @var
     */
    public $batch;
    /**
     * @var
     */
    public $kind;

    /**
     * @param Google_QueryResultBatch $batch
     */
    public function setBatch(Google_QueryResultBatch $batch)
    {
        $this->batch = $batch;
    }

    /**
     * @return mixed
     */
    public function getBatch()
    {
        return $this->batch;
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
 * Class Google_Value
 */
class Google_Value extends Google_Model
{
    /**
     * @var
     */
    public $blobKeyValue;
    /**
     * @var
     */
    public $blobValue;
    /**
     * @var
     */
    public $booleanValue;
    /**
     * @var
     */
    public $dateTimeValue;
    /**
     * @var
     */
    public $doubleValue;
    /**
     * @var string
     */
    protected $__entityValueType = 'Google_Entity';
    /**
     * @var string
     */
    protected $__entityValueDataType = '';
    /**
     * @var
     */
    public $entityValue;
    /**
     * @var
     */
    public $indexed;
    /**
     * @var
     */
    public $integerValue;
    /**
     * @var string
     */
    protected $__keyValueType = 'Google_Key';
    /**
     * @var string
     */
    protected $__keyValueDataType = '';
    /**
     * @var
     */
    public $keyValue;
    /**
     * @var
     */
    public $meaning;
    /**
     * @var
     */
    public $stringValue;

    /**
     * @param $blobKeyValue
     */
    public function setBlobKeyValue($blobKeyValue)
    {
        $this->blobKeyValue = $blobKeyValue;
    }

    /**
     * @return mixed
     */
    public function getBlobKeyValue()
    {
        return $this->blobKeyValue;
    }

    /**
     * @param $blobValue
     */
    public function setBlobValue($blobValue)
    {
        $this->blobValue = $blobValue;
    }

    /**
     * @return mixed
     */
    public function getBlobValue()
    {
        return $this->blobValue;
    }

    /**
     * @param $booleanValue
     */
    public function setBooleanValue($booleanValue)
    {
        $this->booleanValue = $booleanValue;
    }

    /**
     * @return mixed
     */
    public function getBooleanValue()
    {
        return $this->booleanValue;
    }

    /**
     * @param $dateTimeValue
     */
    public function setDateTimeValue($dateTimeValue)
    {
        $this->dateTimeValue = $dateTimeValue;
    }

    /**
     * @return mixed
     */
    public function getDateTimeValue()
    {
        return $this->dateTimeValue;
    }

    /**
     * @param $doubleValue
     */
    public function setDoubleValue($doubleValue)
    {
        $this->doubleValue = $doubleValue;
    }

    /**
     * @return mixed
     */
    public function getDoubleValue()
    {
        return $this->doubleValue;
    }

    /**
     * @param Google_Entity $entityValue
     */
    public function setEntityValue(Google_Entity $entityValue)
    {
        $this->entityValue = $entityValue;
    }

    /**
     * @return mixed
     */
    public function getEntityValue()
    {
        return $this->entityValue;
    }

    /**
     * @param $indexed
     */
    public function setIndexed($indexed)
    {
        $this->indexed = $indexed;
    }

    /**
     * @return mixed
     */
    public function getIndexed()
    {
        return $this->indexed;
    }

    /**
     * @param $integerValue
     */
    public function setIntegerValue($integerValue)
    {
        $this->integerValue = $integerValue;
    }

    /**
     * @return mixed
     */
    public function getIntegerValue()
    {
        return $this->integerValue;
    }

    /**
     * @param Google_Key $keyValue
     */
    public function setKeyValue(Google_Key $keyValue)
    {
        $this->keyValue = $keyValue;
    }

    /**
     * @return mixed
     */
    public function getKeyValue()
    {
        return $this->keyValue;
    }

    /**
     * @param $meaning
     */
    public function setMeaning($meaning)
    {
        $this->meaning = $meaning;
    }

    /**
     * @return mixed
     */
    public function getMeaning()
    {
        return $this->meaning;
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
