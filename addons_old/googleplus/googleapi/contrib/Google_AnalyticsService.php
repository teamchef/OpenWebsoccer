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
 * The "data" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_AnalyticsService(...);
 *   $data = $analyticsService->data;
 *  </code>
 */
class Google_DataServiceResource extends Google_ServiceResource
{

}

/**
 * The "ga" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_AnalyticsService(...);
 *   $ga = $analyticsService->ga;
 *  </code>
 */
class Google_DataGaServiceResource extends Google_ServiceResource
{

    /**
     * Returns Analytics data for a view (profile). (ga.get)
     *
     * @param string $ids Unique table ID for retrieving Analytics data. Table ID is of the form ga:XXXX, where XXXX is the Analytics view (profile) ID.
     * @param string $start_date Start date for fetching Analytics data. All requests should specify a start date formatted as YYYY-MM-DD.
     * @param string $end_date End date for fetching Analytics data. All requests should specify an end date formatted as YYYY-MM-DD.
     * @param string $metrics A comma-separated list of Analytics metrics. E.g., 'ga:visits,ga:pageviews'. At least one metric must be specified.
     * @param array $optParams Optional parameters.
     * @return Google_GaData
     * @throws Google_Exception
     * @opt_param string dimensions A comma-separated list of Analytics dimensions. E.g., 'ga:browser,ga:city'.
     * @opt_param string filters A comma-separated list of dimension or metric filters to be applied to Analytics data.
     * @opt_param int max-results The maximum number of entries to include in this feed.
     * @opt_param string segment An Analytics advanced segment to be applied to data.
     * @opt_param string sort A comma-separated list of dimensions or metrics that determine the sort order for Analytics data.
     * @opt_param int start-index An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     */
    public function get($ids, $start_date, $end_date, $metrics, $optParams = [])
    {
        $params = ['ids' => $ids, 'start-date' => $start_date, 'end-date' => $end_date, 'metrics' => $metrics];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_GaData($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "mcf" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_AnalyticsService(...);
 *   $mcf = $analyticsService->mcf;
 *  </code>
 */
class Google_DataMcfServiceResource extends Google_ServiceResource
{

    /**
     * Returns Analytics Multi-Channel Funnels data for a view (profile). (mcf.get)
     *
     * @param string $ids Unique table ID for retrieving Analytics data. Table ID is of the form ga:XXXX, where XXXX is the Analytics view (profile) ID.
     * @param string $start_date Start date for fetching Analytics data. All requests should specify a start date formatted as YYYY-MM-DD.
     * @param string $end_date End date for fetching Analytics data. All requests should specify an end date formatted as YYYY-MM-DD.
     * @param string $metrics A comma-separated list of Multi-Channel Funnels metrics. E.g., 'mcf:totalConversions,mcf:totalConversionValue'. At least one metric must be specified.
     * @param array $optParams Optional parameters.
     * @return Google_McfData
     * @throws Google_Exception
     * @opt_param string dimensions A comma-separated list of Multi-Channel Funnels dimensions. E.g., 'mcf:source,mcf:medium'.
     * @opt_param string filters A comma-separated list of dimension or metric filters to be applied to the Analytics data.
     * @opt_param int max-results The maximum number of entries to include in this feed.
     * @opt_param string sort A comma-separated list of dimensions or metrics that determine the sort order for the Analytics data.
     * @opt_param int start-index An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     */
    public function get($ids, $start_date, $end_date, $metrics, $optParams = [])
    {
        $params = ['ids' => $ids, 'start-date' => $start_date, 'end-date' => $end_date, 'metrics' => $metrics];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_McfData($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "realtime" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_AnalyticsService(...);
 *   $realtime = $analyticsService->realtime;
 *  </code>
 */
class Google_DataRealtimeServiceResource extends Google_ServiceResource
{

    /**
     * Returns real-time data for a view (profile). (realtime.get)
     *
     * @param string $ids Unique table ID for retrieving Analytics data. Table ID is of the form ga:XXXX, where XXXX is the Analytics view (profile) ID.
     * @param string $metrics A comma-separated list of Analytics metrics. E.g., 'ga:visits,ga:pageviews'. At least one metric must be specified.
     * @param array $optParams Optional parameters.
     * @return Google_RealtimeData
     * @throws Google_Exception
     * @opt_param string dimensions A comma-separated list of real-time dimensions. E.g., 'ga:medium,ga:city'.
     * @opt_param string filters A comma-separated list of dimension or metric filters to be applied to real-time data.
     * @opt_param int max-results The maximum number of entries to include in this feed.
     * @opt_param string sort A comma-separated list of dimensions or metrics that determine the sort order for real-time data.
     */
    public function get($ids, $metrics, $optParams = [])
    {
        $params = ['ids' => $ids, 'metrics' => $metrics];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_RealtimeData($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "management" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_AnalyticsService(...);
 *   $management = $analyticsService->management;
 *  </code>
 */
class Google_ManagementServiceResource extends Google_ServiceResource
{

}

/**
 * The "accounts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_AnalyticsService(...);
 *   $accounts = $analyticsService->accounts;
 *  </code>
 */
class Google_ManagementAccountsServiceResource extends Google_ServiceResource
{

    /**
     * Lists all accounts to which the user has access. (accounts.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Accounts
     * @throws Google_Exception
     * @opt_param int max-results The maximum number of accounts to include in this response.
     * @opt_param int start-index An index of the first account to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     */
    public function listManagementAccounts($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Accounts($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "customDataSources" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_AnalyticsService(...);
 *   $customDataSources = $analyticsService->customDataSources;
 *  </code>
 */
class Google_ManagementCustomDataSourcesServiceResource extends Google_ServiceResource
{

    /**
     * List custom data sources to which the user has access.
     * (customDataSources.list)
     *
     * @param string $accountId Account Id for the custom data sources to retrieve.
     * @param string $webPropertyId Web property Id for the custom data sources to retrieve.
     * @param array $optParams Optional parameters.
     * @return Google_CustomDataSources
     * @throws Google_Exception
     * @opt_param int max-results The maximum number of custom data sources to include in this response.
     * @opt_param int start-index A 1-based index of the first custom data source to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     */
    public function listManagementCustomDataSources($accountId, $webPropertyId, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'webPropertyId' => $webPropertyId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_CustomDataSources($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "dailyUploads" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_AnalyticsService(...);
 *   $dailyUploads = $analyticsService->dailyUploads;
 *  </code>
 */
class Google_ManagementDailyUploadsServiceResource extends Google_ServiceResource
{

    /**
     * Delete uploaded data for the given date. (dailyUploads.delete)
     *
     * @param string $accountId Account Id associated with daily upload delete.
     * @param string $webPropertyId Web property Id associated with daily upload delete.
     * @param string $customDataSourceId Custom data source Id associated with daily upload delete.
     * @param string $date Date for which data is to be deleted. Date should be formatted as YYYY-MM-DD.
     * @param string $type Type of data for this delete.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($accountId, $webPropertyId, $customDataSourceId, $date, $type, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'customDataSourceId' => $customDataSourceId, 'date' => $date, 'type' => $type];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * List daily uploads to which the user has access. (dailyUploads.list)
     *
     * @param string $accountId Account Id for the daily uploads to retrieve.
     * @param string $webPropertyId Web property Id for the daily uploads to retrieve.
     * @param string $customDataSourceId Custom data source Id for daily uploads to retrieve.
     * @param string $start_date Start date of the form YYYY-MM-DD.
     * @param string $end_date End date of the form YYYY-MM-DD.
     * @param array $optParams Optional parameters.
     * @return Google_DailyUploads
     * @throws Google_Exception
     * @opt_param int max-results The maximum number of custom data sources to include in this response.
     * @opt_param int start-index A 1-based index of the first daily upload to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     */
    public function listManagementDailyUploads($accountId, $webPropertyId, $customDataSourceId, $start_date, $end_date, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'customDataSourceId' => $customDataSourceId, 'start-date' => $start_date, 'end-date' => $end_date];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_DailyUploads($data);
        } else {
            return $data;
        }
    }

    /**
     * Update/Overwrite data for a custom data source. (dailyUploads.upload)
     *
     * @param string $accountId Account Id associated with daily upload.
     * @param string $webPropertyId Web property Id associated with daily upload.
     * @param string $customDataSourceId Custom data source Id to which the data being uploaded belongs.
     * @param string $date Date for which data is uploaded. Date should be formatted as YYYY-MM-DD.
     * @param int $appendNumber Append number for this upload indexed from 1.
     * @param string $type Type of data for this upload.
     * @param array $optParams Optional parameters.
     * @return Google_DailyUploadAppend
     * @throws Google_Exception
     * @opt_param bool reset Reset/Overwrite all previous appends for this date and start over with this file as the first upload.
     */
    public function upload($accountId, $webPropertyId, $customDataSourceId, $date, $appendNumber, $type, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'customDataSourceId' => $customDataSourceId, 'date' => $date, 'appendNumber' => $appendNumber, 'type' => $type];
        $params = array_merge($params, $optParams);
        $data = $this->__call('upload', [$params]);
        if ($this->useObjects()) {
            return new Google_DailyUploadAppend($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "experiments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_AnalyticsService(...);
 *   $experiments = $analyticsService->experiments;
 *  </code>
 */
class Google_ManagementExperimentsServiceResource extends Google_ServiceResource
{

    /**
     * Delete an experiment. (experiments.delete)
     *
     * @param string $accountId Account ID to which the experiment belongs
     * @param string $webPropertyId Web property ID to which the experiment belongs
     * @param string $profileId View (Profile) ID to which the experiment belongs
     * @param string $experimentId ID of the experiment to delete
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($accountId, $webPropertyId, $profileId, $experimentId, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'experimentId' => $experimentId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Returns an experiment to which the user has access. (experiments.get)
     *
     * @param string $accountId Account ID to retrieve the experiment for.
     * @param string $webPropertyId Web property ID to retrieve the experiment for.
     * @param string $profileId View (Profile) ID to retrieve the experiment for.
     * @param string $experimentId Experiment ID to retrieve the experiment for.
     * @param array $optParams Optional parameters.
     * @return Google_Experiment
     * @throws Google_Exception
     */
    public function get($accountId, $webPropertyId, $profileId, $experimentId, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'experimentId' => $experimentId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Experiment($data);
        } else {
            return $data;
        }
    }

    /**
     * Create a new experiment. (experiments.insert)
     *
     * @param string $accountId Account ID to create the experiment for.
     * @param string $webPropertyId Web property ID to create the experiment for.
     * @param string $profileId View (Profile) ID to create the experiment for.
     * @param Google_Experiment $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Experiment
     * @throws Google_Exception
     */
    public function insert($accountId, $webPropertyId, $profileId, Google_Experiment $postBody, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Experiment($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists experiments to which the user has access. (experiments.list)
     *
     * @param string $accountId Account ID to retrieve experiments for.
     * @param string $webPropertyId Web property ID to retrieve experiments for.
     * @param string $profileId View (Profile) ID to retrieve experiments for.
     * @param array $optParams Optional parameters.
     * @return Google_Experiments
     * @throws Google_Exception
     * @opt_param int max-results The maximum number of experiments to include in this response.
     * @opt_param int start-index An index of the first experiment to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     */
    public function listManagementExperiments($accountId, $webPropertyId, $profileId, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Experiments($data);
        } else {
            return $data;
        }
    }

    /**
     * Update an existing experiment. This method supports patch semantics.
     * (experiments.patch)
     *
     * @param string $accountId Account ID of the experiment to update.
     * @param string $webPropertyId Web property ID of the experiment to update.
     * @param string $profileId View (Profile) ID of the experiment to update.
     * @param string $experimentId Experiment ID of the experiment to update.
     * @param Google_Experiment $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Experiment
     * @throws Google_Exception
     */
    public function patch($accountId, $webPropertyId, $profileId, $experimentId, Google_Experiment $postBody, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'experimentId' => $experimentId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Experiment($data);
        } else {
            return $data;
        }
    }

    /**
     * Update an existing experiment. (experiments.update)
     *
     * @param string $accountId Account ID of the experiment to update.
     * @param string $webPropertyId Web property ID of the experiment to update.
     * @param string $profileId View (Profile) ID of the experiment to update.
     * @param string $experimentId Experiment ID of the experiment to update.
     * @param Google_Experiment $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Experiment
     * @throws Google_Exception
     */
    public function update($accountId, $webPropertyId, $profileId, $experimentId, Google_Experiment $postBody, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'experimentId' => $experimentId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Experiment($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "goals" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_AnalyticsService(...);
 *   $goals = $analyticsService->goals;
 *  </code>
 */
class Google_ManagementGoalsServiceResource extends Google_ServiceResource
{

    /**
     * Lists goals to which the user has access. (goals.list)
     *
     * @param string $accountId Account ID to retrieve goals for. Can either be a specific account ID or '~all', which refers to all the accounts that user has access to.
     * @param string $webPropertyId Web property ID to retrieve goals for. Can either be a specific web property ID or '~all', which refers to all the web properties that user has access to.
     * @param string $profileId View (Profile) ID to retrieve goals for. Can either be a specific view (profile) ID or '~all', which refers to all the views (profiles) that user has access to.
     * @param array $optParams Optional parameters.
     * @return Google_Goals
     * @throws Google_Exception
     * @opt_param int max-results The maximum number of goals to include in this response.
     * @opt_param int start-index An index of the first goal to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     */
    public function listManagementGoals($accountId, $webPropertyId, $profileId, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Goals($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "profiles" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_AnalyticsService(...);
 *   $profiles = $analyticsService->profiles;
 *  </code>
 */
class Google_ManagementProfilesServiceResource extends Google_ServiceResource
{

    /**
     * Lists views (profiles) to which the user has access. (profiles.list)
     *
     * @param string $accountId Account ID for the view (profiles) to retrieve. Can either be a specific account ID or '~all', which refers to all the accounts to which the user has access.
     * @param string $webPropertyId Web property ID for the views (profiles) to retrieve. Can either be a specific web property ID or '~all', which refers to all the web properties to which the user has access.
     * @param array $optParams Optional parameters.
     * @return Google_Profiles
     * @throws Google_Exception
     * @opt_param int max-results The maximum number of views (profiles) to include in this response.
     * @opt_param int start-index An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     */
    public function listManagementProfiles($accountId, $webPropertyId, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'webPropertyId' => $webPropertyId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Profiles($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "segments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_AnalyticsService(...);
 *   $segments = $analyticsService->segments;
 *  </code>
 */
class Google_ManagementSegmentsServiceResource extends Google_ServiceResource
{

    /**
     * Lists advanced segments to which the user has access. (segments.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Segments
     * @throws Google_Exception
     * @opt_param int max-results The maximum number of advanced segments to include in this response.
     * @opt_param int start-index An index of the first advanced segment to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     */
    public function listManagementSegments($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Segments($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "webproperties" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_AnalyticsService(...);
 *   $webproperties = $analyticsService->webproperties;
 *  </code>
 */
class Google_ManagementWebpropertiesServiceResource extends Google_ServiceResource
{

    /**
     * Lists web properties to which the user has access. (webproperties.list)
     *
     * @param string $accountId Account ID to retrieve web properties for. Can either be a specific account ID or '~all', which refers to all the accounts that user has access to.
     * @param array $optParams Optional parameters.
     * @return Google_Webproperties
     * @throws Google_Exception
     * @opt_param int max-results The maximum number of web properties to include in this response.
     * @opt_param int start-index An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     */
    public function listManagementWebproperties($accountId, $optParams = [])
    {
        $params = ['accountId' => $accountId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Webproperties($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Analytics (v3).
 *
 * <p>
 * View and manage your Google Analytics data
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/analytics/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_AnalyticsService extends Google_Service
{
    /**
     * @var Google_DataGaServiceResource
     */
    public $data_ga;
    /**
     * @var Google_DataMcfServiceResource
     */
    public $data_mcf;
    /**
     * @var Google_DataRealtimeServiceResource
     */
    public $data_realtime;
    /**
     * @var Google_ManagementAccountsServiceResource
     */
    public $management_accounts;
    /**
     * @var Google_ManagementCustomDataSourcesServiceResource
     */
    public $management_customDataSources;
    /**
     * @var Google_ManagementDailyUploadsServiceResource
     */
    public $management_dailyUploads;
    /**
     * @var Google_ManagementExperimentsServiceResource
     */
    public $management_experiments;
    /**
     * @var Google_ManagementGoalsServiceResource
     */
    public $management_goals;
    /**
     * @var Google_ManagementProfilesServiceResource
     */
    public $management_profiles;
    /**
     * @var Google_ManagementSegmentsServiceResource
     */
    public $management_segments;
    /**
     * @var Google_ManagementWebpropertiesServiceResource
     */
    public $management_webproperties;

    /**
     * Constructs the internal representation of the Analytics service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'analytics/v3/';
        $this->version = 'v3';
        $this->serviceName = 'analytics';

        $client->addService($this->serviceName, $this->version);
        $this->data_ga = new Google_DataGaServiceResource($this, $this->serviceName, 'ga', json_decode('{"methods": {"get": {"id": "analytics.data.ga.get", "path": "data/ga", "httpMethod": "GET", "parameters": {"dimensions": {"type": "string", "location": "query"}, "end-date": {"type": "string", "required": true, "location": "query"}, "filters": {"type": "string", "location": "query"}, "ids": {"type": "string", "required": true, "location": "query"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "metrics": {"type": "string", "required": true, "location": "query"}, "segment": {"type": "string", "location": "query"}, "sort": {"type": "string", "location": "query"}, "start-date": {"type": "string", "required": true, "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}}, "response": {"$ref": "GaData"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
        $this->data_mcf = new Google_DataMcfServiceResource($this, $this->serviceName, 'mcf', json_decode('{"methods": {"get": {"id": "analytics.data.mcf.get", "path": "data/mcf", "httpMethod": "GET", "parameters": {"dimensions": {"type": "string", "location": "query"}, "end-date": {"type": "string", "required": true, "location": "query"}, "filters": {"type": "string", "location": "query"}, "ids": {"type": "string", "required": true, "location": "query"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "metrics": {"type": "string", "required": true, "location": "query"}, "sort": {"type": "string", "location": "query"}, "start-date": {"type": "string", "required": true, "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}}, "response": {"$ref": "McfData"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
        $this->data_realtime = new Google_DataRealtimeServiceResource($this, $this->serviceName, 'realtime', json_decode('{"methods": {"get": {"id": "analytics.data.realtime.get", "path": "data/realtime", "httpMethod": "GET", "parameters": {"dimensions": {"type": "string", "location": "query"}, "filters": {"type": "string", "location": "query"}, "ids": {"type": "string", "required": true, "location": "query"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "metrics": {"type": "string", "required": true, "location": "query"}, "sort": {"type": "string", "location": "query"}}, "response": {"$ref": "RealtimeData"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
        $this->management_accounts = new Google_ManagementAccountsServiceResource($this, $this->serviceName, 'accounts', json_decode('{"methods": {"list": {"id": "analytics.management.accounts.list", "path": "management/accounts", "httpMethod": "GET", "parameters": {"max-results": {"type": "integer", "format": "int32", "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}}, "response": {"$ref": "Accounts"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
        $this->management_customDataSources = new Google_ManagementCustomDataSourcesServiceResource($this, $this->serviceName, 'customDataSources', json_decode('{"methods": {"list": {"id": "analytics.management.customDataSources.list", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "max-results": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CustomDataSources"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
        $this->management_dailyUploads = new Google_ManagementDailyUploadsServiceResource($this, $this->serviceName, 'dailyUploads', json_decode('{"methods": {"delete": {"id": "analytics.management.dailyUploads.delete", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads/{date}", "httpMethod": "DELETE", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "customDataSourceId": {"type": "string", "required": true, "location": "path"}, "date": {"type": "string", "required": true, "location": "path"}, "type": {"type": "string", "required": true, "enum": ["cost"], "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/analytics"]}, "list": {"id": "analytics.management.dailyUploads.list", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "customDataSourceId": {"type": "string", "required": true, "location": "path"}, "end-date": {"type": "string", "required": true, "location": "query"}, "max-results": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "start-date": {"type": "string", "required": true, "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "DailyUploads"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}, "upload": {"id": "analytics.management.dailyUploads.upload", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads/{date}/uploads", "httpMethod": "POST", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "appendNumber": {"type": "integer", "required": true, "format": "int32", "minimum": "1", "maximum": "20", "location": "query"}, "customDataSourceId": {"type": "string", "required": true, "location": "path"}, "date": {"type": "string", "required": true, "location": "path"}, "reset": {"type": "boolean", "default": "false", "location": "query"}, "type": {"type": "string", "required": true, "enum": ["cost"], "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "DailyUploadAppend"}, "scopes": ["https://www.googleapis.com/auth/analytics"], "supportsMediaUpload": true, "mediaUpload": {"accept": ["application/octet-stream"], "maxSize": "5MB", "protocols": {"simple": {"multipart": true, "path": "/upload/analytics/v3/management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads/{date}/uploads"}, "resumable": {"multipart": true, "path": "/resumable/upload/analytics/v3/management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads/{date}/uploads"}}}}}}', true));
        $this->management_experiments = new Google_ManagementExperimentsServiceResource($this, $this->serviceName, 'experiments', json_decode('{"methods": {"delete": {"id": "analytics.management.experiments.delete", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}", "httpMethod": "DELETE", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "experimentId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/analytics"]}, "get": {"id": "analytics.management.experiments.get", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "experimentId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Experiment"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}, "insert": {"id": "analytics.management.experiments.insert", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments", "httpMethod": "POST", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Experiment"}, "response": {"$ref": "Experiment"}, "scopes": ["https://www.googleapis.com/auth/analytics"]}, "list": {"id": "analytics.management.experiments.list", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "profileId": {"type": "string", "required": true, "location": "path"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Experiments"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}, "patch": {"id": "analytics.management.experiments.patch", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}", "httpMethod": "PATCH", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "experimentId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Experiment"}, "response": {"$ref": "Experiment"}, "scopes": ["https://www.googleapis.com/auth/analytics"]}, "update": {"id": "analytics.management.experiments.update", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}", "httpMethod": "PUT", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "experimentId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Experiment"}, "response": {"$ref": "Experiment"}, "scopes": ["https://www.googleapis.com/auth/analytics"]}}}', true));
        $this->management_goals = new Google_ManagementGoalsServiceResource($this, $this->serviceName, 'goals', json_decode('{"methods": {"list": {"id": "analytics.management.goals.list", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/goals", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "profileId": {"type": "string", "required": true, "location": "path"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Goals"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
        $this->management_profiles = new Google_ManagementProfilesServiceResource($this, $this->serviceName, 'profiles', json_decode('{"methods": {"list": {"id": "analytics.management.profiles.list", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Profiles"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
        $this->management_segments = new Google_ManagementSegmentsServiceResource($this, $this->serviceName, 'segments', json_decode('{"methods": {"list": {"id": "analytics.management.segments.list", "path": "management/segments", "httpMethod": "GET", "parameters": {"max-results": {"type": "integer", "format": "int32", "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}}, "response": {"$ref": "Segments"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
        $this->management_webproperties = new Google_ManagementWebpropertiesServiceResource($this, $this->serviceName, 'webproperties', json_decode('{"methods": {"list": {"id": "analytics.management.webproperties.list", "path": "management/accounts/{accountId}/webproperties", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}}, "response": {"$ref": "Webproperties"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));

    }
}


/**
 * Class Google_Account
 */
class Google_Account extends Google_Model
{
    /**
     * @var string
     */
    protected $__childLinkType = 'Google_AccountChildLink';
    /**
     * @var string
     */
    protected $__childLinkDataType = '';
    /**
     * @var
     */
    public $childLink;
    /**
     * @var
     */
    public $created;
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
    public $selfLink;
    /**
     * @var
     */
    public $updated;

    /**
     * @param Google_AccountChildLink $childLink
     */
    public function setChildLink(Google_AccountChildLink $childLink)
    {
        $this->childLink = $childLink;
    }

    /**
     * @return mixed
     */
    public function getChildLink()
    {
        return $this->childLink;
    }

    /**
     * @param $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
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
     * @param $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getUpdated()
    {
        return $this->updated;
    }
}

/**
 * Class Google_AccountChildLink
 */
class Google_AccountChildLink extends Google_Model
{
    /**
     * @var
     */
    public $href;
    /**
     * @var
     */
    public $type;

    /**
     * @param $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }

    /**
     * @return mixed
     */
    public function getHref()
    {
        return $this->href;
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
 * Class Google_Accounts
 */
class Google_Accounts extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Account';
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
    public $itemsPerPage;
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
    public $previousLink;
    /**
     * @var
     */
    public $startIndex;
    /**
     * @var
     */
    public $totalResults;
    /**
     * @var
     */
    public $username;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Account) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Account', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param $itemsPerPage
     */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
    }

    /**
     * @return mixed
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
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
     * @param $previousLink
     */
    public function setPreviousLink($previousLink)
    {
        $this->previousLink = $previousLink;
    }

    /**
     * @return mixed
     */
    public function getPreviousLink()
    {
        return $this->previousLink;
    }

    /**
     * @param $startIndex
     */
    public function setStartIndex($startIndex)
    {
        $this->startIndex = $startIndex;
    }

    /**
     * @return mixed
     */
    public function getStartIndex()
    {
        return $this->startIndex;
    }

    /**
     * @param $totalResults
     */
    public function setTotalResults($totalResults)
    {
        $this->totalResults = $totalResults;
    }

    /**
     * @return mixed
     */
    public function getTotalResults()
    {
        return $this->totalResults;
    }

    /**
     * @param $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }
}

/**
 * Class Google_CustomDataSource
 */
class Google_CustomDataSource extends Google_Model
{
    /**
     * @var
     */
    public $accountId;
    /**
     * @var string
     */
    protected $__childLinkType = 'Google_CustomDataSourceChildLink';
    /**
     * @var string
     */
    protected $__childLinkDataType = '';
    /**
     * @var
     */
    public $childLink;
    /**
     * @var
     */
    public $created;
    /**
     * @var
     */
    public $description;
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
     * @var string
     */
    protected $__parentLinkType = 'Google_CustomDataSourceParentLink';
    /**
     * @var string
     */
    protected $__parentLinkDataType = '';
    /**
     * @var
     */
    public $parentLink;
    /**
     * @var
     */
    public $profilesLinked;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $type;
    /**
     * @var
     */
    public $updated;
    /**
     * @var
     */
    public $webPropertyId;

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
     * @param Google_CustomDataSourceChildLink $childLink
     */
    public function setChildLink(Google_CustomDataSourceChildLink $childLink)
    {
        $this->childLink = $childLink;
    }

    /**
     * @return mixed
     */
    public function getChildLink()
    {
        return $this->childLink;
    }

    /**
     * @param $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
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
     * @param Google_CustomDataSourceParentLink $parentLink
     */
    public function setParentLink(Google_CustomDataSourceParentLink $parentLink)
    {
        $this->parentLink = $parentLink;
    }

    /**
     * @return mixed
     */
    public function getParentLink()
    {
        return $this->parentLink;
    }

    /**
     * @param $profilesLinked
     * @throws Google_Exception
     */
    public function setProfilesLinked(/* array(Google_string) */
        $profilesLinked)
    {
        $this->assertIsArray($profilesLinked, 'Google_string', __METHOD__);
        $this->profilesLinked = $profilesLinked;
    }

    /**
     * @return mixed
     */
    public function getProfilesLinked()
    {
        return $this->profilesLinked;
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
     * @param $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param $webPropertyId
     */
    public function setWebPropertyId($webPropertyId)
    {
        $this->webPropertyId = $webPropertyId;
    }

    /**
     * @return mixed
     */
    public function getWebPropertyId()
    {
        return $this->webPropertyId;
    }
}

/**
 * Class Google_CustomDataSourceChildLink
 */
class Google_CustomDataSourceChildLink extends Google_Model
{
    /**
     * @var
     */
    public $href;
    /**
     * @var
     */
    public $type;

    /**
     * @param $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }

    /**
     * @return mixed
     */
    public function getHref()
    {
        return $this->href;
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
 * Class Google_CustomDataSourceParentLink
 */
class Google_CustomDataSourceParentLink extends Google_Model
{
    /**
     * @var
     */
    public $href;
    /**
     * @var
     */
    public $type;

    /**
     * @param $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }

    /**
     * @return mixed
     */
    public function getHref()
    {
        return $this->href;
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
 * Class Google_CustomDataSources
 */
class Google_CustomDataSources extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_CustomDataSource';
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
    public $itemsPerPage;
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
    public $previousLink;
    /**
     * @var
     */
    public $startIndex;
    /**
     * @var
     */
    public $totalResults;
    /**
     * @var
     */
    public $username;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_CustomDataSource) */
        $items)
    {
        $this->assertIsArray($items, 'Google_CustomDataSource', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param $itemsPerPage
     */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
    }

    /**
     * @return mixed
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
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
     * @param $previousLink
     */
    public function setPreviousLink($previousLink)
    {
        $this->previousLink = $previousLink;
    }

    /**
     * @return mixed
     */
    public function getPreviousLink()
    {
        return $this->previousLink;
    }

    /**
     * @param $startIndex
     */
    public function setStartIndex($startIndex)
    {
        $this->startIndex = $startIndex;
    }

    /**
     * @return mixed
     */
    public function getStartIndex()
    {
        return $this->startIndex;
    }

    /**
     * @param $totalResults
     */
    public function setTotalResults($totalResults)
    {
        $this->totalResults = $totalResults;
    }

    /**
     * @return mixed
     */
    public function getTotalResults()
    {
        return $this->totalResults;
    }

    /**
     * @param $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }
}

/**
 * Class Google_DailyUpload
 */
class Google_DailyUpload extends Google_Model
{
    /**
     * @var
     */
    public $accountId;
    /**
     * @var
     */
    public $appendCount;
    /**
     * @var
     */
    public $createdTime;
    /**
     * @var
     */
    public $customDataSourceId;
    /**
     * @var
     */
    public $date;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $modifiedTime;
    /**
     * @var string
     */
    protected $__parentLinkType = 'Google_DailyUploadParentLink';
    /**
     * @var string
     */
    protected $__parentLinkDataType = '';
    /**
     * @var
     */
    public $parentLink;
    /**
     * @var string
     */
    protected $__recentChangesType = 'Google_DailyUploadRecentChanges';
    /**
     * @var string
     */
    protected $__recentChangesDataType = 'array';
    /**
     * @var
     */
    public $recentChanges;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $webPropertyId;

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
     * @param $appendCount
     */
    public function setAppendCount($appendCount)
    {
        $this->appendCount = $appendCount;
    }

    /**
     * @return mixed
     */
    public function getAppendCount()
    {
        return $this->appendCount;
    }

    /**
     * @param $createdTime
     */
    public function setCreatedTime($createdTime)
    {
        $this->createdTime = $createdTime;
    }

    /**
     * @return mixed
     */
    public function getCreatedTime()
    {
        return $this->createdTime;
    }

    /**
     * @param $customDataSourceId
     */
    public function setCustomDataSourceId($customDataSourceId)
    {
        $this->customDataSourceId = $customDataSourceId;
    }

    /**
     * @return mixed
     */
    public function getCustomDataSourceId()
    {
        return $this->customDataSourceId;
    }

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
     * @param $modifiedTime
     */
    public function setModifiedTime($modifiedTime)
    {
        $this->modifiedTime = $modifiedTime;
    }

    /**
     * @return mixed
     */
    public function getModifiedTime()
    {
        return $this->modifiedTime;
    }

    /**
     * @param Google_DailyUploadParentLink $parentLink
     */
    public function setParentLink(Google_DailyUploadParentLink $parentLink)
    {
        $this->parentLink = $parentLink;
    }

    /**
     * @return mixed
     */
    public function getParentLink()
    {
        return $this->parentLink;
    }

    /**
     * @param $recentChanges
     * @throws Google_Exception
     */
    public function setRecentChanges(/* array(Google_DailyUploadRecentChanges) */
        $recentChanges)
    {
        $this->assertIsArray($recentChanges, 'Google_DailyUploadRecentChanges', __METHOD__);
        $this->recentChanges = $recentChanges;
    }

    /**
     * @return mixed
     */
    public function getRecentChanges()
    {
        return $this->recentChanges;
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
     * @param $webPropertyId
     */
    public function setWebPropertyId($webPropertyId)
    {
        $this->webPropertyId = $webPropertyId;
    }

    /**
     * @return mixed
     */
    public function getWebPropertyId()
    {
        return $this->webPropertyId;
    }
}

/**
 * Class Google_DailyUploadAppend
 */
class Google_DailyUploadAppend extends Google_Model
{
    /**
     * @var
     */
    public $accountId;
    /**
     * @var
     */
    public $appendNumber;
    /**
     * @var
     */
    public $customDataSourceId;
    /**
     * @var
     */
    public $date;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $nextAppendLink;
    /**
     * @var
     */
    public $webPropertyId;

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
     * @param $appendNumber
     */
    public function setAppendNumber($appendNumber)
    {
        $this->appendNumber = $appendNumber;
    }

    /**
     * @return mixed
     */
    public function getAppendNumber()
    {
        return $this->appendNumber;
    }

    /**
     * @param $customDataSourceId
     */
    public function setCustomDataSourceId($customDataSourceId)
    {
        $this->customDataSourceId = $customDataSourceId;
    }

    /**
     * @return mixed
     */
    public function getCustomDataSourceId()
    {
        return $this->customDataSourceId;
    }

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
     * @param $nextAppendLink
     */
    public function setNextAppendLink($nextAppendLink)
    {
        $this->nextAppendLink = $nextAppendLink;
    }

    /**
     * @return mixed
     */
    public function getNextAppendLink()
    {
        return $this->nextAppendLink;
    }

    /**
     * @param $webPropertyId
     */
    public function setWebPropertyId($webPropertyId)
    {
        $this->webPropertyId = $webPropertyId;
    }

    /**
     * @return mixed
     */
    public function getWebPropertyId()
    {
        return $this->webPropertyId;
    }
}

/**
 * Class Google_DailyUploadParentLink
 */
class Google_DailyUploadParentLink extends Google_Model
{
    /**
     * @var
     */
    public $href;
    /**
     * @var
     */
    public $type;

    /**
     * @param $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }

    /**
     * @return mixed
     */
    public function getHref()
    {
        return $this->href;
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
 * Class Google_DailyUploadRecentChanges
 */
class Google_DailyUploadRecentChanges extends Google_Model
{
    /**
     * @var
     */
    public $change;
    /**
     * @var
     */
    public $time;

    /**
     * @param $change
     */
    public function setChange($change)
    {
        $this->change = $change;
    }

    /**
     * @return mixed
     */
    public function getChange()
    {
        return $this->change;
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
}

/**
 * Class Google_DailyUploads
 */
class Google_DailyUploads extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_DailyUpload';
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
    public $itemsPerPage;
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
    public $previousLink;
    /**
     * @var
     */
    public $startIndex;
    /**
     * @var
     */
    public $totalResults;
    /**
     * @var
     */
    public $username;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_DailyUpload) */
        $items)
    {
        $this->assertIsArray($items, 'Google_DailyUpload', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param $itemsPerPage
     */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
    }

    /**
     * @return mixed
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
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
     * @param $previousLink
     */
    public function setPreviousLink($previousLink)
    {
        $this->previousLink = $previousLink;
    }

    /**
     * @return mixed
     */
    public function getPreviousLink()
    {
        return $this->previousLink;
    }

    /**
     * @param $startIndex
     */
    public function setStartIndex($startIndex)
    {
        $this->startIndex = $startIndex;
    }

    /**
     * @return mixed
     */
    public function getStartIndex()
    {
        return $this->startIndex;
    }

    /**
     * @param $totalResults
     */
    public function setTotalResults($totalResults)
    {
        $this->totalResults = $totalResults;
    }

    /**
     * @return mixed
     */
    public function getTotalResults()
    {
        return $this->totalResults;
    }

    /**
     * @param $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }
}

/**
 * Class Google_Experiment
 */
class Google_Experiment extends Google_Model
{
    /**
     * @var
     */
    public $accountId;
    /**
     * @var
     */
    public $created;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $editableInGaUi;
    /**
     * @var
     */
    public $endTime;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $internalWebPropertyId;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $minimumExperimentLengthInDays;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $objectiveMetric;
    /**
     * @var
     */
    public $optimizationType;
    /**
     * @var string
     */
    protected $__parentLinkType = 'Google_ExperimentParentLink';
    /**
     * @var string
     */
    protected $__parentLinkDataType = '';
    /**
     * @var
     */
    public $parentLink;
    /**
     * @var
     */
    public $profileId;
    /**
     * @var
     */
    public $reasonExperimentEnded;
    /**
     * @var
     */
    public $rewriteVariationUrlsAsOriginal;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $servingFramework;
    /**
     * @var
     */
    public $snippet;
    /**
     * @var
     */
    public $startTime;
    /**
     * @var
     */
    public $status;
    /**
     * @var
     */
    public $trafficCoverage;
    /**
     * @var
     */
    public $updated;
    /**
     * @var string
     */
    protected $__variationsType = 'Google_ExperimentVariations';
    /**
     * @var string
     */
    protected $__variationsDataType = 'array';
    /**
     * @var
     */
    public $variations;
    /**
     * @var
     */
    public $webPropertyId;
    /**
     * @var
     */
    public $winnerConfidenceLevel;
    /**
     * @var
     */
    public $winnerFound;

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
     * @param $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
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
     * @param $editableInGaUi
     */
    public function setEditableInGaUi($editableInGaUi)
    {
        $this->editableInGaUi = $editableInGaUi;
    }

    /**
     * @return mixed
     */
    public function getEditableInGaUi()
    {
        return $this->editableInGaUi;
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
     * @param $internalWebPropertyId
     */
    public function setInternalWebPropertyId($internalWebPropertyId)
    {
        $this->internalWebPropertyId = $internalWebPropertyId;
    }

    /**
     * @return mixed
     */
    public function getInternalWebPropertyId()
    {
        return $this->internalWebPropertyId;
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
     * @param $minimumExperimentLengthInDays
     */
    public function setMinimumExperimentLengthInDays($minimumExperimentLengthInDays)
    {
        $this->minimumExperimentLengthInDays = $minimumExperimentLengthInDays;
    }

    /**
     * @return mixed
     */
    public function getMinimumExperimentLengthInDays()
    {
        return $this->minimumExperimentLengthInDays;
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
     * @param $objectiveMetric
     */
    public function setObjectiveMetric($objectiveMetric)
    {
        $this->objectiveMetric = $objectiveMetric;
    }

    /**
     * @return mixed
     */
    public function getObjectiveMetric()
    {
        return $this->objectiveMetric;
    }

    /**
     * @param $optimizationType
     */
    public function setOptimizationType($optimizationType)
    {
        $this->optimizationType = $optimizationType;
    }

    /**
     * @return mixed
     */
    public function getOptimizationType()
    {
        return $this->optimizationType;
    }

    /**
     * @param Google_ExperimentParentLink $parentLink
     */
    public function setParentLink(Google_ExperimentParentLink $parentLink)
    {
        $this->parentLink = $parentLink;
    }

    /**
     * @return mixed
     */
    public function getParentLink()
    {
        return $this->parentLink;
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
     * @param $reasonExperimentEnded
     */
    public function setReasonExperimentEnded($reasonExperimentEnded)
    {
        $this->reasonExperimentEnded = $reasonExperimentEnded;
    }

    /**
     * @return mixed
     */
    public function getReasonExperimentEnded()
    {
        return $this->reasonExperimentEnded;
    }

    /**
     * @param $rewriteVariationUrlsAsOriginal
     */
    public function setRewriteVariationUrlsAsOriginal($rewriteVariationUrlsAsOriginal)
    {
        $this->rewriteVariationUrlsAsOriginal = $rewriteVariationUrlsAsOriginal;
    }

    /**
     * @return mixed
     */
    public function getRewriteVariationUrlsAsOriginal()
    {
        return $this->rewriteVariationUrlsAsOriginal;
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
     * @param $servingFramework
     */
    public function setServingFramework($servingFramework)
    {
        $this->servingFramework = $servingFramework;
    }

    /**
     * @return mixed
     */
    public function getServingFramework()
    {
        return $this->servingFramework;
    }

    /**
     * @param $snippet
     */
    public function setSnippet($snippet)
    {
        $this->snippet = $snippet;
    }

    /**
     * @return mixed
     */
    public function getSnippet()
    {
        return $this->snippet;
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
     * @param $trafficCoverage
     */
    public function setTrafficCoverage($trafficCoverage)
    {
        $this->trafficCoverage = $trafficCoverage;
    }

    /**
     * @return mixed
     */
    public function getTrafficCoverage()
    {
        return $this->trafficCoverage;
    }

    /**
     * @param $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param $variations
     * @throws Google_Exception
     */
    public function setVariations(/* array(Google_ExperimentVariations) */
        $variations)
    {
        $this->assertIsArray($variations, 'Google_ExperimentVariations', __METHOD__);
        $this->variations = $variations;
    }

    /**
     * @return mixed
     */
    public function getVariations()
    {
        return $this->variations;
    }

    /**
     * @param $webPropertyId
     */
    public function setWebPropertyId($webPropertyId)
    {
        $this->webPropertyId = $webPropertyId;
    }

    /**
     * @return mixed
     */
    public function getWebPropertyId()
    {
        return $this->webPropertyId;
    }

    /**
     * @param $winnerConfidenceLevel
     */
    public function setWinnerConfidenceLevel($winnerConfidenceLevel)
    {
        $this->winnerConfidenceLevel = $winnerConfidenceLevel;
    }

    /**
     * @return mixed
     */
    public function getWinnerConfidenceLevel()
    {
        return $this->winnerConfidenceLevel;
    }

    /**
     * @param $winnerFound
     */
    public function setWinnerFound($winnerFound)
    {
        $this->winnerFound = $winnerFound;
    }

    /**
     * @return mixed
     */
    public function getWinnerFound()
    {
        return $this->winnerFound;
    }
}

/**
 * Class Google_ExperimentParentLink
 */
class Google_ExperimentParentLink extends Google_Model
{
    /**
     * @var
     */
    public $href;
    /**
     * @var
     */
    public $type;

    /**
     * @param $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }

    /**
     * @return mixed
     */
    public function getHref()
    {
        return $this->href;
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
 * Class Google_ExperimentVariations
 */
class Google_ExperimentVariations extends Google_Model
{
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $status;
    /**
     * @var
     */
    public $url;
    /**
     * @var
     */
    public $weight;
    /**
     * @var
     */
    public $won;

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
     * @param $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param $won
     */
    public function setWon($won)
    {
        $this->won = $won;
    }

    /**
     * @return mixed
     */
    public function getWon()
    {
        return $this->won;
    }
}

/**
 * Class Google_Experiments
 */
class Google_Experiments extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Experiment';
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
    public $itemsPerPage;
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
    public $previousLink;
    /**
     * @var
     */
    public $startIndex;
    /**
     * @var
     */
    public $totalResults;
    /**
     * @var
     */
    public $username;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Experiment) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Experiment', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param $itemsPerPage
     */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
    }

    /**
     * @return mixed
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
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
     * @param $previousLink
     */
    public function setPreviousLink($previousLink)
    {
        $this->previousLink = $previousLink;
    }

    /**
     * @return mixed
     */
    public function getPreviousLink()
    {
        return $this->previousLink;
    }

    /**
     * @param $startIndex
     */
    public function setStartIndex($startIndex)
    {
        $this->startIndex = $startIndex;
    }

    /**
     * @return mixed
     */
    public function getStartIndex()
    {
        return $this->startIndex;
    }

    /**
     * @param $totalResults
     */
    public function setTotalResults($totalResults)
    {
        $this->totalResults = $totalResults;
    }

    /**
     * @return mixed
     */
    public function getTotalResults()
    {
        return $this->totalResults;
    }

    /**
     * @param $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }
}

/**
 * Class Google_GaData
 */
class Google_GaData extends Google_Model
{
    /**
     * @var string
     */
    protected $__columnHeadersType = 'Google_GaDataColumnHeaders';
    /**
     * @var string
     */
    protected $__columnHeadersDataType = 'array';
    /**
     * @var
     */
    public $columnHeaders;
    /**
     * @var
     */
    public $containsSampledData;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $itemsPerPage;
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
    public $previousLink;
    /**
     * @var string
     */
    protected $__profileInfoType = 'Google_GaDataProfileInfo';
    /**
     * @var string
     */
    protected $__profileInfoDataType = '';
    /**
     * @var
     */
    public $profileInfo;
    /**
     * @var string
     */
    protected $__queryType = 'Google_GaDataQuery';
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
    public $rows;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $totalResults;
    /**
     * @var
     */
    public $totalsForAllResults;

    /**
     * @param $columnHeaders
     * @throws Google_Exception
     */
    public function setColumnHeaders(/* array(Google_GaDataColumnHeaders) */
        $columnHeaders)
    {
        $this->assertIsArray($columnHeaders, 'Google_GaDataColumnHeaders', __METHOD__);
        $this->columnHeaders = $columnHeaders;
    }

    /**
     * @return mixed
     */
    public function getColumnHeaders()
    {
        return $this->columnHeaders;
    }

    /**
     * @param $containsSampledData
     */
    public function setContainsSampledData($containsSampledData)
    {
        $this->containsSampledData = $containsSampledData;
    }

    /**
     * @return mixed
     */
    public function getContainsSampledData()
    {
        return $this->containsSampledData;
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
     * @param $itemsPerPage
     */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
    }

    /**
     * @return mixed
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
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
     * @param $previousLink
     */
    public function setPreviousLink($previousLink)
    {
        $this->previousLink = $previousLink;
    }

    /**
     * @return mixed
     */
    public function getPreviousLink()
    {
        return $this->previousLink;
    }

    /**
     * @param Google_GaDataProfileInfo $profileInfo
     */
    public function setProfileInfo(Google_GaDataProfileInfo $profileInfo)
    {
        $this->profileInfo = $profileInfo;
    }

    /**
     * @return mixed
     */
    public function getProfileInfo()
    {
        return $this->profileInfo;
    }

    /**
     * @param Google_GaDataQuery $query
     */
    public function setQuery(Google_GaDataQuery $query)
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
     * @param $rows
     * @throws Google_Exception
     */
    public function setRows(/* array(Google_string) */
        $rows)
    {
        $this->assertIsArray($rows, 'Google_string', __METHOD__);
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
     * @param $totalResults
     */
    public function setTotalResults($totalResults)
    {
        $this->totalResults = $totalResults;
    }

    /**
     * @return mixed
     */
    public function getTotalResults()
    {
        return $this->totalResults;
    }

    /**
     * @param $totalsForAllResults
     */
    public function setTotalsForAllResults($totalsForAllResults)
    {
        $this->totalsForAllResults = $totalsForAllResults;
    }

    /**
     * @return mixed
     */
    public function getTotalsForAllResults()
    {
        return $this->totalsForAllResults;
    }
}

/**
 * Class Google_GaDataColumnHeaders
 */
class Google_GaDataColumnHeaders extends Google_Model
{
    /**
     * @var
     */
    public $columnType;
    /**
     * @var
     */
    public $dataType;
    /**
     * @var
     */
    public $name;

    /**
     * @param $columnType
     */
    public function setColumnType($columnType)
    {
        $this->columnType = $columnType;
    }

    /**
     * @return mixed
     */
    public function getColumnType()
    {
        return $this->columnType;
    }

    /**
     * @param $dataType
     */
    public function setDataType($dataType)
    {
        $this->dataType = $dataType;
    }

    /**
     * @return mixed
     */
    public function getDataType()
    {
        return $this->dataType;
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
 * Class Google_GaDataProfileInfo
 */
class Google_GaDataProfileInfo extends Google_Model
{
    /**
     * @var
     */
    public $accountId;
    /**
     * @var
     */
    public $internalWebPropertyId;
    /**
     * @var
     */
    public $profileId;
    /**
     * @var
     */
    public $profileName;
    /**
     * @var
     */
    public $tableId;
    /**
     * @var
     */
    public $webPropertyId;

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
     * @param $internalWebPropertyId
     */
    public function setInternalWebPropertyId($internalWebPropertyId)
    {
        $this->internalWebPropertyId = $internalWebPropertyId;
    }

    /**
     * @return mixed
     */
    public function getInternalWebPropertyId()
    {
        return $this->internalWebPropertyId;
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
     * @param $profileName
     */
    public function setProfileName($profileName)
    {
        $this->profileName = $profileName;
    }

    /**
     * @return mixed
     */
    public function getProfileName()
    {
        return $this->profileName;
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

    /**
     * @param $webPropertyId
     */
    public function setWebPropertyId($webPropertyId)
    {
        $this->webPropertyId = $webPropertyId;
    }

    /**
     * @return mixed
     */
    public function getWebPropertyId()
    {
        return $this->webPropertyId;
    }
}

/**
 * Class Google_GaDataQuery
 */
class Google_GaDataQuery extends Google_Model
{
    /**
     * @var
     */
    public $dimensions;
    /**
     * @var
     */
    public $end_date;
    /**
     * @var
     */
    public $filters;
    /**
     * @var
     */
    public $ids;
    /**
     * @var
     */
    public $max_results;
    /**
     * @var
     */
    public $metrics;
    /**
     * @var
     */
    public $segment;
    /**
     * @var
     */
    public $sort;
    /**
     * @var
     */
    public $start_date;
    /**
     * @var
     */
    public $start_index;

    /**
     * @param $dimensions
     */
    public function setDimensions($dimensions)
    {
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
     * @param $end_date
     */
    public function setEnd_date($end_date)
    {
        $this->end_date = $end_date;
    }

    /**
     * @return mixed
     */
    public function getEnd_date()
    {
        return $this->end_date;
    }

    /**
     * @param $filters
     */
    public function setFilters($filters)
    {
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
     * @param $ids
     */
    public function setIds($ids)
    {
        $this->ids = $ids;
    }

    /**
     * @return mixed
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * @param $max_results
     */
    public function setMax_results($max_results)
    {
        $this->max_results = $max_results;
    }

    /**
     * @return mixed
     */
    public function getMax_results()
    {
        return $this->max_results;
    }

    /**
     * @param $metrics
     * @throws Google_Exception
     */
    public function setMetrics(/* array(Google_string) */
        $metrics)
    {
        $this->assertIsArray($metrics, 'Google_string', __METHOD__);
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
     * @param $segment
     */
    public function setSegment($segment)
    {
        $this->segment = $segment;
    }

    /**
     * @return mixed
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * @param $sort
     * @throws Google_Exception
     */
    public function setSort(/* array(Google_string) */
        $sort)
    {
        $this->assertIsArray($sort, 'Google_string', __METHOD__);
        $this->sort = $sort;
    }

    /**
     * @return mixed
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param $start_date
     */
    public function setStart_date($start_date)
    {
        $this->start_date = $start_date;
    }

    /**
     * @return mixed
     */
    public function getStart_date()
    {
        return $this->start_date;
    }

    /**
     * @param $start_index
     */
    public function setStart_index($start_index)
    {
        $this->start_index = $start_index;
    }

    /**
     * @return mixed
     */
    public function getStart_index()
    {
        return $this->start_index;
    }
}

/**
 * Class Google_Goal
 */
class Google_Goal extends Google_Model
{
    /**
     * @var
     */
    public $accountId;
    /**
     * @var
     */
    public $active;
    /**
     * @var
     */
    public $created;
    /**
     * @var string
     */
    protected $__eventDetailsType = 'Google_GoalEventDetails';
    /**
     * @var string
     */
    protected $__eventDetailsDataType = '';
    /**
     * @var
     */
    public $eventDetails;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $internalWebPropertyId;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $name;
    /**
     * @var string
     */
    protected $__parentLinkType = 'Google_GoalParentLink';
    /**
     * @var string
     */
    protected $__parentLinkDataType = '';
    /**
     * @var
     */
    public $parentLink;
    /**
     * @var
     */
    public $profileId;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $type;
    /**
     * @var
     */
    public $updated;
    /**
     * @var string
     */
    protected $__urlDestinationDetailsType = 'Google_GoalUrlDestinationDetails';
    /**
     * @var string
     */
    protected $__urlDestinationDetailsDataType = '';
    /**
     * @var
     */
    public $urlDestinationDetails;
    /**
     * @var
     */
    public $value;
    /**
     * @var string
     */
    protected $__visitNumPagesDetailsType = 'Google_GoalVisitNumPagesDetails';
    /**
     * @var string
     */
    protected $__visitNumPagesDetailsDataType = '';
    /**
     * @var
     */
    public $visitNumPagesDetails;
    /**
     * @var string
     */
    protected $__visitTimeOnSiteDetailsType = 'Google_GoalVisitTimeOnSiteDetails';
    /**
     * @var string
     */
    protected $__visitTimeOnSiteDetailsDataType = '';
    /**
     * @var
     */
    public $visitTimeOnSiteDetails;
    /**
     * @var
     */
    public $webPropertyId;

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
     * @param $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param Google_GoalEventDetails $eventDetails
     */
    public function setEventDetails(Google_GoalEventDetails $eventDetails)
    {
        $this->eventDetails = $eventDetails;
    }

    /**
     * @return mixed
     */
    public function getEventDetails()
    {
        return $this->eventDetails;
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
     * @param $internalWebPropertyId
     */
    public function setInternalWebPropertyId($internalWebPropertyId)
    {
        $this->internalWebPropertyId = $internalWebPropertyId;
    }

    /**
     * @return mixed
     */
    public function getInternalWebPropertyId()
    {
        return $this->internalWebPropertyId;
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
     * @param Google_GoalParentLink $parentLink
     */
    public function setParentLink(Google_GoalParentLink $parentLink)
    {
        $this->parentLink = $parentLink;
    }

    /**
     * @return mixed
     */
    public function getParentLink()
    {
        return $this->parentLink;
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
     * @param $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param Google_GoalUrlDestinationDetails $urlDestinationDetails
     */
    public function setUrlDestinationDetails(Google_GoalUrlDestinationDetails $urlDestinationDetails)
    {
        $this->urlDestinationDetails = $urlDestinationDetails;
    }

    /**
     * @return mixed
     */
    public function getUrlDestinationDetails()
    {
        return $this->urlDestinationDetails;
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

    /**
     * @param Google_GoalVisitNumPagesDetails $visitNumPagesDetails
     */
    public function setVisitNumPagesDetails(Google_GoalVisitNumPagesDetails $visitNumPagesDetails)
    {
        $this->visitNumPagesDetails = $visitNumPagesDetails;
    }

    /**
     * @return mixed
     */
    public function getVisitNumPagesDetails()
    {
        return $this->visitNumPagesDetails;
    }

    /**
     * @param Google_GoalVisitTimeOnSiteDetails $visitTimeOnSiteDetails
     */
    public function setVisitTimeOnSiteDetails(Google_GoalVisitTimeOnSiteDetails $visitTimeOnSiteDetails)
    {
        $this->visitTimeOnSiteDetails = $visitTimeOnSiteDetails;
    }

    /**
     * @return mixed
     */
    public function getVisitTimeOnSiteDetails()
    {
        return $this->visitTimeOnSiteDetails;
    }

    /**
     * @param $webPropertyId
     */
    public function setWebPropertyId($webPropertyId)
    {
        $this->webPropertyId = $webPropertyId;
    }

    /**
     * @return mixed
     */
    public function getWebPropertyId()
    {
        return $this->webPropertyId;
    }
}

/**
 * Class Google_GoalEventDetails
 */
class Google_GoalEventDetails extends Google_Model
{
    /**
     * @var string
     */
    protected $__eventConditionsType = 'Google_GoalEventDetailsEventConditions';
    /**
     * @var string
     */
    protected $__eventConditionsDataType = 'array';
    /**
     * @var
     */
    public $eventConditions;
    /**
     * @var
     */
    public $useEventValue;

    /**
     * @param $eventConditions
     * @throws Google_Exception
     */
    public function setEventConditions(/* array(Google_GoalEventDetailsEventConditions) */
        $eventConditions)
    {
        $this->assertIsArray($eventConditions, 'Google_GoalEventDetailsEventConditions', __METHOD__);
        $this->eventConditions = $eventConditions;
    }

    /**
     * @return mixed
     */
    public function getEventConditions()
    {
        return $this->eventConditions;
    }

    /**
     * @param $useEventValue
     */
    public function setUseEventValue($useEventValue)
    {
        $this->useEventValue = $useEventValue;
    }

    /**
     * @return mixed
     */
    public function getUseEventValue()
    {
        return $this->useEventValue;
    }
}

/**
 * Class Google_GoalEventDetailsEventConditions
 */
class Google_GoalEventDetailsEventConditions extends Google_Model
{
    /**
     * @var
     */
    public $comparisonType;
    /**
     * @var
     */
    public $comparisonValue;
    /**
     * @var
     */
    public $expression;
    /**
     * @var
     */
    public $matchType;
    /**
     * @var
     */
    public $type;

    /**
     * @param $comparisonType
     */
    public function setComparisonType($comparisonType)
    {
        $this->comparisonType = $comparisonType;
    }

    /**
     * @return mixed
     */
    public function getComparisonType()
    {
        return $this->comparisonType;
    }

    /**
     * @param $comparisonValue
     */
    public function setComparisonValue($comparisonValue)
    {
        $this->comparisonValue = $comparisonValue;
    }

    /**
     * @return mixed
     */
    public function getComparisonValue()
    {
        return $this->comparisonValue;
    }

    /**
     * @param $expression
     */
    public function setExpression($expression)
    {
        $this->expression = $expression;
    }

    /**
     * @return mixed
     */
    public function getExpression()
    {
        return $this->expression;
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
 * Class Google_GoalParentLink
 */
class Google_GoalParentLink extends Google_Model
{
    /**
     * @var
     */
    public $href;
    /**
     * @var
     */
    public $type;

    /**
     * @param $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }

    /**
     * @return mixed
     */
    public function getHref()
    {
        return $this->href;
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
 * Class Google_GoalUrlDestinationDetails
 */
class Google_GoalUrlDestinationDetails extends Google_Model
{
    /**
     * @var
     */
    public $caseSensitive;
    /**
     * @var
     */
    public $firstStepRequired;
    /**
     * @var
     */
    public $matchType;
    /**
     * @var string
     */
    protected $__stepsType = 'Google_GoalUrlDestinationDetailsSteps';
    /**
     * @var string
     */
    protected $__stepsDataType = 'array';
    /**
     * @var
     */
    public $steps;
    /**
     * @var
     */
    public $url;

    /**
     * @param $caseSensitive
     */
    public function setCaseSensitive($caseSensitive)
    {
        $this->caseSensitive = $caseSensitive;
    }

    /**
     * @return mixed
     */
    public function getCaseSensitive()
    {
        return $this->caseSensitive;
    }

    /**
     * @param $firstStepRequired
     */
    public function setFirstStepRequired($firstStepRequired)
    {
        $this->firstStepRequired = $firstStepRequired;
    }

    /**
     * @return mixed
     */
    public function getFirstStepRequired()
    {
        return $this->firstStepRequired;
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
     * @param $steps
     * @throws Google_Exception
     */
    public function setSteps(/* array(Google_GoalUrlDestinationDetailsSteps) */
        $steps)
    {
        $this->assertIsArray($steps, 'Google_GoalUrlDestinationDetailsSteps', __METHOD__);
        $this->steps = $steps;
    }

    /**
     * @return mixed
     */
    public function getSteps()
    {
        return $this->steps;
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
 * Class Google_GoalUrlDestinationDetailsSteps
 */
class Google_GoalUrlDestinationDetailsSteps extends Google_Model
{
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $number;
    /**
     * @var
     */
    public $url;

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
     * @param $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
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
 * Class Google_GoalVisitNumPagesDetails
 */
class Google_GoalVisitNumPagesDetails extends Google_Model
{
    /**
     * @var
     */
    public $comparisonType;
    /**
     * @var
     */
    public $comparisonValue;

    /**
     * @param $comparisonType
     */
    public function setComparisonType($comparisonType)
    {
        $this->comparisonType = $comparisonType;
    }

    /**
     * @return mixed
     */
    public function getComparisonType()
    {
        return $this->comparisonType;
    }

    /**
     * @param $comparisonValue
     */
    public function setComparisonValue($comparisonValue)
    {
        $this->comparisonValue = $comparisonValue;
    }

    /**
     * @return mixed
     */
    public function getComparisonValue()
    {
        return $this->comparisonValue;
    }
}

/**
 * Class Google_GoalVisitTimeOnSiteDetails
 */
class Google_GoalVisitTimeOnSiteDetails extends Google_Model
{
    /**
     * @var
     */
    public $comparisonType;
    /**
     * @var
     */
    public $comparisonValue;

    /**
     * @param $comparisonType
     */
    public function setComparisonType($comparisonType)
    {
        $this->comparisonType = $comparisonType;
    }

    /**
     * @return mixed
     */
    public function getComparisonType()
    {
        return $this->comparisonType;
    }

    /**
     * @param $comparisonValue
     */
    public function setComparisonValue($comparisonValue)
    {
        $this->comparisonValue = $comparisonValue;
    }

    /**
     * @return mixed
     */
    public function getComparisonValue()
    {
        return $this->comparisonValue;
    }
}

/**
 * Class Google_Goals
 */
class Google_Goals extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Goal';
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
    public $itemsPerPage;
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
    public $previousLink;
    /**
     * @var
     */
    public $startIndex;
    /**
     * @var
     */
    public $totalResults;
    /**
     * @var
     */
    public $username;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Goal) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Goal', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param $itemsPerPage
     */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
    }

    /**
     * @return mixed
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
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
     * @param $previousLink
     */
    public function setPreviousLink($previousLink)
    {
        $this->previousLink = $previousLink;
    }

    /**
     * @return mixed
     */
    public function getPreviousLink()
    {
        return $this->previousLink;
    }

    /**
     * @param $startIndex
     */
    public function setStartIndex($startIndex)
    {
        $this->startIndex = $startIndex;
    }

    /**
     * @return mixed
     */
    public function getStartIndex()
    {
        return $this->startIndex;
    }

    /**
     * @param $totalResults
     */
    public function setTotalResults($totalResults)
    {
        $this->totalResults = $totalResults;
    }

    /**
     * @return mixed
     */
    public function getTotalResults()
    {
        return $this->totalResults;
    }

    /**
     * @param $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }
}

/**
 * Class Google_McfData
 */
class Google_McfData extends Google_Model
{
    /**
     * @var string
     */
    protected $__columnHeadersType = 'Google_McfDataColumnHeaders';
    /**
     * @var string
     */
    protected $__columnHeadersDataType = 'array';
    /**
     * @var
     */
    public $columnHeaders;
    /**
     * @var
     */
    public $containsSampledData;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $itemsPerPage;
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
    public $previousLink;
    /**
     * @var string
     */
    protected $__profileInfoType = 'Google_McfDataProfileInfo';
    /**
     * @var string
     */
    protected $__profileInfoDataType = '';
    /**
     * @var
     */
    public $profileInfo;
    /**
     * @var string
     */
    protected $__queryType = 'Google_McfDataQuery';
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
    protected $__rowsType = 'Google_McfDataRows';
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
    public $selfLink;
    /**
     * @var
     */
    public $totalResults;
    /**
     * @var
     */
    public $totalsForAllResults;

    /**
     * @param $columnHeaders
     * @throws Google_Exception
     */
    public function setColumnHeaders(/* array(Google_McfDataColumnHeaders) */
        $columnHeaders)
    {
        $this->assertIsArray($columnHeaders, 'Google_McfDataColumnHeaders', __METHOD__);
        $this->columnHeaders = $columnHeaders;
    }

    /**
     * @return mixed
     */
    public function getColumnHeaders()
    {
        return $this->columnHeaders;
    }

    /**
     * @param $containsSampledData
     */
    public function setContainsSampledData($containsSampledData)
    {
        $this->containsSampledData = $containsSampledData;
    }

    /**
     * @return mixed
     */
    public function getContainsSampledData()
    {
        return $this->containsSampledData;
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
     * @param $itemsPerPage
     */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
    }

    /**
     * @return mixed
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
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
     * @param $previousLink
     */
    public function setPreviousLink($previousLink)
    {
        $this->previousLink = $previousLink;
    }

    /**
     * @return mixed
     */
    public function getPreviousLink()
    {
        return $this->previousLink;
    }

    /**
     * @param Google_McfDataProfileInfo $profileInfo
     */
    public function setProfileInfo(Google_McfDataProfileInfo $profileInfo)
    {
        $this->profileInfo = $profileInfo;
    }

    /**
     * @return mixed
     */
    public function getProfileInfo()
    {
        return $this->profileInfo;
    }

    /**
     * @param Google_McfDataQuery $query
     */
    public function setQuery(Google_McfDataQuery $query)
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
     * @param $rows
     * @throws Google_Exception
     */
    public function setRows(/* array(Google_McfDataRows) */
        $rows)
    {
        $this->assertIsArray($rows, 'Google_McfDataRows', __METHOD__);
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
     * @param $totalResults
     */
    public function setTotalResults($totalResults)
    {
        $this->totalResults = $totalResults;
    }

    /**
     * @return mixed
     */
    public function getTotalResults()
    {
        return $this->totalResults;
    }

    /**
     * @param $totalsForAllResults
     */
    public function setTotalsForAllResults($totalsForAllResults)
    {
        $this->totalsForAllResults = $totalsForAllResults;
    }

    /**
     * @return mixed
     */
    public function getTotalsForAllResults()
    {
        return $this->totalsForAllResults;
    }
}

/**
 * Class Google_McfDataColumnHeaders
 */
class Google_McfDataColumnHeaders extends Google_Model
{
    /**
     * @var
     */
    public $columnType;
    /**
     * @var
     */
    public $dataType;
    /**
     * @var
     */
    public $name;

    /**
     * @param $columnType
     */
    public function setColumnType($columnType)
    {
        $this->columnType = $columnType;
    }

    /**
     * @return mixed
     */
    public function getColumnType()
    {
        return $this->columnType;
    }

    /**
     * @param $dataType
     */
    public function setDataType($dataType)
    {
        $this->dataType = $dataType;
    }

    /**
     * @return mixed
     */
    public function getDataType()
    {
        return $this->dataType;
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
 * Class Google_McfDataProfileInfo
 */
class Google_McfDataProfileInfo extends Google_Model
{
    /**
     * @var
     */
    public $accountId;
    /**
     * @var
     */
    public $internalWebPropertyId;
    /**
     * @var
     */
    public $profileId;
    /**
     * @var
     */
    public $profileName;
    /**
     * @var
     */
    public $tableId;
    /**
     * @var
     */
    public $webPropertyId;

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
     * @param $internalWebPropertyId
     */
    public function setInternalWebPropertyId($internalWebPropertyId)
    {
        $this->internalWebPropertyId = $internalWebPropertyId;
    }

    /**
     * @return mixed
     */
    public function getInternalWebPropertyId()
    {
        return $this->internalWebPropertyId;
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
     * @param $profileName
     */
    public function setProfileName($profileName)
    {
        $this->profileName = $profileName;
    }

    /**
     * @return mixed
     */
    public function getProfileName()
    {
        return $this->profileName;
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

    /**
     * @param $webPropertyId
     */
    public function setWebPropertyId($webPropertyId)
    {
        $this->webPropertyId = $webPropertyId;
    }

    /**
     * @return mixed
     */
    public function getWebPropertyId()
    {
        return $this->webPropertyId;
    }
}

/**
 * Class Google_McfDataQuery
 */
class Google_McfDataQuery extends Google_Model
{
    /**
     * @var
     */
    public $dimensions;
    /**
     * @var
     */
    public $end_date;
    /**
     * @var
     */
    public $filters;
    /**
     * @var
     */
    public $ids;
    /**
     * @var
     */
    public $max_results;
    /**
     * @var
     */
    public $metrics;
    /**
     * @var
     */
    public $segment;
    /**
     * @var
     */
    public $sort;
    /**
     * @var
     */
    public $start_date;
    /**
     * @var
     */
    public $start_index;

    /**
     * @param $dimensions
     */
    public function setDimensions($dimensions)
    {
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
     * @param $end_date
     */
    public function setEnd_date($end_date)
    {
        $this->end_date = $end_date;
    }

    /**
     * @return mixed
     */
    public function getEnd_date()
    {
        return $this->end_date;
    }

    /**
     * @param $filters
     */
    public function setFilters($filters)
    {
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
     * @param $ids
     */
    public function setIds($ids)
    {
        $this->ids = $ids;
    }

    /**
     * @return mixed
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * @param $max_results
     */
    public function setMax_results($max_results)
    {
        $this->max_results = $max_results;
    }

    /**
     * @return mixed
     */
    public function getMax_results()
    {
        return $this->max_results;
    }

    /**
     * @param $metrics
     * @throws Google_Exception
     */
    public function setMetrics(/* array(Google_string) */
        $metrics)
    {
        $this->assertIsArray($metrics, 'Google_string', __METHOD__);
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
     * @param $segment
     */
    public function setSegment($segment)
    {
        $this->segment = $segment;
    }

    /**
     * @return mixed
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * @param $sort
     * @throws Google_Exception
     */
    public function setSort(/* array(Google_string) */
        $sort)
    {
        $this->assertIsArray($sort, 'Google_string', __METHOD__);
        $this->sort = $sort;
    }

    /**
     * @return mixed
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param $start_date
     */
    public function setStart_date($start_date)
    {
        $this->start_date = $start_date;
    }

    /**
     * @return mixed
     */
    public function getStart_date()
    {
        return $this->start_date;
    }

    /**
     * @param $start_index
     */
    public function setStart_index($start_index)
    {
        $this->start_index = $start_index;
    }

    /**
     * @return mixed
     */
    public function getStart_index()
    {
        return $this->start_index;
    }
}

/**
 * Class Google_McfDataRows
 */
class Google_McfDataRows extends Google_Model
{
    /**
     * @var string
     */
    protected $__conversionPathValueType = 'Google_McfDataRowsConversionPathValue';
    /**
     * @var string
     */
    protected $__conversionPathValueDataType = 'array';
    /**
     * @var
     */
    public $conversionPathValue;
    /**
     * @var
     */
    public $primitiveValue;

    /**
     * @param $conversionPathValue
     * @throws Google_Exception
     */
    public function setConversionPathValue(/* array(Google_McfDataRowsConversionPathValue) */
        $conversionPathValue)
    {
        $this->assertIsArray($conversionPathValue, 'Google_McfDataRowsConversionPathValue', __METHOD__);
        $this->conversionPathValue = $conversionPathValue;
    }

    /**
     * @return mixed
     */
    public function getConversionPathValue()
    {
        return $this->conversionPathValue;
    }

    /**
     * @param $primitiveValue
     */
    public function setPrimitiveValue($primitiveValue)
    {
        $this->primitiveValue = $primitiveValue;
    }

    /**
     * @return mixed
     */
    public function getPrimitiveValue()
    {
        return $this->primitiveValue;
    }
}

/**
 * Class Google_McfDataRowsConversionPathValue
 */
class Google_McfDataRowsConversionPathValue extends Google_Model
{
    /**
     * @var
     */
    public $interactionType;
    /**
     * @var
     */
    public $nodeValue;

    /**
     * @param $interactionType
     */
    public function setInteractionType($interactionType)
    {
        $this->interactionType = $interactionType;
    }

    /**
     * @return mixed
     */
    public function getInteractionType()
    {
        return $this->interactionType;
    }

    /**
     * @param $nodeValue
     */
    public function setNodeValue($nodeValue)
    {
        $this->nodeValue = $nodeValue;
    }

    /**
     * @return mixed
     */
    public function getNodeValue()
    {
        return $this->nodeValue;
    }
}

/**
 * Class Google_Profile
 */
class Google_Profile extends Google_Model
{
    /**
     * @var
     */
    public $accountId;
    /**
     * @var string
     */
    protected $__childLinkType = 'Google_ProfileChildLink';
    /**
     * @var string
     */
    protected $__childLinkDataType = '';
    /**
     * @var
     */
    public $childLink;
    /**
     * @var
     */
    public $created;
    /**
     * @var
     */
    public $currency;
    /**
     * @var
     */
    public $defaultPage;
    /**
     * @var
     */
    public $eCommerceTracking;
    /**
     * @var
     */
    public $excludeQueryParameters;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $internalWebPropertyId;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $name;
    /**
     * @var string
     */
    protected $__parentLinkType = 'Google_ProfileParentLink';
    /**
     * @var string
     */
    protected $__parentLinkDataType = '';
    /**
     * @var
     */
    public $parentLink;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $siteSearchCategoryParameters;
    /**
     * @var
     */
    public $siteSearchQueryParameters;
    /**
     * @var
     */
    public $timezone;
    /**
     * @var
     */
    public $type;
    /**
     * @var
     */
    public $updated;
    /**
     * @var
     */
    public $webPropertyId;
    /**
     * @var
     */
    public $websiteUrl;

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
     * @param Google_ProfileChildLink $childLink
     */
    public function setChildLink(Google_ProfileChildLink $childLink)
    {
        $this->childLink = $childLink;
    }

    /**
     * @return mixed
     */
    public function getChildLink()
    {
        return $this->childLink;
    }

    /**
     * @param $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param $defaultPage
     */
    public function setDefaultPage($defaultPage)
    {
        $this->defaultPage = $defaultPage;
    }

    /**
     * @return mixed
     */
    public function getDefaultPage()
    {
        return $this->defaultPage;
    }

    /**
     * @param $eCommerceTracking
     */
    public function setECommerceTracking($eCommerceTracking)
    {
        $this->eCommerceTracking = $eCommerceTracking;
    }

    /**
     * @return mixed
     */
    public function getECommerceTracking()
    {
        return $this->eCommerceTracking;
    }

    /**
     * @param $excludeQueryParameters
     */
    public function setExcludeQueryParameters($excludeQueryParameters)
    {
        $this->excludeQueryParameters = $excludeQueryParameters;
    }

    /**
     * @return mixed
     */
    public function getExcludeQueryParameters()
    {
        return $this->excludeQueryParameters;
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
     * @param $internalWebPropertyId
     */
    public function setInternalWebPropertyId($internalWebPropertyId)
    {
        $this->internalWebPropertyId = $internalWebPropertyId;
    }

    /**
     * @return mixed
     */
    public function getInternalWebPropertyId()
    {
        return $this->internalWebPropertyId;
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
     * @param Google_ProfileParentLink $parentLink
     */
    public function setParentLink(Google_ProfileParentLink $parentLink)
    {
        $this->parentLink = $parentLink;
    }

    /**
     * @return mixed
     */
    public function getParentLink()
    {
        return $this->parentLink;
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
     * @param $siteSearchCategoryParameters
     */
    public function setSiteSearchCategoryParameters($siteSearchCategoryParameters)
    {
        $this->siteSearchCategoryParameters = $siteSearchCategoryParameters;
    }

    /**
     * @return mixed
     */
    public function getSiteSearchCategoryParameters()
    {
        return $this->siteSearchCategoryParameters;
    }

    /**
     * @param $siteSearchQueryParameters
     */
    public function setSiteSearchQueryParameters($siteSearchQueryParameters)
    {
        $this->siteSearchQueryParameters = $siteSearchQueryParameters;
    }

    /**
     * @return mixed
     */
    public function getSiteSearchQueryParameters()
    {
        return $this->siteSearchQueryParameters;
    }

    /**
     * @param $timezone
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
    }

    /**
     * @return mixed
     */
    public function getTimezone()
    {
        return $this->timezone;
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
     * @param $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param $webPropertyId
     */
    public function setWebPropertyId($webPropertyId)
    {
        $this->webPropertyId = $webPropertyId;
    }

    /**
     * @return mixed
     */
    public function getWebPropertyId()
    {
        return $this->webPropertyId;
    }

    /**
     * @param $websiteUrl
     */
    public function setWebsiteUrl($websiteUrl)
    {
        $this->websiteUrl = $websiteUrl;
    }

    /**
     * @return mixed
     */
    public function getWebsiteUrl()
    {
        return $this->websiteUrl;
    }
}

/**
 * Class Google_ProfileChildLink
 */
class Google_ProfileChildLink extends Google_Model
{
    /**
     * @var
     */
    public $href;
    /**
     * @var
     */
    public $type;

    /**
     * @param $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }

    /**
     * @return mixed
     */
    public function getHref()
    {
        return $this->href;
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
 * Class Google_ProfileParentLink
 */
class Google_ProfileParentLink extends Google_Model
{
    /**
     * @var
     */
    public $href;
    /**
     * @var
     */
    public $type;

    /**
     * @param $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }

    /**
     * @return mixed
     */
    public function getHref()
    {
        return $this->href;
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
 * Class Google_Profiles
 */
class Google_Profiles extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Profile';
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
    public $itemsPerPage;
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
    public $previousLink;
    /**
     * @var
     */
    public $startIndex;
    /**
     * @var
     */
    public $totalResults;
    /**
     * @var
     */
    public $username;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Profile) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Profile', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param $itemsPerPage
     */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
    }

    /**
     * @return mixed
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
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

    public function getNextLink()
    {
        return $this->nextLink;
    }

    /**
     * @param $previousLink
     */
    public function setPreviousLink($previousLink)
    {
        $this->previousLink = $previousLink;
    }

    /**
     * @return mixed
     */
    public function getPreviousLink()
    {
        return $this->previousLink;
    }

    /**
     * @param $startIndex
     */
    public function setStartIndex($startIndex)
    {
        $this->startIndex = $startIndex;
    }

    /**
     * @return mixed
     */
    public function getStartIndex()
    {
        return $this->startIndex;
    }

    /**
     * @param $totalResults
     */
    public function setTotalResults($totalResults)
    {
        $this->totalResults = $totalResults;
    }

    /**
     * @return mixed
     */
    public function getTotalResults()
    {
        return $this->totalResults;
    }

    /**
     * @param $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }
}

/**
 * Class Google_RealtimeData
 */
class Google_RealtimeData extends Google_Model
{
    /**
     * @var string
     */
    protected $__columnHeadersType = 'Google_RealtimeDataColumnHeaders';
    /**
     * @var string
     */
    protected $__columnHeadersDataType = 'array';
    /**
     * @var
     */
    public $columnHeaders;
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
    protected $__profileInfoType = 'Google_RealtimeDataProfileInfo';
    /**
     * @var string
     */
    protected $__profileInfoDataType = '';
    /**
     * @var
     */
    public $profileInfo;
    /**
     * @var string
     */
    protected $__queryType = 'Google_RealtimeDataQuery';
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
    public $rows;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $totalResults;
    /**
     * @var
     */
    public $totalsForAllResults;

    /**
     * @param $columnHeaders
     * @throws Google_Exception
     */
    public function setColumnHeaders(/* array(Google_RealtimeDataColumnHeaders) */
        $columnHeaders)
    {
        $this->assertIsArray($columnHeaders, 'Google_RealtimeDataColumnHeaders', __METHOD__);
        $this->columnHeaders = $columnHeaders;
    }

    /**
     * @return mixed
     */
    public function getColumnHeaders()
    {
        return $this->columnHeaders;
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
     * @param Google_RealtimeDataProfileInfo $profileInfo
     */
    public function setProfileInfo(Google_RealtimeDataProfileInfo $profileInfo)
    {
        $this->profileInfo = $profileInfo;
    }

    /**
     * @return mixed
     */
    public function getProfileInfo()
    {
        return $this->profileInfo;
    }

    /**
     * @param Google_RealtimeDataQuery $query
     */
    public function setQuery(Google_RealtimeDataQuery $query)
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
     * @param $rows
     * @throws Google_Exception
     */
    public function setRows(/* array(Google_string) */
        $rows)
    {
        $this->assertIsArray($rows, 'Google_string', __METHOD__);
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
     * @param $totalResults
     */
    public function setTotalResults($totalResults)
    {
        $this->totalResults = $totalResults;
    }

    /**
     * @return mixed
     */
    public function getTotalResults()
    {
        return $this->totalResults;
    }

    /**
     * @param $totalsForAllResults
     */
    public function setTotalsForAllResults($totalsForAllResults)
    {
        $this->totalsForAllResults = $totalsForAllResults;
    }

    /**
     * @return mixed
     */
    public function getTotalsForAllResults()
    {
        return $this->totalsForAllResults;
    }
}

/**
 * Class Google_RealtimeDataColumnHeaders
 */
class Google_RealtimeDataColumnHeaders extends Google_Model
{
    /**
     * @var
     */
    public $columnType;
    /**
     * @var
     */
    public $dataType;
    /**
     * @var
     */
    public $name;

    /**
     * @param $columnType
     */
    public function setColumnType($columnType)
    {
        $this->columnType = $columnType;
    }

    /**
     * @return mixed
     */
    public function getColumnType()
    {
        return $this->columnType;
    }

    /**
     * @param $dataType
     */
    public function setDataType($dataType)
    {
        $this->dataType = $dataType;
    }

    /**
     * @return mixed
     */
    public function getDataType()
    {
        return $this->dataType;
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
 * Class Google_RealtimeDataProfileInfo
 */
class Google_RealtimeDataProfileInfo extends Google_Model
{
    /**
     * @var
     */
    public $accountId;
    /**
     * @var
     */
    public $internalWebPropertyId;
    /**
     * @var
     */
    public $profileId;
    /**
     * @var
     */
    public $profileName;
    /**
     * @var
     */
    public $tableId;
    /**
     * @var
     */
    public $webPropertyId;

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
     * @param $internalWebPropertyId
     */
    public function setInternalWebPropertyId($internalWebPropertyId)
    {
        $this->internalWebPropertyId = $internalWebPropertyId;
    }

    /**
     * @return mixed
     */
    public function getInternalWebPropertyId()
    {
        return $this->internalWebPropertyId;
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
     * @param $profileName
     */
    public function setProfileName($profileName)
    {
        $this->profileName = $profileName;
    }

    /**
     * @return mixed
     */
    public function getProfileName()
    {
        return $this->profileName;
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

    /**
     * @param $webPropertyId
     */
    public function setWebPropertyId($webPropertyId)
    {
        $this->webPropertyId = $webPropertyId;
    }

    /**
     * @return mixed
     */
    public function getWebPropertyId()
    {
        return $this->webPropertyId;
    }
}

/**
 * Class Google_RealtimeDataQuery
 */
class Google_RealtimeDataQuery extends Google_Model
{
    /**
     * @var
     */
    public $dimensions;
    /**
     * @var
     */
    public $filters;
    /**
     * @var
     */
    public $ids;
    /**
     * @var
     */
    public $max_results;
    /**
     * @var
     */
    public $metrics;
    /**
     * @var
     */
    public $sort;

    /**
     * @param $dimensions
     */
    public function setDimensions($dimensions)
    {
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
     * @param $filters
     */
    public function setFilters($filters)
    {
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
     * @param $ids
     */
    public function setIds($ids)
    {
        $this->ids = $ids;
    }

    /**
     * @return mixed
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * @param $max_results
     */
    public function setMax_results($max_results)
    {
        $this->max_results = $max_results;
    }

    /**
     * @return mixed
     */
    public function getMax_results()
    {
        return $this->max_results;
    }

    /**
     * @param $metrics
     * @throws Google_Exception
     */
    public function setMetrics(/* array(Google_string) */
        $metrics)
    {
        $this->assertIsArray($metrics, 'Google_string', __METHOD__);
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
     * @param $sort
     * @throws Google_Exception
     */
    public function setSort(/* array(Google_string) */
        $sort)
    {
        $this->assertIsArray($sort, 'Google_string', __METHOD__);
        $this->sort = $sort;
    }

    /**
     * @return mixed
     */
    public function getSort()
    {
        return $this->sort;
    }
}

/**
 * Class Google_Segment
 */
class Google_Segment extends Google_Model
{
    /**
     * @var
     */
    public $created;
    /**
     * @var
     */
    public $definition;
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
    public $segmentId;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $updated;

    /**
     * @param $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param $definition
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;
    }

    /**
     * @return mixed
     */
    public function getDefinition()
    {
        return $this->definition;
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
     * @param $segmentId
     */
    public function setSegmentId($segmentId)
    {
        $this->segmentId = $segmentId;
    }

    /**
     * @return mixed
     */
    public function getSegmentId()
    {
        return $this->segmentId;
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
     * @param $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getUpdated()
    {
        return $this->updated;
    }
}

/**
 * Class Google_Segments
 */
class Google_Segments extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Segment';
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
    public $itemsPerPage;
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
    public $previousLink;
    /**
     * @var
     */
    public $startIndex;
    /**
     * @var
     */
    public $totalResults;
    /**
     * @var
     */
    public $username;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Segment) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Segment', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param $itemsPerPage
     */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
    }

    /**
     * @return mixed
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
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

    public function getNextLink()
    {
        return $this->nextLink;
    }

    /**
     * @param $previousLink
     */
    public function setPreviousLink($previousLink)
    {
        $this->previousLink = $previousLink;
    }

    /**
     * @return mixed
     */
    public function getPreviousLink()
    {
        return $this->previousLink;
    }

    /**
     * @param $startIndex
     */
    public function setStartIndex($startIndex)
    {
        $this->startIndex = $startIndex;
    }

    /**
     * @return mixed
     */
    public function getStartIndex()
    {
        return $this->startIndex;
    }

    /**
     * @param $totalResults
     */
    public function setTotalResults($totalResults)
    {
        $this->totalResults = $totalResults;
    }

    /**
     * @return mixed
     */
    public function getTotalResults()
    {
        return $this->totalResults;
    }

    /**
     * @param $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }
}

/**
 * Class Google_Webproperties
 */
class Google_Webproperties extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Webproperty';
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
    public $itemsPerPage;
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
    public $previousLink;
    /**
     * @var
     */
    public $startIndex;
    /**
     * @var
     */
    public $totalResults;
    /**
     * @var
     */
    public $username;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Webproperty) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Webproperty', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param $itemsPerPage
     */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
    }

    /**
     * @return mixed
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
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

    public function getNextLink()
    {
        return $this->nextLink;
    }

    /**
     * @param $previousLink
     */
    public function setPreviousLink($previousLink)
    {
        $this->previousLink = $previousLink;
    }

    /**
     * @return mixed
     */
    public function getPreviousLink()
    {
        return $this->previousLink;
    }

    /**
     * @param $startIndex
     */
    public function setStartIndex($startIndex)
    {
        $this->startIndex = $startIndex;
    }

    /**
     * @return mixed
     */
    public function getStartIndex()
    {
        return $this->startIndex;
    }

    /**
     * @param $totalResults
     */
    public function setTotalResults($totalResults)
    {
        $this->totalResults = $totalResults;
    }

    /**
     * @return mixed
     */
    public function getTotalResults()
    {
        return $this->totalResults;
    }

    /**
     * @param $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }
}

/**
 * Class Google_Webproperty
 */
class Google_Webproperty extends Google_Model
{
    /**
     * @var
     */
    public $accountId;
    /**
     * @var string
     */
    protected $__childLinkType = 'Google_WebpropertyChildLink';
    /**
     * @var string
     */
    protected $__childLinkDataType = '';
    /**
     * @var
     */
    public $childLink;
    /**
     * @var
     */
    public $created;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $industryVertical;
    /**
     * @var
     */
    public $internalWebPropertyId;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $level;
    /**
     * @var
     */
    public $name;
    /**
     * @var string
     */
    protected $__parentLinkType = 'Google_WebpropertyParentLink';
    /**
     * @var string
     */
    protected $__parentLinkDataType = '';
    /**
     * @var
     */
    public $parentLink;
    /**
     * @var
     */
    public $profileCount;
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
    public $websiteUrl;

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
     * @param Google_WebpropertyChildLink $childLink
     */
    public function setChildLink(Google_WebpropertyChildLink $childLink)
    {
        $this->childLink = $childLink;
    }

    /**
     * @return mixed
     */
    public function getChildLink()
    {
        return $this->childLink;
    }

    /**
     * @param $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
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
     * @param $industryVertical
     */
    public function setIndustryVertical($industryVertical)
    {
        $this->industryVertical = $industryVertical;
    }

    /**
     * @return mixed
     */
    public function getIndustryVertical()
    {
        return $this->industryVertical;
    }

    /**
     * @param $internalWebPropertyId
     */
    public function setInternalWebPropertyId($internalWebPropertyId)
    {
        $this->internalWebPropertyId = $internalWebPropertyId;
    }

    /**
     * @return mixed
     */
    public function getInternalWebPropertyId()
    {
        return $this->internalWebPropertyId;
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
     * @param $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
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
     * @param Google_WebpropertyParentLink $parentLink
     */
    public function setParentLink(Google_WebpropertyParentLink $parentLink)
    {
        $this->parentLink = $parentLink;
    }

    /**
     * @return mixed
     */
    public function getParentLink()
    {
        return $this->parentLink;
    }

    /**
     * @param $profileCount
     */
    public function setProfileCount($profileCount)
    {
        $this->profileCount = $profileCount;
    }

    /**
     * @return mixed
     */
    public function getProfileCount()
    {
        return $this->profileCount;
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
     * @param $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param $websiteUrl
     */
    public function setWebsiteUrl($websiteUrl)
    {
        $this->websiteUrl = $websiteUrl;
    }

    /**
     * @return mixed
     */
    public function getWebsiteUrl()
    {
        return $this->websiteUrl;
    }
}

/**
 * Class Google_WebpropertyChildLink
 */
class Google_WebpropertyChildLink extends Google_Model
{
    /**
     * @var
     */
    public $href;
    /**
     * @var
     */
    public $type;

    /**
     * @param $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }

    /**
     * @return mixed
     */
    public function getHref()
    {
        return $this->href;
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
 * Class Google_WebpropertyParentLink
 */
class Google_WebpropertyParentLink extends Google_Model
{
    /**
     * @var
     */
    public $href;
    /**
     * @var
     */
    public $type;

    /**
     * @param $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }

    /**
     * @return mixed
     */
    public function getHref()
    {
        return $this->href;
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
