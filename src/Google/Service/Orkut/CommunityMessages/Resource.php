<?php
namespace Google\Service\Orkut\CommunityMessages;

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
 * The "communityMessages" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_Service_Orkut(...);
 *   $communityMessages = $orkutService->communityMessages;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Moves a message of the community to the trash folder.
   * (communityMessages.delete)
   *
   * @param int $communityId
   * The ID of the community whose message will be moved to the trash folder.
   * @param string $topicId
   * The ID of the topic whose message will be moved to the trash folder.
   * @param string $messageId
   * The ID of the message to be moved to the trash folder.
   * @param array $optParams Optional parameters.
   */
  public function delete($communityId, $topicId, $messageId, $optParams = array())
  {
    $params = array('communityId' => $communityId, 'topicId' => $topicId, 'messageId' => $messageId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Adds a message to a given community topic. (communityMessages.insert)
   *
   * @param int $communityId
   * The ID of the community the message should be added to.
   * @param string $topicId
   * The ID of the topic the message should be added to.
   * @param \Google\CommunityMessage $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Orkut\CommunityMessage
   */
  public function insert($communityId, $topicId, \Google\Service\Orkut\CommunityMessage $postBody, $optParams = array())
  {
    $params = array('communityId' => $communityId, 'topicId' => $topicId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Orkut\CommunityMessage");
  }
  /**
   * Retrieves the messages of a topic of a community.
   * (communityMessages.listCommunityMessages)
   *
   * @param int $communityId
   * The ID of the community which messages will be listed.
   * @param string $topicId
   * The ID of the topic which messages will be listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A continuation token that allows pagination.
   * @opt_param string maxResults
   * The maximum number of messages to include in the response.
   * @opt_param string hl
   * Specifies the interface language (host language) of your user interface.
   * @return \Google\Service\Orkut\CommunityMessageList
   */
  public function listCommunityMessages($communityId, $topicId, $optParams = array())
  {
    $params = array('communityId' => $communityId, 'topicId' => $topicId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Orkut\CommunityMessageList");
  }
}
