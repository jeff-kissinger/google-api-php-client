<?php
namespace Google\Service\Orkut\CommunityPollVotes;

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
 * The "communityPollVotes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_Service_Orkut(...);
 *   $communityPollVotes = $orkutService->communityPollVotes;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Votes on a community poll. (communityPollVotes.insert)
   *
   * @param int $communityId
   * The ID of the community whose poll is being voted.
   * @param string $pollId
   * The ID of the poll being voted.
   * @param \Google\CommunityPollVote $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Orkut\CommunityPollVote
   */
  public function insert($communityId, $pollId, \Google\Service\Orkut\CommunityPollVote $postBody, $optParams = array())
  {
    $params = array('communityId' => $communityId, 'pollId' => $pollId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Orkut\CommunityPollVote");
  }
}
