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


class InvideoPromotion extends \Google\Collection
{
  protected $defaultTimingType = '\Google\Service\YouTube\InvideoTiming';
  protected $defaultTimingDataType = '';
  protected $itemsType = '\Google\Service\YouTube\PromotedItem';
  protected $itemsDataType = 'array';
  protected $positionType = '\Google\Service\YouTube\InvideoPosition';
  protected $positionDataType = '';

  public function setDefaultTiming(\Google\Service\YouTube\InvideoTiming $defaultTiming)
  {
    $this->defaultTiming = $defaultTiming;
  }

  public function getDefaultTiming()
  {
    return $this->defaultTiming;
  }

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setPosition(\Google\Service\YouTube\InvideoPosition $position)
  {
    $this->position = $position;
  }

  public function getPosition()
  {
    return $this->position;
  }
}
