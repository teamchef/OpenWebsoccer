<?php
/*
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
 * The "acl" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google_CalendarService(...);
 *   $acl = $calendarService->acl;
 *  </code>
 */
class Google_AclServiceResource extends Google_ServiceResource
{

    /**
     * Deletes an access control rule. (acl.delete)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $ruleId ACL rule identifier.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($calendarId, $ruleId, $optParams = [])
    {
        $params = ['calendarId' => $calendarId, 'ruleId' => $ruleId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Returns an access control rule. (acl.get)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $ruleId ACL rule identifier.
     * @param array $optParams Optional parameters.
     * @return Google_AclRule
     * @throws Google_Exception
     */
    public function get($calendarId, $ruleId, $optParams = [])
    {
        $params = ['calendarId' => $calendarId, 'ruleId' => $ruleId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_AclRule($data);
        } else {
            return $data;
        }
    }

    /**
     * Creates an access control rule. (acl.insert)
     *
     * @param string $calendarId Calendar identifier.
     * @param Google_AclRule $postBody
     * @param array $optParams Optional parameters.
     * @return Google_AclRule
     * @throws Google_Exception
     */
    public function insert($calendarId, Google_AclRule $postBody, $optParams = [])
    {
        $params = ['calendarId' => $calendarId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_AclRule($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns the rules in the access control list for the calendar. (acl.list)
     *
     * @param string $calendarId Calendar identifier.
     * @param array $optParams Optional parameters.
     * @return Google_Acl
     * @throws Google_Exception
     */
    public function listAcl($calendarId, $optParams = [])
    {
        $params = ['calendarId' => $calendarId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Acl($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates an access control rule. This method supports patch semantics. (acl.patch)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $ruleId ACL rule identifier.
     * @param Google_AclRule $postBody
     * @param array $optParams Optional parameters.
     * @return Google_AclRule
     * @throws Google_Exception
     */
    public function patch($calendarId, $ruleId, Google_AclRule $postBody, $optParams = [])
    {
        $params = ['calendarId' => $calendarId, 'ruleId' => $ruleId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_AclRule($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates an access control rule. (acl.update)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $ruleId ACL rule identifier.
     * @param Google_AclRule $postBody
     * @param array $optParams Optional parameters.
     * @return Google_AclRule
     * @throws Google_Exception
     */
    public function update($calendarId, $ruleId, Google_AclRule $postBody, $optParams = [])
    {
        $params = ['calendarId' => $calendarId, 'ruleId' => $ruleId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_AclRule($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "calendarList" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google_CalendarService(...);
 *   $calendarList = $calendarService->calendarList;
 *  </code>
 */
class Google_CalendarListServiceResource extends Google_ServiceResource
{

    /**
     * Deletes an entry on the user's calendar list. (calendarList.delete)
     *
     * @param string $calendarId Calendar identifier.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($calendarId, $optParams = [])
    {
        $params = ['calendarId' => $calendarId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Returns an entry on the user's calendar list. (calendarList.get)
     *
     * @param string $calendarId Calendar identifier.
     * @param array $optParams Optional parameters.
     * @return Google_CalendarListEntry
     * @throws Google_Exception
     */
    public function get($calendarId, $optParams = [])
    {
        $params = ['calendarId' => $calendarId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_CalendarListEntry($data);
        } else {
            return $data;
        }
    }

    /**
     * Adds an entry to the user's calendar list. (calendarList.insert)
     *
     * @param Google_CalendarListEntry $postBody
     * @param array $optParams Optional parameters.
     * @return Google_CalendarListEntry
     * @throws Google_Exception
     * @opt_param bool colorRgbFormat Whether to use the 'foregroundColor' and 'backgroundColor' fields to write the calendar colors (RGB). If this feature is used, the index-based 'colorId' field will be set to the best matching option automatically. Optional. The default is False.
     */
    public function insert(Google_CalendarListEntry $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_CalendarListEntry($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns entries on the user's calendar list. (calendarList.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_CalendarList
     * @throws Google_Exception
     * @opt_param int maxResults Maximum number of entries returned on one result page. Optional.
     * @opt_param string minAccessRole The minimum access role for the user in the returned entires. Optional. The default is no restriction.
     * @opt_param string pageToken Token specifying which result page to return. Optional.
     * @opt_param bool showHidden Whether to show hidden entries. Optional. The default is False.
     */
    public function listCalendarList($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_CalendarList($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates an entry on the user's calendar list. This method supports patch semantics.
     * (calendarList.patch)
     *
     * @param string $calendarId Calendar identifier.
     * @param Google_CalendarListEntry $postBody
     * @param array $optParams Optional parameters.
     * @return Google_CalendarListEntry
     * @throws Google_Exception
     * @opt_param bool colorRgbFormat Whether to use the 'foregroundColor' and 'backgroundColor' fields to write the calendar colors (RGB). If this feature is used, the index-based 'colorId' field will be set to the best matching option automatically. Optional. The default is False.
     */
    public function patch($calendarId, Google_CalendarListEntry $postBody, $optParams = [])
    {
        $params = ['calendarId' => $calendarId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_CalendarListEntry($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates an entry on the user's calendar list. (calendarList.update)
     *
     * @param string $calendarId Calendar identifier.
     * @param Google_CalendarListEntry $postBody
     * @param array $optParams Optional parameters.
     * @return Google_CalendarListEntry
     * @throws Google_Exception
     * @opt_param bool colorRgbFormat Whether to use the 'foregroundColor' and 'backgroundColor' fields to write the calendar colors (RGB). If this feature is used, the index-based 'colorId' field will be set to the best matching option automatically. Optional. The default is False.
     */
    public function update($calendarId, Google_CalendarListEntry $postBody, $optParams = [])
    {
        $params = ['calendarId' => $calendarId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_CalendarListEntry($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "calendars" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google_CalendarService(...);
 *   $calendars = $calendarService->calendars;
 *  </code>
 */
class Google_CalendarsServiceResource extends Google_ServiceResource
{

    /**
     * Clears a primary calendar. This operation deletes all data associated with the primary calendar
     * of an account and cannot be undone. (calendars.clear)
     *
     * @param string $calendarId Calendar identifier.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function clear($calendarId, $optParams = [])
    {
        $params = ['calendarId' => $calendarId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('clear', [$params]);
        return $data;
    }

    /**
     * Deletes a secondary calendar. (calendars.delete)
     *
     * @param string $calendarId Calendar identifier.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($calendarId, $optParams = [])
    {
        $params = ['calendarId' => $calendarId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Returns metadata for a calendar. (calendars.get)
     *
     * @param string $calendarId Calendar identifier.
     * @param array $optParams Optional parameters.
     * @return Google_Calendar
     * @throws Google_Exception
     */
    public function get($calendarId, $optParams = [])
    {
        $params = ['calendarId' => $calendarId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Calendar($data);
        } else {
            return $data;
        }
    }

    /**
     * Creates a secondary calendar. (calendars.insert)
     *
     * @param Google_Calendar $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Calendar
     * @throws Google_Exception
     */
    public function insert(Google_Calendar $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Calendar($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates metadata for a calendar. This method supports patch semantics. (calendars.patch)
     *
     * @param string $calendarId Calendar identifier.
     * @param Google_Calendar $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Calendar
     * @throws Google_Exception
     */
    public function patch($calendarId, Google_Calendar $postBody, $optParams = [])
    {
        $params = ['calendarId' => $calendarId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Calendar($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates metadata for a calendar. (calendars.update)
     *
     * @param string $calendarId Calendar identifier.
     * @param Google_Calendar $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Calendar
     * @throws Google_Exception
     */
    public function update($calendarId, Google_Calendar $postBody, $optParams = [])
    {
        $params = ['calendarId' => $calendarId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Calendar($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "colors" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google_CalendarService(...);
 *   $colors = $calendarService->colors;
 *  </code>
 */
class Google_ColorsServiceResource extends Google_ServiceResource
{

    /**
     * Returns the color definitions for calendars and events. (colors.get)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Colors
     * @throws Google_Exception
     */
    public function get($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Colors($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "events" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google_CalendarService(...);
 *   $events = $calendarService->events;
 *  </code>
 */
class Google_EventsServiceResource extends Google_ServiceResource
{

    /**
     * Deletes an event. (events.delete)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $eventId Event identifier.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     * @opt_param bool sendNotifications Whether to send notifications about the deletion of the event. Optional. The default is False.
     */
    public function delete($calendarId, $eventId, $optParams = [])
    {
        $params = ['calendarId' => $calendarId, 'eventId' => $eventId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Returns an event. (events.get)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $eventId Event identifier.
     * @param array $optParams Optional parameters.
     * @return Google_Event
     * @throws Google_Exception
     * @opt_param bool alwaysIncludeEmail Whether to always include a value in the "email" field for the organizer, creator and attendees, even if no real email is available (i.e. a generated, non-working value will be provided). The use of this option is discouraged and should only be used by clients which cannot handle the absence of an email address value in the mentioned places. Optional. The default is False.
     * @opt_param int maxAttendees The maximum number of attendees to include in the response. If there are more than the specified number of attendees, only the participant is returned. Optional.
     * @opt_param string timeZone Time zone used in the response. Optional. The default is the time zone of the calendar.
     */
    public function get($calendarId, $eventId, $optParams = [])
    {
        $params = ['calendarId' => $calendarId, 'eventId' => $eventId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Event($data);
        } else {
            return $data;
        }
    }

    /**
     * Imports an event. (events.import)
     *
     * @param string $calendarId Calendar identifier.
     * @param Google_Event $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Event
     * @throws Google_Exception
     */
    public function import($calendarId, Google_Event $postBody, $optParams = [])
    {
        $params = ['calendarId' => $calendarId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('import', [$params]);
        if ($this->useObjects()) {
            return new Google_Event($data);
        } else {
            return $data;
        }
    }

    /**
     * Creates an event. (events.insert)
     *
     * @param string $calendarId Calendar identifier.
     * @param Google_Event $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Event
     * @throws Google_Exception
     * @opt_param int maxAttendees The maximum number of attendees to include in the response. If there are more than the specified number of attendees, only the participant is returned. Optional.
     * @opt_param bool sendNotifications Whether to send notifications about the creation of the new event. Optional. The default is False.
     */
    public function insert($calendarId, Google_Event $postBody, $optParams = [])
    {
        $params = ['calendarId' => $calendarId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Event($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns instances of the specified recurring event. (events.instances)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $eventId Recurring event identifier.
     * @param array $optParams Optional parameters.
     * @return Google_Events
     * @throws Google_Exception
     * @opt_param bool alwaysIncludeEmail Whether to always include a value in the "email" field for the organizer, creator and attendees, even if no real email is available (i.e. a generated, non-working value will be provided). The use of this option is discouraged and should only be used by clients which cannot handle the absence of an email address value in the mentioned places. Optional. The default is False.
     * @opt_param int maxAttendees The maximum number of attendees to include in the response. If there are more than the specified number of attendees, only the participant is returned. Optional.
     * @opt_param int maxResults Maximum number of events returned on one result page. Optional.
     * @opt_param string originalStart The original start time of the instance in the result. Optional.
     * @opt_param string pageToken Token specifying which result page to return. Optional.
     * @opt_param bool showDeleted Whether to include deleted events (with 'status' equals 'cancelled') in the result. Cancelled instances of recurring events will still be included if 'singleEvents' is False. Optional. The default is False.
     * @opt_param string timeMax Upper bound (exclusive) for an event's start time to filter by. Optional. The default is not to filter by start time.
     * @opt_param string timeMin Lower bound (inclusive) for an event's end time to filter by. Optional. The default is not to filter by end time.
     * @opt_param string timeZone Time zone used in the response. Optional. The default is the time zone of the calendar.
     */
    public function instances($calendarId, $eventId, $optParams = [])
    {
        $params = ['calendarId' => $calendarId, 'eventId' => $eventId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('instances', [$params]);
        if ($this->useObjects()) {
            return new Google_Events($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns events on the specified calendar. (events.list)
     *
     * @param string $calendarId Calendar identifier.
     * @param array $optParams Optional parameters.
     * @return Google_Events
     * @throws Google_Exception
     * @opt_param bool alwaysIncludeEmail Whether to always include a value in the "email" field for the organizer, creator and attendees, even if no real email is available (i.e. a generated, non-working value will be provided). The use of this option is discouraged and should only be used by clients which cannot handle the absence of an email address value in the mentioned places. Optional. The default is False.
     * @opt_param string iCalUID Specifies iCalendar UID (iCalUID) of events to be included in the response. Optional.
     * @opt_param int maxAttendees The maximum number of attendees to include in the response. If there are more than the specified number of attendees, only the participant is returned. Optional.
     * @opt_param int maxResults Maximum number of events returned on one result page. Optional.
     * @opt_param string orderBy The order of the events returned in the result. Optional. The default is an unspecified, stable order.
     * @opt_param string pageToken Token specifying which result page to return. Optional.
     * @opt_param string q Free text search terms to find events that match these terms in any field, except for extended properties. Optional.
     * @opt_param bool showDeleted Whether to include deleted events (with 'status' equals 'cancelled') in the result. Cancelled instances of recurring events (but not the underlying recurring event) will still be included if 'showDeleted' and 'singleEvents' are both False. If 'showDeleted' and 'singleEvents' are both True, only single instances of deleted events (but not the underlying recurring events) are returned. Optional. The default is False.
     * @opt_param bool showHiddenInvitations Whether to include hidden invitations in the result. Optional. The default is False.
     * @opt_param bool singleEvents Whether to expand recurring events into instances and only return single one-off events and instances of recurring events, but not the underlying recurring events themselves. Optional. The default is False.
     * @opt_param string timeMax Upper bound (exclusive) for an event's start time to filter by. Optional. The default is not to filter by start time.
     * @opt_param string timeMin Lower bound (inclusive) for an event's end time to filter by. Optional. The default is not to filter by end time.
     * @opt_param string timeZone Time zone used in the response. Optional. The default is the time zone of the calendar.
     * @opt_param string updatedMin Lower bound for an event's last modification time (as a RFC 3339 timestamp) to filter by. Optional. The default is not to filter by last modification time.
     */
    public function listEvents($calendarId, $optParams = [])
    {
        $params = ['calendarId' => $calendarId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Events($data);
        } else {
            return $data;
        }
    }

    /**
     * Moves an event to another calendar, i.e. changes an event's organizer. (events.move)
     *
     * @param string $calendarId Calendar identifier of the source calendar where the event currently is on.
     * @param string $eventId Event identifier.
     * @param string $destination Calendar identifier of the target calendar where the event is to be moved to.
     * @param array $optParams Optional parameters.
     * @return Google_Event
     * @throws Google_Exception
     * @opt_param bool sendNotifications Whether to send notifications about the change of the event's organizer. Optional. The default is False.
     */
    public function move($calendarId, $eventId, $destination, $optParams = [])
    {
        $params = ['calendarId' => $calendarId, 'eventId' => $eventId, 'destination' => $destination];
        $params = array_merge($params, $optParams);
        $data = $this->__call('move', [$params]);
        if ($this->useObjects()) {
            return new Google_Event($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates an event. This method supports patch semantics. (events.patch)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $eventId Event identifier.
     * @param Google_Event $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Event
     * @throws Google_Exception
     * @opt_param bool alwaysIncludeEmail Whether to always include a value in the "email" field for the organizer, creator and attendees, even if no real email is available (i.e. a generated, non-working value will be provided). The use of this option is discouraged and should only be used by clients which cannot handle the absence of an email address value in the mentioned places. Optional. The default is False.
     * @opt_param int maxAttendees The maximum number of attendees to include in the response. If there are more than the specified number of attendees, only the participant is returned. Optional.
     * @opt_param bool sendNotifications Whether to send notifications about the event update (e.g. attendee's responses, title changes, etc.). Optional. The default is False.
     */
    public function patch($calendarId, $eventId, Google_Event $postBody, $optParams = [])
    {
        $params = ['calendarId' => $calendarId, 'eventId' => $eventId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Event($data);
        } else {
            return $data;
        }
    }

    /**
     * Creates an event based on a simple text string. (events.quickAdd)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $text The text describing the event to be created.
     * @param array $optParams Optional parameters.
     * @return Google_Event
     * @throws Google_Exception
     * @opt_param bool sendNotifications Whether to send notifications about the creation of the event. Optional. The default is False.
     */
    public function quickAdd($calendarId, $text, $optParams = [])
    {
        $params = ['calendarId' => $calendarId, 'text' => $text];
        $params = array_merge($params, $optParams);
        $data = $this->__call('quickAdd', [$params]);
        if ($this->useObjects()) {
            return new Google_Event($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates an event. (events.update)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $eventId Event identifier.
     * @param Google_Event $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Event
     * @throws Google_Exception
     * @opt_param bool alwaysIncludeEmail Whether to always include a value in the "email" field for the organizer, creator and attendees, even if no real email is available (i.e. a generated, non-working value will be provided). The use of this option is discouraged and should only be used by clients which cannot handle the absence of an email address value in the mentioned places. Optional. The default is False.
     * @opt_param int maxAttendees The maximum number of attendees to include in the response. If there are more than the specified number of attendees, only the participant is returned. Optional.
     * @opt_param bool sendNotifications Whether to send notifications about the event update (e.g. attendee's responses, title changes, etc.). Optional. The default is False.
     */
    public function update($calendarId, $eventId, Google_Event $postBody, $optParams = [])
    {
        $params = ['calendarId' => $calendarId, 'eventId' => $eventId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Event($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "freebusy" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google_CalendarService(...);
 *   $freebusy = $calendarService->freebusy;
 *  </code>
 */
class Google_FreebusyServiceResource extends Google_ServiceResource
{

    /**
     * Returns free/busy information for a set of calendars. (freebusy.query)
     *
     * @param Google_FreeBusyRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_FreeBusyResponse
     * @throws Google_Exception
     */
    public function query(Google_FreeBusyRequest $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('query', [$params]);
        if ($this->useObjects()) {
            return new Google_FreeBusyResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "settings" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google_CalendarService(...);
 *   $settings = $calendarService->settings;
 *  </code>
 */
class Google_SettingsServiceResource extends Google_ServiceResource
{

    /**
     * Returns a single user setting. (settings.get)
     *
     * @param string $setting Name of the user setting.
     * @param array $optParams Optional parameters.
     * @return Google_Setting
     * @throws Google_Exception
     */
    public function get($setting, $optParams = [])
    {
        $params = ['setting' => $setting];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Setting($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns all user settings for the authenticated user. (settings.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Settings
     * @throws Google_Exception
     */
    public function listSettings($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Settings($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Calendar (v3).
 *
 * <p>
 * Lets you manipulate events and other calendar data.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/google-apps/calendar/firstapp" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_CalendarService extends Google_Service
{
    /**
     * @var Google_AclServiceResource
     */
    public $acl;
    /**
     * @var Google_CalendarListServiceResource
     */
    public $calendarList;
    /**
     * @var Google_CalendarsServiceResource
     */
    public $calendars;
    /**
     * @var Google_ColorsServiceResource
     */
    public $colors;
    /**
     * @var Google_EventsServiceResource
     */
    public $events;
    /**
     * @var Google_FreebusyServiceResource
     */
    public $freebusy;
    /**
     * @var Google_SettingsServiceResource
     */
    public $settings;

    /**
     * Constructs the internal representation of the Calendar service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'calendar/v3/';
        $this->version = 'v3';
        $this->serviceName = 'calendar';

        $client->addService($this->serviceName, $this->version);
        $this->acl = new Google_AclServiceResource($this, $this->serviceName, 'acl', json_decode('{"methods": {"delete": {"id": "calendar.acl.delete", "path": "calendars/{calendarId}/acl/{ruleId}", "httpMethod": "DELETE", "parameters": {"calendarId": {"type": "string", "required": true, "location": "path"}, "ruleId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/calendar"]}, "get": {"id": "calendar.acl.get", "path": "calendars/{calendarId}/acl/{ruleId}", "httpMethod": "GET", "parameters": {"calendarId": {"type": "string", "required": true, "location": "path"}, "ruleId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "AclRule"}, "scopes": ["https://www.googleapis.com/auth/calendar", "https://www.googleapis.com/auth/calendar.readonly"]}, "insert": {"id": "calendar.acl.insert", "path": "calendars/{calendarId}/acl", "httpMethod": "POST", "parameters": {"calendarId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "AclRule"}, "response": {"$ref": "AclRule"}, "scopes": ["https://www.googleapis.com/auth/calendar"]}, "list": {"id": "calendar.acl.list", "path": "calendars/{calendarId}/acl", "httpMethod": "GET", "parameters": {"calendarId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Acl"}, "scopes": ["https://www.googleapis.com/auth/calendar"]}, "patch": {"id": "calendar.acl.patch", "path": "calendars/{calendarId}/acl/{ruleId}", "httpMethod": "PATCH", "parameters": {"calendarId": {"type": "string", "required": true, "location": "path"}, "ruleId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "AclRule"}, "response": {"$ref": "AclRule"}, "scopes": ["https://www.googleapis.com/auth/calendar"]}, "update": {"id": "calendar.acl.update", "path": "calendars/{calendarId}/acl/{ruleId}", "httpMethod": "PUT", "parameters": {"calendarId": {"type": "string", "required": true, "location": "path"}, "ruleId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "AclRule"}, "response": {"$ref": "AclRule"}, "scopes": ["https://www.googleapis.com/auth/calendar"]}}}', true));
        $this->calendarList = new Google_CalendarListServiceResource($this, $this->serviceName, 'calendarList', json_decode('{"methods": {"delete": {"id": "calendar.calendarList.delete", "path": "users/me/calendarList/{calendarId}", "httpMethod": "DELETE", "parameters": {"calendarId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/calendar"]}, "get": {"id": "calendar.calendarList.get", "path": "users/me/calendarList/{calendarId}", "httpMethod": "GET", "parameters": {"calendarId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CalendarListEntry"}, "scopes": ["https://www.googleapis.com/auth/calendar", "https://www.googleapis.com/auth/calendar.readonly"]}, "insert": {"id": "calendar.calendarList.insert", "path": "users/me/calendarList", "httpMethod": "POST", "parameters": {"colorRgbFormat": {"type": "boolean", "location": "query"}}, "request": {"$ref": "CalendarListEntry"}, "response": {"$ref": "CalendarListEntry"}, "scopes": ["https://www.googleapis.com/auth/calendar"]}, "list": {"id": "calendar.calendarList.list", "path": "users/me/calendarList", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "minAccessRole": {"type": "string", "enum": ["freeBusyReader", "owner", "reader", "writer"], "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "showHidden": {"type": "boolean", "location": "query"}}, "response": {"$ref": "CalendarList"}, "scopes": ["https://www.googleapis.com/auth/calendar", "https://www.googleapis.com/auth/calendar.readonly"]}, "patch": {"id": "calendar.calendarList.patch", "path": "users/me/calendarList/{calendarId}", "httpMethod": "PATCH", "parameters": {"calendarId": {"type": "string", "required": true, "location": "path"}, "colorRgbFormat": {"type": "boolean", "location": "query"}}, "request": {"$ref": "CalendarListEntry"}, "response": {"$ref": "CalendarListEntry"}, "scopes": ["https://www.googleapis.com/auth/calendar"]}, "update": {"id": "calendar.calendarList.update", "path": "users/me/calendarList/{calendarId}", "httpMethod": "PUT", "parameters": {"calendarId": {"type": "string", "required": true, "location": "path"}, "colorRgbFormat": {"type": "boolean", "location": "query"}}, "request": {"$ref": "CalendarListEntry"}, "response": {"$ref": "CalendarListEntry"}, "scopes": ["https://www.googleapis.com/auth/calendar"]}}}', true));
        $this->calendars = new Google_CalendarsServiceResource($this, $this->serviceName, 'calendars', json_decode('{"methods": {"clear": {"id": "calendar.calendars.clear", "path": "calendars/{calendarId}/clear", "httpMethod": "POST", "parameters": {"calendarId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/calendar"]}, "delete": {"id": "calendar.calendars.delete", "path": "calendars/{calendarId}", "httpMethod": "DELETE", "parameters": {"calendarId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/calendar"]}, "get": {"id": "calendar.calendars.get", "path": "calendars/{calendarId}", "httpMethod": "GET", "parameters": {"calendarId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Calendar"}, "scopes": ["https://www.googleapis.com/auth/calendar", "https://www.googleapis.com/auth/calendar.readonly"]}, "insert": {"id": "calendar.calendars.insert", "path": "calendars", "httpMethod": "POST", "request": {"$ref": "Calendar"}, "response": {"$ref": "Calendar"}, "scopes": ["https://www.googleapis.com/auth/calendar"]}, "patch": {"id": "calendar.calendars.patch", "path": "calendars/{calendarId}", "httpMethod": "PATCH", "parameters": {"calendarId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Calendar"}, "response": {"$ref": "Calendar"}, "scopes": ["https://www.googleapis.com/auth/calendar"]}, "update": {"id": "calendar.calendars.update", "path": "calendars/{calendarId}", "httpMethod": "PUT", "parameters": {"calendarId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Calendar"}, "response": {"$ref": "Calendar"}, "scopes": ["https://www.googleapis.com/auth/calendar"]}}}', true));
        $this->colors = new Google_ColorsServiceResource($this, $this->serviceName, 'colors', json_decode('{"methods": {"get": {"id": "calendar.colors.get", "path": "colors", "httpMethod": "GET", "response": {"$ref": "Colors"}, "scopes": ["https://www.googleapis.com/auth/calendar", "https://www.googleapis.com/auth/calendar.readonly"]}}}', true));
        $this->events = new Google_EventsServiceResource($this, $this->serviceName, 'events', json_decode('{"methods": {"delete": {"id": "calendar.events.delete", "path": "calendars/{calendarId}/events/{eventId}", "httpMethod": "DELETE", "parameters": {"calendarId": {"type": "string", "required": true, "location": "path"}, "eventId": {"type": "string", "required": true, "location": "path"}, "sendNotifications": {"type": "boolean", "location": "query"}}, "scopes": ["https://www.googleapis.com/auth/calendar"]}, "get": {"id": "calendar.events.get", "path": "calendars/{calendarId}/events/{eventId}", "httpMethod": "GET", "parameters": {"alwaysIncludeEmail": {"type": "boolean", "location": "query"}, "calendarId": {"type": "string", "required": true, "location": "path"}, "eventId": {"type": "string", "required": true, "location": "path"}, "maxAttendees": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "timeZone": {"type": "string", "location": "query"}}, "response": {"$ref": "Event"}, "scopes": ["https://www.googleapis.com/auth/calendar", "https://www.googleapis.com/auth/calendar.readonly"]}, "import": {"id": "calendar.events.import", "path": "calendars/{calendarId}/events/import", "httpMethod": "POST", "parameters": {"calendarId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Event"}, "response": {"$ref": "Event"}, "scopes": ["https://www.googleapis.com/auth/calendar"]}, "insert": {"id": "calendar.events.insert", "path": "calendars/{calendarId}/events", "httpMethod": "POST", "parameters": {"calendarId": {"type": "string", "required": true, "location": "path"}, "maxAttendees": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "sendNotifications": {"type": "boolean", "location": "query"}}, "request": {"$ref": "Event"}, "response": {"$ref": "Event"}, "scopes": ["https://www.googleapis.com/auth/calendar"]}, "instances": {"id": "calendar.events.instances", "path": "calendars/{calendarId}/events/{eventId}/instances", "httpMethod": "GET", "parameters": {"alwaysIncludeEmail": {"type": "boolean", "location": "query"}, "calendarId": {"type": "string", "required": true, "location": "path"}, "eventId": {"type": "string", "required": true, "location": "path"}, "maxAttendees": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "originalStart": {"type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "showDeleted": {"type": "boolean", "location": "query"}, "timeMax": {"type": "string", "format": "date-time", "location": "query"}, "timeMin": {"type": "string", "format": "date-time", "location": "query"}, "timeZone": {"type": "string", "location": "query"}}, "response": {"$ref": "Events"}, "scopes": ["https://www.googleapis.com/auth/calendar", "https://www.googleapis.com/auth/calendar.readonly"], "supportsSubscription": true}, "list": {"id": "calendar.events.list", "path": "calendars/{calendarId}/events", "httpMethod": "GET", "parameters": {"alwaysIncludeEmail": {"type": "boolean", "location": "query"}, "calendarId": {"type": "string", "required": true, "location": "path"}, "iCalUID": {"type": "string", "location": "query"}, "maxAttendees": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "orderBy": {"type": "string", "enum": ["startTime", "updated"], "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "q": {"type": "string", "location": "query"}, "showDeleted": {"type": "boolean", "location": "query"}, "showHiddenInvitations": {"type": "boolean", "location": "query"}, "singleEvents": {"type": "boolean", "location": "query"}, "timeMax": {"type": "string", "format": "date-time", "location": "query"}, "timeMin": {"type": "string", "format": "date-time", "location": "query"}, "timeZone": {"type": "string", "location": "query"}, "updatedMin": {"type": "string", "format": "date-time", "location": "query"}}, "response": {"$ref": "Events"}, "scopes": ["https://www.googleapis.com/auth/calendar", "https://www.googleapis.com/auth/calendar.readonly"], "supportsSubscription": true}, "move": {"id": "calendar.events.move", "path": "calendars/{calendarId}/events/{eventId}/move", "httpMethod": "POST", "parameters": {"calendarId": {"type": "string", "required": true, "location": "path"}, "destination": {"type": "string", "required": true, "location": "query"}, "eventId": {"type": "string", "required": true, "location": "path"}, "sendNotifications": {"type": "boolean", "location": "query"}}, "response": {"$ref": "Event"}, "scopes": ["https://www.googleapis.com/auth/calendar"]}, "patch": {"id": "calendar.events.patch", "path": "calendars/{calendarId}/events/{eventId}", "httpMethod": "PATCH", "parameters": {"alwaysIncludeEmail": {"type": "boolean", "location": "query"}, "calendarId": {"type": "string", "required": true, "location": "path"}, "eventId": {"type": "string", "required": true, "location": "path"}, "maxAttendees": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "sendNotifications": {"type": "boolean", "location": "query"}}, "request": {"$ref": "Event"}, "response": {"$ref": "Event"}, "scopes": ["https://www.googleapis.com/auth/calendar"]}, "quickAdd": {"id": "calendar.events.quickAdd", "path": "calendars/{calendarId}/events/quickAdd", "httpMethod": "POST", "parameters": {"calendarId": {"type": "string", "required": true, "location": "path"}, "sendNotifications": {"type": "boolean", "location": "query"}, "text": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "Event"}, "scopes": ["https://www.googleapis.com/auth/calendar"]}, "update": {"id": "calendar.events.update", "path": "calendars/{calendarId}/events/{eventId}", "httpMethod": "PUT", "parameters": {"alwaysIncludeEmail": {"type": "boolean", "location": "query"}, "calendarId": {"type": "string", "required": true, "location": "path"}, "eventId": {"type": "string", "required": true, "location": "path"}, "maxAttendees": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "sendNotifications": {"type": "boolean", "location": "query"}}, "request": {"$ref": "Event"}, "response": {"$ref": "Event"}, "scopes": ["https://www.googleapis.com/auth/calendar"]}}}', true));
        $this->freebusy = new Google_FreebusyServiceResource($this, $this->serviceName, 'freebusy', json_decode('{"methods": {"query": {"id": "calendar.freebusy.query", "path": "freeBusy", "httpMethod": "POST", "request": {"$ref": "FreeBusyRequest"}, "response": {"$ref": "FreeBusyResponse"}, "scopes": ["https://www.googleapis.com/auth/calendar", "https://www.googleapis.com/auth/calendar.readonly"]}}}', true));
        $this->settings = new Google_SettingsServiceResource($this, $this->serviceName, 'settings', json_decode('{"methods": {"get": {"id": "calendar.settings.get", "path": "users/me/settings/{setting}", "httpMethod": "GET", "parameters": {"setting": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Setting"}, "scopes": ["https://www.googleapis.com/auth/calendar", "https://www.googleapis.com/auth/calendar.readonly"]}, "list": {"id": "calendar.settings.list", "path": "users/me/settings", "httpMethod": "GET", "response": {"$ref": "Settings"}, "scopes": ["https://www.googleapis.com/auth/calendar", "https://www.googleapis.com/auth/calendar.readonly"]}}}', true));

    }
}


/**
 * Class Google_Acl
 */
class Google_Acl extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_AclRule';
    /**
     * @var string
     */
    protected $__itemsDataType = 'array';
    /**
     * @var
     */
    public $items;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $nextPageToken;

    /**
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_AclRule) */
        $items)
    {
        $this->assertIsArray($items, 'Google_AclRule', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param $nextPageToken
     */
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
}

/**
 * Class Google_AclRule
 */
class Google_AclRule extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $role;
    /**
     * @var string
     */
    protected $__scopeType = 'Google_AclRuleScope';
    /**
     * @var string
     */
    protected $__scopeDataType = '';
    /**
     * @var
     */
    public $scope;

    /**
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param Google_AclRuleScope $scope
     */
    public function setScope(Google_AclRuleScope $scope)
    {
        $this->scope = $scope;
    }

    /**
     * @return mixed
     */
    public function getScope()
    {
        return $this->scope;
    }
}

/**
 * Class Google_AclRuleScope
 */
class Google_AclRuleScope extends Google_Model
{
    /**
     * @var
     */
    public $type;
    /**
     * @var
     */
    public $value;

    /**
     * @param $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    /**
     * @param $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}

/**
 * Class Google_Calendar
 */
class Google_Calendar extends Google_Model
{
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $location;
    /**
     * @var
     */
    public $summary;
    /**
     * @var
     */
    public $timeZone;

    /**
     * @param $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param $summary
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    /**
     * @return mixed
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param $timeZone
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }

    /**
     * @return mixed
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }
}

/**
 * Class Google_CalendarList
 */
class Google_CalendarList extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_CalendarListEntry';
    /**
     * @var string
     */
    protected $__itemsDataType = 'array';
    /**
     * @var
     */
    public $items;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $nextPageToken;

    /**
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_CalendarListEntry) */
        $items)
    {
        $this->assertIsArray($items, 'Google_CalendarListEntry', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param $nextPageToken
     */
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
}

/**
 * Class Google_CalendarListEntry
 */
class Google_CalendarListEntry extends Google_Model
{
    /**
     * @var
     */
    public $accessRole;
    /**
     * @var
     */
    public $backgroundColor;
    /**
     * @var
     */
    public $colorId;
    /**
     * @var string
     */
    protected $__defaultRemindersType = 'Google_EventReminder';
    /**
     * @var string
     */
    protected $__defaultRemindersDataType = 'array';
    /**
     * @var
     */
    public $defaultReminders;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $foregroundColor;
    /**
     * @var
     */
    public $hidden;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $location;
    /**
     * @var
     */
    public $primary;
    /**
     * @var
     */
    public $selected;
    /**
     * @var
     */
    public $summary;
    /**
     * @var
     */
    public $summaryOverride;
    /**
     * @var
     */
    public $timeZone;

    /**
     * @param $accessRole
     */
    public function setAccessRole($accessRole)
    {
        $this->accessRole = $accessRole;
    }

    /**
     * @return mixed
     */
    public function getAccessRole()
    {
        return $this->accessRole;
    }

    /**
     * @param $backgroundColor
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;
    }

    /**
     * @return mixed
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * @param $colorId
     */
    public function setColorId($colorId)
    {
        $this->colorId = $colorId;
    }

    /**
     * @return mixed
     */
    public function getColorId()
    {
        return $this->colorId;
    }

    /**
     * @param $defaultReminders
     * @throws Google_Exception
     */
    public function setDefaultReminders(/* array(Google_EventReminder) */
        $defaultReminders)
    {
        $this->assertIsArray($defaultReminders, 'Google_EventReminder', __METHOD__);
        $this->defaultReminders = $defaultReminders;
    }

    /**
     * @return mixed
     */
    public function getDefaultReminders()
    {
        return $this->defaultReminders;
    }

    /**
     * @param $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param $foregroundColor
     */
    public function setForegroundColor($foregroundColor)
    {
        $this->foregroundColor = $foregroundColor;
    }

    /**
     * @return mixed
     */
    public function getForegroundColor()
    {
        return $this->foregroundColor;
    }

    /**
     * @param $hidden
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;
    }

    /**
     * @return mixed
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param $primary
     */
    public function setPrimary($primary)
    {
        $this->primary = $primary;
    }

    /**
     * @return mixed
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * @param $selected
     */
    public function setSelected($selected)
    {
        $this->selected = $selected;
    }

    /**
     * @return mixed
     */
    public function getSelected()
    {
        return $this->selected;
    }

    /**
     * @param $summary
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    /**
     * @return mixed
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param $summaryOverride
     */
    public function setSummaryOverride($summaryOverride)
    {
        $this->summaryOverride = $summaryOverride;
    }

    /**
     * @return mixed
     */
    public function getSummaryOverride()
    {
        return $this->summaryOverride;
    }

    /**
     * @param $timeZone
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }

    /**
     * @return mixed
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }
}

/**
 * Class Google_ColorDefinition
 */
class Google_ColorDefinition extends Google_Model
{
    /**
     * @var
     */
    public $background;
    /**
     * @var
     */
    public $foreground;

    /**
     * @param $background
     */
    public function setBackground($background)
    {
        $this->background = $background;
    }

    /**
     * @return mixed
     */
    public function getBackground()
    {
        return $this->background;
    }

    /**
     * @param $foreground
     */
    public function setForeground($foreground)
    {
        $this->foreground = $foreground;
    }

    /**
     * @return mixed
     */
    public function getForeground()
    {
        return $this->foreground;
    }
}

/**
 * Class Google_Colors
 */
class Google_Colors extends Google_Model
{
    /**
     * @var string
     */
    protected $__calendarType = 'Google_ColorDefinition';
    /**
     * @var string
     */
    protected $__calendarDataType = 'map';
    /**
     * @var
     */
    public $calendar;
    /**
     * @var string
     */
    protected $__eventType = 'Google_ColorDefinition';
    /**
     * @var string
     */
    protected $__eventDataType = 'map';
    /**
     * @var
     */
    public $event;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $updated;

    /**
     * @param Google_ColorDefinition $calendar
     */
    public function setCalendar(Google_ColorDefinition $calendar)
    {
        $this->calendar = $calendar;
    }

    /**
     * @return mixed
     */
    public function getCalendar()
    {
        return $this->calendar;
    }

    /**
     * @param Google_ColorDefinition $event
     */
    public function setEvent(Google_ColorDefinition $event)
    {
        $this->event = $event;
    }

    /**
     * @return mixed
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getUpdated()
    {
        return $this->updated;
    }
}

/**
 * Class Google_Error
 */
class Google_Error extends Google_Model
{
    /**
     * @var
     */
    public $domain;
    /**
     * @var
     */
    public $reason;

    /**
     * @param $domain
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    /**
     * @return mixed
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    /**
     * @return mixed
     */
    public function getReason()
    {
        return $this->reason;
    }
}

/**
 * Class Google_Event
 */
class Google_Event extends Google_Model
{
    /**
     * @var
     */
    public $anyoneCanAddSelf;
    /**
     * @var string
     */
    protected $__attendeesType = 'Google_EventAttendee';
    /**
     * @var string
     */
    protected $__attendeesDataType = 'array';
    /**
     * @var
     */
    public $attendees;
    /**
     * @var
     */
    public $attendeesOmitted;
    /**
     * @var
     */
    public $colorId;
    /**
     * @var
     */
    public $created;
    /**
     * @var string
     */
    protected $__creatorType = 'Google_EventCreator';
    /**
     * @var string
     */
    protected $__creatorDataType = '';
    /**
     * @var
     */
    public $creator;
    /**
     * @var
     */
    public $description;
    /**
     * @var string
     */
    protected $__endType = 'Google_EventDateTime';
    /**
     * @var string
     */
    protected $__endDataType = '';
    /**
     * @var
     */
    public $end;
    /**
     * @var
     */
    public $endTimeUnspecified;
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__extendedPropertiesType = 'Google_EventExtendedProperties';
    /**
     * @var string
     */
    protected $__extendedPropertiesDataType = '';
    /**
     * @var
     */
    public $extendedProperties;
    /**
     * @var string
     */
    protected $__gadgetType = 'Google_EventGadget';
    /**
     * @var string
     */
    protected $__gadgetDataType = '';
    /**
     * @var
     */
    public $gadget;
    /**
     * @var
     */
    public $guestsCanInviteOthers;
    /**
     * @var
     */
    public $guestsCanModify;
    /**
     * @var
     */
    public $guestsCanSeeOtherGuests;
    /**
     * @var
     */
    public $hangoutLink;
    /**
     * @var
     */
    public $htmlLink;
    /**
     * @var
     */
    public $iCalUID;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $location;
    /**
     * @var
     */
    public $locked;
    /**
     * @var string
     */
    protected $__organizerType = 'Google_EventOrganizer';
    /**
     * @var string
     */
    protected $__organizerDataType = '';
    /**
     * @var
     */
    public $organizer;
    /**
     * @var string
     */
    protected $__originalStartTimeType = 'Google_EventDateTime';
    /**
     * @var string
     */
    protected $__originalStartTimeDataType = '';
    /**
     * @var
     */
    public $originalStartTime;
    /**
     * @var
     */
    public $privateCopy;
    /**
     * @var
     */
    public $recurrence;
    /**
     * @var
     */
    public $recurringEventId;
    /**
     * @var string
     */
    protected $__remindersType = 'Google_EventReminders';
    /**
     * @var string
     */
    protected $__remindersDataType = '';
    /**
     * @var
     */
    public $reminders;
    /**
     * @var
     */
    public $sequence;
    /**
     * @var string
     */
    protected $__sourceType = 'Google_EventSource';
    /**
     * @var string
     */
    protected $__sourceDataType = '';
    /**
     * @var
     */
    public $source;
    /**
     * @var string
     */
    protected $__startType = 'Google_EventDateTime';
    /**
     * @var string
     */
    protected $__startDataType = '';
    /**
     * @var
     */
    public $start;
    /**
     * @var
     */
    public $status;
    /**
     * @var
     */
    public $summary;
    /**
     * @var
     */
    public $transparency;
    /**
     * @var
     */
    public $updated;
    /**
     * @var
     */
    public $visibility;

    /**
     * @param $anyoneCanAddSelf
     */
    public function setAnyoneCanAddSelf($anyoneCanAddSelf)
    {
        $this->anyoneCanAddSelf = $anyoneCanAddSelf;
    }

    /**
     * @return mixed
     */
    public function getAnyoneCanAddSelf()
    {
        return $this->anyoneCanAddSelf;
    }

    /**
     * @param $attendees
     * @throws Google_Exception
     */
    public function setAttendees(/* array(Google_EventAttendee) */
        $attendees)
    {
        $this->assertIsArray($attendees, 'Google_EventAttendee', __METHOD__);
        $this->attendees = $attendees;
    }

    /**
     * @return mixed
     */
    public function getAttendees()
    {
        return $this->attendees;
    }

    /**
     * @param $attendeesOmitted
     */
    public function setAttendeesOmitted($attendeesOmitted)
    {
        $this->attendeesOmitted = $attendeesOmitted;
    }

    /**
     * @return mixed
     */
    public function getAttendeesOmitted()
    {
        return $this->attendeesOmitted;
    }

    /**
     * @param $colorId
     */
    public function setColorId($colorId)
    {
        $this->colorId = $colorId;
    }

    /**
     * @return mixed
     */
    public function getColorId()
    {
        return $this->colorId;
    }

    /**
     * @param $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param Google_EventCreator $creator
     */
    public function setCreator(Google_EventCreator $creator)
    {
        $this->creator = $creator;
    }

    /**
     * @return mixed
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param Google_EventDateTime $end
     */
    public function setEnd(Google_EventDateTime $end)
    {
        $this->end = $end;
    }

    /**
     * @return mixed
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @param $endTimeUnspecified
     */
    public function setEndTimeUnspecified($endTimeUnspecified)
    {
        $this->endTimeUnspecified = $endTimeUnspecified;
    }

    /**
     * @return mixed
     */
    public function getEndTimeUnspecified()
    {
        return $this->endTimeUnspecified;
    }

    /**
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param Google_EventExtendedProperties $extendedProperties
     */
    public function setExtendedProperties(Google_EventExtendedProperties $extendedProperties)
    {
        $this->extendedProperties = $extendedProperties;
    }

    /**
     * @return mixed
     */
    public function getExtendedProperties()
    {
        return $this->extendedProperties;
    }

    /**
     * @param Google_EventGadget $gadget
     */
    public function setGadget(Google_EventGadget $gadget)
    {
        $this->gadget = $gadget;
    }

    /**
     * @return mixed
     */
    public function getGadget()
    {
        return $this->gadget;
    }

    /**
     * @param $guestsCanInviteOthers
     */
    public function setGuestsCanInviteOthers($guestsCanInviteOthers)
    {
        $this->guestsCanInviteOthers = $guestsCanInviteOthers;
    }

    /**
     * @return mixed
     */
    public function getGuestsCanInviteOthers()
    {
        return $this->guestsCanInviteOthers;
    }

    /**
     * @param $guestsCanModify
     */
    public function setGuestsCanModify($guestsCanModify)
    {
        $this->guestsCanModify = $guestsCanModify;
    }

    /**
     * @return mixed
     */
    public function getGuestsCanModify()
    {
        return $this->guestsCanModify;
    }

    /**
     * @param $guestsCanSeeOtherGuests
     */
    public function setGuestsCanSeeOtherGuests($guestsCanSeeOtherGuests)
    {
        $this->guestsCanSeeOtherGuests = $guestsCanSeeOtherGuests;
    }

    /**
     * @return mixed
     */
    public function getGuestsCanSeeOtherGuests()
    {
        return $this->guestsCanSeeOtherGuests;
    }

    /**
     * @param $hangoutLink
     */
    public function setHangoutLink($hangoutLink)
    {
        $this->hangoutLink = $hangoutLink;
    }

    /**
     * @return mixed
     */
    public function getHangoutLink()
    {
        return $this->hangoutLink;
    }

    /**
     * @param $htmlLink
     */
    public function setHtmlLink($htmlLink)
    {
        $this->htmlLink = $htmlLink;
    }

    /**
     * @return mixed
     */
    public function getHtmlLink()
    {
        return $this->htmlLink;
    }

    /**
     * @param $iCalUID
     */
    public function setICalUID($iCalUID)
    {
        $this->iCalUID = $iCalUID;
    }

    /**
     * @return mixed
     */
    public function getICalUID()
    {
        return $this->iCalUID;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param $locked
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;
    }

    /**
     * @return mixed
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * @param Google_EventOrganizer $organizer
     */
    public function setOrganizer(Google_EventOrganizer $organizer)
    {
        $this->organizer = $organizer;
    }

    /**
     * @return mixed
     */
    public function getOrganizer()
    {
        return $this->organizer;
    }

    /**
     * @param Google_EventDateTime $originalStartTime
     */
    public function setOriginalStartTime(Google_EventDateTime $originalStartTime)
    {
        $this->originalStartTime = $originalStartTime;
    }

    /**
     * @return mixed
     */
    public function getOriginalStartTime()
    {
        return $this->originalStartTime;
    }

    /**
     * @param $privateCopy
     */
    public function setPrivateCopy($privateCopy)
    {
        $this->privateCopy = $privateCopy;
    }

    /**
     * @return mixed
     */
    public function getPrivateCopy()
    {
        return $this->privateCopy;
    }

    /**
     * @param $recurrence
     * @throws Google_Exception
     */
    public function setRecurrence(/* array(Google_string) */
        $recurrence)
    {
        $this->assertIsArray($recurrence, 'Google_string', __METHOD__);
        $this->recurrence = $recurrence;
    }

    /**
     * @return mixed
     */
    public function getRecurrence()
    {
        return $this->recurrence;
    }

    /**
     * @param $recurringEventId
     */
    public function setRecurringEventId($recurringEventId)
    {
        $this->recurringEventId = $recurringEventId;
    }

    /**
     * @return mixed
     */
    public function getRecurringEventId()
    {
        return $this->recurringEventId;
    }

    /**
     * @param Google_EventReminders $reminders
     */
    public function setReminders(Google_EventReminders $reminders)
    {
        $this->reminders = $reminders;
    }

    /**
     * @return mixed
     */
    public function getReminders()
    {
        return $this->reminders;
    }

    /**
     * @param $sequence
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;
    }

    /**
     * @return mixed
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * @param Google_EventSource $source
     */
    public function setSource(Google_EventSource $source)
    {
        $this->source = $source;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param Google_EventDateTime $start
     */
    public function setStart(Google_EventDateTime $start)
    {
        $this->start = $start;
    }

    /**
     * @return mixed
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param $summary
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    /**
     * @return mixed
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param $transparency
     */
    public function setTransparency($transparency)
    {
        $this->transparency = $transparency;
    }

    /**
     * @return mixed
     */
    public function getTransparency()
    {
        return $this->transparency;
    }

    /**
     * @param $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param $visibility
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
    }

    /**
     * @return mixed
     */
    public function getVisibility()
    {
        return $this->visibility;
    }
}

/**
 * Class Google_EventAttendee
 */
class Google_EventAttendee extends Google_Model
{
    /**
     * @var
     */
    public $additionalGuests;
    /**
     * @var
     */
    public $comment;
    /**
     * @var
     */
    public $displayName;
    /**
     * @var
     */
    public $email;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $optional;
    /**
     * @var
     */
    public $organizer;
    /**
     * @var
     */
    public $resource;
    /**
     * @var
     */
    public $responseStatus;
    /**
     * @var
     */
    public $self;

    /**
     * @param $additionalGuests
     */
    public function setAdditionalGuests($additionalGuests)
    {
        $this->additionalGuests = $additionalGuests;
    }

    /**
     * @return mixed
     */
    public function getAdditionalGuests()
    {
        return $this->additionalGuests;
    }

    /**
     * @param $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $optional
     */
    public function setOptional($optional)
    {
        $this->optional = $optional;
    }

    /**
     * @return mixed
     */
    public function getOptional()
    {
        return $this->optional;
    }

    /**
     * @param $organizer
     */
    public function setOrganizer($organizer)
    {
        $this->organizer = $organizer;
    }

    /**
     * @return mixed
     */
    public function getOrganizer()
    {
        return $this->organizer;
    }

    /**
     * @param $resource
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
    }

    /**
     * @return mixed
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * @param $responseStatus
     */
    public function setResponseStatus($responseStatus)
    {
        $this->responseStatus = $responseStatus;
    }

    /**
     * @return mixed
     */
    public function getResponseStatus()
    {
        return $this->responseStatus;
    }

    /**
     * @param $self
     */
    public function setSelf($self)
    {
        $this->self = $self;
    }

    /**
     * @return mixed
     */
    public function getSelf()
    {
        return $this->self;
    }
}

/**
 * Class Google_EventCreator
 */
class Google_EventCreator extends Google_Model
{
    /**
     * @var
     */
    public $displayName;
    /**
     * @var
     */
    public $email;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $self;

    /**
     * @param $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $self
     */
    public function setSelf($self)
    {
        $this->self = $self;
    }

    /**
     * @return mixed
     */
    public function getSelf()
    {
        return $this->self;
    }
}

/**
 * Class Google_EventDateTime
 */
class Google_EventDateTime extends Google_Model
{
    /**
     * @var
     */
    public $date;
    /**
     * @var
     */
    public $dateTime;
    /**
     * @var
     */
    public $timeZone;

    /**
     * @param $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param $dateTime
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;
    }

    /**
     * @return mixed
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * @param $timeZone
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }

    /**
     * @return mixed
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }
}

/**
 * Class Google_EventExtendedProperties
 */
class Google_EventExtendedProperties extends Google_Model
{
    /**
     * @var
     */
    public $private;
    /**
     * @var
     */
    public $shared;

    /**
     * @param $private
     */
    public function setPrivate($private)
    {
        $this->private = $private;
    }

    /**
     * @return mixed
     */
    public function getPrivate()
    {
        return $this->private;
    }

    /**
     * @param $shared
     */
    public function setShared($shared)
    {
        $this->shared = $shared;
    }

    /**
     * @return mixed
     */
    public function getShared()
    {
        return $this->shared;
    }
}

/**
 * Class Google_EventGadget
 */
class Google_EventGadget extends Google_Model
{
    /**
     * @var
     */
    public $display;
    /**
     * @var
     */
    public $height;
    /**
     * @var
     */
    public $iconLink;
    /**
     * @var
     */
    public $link;
    /**
     * @var
     */
    public $preferences;
    /**
     * @var
     */
    public $title;
    /**
     * @var
     */
    public $type;
    /**
     * @var
     */
    public $width;

    /**
     * @param $display
     */
    public function setDisplay($display)
    {
        $this->display = $display;
    }

    /**
     * @return mixed
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * @param $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param $iconLink
     */
    public function setIconLink($iconLink)
    {
        $this->iconLink = $iconLink;
    }

    /**
     * @return mixed
     */
    public function getIconLink()
    {
        return $this->iconLink;
    }

    /**
     * @param $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param $preferences
     */
    public function setPreferences($preferences)
    {
        $this->preferences = $preferences;
    }

    /**
     * @return mixed
     */
    public function getPreferences()
    {
        return $this->preferences;
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    /**
     * @param $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }
}

/**
 * Class Google_EventOrganizer
 */
class Google_EventOrganizer extends Google_Model
{
    /**
     * @var
     */
    public $displayName;
    /**
     * @var
     */
    public $email;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $self;

    /**
     * @param $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $self
     */
    public function setSelf($self)
    {
        $this->self = $self;
    }

    /**
     * @return mixed
     */
    public function getSelf()
    {
        return $this->self;
    }
}

/**
 * Class Google_EventReminder
 */
class Google_EventReminder extends Google_Model
{
    /**
     * @var
     */
    public $method;
    /**
     * @var
     */
    public $minutes;

    /**
     * @param $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param $minutes
     */
    public function setMinutes($minutes)
    {
        $this->minutes = $minutes;
    }

    /**
     * @return mixed
     */
    public function getMinutes()
    {
        return $this->minutes;
    }
}

/**
 * Class Google_EventReminders
 */
class Google_EventReminders extends Google_Model
{
    /**
     * @var string
     */
    protected $__overridesType = 'Google_EventReminder';
    /**
     * @var string
     */
    protected $__overridesDataType = 'array';
    /**
     * @var
     */
    public $overrides;
    /**
     * @var
     */
    public $useDefault;

    /**
     * @param $overrides
     * @throws Google_Exception
     */
    public function setOverrides(/* array(Google_EventReminder) */
        $overrides)
    {
        $this->assertIsArray($overrides, 'Google_EventReminder', __METHOD__);
        $this->overrides = $overrides;
    }

    /**
     * @return mixed
     */
    public function getOverrides()
    {
        return $this->overrides;
    }

    /**
     * @param $useDefault
     */
    public function setUseDefault($useDefault)
    {
        $this->useDefault = $useDefault;
    }

    /**
     * @return mixed
     */
    public function getUseDefault()
    {
        return $this->useDefault;
    }
}

/**
 * Class Google_EventSource
 */
class Google_EventSource extends Google_Model
{
    /**
     * @var
     */
    public $title;
    /**
     * @var
     */
    public $url;

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }
}

/**
 * Class Google_Events
 */
class Google_Events extends Google_Model
{
    /**
     * @var
     */
    public $accessRole;
    /**
     * @var string
     */
    protected $__defaultRemindersType = 'Google_EventReminder';
    /**
     * @var string
     */
    protected $__defaultRemindersDataType = 'array';
    /**
     * @var
     */
    public $defaultReminders;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Event';
    /**
     * @var string
     */
    protected $__itemsDataType = 'array';
    /**
     * @var
     */
    public $items;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $nextPageToken;
    /**
     * @var
     */
    public $summary;
    /**
     * @var
     */
    public $timeZone;
    /**
     * @var
     */
    public $updated;

    /**
     * @param $accessRole
     */
    public function setAccessRole($accessRole)
    {
        $this->accessRole = $accessRole;
    }

    /**
     * @return mixed
     */
    public function getAccessRole()
    {
        return $this->accessRole;
    }

    /**
     * @param $defaultReminders
     * @throws Google_Exception
     */
    public function setDefaultReminders(/* array(Google_EventReminder) */
        $defaultReminders)
    {
        $this->assertIsArray($defaultReminders, 'Google_EventReminder', __METHOD__);
        $this->defaultReminders = $defaultReminders;
    }

    /**
     * @return mixed
     */
    public function getDefaultReminders()
    {
        return $this->defaultReminders;
    }

    /**
     * @param $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Event) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Event', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param $nextPageToken
     */
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    /**
     * @param $summary
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    /**
     * @return mixed
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param $timeZone
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }

    /**
     * @return mixed
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * @param $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getUpdated()
    {
        return $this->updated;
    }
}

/**
 * Class Google_FreeBusyCalendar
 */
class Google_FreeBusyCalendar extends Google_Model
{
    /**
     * @var string
     */
    protected $__busyType = 'Google_TimePeriod';
    /**
     * @var string
     */
    protected $__busyDataType = 'array';
    /**
     * @var
     */
    public $busy;
    /**
     * @var string
     */
    protected $__errorsType = 'Google_Error';
    /**
     * @var string
     */
    protected $__errorsDataType = 'array';
    /**
     * @var
     */
    public $errors;

    /**
     * @param $busy
     * @throws Google_Exception
     */
    public function setBusy(/* array(Google_TimePeriod) */
        $busy)
    {
        $this->assertIsArray($busy, 'Google_TimePeriod', __METHOD__);
        $this->busy = $busy;
    }

    /**
     * @return mixed
     */
    public function getBusy()
    {
        return $this->busy;
    }

    /**
     * @param $errors
     * @throws Google_Exception
     */
    public function setErrors(/* array(Google_Error) */
        $errors)
    {
        $this->assertIsArray($errors, 'Google_Error', __METHOD__);
        $this->errors = $errors;
    }

    /**
     * @return mixed
     */
    public function getErrors()
    {
        return $this->errors;
    }
}

/**
 * Class Google_FreeBusyGroup
 */
class Google_FreeBusyGroup extends Google_Model
{
    /**
     * @var
     */
    public $calendars;
    /**
     * @var string
     */
    protected $__errorsType = 'Google_Error';
    /**
     * @var string
     */
    protected $__errorsDataType = 'array';
    /**
     * @var
     */
    public $errors;

    /**
     * @param $calendars
     * @throws Google_Exception
     */
    public function setCalendars(/* array(Google_string) */
        $calendars)
    {
        $this->assertIsArray($calendars, 'Google_string', __METHOD__);
        $this->calendars = $calendars;
    }

    /**
     * @return mixed
     */
    public function getCalendars()
    {
        return $this->calendars;
    }

    /**
     * @param $errors
     * @throws Google_Exception
     */
    public function setErrors(/* array(Google_Error) */
        $errors)
    {
        $this->assertIsArray($errors, 'Google_Error', __METHOD__);
        $this->errors = $errors;
    }

    /**
     * @return mixed
     */
    public function getErrors()
    {
        return $this->errors;
    }
}

/**
 * Class Google_FreeBusyRequest
 */
class Google_FreeBusyRequest extends Google_Model
{
    /**
     * @var
     */
    public $calendarExpansionMax;
    /**
     * @var
     */
    public $groupExpansionMax;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_FreeBusyRequestItem';
    /**
     * @var string
     */
    protected $__itemsDataType = 'array';
    /**
     * @var
     */
    public $items;
    /**
     * @var
     */
    public $timeMax;
    /**
     * @var
     */
    public $timeMin;
    /**
     * @var
     */
    public $timeZone;

    /**
     * @param $calendarExpansionMax
     */
    public function setCalendarExpansionMax($calendarExpansionMax)
    {
        $this->calendarExpansionMax = $calendarExpansionMax;
    }

    /**
     * @return mixed
     */
    public function getCalendarExpansionMax()
    {
        return $this->calendarExpansionMax;
    }

    /**
     * @param $groupExpansionMax
     */
    public function setGroupExpansionMax($groupExpansionMax)
    {
        $this->groupExpansionMax = $groupExpansionMax;
    }

    /**
     * @return mixed
     */
    public function getGroupExpansionMax()
    {
        return $this->groupExpansionMax;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_FreeBusyRequestItem) */
        $items)
    {
        $this->assertIsArray($items, 'Google_FreeBusyRequestItem', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param $timeMax
     */
    public function setTimeMax($timeMax)
    {
        $this->timeMax = $timeMax;
    }

    /**
     * @return mixed
     */
    public function getTimeMax()
    {
        return $this->timeMax;
    }

    /**
     * @param $timeMin
     */
    public function setTimeMin($timeMin)
    {
        $this->timeMin = $timeMin;
    }

    /**
     * @return mixed
     */
    public function getTimeMin()
    {
        return $this->timeMin;
    }

    /**
     * @param $timeZone
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }

    /**
     * @return mixed
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }
}

/**
 * Class Google_FreeBusyRequestItem
 */
class Google_FreeBusyRequestItem extends Google_Model
{
    /**
     * @var
     */
    public $id;

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}

/**
 * Class Google_FreeBusyResponse
 */
class Google_FreeBusyResponse extends Google_Model
{
    /**
     * @var string
     */
    protected $__calendarsType = 'Google_FreeBusyCalendar';
    /**
     * @var string
     */
    protected $__calendarsDataType = 'map';
    /**
     * @var
     */
    public $calendars;
    /**
     * @var string
     */
    protected $__groupsType = 'Google_FreeBusyGroup';
    /**
     * @var string
     */
    protected $__groupsDataType = 'map';
    /**
     * @var
     */
    public $groups;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $timeMax;
    /**
     * @var
     */
    public $timeMin;

    /**
     * @param Google_FreeBusyCalendar $calendars
     */
    public function setCalendars(Google_FreeBusyCalendar $calendars)
    {
        $this->calendars = $calendars;
    }

    /**
     * @return mixed
     */
    public function getCalendars()
    {
        return $this->calendars;
    }

    /**
     * @param Google_FreeBusyGroup $groups
     */
    public function setGroups(Google_FreeBusyGroup $groups)
    {
        $this->groups = $groups;
    }

    /**
     * @return mixed
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param $timeMax
     */
    public function setTimeMax($timeMax)
    {
        $this->timeMax = $timeMax;
    }

    /**
     * @return mixed
     */
    public function getTimeMax()
    {
        return $this->timeMax;
    }

    /**
     * @param $timeMin
     */
    public function setTimeMin($timeMin)
    {
        $this->timeMin = $timeMin;
    }

    /**
     * @return mixed
     */
    public function getTimeMin()
    {
        return $this->timeMin;
    }
}

/**
 * Class Google_Setting
 */
class Google_Setting extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $value;

    /**
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}

/**
 * Class Google_Settings
 */
class Google_Settings extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Setting';
    /**
     * @var string
     */
    protected $__itemsDataType = 'array';
    /**
     * @var
     */
    public $items;
    /**
     * @var
     */
    public $kind;

    /**
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Setting) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Setting', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }
}

/**
 * Class Google_TimePeriod
 */
class Google_TimePeriod extends Google_Model
{
    /**
     * @var
     */
    public $end;
    /**
     * @var
     */
    public $start;

    /**
     * @param $end
     */
    public function setEnd($end)
    {
        $this->end = $end;
    }

    /**
     * @return mixed
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @param $start
     */
    public function setStart($start)
    {
        $this->start = $start;
    }

    /**
     * @return mixed
     */
    public function getStart()
    {
        return $this->start;
    }
}
