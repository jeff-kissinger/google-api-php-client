<?php
namespace Google\Service\YouTube\LiveStreams;

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
 * The "liveStreams" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_Service_YouTube(...);
 *   $liveStreams = $youtubeService->liveStreams;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Deletes a video stream. (liveStreams.delete)
   *
   * @param string $id
   * The id parameter specifies the YouTube live stream ID for the resource that is being deleted.
   * @param array $optParams Optional parameters.
   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Creates a video stream. The stream enables you to send your video to YouTube,
   * which can then broadcast the video to your audience. (liveStreams.insert)
   *
   * @param string $part
   * The part parameter serves two purposes in this operation. It identifies the properties that the
    * write operation will set as well as the properties that the API response will include.
  The part
    * properties that you can include in the parameter value are id, snippet, cdn, and status.
   * @param \Google\LiveStream $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\YouTube\LiveStream
   */
  public function insert($part, \Google\Service\YouTube\LiveStream $postBody, $optParams = array())
  {
    $params = array('part' => $part, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\YouTube\LiveStream");
  }
  /**
   * Returns a list of video streams that match the API request parameters.
   * (liveStreams.listLiveStreams)
   *
   * @param string $part
   * The part parameter specifies a comma-separated list of one or more liveStream resource
    * properties that the API response will include. The part names that you can include in the
    * parameter value are id, snippet, cdn, and status.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The pageToken parameter identifies a specific page in the result set that should be returned. In
    * an API response, the nextPageToken and prevPageToken properties identify other pages that could
    * be retrieved.
   * @opt_param string id
   * The id parameter specifies a comma-separated list of YouTube stream IDs that identify the
    * streams being retrieved. In a liveStream resource, the id property specifies the stream's ID.
   * @opt_param string maxResults
   * The maxResults parameter specifies the maximum number of items that should be returned in the
    * result set. Acceptable values are 0 to 50, inclusive. The default value is 5.
   * @opt_param bool mine
   * The mine parameter can be used to instruct the API to only return streams owned by the
    * authenticated user. Set the parameter value to true to only retrieve your own streams.
   * @return \Google\Service\YouTube\LiveStreamListResponse
   */
  public function listLiveStreams($part, $optParams = array())
  {
    $params = array('part' => $part);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\YouTube\LiveStreamListResponse");
  }
  /**
   * Updates a video stream. If the properties that you want to change cannot be
   * updated, then you need to create a new stream with the proper settings.
   * (liveStreams.update)
   *
   * @param string $part
   * The part parameter serves two purposes in this operation. It identifies the properties that the
    * write operation will set as well as the properties that the API response will include.
  The part
    * properties that you can include in the parameter value are id, snippet, cdn, and status.
  Note
    * that this method will override the existing values for all of the mutable properties that are
    * contained in any parts that the parameter value specifies. If the request body does not specify
    * a value for a mutable property, the existing value for that property will be removed.
   * @param \Google\LiveStream $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\YouTube\LiveStream
   */
  public function update($part, \Google\Service\YouTube\LiveStream $postBody, $optParams = array())
  {
    $params = array('part' => $part, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "\Google\Service\YouTube\LiveStream");
  }
}
