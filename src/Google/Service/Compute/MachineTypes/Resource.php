<?php
namespace Google\Service\Compute\MachineTypes;

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
 * The "machineTypes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $machineTypes = $computeService->machineTypes;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Retrieves the list of machine type resources grouped by scope.
   * (machineTypes.aggregatedList)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter
   * Optional. Filter expression for filtering listed resources.
   * @opt_param string pageToken
   * Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a
    * previous list request.
   * @opt_param string maxResults
   * Optional. Maximum count of results to be returned. Maximum value is 500 and default value is
    * 100.
   * @return \Google\Service\Compute\MachineTypeAggregatedList
   */
  public function aggregatedList($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('aggregatedList', array($params), "\Google\Service\Compute\MachineTypeAggregatedList");
  }
  /**
   * Returns the specified machine type resource. (machineTypes.get)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $zone
   * Name of the zone scoping this request.
   * @param string $machineType
   * Name of the machine type resource to return.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\MachineType
   */
  public function get($project, $zone, $machineType, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'machineType' => $machineType);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Compute\MachineType");
  }
  /**
   * Retrieves the list of machine type resources available to the specified
   * project. (machineTypes.listMachineTypes)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $zone
   * Name of the zone scoping this request.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter
   * Optional. Filter expression for filtering listed resources.
   * @opt_param string pageToken
   * Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a
    * previous list request.
   * @opt_param string maxResults
   * Optional. Maximum count of results to be returned. Maximum value is 500 and default value is
    * 100.
   * @return \Google\Service\Compute\MachineTypeList
   */
  public function listMachineTypes($project, $zone, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Compute\MachineTypeList");
  }
}
