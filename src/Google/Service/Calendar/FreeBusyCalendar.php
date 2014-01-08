<?php
namespace Google\Service\Calendar;

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


class FreeBusyCalendar extends \Google\Collection
{
  protected $busyType = '\Google\Service\Calendar\TimePeriod';
  protected $busyDataType = 'array';
  protected $errorsType = '\Google\Service\Calendar\Error';
  protected $errorsDataType = 'array';

  public function setBusy($busy)
  {
    $this->busy = $busy;
  }

  public function getBusy()
  {
    return $this->busy;
  }

  public function setErrors($errors)
  {
    $this->errors = $errors;
  }

  public function getErrors()
  {
    return $this->errors;
  }
}
