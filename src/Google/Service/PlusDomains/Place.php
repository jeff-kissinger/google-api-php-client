<?php
namespace Google\Service\PlusDomains;

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


class Place extends \Google\Model
{
  protected $addressType = '\Google\Service\PlusDomains\PlaceAddress';
  protected $addressDataType = '';
  public $displayName;
  public $kind;
  protected $positionType = '\Google\Service\PlusDomains\PlacePosition';
  protected $positionDataType = '';

  public function setAddress(\Google\Service\PlusDomains\PlaceAddress $address)
  {
    $this->address = $address;
  }

  public function getAddress()
  {
    return $this->address;
  }
  
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setPosition(\Google\Service\PlusDomains\PlacePosition $position)
  {
    $this->position = $position;
  }

  public function getPosition()
  {
    return $this->position;
  }
  
}
