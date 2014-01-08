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


class Settings extends \Google\Collection
{
  public $activationPolicy;
  public $authorizedGaeApplications;
  protected $backupConfigurationType = '\Google\Service\SQLAdmin\BackupConfiguration';
  protected $backupConfigurationDataType = 'array';
  protected $ipConfigurationType = '\Google\Service\SQLAdmin\IpConfiguration';
  protected $ipConfigurationDataType = '';
  public $kind;
  protected $locationPreferenceType = '\Google\Service\SQLAdmin\LocationPreference';
  protected $locationPreferenceDataType = '';
  public $pricingPlan;
  public $replicationType;
  public $settingsVersion;
  public $tier;

  public function setActivationPolicy($activationPolicy)
  {
    $this->activationPolicy = $activationPolicy;
  }

  public function getActivationPolicy()
  {
    return $this->activationPolicy;
  }
  
  public function setAuthorizedGaeApplications($authorizedGaeApplications)
  {
    $this->authorizedGaeApplications = $authorizedGaeApplications;
  }

  public function getAuthorizedGaeApplications()
  {
    return $this->authorizedGaeApplications;
  }
  
  public function setBackupConfiguration($backupConfiguration)
  {
    $this->backupConfiguration = $backupConfiguration;
  }

  public function getBackupConfiguration()
  {
    return $this->backupConfiguration;
  }
  
  public function setIpConfiguration(\Google\Service\SQLAdmin\IpConfiguration $ipConfiguration)
  {
    $this->ipConfiguration = $ipConfiguration;
  }

  public function getIpConfiguration()
  {
    return $this->ipConfiguration;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setLocationPreference(\Google\Service\SQLAdmin\LocationPreference $locationPreference)
  {
    $this->locationPreference = $locationPreference;
  }

  public function getLocationPreference()
  {
    return $this->locationPreference;
  }
  
  public function setPricingPlan($pricingPlan)
  {
    $this->pricingPlan = $pricingPlan;
  }

  public function getPricingPlan()
  {
    return $this->pricingPlan;
  }
  
  public function setReplicationType($replicationType)
  {
    $this->replicationType = $replicationType;
  }

  public function getReplicationType()
  {
    return $this->replicationType;
  }
  
  public function setSettingsVersion($settingsVersion)
  {
    $this->settingsVersion = $settingsVersion;
  }

  public function getSettingsVersion()
  {
    return $this->settingsVersion;
  }
  
  public function setTier($tier)
  {
    $this->tier = $tier;
  }

  public function getTier()
  {
    return $this->tier;
  }
  
}
