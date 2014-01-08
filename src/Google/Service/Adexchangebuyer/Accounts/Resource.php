<?php
namespace Google\Service\Adexchangebuyer\Accounts;

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
 * The "accounts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangebuyerService = new Google_Service_Adexchangebuyer(...);
 *   $accounts = $adexchangebuyerService->accounts;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Gets one account by ID. (accounts.get)
   *
   * @param int $id
   * The account id
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Adexchangebuyer\Account
   */
  public function get($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Adexchangebuyer\Account");
  }
  /**
   * Retrieves the authenticated user's list of accounts. (accounts.listAccounts)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Adexchangebuyer\AccountsList
   */
  public function listAccounts($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Adexchangebuyer\AccountsList");
  }
  /**
   * Updates an existing account. This method supports patch semantics.
   * (accounts.patch)
   *
   * @param int $id
   * The account id
   * @param \Google\Account $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Adexchangebuyer\Account
   */
  public function patch($id, \Google\Service\Adexchangebuyer\Account $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "\Google\Service\Adexchangebuyer\Account");
  }
  /**
   * Updates an existing account. (accounts.update)
   *
   * @param int $id
   * The account id
   * @param \Google\Account $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Adexchangebuyer\Account
   */
  public function update($id, \Google\Service\Adexchangebuyer\Account $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "\Google\Service\Adexchangebuyer\Account");
  }
}
