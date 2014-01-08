<?php
namespace Google\Service\Bigquery\Projects;

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
 * The "projects" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigqueryService = new Google_Service_Bigquery(...);
 *   $projects = $bigqueryService->projects;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Lists the projects to which you have at least read access.
   * (projects.listProjects)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Page token, returned by a previous call, to request the next page of results
   * @opt_param string maxResults
   * Maximum number of results to return
   * @return \Google\Service\Bigquery\ProjectList
   */
  public function listProjects($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Bigquery\ProjectList");
  }
}
