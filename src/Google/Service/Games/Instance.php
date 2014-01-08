<?php
namespace Google\Service\Games;

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


class Instance extends \Google\Model
{
  public $acquisitionUri;
  protected $androidInstanceType = '\Google\Service\Games\InstanceAndroidDetails';
  protected $androidInstanceDataType = '';
  protected $iosInstanceType = '\Google\Service\Games\InstanceIosDetails';
  protected $iosInstanceDataType = '';
  public $kind;
  public $name;
  public $platformType;
  public $realtimePlay;
  public $turnBasedPlay;
  protected $webInstanceType = '\Google\Service\Games\InstanceWebDetails';
  protected $webInstanceDataType = '';

  public function setAcquisitionUri($acquisitionUri)
  {
    $this->acquisitionUri = $acquisitionUri;
  }

  public function getAcquisitionUri()
  {
    return $this->acquisitionUri;
  }
  
  public function setAndroidInstance(\Google\Service\Games\InstanceAndroidDetails $androidInstance)
  {
    $this->androidInstance = $androidInstance;
  }

  public function getAndroidInstance()
  {
    return $this->androidInstance;
  }
  
  public function setIosInstance(\Google\Service\Games\InstanceIosDetails $iosInstance)
  {
    $this->iosInstance = $iosInstance;
  }

  public function getIosInstance()
  {
    return $this->iosInstance;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }
  
  public function setPlatformType($platformType)
  {
    $this->platformType = $platformType;
  }

  public function getPlatformType()
  {
    return $this->platformType;
  }
  
  public function setRealtimePlay($realtimePlay)
  {
    $this->realtimePlay = $realtimePlay;
  }

  public function getRealtimePlay()
  {
    return $this->realtimePlay;
  }
  
  public function setTurnBasedPlay($turnBasedPlay)
  {
    $this->turnBasedPlay = $turnBasedPlay;
  }

  public function getTurnBasedPlay()
  {
    return $this->turnBasedPlay;
  }
  
  public function setWebInstance(\Google\Service\Games\InstanceWebDetails $webInstance)
  {
    $this->webInstance = $webInstance;
  }

  public function getWebInstance()
  {
    return $this->webInstance;
  }
  
}
