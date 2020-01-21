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
 * The "advertisers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $ganService = new Google_GanService(...);
 *   $advertisers = $ganService->advertisers;
 *  </code>
 */
class Google_AdvertisersServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves data about a single advertiser if that the requesting advertiser/publisher has access
     * to it. Only publishers can lookup advertisers. Advertisers can request information about
     * themselves by omitting the advertiserId query parameter. (advertisers.get)
     *
     * @param string $role The role of the requester. Valid values: 'advertisers' or 'publishers'.
     * @param string $roleId The ID of the requesting advertiser or publisher.
     * @param array $optParams Optional parameters.
     * @return Google_Advertiser
     * @throws Google_Exception
     * @opt_param string advertiserId The ID of the advertiser to look up. Optional.
     */
    public function get($role, $roleId, $optParams = [])
    {
        $params = ['role' => $role, 'roleId' => $roleId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Advertiser($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves data about all advertisers that the requesting advertiser/publisher has access to.
     * (advertisers.list)
     *
     * @param string $role The role of the requester. Valid values: 'advertisers' or 'publishers'.
     * @param string $roleId The ID of the requesting advertiser or publisher.
     * @param array $optParams Optional parameters.
     * @return Google_Advertisers
     * @throws Google_Exception
     * @opt_param string advertiserCategory Caret(^) delimted list of advertiser categories. Valid categories are defined here: http://www.google.com/support/affiliatenetwork/advertiser/bin/answer.py?hl=en=107581. Filters out all advertisers not in one of the given advertiser categories. Optional.
     * @opt_param string maxResults Max number of items to return in this page. Optional. Defaults to 20.
     * @opt_param double minNinetyDayEpc Filters out all advertisers that have a ninety day EPC average lower than the given value (inclusive). Min value: 0.0. Optional.
     * @opt_param int minPayoutRank A value between 1 and 4, where 1 represents the quartile of advertisers with the lowest ranks and 4 represents the quartile of advertisers with the highest ranks. Filters out all advertisers with a lower rank than the given quartile. For example if a 2 was given only advertisers with a payout rank of 25 or higher would be included. Optional.
     * @opt_param double minSevenDayEpc Filters out all advertisers that have a seven day EPC average lower than the given value (inclusive). Min value: 0.0. Optional.
     * @opt_param string pageToken The value of 'nextPageToken' from the previous page. Optional.
     * @opt_param string relationshipStatus Filters out all advertisers for which do not have the given relationship status with the requesting publisher.
     */
    public function listAdvertisers($role, $roleId, $optParams = [])
    {
        $params = ['role' => $role, 'roleId' => $roleId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Advertisers($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "ccOffers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $ganService = new Google_GanService(...);
 *   $ccOffers = $ganService->ccOffers;
 *  </code>
 */
class Google_CcOffersServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves credit card offers for the given publisher. (ccOffers.list)
     *
     * @param string $publisher The ID of the publisher in question.
     * @param array $optParams Optional parameters.
     * @return Google_CcOffers
     * @throws Google_Exception
     * @opt_param string advertiser The advertiser ID of a card issuer whose offers to include. Optional, may be repeated.
     * @opt_param string projection The set of fields to return.
     */
    public function listCcOffers($publisher, $optParams = [])
    {
        $params = ['publisher' => $publisher];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_CcOffers($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "events" collection of methods.
 * Typical usage is:
 *  <code>
 *   $ganService = new Google_GanService(...);
 *   $events = $ganService->events;
 *  </code>
 */
class Google_EventsServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves event data for a given advertiser/publisher. (events.list)
     *
     * @param string $role The role of the requester. Valid values: 'advertisers' or 'publishers'.
     * @param string $roleId The ID of the requesting advertiser or publisher.
     * @param array $optParams Optional parameters.
     * @return Google_Events
     * @throws Google_Exception
     * @opt_param string advertiserId Caret(^) delimited list of advertiser IDs. Filters out all events that do not reference one of the given advertiser IDs. Only used when under publishers role. Optional.
     * @opt_param string chargeType Filters out all charge events that are not of the given charge type. Valid values: 'other', 'slotting_fee', 'monthly_minimum', 'tier_bonus', 'credit', 'debit'. Optional.
     * @opt_param string eventDateMax Filters out all events later than given date. Optional. Defaults to 24 hours after eventMin.
     * @opt_param string eventDateMin Filters out all events earlier than given date. Optional. Defaults to 24 hours from current date/time.
     * @opt_param string linkId Caret(^) delimited list of link IDs. Filters out all events that do not reference one of the given link IDs. Optional.
     * @opt_param string maxResults Max number of offers to return in this page. Optional. Defaults to 20.
     * @opt_param string memberId Caret(^) delimited list of member IDs. Filters out all events that do not reference one of the given member IDs. Optional.
     * @opt_param string modifyDateMax Filters out all events modified later than given date. Optional. Defaults to 24 hours after modifyDateMin, if modifyDateMin is explicitly set.
     * @opt_param string modifyDateMin Filters out all events modified earlier than given date. Optional. Defaults to 24 hours before the current modifyDateMax, if modifyDateMax is explicitly set.
     * @opt_param string orderId Caret(^) delimited list of order IDs. Filters out all events that do not reference one of the given order IDs. Optional.
     * @opt_param string pageToken The value of 'nextPageToken' from the previous page. Optional.
     * @opt_param string productCategory Caret(^) delimited list of product categories. Filters out all events that do not reference a product in one of the given product categories. Optional.
     * @opt_param string publisherId Caret(^) delimited list of publisher IDs. Filters out all events that do not reference one of the given publishers IDs. Only used when under advertiser role. Optional.
     * @opt_param string sku Caret(^) delimited list of SKUs. Filters out all events that do not reference one of the given SKU. Optional.
     * @opt_param string status Filters out all events that do not have the given status. Valid values: 'active', 'canceled'. Optional.
     * @opt_param string type Filters out all events that are not of the given type. Valid values: 'action', 'transaction', 'charge'. Optional.
     */
    public function listEvents($role, $roleId, $optParams = [])
    {
        $params = ['role' => $role, 'roleId' => $roleId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Events($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "links" collection of methods.
 * Typical usage is:
 *  <code>
 *   $ganService = new Google_GanService(...);
 *   $links = $ganService->links;
 *  </code>
 */
class Google_LinksServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves data about a single link if the requesting advertiser/publisher has access to it.
     * Advertisers can look up their own links. Publishers can look up visible links or links belonging
     * to advertisers they are in a relationship with. (links.get)
     *
     * @param string $role The role of the requester. Valid values: 'advertisers' or 'publishers'.
     * @param string $roleId The ID of the requesting advertiser or publisher.
     * @param string $linkId The ID of the link to look up.
     * @param array $optParams Optional parameters.
     * @return Google_Link
     * @throws Google_Exception
     */
    public function get($role, $roleId, $linkId, $optParams = [])
    {
        $params = ['role' => $role, 'roleId' => $roleId, 'linkId' => $linkId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Link($data);
        } else {
            return $data;
        }
    }

    /**
     * Inserts a new link. (links.insert)
     *
     * @param string $role The role of the requester. Valid values: 'advertisers' or 'publishers'.
     * @param string $roleId The ID of the requesting advertiser or publisher.
     * @param Google_Link $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Link
     * @throws Google_Exception
     */
    public function insert($role, $roleId, Google_Link $postBody, $optParams = [])
    {
        $params = ['role' => $role, 'roleId' => $roleId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Link($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves all links that match the query parameters. (links.list)
     *
     * @param string $role The role of the requester. Valid values: 'advertisers' or 'publishers'.
     * @param string $roleId The ID of the requesting advertiser or publisher.
     * @param array $optParams Optional parameters.
     * @return Google_Links
     * @throws Google_Exception
     * @opt_param string advertiserId Limits the resulting links to the ones belonging to the listed advertisers.
     * @opt_param string assetSize The size of the given asset.
     * @opt_param string authorship The role of the author of the link.
     * @opt_param string createDateMax The end of the create date range.
     * @opt_param string createDateMin The beginning of the create date range.
     * @opt_param string linkType The type of the link.
     * @opt_param string maxResults Max number of items to return in this page. Optional. Defaults to 20.
     * @opt_param string pageToken The value of 'nextPageToken' from the previous page. Optional.
     * @opt_param string promotionType The promotion type.
     * @opt_param string relationshipStatus The status of the relationship.
     * @opt_param string searchText Field for full text search across title and merchandising text, supports link id search.
     * @opt_param string startDateMax The end of the start date range.
     * @opt_param string startDateMin The beginning of the start date range.
     */
    public function listLinks($role, $roleId, $optParams = [])
    {
        $params = ['role' => $role, 'roleId' => $roleId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Links($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "publishers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $ganService = new Google_GanService(...);
 *   $publishers = $ganService->publishers;
 *  </code>
 */
class Google_PublishersServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves data about a single advertiser if that the requesting advertiser/publisher has access
     * to it. Only advertisers can look up publishers. Publishers can request information about
     * themselves by omitting the publisherId query parameter. (publishers.get)
     *
     * @param string $role The role of the requester. Valid values: 'advertisers' or 'publishers'.
     * @param string $roleId The ID of the requesting advertiser or publisher.
     * @param array $optParams Optional parameters.
     * @return Google_Publisher
     * @throws Google_Exception
     * @opt_param string publisherId The ID of the publisher to look up. Optional.
     */
    public function get($role, $roleId, $optParams = [])
    {
        $params = ['role' => $role, 'roleId' => $roleId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Publisher($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves data about all publishers that the requesting advertiser/publisher has access to.
     * (publishers.list)
     *
     * @param string $role The role of the requester. Valid values: 'advertisers' or 'publishers'.
     * @param string $roleId The ID of the requesting advertiser or publisher.
     * @param array $optParams Optional parameters.
     * @return Google_Publishers
     * @throws Google_Exception
     * @opt_param string maxResults Max number of items to return in this page. Optional. Defaults to 20.
     * @opt_param double minNinetyDayEpc Filters out all publishers that have a ninety day EPC average lower than the given value (inclusive). Min value: 0.0. Optional.
     * @opt_param int minPayoutRank A value between 1 and 4, where 1 represents the quartile of publishers with the lowest ranks and 4 represents the quartile of publishers with the highest ranks. Filters out all publishers with a lower rank than the given quartile. For example if a 2 was given only publishers with a payout rank of 25 or higher would be included. Optional.
     * @opt_param double minSevenDayEpc Filters out all publishers that have a seven day EPC average lower than the given value (inclusive). Min value 0.0. Optional.
     * @opt_param string pageToken The value of 'nextPageToken' from the previous page. Optional.
     * @opt_param string publisherCategory Caret(^) delimted list of publisher categories. Valid categories: (unclassified|community_and_content|shopping_and_promotion|loyalty_and_rewards|network|search_specialist|comparison_shopping|email). Filters out all publishers not in one of the given advertiser categories. Optional.
     * @opt_param string relationshipStatus Filters out all publishers for which do not have the given relationship status with the requesting publisher.
     */
    public function listPublishers($role, $roleId, $optParams = [])
    {
        $params = ['role' => $role, 'roleId' => $roleId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Publishers($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "reports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $ganService = new Google_GanService(...);
 *   $reports = $ganService->reports;
 *  </code>
 */
class Google_ReportsServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves a report of the specified type. (reports.get)
     *
     * @param string $role The role of the requester. Valid values: 'advertisers' or 'publishers'.
     * @param string $roleId The ID of the requesting advertiser or publisher.
     * @param string $reportType The type of report being requested. Valid values: 'order_delta'. Required.
     * @param array $optParams Optional parameters.
     * @return Google_Report
     * @throws Google_Exception
     * @opt_param string advertiserId The IDs of the advertisers to look up, if applicable.
     * @opt_param bool calculateTotals Whether or not to calculate totals rows. Optional.
     * @opt_param string endDate The end date (exclusive), in RFC 3339 format, for the report data to be returned. Defaults to one day after startDate, if that is given, or today. Optional.
     * @opt_param string eventType Filters out all events that are not of the given type. Valid values: 'action', 'transaction', or 'charge'. Optional.
     * @opt_param string linkId Filters to capture one of given link IDs. Optional.
     * @opt_param string maxResults Max number of items to return in this page. Optional. Defaults to return all results.
     * @opt_param string orderId Filters to capture one of the given order IDs. Optional.
     * @opt_param string publisherId The IDs of the publishers to look up, if applicable.
     * @opt_param string startDate The start date (inclusive), in RFC 3339 format, for the report data to be returned. Defaults to one day before endDate, if that is given, or yesterday. Optional.
     * @opt_param string startIndex Offset on which to return results when paging. Optional.
     * @opt_param string status Filters out all events that do not have the given status. Valid values: 'active', 'canceled', or 'invalid'. Optional.
     */
    public function get($role, $roleId, $reportType, $optParams = [])
    {
        $params = ['role' => $role, 'roleId' => $roleId, 'reportType' => $reportType];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Report($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Gan (v1beta1).
 *
 * <p>
 * Lets you have programmatic access to your Google Affiliate Network data.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/affiliate-network/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_GanService extends Google_Service
{
    /**
     * @var Google_AdvertisersServiceResource
     */
    public $advertisers;
    /**
     * @var Google_CcOffersServiceResource
     */
    public $ccOffers;
    /**
     * @var Google_EventsServiceResource
     */
    public $events;
    /**
     * @var Google_LinksServiceResource
     */
    public $links;
    /**
     * @var Google_PublishersServiceResource
     */
    public $publishers;
    /**
     * @var Google_ReportsServiceResource
     */
    public $reports;

    /**
     * Constructs the internal representation of the Gan service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'gan/v1beta1/';
        $this->version = 'v1beta1';
        $this->serviceName = 'gan';

        $client->addService($this->serviceName, $this->version);
        $this->advertisers = new Google_AdvertisersServiceResource($this, $this->serviceName, 'advertisers', json_decode('{"methods": {"get": {"id": "gan.advertisers.get", "path": "{role}/{roleId}/advertiser", "httpMethod": "GET", "parameters": {"advertiserId": {"type": "string", "location": "query"}, "role": {"type": "string", "required": true, "enum": ["advertisers", "publishers"], "location": "path"}, "roleId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Advertiser"}, "scopes": ["https://www.googleapis.com/auth/gan", "https://www.googleapis.com/auth/gan.readonly"]}, "list": {"id": "gan.advertisers.list", "path": "{role}/{roleId}/advertisers", "httpMethod": "GET", "parameters": {"advertiserCategory": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "minNinetyDayEpc": {"type": "number", "format": "double", "location": "query"}, "minPayoutRank": {"type": "integer", "format": "int32", "minimum": "1", "maximum": "4", "location": "query"}, "minSevenDayEpc": {"type": "number", "format": "double", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "relationshipStatus": {"type": "string", "enum": ["approved", "available", "deactivated", "declined", "pending"], "location": "query"}, "role": {"type": "string", "required": true, "enum": ["advertisers", "publishers"], "location": "path"}, "roleId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Advertisers"}, "scopes": ["https://www.googleapis.com/auth/gan", "https://www.googleapis.com/auth/gan.readonly"]}}}', true));
        $this->ccOffers = new Google_CcOffersServiceResource($this, $this->serviceName, 'ccOffers', json_decode('{"methods": {"list": {"id": "gan.ccOffers.list", "path": "publishers/{publisher}/ccOffers", "httpMethod": "GET", "parameters": {"advertiser": {"type": "string", "repeated": true, "location": "query"}, "projection": {"type": "string", "enum": ["full", "summary"], "location": "query"}, "publisher": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CcOffers"}, "scopes": ["https://www.googleapis.com/auth/gan", "https://www.googleapis.com/auth/gan.readonly"]}}}', true));
        $this->events = new Google_EventsServiceResource($this, $this->serviceName, 'events', json_decode('{"methods": {"list": {"id": "gan.events.list", "path": "{role}/{roleId}/events", "httpMethod": "GET", "parameters": {"advertiserId": {"type": "string", "location": "query"}, "chargeType": {"type": "string", "enum": ["credit", "debit", "monthly_minimum", "other", "slotting_fee", "tier_bonus"], "location": "query"}, "eventDateMax": {"type": "string", "location": "query"}, "eventDateMin": {"type": "string", "location": "query"}, "linkId": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "memberId": {"type": "string", "location": "query"}, "modifyDateMax": {"type": "string", "location": "query"}, "modifyDateMin": {"type": "string", "location": "query"}, "orderId": {"type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "productCategory": {"type": "string", "location": "query"}, "publisherId": {"type": "string", "location": "query"}, "role": {"type": "string", "required": true, "enum": ["advertisers", "publishers"], "location": "path"}, "roleId": {"type": "string", "required": true, "location": "path"}, "sku": {"type": "string", "location": "query"}, "status": {"type": "string", "enum": ["active", "canceled"], "location": "query"}, "type": {"type": "string", "enum": ["action", "charge", "transaction"], "location": "query"}}, "response": {"$ref": "Events"}, "scopes": ["https://www.googleapis.com/auth/gan", "https://www.googleapis.com/auth/gan.readonly"]}}}', true));
        $this->links = new Google_LinksServiceResource($this, $this->serviceName, 'links', json_decode('{"methods": {"get": {"id": "gan.links.get", "path": "{role}/{roleId}/link/{linkId}", "httpMethod": "GET", "parameters": {"linkId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "role": {"type": "string", "required": true, "enum": ["advertisers", "publishers"], "location": "path"}, "roleId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Link"}, "scopes": ["https://www.googleapis.com/auth/gan", "https://www.googleapis.com/auth/gan.readonly"]}, "insert": {"id": "gan.links.insert", "path": "{role}/{roleId}/link", "httpMethod": "POST", "parameters": {"role": {"type": "string", "required": true, "enum": ["advertisers", "publishers"], "location": "path"}, "roleId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Link"}, "response": {"$ref": "Link"}, "scopes": ["https://www.googleapis.com/auth/gan"]}, "list": {"id": "gan.links.list", "path": "{role}/{roleId}/links", "httpMethod": "GET", "parameters": {"advertiserId": {"type": "string", "format": "int64", "repeated": true, "location": "query"}, "assetSize": {"type": "string", "repeated": true, "location": "query"}, "authorship": {"type": "string", "enum": ["advertiser", "publisher"], "location": "query"}, "createDateMax": {"type": "string", "location": "query"}, "createDateMin": {"type": "string", "location": "query"}, "linkType": {"type": "string", "enum": ["banner", "text"], "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "promotionType": {"type": "string", "enum": ["coupon", "free_gift", "free_shipping", "percent_off", "price_cut"], "repeated": true, "location": "query"}, "relationshipStatus": {"type": "string", "enum": ["approved", "available"], "location": "query"}, "role": {"type": "string", "required": true, "enum": ["advertisers", "publishers"], "location": "path"}, "roleId": {"type": "string", "required": true, "location": "path"}, "searchText": {"type": "string", "location": "query"}, "startDateMax": {"type": "string", "location": "query"}, "startDateMin": {"type": "string", "location": "query"}}, "response": {"$ref": "Links"}, "scopes": ["https://www.googleapis.com/auth/gan", "https://www.googleapis.com/auth/gan.readonly"]}}}', true));
        $this->publishers = new Google_PublishersServiceResource($this, $this->serviceName, 'publishers', json_decode('{"methods": {"get": {"id": "gan.publishers.get", "path": "{role}/{roleId}/publisher", "httpMethod": "GET", "parameters": {"publisherId": {"type": "string", "location": "query"}, "role": {"type": "string", "required": true, "enum": ["advertisers", "publishers"], "location": "path"}, "roleId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Publisher"}, "scopes": ["https://www.googleapis.com/auth/gan", "https://www.googleapis.com/auth/gan.readonly"]}, "list": {"id": "gan.publishers.list", "path": "{role}/{roleId}/publishers", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "minNinetyDayEpc": {"type": "number", "format": "double", "location": "query"}, "minPayoutRank": {"type": "integer", "format": "int32", "minimum": "1", "maximum": "4", "location": "query"}, "minSevenDayEpc": {"type": "number", "format": "double", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "publisherCategory": {"type": "string", "location": "query"}, "relationshipStatus": {"type": "string", "enum": ["approved", "available", "deactivated", "declined", "pending"], "location": "query"}, "role": {"type": "string", "required": true, "enum": ["advertisers", "publishers"], "location": "path"}, "roleId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Publishers"}, "scopes": ["https://www.googleapis.com/auth/gan", "https://www.googleapis.com/auth/gan.readonly"]}}}', true));
        $this->reports = new Google_ReportsServiceResource($this, $this->serviceName, 'reports', json_decode('{"methods": {"get": {"id": "gan.reports.get", "path": "{role}/{roleId}/report/{reportType}", "httpMethod": "GET", "parameters": {"advertiserId": {"type": "string", "repeated": true, "location": "query"}, "calculateTotals": {"type": "boolean", "location": "query"}, "endDate": {"type": "string", "location": "query"}, "eventType": {"type": "string", "enum": ["action", "charge", "transaction"], "location": "query"}, "linkId": {"type": "string", "repeated": true, "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "location": "query"}, "orderId": {"type": "string", "repeated": true, "location": "query"}, "publisherId": {"type": "string", "repeated": true, "location": "query"}, "reportType": {"type": "string", "required": true, "enum": ["order_delta"], "location": "path"}, "role": {"type": "string", "required": true, "enum": ["advertisers", "publishers"], "location": "path"}, "roleId": {"type": "string", "required": true, "location": "path"}, "startDate": {"type": "string", "location": "query"}, "startIndex": {"type": "integer", "format": "uint32", "minimum": "0", "location": "query"}, "status": {"type": "string", "enum": ["active", "canceled", "invalid"], "location": "query"}}, "response": {"$ref": "Report"}, "scopes": ["https://www.googleapis.com/auth/gan", "https://www.googleapis.com/auth/gan.readonly"]}}}', true));

    }
}


/**
 * Class Google_Advertiser
 */
class Google_Advertiser extends Google_Model
{
    /**
     * @var
     */
    public $allowPublisherCreatedLinks;
    /**
     * @var
     */
    public $category;
    /**
     * @var
     */
    public $commissionDuration;
    /**
     * @var
     */
    public $contactEmail;
    /**
     * @var
     */
    public $contactPhone;
    /**
     * @var
     */
    public $defaultLinkId;
    /**
     * @var
     */
    public $description;
    /**
     * @var string
     */
    protected $__epcNinetyDayAverageType = 'Google_Money';
    /**
     * @var string
     */
    protected $__epcNinetyDayAverageDataType = '';
    /**
     * @var
     */
    public $epcNinetyDayAverage;
    /**
     * @var string
     */
    protected $__epcSevenDayAverageType = 'Google_Money';
    /**
     * @var string
     */
    protected $__epcSevenDayAverageDataType = '';
    /**
     * @var
     */
    public $epcSevenDayAverage;
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__itemType = 'Google_Advertiser';
    /**
     * @var string
     */
    protected $__itemDataType = '';
    /**
     * @var
     */
    public $item;
    /**
     * @var
     */
    public $joinDate;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $logoUrl;
    /**
     * @var
     */
    public $merchantCenterIds;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $payoutRank;
    /**
     * @var
     */
    public $productFeedsEnabled;
    /**
     * @var
     */
    public $redirectDomains;
    /**
     * @var
     */
    public $siteUrl;
    /**
     * @var
     */
    public $status;

    /**
     * @param $allowPublisherCreatedLinks
     */
    public function setAllowPublisherCreatedLinks($allowPublisherCreatedLinks)
    {
        $this->allowPublisherCreatedLinks = $allowPublisherCreatedLinks;
    }

    /**
     * @return mixed
     */
    public function getAllowPublisherCreatedLinks()
    {
        return $this->allowPublisherCreatedLinks;
    }

    /**
     * @param $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param $commissionDuration
     */
    public function setCommissionDuration($commissionDuration)
    {
        $this->commissionDuration = $commissionDuration;
    }

    /**
     * @return mixed
     */
    public function getCommissionDuration()
    {
        return $this->commissionDuration;
    }

    /**
     * @param $contactEmail
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
    }

    /**
     * @return mixed
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * @param $contactPhone
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;
    }

    /**
     * @return mixed
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * @param $defaultLinkId
     */
    public function setDefaultLinkId($defaultLinkId)
    {
        $this->defaultLinkId = $defaultLinkId;
    }

    /**
     * @return mixed
     */
    public function getDefaultLinkId()
    {
        return $this->defaultLinkId;
    }

    /**
     * @param $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param Google_Money $epcNinetyDayAverage
     */
    public function setEpcNinetyDayAverage(Google_Money $epcNinetyDayAverage)
    {
        $this->epcNinetyDayAverage = $epcNinetyDayAverage;
    }

    /**
     * @return mixed
     */
    public function getEpcNinetyDayAverage()
    {
        return $this->epcNinetyDayAverage;
    }

    /**
     * @param Google_Money $epcSevenDayAverage
     */
    public function setEpcSevenDayAverage(Google_Money $epcSevenDayAverage)
    {
        $this->epcSevenDayAverage = $epcSevenDayAverage;
    }

    /**
     * @return mixed
     */
    public function getEpcSevenDayAverage()
    {
        return $this->epcSevenDayAverage;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Google_Advertiser $item
     */
    public function setItem(Google_Advertiser $item)
    {
        $this->item = $item;
    }

    /**
     * @return mixed
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param $joinDate
     */
    public function setJoinDate($joinDate)
    {
        $this->joinDate = $joinDate;
    }

    /**
     * @return mixed
     */
    public function getJoinDate()
    {
        return $this->joinDate;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    /**
     * @return mixed
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param $logoUrl
     */
    public function setLogoUrl($logoUrl)
    {
        $this->logoUrl = $logoUrl;
    }

    /**
     * @return mixed
     */
    public function getLogoUrl()
    {
        return $this->logoUrl;
    }

    /**
     * @param $merchantCenterIds
     * @throws Google_Exception
     */
    public function setMerchantCenterIds(/* array(Google_string) */
        $merchantCenterIds)
    {
        $this->assertIsArray($merchantCenterIds, 'Google_string', __METHOD__);
        $this->merchantCenterIds = $merchantCenterIds;
    }

    /**
     * @return mixed
     */
    public function getMerchantCenterIds()
    {
        return $this->merchantCenterIds;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $payoutRank
     */
    public function setPayoutRank($payoutRank)
    {
        $this->payoutRank = $payoutRank;
    }

    /**
     * @return mixed
     */
    public function getPayoutRank()
    {
        return $this->payoutRank;
    }

    /**
     * @param $productFeedsEnabled
     */
    public function setProductFeedsEnabled($productFeedsEnabled)
    {
        $this->productFeedsEnabled = $productFeedsEnabled;
    }

    /**
     * @return mixed
     */
    public function getProductFeedsEnabled()
    {
        return $this->productFeedsEnabled;
    }

    /**
     * @param $redirectDomains
     * @throws Google_Exception
     */
    public function setRedirectDomains(/* array(Google_string) */
        $redirectDomains)
    {
        $this->assertIsArray($redirectDomains, 'Google_string', __METHOD__);
        $this->redirectDomains = $redirectDomains;
    }

    /**
     * @return mixed
     */
    public function getRedirectDomains()
    {
        return $this->redirectDomains;
    }

    /**
     * @param $siteUrl
     */
    public function setSiteUrl($siteUrl)
    {
        $this->siteUrl = $siteUrl;
    }

    /**
     * @return mixed
     */
    public function getSiteUrl()
    {
        return $this->siteUrl;
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
}

/**
 * Class Google_Advertisers
 */
class Google_Advertisers extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Advertiser';
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
    public function setItems(/* array(Google_Advertiser) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Advertiser', __METHOD__);
        $this->items = $items;
    }

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
}

/**
 * Class Google_CcOffer
 */
class Google_CcOffer extends Google_Model
{
    /**
     * @var
     */
    public $additionalCardBenefits;
    /**
     * @var
     */
    public $additionalCardHolderFee;
    /**
     * @var
     */
    public $ageMinimum;
    /**
     * @var
     */
    public $ageMinimumDetails;
    /**
     * @var
     */
    public $annualFee;
    /**
     * @var
     */
    public $annualFeeDisplay;
    /**
     * @var
     */
    public $annualRewardMaximum;
    /**
     * @var
     */
    public $approvedCategories;
    /**
     * @var
     */
    public $aprDisplay;
    /**
     * @var
     */
    public $balanceComputationMethod;
    /**
     * @var
     */
    public $balanceTransferTerms;
    /**
     * @var string
     */
    protected $__bonusRewardsType = 'Google_CcOfferBonusRewards';
    /**
     * @var string
     */
    protected $__bonusRewardsDataType = 'array';
    /**
     * @var
     */
    public $bonusRewards;
    /**
     * @var
     */
    public $carRentalInsurance;
    /**
     * @var
     */
    public $cardBenefits;
    /**
     * @var
     */
    public $cardName;
    /**
     * @var
     */
    public $cardType;
    /**
     * @var
     */
    public $cashAdvanceTerms;
    /**
     * @var
     */
    public $creditLimitMax;
    /**
     * @var
     */
    public $creditLimitMin;
    /**
     * @var
     */
    public $creditRatingDisplay;
    /**
     * @var string
     */
    protected $__defaultFeesType = 'Google_CcOfferDefaultFees';
    /**
     * @var string
     */
    protected $__defaultFeesDataType = 'array';
    /**
     * @var
     */
    public $defaultFees;
    /**
     * @var
     */
    public $disclaimer;
    /**
     * @var
     */
    public $emergencyInsurance;
    /**
     * @var
     */
    public $existingCustomerOnly;
    /**
     * @var
     */
    public $extendedWarranty;
    /**
     * @var
     */
    public $firstYearAnnualFee;
    /**
     * @var
     */
    public $flightAccidentInsurance;
    /**
     * @var
     */
    public $foreignCurrencyTransactionFee;
    /**
     * @var
     */
    public $fraudLiability;
    /**
     * @var
     */
    public $gracePeriodDisplay;
    /**
     * @var
     */
    public $imageUrl;
    /**
     * @var
     */
    public $initialSetupAndProcessingFee;
    /**
     * @var
     */
    public $introBalanceTransferTerms;
    /**
     * @var
     */
    public $introCashAdvanceTerms;
    /**
     * @var
     */
    public $introPurchaseTerms;
    /**
     * @var
     */
    public $issuer;
    /**
     * @var
     */
    public $issuerId;
    /**
     * @var
     */
    public $issuerWebsite;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $landingPageUrl;
    /**
     * @var
     */
    public $latePaymentFee;
    /**
     * @var
     */
    public $luggageInsurance;
    /**
     * @var
     */
    public $maxPurchaseRate;
    /**
     * @var
     */
    public $minPurchaseRate;
    /**
     * @var
     */
    public $minimumFinanceCharge;
    /**
     * @var
     */
    public $network;
    /**
     * @var
     */
    public $offerId;
    /**
     * @var
     */
    public $offersImmediateCashReward;
    /**
     * @var
     */
    public $overLimitFee;
    /**
     * @var
     */
    public $prohibitedCategories;
    /**
     * @var
     */
    public $purchaseRateAdditionalDetails;
    /**
     * @var
     */
    public $purchaseRateType;
    /**
     * @var
     */
    public $returnedPaymentFee;
    /**
     * @var
     */
    public $rewardPartner;
    /**
     * @var
     */
    public $rewardUnit;
    /**
     * @var string
     */
    protected $__rewardsType = 'Google_CcOfferRewards';
    /**
     * @var string
     */
    protected $__rewardsDataType = 'array';
    /**
     * @var
     */
    public $rewards;
    /**
     * @var
     */
    public $rewardsExpire;
    /**
     * @var
     */
    public $rewardsHaveBlackoutDates;
    /**
     * @var
     */
    public $statementCopyFee;
    /**
     * @var
     */
    public $trackingUrl;
    /**
     * @var
     */
    public $travelInsurance;
    /**
     * @var
     */
    public $variableRatesLastUpdated;
    /**
     * @var
     */
    public $variableRatesUpdateFrequency;

    /**
     * @param $additionalCardBenefits
     * @throws Google_Exception
     */
    public function setAdditionalCardBenefits(/* array(Google_string) */
        $additionalCardBenefits)
    {
        $this->assertIsArray($additionalCardBenefits, 'Google_string', __METHOD__);
        $this->additionalCardBenefits = $additionalCardBenefits;
    }

    /**
     * @return mixed
     */
    public function getAdditionalCardBenefits()
    {
        return $this->additionalCardBenefits;
    }

    /**
     * @param $additionalCardHolderFee
     */
    public function setAdditionalCardHolderFee($additionalCardHolderFee)
    {
        $this->additionalCardHolderFee = $additionalCardHolderFee;
    }

    /**
     * @return mixed
     */
    public function getAdditionalCardHolderFee()
    {
        return $this->additionalCardHolderFee;
    }

    /**
     * @param $ageMinimum
     */
    public function setAgeMinimum($ageMinimum)
    {
        $this->ageMinimum = $ageMinimum;
    }

    /**
     * @return mixed
     */
    public function getAgeMinimum()
    {
        return $this->ageMinimum;
    }

    /**
     * @param $ageMinimumDetails
     */
    public function setAgeMinimumDetails($ageMinimumDetails)
    {
        $this->ageMinimumDetails = $ageMinimumDetails;
    }

    /**
     * @return mixed
     */
    public function getAgeMinimumDetails()
    {
        return $this->ageMinimumDetails;
    }

    /**
     * @param $annualFee
     */
    public function setAnnualFee($annualFee)
    {
        $this->annualFee = $annualFee;
    }

    /**
     * @return mixed
     */
    public function getAnnualFee()
    {
        return $this->annualFee;
    }

    /**
     * @param $annualFeeDisplay
     */
    public function setAnnualFeeDisplay($annualFeeDisplay)
    {
        $this->annualFeeDisplay = $annualFeeDisplay;
    }

    /**
     * @return mixed
     */
    public function getAnnualFeeDisplay()
    {
        return $this->annualFeeDisplay;
    }

    /**
     * @param $annualRewardMaximum
     */
    public function setAnnualRewardMaximum($annualRewardMaximum)
    {
        $this->annualRewardMaximum = $annualRewardMaximum;
    }

    /**
     * @return mixed
     */
    public function getAnnualRewardMaximum()
    {
        return $this->annualRewardMaximum;
    }

    /**
     * @param $approvedCategories
     * @throws Google_Exception
     */
    public function setApprovedCategories(/* array(Google_string) */
        $approvedCategories)
    {
        $this->assertIsArray($approvedCategories, 'Google_string', __METHOD__);
        $this->approvedCategories = $approvedCategories;
    }

    /**
     * @return mixed
     */
    public function getApprovedCategories()
    {
        return $this->approvedCategories;
    }

    /**
     * @param $aprDisplay
     */
    public function setAprDisplay($aprDisplay)
    {
        $this->aprDisplay = $aprDisplay;
    }

    /**
     * @return mixed
     */
    public function getAprDisplay()
    {
        return $this->aprDisplay;
    }

    /**
     * @param $balanceComputationMethod
     */
    public function setBalanceComputationMethod($balanceComputationMethod)
    {
        $this->balanceComputationMethod = $balanceComputationMethod;
    }

    /**
     * @return mixed
     */
    public function getBalanceComputationMethod()
    {
        return $this->balanceComputationMethod;
    }

    /**
     * @param $balanceTransferTerms
     */
    public function setBalanceTransferTerms($balanceTransferTerms)
    {
        $this->balanceTransferTerms = $balanceTransferTerms;
    }

    /**
     * @return mixed
     */
    public function getBalanceTransferTerms()
    {
        return $this->balanceTransferTerms;
    }

    /**
     * @param $bonusRewards
     * @throws Google_Exception
     */
    public function setBonusRewards(/* array(Google_CcOfferBonusRewards) */
        $bonusRewards)
    {
        $this->assertIsArray($bonusRewards, 'Google_CcOfferBonusRewards', __METHOD__);
        $this->bonusRewards = $bonusRewards;
    }

    /**
     * @return mixed
     */
    public function getBonusRewards()
    {
        return $this->bonusRewards;
    }

    /**
     * @param $carRentalInsurance
     */
    public function setCarRentalInsurance($carRentalInsurance)
    {
        $this->carRentalInsurance = $carRentalInsurance;
    }

    /**
     * @return mixed
     */
    public function getCarRentalInsurance()
    {
        return $this->carRentalInsurance;
    }

    /**
     * @param $cardBenefits
     * @throws Google_Exception
     */
    public function setCardBenefits(/* array(Google_string) */
        $cardBenefits)
    {
        $this->assertIsArray($cardBenefits, 'Google_string', __METHOD__);
        $this->cardBenefits = $cardBenefits;
    }

    /**
     * @return mixed
     */
    public function getCardBenefits()
    {
        return $this->cardBenefits;
    }

    /**
     * @param $cardName
     */
    public function setCardName($cardName)
    {
        $this->cardName = $cardName;
    }

    /**
     * @return mixed
     */
    public function getCardName()
    {
        return $this->cardName;
    }

    /**
     * @param $cardType
     */
    public function setCardType($cardType)
    {
        $this->cardType = $cardType;
    }

    /**
     * @return mixed
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * @param $cashAdvanceTerms
     */
    public function setCashAdvanceTerms($cashAdvanceTerms)
    {
        $this->cashAdvanceTerms = $cashAdvanceTerms;
    }

    /**
     * @return mixed
     */
    public function getCashAdvanceTerms()
    {
        return $this->cashAdvanceTerms;
    }

    /**
     * @param $creditLimitMax
     */
    public function setCreditLimitMax($creditLimitMax)
    {
        $this->creditLimitMax = $creditLimitMax;
    }

    /**
     * @return mixed
     */
    public function getCreditLimitMax()
    {
        return $this->creditLimitMax;
    }

    /**
     * @param $creditLimitMin
     */
    public function setCreditLimitMin($creditLimitMin)
    {
        $this->creditLimitMin = $creditLimitMin;
    }

    /**
     * @return mixed
     */
    public function getCreditLimitMin()
    {
        return $this->creditLimitMin;
    }

    /**
     * @param $creditRatingDisplay
     */
    public function setCreditRatingDisplay($creditRatingDisplay)
    {
        $this->creditRatingDisplay = $creditRatingDisplay;
    }

    /**
     * @return mixed
     */
    public function getCreditRatingDisplay()
    {
        return $this->creditRatingDisplay;
    }

    /**
     * @param $defaultFees
     * @throws Google_Exception
     */
    public function setDefaultFees(/* array(Google_CcOfferDefaultFees) */
        $defaultFees)
    {
        $this->assertIsArray($defaultFees, 'Google_CcOfferDefaultFees', __METHOD__);
        $this->defaultFees = $defaultFees;
    }

    /**
     * @return mixed
     */
    public function getDefaultFees()
    {
        return $this->defaultFees;
    }

    /**
     * @param $disclaimer
     */
    public function setDisclaimer($disclaimer)
    {
        $this->disclaimer = $disclaimer;
    }

    /**
     * @return mixed
     */
    public function getDisclaimer()
    {
        return $this->disclaimer;
    }

    /**
     * @param $emergencyInsurance
     */
    public function setEmergencyInsurance($emergencyInsurance)
    {
        $this->emergencyInsurance = $emergencyInsurance;
    }

    /**
     * @return mixed
     */
    public function getEmergencyInsurance()
    {
        return $this->emergencyInsurance;
    }

    /**
     * @param $existingCustomerOnly
     */
    public function setExistingCustomerOnly($existingCustomerOnly)
    {
        $this->existingCustomerOnly = $existingCustomerOnly;
    }

    /**
     * @return mixed
     */
    public function getExistingCustomerOnly()
    {
        return $this->existingCustomerOnly;
    }

    /**
     * @param $extendedWarranty
     */
    public function setExtendedWarranty($extendedWarranty)
    {
        $this->extendedWarranty = $extendedWarranty;
    }

    /**
     * @return mixed
     */
    public function getExtendedWarranty()
    {
        return $this->extendedWarranty;
    }

    /**
     * @param $firstYearAnnualFee
     */
    public function setFirstYearAnnualFee($firstYearAnnualFee)
    {
        $this->firstYearAnnualFee = $firstYearAnnualFee;
    }

    /**
     * @return mixed
     */
    public function getFirstYearAnnualFee()
    {
        return $this->firstYearAnnualFee;
    }

    /**
     * @param $flightAccidentInsurance
     */
    public function setFlightAccidentInsurance($flightAccidentInsurance)
    {
        $this->flightAccidentInsurance = $flightAccidentInsurance;
    }

    /**
     * @return mixed
     */
    public function getFlightAccidentInsurance()
    {
        return $this->flightAccidentInsurance;
    }

    /**
     * @param $foreignCurrencyTransactionFee
     */
    public function setForeignCurrencyTransactionFee($foreignCurrencyTransactionFee)
    {
        $this->foreignCurrencyTransactionFee = $foreignCurrencyTransactionFee;
    }

    /**
     * @return mixed
     */
    public function getForeignCurrencyTransactionFee()
    {
        return $this->foreignCurrencyTransactionFee;
    }

    /**
     * @param $fraudLiability
     */
    public function setFraudLiability($fraudLiability)
    {
        $this->fraudLiability = $fraudLiability;
    }

    /**
     * @return mixed
     */
    public function getFraudLiability()
    {
        return $this->fraudLiability;
    }

    /**
     * @param $gracePeriodDisplay
     */
    public function setGracePeriodDisplay($gracePeriodDisplay)
    {
        $this->gracePeriodDisplay = $gracePeriodDisplay;
    }

    /**
     * @return mixed
     */
    public function getGracePeriodDisplay()
    {
        return $this->gracePeriodDisplay;
    }

    /**
     * @param $imageUrl
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return mixed
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param $initialSetupAndProcessingFee
     */
    public function setInitialSetupAndProcessingFee($initialSetupAndProcessingFee)
    {
        $this->initialSetupAndProcessingFee = $initialSetupAndProcessingFee;
    }

    /**
     * @return mixed
     */
    public function getInitialSetupAndProcessingFee()
    {
        return $this->initialSetupAndProcessingFee;
    }

    /**
     * @param $introBalanceTransferTerms
     */
    public function setIntroBalanceTransferTerms($introBalanceTransferTerms)
    {
        $this->introBalanceTransferTerms = $introBalanceTransferTerms;
    }

    /**
     * @return mixed
     */
    public function getIntroBalanceTransferTerms()
    {
        return $this->introBalanceTransferTerms;
    }

    /**
     * @param $introCashAdvanceTerms
     */
    public function setIntroCashAdvanceTerms($introCashAdvanceTerms)
    {
        $this->introCashAdvanceTerms = $introCashAdvanceTerms;
    }

    /**
     * @return mixed
     */
    public function getIntroCashAdvanceTerms()
    {
        return $this->introCashAdvanceTerms;
    }

    /**
     * @param $introPurchaseTerms
     */
    public function setIntroPurchaseTerms($introPurchaseTerms)
    {
        $this->introPurchaseTerms = $introPurchaseTerms;
    }

    /**
     * @return mixed
     */
    public function getIntroPurchaseTerms()
    {
        return $this->introPurchaseTerms;
    }

    /**
     * @param $issuer
     */
    public function setIssuer($issuer)
    {
        $this->issuer = $issuer;
    }

    /**
     * @return mixed
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * @param $issuerId
     */
    public function setIssuerId($issuerId)
    {
        $this->issuerId = $issuerId;
    }

    /**
     * @return mixed
     */
    public function getIssuerId()
    {
        return $this->issuerId;
    }

    /**
     * @param $issuerWebsite
     */
    public function setIssuerWebsite($issuerWebsite)
    {
        $this->issuerWebsite = $issuerWebsite;
    }

    /**
     * @return mixed
     */
    public function getIssuerWebsite()
    {
        return $this->issuerWebsite;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    /**
     * @return mixed
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param $landingPageUrl
     */
    public function setLandingPageUrl($landingPageUrl)
    {
        $this->landingPageUrl = $landingPageUrl;
    }

    /**
     * @return mixed
     */
    public function getLandingPageUrl()
    {
        return $this->landingPageUrl;
    }

    /**
     * @param $latePaymentFee
     */
    public function setLatePaymentFee($latePaymentFee)
    {
        $this->latePaymentFee = $latePaymentFee;
    }

    /**
     * @return mixed
     */
    public function getLatePaymentFee()
    {
        return $this->latePaymentFee;
    }

    /**
     * @param $luggageInsurance
     */
    public function setLuggageInsurance($luggageInsurance)
    {
        $this->luggageInsurance = $luggageInsurance;
    }

    /**
     * @return mixed
     */
    public function getLuggageInsurance()
    {
        return $this->luggageInsurance;
    }

    /**
     * @param $maxPurchaseRate
     */
    public function setMaxPurchaseRate($maxPurchaseRate)
    {
        $this->maxPurchaseRate = $maxPurchaseRate;
    }

    /**
     * @return mixed
     */
    public function getMaxPurchaseRate()
    {
        return $this->maxPurchaseRate;
    }

    /**
     * @param $minPurchaseRate
     */
    public function setMinPurchaseRate($minPurchaseRate)
    {
        $this->minPurchaseRate = $minPurchaseRate;
    }

    /**
     * @return mixed
     */
    public function getMinPurchaseRate()
    {
        return $this->minPurchaseRate;
    }

    /**
     * @param $minimumFinanceCharge
     */
    public function setMinimumFinanceCharge($minimumFinanceCharge)
    {
        $this->minimumFinanceCharge = $minimumFinanceCharge;
    }

    /**
     * @return mixed
     */
    public function getMinimumFinanceCharge()
    {
        return $this->minimumFinanceCharge;
    }

    /**
     * @param $network
     */
    public function setNetwork($network)
    {
        $this->network = $network;
    }

    /**
     * @return mixed
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * @param $offerId
     */
    public function setOfferId($offerId)
    {
        $this->offerId = $offerId;
    }

    /**
     * @return mixed
     */
    public function getOfferId()
    {
        return $this->offerId;
    }

    /**
     * @param $offersImmediateCashReward
     */
    public function setOffersImmediateCashReward($offersImmediateCashReward)
    {
        $this->offersImmediateCashReward = $offersImmediateCashReward;
    }

    /**
     * @return mixed
     */
    public function getOffersImmediateCashReward()
    {
        return $this->offersImmediateCashReward;
    }

    /**
     * @param $overLimitFee
     */
    public function setOverLimitFee($overLimitFee)
    {
        $this->overLimitFee = $overLimitFee;
    }

    /**
     * @return mixed
     */
    public function getOverLimitFee()
    {
        return $this->overLimitFee;
    }

    /**
     * @param $prohibitedCategories
     * @throws Google_Exception
     */
    public function setProhibitedCategories(/* array(Google_string) */
        $prohibitedCategories)
    {
        $this->assertIsArray($prohibitedCategories, 'Google_string', __METHOD__);
        $this->prohibitedCategories = $prohibitedCategories;
    }

    /**
     * @return mixed
     */
    public function getProhibitedCategories()
    {
        return $this->prohibitedCategories;
    }

    /**
     * @param $purchaseRateAdditionalDetails
     */
    public function setPurchaseRateAdditionalDetails($purchaseRateAdditionalDetails)
    {
        $this->purchaseRateAdditionalDetails = $purchaseRateAdditionalDetails;
    }

    /**
     * @return mixed
     */
    public function getPurchaseRateAdditionalDetails()
    {
        return $this->purchaseRateAdditionalDetails;
    }

    /**
     * @param $purchaseRateType
     */
    public function setPurchaseRateType($purchaseRateType)
    {
        $this->purchaseRateType = $purchaseRateType;
    }

    /**
     * @return mixed
     */
    public function getPurchaseRateType()
    {
        return $this->purchaseRateType;
    }

    /**
     * @param $returnedPaymentFee
     */
    public function setReturnedPaymentFee($returnedPaymentFee)
    {
        $this->returnedPaymentFee = $returnedPaymentFee;
    }

    /**
     * @return mixed
     */
    public function getReturnedPaymentFee()
    {
        return $this->returnedPaymentFee;
    }

    /**
     * @param $rewardPartner
     */
    public function setRewardPartner($rewardPartner)
    {
        $this->rewardPartner = $rewardPartner;
    }

    /**
     * @return mixed
     */
    public function getRewardPartner()
    {
        return $this->rewardPartner;
    }

    /**
     * @param $rewardUnit
     */
    public function setRewardUnit($rewardUnit)
    {
        $this->rewardUnit = $rewardUnit;
    }

    /**
     * @return mixed
     */
    public function getRewardUnit()
    {
        return $this->rewardUnit;
    }

    /**
     * @param $rewards
     * @throws Google_Exception
     */
    public function setRewards(/* array(Google_CcOfferRewards) */
        $rewards)
    {
        $this->assertIsArray($rewards, 'Google_CcOfferRewards', __METHOD__);
        $this->rewards = $rewards;
    }

    /**
     * @return mixed
     */
    public function getRewards()
    {
        return $this->rewards;
    }

    /**
     * @param $rewardsExpire
     */
    public function setRewardsExpire($rewardsExpire)
    {
        $this->rewardsExpire = $rewardsExpire;
    }

    /**
     * @return mixed
     */
    public function getRewardsExpire()
    {
        return $this->rewardsExpire;
    }

    /**
     * @param $rewardsHaveBlackoutDates
     */
    public function setRewardsHaveBlackoutDates($rewardsHaveBlackoutDates)
    {
        $this->rewardsHaveBlackoutDates = $rewardsHaveBlackoutDates;
    }

    /**
     * @return mixed
     */
    public function getRewardsHaveBlackoutDates()
    {
        return $this->rewardsHaveBlackoutDates;
    }

    /**
     * @param $statementCopyFee
     */
    public function setStatementCopyFee($statementCopyFee)
    {
        $this->statementCopyFee = $statementCopyFee;
    }

    /**
     * @return mixed
     */
    public function getStatementCopyFee()
    {
        return $this->statementCopyFee;
    }

    /**
     * @param $trackingUrl
     */
    public function setTrackingUrl($trackingUrl)
    {
        $this->trackingUrl = $trackingUrl;
    }

    /**
     * @return mixed
     */
    public function getTrackingUrl()
    {
        return $this->trackingUrl;
    }

    /**
     * @param $travelInsurance
     */
    public function setTravelInsurance($travelInsurance)
    {
        $this->travelInsurance = $travelInsurance;
    }

    /**
     * @return mixed
     */
    public function getTravelInsurance()
    {
        return $this->travelInsurance;
    }

    /**
     * @param $variableRatesLastUpdated
     */
    public function setVariableRatesLastUpdated($variableRatesLastUpdated)
    {
        $this->variableRatesLastUpdated = $variableRatesLastUpdated;
    }

    /**
     * @return mixed
     */
    public function getVariableRatesLastUpdated()
    {
        return $this->variableRatesLastUpdated;
    }

    /**
     * @param $variableRatesUpdateFrequency
     */
    public function setVariableRatesUpdateFrequency($variableRatesUpdateFrequency)
    {
        $this->variableRatesUpdateFrequency = $variableRatesUpdateFrequency;
    }

    /**
     * @return mixed
     */
    public function getVariableRatesUpdateFrequency()
    {
        return $this->variableRatesUpdateFrequency;
    }
}

/**
 * Class Google_CcOfferBonusRewards
 */
class Google_CcOfferBonusRewards extends Google_Model
{
    /**
     * @var
     */
    public $amount;
    /**
     * @var
     */
    public $details;

    /**
     * @param $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param $details
     */
    public function setDetails($details)
    {
        $this->details = $details;
    }

    /**
     * @return mixed
     */
    public function getDetails()
    {
        return $this->details;
    }
}

/**
 * Class Google_CcOfferDefaultFees
 */
class Google_CcOfferDefaultFees extends Google_Model
{
    /**
     * @var
     */
    public $category;
    /**
     * @var
     */
    public $maxRate;
    /**
     * @var
     */
    public $minRate;
    /**
     * @var
     */
    public $rateType;

    /**
     * @param $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param $maxRate
     */
    public function setMaxRate($maxRate)
    {
        $this->maxRate = $maxRate;
    }

    /**
     * @return mixed
     */
    public function getMaxRate()
    {
        return $this->maxRate;
    }

    /**
     * @param $minRate
     */
    public function setMinRate($minRate)
    {
        $this->minRate = $minRate;
    }

    /**
     * @return mixed
     */
    public function getMinRate()
    {
        return $this->minRate;
    }

    /**
     * @param $rateType
     */
    public function setRateType($rateType)
    {
        $this->rateType = $rateType;
    }

    /**
     * @return mixed
     */
    public function getRateType()
    {
        return $this->rateType;
    }
}

/**
 * Class Google_CcOfferRewards
 */
class Google_CcOfferRewards extends Google_Model
{
    /**
     * @var
     */
    public $additionalDetails;
    /**
     * @var
     */
    public $amount;
    /**
     * @var
     */
    public $category;
    /**
     * @var
     */
    public $expirationMonths;
    /**
     * @var
     */
    public $maxRewardTier;
    /**
     * @var
     */
    public $minRewardTier;

    /**
     * @param $additionalDetails
     */
    public function setAdditionalDetails($additionalDetails)
    {
        $this->additionalDetails = $additionalDetails;
    }

    /**
     * @return mixed
     */
    public function getAdditionalDetails()
    {
        return $this->additionalDetails;
    }

    /**
     * @param $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param $expirationMonths
     */
    public function setExpirationMonths($expirationMonths)
    {
        $this->expirationMonths = $expirationMonths;
    }

    /**
     * @return mixed
     */
    public function getExpirationMonths()
    {
        return $this->expirationMonths;
    }

    /**
     * @param $maxRewardTier
     */
    public function setMaxRewardTier($maxRewardTier)
    {
        $this->maxRewardTier = $maxRewardTier;
    }

    /**
     * @return mixed
     */
    public function getMaxRewardTier()
    {
        return $this->maxRewardTier;
    }

    /**
     * @param $minRewardTier
     */
    public function setMinRewardTier($minRewardTier)
    {
        $this->minRewardTier = $minRewardTier;
    }

    /**
     * @return mixed
     */
    public function getMinRewardTier()
    {
        return $this->minRewardTier;
    }
}

/**
 * Class Google_CcOffers
 */
class Google_CcOffers extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_CcOffer';
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
    public function setItems(/* array(Google_CcOffer) */
        $items)
    {
        $this->assertIsArray($items, 'Google_CcOffer', __METHOD__);
        $this->items = $items;
    }

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
    public function getKind()
    {
        return $this->kind;
    }
}

/**
 * Class Google_Event
 */
class Google_Event extends Google_Model
{
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
    public $chargeId;
    /**
     * @var
     */
    public $chargeType;
    /**
     * @var string
     */
    protected $__commissionableSalesType = 'Google_Money';
    /**
     * @var string
     */
    protected $__commissionableSalesDataType = '';
    /**
     * @var
     */
    public $commissionableSales;
    /**
     * @var string
     */
    protected $__earningsType = 'Google_Money';
    /**
     * @var string
     */
    protected $__earningsDataType = '';
    /**
     * @var
     */
    public $earnings;
    /**
     * @var
     */
    public $eventDate;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $memberId;
    /**
     * @var
     */
    public $modifyDate;
    /**
     * @var string
     */
    protected $__networkFeeType = 'Google_Money';
    /**
     * @var string
     */
    protected $__networkFeeDataType = '';
    /**
     * @var
     */
    public $networkFee;
    /**
     * @var
     */
    public $orderId;
    /**
     * @var string
     */
    protected $__productsType = 'Google_EventProducts';
    /**
     * @var string
     */
    protected $__productsDataType = 'array';
    /**
     * @var
     */
    public $products;
    /**
     * @var string
     */
    protected $__publisherFeeType = 'Google_Money';
    /**
     * @var string
     */
    protected $__publisherFeeDataType = '';
    /**
     * @var
     */
    public $publisherFee;
    /**
     * @var
     */
    public $publisherId;
    /**
     * @var
     */
    public $publisherName;
    /**
     * @var
     */
    public $status;
    /**
     * @var
     */
    public $type;

    /**
     * @param $advertiserId
     */
    public function setAdvertiserId($advertiserId)
    {
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
     * @param $chargeId
     */
    public function setChargeId($chargeId)
    {
        $this->chargeId = $chargeId;
    }

    /**
     * @return mixed
     */
    public function getChargeId()
    {
        return $this->chargeId;
    }

    /**
     * @param $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->chargeType = $chargeType;
    }

    /**
     * @return mixed
     */
    public function getChargeType()
    {
        return $this->chargeType;
    }

    /**
     * @param Google_Money $commissionableSales
     */
    public function setCommissionableSales(Google_Money $commissionableSales)
    {
        $this->commissionableSales = $commissionableSales;
    }

    /**
     * @return mixed
     */
    public function getCommissionableSales()
    {
        return $this->commissionableSales;
    }

    /**
     * @param Google_Money $earnings
     */
    public function setEarnings(Google_Money $earnings)
    {
        $this->earnings = $earnings;
    }

    /**
     * @return mixed
     */
    public function getEarnings()
    {
        return $this->earnings;
    }

    /**
     * @param $eventDate
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;
    }

    /**
     * @return mixed
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    /**
     * @return mixed
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param $memberId
     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;
    }

    /**
     * @return mixed
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * @param $modifyDate
     */
    public function setModifyDate($modifyDate)
    {
        $this->modifyDate = $modifyDate;
    }

    /**
     * @return mixed
     */
    public function getModifyDate()
    {
        return $this->modifyDate;
    }

    /**
     * @param Google_Money $networkFee
     */
    public function setNetworkFee(Google_Money $networkFee)
    {
        $this->networkFee = $networkFee;
    }

    /**
     * @return mixed
     */
    public function getNetworkFee()
    {
        return $this->networkFee;
    }

    /**
     * @param $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param $products
     * @throws Google_Exception
     */
    public function setProducts(/* array(Google_EventProducts) */
        $products)
    {
        $this->assertIsArray($products, 'Google_EventProducts', __METHOD__);
        $this->products = $products;
    }

    /**
     * @return mixed
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param Google_Money $publisherFee
     */
    public function setPublisherFee(Google_Money $publisherFee)
    {
        $this->publisherFee = $publisherFee;
    }

    /**
     * @return mixed
     */
    public function getPublisherFee()
    {
        return $this->publisherFee;
    }

    /**
     * @param $publisherId
     */
    public function setPublisherId($publisherId)
    {
        $this->publisherId = $publisherId;
    }

    /**
     * @return mixed
     */
    public function getPublisherId()
    {
        return $this->publisherId;
    }

    /**
     * @param $publisherName
     */
    public function setPublisherName($publisherName)
    {
        $this->publisherName = $publisherName;
    }

    /**
     * @return mixed
     */
    public function getPublisherName()
    {
        return $this->publisherName;
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
     * @param $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
}

/**
 * Class Google_EventProducts
 */
class Google_EventProducts extends Google_Model
{
    /**
     * @var
     */
    public $categoryId;
    /**
     * @var
     */
    public $categoryName;
    /**
     * @var string
     */
    protected $__earningsType = 'Google_Money';
    /**
     * @var string
     */
    protected $__earningsDataType = '';
    /**
     * @var
     */
    public $earnings;
    /**
     * @var string
     */
    protected $__networkFeeType = 'Google_Money';
    /**
     * @var string
     */
    protected $__networkFeeDataType = '';
    /**
     * @var
     */
    public $networkFee;
    /**
     * @var string
     */
    protected $__publisherFeeType = 'Google_Money';
    /**
     * @var string
     */
    protected $__publisherFeeDataType = '';
    /**
     * @var
     */
    public $publisherFee;
    /**
     * @var
     */
    public $quantity;
    /**
     * @var
     */
    public $sku;
    /**
     * @var
     */
    public $skuName;
    /**
     * @var string
     */
    protected $__unitPriceType = 'Google_Money';
    /**
     * @var string
     */
    protected $__unitPriceDataType = '';
    /**
     * @var
     */
    public $unitPrice;

    /**
     * @param $categoryId
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param $categoryName
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
    }

    /**
     * @return mixed
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * @param Google_Money $earnings
     */
    public function setEarnings(Google_Money $earnings)
    {
        $this->earnings = $earnings;
    }

    /**
     * @return mixed
     */
    public function getEarnings()
    {
        return $this->earnings;
    }

    /**
     * @param Google_Money $networkFee
     */
    public function setNetworkFee(Google_Money $networkFee)
    {
        $this->networkFee = $networkFee;
    }

    /**
     * @return mixed
     */
    public function getNetworkFee()
    {
        return $this->networkFee;
    }

    /**
     * @param Google_Money $publisherFee
     */
    public function setPublisherFee(Google_Money $publisherFee)
    {
        $this->publisherFee = $publisherFee;
    }

    /**
     * @return mixed
     */
    public function getPublisherFee()
    {
        return $this->publisherFee;
    }

    /**
     * @param $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param $skuName
     */
    public function setSkuName($skuName)
    {
        $this->skuName = $skuName;
    }

    /**
     * @return mixed
     */
    public function getSkuName()
    {
        return $this->skuName;
    }

    /**
     * @param Google_Money $unitPrice
     */
    public function setUnitPrice(Google_Money $unitPrice)
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * @return mixed
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }
}

/**
 * Class Google_Events
 */
class Google_Events extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Event';
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
    public function setItems(/* array(Google_Event) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Event', __METHOD__);
        $this->items = $items;
    }

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
}

/**
 * Class Google_Link
 */
class Google_Link extends Google_Model
{
    /**
     * @var
     */
    public $advertiserId;
    /**
     * @var
     */
    public $authorship;
    /**
     * @var
     */
    public $availability;
    /**
     * @var
     */
    public $clickTrackingUrl;
    /**
     * @var
     */
    public $createDate;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $destinationUrl;
    /**
     * @var
     */
    public $duration;
    /**
     * @var
     */
    public $endDate;
    /**
     * @var string
     */
    protected $__epcNinetyDayAverageType = 'Google_Money';
    /**
     * @var string
     */
    protected $__epcNinetyDayAverageDataType = '';
    /**
     * @var
     */
    public $epcNinetyDayAverage;
    /**
     * @var string
     */
    protected $__epcSevenDayAverageType = 'Google_Money';
    /**
     * @var string
     */
    protected $__epcSevenDayAverageDataType = '';
    /**
     * @var
     */
    public $epcSevenDayAverage;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $imageAltText;
    /**
     * @var
     */
    public $impressionTrackingUrl;
    /**
     * @var
     */
    public $isActive;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $linkType;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $promotionType;
    /**
     * @var string
     */
    protected $__specialOffersType = 'Google_LinkSpecialOffers';
    /**
     * @var string
     */
    protected $__specialOffersDataType = '';
    /**
     * @var
     */
    public $specialOffers;
    /**
     * @var
     */
    public $startDate;

    /**
     * @param $advertiserId
     */
    public function setAdvertiserId($advertiserId)
    {
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
     * @param $authorship
     */
    public function setAuthorship($authorship)
    {
        $this->authorship = $authorship;
    }

    /**
     * @return mixed
     */
    public function getAuthorship()
    {
        return $this->authorship;
    }

    /**
     * @param $availability
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;
    }

    /**
     * @return mixed
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * @param $clickTrackingUrl
     */
    public function setClickTrackingUrl($clickTrackingUrl)
    {
        $this->clickTrackingUrl = $clickTrackingUrl;
    }

    /**
     * @return mixed
     */
    public function getClickTrackingUrl()
    {
        return $this->clickTrackingUrl;
    }

    /**
     * @param $createDate
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;
    }

    /**
     * @return mixed
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * @param $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $destinationUrl
     */
    public function setDestinationUrl($destinationUrl)
    {
        $this->destinationUrl = $destinationUrl;
    }

    /**
     * @return mixed
     */
    public function getDestinationUrl()
    {
        return $this->destinationUrl;
    }

    /**
     * @param $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
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
     * @param Google_Money $epcNinetyDayAverage
     */
    public function setEpcNinetyDayAverage(Google_Money $epcNinetyDayAverage)
    {
        $this->epcNinetyDayAverage = $epcNinetyDayAverage;
    }

    /**
     * @return mixed
     */
    public function getEpcNinetyDayAverage()
    {
        return $this->epcNinetyDayAverage;
    }

    /**
     * @param Google_Money $epcSevenDayAverage
     */
    public function setEpcSevenDayAverage(Google_Money $epcSevenDayAverage)
    {
        $this->epcSevenDayAverage = $epcSevenDayAverage;
    }

    /**
     * @return mixed
     */
    public function getEpcSevenDayAverage()
    {
        return $this->epcSevenDayAverage;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $imageAltText
     */
    public function setImageAltText($imageAltText)
    {
        $this->imageAltText = $imageAltText;
    }

    /**
     * @return mixed
     */
    public function getImageAltText()
    {
        return $this->imageAltText;
    }

    /**
     * @param $impressionTrackingUrl
     */
    public function setImpressionTrackingUrl($impressionTrackingUrl)
    {
        $this->impressionTrackingUrl = $impressionTrackingUrl;
    }

    /**
     * @return mixed
     */
    public function getImpressionTrackingUrl()
    {
        return $this->impressionTrackingUrl;
    }

    /**
     * @param $isActive
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }

    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    /**
     * @return mixed
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param $linkType
     */
    public function setLinkType($linkType)
    {
        $this->linkType = $linkType;
    }

    /**
     * @return mixed
     */
    public function getLinkType()
    {
        return $this->linkType;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $promotionType
     */
    public function setPromotionType($promotionType)
    {
        $this->promotionType = $promotionType;
    }

    /**
     * @return mixed
     */
    public function getPromotionType()
    {
        return $this->promotionType;
    }

    /**
     * @param Google_LinkSpecialOffers $specialOffers
     */
    public function setSpecialOffers(Google_LinkSpecialOffers $specialOffers)
    {
        $this->specialOffers = $specialOffers;
    }

    /**
     * @return mixed
     */
    public function getSpecialOffers()
    {
        return $this->specialOffers;
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
 * Class Google_LinkSpecialOffers
 */
class Google_LinkSpecialOffers extends Google_Model
{
    /**
     * @var
     */
    public $freeGift;
    /**
     * @var
     */
    public $freeShipping;
    /**
     * @var string
     */
    protected $__freeShippingMinType = 'Google_Money';
    /**
     * @var string
     */
    protected $__freeShippingMinDataType = '';
    /**
     * @var
     */
    public $freeShippingMin;
    /**
     * @var
     */
    public $percentOff;
    /**
     * @var string
     */
    protected $__percentOffMinType = 'Google_Money';
    /**
     * @var string
     */
    protected $__percentOffMinDataType = '';
    /**
     * @var
     */
    public $percentOffMin;
    /**
     * @var string
     */
    protected $__priceCutType = 'Google_Money';
    /**
     * @var string
     */
    protected $__priceCutDataType = '';
    /**
     * @var
     */
    public $priceCut;
    /**
     * @var string
     */
    protected $__priceCutMinType = 'Google_Money';
    /**
     * @var string
     */
    protected $__priceCutMinDataType = '';
    /**
     * @var
     */
    public $priceCutMin;
    /**
     * @var
     */
    public $promotionCodes;

    /**
     * @param $freeGift
     */
    public function setFreeGift($freeGift)
    {
        $this->freeGift = $freeGift;
    }

    /**
     * @return mixed
     */
    public function getFreeGift()
    {
        return $this->freeGift;
    }

    /**
     * @param $freeShipping
     */
    public function setFreeShipping($freeShipping)
    {
        $this->freeShipping = $freeShipping;
    }

    /**
     * @return mixed
     */
    public function getFreeShipping()
    {
        return $this->freeShipping;
    }

    /**
     * @param Google_Money $freeShippingMin
     */
    public function setFreeShippingMin(Google_Money $freeShippingMin)
    {
        $this->freeShippingMin = $freeShippingMin;
    }

    /**
     * @return mixed
     */
    public function getFreeShippingMin()
    {
        return $this->freeShippingMin;
    }

    /**
     * @param $percentOff
     */
    public function setPercentOff($percentOff)
    {
        $this->percentOff = $percentOff;
    }

    /**
     * @return mixed
     */
    public function getPercentOff()
    {
        return $this->percentOff;
    }

    /**
     * @param Google_Money $percentOffMin
     */
    public function setPercentOffMin(Google_Money $percentOffMin)
    {
        $this->percentOffMin = $percentOffMin;
    }

    /**
     * @return mixed
     */
    public function getPercentOffMin()
    {
        return $this->percentOffMin;
    }

    /**
     * @param Google_Money $priceCut
     */
    public function setPriceCut(Google_Money $priceCut)
    {
        $this->priceCut = $priceCut;
    }

    /**
     * @return mixed
     */
    public function getPriceCut()
    {
        return $this->priceCut;
    }

    /**
     * @param Google_Money $priceCutMin
     */
    public function setPriceCutMin(Google_Money $priceCutMin)
    {
        $this->priceCutMin = $priceCutMin;
    }

    /**
     * @return mixed
     */
    public function getPriceCutMin()
    {
        return $this->priceCutMin;
    }

    /**
     * @param $promotionCodes
     * @throws Google_Exception
     */
    public function setPromotionCodes(/* array(Google_string) */
        $promotionCodes)
    {
        $this->assertIsArray($promotionCodes, 'Google_string', __METHOD__);
        $this->promotionCodes = $promotionCodes;
    }

    /**
     * @return mixed
     */
    public function getPromotionCodes()
    {
        return $this->promotionCodes;
    }
}

/**
 * Class Google_Links
 */
class Google_Links extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Link';
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
    public function setItems(/* array(Google_Link) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Link', __METHOD__);
        $this->items = $items;
    }

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
}

/**
 * Class Google_Money
 */
class Google_Money extends Google_Model
{
    /**
     * @var
     */
    public $amount;
    /**
     * @var
     */
    public $currencyCode;

    /**
     * @param $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
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
}

/**
 * Class Google_Publisher
 */
class Google_Publisher extends Google_Model
{
    /**
     * @var
     */
    public $classification;
    /**
     * @var string
     */
    protected $__epcNinetyDayAverageType = 'Google_Money';
    /**
     * @var string
     */
    protected $__epcNinetyDayAverageDataType = '';
    /**
     * @var
     */
    public $epcNinetyDayAverage;
    /**
     * @var string
     */
    protected $__epcSevenDayAverageType = 'Google_Money';
    /**
     * @var string
     */
    protected $__epcSevenDayAverageDataType = '';
    /**
     * @var
     */
    public $epcSevenDayAverage;
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__itemType = 'Google_Publisher';
    /**
     * @var string
     */
    protected $__itemDataType = '';
    /**
     * @var
     */
    public $item;
    /**
     * @var
     */
    public $joinDate;
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
    public $payoutRank;
    /**
     * @var
     */
    public $sites;
    /**
     * @var
     */
    public $status;

    /**
     * @param $classification
     */
    public function setClassification($classification)
    {
        $this->classification = $classification;
    }

    /**
     * @return mixed
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * @param Google_Money $epcNinetyDayAverage
     */
    public function setEpcNinetyDayAverage(Google_Money $epcNinetyDayAverage)
    {
        $this->epcNinetyDayAverage = $epcNinetyDayAverage;
    }

    /**
     * @return mixed
     */
    public function getEpcNinetyDayAverage()
    {
        return $this->epcNinetyDayAverage;
    }

    /**
     * @param Google_Money $epcSevenDayAverage
     */
    public function setEpcSevenDayAverage(Google_Money $epcSevenDayAverage)
    {
        $this->epcSevenDayAverage = $epcSevenDayAverage;
    }

    /**
     * @return mixed
     */
    public function getEpcSevenDayAverage()
    {
        return $this->epcSevenDayAverage;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Google_Publisher $item
     */
    public function setItem(Google_Publisher $item)
    {
        $this->item = $item;
    }

    /**
     * @return mixed
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param $joinDate
     */
    public function setJoinDate($joinDate)
    {
        $this->joinDate = $joinDate;
    }

    /**
     * @return mixed
     */
    public function getJoinDate()
    {
        return $this->joinDate;
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

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $payoutRank
     */
    public function setPayoutRank($payoutRank)
    {
        $this->payoutRank = $payoutRank;
    }

    /**
     * @return mixed
     */
    public function getPayoutRank()
    {
        return $this->payoutRank;
    }

    /**
     * @param $sites
     * @throws Google_Exception
     */
    public function setSites(/* array(Google_string) */
        $sites)
    {
        $this->assertIsArray($sites, 'Google_string', __METHOD__);
        $this->sites = $sites;
    }

    /**
     * @return mixed
     */
    public function getSites()
    {
        return $this->sites;
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
}

/**
 * Class Google_Publishers
 */
class Google_Publishers extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Publisher';
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
    public function setItems(/* array(Google_Publisher) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Publisher', __METHOD__);
        $this->items = $items;
    }

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
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
    public $column_names;
    /**
     * @var
     */
    public $end_date;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $matching_row_count;
    /**
     * @var
     */
    public $rows;
    /**
     * @var
     */
    public $start_date;
    /**
     * @var
     */
    public $totals_rows;
    /**
     * @var
     */
    public $type;

    /**
     * @param $column_names
     * @throws Google_Exception
     */
    public function setColumn_names(/* array(Google_string) */
        $column_names)
    {
        $this->assertIsArray($column_names, 'Google_string', __METHOD__);
        $this->column_names = $column_names;
    }

    /**
     * @return mixed
     */
    public function getColumn_names()
    {
        return $this->column_names;
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
     * @param $matching_row_count
     */
    public function setMatching_row_count($matching_row_count)
    {
        $this->matching_row_count = $matching_row_count;
    }

    /**
     * @return mixed
     */
    public function getMatching_row_count()
    {
        return $this->matching_row_count;
    }

    /**
     * @param $rows
     * @throws Google_Exception
     */
    public function setRows(/* array(Google_object) */
        $rows)
    {
        $this->assertIsArray($rows, 'Google_object', __METHOD__);
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
     * @param $totals_rows
     * @throws Google_Exception
     */
    public function setTotals_rows(/* array(Google_object) */
        $totals_rows)
    {
        $this->assertIsArray($totals_rows, 'Google_object', __METHOD__);
        $this->totals_rows = $totals_rows;
    }

    /**
     * @return mixed
     */
    public function getTotals_rows()
    {
        return $this->totals_rows;
    }

    /**
     * @param $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
}
