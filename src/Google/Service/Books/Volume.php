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


class Volume extends \Google\Model
{
  protected $accessInfoType = '\Google\Service\Books\VolumeAccessInfo';
  protected $accessInfoDataType = '';
  public $etag;
  public $id;
  public $kind;
  protected $layerInfoType = '\Google\Service\Books\VolumeLayerInfo';
  protected $layerInfoDataType = '';
  protected $recommendedInfoType = '\Google\Service\Books\VolumeRecommendedInfo';
  protected $recommendedInfoDataType = '';
  protected $saleInfoType = '\Google\Service\Books\VolumeSaleInfo';
  protected $saleInfoDataType = '';
  protected $searchInfoType = '\Google\Service\Books\VolumeSearchInfo';
  protected $searchInfoDataType = '';
  public $selfLink;
  protected $userInfoType = '\Google\Service\Books\VolumeUserInfo';
  protected $userInfoDataType = '';
  protected $volumeInfoType = '\Google\Service\Books\VolumeVolumeInfo';
  protected $volumeInfoDataType = '';

  public function setAccessInfo(\Google\Service\Books\VolumeAccessInfo $accessInfo)
  {
    $this->accessInfo = $accessInfo;
  }

  public function getAccessInfo()
  {
    return $this->accessInfo;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
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

  public function setLayerInfo(\Google\Service\Books\VolumeLayerInfo $layerInfo)
  {
    $this->layerInfo = $layerInfo;
  }

  public function getLayerInfo()
  {
    return $this->layerInfo;
  }

  public function setRecommendedInfo(\Google\Service\Books\VolumeRecommendedInfo $recommendedInfo)
  {
    $this->recommendedInfo = $recommendedInfo;
  }

  public function getRecommendedInfo()
  {
    return $this->recommendedInfo;
  }

  public function setSaleInfo(\Google\Service\Books\VolumeSaleInfo $saleInfo)
  {
    $this->saleInfo = $saleInfo;
  }

  public function getSaleInfo()
  {
    return $this->saleInfo;
  }

  public function setSearchInfo(\Google\Service\Books\VolumeSearchInfo $searchInfo)
  {
    $this->searchInfo = $searchInfo;
  }

  public function getSearchInfo()
  {
    return $this->searchInfo;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setUserInfo(\Google\Service\Books\VolumeUserInfo $userInfo)
  {
    $this->userInfo = $userInfo;
  }

  public function getUserInfo()
  {
    return $this->userInfo;
  }

  public function setVolumeInfo(\Google\Service\Books\VolumeVolumeInfo $volumeInfo)
  {
    $this->volumeInfo = $volumeInfo;
  }

  public function getVolumeInfo()
  {
    return $this->volumeInfo;
  }
}
