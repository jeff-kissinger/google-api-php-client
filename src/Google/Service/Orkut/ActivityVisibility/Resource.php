<?php
namespace Google\Service\Orkut\ActivityVisibility;

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
 * The "activityVisibility" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_Service_Orkut(...);
 *   $activityVisibility = $orkutService->activityVisibility;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Gets the visibility of an existing activity. (activityVisibility.get)
   *
   * @param string $activityId
   * ID of the activity to get the visibility.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Orkut\Visibility
   */
  public function get($activityId, $optParams = array())
  {
    $params = array('activityId' => $activityId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Orkut\Visibility");
  }
  /**
   * Updates the visibility of an existing activity. This method supports patch
   * semantics. (activityVisibility.patch)
   *
   * @param string $activityId
   * ID of the activity.
   * @param \Google\Visibility $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Orkut\Visibility
   */
  public function patch($activityId, \Google\Service\Orkut\Visibility $postBody, $optParams = array())
  {
    $params = array('activityId' => $activityId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "\Google\Service\Orkut\Visibility");
  }
  /**
   * Updates the visibility of an existing activity. (activityVisibility.update)
   *
   * @param string $activityId
   * ID of the activity.
   * @param \Google\Visibility $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Orkut\Visibility
   */
  public function update($activityId, \Google\Service\Orkut\Visibility $postBody, $optParams = array())
  {
    $params = array('activityId' => $activityId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "\Google\Service\Orkut\Visibility");
  }
}
