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


class OrkutActivityobjectsResource extends \Google\Collection
{
  protected $communityType = '\Google\Service\Orkut\Community';
  protected $communityDataType = '';
  public $content;
  public $displayName;
  public $id;
  protected $linksType = '\Google\Service\Orkut\OrkutLinkResource';
  protected $linksDataType = 'array';
  public $objectType;
  protected $personType = '\Google\Service\Orkut\OrkutActivitypersonResource';
  protected $personDataType = '';

  public function setCommunity(\Google\Service\Orkut\Community $community)
  {
    $this->community = $community;
  }

  public function getCommunity()
  {
    return $this->community;
  }
  
  public function setContent($content)
  {
    $this->content = $content;
  }

  public function getContent()
  {
    return $this->content;
  }
  
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }
  
  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }
  
  public function setLinks($links)
  {
    $this->links = $links;
  }

  public function getLinks()
  {
    return $this->links;
  }
  
  public function setObjectType($objectType)
  {
    $this->objectType = $objectType;
  }

  public function getObjectType()
  {
    return $this->objectType;
  }
  
  public function setPerson(\Google\Service\Orkut\OrkutActivitypersonResource $person)
  {
    $this->person = $person;
  }

  public function getPerson()
  {
    return $this->person;
  }
  
}
