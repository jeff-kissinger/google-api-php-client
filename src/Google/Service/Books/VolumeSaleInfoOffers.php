<?php
namespace Google\Service\Books;

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


class VolumeSaleInfoOffers extends \Google\Model
{
  public $finskyOfferType;
  protected $listPriceType = '\Google\Service\Books\VolumeSaleInfoOffersListPrice';
  protected $listPriceDataType = '';
  protected $rentalDurationType = '\Google\Service\Books\VolumeSaleInfoOffersRentalDuration';
  protected $rentalDurationDataType = '';
  protected $retailPriceType = '\Google\Service\Books\VolumeSaleInfoOffersRetailPrice';
  protected $retailPriceDataType = '';

  public function setFinskyOfferType($finskyOfferType)
  {
    $this->finskyOfferType = $finskyOfferType;
  }

  public function getFinskyOfferType()
  {
    return $this->finskyOfferType;
  }

  public function setListPrice(\Google\Service\Books\VolumeSaleInfoOffersListPrice $listPrice)
  {
    $this->listPrice = $listPrice;
  }

  public function getListPrice()
  {
    return $this->listPrice;
  }

  public function setRentalDuration(\Google\Service\Books\VolumeSaleInfoOffersRentalDuration $rentalDuration)
  {
    $this->rentalDuration = $rentalDuration;
  }

  public function getRentalDuration()
  {
    return $this->rentalDuration;
  }

  public function setRetailPrice(\Google\Service\Books\VolumeSaleInfoOffersRetailPrice $retailPrice)
  {
    $this->retailPrice = $retailPrice;
  }

  public function getRetailPrice()
  {
    return $this->retailPrice;
  }
}
