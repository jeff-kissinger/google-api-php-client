<?php
namespace Google\Service\Shopping;

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


class Products extends \Google\Collection
{
  protected $categoriesType = '\Google\Service\Shopping\ShoppingModelCategoryJsonV1';
  protected $categoriesDataType = 'array';
  protected $categoryRecommendationsType = '\Google\Service\Shopping\ShoppingModelRecommendationsJsonV1';
  protected $categoryRecommendationsDataType = 'array';
  public $currentItemCount;
  protected $debugType = '\Google\Service\Shopping\ShoppingModelDebugJsonV1';
  protected $debugDataType = '';
  public $etag;
  protected $extrasType = '\Google\Service\Shopping\ShoppingModelExtrasJsonV1';
  protected $extrasDataType = '';
  protected $facetsType = '\Google\Service\Shopping\ProductsFacets';
  protected $facetsDataType = 'array';
  public $id;
  protected $itemsType = '\Google\Service\Shopping\Product';
  protected $itemsDataType = 'array';
  public $itemsPerPage;
  public $kind;
  public $nextLink;
  public $previousLink;
  protected $promotionsType = '\Google\Service\Shopping\ProductsPromotions';
  protected $promotionsDataType = 'array';
  public $redirects;
  public $requestId;
  public $selfLink;
  protected $spellingType = '\Google\Service\Shopping\ProductsSpelling';
  protected $spellingDataType = '';
  public $startIndex;
  protected $storesType = '\Google\Service\Shopping\ProductsStores';
  protected $storesDataType = 'array';
  public $totalItems;

  public function setCategories($categories)
  {
    $this->categories = $categories;
  }

  public function getCategories()
  {
    return $this->categories;
  }

  public function setCategoryRecommendations($categoryRecommendations)
  {
    $this->categoryRecommendations = $categoryRecommendations;
  }

  public function getCategoryRecommendations()
  {
    return $this->categoryRecommendations;
  }

  public function setCurrentItemCount($currentItemCount)
  {
    $this->currentItemCount = $currentItemCount;
  }

  public function getCurrentItemCount()
  {
    return $this->currentItemCount;
  }

  public function setDebug(\Google\Service\Shopping\ShoppingModelDebugJsonV1 $debug)
  {
    $this->debug = $debug;
  }

  public function getDebug()
  {
    return $this->debug;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setExtras(\Google\Service\Shopping\ShoppingModelExtrasJsonV1 $extras)
  {
    $this->extras = $extras;
  }

  public function getExtras()
  {
    return $this->extras;
  }

  public function setFacets($facets)
  {
    $this->facets = $facets;
  }

  public function getFacets()
  {
    return $this->facets;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setItemsPerPage($itemsPerPage)
  {
    $this->itemsPerPage = $itemsPerPage;
  }

  public function getItemsPerPage()
  {
    return $this->itemsPerPage;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextLink($nextLink)
  {
    $this->nextLink = $nextLink;
  }

  public function getNextLink()
  {
    return $this->nextLink;
  }

  public function setPreviousLink($previousLink)
  {
    $this->previousLink = $previousLink;
  }

  public function getPreviousLink()
  {
    return $this->previousLink;
  }

  public function setPromotions($promotions)
  {
    $this->promotions = $promotions;
  }

  public function getPromotions()
  {
    return $this->promotions;
  }

  public function setRedirects($redirects)
  {
    $this->redirects = $redirects;
  }

  public function getRedirects()
  {
    return $this->redirects;
  }

  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }

  public function getRequestId()
  {
    return $this->requestId;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSpelling(\Google\Service\Shopping\ProductsSpelling $spelling)
  {
    $this->spelling = $spelling;
  }

  public function getSpelling()
  {
    return $this->spelling;
  }

  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }

  public function getStartIndex()
  {
    return $this->startIndex;
  }

  public function setStores($stores)
  {
    $this->stores = $stores;
  }

  public function getStores()
  {
    return $this->stores;
  }

  public function setTotalItems($totalItems)
  {
    $this->totalItems = $totalItems;
  }

  public function getTotalItems()
  {
    return $this->totalItems;
  }
}
