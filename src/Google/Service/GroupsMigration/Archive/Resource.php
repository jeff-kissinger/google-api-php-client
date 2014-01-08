<?php
namespace Google\Service\GroupsMigration\Archive;

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
 * The "archive" collection of methods.
 * Typical usage is:
 *  <code>
 *   $groupsmigrationService = new Google_Service_GroupsMigration(...);
 *   $archive = $groupsmigrationService->archive;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Inserts a new mail into the archive of the Google group. (archive.insert)
   *
   * @param string $groupId
   * The group ID
   * @param array $optParams Optional parameters.
   * @return \Google\Service\GroupsMigration\Groups
   */
  public function insert($groupId, $optParams = array())
  {
    $params = array('groupId' => $groupId);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\GroupsMigration\Groups");
  }
}
