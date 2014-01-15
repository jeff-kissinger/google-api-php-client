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


class ShoppingModelDebugJsonV1 extends \Google\Collection
{
  protected $backendTimesType = '\Google\Service\Shopping\ShoppingModelDebugJsonV1BackendTimes';
  protected $backendTimesDataType = 'array';
  public $elapsedMillis;
  public $facetsRequest;
  public $facetsResponse;
  public $rdcResponse;
  public $recommendedItemsRequest;
  public $recommendedItemsResponse;
  public $searchRequest;
  public $searchResponse;

  public function setBackendTimes($backendTimes)
  {
    $this->backendTimes = $backendTimes;
  }

  public function getBackendTimes()
  {
    return $this->backendTimes;
  }

  public function setElapsedMillis($elapsedMillis)
  {
    $this->elapsedMillis = $elapsedMillis;
  }

  public function getElapsedMillis()
  {
    return $this->elapsedMillis;
  }

  public function setFacetsRequest($facetsRequest)
  {
    $this->facetsRequest = $facetsRequest;
  }

  public function getFacetsRequest()
  {
    return $this->facetsRequest;
  }

  public function setFacetsResponse($facetsResponse)
  {
    $this->facetsResponse = $facetsResponse;
  }

  public function getFacetsResponse()
  {
    return $this->facetsResponse;
  }

  public function setRdcResponse($rdcResponse)
  {
    $this->rdcResponse = $rdcResponse;
  }

  public function getRdcResponse()
  {
    return $this->rdcResponse;
  }

  public function setRecommendedItemsRequest($recommendedItemsRequest)
  {
    $this->recommendedItemsRequest = $recommendedItemsRequest;
  }

  public function getRecommendedItemsRequest()
  {
    return $this->recommendedItemsRequest;
  }

  public function setRecommendedItemsResponse($recommendedItemsResponse)
  {
    $this->recommendedItemsResponse = $recommendedItemsResponse;
  }

  public function getRecommendedItemsResponse()
  {
    return $this->recommendedItemsResponse;
  }

  public function setSearchRequest($searchRequest)
  {
    $this->searchRequest = $searchRequest;
  }

  public function getSearchRequest()
  {
    return $this->searchRequest;
  }

  public function setSearchResponse($searchResponse)
  {
    $this->searchResponse = $searchResponse;
  }

  public function getSearchResponse()
  {
    return $this->searchResponse;
  }
}
