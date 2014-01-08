<?php
namespace Google\Service\Drive\Parents;

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
 * The "parents" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $parents = $driveService->parents;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Removes a parent from a file. (parents.delete)
   *
   * @param string $fileId
   * The ID of the file.
   * @param string $parentId
   * The ID of the parent.
   * @param array $optParams Optional parameters.
   */
  public function delete($fileId, $parentId, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'parentId' => $parentId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Gets a specific parent reference. (parents.get)
   *
   * @param string $fileId
   * The ID of the file.
   * @param string $parentId
   * The ID of the parent.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\ParentReference
   */
  public function get($fileId, $parentId, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'parentId' => $parentId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Drive\ParentReference");
  }
  /**
   * Adds a parent folder for a file. (parents.insert)
   *
   * @param string $fileId
   * The ID of the file.
   * @param \Google\ParentReference $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\ParentReference
   */
  public function insert($fileId, \Google\Service\Drive\ParentReference $postBody, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Drive\ParentReference");
  }
  /**
   * Lists a file's parents. (parents.listParents)
   *
   * @param string $fileId
   * The ID of the file.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\ParentList
   */
  public function listParents($fileId, $optParams = array())
  {
    $params = array('fileId' => $fileId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Drive\ParentList");
  }
}
