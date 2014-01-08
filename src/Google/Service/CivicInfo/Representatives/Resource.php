<?php
namespace Google\Service\CivicInfo\Representatives;

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
 * The "representatives" collection of methods.
 * Typical usage is:
 *  <code>
 *   $civicinfoService = new Google_Service_CivicInfo(...);
 *   $representatives = $civicinfoService->representatives;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Looks up political geography and (optionally) representative information
   * based on an address. (representatives.representativeInfoQuery)
   *
   * @param \Google\RepresentativeInfoRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool includeOffices
   * Whether to return information about offices and officials. If false, only the top-level district
    * information will be returned.
   * @return \Google\Service\CivicInfo\RepresentativeInfoResponse
   */
  public function representativeInfoQuery(\Google\Service\CivicInfo\RepresentativeInfoRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('representativeInfoQuery', array($params), "\Google\Service\CivicInfo\RepresentativeInfoResponse");
  }
}
