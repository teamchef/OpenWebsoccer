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
 * The "text" collection of methods.
 * Typical usage is:
 *  <code>
 *   $freebaseService = new Google_FreebaseService(...);
 *   $text = $freebaseService->text;
 *  </code>
 */
class Google_TextServiceResource extends Google_ServiceResource
{

    /**
     * Returns blob attached to node at specified id as HTML (text.get)
     *
     * @param string $id The id of the item that you want data about
     * @param array $optParams Optional parameters.
     * @return Google_ContentserviceGet
     * @throws Google_Exception
     * @opt_param string format Sanitizing transformation.
     * @opt_param string maxlength The max number of characters to return. Valid only for 'plain' format.
     */
    public function get($id, $optParams = [])
    {
        $params = ['id' => $id];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_ContentserviceGet($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "topic" collection of methods.
 * Typical usage is:
 *  <code>
 *   $freebaseService = new Google_FreebaseService(...);
 *   $topic = $freebaseService->topic;
 *  </code>
 */
class Google_TopicServiceResource extends Google_ServiceResource
{

    /**
     * Get properties and meta-data about a topic. (topic.lookup)
     *
     * @param string $id The id of the item that you want data about.
     * @param array $optParams Optional parameters.
     * @return Google_TopicLookup
     * @throws Google_Exception
     * @opt_param string dateline Determines how up-to-date the data returned is. A unix epoch time, a guid or a 'now'
     * @opt_param string filter A frebase domain, type or property id, 'suggest', 'commons', or 'all'. Filter the results and returns only appropriate properties.
     * @opt_param string lang The language you 'd like the content in - a freebase /type/lang language key.
     * @opt_param string limit The maximum number of property values to return for each property.
     * @opt_param bool raw Do not apply any constraints, or get any names.
     */
    public function lookup($id, $optParams = [])
    {
        $params = ['id' => $id];
        $params = array_merge($params, $optParams);
        $data = $this->__call('lookup', [$params]);
        if ($this->useObjects()) {
            return new Google_TopicLookup($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Freebase (v1).
 *
 * <p>
 * Topic and MQL APIs provide you structured access to Freebase data.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/freebase/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_FreebaseService extends Google_Service
{
    /**
     * @var Google_TextServiceResource
     */
    public $text;
    /**
     * @var Google_TopicServiceResource
     */
    public $topic;

    /**
     * Constructs the internal representation of the Freebase service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'freebase/v1/';
        $this->version = 'v1';
        $this->serviceName = 'freebase';

        $client->addService($this->serviceName, $this->version);
        $this->text = new Google_TextServiceResource($this, $this->serviceName, 'text', json_decode('{"methods": {"get": {"id": "freebase.text.get", "path": "text{/id*}", "httpMethod": "GET", "parameters": {"format": {"type": "string", "default": "plain", "enum": ["html", "plain", "raw"], "location": "query"}, "id": {"type": "string", "required": true, "repeated": true, "location": "path"}, "maxlength": {"type": "integer", "format": "uint32", "location": "query"}}, "response": {"$ref": "ContentserviceGet"}}}}', true));
        $this->topic = new Google_TopicServiceResource($this, $this->serviceName, 'topic', json_decode('{"methods": {"lookup": {"id": "freebase.topic.lookup", "path": "topic{/id*}", "httpMethod": "GET", "parameters": {"dateline": {"type": "string", "location": "query"}, "filter": {"type": "string", "repeated": true, "location": "query"}, "id": {"type": "string", "required": true, "repeated": true, "location": "path"}, "lang": {"type": "string", "default": "en", "location": "query"}, "limit": {"type": "integer", "default": "10", "format": "uint32", "location": "query"}, "raw": {"type": "boolean", "default": "false", "location": "query"}}, "response": {"$ref": "TopicLookup"}}}}', true));

        $this->image = new Google_ImageServiceResource($this, $this->serviceName, 'image', json_decode('{"httpMethod": "GET", "path": "image{/id*}", "supportsMediaDownload": true, "id": "freebase.image", "parameters": {"fallbackid": {"type": "string", "default": "/freebase/no_image_png", "location": "query"}, "id": {"type": "string", "required": true, "repeated": true, "location": "path"}, "maxheight": {"type": "integer", "format": "uint32", "maximum": "4096", "location": "query"}, "maxwidth": {"type": "integer", "format": "uint32", "maximum": "4096", "location": "query"}, "mode": {"type": "string", "default": "fit", "enum": ["fill", "fillcrop", "fillcropmid", "fit"], "location": "query"}, "pad": {"type": "boolean", "default": "false", "location": "query"}}}', true));
        $this->mqlread = new Google_MqlreadServiceResource($this, $this->serviceName, 'mqlread', json_decode('{"httpMethod": "GET", "path": "mqlread", "supportsMediaDownload": true, "id": "freebase.mqlread", "parameters": {"as_of_time": {"type": "string", "location": "query"}, "callback": {"type": "string", "location": "query"}, "cost": {"type": "boolean", "default": "false", "location": "query"}, "cursor": {"type": "string", "location": "query"}, "dateline": {"type": "string", "location": "query"}, "html_escape": {"type": "boolean", "default": "true", "location": "query"}, "indent": {"type": "integer", "default": "0", "format": "uint32", "maximum": "10", "location": "query"}, "lang": {"type": "string", "default": "/lang/en", "location": "query"}, "query": {"type": "string", "required": true, "location": "query"}, "uniqueness_failure": {"type": "string", "default": "hard", "enum": ["hard", "soft"], "location": "query"}}}', true));
        $this->mqlwrite = new Google_MqlwriteServiceResource($this, $this->serviceName, 'mqlwrite', json_decode('{"httpMethod": "GET", "path": "mqlwrite", "scopes": ["https://www.googleapis.com/auth/freebase"], "supportsMediaDownload": true, "id": "freebase.mqlwrite", "parameters": {"callback": {"type": "string", "location": "query"}, "dateline": {"type": "string", "location": "query"}, "indent": {"type": "integer", "default": "0", "format": "uint32", "maximum": "10", "location": "query"}, "query": {"type": "string", "required": true, "location": "query"}, "use_permission_of": {"type": "string", "location": "query"}}}', true));
    }
}


/**
 * Class Google_ContentserviceGet
 */
class Google_ContentserviceGet extends Google_Model
{
    /**
     * @var
     */
    public $result;

    /**
     * @param $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }
}

/**
 * Class Google_TopicLookup
 */
class Google_TopicLookup extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__propertyType = 'Google_TopicLookupProperty';
    /**
     * @var string
     */
    protected $__propertyDataType = '';
    /**
     * @var
     */
    public $property;

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
     * @param Google_TopicLookupProperty $property
     */
    public function setProperty(Google_TopicLookupProperty $property)
    {
        $this->property = $property;
    }

    /**
     * @return mixed
     */
    public function getProperty()
    {
        return $this->property;
    }
}

/**
 * Class Google_TopicLookupProperty
 */
class Google_TopicLookupProperty extends Google_Model
{
    /**
     * @var string
     */
    protected $___freebase_object_profile_linkcountType = 'Google_TopicStatslinkcount';
    /**
     * @var string
     */
    protected $___freebase_object_profile_linkcountDataType = '';
    /**
     * @var
     */
    public $_freebase_object_profile_linkcount;

    /**
     * @param Google_TopicStatslinkcount $_freebase_object_profile_linkcount
     */
    public function set_freebase_object_profile_linkcount(Google_TopicStatslinkcount $_freebase_object_profile_linkcount)
    {
        $this->_freebase_object_profile_linkcount = $_freebase_object_profile_linkcount;
    }

    /**
     * @return mixed
     */
    public function get_freebase_object_profile_linkcount()
    {
        return $this->_freebase_object_profile_linkcount;
    }
}

/**
 * Class Google_TopicPropertyvalue
 */
class Google_TopicPropertyvalue extends Google_Model
{
    /**
     * @var
     */
    public $count;
    /**
     * @var
     */
    public $status;
    /**
     * @var string
     */
    protected $__valuesType = 'Google_TopicValue';
    /**
     * @var string
     */
    protected $__valuesDataType = 'array';
    /**
     * @var
     */
    public $values;
    /**
     * @var
     */
    public $valuetype;

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
     * @param $values
     * @throws Google_Exception
     */
    public function setValues(/* array(Google_TopicValue) */
        $values)
    {
        $this->assertIsArray($values, 'Google_TopicValue', __METHOD__);
        $this->values = $values;
    }

    /**
     * @return mixed
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param $valuetype
     */
    public function setValuetype($valuetype)
    {
        $this->valuetype = $valuetype;
    }

    /**
     * @return mixed
     */
    public function getValuetype()
    {
        return $this->valuetype;
    }
}

/**
 * Class Google_TopicStatslinkcount
 */
class Google_TopicStatslinkcount extends Google_Model
{
    /**
     * @var
     */
    public $type;
    /**
     * @var string
     */
    protected $__valuesType = 'Google_TopicStatslinkcountValues';
    /**
     * @var string
     */
    protected $__valuesDataType = 'array';
    /**
     * @var
     */
    public $values;

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
     * @param $values
     * @throws Google_Exception
     */
    public function setValues(/* array(Google_TopicStatslinkcountValues) */
        $values)
    {
        $this->assertIsArray($values, 'Google_TopicStatslinkcountValues', __METHOD__);
        $this->values = $values;
    }

    /**
     * @return mixed
     */
    public function getValues()
    {
        return $this->values;
    }
}

/**
 * Class Google_TopicStatslinkcountValues
 */
class Google_TopicStatslinkcountValues extends Google_Model
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
     * @var string
     */
    protected $__valuesType = 'Google_TopicStatslinkcountValuesValues';
    /**
     * @var string
     */
    protected $__valuesDataType = 'array';
    /**
     * @var
     */
    public $values;

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

    /**
     * @param $values
     * @throws Google_Exception
     */
    public function setValues(/* array(Google_TopicStatslinkcountValuesValues) */
        $values)
    {
        $this->assertIsArray($values, 'Google_TopicStatslinkcountValuesValues', __METHOD__);
        $this->values = $values;
    }

    /**
     * @return mixed
     */
    public function getValues()
    {
        return $this->values;
    }
}

/**
 * Class Google_TopicStatslinkcountValuesValues
 */
class Google_TopicStatslinkcountValuesValues extends Google_Model
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
     * @var string
     */
    protected $__valuesType = 'Google_TopicStatslinkcountValuesValuesValues';
    /**
     * @var string
     */
    protected $__valuesDataType = 'array';
    /**
     * @var
     */
    public $values;

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

    /**
     * @param $values
     * @throws Google_Exception
     */
    public function setValues(/* array(Google_TopicStatslinkcountValuesValuesValues) */
        $values)
    {
        $this->assertIsArray($values, 'Google_TopicStatslinkcountValuesValuesValues', __METHOD__);
        $this->values = $values;
    }

    /**
     * @return mixed
     */
    public function getValues()
    {
        return $this->values;
    }
}

/**
 * Class Google_TopicStatslinkcountValuesValuesValues
 */
class Google_TopicStatslinkcountValuesValuesValues extends Google_Model
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
 * Class Google_TopicValue
 */
class Google_TopicValue extends Google_Model
{
    /**
     * @var string
     */
    protected $__citationType = 'Google_TopicValueCitation';
    /**
     * @var string
     */
    protected $__citationDataType = '';
    /**
     * @var
     */
    public $citation;
    /**
     * @var
     */
    public $creator;
    /**
     * @var
     */
    public $dataset;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $lang;
    /**
     * @var
     */
    public $project;
    /**
     * @var string
     */
    protected $__propertyType = 'Google_TopicPropertyvalue';
    /**
     * @var string
     */
    protected $__propertyDataType = 'map';
    /**
     * @var
     */
    public $property;
    /**
     * @var
     */
    public $text;
    /**
     * @var
     */
    public $timestamp;
    /**
     * @var
     */
    public $value;

    /**
     * @param Google_TopicValueCitation $citation
     */
    public function setCitation(Google_TopicValueCitation $citation)
    {
        $this->citation = $citation;
    }

    /**
     * @return mixed
     */
    public function getCitation()
    {
        return $this->citation;
    }

    /**
     * @param $creator
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;
    }

    /**
     * @return mixed
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param $dataset
     */
    public function setDataset($dataset)
    {
        $this->dataset = $dataset;
    }

    /**
     * @return mixed
     */
    public function getDataset()
    {
        return $this->dataset;
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
     * @param $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }

    /**
     * @return mixed
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param $project
     */
    public function setProject($project)
    {
        $this->project = $project;
    }

    /**
     * @return mixed
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * @param Google_TopicPropertyvalue $property
     */
    public function setProperty(Google_TopicPropertyvalue $property)
    {
        $this->property = $property;
    }

    /**
     * @return mixed
     */
    public function getProperty()
    {
        return $this->property;
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

    /**
     * @param $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}

/**
 * Class Google_TopicValueCitation
 */
class Google_TopicValueCitation extends Google_Model
{
    /**
     * @var
     */
    public $provider;
    /**
     * @var
     */
    public $statement;
    /**
     * @var
     */
    public $uri;

    /**
     * @param $provider
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
    }

    /**
     * @return mixed
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param $statement
     */
    public function setStatement($statement)
    {
        $this->statement = $statement;
    }

    /**
     * @return mixed
     */
    public function getStatement()
    {
        return $this->statement;
    }

    /**
     * @param $uri
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    }

    /**
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }
}
