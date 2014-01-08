<?php
namespace Google\Service\Directory\Orgunits;

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
 * The "orgunits" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_Service_Directory(...);
 *   $orgunits = $adminService->orgunits;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Remove Organization Unit (orgunits.delete)
   *
   * @param string $customerId
   * Immutable id of the Google Apps account
   * @param string $orgUnitPath
   * Full path of the organization unit
   * @param array $optParams Optional parameters.
   */
  public function delete($customerId, $orgUnitPath, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'orgUnitPath' => $orgUnitPath);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Retrieve Organization Unit (orgunits.get)
   *
   * @param string $customerId
   * Immutable id of the Google Apps account
   * @param string $orgUnitPath
   * Full path of the organization unit
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\OrgUnit
   */
  public function get($customerId, $orgUnitPath, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'orgUnitPath' => $orgUnitPath);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Directory\OrgUnit");
  }
  /**
   * Add Organization Unit (orgunits.insert)
   *
   * @param string $customerId
   * Immutable id of the Google Apps account
   * @param \Google\OrgUnit $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\OrgUnit
   */
  public function insert($customerId, \Google\Service\Directory\OrgUnit $postBody, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Directory\OrgUnit");
  }
  /**
   * Retrieve all Organization Units (orgunits.listOrgunits)
   *
   * @param string $customerId
   * Immutable id of the Google Apps account
   * @param array $optParams Optional parameters.
   *
   * @opt_param string type
   * Whether to return all sub-organizations or just immediate children
   * @opt_param string orgUnitPath
   * the URL-encoded organization unit
   * @return \Google\Service\Directory\OrgUnits
   */
  public function listOrgunits($customerId, $optParams = array())
  {
    $params = array('customerId' => $customerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Directory\OrgUnits");
  }
  /**
   * Update Organization Unit. This method supports patch semantics.
   * (orgunits.patch)
   *
   * @param string $customerId
   * Immutable id of the Google Apps account
   * @param string $orgUnitPath
   * Full path of the organization unit
   * @param \Google\OrgUnit $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\OrgUnit
   */
  public function patch($customerId, $orgUnitPath, \Google\Service\Directory\OrgUnit $postBody, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'orgUnitPath' => $orgUnitPath, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "\Google\Service\Directory\OrgUnit");
  }
  /**
   * Update Organization Unit (orgunits.update)
   *
   * @param string $customerId
   * Immutable id of the Google Apps account
   * @param string $orgUnitPath
   * Full path of the organization unit
   * @param \Google\OrgUnit $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\OrgUnit
   */
  public function update($customerId, $orgUnitPath, \Google\Service\Directory\OrgUnit $postBody, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'orgUnitPath' => $orgUnitPath, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "\Google\Service\Directory\OrgUnit");
  }
}
