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


class Key extends \Google\Collection
{
  protected $partitionIdType = '\Google\Service\Datastore\PartitionId';
  protected $partitionIdDataType = '';
  protected $pathType = '\Google\Service\Datastore\KeyPathElement';
  protected $pathDataType = 'array';

  public function setPartitionId(\Google\Service\Datastore\PartitionId $partitionId)
  {
    $this->partitionId = $partitionId;
  }

  public function getPartitionId()
  {
    return $this->partitionId;
  }
  
  public function setPath($path)
  {
    $this->path = $path;
  }

  public function getPath()
  {
    return $this->path;
  }
  
}
