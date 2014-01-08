<?php
namespace Google\Service\Storage\DefaultObjectAccessControls;

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
 * The "defaultObjectAccessControls" collection of methods.
 * Typical usage is:
 *  <code>
 *   $storageService = new Google_Service_Storage(...);
 *   $defaultObjectAccessControls = $storageService->defaultObjectAccessControls;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Permanently deletes the default object ACL entry for the specified entity on
   * the specified bucket. (defaultObjectAccessControls.delete)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param string $entity
   * The entity holding the permission. Can be user-userId, group-groupId, allUsers, or
    * allAuthenticatedUsers.
   * @param array $optParams Optional parameters.
   */
  public function delete($bucket, $entity, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'entity' => $entity);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Returns the default object ACL entry for the specified entity on the
   * specified bucket. (defaultObjectAccessControls.get)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param string $entity
   * The entity holding the permission. Can be user-userId, group-groupId, allUsers, or
    * allAuthenticatedUsers.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Storage\ObjectAccessControl
   */
  public function get($bucket, $entity, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'entity' => $entity);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Storage\ObjectAccessControl");
  }
  /**
   * Creates a new default object ACL entry on the specified bucket.
   * (defaultObjectAccessControls.insert)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param \Google\ObjectAccessControl $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Storage\ObjectAccessControl
   */
  public function insert($bucket, \Google\Service\Storage\ObjectAccessControl $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Storage\ObjectAccessControl");
  }
  /**
   * Retrieves default object ACL entries on the specified bucket.
   * (defaultObjectAccessControls.listDefaultObjectAccessControls)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string ifMetagenerationMatch
   * Makes the operation conditional on whether the destination object's current metageneration
    * matches the given value.
   * @opt_param string ifMetagenerationNotMatch
   * Makes the operation conditional on whether the destination object's current metageneration does
    * not match the given value.
   * @return \Google\Service\Storage\ObjectAccessControls
   */
  public function listDefaultObjectAccessControls($bucket, $optParams = array())
  {
    $params = array('bucket' => $bucket);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Storage\ObjectAccessControls");
  }
  /**
   * Updates a default object ACL entry on the specified bucket. This method
   * supports patch semantics. (defaultObjectAccessControls.patch)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param string $entity
   * The entity holding the permission. Can be user-userId, group-groupId, allUsers, or
    * allAuthenticatedUsers.
   * @param \Google\ObjectAccessControl $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Storage\ObjectAccessControl
   */
  public function patch($bucket, $entity, \Google\Service\Storage\ObjectAccessControl $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'entity' => $entity, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "\Google\Service\Storage\ObjectAccessControl");
  }
  /**
   * Updates a default object ACL entry on the specified bucket.
   * (defaultObjectAccessControls.update)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param string $entity
   * The entity holding the permission. Can be user-userId, group-groupId, allUsers, or
    * allAuthenticatedUsers.
   * @param \Google\ObjectAccessControl $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Storage\ObjectAccessControl
   */
  public function update($bucket, $entity, \Google\Service\Storage\ObjectAccessControl $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'entity' => $entity, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "\Google\Service\Storage\ObjectAccessControl");
  }
}
