<?php
namespace Google\Service\Orkut;

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


class OrkutCommunitypolloptionResource extends \Google\Model
{
  public $description;
  protected $imageType = '\Google\Service\Orkut\OrkutCommunitypolloptionResourceImage';
  protected $imageDataType = '';
  public $numberOfVotes;
  public $optionId;

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }
  
  public function setImage(\Google\Service\Orkut\OrkutCommunitypolloptionResourceImage $image)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
  }
  
  public function setNumberOfVotes($numberOfVotes)
  {
    $this->numberOfVotes = $numberOfVotes;
  }

  public function getNumberOfVotes()
  {
    return $this->numberOfVotes;
  }
  
  public function setOptionId($optionId)
  {
    $this->optionId = $optionId;
  }

  public function getOptionId()
  {
    return $this->optionId;
  }
  
}
