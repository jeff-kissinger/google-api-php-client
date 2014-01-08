<?php
namespace Google\Service\Compute;

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


class OperationsScopedList extends \Google\Collection
{
  protected $operationsType = '\Google\Service\Compute\Operation';
  protected $operationsDataType = 'array';
  protected $warningType = '\Google\Service\Compute\OperationsScopedListWarning';
  protected $warningDataType = '';

  public function setOperations($operations)
  {
    $this->operations = $operations;
  }

  public function getOperations()
  {
    return $this->operations;
  }

  public function setWarning(\Google\Service\Compute\OperationsScopedListWarning $warning)
  {
    $this->warning = $warning;
  }

  public function getWarning()
  {
    return $this->warning;
  }
}
