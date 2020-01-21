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
 * The "customers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $resellerService = new Google_ResellerService(...);
 *   $customers = $resellerService->customers;
 *  </code>
 */
class Google_CustomersServiceResource extends Google_ServiceResource
{

    /**
     * Gets a customer resource if one exists and is owned by the reseller. (customers.get)
     *
     * @param string $customerId Id of the Customer
     * @param array $optParams Optional parameters.
     * @return Google_Customer
     * @throws Google_Exception
     */
    public function get($customerId, $optParams = [])
    {
        $params = ['customerId' => $customerId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Customer($data);
        } else {
            return $data;
        }
    }

    /**
     * Creates a customer resource if one does not already exist. (customers.insert)
     *
     * @param Google_Customer $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Customer
     * @throws Google_Exception
     * @opt_param string customerAuthToken An auth token needed for inserting a customer for which domain already exists. Can be generated at https://www.google.com/a/cpanel//TransferToken. Optional.
     */
    public function insert(Google_Customer $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Customer($data);
        } else {
            return $data;
        }
    }

    /**
     * Update a customer resource if one it exists and is owned by the reseller. This method supports
     * patch semantics. (customers.patch)
     *
     * @param string $customerId Id of the Customer
     * @param Google_Customer $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Customer
     * @throws Google_Exception
     */
    public function patch($customerId, Google_Customer $postBody, $optParams = [])
    {
        $params = ['customerId' => $customerId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Customer($data);
        } else {
            return $data;
        }
    }

    /**
     * Update a customer resource if one it exists and is owned by the reseller. (customers.update)
     *
     * @param string $customerId Id of the Customer
     * @param Google_Customer $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Customer
     * @throws Google_Exception
     */
    public function update($customerId, Google_Customer $postBody, $optParams = [])
    {
        $params = ['customerId' => $customerId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Customer($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "subscriptions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $resellerService = new Google_ResellerService(...);
 *   $subscriptions = $resellerService->subscriptions;
 *  </code>
 */
class Google_SubscriptionsServiceResource extends Google_ServiceResource
{

    /**
     * Changes the plan of a subscription (subscriptions.changePlan)
     *
     * @param string $customerId Id of the Customer
     * @param string $subscriptionId Id of the subscription, which is unique for a customer
     * @param Google_ChangePlanRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Subscription
     * @throws Google_Exception
     */
    public function changePlan($customerId, $subscriptionId, Google_ChangePlanRequest $postBody, $optParams = [])
    {
        $params = ['customerId' => $customerId, 'subscriptionId' => $subscriptionId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('changePlan', [$params]);
        if ($this->useObjects()) {
            return new Google_Subscription($data);
        } else {
            return $data;
        }
    }

    /**
     * Changes the renewal settings of a subscription (subscriptions.changeRenewalSettings)
     *
     * @param string $customerId Id of the Customer
     * @param string $subscriptionId Id of the subscription, which is unique for a customer
     * @param Google_RenewalSettings $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Subscription
     * @throws Google_Exception
     */
    public function changeRenewalSettings($customerId, $subscriptionId, Google_RenewalSettings $postBody, $optParams = [])
    {
        $params = ['customerId' => $customerId, 'subscriptionId' => $subscriptionId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('changeRenewalSettings', [$params]);
        if ($this->useObjects()) {
            return new Google_Subscription($data);
        } else {
            return $data;
        }
    }

    /**
     * Changes the seats configuration of a subscription (subscriptions.changeSeats)
     *
     * @param string $customerId Id of the Customer
     * @param string $subscriptionId Id of the subscription, which is unique for a customer
     * @param Google_Seats $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Subscription
     * @throws Google_Exception
     */
    public function changeSeats($customerId, $subscriptionId, Google_Seats $postBody, $optParams = [])
    {
        $params = ['customerId' => $customerId, 'subscriptionId' => $subscriptionId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('changeSeats', [$params]);
        if ($this->useObjects()) {
            return new Google_Subscription($data);
        } else {
            return $data;
        }
    }

    /**
     * Cancels/Downgrades a subscription. (subscriptions.delete)
     *
     * @param string $customerId Id of the Customer
     * @param string $subscriptionId Id of the subscription, which is unique for a customer
     * @param string $deletionType Whether the subscription is to be fully cancelled or downgraded
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($customerId, $subscriptionId, $deletionType, $optParams = [])
    {
        $params = ['customerId' => $customerId, 'subscriptionId' => $subscriptionId, 'deletionType' => $deletionType];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Gets a subscription of the customer. (subscriptions.get)
     *
     * @param string $customerId Id of the Customer
     * @param string $subscriptionId Id of the subscription, which is unique for a customer
     * @param array $optParams Optional parameters.
     * @return Google_Subscription
     * @throws Google_Exception
     */
    public function get($customerId, $subscriptionId, $optParams = [])
    {
        $params = ['customerId' => $customerId, 'subscriptionId' => $subscriptionId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Subscription($data);
        } else {
            return $data;
        }
    }

    /**
     * Creates/Transfers a subscription for the customer. (subscriptions.insert)
     *
     * @param string $customerId Id of the Customer
     * @param Google_Subscription $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Subscription
     * @throws Google_Exception
     * @opt_param string customerAuthToken An auth token needed for transferring a subscription. Can be generated at https://www.google.com/a/cpanel/customer-domain/TransferToken. Optional.
     */
    public function insert($customerId, Google_Subscription $postBody, $optParams = [])
    {
        $params = ['customerId' => $customerId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Subscription($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists subscriptions of a reseller, optionally filtered by a customer name prefix.
     * (subscriptions.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Subscriptions
     * @throws Google_Exception
     * @opt_param string customerAuthToken An auth token needed if the customer is not a resold customer of this reseller. Can be generated at https://www.google.com/a/cpanel/customer-domain/TransferToken.Optional.
     * @opt_param string customerId Id of the Customer
     * @opt_param string customerNamePrefix Prefix of the customer's domain name by which the subscriptions should be filtered. Optional
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string pageToken Token to specify next page in the list
     */
    public function listSubscriptions($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Subscriptions($data);
        } else {
            return $data;
        }
    }

    /**
     * Starts paid service of a trial subscription (subscriptions.startPaidService)
     *
     * @param string $customerId Id of the Customer
     * @param string $subscriptionId Id of the subscription, which is unique for a customer
     * @param array $optParams Optional parameters.
     * @return Google_Subscription
     * @throws Google_Exception
     */
    public function startPaidService($customerId, $subscriptionId, $optParams = [])
    {
        $params = ['customerId' => $customerId, 'subscriptionId' => $subscriptionId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('startPaidService', [$params]);
        if ($this->useObjects()) {
            return new Google_Subscription($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Reseller (v1).
 *
 * <p>
 * Lets you create and manage your customers and their subscriptions.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/google-apps/reseller/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_ResellerService extends Google_Service
{
    /**
     * @var Google_CustomersServiceResource
     */
    public $customers;
    /**
     * @var Google_SubscriptionsServiceResource
     */
    public $subscriptions;

    /**
     * Constructs the internal representation of the Reseller service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'apps/reseller/v1/';
        $this->version = 'v1';
        $this->serviceName = 'reseller';

        $client->addService($this->serviceName, $this->version);
        $this->customers = new Google_CustomersServiceResource($this, $this->serviceName, 'customers', json_decode('{"methods": {"get": {"id": "reseller.customers.get", "path": "customers/{customerId}", "httpMethod": "GET", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Customer"}}, "insert": {"id": "reseller.customers.insert", "path": "customers", "httpMethod": "POST", "parameters": {"customerAuthToken": {"type": "string", "location": "query"}}, "request": {"$ref": "Customer"}, "response": {"$ref": "Customer"}}, "patch": {"id": "reseller.customers.patch", "path": "customers/{customerId}", "httpMethod": "PATCH", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Customer"}, "response": {"$ref": "Customer"}}, "update": {"id": "reseller.customers.update", "path": "customers/{customerId}", "httpMethod": "PUT", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Customer"}, "response": {"$ref": "Customer"}}}}', true));
        $this->subscriptions = new Google_SubscriptionsServiceResource($this, $this->serviceName, 'subscriptions', json_decode('{"methods": {"changePlan": {"id": "reseller.subscriptions.changePlan", "path": "customers/{customerId}/subscriptions/{subscriptionId}/changePlan", "httpMethod": "POST", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "subscriptionId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "ChangePlanRequest"}, "response": {"$ref": "Subscription"}}, "changeRenewalSettings": {"id": "reseller.subscriptions.changeRenewalSettings", "path": "customers/{customerId}/subscriptions/{subscriptionId}/changeRenewalSettings", "httpMethod": "POST", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "subscriptionId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "RenewalSettings"}, "response": {"$ref": "Subscription"}}, "changeSeats": {"id": "reseller.subscriptions.changeSeats", "path": "customers/{customerId}/subscriptions/{subscriptionId}/changeSeats", "httpMethod": "POST", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "subscriptionId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Seats"}, "response": {"$ref": "Subscription"}}, "delete": {"id": "reseller.subscriptions.delete", "path": "customers/{customerId}/subscriptions/{subscriptionId}", "httpMethod": "DELETE", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "deletionType": {"type": "string", "required": true, "enum": ["cancel", "downgrade", "suspend"], "location": "query"}, "subscriptionId": {"type": "string", "required": true, "location": "path"}}}, "get": {"id": "reseller.subscriptions.get", "path": "customers/{customerId}/subscriptions/{subscriptionId}", "httpMethod": "GET", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "subscriptionId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Subscription"}}, "insert": {"id": "reseller.subscriptions.insert", "path": "customers/{customerId}/subscriptions", "httpMethod": "POST", "parameters": {"customerAuthToken": {"type": "string", "location": "query"}, "customerId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Subscription"}, "response": {"$ref": "Subscription"}}, "list": {"id": "reseller.subscriptions.list", "path": "subscriptions", "httpMethod": "GET", "parameters": {"customerAuthToken": {"type": "string", "location": "query"}, "customerId": {"type": "string", "location": "query"}, "customerNamePrefix": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "1", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "Subscriptions"}}, "startPaidService": {"id": "reseller.subscriptions.startPaidService", "path": "customers/{customerId}/subscriptions/{subscriptionId}/startPaidService", "httpMethod": "POST", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "subscriptionId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Subscription"}}}}', true));

    }
}


/**
 * Class Google_Address
 */
class Google_Address extends Google_Model
{
    /**
     * @var
     */
    public $addressLine1;
    /**
     * @var
     */
    public $addressLine2;
    /**
     * @var
     */
    public $addressLine3;
    /**
     * @var
     */
    public $contactName;
    /**
     * @var
     */
    public $countryCode;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $locality;
    /**
     * @var
     */
    public $organizationName;
    /**
     * @var
     */
    public $postalCode;
    /**
     * @var
     */
    public $region;

    /**
     * @param $addressLine1
     */
    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     * @return mixed
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * @param $addressLine2
     */
    public function setAddressLine2($addressLine2)
    {
        $this->addressLine2 = $addressLine2;
    }

    /**
     * @return mixed
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * @param $addressLine3
     */
    public function setAddressLine3($addressLine3)
    {
        $this->addressLine3 = $addressLine3;
    }

    /**
     * @return mixed
     */
    public function getAddressLine3()
    {
        return $this->addressLine3;
    }

    /**
     * @param $contactName
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
    }

    /**
     * @return mixed
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * @param $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->countryCode;
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
     * @param $locality
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;
    }

    /**
     * @return mixed
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * @param $organizationName
     */
    public function setOrganizationName($organizationName)
    {
        $this->organizationName = $organizationName;
    }

    /**
     * @return mixed
     */
    public function getOrganizationName()
    {
        return $this->organizationName;
    }

    /**
     * @param $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
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
}

/**
 * Class Google_ChangePlanRequest
 */
class Google_ChangePlanRequest extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $planName;
    /**
     * @var
     */
    public $purchaseOrderId;
    /**
     * @var string
     */
    protected $__seatsType = 'Google_Seats';
    /**
     * @var string
     */
    protected $__seatsDataType = '';
    /**
     * @var
     */
    public $seats;

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
     * @param $planName
     */
    public function setPlanName($planName)
    {
        $this->planName = $planName;
    }

    /**
     * @return mixed
     */
    public function getPlanName()
    {
        return $this->planName;
    }

    /**
     * @param $purchaseOrderId
     */
    public function setPurchaseOrderId($purchaseOrderId)
    {
        $this->purchaseOrderId = $purchaseOrderId;
    }

    /**
     * @return mixed
     */
    public function getPurchaseOrderId()
    {
        return $this->purchaseOrderId;
    }

    /**
     * @param Google_Seats $seats
     */
    public function setSeats(Google_Seats $seats)
    {
        $this->seats = $seats;
    }

    /**
     * @return mixed
     */
    public function getSeats()
    {
        return $this->seats;
    }
}

/**
 * Class Google_Customer
 */
class Google_Customer extends Google_Model
{
    /**
     * @var
     */
    public $alternateEmail;
    /**
     * @var
     */
    public $customerDomain;
    /**
     * @var
     */
    public $customerId;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $phoneNumber;
    /**
     * @var string
     */
    protected $__postalAddressType = 'Google_Address';
    /**
     * @var string
     */
    protected $__postalAddressDataType = '';
    /**
     * @var
     */
    public $postalAddress;
    /**
     * @var
     */
    public $resourceUiUrl;

    /**
     * @param $alternateEmail
     */
    public function setAlternateEmail($alternateEmail)
    {
        $this->alternateEmail = $alternateEmail;
    }

    /**
     * @return mixed
     */
    public function getAlternateEmail()
    {
        return $this->alternateEmail;
    }

    /**
     * @param $customerDomain
     */
    public function setCustomerDomain($customerDomain)
    {
        $this->customerDomain = $customerDomain;
    }

    /**
     * @return mixed
     */
    public function getCustomerDomain()
    {
        return $this->customerDomain;
    }

    /**
     * @param $customerId
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }

    /**
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->customerId;
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
     * @param $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param Google_Address $postalAddress
     */
    public function setPostalAddress(Google_Address $postalAddress)
    {
        $this->postalAddress = $postalAddress;
    }

    /**
     * @return mixed
     */
    public function getPostalAddress()
    {
        return $this->postalAddress;
    }

    /**
     * @param $resourceUiUrl
     */
    public function setResourceUiUrl($resourceUiUrl)
    {
        $this->resourceUiUrl = $resourceUiUrl;
    }

    /**
     * @return mixed
     */
    public function getResourceUiUrl()
    {
        return $this->resourceUiUrl;
    }
}

/**
 * Class Google_RenewalSettings
 */
class Google_RenewalSettings extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $renewalType;

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
     * @param $renewalType
     */
    public function setRenewalType($renewalType)
    {
        $this->renewalType = $renewalType;
    }

    /**
     * @return mixed
     */
    public function getRenewalType()
    {
        return $this->renewalType;
    }
}

/**
 * Class Google_Seats
 */
class Google_Seats extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $maximumNumberOfSeats;
    /**
     * @var
     */
    public $numberOfSeats;

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
     * @param $maximumNumberOfSeats
     */
    public function setMaximumNumberOfSeats($maximumNumberOfSeats)
    {
        $this->maximumNumberOfSeats = $maximumNumberOfSeats;
    }

    /**
     * @return mixed
     */
    public function getMaximumNumberOfSeats()
    {
        return $this->maximumNumberOfSeats;
    }

    /**
     * @param $numberOfSeats
     */
    public function setNumberOfSeats($numberOfSeats)
    {
        $this->numberOfSeats = $numberOfSeats;
    }

    /**
     * @return mixed
     */
    public function getNumberOfSeats()
    {
        return $this->numberOfSeats;
    }
}

/**
 * Class Google_Subscription
 */
class Google_Subscription extends Google_Model
{
    /**
     * @var
     */
    public $creationTime;
    /**
     * @var
     */
    public $customerId;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__planType = 'Google_SubscriptionPlan';
    /**
     * @var string
     */
    protected $__planDataType = '';
    /**
     * @var
     */
    public $plan;
    /**
     * @var
     */
    public $purchaseOrderId;
    /**
     * @var string
     */
    protected $__renewalSettingsType = 'Google_RenewalSettings';
    /**
     * @var string
     */
    protected $__renewalSettingsDataType = '';
    /**
     * @var
     */
    public $renewalSettings;
    /**
     * @var
     */
    public $resourceUiUrl;
    /**
     * @var string
     */
    protected $__seatsType = 'Google_Seats';
    /**
     * @var string
     */
    protected $__seatsDataType = '';
    /**
     * @var
     */
    public $seats;
    /**
     * @var
     */
    public $skuId;
    /**
     * @var
     */
    public $status;
    /**
     * @var
     */
    public $subscriptionId;
    /**
     * @var string
     */
    protected $__transferInfoType = 'Google_SubscriptionTransferInfo';
    /**
     * @var string
     */
    protected $__transferInfoDataType = '';
    /**
     * @var
     */
    public $transferInfo;
    /**
     * @var string
     */
    protected $__trialSettingsType = 'Google_SubscriptionTrialSettings';
    /**
     * @var string
     */
    protected $__trialSettingsDataType = '';
    /**
     * @var
     */
    public $trialSettings;

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
     * @param $customerId
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }

    /**
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->customerId;
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
     * @param Google_SubscriptionPlan $plan
     */
    public function setPlan(Google_SubscriptionPlan $plan)
    {
        $this->plan = $plan;
    }

    /**
     * @return mixed
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * @param $purchaseOrderId
     */
    public function setPurchaseOrderId($purchaseOrderId)
    {
        $this->purchaseOrderId = $purchaseOrderId;
    }

    /**
     * @return mixed
     */
    public function getPurchaseOrderId()
    {
        return $this->purchaseOrderId;
    }

    /**
     * @param Google_RenewalSettings $renewalSettings
     */
    public function setRenewalSettings(Google_RenewalSettings $renewalSettings)
    {
        $this->renewalSettings = $renewalSettings;
    }

    /**
     * @return mixed
     */
    public function getRenewalSettings()
    {
        return $this->renewalSettings;
    }

    /**
     * @param $resourceUiUrl
     */
    public function setResourceUiUrl($resourceUiUrl)
    {
        $this->resourceUiUrl = $resourceUiUrl;
    }

    /**
     * @return mixed
     */
    public function getResourceUiUrl()
    {
        return $this->resourceUiUrl;
    }

    /**
     * @param Google_Seats $seats
     */
    public function setSeats(Google_Seats $seats)
    {
        $this->seats = $seats;
    }

    /**
     * @return mixed
     */
    public function getSeats()
    {
        return $this->seats;
    }

    /**
     * @param $skuId
     */
    public function setSkuId($skuId)
    {
        $this->skuId = $skuId;
    }

    /**
     * @return mixed
     */
    public function getSkuId()
    {
        return $this->skuId;
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
     * @param $subscriptionId
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * @return mixed
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * @param Google_SubscriptionTransferInfo $transferInfo
     */
    public function setTransferInfo(Google_SubscriptionTransferInfo $transferInfo)
    {
        $this->transferInfo = $transferInfo;
    }

    /**
     * @return mixed
     */
    public function getTransferInfo()
    {
        return $this->transferInfo;
    }

    /**
     * @param Google_SubscriptionTrialSettings $trialSettings
     */
    public function setTrialSettings(Google_SubscriptionTrialSettings $trialSettings)
    {
        $this->trialSettings = $trialSettings;
    }

    /**
     * @return mixed
     */
    public function getTrialSettings()
    {
        return $this->trialSettings;
    }
}

/**
 * Class Google_SubscriptionPlan
 */
class Google_SubscriptionPlan extends Google_Model
{
    /**
     * @var string
     */
    protected $__commitmentIntervalType = 'Google_SubscriptionPlanCommitmentInterval';
    /**
     * @var string
     */
    protected $__commitmentIntervalDataType = '';
    /**
     * @var
     */
    public $commitmentInterval;
    /**
     * @var
     */
    public $isCommitmentPlan;
    /**
     * @var
     */
    public $planName;

    /**
     * @param Google_SubscriptionPlanCommitmentInterval $commitmentInterval
     */
    public function setCommitmentInterval(Google_SubscriptionPlanCommitmentInterval $commitmentInterval)
    {
        $this->commitmentInterval = $commitmentInterval;
    }

    /**
     * @return mixed
     */
    public function getCommitmentInterval()
    {
        return $this->commitmentInterval;
    }

    /**
     * @param $isCommitmentPlan
     */
    public function setIsCommitmentPlan($isCommitmentPlan)
    {
        $this->isCommitmentPlan = $isCommitmentPlan;
    }

    /**
     * @return mixed
     */
    public function getIsCommitmentPlan()
    {
        return $this->isCommitmentPlan;
    }

    /**
     * @param $planName
     */
    public function setPlanName($planName)
    {
        $this->planName = $planName;
    }

    /**
     * @return mixed
     */
    public function getPlanName()
    {
        return $this->planName;
    }
}

/**
 * Class Google_SubscriptionPlanCommitmentInterval
 */
class Google_SubscriptionPlanCommitmentInterval extends Google_Model
{
    /**
     * @var
     */
    public $endTime;
    /**
     * @var
     */
    public $startTime;

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
 * Class Google_SubscriptionTransferInfo
 */
class Google_SubscriptionTransferInfo extends Google_Model
{
    /**
     * @var
     */
    public $transferabilityExpirationTime;

    /**
     * @param $transferabilityExpirationTime
     */
    public function setTransferabilityExpirationTime($transferabilityExpirationTime)
    {
        $this->transferabilityExpirationTime = $transferabilityExpirationTime;
    }

    /**
     * @return mixed
     */
    public function getTransferabilityExpirationTime()
    {
        return $this->transferabilityExpirationTime;
    }
}

/**
 * Class Google_SubscriptionTrialSettings
 */
class Google_SubscriptionTrialSettings extends Google_Model
{
    /**
     * @var
     */
    public $isInTrial;
    /**
     * @var
     */
    public $trialEndTime;

    /**
     * @param $isInTrial
     */
    public function setIsInTrial($isInTrial)
    {
        $this->isInTrial = $isInTrial;
    }

    /**
     * @return mixed
     */
    public function getIsInTrial()
    {
        return $this->isInTrial;
    }

    /**
     * @param $trialEndTime
     */
    public function setTrialEndTime($trialEndTime)
    {
        $this->trialEndTime = $trialEndTime;
    }

    /**
     * @return mixed
     */
    public function getTrialEndTime()
    {
        return $this->trialEndTime;
    }
}

/**
 * Class Google_Subscriptions
 */
class Google_Subscriptions extends Google_Model
{
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
    protected $__subscriptionsType = 'Google_Subscription';
    /**
     * @var string
     */
    protected $__subscriptionsDataType = 'array';
    /**
     * @var
     */
    public $subscriptions;

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
     * @param $subscriptions
     * @throws Google_Exception
     */
    public function setSubscriptions(/* array(Google_Subscription) */
        $subscriptions)
    {
        $this->assertIsArray($subscriptions, 'Google_Subscription', __METHOD__);
        $this->subscriptions = $subscriptions;
    }

    /**
     * @return mixed
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }
}
