<?php
namespace Google\Service\Calendar\Calendars;

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
 * The "calendars" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google_Service_Calendar(...);
 *   $calendars = $calendarService->calendars;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Clears a primary calendar. This operation deletes all data associated with
   * the primary calendar of an account and cannot be undone. (calendars.clear)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param array $optParams Optional parameters.
   */
  public function clear($calendarId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId);
    $params = array_merge($params, $optParams);
    return $this->call('clear', array($params));
  }
  /**
   * Deletes a secondary calendar. (calendars.delete)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param array $optParams Optional parameters.
   */
  public function delete($calendarId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Returns metadata for a calendar. (calendars.get)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Calendar\Calendar
   */
  public function get($calendarId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Calendar\Calendar");
  }
  /**
   * Creates a secondary calendar. (calendars.insert)
   *
   * @param \Google\Calendar $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Calendar\Calendar
   */
  public function insert(\Google\Service\Calendar\Calendar $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Calendar\Calendar");
  }
  /**
   * Updates metadata for a calendar. This method supports patch semantics.
   * (calendars.patch)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param \Google\Calendar $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Calendar\Calendar
   */
  public function patch($calendarId, \Google\Service\Calendar\Calendar $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "\Google\Service\Calendar\Calendar");
  }
  /**
   * Updates metadata for a calendar. (calendars.update)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param \Google\Calendar $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Calendar\Calendar
   */
  public function update($calendarId, \Google\Service\Calendar\Calendar $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "\Google\Service\Calendar\Calendar");
  }
}
