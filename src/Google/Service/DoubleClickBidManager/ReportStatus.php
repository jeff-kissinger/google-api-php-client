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


class ReportStatus extends \Google\Model
{
  protected $failureType = '\Google\Service\DoubleClickBidManager\ReportFailure';
  protected $failureDataType = '';
  public $finishTimeMs;
  public $format;
  public $state;

  public function setFailure(\Google\Service\DoubleClickBidManager\ReportFailure $failure)
  {
    $this->failure = $failure;
  }

  public function getFailure()
  {
    return $this->failure;
  }

  public function setFinishTimeMs($finishTimeMs)
  {
    $this->finishTimeMs = $finishTimeMs;
  }

  public function getFinishTimeMs()
  {
    return $this->finishTimeMs;
  }

  public function setFormat($format)
  {
    $this->format = $format;
  }

  public function getFormat()
  {
    return $this->format;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
  }
}
