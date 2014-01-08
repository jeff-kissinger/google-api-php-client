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
 * Service definition for Groupssettings (v1).
 *
 * <p>
 * Lets you manage permission levels and related settings of a group.
 * </p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/google-apps/groups-settings/get_started" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Groupssettings extends \Google\Service
{
  public $groups;
  

  /**
   * Constructs the internal representation of the Groupssettings service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'groups/v1/groups/';
    $this->version = 'v1';
    
    $this->availableScopes = array(
      "https://www.googleapis.com/auth/apps.groups.settings"
    );
    
    $this->serviceName = 'groupssettings';

    $client->addService(
        $this->serviceName,
        $this->version,
        $this->availableScopes
    );

    $this->groups = new \Google\Service\Groupssettings\Groups\Resource(
        $this,
        $this->serviceName,
        'groups',
        array(
          'methods' => array(
            'get' => array(
              'path' => '{groupUniqueId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'groupUniqueId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => '{groupUniqueId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'groupUniqueId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => '{groupUniqueId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'groupUniqueId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}
