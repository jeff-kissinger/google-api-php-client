<?php
namespace Google\Service\Drive\Apps;

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
 * The "apps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $apps = $driveService->apps;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Gets a specific app. (apps.get)
   *
   * @param string $appId
   * The ID of the app.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\App
   */
  public function get($appId, $optParams = array())
  {
    $params = array('appId' => $appId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Drive\App");
  }
  /**
   * Lists a user's installed apps. (apps.listApps)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\AppList
   */
  public function listApps($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Drive\AppList");
  }
}
