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


class Entity extends \Google\Model
{
  protected $keyType = '\Google\Service\Datastore\Key';
  protected $keyDataType = '';
  protected $propertiesType = '\Google\Service\Datastore\Property';
  protected $propertiesDataType = 'map';

  public function setKey(\Google\Service\Datastore\Key $key)
  {
    $this->key = $key;
  }

  public function getKey()
  {
    return $this->key;
  }
  
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }

  public function getProperties()
  {
    return $this->properties;
  }
  
}
