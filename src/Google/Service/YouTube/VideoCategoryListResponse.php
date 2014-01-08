<?php
namespace Google\Service\YouTube;

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


class VideoCategoryListResponse extends \Google\Collection
{
  public $etag;
  public $eventId;
  protected $itemsType = '\Google\Service\YouTube\VideoCategory';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  protected $pageInfoType = '\Google\Service\YouTube\PageInfo';
  protected $pageInfoDataType = '';
  public $prevPageToken;
  protected $tokenPaginationType = '\Google\Service\YouTube\TokenPagination';
  protected $tokenPaginationDataType = '';
  public $visitorId;

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }

  public function getEventId()
  {
    return $this->eventId;
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

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setPageInfo(\Google\Service\YouTube\PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }

  public function getPageInfo()
  {
    return $this->pageInfo;
  }

  public function setPrevPageToken($prevPageToken)
  {
    $this->prevPageToken = $prevPageToken;
  }

  public function getPrevPageToken()
  {
    return $this->prevPageToken;
  }

  public function setTokenPagination(\Google\Service\YouTube\TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }

  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }

  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }

  public function getVisitorId()
  {
    return $this->visitorId;
  }
}
