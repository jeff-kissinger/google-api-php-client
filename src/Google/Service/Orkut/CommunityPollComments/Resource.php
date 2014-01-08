<?php
namespace Google\Service\Orkut\CommunityPollComments;

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
 * The "communityPollComments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_Service_Orkut(...);
 *   $communityPollComments = $orkutService->communityPollComments;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Adds a comment on a community poll. (communityPollComments.insert)
   *
   * @param int $communityId
   * The ID of the community whose poll is being commented.
   * @param string $pollId
   * The ID of the poll being commented.
   * @param \Google\CommunityPollComment $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Orkut\CommunityPollComment
   */
  public function insert($communityId, $pollId, \Google\Service\Orkut\CommunityPollComment $postBody, $optParams = array())
  {
    $params = array('communityId' => $communityId, 'pollId' => $pollId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Orkut\CommunityPollComment");
  }
  /**
   * Retrieves the comments of a community poll.
   * (communityPollComments.listCommunityPollComments)
   *
   * @param int $communityId
   * The ID of the community whose poll is having its comments listed.
   * @param string $pollId
   * The ID of the community whose polls will be listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A continuation token that allows pagination.
   * @opt_param string maxResults
   * The maximum number of comments to include in the response.
   * @opt_param string hl
   * Specifies the interface language (host language) of your user interface.
   * @return \Google\Service\Orkut\CommunityPollCommentList
   */
  public function listCommunityPollComments($communityId, $pollId, $optParams = array())
  {
    $params = array('communityId' => $communityId, 'pollId' => $pollId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Orkut\CommunityPollCommentList");
  }
}
