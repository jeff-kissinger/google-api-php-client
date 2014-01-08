<?php
namespace Google\Service\Calendar\Events;

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
 * The "events" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google_Service_Calendar(...);
 *   $events = $calendarService->events;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Deletes an event. (events.delete)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param string $eventId
   * Event identifier.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool sendNotifications
   * Whether to send notifications about the deletion of the event. Optional. The default is False.
   */
  public function delete($calendarId, $eventId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'eventId' => $eventId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Returns an event. (events.get)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param string $eventId
   * Event identifier.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string timeZone
   * Time zone used in the response. Optional. The default is the time zone of the calendar.
   * @opt_param bool alwaysIncludeEmail
   * Whether to always include a value in the "email" field for the organizer, creator and attendees,
    * even if no real email is available (i.e. a generated, non-working value will be provided). The
    * use of this option is discouraged and should only be used by clients which cannot handle the
    * absence of an email address value in the mentioned places. Optional. The default is False.
   * @opt_param int maxAttendees
   * The maximum number of attendees to include in the response. If there are more than the specified
    * number of attendees, only the participant is returned. Optional.
   * @return \Google\Service\Calendar\Event
   */
  public function get($calendarId, $eventId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'eventId' => $eventId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Calendar\Event");
  }
  /**
   * Imports an event. This operation is used to add a private copy of an existing
   * event to a calendar. (events.import)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param \Google\Event $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Calendar\Event
   */
  public function import($calendarId, \Google\Service\Calendar\Event $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('import', array($params), "\Google\Service\Calendar\Event");
  }
  /**
   * Creates an event. (events.insert)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param \Google\Event $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool sendNotifications
   * Whether to send notifications about the creation of the new event. Optional. The default is
    * False.
   * @opt_param int maxAttendees
   * The maximum number of attendees to include in the response. If there are more than the specified
    * number of attendees, only the participant is returned. Optional.
   * @return \Google\Service\Calendar\Event
   */
  public function insert($calendarId, \Google\Service\Calendar\Event $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Calendar\Event");
  }
  /**
   * Returns instances of the specified recurring event. (events.instances)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param string $eventId
   * Recurring event identifier.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool showDeleted
   * Whether to include deleted events (with 'status' equals 'cancelled') in the result. Cancelled
    * instances of recurring events will still be included if 'singleEvents' is False. Optional. The
    * default is False.
   * @opt_param string timeMax
   * Upper bound (exclusive) for an event's start time to filter by. Optional. The default is not to
    * filter by start time.
   * @opt_param bool alwaysIncludeEmail
   * Whether to always include a value in the "email" field for the organizer, creator and attendees,
    * even if no real email is available (i.e. a generated, non-working value will be provided). The
    * use of this option is discouraged and should only be used by clients which cannot handle the
    * absence of an email address value in the mentioned places. Optional. The default is False.
   * @opt_param int maxResults
   * Maximum number of events returned on one result page. Optional.
   * @opt_param string pageToken
   * Token specifying which result page to return. Optional.
   * @opt_param string timeMin
   * Lower bound (inclusive) for an event's end time to filter by. Optional. The default is not to
    * filter by end time.
   * @opt_param string timeZone
   * Time zone used in the response. Optional. The default is the time zone of the calendar.
   * @opt_param string originalStart
   * The original start time of the instance in the result. Optional.
   * @opt_param int maxAttendees
   * The maximum number of attendees to include in the response. If there are more than the specified
    * number of attendees, only the participant is returned. Optional.
   * @return \Google\Service\Calendar\Events
   */
  public function instances($calendarId, $eventId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'eventId' => $eventId);
    $params = array_merge($params, $optParams);
    return $this->call('instances', array($params), "\Google\Service\Calendar\Events");
  }
  /**
   * Returns events on the specified calendar. (events.listEvents)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string orderBy
   * The order of the events returned in the result. Optional. The default is an unspecified, stable
    * order.
   * @opt_param bool showHiddenInvitations
   * Whether to include hidden invitations in the result. Optional. The default is False.
   * @opt_param bool showDeleted
   * Whether to include deleted events (with 'status' equals 'cancelled') in the result. Cancelled
    * instances of recurring events (but not the underlying recurring event) will still be included if
    * 'showDeleted' and 'singleEvents' are both False. If 'showDeleted' and 'singleEvents' are both
    * True, only single instances of deleted events (but not the underlying recurring events) are
    * returned. Optional. The default is False.
   * @opt_param string iCalUID
   * Specifies iCalendar UID (iCalUID) of events to be included in the response. Optional.
   * @opt_param string updatedMin
   * Lower bound for an event's last modification time (as a RFC 3339 timestamp) to filter by.
    * Optional. The default is not to filter by last modification time.
   * @opt_param bool singleEvents
   * Whether to expand recurring events into instances and only return single one-off events and
    * instances of recurring events, but not the underlying recurring events themselves. Optional. The
    * default is False.
   * @opt_param string timeMax
   * Upper bound (exclusive) for an event's start time to filter by. Optional. The default is not to
    * filter by start time.
   * @opt_param bool alwaysIncludeEmail
   * Whether to always include a value in the "email" field for the organizer, creator and attendees,
    * even if no real email is available (i.e. a generated, non-working value will be provided). The
    * use of this option is discouraged and should only be used by clients which cannot handle the
    * absence of an email address value in the mentioned places. Optional. The default is False.
   * @opt_param int maxResults
   * Maximum number of events returned on one result page. Optional.
   * @opt_param string q
   * Free text search terms to find events that match these terms in any field, except for extended
    * properties. Optional.
   * @opt_param string pageToken
   * Token specifying which result page to return. Optional.
   * @opt_param string timeMin
   * Lower bound (inclusive) for an event's end time to filter by. Optional. The default is not to
    * filter by end time.
   * @opt_param string timeZone
   * Time zone used in the response. Optional. The default is the time zone of the calendar.
   * @opt_param string privateExtendedProperty
   * Extended properties constraint specified as propertyName=value. Matches only private properties.
    * This parameter might be repeated multiple times to return events that match all given
    * constraints.
   * @opt_param string sharedExtendedProperty
   * Extended properties constraint specified as propertyName=value. Matches only shared properties.
    * This parameter might be repeated multiple times to return events that match all given
    * constraints.
   * @opt_param int maxAttendees
   * The maximum number of attendees to include in the response. If there are more than the specified
    * number of attendees, only the participant is returned. Optional.
   * @return \Google\Service\Calendar\Events
   */
  public function listEvents($calendarId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Calendar\Events");
  }
  /**
   * Moves an event to another calendar, i.e. changes an event's organizer.
   * (events.move)
   *
   * @param string $calendarId
   * Calendar identifier of the source calendar where the event currently is on.
   * @param string $eventId
   * Event identifier.
   * @param string $destination
   * Calendar identifier of the target calendar where the event is to be moved to.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool sendNotifications
   * Whether to send notifications about the change of the event's organizer. Optional. The default
    * is False.
   * @return \Google\Service\Calendar\Event
   */
  public function move($calendarId, $eventId, $destination, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'eventId' => $eventId, 'destination' => $destination);
    $params = array_merge($params, $optParams);
    return $this->call('move', array($params), "\Google\Service\Calendar\Event");
  }
  /**
   * Updates an event. This method supports patch semantics. (events.patch)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param string $eventId
   * Event identifier.
   * @param \Google\Event $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool sendNotifications
   * Whether to send notifications about the event update (e.g. attendee's responses, title changes,
    * etc.). Optional. The default is False.
   * @opt_param bool alwaysIncludeEmail
   * Whether to always include a value in the "email" field for the organizer, creator and attendees,
    * even if no real email is available (i.e. a generated, non-working value will be provided). The
    * use of this option is discouraged and should only be used by clients which cannot handle the
    * absence of an email address value in the mentioned places. Optional. The default is False.
   * @opt_param int maxAttendees
   * The maximum number of attendees to include in the response. If there are more than the specified
    * number of attendees, only the participant is returned. Optional.
   * @return \Google\Service\Calendar\Event
   */
  public function patch($calendarId, $eventId, \Google\Service\Calendar\Event $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'eventId' => $eventId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "\Google\Service\Calendar\Event");
  }
  /**
   * Creates an event based on a simple text string. (events.quickAdd)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param string $text
   * The text describing the event to be created.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool sendNotifications
   * Whether to send notifications about the creation of the event. Optional. The default is False.
   * @return \Google\Service\Calendar\Event
   */
  public function quickAdd($calendarId, $text, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'text' => $text);
    $params = array_merge($params, $optParams);
    return $this->call('quickAdd', array($params), "\Google\Service\Calendar\Event");
  }
  /**
   * Updates an event. (events.update)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param string $eventId
   * Event identifier.
   * @param \Google\Event $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool sendNotifications
   * Whether to send notifications about the event update (e.g. attendee's responses, title changes,
    * etc.). Optional. The default is False.
   * @opt_param bool alwaysIncludeEmail
   * Whether to always include a value in the "email" field for the organizer, creator and attendees,
    * even if no real email is available (i.e. a generated, non-working value will be provided). The
    * use of this option is discouraged and should only be used by clients which cannot handle the
    * absence of an email address value in the mentioned places. Optional. The default is False.
   * @opt_param int maxAttendees
   * The maximum number of attendees to include in the response. If there are more than the specified
    * number of attendees, only the participant is returned. Optional.
   * @return \Google\Service\Calendar\Event
   */
  public function update($calendarId, $eventId, \Google\Service\Calendar\Event $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'eventId' => $eventId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "\Google\Service\Calendar\Event");
  }
  /**
   * Watch for changes to Events resources. (events.watch)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param \Google\Channel $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string orderBy
   * The order of the events returned in the result. Optional. The default is an unspecified, stable
    * order.
   * @opt_param bool showHiddenInvitations
   * Whether to include hidden invitations in the result. Optional. The default is False.
   * @opt_param bool showDeleted
   * Whether to include deleted events (with 'status' equals 'cancelled') in the result. Cancelled
    * instances of recurring events (but not the underlying recurring event) will still be included if
    * 'showDeleted' and 'singleEvents' are both False. If 'showDeleted' and 'singleEvents' are both
    * True, only single instances of deleted events (but not the underlying recurring events) are
    * returned. Optional. The default is False.
   * @opt_param string iCalUID
   * Specifies iCalendar UID (iCalUID) of events to be included in the response. Optional.
   * @opt_param string updatedMin
   * Lower bound for an event's last modification time (as a RFC 3339 timestamp) to filter by.
    * Optional. The default is not to filter by last modification time.
   * @opt_param bool singleEvents
   * Whether to expand recurring events into instances and only return single one-off events and
    * instances of recurring events, but not the underlying recurring events themselves. Optional. The
    * default is False.
   * @opt_param string timeMax
   * Upper bound (exclusive) for an event's start time to filter by. Optional. The default is not to
    * filter by start time.
   * @opt_param bool alwaysIncludeEmail
   * Whether to always include a value in the "email" field for the organizer, creator and attendees,
    * even if no real email is available (i.e. a generated, non-working value will be provided). The
    * use of this option is discouraged and should only be used by clients which cannot handle the
    * absence of an email address value in the mentioned places. Optional. The default is False.
   * @opt_param int maxResults
   * Maximum number of events returned on one result page. Optional.
   * @opt_param string q
   * Free text search terms to find events that match these terms in any field, except for extended
    * properties. Optional.
   * @opt_param string pageToken
   * Token specifying which result page to return. Optional.
   * @opt_param string timeMin
   * Lower bound (inclusive) for an event's end time to filter by. Optional. The default is not to
    * filter by end time.
   * @opt_param string timeZone
   * Time zone used in the response. Optional. The default is the time zone of the calendar.
   * @opt_param string privateExtendedProperty
   * Extended properties constraint specified as propertyName=value. Matches only private properties.
    * This parameter might be repeated multiple times to return events that match all given
    * constraints.
   * @opt_param string sharedExtendedProperty
   * Extended properties constraint specified as propertyName=value. Matches only shared properties.
    * This parameter might be repeated multiple times to return events that match all given
    * constraints.
   * @opt_param int maxAttendees
   * The maximum number of attendees to include in the response. If there are more than the specified
    * number of attendees, only the participant is returned. Optional.
   * @return \Google\Service\Calendar\Channel
   */
  public function watch($calendarId, \Google\Service\Calendar\Channel $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('watch', array($params), "\Google\Service\Calendar\Channel");
  }
}
