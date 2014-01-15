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


class ShoppingModelProductJsonV1Inventories extends \Google\Model
{
  public $availability;
  public $channel;
  public $currency;
  public $distance;
  public $distanceUnit;
  public $installmentMonths;
  public $installmentPrice;
  public $originalPrice;
  public $price;
  public $saleEndDate;
  public $salePrice;
  public $saleStartDate;
  public $shipping;
  public $storeId;
  public $tax;

  public function setAvailability($availability)
  {
    $this->availability = $availability;
  }

  public function getAvailability()
  {
    return $this->availability;
  }

  public function setChannel($channel)
  {
    $this->channel = $channel;
  }

  public function getChannel()
  {
    return $this->channel;
  }

  public function setCurrency($currency)
  {
    $this->currency = $currency;
  }

  public function getCurrency()
  {
    return $this->currency;
  }

  public function setDistance($distance)
  {
    $this->distance = $distance;
  }

  public function getDistance()
  {
    return $this->distance;
  }

  public function setDistanceUnit($distanceUnit)
  {
    $this->distanceUnit = $distanceUnit;
  }

  public function getDistanceUnit()
  {
    return $this->distanceUnit;
  }

  public function setInstallmentMonths($installmentMonths)
  {
    $this->installmentMonths = $installmentMonths;
  }

  public function getInstallmentMonths()
  {
    return $this->installmentMonths;
  }

  public function setInstallmentPrice($installmentPrice)
  {
    $this->installmentPrice = $installmentPrice;
  }

  public function getInstallmentPrice()
  {
    return $this->installmentPrice;
  }

  public function setOriginalPrice($originalPrice)
  {
    $this->originalPrice = $originalPrice;
  }

  public function getOriginalPrice()
  {
    return $this->originalPrice;
  }

  public function setPrice($price)
  {
    $this->price = $price;
  }

  public function getPrice()
  {
    return $this->price;
  }

  public function setSaleEndDate($saleEndDate)
  {
    $this->saleEndDate = $saleEndDate;
  }

  public function getSaleEndDate()
  {
    return $this->saleEndDate;
  }

  public function setSalePrice($salePrice)
  {
    $this->salePrice = $salePrice;
  }

  public function getSalePrice()
  {
    return $this->salePrice;
  }

  public function setSaleStartDate($saleStartDate)
  {
    $this->saleStartDate = $saleStartDate;
  }

  public function getSaleStartDate()
  {
    return $this->saleStartDate;
  }

  public function setShipping($shipping)
  {
    $this->shipping = $shipping;
  }

  public function getShipping()
  {
    return $this->shipping;
  }

  public function setStoreId($storeId)
  {
    $this->storeId = $storeId;
  }

  public function getStoreId()
  {
    return $this->storeId;
  }

  public function setTax($tax)
  {
    $this->tax = $tax;
  }

  public function getTax()
  {
    return $this->tax;
  }
}
