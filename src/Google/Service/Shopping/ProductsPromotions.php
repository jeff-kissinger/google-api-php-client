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


class ProductsPromotions extends \Google\Collection
{
  protected $customFieldsType = '\Google\Service\Shopping\ProductsPromotionsCustomFields';
  protected $customFieldsDataType = 'array';
  public $customHtml;
  public $description;
  public $destLink;
  public $imageLink;
  public $name;
  protected $productType = '\Google\Service\Shopping\ShoppingModelProductJsonV1';
  protected $productDataType = '';
  public $type;

  public function setCustomFields($customFields)
  {
    $this->customFields = $customFields;
  }

  public function getCustomFields()
  {
    return $this->customFields;
  }

  public function setCustomHtml($customHtml)
  {
    $this->customHtml = $customHtml;
  }

  public function getCustomHtml()
  {
    return $this->customHtml;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDestLink($destLink)
  {
    $this->destLink = $destLink;
  }

  public function getDestLink()
  {
    return $this->destLink;
  }

  public function setImageLink($imageLink)
  {
    $this->imageLink = $imageLink;
  }

  public function getImageLink()
  {
    return $this->imageLink;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setProduct(\Google\Service\Shopping\ShoppingModelProductJsonV1 $product)
  {
    $this->product = $product;
  }

  public function getProduct()
  {
    return $this->product;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
