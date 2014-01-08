<?php
namespace Google\Service\Fusiontables\Column;

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

/**
 * The "column" collection of methods.
 * Typical usage is:
 *  <code>
 *   $fusiontablesService = new Google_Service_Fusiontables(...);
 *   $column = $fusiontablesService->column;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Deletes the column. (column.delete)
   *
   * @param string $tableId
   * Table from which the column is being deleted.
   * @param string $columnId
   * Name or identifier for the column being deleted.
   * @param array $optParams Optional parameters.
   */
  public function delete($tableId, $columnId, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'columnId' => $columnId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Retrieves a specific column by its id. (column.get)
   *
   * @param string $tableId
   * Table to which the column belongs.
   * @param string $columnId
   * Name or identifier for the column that is being requested.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Fusiontables\Column
   */
  public function get($tableId, $columnId, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'columnId' => $columnId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Fusiontables\Column");
  }
  /**
   * Adds a new column to the table. (column.insert)
   *
   * @param string $tableId
   * Table for which a new column is being added.
   * @param \Google\Column $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Fusiontables\Column
   */
  public function insert($tableId, \Google\Service\Fusiontables\Column $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Fusiontables\Column");
  }
  /**
   * Retrieves a list of columns. (column.listColumn)
   *
   * @param string $tableId
   * Table whose columns are being listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Continuation token specifying which result page to return. Optional.
   * @opt_param string maxResults
   * Maximum number of columns to return. Optional. Default is 5.
   * @return \Google\Service\Fusiontables\ColumnList
   */
  public function listColumn($tableId, $optParams = array())
  {
    $params = array('tableId' => $tableId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Fusiontables\ColumnList");
  }
  /**
   * Updates the name or type of an existing column. This method supports patch
   * semantics. (column.patch)
   *
   * @param string $tableId
   * Table for which the column is being updated.
   * @param string $columnId
   * Name or identifier for the column that is being updated.
   * @param \Google\Column $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Fusiontables\Column
   */
  public function patch($tableId, $columnId, \Google\Service\Fusiontables\Column $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'columnId' => $columnId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "\Google\Service\Fusiontables\Column");
  }
  /**
   * Updates the name or type of an existing column. (column.update)
   *
   * @param string $tableId
   * Table for which the column is being updated.
   * @param string $columnId
   * Name or identifier for the column that is being updated.
   * @param \Google\Column $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Fusiontables\Column
   */
  public function update($tableId, $columnId, \Google\Service\Fusiontables\Column $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'columnId' => $columnId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "\Google\Service\Fusiontables\Column");
  }
}
