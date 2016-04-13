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
 * The "cse" collection of methods.
 * Typical usage is:
 *  <code>
 *   $customsearchService = new Google_CustomsearchService(...);
 *   $cse = $customsearchService->cse;
 *  </code>
 */
class Google_CseServiceResource extends Google_ServiceResource
{

    /**
     * Returns metadata about the search performed, metadata about the custom search engine used for the
     * search, and the search results. (cse.list)
     *
     * @param string $q Query
     * @param array $optParams Optional parameters.
     * @return Google_Search
     * @throws Google_Exception
     * @opt_param string c2coff Turns off the translation between zh-CN and zh-TW.
     * @opt_param string cr Country restrict(s).
     * @opt_param string cref The URL of a linked custom search engine
     * @opt_param string cx The custom search engine ID to scope this search query
     * @opt_param string dateRestrict Specifies all search results are from a time period
     * @opt_param string exactTerms Identifies a phrase that all documents in the search results must contain
     * @opt_param string excludeTerms Identifies a word or phrase that should not appear in any documents in the search results
     * @opt_param string fileType Returns images of a specified type. Some of the allowed values are: bmp, gif, png, jpg, svg, pdf, ...
     * @opt_param string filter Controls turning on or off the duplicate content filter.
     * @opt_param string gl Geolocation of end user.
     * @opt_param string googlehost The local Google domain to use to perform the search.
     * @opt_param string highRange Creates a range in form as_nlo value..as_nhi value and attempts to append it to query
     * @opt_param string hl Sets the user interface language.
     * @opt_param string hq Appends the extra query terms to the query.
     * @opt_param string imgColorType Returns black and white, grayscale, or color images: mono, gray, and color.
     * @opt_param string imgDominantColor Returns images of a specific dominant color: yellow, green, teal, blue, purple, pink, white, gray, black and brown.
     * @opt_param string imgSize Returns images of a specified size, where size can be one of: icon, small, medium, large, xlarge, xxlarge, and huge.
     * @opt_param string imgType Returns images of a type, which can be one of: clipart, face, lineart, news, and photo.
     * @opt_param string linkSite Specifies that all search results should contain a link to a particular URL
     * @opt_param string lowRange Creates a range in form as_nlo value..as_nhi value and attempts to append it to query
     * @opt_param string lr The language restriction for the search results
     * @opt_param string num Number of search results to return
     * @opt_param string orTerms Provides additional search terms to check for in a document, where each document in the search results must contain at least one of the additional search terms
     * @opt_param string relatedSite Specifies that all search results should be pages that are related to the specified URL
     * @opt_param string rights Filters based on licensing. Supported values include: cc_publicdomain, cc_attribute, cc_sharealike, cc_noncommercial, cc_nonderived and combinations of these.
     * @opt_param string safe Search safety level
     * @opt_param string searchType Specifies the search type: image.
     * @opt_param string siteSearch Specifies all search results should be pages from a given site
     * @opt_param string siteSearchFilter Controls whether to include or exclude results from the site named in the as_sitesearch parameter
     * @opt_param string sort The sort expression to apply to the results
     * @opt_param string start The index of the first result to return
     */
    public function listCse($q, $optParams = [])
    {
        $params = ['q' => $q];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Search($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Customsearch (v1).
 *
 * <p>
 * Lets you search over a website or collection of websites
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/custom-search/v1/using_rest" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_CustomsearchService extends Google_Service
{
    /**
     * @var Google_CseServiceResource
     */
    public $cse;

    /**
     * Constructs the internal representation of the Customsearch service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'customsearch/';
        $this->version = 'v1';
        $this->serviceName = 'customsearch';

        $client->addService($this->serviceName, $this->version);
        $this->cse = new Google_CseServiceResource($this, $this->serviceName, 'cse', json_decode('{"methods": {"list": {"id": "search.cse.list", "path": "v1", "httpMethod": "GET", "parameters": {"c2coff": {"type": "string", "location": "query"}, "cr": {"type": "string", "location": "query"}, "cref": {"type": "string", "location": "query"}, "cx": {"type": "string", "location": "query"}, "dateRestrict": {"type": "string", "location": "query"}, "exactTerms": {"type": "string", "location": "query"}, "excludeTerms": {"type": "string", "location": "query"}, "fileType": {"type": "string", "location": "query"}, "filter": {"type": "string", "enum": ["0", "1"], "location": "query"}, "gl": {"type": "string", "location": "query"}, "googlehost": {"type": "string", "location": "query"}, "highRange": {"type": "string", "location": "query"}, "hl": {"type": "string", "location": "query"}, "hq": {"type": "string", "location": "query"}, "imgColorType": {"type": "string", "enum": ["color", "gray", "mono"], "location": "query"}, "imgDominantColor": {"type": "string", "enum": ["black", "blue", "brown", "gray", "green", "pink", "purple", "teal", "white", "yellow"], "location": "query"}, "imgSize": {"type": "string", "enum": ["huge", "icon", "large", "medium", "small", "xlarge", "xxlarge"], "location": "query"}, "imgType": {"type": "string", "enum": ["clipart", "face", "lineart", "news", "photo"], "location": "query"}, "linkSite": {"type": "string", "location": "query"}, "lowRange": {"type": "string", "location": "query"}, "lr": {"type": "string", "enum": ["lang_ar", "lang_bg", "lang_ca", "lang_cs", "lang_da", "lang_de", "lang_el", "lang_en", "lang_es", "lang_et", "lang_fi", "lang_fr", "lang_hr", "lang_hu", "lang_id", "lang_is", "lang_it", "lang_iw", "lang_ja", "lang_ko", "lang_lt", "lang_lv", "lang_nl", "lang_no", "lang_pl", "lang_pt", "lang_ro", "lang_ru", "lang_sk", "lang_sl", "lang_sr", "lang_sv", "lang_tr", "lang_zh-CN", "lang_zh-TW"], "location": "query"}, "num": {"type": "integer", "default": "10", "format": "uint32", "location": "query"}, "orTerms": {"type": "string", "location": "query"}, "q": {"type": "string", "required": true, "location": "query"}, "relatedSite": {"type": "string", "location": "query"}, "rights": {"type": "string", "location": "query"}, "safe": {"type": "string", "default": "off", "enum": ["high", "medium", "off"], "location": "query"}, "searchType": {"type": "string", "enum": ["image"], "location": "query"}, "siteSearch": {"type": "string", "location": "query"}, "siteSearchFilter": {"type": "string", "enum": ["e", "i"], "location": "query"}, "sort": {"type": "string", "location": "query"}, "start": {"type": "integer", "format": "uint32", "location": "query"}}, "response": {"$ref": "Search"}}}}', true));

    }
}


/**
 * Class Google_Context
 */
class Google_Context extends Google_Model
{
    /**
     * @var string
     */
    protected $__facetsType = 'Google_ContextFacets';
    /**
     * @var string
     */
    protected $__facetsDataType = 'array';
    /**
     * @var
     */
    public $facets;
    /**
     * @var
     */
    public $title;

    /**
     * @param $facets
     * @throws Google_Exception
     */
    public function setFacets(/* array(Google_ContextFacets) */
        $facets)
    {
        $this->assertIsArray($facets, 'Google_ContextFacets', __METHOD__);
        $this->facets = $facets;
    }

    /**
     * @return mixed
     */
    public function getFacets()
    {
        return $this->facets;
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
}

/**
 * Class Google_ContextFacets
 */
class Google_ContextFacets extends Google_Model
{
    /**
     * @var
     */
    public $anchor;
    /**
     * @var
     */
    public $label;

    /**
     * @param $anchor
     */
    public function setAnchor($anchor)
    {
        $this->anchor = $anchor;
    }

    /**
     * @return mixed
     */
    public function getAnchor()
    {
        return $this->anchor;
    }

    /**
     * @param $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }
}

/**
 * Class Google_Promotion
 */
class Google_Promotion extends Google_Model
{
    /**
     * @var string
     */
    protected $__bodyLinesType = 'Google_PromotionBodyLines';
    /**
     * @var string
     */
    protected $__bodyLinesDataType = 'array';
    /**
     * @var
     */
    public $bodyLines;
    /**
     * @var
     */
    public $displayLink;
    /**
     * @var
     */
    public $htmlTitle;
    /**
     * @var string
     */
    protected $__imageType = 'Google_PromotionImage';
    /**
     * @var string
     */
    protected $__imageDataType = '';
    /**
     * @var
     */
    public $image;
    /**
     * @var
     */
    public $link;
    /**
     * @var
     */
    public $title;

    /**
     * @param $bodyLines
     * @throws Google_Exception
     */
    public function setBodyLines(/* array(Google_PromotionBodyLines) */
        $bodyLines)
    {
        $this->assertIsArray($bodyLines, 'Google_PromotionBodyLines', __METHOD__);
        $this->bodyLines = $bodyLines;
    }

    /**
     * @return mixed
     */
    public function getBodyLines()
    {
        return $this->bodyLines;
    }

    /**
     * @param $displayLink
     */
    public function setDisplayLink($displayLink)
    {
        $this->displayLink = $displayLink;
    }

    /**
     * @return mixed
     */
    public function getDisplayLink()
    {
        return $this->displayLink;
    }

    /**
     * @param $htmlTitle
     */
    public function setHtmlTitle($htmlTitle)
    {
        $this->htmlTitle = $htmlTitle;
    }

    /**
     * @return mixed
     */
    public function getHtmlTitle()
    {
        return $this->htmlTitle;
    }

    /**
     * @param Google_PromotionImage $image
     */
    public function setImage(Google_PromotionImage $image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
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
}

/**
 * Class Google_PromotionBodyLines
 */
class Google_PromotionBodyLines extends Google_Model
{
    /**
     * @var
     */
    public $htmlTitle;
    /**
     * @var
     */
    public $link;
    /**
     * @var
     */
    public $title;
    /**
     * @var
     */
    public $url;

    /**
     * @param $htmlTitle
     */
    public function setHtmlTitle($htmlTitle)
    {
        $this->htmlTitle = $htmlTitle;
    }

    /**
     * @return mixed
     */
    public function getHtmlTitle()
    {
        return $this->htmlTitle;
    }

    /**
     * @param $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
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
 * Class Google_PromotionImage
 */
class Google_PromotionImage extends Google_Model
{
    /**
     * @var
     */
    public $height;
    /**
     * @var
     */
    public $source;
    /**
     * @var
     */
    public $width;

    /**
     * @param $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }
}

/**
 * Class Google_Query
 */
class Google_Query extends Google_Model
{
    /**
     * @var
     */
    public $count;
    /**
     * @var
     */
    public $cr;
    /**
     * @var
     */
    public $cref;
    /**
     * @var
     */
    public $cx;
    /**
     * @var
     */
    public $dateRestrict;
    /**
     * @var
     */
    public $disableCnTwTranslation;
    /**
     * @var
     */
    public $exactTerms;
    /**
     * @var
     */
    public $excludeTerms;
    /**
     * @var
     */
    public $fileType;
    /**
     * @var
     */
    public $filter;
    /**
     * @var
     */
    public $gl;
    /**
     * @var
     */
    public $googleHost;
    /**
     * @var
     */
    public $highRange;
    /**
     * @var
     */
    public $hl;
    /**
     * @var
     */
    public $hq;
    /**
     * @var
     */
    public $imgColorType;
    /**
     * @var
     */
    public $imgDominantColor;
    /**
     * @var
     */
    public $imgSize;
    /**
     * @var
     */
    public $imgType;
    /**
     * @var
     */
    public $inputEncoding;
    /**
     * @var
     */
    public $language;
    /**
     * @var
     */
    public $linkSite;
    /**
     * @var
     */
    public $lowRange;
    /**
     * @var
     */
    public $orTerms;
    /**
     * @var
     */
    public $outputEncoding;
    /**
     * @var
     */
    public $relatedSite;
    /**
     * @var
     */
    public $rights;
    /**
     * @var
     */
    public $safe;
    /**
     * @var
     */
    public $searchTerms;
    /**
     * @var
     */
    public $searchType;
    /**
     * @var
     */
    public $siteSearch;
    /**
     * @var
     */
    public $siteSearchFilter;
    /**
     * @var
     */
    public $sort;
    /**
     * @var
     */
    public $startIndex;
    /**
     * @var
     */
    public $startPage;
    /**
     * @var
     */
    public $title;
    /**
     * @var
     */
    public $totalResults;

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
     * @param $cr
     */
    public function setCr($cr)
    {
        $this->cr = $cr;
    }

    /**
     * @return mixed
     */
    public function getCr()
    {
        return $this->cr;
    }

    /**
     * @param $cref
     */
    public function setCref($cref)
    {
        $this->cref = $cref;
    }

    /**
     * @return mixed
     */
    public function getCref()
    {
        return $this->cref;
    }

    /**
     * @param $cx
     */
    public function setCx($cx)
    {
        $this->cx = $cx;
    }

    /**
     * @return mixed
     */
    public function getCx()
    {
        return $this->cx;
    }

    /**
     * @param $dateRestrict
     */
    public function setDateRestrict($dateRestrict)
    {
        $this->dateRestrict = $dateRestrict;
    }

    /**
     * @return mixed
     */
    public function getDateRestrict()
    {
        return $this->dateRestrict;
    }

    /**
     * @param $disableCnTwTranslation
     */
    public function setDisableCnTwTranslation($disableCnTwTranslation)
    {
        $this->disableCnTwTranslation = $disableCnTwTranslation;
    }

    /**
     * @return mixed
     */
    public function getDisableCnTwTranslation()
    {
        return $this->disableCnTwTranslation;
    }

    /**
     * @param $exactTerms
     */
    public function setExactTerms($exactTerms)
    {
        $this->exactTerms = $exactTerms;
    }

    /**
     * @return mixed
     */
    public function getExactTerms()
    {
        return $this->exactTerms;
    }

    /**
     * @param $excludeTerms
     */
    public function setExcludeTerms($excludeTerms)
    {
        $this->excludeTerms = $excludeTerms;
    }

    /**
     * @return mixed
     */
    public function getExcludeTerms()
    {
        return $this->excludeTerms;
    }

    /**
     * @param $fileType
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
    }

    /**
     * @return mixed
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * @param $filter
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;
    }

    /**
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @param $gl
     */
    public function setGl($gl)
    {
        $this->gl = $gl;
    }

    /**
     * @return mixed
     */
    public function getGl()
    {
        return $this->gl;
    }

    /**
     * @param $googleHost
     */
    public function setGoogleHost($googleHost)
    {
        $this->googleHost = $googleHost;
    }

    /**
     * @return mixed
     */
    public function getGoogleHost()
    {
        return $this->googleHost;
    }

    /**
     * @param $highRange
     */
    public function setHighRange($highRange)
    {
        $this->highRange = $highRange;
    }

    /**
     * @return mixed
     */
    public function getHighRange()
    {
        return $this->highRange;
    }

    /**
     * @param $hl
     */
    public function setHl($hl)
    {
        $this->hl = $hl;
    }

    /**
     * @return mixed
     */
    public function getHl()
    {
        return $this->hl;
    }

    /**
     * @param $hq
     */
    public function setHq($hq)
    {
        $this->hq = $hq;
    }

    /**
     * @return mixed
     */
    public function getHq()
    {
        return $this->hq;
    }

    /**
     * @param $imgColorType
     */
    public function setImgColorType($imgColorType)
    {
        $this->imgColorType = $imgColorType;
    }

    /**
     * @return mixed
     */
    public function getImgColorType()
    {
        return $this->imgColorType;
    }

    /**
     * @param $imgDominantColor
     */
    public function setImgDominantColor($imgDominantColor)
    {
        $this->imgDominantColor = $imgDominantColor;
    }

    /**
     * @return mixed
     */
    public function getImgDominantColor()
    {
        return $this->imgDominantColor;
    }

    /**
     * @param $imgSize
     */
    public function setImgSize($imgSize)
    {
        $this->imgSize = $imgSize;
    }

    /**
     * @return mixed
     */
    public function getImgSize()
    {
        return $this->imgSize;
    }

    /**
     * @param $imgType
     */
    public function setImgType($imgType)
    {
        $this->imgType = $imgType;
    }

    /**
     * @return mixed
     */
    public function getImgType()
    {
        return $this->imgType;
    }

    /**
     * @param $inputEncoding
     */
    public function setInputEncoding($inputEncoding)
    {
        $this->inputEncoding = $inputEncoding;
    }

    /**
     * @return mixed
     */
    public function getInputEncoding()
    {
        return $this->inputEncoding;
    }

    /**
     * @param $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param $linkSite
     */
    public function setLinkSite($linkSite)
    {
        $this->linkSite = $linkSite;
    }

    /**
     * @return mixed
     */
    public function getLinkSite()
    {
        return $this->linkSite;
    }

    /**
     * @param $lowRange
     */
    public function setLowRange($lowRange)
    {
        $this->lowRange = $lowRange;
    }

    /**
     * @return mixed
     */
    public function getLowRange()
    {
        return $this->lowRange;
    }

    /**
     * @param $orTerms
     */
    public function setOrTerms($orTerms)
    {
        $this->orTerms = $orTerms;
    }

    /**
     * @return mixed
     */
    public function getOrTerms()
    {
        return $this->orTerms;
    }

    /**
     * @param $outputEncoding
     */
    public function setOutputEncoding($outputEncoding)
    {
        $this->outputEncoding = $outputEncoding;
    }

    /**
     * @return mixed
     */
    public function getOutputEncoding()
    {
        return $this->outputEncoding;
    }

    /**
     * @param $relatedSite
     */
    public function setRelatedSite($relatedSite)
    {
        $this->relatedSite = $relatedSite;
    }

    /**
     * @return mixed
     */
    public function getRelatedSite()
    {
        return $this->relatedSite;
    }

    /**
     * @param $rights
     */
    public function setRights($rights)
    {
        $this->rights = $rights;
    }

    /**
     * @return mixed
     */
    public function getRights()
    {
        return $this->rights;
    }

    /**
     * @param $safe
     */
    public function setSafe($safe)
    {
        $this->safe = $safe;
    }

    /**
     * @return mixed
     */
    public function getSafe()
    {
        return $this->safe;
    }

    /**
     * @param $searchTerms
     */
    public function setSearchTerms($searchTerms)
    {
        $this->searchTerms = $searchTerms;
    }

    /**
     * @return mixed
     */
    public function getSearchTerms()
    {
        return $this->searchTerms;
    }

    /**
     * @param $searchType
     */
    public function setSearchType($searchType)
    {
        $this->searchType = $searchType;
    }

    /**
     * @return mixed
     */
    public function getSearchType()
    {
        return $this->searchType;
    }

    /**
     * @param $siteSearch
     */
    public function setSiteSearch($siteSearch)
    {
        $this->siteSearch = $siteSearch;
    }

    /**
     * @return mixed
     */
    public function getSiteSearch()
    {
        return $this->siteSearch;
    }

    /**
     * @param $siteSearchFilter
     */
    public function setSiteSearchFilter($siteSearchFilter)
    {
        $this->siteSearchFilter = $siteSearchFilter;
    }

    /**
     * @return mixed
     */
    public function getSiteSearchFilter()
    {
        return $this->siteSearchFilter;
    }

    /**
     * @param $sort
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
    }

    /**
     * @return mixed
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param $startIndex
     */
    public function setStartIndex($startIndex)
    {
        $this->startIndex = $startIndex;
    }

    /**
     * @return mixed
     */
    public function getStartIndex()
    {
        return $this->startIndex;
    }

    /**
     * @param $startPage
     */
    public function setStartPage($startPage)
    {
        $this->startPage = $startPage;
    }

    /**
     * @return mixed
     */
    public function getStartPage()
    {
        return $this->startPage;
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
     * @param $totalResults
     */
    public function setTotalResults($totalResults)
    {
        $this->totalResults = $totalResults;
    }

    /**
     * @return mixed
     */
    public function getTotalResults()
    {
        return $this->totalResults;
    }
}

/**
 * Class Google_Result
 */
class Google_Result extends Google_Model
{
    /**
     * @var
     */
    public $cacheId;
    /**
     * @var
     */
    public $displayLink;
    /**
     * @var
     */
    public $fileFormat;
    /**
     * @var
     */
    public $formattedUrl;
    /**
     * @var
     */
    public $htmlFormattedUrl;
    /**
     * @var
     */
    public $htmlSnippet;
    /**
     * @var
     */
    public $htmlTitle;
    /**
     * @var string
     */
    protected $__imageType = 'Google_ResultImage';
    /**
     * @var string
     */
    protected $__imageDataType = '';
    /**
     * @var
     */
    public $image;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__labelsType = 'Google_ResultLabels';
    /**
     * @var string
     */
    protected $__labelsDataType = 'array';
    /**
     * @var
     */
    public $labels;
    /**
     * @var
     */
    public $link;
    /**
     * @var
     */
    public $mime;
    /**
     * @var
     */
    public $pagemap;
    /**
     * @var
     */
    public $snippet;
    /**
     * @var
     */
    public $title;

    /**
     * @param $cacheId
     */
    public function setCacheId($cacheId)
    {
        $this->cacheId = $cacheId;
    }

    /**
     * @return mixed
     */
    public function getCacheId()
    {
        return $this->cacheId;
    }

    /**
     * @param $displayLink
     */
    public function setDisplayLink($displayLink)
    {
        $this->displayLink = $displayLink;
    }

    /**
     * @return mixed
     */
    public function getDisplayLink()
    {
        return $this->displayLink;
    }

    /**
     * @param $fileFormat
     */
    public function setFileFormat($fileFormat)
    {
        $this->fileFormat = $fileFormat;
    }

    /**
     * @return mixed
     */
    public function getFileFormat()
    {
        return $this->fileFormat;
    }

    /**
     * @param $formattedUrl
     */
    public function setFormattedUrl($formattedUrl)
    {
        $this->formattedUrl = $formattedUrl;
    }

    /**
     * @return mixed
     */
    public function getFormattedUrl()
    {
        return $this->formattedUrl;
    }

    /**
     * @param $htmlFormattedUrl
     */
    public function setHtmlFormattedUrl($htmlFormattedUrl)
    {
        $this->htmlFormattedUrl = $htmlFormattedUrl;
    }

    /**
     * @return mixed
     */
    public function getHtmlFormattedUrl()
    {
        return $this->htmlFormattedUrl;
    }

    /**
     * @param $htmlSnippet
     */
    public function setHtmlSnippet($htmlSnippet)
    {
        $this->htmlSnippet = $htmlSnippet;
    }

    /**
     * @return mixed
     */
    public function getHtmlSnippet()
    {
        return $this->htmlSnippet;
    }

    /**
     * @param $htmlTitle
     */
    public function setHtmlTitle($htmlTitle)
    {
        $this->htmlTitle = $htmlTitle;
    }

    /**
     * @return mixed
     */
    public function getHtmlTitle()
    {
        return $this->htmlTitle;
    }

    /**
     * @param Google_ResultImage $image
     */
    public function setImage(Google_ResultImage $image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
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
     * @param $labels
     * @throws Google_Exception
     */
    public function setLabels(/* array(Google_ResultLabels) */
        $labels)
    {
        $this->assertIsArray($labels, 'Google_ResultLabels', __METHOD__);
        $this->labels = $labels;
    }

    /**
     * @return mixed
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @param $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param $mime
     */
    public function setMime($mime)
    {
        $this->mime = $mime;
    }

    /**
     * @return mixed
     */
    public function getMime()
    {
        return $this->mime;
    }

    /**
     * @param $pagemap
     */
    public function setPagemap($pagemap)
    {
        $this->pagemap = $pagemap;
    }

    /**
     * @return mixed
     */
    public function getPagemap()
    {
        return $this->pagemap;
    }

    /**
     * @param $snippet
     */
    public function setSnippet($snippet)
    {
        $this->snippet = $snippet;
    }

    /**
     * @return mixed
     */
    public function getSnippet()
    {
        return $this->snippet;
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
}

/**
 * Class Google_ResultImage
 */
class Google_ResultImage extends Google_Model
{
    /**
     * @var
     */
    public $byteSize;
    /**
     * @var
     */
    public $contextLink;
    /**
     * @var
     */
    public $height;
    /**
     * @var
     */
    public $thumbnailHeight;
    /**
     * @var
     */
    public $thumbnailLink;
    /**
     * @var
     */
    public $thumbnailWidth;
    /**
     * @var
     */
    public $width;

    /**
     * @param $byteSize
     */
    public function setByteSize($byteSize)
    {
        $this->byteSize = $byteSize;
    }

    /**
     * @return mixed
     */
    public function getByteSize()
    {
        return $this->byteSize;
    }

    /**
     * @param $contextLink
     */
    public function setContextLink($contextLink)
    {
        $this->contextLink = $contextLink;
    }

    /**
     * @return mixed
     */
    public function getContextLink()
    {
        return $this->contextLink;
    }

    /**
     * @param $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param $thumbnailHeight
     */
    public function setThumbnailHeight($thumbnailHeight)
    {
        $this->thumbnailHeight = $thumbnailHeight;
    }

    /**
     * @return mixed
     */
    public function getThumbnailHeight()
    {
        return $this->thumbnailHeight;
    }

    /**
     * @param $thumbnailLink
     */
    public function setThumbnailLink($thumbnailLink)
    {
        $this->thumbnailLink = $thumbnailLink;
    }

    /**
     * @return mixed
     */
    public function getThumbnailLink()
    {
        return $this->thumbnailLink;
    }

    /**
     * @param $thumbnailWidth
     */
    public function setThumbnailWidth($thumbnailWidth)
    {
        $this->thumbnailWidth = $thumbnailWidth;
    }

    /**
     * @return mixed
     */
    public function getThumbnailWidth()
    {
        return $this->thumbnailWidth;
    }

    /**
     * @param $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }
}

/**
 * Class Google_ResultLabels
 */
class Google_ResultLabels extends Google_Model
{
    /**
     * @var
     */
    public $displayName;
    /**
     * @var
     */
    public $name;

    /**
     * @param $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getDisplayName()
    {
        return $this->displayName;
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
 * Class Google_Search
 */
class Google_Search extends Google_Model
{
    /**
     * @var string
     */
    protected $__contextType = 'Google_Context';
    /**
     * @var string
     */
    protected $__contextDataType = '';
    /**
     * @var
     */
    public $context;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Result';
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
     * @var string
     */
    protected $__promotionsType = 'Google_Promotion';
    /**
     * @var string
     */
    protected $__promotionsDataType = 'array';
    /**
     * @var
     */
    public $promotions;
    /**
     * @var string
     */
    protected $__queriesType = 'Google_Query';
    /**
     * @var string
     */
    protected $__queriesDataType = 'map';
    /**
     * @var
     */
    public $queries;
    /**
     * @var string
     */
    protected $__searchInformationType = 'Google_SearchSearchInformation';
    /**
     * @var string
     */
    protected $__searchInformationDataType = '';
    /**
     * @var
     */
    public $searchInformation;
    /**
     * @var string
     */
    protected $__spellingType = 'Google_SearchSpelling';
    /**
     * @var string
     */
    protected $__spellingDataType = '';
    /**
     * @var
     */
    public $spelling;
    /**
     * @var string
     */
    protected $__urlType = 'Google_SearchUrl';
    /**
     * @var string
     */
    protected $__urlDataType = '';
    /**
     * @var
     */
    public $url;

    /**
     * @param Google_Context $context
     */
    public function setContext(Google_Context $context)
    {
        $this->context = $context;
    }

    /**
     * @return mixed
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Result) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Result', __METHOD__);
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
     * @param $promotions
     * @throws Google_Exception
     */
    public function setPromotions(/* array(Google_Promotion) */
        $promotions)
    {
        $this->assertIsArray($promotions, 'Google_Promotion', __METHOD__);
        $this->promotions = $promotions;
    }

    /**
     * @return mixed
     */
    public function getPromotions()
    {
        return $this->promotions;
    }

    /**
     * @param Google_Query $queries
     */
    public function setQueries(Google_Query $queries)
    {
        $this->queries = $queries;
    }

    /**
     * @return mixed
     */
    public function getQueries()
    {
        return $this->queries;
    }

    /**
     * @param Google_SearchSearchInformation $searchInformation
     */
    public function setSearchInformation(Google_SearchSearchInformation $searchInformation)
    {
        $this->searchInformation = $searchInformation;
    }

    /**
     * @return mixed
     */
    public function getSearchInformation()
    {
        return $this->searchInformation;
    }

    /**
     * @param Google_SearchSpelling $spelling
     */
    public function setSpelling(Google_SearchSpelling $spelling)
    {
        $this->spelling = $spelling;
    }

    /**
     * @return mixed
     */
    public function getSpelling()
    {
        return $this->spelling;
    }

    /**
     * @param Google_SearchUrl $url
     */
    public function setUrl(Google_SearchUrl $url)
    {
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }
}

/**
 * Class Google_SearchSearchInformation
 */
class Google_SearchSearchInformation extends Google_Model
{
    /**
     * @var
     */
    public $formattedSearchTime;
    /**
     * @var
     */
    public $formattedTotalResults;
    /**
     * @var
     */
    public $searchTime;
    /**
     * @var
     */
    public $totalResults;

    /**
     * @param $formattedSearchTime
     */
    public function setFormattedSearchTime($formattedSearchTime)
    {
        $this->formattedSearchTime = $formattedSearchTime;
    }

    /**
     * @return mixed
     */
    public function getFormattedSearchTime()
    {
        return $this->formattedSearchTime;
    }

    /**
     * @param $formattedTotalResults
     */
    public function setFormattedTotalResults($formattedTotalResults)
    {
        $this->formattedTotalResults = $formattedTotalResults;
    }

    /**
     * @return mixed
     */
    public function getFormattedTotalResults()
    {
        return $this->formattedTotalResults;
    }

    /**
     * @param $searchTime
     */
    public function setSearchTime($searchTime)
    {
        $this->searchTime = $searchTime;
    }

    /**
     * @return mixed
     */
    public function getSearchTime()
    {
        return $this->searchTime;
    }

    /**
     * @param $totalResults
     */
    public function setTotalResults($totalResults)
    {
        $this->totalResults = $totalResults;
    }

    /**
     * @return mixed
     */
    public function getTotalResults()
    {
        return $this->totalResults;
    }
}

/**
 * Class Google_SearchSpelling
 */
class Google_SearchSpelling extends Google_Model
{
    /**
     * @var
     */
    public $correctedQuery;
    /**
     * @var
     */
    public $htmlCorrectedQuery;

    /**
     * @param $correctedQuery
     */
    public function setCorrectedQuery($correctedQuery)
    {
        $this->correctedQuery = $correctedQuery;
    }

    /**
     * @return mixed
     */
    public function getCorrectedQuery()
    {
        return $this->correctedQuery;
    }

    /**
     * @param $htmlCorrectedQuery
     */
    public function setHtmlCorrectedQuery($htmlCorrectedQuery)
    {
        $this->htmlCorrectedQuery = $htmlCorrectedQuery;
    }

    /**
     * @return mixed
     */
    public function getHtmlCorrectedQuery()
    {
        return $this->htmlCorrectedQuery;
    }
}

/**
 * Class Google_SearchUrl
 */
class Google_SearchUrl extends Google_Model
{
    /**
     * @var
     */
    public $template;
    /**
     * @var
     */
    public $type;

    /**
     * @param $template
     */
    public function setTemplate($template)
    {
        $this->template = $template;
    }

    /**
     * @return mixed
     */
    public function getTemplate()
    {
        return $this->template;
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
