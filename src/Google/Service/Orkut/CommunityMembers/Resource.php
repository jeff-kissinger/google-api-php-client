<?php
namespace Google\Service\Orkut\CommunityMembers;

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
 * The "communityMembers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_Service_Orkut(...);
 *   $communityMembers = $orkutService->communityMembers;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Makes the user leave a community. (communityMembers.delete)
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
   * Retrieves the relationship between a user and a community.
   * (communityMembers.get)
   *
   * @param int $communityId
   * ID of the community.
   * @param string $userId
   * ID of the user.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string hl
   * Specifies the interface language (host language) of your user interface.
   * @return \Google\Service\Orkut\CommunityMembers
   */
  public function get($communityId, $userId, $optParams = array())
  {
    $params = array('communityId' => $communityId, 'userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Orkut\CommunityMembers");
  }
  /**
   * Makes the user join a community. (communityMembers.insert)
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
  /**
   * Lists members of a community. Use the pagination tokens to retrieve the full
   * list; do not rely on the member count available in the community profile
   * information to know when to stop iterating, as that count may be approximate.
   * (communityMembers.listCommunityMembers)
   *
   * @param int $communityId
   * The ID of the community whose members will be listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A continuation token that allows pagination.
   * @opt_param bool friendsOnly
   * Whether to list only community members who are friends of the user.
   * @opt_param string maxResults
   * The maximum number of members to include in the response.
   * @opt_param string hl
   * Specifies the interface language (host language) of your user interface.
   * @return \Google\Service\Orkut\CommunityMembersList
   */
  public function listCommunityMembers($communityId, $optParams = array())
  {
    $params = array('communityId' => $communityId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Orkut\CommunityMembersList");
  }
}
