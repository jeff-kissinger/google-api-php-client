<?php
namespace Google\Service\Adexchangebuyer;

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


class PerformanceReportList extends \Google\Collection
{
  public $kind;
  protected $performanceReportType = '\Google\Service\Adexchangebuyer\PerformanceReport';
  protected $performanceReportDataType = 'array';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setPerformanceReport($performanceReport)
  {
    $this->performanceReport = $performanceReport;
  }

  public function getPerformanceReport()
  {
    return $this->performanceReport;
  }
  
}
