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
 * The "adclients" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new Google_AdExchangeSellerService(...);
 *   $adclients = $adexchangesellerService->adclients;
 *  </code>
 */
class Google_AdclientsServiceResource extends Google_ServiceResource
{

    /**
     * List all ad clients in this Ad Exchange account. (adclients.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_AdClients
     * @throws Google_Exception
     * @opt_param string maxResults The maximum number of ad clients to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through ad clients. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     */
    public function listAdclients($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_AdClients($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "adunits" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new Google_AdExchangeSellerService(...);
 *   $adunits = $adexchangesellerService->adunits;
 *  </code>
 */
class Google_AdunitsServiceResource extends Google_ServiceResource
{

    /**
     * Gets the specified ad unit in the specified ad client. (adunits.get)
     *
     * @param string $adClientId Ad client for which to get the ad unit.
     * @param string $adUnitId Ad unit to retrieve.
     * @param array $optParams Optional parameters.
     * @return Google_AdUnit
     * @throws Google_Exception
     */
    public function get($adClientId, $adUnitId, $optParams = [])
    {
        $params = ['adClientId' => $adClientId, 'adUnitId' => $adUnitId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_AdUnit($data);
        } else {
            return $data;
        }
    }

    /**
     * List all ad units in the specified ad client for this Ad Exchange account. (adunits.list)
     *
     * @param string $adClientId Ad client for which to list ad units.
     * @param array $optParams Optional parameters.
     * @return Google_AdUnits
     * @throws Google_Exception
     * @opt_param bool includeInactive Whether to include inactive ad units. Default: true.
     * @opt_param string maxResults The maximum number of ad units to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through ad units. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     */
    public function listAdunits($adClientId, $optParams = [])
    {
        $params = ['adClientId' => $adClientId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_AdUnits($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "customchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new Google_AdExchangeSellerService(...);
 *   $customchannels = $adexchangesellerService->customchannels;
 *  </code>
 */
class Google_AdunitsCustomchannelsServiceResource extends Google_ServiceResource
{

    /**
     * List all custom channels which the specified ad unit belongs to. (customchannels.list)
     *
     * @param string $adClientId Ad client which contains the ad unit.
     * @param string $adUnitId Ad unit for which to list custom channels.
     * @param array $optParams Optional parameters.
     * @return Google_CustomChannels
     * @throws Google_Exception
     * @opt_param string maxResults The maximum number of custom channels to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through custom channels. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     */
    public function listAdunitsCustomchannels($adClientId, $adUnitId, $optParams = [])
    {
        $params = ['adClientId' => $adClientId, 'adUnitId' => $adUnitId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_CustomChannels($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "customchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new Google_AdExchangeSellerService(...);
 *   $customchannels = $adexchangesellerService->customchannels;
 *  </code>
 */
class Google_CustomchannelsServiceResource extends Google_ServiceResource
{

    /**
     * Get the specified custom channel from the specified ad client. (customchannels.get)
     *
     * @param string $adClientId Ad client which contains the custom channel.
     * @param string $customChannelId Custom channel to retrieve.
     * @param array $optParams Optional parameters.
     * @return Google_CustomChannel
     * @throws Google_Exception
     */
    public function get($adClientId, $customChannelId, $optParams = [])
    {
        $params = ['adClientId' => $adClientId, 'customChannelId' => $customChannelId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_CustomChannel($data);
        } else {
            return $data;
        }
    }

    /**
     * List all custom channels in the specified ad client for this Ad Exchange account.
     * (customchannels.list)
     *
     * @param string $adClientId Ad client for which to list custom channels.
     * @param array $optParams Optional parameters.
     * @return Google_CustomChannels
     * @throws Google_Exception
     * @opt_param string maxResults The maximum number of custom channels to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through custom channels. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     */
    public function listCustomchannels($adClientId, $optParams = [])
    {
        $params = ['adClientId' => $adClientId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_CustomChannels($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "adunits" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new Google_AdExchangeSellerService(...);
 *   $adunits = $adexchangesellerService->adunits;
 *  </code>
 */
class Google_CustomchannelsAdunitsServiceResource extends Google_ServiceResource
{

    /**
     * List all ad units in the specified custom channel. (adunits.list)
     *
     * @param string $adClientId Ad client which contains the custom channel.
     * @param string $customChannelId Custom channel for which to list ad units.
     * @param array $optParams Optional parameters.
     * @return Google_AdUnits
     * @throws Google_Exception
     * @opt_param bool includeInactive Whether to include inactive ad units. Default: true.
     * @opt_param string maxResults The maximum number of ad units to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through ad units. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     */
    public function listCustomchannelsAdunits($adClientId, $customChannelId, $optParams = [])
    {
        $params = ['adClientId' => $adClientId, 'customChannelId' => $customChannelId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_AdUnits($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "reports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new Google_AdExchangeSellerService(...);
 *   $reports = $adexchangesellerService->reports;
 *  </code>
 */
class Google_ReportsServiceResource extends Google_ServiceResource
{

    /**
     * Generate an Ad Exchange report based on the report request sent in the query parameters. Returns
     * the result as JSON; to retrieve output in CSV format specify "alt=csv" as a query parameter.
     * (reports.generate)
     *
     * @param string $startDate Start of the date range to report on in "YYYY-MM-DD" format, inclusive.
     * @param string $endDate End of the date range to report on in "YYYY-MM-DD" format, inclusive.
     * @param array $optParams Optional parameters.
     * @return Google_Report
     * @throws Google_Exception
     * @opt_param string dimension Dimensions to base the report on.
     * @opt_param string filter Filters to be run on the report.
     * @opt_param string locale Optional locale to use for translating report output to a local language. Defaults to "en_US" if not specified.
     * @opt_param string maxResults The maximum number of rows of report data to return.
     * @opt_param string metric Numeric columns to include in the report.
     * @opt_param string sort The name of a dimension or metric to sort the resulting report on, optionally prefixed with "+" to sort ascending or "-" to sort descending. If no prefix is specified, the column is sorted ascending.
     * @opt_param string startIndex Index of the first row of report data to return.
     */
    public function generate($startDate, $endDate, $optParams = [])
    {
        $params = ['startDate' => $startDate, 'endDate' => $endDate];
        $params = array_merge($params, $optParams);
        $data = $this->__call('generate', [$params]);
        if ($this->useObjects()) {
            return new Google_Report($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "saved" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new Google_AdExchangeSellerService(...);
 *   $saved = $adexchangesellerService->saved;
 *  </code>
 */
class Google_ReportsSavedServiceResource extends Google_ServiceResource
{

    /**
     * Generate an Ad Exchange report based on the saved report ID sent in the query parameters.
     * (saved.generate)
     *
     * @param string $savedReportId The saved report to retrieve.
     * @param array $optParams Optional parameters.
     * @return Google_Report
     * @throws Google_Exception
     * @opt_param string locale Optional locale to use for translating report output to a local language. Defaults to "en_US" if not specified.
     * @opt_param int maxResults The maximum number of rows of report data to return.
     * @opt_param int startIndex Index of the first row of report data to return.
     */
    public function generate($savedReportId, $optParams = [])
    {
        $params = ['savedReportId' => $savedReportId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('generate', [$params]);
        if ($this->useObjects()) {
            return new Google_Report($data);
        } else {
            return $data;
        }
    }

    /**
     * List all saved reports in this Ad Exchange account. (saved.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_SavedReports
     * @throws Google_Exception
     * @opt_param int maxResults The maximum number of saved reports to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through saved reports. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     */
    public function listReportsSaved($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_SavedReports($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "urlchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new Google_AdExchangeSellerService(...);
 *   $urlchannels = $adexchangesellerService->urlchannels;
 *  </code>
 */
class Google_UrlchannelsServiceResource extends Google_ServiceResource
{

    /**
     * List all URL channels in the specified ad client for this Ad Exchange account. (urlchannels.list)
     *
     * @param string $adClientId Ad client for which to list URL channels.
     * @param array $optParams Optional parameters.
     * @return Google_UrlChannels
     * @throws Google_Exception
     * @opt_param string maxResults The maximum number of URL channels to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through URL channels. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     */
    public function listUrlchannels($adClientId, $optParams = [])
    {
        $params = ['adClientId' => $adClientId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_UrlChannels($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_AdExchangeSeller (v1).
 *
 * <p>
 * Gives Ad Exchange seller users access to their inventory and the ability to generate reports
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/ad-exchange/seller-rest/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_AdExchangeSellerService extends Google_Service
{
    /**
     * @var Google_AdclientsServiceResource
     */
    public $adclients;
    /**
     * @var Google_AdunitsServiceResource
     */
    public $adunits;
    /**
     * @var Google_AdunitsCustomchannelsServiceResource
     */
    public $adunits_customchannels;
    /**
     * @var Google_CustomchannelsServiceResource
     */
    public $customchannels;
    /**
     * @var Google_CustomchannelsAdunitsServiceResource
     */
    public $customchannels_adunits;
    /**
     * @var Google_ReportsServiceResource
     */
    public $reports;
    /**
     * @var Google_ReportsSavedServiceResource
     */
    public $reports_saved;
    /**
     * @var Google_UrlchannelsServiceResource
     */
    public $urlchannels;

    /**
     * Constructs the internal representation of the AdExchangeSeller service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'adexchangeseller/v1/';
        $this->version = 'v1';
        $this->serviceName = 'adexchangeseller';

        $client->addService($this->serviceName, $this->version);
        $this->adclients = new Google_AdclientsServiceResource($this, $this->serviceName, 'adclients', json_decode('{"methods": {"list": {"id": "adexchangeseller.adclients.list", "path": "adclients", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdClients"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}}}', true));
        $this->adunits = new Google_AdunitsServiceResource($this, $this->serviceName, 'adunits', json_decode('{"methods": {"get": {"id": "adexchangeseller.adunits.get", "path": "adclients/{adClientId}/adunits/{adUnitId}", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "adUnitId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "AdUnit"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}, "list": {"id": "adexchangeseller.adunits.list", "path": "adclients/{adClientId}/adunits", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "includeInactive": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdUnits"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}}}', true));
        $this->adunits_customchannels = new Google_AdunitsCustomchannelsServiceResource($this, $this->serviceName, 'customchannels', json_decode('{"methods": {"list": {"id": "adexchangeseller.adunits.customchannels.list", "path": "adclients/{adClientId}/adunits/{adUnitId}/customchannels", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "adUnitId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "CustomChannels"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}}}', true));
        $this->customchannels = new Google_CustomchannelsServiceResource($this, $this->serviceName, 'customchannels', json_decode('{"methods": {"get": {"id": "adexchangeseller.customchannels.get", "path": "adclients/{adClientId}/customchannels/{customChannelId}", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "customChannelId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CustomChannel"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}, "list": {"id": "adexchangeseller.customchannels.list", "path": "adclients/{adClientId}/customchannels", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "CustomChannels"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}}}', true));
        $this->customchannels_adunits = new Google_CustomchannelsAdunitsServiceResource($this, $this->serviceName, 'adunits', json_decode('{"methods": {"list": {"id": "adexchangeseller.customchannels.adunits.list", "path": "adclients/{adClientId}/customchannels/{customChannelId}/adunits", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "customChannelId": {"type": "string", "required": true, "location": "path"}, "includeInactive": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdUnits"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}}}', true));
        $this->reports = new Google_ReportsServiceResource($this, $this->serviceName, 'reports', json_decode('{"methods": {"generate": {"id": "adexchangeseller.reports.generate", "path": "reports", "httpMethod": "GET", "parameters": {"dimension": {"type": "string", "repeated": true, "location": "query"}, "endDate": {"type": "string", "required": true, "location": "query"}, "filter": {"type": "string", "repeated": true, "location": "query"}, "locale": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "50000", "location": "query"}, "metric": {"type": "string", "repeated": true, "location": "query"}, "sort": {"type": "string", "repeated": true, "location": "query"}, "startDate": {"type": "string", "required": true, "location": "query"}, "startIndex": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "5000", "location": "query"}}, "response": {"$ref": "Report"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"], "supportsMediaDownload": true}}}', true));
        $this->reports_saved = new Google_ReportsSavedServiceResource($this, $this->serviceName, 'saved', json_decode('{"methods": {"generate": {"id": "adexchangeseller.reports.saved.generate", "path": "reports/{savedReportId}", "httpMethod": "GET", "parameters": {"locale": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "50000", "location": "query"}, "savedReportId": {"type": "string", "required": true, "location": "path"}, "startIndex": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "5000", "location": "query"}}, "response": {"$ref": "Report"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}, "list": {"id": "adexchangeseller.reports.saved.list", "path": "reports/saved", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "SavedReports"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}}}', true));
        $this->urlchannels = new Google_UrlchannelsServiceResource($this, $this->serviceName, 'urlchannels', json_decode('{"methods": {"list": {"id": "adexchangeseller.urlchannels.list", "path": "adclients/{adClientId}/urlchannels", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "UrlChannels"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}}}', true));

    }
}


/**
 * Class Google_AdClient
 */
class Google_AdClient extends Google_Model
{
    /**
     * @var
     */
    public $arcOptIn;
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
    public $productCode;
    /**
     * @var
     */
    public $supportsReporting;

    /**
     * @param $arcOptIn
     */
    public function setArcOptIn($arcOptIn)
    {
        $this->arcOptIn = $arcOptIn;
    }

    /**
     * @return mixed
     */
    public function getArcOptIn()
    {
        return $this->arcOptIn;
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
     * @param $productCode
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
    }

    /**
     * @return mixed
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @param $supportsReporting
     */
    public function setSupportsReporting($supportsReporting)
    {
        $this->supportsReporting = $supportsReporting;
    }

    /**
     * @return mixed
     */
    public function getSupportsReporting()
    {
        return $this->supportsReporting;
    }
}

/**
 * Class Google_AdClients
 */
class Google_AdClients extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_AdClient';
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
    public function setItems(/* array(Google_AdClient) */
        $items)
    {
        $this->assertIsArray($items, 'Google_AdClient', __METHOD__);
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
 * Class Google_AdUnit
 */
class Google_AdUnit extends Google_Model
{
    /**
     * @var
     */
    public $code;
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
    public $status;

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
}

/**
 * Class Google_AdUnits
 */
class Google_AdUnits extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_AdUnit';
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
    public function setItems(/* array(Google_AdUnit) */
        $items)
    {
        $this->assertIsArray($items, 'Google_AdUnit', __METHOD__);
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
 * Class Google_CustomChannel
 */
class Google_CustomChannel extends Google_Model
{
    /**
     * @var
     */
    public $code;
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
    protected $__targetingInfoType = 'Google_CustomChannelTargetingInfo';
    /**
     * @var string
     */
    protected $__targetingInfoDataType = '';
    /**
     * @var
     */
    public $targetingInfo;

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
     * @param Google_CustomChannelTargetingInfo $targetingInfo
     */
    public function setTargetingInfo(Google_CustomChannelTargetingInfo $targetingInfo)
    {
        $this->targetingInfo = $targetingInfo;
    }

    /**
     * @return mixed
     */
    public function getTargetingInfo()
    {
        return $this->targetingInfo;
    }
}

/**
 * Class Google_CustomChannelTargetingInfo
 */
class Google_CustomChannelTargetingInfo extends Google_Model
{
    /**
     * @var
     */
    public $adsAppearOn;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $location;
    /**
     * @var
     */
    public $siteLanguage;

    /**
     * @param $adsAppearOn
     */
    public function setAdsAppearOn($adsAppearOn)
    {
        $this->adsAppearOn = $adsAppearOn;
    }

    /**
     * @return mixed
     */
    public function getAdsAppearOn()
    {
        return $this->adsAppearOn;
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
     * @param $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param $siteLanguage
     */
    public function setSiteLanguage($siteLanguage)
    {
        $this->siteLanguage = $siteLanguage;
    }

    /**
     * @return mixed
     */
    public function getSiteLanguage()
    {
        return $this->siteLanguage;
    }
}

/**
 * Class Google_CustomChannels
 */
class Google_CustomChannels extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_CustomChannel';
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
    public function setItems(/* array(Google_CustomChannel) */
        $items)
    {
        $this->assertIsArray($items, 'Google_CustomChannel', __METHOD__);
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
 * Class Google_Report
 */
class Google_Report extends Google_Model
{
    /**
     * @var
     */
    public $averages;
    /**
     * @var string
     */
    protected $__headersType = 'Google_ReportHeaders';
    /**
     * @var string
     */
    protected $__headersDataType = 'array';
    /**
     * @var
     */
    public $headers;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $rows;
    /**
     * @var
     */
    public $totalMatchedRows;
    /**
     * @var
     */
    public $totals;
    /**
     * @var
     */
    public $warnings;

    /**
     * @param $averages
     * @throws Google_Exception
     */
    public function setAverages(/* array(Google_string) */
        $averages)
    {
        $this->assertIsArray($averages, 'Google_string', __METHOD__);
        $this->averages = $averages;
    }

    /**
     * @return mixed
     */
    public function getAverages()
    {
        return $this->averages;
    }

    /**
     * @param $headers
     * @throws Google_Exception
     */
    public function setHeaders(/* array(Google_ReportHeaders) */
        $headers)
    {
        $this->assertIsArray($headers, 'Google_ReportHeaders', __METHOD__);
        $this->headers = $headers;
    }

    /**
     * @return mixed
     */
    public function getHeaders()
    {
        return $this->headers;
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
     * @param $totalMatchedRows
     */
    public function setTotalMatchedRows($totalMatchedRows)
    {
        $this->totalMatchedRows = $totalMatchedRows;
    }

    /**
     * @return mixed
     */
    public function getTotalMatchedRows()
    {
        return $this->totalMatchedRows;
    }

    /**
     * @param $totals
     * @throws Google_Exception
     */
    public function setTotals(/* array(Google_string) */
        $totals)
    {
        $this->assertIsArray($totals, 'Google_string', __METHOD__);
        $this->totals = $totals;
    }

    /**
     * @return mixed
     */
    public function getTotals()
    {
        return $this->totals;
    }

    /**
     * @param $warnings
     * @throws Google_Exception
     */
    public function setWarnings(/* array(Google_string) */
        $warnings)
    {
        $this->assertIsArray($warnings, 'Google_string', __METHOD__);
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
 * Class Google_ReportHeaders
 */
class Google_ReportHeaders extends Google_Model
{
    /**
     * @var
     */
    public $currency;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $type;

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
 * Class Google_SavedReport
 */
class Google_SavedReport extends Google_Model
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
 * Class Google_SavedReports
 */
class Google_SavedReports extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_SavedReport';
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
    public function setItems(/* array(Google_SavedReport) */
        $items)
    {
        $this->assertIsArray($items, 'Google_SavedReport', __METHOD__);
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
 * Class Google_UrlChannel
 */
class Google_UrlChannel extends Google_Model
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
    public $urlPattern;

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
     * @param $urlPattern
     */
    public function setUrlPattern($urlPattern)
    {
        $this->urlPattern = $urlPattern;
    }

    /**
     * @return mixed
     */
    public function getUrlPattern()
    {
        return $this->urlPattern;
    }
}

/**
 * Class Google_UrlChannels
 */
class Google_UrlChannels extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_UrlChannel';
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
    public function setItems(/* array(Google_UrlChannel) */
        $items)
    {
        $this->assertIsArray($items, 'Google_UrlChannel', __METHOD__);
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
