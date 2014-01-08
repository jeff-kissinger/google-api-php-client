<?php
namespace Google\Service\Audit;

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


class ActivityActor extends \Google\Model
{
  public $applicationId;
  public $callerType;
  public $email;
  public $key;

  public function setApplicationId($applicationId)
  {
    $this->applicationId = $applicationId;
  }

  public function getApplicationId()
  {
    return $this->applicationId;
  }
  
  public function setCallerType($callerType)
  {
    $this->callerType = $callerType;
  }

  public function getCallerType()
  {
    return $this->callerType;
  }
  
  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }
  
  public function setKey($key)
  {
    $this->key = $key;
  }

  public function getKey()
  {
    return $this->key;
  }
  
}
