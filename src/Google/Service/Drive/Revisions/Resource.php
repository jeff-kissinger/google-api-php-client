<?php
namespace Google\Service\Drive\Revisions;

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
 * The "revisions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $revisions = $driveService->revisions;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Removes a revision. (revisions.delete)
   *
   * @param string $fileId
   * The ID of the file.
   * @param string $revisionId
   * The ID of the revision.
   * @param array $optParams Optional parameters.
   */
  public function delete($fileId, $revisionId, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'revisionId' => $revisionId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Gets a specific revision. (revisions.get)
   *
   * @param string $fileId
   * The ID of the file.
   * @param string $revisionId
   * The ID of the revision.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\Revision
   */
  public function get($fileId, $revisionId, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'revisionId' => $revisionId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Drive\Revision");
  }
  /**
   * Lists a file's revisions. (revisions.listRevisions)
   *
   * @param string $fileId
   * The ID of the file.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\RevisionList
   */
  public function listRevisions($fileId, $optParams = array())
  {
    $params = array('fileId' => $fileId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Drive\RevisionList");
  }
  /**
   * Updates a revision. This method supports patch semantics. (revisions.patch)
   *
   * @param string $fileId
   * The ID for the file.
   * @param string $revisionId
   * The ID for the revision.
   * @param \Google\Revision $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\Revision
   */
  public function patch($fileId, $revisionId, \Google\Service\Drive\Revision $postBody, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'revisionId' => $revisionId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "\Google\Service\Drive\Revision");
  }
  /**
   * Updates a revision. (revisions.update)
   *
   * @param string $fileId
   * The ID for the file.
   * @param string $revisionId
   * The ID for the revision.
   * @param \Google\Revision $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\Revision
   */
  public function update($fileId, $revisionId, \Google\Service\Drive\Revision $postBody, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'revisionId' => $revisionId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "\Google\Service\Drive\Revision");
  }
}
