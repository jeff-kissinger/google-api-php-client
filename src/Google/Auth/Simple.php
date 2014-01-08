<?php
namespace Google\Auth;

/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Simple API access implementation. Can either be used to make requests
 * completely unauthenticated, or by using a Simple API Access developer
 * key.
 * @author Chris Chabot <chabotc@google.com>
 * @author Chirag Shah <chirags@google.com>
 */
class Simple extends \Google\Auth\Abstract
{
  private $key = null;
  private $client;

  public function __construct(\Google\Client $client, $config = null)
  {
    $this->client = $client;
  }

  /**
   * Perform an authenticated / signed apiHttpRequest.
   * This function takes the apiHttpRequest, calls apiAuth->sign on it
   * (which can modify the request in what ever way fits the auth mechanism)
   * and then calls apiCurlIO::makeRequest on the signed request
   *
   * @param \Google\Http\Request $request
   * @return \Google\Http\Request The resulting HTTP response including the
   * responseHttpCode, responseHeaders and responseBody.
   */
  public function authenticatedRequest(\Google\Http\Request $request)
  {
    $request = $this->sign($request);
    return $this->io->makeRequest($request);
  }

  public function authenticate($code)
  {
    throw new \Google\Auth\AuthException("Simple auth does not exchange tokens.");
  }

  public function setAccessToken($accessToken)
  {
    /* noop*/
  }

  public function getAccessToken()
  {
    return null;
  }

  public function createAuthUrl($scope)
  {
    return null;
  }

  public function refreshToken($refreshToken)
  {
    /* noop*/
  }

  public function revokeToken()
  {
    /* noop*/
  }

  public function sign(\Google\Http\Request $request)
  {
    $key = $this->client->getClassConfig($this, 'developer_key');
    if ($key) {
      $request->setQueryParam('key', $key);
    }
    return $request;
  }
}
