<?php
namespace Google\Service\Books\Myconfig;

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
 * The "myconfig" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_Service_Books(...);
 *   $myconfig = $booksService->myconfig;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Release downloaded content access restriction.
   * (myconfig.releaseDownloadAccess)
   *
   * @param string $volumeIds
   * The volume(s) to release restrictions for.
   * @param string $cpksver
   * The device/version ID from which to release the restriction.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string locale
   * ISO-639-1, ISO-3166-1 codes for message localization, i.e. en_US.
   * @opt_param string source
   * String to identify the originator of this request.
   * @return \Google\Service\Books\DownloadAccesses
   */
  public function releaseDownloadAccess($volumeIds, $cpksver, $optParams = array())
  {
    $params = array('volumeIds' => $volumeIds, 'cpksver' => $cpksver);
    $params = array_merge($params, $optParams);
    return $this->call('releaseDownloadAccess', array($params), "\Google\Service\Books\DownloadAccesses");
  }
  /**
   * Request concurrent and download access restrictions. (myconfig.requestAccess)
   *
   * @param string $source
   * String to identify the originator of this request.
   * @param string $volumeId
   * The volume to request concurrent/download restrictions for.
   * @param string $nonce
   * The client nonce value.
   * @param string $cpksver
   * The device/version ID from which to request the restrictions.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string licenseTypes
   * The type of access license to request. If not specified, the default is BOTH.
   * @opt_param string locale
   * ISO-639-1, ISO-3166-1 codes for message localization, i.e. en_US.
   * @return \Google\Service\Books\RequestAccess
   */
  public function requestAccess($source, $volumeId, $nonce, $cpksver, $optParams = array())
  {
    $params = array('source' => $source, 'volumeId' => $volumeId, 'nonce' => $nonce, 'cpksver' => $cpksver);
    $params = array_merge($params, $optParams);
    return $this->call('requestAccess', array($params), "\Google\Service\Books\RequestAccess");
  }
  /**
   * Request downloaded content access for specified volumes on the My eBooks
   * shelf. (myconfig.syncVolumeLicenses)
   *
   * @param string $source
   * String to identify the originator of this request.
   * @param string $nonce
   * The client nonce value.
   * @param string $cpksver
   * The device/version ID from which to release the restriction.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string features
   * List of features supported by the client, i.e., 'RENTALS'
   * @opt_param string locale
   * ISO-639-1, ISO-3166-1 codes for message localization, i.e. en_US.
   * @opt_param bool showPreorders
   * Set to true to show pre-ordered books. Defaults to false.
   * @opt_param string volumeIds
   * The volume(s) to request download restrictions for.
   * @return \Google\Service\Books\Volumes
   */
  public function syncVolumeLicenses($source, $nonce, $cpksver, $optParams = array())
  {
    $params = array('source' => $source, 'nonce' => $nonce, 'cpksver' => $cpksver);
    $params = array_merge($params, $optParams);
    return $this->call('syncVolumeLicenses', array($params), "\Google\Service\Books\Volumes");
  }
}
