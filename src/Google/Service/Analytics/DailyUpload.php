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


class DailyUpload extends \Google\Collection
{
  public $accountId;
  public $appendCount;
  public $createdTime;
  public $customDataSourceId;
  public $date;
  public $kind;
  public $modifiedTime;
  protected $parentLinkType = '\Google\Service\Analytics\DailyUploadParentLink';
  protected $parentLinkDataType = '';
  protected $recentChangesType = '\Google\Service\Analytics\DailyUploadRecentChanges';
  protected $recentChangesDataType = 'array';
  public $selfLink;
  public $webPropertyId;

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  public function getAccountId()
  {
    return $this->accountId;
  }
  
  public function setAppendCount($appendCount)
  {
    $this->appendCount = $appendCount;
  }

  public function getAppendCount()
  {
    return $this->appendCount;
  }
  
  public function setCreatedTime($createdTime)
  {
    $this->createdTime = $createdTime;
  }

  public function getCreatedTime()
  {
    return $this->createdTime;
  }
  
  public function setCustomDataSourceId($customDataSourceId)
  {
    $this->customDataSourceId = $customDataSourceId;
  }

  public function getCustomDataSourceId()
  {
    return $this->customDataSourceId;
  }
  
  public function setDate($date)
  {
    $this->date = $date;
  }

  public function getDate()
  {
    return $this->date;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setModifiedTime($modifiedTime)
  {
    $this->modifiedTime = $modifiedTime;
  }

  public function getModifiedTime()
  {
    return $this->modifiedTime;
  }
  
  public function setParentLink(\Google\Service\Analytics\DailyUploadParentLink $parentLink)
  {
    $this->parentLink = $parentLink;
  }

  public function getParentLink()
  {
    return $this->parentLink;
  }
  
  public function setRecentChanges($recentChanges)
  {
    $this->recentChanges = $recentChanges;
  }

  public function getRecentChanges()
  {
    return $this->recentChanges;
  }
  
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
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
