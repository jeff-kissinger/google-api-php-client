<?php
namespace Google\Service\Analytics\ManagementAccountUserLinks;

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
 * The "accountUserLinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $accountUserLinks = $analyticsService->accountUserLinks;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Removes a user from the given account. (accountUserLinks.delete)
   *
   * @param string $accountId
   * Account ID to delete the user link for.
   * @param string $linkId
   * Link ID to delete the user link for.
   * @param array $optParams Optional parameters.
   */
  public function delete($accountId, $linkId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'linkId' => $linkId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Adds a new user to the given account. (accountUserLinks.insert)
   *
   * @param string $accountId
   * Account ID to create the user link for.
   * @param \Google\EntityUserLink $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Analytics\EntityUserLink
   */
  public function insert($accountId, \Google\Service\Analytics\EntityUserLink $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Analytics\EntityUserLink");
  }
  /**
   * Lists account-user links for a given account.
   * (accountUserLinks.listManagementAccountUserLinks)
   *
   * @param string $accountId
   * Account ID to retrieve the user links for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int maxResults
   * The maximum number of account-user links to include in this response.
   * @opt_param int startIndex
   * An index of the first account-user link to retrieve. Use this parameter as a pagination
    * mechanism along with the max-results parameter.
   * @return \Google\Service\Analytics\EntityUserLinks
   */
  public function listManagementAccountUserLinks($accountId, $optParams = array())
  {
    $params = array('accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Analytics\EntityUserLinks");
  }
  /**
   * Updates permissions for an existing user on the given account.
   * (accountUserLinks.update)
   *
   * @param string $accountId
   * Account ID to update the account-user link for.
   * @param string $linkId
   * Link ID to update the account-user link for.
   * @param \Google\EntityUserLink $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Analytics\EntityUserLink
   */
  public function update($accountId, $linkId, \Google\Service\Analytics\EntityUserLink $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'linkId' => $linkId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "\Google\Service\Analytics\EntityUserLink");
  }
}
