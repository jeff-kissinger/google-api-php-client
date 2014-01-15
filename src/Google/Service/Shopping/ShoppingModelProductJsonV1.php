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


class ShoppingModelProductJsonV1 extends \Google\Collection
{
  protected $attributesType = '\Google\Service\Shopping\ShoppingModelProductJsonV1Attributes';
  protected $attributesDataType = 'array';
  protected $authorType = '\Google\Service\Shopping\ShoppingModelProductJsonV1Author';
  protected $authorDataType = '';
  public $brand;
  public $categories;
  public $condition;
  public $country;
  public $creationTime;
  public $description;
  public $googleId;
  public $gtin;
  public $gtins;
  protected $imagesType = '\Google\Service\Shopping\ShoppingModelProductJsonV1Images';
  protected $imagesDataType = 'array';
  public $internal1;
  public $internal10;
  public $internal12;
  public $internal13;
  public $internal14;
  public $internal15;
  protected $internal16Type = '\Google\Service\Shopping\ShoppingModelProductJsonV1Internal16';
  protected $internal16DataType = '';
  public $internal3;
  protected $internal4Type = '\Google\Service\Shopping\ShoppingModelProductJsonV1Internal4';
  protected $internal4DataType = 'array';
  public $internal6;
  public $internal7;
  public $internal8;
  protected $inventoriesType = '\Google\Service\Shopping\ShoppingModelProductJsonV1Inventories';
  protected $inventoriesDataType = 'array';
  public $language;
  public $link;
  public $modificationTime;
  public $mpns;
  public $plusOne;
  public $providedId;
  public $queryMatched;
  public $score;
  public $title;
  public $totalMatchingVariants;
  protected $variantsType = '\Google\Service\Shopping\ShoppingModelProductJsonV1Variants';
  protected $variantsDataType = 'array';

  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }

  public function getAttributes()
  {
    return $this->attributes;
  }

  public function setAuthor(\Google\Service\Shopping\ShoppingModelProductJsonV1Author $author)
  {
    $this->author = $author;
  }

  public function getAuthor()
  {
    return $this->author;
  }

  public function setBrand($brand)
  {
    $this->brand = $brand;
  }

  public function getBrand()
  {
    return $this->brand;
  }

  public function setCategories($categories)
  {
    $this->categories = $categories;
  }

  public function getCategories()
  {
    return $this->categories;
  }

  public function setCondition($condition)
  {
    $this->condition = $condition;
  }

  public function getCondition()
  {
    return $this->condition;
  }

  public function setCountry($country)
  {
    $this->country = $country;
  }

  public function getCountry()
  {
    return $this->country;
  }

  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }

  public function getCreationTime()
  {
    return $this->creationTime;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setGoogleId($googleId)
  {
    $this->googleId = $googleId;
  }

  public function getGoogleId()
  {
    return $this->googleId;
  }

  public function setGtin($gtin)
  {
    $this->gtin = $gtin;
  }

  public function getGtin()
  {
    return $this->gtin;
  }

  public function setGtins($gtins)
  {
    $this->gtins = $gtins;
  }

  public function getGtins()
  {
    return $this->gtins;
  }

  public function setImages($images)
  {
    $this->images = $images;
  }

  public function getImages()
  {
    return $this->images;
  }

  public function setInternal1($internal1)
  {
    $this->internal1 = $internal1;
  }

  public function getInternal1()
  {
    return $this->internal1;
  }

  public function setInternal10($internal10)
  {
    $this->internal10 = $internal10;
  }

  public function getInternal10()
  {
    return $this->internal10;
  }

  public function setInternal12($internal12)
  {
    $this->internal12 = $internal12;
  }

  public function getInternal12()
  {
    return $this->internal12;
  }

  public function setInternal13($internal13)
  {
    $this->internal13 = $internal13;
  }

  public function getInternal13()
  {
    return $this->internal13;
  }

  public function setInternal14($internal14)
  {
    $this->internal14 = $internal14;
  }

  public function getInternal14()
  {
    return $this->internal14;
  }

  public function setInternal15($internal15)
  {
    $this->internal15 = $internal15;
  }

  public function getInternal15()
  {
    return $this->internal15;
  }

  public function setInternal16(\Google\Service\Shopping\ShoppingModelProductJsonV1Internal16 $internal16)
  {
    $this->internal16 = $internal16;
  }

  public function getInternal16()
  {
    return $this->internal16;
  }

  public function setInternal3($internal3)
  {
    $this->internal3 = $internal3;
  }

  public function getInternal3()
  {
    return $this->internal3;
  }

  public function setInternal4($internal4)
  {
    $this->internal4 = $internal4;
  }

  public function getInternal4()
  {
    return $this->internal4;
  }

  public function setInternal6($internal6)
  {
    $this->internal6 = $internal6;
  }

  public function getInternal6()
  {
    return $this->internal6;
  }

  public function setInternal7($internal7)
  {
    $this->internal7 = $internal7;
  }

  public function getInternal7()
  {
    return $this->internal7;
  }

  public function setInternal8($internal8)
  {
    $this->internal8 = $internal8;
  }

  public function getInternal8()
  {
    return $this->internal8;
  }

  public function setInventories($inventories)
  {
    $this->inventories = $inventories;
  }

  public function getInventories()
  {
    return $this->inventories;
  }

  public function setLanguage($language)
  {
    $this->language = $language;
  }

  public function getLanguage()
  {
    return $this->language;
  }

  public function setLink($link)
  {
    $this->link = $link;
  }

  public function getLink()
  {
    return $this->link;
  }

  public function setModificationTime($modificationTime)
  {
    $this->modificationTime = $modificationTime;
  }

  public function getModificationTime()
  {
    return $this->modificationTime;
  }

  public function setMpns($mpns)
  {
    $this->mpns = $mpns;
  }

  public function getMpns()
  {
    return $this->mpns;
  }

  public function setPlusOne($plusOne)
  {
    $this->plusOne = $plusOne;
  }

  public function getPlusOne()
  {
    return $this->plusOne;
  }

  public function setProvidedId($providedId)
  {
    $this->providedId = $providedId;
  }

  public function getProvidedId()
  {
    return $this->providedId;
  }

  public function setQueryMatched($queryMatched)
  {
    $this->queryMatched = $queryMatched;
  }

  public function getQueryMatched()
  {
    return $this->queryMatched;
  }

  public function setScore($score)
  {
    $this->score = $score;
  }

  public function getScore()
  {
    return $this->score;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTotalMatchingVariants($totalMatchingVariants)
  {
    $this->totalMatchingVariants = $totalMatchingVariants;
  }

  public function getTotalMatchingVariants()
  {
    return $this->totalMatchingVariants;
  }

  public function setVariants($variants)
  {
    $this->variants = $variants;
  }

  public function getVariants()
  {
    return $this->variants;
  }
}
