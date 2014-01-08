<?php
namespace Google\Service\Orkut;

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


class CommunityMembershipStatus extends \Google\Model
{
  public $canCreatePoll;
  public $canCreateTopic;
  public $canShout;
  public $isCoOwner;
  public $isFollowing;
  public $isModerator;
  public $isOwner;
  public $isRestoreAvailable;
  public $isTakebackAvailable;
  public $kind;
  public $status;

  public function setCanCreatePoll($canCreatePoll)
  {
    $this->canCreatePoll = $canCreatePoll;
  }

  public function getCanCreatePoll()
  {
    return $this->canCreatePoll;
  }
  
  public function setCanCreateTopic($canCreateTopic)
  {
    $this->canCreateTopic = $canCreateTopic;
  }

  public function getCanCreateTopic()
  {
    return $this->canCreateTopic;
  }
  
  public function setCanShout($canShout)
  {
    $this->canShout = $canShout;
  }

  public function getCanShout()
  {
    return $this->canShout;
  }
  
  public function setIsCoOwner($isCoOwner)
  {
    $this->isCoOwner = $isCoOwner;
  }

  public function getIsCoOwner()
  {
    return $this->isCoOwner;
  }
  
  public function setIsFollowing($isFollowing)
  {
    $this->isFollowing = $isFollowing;
  }

  public function getIsFollowing()
  {
    return $this->isFollowing;
  }
  
  public function setIsModerator($isModerator)
  {
    $this->isModerator = $isModerator;
  }

  public function getIsModerator()
  {
    return $this->isModerator;
  }
  
  public function setIsOwner($isOwner)
  {
    $this->isOwner = $isOwner;
  }

  public function getIsOwner()
  {
    return $this->isOwner;
  }
  
  public function setIsRestoreAvailable($isRestoreAvailable)
  {
    $this->isRestoreAvailable = $isRestoreAvailable;
  }

  public function getIsRestoreAvailable()
  {
    return $this->isRestoreAvailable;
  }
  
  public function setIsTakebackAvailable($isTakebackAvailable)
  {
    $this->isTakebackAvailable = $isTakebackAvailable;
  }

  public function getIsTakebackAvailable()
  {
    return $this->isTakebackAvailable;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
  
}
