<?php
namespace Google\Service\Directory\Users;

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
 * The "users" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_Service_Directory(...);
 *   $users = $adminService->users;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Delete user (users.delete)
   *
   * @param string $userKey
   * Email or immutable Id of the user
   * @param array $optParams Optional parameters.
   */
  public function delete($userKey, $optParams = array())
  {
    $params = array('userKey' => $userKey);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * retrieve user (users.get)
   *
   * @param string $userKey
   * Email or immutable Id of the user
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\User
   */
  public function get($userKey, $optParams = array())
  {
    $params = array('userKey' => $userKey);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Directory\User");
  }
  /**
   * create user. (users.insert)
   *
   * @param \Google\User $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\User
   */
  public function insert(\Google\Service\Directory\User $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Directory\User");
  }
  /**
   * Retrieve either deleted users or all users in a domain (paginated)
   * (users.listUsers)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string customer
   * Immutable id of the Google Apps account. In case of multi-domain, to fetch all users for a
    * customer, fill this field instead of domain.
   * @opt_param string orderBy
   * Column to use for sorting results
   * @opt_param string domain
   * Name of the domain. Fill this field to get users from only this domain. To return all users in a
    * multi-domain fill customer field instead.
   * @opt_param string showDeleted
   * If set to true retrieves the list of deleted users. Default is false
   * @opt_param int maxResults
   * Maximum number of results to return. Default is 100. Max allowed is 500
   * @opt_param string pageToken
   * Token to specify next page in the list
   * @opt_param string sortOrder
   * Whether to return results in ascending or descending order.
   * @opt_param string query
   * Query string for prefix matching searches. Should be of the form "key:value*" where key can be
    * "email", "givenName" or "familyName". The asterisk is required, for example: "givenName:Ann*" is
    * a valid query.
   * @return \Google\Service\Directory\Users
   */
  public function listUsers($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Directory\Users");
  }
  /**
   * change admin status of a user (users.makeAdmin)
   *
   * @param string $userKey
   * Email or immutable Id of the user as admin
   * @param \Google\UserMakeAdmin $postBody
   * @param array $optParams Optional parameters.
   */
  public function makeAdmin($userKey, \Google\Service\Directory\UserMakeAdmin $postBody, $optParams = array())
  {
    $params = array('userKey' => $userKey, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('makeAdmin', array($params));
  }
  /**
   * update user. This method supports patch semantics. (users.patch)
   *
   * @param string $userKey
   * Email or immutable Id of the user. If Id, it should match with id of user object
   * @param \Google\User $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\User
   */
  public function patch($userKey, \Google\Service\Directory\User $postBody, $optParams = array())
  {
    $params = array('userKey' => $userKey, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "\Google\Service\Directory\User");
  }
  /**
   * Undelete a deleted user (users.undelete)
   *
   * @param string $userKey
   * The immutable id of the user
   * @param \Google\UserUndelete $postBody
   * @param array $optParams Optional parameters.
   */
  public function undelete($userKey, \Google\Service\Directory\UserUndelete $postBody, $optParams = array())
  {
    $params = array('userKey' => $userKey, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('undelete', array($params));
  }
  /**
   * update user (users.update)
   *
   * @param string $userKey
   * Email or immutable Id of the user. If Id, it should match with id of user object
   * @param \Google\User $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\User
   */
  public function update($userKey, \Google\Service\Directory\User $postBody, $optParams = array())
  {
    $params = array('userKey' => $userKey, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "\Google\Service\Directory\User");
  }
}
