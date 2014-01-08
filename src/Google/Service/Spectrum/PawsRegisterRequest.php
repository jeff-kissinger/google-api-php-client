<?php
namespace Google\Service\Spectrum;

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


class PawsRegisterRequest extends \Google\Model
{
  protected $antennaType = '\Google\Service\Spectrum\AntennaCharacteristics';
  protected $antennaDataType = '';
  protected $deviceDescType = '\Google\Service\Spectrum\DeviceDescriptor';
  protected $deviceDescDataType = '';
  protected $deviceOwnerType = '\Google\Service\Spectrum\DeviceOwner';
  protected $deviceOwnerDataType = '';
  protected $locationType = '\Google\Service\Spectrum\GeoLocation';
  protected $locationDataType = '';
  public $type;
  public $version;

  public function setAntenna(\Google\Service\Spectrum\AntennaCharacteristics $antenna)
  {
    $this->antenna = $antenna;
  }

  public function getAntenna()
  {
    return $this->antenna;
  }
  
  public function setDeviceDesc(\Google\Service\Spectrum\DeviceDescriptor $deviceDesc)
  {
    $this->deviceDesc = $deviceDesc;
  }

  public function getDeviceDesc()
  {
    return $this->deviceDesc;
  }
  
  public function setDeviceOwner(\Google\Service\Spectrum\DeviceOwner $deviceOwner)
  {
    $this->deviceOwner = $deviceOwner;
  }

  public function getDeviceOwner()
  {
    return $this->deviceOwner;
  }
  
  public function setLocation(\Google\Service\Spectrum\GeoLocation $location)
  {
    $this->location = $location;
  }

  public function getLocation()
  {
    return $this->location;
  }
  
  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
  
  public function setVersion($version)
  {
    $this->version = $version;
  }

  public function getVersion()
  {
    return $this->version;
  }
  
}
