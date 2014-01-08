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


class ActivityObject extends \Google\Collection
{
  public $content;
  protected $itemsType = '\Google\Service\Orkut\OrkutActivityobjectsResource';
  protected $itemsDataType = 'array';
  public $objectType;
  protected $repliesType = '\Google\Service\Orkut\ActivityObjectReplies';
  protected $repliesDataType = '';

  public function setContent($content)
  {
    $this->content = $content;
  }

  public function getContent()
  {
    return $this->content;
  }
  
  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }
  
  public function setObjectType($objectType)
  {
    $this->objectType = $objectType;
  }

  public function getObjectType()
  {
    return $this->objectType;
  }
  
  public function setReplies(\Google\Service\Orkut\ActivityObjectReplies $replies)
  {
    $this->replies = $replies;
  }

  public function getReplies()
  {
    return $this->replies;
  }
  
}