<?php
namespace Google\Service\Drive\About;

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
 * The "about" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $about = $driveService->about;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Gets the information about the current user along with Drive API settings
   * (about.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool includeSubscribed
   * When calculating the number of remaining change IDs, whether to include shared files and public
    * files the user has opened. When set to false, this counts only change IDs for owned files and
    * any shared or public files that the user has explictly added to a folder in Drive.
   * @opt_param string maxChangeIdCount
   * Maximum number of remaining change IDs to count
   * @opt_param string startChangeId
   * Change ID to start counting from when calculating number of remaining change IDs
   * @return \Google\Service\Drive\About
   */
  public function get($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Drive\About");
  }
}
