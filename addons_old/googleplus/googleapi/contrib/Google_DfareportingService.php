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
 * The "dimensionValues" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dfareportingService = new Google_DfareportingService(...);
 *   $dimensionValues = $dfareportingService->dimensionValues;
 *  </code>
 */
class Google_DimensionValuesServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves list of report dimension values for a list of filters. (dimensionValues.query)
     *
     * @param string $profileId The DFA user profile ID.
     * @param Google_DimensionValueRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_DimensionValueList
     * @throws Google_Exception
     * @opt_param int maxResults Maximum number of results to return.
     * @opt_param string pageToken The value of the nextToken from the previous result page.
     */
    public function query($profileId, Google_DimensionValueRequest $postBody, $optParams = [])
    {
        $params = ['profileId' => $profileId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('query', [$params]);
        if ($this->useObjects()) {
            return new Google_DimensionValueList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "files" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dfareportingService = new Google_DfareportingService(...);
 *   $files = $dfareportingService->files;
 *  </code>
 */
class Google_FilesServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves a report file by its report ID and file ID. (files.get)
     *
     * @param string $reportId The ID of the report.
     * @param string $fileId The ID of the report file.
     * @param array $optParams Optional parameters.
     * @return Google_DfareportingFile
     * @throws Google_Exception
     */
    public function get($reportId, $fileId, $optParams = [])
    {
        $params = ['reportId' => $reportId, 'fileId' => $fileId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_DfareportingFile($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists files for a user profile. (files.list)
     *
     * @param string $profileId The DFA profile ID.
     * @param array $optParams Optional parameters.
     * @return Google_FileList
     * @throws Google_Exception
     * @opt_param int maxResults Maximum number of results to return.
     * @opt_param string pageToken The value of the nextToken from the previous result page.
     * @opt_param string scope The scope that defines which results are returned, default is 'MINE'.
     * @opt_param string sortField The field by which to sort the list.
     * @opt_param string sortOrder Order of sorted results, default is 'DESCENDING'.
     */
    public function listFiles($profileId, $optParams = [])
    {
        $params = ['profileId' => $profileId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_FileList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "reports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dfareportingService = new Google_DfareportingService(...);
 *   $reports = $dfareportingService->reports;
 *  </code>
 */
class Google_ReportsServiceResource extends Google_ServiceResource
{

    /**
     * Deletes a report by its ID. (reports.delete)
     *
     * @param string $profileId The DFA user profile ID.
     * @param string $reportId The ID of the report.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($profileId, $reportId, $optParams = [])
    {
        $params = ['profileId' => $profileId, 'reportId' => $reportId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Retrieves a report by its ID. (reports.get)
     *
     * @param string $profileId The DFA user profile ID.
     * @param string $reportId The ID of the report.
     * @param array $optParams Optional parameters.
     * @return Google_Report
     * @throws Google_Exception
     */
    public function get($profileId, $reportId, $optParams = [])
    {
        $params = ['profileId' => $profileId, 'reportId' => $reportId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Report($data);
        } else {
            return $data;
        }
    }

    /**
     * Creates a report. (reports.insert)
     *
     * @param string $profileId The DFA user profile ID.
     * @param Google_Report $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Report
     * @throws Google_Exception
     */
    public function insert($profileId, Google_Report $postBody, $optParams = [])
    {
        $params = ['profileId' => $profileId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Report($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves list of reports. (reports.list)
     *
     * @param string $profileId The DFA user profile ID.
     * @param array $optParams Optional parameters.
     * @return Google_ReportList
     * @throws Google_Exception
     * @opt_param int maxResults Maximum number of results to return.
     * @opt_param string pageToken The value of the nextToken from the previous result page.
     * @opt_param string scope The scope that defines which results are returned, default is 'MINE'.
     * @opt_param string sortField The field by which to sort the list.
     * @opt_param string sortOrder Order of sorted results, default is 'DESCENDING'.
     */
    public function listReports($profileId, $optParams = [])
    {
        $params = ['profileId' => $profileId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_ReportList($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates a report. This method supports patch semantics. (reports.patch)
     *
     * @param string $profileId The DFA user profile ID.
     * @param string $reportId The ID of the report.
     * @param Google_Report $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Report
     * @throws Google_Exception
     */
    public function patch($profileId, $reportId, Google_Report $postBody, $optParams = [])
    {
        $params = ['profileId' => $profileId, 'reportId' => $reportId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Report($data);
        } else {
            return $data;
        }
    }

    /**
     * Runs a report. (reports.run)
     *
     * @param string $profileId The DFA profile ID.
     * @param string $reportId The ID of the report.
     * @param array $optParams Optional parameters.
     * @return Google_DfareportingFile
     * @throws Google_Exception
     * @opt_param bool synchronous If set and true, tries to run the report synchronously.
     */
    public function run($profileId, $reportId, $optParams = [])
    {
        $params = ['profileId' => $profileId, 'reportId' => $reportId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('run', [$params]);
        if ($this->useObjects()) {
            return new Google_DfareportingFile($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates a report. (reports.update)
     *
     * @param string $profileId The DFA user profile ID.
     * @param string $reportId The ID of the report.
     * @param Google_Report $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Report
     * @throws Google_Exception
     */
    public function update($profileId, $reportId, Google_Report $postBody, $optParams = [])
    {
        $params = ['profileId' => $profileId, 'reportId' => $reportId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Report($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "compatibleFields" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dfareportingService = new Google_DfareportingService(...);
 *   $compatibleFields = $dfareportingService->compatibleFields;
 *  </code>
 */
class Google_ReportsCompatibleFieldsServiceResource extends Google_ServiceResource
{

    /**
     * Returns the fields that are compatible to be selected in the respective sections of a report
     * criteria, given the fields already selected in the input report and user permissions.
     * (compatibleFields.query)
     *
     * @param string $profileId The DFA user profile ID.
     * @param Google_Report $postBody
     * @param array $optParams Optional parameters.
     * @return Google_CompatibleFields
     * @throws Google_Exception
     */
    public function query($profileId, Google_Report $postBody, $optParams = [])
    {
        $params = ['profileId' => $profileId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('query', [$params]);
        if ($this->useObjects()) {
            return new Google_CompatibleFields($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "files" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dfareportingService = new Google_DfareportingService(...);
 *   $files = $dfareportingService->files;
 *  </code>
 */
class Google_ReportsFilesServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves a report file. (files.get)
     *
     * @param string $profileId The DFA profile ID.
     * @param string $reportId The ID of the report.
     * @param string $fileId The ID of the report file.
     * @param array $optParams Optional parameters.
     * @return Google_DfareportingFile
     * @throws Google_Exception
     */
    public function get($profileId, $reportId, $fileId, $optParams = [])
    {
        $params = ['profileId' => $profileId, 'reportId' => $reportId, 'fileId' => $fileId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_DfareportingFile($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists files for a report. (files.list)
     *
     * @param string $profileId The DFA profile ID.
     * @param string $reportId The ID of the parent report.
     * @param array $optParams Optional parameters.
     * @return Google_FileList
     * @throws Google_Exception
     * @opt_param int maxResults Maximum number of results to return.
     * @opt_param string pageToken The value of the nextToken from the previous result page.
     * @opt_param string sortField The field by which to sort the list.
     * @opt_param string sortOrder Order of sorted results, default is 'DESCENDING'.
     */
    public function listReportsFiles($profileId, $reportId, $optParams = [])
    {
        $params = ['profileId' => $profileId, 'reportId' => $reportId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_FileList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "userProfiles" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dfareportingService = new Google_DfareportingService(...);
 *   $userProfiles = $dfareportingService->userProfiles;
 *  </code>
 */
class Google_UserProfilesServiceResource extends Google_ServiceResource
{

    /**
     * Gets one user profile by ID. (userProfiles.get)
     *
     * @param string $profileId The user profile ID.
     * @param array $optParams Optional parameters.
     * @return Google_UserProfile
     * @throws Google_Exception
     */
    public function get($profileId, $optParams = [])
    {
        $params = ['profileId' => $profileId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_UserProfile($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves list of user profiles for a user. (userProfiles.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_UserProfileList
     * @throws Google_Exception
     */
    public function listUserProfiles($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_UserProfileList($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Dfareporting (v1.3).
 *
 * <p>
 * Lets you create, run and download reports.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/doubleclick-advertisers/reporting/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_DfareportingService extends Google_Service
{
    /**
     * @var Google_DimensionValuesServiceResource
     */
    public $dimensionValues;
    /**
     * @var Google_FilesServiceResource
     */
    public $files;
    /**
     * @var Google_ReportsServiceResource
     */
    public $reports;
    /**
     * @var Google_ReportsCompatibleFieldsServiceResource
     */
    public $reports_compatibleFields;
    /**
     * @var Google_ReportsFilesServiceResource
     */
    public $reports_files;
    /**
     * @var Google_UserProfilesServiceResource
     */
    public $userProfiles;

    /**
     * Constructs the internal representation of the Dfareporting service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'dfareporting/v1.3/';
        $this->version = 'v1.3';
        $this->serviceName = 'dfareporting';

        $client->addService($this->serviceName, $this->version);
        $this->dimensionValues = new Google_DimensionValuesServiceResource($this, $this->serviceName, 'dimensionValues', json_decode('{"methods": {"query": {"id": "dfareporting.dimensionValues.query", "path": "userprofiles/{profileId}/dimensionvalues/query", "httpMethod": "POST", "parameters": {"maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "request": {"$ref": "DimensionValueRequest"}, "response": {"$ref": "DimensionValueList"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}}}', true));
        $this->files = new Google_FilesServiceResource($this, $this->serviceName, 'files', json_decode('{"methods": {"get": {"id": "dfareporting.files.get", "path": "reports/{reportId}/files/{fileId}", "httpMethod": "GET", "parameters": {"fileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "reportId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "response": {"$ref": "File"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"], "supportsMediaDownload": true}, "list": {"id": "dfareporting.files.list", "path": "userprofiles/{profileId}/files", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "scope": {"type": "string", "default": "MINE", "enum": ["ALL", "MINE", "SHARED_WITH_ME"], "location": "query"}, "sortField": {"type": "string", "default": "LAST_MODIFIED_TIME", "enum": ["ID", "LAST_MODIFIED_TIME"], "location": "query"}, "sortOrder": {"type": "string", "default": "DESCENDING", "enum": ["ASCENDING", "DESCENDING"], "location": "query"}}, "response": {"$ref": "FileList"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}}}', true));
        $this->reports = new Google_ReportsServiceResource($this, $this->serviceName, 'reports', json_decode('{"methods": {"delete": {"id": "dfareporting.reports.delete", "path": "userprofiles/{profileId}/reports/{reportId}", "httpMethod": "DELETE", "parameters": {"profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "reportId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}, "get": {"id": "dfareporting.reports.get", "path": "userprofiles/{profileId}/reports/{reportId}", "httpMethod": "GET", "parameters": {"profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "reportId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "response": {"$ref": "Report"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}, "insert": {"id": "dfareporting.reports.insert", "path": "userprofiles/{profileId}/reports", "httpMethod": "POST", "parameters": {"profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "request": {"$ref": "Report"}, "response": {"$ref": "Report"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}, "list": {"id": "dfareporting.reports.list", "path": "userprofiles/{profileId}/reports", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "scope": {"type": "string", "default": "MINE", "enum": ["ALL", "MINE"], "location": "query"}, "sortField": {"type": "string", "default": "LAST_MODIFIED_TIME", "enum": ["ID", "LAST_MODIFIED_TIME", "NAME"], "location": "query"}, "sortOrder": {"type": "string", "default": "DESCENDING", "enum": ["ASCENDING", "DESCENDING"], "location": "query"}}, "response": {"$ref": "ReportList"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}, "patch": {"id": "dfareporting.reports.patch", "path": "userprofiles/{profileId}/reports/{reportId}", "httpMethod": "PATCH", "parameters": {"profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "reportId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "request": {"$ref": "Report"}, "response": {"$ref": "Report"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}, "run": {"id": "dfareporting.reports.run", "path": "userprofiles/{profileId}/reports/{reportId}/run", "httpMethod": "POST", "parameters": {"profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "reportId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "synchronous": {"type": "boolean", "location": "query"}}, "response": {"$ref": "File"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}, "update": {"id": "dfareporting.reports.update", "path": "userprofiles/{profileId}/reports/{reportId}", "httpMethod": "PUT", "parameters": {"profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "reportId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "request": {"$ref": "Report"}, "response": {"$ref": "Report"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}}}', true));
        $this->reports_compatibleFields = new Google_ReportsCompatibleFieldsServiceResource($this, $this->serviceName, 'compatibleFields', json_decode('{"methods": {"query": {"id": "dfareporting.reports.compatibleFields.query", "path": "userprofiles/{profileId}/reports/compatiblefields/query", "httpMethod": "POST", "parameters": {"profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "request": {"$ref": "Report"}, "response": {"$ref": "CompatibleFields"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}}}', true));
        $this->reports_files = new Google_ReportsFilesServiceResource($this, $this->serviceName, 'files', json_decode('{"methods": {"get": {"id": "dfareporting.reports.files.get", "path": "userprofiles/{profileId}/reports/{reportId}/files/{fileId}", "httpMethod": "GET", "parameters": {"fileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "reportId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "response": {"$ref": "File"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"], "supportsMediaDownload": true}, "list": {"id": "dfareporting.reports.files.list", "path": "userprofiles/{profileId}/reports/{reportId}/files", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "reportId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "sortField": {"type": "string", "default": "LAST_MODIFIED_TIME", "enum": ["ID", "LAST_MODIFIED_TIME"], "location": "query"}, "sortOrder": {"type": "string", "default": "DESCENDING", "enum": ["ASCENDING", "DESCENDING"], "location": "query"}}, "response": {"$ref": "FileList"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}}}', true));
        $this->userProfiles = new Google_UserProfilesServiceResource($this, $this->serviceName, 'userProfiles', json_decode('{"methods": {"get": {"id": "dfareporting.userProfiles.get", "path": "userprofiles/{profileId}", "httpMethod": "GET", "parameters": {"profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "response": {"$ref": "UserProfile"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}, "list": {"id": "dfareporting.userProfiles.list", "path": "userprofiles", "httpMethod": "GET", "response": {"$ref": "UserProfileList"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}}}', true));

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
    protected $__filtersType = 'Google_DimensionValue';
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
    public $kind;
    /**
     * @var
     */
    public $metricNames;

    /**
     * @param $filters
     * @throws Google_Exception
     */
    public function setFilters(/* array(Google_DimensionValue) */
        $filters)
    {
        $this->assertIsArray($filters, 'Google_DimensionValue', __METHOD__);
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
     * @param $metricNames
     * @throws Google_Exception
     */
    public function setMetricNames(/* array(Google_string) */
        $metricNames)
    {
        $this->assertIsArray($metricNames, 'Google_string', __METHOD__);
        $this->metricNames = $metricNames;
    }

    /**
     * @return mixed
     */
    public function getMetricNames()
    {
        return $this->metricNames;
    }
}

/**
 * Class Google_CompatibleFields
 */
class Google_CompatibleFields extends Google_Model
{
    /**
     * @var string
     */
    protected $__crossDimensionReachReportCompatibleFieldsType = 'Google_CrossDimensionReachReportCompatibleFields';
    /**
     * @var string
     */
    protected $__crossDimensionReachReportCompatibleFieldsDataType = '';
    /**
     * @var
     */
    public $crossDimensionReachReportCompatibleFields;
    /**
     * @var string
     */
    protected $__floodlightReportCompatibleFieldsType = 'Google_FloodlightReportCompatibleFields';
    /**
     * @var string
     */
    protected $__floodlightReportCompatibleFieldsDataType = '';
    /**
     * @var
     */
    public $floodlightReportCompatibleFields;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__pathToConversionReportCompatibleFieldsType = 'Google_PathToConversionReportCompatibleFields';
    /**
     * @var string
     */
    protected $__pathToConversionReportCompatibleFieldsDataType = '';
    /**
     * @var
     */
    public $pathToConversionReportCompatibleFields;
    /**
     * @var string
     */
    protected $__reachReportCompatibleFieldsType = 'Google_ReachReportCompatibleFields';
    /**
     * @var string
     */
    protected $__reachReportCompatibleFieldsDataType = '';
    /**
     * @var
     */
    public $reachReportCompatibleFields;
    /**
     * @var string
     */
    protected $__reportCompatibleFieldsType = 'Google_ReportCompatibleFields';
    /**
     * @var string
     */
    protected $__reportCompatibleFieldsDataType = '';
    /**
     * @var
     */
    public $reportCompatibleFields;

    /**
     * @param Google_CrossDimensionReachReportCompatibleFields $crossDimensionReachReportCompatibleFields
     */
    public function setCrossDimensionReachReportCompatibleFields(Google_CrossDimensionReachReportCompatibleFields $crossDimensionReachReportCompatibleFields)
    {
        $this->crossDimensionReachReportCompatibleFields = $crossDimensionReachReportCompatibleFields;
    }

    /**
     * @return mixed
     */
    public function getCrossDimensionReachReportCompatibleFields()
    {
        return $this->crossDimensionReachReportCompatibleFields;
    }

    /**
     * @param Google_FloodlightReportCompatibleFields $floodlightReportCompatibleFields
     */
    public function setFloodlightReportCompatibleFields(Google_FloodlightReportCompatibleFields $floodlightReportCompatibleFields)
    {
        $this->floodlightReportCompatibleFields = $floodlightReportCompatibleFields;
    }

    /**
     * @return mixed
     */
    public function getFloodlightReportCompatibleFields()
    {
        return $this->floodlightReportCompatibleFields;
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
     * @param Google_PathToConversionReportCompatibleFields $pathToConversionReportCompatibleFields
     */
    public function setPathToConversionReportCompatibleFields(Google_PathToConversionReportCompatibleFields $pathToConversionReportCompatibleFields)
    {
        $this->pathToConversionReportCompatibleFields = $pathToConversionReportCompatibleFields;
    }

    /**
     * @return mixed
     */
    public function getPathToConversionReportCompatibleFields()
    {
        return $this->pathToConversionReportCompatibleFields;
    }

    /**
     * @param Google_ReachReportCompatibleFields $reachReportCompatibleFields
     */
    public function setReachReportCompatibleFields(Google_ReachReportCompatibleFields $reachReportCompatibleFields)
    {
        $this->reachReportCompatibleFields = $reachReportCompatibleFields;
    }

    /**
     * @return mixed
     */
    public function getReachReportCompatibleFields()
    {
        return $this->reachReportCompatibleFields;
    }

    /**
     * @param Google_ReportCompatibleFields $reportCompatibleFields
     */
    public function setReportCompatibleFields(Google_ReportCompatibleFields $reportCompatibleFields)
    {
        $this->reportCompatibleFields = $reportCompatibleFields;
    }

    /**
     * @return mixed
     */
    public function getReportCompatibleFields()
    {
        return $this->reportCompatibleFields;
    }
}

/**
 * Class Google_CrossDimensionReachReportCompatibleFields
 */
class Google_CrossDimensionReachReportCompatibleFields extends Google_Model
{
    /**
     * @var string
     */
    protected $__breakdownType = 'Google_Dimension';
    /**
     * @var string
     */
    protected $__breakdownDataType = 'array';
    /**
     * @var
     */
    public $breakdown;
    /**
     * @var string
     */
    protected $__dimensionFiltersType = 'Google_Dimension';
    /**
     * @var string
     */
    protected $__dimensionFiltersDataType = 'array';
    /**
     * @var
     */
    public $dimensionFilters;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__metricsType = 'Google_Metric';
    /**
     * @var string
     */
    protected $__metricsDataType = 'array';
    /**
     * @var
     */
    public $metrics;
    /**
     * @var string
     */
    protected $__overlapMetricsType = 'Google_Metric';
    /**
     * @var string
     */
    protected $__overlapMetricsDataType = 'array';
    /**
     * @var
     */
    public $overlapMetrics;

    /**
     * @param $breakdown
     * @throws Google_Exception
     */
    public function setBreakdown(/* array(Google_Dimension) */
        $breakdown)
    {
        $this->assertIsArray($breakdown, 'Google_Dimension', __METHOD__);
        $this->breakdown = $breakdown;
    }

    /**
     * @return mixed
     */
    public function getBreakdown()
    {
        return $this->breakdown;
    }

    /**
     * @param $dimensionFilters
     * @throws Google_Exception
     */
    public function setDimensionFilters(/* array(Google_Dimension) */
        $dimensionFilters)
    {
        $this->assertIsArray($dimensionFilters, 'Google_Dimension', __METHOD__);
        $this->dimensionFilters = $dimensionFilters;
    }

    /**
     * @return mixed
     */
    public function getDimensionFilters()
    {
        return $this->dimensionFilters;
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
     * @param $metrics
     * @throws Google_Exception
     */
    public function setMetrics(/* array(Google_Metric) */
        $metrics)
    {
        $this->assertIsArray($metrics, 'Google_Metric', __METHOD__);
        $this->metrics = $metrics;
    }

    /**
     * @return mixed
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * @param $overlapMetrics
     * @throws Google_Exception
     */
    public function setOverlapMetrics(/* array(Google_Metric) */
        $overlapMetrics)
    {
        $this->assertIsArray($overlapMetrics, 'Google_Metric', __METHOD__);
        $this->overlapMetrics = $overlapMetrics;
    }

    /**
     * @return mixed
     */
    public function getOverlapMetrics()
    {
        return $this->overlapMetrics;
    }
}

/**
 * Class Google_CustomRichMediaEvents
 */
class Google_CustomRichMediaEvents extends Google_Model
{
    /**
     * @var string
     */
    protected $__filteredEventIdsType = 'Google_DimensionValue';
    /**
     * @var string
     */
    protected $__filteredEventIdsDataType = 'array';
    /**
     * @var
     */
    public $filteredEventIds;
    /**
     * @var
     */
    public $kind;

    /**
     * @param $filteredEventIds
     * @throws Google_Exception
     */
    public function setFilteredEventIds(/* array(Google_DimensionValue) */
        $filteredEventIds)
    {
        $this->assertIsArray($filteredEventIds, 'Google_DimensionValue', __METHOD__);
        $this->filteredEventIds = $filteredEventIds;
    }

    /**
     * @return mixed
     */
    public function getFilteredEventIds()
    {
        return $this->filteredEventIds;
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
 * Class Google_DateRange
 */
class Google_DateRange extends Google_Model
{
    /**
     * @var
     */
    public $endDate;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $relativeDateRange;
    /**
     * @var
     */
    public $startDate;

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
     * @param $relativeDateRange
     */
    public function setRelativeDateRange($relativeDateRange)
    {
        $this->relativeDateRange = $relativeDateRange;
    }

    /**
     * @return mixed
     */
    public function getRelativeDateRange()
    {
        return $this->relativeDateRange;
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
}

/**
 * Class Google_DfareportingFile
 */
class Google_DfareportingFile extends Google_Model
{
    /**
     * @var string
     */
    protected $__dateRangeType = 'Google_DateRange';
    /**
     * @var string
     */
    protected $__dateRangeDataType = '';
    /**
     * @var
     */
    public $dateRange;
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $fileName;
    /**
     * @var
     */
    public $format;
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
    public $reportId;
    /**
     * @var
     */
    public $status;
    /**
     * @var string
     */
    protected $__urlsType = 'Google_DfareportingFileUrls';
    /**
     * @var string
     */
    protected $__urlsDataType = '';
    /**
     * @var
     */
    public $urls;

    /**
     * @param Google_DateRange $dateRange
     */
    public function setDateRange(Google_DateRange $dateRange)
    {
        $this->dateRange = $dateRange;
    }

    /**
     * @return mixed
     */
    public function getDateRange()
    {
        return $this->dateRange;
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
     * @param $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

    /**
     * @return mixed
     */
    public function getFormat()
    {
        return $this->format;
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
     * @param $reportId
     */
    public function setReportId($reportId)
    {
        $this->reportId = $reportId;
    }

    /**
     * @return mixed
     */
    public function getReportId()
    {
        return $this->reportId;
    }

    /**
     * @param $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param Google_DfareportingFileUrls $urls
     */
    public function setUrls(Google_DfareportingFileUrls $urls)
    {
        $this->urls = $urls;
    }

    /**
     * @return mixed
     */
    public function getUrls()
    {
        return $this->urls;
    }
}

/**
 * Class Google_DfareportingFileUrls
 */
class Google_DfareportingFileUrls extends Google_Model
{
    /**
     * @var
     */
    public $apiUrl;
    /**
     * @var
     */
    public $browserUrl;

    /**
     * @param $apiUrl
     */
    public function setApiUrl($apiUrl)
    {
        $this->apiUrl = $apiUrl;
    }

    /**
     * @return mixed
     */
    public function getApiUrl()
    {
        return $this->apiUrl;
    }

    /**
     * @param $browserUrl
     */
    public function setBrowserUrl($browserUrl)
    {
        $this->browserUrl = $browserUrl;
    }

    /**
     * @return mixed
     */
    public function getBrowserUrl()
    {
        return $this->browserUrl;
    }
}

/**
 * Class Google_Dimension
 */
class Google_Dimension extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $name;

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
 * Class Google_DimensionFilter
 */
class Google_DimensionFilter extends Google_Model
{
    /**
     * @var
     */
    public $dimensionName;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $value;

    /**
     * @param $dimensionName
     */
    public function setDimensionName($dimensionName)
    {
        $this->dimensionName = $dimensionName;
    }

    /**
     * @return mixed
     */
    public function getDimensionName()
    {
        return $this->dimensionName;
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
 * Class Google_DimensionValue
 */
class Google_DimensionValue extends Google_Model
{
    /**
     * @var
     */
    public $dimensionName;
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
    public $matchType;
    /**
     * @var
     */
    public $value;

    /**
     * @param $dimensionName
     */
    public function setDimensionName($dimensionName)
    {
        $this->dimensionName = $dimensionName;
    }

    /**
     * @return mixed
     */
    public function getDimensionName()
    {
        return $this->dimensionName;
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
     * @param $matchType
     */
    public function setMatchType($matchType)
    {
        $this->matchType = $matchType;
    }

    /**
     * @return mixed
     */
    public function getMatchType()
    {
        return $this->matchType;
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
 * Class Google_DimensionValueList
 */
class Google_DimensionValueList extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_DimensionValue';
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
    public function setItems(/* array(Google_DimensionValue) */
        $items)
    {
        $this->assertIsArray($items, 'Google_DimensionValue', __METHOD__);
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
 * Class Google_DimensionValueRequest
 */
class Google_DimensionValueRequest extends Google_Model
{
    /**
     * @var
     */
    public $dimensionName;
    /**
     * @var
     */
    public $endDate;
    /**
     * @var string
     */
    protected $__filtersType = 'Google_DimensionFilter';
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
    public $kind;
    /**
     * @var
     */
    public $startDate;

    /**
     * @param $dimensionName
     */
    public function setDimensionName($dimensionName)
    {
        $this->dimensionName = $dimensionName;
    }

    /**
     * @return mixed
     */
    public function getDimensionName()
    {
        return $this->dimensionName;
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
     * @param $filters
     * @throws Google_Exception
     */
    public function setFilters(/* array(Google_DimensionFilter) */
        $filters)
    {
        $this->assertIsArray($filters, 'Google_DimensionFilter', __METHOD__);
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
}

/**
 * Class Google_FileList
 */
class Google_FileList extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_DfareportingFile';
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
    public function setItems(/* array(Google_DfareportingFile) */
        $items)
    {
        $this->assertIsArray($items, 'Google_DfareportingFile', __METHOD__);
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
 * Class Google_FloodlightReportCompatibleFields
 */
class Google_FloodlightReportCompatibleFields extends Google_Model
{
    /**
     * @var string
     */
    protected $__dimensionFiltersType = 'Google_Dimension';
    /**
     * @var string
     */
    protected $__dimensionFiltersDataType = 'array';
    /**
     * @var
     */
    public $dimensionFilters;
    /**
     * @var string
     */
    protected $__dimensionsType = 'Google_Dimension';
    /**
     * @var string
     */
    protected $__dimensionsDataType = 'array';
    /**
     * @var
     */
    public $dimensions;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__metricsType = 'Google_Metric';
    /**
     * @var string
     */
    protected $__metricsDataType = 'array';
    /**
     * @var
     */
    public $metrics;

    /**
     * @param $dimensionFilters
     * @throws Google_Exception
     */
    public function setDimensionFilters(/* array(Google_Dimension) */
        $dimensionFilters)
    {
        $this->assertIsArray($dimensionFilters, 'Google_Dimension', __METHOD__);
        $this->dimensionFilters = $dimensionFilters;
    }

    /**
     * @return mixed
     */
    public function getDimensionFilters()
    {
        return $this->dimensionFilters;
    }

    /**
     * @param $dimensions
     * @throws Google_Exception
     */
    public function setDimensions(/* array(Google_Dimension) */
        $dimensions)
    {
        $this->assertIsArray($dimensions, 'Google_Dimension', __METHOD__);
        $this->dimensions = $dimensions;
    }

    /**
     * @return mixed
     */
    public function getDimensions()
    {
        return $this->dimensions;
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
     * @param $metrics
     * @throws Google_Exception
     */
    public function setMetrics(/* array(Google_Metric) */
        $metrics)
    {
        $this->assertIsArray($metrics, 'Google_Metric', __METHOD__);
        $this->metrics = $metrics;
    }

    /**
     * @return mixed
     */
    public function getMetrics()
    {
        return $this->metrics;
    }
}

/**
 * Class Google_Metric
 */
class Google_Metric extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $name;

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
 * Class Google_PathToConversionReportCompatibleFields
 */
class Google_PathToConversionReportCompatibleFields extends Google_Model
{
    /**
     * @var string
     */
    protected $__conversionDimensionsType = 'Google_Dimension';
    /**
     * @var string
     */
    protected $__conversionDimensionsDataType = 'array';
    /**
     * @var
     */
    public $conversionDimensions;
    /**
     * @var string
     */
    protected $__customFloodlightVariablesType = 'Google_Dimension';
    /**
     * @var string
     */
    protected $__customFloodlightVariablesDataType = 'array';
    /**
     * @var
     */
    public $customFloodlightVariables;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__metricsType = 'Google_Metric';
    /**
     * @var string
     */
    protected $__metricsDataType = 'array';
    /**
     * @var
     */
    public $metrics;
    /**
     * @var string
     */
    protected $__perInteractionDimensionsType = 'Google_Dimension';
    /**
     * @var string
     */
    protected $__perInteractionDimensionsDataType = 'array';
    /**
     * @var
     */
    public $perInteractionDimensions;

    /**
     * @param $conversionDimensions
     * @throws Google_Exception
     */
    public function setConversionDimensions(/* array(Google_Dimension) */
        $conversionDimensions)
    {
        $this->assertIsArray($conversionDimensions, 'Google_Dimension', __METHOD__);
        $this->conversionDimensions = $conversionDimensions;
    }

    /**
     * @return mixed
     */
    public function getConversionDimensions()
    {
        return $this->conversionDimensions;
    }

    /**
     * @param $customFloodlightVariables
     * @throws Google_Exception
     */
    public function setCustomFloodlightVariables(/* array(Google_Dimension) */
        $customFloodlightVariables)
    {
        $this->assertIsArray($customFloodlightVariables, 'Google_Dimension', __METHOD__);
        $this->customFloodlightVariables = $customFloodlightVariables;
    }

    /**
     * @return mixed
     */
    public function getCustomFloodlightVariables()
    {
        return $this->customFloodlightVariables;
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
     * @param $metrics
     * @throws Google_Exception
     */
    public function setMetrics(/* array(Google_Metric) */
        $metrics)
    {
        $this->assertIsArray($metrics, 'Google_Metric', __METHOD__);
        $this->metrics = $metrics;
    }

    /**
     * @return mixed
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * @param $perInteractionDimensions
     * @throws Google_Exception
     */
    public function setPerInteractionDimensions(/* array(Google_Dimension) */
        $perInteractionDimensions)
    {
        $this->assertIsArray($perInteractionDimensions, 'Google_Dimension', __METHOD__);
        $this->perInteractionDimensions = $perInteractionDimensions;
    }

    /**
     * @return mixed
     */
    public function getPerInteractionDimensions()
    {
        return $this->perInteractionDimensions;
    }
}

/**
 * Class Google_ReachReportCompatibleFields
 */
class Google_ReachReportCompatibleFields extends Google_Model
{
    /**
     * @var string
     */
    protected $__dimensionFiltersType = 'Google_Dimension';
    /**
     * @var string
     */
    protected $__dimensionFiltersDataType = 'array';
    /**
     * @var
     */
    public $dimensionFilters;
    /**
     * @var string
     */
    protected $__dimensionsType = 'Google_Dimension';
    /**
     * @var string
     */
    protected $__dimensionsDataType = 'array';
    /**
     * @var
     */
    public $dimensions;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__metricsType = 'Google_Metric';
    /**
     * @var string
     */
    protected $__metricsDataType = 'array';
    /**
     * @var
     */
    public $metrics;
    /**
     * @var string
     */
    protected $__pivotedActivityMetricsType = 'Google_Metric';
    /**
     * @var string
     */
    protected $__pivotedActivityMetricsDataType = 'array';
    /**
     * @var
     */
    public $pivotedActivityMetrics;
    /**
     * @var string
     */
    protected $__reachByFrequencyMetricsType = 'Google_Metric';
    /**
     * @var string
     */
    protected $__reachByFrequencyMetricsDataType = 'array';
    /**
     * @var
     */
    public $reachByFrequencyMetrics;

    /**
     * @param $dimensionFilters
     * @throws Google_Exception
     */
    public function setDimensionFilters(/* array(Google_Dimension) */
        $dimensionFilters)
    {
        $this->assertIsArray($dimensionFilters, 'Google_Dimension', __METHOD__);
        $this->dimensionFilters = $dimensionFilters;
    }

    /**
     * @return mixed
     */
    public function getDimensionFilters()
    {
        return $this->dimensionFilters;
    }

    /**
     * @param $dimensions
     * @throws Google_Exception
     */
    public function setDimensions(/* array(Google_Dimension) */
        $dimensions)
    {
        $this->assertIsArray($dimensions, 'Google_Dimension', __METHOD__);
        $this->dimensions = $dimensions;
    }

    /**
     * @return mixed
     */
    public function getDimensions()
    {
        return $this->dimensions;
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
     * @param $metrics
     * @throws Google_Exception
     */
    public function setMetrics(/* array(Google_Metric) */
        $metrics)
    {
        $this->assertIsArray($metrics, 'Google_Metric', __METHOD__);
        $this->metrics = $metrics;
    }

    /**
     * @return mixed
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * @param $pivotedActivityMetrics
     * @throws Google_Exception
     */
    public function setPivotedActivityMetrics(/* array(Google_Metric) */
        $pivotedActivityMetrics)
    {
        $this->assertIsArray($pivotedActivityMetrics, 'Google_Metric', __METHOD__);
        $this->pivotedActivityMetrics = $pivotedActivityMetrics;
    }

    /**
     * @return mixed
     */
    public function getPivotedActivityMetrics()
    {
        return $this->pivotedActivityMetrics;
    }

    /**
     * @param $reachByFrequencyMetrics
     * @throws Google_Exception
     */
    public function setReachByFrequencyMetrics(/* array(Google_Metric) */
        $reachByFrequencyMetrics)
    {
        $this->assertIsArray($reachByFrequencyMetrics, 'Google_Metric', __METHOD__);
        $this->reachByFrequencyMetrics = $reachByFrequencyMetrics;
    }

    /**
     * @return mixed
     */
    public function getReachByFrequencyMetrics()
    {
        return $this->reachByFrequencyMetrics;
    }
}

/**
 * Class Google_Recipient
 */
class Google_Recipient extends Google_Model
{
    /**
     * @var
     */
    public $deliveryType;
    /**
     * @var
     */
    public $email;
    /**
     * @var
     */
    public $kind;

    /**
     * @param $deliveryType
     */
    public function setDeliveryType($deliveryType)
    {
        $this->deliveryType = $deliveryType;
    }

    /**
     * @return mixed
     */
    public function getDeliveryType()
    {
        return $this->deliveryType;
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
 * Class Google_Report
 */
class Google_Report extends Google_Model
{
    /**
     * @var
     */
    public $accountId;
    /**
     * @var string
     */
    protected $__activeGrpCriteriaType = 'Google_ReportActiveGrpCriteria';
    /**
     * @var string
     */
    protected $__activeGrpCriteriaDataType = '';
    /**
     * @var
     */
    public $activeGrpCriteria;
    /**
     * @var string
     */
    protected $__criteriaType = 'Google_ReportCriteria';
    /**
     * @var string
     */
    protected $__criteriaDataType = '';
    /**
     * @var
     */
    public $criteria;
    /**
     * @var string
     */
    protected $__crossDimensionReachCriteriaType = 'Google_ReportCrossDimensionReachCriteria';
    /**
     * @var string
     */
    protected $__crossDimensionReachCriteriaDataType = '';
    /**
     * @var
     */
    public $crossDimensionReachCriteria;
    /**
     * @var string
     */
    protected $__deliveryType = 'Google_ReportDelivery';
    /**
     * @var string
     */
    protected $__deliveryDataType = '';
    /**
     * @var
     */
    public $delivery;
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $fileName;
    /**
     * @var string
     */
    protected $__floodlightCriteriaType = 'Google_ReportFloodlightCriteria';
    /**
     * @var string
     */
    protected $__floodlightCriteriaDataType = '';
    /**
     * @var
     */
    public $floodlightCriteria;
    /**
     * @var
     */
    public $format;
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
    public $name;
    /**
     * @var
     */
    public $ownerProfileId;
    /**
     * @var string
     */
    protected $__pathToConversionCriteriaType = 'Google_ReportPathToConversionCriteria';
    /**
     * @var string
     */
    protected $__pathToConversionCriteriaDataType = '';
    /**
     * @var
     */
    public $pathToConversionCriteria;
    /**
     * @var string
     */
    protected $__reachCriteriaType = 'Google_ReportReachCriteria';
    /**
     * @var string
     */
    protected $__reachCriteriaDataType = '';
    /**
     * @var
     */
    public $reachCriteria;
    /**
     * @var string
     */
    protected $__scheduleType = 'Google_ReportSchedule';
    /**
     * @var string
     */
    protected $__scheduleDataType = '';
    /**
     * @var
     */
    public $schedule;
    /**
     * @var
     */
    public $subAccountId;
    /**
     * @var
     */
    public $type;

    /**
     * @param $accountId
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    /**
     * @return mixed
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param Google_ReportActiveGrpCriteria $activeGrpCriteria
     */
    public function setActiveGrpCriteria(Google_ReportActiveGrpCriteria $activeGrpCriteria)
    {
        $this->activeGrpCriteria = $activeGrpCriteria;
    }

    /**
     * @return mixed
     */
    public function getActiveGrpCriteria()
    {
        return $this->activeGrpCriteria;
    }

    /**
     * @param Google_ReportCriteria $criteria
     */
    public function setCriteria(Google_ReportCriteria $criteria)
    {
        $this->criteria = $criteria;
    }

    /**
     * @return mixed
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * @param Google_ReportCrossDimensionReachCriteria $crossDimensionReachCriteria
     */
    public function setCrossDimensionReachCriteria(Google_ReportCrossDimensionReachCriteria $crossDimensionReachCriteria)
    {
        $this->crossDimensionReachCriteria = $crossDimensionReachCriteria;
    }

    /**
     * @return mixed
     */
    public function getCrossDimensionReachCriteria()
    {
        return $this->crossDimensionReachCriteria;
    }

    /**
     * @param Google_ReportDelivery $delivery
     */
    public function setDelivery(Google_ReportDelivery $delivery)
    {
        $this->delivery = $delivery;
    }

    /**
     * @return mixed
     */
    public function getDelivery()
    {
        return $this->delivery;
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
     * @param $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param Google_ReportFloodlightCriteria $floodlightCriteria
     */
    public function setFloodlightCriteria(Google_ReportFloodlightCriteria $floodlightCriteria)
    {
        $this->floodlightCriteria = $floodlightCriteria;
    }

    /**
     * @return mixed
     */
    public function getFloodlightCriteria()
    {
        return $this->floodlightCriteria;
    }

    /**
     * @param $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

    /**
     * @return mixed
     */
    public function getFormat()
    {
        return $this->format;
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
     * @param $ownerProfileId
     */
    public function setOwnerProfileId($ownerProfileId)
    {
        $this->ownerProfileId = $ownerProfileId;
    }

    /**
     * @return mixed
     */
    public function getOwnerProfileId()
    {
        return $this->ownerProfileId;
    }

    /**
     * @param Google_ReportPathToConversionCriteria $pathToConversionCriteria
     */
    public function setPathToConversionCriteria(Google_ReportPathToConversionCriteria $pathToConversionCriteria)
    {
        $this->pathToConversionCriteria = $pathToConversionCriteria;
    }

    /**
     * @return mixed
     */
    public function getPathToConversionCriteria()
    {
        return $this->pathToConversionCriteria;
    }

    /**
     * @param Google_ReportReachCriteria $reachCriteria
     */
    public function setReachCriteria(Google_ReportReachCriteria $reachCriteria)
    {
        $this->reachCriteria = $reachCriteria;
    }

    /**
     * @return mixed
     */
    public function getReachCriteria()
    {
        return $this->reachCriteria;
    }

    /**
     * @param Google_ReportSchedule $schedule
     */
    public function setSchedule(Google_ReportSchedule $schedule)
    {
        $this->schedule = $schedule;
    }

    /**
     * @return mixed
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * @param $subAccountId
     */
    public function setSubAccountId($subAccountId)
    {
        $this->subAccountId = $subAccountId;
    }

    /**
     * @return mixed
     */
    public function getSubAccountId()
    {
        return $this->subAccountId;
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
 * Class Google_ReportActiveGrpCriteria
 */
class Google_ReportActiveGrpCriteria extends Google_Model
{
    /**
     * @var string
     */
    protected $__dateRangeType = 'Google_DateRange';
    /**
     * @var string
     */
    protected $__dateRangeDataType = '';
    /**
     * @var
     */
    public $dateRange;
    /**
     * @var string
     */
    protected $__dimensionFiltersType = 'Google_DimensionValue';
    /**
     * @var string
     */
    protected $__dimensionFiltersDataType = 'array';
    /**
     * @var
     */
    public $dimensionFilters;
    /**
     * @var string
     */
    protected $__dimensionsType = 'Google_SortedDimension';
    /**
     * @var string
     */
    protected $__dimensionsDataType = 'array';
    /**
     * @var
     */
    public $dimensions;
    /**
     * @var
     */
    public $metricNames;

    /**
     * @param Google_DateRange $dateRange
     */
    public function setDateRange(Google_DateRange $dateRange)
    {
        $this->dateRange = $dateRange;
    }

    /**
     * @return mixed
     */
    public function getDateRange()
    {
        return $this->dateRange;
    }

    /**
     * @param $dimensionFilters
     * @throws Google_Exception
     */
    public function setDimensionFilters(/* array(Google_DimensionValue) */
        $dimensionFilters)
    {
        $this->assertIsArray($dimensionFilters, 'Google_DimensionValue', __METHOD__);
        $this->dimensionFilters = $dimensionFilters;
    }

    /**
     * @return mixed
     */
    public function getDimensionFilters()
    {
        return $this->dimensionFilters;
    }

    /**
     * @param $dimensions
     * @throws Google_Exception
     */
    public function setDimensions(/* array(Google_SortedDimension) */
        $dimensions)
    {
        $this->assertIsArray($dimensions, 'Google_SortedDimension', __METHOD__);
        $this->dimensions = $dimensions;
    }

    /**
     * @return mixed
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * @param $metricNames
     * @throws Google_Exception
     */
    public function setMetricNames(/* array(Google_string) */
        $metricNames)
    {
        $this->assertIsArray($metricNames, 'Google_string', __METHOD__);
        $this->metricNames = $metricNames;
    }

    /**
     * @return mixed
     */
    public function getMetricNames()
    {
        return $this->metricNames;
    }
}

/**
 * Class Google_ReportCompatibleFields
 */
class Google_ReportCompatibleFields extends Google_Model
{
    /**
     * @var string
     */
    protected $__dimensionFiltersType = 'Google_Dimension';
    /**
     * @var string
     */
    protected $__dimensionFiltersDataType = 'array';
    /**
     * @var
     */
    public $dimensionFilters;
    /**
     * @var string
     */
    protected $__dimensionsType = 'Google_Dimension';
    /**
     * @var string
     */
    protected $__dimensionsDataType = 'array';
    /**
     * @var
     */
    public $dimensions;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__metricsType = 'Google_Metric';
    /**
     * @var string
     */
    protected $__metricsDataType = 'array';
    /**
     * @var
     */
    public $metrics;
    /**
     * @var string
     */
    protected $__pivotedActivityMetricsType = 'Google_Metric';
    /**
     * @var string
     */
    protected $__pivotedActivityMetricsDataType = 'array';
    /**
     * @var
     */
    public $pivotedActivityMetrics;

    /**
     * @param $dimensionFilters
     * @throws Google_Exception
     */
    public function setDimensionFilters(/* array(Google_Dimension) */
        $dimensionFilters)
    {
        $this->assertIsArray($dimensionFilters, 'Google_Dimension', __METHOD__);
        $this->dimensionFilters = $dimensionFilters;
    }

    /**
     * @return mixed
     */
    public function getDimensionFilters()
    {
        return $this->dimensionFilters;
    }

    /**
     * @param $dimensions
     * @throws Google_Exception
     */
    public function setDimensions(/* array(Google_Dimension) */
        $dimensions)
    {
        $this->assertIsArray($dimensions, 'Google_Dimension', __METHOD__);
        $this->dimensions = $dimensions;
    }

    /**
     * @return mixed
     */
    public function getDimensions()
    {
        return $this->dimensions;
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
     * @param $metrics
     * @throws Google_Exception
     */
    public function setMetrics(/* array(Google_Metric) */
        $metrics)
    {
        $this->assertIsArray($metrics, 'Google_Metric', __METHOD__);
        $this->metrics = $metrics;
    }

    /**
     * @return mixed
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * @param $pivotedActivityMetrics
     * @throws Google_Exception
     */
    public function setPivotedActivityMetrics(/* array(Google_Metric) */
        $pivotedActivityMetrics)
    {
        $this->assertIsArray($pivotedActivityMetrics, 'Google_Metric', __METHOD__);
        $this->pivotedActivityMetrics = $pivotedActivityMetrics;
    }

    /**
     * @return mixed
     */
    public function getPivotedActivityMetrics()
    {
        return $this->pivotedActivityMetrics;
    }
}

/**
 * Class Google_ReportCriteria
 */
class Google_ReportCriteria extends Google_Model
{
    /**
     * @var string
     */
    protected $__activitiesType = 'Google_Activities';
    /**
     * @var string
     */
    protected $__activitiesDataType = '';
    /**
     * @var
     */
    public $activities;
    /**
     * @var string
     */
    protected $__customRichMediaEventsType = 'Google_CustomRichMediaEvents';
    /**
     * @var string
     */
    protected $__customRichMediaEventsDataType = '';
    /**
     * @var
     */
    public $customRichMediaEvents;
    /**
     * @var string
     */
    protected $__dateRangeType = 'Google_DateRange';
    /**
     * @var string
     */
    protected $__dateRangeDataType = '';
    /**
     * @var
     */
    public $dateRange;
    /**
     * @var string
     */
    protected $__dimensionFiltersType = 'Google_DimensionValue';
    /**
     * @var string
     */
    protected $__dimensionFiltersDataType = 'array';
    /**
     * @var
     */
    public $dimensionFilters;
    /**
     * @var string
     */
    protected $__dimensionsType = 'Google_SortedDimension';
    /**
     * @var string
     */
    protected $__dimensionsDataType = 'array';
    /**
     * @var
     */
    public $dimensions;
    /**
     * @var
     */
    public $metricNames;

    /**
     * @param Google_Activities $activities
     */
    public function setActivities(Google_Activities $activities)
    {
        $this->activities = $activities;
    }

    /**
     * @return mixed
     */
    public function getActivities()
    {
        return $this->activities;
    }

    /**
     * @param Google_CustomRichMediaEvents $customRichMediaEvents
     */
    public function setCustomRichMediaEvents(Google_CustomRichMediaEvents $customRichMediaEvents)
    {
        $this->customRichMediaEvents = $customRichMediaEvents;
    }

    /**
     * @return mixed
     */
    public function getCustomRichMediaEvents()
    {
        return $this->customRichMediaEvents;
    }

    /**
     * @param Google_DateRange $dateRange
     */
    public function setDateRange(Google_DateRange $dateRange)
    {
        $this->dateRange = $dateRange;
    }

    /**
     * @return mixed
     */
    public function getDateRange()
    {
        return $this->dateRange;
    }

    /**
     * @param $dimensionFilters
     * @throws Google_Exception
     */
    public function setDimensionFilters(/* array(Google_DimensionValue) */
        $dimensionFilters)
    {
        $this->assertIsArray($dimensionFilters, 'Google_DimensionValue', __METHOD__);
        $this->dimensionFilters = $dimensionFilters;
    }

    /**
     * @return mixed
     */
    public function getDimensionFilters()
    {
        return $this->dimensionFilters;
    }

    /**
     * @param $dimensions
     * @throws Google_Exception
     */
    public function setDimensions(/* array(Google_SortedDimension) */
        $dimensions)
    {
        $this->assertIsArray($dimensions, 'Google_SortedDimension', __METHOD__);
        $this->dimensions = $dimensions;
    }

    /**
     * @return mixed
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * @param $metricNames
     * @throws Google_Exception
     */
    public function setMetricNames(/* array(Google_string) */
        $metricNames)
    {
        $this->assertIsArray($metricNames, 'Google_string', __METHOD__);
        $this->metricNames = $metricNames;
    }

    /**
     * @return mixed
     */
    public function getMetricNames()
    {
        return $this->metricNames;
    }
}

/**
 * Class Google_ReportCrossDimensionReachCriteria
 */
class Google_ReportCrossDimensionReachCriteria extends Google_Model
{
    /**
     * @var string
     */
    protected $__breakdownType = 'Google_SortedDimension';
    /**
     * @var string
     */
    protected $__breakdownDataType = 'array';
    /**
     * @var
     */
    public $breakdown;
    /**
     * @var string
     */
    protected $__dateRangeType = 'Google_DateRange';
    /**
     * @var string
     */
    protected $__dateRangeDataType = '';
    /**
     * @var
     */
    public $dateRange;
    /**
     * @var
     */
    public $dimension;
    /**
     * @var string
     */
    protected $__dimensionFiltersType = 'Google_DimensionValue';
    /**
     * @var string
     */
    protected $__dimensionFiltersDataType = 'array';
    /**
     * @var
     */
    public $dimensionFilters;
    /**
     * @var
     */
    public $metricNames;
    /**
     * @var
     */
    public $overlapMetricNames;
    /**
     * @var
     */
    public $pivoted;

    /**
     * @param $breakdown
     * @throws Google_Exception
     */
    public function setBreakdown(/* array(Google_SortedDimension) */
        $breakdown)
    {
        $this->assertIsArray($breakdown, 'Google_SortedDimension', __METHOD__);
        $this->breakdown = $breakdown;
    }

    /**
     * @return mixed
     */
    public function getBreakdown()
    {
        return $this->breakdown;
    }

    /**
     * @param Google_DateRange $dateRange
     */
    public function setDateRange(Google_DateRange $dateRange)
    {
        $this->dateRange = $dateRange;
    }

    /**
     * @return mixed
     */
    public function getDateRange()
    {
        return $this->dateRange;
    }

    /**
     * @param $dimension
     */
    public function setDimension($dimension)
    {
        $this->dimension = $dimension;
    }

    /**
     * @return mixed
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * @param $dimensionFilters
     * @throws Google_Exception
     */
    public function setDimensionFilters(/* array(Google_DimensionValue) */
        $dimensionFilters)
    {
        $this->assertIsArray($dimensionFilters, 'Google_DimensionValue', __METHOD__);
        $this->dimensionFilters = $dimensionFilters;
    }

    /**
     * @return mixed
     */
    public function getDimensionFilters()
    {
        return $this->dimensionFilters;
    }

    /**
     * @param $metricNames
     * @throws Google_Exception
     */
    public function setMetricNames(/* array(Google_string) */
        $metricNames)
    {
        $this->assertIsArray($metricNames, 'Google_string', __METHOD__);
        $this->metricNames = $metricNames;
    }

    /**
     * @return mixed
     */
    public function getMetricNames()
    {
        return $this->metricNames;
    }

    /**
     * @param $overlapMetricNames
     * @throws Google_Exception
     */
    public function setOverlapMetricNames(/* array(Google_string) */
        $overlapMetricNames)
    {
        $this->assertIsArray($overlapMetricNames, 'Google_string', __METHOD__);
        $this->overlapMetricNames = $overlapMetricNames;
    }

    /**
     * @return mixed
     */
    public function getOverlapMetricNames()
    {
        return $this->overlapMetricNames;
    }

    /**
     * @param $pivoted
     */
    public function setPivoted($pivoted)
    {
        $this->pivoted = $pivoted;
    }

    /**
     * @return mixed
     */
    public function getPivoted()
    {
        return $this->pivoted;
    }
}

/**
 * Class Google_ReportDelivery
 */
class Google_ReportDelivery extends Google_Model
{
    /**
     * @var
     */
    public $emailOwner;
    /**
     * @var
     */
    public $emailOwnerDeliveryType;
    /**
     * @var
     */
    public $message;
    /**
     * @var string
     */
    protected $__recipientsType = 'Google_Recipient';
    /**
     * @var string
     */
    protected $__recipientsDataType = 'array';
    /**
     * @var
     */
    public $recipients;

    /**
     * @param $emailOwner
     */
    public function setEmailOwner($emailOwner)
    {
        $this->emailOwner = $emailOwner;
    }

    /**
     * @return mixed
     */
    public function getEmailOwner()
    {
        return $this->emailOwner;
    }

    /**
     * @param $emailOwnerDeliveryType
     */
    public function setEmailOwnerDeliveryType($emailOwnerDeliveryType)
    {
        $this->emailOwnerDeliveryType = $emailOwnerDeliveryType;
    }

    /**
     * @return mixed
     */
    public function getEmailOwnerDeliveryType()
    {
        return $this->emailOwnerDeliveryType;
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
     * @param $recipients
     * @throws Google_Exception
     */
    public function setRecipients(/* array(Google_Recipient) */
        $recipients)
    {
        $this->assertIsArray($recipients, 'Google_Recipient', __METHOD__);
        $this->recipients = $recipients;
    }

    /**
     * @return mixed
     */
    public function getRecipients()
    {
        return $this->recipients;
    }
}

/**
 * Class Google_ReportFloodlightCriteria
 */
class Google_ReportFloodlightCriteria extends Google_Model
{
    /**
     * @var string
     */
    protected $__customRichMediaEventsType = 'Google_DimensionValue';
    /**
     * @var string
     */
    protected $__customRichMediaEventsDataType = 'array';
    /**
     * @var
     */
    public $customRichMediaEvents;
    /**
     * @var string
     */
    protected $__dateRangeType = 'Google_DateRange';
    /**
     * @var string
     */
    protected $__dateRangeDataType = '';
    /**
     * @var
     */
    public $dateRange;
    /**
     * @var string
     */
    protected $__dimensionFiltersType = 'Google_DimensionValue';
    /**
     * @var string
     */
    protected $__dimensionFiltersDataType = 'array';
    /**
     * @var
     */
    public $dimensionFilters;
    /**
     * @var string
     */
    protected $__dimensionsType = 'Google_SortedDimension';
    /**
     * @var string
     */
    protected $__dimensionsDataType = 'array';
    /**
     * @var
     */
    public $dimensions;
    /**
     * @var string
     */
    protected $__floodlightConfigIdType = 'Google_DimensionValue';
    /**
     * @var string
     */
    protected $__floodlightConfigIdDataType = '';
    /**
     * @var
     */
    public $floodlightConfigId;
    /**
     * @var
     */
    public $metricNames;
    /**
     * @var string
     */
    protected $__reportPropertiesType = 'Google_ReportFloodlightCriteriaReportProperties';
    /**
     * @var string
     */
    protected $__reportPropertiesDataType = '';
    /**
     * @var
     */
    public $reportProperties;

    /**
     * @param $customRichMediaEvents
     * @throws Google_Exception
     */
    public function setCustomRichMediaEvents(/* array(Google_DimensionValue) */
        $customRichMediaEvents)
    {
        $this->assertIsArray($customRichMediaEvents, 'Google_DimensionValue', __METHOD__);
        $this->customRichMediaEvents = $customRichMediaEvents;
    }

    /**
     * @return mixed
     */
    public function getCustomRichMediaEvents()
    {
        return $this->customRichMediaEvents;
    }

    /**
     * @param Google_DateRange $dateRange
     */
    public function setDateRange(Google_DateRange $dateRange)
    {
        $this->dateRange = $dateRange;
    }

    /**
     * @return mixed
     */
    public function getDateRange()
    {
        return $this->dateRange;
    }

    /**
     * @param $dimensionFilters
     * @throws Google_Exception
     */
    public function setDimensionFilters(/* array(Google_DimensionValue) */
        $dimensionFilters)
    {
        $this->assertIsArray($dimensionFilters, 'Google_DimensionValue', __METHOD__);
        $this->dimensionFilters = $dimensionFilters;
    }

    /**
     * @return mixed
     */
    public function getDimensionFilters()
    {
        return $this->dimensionFilters;
    }

    /**
     * @param $dimensions
     * @throws Google_Exception
     */
    public function setDimensions(/* array(Google_SortedDimension) */
        $dimensions)
    {
        $this->assertIsArray($dimensions, 'Google_SortedDimension', __METHOD__);
        $this->dimensions = $dimensions;
    }

    /**
     * @return mixed
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * @param Google_DimensionValue $floodlightConfigId
     */
    public function setFloodlightConfigId(Google_DimensionValue $floodlightConfigId)
    {
        $this->floodlightConfigId = $floodlightConfigId;
    }

    /**
     * @return mixed
     */
    public function getFloodlightConfigId()
    {
        return $this->floodlightConfigId;
    }

    /**
     * @param $metricNames
     * @throws Google_Exception
     */
    public function setMetricNames(/* array(Google_string) */
        $metricNames)
    {
        $this->assertIsArray($metricNames, 'Google_string', __METHOD__);
        $this->metricNames = $metricNames;
    }

    /**
     * @return mixed
     */
    public function getMetricNames()
    {
        return $this->metricNames;
    }

    /**
     * @param Google_ReportFloodlightCriteriaReportProperties $reportProperties
     */
    public function setReportProperties(Google_ReportFloodlightCriteriaReportProperties $reportProperties)
    {
        $this->reportProperties = $reportProperties;
    }

    /**
     * @return mixed
     */
    public function getReportProperties()
    {
        return $this->reportProperties;
    }
}

/**
 * Class Google_ReportFloodlightCriteriaReportProperties
 */
class Google_ReportFloodlightCriteriaReportProperties extends Google_Model
{
    /**
     * @var
     */
    public $includeAttributedIPConversions;
    /**
     * @var
     */
    public $includeUnattributedCookieConversions;
    /**
     * @var
     */
    public $includeUnattributedIPConversions;

    /**
     * @param $includeAttributedIPConversions
     */
    public function setIncludeAttributedIPConversions($includeAttributedIPConversions)
    {
        $this->includeAttributedIPConversions = $includeAttributedIPConversions;
    }

    /**
     * @return mixed
     */
    public function getIncludeAttributedIPConversions()
    {
        return $this->includeAttributedIPConversions;
    }

    /**
     * @param $includeUnattributedCookieConversions
     */
    public function setIncludeUnattributedCookieConversions($includeUnattributedCookieConversions)
    {
        $this->includeUnattributedCookieConversions = $includeUnattributedCookieConversions;
    }

    /**
     * @return mixed
     */
    public function getIncludeUnattributedCookieConversions()
    {
        return $this->includeUnattributedCookieConversions;
    }

    /**
     * @param $includeUnattributedIPConversions
     */
    public function setIncludeUnattributedIPConversions($includeUnattributedIPConversions)
    {
        $this->includeUnattributedIPConversions = $includeUnattributedIPConversions;
    }

    /**
     * @return mixed
     */
    public function getIncludeUnattributedIPConversions()
    {
        return $this->includeUnattributedIPConversions;
    }
}

/**
 * Class Google_ReportList
 */
class Google_ReportList extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Report';
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
    public function setItems(/* array(Google_Report) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Report', __METHOD__);
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
 * Class Google_ReportPathToConversionCriteria
 */
class Google_ReportPathToConversionCriteria extends Google_Model
{
    /**
     * @var string
     */
    protected $__activityFiltersType = 'Google_DimensionValue';
    /**
     * @var string
     */
    protected $__activityFiltersDataType = 'array';
    /**
     * @var
     */
    public $activityFilters;
    /**
     * @var string
     */
    protected $__conversionDimensionsType = 'Google_SortedDimension';
    /**
     * @var string
     */
    protected $__conversionDimensionsDataType = 'array';
    /**
     * @var
     */
    public $conversionDimensions;
    /**
     * @var string
     */
    protected $__customFloodlightVariablesType = 'Google_SortedDimension';
    /**
     * @var string
     */
    protected $__customFloodlightVariablesDataType = 'array';
    /**
     * @var
     */
    public $customFloodlightVariables;
    /**
     * @var string
     */
    protected $__customRichMediaEventsType = 'Google_DimensionValue';
    /**
     * @var string
     */
    protected $__customRichMediaEventsDataType = 'array';
    /**
     * @var
     */
    public $customRichMediaEvents;
    /**
     * @var string
     */
    protected $__dateRangeType = 'Google_DateRange';
    /**
     * @var string
     */
    protected $__dateRangeDataType = '';
    /**
     * @var
     */
    public $dateRange;
    /**
     * @var string
     */
    protected $__floodlightConfigIdType = 'Google_DimensionValue';
    /**
     * @var string
     */
    protected $__floodlightConfigIdDataType = '';
    /**
     * @var
     */
    public $floodlightConfigId;
    /**
     * @var
     */
    public $metricNames;
    /**
     * @var string
     */
    protected $__perInteractionDimensionsType = 'Google_SortedDimension';
    /**
     * @var string
     */
    protected $__perInteractionDimensionsDataType = 'array';
    /**
     * @var
     */
    public $perInteractionDimensions;
    /**
     * @var string
     */
    protected $__reportPropertiesType = 'Google_ReportPathToConversionCriteriaReportProperties';
    /**
     * @var string
     */
    protected $__reportPropertiesDataType = '';
    /**
     * @var
     */
    public $reportProperties;

    /**
     * @param $activityFilters
     * @throws Google_Exception
     */
    public function setActivityFilters(/* array(Google_DimensionValue) */
        $activityFilters)
    {
        $this->assertIsArray($activityFilters, 'Google_DimensionValue', __METHOD__);
        $this->activityFilters = $activityFilters;
    }

    /**
     * @return mixed
     */
    public function getActivityFilters()
    {
        return $this->activityFilters;
    }

    /**
     * @param $conversionDimensions
     * @throws Google_Exception
     */
    public function setConversionDimensions(/* array(Google_SortedDimension) */
        $conversionDimensions)
    {
        $this->assertIsArray($conversionDimensions, 'Google_SortedDimension', __METHOD__);
        $this->conversionDimensions = $conversionDimensions;
    }

    /**
     * @return mixed
     */
    public function getConversionDimensions()
    {
        return $this->conversionDimensions;
    }

    /**
     * @param $customFloodlightVariables
     * @throws Google_Exception
     */
    public function setCustomFloodlightVariables(/* array(Google_SortedDimension) */
        $customFloodlightVariables)
    {
        $this->assertIsArray($customFloodlightVariables, 'Google_SortedDimension', __METHOD__);
        $this->customFloodlightVariables = $customFloodlightVariables;
    }

    /**
     * @return mixed
     */
    public function getCustomFloodlightVariables()
    {
        return $this->customFloodlightVariables;
    }

    /**
     * @param $customRichMediaEvents
     * @throws Google_Exception
     */
    public function setCustomRichMediaEvents(/* array(Google_DimensionValue) */
        $customRichMediaEvents)
    {
        $this->assertIsArray($customRichMediaEvents, 'Google_DimensionValue', __METHOD__);
        $this->customRichMediaEvents = $customRichMediaEvents;
    }

    /**
     * @return mixed
     */
    public function getCustomRichMediaEvents()
    {
        return $this->customRichMediaEvents;
    }

    /**
     * @param Google_DateRange $dateRange
     */
    public function setDateRange(Google_DateRange $dateRange)
    {
        $this->dateRange = $dateRange;
    }

    /**
     * @return mixed
     */
    public function getDateRange()
    {
        return $this->dateRange;
    }

    /**
     * @param Google_DimensionValue $floodlightConfigId
     */
    public function setFloodlightConfigId(Google_DimensionValue $floodlightConfigId)
    {
        $this->floodlightConfigId = $floodlightConfigId;
    }

    /**
     * @return mixed
     */
    public function getFloodlightConfigId()
    {
        return $this->floodlightConfigId;
    }

    /**
     * @param $metricNames
     * @throws Google_Exception
     */
    public function setMetricNames(/* array(Google_string) */
        $metricNames)
    {
        $this->assertIsArray($metricNames, 'Google_string', __METHOD__);
        $this->metricNames = $metricNames;
    }

    /**
     * @return mixed
     */
    public function getMetricNames()
    {
        return $this->metricNames;
    }

    /**
     * @param $perInteractionDimensions
     * @throws Google_Exception
     */
    public function setPerInteractionDimensions(/* array(Google_SortedDimension) */
        $perInteractionDimensions)
    {
        $this->assertIsArray($perInteractionDimensions, 'Google_SortedDimension', __METHOD__);
        $this->perInteractionDimensions = $perInteractionDimensions;
    }

    /**
     * @return mixed
     */
    public function getPerInteractionDimensions()
    {
        return $this->perInteractionDimensions;
    }

    /**
     * @param Google_ReportPathToConversionCriteriaReportProperties $reportProperties
     */
    public function setReportProperties(Google_ReportPathToConversionCriteriaReportProperties $reportProperties)
    {
        $this->reportProperties = $reportProperties;
    }

    /**
     * @return mixed
     */
    public function getReportProperties()
    {
        return $this->reportProperties;
    }
}

/**
 * Class Google_ReportPathToConversionCriteriaReportProperties
 */
class Google_ReportPathToConversionCriteriaReportProperties extends Google_Model
{
    /**
     * @var
     */
    public $clicksLookbackWindow;
    /**
     * @var
     */
    public $impressionsLookbackWindow;
    /**
     * @var
     */
    public $includeAttributedIPConversions;
    /**
     * @var
     */
    public $includeUnattributedCookieConversions;
    /**
     * @var
     */
    public $includeUnattributedIPConversions;
    /**
     * @var
     */
    public $maximumClickInteractions;
    /**
     * @var
     */
    public $maximumImpressionInteractions;
    /**
     * @var
     */
    public $maximumInteractionGap;
    /**
     * @var
     */
    public $pivotOnInteractionPath;

    /**
     * @param $clicksLookbackWindow
     */
    public function setClicksLookbackWindow($clicksLookbackWindow)
    {
        $this->clicksLookbackWindow = $clicksLookbackWindow;
    }

    /**
     * @return mixed
     */
    public function getClicksLookbackWindow()
    {
        return $this->clicksLookbackWindow;
    }

    /**
     * @param $impressionsLookbackWindow
     */
    public function setImpressionsLookbackWindow($impressionsLookbackWindow)
    {
        $this->impressionsLookbackWindow = $impressionsLookbackWindow;
    }

    /**
     * @return mixed
     */
    public function getImpressionsLookbackWindow()
    {
        return $this->impressionsLookbackWindow;
    }

    /**
     * @param $includeAttributedIPConversions
     */
    public function setIncludeAttributedIPConversions($includeAttributedIPConversions)
    {
        $this->includeAttributedIPConversions = $includeAttributedIPConversions;
    }

    /**
     * @return mixed
     */
    public function getIncludeAttributedIPConversions()
    {
        return $this->includeAttributedIPConversions;
    }

    /**
     * @param $includeUnattributedCookieConversions
     */
    public function setIncludeUnattributedCookieConversions($includeUnattributedCookieConversions)
    {
        $this->includeUnattributedCookieConversions = $includeUnattributedCookieConversions;
    }

    /**
     * @return mixed
     */
    public function getIncludeUnattributedCookieConversions()
    {
        return $this->includeUnattributedCookieConversions;
    }

    /**
     * @param $includeUnattributedIPConversions
     */
    public function setIncludeUnattributedIPConversions($includeUnattributedIPConversions)
    {
        $this->includeUnattributedIPConversions = $includeUnattributedIPConversions;
    }

    /**
     * @return mixed
     */
    public function getIncludeUnattributedIPConversions()
    {
        return $this->includeUnattributedIPConversions;
    }

    /**
     * @param $maximumClickInteractions
     */
    public function setMaximumClickInteractions($maximumClickInteractions)
    {
        $this->maximumClickInteractions = $maximumClickInteractions;
    }

    /**
     * @return mixed
     */
    public function getMaximumClickInteractions()
    {
        return $this->maximumClickInteractions;
    }

    /**
     * @param $maximumImpressionInteractions
     */
    public function setMaximumImpressionInteractions($maximumImpressionInteractions)
    {
        $this->maximumImpressionInteractions = $maximumImpressionInteractions;
    }

    /**
     * @return mixed
     */
    public function getMaximumImpressionInteractions()
    {
        return $this->maximumImpressionInteractions;
    }

    /**
     * @param $maximumInteractionGap
     */
    public function setMaximumInteractionGap($maximumInteractionGap)
    {
        $this->maximumInteractionGap = $maximumInteractionGap;
    }

    /**
     * @return mixed
     */
    public function getMaximumInteractionGap()
    {
        return $this->maximumInteractionGap;
    }

    /**
     * @param $pivotOnInteractionPath
     */
    public function setPivotOnInteractionPath($pivotOnInteractionPath)
    {
        $this->pivotOnInteractionPath = $pivotOnInteractionPath;
    }

    /**
     * @return mixed
     */
    public function getPivotOnInteractionPath()
    {
        return $this->pivotOnInteractionPath;
    }
}

/**
 * Class Google_ReportReachCriteria
 */
class Google_ReportReachCriteria extends Google_Model
{
    /**
     * @var string
     */
    protected $__activitiesType = 'Google_Activities';
    /**
     * @var string
     */
    protected $__activitiesDataType = '';
    /**
     * @var
     */
    public $activities;
    /**
     * @var string
     */
    protected $__customRichMediaEventsType = 'Google_CustomRichMediaEvents';
    /**
     * @var string
     */
    protected $__customRichMediaEventsDataType = '';
    /**
     * @var
     */
    public $customRichMediaEvents;
    /**
     * @var string
     */
    protected $__dateRangeType = 'Google_DateRange';
    /**
     * @var string
     */
    protected $__dateRangeDataType = '';
    /**
     * @var
     */
    public $dateRange;
    /**
     * @var string
     */
    protected $__dimensionFiltersType = 'Google_DimensionValue';
    /**
     * @var string
     */
    protected $__dimensionFiltersDataType = 'array';
    /**
     * @var
     */
    public $dimensionFilters;
    /**
     * @var string
     */
    protected $__dimensionsType = 'Google_SortedDimension';
    /**
     * @var string
     */
    protected $__dimensionsDataType = 'array';
    /**
     * @var
     */
    public $dimensions;
    /**
     * @var
     */
    public $metricNames;
    /**
     * @var
     */
    public $reachByFrequencyMetricNames;

    /**
     * @param Google_Activities $activities
     */
    public function setActivities(Google_Activities $activities)
    {
        $this->activities = $activities;
    }

    /**
     * @return mixed
     */
    public function getActivities()
    {
        return $this->activities;
    }

    /**
     * @param Google_CustomRichMediaEvents $customRichMediaEvents
     */
    public function setCustomRichMediaEvents(Google_CustomRichMediaEvents $customRichMediaEvents)
    {
        $this->customRichMediaEvents = $customRichMediaEvents;
    }

    /**
     * @return mixed
     */
    public function getCustomRichMediaEvents()
    {
        return $this->customRichMediaEvents;
    }

    /**
     * @param Google_DateRange $dateRange
     */
    public function setDateRange(Google_DateRange $dateRange)
    {
        $this->dateRange = $dateRange;
    }

    /**
     * @return mixed
     */
    public function getDateRange()
    {
        return $this->dateRange;
    }

    /**
     * @param $dimensionFilters
     * @throws Google_Exception
     */
    public function setDimensionFilters(/* array(Google_DimensionValue) */
        $dimensionFilters)
    {
        $this->assertIsArray($dimensionFilters, 'Google_DimensionValue', __METHOD__);
        $this->dimensionFilters = $dimensionFilters;
    }

    /**
     * @return mixed
     */
    public function getDimensionFilters()
    {
        return $this->dimensionFilters;
    }

    /**
     * @param $dimensions
     * @throws Google_Exception
     */
    public function setDimensions(/* array(Google_SortedDimension) */
        $dimensions)
    {
        $this->assertIsArray($dimensions, 'Google_SortedDimension', __METHOD__);
        $this->dimensions = $dimensions;
    }

    /**
     * @return mixed
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * @param $metricNames
     * @throws Google_Exception
     */
    public function setMetricNames(/* array(Google_string) */
        $metricNames)
    {
        $this->assertIsArray($metricNames, 'Google_string', __METHOD__);
        $this->metricNames = $metricNames;
    }

    /**
     * @return mixed
     */
    public function getMetricNames()
    {
        return $this->metricNames;
    }

    /**
     * @param $reachByFrequencyMetricNames
     * @throws Google_Exception
     */
    public function setReachByFrequencyMetricNames(/* array(Google_string) */
        $reachByFrequencyMetricNames)
    {
        $this->assertIsArray($reachByFrequencyMetricNames, 'Google_string', __METHOD__);
        $this->reachByFrequencyMetricNames = $reachByFrequencyMetricNames;
    }

    /**
     * @return mixed
     */
    public function getReachByFrequencyMetricNames()
    {
        return $this->reachByFrequencyMetricNames;
    }
}

/**
 * Class Google_ReportSchedule
 */
class Google_ReportSchedule extends Google_Model
{
    /**
     * @var
     */
    public $active;
    /**
     * @var
     */
    public $every;
    /**
     * @var
     */
    public $expirationDate;
    /**
     * @var
     */
    public $repeats;
    /**
     * @var
     */
    public $repeatsOnWeekDays;
    /**
     * @var
     */
    public $runsOnDayOfMonth;
    /**
     * @var
     */
    public $startDate;

    /**
     * @param $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param $every
     */
    public function setEvery($every)
    {
        $this->every = $every;
    }

    /**
     * @return mixed
     */
    public function getEvery()
    {
        return $this->every;
    }

    /**
     * @param $expirationDate
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }

    /**
     * @return mixed
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param $repeats
     */
    public function setRepeats($repeats)
    {
        $this->repeats = $repeats;
    }

    /**
     * @return mixed
     */
    public function getRepeats()
    {
        return $this->repeats;
    }

    /**
     * @param $repeatsOnWeekDays
     * @throws Google_Exception
     */
    public function setRepeatsOnWeekDays(/* array(Google_string) */
        $repeatsOnWeekDays)
    {
        $this->assertIsArray($repeatsOnWeekDays, 'Google_string', __METHOD__);
        $this->repeatsOnWeekDays = $repeatsOnWeekDays;
    }

    /**
     * @return mixed
     */
    public function getRepeatsOnWeekDays()
    {
        return $this->repeatsOnWeekDays;
    }

    /**
     * @param $runsOnDayOfMonth
     */
    public function setRunsOnDayOfMonth($runsOnDayOfMonth)
    {
        $this->runsOnDayOfMonth = $runsOnDayOfMonth;
    }

    /**
     * @return mixed
     */
    public function getRunsOnDayOfMonth()
    {
        return $this->runsOnDayOfMonth;
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
}

/**
 * Class Google_SortedDimension
 */
class Google_SortedDimension extends Google_Model
{
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
    public $sortOrder;

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
     * @param $sortOrder
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }

    /**
     * @return mixed
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }
}

/**
 * Class Google_UserProfile
 */
class Google_UserProfile extends Google_Model
{
    /**
     * @var
     */
    public $accountId;
    /**
     * @var
     */
    public $accountName;
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
    public $profileId;
    /**
     * @var
     */
    public $subAccountId;
    /**
     * @var
     */
    public $subAccountName;
    /**
     * @var
     */
    public $userName;

    /**
     * @param $accountId
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    /**
     * @return mixed
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param $accountName
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
    }

    /**
     * @return mixed
     */
    public function getAccountName()
    {
        return $this->accountName;
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
     * @param $subAccountId
     */
    public function setSubAccountId($subAccountId)
    {
        $this->subAccountId = $subAccountId;
    }

    /**
     * @return mixed
     */
    public function getSubAccountId()
    {
        return $this->subAccountId;
    }

    /**
     * @param $subAccountName
     */
    public function setSubAccountName($subAccountName)
    {
        $this->subAccountName = $subAccountName;
    }

    /**
     * @return mixed
     */
    public function getSubAccountName()
    {
        return $this->subAccountName;
    }

    /**
     * @param $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }
}

/**
 * Class Google_UserProfileList
 */
class Google_UserProfileList extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_UserProfile';
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
    public function setItems(/* array(Google_UserProfile) */
        $items)
    {
        $this->assertIsArray($items, 'Google_UserProfile', __METHOD__);
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
