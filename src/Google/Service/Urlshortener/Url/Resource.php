<?php
namespace Google\Service\Urlshortener\Url;

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
 * The "url" collection of methods.
 * Typical usage is:
 *  <code>
 *   $urlshortenerService = new Google_Service_Urlshortener(...);
 *   $url = $urlshortenerService->url;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Expands a short URL or gets creation time and analytics. (url.get)
   *
   * @param string $shortUrl
   * The short URL, including the protocol.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string projection
   * Additional information to return.
   * @return \Google\Service\Urlshortener\Url
   */
  public function get($shortUrl, $optParams = array())
  {
    $params = array('shortUrl' => $shortUrl);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Urlshortener\Url");
  }
  /**
   * Creates a new short URL. (url.insert)
   *
   * @param \Google\Url $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Urlshortener\Url
   */
  public function insert(\Google\Service\Urlshortener\Url $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Urlshortener\Url");
  }
  /**
   * Retrieves a list of URLs shortened by a user. (url.listUrl)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string startToken
   * Token for requesting successive pages of results.
   * @opt_param string projection
   * Additional information to return.
   * @return \Google\Service\Urlshortener\UrlHistory
   */
  public function listUrl($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Urlshortener\UrlHistory");
  }
}
