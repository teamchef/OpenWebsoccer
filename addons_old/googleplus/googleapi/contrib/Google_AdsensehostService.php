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
 *   $adsensehostService = new Google_AdSenseHostService(...);
 *   $accounts = $adsensehostService->accounts;
 *  </code>
 */
class Google_AccountsServiceResource extends Google_ServiceResource
{

    /**
     * Get information about the selected associated AdSense account. (accounts.get)
     *
     * @param string $accountId Account to get information about.
     * @param array $optParams Optional parameters.
     * @return Google_Account
     * @throws Google_Exception
     */
    public function get($accountId, $optParams = [])
    {
        $params = ['accountId' => $accountId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Account($data);
        } else {
            return $data;
        }
    }

    /**
     * List hosted accounts associated with this AdSense account by ad client id. (accounts.list)
     *
     * @param string $filterAdClientId Ad clients to list accounts for.
     * @param array $optParams Optional parameters.
     * @return Google_Accounts
     * @throws Google_Exception
     */
    public function listAccounts($filterAdClientId, $optParams = [])
    {
        $params = ['filterAdClientId' => $filterAdClientId];
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
 * The "adclients" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsensehostService = new Google_AdSenseHostService(...);
 *   $adclients = $adsensehostService->adclients;
 *  </code>
 */
class Google_AccountsAdclientsServiceResource extends Google_ServiceResource
{

    /**
     * Get information about one of the ad clients in the specified publisher's AdSense account.
     * (adclients.get)
     *
     * @param string $accountId Account which contains the ad client.
     * @param string $adClientId Ad client to get.
     * @param array $optParams Optional parameters.
     * @return Google_AdClient
     * @throws Google_Exception
     */
    public function get($accountId, $adClientId, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'adClientId' => $adClientId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_AdClient($data);
        } else {
            return $data;
        }
    }

    /**
     * List all hosted ad clients in the specified hosted account. (adclients.list)
     *
     * @param string $accountId Account for which to list ad clients.
     * @param array $optParams Optional parameters.
     * @return Google_AdClients
     * @throws Google_Exception
     * @opt_param string maxResults The maximum number of ad clients to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through ad clients. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     */
    public function listAccountsAdclients($accountId, $optParams = [])
    {
        $params = ['accountId' => $accountId];
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
 *   $adsensehostService = new Google_AdSenseHostService(...);
 *   $adunits = $adsensehostService->adunits;
 *  </code>
 */
class Google_AccountsAdunitsServiceResource extends Google_ServiceResource
{

    /**
     * Delete the specified ad unit from the specified publisher AdSense account. (adunits.delete)
     *
     * @param string $accountId Account which contains the ad unit.
     * @param string $adClientId Ad client for which to get ad unit.
     * @param string $adUnitId Ad unit to delete.
     * @param array $optParams Optional parameters.
     * @return Google_AdUnit
     * @throws Google_Exception
     */
    public function delete($accountId, $adClientId, $adUnitId, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'adClientId' => $adClientId, 'adUnitId' => $adUnitId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        if ($this->useObjects()) {
            return new Google_AdUnit($data);
        } else {
            return $data;
        }
    }

    /**
     * Get the specified host ad unit in this AdSense account. (adunits.get)
     *
     * @param string $accountId Account which contains the ad unit.
     * @param string $adClientId Ad client for which to get ad unit.
     * @param string $adUnitId Ad unit to get.
     * @param array $optParams Optional parameters.
     * @return Google_AdUnit
     * @throws Google_Exception
     */
    public function get($accountId, $adClientId, $adUnitId, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'adClientId' => $adClientId, 'adUnitId' => $adUnitId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_AdUnit($data);
        } else {
            return $data;
        }
    }

    /**
     * Get ad code for the specified ad unit, attaching the specified host custom channels.
     * (adunits.getAdCode)
     *
     * @param string $accountId Account which contains the ad client.
     * @param string $adClientId Ad client with contains the ad unit.
     * @param string $adUnitId Ad unit to get the code for.
     * @param array $optParams Optional parameters.
     * @return Google_AdCode
     * @throws Google_Exception
     * @opt_param string hostCustomChannelId Host custom channel to attach to the ad code.
     */
    public function getAdCode($accountId, $adClientId, $adUnitId, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'adClientId' => $adClientId, 'adUnitId' => $adUnitId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('getAdCode', [$params]);
        if ($this->useObjects()) {
            return new Google_AdCode($data);
        } else {
            return $data;
        }
    }

    /**
     * Insert the supplied ad unit into the specified publisher AdSense account. (adunits.insert)
     *
     * @param string $accountId Account which will contain the ad unit.
     * @param string $adClientId Ad client into which to insert the ad unit.
     * @param Google_AdUnit $postBody
     * @param array $optParams Optional parameters.
     * @return Google_AdUnit
     * @throws Google_Exception
     */
    public function insert($accountId, $adClientId, Google_AdUnit $postBody, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'adClientId' => $adClientId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_AdUnit($data);
        } else {
            return $data;
        }
    }

    /**
     * List all ad units in the specified publisher's AdSense account. (adunits.list)
     *
     * @param string $accountId Account which contains the ad client.
     * @param string $adClientId Ad client for which to list ad units.
     * @param array $optParams Optional parameters.
     * @return Google_AdUnits
     * @throws Google_Exception
     * @opt_param bool includeInactive Whether to include inactive ad units. Default: true.
     * @opt_param string maxResults The maximum number of ad units to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through ad units. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     */
    public function listAccountsAdunits($accountId, $adClientId, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'adClientId' => $adClientId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_AdUnits($data);
        } else {
            return $data;
        }
    }

    /**
     * Update the supplied ad unit in the specified publisher AdSense account. This method supports
     * patch semantics. (adunits.patch)
     *
     * @param string $accountId Account which contains the ad client.
     * @param string $adClientId Ad client which contains the ad unit.
     * @param string $adUnitId Ad unit to get.
     * @param Google_AdUnit $postBody
     * @param array $optParams Optional parameters.
     * @return Google_AdUnit
     * @throws Google_Exception
     */
    public function patch($accountId, $adClientId, $adUnitId, Google_AdUnit $postBody, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'adClientId' => $adClientId, 'adUnitId' => $adUnitId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_AdUnit($data);
        } else {
            return $data;
        }
    }

    /**
     * Update the supplied ad unit in the specified publisher AdSense account. (adunits.update)
     *
     * @param string $accountId Account which contains the ad client.
     * @param string $adClientId Ad client which contains the ad unit.
     * @param Google_AdUnit $postBody
     * @param array $optParams Optional parameters.
     * @return Google_AdUnit
     * @throws Google_Exception
     */
    public function update($accountId, $adClientId, Google_AdUnit $postBody, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'adClientId' => $adClientId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_AdUnit($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "reports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsensehostService = new Google_AdSenseHostService(...);
 *   $reports = $adsensehostService->reports;
 *  </code>
 */
class Google_AccountsReportsServiceResource extends Google_ServiceResource
{

    /**
     * Generate an AdSense report based on the report request sent in the query parameters. Returns the
     * result as JSON; to retrieve output in CSV format specify "alt=csv" as a query parameter.
     * (reports.generate)
     *
     * @param string $accountId Hosted account upon which to report.
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
    public function generate($accountId, $startDate, $endDate, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'startDate' => $startDate, 'endDate' => $endDate];
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
 * The "adclients" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsensehostService = new Google_AdSenseHostService(...);
 *   $adclients = $adsensehostService->adclients;
 *  </code>
 */
class Google_AdclientsServiceResource extends Google_ServiceResource
{

    /**
     * Get information about one of the ad clients in the Host AdSense account. (adclients.get)
     *
     * @param string $adClientId Ad client to get.
     * @param array $optParams Optional parameters.
     * @return Google_AdClient
     * @throws Google_Exception
     */
    public function get($adClientId, $optParams = [])
    {
        $params = ['adClientId' => $adClientId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_AdClient($data);
        } else {
            return $data;
        }
    }

    /**
     * List all host ad clients in this AdSense account. (adclients.list)
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
 * The "associationsessions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsensehostService = new Google_AdSenseHostService(...);
 *   $associationsessions = $adsensehostService->associationsessions;
 *  </code>
 */
class Google_AssociationsessionsServiceResource extends Google_ServiceResource
{

    /**
     * Create an association session for initiating an association with an AdSense user.
     * (associationsessions.start)
     *
     * @param string $productCode Products to associate with the user.
     * @param string $websiteUrl The URL of the user's hosted website.
     * @param array $optParams Optional parameters.
     * @return Google_AssociationSession
     * @throws Google_Exception
     * @opt_param string userLocale The preferred locale of the user.
     * @opt_param string websiteLocale The locale of the user's hosted website.
     */
    public function start($productCode, $websiteUrl, $optParams = [])
    {
        $params = ['productCode' => $productCode, 'websiteUrl' => $websiteUrl];
        $params = array_merge($params, $optParams);
        $data = $this->__call('start', [$params]);
        if ($this->useObjects()) {
            return new Google_AssociationSession($data);
        } else {
            return $data;
        }
    }

    /**
     * Verify an association session after the association callback returns from AdSense signup.
     * (associationsessions.verify)
     *
     * @param string $token The token returned to the association callback URL.
     * @param array $optParams Optional parameters.
     * @return Google_AssociationSession
     * @throws Google_Exception
     */
    public function verify($token, $optParams = [])
    {
        $params = ['token' => $token];
        $params = array_merge($params, $optParams);
        $data = $this->__call('verify', [$params]);
        if ($this->useObjects()) {
            return new Google_AssociationSession($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "customchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsensehostService = new Google_AdSenseHostService(...);
 *   $customchannels = $adsensehostService->customchannels;
 *  </code>
 */
class Google_CustomchannelsServiceResource extends Google_ServiceResource
{

    /**
     * Delete a specific custom channel from the host AdSense account. (customchannels.delete)
     *
     * @param string $adClientId Ad client from which to delete the custom channel.
     * @param string $customChannelId Custom channel to delete.
     * @param array $optParams Optional parameters.
     * @return Google_CustomChannel
     * @throws Google_Exception
     */
    public function delete($adClientId, $customChannelId, $optParams = [])
    {
        $params = ['adClientId' => $adClientId, 'customChannelId' => $customChannelId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        if ($this->useObjects()) {
            return new Google_CustomChannel($data);
        } else {
            return $data;
        }
    }

    /**
     * Get a specific custom channel from the host AdSense account. (customchannels.get)
     *
     * @param string $adClientId Ad client from which to get the custom channel.
     * @param string $customChannelId Custom channel to get.
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
     * Add a new custom channel to the host AdSense account. (customchannels.insert)
     *
     * @param string $adClientId Ad client to which the new custom channel will be added.
     * @param Google_CustomChannel $postBody
     * @param array $optParams Optional parameters.
     * @return Google_CustomChannel
     * @throws Google_Exception
     */
    public function insert($adClientId, Google_CustomChannel $postBody, $optParams = [])
    {
        $params = ['adClientId' => $adClientId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_CustomChannel($data);
        } else {
            return $data;
        }
    }

    /**
     * List all host custom channels in this AdSense account. (customchannels.list)
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

    /**
     * Update a custom channel in the host AdSense account. This method supports patch semantics.
     * (customchannels.patch)
     *
     * @param string $adClientId Ad client in which the custom channel will be updated.
     * @param string $customChannelId Custom channel to get.
     * @param Google_CustomChannel $postBody
     * @param array $optParams Optional parameters.
     * @return Google_CustomChannel
     * @throws Google_Exception
     */
    public function patch($adClientId, $customChannelId, Google_CustomChannel $postBody, $optParams = [])
    {
        $params = ['adClientId' => $adClientId, 'customChannelId' => $customChannelId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_CustomChannel($data);
        } else {
            return $data;
        }
    }

    /**
     * Update a custom channel in the host AdSense account. (customchannels.update)
     *
     * @param string $adClientId Ad client in which the custom channel will be updated.
     * @param Google_CustomChannel $postBody
     * @param array $optParams Optional parameters.
     * @return Google_CustomChannel
     * @throws Google_Exception
     */
    public function update($adClientId, Google_CustomChannel $postBody, $optParams = [])
    {
        $params = ['adClientId' => $adClientId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_CustomChannel($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "reports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsensehostService = new Google_AdSenseHostService(...);
 *   $reports = $adsensehostService->reports;
 *  </code>
 */
class Google_ReportsServiceResource extends Google_ServiceResource
{

    /**
     * Generate an AdSense report based on the report request sent in the query parameters. Returns the
     * result as JSON; to retrieve output in CSV format specify "alt=csv" as a query parameter.
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
 * The "urlchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsensehostService = new Google_AdSenseHostService(...);
 *   $urlchannels = $adsensehostService->urlchannels;
 *  </code>
 */
class Google_UrlchannelsServiceResource extends Google_ServiceResource
{

    /**
     * Delete a URL channel from the host AdSense account. (urlchannels.delete)
     *
     * @param string $adClientId Ad client from which to delete the URL channel.
     * @param string $urlChannelId URL channel to delete.
     * @param array $optParams Optional parameters.
     * @return Google_UrlChannel
     * @throws Google_Exception
     */
    public function delete($adClientId, $urlChannelId, $optParams = [])
    {
        $params = ['adClientId' => $adClientId, 'urlChannelId' => $urlChannelId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        if ($this->useObjects()) {
            return new Google_UrlChannel($data);
        } else {
            return $data;
        }
    }

    /**
     * Add a new URL channel to the host AdSense account. (urlchannels.insert)
     *
     * @param string $adClientId Ad client to which the new URL channel will be added.
     * @param Google_UrlChannel $postBody
     * @param array $optParams Optional parameters.
     * @return Google_UrlChannel
     * @throws Google_Exception
     */
    public function insert($adClientId, Google_UrlChannel $postBody, $optParams = [])
    {
        $params = ['adClientId' => $adClientId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_UrlChannel($data);
        } else {
            return $data;
        }
    }

    /**
     * List all host URL channels in the host AdSense account. (urlchannels.list)
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
 * Service definition for Google_AdSenseHost (v4.1).
 *
 * <p>
 * Gives AdSense Hosts access to report generation, ad code generation, and publisher management capabilities.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/adsense/host/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_AdSenseHostService extends Google_Service
{
    /**
     * @var Google_AccountsServiceResource
     */
    public $accounts;
    /**
     * @var Google_AccountsAdclientsServiceResource
     */
    public $accounts_adclients;
    /**
     * @var Google_AccountsAdunitsServiceResource
     */
    public $accounts_adunits;
    /**
     * @var Google_AccountsReportsServiceResource
     */
    public $accounts_reports;
    /**
     * @var Google_AdclientsServiceResource
     */
    public $adclients;
    /**
     * @var Google_AssociationsessionsServiceResource
     */
    public $associationsessions;
    /**
     * @var Google_CustomchannelsServiceResource
     */
    public $customchannels;
    /**
     * @var Google_ReportsServiceResource
     */
    public $reports;
    /**
     * @var Google_UrlchannelsServiceResource
     */
    public $urlchannels;

    /**
     * Constructs the internal representation of the AdSenseHost service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'adsensehost/v4.1/';
        $this->version = 'v4.1';
        $this->serviceName = 'adsensehost';

        $client->addService($this->serviceName, $this->version);
        $this->accounts = new Google_AccountsServiceResource($this, $this->serviceName, 'accounts', json_decode('{"methods": {"get": {"id": "adsensehost.accounts.get", "path": "accounts/{accountId}", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Account"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}, "list": {"id": "adsensehost.accounts.list", "path": "accounts", "httpMethod": "GET", "parameters": {"filterAdClientId": {"type": "string", "required": true, "repeated": true, "location": "query"}}, "response": {"$ref": "Accounts"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}}}', true));
        $this->accounts_adclients = new Google_AccountsAdclientsServiceResource($this, $this->serviceName, 'adclients', json_decode('{"methods": {"get": {"id": "adsensehost.accounts.adclients.get", "path": "accounts/{accountId}/adclients/{adClientId}", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "adClientId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "AdClient"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}, "list": {"id": "adsensehost.accounts.adclients.list", "path": "accounts/{accountId}/adclients", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdClients"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}}}', true));
        $this->accounts_adunits = new Google_AccountsAdunitsServiceResource($this, $this->serviceName, 'adunits', json_decode('{"methods": {"delete": {"id": "adsensehost.accounts.adunits.delete", "path": "accounts/{accountId}/adclients/{adClientId}/adunits/{adUnitId}", "httpMethod": "DELETE", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "adClientId": {"type": "string", "required": true, "location": "path"}, "adUnitId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "AdUnit"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}, "get": {"id": "adsensehost.accounts.adunits.get", "path": "accounts/{accountId}/adclients/{adClientId}/adunits/{adUnitId}", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "adClientId": {"type": "string", "required": true, "location": "path"}, "adUnitId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "AdUnit"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}, "getAdCode": {"id": "adsensehost.accounts.adunits.getAdCode", "path": "accounts/{accountId}/adclients/{adClientId}/adunits/{adUnitId}/adcode", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "adClientId": {"type": "string", "required": true, "location": "path"}, "adUnitId": {"type": "string", "required": true, "location": "path"}, "hostCustomChannelId": {"type": "string", "repeated": true, "location": "query"}}, "response": {"$ref": "AdCode"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}, "insert": {"id": "adsensehost.accounts.adunits.insert", "path": "accounts/{accountId}/adclients/{adClientId}/adunits", "httpMethod": "POST", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "adClientId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "AdUnit"}, "response": {"$ref": "AdUnit"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}, "list": {"id": "adsensehost.accounts.adunits.list", "path": "accounts/{accountId}/adclients/{adClientId}/adunits", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "adClientId": {"type": "string", "required": true, "location": "path"}, "includeInactive": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdUnits"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}, "patch": {"id": "adsensehost.accounts.adunits.patch", "path": "accounts/{accountId}/adclients/{adClientId}/adunits", "httpMethod": "PATCH", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "adClientId": {"type": "string", "required": true, "location": "path"}, "adUnitId": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "AdUnit"}, "response": {"$ref": "AdUnit"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}, "update": {"id": "adsensehost.accounts.adunits.update", "path": "accounts/{accountId}/adclients/{adClientId}/adunits", "httpMethod": "PUT", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "adClientId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "AdUnit"}, "response": {"$ref": "AdUnit"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}}}', true));
        $this->accounts_reports = new Google_AccountsReportsServiceResource($this, $this->serviceName, 'reports', json_decode('{"methods": {"generate": {"id": "adsensehost.accounts.reports.generate", "path": "accounts/{accountId}/reports", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "dimension": {"type": "string", "repeated": true, "location": "query"}, "endDate": {"type": "string", "required": true, "location": "query"}, "filter": {"type": "string", "repeated": true, "location": "query"}, "locale": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "50000", "location": "query"}, "metric": {"type": "string", "repeated": true, "location": "query"}, "sort": {"type": "string", "repeated": true, "location": "query"}, "startDate": {"type": "string", "required": true, "location": "query"}, "startIndex": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "5000", "location": "query"}}, "response": {"$ref": "Report"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}}}', true));
        $this->adclients = new Google_AdclientsServiceResource($this, $this->serviceName, 'adclients', json_decode('{"methods": {"get": {"id": "adsensehost.adclients.get", "path": "adclients/{adClientId}", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "AdClient"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}, "list": {"id": "adsensehost.adclients.list", "path": "adclients", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdClients"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}}}', true));
        $this->associationsessions = new Google_AssociationsessionsServiceResource($this, $this->serviceName, 'associationsessions', json_decode('{"methods": {"start": {"id": "adsensehost.associationsessions.start", "path": "associationsessions/start", "httpMethod": "GET", "parameters": {"productCode": {"type": "string", "required": true, "enum": ["AFC", "AFG", "AFMC", "AFS", "AFV"], "repeated": true, "location": "query"}, "userLocale": {"type": "string", "location": "query"}, "websiteLocale": {"type": "string", "location": "query"}, "websiteUrl": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "AssociationSession"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}, "verify": {"id": "adsensehost.associationsessions.verify", "path": "associationsessions/verify", "httpMethod": "GET", "parameters": {"token": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "AssociationSession"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}}}', true));
        $this->customchannels = new Google_CustomchannelsServiceResource($this, $this->serviceName, 'customchannels', json_decode('{"methods": {"delete": {"id": "adsensehost.customchannels.delete", "path": "adclients/{adClientId}/customchannels/{customChannelId}", "httpMethod": "DELETE", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "customChannelId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CustomChannel"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}, "get": {"id": "adsensehost.customchannels.get", "path": "adclients/{adClientId}/customchannels/{customChannelId}", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "customChannelId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CustomChannel"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}, "insert": {"id": "adsensehost.customchannels.insert", "path": "adclients/{adClientId}/customchannels", "httpMethod": "POST", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "CustomChannel"}, "response": {"$ref": "CustomChannel"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}, "list": {"id": "adsensehost.customchannels.list", "path": "adclients/{adClientId}/customchannels", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "CustomChannels"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}, "patch": {"id": "adsensehost.customchannels.patch", "path": "adclients/{adClientId}/customchannels", "httpMethod": "PATCH", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "customChannelId": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "CustomChannel"}, "response": {"$ref": "CustomChannel"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}, "update": {"id": "adsensehost.customchannels.update", "path": "adclients/{adClientId}/customchannels", "httpMethod": "PUT", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "CustomChannel"}, "response": {"$ref": "CustomChannel"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}}}', true));
        $this->reports = new Google_ReportsServiceResource($this, $this->serviceName, 'reports', json_decode('{"methods": {"generate": {"id": "adsensehost.reports.generate", "path": "reports", "httpMethod": "GET", "parameters": {"dimension": {"type": "string", "repeated": true, "location": "query"}, "endDate": {"type": "string", "required": true, "location": "query"}, "filter": {"type": "string", "repeated": true, "location": "query"}, "locale": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "50000", "location": "query"}, "metric": {"type": "string", "repeated": true, "location": "query"}, "sort": {"type": "string", "repeated": true, "location": "query"}, "startDate": {"type": "string", "required": true, "location": "query"}, "startIndex": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "5000", "location": "query"}}, "response": {"$ref": "Report"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}}}', true));
        $this->urlchannels = new Google_UrlchannelsServiceResource($this, $this->serviceName, 'urlchannels', json_decode('{"methods": {"delete": {"id": "adsensehost.urlchannels.delete", "path": "adclients/{adClientId}/urlchannels/{urlChannelId}", "httpMethod": "DELETE", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "urlChannelId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "UrlChannel"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}, "insert": {"id": "adsensehost.urlchannels.insert", "path": "adclients/{adClientId}/urlchannels", "httpMethod": "POST", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "UrlChannel"}, "response": {"$ref": "UrlChannel"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}, "list": {"id": "adsensehost.urlchannels.list", "path": "adclients/{adClientId}/urlchannels", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "UrlChannels"}, "scopes": ["https://www.googleapis.com/auth/adsensehost"]}}}', true));

    }
}


/**
 * Class Google_Account
 */
class Google_Account extends Google_Model
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
     * @var
     */
    public $status;

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
 * Class Google_Accounts
 */
class Google_Accounts extends Google_Model
{
    /**
     * @var
     */
    public $etag;
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
 * Class Google_AdCode
 */
class Google_AdCode extends Google_Model
{
    /**
     * @var
     */
    public $adCode;
    /**
     * @var
     */
    public $kind;

    /**
     * @param $adCode
     */
    public function setAdCode($adCode)
    {
        $this->adCode = $adCode;
    }

    /**
     * @return mixed
     */
    public function getAdCode()
    {
        return $this->adCode;
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
 * Class Google_AdStyle
 */
class Google_AdStyle extends Google_Model
{
    /**
     * @var string
     */
    protected $__colorsType = 'Google_AdStyleColors';
    /**
     * @var string
     */
    protected $__colorsDataType = '';
    /**
     * @var
     */
    public $colors;
    /**
     * @var
     */
    public $corners;
    /**
     * @var string
     */
    protected $__fontType = 'Google_AdStyleFont';
    /**
     * @var string
     */
    protected $__fontDataType = '';
    /**
     * @var
     */
    public $font;
    /**
     * @var
     */
    public $kind;

    /**
     * @param Google_AdStyleColors $colors
     */
    public function setColors(Google_AdStyleColors $colors)
    {
        $this->colors = $colors;
    }

    /**
     * @return mixed
     */
    public function getColors()
    {
        return $this->colors;
    }

    /**
     * @param $corners
     */
    public function setCorners($corners)
    {
        $this->corners = $corners;
    }

    /**
     * @return mixed
     */
    public function getCorners()
    {
        return $this->corners;
    }

    /**
     * @param Google_AdStyleFont $font
     */
    public function setFont(Google_AdStyleFont $font)
    {
        $this->font = $font;
    }

    /**
     * @return mixed
     */
    public function getFont()
    {
        return $this->font;
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
 * Class Google_AdStyleColors
 */
class Google_AdStyleColors extends Google_Model
{
    /**
     * @var
     */
    public $background;
    /**
     * @var
     */
    public $border;
    /**
     * @var
     */
    public $text;
    /**
     * @var
     */
    public $title;
    /**
     * @var
     */
    public $url;

    /**
     * @param $background
     */
    public function setBackground($background)
    {
        $this->background = $background;
    }

    /**
     * @return mixed
     */
    public function getBackground()
    {
        return $this->background;
    }

    /**
     * @param $border
     */
    public function setBorder($border)
    {
        $this->border = $border;
    }

    /**
     * @return mixed
     */
    public function getBorder()
    {
        return $this->border;
    }

    /**
     * @param $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
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
 * Class Google_AdStyleFont
 */
class Google_AdStyleFont extends Google_Model
{
    /**
     * @var
     */
    public $family;
    /**
     * @var
     */
    public $size;

    /**
     * @param $family
     */
    public function setFamily($family)
    {
        $this->family = $family;
    }

    /**
     * @return mixed
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * @param $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
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
     * @var string
     */
    protected $__contentAdsSettingsType = 'Google_AdUnitContentAdsSettings';
    /**
     * @var string
     */
    protected $__contentAdsSettingsDataType = '';
    /**
     * @var
     */
    public $contentAdsSettings;
    /**
     * @var string
     */
    protected $__customStyleType = 'Google_AdStyle';
    /**
     * @var string
     */
    protected $__customStyleDataType = '';
    /**
     * @var
     */
    public $customStyle;
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
    protected $__mobileContentAdsSettingsType = 'Google_AdUnitMobileContentAdsSettings';
    /**
     * @var string
     */
    protected $__mobileContentAdsSettingsDataType = '';
    /**
     * @var
     */
    public $mobileContentAdsSettings;
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
     * @param Google_AdUnitContentAdsSettings $contentAdsSettings
     */
    public function setContentAdsSettings(Google_AdUnitContentAdsSettings $contentAdsSettings)
    {
        $this->contentAdsSettings = $contentAdsSettings;
    }

    /**
     * @return mixed
     */
    public function getContentAdsSettings()
    {
        return $this->contentAdsSettings;
    }

    /**
     * @param Google_AdStyle $customStyle
     */
    public function setCustomStyle(Google_AdStyle $customStyle)
    {
        $this->customStyle = $customStyle;
    }

    /**
     * @return mixed
     */
    public function getCustomStyle()
    {
        return $this->customStyle;
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
     * @param Google_AdUnitMobileContentAdsSettings $mobileContentAdsSettings
     */
    public function setMobileContentAdsSettings(Google_AdUnitMobileContentAdsSettings $mobileContentAdsSettings)
    {
        $this->mobileContentAdsSettings = $mobileContentAdsSettings;
    }

    /**
     * @return mixed
     */
    public function getMobileContentAdsSettings()
    {
        return $this->mobileContentAdsSettings;
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
 * Class Google_AdUnitContentAdsSettings
 */
class Google_AdUnitContentAdsSettings extends Google_Model
{
    /**
     * @var string
     */
    protected $__backupOptionType = 'Google_AdUnitContentAdsSettingsBackupOption';
    /**
     * @var string
     */
    protected $__backupOptionDataType = '';
    /**
     * @var
     */
    public $backupOption;
    /**
     * @var
     */
    public $size;
    /**
     * @var
     */
    public $type;

    /**
     * @param Google_AdUnitContentAdsSettingsBackupOption $backupOption
     */
    public function setBackupOption(Google_AdUnitContentAdsSettingsBackupOption $backupOption)
    {
        $this->backupOption = $backupOption;
    }

    /**
     * @return mixed
     */
    public function getBackupOption()
    {
        return $this->backupOption;
    }

    /**
     * @param $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
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
 * Class Google_AdUnitContentAdsSettingsBackupOption
 */
class Google_AdUnitContentAdsSettingsBackupOption extends Google_Model
{
    /**
     * @var
     */
    public $color;
    /**
     * @var
     */
    public $type;
    /**
     * @var
     */
    public $url;

    /**
     * @param $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
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
 * Class Google_AdUnitMobileContentAdsSettings
 */
class Google_AdUnitMobileContentAdsSettings extends Google_Model
{
    /**
     * @var
     */
    public $markupLanguage;
    /**
     * @var
     */
    public $scriptingLanguage;
    /**
     * @var
     */
    public $size;
    /**
     * @var
     */
    public $type;

    /**
     * @param $markupLanguage
     */
    public function setMarkupLanguage($markupLanguage)
    {
        $this->markupLanguage = $markupLanguage;
    }

    /**
     * @return mixed
     */
    public function getMarkupLanguage()
    {
        return $this->markupLanguage;
    }

    /**
     * @param $scriptingLanguage
     */
    public function setScriptingLanguage($scriptingLanguage)
    {
        $this->scriptingLanguage = $scriptingLanguage;
    }

    /**
     * @return mixed
     */
    public function getScriptingLanguage()
    {
        return $this->scriptingLanguage;
    }

    /**
     * @param $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
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
 * Class Google_AssociationSession
 */
class Google_AssociationSession extends Google_Model
{
    /**
     * @var
     */
    public $accountId;
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
    public $productCodes;
    /**
     * @var
     */
    public $redirectUrl;
    /**
     * @var
     */
    public $status;
    /**
     * @var
     */
    public $userLocale;
    /**
     * @var
     */
    public $websiteLocale;
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
     * @param $productCodes
     * @throws Google_Exception
     */
    public function setProductCodes(/* array(Google_string) */
        $productCodes)
    {
        $this->assertIsArray($productCodes, 'Google_string', __METHOD__);
        $this->productCodes = $productCodes;
    }

    /**
     * @return mixed
     */
    public function getProductCodes()
    {
        return $this->productCodes;
    }

    /**
     * @param $redirectUrl
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
    }

    /**
     * @return mixed
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
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
     * @param $userLocale
     */
    public function setUserLocale($userLocale)
    {
        $this->userLocale = $userLocale;
    }

    /**
     * @return mixed
     */
    public function getUserLocale()
    {
        return $this->userLocale;
    }

    /**
     * @param $websiteLocale
     */
    public function setWebsiteLocale($websiteLocale)
    {
        $this->websiteLocale = $websiteLocale;
    }

    /**
     * @return mixed
     */
    public function getWebsiteLocale()
    {
        return $this->websiteLocale;
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
