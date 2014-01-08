<?php
namespace Google\Service\Plus;

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


class Moment extends \Google\Model
{
  public $id;
  public $kind;
  protected $resultType = '\Google\Service\Plus\ItemScope';
  protected $resultDataType = '';
  public $startDate;
  protected $targetType = '\Google\Service\Plus\ItemScope';
  protected $targetDataType = '';
  public $type;

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
  
  public function setResult(\Google\Service\Plus\ItemScope $result)
  {
    $this->result = $result;
  }

  public function getResult()
  {
    return $this->result;
  }
  
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }

  public function getStartDate()
  {
    return $this->startDate;
  }
  
  public function setTarget(\Google\Service\Plus\ItemScope $target)
  {
    $this->target = $target;
  }

  public function getTarget()
  {
    return $this->target;
  }
  
  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
  
}
