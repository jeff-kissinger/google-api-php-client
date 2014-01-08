<?php
namespace Google\Service\DoubleClickBidManager\Queries;

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
 * The "queries" collection of methods.
 * Typical usage is:
 *  <code>
 *   $doubleclickbidmanagerService = new Google_Service_DoubleClickBidManager(...);
 *   $queries = $doubleclickbidmanagerService->queries;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Creates a query. (queries.createquery)
   *
   * @param \Google\Query $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\DoubleClickBidManager\Query
   */
  public function createquery(\Google\Service\DoubleClickBidManager\Query $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('createquery', array($params), "\Google\Service\DoubleClickBidManager\Query");
  }
  /**
   * Deletes a stored query as well as the associated stored reports.
   * (queries.deletequery)
   *
   * @param string $queryId
   * Query ID to delete.
   * @param array $optParams Optional parameters.
   */
  public function deletequery($queryId, $optParams = array())
  {
    $params = array('queryId' => $queryId);
    $params = array_merge($params, $optParams);
    return $this->call('deletequery', array($params));
  }
  /**
   * Retrieves a stored query. (queries.getquery)
   *
   * @param string $queryId
   * Query ID to retrieve.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\DoubleClickBidManager\Query
   */
  public function getquery($queryId, $optParams = array())
  {
    $params = array('queryId' => $queryId);
    $params = array_merge($params, $optParams);
    return $this->call('getquery', array($params), "\Google\Service\DoubleClickBidManager\Query");
  }
  /**
   * Retrieves stored queries. (queries.listqueries)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\DoubleClickBidManager\ListQueriesResponse
   */
  public function listqueries($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('listqueries', array($params), "\Google\Service\DoubleClickBidManager\ListQueriesResponse");
  }
  /**
   * Runs a stored query to generate a report. (queries.runquery)
   *
   * @param string $queryId
   * Query ID to run.
   * @param \Google\RunQueryRequest $postBody
   * @param array $optParams Optional parameters.
   */
  public function runquery($queryId, \Google\Service\DoubleClickBidManager\RunQueryRequest $postBody, $optParams = array())
  {
    $params = array('queryId' => $queryId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('runquery', array($params));
  }
}
