<?php
namespace Google\Service\Books;

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


class Geolayerdata extends \Google\Model
{
  protected $commonType = '\Google\Service\Books\GeolayerdataCommon';
  protected $commonDataType = '';
  protected $geoType = '\Google\Service\Books\GeolayerdataGeo';
  protected $geoDataType = '';
  public $kind;

  public function setCommon(\Google\Service\Books\GeolayerdataCommon $common)
  {
    $this->common = $common;
  }

  public function getCommon()
  {
    return $this->common;
  }

  public function setGeo(\Google\Service\Books\GeolayerdataGeo $geo)
  {
    $this->geo = $geo;
  }

  public function getGeo()
  {
    return $this->geo;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}
