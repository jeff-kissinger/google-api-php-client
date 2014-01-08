<?php
namespace Google\Service\Taskqueue;

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


class TaskQueue extends \Google\Model
{
  protected $aclType = '\Google\Service\Taskqueue\TaskQueueAcl';
  protected $aclDataType = '';
  public $id;
  public $kind;
  public $maxLeases;
  protected $statsType = '\Google\Service\Taskqueue\TaskQueueStats';
  protected $statsDataType = '';

  public function setAcl(\Google\Service\Taskqueue\TaskQueueAcl $acl)
  {
    $this->acl = $acl;
  }

  public function getAcl()
  {
    return $this->acl;
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

  public function setMaxLeases($maxLeases)
  {
    $this->maxLeases = $maxLeases;
  }

  public function getMaxLeases()
  {
    return $this->maxLeases;
  }

  public function setStats(\Google\Service\Taskqueue\TaskQueueStats $stats)
  {
    $this->stats = $stats;
  }

  public function getStats()
  {
    return $this->stats;
  }
}
