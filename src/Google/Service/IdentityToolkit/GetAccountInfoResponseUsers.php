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


class GetAccountInfoResponseUsers extends \Google\Collection
{
  public $dateOfBirth;
  public $displayName;
  public $email;
  public $language;
  public $localId;
  public $password;
  public $passwordUpdatedAt;
  public $photoUrl;
  protected $providerUserInfoType = '\Google\Service\IdentityToolkit\GetAccountInfoResponseUsersProviderUserInfo';
  protected $providerUserInfoDataType = 'array';
  public $salt;
  public $timeZone;
  public $version;

  public function setDateOfBirth($dateOfBirth)
  {
    $this->dateOfBirth = $dateOfBirth;
  }

  public function getDateOfBirth()
  {
    return $this->dateOfBirth;
  }
  
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }
  
  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }
  
  public function setLanguage($language)
  {
    $this->language = $language;
  }

  public function getLanguage()
  {
    return $this->language;
  }
  
  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }

  public function getLocalId()
  {
    return $this->localId;
  }
  
  public function setPassword($password)
  {
    $this->password = $password;
  }

  public function getPassword()
  {
    return $this->password;
  }
  
  public function setPasswordUpdatedAt($passwordUpdatedAt)
  {
    $this->passwordUpdatedAt = $passwordUpdatedAt;
  }

  public function getPasswordUpdatedAt()
  {
    return $this->passwordUpdatedAt;
  }
  
  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }

  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }
  
  public function setProviderUserInfo($providerUserInfo)
  {
    $this->providerUserInfo = $providerUserInfo;
  }

  public function getProviderUserInfo()
  {
    return $this->providerUserInfo;
  }
  
  public function setSalt($salt)
  {
    $this->salt = $salt;
  }

  public function getSalt()
  {
    return $this->salt;
  }
  
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }

  public function getTimeZone()
  {
    return $this->timeZone;
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
