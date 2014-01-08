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


class Activity extends \Google\Collection
{
  protected $accessType = '\Google\Service\Orkut\Acl';
  protected $accessDataType = '';
  protected $actorType = '\Google\Service\Orkut\OrkutAuthorResource';
  protected $actorDataType = '';
  public $id;
  public $kind;
  protected $linksType = '\Google\Service\Orkut\OrkutLinkResource';
  protected $linksDataType = 'array';
  protected $objectType = '\Google\Service\Orkut\ActivityObject';
  protected $objectDataType = '';
  public $published;
  public $title;
  public $updated;
  public $verb;

  public function setAccess(\Google\Service\Orkut\Acl $access)
  {
    $this->access = $access;
  }

  public function getAccess()
  {
    return $this->access;
  }
  
  public function setActor(\Google\Service\Orkut\OrkutAuthorResource $actor)
  {
    $this->actor = $actor;
  }

  public function getActor()
  {
    return $this->actor;
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
  
  public function setLinks($links)
  {
    $this->links = $links;
  }

  public function getLinks()
  {
    return $this->links;
  }
  
  public function setObject(\Google\Service\Orkut\ActivityObject $object)
  {
    $this->object = $object;
  }

  public function getObject()
  {
    return $this->object;
  }
  
  public function setPublished($published)
  {
    $this->published = $published;
  }

  public function getPublished()
  {
    return $this->published;
  }
  
  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }
  
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }

  public function getUpdated()
  {
    return $this->updated;
  }
  
  public function setVerb($verb)
  {
    $this->verb = $verb;
  }

  public function getVerb()
  {
    return $this->verb;
  }
  
}
