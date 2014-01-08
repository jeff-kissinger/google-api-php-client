<?php
namespace Google\Service\Shopping\Products;

/*
 * Copyright 2010 Google Inc.
 *
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
 *   $shoppingService = new Google_Service_Shopping(...);
 *   $products = $shoppingService->products;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Returns a single product (products.get)
   *
   * @param string $source
   * Query source
   * @param string $accountId
   * Merchant center account id
   * @param string $productIdType
   * Type of productId
   * @param string $productId
   * Id of product
   * @param array $optParams Optional parameters.
   *
   * @opt_param string categoriesInclude
   * Category specification
   * @opt_param bool recommendationsEnabled
   * Whether to return recommendation information
   * @opt_param string thumbnails
   * Thumbnail specification
   * @opt_param string taxonomy
   * Merchant taxonomy
   * @opt_param bool categoriesUseGcsConfig
   * This parameter is currently ignored
   * @opt_param string recommendationsInclude
   * Recommendation specification
   * @opt_param bool categoriesEnabled
   * Whether to return category information
   * @opt_param string location
   * Location used to determine tax and shipping
   * @opt_param string attributeFilter
   * Comma separated list of attributes to return
   * @opt_param bool recommendationsUseGcsConfig
   * This parameter is currently ignored
   * @return \Google\Service\Shopping\Product
   */
  public function get($source, $accountId, $productIdType, $productId, $optParams = array())
  {
    $params = array('source' => $source, 'accountId' => $accountId, 'productIdType' => $productIdType, 'productId' => $productId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Shopping\Product");
  }
  /**
   * Returns a list of products and content modules (products.listProducts)
   *
   * @param string $source
   * Query source
   * @param array $optParams Optional parameters.
   *
   * @opt_param string facetsInclude
   * Facets to include (applies when useGcsConfig == false)
   * @opt_param string categoryRecommendationsCategory
   * Category for which to retrieve recommendations
   * @opt_param bool extrasEnabled
   * Whether to return extra information.
   * @opt_param bool facetsEnabled
   * Whether to return facet information
   * @opt_param bool promotionsEnabled
   * Whether to return promotion information
   * @opt_param string channels
   * Channels specification
   * @opt_param string currency
   * Currency restriction (ISO 4217)
   * @opt_param bool categoryRecommendationsEnabled
   * Whether to return category recommendation information
   * @opt_param string facetsDiscover
   * Facets to discover
   * @opt_param string extrasInfo
   * What extra information to return.
   * @opt_param string startIndex
   * Index (1-based) of first product to return
   * @opt_param string availability
   * Comma separated list of availabilities (outOfStock, limited, inStock, backOrder, preOrder,
    * onDisplayToOrder) to return
   * @opt_param string crowdBy
   * Crowding specification
   * @opt_param string q
   * Search query
   * @opt_param bool spellingEnabled
   * Whether to return spelling suggestions
   * @opt_param string taxonomy
   * Taxonomy name
   * @opt_param bool spellingUseGcsConfig
   * This parameter is currently ignored
   * @opt_param string useCase
   * One of CommerceSearchUseCase, ShoppingApiUseCase
   * @opt_param string location
   * Location used to determine tax and shipping
   * @opt_param int maxVariants
   * Maximum number of variant results to return per result
   * @opt_param string categoriesInclude
   * Category specification
   * @opt_param string boostBy
   * Boosting specification
   * @opt_param bool safe
   * Whether safe search is enabled. Default: true
   * @opt_param bool categoriesUseGcsConfig
   * This parameter is currently ignored
   * @opt_param string maxResults
   * Maximum number of results to return
   * @opt_param bool facetsUseGcsConfig
   * Whether to return facet information as configured in the GCS account
   * @opt_param bool categoriesEnabled
   * Whether to return category information
   * @opt_param string attributeFilter
   * Comma separated list of attributes to return
   * @opt_param bool clickTracking
   * Whether to add a click tracking parameter to offer URLs
   * @opt_param string thumbnails
   * Image thumbnails specification
   * @opt_param string language
   * Language restriction (BCP 47)
   * @opt_param string categoryRecommendationsInclude
   * Category recommendation specification
   * @opt_param string country
   * Country restriction (ISO 3166)
   * @opt_param string rankBy
   * Ranking specification
   * @opt_param string restrictBy
   * Restriction specification
   * @opt_param bool facetsIncludeEmptyBuckets
   * Return empty facet buckets.
   * @opt_param bool redirectsEnabled
   * Whether to return redirect information
   * @opt_param bool redirectsUseGcsConfig
   * Whether to return redirect information as configured in the GCS account
   * @opt_param bool categoryRecommendationsUseGcsConfig
   * This parameter is currently ignored
   * @opt_param bool promotionsUseGcsConfig
   * Whether to return promotion information as configured in the GCS account
   * @return \Google\Service\Shopping\Products
   */
  public function listProducts($source, $optParams = array())
  {
    $params = array('source' => $source);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Shopping\Products");
  }
}
