<?php
namespace Google\Service\Prediction;

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


class Analyze extends \Google\Collection
{
  protected $dataDescriptionType = '\Google\Service\Prediction\AnalyzeDataDescription';
  protected $dataDescriptionDataType = '';
  public $errors;
  public $id;
  public $kind;
  protected $modelDescriptionType = '\Google\Service\Prediction\AnalyzeModelDescription';
  protected $modelDescriptionDataType = '';
  public $selfLink;

  public function setDataDescription(\Google\Service\Prediction\AnalyzeDataDescription $dataDescription)
  {
    $this->dataDescription = $dataDescription;
  }

  public function getDataDescription()
  {
    return $this->dataDescription;
  }
  
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }

  public function getErrors()
  {
    return $this->errors;
  }
  
  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setModelDescription(\Google\Service\Prediction\AnalyzeModelDescription $modelDescription)
  {
    $this->modelDescription = $modelDescription;
  }

  public function getModelDescription()
  {
    return $this->modelDescription;
  }
  
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }
  
}
