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


class Product extends \Google\Collection
{
  protected $categoriesType = '\Google\Service\Shopping\ShoppingModelCategoryJsonV1';
  protected $categoriesDataType = 'array';
  protected $debugType = '\Google\Service\Shopping\ShoppingModelDebugJsonV1';
  protected $debugDataType = '';
  public $id;
  public $kind;
  protected $productType = '\Google\Service\Shopping\ShoppingModelProductJsonV1';
  protected $productDataType = '';
  protected $recommendationsType = '\Google\Service\Shopping\ShoppingModelRecommendationsJsonV1';
  protected $recommendationsDataType = 'array';
  public $requestId;
  public $selfLink;

  public function setCategories($categories)
  {
    $this->categories = $categories;
  }

  public function getCategories()
  {
    return $this->categories;
  }

  public function setDebug(\Google\Service\Shopping\ShoppingModelDebugJsonV1 $debug)
  {
    $this->debug = $debug;
  }

  public function getDebug()
  {
    return $this->debug;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setProduct(\Google\Service\Shopping\ShoppingModelProductJsonV1 $product)
  {
    $this->product = $product;
  }

  public function getProduct()
  {
    return $this->product;
  }

  public function setRecommendations($recommendations)
  {
    $this->recommendations = $recommendations;
  }

  public function getRecommendations()
  {
    return $this->recommendations;
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
}
