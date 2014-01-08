<?php
namespace Google\Service\Coordinate\Worker;

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
 * The "worker" collection of methods.
 * Typical usage is:
 *  <code>
 *   $coordinateService = new Google_Service_Coordinate(...);
 *   $worker = $coordinateService->worker;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Retrieves a list of workers in a team. (worker.listWorker)
   *
   * @param string $teamId
   * Team ID
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Coordinate\WorkerListResponse
   */
  public function listWorker($teamId, $optParams = array())
  {
    $params = array('teamId' => $teamId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Coordinate\WorkerListResponse");
  }
}
