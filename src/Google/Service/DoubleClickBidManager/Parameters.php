<?php
namespace Google\Service\DoubleClickBidManager;

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


class Parameters extends \Google\Collection
{
  protected $filtersType = '\Google\Service\DoubleClickBidManager\FilterPair';
  protected $filtersDataType = 'array';
  public $groupBys;
  public $includeInviteData;
  public $metrics;
  public $type;

  public function setFilters($filters)
  {
    $this->filters = $filters;
  }

  public function getFilters()
  {
    return $this->filters;
  }

  public function setGroupBys($groupBys)
  {
    $this->groupBys = $groupBys;
  }

  public function getGroupBys()
  {
    return $this->groupBys;
  }

  public function setIncludeInviteData($includeInviteData)
  {
    $this->includeInviteData = $includeInviteData;
  }

  public function getIncludeInviteData()
  {
    return $this->includeInviteData;
  }

  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }

  public function getMetrics()
  {
    return $this->metrics;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
