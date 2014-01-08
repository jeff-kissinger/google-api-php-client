<?php
namespace Google\Service\Orkut;

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


class Badge extends \Google\Model
{
  public $badgeLargeLogo;
  public $badgeSmallLogo;
  public $caption;
  public $description;
  public $id;
  public $kind;
  public $sponsorLogo;
  public $sponsorName;
  public $sponsorUrl;

  public function setBadgeLargeLogo($badgeLargeLogo)
  {
    $this->badgeLargeLogo = $badgeLargeLogo;
  }

  public function getBadgeLargeLogo()
  {
    return $this->badgeLargeLogo;
  }
  
  public function setBadgeSmallLogo($badgeSmallLogo)
  {
    $this->badgeSmallLogo = $badgeSmallLogo;
  }

  public function getBadgeSmallLogo()
  {
    return $this->badgeSmallLogo;
  }
  
  public function setCaption($caption)
  {
    $this->caption = $caption;
  }

  public function getCaption()
  {
    return $this->caption;
  }
  
  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
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
  
  public function setSponsorLogo($sponsorLogo)
  {
    $this->sponsorLogo = $sponsorLogo;
  }

  public function getSponsorLogo()
  {
    return $this->sponsorLogo;
  }
  
  public function setSponsorName($sponsorName)
  {
    $this->sponsorName = $sponsorName;
  }

  public function getSponsorName()
  {
    return $this->sponsorName;
  }
  
  public function setSponsorUrl($sponsorUrl)
  {
    $this->sponsorUrl = $sponsorUrl;
  }

  public function getSponsorUrl()
  {
    return $this->sponsorUrl;
  }
  
}
