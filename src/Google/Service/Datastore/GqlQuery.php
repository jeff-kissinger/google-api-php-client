<?php
namespace Google\Service\Datastore;

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


class GqlQuery extends \Google\Collection
{
  public $allowLiteral;
  protected $nameArgsType = '\Google\Service\Datastore\GqlQueryArg';
  protected $nameArgsDataType = 'array';
  protected $numberArgsType = '\Google\Service\Datastore\GqlQueryArg';
  protected $numberArgsDataType = 'array';
  public $queryString;

  public function setAllowLiteral($allowLiteral)
  {
    $this->allowLiteral = $allowLiteral;
  }

  public function getAllowLiteral()
  {
    return $this->allowLiteral;
  }
  
  public function setNameArgs($nameArgs)
  {
    $this->nameArgs = $nameArgs;
  }

  public function getNameArgs()
  {
    return $this->nameArgs;
  }
  
  public function setNumberArgs($numberArgs)
  {
    $this->numberArgs = $numberArgs;
  }

  public function getNumberArgs()
  {
    return $this->numberArgs;
  }
  
  public function setQueryString($queryString)
  {
    $this->queryString = $queryString;
  }

  public function getQueryString()
  {
    return $this->queryString;
  }
  
}
