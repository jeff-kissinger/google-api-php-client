<?php
namespace Google\Service\Bigquery\Jobs;

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
 * The "jobs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigqueryService = new Google_Service_Bigquery(...);
 *   $jobs = $bigqueryService->jobs;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Retrieves the specified job by ID. (jobs.get)
   *
   * @param string $projectId
   * Project ID of the requested job
   * @param string $jobId
   * Job ID of the requested job
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Bigquery\Job
   */
  public function get($projectId, $jobId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'jobId' => $jobId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Bigquery\Job");
  }
  /**
   * Retrieves the results of a query job. (jobs.getQueryResults)
   *
   * @param string $projectId
   * Project ID of the query job
   * @param string $jobId
   * Job ID of the query job
   * @param array $optParams Optional parameters.
   *
   * @opt_param string timeoutMs
   * How long to wait for the query to complete, in milliseconds, before returning. Default is to
    * return immediately. If the timeout passes before the job completes, the request will fail with a
    * TIMEOUT error
   * @opt_param string maxResults
   * Maximum number of results to read
   * @opt_param string pageToken
   * Page token, returned by a previous call, to request the next page of results
   * @opt_param string startIndex
   * Zero-based index of the starting row
   * @return \Google\Service\Bigquery\GetQueryResultsResponse
   */
  public function getQueryResults($projectId, $jobId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'jobId' => $jobId);
    $params = array_merge($params, $optParams);
    return $this->call('getQueryResults', array($params), "\Google\Service\Bigquery\GetQueryResultsResponse");
  }
  /**
   * Starts a new asynchronous job. (jobs.insert)
   *
   * @param string $projectId
   * Project ID of the project that will be billed for the job
   * @param \Google\Job $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Bigquery\Job
   */
  public function insert($projectId, \Google\Service\Bigquery\Job $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Bigquery\Job");
  }
  /**
   * Lists all the Jobs in the specified project that were started by the user.
   * (jobs.listJobs)
   *
   * @param string $projectId
   * Project ID of the jobs to list
   * @param array $optParams Optional parameters.
   *
   * @opt_param string projection
   * Restrict information returned to a set of selected fields
   * @opt_param string stateFilter
   * Filter for job state
   * @opt_param bool allUsers
   * Whether to display jobs owned by all users in the project. Default false
   * @opt_param string maxResults
   * Maximum number of results to return
   * @opt_param string pageToken
   * Page token, returned by a previous call, to request the next page of results
   * @return \Google\Service\Bigquery\JobList
   */
  public function listJobs($projectId, $optParams = array())
  {
    $params = array('projectId' => $projectId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Bigquery\JobList");
  }
  /**
   * Runs a BigQuery SQL query synchronously and returns query results if the
   * query completes within a specified timeout. (jobs.query)
   *
   * @param string $projectId
   * Project ID of the project billed for the query
   * @param \Google\QueryRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Bigquery\QueryResponse
   */
  public function query($projectId, \Google\Service\Bigquery\QueryRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('query', array($params), "\Google\Service\Bigquery\QueryResponse");
  }
}
