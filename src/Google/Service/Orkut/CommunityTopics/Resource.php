<?php
namespace Google\Service\Orkut\CommunityTopics;

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
 * The "communityTopics" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_Service_Orkut(...);
 *   $communityTopics = $orkutService->communityTopics;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Moves a topic of the community to the trash folder. (communityTopics.delete)
   *
   * @param int $communityId
   * The ID of the community whose topic will be moved to the trash folder.
   * @param string $topicId
   * The ID of the topic to be moved to the trash folder.
   * @param array $optParams Optional parameters.
   */
  public function delete($communityId, $topicId, $optParams = array())
  {
    $params = array('communityId' => $communityId, 'topicId' => $topicId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Retrieves a topic of a community. (communityTopics.get)
   *
   * @param int $communityId
   * The ID of the community whose topic will be retrieved.
   * @param string $topicId
   * The ID of the topic to get.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string hl
   * Specifies the interface language (host language) of your user interface.
   * @return \Google\Service\Orkut\CommunityTopic
   */
  public function get($communityId, $topicId, $optParams = array())
  {
    $params = array('communityId' => $communityId, 'topicId' => $topicId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Orkut\CommunityTopic");
  }
  /**
   * Adds a topic to a given community. (communityTopics.insert)
   *
   * @param int $communityId
   * The ID of the community the topic should be added to.
   * @param \Google\CommunityTopic $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool isShout
   * Whether this topic is a shout.
   * @return \Google\Service\Orkut\CommunityTopic
   */
  public function insert($communityId, \Google\Service\Orkut\CommunityTopic $postBody, $optParams = array())
  {
    $params = array('communityId' => $communityId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Orkut\CommunityTopic");
  }
  /**
   * Retrieves the topics of a community. (communityTopics.listCommunityTopics)
   *
   * @param int $communityId
   * The ID of the community which topics will be listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A continuation token that allows pagination.
   * @opt_param string maxResults
   * The maximum number of topics to include in the response.
   * @opt_param string hl
   * Specifies the interface language (host language) of your user interface.
   * @return \Google\Service\Orkut\CommunityTopicList
   */
  public function listCommunityTopics($communityId, $optParams = array())
  {
    $params = array('communityId' => $communityId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Orkut\CommunityTopicList");
  }
}
