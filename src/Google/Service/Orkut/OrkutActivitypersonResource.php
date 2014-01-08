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


class OrkutActivitypersonResource extends \Google\Model
{
  public $birthday;
  public $gender;
  public $id;
  protected $imageType = '\Google\Service\Orkut\OrkutActivitypersonResourceImage';
  protected $imageDataType = '';
  protected $nameType = '\Google\Service\Orkut\OrkutActivitypersonResourceName';
  protected $nameDataType = '';
  public $url;

  public function setBirthday($birthday)
  {
    $this->birthday = $birthday;
  }

  public function getBirthday()
  {
    return $this->birthday;
  }
  
  public function setGender($gender)
  {
    $this->gender = $gender;
  }

  public function getGender()
  {
    return $this->gender;
  }
  
  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }
  
  public function setImage(\Google\Service\Orkut\OrkutActivitypersonResourceImage $image)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
  }
  
  public function setName(\Google\Service\Orkut\OrkutActivitypersonResourceName $name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }
  
  public function setUrl($url)
  {
    $this->url = $url;
  }

  public function getUrl()
  {
    return $this->url;
  }
  
}
