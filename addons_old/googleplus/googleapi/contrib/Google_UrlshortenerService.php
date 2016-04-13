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
 * The "url" collection of methods.
 * Typical usage is:
 *  <code>
 *   $urlshortenerService = new Google_UrlshortenerService(...);
 *   $url = $urlshortenerService->url;
 *  </code>
 */
class Google_UrlServiceResource extends Google_ServiceResource
{

    /**
     * Expands a short URL or gets creation time and analytics. (url.get)
     *
     * @param string $shortUrl The short URL, including the protocol.
     * @param array $optParams Optional parameters.
     * @return Google_Url
     * @throws Google_Exception
     * @opt_param string projection Additional information to return.
     */
    public function get($shortUrl, $optParams = [])
    {
        $params = ['shortUrl' => $shortUrl];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Url($data);
        } else {
            return $data;
        }
    }

    /**
     * Creates a new short URL. (url.insert)
     *
     * @param Google_Url $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Url
     * @throws Google_Exception
     */
    public function insert(Google_Url $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Url($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves a list of URLs shortened by a user. (url.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_UrlHistory
     * @throws Google_Exception
     * @opt_param string projection Additional information to return.
     * @opt_param string start-token Token for requesting successive pages of results.
     */
    public function listUrl($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_UrlHistory($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Urlshortener (v1).
 *
 * <p>
 * Lets you create, inspect, and manage goo.gl short URLs
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="http://code.google.com/apis/urlshortener/v1/getting_started.html" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_UrlshortenerService extends Google_Service
{
    /**
     * @var Google_UrlServiceResource
     */
    public $url;

    /**
     * Constructs the internal representation of the Urlshortener service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'urlshortener/v1/';
        $this->version = 'v1';
        $this->serviceName = 'urlshortener';

        $client->addService($this->serviceName, $this->version);
        $this->url = new Google_UrlServiceResource($this, $this->serviceName, 'url', json_decode('{"methods": {"get": {"id": "urlshortener.url.get", "path": "url", "httpMethod": "GET", "parameters": {"projection": {"type": "string", "enum": ["ANALYTICS_CLICKS", "ANALYTICS_TOP_STRINGS", "FULL"], "location": "query"}, "shortUrl": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "Url"}}, "insert": {"id": "urlshortener.url.insert", "path": "url", "httpMethod": "POST", "request": {"$ref": "Url"}, "response": {"$ref": "Url"}, "scopes": ["https://www.googleapis.com/auth/urlshortener"]}, "list": {"id": "urlshortener.url.list", "path": "url/history", "httpMethod": "GET", "parameters": {"projection": {"type": "string", "enum": ["ANALYTICS_CLICKS", "FULL"], "location": "query"}, "start-token": {"type": "string", "location": "query"}}, "response": {"$ref": "UrlHistory"}, "scopes": ["https://www.googleapis.com/auth/urlshortener"]}}}', true));

    }
}


/**
 * Class Google_AnalyticsSnapshot
 */
class Google_AnalyticsSnapshot extends Google_Model
{
    /**
     * @var string
     */
    protected $__browsersType = 'Google_StringCount';
    /**
     * @var string
     */
    protected $__browsersDataType = 'array';
    /**
     * @var
     */
    public $browsers;
    /**
     * @var string
     */
    protected $__countriesType = 'Google_StringCount';
    /**
     * @var string
     */
    protected $__countriesDataType = 'array';
    /**
     * @var
     */
    public $countries;
    /**
     * @var
     */
    public $longUrlClicks;
    /**
     * @var string
     */
    protected $__platformsType = 'Google_StringCount';
    /**
     * @var string
     */
    protected $__platformsDataType = 'array';
    /**
     * @var
     */
    public $platforms;
    /**
     * @var string
     */
    protected $__referrersType = 'Google_StringCount';
    /**
     * @var string
     */
    protected $__referrersDataType = 'array';
    /**
     * @var
     */
    public $referrers;
    /**
     * @var
     */
    public $shortUrlClicks;

    /**
     * @param $browsers
     * @throws Google_Exception
     */
    public function setBrowsers(/* array(Google_StringCount) */
        $browsers)
    {
        $this->assertIsArray($browsers, 'Google_StringCount', __METHOD__);
        $this->browsers = $browsers;
    }

    /**
     * @return mixed
     */
    public function getBrowsers()
    {
        return $this->browsers;
    }

    /**
     * @param $countries
     * @throws Google_Exception
     */
    public function setCountries(/* array(Google_StringCount) */
        $countries)
    {
        $this->assertIsArray($countries, 'Google_StringCount', __METHOD__);
        $this->countries = $countries;
    }

    /**
     * @return mixed
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * @param $longUrlClicks
     */
    public function setLongUrlClicks($longUrlClicks)
    {
        $this->longUrlClicks = $longUrlClicks;
    }

    /**
     * @return mixed
     */
    public function getLongUrlClicks()
    {
        return $this->longUrlClicks;
    }

    /**
     * @param $platforms
     * @throws Google_Exception
     */
    public function setPlatforms(/* array(Google_StringCount) */
        $platforms)
    {
        $this->assertIsArray($platforms, 'Google_StringCount', __METHOD__);
        $this->platforms = $platforms;
    }

    /**
     * @return mixed
     */
    public function getPlatforms()
    {
        return $this->platforms;
    }

    /**
     * @param $referrers
     * @throws Google_Exception
     */
    public function setReferrers(/* array(Google_StringCount) */
        $referrers)
    {
        $this->assertIsArray($referrers, 'Google_StringCount', __METHOD__);
        $this->referrers = $referrers;
    }

    /**
     * @return mixed
     */
    public function getReferrers()
    {
        return $this->referrers;
    }

    /**
     * @param $shortUrlClicks
     */
    public function setShortUrlClicks($shortUrlClicks)
    {
        $this->shortUrlClicks = $shortUrlClicks;
    }

    /**
     * @return mixed
     */
    public function getShortUrlClicks()
    {
        return $this->shortUrlClicks;
    }
}

/**
 * Class Google_AnalyticsSummary
 */
class Google_AnalyticsSummary extends Google_Model
{
    /**
     * @var string
     */
    protected $__allTimeType = 'Google_AnalyticsSnapshot';
    /**
     * @var string
     */
    protected $__allTimeDataType = '';
    /**
     * @var
     */
    public $allTime;
    /**
     * @var string
     */
    protected $__dayType = 'Google_AnalyticsSnapshot';
    /**
     * @var string
     */
    protected $__dayDataType = '';
    /**
     * @var
     */
    public $day;
    /**
     * @var string
     */
    protected $__monthType = 'Google_AnalyticsSnapshot';
    /**
     * @var string
     */
    protected $__monthDataType = '';
    /**
     * @var
     */
    public $month;
    /**
     * @var string
     */
    protected $__twoHoursType = 'Google_AnalyticsSnapshot';
    /**
     * @var string
     */
    protected $__twoHoursDataType = '';
    /**
     * @var
     */
    public $twoHours;
    /**
     * @var string
     */
    protected $__weekType = 'Google_AnalyticsSnapshot';
    /**
     * @var string
     */
    protected $__weekDataType = '';
    /**
     * @var
     */
    public $week;

    /**
     * @param Google_AnalyticsSnapshot $allTime
     */
    public function setAllTime(Google_AnalyticsSnapshot $allTime)
    {
        $this->allTime = $allTime;
    }

    /**
     * @return mixed
     */
    public function getAllTime()
    {
        return $this->allTime;
    }

    /**
     * @param Google_AnalyticsSnapshot $day
     */
    public function setDay(Google_AnalyticsSnapshot $day)
    {
        $this->day = $day;
    }

    /**
     * @return mixed
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param Google_AnalyticsSnapshot $month
     */
    public function setMonth(Google_AnalyticsSnapshot $month)
    {
        $this->month = $month;
    }

    /**
     * @return mixed
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @param Google_AnalyticsSnapshot $twoHours
     */
    public function setTwoHours(Google_AnalyticsSnapshot $twoHours)
    {
        $this->twoHours = $twoHours;
    }

    /**
     * @return mixed
     */
    public function getTwoHours()
    {
        return $this->twoHours;
    }

    /**
     * @param Google_AnalyticsSnapshot $week
     */
    public function setWeek(Google_AnalyticsSnapshot $week)
    {
        $this->week = $week;
    }

    /**
     * @return mixed
     */
    public function getWeek()
    {
        return $this->week;
    }
}

/**
 * Class Google_StringCount
 */
class Google_StringCount extends Google_Model
{
    /**
     * @var
     */
    public $count;
    /**
     * @var
     */
    public $id;

    /**
     * @param $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
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
}

/**
 * Class Google_Url
 */
class Google_Url extends Google_Model
{
    /**
     * @var string
     */
    protected $__analyticsType = 'Google_AnalyticsSummary';
    /**
     * @var string
     */
    protected $__analyticsDataType = '';
    /**
     * @var
     */
    public $analytics;
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
    public $longUrl;
    /**
     * @var
     */
    public $status;

    /**
     * @param Google_AnalyticsSummary $analytics
     */
    public function setAnalytics(Google_AnalyticsSummary $analytics)
    {
        $this->analytics = $analytics;
    }

    /**
     * @return mixed
     */
    public function getAnalytics()
    {
        return $this->analytics;
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
     * @param $longUrl
     */
    public function setLongUrl($longUrl)
    {
        $this->longUrl = $longUrl;
    }

    /**
     * @return mixed
     */
    public function getLongUrl()
    {
        return $this->longUrl;
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
 * Class Google_UrlHistory
 */
class Google_UrlHistory extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Url';
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
    public $nextPageToken;
    /**
     * @var
     */
    public $totalItems;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Url) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Url', __METHOD__);
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
