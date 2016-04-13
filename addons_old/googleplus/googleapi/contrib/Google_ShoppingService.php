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
 * The "products" collection of methods.
 * Typical usage is:
 *  <code>
 *   $shoppingService = new Google_ShoppingService(...);
 *   $products = $shoppingService->products;
 *  </code>
 */
class Google_ProductsServiceResource extends Google_ServiceResource
{

    /**
     * Returns a single product (products.get)
     *
     * @param string $source Query source
     * @param string $accountId Merchant center account id
     * @param string $productIdType Type of productId
     * @param string $productId Id of product
     * @param array $optParams Optional parameters.
     * @return Google_Product
     * @throws Google_Exception
     * @opt_param string attributeFilter Comma separated list of attributes to return
     * @opt_param bool categories.enabled Whether to return category information
     * @opt_param string categories.include Category specification
     * @opt_param bool categories.useGcsConfig This parameter is currently ignored
     * @opt_param string location Location used to determine tax and shipping
     * @opt_param bool recommendations.enabled Whether to return recommendation information
     * @opt_param string recommendations.include Recommendation specification
     * @opt_param bool recommendations.useGcsConfig This parameter is currently ignored
     * @opt_param string taxonomy Merchant taxonomy
     * @opt_param string thumbnails Thumbnail specification
     */
    public function get($source, $accountId, $productIdType, $productId, $optParams = [])
    {
        $params = ['source' => $source, 'accountId' => $accountId, 'productIdType' => $productIdType, 'productId' => $productId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Product($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns a list of products and content modules (products.list)
     *
     * @param string $source Query source
     * @param array $optParams Optional parameters.
     * @return Google_Products
     * @throws Google_Exception
     * @opt_param string attributeFilter Comma separated list of attributes to return
     * @opt_param string availability Comma separated list of availabilities (outOfStock, limited, inStock, backOrder, preOrder, onDisplayToOrder) to return
     * @opt_param string boostBy Boosting specification
     * @opt_param bool categories.enabled Whether to return category information
     * @opt_param string categories.include Category specification
     * @opt_param bool categories.useGcsConfig This parameter is currently ignored
     * @opt_param string categoryRecommendations.category Category for which to retrieve recommendations
     * @opt_param bool categoryRecommendations.enabled Whether to return category recommendation information
     * @opt_param string categoryRecommendations.include Category recommendation specification
     * @opt_param bool categoryRecommendations.useGcsConfig This parameter is currently ignored
     * @opt_param string channels Channels specification
     * @opt_param bool clickTracking Whether to add a click tracking parameter to offer URLs
     * @opt_param string country Country restriction (ISO 3166)
     * @opt_param string crowdBy Crowding specification
     * @opt_param string currency Currency restriction (ISO 4217)
     * @opt_param bool extras.enabled Whether to return extra information.
     * @opt_param string extras.info What extra information to return.
     * @opt_param string facets.discover Facets to discover
     * @opt_param bool facets.enabled Whether to return facet information
     * @opt_param string facets.include Facets to include (applies when useGcsConfig == false)
     * @opt_param bool facets.includeEmptyBuckets Return empty facet buckets.
     * @opt_param bool facets.useGcsConfig Whether to return facet information as configured in the GCS account
     * @opt_param string language Language restriction (BCP 47)
     * @opt_param string location Location used to determine tax and shipping
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param int maxVariants Maximum number of variant results to return per result
     * @opt_param bool promotions.enabled Whether to return promotion information
     * @opt_param bool promotions.useGcsConfig Whether to return promotion information as configured in the GCS account
     * @opt_param string q Search query
     * @opt_param string rankBy Ranking specification
     * @opt_param bool redirects.enabled Whether to return redirect information
     * @opt_param bool redirects.useGcsConfig Whether to return redirect information as configured in the GCS account
     * @opt_param bool relatedQueries.enabled Whether to return related queries
     * @opt_param bool relatedQueries.useGcsConfig This parameter is currently ignored
     * @opt_param string restrictBy Restriction specification
     * @opt_param bool safe Whether safe search is enabled. Default: true
     * @opt_param bool spelling.enabled Whether to return spelling suggestions
     * @opt_param bool spelling.useGcsConfig This parameter is currently ignored
     * @opt_param string startIndex Index (1-based) of first product to return
     * @opt_param string taxonomy Taxonomy name
     * @opt_param string thumbnails Image thumbnails specification
     * @opt_param string useCase One of CommerceSearchUseCase, ShoppingApiUseCase
     */
    public function listProducts($source, $optParams = [])
    {
        $params = ['source' => $source];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Products($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Shopping (v1).
 *
 * <p>
 * Lets you search over product data.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/shopping-search/v1/getting_started" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_ShoppingService extends Google_Service
{
    /**
     * @var Google_ProductsServiceResource
     */
    public $products;

    /**
     * Constructs the internal representation of the Shopping service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'shopping/search/v1/';
        $this->version = 'v1';
        $this->serviceName = 'shopping';

        $client->addService($this->serviceName, $this->version);
        $this->products = new Google_ProductsServiceResource($this, $this->serviceName, 'products', json_decode('{"methods": {"get": {"id": "shopping.products.get", "path": "{source}/products/{accountId}/{productIdType}/{productId}", "httpMethod": "GET", "parameters": {"accountId": {"type": "integer", "required": true, "format": "uint32", "location": "path"}, "attributeFilter": {"type": "string", "location": "query"}, "categories.enabled": {"type": "boolean", "location": "query"}, "categories.include": {"type": "string", "location": "query"}, "categories.useGcsConfig": {"type": "boolean", "location": "query"}, "location": {"type": "string", "location": "query"}, "productId": {"type": "string", "required": true, "location": "path"}, "productIdType": {"type": "string", "required": true, "location": "path"}, "recommendations.enabled": {"type": "boolean", "location": "query"}, "recommendations.include": {"type": "string", "location": "query"}, "recommendations.useGcsConfig": {"type": "boolean", "location": "query"}, "source": {"type": "string", "required": true, "location": "path"}, "taxonomy": {"type": "string", "location": "query"}, "thumbnails": {"type": "string", "location": "query"}}, "response": {"$ref": "Product"}, "scopes": ["https://www.googleapis.com/auth/shoppingapi"]}, "list": {"id": "shopping.products.list", "path": "{source}/products", "httpMethod": "GET", "parameters": {"attributeFilter": {"type": "string", "location": "query"}, "availability": {"type": "string", "location": "query"}, "boostBy": {"type": "string", "location": "query"}, "categories.enabled": {"type": "boolean", "location": "query"}, "categories.include": {"type": "string", "location": "query"}, "categories.useGcsConfig": {"type": "boolean", "location": "query"}, "categoryRecommendations.category": {"type": "string", "location": "query"}, "categoryRecommendations.enabled": {"type": "boolean", "location": "query"}, "categoryRecommendations.include": {"type": "string", "location": "query"}, "categoryRecommendations.useGcsConfig": {"type": "boolean", "location": "query"}, "channels": {"type": "string", "location": "query"}, "clickTracking": {"type": "boolean", "location": "query"}, "country": {"type": "string", "location": "query"}, "crowdBy": {"type": "string", "location": "query"}, "currency": {"type": "string", "location": "query"}, "extras.enabled": {"type": "boolean", "location": "query"}, "extras.info": {"type": "string", "location": "query"}, "facets.discover": {"type": "string", "location": "query"}, "facets.enabled": {"type": "boolean", "location": "query"}, "facets.include": {"type": "string", "location": "query"}, "facets.includeEmptyBuckets": {"type": "boolean", "location": "query"}, "facets.useGcsConfig": {"type": "boolean", "location": "query"}, "language": {"type": "string", "location": "query"}, "location": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "location": "query"}, "maxVariants": {"type": "integer", "format": "int32", "location": "query"}, "promotions.enabled": {"type": "boolean", "location": "query"}, "promotions.useGcsConfig": {"type": "boolean", "location": "query"}, "q": {"type": "string", "location": "query"}, "rankBy": {"type": "string", "location": "query"}, "redirects.enabled": {"type": "boolean", "location": "query"}, "redirects.useGcsConfig": {"type": "boolean", "location": "query"}, "relatedQueries.enabled": {"type": "boolean", "location": "query"}, "relatedQueries.useGcsConfig": {"type": "boolean", "location": "query"}, "restrictBy": {"type": "string", "location": "query"}, "safe": {"type": "boolean", "location": "query"}, "source": {"type": "string", "required": true, "location": "path"}, "spelling.enabled": {"type": "boolean", "location": "query"}, "spelling.useGcsConfig": {"type": "boolean", "location": "query"}, "startIndex": {"type": "integer", "format": "uint32", "location": "query"}, "taxonomy": {"type": "string", "location": "query"}, "thumbnails": {"type": "string", "location": "query"}, "useCase": {"type": "string", "location": "query"}}, "response": {"$ref": "Products"}, "scopes": ["https://www.googleapis.com/auth/shoppingapi"]}}}', true));

    }
}


/**
 * Class Google_Product
 */
class Google_Product extends Google_Model
{
    /**
     * @var string
     */
    protected $__categoriesType = 'Google_ShoppingModelCategoryJsonV1';
    /**
     * @var string
     */
    protected $__categoriesDataType = 'array';
    /**
     * @var
     */
    public $categories;
    /**
     * @var string
     */
    protected $__debugType = 'Google_ShoppingModelDebugJsonV1';
    /**
     * @var string
     */
    protected $__debugDataType = '';
    /**
     * @var
     */
    public $debug;
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
    protected $__productType = 'Google_ShoppingModelProductJsonV1';
    /**
     * @var string
     */
    protected $__productDataType = '';
    /**
     * @var
     */
    public $product;
    /**
     * @var string
     */
    protected $__recommendationsType = 'Google_ShoppingModelRecommendationsJsonV1';
    /**
     * @var string
     */
    protected $__recommendationsDataType = 'array';
    /**
     * @var
     */
    public $recommendations;
    /**
     * @var
     */
    public $requestId;
    /**
     * @var
     */
    public $selfLink;

    /**
     * @param $categories
     * @throws Google_Exception
     */
    public function setCategories(/* array(Google_ShoppingModelCategoryJsonV1) */
        $categories)
    {
        $this->assertIsArray($categories, 'Google_ShoppingModelCategoryJsonV1', __METHOD__);
        $this->categories = $categories;
    }

    /**
     * @return mixed
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param Google_ShoppingModelDebugJsonV1 $debug
     */
    public function setDebug(Google_ShoppingModelDebugJsonV1 $debug)
    {
        $this->debug = $debug;
    }

    /**
     * @return mixed
     */
    public function getDebug()
    {
        return $this->debug;
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
     * @param Google_ShoppingModelProductJsonV1 $product
     */
    public function setProduct(Google_ShoppingModelProductJsonV1 $product)
    {
        $this->product = $product;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param $recommendations
     * @throws Google_Exception
     */
    public function setRecommendations(/* array(Google_ShoppingModelRecommendationsJsonV1) */
        $recommendations)
    {
        $this->assertIsArray($recommendations, 'Google_ShoppingModelRecommendationsJsonV1', __METHOD__);
        $this->recommendations = $recommendations;
    }

    /**
     * @return mixed
     */
    public function getRecommendations()
    {
        return $this->recommendations;
    }

    /**
     * @param $requestId
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
    }

    /**
     * @return mixed
     */
    public function getRequestId()
    {
        return $this->requestId;
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
}

/**
 * Class Google_Products
 */
class Google_Products extends Google_Model
{
    /**
     * @var string
     */
    protected $__categoriesType = 'Google_ShoppingModelCategoryJsonV1';
    /**
     * @var string
     */
    protected $__categoriesDataType = 'array';
    /**
     * @var
     */
    public $categories;
    /**
     * @var string
     */
    protected $__categoryRecommendationsType = 'Google_ShoppingModelRecommendationsJsonV1';
    /**
     * @var string
     */
    protected $__categoryRecommendationsDataType = 'array';
    /**
     * @var
     */
    public $categoryRecommendations;
    /**
     * @var
     */
    public $currentItemCount;
    /**
     * @var string
     */
    protected $__debugType = 'Google_ShoppingModelDebugJsonV1';
    /**
     * @var string
     */
    protected $__debugDataType = '';
    /**
     * @var
     */
    public $debug;
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__extrasType = 'Google_ShoppingModelExtrasJsonV1';
    /**
     * @var string
     */
    protected $__extrasDataType = '';
    /**
     * @var
     */
    public $extras;
    /**
     * @var string
     */
    protected $__facetsType = 'Google_ProductsFacets';
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
    public $id;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Product';
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
    public $itemsPerPage;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $nextLink;
    /**
     * @var
     */
    public $previousLink;
    /**
     * @var string
     */
    protected $__promotionsType = 'Google_ProductsPromotions';
    /**
     * @var string
     */
    protected $__promotionsDataType = 'array';
    /**
     * @var
     */
    public $promotions;
    /**
     * @var
     */
    public $redirects;
    /**
     * @var
     */
    public $relatedQueries;
    /**
     * @var
     */
    public $requestId;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var string
     */
    protected $__spellingType = 'Google_ProductsSpelling';
    /**
     * @var string
     */
    protected $__spellingDataType = '';
    /**
     * @var
     */
    public $spelling;
    /**
     * @var
     */
    public $startIndex;
    /**
     * @var string
     */
    protected $__storesType = 'Google_ProductsStores';
    /**
     * @var string
     */
    protected $__storesDataType = 'array';
    /**
     * @var
     */
    public $stores;
    /**
     * @var
     */
    public $totalItems;

    /**
     * @param $categories
     * @throws Google_Exception
     */
    public function setCategories(/* array(Google_ShoppingModelCategoryJsonV1) */
        $categories)
    {
        $this->assertIsArray($categories, 'Google_ShoppingModelCategoryJsonV1', __METHOD__);
        $this->categories = $categories;
    }

    /**
     * @return mixed
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param $categoryRecommendations
     * @throws Google_Exception
     */
    public function setCategoryRecommendations(/* array(Google_ShoppingModelRecommendationsJsonV1) */
        $categoryRecommendations)
    {
        $this->assertIsArray($categoryRecommendations, 'Google_ShoppingModelRecommendationsJsonV1', __METHOD__);
        $this->categoryRecommendations = $categoryRecommendations;
    }

    /**
     * @return mixed
     */
    public function getCategoryRecommendations()
    {
        return $this->categoryRecommendations;
    }

    /**
     * @param $currentItemCount
     */
    public function setCurrentItemCount($currentItemCount)
    {
        $this->currentItemCount = $currentItemCount;
    }

    /**
     * @return mixed
     */
    public function getCurrentItemCount()
    {
        return $this->currentItemCount;
    }

    /**
     * @param Google_ShoppingModelDebugJsonV1 $debug
     */
    public function setDebug(Google_ShoppingModelDebugJsonV1 $debug)
    {
        $this->debug = $debug;
    }

    /**
     * @return mixed
     */
    public function getDebug()
    {
        return $this->debug;
    }

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
     * @param Google_ShoppingModelExtrasJsonV1 $extras
     */
    public function setExtras(Google_ShoppingModelExtrasJsonV1 $extras)
    {
        $this->extras = $extras;
    }

    /**
     * @return mixed
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * @param $facets
     * @throws Google_Exception
     */
    public function setFacets(/* array(Google_ProductsFacets) */
        $facets)
    {
        $this->assertIsArray($facets, 'Google_ProductsFacets', __METHOD__);
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
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Product) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Product', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param $itemsPerPage
     */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
    }

    /**
     * @return mixed
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
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
     * @param $nextLink
     */
    public function setNextLink($nextLink)
    {
        $this->nextLink = $nextLink;
    }

    /**
     * @return mixed
     */
    public function getNextLink()
    {
        return $this->nextLink;
    }

    /**
     * @param $previousLink
     */
    public function setPreviousLink($previousLink)
    {
        $this->previousLink = $previousLink;
    }

    /**
     * @return mixed
     */
    public function getPreviousLink()
    {
        return $this->previousLink;
    }

    /**
     * @param $promotions
     * @throws Google_Exception
     */
    public function setPromotions(/* array(Google_ProductsPromotions) */
        $promotions)
    {
        $this->assertIsArray($promotions, 'Google_ProductsPromotions', __METHOD__);
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
     * @param $redirects
     * @throws Google_Exception
     */
    public function setRedirects(/* array(Google_string) */
        $redirects)
    {
        $this->assertIsArray($redirects, 'Google_string', __METHOD__);
        $this->redirects = $redirects;
    }

    /**
     * @return mixed
     */
    public function getRedirects()
    {
        return $this->redirects;
    }

    /**
     * @param $relatedQueries
     * @throws Google_Exception
     */
    public function setRelatedQueries(/* array(Google_string) */
        $relatedQueries)
    {
        $this->assertIsArray($relatedQueries, 'Google_string', __METHOD__);
        $this->relatedQueries = $relatedQueries;
    }

    /**
     * @return mixed
     */
    public function getRelatedQueries()
    {
        return $this->relatedQueries;
    }

    /**
     * @param $requestId
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
    }

    /**
     * @return mixed
     */
    public function getRequestId()
    {
        return $this->requestId;
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
     * @param Google_ProductsSpelling $spelling
     */
    public function setSpelling(Google_ProductsSpelling $spelling)
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
     * @param $stores
     * @throws Google_Exception
     */
    public function setStores(/* array(Google_ProductsStores) */
        $stores)
    {
        $this->assertIsArray($stores, 'Google_ProductsStores', __METHOD__);
        $this->stores = $stores;
    }

    /**
     * @return mixed
     */
    public function getStores()
    {
        return $this->stores;
    }

    /**
     * @param $totalItems
     */
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }

    public function getTotalItems()
    {
        return $this->totalItems;
    }
}

/**
 * Class Google_ProductsFacets
 */
class Google_ProductsFacets extends Google_Model
{
    /**
     * @var string
     */
    protected $__bucketsType = 'Google_ProductsFacetsBuckets';
    /**
     * @var string
     */
    protected $__bucketsDataType = 'array';
    /**
     * @var
     */
    public $buckets;
    /**
     * @var
     */
    public $count;
    /**
     * @var
     */
    public $displayName;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $property;
    /**
     * @var
     */
    public $type;
    /**
     * @var
     */
    public $unit;

    /**
     * @param $buckets
     * @throws Google_Exception
     */
    public function setBuckets(/* array(Google_ProductsFacetsBuckets) */
        $buckets)
    {
        $this->assertIsArray($buckets, 'Google_ProductsFacetsBuckets', __METHOD__);
        $this->buckets = $buckets;
    }

    /**
     * @return mixed
     */
    public function getBuckets()
    {
        return $this->buckets;
    }

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

    /**
     * @param $property
     */
    public function setProperty($property)
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
     * @param $unit
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
    }

    /**
     * @return mixed
     */
    public function getUnit()
    {
        return $this->unit;
    }
}

/**
 * Class Google_ProductsFacetsBuckets
 */
class Google_ProductsFacetsBuckets extends Google_Model
{
    /**
     * @var
     */
    public $count;
    /**
     * @var
     */
    public $max;
    /**
     * @var
     */
    public $maxExclusive;
    /**
     * @var
     */
    public $min;
    /**
     * @var
     */
    public $minExclusive;
    /**
     * @var
     */
    public $value;

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
     * @param $max
     */
    public function setMax($max)
    {
        $this->max = $max;
    }

    /**
     * @return mixed
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @param $maxExclusive
     */
    public function setMaxExclusive($maxExclusive)
    {
        $this->maxExclusive = $maxExclusive;
    }

    /**
     * @return mixed
     */
    public function getMaxExclusive()
    {
        return $this->maxExclusive;
    }

    /**
     * @param $min
     */
    public function setMin($min)
    {
        $this->min = $min;
    }

    /**
     * @return mixed
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * @param $minExclusive
     */
    public function setMinExclusive($minExclusive)
    {
        $this->minExclusive = $minExclusive;
    }

    /**
     * @return mixed
     */
    public function getMinExclusive()
    {
        return $this->minExclusive;
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
 * Class Google_ProductsPromotions
 */
class Google_ProductsPromotions extends Google_Model
{
    /**
     * @var string
     */
    protected $__customFieldsType = 'Google_ProductsPromotionsCustomFields';
    /**
     * @var string
     */
    protected $__customFieldsDataType = 'array';
    /**
     * @var
     */
    public $customFields;
    /**
     * @var
     */
    public $customHtml;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $destLink;
    /**
     * @var
     */
    public $imageLink;
    /**
     * @var
     */
    public $name;
    /**
     * @var string
     */
    protected $__productType = 'Google_ShoppingModelProductJsonV1';
    /**
     * @var string
     */
    protected $__productDataType = '';
    /**
     * @var
     */
    public $product;
    /**
     * @var
     */
    public $type;

    /**
     * @param $customFields
     * @throws Google_Exception
     */
    public function setCustomFields(/* array(Google_ProductsPromotionsCustomFields) */
        $customFields)
    {
        $this->assertIsArray($customFields, 'Google_ProductsPromotionsCustomFields', __METHOD__);
        $this->customFields = $customFields;
    }

    /**
     * @return mixed
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @param $customHtml
     */
    public function setCustomHtml($customHtml)
    {
        $this->customHtml = $customHtml;
    }

    /**
     * @return mixed
     */
    public function getCustomHtml()
    {
        return $this->customHtml;
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
     * @param $destLink
     */
    public function setDestLink($destLink)
    {
        $this->destLink = $destLink;
    }

    /**
     * @return mixed
     */
    public function getDestLink()
    {
        return $this->destLink;
    }

    /**
     * @param $imageLink
     */
    public function setImageLink($imageLink)
    {
        $this->imageLink = $imageLink;
    }

    /**
     * @return mixed
     */
    public function getImageLink()
    {
        return $this->imageLink;
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
     * @param Google_ShoppingModelProductJsonV1 $product
     */
    public function setProduct(Google_ShoppingModelProductJsonV1 $product)
    {
        $this->product = $product;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
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
 * Class Google_ProductsPromotionsCustomFields
 */
class Google_ProductsPromotionsCustomFields extends Google_Model
{
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $value;

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
 * Class Google_ProductsSpelling
 */
class Google_ProductsSpelling extends Google_Model
{
    /**
     * @var
     */
    public $suggestion;

    /**
     * @param $suggestion
     */
    public function setSuggestion($suggestion)
    {
        $this->suggestion = $suggestion;
    }

    /**
     * @return mixed
     */
    public function getSuggestion()
    {
        return $this->suggestion;
    }
}

/**
 * Class Google_ProductsStores
 */
class Google_ProductsStores extends Google_Model
{
    /**
     * @var
     */
    public $address;
    /**
     * @var
     */
    public $location;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $storeCode;
    /**
     * @var
     */
    public $storeId;
    /**
     * @var
     */
    public $storeName;
    /**
     * @var
     */
    public $telephone;

    /**
     * @param $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getLocation()
    {
        return $this->location;
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
     * @param $storeCode
     */
    public function setStoreCode($storeCode)
    {
        $this->storeCode = $storeCode;
    }

    /**
     * @return mixed
     */
    public function getStoreCode()
    {
        return $this->storeCode;
    }

    /**
     * @param $storeId
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;
    }

    /**
     * @return mixed
     */
    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * @param $storeName
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
    }

    /**
     * @return mixed
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * @param $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }
}

/**
 * Class Google_ShoppingModelCategoryJsonV1
 */
class Google_ShoppingModelCategoryJsonV1 extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $parents;
    /**
     * @var
     */
    public $shortName;
    /**
     * @var
     */
    public $url;

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
     * @param $parents
     * @throws Google_Exception
     */
    public function setParents(/* array(Google_string) */
        $parents)
    {
        $this->assertIsArray($parents, 'Google_string', __METHOD__);
        $this->parents = $parents;
    }

    /**
     * @return mixed
     */
    public function getParents()
    {
        return $this->parents;
    }

    /**
     * @param $shortName
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
    }

    /**
     * @return mixed
     */
    public function getShortName()
    {
        return $this->shortName;
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
 * Class Google_ShoppingModelDebugJsonV1
 */
class Google_ShoppingModelDebugJsonV1 extends Google_Model
{
    /**
     * @var string
     */
    protected $__backendTimesType = 'Google_ShoppingModelDebugJsonV1BackendTimes';
    /**
     * @var string
     */
    protected $__backendTimesDataType = 'array';
    /**
     * @var
     */
    public $backendTimes;
    /**
     * @var
     */
    public $elapsedMillis;
    /**
     * @var
     */
    public $facetsRequest;
    /**
     * @var
     */
    public $facetsResponse;
    /**
     * @var
     */
    public $rdcResponse;
    /**
     * @var
     */
    public $recommendedItemsRequest;
    /**
     * @var
     */
    public $recommendedItemsResponse;
    /**
     * @var
     */
    public $searchRequest;
    /**
     * @var
     */
    public $searchResponse;

    /**
     * @param $backendTimes
     * @throws Google_Exception
     */
    public function setBackendTimes(/* array(Google_ShoppingModelDebugJsonV1BackendTimes) */
        $backendTimes)
    {
        $this->assertIsArray($backendTimes, 'Google_ShoppingModelDebugJsonV1BackendTimes', __METHOD__);
        $this->backendTimes = $backendTimes;
    }

    /**
     * @return mixed
     */
    public function getBackendTimes()
    {
        return $this->backendTimes;
    }

    /**
     * @param $elapsedMillis
     */
    public function setElapsedMillis($elapsedMillis)
    {
        $this->elapsedMillis = $elapsedMillis;
    }

    /**
     * @return mixed
     */
    public function getElapsedMillis()
    {
        return $this->elapsedMillis;
    }

    /**
     * @param $facetsRequest
     */
    public function setFacetsRequest($facetsRequest)
    {
        $this->facetsRequest = $facetsRequest;
    }

    /**
     * @return mixed
     */
    public function getFacetsRequest()
    {
        return $this->facetsRequest;
    }

    /**
     * @param $facetsResponse
     */
    public function setFacetsResponse($facetsResponse)
    {
        $this->facetsResponse = $facetsResponse;
    }

    /**
     * @return mixed
     */
    public function getFacetsResponse()
    {
        return $this->facetsResponse;
    }

    /**
     * @param $rdcResponse
     */
    public function setRdcResponse($rdcResponse)
    {
        $this->rdcResponse = $rdcResponse;
    }

    /**
     * @return mixed
     */
    public function getRdcResponse()
    {
        return $this->rdcResponse;
    }

    /**
     * @param $recommendedItemsRequest
     */
    public function setRecommendedItemsRequest($recommendedItemsRequest)
    {
        $this->recommendedItemsRequest = $recommendedItemsRequest;
    }

    /**
     * @return mixed
     */
    public function getRecommendedItemsRequest()
    {
        return $this->recommendedItemsRequest;
    }

    /**
     * @param $recommendedItemsResponse
     */
    public function setRecommendedItemsResponse($recommendedItemsResponse)
    {
        $this->recommendedItemsResponse = $recommendedItemsResponse;
    }

    /**
     * @return mixed
     */
    public function getRecommendedItemsResponse()
    {
        return $this->recommendedItemsResponse;
    }

    /**
     * @param $searchRequest
     */
    public function setSearchRequest($searchRequest)
    {
        $this->searchRequest = $searchRequest;
    }

    /**
     * @return mixed
     */
    public function getSearchRequest()
    {
        return $this->searchRequest;
    }

    /**
     * @param $searchResponse
     */
    public function setSearchResponse($searchResponse)
    {
        $this->searchResponse = $searchResponse;
    }

    /**
     * @return mixed
     */
    public function getSearchResponse()
    {
        return $this->searchResponse;
    }
}

/**
 * Class Google_ShoppingModelDebugJsonV1BackendTimes
 */
class Google_ShoppingModelDebugJsonV1BackendTimes extends Google_Model
{
    /**
     * @var
     */
    public $elapsedMillis;
    /**
     * @var
     */
    public $hostName;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $serverMillis;

    /**
     * @param $elapsedMillis
     */
    public function setElapsedMillis($elapsedMillis)
    {
        $this->elapsedMillis = $elapsedMillis;
    }

    /**
     * @return mixed
     */
    public function getElapsedMillis()
    {
        return $this->elapsedMillis;
    }

    /**
     * @param $hostName
     */
    public function setHostName($hostName)
    {
        $this->hostName = $hostName;
    }

    /**
     * @return mixed
     */
    public function getHostName()
    {
        return $this->hostName;
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
     * @param $serverMillis
     */
    public function setServerMillis($serverMillis)
    {
        $this->serverMillis = $serverMillis;
    }

    /**
     * @return mixed
     */
    public function getServerMillis()
    {
        return $this->serverMillis;
    }
}

/**
 * Class Google_ShoppingModelExtrasJsonV1
 */
class Google_ShoppingModelExtrasJsonV1 extends Google_Model
{
    /**
     * @var string
     */
    protected $__facetRulesType = 'Google_ShoppingModelExtrasJsonV1FacetRules';
    /**
     * @var string
     */
    protected $__facetRulesDataType = 'array';
    /**
     * @var
     */
    public $facetRules;
    /**
     * @var string
     */
    protected $__rankingRulesType = 'Google_ShoppingModelExtrasJsonV1RankingRules';
    /**
     * @var string
     */
    protected $__rankingRulesDataType = 'array';
    /**
     * @var
     */
    public $rankingRules;

    /**
     * @param $facetRules
     * @throws Google_Exception
     */
    public function setFacetRules(/* array(Google_ShoppingModelExtrasJsonV1FacetRules) */
        $facetRules)
    {
        $this->assertIsArray($facetRules, 'Google_ShoppingModelExtrasJsonV1FacetRules', __METHOD__);
        $this->facetRules = $facetRules;
    }

    /**
     * @return mixed
     */
    public function getFacetRules()
    {
        return $this->facetRules;
    }

    /**
     * @param $rankingRules
     * @throws Google_Exception
     */
    public function setRankingRules(/* array(Google_ShoppingModelExtrasJsonV1RankingRules) */
        $rankingRules)
    {
        $this->assertIsArray($rankingRules, 'Google_ShoppingModelExtrasJsonV1RankingRules', __METHOD__);
        $this->rankingRules = $rankingRules;
    }

    /**
     * @return mixed
     */
    public function getRankingRules()
    {
        return $this->rankingRules;
    }
}

/**
 * Class Google_ShoppingModelExtrasJsonV1FacetRules
 */
class Google_ShoppingModelExtrasJsonV1FacetRules extends Google_Model
{
    /**
     * @var
     */
    public $name;

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
 * Class Google_ShoppingModelExtrasJsonV1RankingRules
 */
class Google_ShoppingModelExtrasJsonV1RankingRules extends Google_Model
{
    /**
     * @var
     */
    public $name;

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
 * Class Google_ShoppingModelProductJsonV1
 */
class Google_ShoppingModelProductJsonV1 extends Google_Model
{
    /**
     * @var string
     */
    protected $__attributesType = 'Google_ShoppingModelProductJsonV1Attributes';
    /**
     * @var string
     */
    protected $__attributesDataType = 'array';
    /**
     * @var
     */
    public $attributes;
    /**
     * @var string
     */
    protected $__authorType = 'Google_ShoppingModelProductJsonV1Author';
    /**
     * @var string
     */
    protected $__authorDataType = '';
    /**
     * @var
     */
    public $author;
    /**
     * @var
     */
    public $brand;
    /**
     * @var
     */
    public $categories;
    /**
     * @var
     */
    public $condition;
    /**
     * @var
     */
    public $country;
    /**
     * @var
     */
    public $creationTime;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $googleId;
    /**
     * @var
     */
    public $gtin;
    /**
     * @var
     */
    public $gtins;
    /**
     * @var string
     */
    protected $__imagesType = 'Google_ShoppingModelProductJsonV1Images';
    /**
     * @var string
     */
    protected $__imagesDataType = 'array';
    /**
     * @var
     */
    public $images;
    /**
     * @var
     */
    public $internal1;
    /**
     * @var
     */
    public $internal10;
    /**
     * @var
     */
    public $internal12;
    /**
     * @var
     */
    public $internal13;
    /**
     * @var
     */
    public $internal14;
    /**
     * @var
     */
    public $internal15;
    /**
     * @var string
     */
    protected $__internal16Type = 'Google_ShoppingModelProductJsonV1Internal16';
    /**
     * @var string
     */
    protected $__internal16DataType = '';
    /**
     * @var
     */
    public $internal16;
    /**
     * @var
     */
    public $internal3;
    /**
     * @var string
     */
    protected $__internal4Type = 'Google_ShoppingModelProductJsonV1Internal4';
    /**
     * @var string
     */
    protected $__internal4DataType = 'array';
    /**
     * @var
     */
    public $internal4;
    /**
     * @var
     */
    public $internal6;
    /**
     * @var
     */
    public $internal7;
    /**
     * @var
     */
    public $internal8;
    /**
     * @var string
     */
    protected $__inventoriesType = 'Google_ShoppingModelProductJsonV1Inventories';
    /**
     * @var string
     */
    protected $__inventoriesDataType = 'array';
    /**
     * @var
     */
    public $inventories;
    /**
     * @var
     */
    public $language;
    /**
     * @var
     */
    public $link;
    /**
     * @var
     */
    public $modificationTime;
    /**
     * @var
     */
    public $mpns;
    /**
     * @var
     */
    public $plusOne;
    /**
     * @var
     */
    public $providedId;
    /**
     * @var
     */
    public $queryMatched;
    /**
     * @var
     */
    public $score;
    /**
     * @var
     */
    public $title;
    /**
     * @var
     */
    public $totalMatchingVariants;
    /**
     * @var string
     */
    protected $__variantsType = 'Google_ShoppingModelProductJsonV1Variants';
    /**
     * @var string
     */
    protected $__variantsDataType = 'array';
    /**
     * @var
     */
    public $variants;

    /**
     * @param $attributes
     * @throws Google_Exception
     */
    public function setAttributes(/* array(Google_ShoppingModelProductJsonV1Attributes) */
        $attributes)
    {
        $this->assertIsArray($attributes, 'Google_ShoppingModelProductJsonV1Attributes', __METHOD__);
        $this->attributes = $attributes;
    }

    /**
     * @return mixed
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param Google_ShoppingModelProductJsonV1Author $author
     */
    public function setAuthor(Google_ShoppingModelProductJsonV1Author $author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param $categories
     * @throws Google_Exception
     */
    public function setCategories(/* array(Google_string) */
        $categories)
    {
        $this->assertIsArray($categories, 'Google_string', __METHOD__);
        $this->categories = $categories;
    }

    /**
     * @return mixed
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param $condition
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
    }

    /**
     * @return mixed
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @param $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

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
     * @param $googleId
     */
    public function setGoogleId($googleId)
    {
        $this->googleId = $googleId;
    }

    /**
     * @return mixed
     */
    public function getGoogleId()
    {
        return $this->googleId;
    }

    /**
     * @param $gtin
     */
    public function setGtin($gtin)
    {
        $this->gtin = $gtin;
    }

    /**
     * @return mixed
     */
    public function getGtin()
    {
        return $this->gtin;
    }

    /**
     * @param $gtins
     * @throws Google_Exception
     */
    public function setGtins(/* array(Google_string) */
        $gtins)
    {
        $this->assertIsArray($gtins, 'Google_string', __METHOD__);
        $this->gtins = $gtins;
    }

    /**
     * @return mixed
     */
    public function getGtins()
    {
        return $this->gtins;
    }

    /**
     * @param $images
     * @throws Google_Exception
     */
    public function setImages(/* array(Google_ShoppingModelProductJsonV1Images) */
        $images)
    {
        $this->assertIsArray($images, 'Google_ShoppingModelProductJsonV1Images', __METHOD__);
        $this->images = $images;
    }

    /**
     * @return mixed
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param $internal1
     * @throws Google_Exception
     */
    public function setInternal1(/* array(Google_string) */
        $internal1)
    {
        $this->assertIsArray($internal1, 'Google_string', __METHOD__);
        $this->internal1 = $internal1;
    }

    /**
     * @return mixed
     */
    public function getInternal1()
    {
        return $this->internal1;
    }

    /**
     * @param $internal10
     * @throws Google_Exception
     */
    public function setInternal10(/* array(Google_string) */
        $internal10)
    {
        $this->assertIsArray($internal10, 'Google_string', __METHOD__);
        $this->internal10 = $internal10;
    }

    /**
     * @return mixed
     */
    public function getInternal10()
    {
        return $this->internal10;
    }

    /**
     * @param $internal12
     */
    public function setInternal12($internal12)
    {
        $this->internal12 = $internal12;
    }

    /**
     * @return mixed
     */
    public function getInternal12()
    {
        return $this->internal12;
    }

    /**
     * @param $internal13
     */
    public function setInternal13($internal13)
    {
        $this->internal13 = $internal13;
    }

    /**
     * @return mixed
     */
    public function getInternal13()
    {
        return $this->internal13;
    }

    /**
     * @param $internal14
     */
    public function setInternal14($internal14)
    {
        $this->internal14 = $internal14;
    }

    /**
     * @return mixed
     */
    public function getInternal14()
    {
        return $this->internal14;
    }

    /**
     * @param $internal15
     */
    public function setInternal15($internal15)
    {
        $this->internal15 = $internal15;
    }

    /**
     * @return mixed
     */
    public function getInternal15()
    {
        return $this->internal15;
    }

    /**
     * @param Google_ShoppingModelProductJsonV1Internal16 $internal16
     */
    public function setInternal16(Google_ShoppingModelProductJsonV1Internal16 $internal16)
    {
        $this->internal16 = $internal16;
    }

    /**
     * @return mixed
     */
    public function getInternal16()
    {
        return $this->internal16;
    }

    /**
     * @param $internal3
     */
    public function setInternal3($internal3)
    {
        $this->internal3 = $internal3;
    }

    /**
     * @return mixed
     */
    public function getInternal3()
    {
        return $this->internal3;
    }

    /**
     * @param $internal4
     * @throws Google_Exception
     */
    public function setInternal4(/* array(Google_ShoppingModelProductJsonV1Internal4) */
        $internal4)
    {
        $this->assertIsArray($internal4, 'Google_ShoppingModelProductJsonV1Internal4', __METHOD__);
        $this->internal4 = $internal4;
    }

    /**
     * @return mixed
     */
    public function getInternal4()
    {
        return $this->internal4;
    }

    /**
     * @param $internal6
     */
    public function setInternal6($internal6)
    {
        $this->internal6 = $internal6;
    }

    /**
     * @return mixed
     */
    public function getInternal6()
    {
        return $this->internal6;
    }

    /**
     * @param $internal7
     */
    public function setInternal7($internal7)
    {
        $this->internal7 = $internal7;
    }

    /**
     * @return mixed
     */
    public function getInternal7()
    {
        return $this->internal7;
    }

    /**
     * @param $internal8
     * @throws Google_Exception
     */
    public function setInternal8(/* array(Google_string) */
        $internal8)
    {
        $this->assertIsArray($internal8, 'Google_string', __METHOD__);
        $this->internal8 = $internal8;
    }

    /**
     * @return mixed
     */
    public function getInternal8()
    {
        return $this->internal8;
    }

    /**
     * @param $inventories
     * @throws Google_Exception
     */
    public function setInventories(/* array(Google_ShoppingModelProductJsonV1Inventories) */
        $inventories)
    {
        $this->assertIsArray($inventories, 'Google_ShoppingModelProductJsonV1Inventories', __METHOD__);
        $this->inventories = $inventories;
    }

    /**
     * @return mixed
     */
    public function getInventories()
    {
        return $this->inventories;
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
     * @param $modificationTime
     */
    public function setModificationTime($modificationTime)
    {
        $this->modificationTime = $modificationTime;
    }

    /**
     * @return mixed
     */
    public function getModificationTime()
    {
        return $this->modificationTime;
    }

    /**
     * @param $mpns
     * @throws Google_Exception
     */
    public function setMpns(/* array(Google_string) */
        $mpns)
    {
        $this->assertIsArray($mpns, 'Google_string', __METHOD__);
        $this->mpns = $mpns;
    }

    /**
     * @return mixed
     */
    public function getMpns()
    {
        return $this->mpns;
    }

    /**
     * @param $plusOne
     */
    public function setPlusOne($plusOne)
    {
        $this->plusOne = $plusOne;
    }

    /**
     * @return mixed
     */
    public function getPlusOne()
    {
        return $this->plusOne;
    }

    /**
     * @param $providedId
     */
    public function setProvidedId($providedId)
    {
        $this->providedId = $providedId;
    }

    /**
     * @return mixed
     */
    public function getProvidedId()
    {
        return $this->providedId;
    }

    /**
     * @param $queryMatched
     */
    public function setQueryMatched($queryMatched)
    {
        $this->queryMatched = $queryMatched;
    }

    /**
     * @return mixed
     */
    public function getQueryMatched()
    {
        return $this->queryMatched;
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
     * @param $totalMatchingVariants
     */
    public function setTotalMatchingVariants($totalMatchingVariants)
    {
        $this->totalMatchingVariants = $totalMatchingVariants;
    }

    /**
     * @return mixed
     */
    public function getTotalMatchingVariants()
    {
        return $this->totalMatchingVariants;
    }

    /**
     * @param $variants
     * @throws Google_Exception
     */
    public function setVariants(/* array(Google_ShoppingModelProductJsonV1Variants) */
        $variants)
    {
        $this->assertIsArray($variants, 'Google_ShoppingModelProductJsonV1Variants', __METHOD__);
        $this->variants = $variants;
    }

    /**
     * @return mixed
     */
    public function getVariants()
    {
        return $this->variants;
    }
}

/**
 * Class Google_ShoppingModelProductJsonV1Attributes
 */
class Google_ShoppingModelProductJsonV1Attributes extends Google_Model
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
     * @var
     */
    public $type;
    /**
     * @var
     */
    public $unit;
    /**
     * @var
     */
    public $value;

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
     * @param $unit
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
    }

    /**
     * @return mixed
     */
    public function getUnit()
    {
        return $this->unit;
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
 * Class Google_ShoppingModelProductJsonV1Author
 */
class Google_ShoppingModelProductJsonV1Author extends Google_Model
{
    /**
     * @var
     */
    public $accountId;
    /**
     * @var
     */
    public $name;

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
 * Class Google_ShoppingModelProductJsonV1Images
 */
class Google_ShoppingModelProductJsonV1Images extends Google_Model
{
    /**
     * @var
     */
    public $link;
    /**
     * @var
     */
    public $status;
    /**
     * @var string
     */
    protected $__thumbnailsType = 'Google_ShoppingModelProductJsonV1ImagesThumbnails';
    /**
     * @var string
     */
    protected $__thumbnailsDataType = 'array';
    /**
     * @var
     */
    public $thumbnails;

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
     * @param $thumbnails
     * @throws Google_Exception
     */
    public function setThumbnails(/* array(Google_ShoppingModelProductJsonV1ImagesThumbnails) */
        $thumbnails)
    {
        $this->assertIsArray($thumbnails, 'Google_ShoppingModelProductJsonV1ImagesThumbnails', __METHOD__);
        $this->thumbnails = $thumbnails;
    }

    /**
     * @return mixed
     */
    public function getThumbnails()
    {
        return $this->thumbnails;
    }
}

/**
 * Class Google_ShoppingModelProductJsonV1ImagesThumbnails
 */
class Google_ShoppingModelProductJsonV1ImagesThumbnails extends Google_Model
{
    /**
     * @var
     */
    public $content;
    /**
     * @var
     */
    public $height;
    /**
     * @var
     */
    public $link;
    /**
     * @var
     */
    public $width;

    /**
     * @param $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
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
 * Class Google_ShoppingModelProductJsonV1Internal16
 */
class Google_ShoppingModelProductJsonV1Internal16 extends Google_Model
{
    /**
     * @var
     */
    public $length;
    /**
     * @var
     */
    public $number;
    /**
     * @var
     */
    public $size;

    /**
     * @param $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
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
 * Class Google_ShoppingModelProductJsonV1Internal4
 */
class Google_ShoppingModelProductJsonV1Internal4 extends Google_Model
{
    /**
     * @var
     */
    public $confidence;
    /**
     * @var
     */
    public $node;

    /**
     * @param $confidence
     */
    public function setConfidence($confidence)
    {
        $this->confidence = $confidence;
    }

    /**
     * @return mixed
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * @param $node
     */
    public function setNode($node)
    {
        $this->node = $node;
    }

    /**
     * @return mixed
     */
    public function getNode()
    {
        return $this->node;
    }
}

/**
 * Class Google_ShoppingModelProductJsonV1Inventories
 */
class Google_ShoppingModelProductJsonV1Inventories extends Google_Model
{
    /**
     * @var
     */
    public $availability;
    /**
     * @var
     */
    public $channel;
    /**
     * @var
     */
    public $currency;
    /**
     * @var
     */
    public $distance;
    /**
     * @var
     */
    public $distanceUnit;
    /**
     * @var
     */
    public $installmentMonths;
    /**
     * @var
     */
    public $installmentPrice;
    /**
     * @var
     */
    public $originalPrice;
    /**
     * @var
     */
    public $price;
    /**
     * @var
     */
    public $saleEndDate;
    /**
     * @var
     */
    public $salePrice;
    /**
     * @var
     */
    public $saleStartDate;
    /**
     * @var
     */
    public $shipping;
    /**
     * @var
     */
    public $storeId;
    /**
     * @var
     */
    public $tax;

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
     * @param $channel
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
    }

    /**
     * @return mixed
     */
    public function getChannel()
    {
        return $this->channel;
    }

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
     * @param $distance
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
    }

    /**
     * @return mixed
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param $distanceUnit
     */
    public function setDistanceUnit($distanceUnit)
    {
        $this->distanceUnit = $distanceUnit;
    }

    /**
     * @return mixed
     */
    public function getDistanceUnit()
    {
        return $this->distanceUnit;
    }

    /**
     * @param $installmentMonths
     */
    public function setInstallmentMonths($installmentMonths)
    {
        $this->installmentMonths = $installmentMonths;
    }

    /**
     * @return mixed
     */
    public function getInstallmentMonths()
    {
        return $this->installmentMonths;
    }

    /**
     * @param $installmentPrice
     */
    public function setInstallmentPrice($installmentPrice)
    {
        $this->installmentPrice = $installmentPrice;
    }

    /**
     * @return mixed
     */
    public function getInstallmentPrice()
    {
        return $this->installmentPrice;
    }

    /**
     * @param $originalPrice
     */
    public function setOriginalPrice($originalPrice)
    {
        $this->originalPrice = $originalPrice;
    }

    /**
     * @return mixed
     */
    public function getOriginalPrice()
    {
        return $this->originalPrice;
    }

    /**
     * @param $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param $saleEndDate
     */
    public function setSaleEndDate($saleEndDate)
    {
        $this->saleEndDate = $saleEndDate;
    }

    /**
     * @return mixed
     */
    public function getSaleEndDate()
    {
        return $this->saleEndDate;
    }

    /**
     * @param $salePrice
     */
    public function setSalePrice($salePrice)
    {
        $this->salePrice = $salePrice;
    }

    /**
     * @return mixed
     */
    public function getSalePrice()
    {
        return $this->salePrice;
    }

    /**
     * @param $saleStartDate
     */
    public function setSaleStartDate($saleStartDate)
    {
        $this->saleStartDate = $saleStartDate;
    }

    /**
     * @return mixed
     */
    public function getSaleStartDate()
    {
        return $this->saleStartDate;
    }

    /**
     * @param $shipping
     */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;
    }

    /**
     * @return mixed
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * @param $storeId
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;
    }

    /**
     * @return mixed
     */
    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * @param $tax
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
    }

    /**
     * @return mixed
     */
    public function getTax()
    {
        return $this->tax;
    }
}

/**
 * Class Google_ShoppingModelProductJsonV1Variants
 */
class Google_ShoppingModelProductJsonV1Variants extends Google_Model
{
    /**
     * @var string
     */
    protected $__variantType = 'Google_ShoppingModelProductJsonV1';
    /**
     * @var string
     */
    protected $__variantDataType = '';
    /**
     * @var
     */
    public $variant;

    /**
     * @param Google_ShoppingModelProductJsonV1 $variant
     */
    public function setVariant(Google_ShoppingModelProductJsonV1 $variant)
    {
        $this->variant = $variant;
    }

    /**
     * @return mixed
     */
    public function getVariant()
    {
        return $this->variant;
    }
}

/**
 * Class Google_ShoppingModelRecommendationsJsonV1
 */
class Google_ShoppingModelRecommendationsJsonV1 extends Google_Model
{
    /**
     * @var string
     */
    protected $__recommendationListType = 'Google_ShoppingModelRecommendationsJsonV1RecommendationList';
    /**
     * @var string
     */
    protected $__recommendationListDataType = 'array';
    /**
     * @var
     */
    public $recommendationList;
    /**
     * @var
     */
    public $type;

    /**
     * @param $recommendationList
     * @throws Google_Exception
     */
    public function setRecommendationList(/* array(Google_ShoppingModelRecommendationsJsonV1RecommendationList) */
        $recommendationList)
    {
        $this->assertIsArray($recommendationList, 'Google_ShoppingModelRecommendationsJsonV1RecommendationList', __METHOD__);
        $this->recommendationList = $recommendationList;
    }

    /**
     * @return mixed
     */
    public function getRecommendationList()
    {
        return $this->recommendationList;
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
 * Class Google_ShoppingModelRecommendationsJsonV1RecommendationList
 */
class Google_ShoppingModelRecommendationsJsonV1RecommendationList extends Google_Model
{
    /**
     * @var string
     */
    protected $__productType = 'Google_ShoppingModelProductJsonV1';
    /**
     * @var string
     */
    protected $__productDataType = '';
    /**
     * @var
     */
    public $product;

    /**
     * @param Google_ShoppingModelProductJsonV1 $product
     */
    public function setProduct(Google_ShoppingModelProductJsonV1 $product)
    {
        $this->product = $product;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }
}
