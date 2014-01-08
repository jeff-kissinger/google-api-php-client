<?php
namespace Google\Service\Doubleclicksearch\Reports;

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
 *   $doubleclicksearchService = new Google_Service_Doubleclicksearch(...);
 *   $reports = $doubleclicksearchService->reports;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Generates and returns a report immediately. (reports.generate)
   *
   * @param \Google\ReportRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Doubleclicksearch\Report
   */
  public function generate(\Google\Service\Doubleclicksearch\ReportRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('generate', array($params), "\Google\Service\Doubleclicksearch\Report");
  }
  /**
   * Polls for the status of a report request. (reports.get)
   *
   * @param string $reportId
   * ID of the report request being polled.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Doubleclicksearch\Report
   */
  public function get($reportId, $optParams = array())
  {
    $params = array('reportId' => $reportId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Doubleclicksearch\Report");
  }
  /**
   * Downloads a report file. (reports.getFile)
   *
   * @param string $reportId
   * ID of the report.
   * @param int $reportFragment
   * The index of the report fragment to download.
   * @param array $optParams Optional parameters.
   */
  public function getFile($reportId, $reportFragment, $optParams = array())
  {
    $params = array('reportId' => $reportId, 'reportFragment' => $reportFragment);
    $params = array_merge($params, $optParams);
    return $this->call('getFile', array($params));
  }
  /**
   * Inserts a report request into the reporting system. (reports.request)
   *
   * @param \Google\ReportRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Doubleclicksearch\Report
   */
  public function request(\Google\Service\Doubleclicksearch\ReportRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('request', array($params), "\Google\Service\Doubleclicksearch\Report");
  }
}
