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
 * The "pagespeedapi" collection of methods.
 * Typical usage is:
 *  <code>
 *   $pagespeedonlineService = new Google_PagespeedonlineService(...);
 *   $pagespeedapi = $pagespeedonlineService->pagespeedapi;
 *  </code>
 */
class Google_PagespeedapiServiceResource extends Google_ServiceResource
{

    /**
     * Runs Page Speed analysis on the page at the specified URL, and returns a Page Speed score, a list
     * of suggestions to make that page faster, and other information. (pagespeedapi.runpagespeed)
     *
     * @param string $url The URL to fetch and analyze
     * @param array $optParams Optional parameters.
     * @return Google_Result
     * @throws Google_Exception
     * @opt_param string locale The locale used to localize formatted results
     * @opt_param string rule A Page Speed rule to run; if none are given, all rules are run
     * @opt_param bool screenshot Indicates if binary data containing a screenshot should be included
     * @opt_param string strategy The analysis strategy to use
     */
    public function runpagespeed($url, $optParams = [])
    {
        $params = ['url' => $url];
        $params = array_merge($params, $optParams);
        $data = $this->__call('runpagespeed', [$params]);
        if ($this->useObjects()) {
            return new Google_Result($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Pagespeedonline (v1).
 *
 * <p>
 * Lets you analyze the performance of a web page and get tailored suggestions to make that page faster.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/speed/docs/insights/v1/getting_started" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_PagespeedonlineService extends Google_Service
{
    /**
     * @var Google_PagespeedapiServiceResource
     */
    public $pagespeedapi;

    /**
     * Constructs the internal representation of the Pagespeedonline service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'pagespeedonline/v1/';
        $this->version = 'v1';
        $this->serviceName = 'pagespeedonline';

        $client->addService($this->serviceName, $this->version);
        $this->pagespeedapi = new Google_PagespeedapiServiceResource($this, $this->serviceName, 'pagespeedapi', json_decode('{"methods": {"runpagespeed": {"id": "pagespeedonline.pagespeedapi.runpagespeed", "path": "runPagespeed", "httpMethod": "GET", "parameters": {"locale": {"type": "string", "location": "query"}, "rule": {"type": "string", "repeated": true, "location": "query"}, "screenshot": {"type": "boolean", "default": "false", "location": "query"}, "strategy": {"type": "string", "enum": ["desktop", "mobile"], "location": "query"}, "url": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "Result"}}}}', true));

    }
}


/**
 * Class Google_Result
 */
class Google_Result extends Google_Model
{
    /**
     * @var string
     */
    protected $__formattedResultsType = 'Google_ResultFormattedResults';
    /**
     * @var string
     */
    protected $__formattedResultsDataType = '';
    /**
     * @var
     */
    public $formattedResults;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $invalidRules;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__pageStatsType = 'Google_ResultPageStats';
    /**
     * @var string
     */
    protected $__pageStatsDataType = '';
    /**
     * @var
     */
    public $pageStats;
    /**
     * @var
     */
    public $responseCode;
    /**
     * @var
     */
    public $score;
    /**
     * @var string
     */
    protected $__screenshotType = 'Google_ResultScreenshot';
    /**
     * @var string
     */
    protected $__screenshotDataType = '';
    /**
     * @var
     */
    public $screenshot;
    /**
     * @var
     */
    public $title;
    /**
     * @var string
     */
    protected $__versionType = 'Google_ResultVersion';
    /**
     * @var string
     */
    protected $__versionDataType = '';
    /**
     * @var
     */
    public $version;

    /**
     * @param Google_ResultFormattedResults $formattedResults
     */
    public function setFormattedResults(Google_ResultFormattedResults $formattedResults)
    {
        $this->formattedResults = $formattedResults;
    }

    /**
     * @return mixed
     */
    public function getFormattedResults()
    {
        return $this->formattedResults;
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
     * @param $invalidRules
     * @throws Google_Exception
     */
    public function setInvalidRules(/* array(Google_string) */
        $invalidRules)
    {
        $this->assertIsArray($invalidRules, 'Google_string', __METHOD__);
        $this->invalidRules = $invalidRules;
    }

    /**
     * @return mixed
     */
    public function getInvalidRules()
    {
        return $this->invalidRules;
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
     * @param Google_ResultPageStats $pageStats
     */
    public function setPageStats(Google_ResultPageStats $pageStats)
    {
        $this->pageStats = $pageStats;
    }

    /**
     * @return mixed
     */
    public function getPageStats()
    {
        return $this->pageStats;
    }

    /**
     * @param $responseCode
     */
    public function setResponseCode($responseCode)
    {
        $this->responseCode = $responseCode;
    }

    /**
     * @return mixed
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * @param $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param Google_ResultScreenshot $screenshot
     */
    public function setScreenshot(Google_ResultScreenshot $screenshot)
    {
        $this->screenshot = $screenshot;
    }

    /**
     * @return mixed
     */
    public function getScreenshot()
    {
        return $this->screenshot;
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
     * @param Google_ResultVersion $version
     */
    public function setVersion(Google_ResultVersion $version)
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
 * Class Google_ResultFormattedResults
 */
class Google_ResultFormattedResults extends Google_Model
{
    /**
     * @var
     */
    public $locale;
    /**
     * @var string
     */
    protected $__ruleResultsType = 'Google_ResultFormattedResultsRuleResultsElement';
    /**
     * @var string
     */
    protected $__ruleResultsDataType = 'map';
    /**
     * @var
     */
    public $ruleResults;

    /**
     * @param $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    /**
     * @return mixed
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param Google_ResultFormattedResultsRuleResultsElement $ruleResults
     */
    public function setRuleResults(Google_ResultFormattedResultsRuleResultsElement $ruleResults)
    {
        $this->ruleResults = $ruleResults;
    }

    /**
     * @return mixed
     */
    public function getRuleResults()
    {
        return $this->ruleResults;
    }
}

/**
 * Class Google_ResultFormattedResultsRuleResultsElement
 */
class Google_ResultFormattedResultsRuleResultsElement extends Google_Model
{
    /**
     * @var
     */
    public $localizedRuleName;
    /**
     * @var
     */
    public $ruleImpact;
    /**
     * @var
     */
    public $ruleScore;
    /**
     * @var string
     */
    protected $__urlBlocksType = 'Google_ResultFormattedResultsRuleResultsElementUrlBlocks';
    /**
     * @var string
     */
    protected $__urlBlocksDataType = 'array';
    /**
     * @var
     */
    public $urlBlocks;

    /**
     * @param $localizedRuleName
     */
    public function setLocalizedRuleName($localizedRuleName)
    {
        $this->localizedRuleName = $localizedRuleName;
    }

    /**
     * @return mixed
     */
    public function getLocalizedRuleName()
    {
        return $this->localizedRuleName;
    }

    /**
     * @param $ruleImpact
     */
    public function setRuleImpact($ruleImpact)
    {
        $this->ruleImpact = $ruleImpact;
    }

    /**
     * @return mixed
     */
    public function getRuleImpact()
    {
        return $this->ruleImpact;
    }

    /**
     * @param $ruleScore
     */
    public function setRuleScore($ruleScore)
    {
        $this->ruleScore = $ruleScore;
    }

    /**
     * @return mixed
     */
    public function getRuleScore()
    {
        return $this->ruleScore;
    }

    /**
     * @param $urlBlocks
     * @throws Google_Exception
     */
    public function setUrlBlocks(/* array(Google_ResultFormattedResultsRuleResultsElementUrlBlocks) */
        $urlBlocks)
    {
        $this->assertIsArray($urlBlocks, 'Google_ResultFormattedResultsRuleResultsElementUrlBlocks', __METHOD__);
        $this->urlBlocks = $urlBlocks;
    }

    /**
     * @return mixed
     */
    public function getUrlBlocks()
    {
        return $this->urlBlocks;
    }
}

/**
 * Class Google_ResultFormattedResultsRuleResultsElementUrlBlocks
 */
class Google_ResultFormattedResultsRuleResultsElementUrlBlocks extends Google_Model
{
    /**
     * @var string
     */
    protected $__headerType = 'Google_ResultFormattedResultsRuleResultsElementUrlBlocksHeader';
    /**
     * @var string
     */
    protected $__headerDataType = '';
    /**
     * @var
     */
    public $header;
    /**
     * @var string
     */
    protected $__urlsType = 'Google_ResultFormattedResultsRuleResultsElementUrlBlocksUrls';
    /**
     * @var string
     */
    protected $__urlsDataType = 'array';
    /**
     * @var
     */
    public $urls;

    /**
     * @param Google_ResultFormattedResultsRuleResultsElementUrlBlocksHeader $header
     */
    public function setHeader(Google_ResultFormattedResultsRuleResultsElementUrlBlocksHeader $header)
    {
        $this->header = $header;
    }

    /**
     * @return mixed
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param $urls
     * @throws Google_Exception
     */
    public function setUrls(/* array(Google_ResultFormattedResultsRuleResultsElementUrlBlocksUrls) */
        $urls)
    {
        $this->assertIsArray($urls, 'Google_ResultFormattedResultsRuleResultsElementUrlBlocksUrls', __METHOD__);
        $this->urls = $urls;
    }

    /**
     * @return mixed
     */
    public function getUrls()
    {
        return $this->urls;
    }
}

/**
 * Class Google_ResultFormattedResultsRuleResultsElementUrlBlocksHeader
 */
class Google_ResultFormattedResultsRuleResultsElementUrlBlocksHeader extends Google_Model
{
    /**
     * @var string
     */
    protected $__argsType = 'Google_ResultFormattedResultsRuleResultsElementUrlBlocksHeaderArgs';
    /**
     * @var string
     */
    protected $__argsDataType = 'array';
    /**
     * @var
     */
    public $args;
    /**
     * @var
     */
    public $format;

    /**
     * @param $args
     * @throws Google_Exception
     */
    public function setArgs(/* array(Google_ResultFormattedResultsRuleResultsElementUrlBlocksHeaderArgs) */
        $args)
    {
        $this->assertIsArray($args, 'Google_ResultFormattedResultsRuleResultsElementUrlBlocksHeaderArgs', __METHOD__);
        $this->args = $args;
    }

    /**
     * @return mixed
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * @param $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

    /**
     * @return mixed
     */
    public function getFormat()
    {
        return $this->format;
    }
}

/**
 * Class Google_ResultFormattedResultsRuleResultsElementUrlBlocksHeaderArgs
 */
class Google_ResultFormattedResultsRuleResultsElementUrlBlocksHeaderArgs extends Google_Model
{
    /**
     * @var
     */
    public $type;
    /**
     * @var
     */
    public $value;

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
 * Class Google_ResultFormattedResultsRuleResultsElementUrlBlocksUrls
 */
class Google_ResultFormattedResultsRuleResultsElementUrlBlocksUrls extends Google_Model
{
    /**
     * @var string
     */
    protected $__detailsType = 'Google_ResultFormattedResultsRuleResultsElementUrlBlocksUrlsDetails';
    /**
     * @var string
     */
    protected $__detailsDataType = 'array';
    /**
     * @var
     */
    public $details;
    /**
     * @var string
     */
    protected $__resultType = 'Google_ResultFormattedResultsRuleResultsElementUrlBlocksUrlsResult';
    /**
     * @var string
     */
    protected $__resultDataType = '';
    /**
     * @var
     */
    public $result;

    /**
     * @param $details
     * @throws Google_Exception
     */
    public function setDetails(/* array(Google_ResultFormattedResultsRuleResultsElementUrlBlocksUrlsDetails) */
        $details)
    {
        $this->assertIsArray($details, 'Google_ResultFormattedResultsRuleResultsElementUrlBlocksUrlsDetails', __METHOD__);
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
     * @param Google_ResultFormattedResultsRuleResultsElementUrlBlocksUrlsResult $result
     */
    public function setResult(Google_ResultFormattedResultsRuleResultsElementUrlBlocksUrlsResult $result)
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
 * Class Google_ResultFormattedResultsRuleResultsElementUrlBlocksUrlsDetails
 */
class Google_ResultFormattedResultsRuleResultsElementUrlBlocksUrlsDetails extends Google_Model
{
    /**
     * @var string
     */
    protected $__argsType = 'Google_ResultFormattedResultsRuleResultsElementUrlBlocksUrlsDetailsArgs';
    /**
     * @var string
     */
    protected $__argsDataType = 'array';
    /**
     * @var
     */
    public $args;
    /**
     * @var
     */
    public $format;

    /**
     * @param $args
     * @throws Google_Exception
     */
    public function setArgs(/* array(Google_ResultFormattedResultsRuleResultsElementUrlBlocksUrlsDetailsArgs) */
        $args)
    {
        $this->assertIsArray($args, 'Google_ResultFormattedResultsRuleResultsElementUrlBlocksUrlsDetailsArgs', __METHOD__);
        $this->args = $args;
    }

    /**
     * @return mixed
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * @param $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

    /**
     * @return mixed
     */
    public function getFormat()
    {
        return $this->format;
    }
}

/**
 * Class Google_ResultFormattedResultsRuleResultsElementUrlBlocksUrlsDetailsArgs
 */
class Google_ResultFormattedResultsRuleResultsElementUrlBlocksUrlsDetailsArgs extends Google_Model
{
    /**
     * @var
     */
    public $type;
    /**
     * @var
     */
    public $value;

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
 * Class Google_ResultFormattedResultsRuleResultsElementUrlBlocksUrlsResult
 */
class Google_ResultFormattedResultsRuleResultsElementUrlBlocksUrlsResult extends Google_Model
{
    /**
     * @var string
     */
    protected $__argsType = 'Google_ResultFormattedResultsRuleResultsElementUrlBlocksUrlsResultArgs';
    /**
     * @var string
     */
    protected $__argsDataType = 'array';
    /**
     * @var
     */
    public $args;
    /**
     * @var
     */
    public $format;

    /**
     * @param $args
     * @throws Google_Exception
     */
    public function setArgs(/* array(Google_ResultFormattedResultsRuleResultsElementUrlBlocksUrlsResultArgs) */
        $args)
    {
        $this->assertIsArray($args, 'Google_ResultFormattedResultsRuleResultsElementUrlBlocksUrlsResultArgs', __METHOD__);
        $this->args = $args;
    }

    /**
     * @return mixed
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * @param $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

    /**
     * @return mixed
     */
    public function getFormat()
    {
        return $this->format;
    }
}

/**
 * Class Google_ResultFormattedResultsRuleResultsElementUrlBlocksUrlsResultArgs
 */
class Google_ResultFormattedResultsRuleResultsElementUrlBlocksUrlsResultArgs extends Google_Model
{
    /**
     * @var
     */
    public $type;
    /**
     * @var
     */
    public $value;

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
 * Class Google_ResultPageStats
 */
class Google_ResultPageStats extends Google_Model
{
    /**
     * @var
     */
    public $cssResponseBytes;
    /**
     * @var
     */
    public $flashResponseBytes;
    /**
     * @var
     */
    public $htmlResponseBytes;
    /**
     * @var
     */
    public $imageResponseBytes;
    /**
     * @var
     */
    public $javascriptResponseBytes;
    /**
     * @var
     */
    public $numberCssResources;
    /**
     * @var
     */
    public $numberHosts;
    /**
     * @var
     */
    public $numberJsResources;
    /**
     * @var
     */
    public $numberResources;
    /**
     * @var
     */
    public $numberStaticResources;
    /**
     * @var
     */
    public $otherResponseBytes;
    /**
     * @var
     */
    public $textResponseBytes;
    /**
     * @var
     */
    public $totalRequestBytes;

    /**
     * @param $cssResponseBytes
     */
    public function setCssResponseBytes($cssResponseBytes)
    {
        $this->cssResponseBytes = $cssResponseBytes;
    }

    /**
     * @return mixed
     */
    public function getCssResponseBytes()
    {
        return $this->cssResponseBytes;
    }

    /**
     * @param $flashResponseBytes
     */
    public function setFlashResponseBytes($flashResponseBytes)
    {
        $this->flashResponseBytes = $flashResponseBytes;
    }

    /**
     * @return mixed
     */
    public function getFlashResponseBytes()
    {
        return $this->flashResponseBytes;
    }

    /**
     * @param $htmlResponseBytes
     */
    public function setHtmlResponseBytes($htmlResponseBytes)
    {
        $this->htmlResponseBytes = $htmlResponseBytes;
    }

    /**
     * @return mixed
     */
    public function getHtmlResponseBytes()
    {
        return $this->htmlResponseBytes;
    }

    /**
     * @param $imageResponseBytes
     */
    public function setImageResponseBytes($imageResponseBytes)
    {
        $this->imageResponseBytes = $imageResponseBytes;
    }

    /**
     * @return mixed
     */
    public function getImageResponseBytes()
    {
        return $this->imageResponseBytes;
    }

    /**
     * @param $javascriptResponseBytes
     */
    public function setJavascriptResponseBytes($javascriptResponseBytes)
    {
        $this->javascriptResponseBytes = $javascriptResponseBytes;
    }

    /**
     * @return mixed
     */
    public function getJavascriptResponseBytes()
    {
        return $this->javascriptResponseBytes;
    }

    /**
     * @param $numberCssResources
     */
    public function setNumberCssResources($numberCssResources)
    {
        $this->numberCssResources = $numberCssResources;
    }

    /**
     * @return mixed
     */
    public function getNumberCssResources()
    {
        return $this->numberCssResources;
    }

    /**
     * @param $numberHosts
     */
    public function setNumberHosts($numberHosts)
    {
        $this->numberHosts = $numberHosts;
    }

    /**
     * @return mixed
     */
    public function getNumberHosts()
    {
        return $this->numberHosts;
    }

    /**
     * @param $numberJsResources
     */
    public function setNumberJsResources($numberJsResources)
    {
        $this->numberJsResources = $numberJsResources;
    }

    /**
     * @return mixed
     */
    public function getNumberJsResources()
    {
        return $this->numberJsResources;
    }

    /**
     * @param $numberResources
     */
    public function setNumberResources($numberResources)
    {
        $this->numberResources = $numberResources;
    }

    /**
     * @return mixed
     */
    public function getNumberResources()
    {
        return $this->numberResources;
    }

    /**
     * @param $numberStaticResources
     */
    public function setNumberStaticResources($numberStaticResources)
    {
        $this->numberStaticResources = $numberStaticResources;
    }

    /**
     * @return mixed
     */
    public function getNumberStaticResources()
    {
        return $this->numberStaticResources;
    }

    /**
     * @param $otherResponseBytes
     */
    public function setOtherResponseBytes($otherResponseBytes)
    {
        $this->otherResponseBytes = $otherResponseBytes;
    }

    /**
     * @return mixed
     */
    public function getOtherResponseBytes()
    {
        return $this->otherResponseBytes;
    }

    /**
     * @param $textResponseBytes
     */
    public function setTextResponseBytes($textResponseBytes)
    {
        $this->textResponseBytes = $textResponseBytes;
    }

    /**
     * @return mixed
     */
    public function getTextResponseBytes()
    {
        return $this->textResponseBytes;
    }

    /**
     * @param $totalRequestBytes
     */
    public function setTotalRequestBytes($totalRequestBytes)
    {
        $this->totalRequestBytes = $totalRequestBytes;
    }

    /**
     * @return mixed
     */
    public function getTotalRequestBytes()
    {
        return $this->totalRequestBytes;
    }
}

/**
 * Class Google_ResultScreenshot
 */
class Google_ResultScreenshot extends Google_Model
{
    /**
     * @var
     */
    public $data;
    /**
     * @var
     */
    public $height;
    /**
     * @var
     */
    public $mime_type;
    /**
     * @var
     */
    public $width;

    /**
     * @param $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
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
     * @param $mime_type
     */
    public function setMime_type($mime_type)
    {
        $this->mime_type = $mime_type;
    }

    /**
     * @return mixed
     */
    public function getMime_type()
    {
        return $this->mime_type;
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
 * Class Google_ResultVersion
 */
class Google_ResultVersion extends Google_Model
{
    /**
     * @var
     */
    public $major;
    /**
     * @var
     */
    public $minor;

    /**
     * @param $major
     */
    public function setMajor($major)
    {
        $this->major = $major;
    }

    /**
     * @return mixed
     */
    public function getMajor()
    {
        return $this->major;
    }

    /**
     * @param $minor
     */
    public function setMinor($minor)
    {
        $this->minor = $minor;
    }

    /**
     * @return mixed
     */
    public function getMinor()
    {
        return $this->minor;
    }
}
