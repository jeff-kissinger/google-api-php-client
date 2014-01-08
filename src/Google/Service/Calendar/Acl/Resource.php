<?php
namespace Google\Service\Calendar\Acl;

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
 * The "acl" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google_Service_Calendar(...);
 *   $acl = $calendarService->acl;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Deletes an access control rule. (acl.delete)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param string $ruleId
   * ACL rule identifier.
   * @param array $optParams Optional parameters.
   */
  public function delete($calendarId, $ruleId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'ruleId' => $ruleId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Returns an access control rule. (acl.get)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param string $ruleId
   * ACL rule identifier.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Calendar\AclRule
   */
  public function get($calendarId, $ruleId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'ruleId' => $ruleId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Calendar\AclRule");
  }
  /**
   * Creates an access control rule. (acl.insert)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param \Google\AclRule $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Calendar\AclRule
   */
  public function insert($calendarId, \Google\Service\Calendar\AclRule $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Calendar\AclRule");
  }
  /**
   * Returns the rules in the access control list for the calendar. (acl.listAcl)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Calendar\Acl
   */
  public function listAcl($calendarId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Calendar\Acl");
  }
  /**
   * Updates an access control rule. This method supports patch semantics.
   * (acl.patch)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param string $ruleId
   * ACL rule identifier.
   * @param \Google\AclRule $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Calendar\AclRule
   */
  public function patch($calendarId, $ruleId, \Google\Service\Calendar\AclRule $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'ruleId' => $ruleId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "\Google\Service\Calendar\AclRule");
  }
  /**
   * Updates an access control rule. (acl.update)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param string $ruleId
   * ACL rule identifier.
   * @param \Google\AclRule $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Calendar\AclRule
   */
  public function update($calendarId, $ruleId, \Google\Service\Calendar\AclRule $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'ruleId' => $ruleId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "\Google\Service\Calendar\AclRule");
  }
}
