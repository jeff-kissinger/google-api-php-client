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
 * Service definition for Calendar (v3).
 *
 * <p>
 * Lets you manipulate events and other calendar data.
 * </p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/google-apps/calendar/firstapp" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Calendar extends \Google\Service
{
  /** Manage your calendars. */
  const CALENDAR = "https://www.googleapis.com/auth/calendar";
  /** View your calendars. */
  const CALENDAR_READONLY = "https://www.googleapis.com/auth/calendar.readonly";

  public $acl;
  public $calendarList;
  public $calendars;
  public $channels;
  public $colors;
  public $events;
  public $freebusy;
  public $settings;
  

  /**
   * Constructs the internal representation of the Calendar service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'calendar/v3/';
    $this->version = 'v3';
    $this->serviceName = 'calendar';

    $this->acl = new \Google\Service\Calendar\Acl\Resource(
        $this,
        $this->serviceName,
        'acl',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'calendars/{calendarId}/acl/{ruleId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'ruleId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'calendars/{calendarId}/acl/{ruleId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'ruleId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'calendars/{calendarId}/acl',
              'httpMethod' => 'POST',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'calendars/{calendarId}/acl',
              'httpMethod' => 'GET',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'calendars/{calendarId}/acl/{ruleId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'ruleId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'calendars/{calendarId}/acl/{ruleId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'ruleId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->calendarList = new \Google\Service\Calendar\CalendarList\Resource(
        $this,
        $this->serviceName,
        'calendarList',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'users/me/calendarList/{calendarId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'users/me/calendarList/{calendarId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'users/me/calendarList',
              'httpMethod' => 'POST',
              'parameters' => array(
                'colorRgbFormat' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'list' => array(
              'path' => 'users/me/calendarList',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'showHidden' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'minAccessRole' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'users/me/calendarList/{calendarId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'colorRgbFormat' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'update' => array(
              'path' => 'users/me/calendarList/{calendarId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'colorRgbFormat' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->calendars = new \Google\Service\Calendar\Calendars\Resource(
        $this,
        $this->serviceName,
        'calendars',
        array(
          'methods' => array(
            'clear' => array(
              'path' => 'calendars/{calendarId}/clear',
              'httpMethod' => 'POST',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'calendars/{calendarId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'calendars/{calendarId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'calendars',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'patch' => array(
              'path' => 'calendars/{calendarId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'calendars/{calendarId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->channels = new \Google\Service\Calendar\Channels\Resource(
        $this,
        $this->serviceName,
        'channels',
        array(
          'methods' => array(
            'stop' => array(
              'path' => 'channels/stop',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->colors = new \Google\Service\Calendar\Colors\Resource(
        $this,
        $this->serviceName,
        'colors',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'colors',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->events = new \Google\Service\Calendar\Events\Resource(
        $this,
        $this->serviceName,
        'events',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'calendars/{calendarId}/events/{eventId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'eventId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'sendNotifications' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'get' => array(
              'path' => 'calendars/{calendarId}/events/{eventId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'eventId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'timeZone' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'alwaysIncludeEmail' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'maxAttendees' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'import' => array(
              'path' => 'calendars/{calendarId}/events/import',
              'httpMethod' => 'POST',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'calendars/{calendarId}/events',
              'httpMethod' => 'POST',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'sendNotifications' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'maxAttendees' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'instances' => array(
              'path' => 'calendars/{calendarId}/events/{eventId}/instances',
              'httpMethod' => 'GET',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'eventId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'showDeleted' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'timeMax' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'alwaysIncludeEmail' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'timeMin' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'timeZone' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'originalStart' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxAttendees' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'list' => array(
              'path' => 'calendars/{calendarId}/events',
              'httpMethod' => 'GET',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orderBy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'showHiddenInvitations' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'showDeleted' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'iCalUID' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'updatedMin' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'singleEvents' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'timeMax' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'alwaysIncludeEmail' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'q' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'timeMin' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'timeZone' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'privateExtendedProperty' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'sharedExtendedProperty' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxAttendees' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'move' => array(
              'path' => 'calendars/{calendarId}/events/{eventId}/move',
              'httpMethod' => 'POST',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'eventId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'destination' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'sendNotifications' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'patch' => array(
              'path' => 'calendars/{calendarId}/events/{eventId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'eventId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'sendNotifications' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'alwaysIncludeEmail' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'maxAttendees' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'quickAdd' => array(
              'path' => 'calendars/{calendarId}/events/quickAdd',
              'httpMethod' => 'POST',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'text' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'sendNotifications' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'update' => array(
              'path' => 'calendars/{calendarId}/events/{eventId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'eventId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'sendNotifications' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'alwaysIncludeEmail' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'maxAttendees' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'watch' => array(
              'path' => 'calendars/{calendarId}/events/watch',
              'httpMethod' => 'POST',
              'parameters' => array(
                'calendarId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orderBy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'showHiddenInvitations' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'showDeleted' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'iCalUID' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'updatedMin' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'singleEvents' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'timeMax' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'alwaysIncludeEmail' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'q' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'timeMin' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'timeZone' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'privateExtendedProperty' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'sharedExtendedProperty' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxAttendees' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->freebusy = new \Google\Service\Calendar\Freebusy\Resource(
        $this,
        $this->serviceName,
        'freebusy',
        array(
          'methods' => array(
            'query' => array(
              'path' => 'freeBusy',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->settings = new \Google\Service\Calendar\Settings\Resource(
        $this,
        $this->serviceName,
        'settings',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'users/me/settings/{setting}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'setting' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'users/me/settings',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),
          )
        )
    );
  }
}
