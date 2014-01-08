<?php
namespace Google\Service\Datastore\Datasets;

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
 * The "datasets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $datastoreService = new Google_Service_Datastore(...);
 *   $datasets = $datastoreService->datasets;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Allocate IDs for incomplete keys (useful for referencing an entity before it
   * is inserted). (datasets.allocateIds)
   *
   * @param string $datasetId
   * Identifies the dataset.
   * @param \Google\AllocateIdsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Datastore\AllocateIdsResponse
   */
  public function allocateIds($datasetId, \Google\Service\Datastore\AllocateIdsRequest $postBody, $optParams = array())
  {
    $params = array('datasetId' => $datasetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('allocateIds', array($params), "\Google\Service\Datastore\AllocateIdsResponse");
  }
  /**
   * Begin a new transaction. (datasets.beginTransaction)
   *
   * @param string $datasetId
   * Identifies the dataset.
   * @param \Google\BeginTransactionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Datastore\BeginTransactionResponse
   */
  public function beginTransaction($datasetId, \Google\Service\Datastore\BeginTransactionRequest $postBody, $optParams = array())
  {
    $params = array('datasetId' => $datasetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('beginTransaction', array($params), "\Google\Service\Datastore\BeginTransactionResponse");
  }
  /**
   * Commit a transaction, optionally creating, deleting or modifying some
   * entities. (datasets.commit)
   *
   * @param string $datasetId
   * Identifies the dataset.
   * @param \Google\CommitRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Datastore\CommitResponse
   */
  public function commit($datasetId, \Google\Service\Datastore\CommitRequest $postBody, $optParams = array())
  {
    $params = array('datasetId' => $datasetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('commit', array($params), "\Google\Service\Datastore\CommitResponse");
  }
  /**
   * Look up some entities by key. (datasets.lookup)
   *
   * @param string $datasetId
   * Identifies the dataset.
   * @param \Google\LookupRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Datastore\LookupResponse
   */
  public function lookup($datasetId, \Google\Service\Datastore\LookupRequest $postBody, $optParams = array())
  {
    $params = array('datasetId' => $datasetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('lookup', array($params), "\Google\Service\Datastore\LookupResponse");
  }
  /**
   * Roll back a transaction. (datasets.rollback)
   *
   * @param string $datasetId
   * Identifies the dataset.
   * @param \Google\RollbackRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Datastore\RollbackResponse
   */
  public function rollback($datasetId, \Google\Service\Datastore\RollbackRequest $postBody, $optParams = array())
  {
    $params = array('datasetId' => $datasetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('rollback', array($params), "\Google\Service\Datastore\RollbackResponse");
  }
  /**
   * Query for entities. (datasets.runQuery)
   *
   * @param string $datasetId
   * Identifies the dataset.
   * @param \Google\RunQueryRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Datastore\RunQueryResponse
   */
  public function runQuery($datasetId, \Google\Service\Datastore\RunQueryRequest $postBody, $optParams = array())
  {
    $params = array('datasetId' => $datasetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('runQuery', array($params), "\Google\Service\Datastore\RunQueryResponse");
  }
}
