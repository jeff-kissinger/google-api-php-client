<?php
namespace Google\Service;

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
 * Service definition for Oauth2 (v2).
 *
 * <p>
 * Lets you access OAuth2 protocol related APIs.
 * </p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/accounts/docs/OAuth2" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Oauth2 extends \Google\Service
{
  public $userinfo;
  public $userinfo_v2_me;
  private $base_methods;

  /**
   * Constructs the internal representation of the Oauth2 service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = '';
    $this->version = 'v2';
    
    $this->availableScopes = array(
      "https://www.googleapis.com/auth/plus.login",
      "https://www.googleapis.com/auth/userinfo.email",
      "https://www.googleapis.com/auth/userinfo.profile",
      "https://www.googleapis.com/auth/plus.me"
    );
    
    $this->serviceName = 'oauth2';

    $client->addService(
        $this->serviceName,
        $this->version,
        $this->availableScopes
    );

    $this->userinfo = new \Google\Service\Oauth2\Userinfo\Resource(
        $this,
        $this->serviceName,
        'userinfo',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'oauth2/v2/userinfo',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->userinfo_v2_me = new \Google\Service\Oauth2\UserinfoV2Me\Resource(
        $this,
        $this->serviceName,
        'me',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userinfo/v2/me',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->base_methods = new \Google\Service\Resource(
        $this,
        $this->serviceName,
        '',
        array(
          'methods' => array(
            'tokeninfo' => array(
              'path' => 'oauth2/v2/tokeninfo',
              'httpMethod' => 'POST',
              'parameters' => array(
                'access_token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'id_token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
  }
  /**
   * (tokeninfo)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string accessToken
   *
   * @opt_param string idToken
   *
   * @return \Google\Service\Oauth2\Tokeninfo
   */
  public function tokeninfo($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('tokeninfo', array($params), "\Google\Service\Oauth2\Tokeninfo");
  }
}
