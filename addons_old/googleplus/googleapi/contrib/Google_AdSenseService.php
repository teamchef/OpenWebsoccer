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
 *   $adsenseService = new Google_AdSenseService(...);
 *   $accounts = $adsenseService->accounts;
 *  </code>
 */
class Google_AccountsServiceResource extends Google_ServiceResource
{

    /**
     * Get information about the selected AdSense account. (accounts.get)
     *
     * @param string $accountId Account to get information about.
     * @param array $optParams Optional parameters.
     * @return Google_Account
     * @throws Google_Exception
     * @opt_param bool tree Whether the tree of sub accounts should be returned.
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
     * List all accounts available to this AdSense account. (accounts.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Accounts
     * @throws Google_Exception
     * @opt_param int maxResults The maximum number of accounts to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through accounts. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     */
    public function listAccounts($optParams = [])
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
 * The "adclients" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_AdSenseService(...);
 *   $adclients = $adsenseService->adclients;
 *  </code>
 */
class Google_AccountsAdclientsServiceResource extends Google_ServiceResource
{

    /**
     * List all ad clients in the specified account. (adclients.list)
     *
     * @param string $accountId Account for which to list ad clients.
     * @param array $optParams Optional parameters.
     * @return Google_AdClients
     * @throws Google_Exception
     * @opt_param int maxResults The maximum number of ad clients to include in the response, used for paging.
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
 *   $adsenseService = new Google_AdSenseService(...);
 *   $adunits = $adsenseService->adunits;
 *  </code>
 */
class Google_AccountsAdunitsServiceResource extends Google_ServiceResource
{

    /**
     * Gets the specified ad unit in the specified ad client for the specified account. (adunits.get)
     *
     * @param string $accountId Account to which the ad client belongs.
     * @param string $adClientId Ad client for which to get the ad unit.
     * @param string $adUnitId Ad unit to retrieve.
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
     * Get ad code for the specified ad unit. (adunits.getAdCode)
     *
     * @param string $accountId Account which contains the ad client.
     * @param string $adClientId Ad client with contains the ad unit.
     * @param string $adUnitId Ad unit to get the code for.
     * @param array $optParams Optional parameters.
     * @return Google_AdCode
     * @throws Google_Exception
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
     * List all ad units in the specified ad client for the specified account. (adunits.list)
     *
     * @param string $accountId Account to which the ad client belongs.
     * @param string $adClientId Ad client for which to list ad units.
     * @param array $optParams Optional parameters.
     * @return Google_AdUnits
     * @throws Google_Exception
     * @opt_param bool includeInactive Whether to include inactive ad units. Default: true.
     * @opt_param int maxResults The maximum number of ad units to include in the response, used for paging.
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
}

/**
 * The "customchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_AdSenseService(...);
 *   $customchannels = $adsenseService->customchannels;
 *  </code>
 */
class Google_AccountsAdunitsCustomchannelsServiceResource extends Google_ServiceResource
{

    /**
     * List all custom channels which the specified ad unit belongs to. (customchannels.list)
     *
     * @param string $accountId Account to which the ad client belongs.
     * @param string $adClientId Ad client which contains the ad unit.
     * @param string $adUnitId Ad unit for which to list custom channels.
     * @param array $optParams Optional parameters.
     * @return Google_CustomChannels
     * @throws Google_Exception
     * @opt_param int maxResults The maximum number of custom channels to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through custom channels. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     */
    public function listAccountsAdunitsCustomchannels($accountId, $adClientId, $adUnitId, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'adClientId' => $adClientId, 'adUnitId' => $adUnitId];
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
 * The "alerts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_AdSenseService(...);
 *   $alerts = $adsenseService->alerts;
 *  </code>
 */
class Google_AccountsAlertsServiceResource extends Google_ServiceResource
{

    /**
     * List the alerts for the specified AdSense account. (alerts.list)
     *
     * @param string $accountId Account for which to retrieve the alerts.
     * @param array $optParams Optional parameters.
     * @return Google_Alerts
     * @throws Google_Exception
     * @opt_param string locale The locale to use for translating alert messages. The account locale will be used if this is not supplied. The AdSense default (English) will be used if the supplied locale is invalid or unsupported.
     */
    public function listAccountsAlerts($accountId, $optParams = [])
    {
        $params = ['accountId' => $accountId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Alerts($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "customchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_AdSenseService(...);
 *   $customchannels = $adsenseService->customchannels;
 *  </code>
 */
class Google_AccountsCustomchannelsServiceResource extends Google_ServiceResource
{

    /**
     * Get the specified custom channel from the specified ad client for the specified account.
     * (customchannels.get)
     *
     * @param string $accountId Account to which the ad client belongs.
     * @param string $adClientId Ad client which contains the custom channel.
     * @param string $customChannelId Custom channel to retrieve.
     * @param array $optParams Optional parameters.
     * @return Google_CustomChannel
     * @throws Google_Exception
     */
    public function get($accountId, $adClientId, $customChannelId, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'adClientId' => $adClientId, 'customChannelId' => $customChannelId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_CustomChannel($data);
        } else {
            return $data;
        }
    }

    /**
     * List all custom channels in the specified ad client for the specified account.
     * (customchannels.list)
     *
     * @param string $accountId Account to which the ad client belongs.
     * @param string $adClientId Ad client for which to list custom channels.
     * @param array $optParams Optional parameters.
     * @return Google_CustomChannels
     * @throws Google_Exception
     * @opt_param int maxResults The maximum number of custom channels to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through custom channels. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     */
    public function listAccountsCustomchannels($accountId, $adClientId, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'adClientId' => $adClientId];
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
 *   $adsenseService = new Google_AdSenseService(...);
 *   $adunits = $adsenseService->adunits;
 *  </code>
 */
class Google_AccountsCustomchannelsAdunitsServiceResource extends Google_ServiceResource
{

    /**
     * List all ad units in the specified custom channel. (adunits.list)
     *
     * @param string $accountId Account to which the ad client belongs.
     * @param string $adClientId Ad client which contains the custom channel.
     * @param string $customChannelId Custom channel for which to list ad units.
     * @param array $optParams Optional parameters.
     * @return Google_AdUnits
     * @throws Google_Exception
     * @opt_param bool includeInactive Whether to include inactive ad units. Default: true.
     * @opt_param int maxResults The maximum number of ad units to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through ad units. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     */
    public function listAccountsCustomchannelsAdunits($accountId, $adClientId, $customChannelId, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'adClientId' => $adClientId, 'customChannelId' => $customChannelId];
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
 *   $adsenseService = new Google_AdSenseService(...);
 *   $reports = $adsenseService->reports;
 *  </code>
 */
class Google_AccountsReportsServiceResource extends Google_ServiceResource
{

    /**
     * Generate an AdSense report based on the report request sent in the query parameters. Returns the
     * result as JSON; to retrieve output in CSV format specify "alt=csv" as a query parameter.
     * (reports.generate)
     *
     * @param string $accountId Account upon which to report.
     * @param string $startDate Start of the date range to report on in "YYYY-MM-DD" format, inclusive.
     * @param string $endDate End of the date range to report on in "YYYY-MM-DD" format, inclusive.
     * @param array $optParams Optional parameters.
     * @return Google_AdsenseReportsGenerateResponse
     * @throws Google_Exception
     * @opt_param string currency Optional currency to use when reporting on monetary metrics. Defaults to the account's currency if not set.
     * @opt_param string dimension Dimensions to base the report on.
     * @opt_param string filter Filters to be run on the report.
     * @opt_param string locale Optional locale to use for translating report output to a local language. Defaults to "en_US" if not specified.
     * @opt_param int maxResults The maximum number of rows of report data to return.
     * @opt_param string metric Numeric columns to include in the report.
     * @opt_param string sort The name of a dimension or metric to sort the resulting report on, optionally prefixed with "+" to sort ascending or "-" to sort descending. If no prefix is specified, the column is sorted ascending.
     * @opt_param int startIndex Index of the first row of report data to return.
     * @opt_param bool useTimezoneReporting Whether the report should be generated in the AdSense account's local timezone. If false default PST/PDT timezone will be used.
     */
    public function generate($accountId, $startDate, $endDate, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'startDate' => $startDate, 'endDate' => $endDate];
        $params = array_merge($params, $optParams);
        $data = $this->__call('generate', [$params]);
        if ($this->useObjects()) {
            return new Google_AdsenseReportsGenerateResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "saved" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_AdSenseService(...);
 *   $saved = $adsenseService->saved;
 *  </code>
 */
class Google_AccountsReportsSavedServiceResource extends Google_ServiceResource
{

    /**
     * Generate an AdSense report based on the saved report ID sent in the query parameters.
     * (saved.generate)
     *
     * @param string $accountId Account to which the saved reports belong.
     * @param string $savedReportId The saved report to retrieve.
     * @param array $optParams Optional parameters.
     * @return Google_AdsenseReportsGenerateResponse
     * @throws Google_Exception
     * @opt_param string locale Optional locale to use for translating report output to a local language. Defaults to "en_US" if not specified.
     * @opt_param int maxResults The maximum number of rows of report data to return.
     * @opt_param int startIndex Index of the first row of report data to return.
     */
    public function generate($accountId, $savedReportId, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'savedReportId' => $savedReportId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('generate', [$params]);
        if ($this->useObjects()) {
            return new Google_AdsenseReportsGenerateResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * List all saved reports in the specified AdSense account. (saved.list)
     *
     * @param string $accountId Account to which the saved reports belong.
     * @param array $optParams Optional parameters.
     * @return Google_SavedReports
     * @throws Google_Exception
     * @opt_param int maxResults The maximum number of saved reports to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through saved reports. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     */
    public function listAccountsReportsSaved($accountId, $optParams = [])
    {
        $params = ['accountId' => $accountId];
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
 * The "savedadstyles" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_AdSenseService(...);
 *   $savedadstyles = $adsenseService->savedadstyles;
 *  </code>
 */
class Google_AccountsSavedadstylesServiceResource extends Google_ServiceResource
{

    /**
     * List a specific saved ad style for the specified account. (savedadstyles.get)
     *
     * @param string $accountId Account for which to get the saved ad style.
     * @param string $savedAdStyleId Saved ad style to retrieve.
     * @param array $optParams Optional parameters.
     * @return Google_SavedAdStyle
     * @throws Google_Exception
     */
    public function get($accountId, $savedAdStyleId, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'savedAdStyleId' => $savedAdStyleId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_SavedAdStyle($data);
        } else {
            return $data;
        }
    }

    /**
     * List all saved ad styles in the specified account. (savedadstyles.list)
     *
     * @param string $accountId Account for which to list saved ad styles.
     * @param array $optParams Optional parameters.
     * @return Google_SavedAdStyles
     * @throws Google_Exception
     * @opt_param int maxResults The maximum number of saved ad styles to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through saved ad styles. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     */
    public function listAccountsSavedadstyles($accountId, $optParams = [])
    {
        $params = ['accountId' => $accountId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_SavedAdStyles($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "urlchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_AdSenseService(...);
 *   $urlchannels = $adsenseService->urlchannels;
 *  </code>
 */
class Google_AccountsUrlchannelsServiceResource extends Google_ServiceResource
{

    /**
     * List all URL channels in the specified ad client for the specified account. (urlchannels.list)
     *
     * @param string $accountId Account to which the ad client belongs.
     * @param string $adClientId Ad client for which to list URL channels.
     * @param array $optParams Optional parameters.
     * @return Google_UrlChannels
     * @throws Google_Exception
     * @opt_param int maxResults The maximum number of URL channels to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through URL channels. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     */
    public function listAccountsUrlchannels($accountId, $adClientId, $optParams = [])
    {
        $params = ['accountId' => $accountId, 'adClientId' => $adClientId];
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
 * The "adclients" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_AdSenseService(...);
 *   $adclients = $adsenseService->adclients;
 *  </code>
 */
class Google_AdclientsServiceResource extends Google_ServiceResource
{

    /**
     * List all ad clients in this AdSense account. (adclients.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_AdClients
     * @throws Google_Exception
     * @opt_param int maxResults The maximum number of ad clients to include in the response, used for paging.
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
 *   $adsenseService = new Google_AdSenseService(...);
 *   $adunits = $adsenseService->adunits;
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
     * Get ad code for the specified ad unit. (adunits.getAdCode)
     *
     * @param string $adClientId Ad client with contains the ad unit.
     * @param string $adUnitId Ad unit to get the code for.
     * @param array $optParams Optional parameters.
     * @return Google_AdCode
     * @throws Google_Exception
     */
    public function getAdCode($adClientId, $adUnitId, $optParams = [])
    {
        $params = ['adClientId' => $adClientId, 'adUnitId' => $adUnitId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('getAdCode', [$params]);
        if ($this->useObjects()) {
            return new Google_AdCode($data);
        } else {
            return $data;
        }
    }

    /**
     * List all ad units in the specified ad client for this AdSense account. (adunits.list)
     *
     * @param string $adClientId Ad client for which to list ad units.
     * @param array $optParams Optional parameters.
     * @return Google_AdUnits
     * @throws Google_Exception
     * @opt_param bool includeInactive Whether to include inactive ad units. Default: true.
     * @opt_param int maxResults The maximum number of ad units to include in the response, used for paging.
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
 *   $adsenseService = new Google_AdSenseService(...);
 *   $customchannels = $adsenseService->customchannels;
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
     * @opt_param int maxResults The maximum number of custom channels to include in the response, used for paging.
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
 * The "alerts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_AdSenseService(...);
 *   $alerts = $adsenseService->alerts;
 *  </code>
 */
class Google_AlertsServiceResource extends Google_ServiceResource
{

    /**
     * List the alerts for this AdSense account. (alerts.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Alerts
     * @throws Google_Exception
     * @opt_param string locale The locale to use for translating alert messages. The account locale will be used if this is not supplied. The AdSense default (English) will be used if the supplied locale is invalid or unsupported.
     */
    public function listAlerts($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Alerts($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "customchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_AdSenseService(...);
 *   $customchannels = $adsenseService->customchannels;
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
     * List all custom channels in the specified ad client for this AdSense account.
     * (customchannels.list)
     *
     * @param string $adClientId Ad client for which to list custom channels.
     * @param array $optParams Optional parameters.
     * @return Google_CustomChannels
     * @throws Google_Exception
     * @opt_param int maxResults The maximum number of custom channels to include in the response, used for paging.
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
 *   $adsenseService = new Google_AdSenseService(...);
 *   $adunits = $adsenseService->adunits;
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
     * @opt_param int maxResults The maximum number of ad units to include in the response, used for paging.
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
 * The "metadata" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_AdSenseService(...);
 *   $metadata = $adsenseService->metadata;
 *  </code>
 */
class Google_MetadataServiceResource extends Google_ServiceResource
{

}

/**
 * The "dimensions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_AdSenseService(...);
 *   $dimensions = $adsenseService->dimensions;
 *  </code>
 */
class Google_MetadataDimensionsServiceResource extends Google_ServiceResource
{

    /**
     * List the metadata for the dimensions available to this AdSense account. (dimensions.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Metadata
     * @throws Google_Exception
     */
    public function listMetadataDimensions($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Metadata($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "metrics" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_AdSenseService(...);
 *   $metrics = $adsenseService->metrics;
 *  </code>
 */
class Google_MetadataMetricsServiceResource extends Google_ServiceResource
{

    /**
     * List the metadata for the metrics available to this AdSense account. (metrics.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Metadata
     * @throws Google_Exception
     */
    public function listMetadataMetrics($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Metadata($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "reports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_AdSenseService(...);
 *   $reports = $adsenseService->reports;
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
     * @return Google_AdsenseReportsGenerateResponse
     * @throws Google_Exception
     * @opt_param string accountId Accounts upon which to report.
     * @opt_param string currency Optional currency to use when reporting on monetary metrics. Defaults to the account's currency if not set.
     * @opt_param string dimension Dimensions to base the report on.
     * @opt_param string filter Filters to be run on the report.
     * @opt_param string locale Optional locale to use for translating report output to a local language. Defaults to "en_US" if not specified.
     * @opt_param int maxResults The maximum number of rows of report data to return.
     * @opt_param string metric Numeric columns to include in the report.
     * @opt_param string sort The name of a dimension or metric to sort the resulting report on, optionally prefixed with "+" to sort ascending or "-" to sort descending. If no prefix is specified, the column is sorted ascending.
     * @opt_param int startIndex Index of the first row of report data to return.
     * @opt_param bool useTimezoneReporting Whether the report should be generated in the AdSense account's local timezone. If false default PST/PDT timezone will be used.
     */
    public function generate($startDate, $endDate, $optParams = [])
    {
        $params = ['startDate' => $startDate, 'endDate' => $endDate];
        $params = array_merge($params, $optParams);
        $data = $this->__call('generate', [$params]);
        if ($this->useObjects()) {
            return new Google_AdsenseReportsGenerateResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "saved" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_AdSenseService(...);
 *   $saved = $adsenseService->saved;
 *  </code>
 */
class Google_ReportsSavedServiceResource extends Google_ServiceResource
{

    /**
     * Generate an AdSense report based on the saved report ID sent in the query parameters.
     * (saved.generate)
     *
     * @param string $savedReportId The saved report to retrieve.
     * @param array $optParams Optional parameters.
     * @return Google_AdsenseReportsGenerateResponse
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
            return new Google_AdsenseReportsGenerateResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * List all saved reports in this AdSense account. (saved.list)
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
 * The "savedadstyles" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_AdSenseService(...);
 *   $savedadstyles = $adsenseService->savedadstyles;
 *  </code>
 */
class Google_SavedadstylesServiceResource extends Google_ServiceResource
{

    /**
     * Get a specific saved ad style from the user's account. (savedadstyles.get)
     *
     * @param string $savedAdStyleId Saved ad style to retrieve.
     * @param array $optParams Optional parameters.
     * @return Google_SavedAdStyle
     * @throws Google_Exception
     */
    public function get($savedAdStyleId, $optParams = [])
    {
        $params = ['savedAdStyleId' => $savedAdStyleId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_SavedAdStyle($data);
        } else {
            return $data;
        }
    }

    /**
     * List all saved ad styles in the user's account. (savedadstyles.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_SavedAdStyles
     * @throws Google_Exception
     * @opt_param int maxResults The maximum number of saved ad styles to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through saved ad styles. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     */
    public function listSavedadstyles($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_SavedAdStyles($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "urlchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_AdSenseService(...);
 *   $urlchannels = $adsenseService->urlchannels;
 *  </code>
 */
class Google_UrlchannelsServiceResource extends Google_ServiceResource
{

    /**
     * List all URL channels in the specified ad client for this AdSense account. (urlchannels.list)
     *
     * @param string $adClientId Ad client for which to list URL channels.
     * @param array $optParams Optional parameters.
     * @return Google_UrlChannels
     * @throws Google_Exception
     * @opt_param int maxResults The maximum number of URL channels to include in the response, used for paging.
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
 * Service definition for Google_AdSense (v1.3).
 *
 * <p>
 * Gives AdSense publishers access to their inventory and the ability to generate reports
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/adsense/management/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_AdSenseService extends Google_Service
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
     * @var Google_AccountsAdunitsCustomchannelsServiceResource
     */
    public $accounts_adunits_customchannels;
    /**
     * @var Google_AccountsAlertsServiceResource
     */
    public $accounts_alerts;
    /**
     * @var Google_AccountsCustomchannelsServiceResource
     */
    public $accounts_customchannels;
    /**
     * @var Google_AccountsCustomchannelsAdunitsServiceResource
     */
    public $accounts_customchannels_adunits;
    /**
     * @var Google_AccountsReportsServiceResource
     */
    public $accounts_reports;
    /**
     * @var Google_AccountsReportsSavedServiceResource
     */
    public $accounts_reports_saved;
    /**
     * @var Google_AccountsSavedadstylesServiceResource
     */
    public $accounts_savedadstyles;
    /**
     * @var Google_AccountsUrlchannelsServiceResource
     */
    public $accounts_urlchannels;
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
     * @var Google_AlertsServiceResource
     */
    public $alerts;
    /**
     * @var Google_CustomchannelsServiceResource
     */
    public $customchannels;
    /**
     * @var Google_CustomchannelsAdunitsServiceResource
     */
    public $customchannels_adunits;
    /**
     * @var Google_MetadataDimensionsServiceResource
     */
    public $metadata_dimensions;
    /**
     * @var Google_MetadataMetricsServiceResource
     */
    public $metadata_metrics;
    /**
     * @var Google_ReportsServiceResource
     */
    public $reports;
    /**
     * @var Google_ReportsSavedServiceResource
     */
    public $reports_saved;
    /**
     * @var Google_SavedadstylesServiceResource
     */
    public $savedadstyles;
    /**
     * @var Google_UrlchannelsServiceResource
     */
    public $urlchannels;

    /**
     * Constructs the internal representation of the AdSense service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'adsense/v1.3/';
        $this->version = 'v1.3';
        $this->serviceName = 'adsense';

        $client->addService($this->serviceName, $this->version);
        $this->accounts = new Google_AccountsServiceResource($this, $this->serviceName, 'accounts', json_decode('{"methods": {"get": {"id": "adsense.accounts.get", "path": "accounts/{accountId}", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "tree": {"type": "boolean", "location": "query"}}, "response": {"$ref": "Account"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}, "list": {"id": "adsense.accounts.list", "path": "accounts", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "Accounts"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
        $this->accounts_adclients = new Google_AccountsAdclientsServiceResource($this, $this->serviceName, 'adclients', json_decode('{"methods": {"list": {"id": "adsense.accounts.adclients.list", "path": "accounts/{accountId}/adclients", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdClients"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
        $this->accounts_adunits = new Google_AccountsAdunitsServiceResource($this, $this->serviceName, 'adunits', json_decode('{"methods": {"get": {"id": "adsense.accounts.adunits.get", "path": "accounts/{accountId}/adclients/{adClientId}/adunits/{adUnitId}", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "adClientId": {"type": "string", "required": true, "location": "path"}, "adUnitId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "AdUnit"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}, "getAdCode": {"id": "adsense.accounts.adunits.getAdCode", "path": "accounts/{accountId}/adclients/{adClientId}/adunits/{adUnitId}/adcode", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "adClientId": {"type": "string", "required": true, "location": "path"}, "adUnitId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "AdCode"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}, "list": {"id": "adsense.accounts.adunits.list", "path": "accounts/{accountId}/adclients/{adClientId}/adunits", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "adClientId": {"type": "string", "required": true, "location": "path"}, "includeInactive": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdUnits"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
        $this->accounts_adunits_customchannels = new Google_AccountsAdunitsCustomchannelsServiceResource($this, $this->serviceName, 'customchannels', json_decode('{"methods": {"list": {"id": "adsense.accounts.adunits.customchannels.list", "path": "accounts/{accountId}/adclients/{adClientId}/adunits/{adUnitId}/customchannels", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "adClientId": {"type": "string", "required": true, "location": "path"}, "adUnitId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "CustomChannels"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
        $this->accounts_alerts = new Google_AccountsAlertsServiceResource($this, $this->serviceName, 'alerts', json_decode('{"methods": {"list": {"id": "adsense.accounts.alerts.list", "path": "accounts/{accountId}/alerts", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "locale": {"type": "string", "location": "query"}}, "response": {"$ref": "Alerts"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
        $this->accounts_customchannels = new Google_AccountsCustomchannelsServiceResource($this, $this->serviceName, 'customchannels', json_decode('{"methods": {"get": {"id": "adsense.accounts.customchannels.get", "path": "accounts/{accountId}/adclients/{adClientId}/customchannels/{customChannelId}", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "adClientId": {"type": "string", "required": true, "location": "path"}, "customChannelId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CustomChannel"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}, "list": {"id": "adsense.accounts.customchannels.list", "path": "accounts/{accountId}/adclients/{adClientId}/customchannels", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "adClientId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "CustomChannels"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
        $this->accounts_customchannels_adunits = new Google_AccountsCustomchannelsAdunitsServiceResource($this, $this->serviceName, 'adunits', json_decode('{"methods": {"list": {"id": "adsense.accounts.customchannels.adunits.list", "path": "accounts/{accountId}/adclients/{adClientId}/customchannels/{customChannelId}/adunits", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "adClientId": {"type": "string", "required": true, "location": "path"}, "customChannelId": {"type": "string", "required": true, "location": "path"}, "includeInactive": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdUnits"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
        $this->accounts_reports = new Google_AccountsReportsServiceResource($this, $this->serviceName, 'reports', json_decode('{"methods": {"generate": {"id": "adsense.accounts.reports.generate", "path": "accounts/{accountId}/reports", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "currency": {"type": "string", "location": "query"}, "dimension": {"type": "string", "repeated": true, "location": "query"}, "endDate": {"type": "string", "required": true, "location": "query"}, "filter": {"type": "string", "repeated": true, "location": "query"}, "locale": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "50000", "location": "query"}, "metric": {"type": "string", "repeated": true, "location": "query"}, "sort": {"type": "string", "repeated": true, "location": "query"}, "startDate": {"type": "string", "required": true, "location": "query"}, "startIndex": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "5000", "location": "query"}, "useTimezoneReporting": {"type": "boolean", "location": "query"}}, "response": {"$ref": "AdsenseReportsGenerateResponse"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"], "supportsMediaDownload": true}}}', true));
        $this->accounts_reports_saved = new Google_AccountsReportsSavedServiceResource($this, $this->serviceName, 'saved', json_decode('{"methods": {"generate": {"id": "adsense.accounts.reports.saved.generate", "path": "accounts/{accountId}/reports/{savedReportId}", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "locale": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "50000", "location": "query"}, "savedReportId": {"type": "string", "required": true, "location": "path"}, "startIndex": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "5000", "location": "query"}}, "response": {"$ref": "AdsenseReportsGenerateResponse"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}, "list": {"id": "adsense.accounts.reports.saved.list", "path": "accounts/{accountId}/reports/saved", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "SavedReports"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
        $this->accounts_savedadstyles = new Google_AccountsSavedadstylesServiceResource($this, $this->serviceName, 'savedadstyles', json_decode('{"methods": {"get": {"id": "adsense.accounts.savedadstyles.get", "path": "accounts/{accountId}/savedadstyles/{savedAdStyleId}", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "savedAdStyleId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "SavedAdStyle"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}, "list": {"id": "adsense.accounts.savedadstyles.list", "path": "accounts/{accountId}/savedadstyles", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "SavedAdStyles"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
        $this->accounts_urlchannels = new Google_AccountsUrlchannelsServiceResource($this, $this->serviceName, 'urlchannels', json_decode('{"methods": {"list": {"id": "adsense.accounts.urlchannels.list", "path": "accounts/{accountId}/adclients/{adClientId}/urlchannels", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "adClientId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "UrlChannels"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
        $this->adclients = new Google_AdclientsServiceResource($this, $this->serviceName, 'adclients', json_decode('{"methods": {"list": {"id": "adsense.adclients.list", "path": "adclients", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdClients"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
        $this->adunits = new Google_AdunitsServiceResource($this, $this->serviceName, 'adunits', json_decode('{"methods": {"get": {"id": "adsense.adunits.get", "path": "adclients/{adClientId}/adunits/{adUnitId}", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "adUnitId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "AdUnit"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}, "getAdCode": {"id": "adsense.adunits.getAdCode", "path": "adclients/{adClientId}/adunits/{adUnitId}/adcode", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "adUnitId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "AdCode"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}, "list": {"id": "adsense.adunits.list", "path": "adclients/{adClientId}/adunits", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "includeInactive": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdUnits"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
        $this->adunits_customchannels = new Google_AdunitsCustomchannelsServiceResource($this, $this->serviceName, 'customchannels', json_decode('{"methods": {"list": {"id": "adsense.adunits.customchannels.list", "path": "adclients/{adClientId}/adunits/{adUnitId}/customchannels", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "adUnitId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "CustomChannels"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
        $this->alerts = new Google_AlertsServiceResource($this, $this->serviceName, 'alerts', json_decode('{"methods": {"list": {"id": "adsense.alerts.list", "path": "alerts", "httpMethod": "GET", "parameters": {"locale": {"type": "string", "location": "query"}}, "response": {"$ref": "Alerts"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
        $this->customchannels = new Google_CustomchannelsServiceResource($this, $this->serviceName, 'customchannels', json_decode('{"methods": {"get": {"id": "adsense.customchannels.get", "path": "adclients/{adClientId}/customchannels/{customChannelId}", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "customChannelId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CustomChannel"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}, "list": {"id": "adsense.customchannels.list", "path": "adclients/{adClientId}/customchannels", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "CustomChannels"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
        $this->customchannels_adunits = new Google_CustomchannelsAdunitsServiceResource($this, $this->serviceName, 'adunits', json_decode('{"methods": {"list": {"id": "adsense.customchannels.adunits.list", "path": "adclients/{adClientId}/customchannels/{customChannelId}/adunits", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "customChannelId": {"type": "string", "required": true, "location": "path"}, "includeInactive": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdUnits"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
        $this->metadata_dimensions = new Google_MetadataDimensionsServiceResource($this, $this->serviceName, 'dimensions', json_decode('{"methods": {"list": {"id": "adsense.metadata.dimensions.list", "path": "metadata/dimensions", "httpMethod": "GET", "response": {"$ref": "Metadata"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
        $this->metadata_metrics = new Google_MetadataMetricsServiceResource($this, $this->serviceName, 'metrics', json_decode('{"methods": {"list": {"id": "adsense.metadata.metrics.list", "path": "metadata/metrics", "httpMethod": "GET", "response": {"$ref": "Metadata"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
        $this->reports = new Google_ReportsServiceResource($this, $this->serviceName, 'reports', json_decode('{"methods": {"generate": {"id": "adsense.reports.generate", "path": "reports", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "repeated": true, "location": "query"}, "currency": {"type": "string", "location": "query"}, "dimension": {"type": "string", "repeated": true, "location": "query"}, "endDate": {"type": "string", "required": true, "location": "query"}, "filter": {"type": "string", "repeated": true, "location": "query"}, "locale": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "50000", "location": "query"}, "metric": {"type": "string", "repeated": true, "location": "query"}, "sort": {"type": "string", "repeated": true, "location": "query"}, "startDate": {"type": "string", "required": true, "location": "query"}, "startIndex": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "5000", "location": "query"}, "useTimezoneReporting": {"type": "boolean", "location": "query"}}, "response": {"$ref": "AdsenseReportsGenerateResponse"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"], "supportsMediaDownload": true}}}', true));
        $this->reports_saved = new Google_ReportsSavedServiceResource($this, $this->serviceName, 'saved', json_decode('{"methods": {"generate": {"id": "adsense.reports.saved.generate", "path": "reports/{savedReportId}", "httpMethod": "GET", "parameters": {"locale": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "50000", "location": "query"}, "savedReportId": {"type": "string", "required": true, "location": "path"}, "startIndex": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "5000", "location": "query"}}, "response": {"$ref": "AdsenseReportsGenerateResponse"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}, "list": {"id": "adsense.reports.saved.list", "path": "reports/saved", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "SavedReports"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
        $this->savedadstyles = new Google_SavedadstylesServiceResource($this, $this->serviceName, 'savedadstyles', json_decode('{"methods": {"get": {"id": "adsense.savedadstyles.get", "path": "savedadstyles/{savedAdStyleId}", "httpMethod": "GET", "parameters": {"savedAdStyleId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "SavedAdStyle"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}, "list": {"id": "adsense.savedadstyles.list", "path": "savedadstyles", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "SavedAdStyles"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
        $this->urlchannels = new Google_UrlchannelsServiceResource($this, $this->serviceName, 'urlchannels', json_decode('{"methods": {"list": {"id": "adsense.urlchannels.list", "path": "adclients/{adClientId}/urlchannels", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "UrlChannels"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));

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
    public $premium;
    /**
     * @var string
     */
    protected $__subAccountsType = 'Google_Account';
    /**
     * @var string
     */
    protected $__subAccountsDataType = 'array';
    /**
     * @var
     */
    public $subAccounts;

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
     * @param $premium
     */
    public function setPremium($premium)
    {
        $this->premium = $premium;
    }

    /**
     * @return mixed
     */
    public function getPremium()
    {
        return $this->premium;
    }

    /**
     * @param $subAccounts
     * @throws Google_Exception
     */
    public function setSubAccounts(/* array(Google_Account) */
        $subAccounts)
    {
        $this->assertIsArray($subAccounts, 'Google_Account', __METHOD__);
        $this->subAccounts = $subAccounts;
    }

    /**
     * @return mixed
     */
    public function getSubAccounts()
    {
        return $this->subAccounts;
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
     * @var string
     */
    protected $__feedAdsSettingsType = 'Google_AdUnitFeedAdsSettings';
    /**
     * @var string
     */
    protected $__feedAdsSettingsDataType = '';
    /**
     * @var
     */
    public $feedAdsSettings;
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
    public $savedStyleId;
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
     * @param Google_AdUnitFeedAdsSettings $feedAdsSettings
     */
    public function setFeedAdsSettings(Google_AdUnitFeedAdsSettings $feedAdsSettings)
    {
        $this->feedAdsSettings = $feedAdsSettings;
    }

    /**
     * @return mixed
     */
    public function getFeedAdsSettings()
    {
        return $this->feedAdsSettings;
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
     * @param $savedStyleId
     */
    public function setSavedStyleId($savedStyleId)
    {
        $this->savedStyleId = $savedStyleId;
    }

    /**
     * @return mixed
     */
    public function getSavedStyleId()
    {
        return $this->savedStyleId;
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
 * Class Google_AdUnitFeedAdsSettings
 */
class Google_AdUnitFeedAdsSettings extends Google_Model
{
    /**
     * @var
     */
    public $adPosition;
    /**
     * @var
     */
    public $frequency;
    /**
     * @var
     */
    public $minimumWordCount;
    /**
     * @var
     */
    public $type;

    /**
     * @param $adPosition
     */
    public function setAdPosition($adPosition)
    {
        $this->adPosition = $adPosition;
    }

    /**
     * @return mixed
     */
    public function getAdPosition()
    {
        return $this->adPosition;
    }

    /**
     * @param $frequency
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
    }

    /**
     * @return mixed
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * @param $minimumWordCount
     */
    public function setMinimumWordCount($minimumWordCount)
    {
        $this->minimumWordCount = $minimumWordCount;
    }

    /**
     * @return mixed
     */
    public function getMinimumWordCount()
    {
        return $this->minimumWordCount;
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
 * Class Google_AdsenseReportsGenerateResponse
 */
class Google_AdsenseReportsGenerateResponse extends Google_Model
{
    /**
     * @var
     */
    public $averages;
    /**
     * @var string
     */
    protected $__headersType = 'Google_AdsenseReportsGenerateResponseHeaders';
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
    public function setHeaders(/* array(Google_AdsenseReportsGenerateResponseHeaders) */
        $headers)
    {
        $this->assertIsArray($headers, 'Google_AdsenseReportsGenerateResponseHeaders', __METHOD__);
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
 * Class Google_AdsenseReportsGenerateResponseHeaders
 */
class Google_AdsenseReportsGenerateResponseHeaders extends Google_Model
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
 * Class Google_Alert
 */
class Google_Alert extends Google_Model
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
    public $message;
    /**
     * @var
     */
    public $severity;
    /**
     * @var
     */
    public $type;

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
     * @param $severity
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;
    }

    /**
     * @return mixed
     */
    public function getSeverity()
    {
        return $this->severity;
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
 * Class Google_Alerts
 */
class Google_Alerts extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Alert';
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
    public function setItems(/* array(Google_Alert) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Alert', __METHOD__);
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

    /**
     * @return mixed
     */
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
 * Class Google_Metadata
 */
class Google_Metadata extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_ReportingMetadataEntry';
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
    public function setItems(/* array(Google_ReportingMetadataEntry) */
        $items)
    {
        $this->assertIsArray($items, 'Google_ReportingMetadataEntry', __METHOD__);
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
 * Class Google_ReportingMetadataEntry
 */
class Google_ReportingMetadataEntry extends Google_Model
{
    /**
     * @var
     */
    public $compatibleDimensions;
    /**
     * @var
     */
    public $compatibleMetrics;
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
    public $requiredDimensions;
    /**
     * @var
     */
    public $requiredMetrics;
    /**
     * @var
     */
    public $supportedProducts;

    /**
     * @param $compatibleDimensions
     * @throws Google_Exception
     */
    public function setCompatibleDimensions(/* array(Google_string) */
        $compatibleDimensions)
    {
        $this->assertIsArray($compatibleDimensions, 'Google_string', __METHOD__);
        $this->compatibleDimensions = $compatibleDimensions;
    }

    /**
     * @return mixed
     */
    public function getCompatibleDimensions()
    {
        return $this->compatibleDimensions;
    }

    /**
     * @param $compatibleMetrics
     * @throws Google_Exception
     */
    public function setCompatibleMetrics(/* array(Google_string) */
        $compatibleMetrics)
    {
        $this->assertIsArray($compatibleMetrics, 'Google_string', __METHOD__);
        $this->compatibleMetrics = $compatibleMetrics;
    }

    /**
     * @return mixed
     */
    public function getCompatibleMetrics()
    {
        return $this->compatibleMetrics;
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
     * @param $requiredDimensions
     * @throws Google_Exception
     */
    public function setRequiredDimensions(/* array(Google_string) */
        $requiredDimensions)
    {
        $this->assertIsArray($requiredDimensions, 'Google_string', __METHOD__);
        $this->requiredDimensions = $requiredDimensions;
    }

    /**
     * @return mixed
     */
    public function getRequiredDimensions()
    {
        return $this->requiredDimensions;
    }

    /**
     * @param $requiredMetrics
     * @throws Google_Exception
     */
    public function setRequiredMetrics(/* array(Google_string) */
        $requiredMetrics)
    {
        $this->assertIsArray($requiredMetrics, 'Google_string', __METHOD__);
        $this->requiredMetrics = $requiredMetrics;
    }

    /**
     * @return mixed
     */
    public function getRequiredMetrics()
    {
        return $this->requiredMetrics;
    }

    /**
     * @param $supportedProducts
     * @throws Google_Exception
     */
    public function setSupportedProducts(/* array(Google_string) */
        $supportedProducts)
    {
        $this->assertIsArray($supportedProducts, 'Google_string', __METHOD__);
        $this->supportedProducts = $supportedProducts;
    }

    /**
     * @return mixed
     */
    public function getSupportedProducts()
    {
        return $this->supportedProducts;
    }
}

/**
 * Class Google_SavedAdStyle
 */
class Google_SavedAdStyle extends Google_Model
{
    /**
     * @var string
     */
    protected $__adStyleType = 'Google_AdStyle';
    /**
     * @var string
     */
    protected $__adStyleDataType = '';
    /**
     * @var
     */
    public $adStyle;
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
     * @param Google_AdStyle $adStyle
     */
    public function setAdStyle(Google_AdStyle $adStyle)
    {
        $this->adStyle = $adStyle;
    }

    /**
     * @return mixed
     */
    public function getAdStyle()
    {
        return $this->adStyle;
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
 * Class Google_SavedAdStyles
 */
class Google_SavedAdStyles extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_SavedAdStyle';
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
    public function setItems(/* array(Google_SavedAdStyle) */
        $items)
    {
        $this->assertIsArray($items, 'Google_SavedAdStyle', __METHOD__);
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
