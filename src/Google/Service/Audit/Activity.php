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


class Activity extends \Google\Collection
{
  protected $actorType = '\Google\Service\Audit\ActivityActor';
  protected $actorDataType = '';
  protected $eventsType = '\Google\Service\Audit\ActivityEvents';
  protected $eventsDataType = 'array';
  protected $idType = '\Google\Service\Audit\ActivityId';
  protected $idDataType = '';
  public $ipAddress;
  public $kind;
  public $ownerDomain;

  public function setActor(\Google\Service\Audit\ActivityActor $actor)
  {
    $this->actor = $actor;
  }

  public function getActor()
  {
    return $this->actor;
  }
  
  public function setEvents($events)
  {
    $this->events = $events;
  }

  public function getEvents()
  {
    return $this->events;
  }
  
  public function setId(\Google\Service\Audit\ActivityId $id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }
  
  public function setIpAddress($ipAddress)
  {
    $this->ipAddress = $ipAddress;
  }

  public function getIpAddress()
  {
    return $this->ipAddress;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setOwnerDomain($ownerDomain)
  {
    $this->ownerDomain = $ownerDomain;
  }

  public function getOwnerDomain()
  {
    return $this->ownerDomain;
  }
  
}
