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


class CommunityMembers extends \Google\Model
{
  protected $communityMembershipStatusType = '\Google\Service\Orkut\CommunityMembershipStatus';
  protected $communityMembershipStatusDataType = '';
  public $kind;
  protected $personType = '\Google\Service\Orkut\OrkutActivitypersonResource';
  protected $personDataType = '';

  public function setCommunityMembershipStatus(\Google\Service\Orkut\CommunityMembershipStatus $communityMembershipStatus)
  {
    $this->communityMembershipStatus = $communityMembershipStatus;
  }

  public function getCommunityMembershipStatus()
  {
    return $this->communityMembershipStatus;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setPerson(\Google\Service\Orkut\OrkutActivitypersonResource $person)
  {
    $this->person = $person;
  }

  public function getPerson()
  {
    return $this->person;
  }
  
}
