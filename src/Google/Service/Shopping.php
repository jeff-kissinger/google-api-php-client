<?php
namespace Google\Service;

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
 * Service definition for Shopping (v1).
 *
 * <p>
 * Lets you search over product data.
 * </p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/shopping-search/v1/getting_started" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Shopping extends \Google\Service
{
  /** View your product data. */
  const SHOPPINGAPI = "https://www.googleapis.com/auth/shoppingapi";

  public $products;
  

  /**
   * Constructs the internal representation of the Shopping service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'shopping/search/v1/';
    $this->version = 'v1';
    $this->serviceName = 'shopping';

    $this->products = new \Google\Service\Shopping\Products\Resource(
        $this,
        $this->serviceName,
        'products',
        array(
          'methods' => array(
            'get' => array(
              'path' => '{source}/products/{accountId}/{productIdType}/{productId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'source' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'productIdType' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'productId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'categories.include' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'recommendations.enabled' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'thumbnails' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'taxonomy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'categories.useGcsConfig' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'recommendations.include' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'categories.enabled' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'location' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'attributeFilter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'recommendations.useGcsConfig' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'list' => array(
              'path' => '{source}/products',
              'httpMethod' => 'GET',
              'parameters' => array(
                'source' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'facets.include' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'categoryRecommendations.category' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'extras.enabled' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'facets.enabled' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'promotions.enabled' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'channels' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'currency' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'categoryRecommendations.enabled' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'facets.discover' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'extras.info' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'startIndex' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'availability' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'crowdBy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'q' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'spelling.enabled' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'taxonomy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'spelling.useGcsConfig' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'useCase' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'location' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxVariants' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'categories.include' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'boostBy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'safe' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'categories.useGcsConfig' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'facets.useGcsConfig' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'categories.enabled' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'attributeFilter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'clickTracking' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'thumbnails' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'categoryRecommendations.include' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'country' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'rankBy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'restrictBy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'facets.includeEmptyBuckets' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'redirects.enabled' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'redirects.useGcsConfig' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'categoryRecommendations.useGcsConfig' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'promotions.useGcsConfig' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
  }
}
