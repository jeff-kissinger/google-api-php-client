<?php
namespace Google\Service\Coordinate\Jobs;

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
 *   $coordinateService = new Google_Service_Coordinate(...);
 *   $jobs = $coordinateService->jobs;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Retrieves a job, including all the changes made to the job. (jobs.get)
   *
   * @param string $teamId
   * Team ID
   * @param string $jobId
   * Job number
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Coordinate\Job
   */
  public function get($teamId, $jobId, $optParams = array())
  {
    $params = array('teamId' => $teamId, 'jobId' => $jobId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Coordinate\Job");
  }
  /**
   * Inserts a new job. Only the state field of the job should be set.
   * (jobs.insert)
   *
   * @param string $teamId
   * Team ID
   * @param string $address
   * Job address as newline (Unix) separated string
   * @param double $lat
   * The latitude coordinate of this job's location.
   * @param double $lng
   * The longitude coordinate of this job's location.
   * @param string $title
   * Job title
   * @param \Google\Job $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string customerName
   * Customer name
   * @opt_param string note
   * Job note as newline (Unix) separated string
   * @opt_param string assignee
   * Assignee email address, or empty string to unassign.
   * @opt_param string customerPhoneNumber
   * Customer phone number
   * @opt_param string customField
   * Map from custom field id (from /team//custom_fields) to the field value. For example '123=Alice'
   * @return \Google\Service\Coordinate\Job
   */
  public function insert($teamId, $address, $lat, $lng, $title, \Google\Service\Coordinate\Job $postBody, $optParams = array())
  {
    $params = array('teamId' => $teamId, 'address' => $address, 'lat' => $lat, 'lng' => $lng, 'title' => $title, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Coordinate\Job");
  }
  /**
   * Retrieves jobs created or modified since the given timestamp. (jobs.listJobs)
   *
   * @param string $teamId
   * Team ID
   * @param array $optParams Optional parameters.
   *
   * @opt_param string minModifiedTimestampMs
   * Minimum time a job was modified in milliseconds since epoch.
   * @opt_param string maxResults
   * Maximum number of results to return in one page.
   * @opt_param string pageToken
   * Continuation token
   * @return \Google\Service\Coordinate\JobListResponse
   */
  public function listJobs($teamId, $optParams = array())
  {
    $params = array('teamId' => $teamId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Coordinate\JobListResponse");
  }
  /**
   * Updates a job. Fields that are set in the job state will be updated. This
   * method supports patch semantics. (jobs.patch)
   *
   * @param string $teamId
   * Team ID
   * @param string $jobId
   * Job number
   * @param \Google\Job $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string customerName
   * Customer name
   * @opt_param string title
   * Job title
   * @opt_param string note
   * Job note as newline (Unix) separated string
   * @opt_param string assignee
   * Assignee email address, or empty string to unassign.
   * @opt_param string customerPhoneNumber
   * Customer phone number
   * @opt_param string address
   * Job address as newline (Unix) separated string
   * @opt_param double lat
   * The latitude coordinate of this job's location.
   * @opt_param string progress
   * Job progress
   * @opt_param double lng
   * The longitude coordinate of this job's location.
   * @opt_param string customField
   * Map from custom field id (from /team//custom_fields) to the field value. For example '123=Alice'
   * @return \Google\Service\Coordinate\Job
   */
  public function patch($teamId, $jobId, \Google\Service\Coordinate\Job $postBody, $optParams = array())
  {
    $params = array('teamId' => $teamId, 'jobId' => $jobId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "\Google\Service\Coordinate\Job");
  }
  /**
   * Updates a job. Fields that are set in the job state will be updated.
   * (jobs.update)
   *
   * @param string $teamId
   * Team ID
   * @param string $jobId
   * Job number
   * @param \Google\Job $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string customerName
   * Customer name
   * @opt_param string title
   * Job title
   * @opt_param string note
   * Job note as newline (Unix) separated string
   * @opt_param string assignee
   * Assignee email address, or empty string to unassign.
   * @opt_param string customerPhoneNumber
   * Customer phone number
   * @opt_param string address
   * Job address as newline (Unix) separated string
   * @opt_param double lat
   * The latitude coordinate of this job's location.
   * @opt_param string progress
   * Job progress
   * @opt_param double lng
   * The longitude coordinate of this job's location.
   * @opt_param string customField
   * Map from custom field id (from /team//custom_fields) to the field value. For example '123=Alice'
   * @return \Google\Service\Coordinate\Job
   */
  public function update($teamId, $jobId, \Google\Service\Coordinate\Job $postBody, $optParams = array())
  {
    $params = array('teamId' => $teamId, 'jobId' => $jobId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "\Google\Service\Coordinate\Job");
  }
}
