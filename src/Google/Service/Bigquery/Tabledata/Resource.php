<?php
namespace Google\Service\Bigquery\Tabledata;

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
 * The "tabledata" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigqueryService = new Google_Service_Bigquery(...);
 *   $tabledata = $bigqueryService->tabledata;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Inserts the supplied rows into the table. (tabledata.insertAll)
   *
   * @param string $projectId
   * Project ID of the destination table.
   * @param string $datasetId
   * Dataset ID of the destination table.
   * @param string $tableId
   * Table ID of the destination table.
   * @param \Google\TableDataInsertAllRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Bigquery\TableDataInsertAllResponse
   */
  public function insertAll($projectId, $datasetId, $tableId, \Google\Service\Bigquery\TableDataInsertAllRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insertAll', array($params), "\Google\Service\Bigquery\TableDataInsertAllResponse");
  }
  /**
   * Retrieves table data from a specified set of rows. (tabledata.listTabledata)
   *
   * @param string $projectId
   * Project ID of the table to read
   * @param string $datasetId
   * Dataset ID of the table to read
   * @param string $tableId
   * Table ID of the table to read
   * @param array $optParams Optional parameters.
   *
   * @opt_param string maxResults
   * Maximum number of results to return
   * @opt_param string pageToken
   * Page token, returned by a previous call, identifying the result set
   * @opt_param string startIndex
   * Zero-based index of the starting row to read
   * @return \Google\Service\Bigquery\TableDataList
   */
  public function listTabledata($projectId, $datasetId, $tableId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Bigquery\TableDataList");
  }
}
