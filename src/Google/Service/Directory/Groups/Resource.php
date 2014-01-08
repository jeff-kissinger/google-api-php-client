<?php
namespace Google\Service\Directory\Groups;

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
 * The "groups" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_Service_Directory(...);
 *   $groups = $adminService->groups;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Delete Group (groups.delete)
   *
   * @param string $groupKey
   * Email or immutable Id of the group
   * @param array $optParams Optional parameters.
   */
  public function delete($groupKey, $optParams = array())
  {
    $params = array('groupKey' => $groupKey);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Retrieve Group (groups.get)
   *
   * @param string $groupKey
   * Email or immutable Id of the group
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\Group
   */
  public function get($groupKey, $optParams = array())
  {
    $params = array('groupKey' => $groupKey);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Directory\Group");
  }
  /**
   * Create Group (groups.insert)
   *
   * @param \Google\Group $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\Group
   */
  public function insert(\Google\Service\Directory\Group $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Directory\Group");
  }
  /**
   * Retrieve all groups in a domain (paginated) (groups.listGroups)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string customer
   * Immutable id of the Google Apps account. In case of multi-domain, to fetch all groups for a
    * customer, fill this field instead of domain.
   * @opt_param string pageToken
   * Token to specify next page in the list
   * @opt_param string domain
   * Name of the domain. Fill this field to get groups from only this domain. To return all groups in
    * a multi-domain fill customer field instead.
   * @opt_param int maxResults
   * Maximum number of results to return. Default is 200
   * @opt_param string userKey
   * Email or immutable Id of the user if only those groups are to be listed, the given user is a
    * member of. If Id, it should match with id of user object
   * @return \Google\Service\Directory\Groups
   */
  public function listGroups($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Directory\Groups");
  }
  /**
   * Update Group. This method supports patch semantics. (groups.patch)
   *
   * @param string $groupKey
   * Email or immutable Id of the group. If Id, it should match with id of group object
   * @param \Google\Group $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\Group
   */
  public function patch($groupKey, \Google\Service\Directory\Group $postBody, $optParams = array())
  {
    $params = array('groupKey' => $groupKey, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "\Google\Service\Directory\Group");
  }
  /**
   * Update Group (groups.update)
   *
   * @param string $groupKey
   * Email or immutable Id of the group. If Id, it should match with id of group object
   * @param \Google\Group $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\Group
   */
  public function update($groupKey, \Google\Service\Directory\Group $postBody, $optParams = array())
  {
    $params = array('groupKey' => $groupKey, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "\Google\Service\Directory\Group");
  }
}
