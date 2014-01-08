<?php
namespace Google\Service\IdentityToolkit;

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


class CreateAuthUriResponse extends \Google\Collection
{
  public $authUri;
  public $kind;
  public $providerId;
  public $providers;
  public $registered;

  public function setAuthUri($authUri)
  {
    $this->authUri = $authUri;
  }

  public function getAuthUri()
  {
    return $this->authUri;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setProviderId($providerId)
  {
    $this->providerId = $providerId;
  }

  public function getProviderId()
  {
    return $this->providerId;
  }
  
  public function setProviders($providers)
  {
    $this->providers = $providers;
  }

  public function getProviders()
  {
    return $this->providers;
  }
  
  public function setRegistered($registered)
  {
    $this->registered = $registered;
  }

  public function getRegistered()
  {
    return $this->registered;
  }
  
}
