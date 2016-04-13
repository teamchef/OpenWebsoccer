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
 * The "webResource" collection of methods.
 * Typical usage is:
 *  <code>
 *   $siteVerificationService = new Google_SiteVerificationService(...);
 *   $webResource = $siteVerificationService->webResource;
 *  </code>
 */
class Google_WebResourceServiceResource extends Google_ServiceResource
{

    /**
     * Relinquish ownership of a website or domain. (webResource.delete)
     *
     * @param string $id The id of a verified site or domain.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($id, $optParams = [])
    {
        $params = ['id' => $id];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Get the most current data for a website or domain. (webResource.get)
     *
     * @param string $id The id of a verified site or domain.
     * @param array $optParams Optional parameters.
     * @return Google_SiteVerificationWebResourceResource
     * @throws Google_Exception
     */
    public function get($id, $optParams = [])
    {
        $params = ['id' => $id];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_SiteVerificationWebResourceResource($data);
        } else {
            return $data;
        }
    }

    /**
     * Get a verification token for placing on a website or domain. (webResource.getToken)
     *
     * @param Google_SiteVerificationWebResourceGettokenRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_SiteVerificationWebResourceGettokenResponse
     * @throws Google_Exception
     */
    public function getToken(Google_SiteVerificationWebResourceGettokenRequest $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('getToken', [$params]);
        if ($this->useObjects()) {
            return new Google_SiteVerificationWebResourceGettokenResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Attempt verification of a website or domain. (webResource.insert)
     *
     * @param string $verificationMethod The method to use for verifying a site or domain.
     * @param Google_SiteVerificationWebResourceResource $postBody
     * @param array $optParams Optional parameters.
     * @return Google_SiteVerificationWebResourceResource
     * @throws Google_Exception
     */
    public function insert($verificationMethod, Google_SiteVerificationWebResourceResource $postBody, $optParams = [])
    {
        $params = ['verificationMethod' => $verificationMethod, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_SiteVerificationWebResourceResource($data);
        } else {
            return $data;
        }
    }

    /**
     * Get the list of your verified websites and domains. (webResource.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_SiteVerificationWebResourceListResponse
     * @throws Google_Exception
     */
    public function listWebResource($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_SiteVerificationWebResourceListResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Modify the list of owners for your website or domain. This method supports patch semantics.
     * (webResource.patch)
     *
     * @param string $id The id of a verified site or domain.
     * @param Google_SiteVerificationWebResourceResource $postBody
     * @param array $optParams Optional parameters.
     * @return Google_SiteVerificationWebResourceResource
     * @throws Google_Exception
     */
    public function patch($id, Google_SiteVerificationWebResourceResource $postBody, $optParams = [])
    {
        $params = ['id' => $id, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_SiteVerificationWebResourceResource($data);
        } else {
            return $data;
        }
    }

    /**
     * Modify the list of owners for your website or domain. (webResource.update)
     *
     * @param string $id The id of a verified site or domain.
     * @param Google_SiteVerificationWebResourceResource $postBody
     * @param array $optParams Optional parameters.
     * @return Google_SiteVerificationWebResourceResource
     * @throws Google_Exception
     */
    public function update($id, Google_SiteVerificationWebResourceResource $postBody, $optParams = [])
    {
        $params = ['id' => $id, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_SiteVerificationWebResourceResource($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_SiteVerification (v1).
 *
 * <p>
 * Lets you programatically verify ownership of websites or domains with Google.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/site-verification/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_SiteVerificationService extends Google_Service
{
    /**
     * @var Google_WebResourceServiceResource
     */
    public $webResource;

    /**
     * Constructs the internal representation of the SiteVerification service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'siteVerification/v1/';
        $this->version = 'v1';
        $this->serviceName = 'siteVerification';

        $client->addService($this->serviceName, $this->version);
        $this->webResource = new Google_WebResourceServiceResource($this, $this->serviceName, 'webResource', json_decode('{"methods": {"delete": {"id": "siteVerification.webResource.delete", "path": "webResource/{id}", "httpMethod": "DELETE", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/siteverification"]}, "get": {"id": "siteVerification.webResource.get", "path": "webResource/{id}", "httpMethod": "GET", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "SiteVerificationWebResourceResource"}, "scopes": ["https://www.googleapis.com/auth/siteverification"]}, "getToken": {"id": "siteVerification.webResource.getToken", "path": "token", "httpMethod": "POST", "request": {"$ref": "SiteVerificationWebResourceGettokenRequest"}, "response": {"$ref": "SiteVerificationWebResourceGettokenResponse"}, "scopes": ["https://www.googleapis.com/auth/siteverification", "https://www.googleapis.com/auth/siteverification.verify_only"]}, "insert": {"id": "siteVerification.webResource.insert", "path": "webResource", "httpMethod": "POST", "parameters": {"verificationMethod": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "SiteVerificationWebResourceResource"}, "response": {"$ref": "SiteVerificationWebResourceResource"}, "scopes": ["https://www.googleapis.com/auth/siteverification", "https://www.googleapis.com/auth/siteverification.verify_only"]}, "list": {"id": "siteVerification.webResource.list", "path": "webResource", "httpMethod": "GET", "response": {"$ref": "SiteVerificationWebResourceListResponse"}, "scopes": ["https://www.googleapis.com/auth/siteverification"]}, "patch": {"id": "siteVerification.webResource.patch", "path": "webResource/{id}", "httpMethod": "PATCH", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "SiteVerificationWebResourceResource"}, "response": {"$ref": "SiteVerificationWebResourceResource"}, "scopes": ["https://www.googleapis.com/auth/siteverification"]}, "update": {"id": "siteVerification.webResource.update", "path": "webResource/{id}", "httpMethod": "PUT", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "SiteVerificationWebResourceResource"}, "response": {"$ref": "SiteVerificationWebResourceResource"}, "scopes": ["https://www.googleapis.com/auth/siteverification"]}}}', true));

    }
}


/**
 * Class Google_SiteVerificationWebResourceGettokenRequest
 */
class Google_SiteVerificationWebResourceGettokenRequest extends Google_Model
{
    /**
     * @var string
     */
    protected $__siteType = 'Google_SiteVerificationWebResourceGettokenRequestSite';
    /**
     * @var string
     */
    protected $__siteDataType = '';
    /**
     * @var
     */
    public $site;
    /**
     * @var
     */
    public $verificationMethod;

    /**
     * @param Google_SiteVerificationWebResourceGettokenRequestSite $site
     */
    public function setSite(Google_SiteVerificationWebResourceGettokenRequestSite $site)
    {
        $this->site = $site;
    }

    /**
     * @return mixed
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @param $verificationMethod
     */
    public function setVerificationMethod($verificationMethod)
    {
        $this->verificationMethod = $verificationMethod;
    }

    /**
     * @return mixed
     */
    public function getVerificationMethod()
    {
        return $this->verificationMethod;
    }
}

/**
 * Class Google_SiteVerificationWebResourceGettokenRequestSite
 */
class Google_SiteVerificationWebResourceGettokenRequestSite extends Google_Model
{
    /**
     * @var
     */
    public $identifier;
    /**
     * @var
     */
    public $type;

    /**
     * @param $identifier
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * @return mixed
     */
    public function getIdentifier()
    {
        return $this->identifier;
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
 * Class Google_SiteVerificationWebResourceGettokenResponse
 */
class Google_SiteVerificationWebResourceGettokenResponse extends Google_Model
{
    /**
     * @var
     */
    public $method;
    /**
     * @var
     */
    public $token;

    /**
     * @param $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }
}

/**
 * Class Google_SiteVerificationWebResourceListResponse
 */
class Google_SiteVerificationWebResourceListResponse extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_SiteVerificationWebResourceResource';
    /**
     * @var string
     */
    protected $__itemsDataType = 'array';
    /**
     * @var
     */
    public $items;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_SiteVerificationWebResourceResource) */
        $items)
    {
        $this->assertIsArray($items, 'Google_SiteVerificationWebResourceResource', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }
}

/**
 * Class Google_SiteVerificationWebResourceResource
 */
class Google_SiteVerificationWebResourceResource extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $owners;
    /**
     * @var string
     */
    protected $__siteType = 'Google_SiteVerificationWebResourceResourceSite';
    /**
     * @var string
     */
    protected $__siteDataType = '';
    /**
     * @var
     */
    public $site;

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
     * @param $owners
     * @throws Google_Exception
     */
    public function setOwners(/* array(Google_string) */
        $owners)
    {
        $this->assertIsArray($owners, 'Google_string', __METHOD__);
        $this->owners = $owners;
    }

    /**
     * @return mixed
     */
    public function getOwners()
    {
        return $this->owners;
    }

    /**
     * @param Google_SiteVerificationWebResourceResourceSite $site
     */
    public function setSite(Google_SiteVerificationWebResourceResourceSite $site)
    {
        $this->site = $site;
    }

    /**
     * @return mixed
     */
    public function getSite()
    {
        return $this->site;
    }
}

/**
 * Class Google_SiteVerificationWebResourceResourceSite
 */
class Google_SiteVerificationWebResourceResourceSite extends Google_Model
{
    /**
     * @var
     */
    public $identifier;
    /**
     * @var
     */
    public $type;

    /**
     * @param $identifier
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * @return mixed
     */
    public function getIdentifier()
    {
        return $this->identifier;
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
