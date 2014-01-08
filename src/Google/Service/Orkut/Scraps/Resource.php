<?php
namespace Google\Service\Orkut\Scraps;

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
 * The "scraps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_Service_Orkut(...);
 *   $scraps = $orkutService->scraps;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Creates a new scrap. (scraps.insert)
   *
   * @param \Google\Activity $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Orkut\Activity
   */
  public function insert(\Google\Service\Orkut\Activity $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Orkut\Activity");
  }
}
