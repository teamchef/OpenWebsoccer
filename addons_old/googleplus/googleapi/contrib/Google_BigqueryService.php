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
 *   $bigqueryService = new Google_BigqueryService(...);
 *   $datasets = $bigqueryService->datasets;
 *  </code>
 */
class Google_DatasetsServiceResource extends Google_ServiceResource
{

    /**
     * Deletes the dataset specified by datasetId value. Before you can delete a dataset, you must
     * delete all its tables, either manually or by specifying deleteContents. Immediately after
     * deletion, you can create another dataset with the same name. (datasets.delete)
     *
     * @param string $projectId Project ID of the dataset being deleted
     * @param string $datasetId Dataset ID of dataset being deleted
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     * @opt_param bool deleteContents If True, delete all the tables in the dataset. If False and the dataset contains tables, the request will fail. Default is False
     */
    public function delete($projectId, $datasetId, $optParams = [])
    {
        $params = ['projectId' => $projectId, 'datasetId' => $datasetId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Returns the dataset specified by datasetID. (datasets.get)
     *
     * @param string $projectId Project ID of the requested dataset
     * @param string $datasetId Dataset ID of the requested dataset
     * @param array $optParams Optional parameters.
     * @return Google_Dataset
     * @throws Google_Exception
     */
    public function get($projectId, $datasetId, $optParams = [])
    {
        $params = ['projectId' => $projectId, 'datasetId' => $datasetId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Dataset($data);
        } else {
            return $data;
        }
    }

    /**
     * Creates a new empty dataset. (datasets.insert)
     *
     * @param string $projectId Project ID of the new dataset
     * @param Google_Dataset $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Dataset
     * @throws Google_Exception
     */
    public function insert($projectId, Google_Dataset $postBody, $optParams = [])
    {
        $params = ['projectId' => $projectId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Dataset($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists all the datasets in the specified project to which the caller has read access; however, a
     * project owner can list (but not necessarily get) all datasets in his project. (datasets.list)
     *
     * @param string $projectId Project ID of the datasets to be listed
     * @param array $optParams Optional parameters.
     * @return Google_DatasetList
     * @throws Google_Exception
     * @opt_param string maxResults The maximum number of results to return
     * @opt_param string pageToken Page token, returned by a previous call, to request the next page of results
     */
    public function listDatasets($projectId, $optParams = [])
    {
        $params = ['projectId' => $projectId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_DatasetList($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates information in an existing dataset, specified by datasetId. Properties not included in
     * the submitted resource will not be changed. If you include the access property without any values
     * assigned, the request will fail as you must specify at least one owner for a dataset. This method
     * supports patch semantics. (datasets.patch)
     *
     * @param string $projectId Project ID of the dataset being updated
     * @param string $datasetId Dataset ID of the dataset being updated
     * @param Google_Dataset $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Dataset
     * @throws Google_Exception
     */
    public function patch($projectId, $datasetId, Google_Dataset $postBody, $optParams = [])
    {
        $params = ['projectId' => $projectId, 'datasetId' => $datasetId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Dataset($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates information in an existing dataset, specified by datasetId. Properties not included in
     * the submitted resource will not be changed. If you include the access property without any values
     * assigned, the request will fail as you must specify at least one owner for a dataset.
     * (datasets.update)
     *
     * @param string $projectId Project ID of the dataset being updated
     * @param string $datasetId Dataset ID of the dataset being updated
     * @param Google_Dataset $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Dataset
     * @throws Google_Exception
     */
    public function update($projectId, $datasetId, Google_Dataset $postBody, $optParams = [])
    {
        $params = ['projectId' => $projectId, 'datasetId' => $datasetId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Dataset($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "jobs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigqueryService = new Google_BigqueryService(...);
 *   $jobs = $bigqueryService->jobs;
 *  </code>
 */
class Google_JobsServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves the specified job by ID. (jobs.get)
     *
     * @param string $projectId Project ID of the requested job
     * @param string $jobId Job ID of the requested job
     * @param array $optParams Optional parameters.
     * @return Google_Job
     * @throws Google_Exception
     */
    public function get($projectId, $jobId, $optParams = [])
    {
        $params = ['projectId' => $projectId, 'jobId' => $jobId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Job($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the results of a query job. (jobs.getQueryResults)
     *
     * @param string $projectId Project ID of the query job
     * @param string $jobId Job ID of the query job
     * @param array $optParams Optional parameters.
     * @return Google_GetQueryResultsResponse
     * @throws Google_Exception
     * @opt_param string maxResults Maximum number of results to read
     * @opt_param string pageToken Page token, returned by a previous call, to request the next page of results
     * @opt_param string startIndex Zero-based index of the starting row
     * @opt_param string timeoutMs How long to wait for the query to complete, in milliseconds, before returning. Default is to return immediately. If the timeout passes before the job completes, the request will fail with a TIMEOUT error
     */
    public function getQueryResults($projectId, $jobId, $optParams = [])
    {
        $params = ['projectId' => $projectId, 'jobId' => $jobId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('getQueryResults', [$params]);
        if ($this->useObjects()) {
            return new Google_GetQueryResultsResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Starts a new asynchronous job. (jobs.insert)
     *
     * @param string $projectId Project ID of the project that will be billed for the job
     * @param Google_Job $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Job
     * @throws Google_Exception
     */
    public function insert($projectId, Google_Job $postBody, $optParams = [])
    {
        $params = ['projectId' => $projectId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Job($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists all the Jobs in the specified project that were started by the user. (jobs.list)
     *
     * @param string $projectId Project ID of the jobs to list
     * @param array $optParams Optional parameters.
     * @return Google_JobList
     * @throws Google_Exception
     * @opt_param bool allUsers Whether to display jobs owned by all users in the project. Default false
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string pageToken Page token, returned by a previous call, to request the next page of results
     * @opt_param string projection Restrict information returned to a set of selected fields
     * @opt_param string stateFilter Filter for job state
     */
    public function listJobs($projectId, $optParams = [])
    {
        $params = ['projectId' => $projectId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_JobList($data);
        } else {
            return $data;
        }
    }

    /**
     * Runs a BigQuery SQL query synchronously and returns query results if the query completes within a
     * specified timeout. (jobs.query)
     *
     * @param string $projectId Project ID of the project billed for the query
     * @param Google_QueryRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_QueryResponse
     * @throws Google_Exception
     */
    public function query($projectId, Google_QueryRequest $postBody, $optParams = [])
    {
        $params = ['projectId' => $projectId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('query', [$params]);
        if ($this->useObjects()) {
            return new Google_QueryResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "projects" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigqueryService = new Google_BigqueryService(...);
 *   $projects = $bigqueryService->projects;
 *  </code>
 */
class Google_ProjectsServiceResource extends Google_ServiceResource
{

    /**
     * Lists the projects to which you have at least read access. (projects.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_ProjectList
     * @throws Google_Exception
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string pageToken Page token, returned by a previous call, to request the next page of results
     */
    public function listProjects($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_ProjectList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "tabledata" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigqueryService = new Google_BigqueryService(...);
 *   $tabledata = $bigqueryService->tabledata;
 *  </code>
 */
class Google_TabledataServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves table data from a specified set of rows. (tabledata.list)
     *
     * @param string $projectId Project ID of the table to read
     * @param string $datasetId Dataset ID of the table to read
     * @param string $tableId Table ID of the table to read
     * @param array $optParams Optional parameters.
     * @return Google_TableDataList
     * @throws Google_Exception
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string pageToken Page token, returned by a previous call, identifying the result set
     * @opt_param string startIndex Zero-based index of the starting row to read
     */
    public function listTabledata($projectId, $datasetId, $tableId, $optParams = [])
    {
        $params = ['projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_TableDataList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "tables" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigqueryService = new Google_BigqueryService(...);
 *   $tables = $bigqueryService->tables;
 *  </code>
 */
class Google_TablesServiceResource extends Google_ServiceResource
{

    /**
     * Deletes the table specified by tableId from the dataset. If the table contains data, all the data
     * will be deleted. (tables.delete)
     *
     * @param string $projectId Project ID of the table to delete
     * @param string $datasetId Dataset ID of the table to delete
     * @param string $tableId Table ID of the table to delete
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($projectId, $datasetId, $tableId, $optParams = [])
    {
        $params = ['projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Gets the specified table resource by table ID. This method does not return the data in the table,
     * it only returns the table resource, which describes the structure of this table. (tables.get)
     *
     * @param string $projectId Project ID of the requested table
     * @param string $datasetId Dataset ID of the requested table
     * @param string $tableId Table ID of the requested table
     * @param array $optParams Optional parameters.
     * @return Google_Table
     * @throws Google_Exception
     */
    public function get($projectId, $datasetId, $tableId, $optParams = [])
    {
        $params = ['projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Table($data);
        } else {
            return $data;
        }
    }

    /**
     * Creates a new, empty table in the dataset. (tables.insert)
     *
     * @param string $projectId Project ID of the new table
     * @param string $datasetId Dataset ID of the new table
     * @param Google_Table $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Table
     * @throws Google_Exception
     */
    public function insert($projectId, $datasetId, Google_Table $postBody, $optParams = [])
    {
        $params = ['projectId' => $projectId, 'datasetId' => $datasetId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Table($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists all tables in the specified dataset. (tables.list)
     *
     * @param string $projectId Project ID of the tables to list
     * @param string $datasetId Dataset ID of the tables to list
     * @param array $optParams Optional parameters.
     * @return Google_TableList
     * @throws Google_Exception
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string pageToken Page token, returned by a previous call, to request the next page of results
     */
    public function listTables($projectId, $datasetId, $optParams = [])
    {
        $params = ['projectId' => $projectId, 'datasetId' => $datasetId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_TableList($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates information in an existing table, specified by tableId. This method supports patch
     * semantics. (tables.patch)
     *
     * @param string $projectId Project ID of the table to update
     * @param string $datasetId Dataset ID of the table to update
     * @param string $tableId Table ID of the table to update
     * @param Google_Table $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Table
     * @throws Google_Exception
     */
    public function patch($projectId, $datasetId, $tableId, Google_Table $postBody, $optParams = [])
    {
        $params = ['projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Table($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates information in an existing table, specified by tableId. (tables.update)
     *
     * @param string $projectId Project ID of the table to update
     * @param string $datasetId Dataset ID of the table to update
     * @param string $tableId Table ID of the table to update
     * @param Google_Table $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Table
     * @throws Google_Exception
     */
    public function update($projectId, $datasetId, $tableId, Google_Table $postBody, $optParams = [])
    {
        $params = ['projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Table($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Bigquery (v2).
 *
 * <p>
 * A data platform for customers to create, manage, share and query data.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/bigquery/docs/overview" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_BigqueryService extends Google_Service
{
    /**
     * @var Google_DatasetsServiceResource
     */
    public $datasets;
    /**
     * @var Google_JobsServiceResource
     */
    public $jobs;
    /**
     * @var Google_ProjectsServiceResource
     */
    public $projects;
    /**
     * @var Google_TabledataServiceResource
     */
    public $tabledata;
    /**
     * @var Google_TablesServiceResource
     */
    public $tables;

    /**
     * Constructs the internal representation of the Bigquery service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'bigquery/v2/';
        $this->version = 'v2';
        $this->serviceName = 'bigquery';

        $client->addService($this->serviceName, $this->version);
        $this->datasets = new Google_DatasetsServiceResource($this, $this->serviceName, 'datasets', json_decode('{"methods": {"delete": {"id": "bigquery.datasets.delete", "path": "projects/{projectId}/datasets/{datasetId}", "httpMethod": "DELETE", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}, "deleteContents": {"type": "boolean", "location": "query"}, "projectId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "get": {"id": "bigquery.datasets.get", "path": "projects/{projectId}/datasets/{datasetId}", "httpMethod": "GET", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}, "projectId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Dataset"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "insert": {"id": "bigquery.datasets.insert", "path": "projects/{projectId}/datasets", "httpMethod": "POST", "parameters": {"projectId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Dataset"}, "response": {"$ref": "Dataset"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "list": {"id": "bigquery.datasets.list", "path": "projects/{projectId}/datasets", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "uint32", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "projectId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "DatasetList"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "patch": {"id": "bigquery.datasets.patch", "path": "projects/{projectId}/datasets/{datasetId}", "httpMethod": "PATCH", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}, "projectId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Dataset"}, "response": {"$ref": "Dataset"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "update": {"id": "bigquery.datasets.update", "path": "projects/{projectId}/datasets/{datasetId}", "httpMethod": "PUT", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}, "projectId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Dataset"}, "response": {"$ref": "Dataset"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}}}', true));
        $this->jobs = new Google_JobsServiceResource($this, $this->serviceName, 'jobs', json_decode('{"methods": {"get": {"id": "bigquery.jobs.get", "path": "projects/{projectId}/jobs/{jobId}", "httpMethod": "GET", "parameters": {"jobId": {"type": "string", "required": true, "location": "path"}, "projectId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Job"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "getQueryResults": {"id": "bigquery.jobs.getQueryResults", "path": "projects/{projectId}/queries/{jobId}", "httpMethod": "GET", "parameters": {"jobId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "uint32", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "projectId": {"type": "string", "required": true, "location": "path"}, "startIndex": {"type": "string", "format": "uint64", "location": "query"}, "timeoutMs": {"type": "integer", "format": "uint32", "location": "query"}}, "response": {"$ref": "GetQueryResultsResponse"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "insert": {"id": "bigquery.jobs.insert", "path": "projects/{projectId}/jobs", "httpMethod": "POST", "parameters": {"projectId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Job"}, "response": {"$ref": "Job"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform", "https://www.googleapis.com/auth/devstorage.full_control", "https://www.googleapis.com/auth/devstorage.read_only", "https://www.googleapis.com/auth/devstorage.read_write"], "supportsMediaUpload": true, "mediaUpload": {"accept": ["application/octet-stream"], "protocols": {"simple": {"multipart": true, "path": "/upload/bigquery/v2/projects/{projectId}/jobs"}, "resumable": {"multipart": true, "path": "/resumable/upload/bigquery/v2/projects/{projectId}/jobs"}}}}, "list": {"id": "bigquery.jobs.list", "path": "projects/{projectId}/jobs", "httpMethod": "GET", "parameters": {"allUsers": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "projectId": {"type": "string", "required": true, "location": "path"}, "projection": {"type": "string", "enum": ["full", "minimal"], "location": "query"}, "stateFilter": {"type": "string", "enum": ["done", "pending", "running"], "repeated": true, "location": "query"}}, "response": {"$ref": "JobList"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "query": {"id": "bigquery.jobs.query", "path": "projects/{projectId}/queries", "httpMethod": "POST", "parameters": {"projectId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "QueryRequest"}, "response": {"$ref": "QueryResponse"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}}}', true));
        $this->projects = new Google_ProjectsServiceResource($this, $this->serviceName, 'projects', json_decode('{"methods": {"list": {"id": "bigquery.projects.list", "path": "projects", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "uint32", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "ProjectList"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}}}', true));
        $this->tabledata = new Google_TabledataServiceResource($this, $this->serviceName, 'tabledata', json_decode('{"methods": {"list": {"id": "bigquery.tabledata.list", "path": "projects/{projectId}/datasets/{datasetId}/tables/{tableId}/data", "httpMethod": "GET", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "uint32", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "projectId": {"type": "string", "required": true, "location": "path"}, "startIndex": {"type": "string", "format": "uint64", "location": "query"}, "tableId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "TableDataList"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}}}', true));
        $this->tables = new Google_TablesServiceResource($this, $this->serviceName, 'tables', json_decode('{"methods": {"delete": {"id": "bigquery.tables.delete", "path": "projects/{projectId}/datasets/{datasetId}/tables/{tableId}", "httpMethod": "DELETE", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}, "projectId": {"type": "string", "required": true, "location": "path"}, "tableId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "get": {"id": "bigquery.tables.get", "path": "projects/{projectId}/datasets/{datasetId}/tables/{tableId}", "httpMethod": "GET", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}, "projectId": {"type": "string", "required": true, "location": "path"}, "tableId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Table"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "insert": {"id": "bigquery.tables.insert", "path": "projects/{projectId}/datasets/{datasetId}/tables", "httpMethod": "POST", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}, "projectId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Table"}, "response": {"$ref": "Table"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "list": {"id": "bigquery.tables.list", "path": "projects/{projectId}/datasets/{datasetId}/tables", "httpMethod": "GET", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "uint32", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "projectId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "TableList"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "patch": {"id": "bigquery.tables.patch", "path": "projects/{projectId}/datasets/{datasetId}/tables/{tableId}", "httpMethod": "PATCH", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}, "projectId": {"type": "string", "required": true, "location": "path"}, "tableId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Table"}, "response": {"$ref": "Table"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "update": {"id": "bigquery.tables.update", "path": "projects/{projectId}/datasets/{datasetId}/tables/{tableId}", "httpMethod": "PUT", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}, "projectId": {"type": "string", "required": true, "location": "path"}, "tableId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Table"}, "response": {"$ref": "Table"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}}}', true));

    }
}


/**
 * Class Google_Dataset
 */
class Google_Dataset extends Google_Model
{
    /**
     * @var string
     */
    protected $__accessType = 'Google_DatasetAccess';
    /**
     * @var string
     */
    protected $__accessDataType = 'array';
    /**
     * @var
     */
    public $access;
    /**
     * @var
     */
    public $creationTime;
    /**
     * @var string
     */
    protected $__datasetReferenceType = 'Google_DatasetReference';
    /**
     * @var string
     */
    protected $__datasetReferenceDataType = '';
    /**
     * @var
     */
    public $datasetReference;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $friendlyName;
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
    public $lastModifiedTime;
    /**
     * @var
     */
    public $selfLink;

    /**
     * @param $access
     * @throws Google_Exception
     */
    public function setAccess(/* array(Google_DatasetAccess) */
        $access)
    {
        $this->assertIsArray($access, 'Google_DatasetAccess', __METHOD__);
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
     * @param $creationTime
     */
    public function setCreationTime($creationTime)
    {
        $this->creationTime = $creationTime;
    }

    /**
     * @return mixed
     */
    public function getCreationTime()
    {
        return $this->creationTime;
    }

    /**
     * @param Google_DatasetReference $datasetReference
     */
    public function setDatasetReference(Google_DatasetReference $datasetReference)
    {
        $this->datasetReference = $datasetReference;
    }

    /**
     * @return mixed
     */
    public function getDatasetReference()
    {
        return $this->datasetReference;
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
     * @param $friendlyName
     */
    public function setFriendlyName($friendlyName)
    {
        $this->friendlyName = $friendlyName;
    }

    /**
     * @return mixed
     */
    public function getFriendlyName()
    {
        return $this->friendlyName;
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
     * @param $lastModifiedTime
     */
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->lastModifiedTime = $lastModifiedTime;
    }

    /**
     * @return mixed
     */
    public function getLastModifiedTime()
    {
        return $this->lastModifiedTime;
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
 * Class Google_DatasetAccess
 */
class Google_DatasetAccess extends Google_Model
{
    /**
     * @var
     */
    public $domain;
    /**
     * @var
     */
    public $groupByEmail;
    /**
     * @var
     */
    public $role;
    /**
     * @var
     */
    public $specialGroup;
    /**
     * @var
     */
    public $userByEmail;

    /**
     * @param $domain
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    /**
     * @return mixed
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param $groupByEmail
     */
    public function setGroupByEmail($groupByEmail)
    {
        $this->groupByEmail = $groupByEmail;
    }

    /**
     * @return mixed
     */
    public function getGroupByEmail()
    {
        return $this->groupByEmail;
    }

    /**
     * @param $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param $specialGroup
     */
    public function setSpecialGroup($specialGroup)
    {
        $this->specialGroup = $specialGroup;
    }

    /**
     * @return mixed
     */
    public function getSpecialGroup()
    {
        return $this->specialGroup;
    }

    /**
     * @param $userByEmail
     */
    public function setUserByEmail($userByEmail)
    {
        $this->userByEmail = $userByEmail;
    }

    /**
     * @return mixed
     */
    public function getUserByEmail()
    {
        return $this->userByEmail;
    }
}

/**
 * Class Google_DatasetList
 */
class Google_DatasetList extends Google_Model
{
    /**
     * @var string
     */
    protected $__datasetsType = 'Google_DatasetListDatasets';
    /**
     * @var string
     */
    protected $__datasetsDataType = 'array';
    /**
     * @var
     */
    public $datasets;
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $nextPageToken;

    /**
     * @param $datasets
     * @throws Google_Exception
     */
    public function setDatasets(/* array(Google_DatasetListDatasets) */
        $datasets)
    {
        $this->assertIsArray($datasets, 'Google_DatasetListDatasets', __METHOD__);
        $this->datasets = $datasets;
    }

    /**
     * @return mixed
     */
    public function getDatasets()
    {
        return $this->datasets;
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
 * Class Google_DatasetListDatasets
 */
class Google_DatasetListDatasets extends Google_Model
{
    /**
     * @var string
     */
    protected $__datasetReferenceType = 'Google_DatasetReference';
    /**
     * @var string
     */
    protected $__datasetReferenceDataType = '';
    /**
     * @var
     */
    public $datasetReference;
    /**
     * @var
     */
    public $friendlyName;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $kind;

    /**
     * @param Google_DatasetReference $datasetReference
     */
    public function setDatasetReference(Google_DatasetReference $datasetReference)
    {
        $this->datasetReference = $datasetReference;
    }

    /**
     * @return mixed
     */
    public function getDatasetReference()
    {
        return $this->datasetReference;
    }

    /**
     * @param $friendlyName
     */
    public function setFriendlyName($friendlyName)
    {
        $this->friendlyName = $friendlyName;
    }

    /**
     * @return mixed
     */
    public function getFriendlyName()
    {
        return $this->friendlyName;
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
}

/**
 * Class Google_DatasetReference
 */
class Google_DatasetReference extends Google_Model
{
    /**
     * @var
     */
    public $datasetId;
    /**
     * @var
     */
    public $projectId;

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
     * @param $projectId
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }

    /**
     * @return mixed
     */
    public function getProjectId()
    {
        return $this->projectId;
    }
}

/**
 * Class Google_ErrorProto
 */
class Google_ErrorProto extends Google_Model
{
    /**
     * @var
     */
    public $debugInfo;
    /**
     * @var
     */
    public $location;
    /**
     * @var
     */
    public $message;
    /**
     * @var
     */
    public $reason;

    /**
     * @param $debugInfo
     */
    public function setDebugInfo($debugInfo)
    {
        $this->debugInfo = $debugInfo;
    }

    /**
     * @return mixed
     */
    public function getDebugInfo()
    {
        return $this->debugInfo;
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
 * Class Google_GetQueryResultsResponse
 */
class Google_GetQueryResultsResponse extends Google_Model
{
    /**
     * @var
     */
    public $cacheHit;
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $jobComplete;
    /**
     * @var string
     */
    protected $__jobReferenceType = 'Google_JobReference';
    /**
     * @var string
     */
    protected $__jobReferenceDataType = '';
    /**
     * @var
     */
    public $jobReference;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $pageToken;
    /**
     * @var string
     */
    protected $__rowsType = 'Google_TableRow';
    /**
     * @var string
     */
    protected $__rowsDataType = 'array';
    /**
     * @var
     */
    public $rows;
    /**
     * @var string
     */
    protected $__schemaType = 'Google_TableSchema';
    /**
     * @var string
     */
    protected $__schemaDataType = '';
    /**
     * @var
     */
    public $schema;
    /**
     * @var
     */
    public $totalRows;

    /**
     * @param $cacheHit
     */
    public function setCacheHit($cacheHit)
    {
        $this->cacheHit = $cacheHit;
    }

    /**
     * @return mixed
     */
    public function getCacheHit()
    {
        return $this->cacheHit;
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
     * @param $jobComplete
     */
    public function setJobComplete($jobComplete)
    {
        $this->jobComplete = $jobComplete;
    }

    /**
     * @return mixed
     */
    public function getJobComplete()
    {
        return $this->jobComplete;
    }

    /**
     * @param Google_JobReference $jobReference
     */
    public function setJobReference(Google_JobReference $jobReference)
    {
        $this->jobReference = $jobReference;
    }

    /**
     * @return mixed
     */
    public function getJobReference()
    {
        return $this->jobReference;
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
     * @param $pageToken
     */
    public function setPageToken($pageToken)
    {
        $this->pageToken = $pageToken;
    }

    /**
     * @return mixed
     */
    public function getPageToken()
    {
        return $this->pageToken;
    }

    /**
     * @param $rows
     * @throws Google_Exception
     */
    public function setRows(/* array(Google_TableRow) */
        $rows)
    {
        $this->assertIsArray($rows, 'Google_TableRow', __METHOD__);
        $this->rows = $rows;
    }

    /**
     * @return mixed
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * @param Google_TableSchema $schema
     */
    public function setSchema(Google_TableSchema $schema)
    {
        $this->schema = $schema;
    }

    /**
     * @return mixed
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * @param $totalRows
     */
    public function setTotalRows($totalRows)
    {
        $this->totalRows = $totalRows;
    }

    /**
     * @return mixed
     */
    public function getTotalRows()
    {
        return $this->totalRows;
    }
}

/**
 * Class Google_Job
 */
class Google_Job extends Google_Model
{
    /**
     * @var string
     */
    protected $__configurationType = 'Google_JobConfiguration';
    /**
     * @var string
     */
    protected $__configurationDataType = '';
    /**
     * @var
     */
    public $configuration;
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
    protected $__jobReferenceType = 'Google_JobReference';
    /**
     * @var string
     */
    protected $__jobReferenceDataType = '';
    /**
     * @var
     */
    public $jobReference;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var string
     */
    protected $__statisticsType = 'Google_JobStatistics';
    /**
     * @var string
     */
    protected $__statisticsDataType = '';
    /**
     * @var
     */
    public $statistics;
    /**
     * @var string
     */
    protected $__statusType = 'Google_JobStatus';
    /**
     * @var string
     */
    protected $__statusDataType = '';
    /**
     * @var
     */
    public $status;

    /**
     * @param Google_JobConfiguration $configuration
     */
    public function setConfiguration(Google_JobConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @return mixed
     */
    public function getConfiguration()
    {
        return $this->configuration;
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
     * @param Google_JobReference $jobReference
     */
    public function setJobReference(Google_JobReference $jobReference)
    {
        $this->jobReference = $jobReference;
    }

    /**
     * @return mixed
     */
    public function getJobReference()
    {
        return $this->jobReference;
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
     * @param Google_JobStatistics $statistics
     */
    public function setStatistics(Google_JobStatistics $statistics)
    {
        $this->statistics = $statistics;
    }

    /**
     * @return mixed
     */
    public function getStatistics()
    {
        return $this->statistics;
    }

    /**
     * @param Google_JobStatus $status
     */
    public function setStatus(Google_JobStatus $status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }
}

/**
 * Class Google_JobConfiguration
 */
class Google_JobConfiguration extends Google_Model
{
    /**
     * @var string
     */
    protected $__copyType = 'Google_JobConfigurationTableCopy';
    /**
     * @var string
     */
    protected $__copyDataType = '';
    /**
     * @var
     */
    public $copy;
    /**
     * @var
     */
    public $dryRun;
    /**
     * @var string
     */
    protected $__extractType = 'Google_JobConfigurationExtract';
    /**
     * @var string
     */
    protected $__extractDataType = '';
    /**
     * @var
     */
    public $extract;
    /**
     * @var string
     */
    protected $__linkType = 'Google_JobConfigurationLink';
    /**
     * @var string
     */
    protected $__linkDataType = '';
    /**
     * @var
     */
    public $link;
    /**
     * @var string
     */
    protected $__loadType = 'Google_JobConfigurationLoad';
    /**
     * @var string
     */
    protected $__loadDataType = '';
    /**
     * @var
     */
    public $load;
    /**
     * @var string
     */
    protected $__queryType = 'Google_JobConfigurationQuery';
    /**
     * @var string
     */
    protected $__queryDataType = '';
    /**
     * @var
     */
    public $query;

    /**
     * @param Google_JobConfigurationTableCopy $copy
     */
    public function setCopy(Google_JobConfigurationTableCopy $copy)
    {
        $this->copy = $copy;
    }

    /**
     * @return mixed
     */
    public function getCopy()
    {
        return $this->copy;
    }

    /**
     * @param $dryRun
     */
    public function setDryRun($dryRun)
    {
        $this->dryRun = $dryRun;
    }

    /**
     * @return mixed
     */
    public function getDryRun()
    {
        return $this->dryRun;
    }

    /**
     * @param Google_JobConfigurationExtract $extract
     */
    public function setExtract(Google_JobConfigurationExtract $extract)
    {
        $this->extract = $extract;
    }

    /**
     * @return mixed
     */
    public function getExtract()
    {
        return $this->extract;
    }

    /**
     * @param Google_JobConfigurationLink $link
     */
    public function setLink(Google_JobConfigurationLink $link)
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
     * @param Google_JobConfigurationLoad $load
     */
    public function setLoad(Google_JobConfigurationLoad $load)
    {
        $this->load = $load;
    }

    /**
     * @return mixed
     */
    public function getLoad()
    {
        return $this->load;
    }

    /**
     * @param Google_JobConfigurationQuery $query
     */
    public function setQuery(Google_JobConfigurationQuery $query)
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
}

/**
 * Class Google_JobConfigurationExtract
 */
class Google_JobConfigurationExtract extends Google_Model
{
    /**
     * @var
     */
    public $destinationFormat;
    /**
     * @var
     */
    public $destinationUri;
    /**
     * @var
     */
    public $fieldDelimiter;
    /**
     * @var
     */
    public $printHeader;
    /**
     * @var string
     */
    protected $__sourceTableType = 'Google_TableReference';
    /**
     * @var string
     */
    protected $__sourceTableDataType = '';
    /**
     * @var
     */
    public $sourceTable;

    /**
     * @param $destinationFormat
     */
    public function setDestinationFormat($destinationFormat)
    {
        $this->destinationFormat = $destinationFormat;
    }

    /**
     * @return mixed
     */
    public function getDestinationFormat()
    {
        return $this->destinationFormat;
    }

    /**
     * @param $destinationUri
     */
    public function setDestinationUri($destinationUri)
    {
        $this->destinationUri = $destinationUri;
    }

    /**
     * @return mixed
     */
    public function getDestinationUri()
    {
        return $this->destinationUri;
    }

    /**
     * @param $fieldDelimiter
     */
    public function setFieldDelimiter($fieldDelimiter)
    {
        $this->fieldDelimiter = $fieldDelimiter;
    }

    /**
     * @return mixed
     */
    public function getFieldDelimiter()
    {
        return $this->fieldDelimiter;
    }

    /**
     * @param $printHeader
     */
    public function setPrintHeader($printHeader)
    {
        $this->printHeader = $printHeader;
    }

    /**
     * @return mixed
     */
    public function getPrintHeader()
    {
        return $this->printHeader;
    }

    /**
     * @param Google_TableReference $sourceTable
     */
    public function setSourceTable(Google_TableReference $sourceTable)
    {
        $this->sourceTable = $sourceTable;
    }

    /**
     * @return mixed
     */
    public function getSourceTable()
    {
        return $this->sourceTable;
    }
}

/**
 * Class Google_JobConfigurationLink
 */
class Google_JobConfigurationLink extends Google_Model
{
    /**
     * @var
     */
    public $createDisposition;
    /**
     * @var string
     */
    protected $__destinationTableType = 'Google_TableReference';
    /**
     * @var string
     */
    protected $__destinationTableDataType = '';
    /**
     * @var
     */
    public $destinationTable;
    /**
     * @var
     */
    public $sourceUri;
    /**
     * @var
     */
    public $writeDisposition;

    /**
     * @param $createDisposition
     */
    public function setCreateDisposition($createDisposition)
    {
        $this->createDisposition = $createDisposition;
    }

    /**
     * @return mixed
     */
    public function getCreateDisposition()
    {
        return $this->createDisposition;
    }

    /**
     * @param Google_TableReference $destinationTable
     */
    public function setDestinationTable(Google_TableReference $destinationTable)
    {
        $this->destinationTable = $destinationTable;
    }

    /**
     * @return mixed
     */
    public function getDestinationTable()
    {
        return $this->destinationTable;
    }

    /**
     * @param $sourceUri
     * @throws Google_Exception
     */
    public function setSourceUri(/* array(Google_string) */
        $sourceUri)
    {
        $this->assertIsArray($sourceUri, 'Google_string', __METHOD__);
        $this->sourceUri = $sourceUri;
    }

    /**
     * @return mixed
     */
    public function getSourceUri()
    {
        return $this->sourceUri;
    }

    /**
     * @param $writeDisposition
     */
    public function setWriteDisposition($writeDisposition)
    {
        $this->writeDisposition = $writeDisposition;
    }

    /**
     * @return mixed
     */
    public function getWriteDisposition()
    {
        return $this->writeDisposition;
    }
}

/**
 * Class Google_JobConfigurationLoad
 */
class Google_JobConfigurationLoad extends Google_Model
{
    /**
     * @var
     */
    public $allowJaggedRows;
    /**
     * @var
     */
    public $allowQuotedNewlines;
    /**
     * @var
     */
    public $createDisposition;
    /**
     * @var string
     */
    protected $__destinationTableType = 'Google_TableReference';
    /**
     * @var string
     */
    protected $__destinationTableDataType = '';
    /**
     * @var
     */
    public $destinationTable;
    /**
     * @var
     */
    public $encoding;
    /**
     * @var
     */
    public $fieldDelimiter;
    /**
     * @var
     */
    public $maxBadRecords;
    /**
     * @var
     */
    public $quote;
    /**
     * @var string
     */
    protected $__schemaType = 'Google_TableSchema';
    /**
     * @var string
     */
    protected $__schemaDataType = '';
    /**
     * @var
     */
    public $schema;
    /**
     * @var
     */
    public $schemaInline;
    /**
     * @var
     */
    public $schemaInlineFormat;
    /**
     * @var
     */
    public $skipLeadingRows;
    /**
     * @var
     */
    public $sourceFormat;
    /**
     * @var
     */
    public $sourceUris;
    /**
     * @var
     */
    public $writeDisposition;

    /**
     * @param $allowJaggedRows
     */
    public function setAllowJaggedRows($allowJaggedRows)
    {
        $this->allowJaggedRows = $allowJaggedRows;
    }

    /**
     * @return mixed
     */
    public function getAllowJaggedRows()
    {
        return $this->allowJaggedRows;
    }

    /**
     * @param $allowQuotedNewlines
     */
    public function setAllowQuotedNewlines($allowQuotedNewlines)
    {
        $this->allowQuotedNewlines = $allowQuotedNewlines;
    }

    /**
     * @return mixed
     */
    public function getAllowQuotedNewlines()
    {
        return $this->allowQuotedNewlines;
    }

    /**
     * @param $createDisposition
     */
    public function setCreateDisposition($createDisposition)
    {
        $this->createDisposition = $createDisposition;
    }

    /**
     * @return mixed
     */
    public function getCreateDisposition()
    {
        return $this->createDisposition;
    }

    /**
     * @param Google_TableReference $destinationTable
     */
    public function setDestinationTable(Google_TableReference $destinationTable)
    {
        $this->destinationTable = $destinationTable;
    }

    /**
     * @return mixed
     */
    public function getDestinationTable()
    {
        return $this->destinationTable;
    }

    /**
     * @param $encoding
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
    }

    /**
     * @return mixed
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * @param $fieldDelimiter
     */
    public function setFieldDelimiter($fieldDelimiter)
    {
        $this->fieldDelimiter = $fieldDelimiter;
    }

    /**
     * @return mixed
     */
    public function getFieldDelimiter()
    {
        return $this->fieldDelimiter;
    }

    /**
     * @param $maxBadRecords
     */
    public function setMaxBadRecords($maxBadRecords)
    {
        $this->maxBadRecords = $maxBadRecords;
    }

    /**
     * @return mixed
     */
    public function getMaxBadRecords()
    {
        return $this->maxBadRecords;
    }

    /**
     * @param $quote
     */
    public function setQuote($quote)
    {
        $this->quote = $quote;
    }

    /**
     * @return mixed
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * @param Google_TableSchema $schema
     */
    public function setSchema(Google_TableSchema $schema)
    {
        $this->schema = $schema;
    }

    /**
     * @return mixed
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * @param $schemaInline
     */
    public function setSchemaInline($schemaInline)
    {
        $this->schemaInline = $schemaInline;
    }

    /**
     * @return mixed
     */
    public function getSchemaInline()
    {
        return $this->schemaInline;
    }

    /**
     * @param $schemaInlineFormat
     */
    public function setSchemaInlineFormat($schemaInlineFormat)
    {
        $this->schemaInlineFormat = $schemaInlineFormat;
    }

    /**
     * @return mixed
     */
    public function getSchemaInlineFormat()
    {
        return $this->schemaInlineFormat;
    }

    /**
     * @param $skipLeadingRows
     */
    public function setSkipLeadingRows($skipLeadingRows)
    {
        $this->skipLeadingRows = $skipLeadingRows;
    }

    /**
     * @return mixed
     */
    public function getSkipLeadingRows()
    {
        return $this->skipLeadingRows;
    }

    /**
     * @param $sourceFormat
     */
    public function setSourceFormat($sourceFormat)
    {
        $this->sourceFormat = $sourceFormat;
    }

    /**
     * @return mixed
     */
    public function getSourceFormat()
    {
        return $this->sourceFormat;
    }

    /**
     * @param $sourceUris
     * @throws Google_Exception
     */
    public function setSourceUris(/* array(Google_string) */
        $sourceUris)
    {
        $this->assertIsArray($sourceUris, 'Google_string', __METHOD__);
        $this->sourceUris = $sourceUris;
    }

    /**
     * @return mixed
     */
    public function getSourceUris()
    {
        return $this->sourceUris;
    }

    /**
     * @param $writeDisposition
     */
    public function setWriteDisposition($writeDisposition)
    {
        $this->writeDisposition = $writeDisposition;
    }

    /**
     * @return mixed
     */
    public function getWriteDisposition()
    {
        return $this->writeDisposition;
    }
}

/**
 * Class Google_JobConfigurationQuery
 */
class Google_JobConfigurationQuery extends Google_Model
{
    /**
     * @var
     */
    public $allowLargeResults;
    /**
     * @var
     */
    public $createDisposition;
    /**
     * @var string
     */
    protected $__defaultDatasetType = 'Google_DatasetReference';
    /**
     * @var string
     */
    protected $__defaultDatasetDataType = '';
    /**
     * @var
     */
    public $defaultDataset;
    /**
     * @var string
     */
    protected $__destinationTableType = 'Google_TableReference';
    /**
     * @var string
     */
    protected $__destinationTableDataType = '';
    /**
     * @var
     */
    public $destinationTable;
    /**
     * @var
     */
    public $minCompletionRatio;
    /**
     * @var
     */
    public $preserveNulls;
    /**
     * @var
     */
    public $priority;
    /**
     * @var
     */
    public $query;
    /**
     * @var
     */
    public $useQueryCache;
    /**
     * @var
     */
    public $writeDisposition;

    /**
     * @param $allowLargeResults
     */
    public function setAllowLargeResults($allowLargeResults)
    {
        $this->allowLargeResults = $allowLargeResults;
    }

    /**
     * @return mixed
     */
    public function getAllowLargeResults()
    {
        return $this->allowLargeResults;
    }

    /**
     * @param $createDisposition
     */
    public function setCreateDisposition($createDisposition)
    {
        $this->createDisposition = $createDisposition;
    }

    /**
     * @return mixed
     */
    public function getCreateDisposition()
    {
        return $this->createDisposition;
    }

    /**
     * @param Google_DatasetReference $defaultDataset
     */
    public function setDefaultDataset(Google_DatasetReference $defaultDataset)
    {
        $this->defaultDataset = $defaultDataset;
    }

    /**
     * @return mixed
     */
    public function getDefaultDataset()
    {
        return $this->defaultDataset;
    }

    /**
     * @param Google_TableReference $destinationTable
     */
    public function setDestinationTable(Google_TableReference $destinationTable)
    {
        $this->destinationTable = $destinationTable;
    }

    /**
     * @return mixed
     */
    public function getDestinationTable()
    {
        return $this->destinationTable;
    }

    /**
     * @param $minCompletionRatio
     */
    public function setMinCompletionRatio($minCompletionRatio)
    {
        $this->minCompletionRatio = $minCompletionRatio;
    }

    /**
     * @return mixed
     */
    public function getMinCompletionRatio()
    {
        return $this->minCompletionRatio;
    }

    /**
     * @param $preserveNulls
     */
    public function setPreserveNulls($preserveNulls)
    {
        $this->preserveNulls = $preserveNulls;
    }

    /**
     * @return mixed
     */
    public function getPreserveNulls()
    {
        return $this->preserveNulls;
    }

    /**
     * @param $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    /**
     * @return mixed
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param $query
     */
    public function setQuery($query)
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
     * @param $useQueryCache
     */
    public function setUseQueryCache($useQueryCache)
    {
        $this->useQueryCache = $useQueryCache;
    }

    /**
     * @return mixed
     */
    public function getUseQueryCache()
    {
        return $this->useQueryCache;
    }

    /**
     * @param $writeDisposition
     */
    public function setWriteDisposition($writeDisposition)
    {
        $this->writeDisposition = $writeDisposition;
    }

    /**
     * @return mixed
     */
    public function getWriteDisposition()
    {
        return $this->writeDisposition;
    }
}

/**
 * Class Google_JobConfigurationTableCopy
 */
class Google_JobConfigurationTableCopy extends Google_Model
{
    /**
     * @var
     */
    public $createDisposition;
    /**
     * @var string
     */
    protected $__destinationTableType = 'Google_TableReference';
    /**
     * @var string
     */
    protected $__destinationTableDataType = '';
    /**
     * @var
     */
    public $destinationTable;
    /**
     * @var string
     */
    protected $__sourceTableType = 'Google_TableReference';
    /**
     * @var string
     */
    protected $__sourceTableDataType = '';
    /**
     * @var
     */
    public $sourceTable;
    /**
     * @var
     */
    public $writeDisposition;

    /**
     * @param $createDisposition
     */
    public function setCreateDisposition($createDisposition)
    {
        $this->createDisposition = $createDisposition;
    }

    /**
     * @return mixed
     */
    public function getCreateDisposition()
    {
        return $this->createDisposition;
    }

    /**
     * @param Google_TableReference $destinationTable
     */
    public function setDestinationTable(Google_TableReference $destinationTable)
    {
        $this->destinationTable = $destinationTable;
    }

    /**
     * @return mixed
     */
    public function getDestinationTable()
    {
        return $this->destinationTable;
    }

    /**
     * @param Google_TableReference $sourceTable
     */
    public function setSourceTable(Google_TableReference $sourceTable)
    {
        $this->sourceTable = $sourceTable;
    }

    /**
     * @return mixed
     */
    public function getSourceTable()
    {
        return $this->sourceTable;
    }

    /**
     * @param $writeDisposition
     */
    public function setWriteDisposition($writeDisposition)
    {
        $this->writeDisposition = $writeDisposition;
    }

    /**
     * @return mixed
     */
    public function getWriteDisposition()
    {
        return $this->writeDisposition;
    }
}

/**
 * Class Google_JobList
 */
class Google_JobList extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__jobsType = 'Google_JobListJobs';
    /**
     * @var string
     */
    protected $__jobsDataType = 'array';
    /**
     * @var
     */
    public $jobs;
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
     * @param $jobs
     * @throws Google_Exception
     */
    public function setJobs(/* array(Google_JobListJobs) */
        $jobs)
    {
        $this->assertIsArray($jobs, 'Google_JobListJobs', __METHOD__);
        $this->jobs = $jobs;
    }

    /**
     * @return mixed
     */
    public function getJobs()
    {
        return $this->jobs;
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
 * Class Google_JobListJobs
 */
class Google_JobListJobs extends Google_Model
{
    /**
     * @var string
     */
    protected $__configurationType = 'Google_JobConfiguration';
    /**
     * @var string
     */
    protected $__configurationDataType = '';
    /**
     * @var
     */
    public $configuration;
    /**
     * @var string
     */
    protected $__errorResultType = 'Google_ErrorProto';
    /**
     * @var string
     */
    protected $__errorResultDataType = '';
    /**
     * @var
     */
    public $errorResult;
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__jobReferenceType = 'Google_JobReference';
    /**
     * @var string
     */
    protected $__jobReferenceDataType = '';
    /**
     * @var
     */
    public $jobReference;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $state;
    /**
     * @var string
     */
    protected $__statisticsType = 'Google_JobStatistics';
    /**
     * @var string
     */
    protected $__statisticsDataType = '';
    /**
     * @var
     */
    public $statistics;
    /**
     * @var string
     */
    protected $__statusType = 'Google_JobStatus';
    /**
     * @var string
     */
    protected $__statusDataType = '';
    /**
     * @var
     */
    public $status;

    /**
     * @param Google_JobConfiguration $configuration
     */
    public function setConfiguration(Google_JobConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @return mixed
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * @param Google_ErrorProto $errorResult
     */
    public function setErrorResult(Google_ErrorProto $errorResult)
    {
        $this->errorResult = $errorResult;
    }

    /**
     * @return mixed
     */
    public function getErrorResult()
    {
        return $this->errorResult;
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
     * @param Google_JobReference $jobReference
     */
    public function setJobReference(Google_JobReference $jobReference)
    {
        $this->jobReference = $jobReference;
    }

    /**
     * @return mixed
     */
    public function getJobReference()
    {
        return $this->jobReference;
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
     * @param $state
     */
    public function setState($state)
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
     * @param Google_JobStatistics $statistics
     */
    public function setStatistics(Google_JobStatistics $statistics)
    {
        $this->statistics = $statistics;
    }

    /**
     * @return mixed
     */
    public function getStatistics()
    {
        return $this->statistics;
    }

    /**
     * @param Google_JobStatus $status
     */
    public function setStatus(Google_JobStatus $status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }
}

/**
 * Class Google_JobReference
 */
class Google_JobReference extends Google_Model
{
    /**
     * @var
     */
    public $jobId;
    /**
     * @var
     */
    public $projectId;

    /**
     * @param $jobId
     */
    public function setJobId($jobId)
    {
        $this->jobId = $jobId;
    }

    /**
     * @return mixed
     */
    public function getJobId()
    {
        return $this->jobId;
    }

    /**
     * @param $projectId
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }

    /**
     * @return mixed
     */
    public function getProjectId()
    {
        return $this->projectId;
    }
}

/**
 * Class Google_JobStatistics
 */
class Google_JobStatistics extends Google_Model
{
    /**
     * @var
     */
    public $endTime;
    /**
     * @var string
     */
    protected $__loadType = 'Google_JobStatistics3';
    /**
     * @var string
     */
    protected $__loadDataType = '';
    /**
     * @var
     */
    public $load;
    /**
     * @var string
     */
    protected $__queryType = 'Google_JobStatistics2';
    /**
     * @var string
     */
    protected $__queryDataType = '';
    /**
     * @var
     */
    public $query;
    /**
     * @var
     */
    public $startTime;
    /**
     * @var
     */
    public $totalBytesProcessed;

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
     * @param Google_JobStatistics3 $load
     */
    public function setLoad(Google_JobStatistics3 $load)
    {
        $this->load = $load;
    }

    /**
     * @return mixed
     */
    public function getLoad()
    {
        return $this->load;
    }

    /**
     * @param Google_JobStatistics2 $query
     */
    public function setQuery(Google_JobStatistics2 $query)
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

    /**
     * @param $totalBytesProcessed
     */
    public function setTotalBytesProcessed($totalBytesProcessed)
    {
        $this->totalBytesProcessed = $totalBytesProcessed;
    }

    /**
     * @return mixed
     */
    public function getTotalBytesProcessed()
    {
        return $this->totalBytesProcessed;
    }
}

/**
 * Class Google_JobStatistics2
 */
class Google_JobStatistics2 extends Google_Model
{
    /**
     * @var
     */
    public $cacheHit;
    /**
     * @var
     */
    public $completionRatio;
    /**
     * @var
     */
    public $totalBytesProcessed;

    /**
     * @param $cacheHit
     */
    public function setCacheHit($cacheHit)
    {
        $this->cacheHit = $cacheHit;
    }

    /**
     * @return mixed
     */
    public function getCacheHit()
    {
        return $this->cacheHit;
    }

    /**
     * @param $completionRatio
     */
    public function setCompletionRatio($completionRatio)
    {
        $this->completionRatio = $completionRatio;
    }

    /**
     * @return mixed
     */
    public function getCompletionRatio()
    {
        return $this->completionRatio;
    }

    /**
     * @param $totalBytesProcessed
     */
    public function setTotalBytesProcessed($totalBytesProcessed)
    {
        $this->totalBytesProcessed = $totalBytesProcessed;
    }

    /**
     * @return mixed
     */
    public function getTotalBytesProcessed()
    {
        return $this->totalBytesProcessed;
    }
}

/**
 * Class Google_JobStatistics3
 */
class Google_JobStatistics3 extends Google_Model
{
    /**
     * @var
     */
    public $inputFileBytes;
    /**
     * @var
     */
    public $inputFiles;
    /**
     * @var
     */
    public $outputBytes;
    /**
     * @var
     */
    public $outputRows;

    /**
     * @param $inputFileBytes
     */
    public function setInputFileBytes($inputFileBytes)
    {
        $this->inputFileBytes = $inputFileBytes;
    }

    /**
     * @return mixed
     */
    public function getInputFileBytes()
    {
        return $this->inputFileBytes;
    }

    /**
     * @param $inputFiles
     */
    public function setInputFiles($inputFiles)
    {
        $this->inputFiles = $inputFiles;
    }

    /**
     * @return mixed
     */
    public function getInputFiles()
    {
        return $this->inputFiles;
    }

    /**
     * @param $outputBytes
     */
    public function setOutputBytes($outputBytes)
    {
        $this->outputBytes = $outputBytes;
    }

    /**
     * @return mixed
     */
    public function getOutputBytes()
    {
        return $this->outputBytes;
    }

    /**
     * @param $outputRows
     */
    public function setOutputRows($outputRows)
    {
        $this->outputRows = $outputRows;
    }

    /**
     * @return mixed
     */
    public function getOutputRows()
    {
        return $this->outputRows;
    }
}

/**
 * Class Google_JobStatus
 */
class Google_JobStatus extends Google_Model
{
    /**
     * @var string
     */
    protected $__errorResultType = 'Google_ErrorProto';
    /**
     * @var string
     */
    protected $__errorResultDataType = '';
    /**
     * @var
     */
    public $errorResult;
    /**
     * @var string
     */
    protected $__errorsType = 'Google_ErrorProto';
    /**
     * @var string
     */
    protected $__errorsDataType = 'array';
    /**
     * @var
     */
    public $errors;
    /**
     * @var
     */
    public $state;

    /**
     * @param Google_ErrorProto $errorResult
     */
    public function setErrorResult(Google_ErrorProto $errorResult)
    {
        $this->errorResult = $errorResult;
    }

    /**
     * @return mixed
     */
    public function getErrorResult()
    {
        return $this->errorResult;
    }

    /**
     * @param $errors
     * @throws Google_Exception
     */
    public function setErrors(/* array(Google_ErrorProto) */
        $errors)
    {
        $this->assertIsArray($errors, 'Google_ErrorProto', __METHOD__);
        $this->errors = $errors;
    }

    /**
     * @return mixed
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param $state
     */
    public function setState($state)
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
 * Class Google_ProjectList
 */
class Google_ProjectList extends Google_Model
{
    /**
     * @var
     */
    public $etag;
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
    protected $__projectsType = 'Google_ProjectListProjects';
    /**
     * @var string
     */
    protected $__projectsDataType = 'array';
    /**
     * @var
     */
    public $projects;
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
     * @param $projects
     * @throws Google_Exception
     */
    public function setProjects(/* array(Google_ProjectListProjects) */
        $projects)
    {
        $this->assertIsArray($projects, 'Google_ProjectListProjects', __METHOD__);
        $this->projects = $projects;
    }

    /**
     * @return mixed
     */
    public function getProjects()
    {
        return $this->projects;
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
 * Class Google_ProjectListProjects
 */
class Google_ProjectListProjects extends Google_Model
{
    /**
     * @var
     */
    public $friendlyName;
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
    public $numericId;
    /**
     * @var string
     */
    protected $__projectReferenceType = 'Google_ProjectReference';
    /**
     * @var string
     */
    protected $__projectReferenceDataType = '';
    /**
     * @var
     */
    public $projectReference;

    /**
     * @param $friendlyName
     */
    public function setFriendlyName($friendlyName)
    {
        $this->friendlyName = $friendlyName;
    }

    /**
     * @return mixed
     */
    public function getFriendlyName()
    {
        return $this->friendlyName;
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
     * @param $numericId
     */
    public function setNumericId($numericId)
    {
        $this->numericId = $numericId;
    }

    /**
     * @return mixed
     */
    public function getNumericId()
    {
        return $this->numericId;
    }

    /**
     * @param Google_ProjectReference $projectReference
     */
    public function setProjectReference(Google_ProjectReference $projectReference)
    {
        $this->projectReference = $projectReference;
    }

    /**
     * @return mixed
     */
    public function getProjectReference()
    {
        return $this->projectReference;
    }
}

/**
 * Class Google_ProjectReference
 */
class Google_ProjectReference extends Google_Model
{
    /**
     * @var
     */
    public $projectId;

    /**
     * @param $projectId
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }

    /**
     * @return mixed
     */
    public function getProjectId()
    {
        return $this->projectId;
    }
}

/**
 * Class Google_QueryRequest
 */
class Google_QueryRequest extends Google_Model
{
    /**
     * @var string
     */
    protected $__defaultDatasetType = 'Google_DatasetReference';
    /**
     * @var string
     */
    protected $__defaultDatasetDataType = '';
    /**
     * @var
     */
    public $defaultDataset;
    /**
     * @var
     */
    public $dryRun;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $maxResults;
    /**
     * @var
     */
    public $minCompletionRatio;
    /**
     * @var
     */
    public $preserveNulls;
    /**
     * @var
     */
    public $query;
    /**
     * @var
     */
    public $timeoutMs;
    /**
     * @var
     */
    public $useQueryCache;

    /**
     * @param Google_DatasetReference $defaultDataset
     */
    public function setDefaultDataset(Google_DatasetReference $defaultDataset)
    {
        $this->defaultDataset = $defaultDataset;
    }

    /**
     * @return mixed
     */
    public function getDefaultDataset()
    {
        return $this->defaultDataset;
    }

    /**
     * @param $dryRun
     */
    public function setDryRun($dryRun)
    {
        $this->dryRun = $dryRun;
    }

    /**
     * @return mixed
     */
    public function getDryRun()
    {
        return $this->dryRun;
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
     * @param $maxResults
     */
    public function setMaxResults($maxResults)
    {
        $this->maxResults = $maxResults;
    }

    /**
     * @return mixed
     */
    public function getMaxResults()
    {
        return $this->maxResults;
    }

    /**
     * @param $minCompletionRatio
     */
    public function setMinCompletionRatio($minCompletionRatio)
    {
        $this->minCompletionRatio = $minCompletionRatio;
    }

    /**
     * @return mixed
     */
    public function getMinCompletionRatio()
    {
        return $this->minCompletionRatio;
    }

    /**
     * @param $preserveNulls
     */
    public function setPreserveNulls($preserveNulls)
    {
        $this->preserveNulls = $preserveNulls;
    }

    /**
     * @return mixed
     */
    public function getPreserveNulls()
    {
        return $this->preserveNulls;
    }

    /**
     * @param $query
     */
    public function setQuery($query)
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
     * @param $timeoutMs
     */
    public function setTimeoutMs($timeoutMs)
    {
        $this->timeoutMs = $timeoutMs;
    }

    /**
     * @return mixed
     */
    public function getTimeoutMs()
    {
        return $this->timeoutMs;
    }

    /**
     * @param $useQueryCache
     */
    public function setUseQueryCache($useQueryCache)
    {
        $this->useQueryCache = $useQueryCache;
    }

    /**
     * @return mixed
     */
    public function getUseQueryCache()
    {
        return $this->useQueryCache;
    }
}

/**
 * Class Google_QueryResponse
 */
class Google_QueryResponse extends Google_Model
{
    /**
     * @var
     */
    public $cacheHit;
    /**
     * @var
     */
    public $jobComplete;
    /**
     * @var string
     */
    protected $__jobReferenceType = 'Google_JobReference';
    /**
     * @var string
     */
    protected $__jobReferenceDataType = '';
    /**
     * @var
     */
    public $jobReference;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $pageToken;
    /**
     * @var string
     */
    protected $__rowsType = 'Google_TableRow';
    /**
     * @var string
     */
    protected $__rowsDataType = 'array';
    /**
     * @var
     */
    public $rows;
    /**
     * @var string
     */
    protected $__schemaType = 'Google_TableSchema';
    /**
     * @var string
     */
    protected $__schemaDataType = '';
    /**
     * @var
     */
    public $schema;
    /**
     * @var
     */
    public $totalBytesProcessed;
    /**
     * @var
     */
    public $totalRows;

    /**
     * @param $cacheHit
     */
    public function setCacheHit($cacheHit)
    {
        $this->cacheHit = $cacheHit;
    }

    /**
     * @return mixed
     */
    public function getCacheHit()
    {
        return $this->cacheHit;
    }

    /**
     * @param $jobComplete
     */
    public function setJobComplete($jobComplete)
    {
        $this->jobComplete = $jobComplete;
    }

    /**
     * @return mixed
     */
    public function getJobComplete()
    {
        return $this->jobComplete;
    }

    /**
     * @param Google_JobReference $jobReference
     */
    public function setJobReference(Google_JobReference $jobReference)
    {
        $this->jobReference = $jobReference;
    }

    /**
     * @return mixed
     */
    public function getJobReference()
    {
        return $this->jobReference;
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
     * @param $pageToken
     */
    public function setPageToken($pageToken)
    {
        $this->pageToken = $pageToken;
    }

    /**
     * @return mixed
     */
    public function getPageToken()
    {
        return $this->pageToken;
    }

    /**
     * @param $rows
     * @throws Google_Exception
     */
    public function setRows(/* array(Google_TableRow) */
        $rows)
    {
        $this->assertIsArray($rows, 'Google_TableRow', __METHOD__);
        $this->rows = $rows;
    }

    /**
     * @return mixed
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * @param Google_TableSchema $schema
     */
    public function setSchema(Google_TableSchema $schema)
    {
        $this->schema = $schema;
    }

    /**
     * @return mixed
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * @param $totalBytesProcessed
     */
    public function setTotalBytesProcessed($totalBytesProcessed)
    {
        $this->totalBytesProcessed = $totalBytesProcessed;
    }

    /**
     * @return mixed
     */
    public function getTotalBytesProcessed()
    {
        return $this->totalBytesProcessed;
    }

    /**
     * @param $totalRows
     */
    public function setTotalRows($totalRows)
    {
        $this->totalRows = $totalRows;
    }

    /**
     * @return mixed
     */
    public function getTotalRows()
    {
        return $this->totalRows;
    }
}

/**
 * Class Google_Table
 */
class Google_Table extends Google_Model
{
    /**
     * @var
     */
    public $creationTime;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $expirationTime;
    /**
     * @var
     */
    public $friendlyName;
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
    public $lastModifiedTime;
    /**
     * @var
     */
    public $numBytes;
    /**
     * @var
     */
    public $numRows;
    /**
     * @var string
     */
    protected $__schemaType = 'Google_TableSchema';
    /**
     * @var string
     */
    protected $__schemaDataType = '';
    /**
     * @var
     */
    public $schema;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var string
     */
    protected $__tableReferenceType = 'Google_TableReference';
    /**
     * @var string
     */
    protected $__tableReferenceDataType = '';
    /**
     * @var
     */
    public $tableReference;

    /**
     * @param $creationTime
     */
    public function setCreationTime($creationTime)
    {
        $this->creationTime = $creationTime;
    }

    /**
     * @return mixed
     */
    public function getCreationTime()
    {
        return $this->creationTime;
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
     * @param $expirationTime
     */
    public function setExpirationTime($expirationTime)
    {
        $this->expirationTime = $expirationTime;
    }

    /**
     * @return mixed
     */
    public function getExpirationTime()
    {
        return $this->expirationTime;
    }

    /**
     * @param $friendlyName
     */
    public function setFriendlyName($friendlyName)
    {
        $this->friendlyName = $friendlyName;
    }

    /**
     * @return mixed
     */
    public function getFriendlyName()
    {
        return $this->friendlyName;
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
     * @param $lastModifiedTime
     */
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->lastModifiedTime = $lastModifiedTime;
    }

    /**
     * @return mixed
     */
    public function getLastModifiedTime()
    {
        return $this->lastModifiedTime;
    }

    /**
     * @param $numBytes
     */
    public function setNumBytes($numBytes)
    {
        $this->numBytes = $numBytes;
    }

    /**
     * @return mixed
     */
    public function getNumBytes()
    {
        return $this->numBytes;
    }

    /**
     * @param $numRows
     */
    public function setNumRows($numRows)
    {
        $this->numRows = $numRows;
    }

    /**
     * @return mixed
     */
    public function getNumRows()
    {
        return $this->numRows;
    }

    /**
     * @param Google_TableSchema $schema
     */
    public function setSchema(Google_TableSchema $schema)
    {
        $this->schema = $schema;
    }

    /**
     * @return mixed
     */
    public function getSchema()
    {
        return $this->schema;
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
     * @param Google_TableReference $tableReference
     */
    public function setTableReference(Google_TableReference $tableReference)
    {
        $this->tableReference = $tableReference;
    }

    /**
     * @return mixed
     */
    public function getTableReference()
    {
        return $this->tableReference;
    }
}

/**
 * Class Google_TableCell
 */
class Google_TableCell extends Google_Model
{
    /**
     * @var
     */
    public $v;

    /**
     * @param $v
     */
    public function setV($v)
    {
        $this->v = $v;
    }

    /**
     * @return mixed
     */
    public function getV()
    {
        return $this->v;
    }
}

/**
 * Class Google_TableDataList
 */
class Google_TableDataList extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $pageToken;
    /**
     * @var string
     */
    protected $__rowsType = 'Google_TableRow';
    /**
     * @var string
     */
    protected $__rowsDataType = 'array';
    /**
     * @var
     */
    public $rows;
    /**
     * @var
     */
    public $totalRows;

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
     * @param $pageToken
     */
    public function setPageToken($pageToken)
    {
        $this->pageToken = $pageToken;
    }

    /**
     * @return mixed
     */
    public function getPageToken()
    {
        return $this->pageToken;
    }

    /**
     * @param $rows
     * @throws Google_Exception
     */
    public function setRows(/* array(Google_TableRow) */
        $rows)
    {
        $this->assertIsArray($rows, 'Google_TableRow', __METHOD__);
        $this->rows = $rows;
    }

    /**
     * @return mixed
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * @param $totalRows
     */
    public function setTotalRows($totalRows)
    {
        $this->totalRows = $totalRows;
    }

    /**
     * @return mixed
     */
    public function getTotalRows()
    {
        return $this->totalRows;
    }
}

/**
 * Class Google_TableFieldSchema
 */
class Google_TableFieldSchema extends Google_Model
{
    /**
     * @var string
     */
    protected $__fieldsType = 'Google_TableFieldSchema';
    /**
     * @var string
     */
    protected $__fieldsDataType = 'array';
    /**
     * @var
     */
    public $fields;
    /**
     * @var
     */
    public $mode;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $type;

    /**
     * @param $fields
     * @throws Google_Exception
     */
    public function setFields(/* array(Google_TableFieldSchema) */
        $fields)
    {
        $this->assertIsArray($fields, 'Google_TableFieldSchema', __METHOD__);
        $this->fields = $fields;
    }

    /**
     * @return mixed
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param $mode
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    }

    /**
     * @return mixed
     */
    public function getMode()
    {
        return $this->mode;
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
 * Class Google_TableList
 */
class Google_TableList extends Google_Model
{
    /**
     * @var
     */
    public $etag;
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
    protected $__tablesType = 'Google_TableListTables';
    /**
     * @var string
     */
    protected $__tablesDataType = 'array';
    /**
     * @var
     */
    public $tables;
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
     * @param $tables
     * @throws Google_Exception
     */
    public function setTables(/* array(Google_TableListTables) */
        $tables)
    {
        $this->assertIsArray($tables, 'Google_TableListTables', __METHOD__);
        $this->tables = $tables;
    }

    /**
     * @return mixed
     */
    public function getTables()
    {
        return $this->tables;
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
 * Class Google_TableListTables
 */
class Google_TableListTables extends Google_Model
{
    /**
     * @var
     */
    public $friendlyName;
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
    protected $__tableReferenceType = 'Google_TableReference';
    /**
     * @var string
     */
    protected $__tableReferenceDataType = '';
    /**
     * @var
     */
    public $tableReference;

    /**
     * @param $friendlyName
     */
    public function setFriendlyName($friendlyName)
    {
        $this->friendlyName = $friendlyName;
    }

    /**
     * @return mixed
     */
    public function getFriendlyName()
    {
        return $this->friendlyName;
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
     * @param Google_TableReference $tableReference
     */
    public function setTableReference(Google_TableReference $tableReference)
    {
        $this->tableReference = $tableReference;
    }

    /**
     * @return mixed
     */
    public function getTableReference()
    {
        return $this->tableReference;
    }
}

/**
 * Class Google_TableReference
 */
class Google_TableReference extends Google_Model
{
    /**
     * @var
     */
    public $datasetId;
    /**
     * @var
     */
    public $projectId;
    /**
     * @var
     */
    public $tableId;

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
     * @param $projectId
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }

    /**
     * @return mixed
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * @param $tableId
     */
    public function setTableId($tableId)
    {
        $this->tableId = $tableId;
    }

    /**
     * @return mixed
     */
    public function getTableId()
    {
        return $this->tableId;
    }
}

/**
 * Class Google_TableRow
 */
class Google_TableRow extends Google_Model
{
    /**
     * @var string
     */
    protected $__fType = 'Google_TableCell';
    /**
     * @var string
     */
    protected $__fDataType = 'array';
    /**
     * @var
     */
    public $f;

    /**
     * @param $f
     * @throws Google_Exception
     */
    public function setF(/* array(Google_TableCell) */
        $f)
    {
        $this->assertIsArray($f, 'Google_TableCell', __METHOD__);
        $this->f = $f;
    }

    /**
     * @return mixed
     */
    public function getF()
    {
        return $this->f;
    }
}

/**
 * Class Google_TableSchema
 */
class Google_TableSchema extends Google_Model
{
    /**
     * @var string
     */
    protected $__fieldsType = 'Google_TableFieldSchema';
    /**
     * @var string
     */
    protected $__fieldsDataType = 'array';
    /**
     * @var
     */
    public $fields;

    /**
     * @param $fields
     * @throws Google_Exception
     */
    public function setFields(/* array(Google_TableFieldSchema) */
        $fields)
    {
        $this->assertIsArray($fields, 'Google_TableFieldSchema', __METHOD__);
        $this->fields = $fields;
    }

    /**
     * @return mixed
     */
    public function getFields()
    {
        return $this->fields;
    }
}
