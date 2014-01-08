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


class RunQueryRequest extends \Google\Model
{
  protected $gqlQueryType = '\Google\Service\Datastore\GqlQuery';
  protected $gqlQueryDataType = '';
  protected $partitionIdType = '\Google\Service\Datastore\PartitionId';
  protected $partitionIdDataType = '';
  protected $queryType = '\Google\Service\Datastore\Query';
  protected $queryDataType = '';
  protected $readOptionsType = '\Google\Service\Datastore\ReadOptions';
  protected $readOptionsDataType = '';

  public function setGqlQuery(\Google\Service\Datastore\GqlQuery $gqlQuery)
  {
    $this->gqlQuery = $gqlQuery;
  }

  public function getGqlQuery()
  {
    return $this->gqlQuery;
  }
  
  public function setPartitionId(\Google\Service\Datastore\PartitionId $partitionId)
  {
    $this->partitionId = $partitionId;
  }

  public function getPartitionId()
  {
    return $this->partitionId;
  }
  
  public function setQuery(\Google\Service\Datastore\Query $query)
  {
    $this->query = $query;
  }

  public function getQuery()
  {
    return $this->query;
  }
  
  public function setReadOptions(\Google\Service\Datastore\ReadOptions $readOptions)
  {
    $this->readOptions = $readOptions;
  }

  public function getReadOptions()
  {
    return $this->readOptions;
  }
  
}
