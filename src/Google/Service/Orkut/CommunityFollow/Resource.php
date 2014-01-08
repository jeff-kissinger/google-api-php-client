<?php
namespace Google\Service\Orkut\CommunityFollow;

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
 * The "communityFollow" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_Service_Orkut(...);
 *   $communityFollow = $orkutService->communityFollow;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Removes a user from the followers of a community. (communityFollow.delete)
   *
   * @param int $communityId
   * ID of the community.
   * @param string $userId
   * ID of the user.
   * @param array $optParams Optional parameters.
   */
  public function delete($communityId, $userId, $optParams = array())
  {
    $params = array('communityId' => $communityId, 'userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Adds a user as a follower of a community. (communityFollow.insert)
   *
   * @param int $communityId
   * ID of the community.
   * @param string $userId
   * ID of the user.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Orkut\CommunityMembers
   */
  public function insert($communityId, $userId, $optParams = array())
  {
    $params = array('communityId' => $communityId, 'userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Orkut\CommunityMembers");
  }
}
