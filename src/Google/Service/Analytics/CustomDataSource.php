<?php
namespace Google\Service\Analytics;

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


class CustomDataSource extends \Google\Collection
{
  public $accountId;
  protected $childLinkType = '\Google\Service\Analytics\CustomDataSourceChildLink';
  protected $childLinkDataType = '';
  public $created;
  public $description;
  public $id;
  public $kind;
  public $name;
  protected $parentLinkType = '\Google\Service\Analytics\CustomDataSourceParentLink';
  protected $parentLinkDataType = '';
  public $profilesLinked;
  public $selfLink;
  public $type;
  public $updated;
  public $webPropertyId;

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  public function getAccountId()
  {
    return $this->accountId;
  }
  
  public function setChildLink(\Google\Service\Analytics\CustomDataSourceChildLink $childLink)
  {
    $this->childLink = $childLink;
  }

  public function getChildLink()
  {
    return $this->childLink;
  }
  
  public function setCreated($created)
  {
    $this->created = $created;
  }

  public function getCreated()
  {
    return $this->created;
  }
  
  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }
  
  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }
  
  public function setParentLink(\Google\Service\Analytics\CustomDataSourceParentLink $parentLink)
  {
    $this->parentLink = $parentLink;
  }

  public function getParentLink()
  {
    return $this->parentLink;
  }
  
  public function setProfilesLinked($profilesLinked)
  {
    $this->profilesLinked = $profilesLinked;
  }

  public function getProfilesLinked()
  {
    return $this->profilesLinked;
  }
  
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }
  
  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
  
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }

  public function getUpdated()
  {
    return $this->updated;
  }
  
  public function setWebPropertyId($webPropertyId)
  {
    $this->webPropertyId = $webPropertyId;
  }

  public function getWebPropertyId()
  {
    return $this->webPropertyId;
  }
  
}
