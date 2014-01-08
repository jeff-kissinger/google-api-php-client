<?php
namespace Google\Service\PlusDomains;

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


class Acl extends \Google\Collection
{
  public $description;
  public $domainRestricted;
  protected $itemsType = '\Google\Service\PlusDomains\PlusDomainsAclentryResource';
  protected $itemsDataType = 'array';
  public $kind;

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }
  
  public function setDomainRestricted($domainRestricted)
  {
    $this->domainRestricted = $domainRestricted;
  }

  public function getDomainRestricted()
  {
    return $this->domainRestricted;
  }
  
  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
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
