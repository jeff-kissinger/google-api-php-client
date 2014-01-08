<?php
namespace Google\Service\Adexchangebuyer\Creatives;

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
 * The "creatives" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangebuyerService = new Google_Service_Adexchangebuyer(...);
 *   $creatives = $adexchangebuyerService->creatives;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Gets the status for a single creative. (creatives.get)
   *
   * @param int $accountId
   * The id for the account that will serve this creative.
   * @param string $buyerCreativeId
   * The buyer-specific id for this creative.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Adexchangebuyer\Creative
   */
  public function get($accountId, $buyerCreativeId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'buyerCreativeId' => $buyerCreativeId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Adexchangebuyer\Creative");
  }
  /**
   * Submit a new creative. (creatives.insert)
   *
   * @param \Google\Creative $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Adexchangebuyer\Creative
   */
  public function insert(\Google\Service\Adexchangebuyer\Creative $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Adexchangebuyer\Creative");
  }
  /**
   * Retrieves a list of the authenticated user's active creatives.
   * (creatives.listCreatives)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string statusFilter
   * When specified, only creatives having the given status are returned.
   * @opt_param string pageToken
   * A continuation token, used to page through ad clients. To retrieve the next page, set this
    * parameter to the value of "nextPageToken" from the previous response. Optional.
   * @opt_param string maxResults
   * Maximum number of entries returned on one result page. If not set, the default is 100. Optional.
   * @return \Google\Service\Adexchangebuyer\CreativesList
   */
  public function listCreatives($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Adexchangebuyer\CreativesList");
  }
}
