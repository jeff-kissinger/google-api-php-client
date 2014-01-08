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


class CommunityMembersList extends \Google\Collection
{
  public $firstPageToken;
  protected $itemsType = '\Google\Service\Orkut\CommunityMembers';
  protected $itemsDataType = 'array';
  public $kind;
  public $lastPageToken;
  public $nextPageToken;
  public $prevPageToken;

  public function setFirstPageToken($firstPageToken)
  {
    $this->firstPageToken = $firstPageToken;
  }

  public function getFirstPageToken()
  {
    return $this->firstPageToken;
  }
  
  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setLastPageToken($lastPageToken)
  {
    $this->lastPageToken = $lastPageToken;
  }

  public function getLastPageToken()
  {
    return $this->lastPageToken;
  }
  
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  
  public function setPrevPageToken($prevPageToken)
  {
    $this->prevPageToken = $prevPageToken;
  }

  public function getPrevPageToken()
  {
    return $this->prevPageToken;
  }
  
}
