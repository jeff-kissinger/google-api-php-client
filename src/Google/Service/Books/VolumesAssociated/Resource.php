<?php
namespace Google\Service\Books\VolumesAssociated;

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
 * The "associated" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_Service_Books(...);
 *   $associated = $booksService->associated;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Return a list of associated books. (associated.listVolumesAssociated)
   *
   * @param string $volumeId
   * ID of the source volume.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string locale
   * ISO-639-1 language and ISO-3166-1 country code. Ex: 'en_US'. Used for generating
    * recommendations.
   * @opt_param string source
   * String to identify the originator of this request.
   * @opt_param string association
   * Association type.
   * @return \Google\Service\Books\Volumes
   */
  public function listVolumesAssociated($volumeId, $optParams = array())
  {
    $params = array('volumeId' => $volumeId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Books\Volumes");
  }
}