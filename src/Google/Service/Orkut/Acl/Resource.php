<?php
namespace Google\Service\Orkut\Acl;

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
 *   $orkutService = new Google_Service_Orkut(...);
 *   $acl = $orkutService->acl;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Excludes an element from the ACL of the activity. (acl.delete)
   *
   * @param string $activityId
   * ID of the activity.
   * @param string $userId
   * ID of the user to be removed from the activity.
   * @param array $optParams Optional parameters.
   */
  public function delete($activityId, $userId, $optParams = array())
  {
    $params = array('activityId' => $activityId, 'userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
}
