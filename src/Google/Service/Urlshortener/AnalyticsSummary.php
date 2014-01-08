<?php
namespace Google\Service\Urlshortener;

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


class AnalyticsSummary extends \Google\Model
{
  protected $allTimeType = '\Google\Service\Urlshortener\AnalyticsSnapshot';
  protected $allTimeDataType = '';
  protected $dayType = '\Google\Service\Urlshortener\AnalyticsSnapshot';
  protected $dayDataType = '';
  protected $monthType = '\Google\Service\Urlshortener\AnalyticsSnapshot';
  protected $monthDataType = '';
  protected $twoHoursType = '\Google\Service\Urlshortener\AnalyticsSnapshot';
  protected $twoHoursDataType = '';
  protected $weekType = '\Google\Service\Urlshortener\AnalyticsSnapshot';
  protected $weekDataType = '';

  public function setAllTime(\Google\Service\Urlshortener\AnalyticsSnapshot $allTime)
  {
    $this->allTime = $allTime;
  }

  public function getAllTime()
  {
    return $this->allTime;
  }
  
  public function setDay(\Google\Service\Urlshortener\AnalyticsSnapshot $day)
  {
    $this->day = $day;
  }

  public function getDay()
  {
    return $this->day;
  }
  
  public function setMonth(\Google\Service\Urlshortener\AnalyticsSnapshot $month)
  {
    $this->month = $month;
  }

  public function getMonth()
  {
    return $this->month;
  }
  
  public function setTwoHours(\Google\Service\Urlshortener\AnalyticsSnapshot $twoHours)
  {
    $this->twoHours = $twoHours;
  }

  public function getTwoHours()
  {
    return $this->twoHours;
  }
  
  public function setWeek(\Google\Service\Urlshortener\AnalyticsSnapshot $week)
  {
    $this->week = $week;
  }

  public function getWeek()
  {
    return $this->week;
  }
  
}
