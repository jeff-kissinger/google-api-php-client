<?php
namespace Google\Service\Bigquery\Tables;

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
 * The "tables" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigqueryService = new Google_Service_Bigquery(...);
 *   $tables = $bigqueryService->tables;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Deletes the table specified by tableId from the dataset. If the table
   * contains data, all the data will be deleted. (tables.delete)
   *
   * @param string $projectId
   * Project ID of the table to delete
   * @param string $datasetId
   * Dataset ID of the table to delete
   * @param string $tableId
   * Table ID of the table to delete
   * @param array $optParams Optional parameters.
   */
  public function delete($projectId, $datasetId, $tableId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Gets the specified table resource by table ID. This method does not return
   * the data in the table, it only returns the table resource, which describes
   * the structure of this table. (tables.get)
   *
   * @param string $projectId
   * Project ID of the requested table
   * @param string $datasetId
   * Dataset ID of the requested table
   * @param string $tableId
   * Table ID of the requested table
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Bigquery\Table
   */
  public function get($projectId, $datasetId, $tableId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Bigquery\Table");
  }
  /**
   * Creates a new, empty table in the dataset. (tables.insert)
   *
   * @param string $projectId
   * Project ID of the new table
   * @param string $datasetId
   * Dataset ID of the new table
   * @param \Google\Table $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Bigquery\Table
   */
  public function insert($projectId, $datasetId, \Google\Service\Bigquery\Table $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Bigquery\Table");
  }
  /**
   * Lists all tables in the specified dataset. (tables.listTables)
   *
   * @param string $projectId
   * Project ID of the tables to list
   * @param string $datasetId
   * Dataset ID of the tables to list
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Page token, returned by a previous call, to request the next page of results
   * @opt_param string maxResults
   * Maximum number of results to return
   * @return \Google\Service\Bigquery\TableList
   */
  public function listTables($projectId, $datasetId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'datasetId' => $datasetId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Bigquery\TableList");
  }
  /**
   * Updates information in an existing table. The update method replaces the
   * entire table resource, whereas the patch method only replaces fields that are
   * provided in the submitted table resource. This method supports patch
   * semantics. (tables.patch)
   *
   * @param string $projectId
   * Project ID of the table to update
   * @param string $datasetId
   * Dataset ID of the table to update
   * @param string $tableId
   * Table ID of the table to update
   * @param \Google\Table $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Bigquery\Table
   */
  public function patch($projectId, $datasetId, $tableId, \Google\Service\Bigquery\Table $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "\Google\Service\Bigquery\Table");
  }
  /**
   * Updates information in an existing table. The update method replaces the
   * entire table resource, whereas the patch method only replaces fields that are
   * provided in the submitted table resource. (tables.update)
   *
   * @param string $projectId
   * Project ID of the table to update
   * @param string $datasetId
   * Dataset ID of the table to update
   * @param string $tableId
   * Table ID of the table to update
   * @param \Google\Table $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Bigquery\Table
   */
  public function update($projectId, $datasetId, $tableId, \Google\Service\Bigquery\Table $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "\Google\Service\Bigquery\Table");
  }
}
