<?php
namespace Google\Service\AdExchangeSeller\AdunitsCustomchannels;

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
 * The "customchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new Google_Service_AdExchangeSeller(...);
 *   $customchannels = $adexchangesellerService->customchannels;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * List all custom channels which the specified ad unit belongs to.
   * (customchannels.listAdunitsCustomchannels)
   *
   * @param string $adClientId
   * Ad client which contains the ad unit.
   * @param string $adUnitId
   * Ad unit for which to list custom channels.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A continuation token, used to page through custom channels. To retrieve the next page, set this
    * parameter to the value of "nextPageToken" from the previous response.
   * @opt_param string maxResults
   * The maximum number of custom channels to include in the response, used for paging.
   * @return \Google\Service\AdExchangeSeller\CustomChannels
   */
  public function listAdunitsCustomchannels($adClientId, $adUnitId, $optParams = array())
  {
    $params = array('adClientId' => $adClientId, 'adUnitId' => $adUnitId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\AdExchangeSeller\CustomChannels");
  }
}
