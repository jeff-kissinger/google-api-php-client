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


class ProductsStores extends \Google\Model
{
  public $address;
  public $location;
  public $name;
  public $storeCode;
  public $storeId;
  public $storeName;
  public $telephone;

  public function setAddress($address)
  {
    $this->address = $address;
  }

  public function getAddress()
  {
    return $this->address;
  }

  public function setLocation($location)
  {
    $this->location = $location;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setStoreCode($storeCode)
  {
    $this->storeCode = $storeCode;
  }

  public function getStoreCode()
  {
    return $this->storeCode;
  }

  public function setStoreId($storeId)
  {
    $this->storeId = $storeId;
  }

  public function getStoreId()
  {
    return $this->storeId;
  }

  public function setStoreName($storeName)
  {
    $this->storeName = $storeName;
  }

  public function getStoreName()
  {
    return $this->storeName;
  }

  public function setTelephone($telephone)
  {
    $this->telephone = $telephone;
  }

  public function getTelephone()
  {
    return $this->telephone;
  }
}
