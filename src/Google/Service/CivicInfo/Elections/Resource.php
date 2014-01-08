<?php
namespace Google\Service\CivicInfo\Elections;

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
 * The "elections" collection of methods.
 * Typical usage is:
 *  <code>
 *   $civicinfoService = new Google_Service_CivicInfo(...);
 *   $elections = $civicinfoService->elections;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * List of available elections to query. (elections.electionQuery)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\CivicInfo\ElectionsQueryResponse
   */
  public function electionQuery($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('electionQuery', array($params), "\Google\Service\CivicInfo\ElectionsQueryResponse");
  }
  /**
   * Looks up information relevant to a voter based on the voter's registered
   * address. (elections.voterInfoQuery)
   *
   * @param string $electionId
   * The unique ID of the election to look up. A list of election IDs can be obtained at
    * https://www.googleapis.com/civicinfo/{version}/elections
   * @param \Google\VoterInfoRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool officialOnly
   * If set to true, only data from official state sources will be returned.
   * @return \Google\Service\CivicInfo\VoterInfoResponse
   */
  public function voterInfoQuery($electionId, \Google\Service\CivicInfo\VoterInfoRequest $postBody, $optParams = array())
  {
    $params = array('electionId' => $electionId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('voterInfoQuery', array($params), "\Google\Service\CivicInfo\VoterInfoResponse");
  }
}
