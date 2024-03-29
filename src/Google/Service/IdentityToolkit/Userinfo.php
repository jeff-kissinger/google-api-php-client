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


class Userinfo extends \Google\Model
{
  public $email;
  public $kind;
  public $localId;
  public $password;
  public $salt;

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
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
  
  public function setSalt($salt)
  {
    $this->salt = $salt;
  }

  public function getSalt()
  {
    return $this->salt;
  }
  
}
