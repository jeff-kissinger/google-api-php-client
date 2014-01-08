<?php
namespace Google\Service\Shopping;

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


class BackendTimes extends \Google\Model
{
  public $elapsedMillis;
  public $hostName;
  public $name;
  public $serverMillis;

  public function setElapsedMillis($elapsedMillis)
  {
    $this->elapsedMillis = $elapsedMillis;
  }

  public function getElapsedMillis()
  {
    return $this->elapsedMillis;
  }

  public function setHostName($hostName)
  {
    $this->hostName = $hostName;
  }

  public function getHostName()
  {
    return $this->hostName;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setServerMillis($serverMillis)
  {
    $this->serverMillis = $serverMillis;
  }

  public function getServerMillis()
  {
    return $this->serverMillis;
  }
}
