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
 * The "webfonts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $webfontsService = new Google_WebfontsService(...);
 *   $webfonts = $webfontsService->webfonts;
 *  </code>
 */
class Google_WebfontsServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves the list of fonts currently served by the Google Fonts Developer API (webfonts.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_WebfontList
     * @throws Google_Exception
     * @opt_param string sort Enables sorting of the list
     */
    public function listWebfonts($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_WebfontList($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Webfonts (v1).
 *
 * <p>
 * The Google Fonts Developer API.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/fonts/docs/developer_api" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_WebfontsService extends Google_Service
{
    /**
     * @var Google_WebfontsServiceResource
     */
    public $webfonts;

    /**
     * Constructs the internal representation of the Webfonts service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'webfonts/v1/';
        $this->version = 'v1';
        $this->serviceName = 'webfonts';

        $client->addService($this->serviceName, $this->version);
        $this->webfonts = new Google_WebfontsServiceResource($this, $this->serviceName, 'webfonts', json_decode('{"methods": {"list": {"id": "webfonts.webfonts.list", "path": "webfonts", "httpMethod": "GET", "parameters": {"sort": {"type": "string", "enum": ["alpha", "date", "popularity", "style", "trending"], "location": "query"}}, "response": {"$ref": "WebfontList"}}}}', true));

    }
}


/**
 * Class Google_Webfont
 */
class Google_Webfont extends Google_Model
{
    /**
     * @var
     */
    public $family;
    /**
     * @var
     */
    public $files;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $lastModified;
    /**
     * @var
     */
    public $subsets;
    /**
     * @var
     */
    public $variants;
    /**
     * @var
     */
    public $version;

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
     * @param $files
     */
    public function setFiles($files)
    {
        $this->files = $files;
    }

    /**
     * @return mixed
     */
    public function getFiles()
    {
        return $this->files;
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
     * @param $lastModified
     */
    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;
    }

    /**
     * @return mixed
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * @param $subsets
     * @throws Google_Exception
     */
    public function setSubsets(/* array(Google_string) */
        $subsets)
    {
        $this->assertIsArray($subsets, 'Google_string', __METHOD__);
        $this->subsets = $subsets;
    }

    /**
     * @return mixed
     */
    public function getSubsets()
    {
        return $this->subsets;
    }

    /**
     * @param $variants
     * @throws Google_Exception
     */
    public function setVariants(/* array(Google_string) */
        $variants)
    {
        $this->assertIsArray($variants, 'Google_string', __METHOD__);
        $this->variants = $variants;
    }

    /**
     * @return mixed
     */
    public function getVariants()
    {
        return $this->variants;
    }

    /**
     * @param $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }
}

/**
 * Class Google_WebfontList
 */
class Google_WebfontList extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Webfont';
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
    public function setItems(/* array(Google_Webfont) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Webfont', __METHOD__);
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
