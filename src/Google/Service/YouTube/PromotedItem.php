<?php
namespace Google\Service\YouTube;

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


class PromotedItem extends \Google\Model
{
  public $customMessage;
  protected $idType = '\Google\Service\YouTube\PromotedItemId';
  protected $idDataType = '';
  public $promotedByContentOwner;
  protected $timingType = '\Google\Service\YouTube\InvideoTiming';
  protected $timingDataType = '';

  public function setCustomMessage($customMessage)
  {
    $this->customMessage = $customMessage;
  }

  public function getCustomMessage()
  {
    return $this->customMessage;
  }

  public function setId(\Google\Service\YouTube\PromotedItemId $id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setPromotedByContentOwner($promotedByContentOwner)
  {
    $this->promotedByContentOwner = $promotedByContentOwner;
  }

  public function getPromotedByContentOwner()
  {
    return $this->promotedByContentOwner;
  }

  public function setTiming(\Google\Service\YouTube\InvideoTiming $timing)
  {
    $this->timing = $timing;
  }

  public function getTiming()
  {
    return $this->timing;
  }
}
