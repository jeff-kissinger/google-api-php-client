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


class PawsGetSpectrumRequest extends \Google\Model
{
  protected $antennaType = '\Google\Service\Spectrum\AntennaCharacteristics';
  protected $antennaDataType = '';
  protected $capabilitiesType = '\Google\Service\Spectrum\DeviceCapabilities';
  protected $capabilitiesDataType = '';
  protected $deviceDescType = '\Google\Service\Spectrum\DeviceDescriptor';
  protected $deviceDescDataType = '';
  protected $locationType = '\Google\Service\Spectrum\GeoLocation';
  protected $locationDataType = '';
  protected $masterDeviceDescType = '\Google\Service\Spectrum\DeviceDescriptor';
  protected $masterDeviceDescDataType = '';
  protected $ownerType = '\Google\Service\Spectrum\DeviceOwner';
  protected $ownerDataType = '';
  public $requestType;
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
  
  public function setCapabilities(\Google\Service\Spectrum\DeviceCapabilities $capabilities)
  {
    $this->capabilities = $capabilities;
  }

  public function getCapabilities()
  {
    return $this->capabilities;
  }
  
  public function setDeviceDesc(\Google\Service\Spectrum\DeviceDescriptor $deviceDesc)
  {
    $this->deviceDesc = $deviceDesc;
  }

  public function getDeviceDesc()
  {
    return $this->deviceDesc;
  }
  
  public function setLocation(\Google\Service\Spectrum\GeoLocation $location)
  {
    $this->location = $location;
  }

  public function getLocation()
  {
    return $this->location;
  }
  
  public function setMasterDeviceDesc(\Google\Service\Spectrum\DeviceDescriptor $masterDeviceDesc)
  {
    $this->masterDeviceDesc = $masterDeviceDesc;
  }

  public function getMasterDeviceDesc()
  {
    return $this->masterDeviceDesc;
  }
  
  public function setOwner(\Google\Service\Spectrum\DeviceOwner $owner)
  {
    $this->owner = $owner;
  }

  public function getOwner()
  {
    return $this->owner;
  }
  
  public function setRequestType($requestType)
  {
    $this->requestType = $requestType;
  }

  public function getRequestType()
  {
    return $this->requestType;
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
