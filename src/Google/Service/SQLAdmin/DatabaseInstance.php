<?php
namespace Google\Service\SQLAdmin;

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


class DatabaseInstance extends \Google\Collection
{
  public $currentDiskSize;
  public $databaseVersion;
  public $etag;
  public $instance;
  protected $ipAddressesType = '\Google\Service\SQLAdmin\IpMapping';
  protected $ipAddressesDataType = 'array';
  public $kind;
  public $maxDiskSize;
  public $project;
  public $region;
  protected $serverCaCertType = '\Google\Service\SQLAdmin\SslCert';
  protected $serverCaCertDataType = '';
  protected $settingsType = '\Google\Service\SQLAdmin\Settings';
  protected $settingsDataType = '';
  public $state;

  public function setCurrentDiskSize($currentDiskSize)
  {
    $this->currentDiskSize = $currentDiskSize;
  }

  public function getCurrentDiskSize()
  {
    return $this->currentDiskSize;
  }
  
  public function setDatabaseVersion($databaseVersion)
  {
    $this->databaseVersion = $databaseVersion;
  }

  public function getDatabaseVersion()
  {
    return $this->databaseVersion;
  }
  
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }
  
  public function setInstance($instance)
  {
    $this->instance = $instance;
  }

  public function getInstance()
  {
    return $this->instance;
  }
  
  public function setIpAddresses($ipAddresses)
  {
    $this->ipAddresses = $ipAddresses;
  }

  public function getIpAddresses()
  {
    return $this->ipAddresses;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setMaxDiskSize($maxDiskSize)
  {
    $this->maxDiskSize = $maxDiskSize;
  }

  public function getMaxDiskSize()
  {
    return $this->maxDiskSize;
  }
  
  public function setProject($project)
  {
    $this->project = $project;
  }

  public function getProject()
  {
    return $this->project;
  }
  
  public function setRegion($region)
  {
    $this->region = $region;
  }

  public function getRegion()
  {
    return $this->region;
  }
  
  public function setServerCaCert(\Google\Service\SQLAdmin\SslCert $serverCaCert)
  {
    $this->serverCaCert = $serverCaCert;
  }

  public function getServerCaCert()
  {
    return $this->serverCaCert;
  }
  
  public function setSettings(\Google\Service\SQLAdmin\Settings $settings)
  {
    $this->settings = $settings;
  }

  public function getSettings()
  {
    return $this->settings;
  }
  
  public function setState($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
  }
  
}
