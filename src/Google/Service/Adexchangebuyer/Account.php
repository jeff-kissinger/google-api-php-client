<?php
namespace Google\Service\Adexchangebuyer;

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


class Account extends \Google\Collection
{
  protected $bidderLocationType = '\Google\Service\Adexchangebuyer\AccountBidderLocation';
  protected $bidderLocationDataType = 'array';
  public $cookieMatchingNid;
  public $cookieMatchingUrl;
  public $id;
  public $kind;
  public $maximumTotalQps;

  public function setBidderLocation($bidderLocation)
  {
    $this->bidderLocation = $bidderLocation;
  }

  public function getBidderLocation()
  {
    return $this->bidderLocation;
  }
  
  public function setCookieMatchingNid($cookieMatchingNid)
  {
    $this->cookieMatchingNid = $cookieMatchingNid;
  }

  public function getCookieMatchingNid()
  {
    return $this->cookieMatchingNid;
  }
  
  public function setCookieMatchingUrl($cookieMatchingUrl)
  {
    $this->cookieMatchingUrl = $cookieMatchingUrl;
  }

  public function getCookieMatchingUrl()
  {
    return $this->cookieMatchingUrl;
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
  
  public function setMaximumTotalQps($maximumTotalQps)
  {
    $this->maximumTotalQps = $maximumTotalQps;
  }

  public function getMaximumTotalQps()
  {
    return $this->maximumTotalQps;
  }
  
}
