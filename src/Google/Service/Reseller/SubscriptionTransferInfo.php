<?php
namespace Google\Service\Reseller;

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


class SubscriptionTransferInfo extends \Google\Model
{
  public $minimumTransferableSeats;
  public $transferabilityExpirationTime;

  public function setMinimumTransferableSeats($minimumTransferableSeats)
  {
    $this->minimumTransferableSeats = $minimumTransferableSeats;
  }

  public function getMinimumTransferableSeats()
  {
    return $this->minimumTransferableSeats;
  }
  
  public function setTransferabilityExpirationTime($transferabilityExpirationTime)
  {
    $this->transferabilityExpirationTime = $transferabilityExpirationTime;
  }

  public function getTransferabilityExpirationTime()
  {
    return $this->transferabilityExpirationTime;
  }
  
}
