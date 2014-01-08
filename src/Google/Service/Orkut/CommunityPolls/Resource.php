<?php
namespace Google\Service\Orkut\CommunityPolls;

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
 * The "communityPolls" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_Service_Orkut(...);
 *   $communityPolls = $orkutService->communityPolls;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Retrieves one specific poll of a community. (communityPolls.get)
   *
   * @param int $communityId
   * The ID of the community for whose poll will be retrieved.
   * @param string $pollId
   * The ID of the poll to get.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string hl
   * Specifies the interface language (host language) of your user interface.
   * @return \Google\Service\Orkut\CommunityPoll
   */
  public function get($communityId, $pollId, $optParams = array())
  {
    $params = array('communityId' => $communityId, 'pollId' => $pollId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Orkut\CommunityPoll");
  }
  /**
   * Retrieves the polls of a community. (communityPolls.listCommunityPolls)
   *
   * @param int $communityId
   * The ID of the community which polls will be listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A continuation token that allows pagination.
   * @opt_param string maxResults
   * The maximum number of polls to include in the response.
   * @opt_param string hl
   * Specifies the interface language (host language) of your user interface.
   * @return \Google\Service\Orkut\CommunityPollList
   */
  public function listCommunityPolls($communityId, $optParams = array())
  {
    $params = array('communityId' => $communityId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Orkut\CommunityPollList");
  }
}
