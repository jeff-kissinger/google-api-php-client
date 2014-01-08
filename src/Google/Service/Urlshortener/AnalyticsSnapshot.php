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


class AnalyticsSnapshot extends \Google\Collection
{
  protected $browsersType = '\Google\Service\Urlshortener\StringCount';
  protected $browsersDataType = 'array';
  protected $countriesType = '\Google\Service\Urlshortener\StringCount';
  protected $countriesDataType = 'array';
  public $longUrlClicks;
  protected $platformsType = '\Google\Service\Urlshortener\StringCount';
  protected $platformsDataType = 'array';
  protected $referrersType = '\Google\Service\Urlshortener\StringCount';
  protected $referrersDataType = 'array';
  public $shortUrlClicks;

  public function setBrowsers($browsers)
  {
    $this->browsers = $browsers;
  }

  public function getBrowsers()
  {
    return $this->browsers;
  }
  
  public function setCountries($countries)
  {
    $this->countries = $countries;
  }

  public function getCountries()
  {
    return $this->countries;
  }
  
  public function setLongUrlClicks($longUrlClicks)
  {
    $this->longUrlClicks = $longUrlClicks;
  }

  public function getLongUrlClicks()
  {
    return $this->longUrlClicks;
  }
  
  public function setPlatforms($platforms)
  {
    $this->platforms = $platforms;
  }

  public function getPlatforms()
  {
    return $this->platforms;
  }
  
  public function setReferrers($referrers)
  {
    $this->referrers = $referrers;
  }

  public function getReferrers()
  {
    return $this->referrers;
  }
  
  public function setShortUrlClicks($shortUrlClicks)
  {
    $this->shortUrlClicks = $shortUrlClicks;
  }

  public function getShortUrlClicks()
  {
    return $this->shortUrlClicks;
  }
  
}
