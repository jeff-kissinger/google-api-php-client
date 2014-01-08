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


class InvideoBranding extends \Google\Model
{
  public $imageBytes;
  public $imageUrl;
  protected $positionType = '\Google\Service\YouTube\InvideoPosition';
  protected $positionDataType = '';
  public $targetChannelId;
  protected $timingType = '\Google\Service\YouTube\InvideoTiming';
  protected $timingDataType = '';

  public function setImageBytes($imageBytes)
  {
    $this->imageBytes = $imageBytes;
  }

  public function getImageBytes()
  {
    return $this->imageBytes;
  }

  public function setImageUrl($imageUrl)
  {
    $this->imageUrl = $imageUrl;
  }

  public function getImageUrl()
  {
    return $this->imageUrl;
  }

  public function setPosition(\Google\Service\YouTube\InvideoPosition $position)
  {
    $this->position = $position;
  }

  public function getPosition()
  {
    return $this->position;
  }

  public function setTargetChannelId($targetChannelId)
  {
    $this->targetChannelId = $targetChannelId;
  }

  public function getTargetChannelId()
  {
    return $this->targetChannelId;
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
