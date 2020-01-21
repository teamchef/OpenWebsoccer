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
 * The "licenseAssignments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $licensingService = new Google_LicensingService(...);
 *   $licenseAssignments = $licensingService->licenseAssignments;
 *  </code>
 */
class Google_LicenseAssignmentsServiceResource extends Google_ServiceResource
{

    /**
     * Revoke License. (licenseAssignments.delete)
     *
     * @param string $productId Name for product
     * @param string $skuId Name for sku
     * @param string $userId email id or unique Id of the user
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($productId, $skuId, $userId, $optParams = [])
    {
        $params = ['productId' => $productId, 'skuId' => $skuId, 'userId' => $userId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Get license assignment of a particular product and sku for a user (licenseAssignments.get)
     *
     * @param string $productId Name for product
     * @param string $skuId Name for sku
     * @param string $userId email id or unique Id of the user
     * @param array $optParams Optional parameters.
     * @return Google_LicenseAssignment
     * @throws Google_Exception
     */
    public function get($productId, $skuId, $userId, $optParams = [])
    {
        $params = ['productId' => $productId, 'skuId' => $skuId, 'userId' => $userId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_LicenseAssignment($data);
        } else {
            return $data;
        }
    }

    /**
     * Assign License. (licenseAssignments.insert)
     *
     * @param string $productId Name for product
     * @param string $skuId Name for sku
     * @param Google_LicenseAssignmentInsert $postBody
     * @param array $optParams Optional parameters.
     * @return Google_LicenseAssignment
     * @throws Google_Exception
     */
    public function insert($productId, $skuId, Google_LicenseAssignmentInsert $postBody, $optParams = [])
    {
        $params = ['productId' => $productId, 'skuId' => $skuId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_LicenseAssignment($data);
        } else {
            return $data;
        }
    }

    /**
     * List license assignments for given product of the customer. (licenseAssignments.listForProduct)
     *
     * @param string $productId Name for product
     * @param string $customerId CustomerId represents the customer for whom licenseassignments are queried
     * @param array $optParams Optional parameters.
     * @return Google_LicenseAssignmentList
     * @throws Google_Exception
     * @opt_param string maxResults Maximum number of campaigns to return at one time. Must be positive. Optional. Default value is 100.
     * @opt_param string pageToken Token to fetch the next page.Optional. By default server will return first page
     */
    public function listForProduct($productId, $customerId, $optParams = [])
    {
        $params = ['productId' => $productId, 'customerId' => $customerId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('listForProduct', [$params]);
        if ($this->useObjects()) {
            return new Google_LicenseAssignmentList($data);
        } else {
            return $data;
        }
    }

    /**
     * List license assignments for given product and sku of the customer.
     * (licenseAssignments.listForProductAndSku)
     *
     * @param string $productId Name for product
     * @param string $skuId Name for sku
     * @param string $customerId CustomerId represents the customer for whom licenseassignments are queried
     * @param array $optParams Optional parameters.
     * @return Google_LicenseAssignmentList
     * @throws Google_Exception
     * @opt_param string maxResults Maximum number of campaigns to return at one time. Must be positive. Optional. Default value is 100.
     * @opt_param string pageToken Token to fetch the next page.Optional. By default server will return first page
     */
    public function listForProductAndSku($productId, $skuId, $customerId, $optParams = [])
    {
        $params = ['productId' => $productId, 'skuId' => $skuId, 'customerId' => $customerId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('listForProductAndSku', [$params]);
        if ($this->useObjects()) {
            return new Google_LicenseAssignmentList($data);
        } else {
            return $data;
        }
    }

    /**
     * Assign License. This method supports patch semantics. (licenseAssignments.patch)
     *
     * @param string $productId Name for product
     * @param string $skuId Name for sku for which license would be revoked
     * @param string $userId email id or unique Id of the user
     * @param Google_LicenseAssignment $postBody
     * @param array $optParams Optional parameters.
     * @return Google_LicenseAssignment
     * @throws Google_Exception
     */
    public function patch($productId, $skuId, $userId, Google_LicenseAssignment $postBody, $optParams = [])
    {
        $params = ['productId' => $productId, 'skuId' => $skuId, 'userId' => $userId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_LicenseAssignment($data);
        } else {
            return $data;
        }
    }

    /**
     * Assign License. (licenseAssignments.update)
     *
     * @param string $productId Name for product
     * @param string $skuId Name for sku for which license would be revoked
     * @param string $userId email id or unique Id of the user
     * @param Google_LicenseAssignment $postBody
     * @param array $optParams Optional parameters.
     * @return Google_LicenseAssignment
     * @throws Google_Exception
     */
    public function update($productId, $skuId, $userId, Google_LicenseAssignment $postBody, $optParams = [])
    {
        $params = ['productId' => $productId, 'skuId' => $skuId, 'userId' => $userId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_LicenseAssignment($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Licensing (v1).
 *
 * <p>
 * Licensing API to view and manage license for your domain.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/google-apps/licensing/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_LicensingService extends Google_Service
{
    /**
     * @var Google_LicenseAssignmentsServiceResource
     */
    public $licenseAssignments;

    /**
     * Constructs the internal representation of the Licensing service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'apps/licensing/v1/product/';
        $this->version = 'v1';
        $this->serviceName = 'licensing';

        $client->addService($this->serviceName, $this->version);
        $this->licenseAssignments = new Google_LicenseAssignmentsServiceResource($this, $this->serviceName, 'licenseAssignments', json_decode('{"methods": {"delete": {"id": "licensing.licenseAssignments.delete", "path": "{productId}/sku/{skuId}/user/{userId}", "httpMethod": "DELETE", "parameters": {"productId": {"type": "string", "required": true, "location": "path"}, "skuId": {"type": "string", "required": true, "location": "path"}, "userId": {"type": "string", "required": true, "location": "path"}}}, "get": {"id": "licensing.licenseAssignments.get", "path": "{productId}/sku/{skuId}/user/{userId}", "httpMethod": "GET", "parameters": {"productId": {"type": "string", "required": true, "location": "path"}, "skuId": {"type": "string", "required": true, "location": "path"}, "userId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "LicenseAssignment"}}, "insert": {"id": "licensing.licenseAssignments.insert", "path": "{productId}/sku/{skuId}/user", "httpMethod": "POST", "parameters": {"productId": {"type": "string", "required": true, "location": "path"}, "skuId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "LicenseAssignmentInsert"}, "response": {"$ref": "LicenseAssignment"}}, "listForProduct": {"id": "licensing.licenseAssignments.listForProduct", "path": "{productId}/users", "httpMethod": "GET", "parameters": {"customerId": {"type": "string", "required": true, "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "1", "maximum": "1000", "location": "query"}, "pageToken": {"type": "string", "default": "", "location": "query"}, "productId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "LicenseAssignmentList"}}, "listForProductAndSku": {"id": "licensing.licenseAssignments.listForProductAndSku", "path": "{productId}/sku/{skuId}/users", "httpMethod": "GET", "parameters": {"customerId": {"type": "string", "required": true, "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "1", "maximum": "1000", "location": "query"}, "pageToken": {"type": "string", "default": "", "location": "query"}, "productId": {"type": "string", "required": true, "location": "path"}, "skuId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "LicenseAssignmentList"}}, "patch": {"id": "licensing.licenseAssignments.patch", "path": "{productId}/sku/{skuId}/user/{userId}", "httpMethod": "PATCH", "parameters": {"productId": {"type": "string", "required": true, "location": "path"}, "skuId": {"type": "string", "required": true, "location": "path"}, "userId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "LicenseAssignment"}, "response": {"$ref": "LicenseAssignment"}}, "update": {"id": "licensing.licenseAssignments.update", "path": "{productId}/sku/{skuId}/user/{userId}", "httpMethod": "PUT", "parameters": {"productId": {"type": "string", "required": true, "location": "path"}, "skuId": {"type": "string", "required": true, "location": "path"}, "userId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "LicenseAssignment"}, "response": {"$ref": "LicenseAssignment"}}}}', true));

    }
}


/**
 * Class Google_LicenseAssignment
 */
class Google_LicenseAssignment extends Google_Model
{
    /**
     * @var
     */
    public $etags;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $productId;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $skuId;
    /**
     * @var
     */
    public $userId;

    /**
     * @param $etags
     */
    public function setEtags($etags)
    {
        $this->etags = $etags;
    }

    /**
     * @return mixed
     */
    public function getEtags()
    {
        return $this->etags;
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
     * @param $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->productId;
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
     * @param $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }
}

/**
 * Class Google_LicenseAssignmentInsert
 */
class Google_LicenseAssignmentInsert extends Google_Model
{
    /**
     * @var
     */
    public $userId;

    /**
     * @param $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }
}

/**
 * Class Google_LicenseAssignmentList
 */
class Google_LicenseAssignmentList extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_LicenseAssignment';
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
    public function setItems(/* array(Google_LicenseAssignment) */
        $items)
    {
        $this->assertIsArray($items, 'Google_LicenseAssignment', __METHOD__);
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
