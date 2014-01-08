<?php
namespace Google\Service\Drive\Children;

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
 * The "children" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $children = $driveService->children;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Removes a child from a folder. (children.delete)
   *
   * @param string $folderId
   * The ID of the folder.
   * @param string $childId
   * The ID of the child.
   * @param array $optParams Optional parameters.
   */
  public function delete($folderId, $childId, $optParams = array())
  {
    $params = array('folderId' => $folderId, 'childId' => $childId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Gets a specific child reference. (children.get)
   *
   * @param string $folderId
   * The ID of the folder.
   * @param string $childId
   * The ID of the child.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\ChildReference
   */
  public function get($folderId, $childId, $optParams = array())
  {
    $params = array('folderId' => $folderId, 'childId' => $childId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Drive\ChildReference");
  }
  /**
   * Inserts a file into a folder. (children.insert)
   *
   * @param string $folderId
   * The ID of the folder.
   * @param \Google\ChildReference $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\ChildReference
   */
  public function insert($folderId, \Google\Service\Drive\ChildReference $postBody, $optParams = array())
  {
    $params = array('folderId' => $folderId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Drive\ChildReference");
  }
  /**
   * Lists a folder's children. (children.listChildren)
   *
   * @param string $folderId
   * The ID of the folder.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string q
   * Query string for searching children.
   * @opt_param string pageToken
   * Page token for children.
   * @opt_param int maxResults
   * Maximum number of children to return.
   * @return \Google\Service\Drive\ChildList
   */
  public function listChildren($folderId, $optParams = array())
  {
    $params = array('folderId' => $folderId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Drive\ChildList");
  }
}
