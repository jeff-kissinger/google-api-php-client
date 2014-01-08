<?php
namespace Google\Service\Bigquery;

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


class Table extends \Google\Model
{
  public $creationTime;
  public $description;
  public $etag;
  public $expirationTime;
  public $friendlyName;
  public $id;
  public $kind;
  public $lastModifiedTime;
  public $numBytes;
  public $numRows;
  protected $schemaType = '\Google\Service\Bigquery\TableSchema';
  protected $schemaDataType = '';
  public $selfLink;
  protected $tableReferenceType = '\Google\Service\Bigquery\TableReference';
  protected $tableReferenceDataType = '';

  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }

  public function getCreationTime()
  {
    return $this->creationTime;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setExpirationTime($expirationTime)
  {
    $this->expirationTime = $expirationTime;
  }

  public function getExpirationTime()
  {
    return $this->expirationTime;
  }

  public function setFriendlyName($friendlyName)
  {
    $this->friendlyName = $friendlyName;
  }

  public function getFriendlyName()
  {
    return $this->friendlyName;
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

  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }

  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
  }

  public function setNumBytes($numBytes)
  {
    $this->numBytes = $numBytes;
  }

  public function getNumBytes()
  {
    return $this->numBytes;
  }

  public function setNumRows($numRows)
  {
    $this->numRows = $numRows;
  }

  public function getNumRows()
  {
    return $this->numRows;
  }

  public function setSchema(\Google\Service\Bigquery\TableSchema $schema)
  {
    $this->schema = $schema;
  }

  public function getSchema()
  {
    return $this->schema;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setTableReference(\Google\Service\Bigquery\TableReference $tableReference)
  {
    $this->tableReference = $tableReference;
  }

  public function getTableReference()
  {
    return $this->tableReference;
  }
}
