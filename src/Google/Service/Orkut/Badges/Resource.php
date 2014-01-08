<?php
namespace Google\Service\Orkut\Badges;

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
 * The "badges" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_Service_Orkut(...);
 *   $badges = $orkutService->badges;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Retrieves a badge from a user. (badges.get)
   *
   * @param string $userId
   * The ID of the user whose badges will be listed. Can be me to refer to caller.
   * @param string $badgeId
   * The ID of the badge that will be retrieved.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Orkut\Badge
   */
  public function get($userId, $badgeId, $optParams = array())
  {
    $params = array('userId' => $userId, 'badgeId' => $badgeId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Orkut\Badge");
  }
  /**
   * Retrieves the list of visible badges of a user. (badges.listBadges)
   *
   * @param string $userId
   * The id of the user whose badges will be listed. Can be me to refer to caller.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Orkut\BadgeList
   */
  public function listBadges($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Orkut\BadgeList");
  }
}
