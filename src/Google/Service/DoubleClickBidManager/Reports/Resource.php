<?php
namespace Google\Service\DoubleClickBidManager\Reports;

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
 * The "reports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $doubleclickbidmanagerService = new Google_Service_DoubleClickBidManager(...);
 *   $reports = $doubleclickbidmanagerService->reports;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Retrieves stored reports. (reports.listreports)
   *
   * @param string $queryId
   * Query ID with which the reports are associated.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\DoubleClickBidManager\ListReportsResponse
   */
  public function listreports($queryId, $optParams = array())
  {
    $params = array('queryId' => $queryId);
    $params = array_merge($params, $optParams);
    return $this->call('listreports', array($params), "\Google\Service\DoubleClickBidManager\ListReportsResponse");
  }
}
