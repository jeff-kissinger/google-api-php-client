<?php
namespace Google\Service\Orkut\Communities;

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
 * The "communities" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_Service_Orkut(...);
 *   $communities = $orkutService->communities;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Retrieves the basic information (aka. profile) of a community.
   * (communities.get)
   *
   * @param int $communityId
   * The ID of the community to get.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string hl
   * Specifies the interface language (host language) of your user interface.
   * @return \Google\Service\Orkut\Community
   */
  public function get($communityId, $optParams = array())
  {
    $params = array('communityId' => $communityId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Orkut\Community");
  }
  /**
   * Retrieves the list of communities the current user is a member of.
   * (communities.listCommunities)
   *
   * @param string $userId
   * The ID of the user whose communities will be listed. Can be me to refer to caller.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string orderBy
   * How to order the communities by.
   * @opt_param string maxResults
   * The maximum number of communities to include in the response.
   * @opt_param string hl
   * Specifies the interface language (host language) of your user interface.
   * @return \Google\Service\Orkut\CommunityList
   */
  public function listCommunities($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Orkut\CommunityList");
  }
}
