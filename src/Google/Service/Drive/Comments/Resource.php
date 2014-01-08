<?php
namespace Google\Service\Drive\Comments;

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
 * The "comments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $comments = $driveService->comments;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Deletes a comment. (comments.delete)
   *
   * @param string $fileId
   * The ID of the file.
   * @param string $commentId
   * The ID of the comment.
   * @param array $optParams Optional parameters.
   */
  public function delete($fileId, $commentId, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'commentId' => $commentId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Gets a comment by ID. (comments.get)
   *
   * @param string $fileId
   * The ID of the file.
   * @param string $commentId
   * The ID of the comment.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool includeDeleted
   * If set, this will succeed when retrieving a deleted comment, and will include any deleted
    * replies.
   * @return \Google\Service\Drive\Comment
   */
  public function get($fileId, $commentId, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'commentId' => $commentId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Drive\Comment");
  }
  /**
   * Creates a new comment on the given file. (comments.insert)
   *
   * @param string $fileId
   * The ID of the file.
   * @param \Google\Comment $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\Comment
   */
  public function insert($fileId, \Google\Service\Drive\Comment $postBody, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Drive\Comment");
  }
  /**
   * Lists a file's comments. (comments.listComments)
   *
   * @param string $fileId
   * The ID of the file.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The continuation token, used to page through large result sets. To get the next page of results,
    * set this parameter to the value of "nextPageToken" from the previous response.
   * @opt_param string updatedMin
   * Only discussions that were updated after this timestamp will be returned. Formatted as an RFC
    * 3339 timestamp.
   * @opt_param bool includeDeleted
   * If set, all comments and replies, including deleted comments and replies (with content stripped)
    * will be returned.
   * @opt_param int maxResults
   * The maximum number of discussions to include in the response, used for paging.
   * @return \Google\Service\Drive\CommentList
   */
  public function listComments($fileId, $optParams = array())
  {
    $params = array('fileId' => $fileId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Drive\CommentList");
  }
  /**
   * Updates an existing comment. This method supports patch semantics.
   * (comments.patch)
   *
   * @param string $fileId
   * The ID of the file.
   * @param string $commentId
   * The ID of the comment.
   * @param \Google\Comment $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\Comment
   */
  public function patch($fileId, $commentId, \Google\Service\Drive\Comment $postBody, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'commentId' => $commentId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "\Google\Service\Drive\Comment");
  }
  /**
   * Updates an existing comment. (comments.update)
   *
   * @param string $fileId
   * The ID of the file.
   * @param string $commentId
   * The ID of the comment.
   * @param \Google\Comment $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\Comment
   */
  public function update($fileId, $commentId, \Google\Service\Drive\Comment $postBody, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'commentId' => $commentId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "\Google\Service\Drive\Comment");
  }
}
