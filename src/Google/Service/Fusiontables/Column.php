<?php
namespace Google\Service\Fusiontables;

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


class Column extends \Google\Model
{
  protected $baseColumnType = '\Google\Service\Fusiontables\ColumnBaseColumn';
  protected $baseColumnDataType = '';
  public $columnId;
  public $kind;
  public $name;
  public $type;

  public function setBaseColumn(\Google\Service\Fusiontables\ColumnBaseColumn $baseColumn)
  {
    $this->baseColumn = $baseColumn;
  }

  public function getBaseColumn()
  {
    return $this->baseColumn;
  }

  public function setColumnId($columnId)
  {
    $this->columnId = $columnId;
  }

  public function getColumnId()
  {
    return $this->columnId;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
