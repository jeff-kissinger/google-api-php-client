<?php
namespace Google\Service\Dfareporting;

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


class CrossDimensionReachReportCompatibleFields extends \Google\Collection
{
  protected $breakdownType = '\Google\Service\Dfareporting\Dimension';
  protected $breakdownDataType = 'array';
  protected $dimensionFiltersType = '\Google\Service\Dfareporting\Dimension';
  protected $dimensionFiltersDataType = 'array';
  public $kind;
  protected $metricsType = '\Google\Service\Dfareporting\Metric';
  protected $metricsDataType = 'array';
  protected $overlapMetricsType = '\Google\Service\Dfareporting\Metric';
  protected $overlapMetricsDataType = 'array';

  public function setBreakdown($breakdown)
  {
    $this->breakdown = $breakdown;
  }

  public function getBreakdown()
  {
    return $this->breakdown;
  }
  
  public function setDimensionFilters($dimensionFilters)
  {
    $this->dimensionFilters = $dimensionFilters;
  }

  public function getDimensionFilters()
  {
    return $this->dimensionFilters;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }

  public function getMetrics()
  {
    return $this->metrics;
  }
  
  public function setOverlapMetrics($overlapMetrics)
  {
    $this->overlapMetrics = $overlapMetrics;
  }

  public function getOverlapMetrics()
  {
    return $this->overlapMetrics;
  }
  
}
