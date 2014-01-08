<?php
namespace Google\Service\Games;

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


class Room extends \Google\Collection
{
  public $applicationId;
  protected $autoMatchingCriteriaType = '\Google\Service\Games\RoomAutoMatchingCriteria';
  protected $autoMatchingCriteriaDataType = '';
  protected $autoMatchingStatusType = '\Google\Service\Games\RoomAutoMatchStatus';
  protected $autoMatchingStatusDataType = '';
  protected $creationDetailsType = '\Google\Service\Games\RoomModification';
  protected $creationDetailsDataType = '';
  public $description;
  public $kind;
  protected $lastUpdateDetailsType = '\Google\Service\Games\RoomModification';
  protected $lastUpdateDetailsDataType = '';
  protected $participantsType = '\Google\Service\Games\RoomParticipant';
  protected $participantsDataType = 'array';
  public $roomId;
  public $roomStatusVersion;
  public $status;
  public $variant;

  public function setApplicationId($applicationId)
  {
    $this->applicationId = $applicationId;
  }

  public function getApplicationId()
  {
    return $this->applicationId;
  }
  
  public function setAutoMatchingCriteria(\Google\Service\Games\RoomAutoMatchingCriteria $autoMatchingCriteria)
  {
    $this->autoMatchingCriteria = $autoMatchingCriteria;
  }

  public function getAutoMatchingCriteria()
  {
    return $this->autoMatchingCriteria;
  }
  
  public function setAutoMatchingStatus(\Google\Service\Games\RoomAutoMatchStatus $autoMatchingStatus)
  {
    $this->autoMatchingStatus = $autoMatchingStatus;
  }

  public function getAutoMatchingStatus()
  {
    return $this->autoMatchingStatus;
  }
  
  public function setCreationDetails(\Google\Service\Games\RoomModification $creationDetails)
  {
    $this->creationDetails = $creationDetails;
  }

  public function getCreationDetails()
  {
    return $this->creationDetails;
  }
  
  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setLastUpdateDetails(\Google\Service\Games\RoomModification $lastUpdateDetails)
  {
    $this->lastUpdateDetails = $lastUpdateDetails;
  }

  public function getLastUpdateDetails()
  {
    return $this->lastUpdateDetails;
  }
  
  public function setParticipants($participants)
  {
    $this->participants = $participants;
  }

  public function getParticipants()
  {
    return $this->participants;
  }
  
  public function setRoomId($roomId)
  {
    $this->roomId = $roomId;
  }

  public function getRoomId()
  {
    return $this->roomId;
  }
  
  public function setRoomStatusVersion($roomStatusVersion)
  {
    $this->roomStatusVersion = $roomStatusVersion;
  }

  public function getRoomStatusVersion()
  {
    return $this->roomStatusVersion;
  }
  
  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
  
  public function setVariant($variant)
  {
    $this->variant = $variant;
  }

  public function getVariant()
  {
    return $this->variant;
  }
  
}
