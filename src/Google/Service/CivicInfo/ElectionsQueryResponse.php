<?php
namespace Google\Service\CivicInfo;

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


class ElectionsQueryResponse extends \Google\Collection
{
  protected $electionsType = '\Google\Service\CivicInfo\Election';
  protected $electionsDataType = 'array';
  public $kind;

  public function setElections($elections)
  {
    $this->elections = $elections;
  }

  public function getElections()
  {
    return $this->elections;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}
