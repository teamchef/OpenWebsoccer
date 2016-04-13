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
 * The "accounts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangebuyerService = new Google_AdexchangebuyerService(...);
 *   $accounts = $adexchangebuyerService->accounts;
 *  </code>
 */
class Google_AccountsServiceResource extends Google_ServiceResource
{

    /**
     * Gets one account by ID. (accounts.get)
     *
     * @param int $id The account id
     * @param array $optParams Optional parameters.
     * @return Google_Account
     * @throws Google_Exception
     */
    public function get($id, $optParams = [])
    {
        $params = ['id' => $id];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Account($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the authenticated user's list of accounts. (accounts.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_AccountsList
     * @throws Google_Exception
     */
    public function listAccounts($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_AccountsList($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates an existing account. This method supports patch semantics. (accounts.patch)
     *
     * @param int $id The account id
     * @param Google_Account $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Account
     * @throws Google_Exception
     */
    public function patch($id, Google_Account $postBody, $optParams = [])
    {
        $params = ['id' => $id, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Account($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates an existing account. (accounts.update)
     *
     * @param int $id The account id
     * @param Google_Account $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Account
     * @throws Google_Exception
     */
    public function update($id, Google_Account $postBody, $optParams = [])
    {
        $params = ['id' => $id, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Account($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "creatives" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangebuyerService = new Google_AdexchangebuyerService(...);
 *   $creatives = $adexchangebuyerService->creatives;
 *  </code>
 */
class Google_CreativesServiceResource extends Google_ServiceResource
{

    /**
     * Gets the status for a single creative. (creatives.get)
     *
     * @param int $accountId The id for the account that will serve this creative.
     * @param string $buyerCreativeId The buyer-specific id for this creative.
     * @param array $optParams Optional parameters.
     * @return Google_Creative
     * @throws Google_Exception
     */
    public function get($accountId, $buyerCreativeId, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'buyerCreativeId' => $buyerCreativeId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Creative($data);
        } else {
            return $data;
        }
    }

    /**
     * Submit a new creative. (creatives.insert)
     *
     * @param Google_Creative $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Creative
     * @throws Google_Exception
     */
    public function insert(Google_Creative $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Creative($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves a list of the authenticated user's active creatives. (creatives.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_CreativesList
     * @throws Google_Exception
     * @opt_param string maxResults Maximum number of entries returned on one result page. If not set, the default is 100. Optional.
     * @opt_param string pageToken A continuation token, used to page through ad clients. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response. Optional.
     * @opt_param string statusFilter When specified, only creatives having the given status are returned.
     */
    public function listCreatives($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_CreativesList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "directDeals" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangebuyerService = new Google_AdexchangebuyerService(...);
 *   $directDeals = $adexchangebuyerService->directDeals;
 *  </code>
 */
class Google_DirectDealsServiceResource extends Google_ServiceResource
{

    /**
     * Gets one direct deal by ID. (directDeals.get)
     *
     * @param string $id The direct deal id
     * @param array $optParams Optional parameters.
     * @return Google_DirectDeal
     * @throws Google_Exception
     */
    public function get($id, $optParams = [])
    {
        $params = ['id' => $id];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_DirectDeal($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the authenticated user's list of direct deals. (directDeals.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_DirectDealsList
     * @throws Google_Exception
     */
    public function listDirectDeals($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_DirectDealsList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "performanceReport" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangebuyerService = new Google_AdexchangebuyerService(...);
 *   $performanceReport = $adexchangebuyerService->performanceReport;
 *  </code>
 */
class Google_PerformanceReportServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves the authenticated user's list of performance metrics. (performanceReport.list)
     *
     * @param string $accountId The account id to get the reports for.
     * @param string $endDateTime The end time for the reports.
     * @param string $startDateTime The start time for the reports.
     * @param array $optParams Optional parameters.
     * @return Google_PerformanceReportList
     * @throws Google_Exception
     */
    public function listPerformanceReport($accountId, $endDateTime, $startDateTime, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'endDateTime' => $endDateTime, 'startDateTime' => $startDateTime];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_PerformanceReportList($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Adexchangebuyer (v1.2).
 *
 * <p>
 * Lets you manage your Ad Exchange Buyer account.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/ad-exchange/buyer-rest" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_AdexchangebuyerService extends Google_Service
{
    /**
     * @var Google_AccountsServiceResource
     */
    public $accounts;
    /**
     * @var Google_CreativesServiceResource
     */
    public $creatives;
    /**
     * @var Google_DirectDealsServiceResource
     */
    public $directDeals;
    /**
     * @var Google_PerformanceReportServiceResource
     */
    public $performanceReport;

    /**
     * Constructs the internal representation of the Adexchangebuyer service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'adexchangebuyer/v1.2/';
        $this->version = 'v1.2';
        $this->serviceName = 'adexchangebuyer';

        $client->addService($this->serviceName, $this->version);
        $this->accounts = new Google_AccountsServiceResource($this, $this->serviceName, 'accounts', json_decode('{"methods": {"get": {"id": "adexchangebuyer.accounts.get", "path": "accounts/{id}", "httpMethod": "GET", "parameters": {"id": {"type": "integer", "required": true, "format": "int32", "location": "path"}}, "response": {"$ref": "Account"}, "scopes": ["https://www.googleapis.com/auth/adexchange.buyer"]}, "list": {"id": "adexchangebuyer.accounts.list", "path": "accounts", "httpMethod": "GET", "response": {"$ref": "AccountsList"}, "scopes": ["https://www.googleapis.com/auth/adexchange.buyer"]}, "patch": {"id": "adexchangebuyer.accounts.patch", "path": "accounts/{id}", "httpMethod": "PATCH", "parameters": {"id": {"type": "integer", "required": true, "format": "int32", "location": "path"}}, "request": {"$ref": "Account"}, "response": {"$ref": "Account"}, "scopes": ["https://www.googleapis.com/auth/adexchange.buyer"]}, "update": {"id": "adexchangebuyer.accounts.update", "path": "accounts/{id}", "httpMethod": "PUT", "parameters": {"id": {"type": "integer", "required": true, "format": "int32", "location": "path"}}, "request": {"$ref": "Account"}, "response": {"$ref": "Account"}, "scopes": ["https://www.googleapis.com/auth/adexchange.buyer"]}}}', true));
        $this->creatives = new Google_CreativesServiceResource($this, $this->serviceName, 'creatives', json_decode('{"methods": {"get": {"id": "adexchangebuyer.creatives.get", "path": "creatives/{accountId}/{buyerCreativeId}", "httpMethod": "GET", "parameters": {"accountId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "buyerCreativeId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Creative"}, "scopes": ["https://www.googleapis.com/auth/adexchange.buyer"]}, "insert": {"id": "adexchangebuyer.creatives.insert", "path": "creatives", "httpMethod": "POST", "request": {"$ref": "Creative"}, "response": {"$ref": "Creative"}, "scopes": ["https://www.googleapis.com/auth/adexchange.buyer"]}, "list": {"id": "adexchangebuyer.creatives.list", "path": "creatives", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "uint32", "minimum": "1", "maximum": "1000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "statusFilter": {"type": "string", "enum": ["approved", "disapproved", "not_checked"], "location": "query"}}, "response": {"$ref": "CreativesList"}, "scopes": ["https://www.googleapis.com/auth/adexchange.buyer"]}}}', true));
        $this->directDeals = new Google_DirectDealsServiceResource($this, $this->serviceName, 'directDeals', json_decode('{"methods": {"get": {"id": "adexchangebuyer.directDeals.get", "path": "directdeals/{id}", "httpMethod": "GET", "parameters": {"id": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "response": {"$ref": "DirectDeal"}, "scopes": ["https://www.googleapis.com/auth/adexchange.buyer"]}, "list": {"id": "adexchangebuyer.directDeals.list", "path": "directdeals", "httpMethod": "GET", "response": {"$ref": "DirectDealsList"}, "scopes": ["https://www.googleapis.com/auth/adexchange.buyer"]}}}', true));
        $this->performanceReport = new Google_PerformanceReportServiceResource($this, $this->serviceName, 'performanceReport', json_decode('{"methods": {"list": {"id": "adexchangebuyer.performanceReport.list", "path": "performancereport", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "format": "int64", "location": "query"}, "endDateTime": {"type": "string", "required": true, "format": "int64", "location": "query"}, "startDateTime": {"type": "string", "required": true, "format": "int64", "location": "query"}}, "response": {"$ref": "PerformanceReportList"}, "scopes": ["https://www.googleapis.com/auth/adexchange.buyer"]}}}', true));

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
    protected $__bidderLocationType = 'Google_AccountBidderLocation';
    /**
     * @var string
     */
    protected $__bidderLocationDataType = 'array';
    /**
     * @var
     */
    public $bidderLocation;
    /**
     * @var
     */
    public $cookieMatchingNid;
    /**
     * @var
     */
    public $cookieMatchingUrl;
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
    public $maximumTotalQps;

    /**
     * @param $bidderLocation
     * @throws Google_Exception
     */
    public function setBidderLocation(/* array(Google_AccountBidderLocation) */
        $bidderLocation)
    {
        $this->assertIsArray($bidderLocation, 'Google_AccountBidderLocation', __METHOD__);
        $this->bidderLocation = $bidderLocation;
    }

    /**
     * @return mixed
     */
    public function getBidderLocation()
    {
        return $this->bidderLocation;
    }

    /**
     * @param $cookieMatchingNid
     */
    public function setCookieMatchingNid($cookieMatchingNid)
    {
        $this->cookieMatchingNid = $cookieMatchingNid;
    }

    /**
     * @return mixed
     */
    public function getCookieMatchingNid()
    {
        return $this->cookieMatchingNid;
    }

    /**
     * @param $cookieMatchingUrl
     */
    public function setCookieMatchingUrl($cookieMatchingUrl)
    {
        $this->cookieMatchingUrl = $cookieMatchingUrl;
    }

    /**
     * @return mixed
     */
    public function getCookieMatchingUrl()
    {
        return $this->cookieMatchingUrl;
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
     * @param $maximumTotalQps
     */
    public function setMaximumTotalQps($maximumTotalQps)
    {
        $this->maximumTotalQps = $maximumTotalQps;
    }

    /**
     * @return mixed
     */
    public function getMaximumTotalQps()
    {
        return $this->maximumTotalQps;
    }
}

/**
 * Class Google_AccountBidderLocation
 */
class Google_AccountBidderLocation extends Google_Model
{
    /**
     * @var
     */
    public $maximumQps;
    /**
     * @var
     */
    public $region;
    /**
     * @var
     */
    public $url;

    /**
     * @param $maximumQps
     */
    public function setMaximumQps($maximumQps)
    {
        $this->maximumQps = $maximumQps;
    }

    /**
     * @return mixed
     */
    public function getMaximumQps()
    {
        return $this->maximumQps;
    }

    /**
     * @param $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
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
 * Class Google_AccountsList
 */
class Google_AccountsList extends Google_Model
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
    public $kind;

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
 * Class Google_Creative
 */
class Google_Creative extends Google_Model
{
    /**
     * @var
     */
    public $HTMLSnippet;
    /**
     * @var
     */
    public $accountId;
    /**
     * @var
     */
    public $advertiserId;
    /**
     * @var
     */
    public $advertiserName;
    /**
     * @var
     */
    public $agencyId;
    /**
     * @var
     */
    public $attribute;
    /**
     * @var
     */
    public $buyerCreativeId;
    /**
     * @var
     */
    public $clickThroughUrl;
    /**
     * @var string
     */
    protected $__disapprovalReasonsType = 'Google_CreativeDisapprovalReasons';
    /**
     * @var string
     */
    protected $__disapprovalReasonsDataType = 'array';
    /**
     * @var
     */
    public $disapprovalReasons;
    /**
     * @var
     */
    public $height;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $productCategories;
    /**
     * @var
     */
    public $sensitiveCategories;
    /**
     * @var
     */
    public $status;
    /**
     * @var
     */
    public $vendorType;
    /**
     * @var
     */
    public $videoURL;
    /**
     * @var
     */
    public $width;

    /**
     * @param $HTMLSnippet
     */
    public function setHTMLSnippet($HTMLSnippet)
    {
        $this->HTMLSnippet = $HTMLSnippet;
    }

    /**
     * @return mixed
     */
    public function getHTMLSnippet()
    {
        return $this->HTMLSnippet;
    }

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
     * @param $advertiserId
     * @throws Google_Exception
     */
    public function setAdvertiserId(/* array(Google_string) */
        $advertiserId)
    {
        $this->assertIsArray($advertiserId, 'Google_string', __METHOD__);
        $this->advertiserId = $advertiserId;
    }

    /**
     * @return mixed
     */
    public function getAdvertiserId()
    {
        return $this->advertiserId;
    }

    /**
     * @param $advertiserName
     */
    public function setAdvertiserName($advertiserName)
    {
        $this->advertiserName = $advertiserName;
    }

    /**
     * @return mixed
     */
    public function getAdvertiserName()
    {
        return $this->advertiserName;
    }

    /**
     * @param $agencyId
     */
    public function setAgencyId($agencyId)
    {
        $this->agencyId = $agencyId;
    }

    /**
     * @return mixed
     */
    public function getAgencyId()
    {
        return $this->agencyId;
    }

    /**
     * @param $attribute
     * @throws Google_Exception
     */
    public function setAttribute(/* array(Google_int) */
        $attribute)
    {
        $this->assertIsArray($attribute, 'Google_int', __METHOD__);
        $this->attribute = $attribute;
    }

    /**
     * @return mixed
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * @param $buyerCreativeId
     */
    public function setBuyerCreativeId($buyerCreativeId)
    {
        $this->buyerCreativeId = $buyerCreativeId;
    }

    /**
     * @return mixed
     */
    public function getBuyerCreativeId()
    {
        return $this->buyerCreativeId;
    }

    /**
     * @param $clickThroughUrl
     * @throws Google_Exception
     */
    public function setClickThroughUrl(/* array(Google_string) */
        $clickThroughUrl)
    {
        $this->assertIsArray($clickThroughUrl, 'Google_string', __METHOD__);
        $this->clickThroughUrl = $clickThroughUrl;
    }

    /**
     * @return mixed
     */
    public function getClickThroughUrl()
    {
        return $this->clickThroughUrl;
    }

    /**
     * @param $disapprovalReasons
     * @throws Google_Exception
     */
    public function setDisapprovalReasons(/* array(Google_CreativeDisapprovalReasons) */
        $disapprovalReasons)
    {
        $this->assertIsArray($disapprovalReasons, 'Google_CreativeDisapprovalReasons', __METHOD__);
        $this->disapprovalReasons = $disapprovalReasons;
    }

    /**
     * @return mixed
     */
    public function getDisapprovalReasons()
    {
        return $this->disapprovalReasons;
    }

    /**
     * @param $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
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
     * @param $productCategories
     * @throws Google_Exception
     */
    public function setProductCategories(/* array(Google_int) */
        $productCategories)
    {
        $this->assertIsArray($productCategories, 'Google_int', __METHOD__);
        $this->productCategories = $productCategories;
    }

    /**
     * @return mixed
     */
    public function getProductCategories()
    {
        return $this->productCategories;
    }

    /**
     * @param $sensitiveCategories
     * @throws Google_Exception
     */
    public function setSensitiveCategories(/* array(Google_int) */
        $sensitiveCategories)
    {
        $this->assertIsArray($sensitiveCategories, 'Google_int', __METHOD__);
        $this->sensitiveCategories = $sensitiveCategories;
    }

    /**
     * @return mixed
     */
    public function getSensitiveCategories()
    {
        return $this->sensitiveCategories;
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
     * @param $vendorType
     * @throws Google_Exception
     */
    public function setVendorType(/* array(Google_int) */
        $vendorType)
    {
        $this->assertIsArray($vendorType, 'Google_int', __METHOD__);
        $this->vendorType = $vendorType;
    }

    /**
     * @return mixed
     */
    public function getVendorType()
    {
        return $this->vendorType;
    }

    /**
     * @param $videoURL
     */
    public function setVideoURL($videoURL)
    {
        $this->videoURL = $videoURL;
    }

    /**
     * @return mixed
     */
    public function getVideoURL()
    {
        return $this->videoURL;
    }

    /**
     * @param $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }
}

/**
 * Class Google_CreativeDisapprovalReasons
 */
class Google_CreativeDisapprovalReasons extends Google_Model
{
    /**
     * @var
     */
    public $details;
    /**
     * @var
     */
    public $reason;

    /**
     * @param $details
     * @throws Google_Exception
     */
    public function setDetails(/* array(Google_string) */
        $details)
    {
        $this->assertIsArray($details, 'Google_string', __METHOD__);
        $this->details = $details;
    }

    /**
     * @return mixed
     */
    public function getDetails()
    {
        return $this->details;
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
 * Class Google_CreativesList
 */
class Google_CreativesList extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Creative';
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
    public function setItems(/* array(Google_Creative) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Creative', __METHOD__);
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
 * Class Google_DirectDeal
 */
class Google_DirectDeal extends Google_Model
{
    /**
     * @var
     */
    public $accountId;
    /**
     * @var
     */
    public $advertiser;
    /**
     * @var
     */
    public $currencyCode;
    /**
     * @var
     */
    public $endTime;
    /**
     * @var
     */
    public $fixedCpm;
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
    public $privateExchangeMinCpm;
    /**
     * @var
     */
    public $sellerNetwork;
    /**
     * @var
     */
    public $startTime;

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
     * @param $advertiser
     */
    public function setAdvertiser($advertiser)
    {
        $this->advertiser = $advertiser;
    }

    /**
     * @return mixed
     */
    public function getAdvertiser()
    {
        return $this->advertiser;
    }

    /**
     * @param $currencyCode
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return mixed
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
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
     * @param $fixedCpm
     */
    public function setFixedCpm($fixedCpm)
    {
        $this->fixedCpm = $fixedCpm;
    }

    /**
     * @return mixed
     */
    public function getFixedCpm()
    {
        return $this->fixedCpm;
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
     * @param $privateExchangeMinCpm
     */
    public function setPrivateExchangeMinCpm($privateExchangeMinCpm)
    {
        $this->privateExchangeMinCpm = $privateExchangeMinCpm;
    }

    /**
     * @return mixed
     */
    public function getPrivateExchangeMinCpm()
    {
        return $this->privateExchangeMinCpm;
    }

    /**
     * @param $sellerNetwork
     */
    public function setSellerNetwork($sellerNetwork)
    {
        $this->sellerNetwork = $sellerNetwork;
    }

    /**
     * @return mixed
     */
    public function getSellerNetwork()
    {
        return $this->sellerNetwork;
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
 * Class Google_DirectDealsList
 */
class Google_DirectDealsList extends Google_Model
{
    /**
     * @var string
     */
    protected $__directDealsType = 'Google_DirectDeal';
    /**
     * @var string
     */
    protected $__directDealsDataType = 'array';
    /**
     * @var
     */
    public $directDeals;
    /**
     * @var
     */
    public $kind;

    /**
     * @param $directDeals
     * @throws Google_Exception
     */
    public function setDirectDeals(/* array(Google_DirectDeal) */
        $directDeals)
    {
        $this->assertIsArray($directDeals, 'Google_DirectDeal', __METHOD__);
        $this->directDeals = $directDeals;
    }

    /**
     * @return mixed
     */
    public function getDirectDeals()
    {
        return $this->directDeals;
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
 * Class Google_PerformanceReportList
 */
class Google_PerformanceReportList extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__performance_reportType = 'Google_PerformanceReportListPerformanceReport';
    /**
     * @var string
     */
    protected $__performance_reportDataType = 'array';
    /**
     * @var
     */
    public $performance_report;

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
     * @param $performance_report
     * @throws Google_Exception
     */
    public function setPerformance_report(/* array(Google_PerformanceReportListPerformanceReport) */
        $performance_report)
    {
        $this->assertIsArray($performance_report, 'Google_PerformanceReportListPerformanceReport', __METHOD__);
        $this->performance_report = $performance_report;
    }

    /**
     * @return mixed
     */
    public function getPerformance_report()
    {
        return $this->performance_report;
    }
}

/**
 * Class Google_PerformanceReportListPerformanceReport
 */
class Google_PerformanceReportListPerformanceReport extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $latency50thPercentile;
    /**
     * @var
     */
    public $latency85thPercentile;
    /**
     * @var
     */
    public $latency95thPercentile;
    /**
     * @var
     */
    public $region;
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
     * @param $latency50thPercentile
     */
    public function setLatency50thPercentile($latency50thPercentile)
    {
        $this->latency50thPercentile = $latency50thPercentile;
    }

    /**
     * @return mixed
     */
    public function getLatency50thPercentile()
    {
        return $this->latency50thPercentile;
    }

    /**
     * @param $latency85thPercentile
     */
    public function setLatency85thPercentile($latency85thPercentile)
    {
        $this->latency85thPercentile = $latency85thPercentile;
    }

    /**
     * @return mixed
     */
    public function getLatency85thPercentile()
    {
        return $this->latency85thPercentile;
    }

    /**
     * @param $latency95thPercentile
     */
    public function setLatency95thPercentile($latency95thPercentile)
    {
        $this->latency95thPercentile = $latency95thPercentile;
    }

    /**
     * @return mixed
     */
    public function getLatency95thPercentile()
    {
        return $this->latency95thPercentile;
    }

    /**
     * @param $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
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
