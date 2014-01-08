<?php
namespace Google\Service\AdSenseHost;

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


class AdUnit extends \Google\Model
{
  public $code;
  protected $contentAdsSettingsType = '\Google\Service\AdSenseHost\AdUnitContentAdsSettings';
  protected $contentAdsSettingsDataType = '';
  protected $customStyleType = '\Google\Service\AdSenseHost\AdStyle';
  protected $customStyleDataType = '';
  public $id;
  public $kind;
  protected $mobileContentAdsSettingsType = '\Google\Service\AdSenseHost\AdUnitMobileContentAdsSettings';
  protected $mobileContentAdsSettingsDataType = '';
  public $name;
  public $status;

  public function setCode($code)
  {
    $this->code = $code;
  }

  public function getCode()
  {
    return $this->code;
  }

  public function setContentAdsSettings(\Google\Service\AdSenseHost\AdUnitContentAdsSettings $contentAdsSettings)
  {
    $this->contentAdsSettings = $contentAdsSettings;
  }

  public function getContentAdsSettings()
  {
    return $this->contentAdsSettings;
  }

  public function setCustomStyle(\Google\Service\AdSenseHost\AdStyle $customStyle)
  {
    $this->customStyle = $customStyle;
  }

  public function getCustomStyle()
  {
    return $this->customStyle;
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

  public function setMobileContentAdsSettings(\Google\Service\AdSenseHost\AdUnitMobileContentAdsSettings $mobileContentAdsSettings)
  {
    $this->mobileContentAdsSettings = $mobileContentAdsSettings;
  }

  public function getMobileContentAdsSettings()
  {
    return $this->mobileContentAdsSettings;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}
