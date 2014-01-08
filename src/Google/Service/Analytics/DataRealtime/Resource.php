<?php
namespace Google\Service\Analytics\DataRealtime;

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
 * The "realtime" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $realtime = $analyticsService->realtime;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Returns real time data for a view (profile). (realtime.get)
   *
   * @param string $ids
   * Unique table ID for retrieving real time data. Table ID is of the form ga:XXXX, where XXXX is
    * the Analytics view (profile) ID.
   * @param string $metrics
   * A comma-separated list of real time metrics. E.g., 'ga:activeVisitors'. At least one metric must
    * be specified.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int maxResults
   * The maximum number of entries to include in this feed.
   * @opt_param string sort
   * A comma-separated list of dimensions or metrics that determine the sort order for real time
    * data.
   * @opt_param string dimensions
   * A comma-separated list of real time dimensions. E.g., 'ga:medium,ga:city'.
   * @opt_param string filters
   * A comma-separated list of dimension or metric filters to be applied to real time data.
   * @return \Google\Service\Analytics\RealtimeData
   */
  public function get($ids, $metrics, $optParams = array())
  {
    $params = array('ids' => $ids, 'metrics' => $metrics);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Analytics\RealtimeData");
  }
}
