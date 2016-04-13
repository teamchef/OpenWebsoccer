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
 * The "contacts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mirrorService = new Google_MirrorService(...);
 *   $contacts = $mirrorService->contacts;
 *  </code>
 */
class Google_ContactsServiceResource extends Google_ServiceResource
{

    /**
     * Deletes a contact. (contacts.delete)
     *
     * @param string $id The ID of the contact.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($id, $optParams = [])
    {
        $params = ['id' => $id];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Gets a single contact by ID. (contacts.get)
     *
     * @param string $id The ID of the contact.
     * @param array $optParams Optional parameters.
     * @return Google_Contact
     * @throws Google_Exception
     */
    public function get($id, $optParams = [])
    {
        $params = ['id' => $id];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Contact($data);
        } else {
            return $data;
        }
    }

    /**
     * Inserts a new contact. (contacts.insert)
     *
     * @param Google_Contact $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Contact
     * @throws Google_Exception
     */
    public function insert(Google_Contact $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Contact($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves a list of contacts for the authenticated user. (contacts.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_ContactsListResponse
     * @throws Google_Exception
     */
    public function listContacts($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_ContactsListResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates a contact in place. This method supports patch semantics.
     * (contacts.patch)
     *
     * @param string $id The ID of the contact.
     * @param Google_Contact $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Contact
     * @throws Google_Exception
     */
    public function patch($id, Google_Contact $postBody, $optParams = [])
    {
        $params = ['id' => $id, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Contact($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates a contact in place. (contacts.update)
     *
     * @param string $id The ID of the contact.
     * @param Google_Contact $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Contact
     * @throws Google_Exception
     */
    public function update($id, Google_Contact $postBody, $optParams = [])
    {
        $params = ['id' => $id, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Contact($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "locations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mirrorService = new Google_MirrorService(...);
 *   $locations = $mirrorService->locations;
 *  </code>
 */
class Google_LocationsServiceResource extends Google_ServiceResource
{

    /**
     * Gets a single location by ID. (locations.get)
     *
     * @param string $id The ID of the location or latest for the last known location.
     * @param array $optParams Optional parameters.
     * @return Google_Location
     * @throws Google_Exception
     */
    public function get($id, $optParams = [])
    {
        $params = ['id' => $id];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Location($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves a list of locations for the user. (locations.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_LocationsListResponse
     * @throws Google_Exception
     */
    public function listLocations($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_LocationsListResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "subscriptions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mirrorService = new Google_MirrorService(...);
 *   $subscriptions = $mirrorService->subscriptions;
 *  </code>
 */
class Google_SubscriptionsServiceResource extends Google_ServiceResource
{

    /**
     * Deletes a subscription. (subscriptions.delete)
     *
     * @param string $id The ID of the subscription.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($id, $optParams = [])
    {
        $params = ['id' => $id];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Creates a new subscription. (subscriptions.insert)
     *
     * @param Google_Subscription $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Subscription
     * @throws Google_Exception
     */
    public function insert(Google_Subscription $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Subscription($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves a list of subscriptions for the authenticated user and service.
     * (subscriptions.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_SubscriptionsListResponse
     * @throws Google_Exception
     */
    public function listSubscriptions($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_SubscriptionsListResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates an existing subscription in place. (subscriptions.update)
     *
     * @param string $id The ID of the subscription.
     * @param Google_Subscription $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Subscription
     * @throws Google_Exception
     */
    public function update($id, Google_Subscription $postBody, $optParams = [])
    {
        $params = ['id' => $id, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Subscription($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "timeline" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mirrorService = new Google_MirrorService(...);
 *   $timeline = $mirrorService->timeline;
 *  </code>
 */
class Google_TimelineServiceResource extends Google_ServiceResource
{

    /**
     * Deletes a timeline item. (timeline.delete)
     *
     * @param string $id The ID of the timeline item.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($id, $optParams = [])
    {
        $params = ['id' => $id];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Gets a single timeline item by ID. (timeline.get)
     *
     * @param string $id The ID of the timeline item.
     * @param array $optParams Optional parameters.
     * @return Google_TimelineItem
     * @throws Google_Exception
     */
    public function get($id, $optParams = [])
    {
        $params = ['id' => $id];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_TimelineItem($data);
        } else {
            return $data;
        }
    }

    /**
     * Inserts a new item into the timeline. (timeline.insert)
     *
     * @param Google_TimelineItem $postBody
     * @param array $optParams Optional parameters.
     * @return Google_TimelineItem
     * @throws Google_Exception
     */
    public function insert(Google_TimelineItem $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_TimelineItem($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves a list of timeline items for the authenticated user.
     * (timeline.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_TimelineListResponse
     * @throws Google_Exception
     * @opt_param string bundleId If provided, only items with the given bundleId will be returned.
     * @opt_param bool includeDeleted If true, tombstone records for deleted items will be returned.
     * @opt_param string maxResults The maximum number of items to include in the response, used for paging.
     * @opt_param string orderBy Controls the order in which timeline items are returned.
     * @opt_param string pageToken Token for the page of results to return.
     * @opt_param bool pinnedOnly If true, only pinned items will be returned.
     * @opt_param string sourceItemId If provided, only items with the given sourceItemId will be returned.
     */
    public function listTimeline($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_TimelineListResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates a timeline item in place. This method supports patch semantics.
     * (timeline.patch)
     *
     * @param string $id The ID of the timeline item.
     * @param Google_TimelineItem $postBody
     * @param array $optParams Optional parameters.
     * @return Google_TimelineItem
     * @throws Google_Exception
     */
    public function patch($id, Google_TimelineItem $postBody, $optParams = [])
    {
        $params = ['id' => $id, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_TimelineItem($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates a timeline item in place. (timeline.update)
     *
     * @param string $id The ID of the timeline item.
     * @param Google_TimelineItem $postBody
     * @param array $optParams Optional parameters.
     * @return Google_TimelineItem
     * @throws Google_Exception
     */
    public function update($id, Google_TimelineItem $postBody, $optParams = [])
    {
        $params = ['id' => $id, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_TimelineItem($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "attachments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mirrorService = new Google_MirrorService(...);
 *   $attachments = $mirrorService->attachments;
 *  </code>
 */
class Google_TimelineAttachmentsServiceResource extends Google_ServiceResource
{

    /**
     * Deletes an attachment from a timeline item. (attachments.delete)
     *
     * @param string $itemId The ID of the timeline item the attachment belongs to.
     * @param string $attachmentId The ID of the attachment.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($itemId, $attachmentId, $optParams = [])
    {
        $params = ['itemId' => $itemId, 'attachmentId' => $attachmentId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Retrieves an attachment on a timeline item by item ID and attachment ID.
     * (attachments.get)
     *
     * @param string $itemId The ID of the timeline item the attachment belongs to.
     * @param string $attachmentId The ID of the attachment.
     * @param array $optParams Optional parameters.
     * @return Google_Attachment
     * @throws Google_Exception
     */
    public function get($itemId, $attachmentId, $optParams = [])
    {
        $params = ['itemId' => $itemId, 'attachmentId' => $attachmentId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Attachment($data);
        } else {
            return $data;
        }
    }

    /**
     * Adds a new attachment to a timeline item. (attachments.insert)
     *
     * @param string $itemId The ID of the timeline item the attachment belongs to.
     * @param array $optParams Optional parameters.
     * @return Google_Attachment
     * @throws Google_Exception
     */
    public function insert($itemId, $optParams = [])
    {
        $params = ['itemId' => $itemId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Attachment($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns a list of attachments for a timeline item. (attachments.list)
     *
     * @param string $itemId The ID of the timeline item whose attachments should be listed.
     * @param array $optParams Optional parameters.
     * @return Google_AttachmentsListResponse
     * @throws Google_Exception
     */
    public function listTimelineAttachments($itemId, $optParams = [])
    {
        $params = ['itemId' => $itemId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_AttachmentsListResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Mirror (v1).
 *
 * <p>
 * API for interacting with Glass users via the timeline.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/glass" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_MirrorService extends Google_Service
{
    /**
     * @var Google_ContactsServiceResource
     */
    public $contacts;
    /**
     * @var Google_LocationsServiceResource
     */
    public $locations;
    /**
     * @var Google_SubscriptionsServiceResource
     */
    public $subscriptions;
    /**
     * @var Google_TimelineServiceResource
     */
    public $timeline;
    /**
     * @var Google_TimelineAttachmentsServiceResource
     */
    public $timeline_attachments;

    /**
     * Constructs the internal representation of the Mirror service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'mirror/v1/';
        $this->version = 'v1';
        $this->serviceName = 'mirror';

        $client->addService($this->serviceName, $this->version);
        $this->contacts = new Google_ContactsServiceResource($this, $this->serviceName, 'contacts', json_decode('{"methods": {"delete": {"id": "mirror.contacts.delete", "path": "contacts/{id}", "httpMethod": "DELETE", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}}, "get": {"id": "mirror.contacts.get", "path": "contacts/{id}", "httpMethod": "GET", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Contact"}}, "insert": {"id": "mirror.contacts.insert", "path": "contacts", "httpMethod": "POST", "request": {"$ref": "Contact"}, "response": {"$ref": "Contact"}}, "list": {"id": "mirror.contacts.list", "path": "contacts", "httpMethod": "GET", "response": {"$ref": "ContactsListResponse"}}, "patch": {"id": "mirror.contacts.patch", "path": "contacts/{id}", "httpMethod": "PATCH", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Contact"}, "response": {"$ref": "Contact"}}, "update": {"id": "mirror.contacts.update", "path": "contacts/{id}", "httpMethod": "PUT", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Contact"}, "response": {"$ref": "Contact"}}}}', true));
        $this->locations = new Google_LocationsServiceResource($this, $this->serviceName, 'locations', json_decode('{"methods": {"get": {"id": "mirror.locations.get", "path": "locations/{id}", "httpMethod": "GET", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Location"}}, "list": {"id": "mirror.locations.list", "path": "locations", "httpMethod": "GET", "response": {"$ref": "LocationsListResponse"}}}}', true));
        $this->subscriptions = new Google_SubscriptionsServiceResource($this, $this->serviceName, 'subscriptions', json_decode('{"methods": {"delete": {"id": "mirror.subscriptions.delete", "path": "subscriptions/{id}", "httpMethod": "DELETE", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}}, "insert": {"id": "mirror.subscriptions.insert", "path": "subscriptions", "httpMethod": "POST", "request": {"$ref": "Subscription"}, "response": {"$ref": "Subscription"}}, "list": {"id": "mirror.subscriptions.list", "path": "subscriptions", "httpMethod": "GET", "response": {"$ref": "SubscriptionsListResponse"}}, "update": {"id": "mirror.subscriptions.update", "path": "subscriptions/{id}", "httpMethod": "PUT", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Subscription"}, "response": {"$ref": "Subscription"}}}}', true));
        $this->timeline = new Google_TimelineServiceResource($this, $this->serviceName, 'timeline', json_decode('{"methods": {"delete": {"id": "mirror.timeline.delete", "path": "timeline/{id}", "httpMethod": "DELETE", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}}, "get": {"id": "mirror.timeline.get", "path": "timeline/{id}", "httpMethod": "GET", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "TimelineItem"}}, "insert": {"id": "mirror.timeline.insert", "path": "timeline", "httpMethod": "POST", "request": {"$ref": "TimelineItem"}, "response": {"$ref": "TimelineItem"}, "supportsMediaUpload": true, "mediaUpload": {"accept": ["audio/*", "image/*", "video/*"], "maxSize": "10MB", "protocols": {"simple": {"multipart": true, "path": "/upload/mirror/v1/timeline"}, "resumable": {"multipart": true, "path": "/resumable/upload/mirror/v1/timeline"}}}}, "list": {"id": "mirror.timeline.list", "path": "timeline", "httpMethod": "GET", "parameters": {"bundleId": {"type": "string", "location": "query"}, "includeDeleted": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "location": "query"}, "orderBy": {"type": "string", "enum": ["displayTime", "writeTime"], "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "pinnedOnly": {"type": "boolean", "location": "query"}, "sourceItemId": {"type": "string", "location": "query"}}, "response": {"$ref": "TimelineListResponse"}}, "patch": {"id": "mirror.timeline.patch", "path": "timeline/{id}", "httpMethod": "PATCH", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "TimelineItem"}, "response": {"$ref": "TimelineItem"}}, "update": {"id": "mirror.timeline.update", "path": "timeline/{id}", "httpMethod": "PUT", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "TimelineItem"}, "response": {"$ref": "TimelineItem"}, "supportsMediaUpload": true, "mediaUpload": {"accept": ["audio/*", "image/*", "video/*"], "maxSize": "10MB", "protocols": {"simple": {"multipart": true, "path": "/upload/mirror/v1/timeline/{id}"}, "resumable": {"multipart": true, "path": "/resumable/upload/mirror/v1/timeline/{id}"}}}}}}', true));
        $this->timeline_attachments = new Google_TimelineAttachmentsServiceResource($this, $this->serviceName, 'attachments', json_decode('{"methods": {"delete": {"id": "mirror.timeline.attachments.delete", "path": "timeline/{itemId}/attachments/{attachmentId}", "httpMethod": "DELETE", "parameters": {"attachmentId": {"type": "string", "required": true, "location": "path"}, "itemId": {"type": "string", "required": true, "location": "path"}}}, "get": {"id": "mirror.timeline.attachments.get", "path": "timeline/{itemId}/attachments/{attachmentId}", "httpMethod": "GET", "parameters": {"attachmentId": {"type": "string", "required": true, "location": "path"}, "itemId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Attachment"}, "supportsMediaDownload": true}, "insert": {"id": "mirror.timeline.attachments.insert", "path": "timeline/{itemId}/attachments", "httpMethod": "POST", "parameters": {"itemId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Attachment"}, "supportsMediaUpload": true, "mediaUpload": {"accept": ["audio/*", "image/*", "video/*"], "maxSize": "10MB", "protocols": {"simple": {"multipart": true, "path": "/upload/mirror/v1/timeline/{itemId}/attachments"}, "resumable": {"multipart": true, "path": "/resumable/upload/mirror/v1/timeline/{itemId}/attachments"}}}}, "list": {"id": "mirror.timeline.attachments.list", "path": "timeline/{itemId}/attachments", "httpMethod": "GET", "parameters": {"itemId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "AttachmentsListResponse"}}}}', true));

    }
}


/**
 * Class Google_Attachment
 */
class Google_Attachment extends Google_Model
{
    /**
     * @var
     */
    public $contentType;
    /**
     * @var
     */
    public $contentUrl;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $isProcessingContent;

    /**
     * @param $contentType
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    }

    /**
     * @return mixed
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param $contentUrl
     */
    public function setContentUrl($contentUrl)
    {
        $this->contentUrl = $contentUrl;
    }

    /**
     * @return mixed
     */
    public function getContentUrl()
    {
        return $this->contentUrl;
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
     * @param $isProcessingContent
     */
    public function setIsProcessingContent($isProcessingContent)
    {
        $this->isProcessingContent = $isProcessingContent;
    }

    /**
     * @return mixed
     */
    public function getIsProcessingContent()
    {
        return $this->isProcessingContent;
    }
}

/**
 * Class Google_AttachmentsListResponse
 */
class Google_AttachmentsListResponse extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Attachment';
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
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Attachment) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Attachment', __METHOD__);
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
 * Class Google_Command
 */
class Google_Command extends Google_Model
{
    /**
     * @var
     */
    public $type;

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
}

/**
 * Class Google_Contact
 */
class Google_Contact extends Google_Model
{
    /**
     * @var string
     */
    protected $__acceptCommandsType = 'Google_Command';
    /**
     * @var string
     */
    protected $__acceptCommandsDataType = 'array';
    /**
     * @var
     */
    public $acceptCommands;
    /**
     * @var
     */
    public $acceptTypes;
    /**
     * @var
     */
    public $displayName;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $imageUrls;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $phoneNumber;
    /**
     * @var
     */
    public $priority;
    /**
     * @var
     */
    public $source;
    /**
     * @var
     */
    public $speakableName;
    /**
     * @var
     */
    public $type;

    /**
     * @param $acceptCommands
     * @throws Google_Exception
     */
    public function setAcceptCommands(/* array(Google_Command) */
        $acceptCommands)
    {
        $this->assertIsArray($acceptCommands, 'Google_Command', __METHOD__);
        $this->acceptCommands = $acceptCommands;
    }

    /**
     * @return mixed
     */
    public function getAcceptCommands()
    {
        return $this->acceptCommands;
    }

    /**
     * @param $acceptTypes
     * @throws Google_Exception
     */
    public function setAcceptTypes(/* array(Google_string) */
        $acceptTypes)
    {
        $this->assertIsArray($acceptTypes, 'Google_string', __METHOD__);
        $this->acceptTypes = $acceptTypes;
    }

    /**
     * @return mixed
     */
    public function getAcceptTypes()
    {
        return $this->acceptTypes;
    }

    /**
     * @param $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * @return mixed
     */
    public function getDisplayName()
    {
        return $this->displayName;
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
     * @param $imageUrls
     * @throws Google_Exception
     */
    public function setImageUrls(/* array(Google_string) */
        $imageUrls)
    {
        $this->assertIsArray($imageUrls, 'Google_string', __METHOD__);
        $this->imageUrls = $imageUrls;
    }

    /**
     * @return mixed
     */
    public function getImageUrls()
    {
        return $this->imageUrls;
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
     * @param $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    /**
     * @return mixed
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param $source
     */
    public function setSource($source)
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
     * @param $speakableName
     */
    public function setSpeakableName($speakableName)
    {
        $this->speakableName = $speakableName;
    }

    /**
     * @return mixed
     */
    public function getSpeakableName()
    {
        return $this->speakableName;
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
}

/**
 * Class Google_ContactsListResponse
 */
class Google_ContactsListResponse extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Contact';
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
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Contact) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Contact', __METHOD__);
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
 * Class Google_Location
 */
class Google_Location extends Google_Model
{
    /**
     * @var
     */
    public $accuracy;
    /**
     * @var
     */
    public $address;
    /**
     * @var
     */
    public $displayName;
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
    public $latitude;
    /**
     * @var
     */
    public $longitude;
    /**
     * @var
     */
    public $timestamp;

    /**
     * @param $accuracy
     */
    public function setAccuracy($accuracy)
    {
        $this->accuracy = $accuracy;
    }

    /**
     * @return mixed
     */
    public function getAccuracy()
    {
        return $this->accuracy;
    }

    /**
     * @param $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * @return mixed
     */
    public function getDisplayName()
    {
        return $this->displayName;
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
     * @param $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
}

/**
 * Class Google_LocationsListResponse
 */
class Google_LocationsListResponse extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Location';
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
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Location) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Location', __METHOD__);
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
 * Class Google_MenuItem
 */
class Google_MenuItem extends Google_Model
{
    /**
     * @var
     */
    public $action;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $payload;
    /**
     * @var
     */
    public $removeWhenSelected;
    /**
     * @var string
     */
    protected $__valuesType = 'Google_MenuValue';
    /**
     * @var string
     */
    protected $__valuesDataType = 'array';
    /**
     * @var
     */
    public $values;

    /**
     * @param $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
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
     * @param $payload
     */
    public function setPayload($payload)
    {
        $this->payload = $payload;
    }

    /**
     * @return mixed
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @param $removeWhenSelected
     */
    public function setRemoveWhenSelected($removeWhenSelected)
    {
        $this->removeWhenSelected = $removeWhenSelected;
    }

    /**
     * @return mixed
     */
    public function getRemoveWhenSelected()
    {
        return $this->removeWhenSelected;
    }

    /**
     * @param $values
     * @throws Google_Exception
     */
    public function setValues(/* array(Google_MenuValue) */
        $values)
    {
        $this->assertIsArray($values, 'Google_MenuValue', __METHOD__);
        $this->values = $values;
    }

    /**
     * @return mixed
     */
    public function getValues()
    {
        return $this->values;
    }
}

/**
 * Class Google_MenuValue
 */
class Google_MenuValue extends Google_Model
{
    /**
     * @var
     */
    public $displayName;
    /**
     * @var
     */
    public $iconUrl;
    /**
     * @var
     */
    public $state;

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
     * @param $iconUrl
     */
    public function setIconUrl($iconUrl)
    {
        $this->iconUrl = $iconUrl;
    }

    /**
     * @return mixed
     */
    public function getIconUrl()
    {
        return $this->iconUrl;
    }

    /**
     * @param $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }
}

/**
 * Class Google_Notification
 */
class Google_Notification extends Google_Model
{
    /**
     * @var
     */
    public $collection;
    /**
     * @var
     */
    public $itemId;
    /**
     * @var
     */
    public $operation;
    /**
     * @var string
     */
    protected $__userActionsType = 'Google_UserAction';
    /**
     * @var string
     */
    protected $__userActionsDataType = 'array';
    /**
     * @var
     */
    public $userActions;
    /**
     * @var
     */
    public $userToken;
    /**
     * @var
     */
    public $verifyToken;

    /**
     * @param $collection
     */
    public function setCollection($collection)
    {
        $this->collection = $collection;
    }

    /**
     * @return mixed
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @param $itemId
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    }

    /**
     * @return mixed
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param $operation
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
    }

    /**
     * @return mixed
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * @param $userActions
     * @throws Google_Exception
     */
    public function setUserActions(/* array(Google_UserAction) */
        $userActions)
    {
        $this->assertIsArray($userActions, 'Google_UserAction', __METHOD__);
        $this->userActions = $userActions;
    }

    /**
     * @return mixed
     */
    public function getUserActions()
    {
        return $this->userActions;
    }

    /**
     * @param $userToken
     */
    public function setUserToken($userToken)
    {
        $this->userToken = $userToken;
    }

    /**
     * @return mixed
     */
    public function getUserToken()
    {
        return $this->userToken;
    }

    /**
     * @param $verifyToken
     */
    public function setVerifyToken($verifyToken)
    {
        $this->verifyToken = $verifyToken;
    }

    /**
     * @return mixed
     */
    public function getVerifyToken()
    {
        return $this->verifyToken;
    }
}

/**
 * Class Google_NotificationConfig
 */
class Google_NotificationConfig extends Google_Model
{
    /**
     * @var
     */
    public $deliveryTime;
    /**
     * @var
     */
    public $level;

    /**
     * @param $deliveryTime
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;
    }

    /**
     * @return mixed
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    /**
     * @param $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }
}

/**
 * Class Google_Subscription
 */
class Google_Subscription extends Google_Model
{
    /**
     * @var
     */
    public $callbackUrl;
    /**
     * @var
     */
    public $collection;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__notificationType = 'Google_Notification';
    /**
     * @var string
     */
    protected $__notificationDataType = '';
    /**
     * @var
     */
    public $notification;
    /**
     * @var
     */
    public $operation;
    /**
     * @var
     */
    public $updated;
    /**
     * @var
     */
    public $userToken;
    /**
     * @var
     */
    public $verifyToken;

    /**
     * @param $callbackUrl
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->callbackUrl = $callbackUrl;
    }

    /**
     * @return mixed
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    /**
     * @param $collection
     */
    public function setCollection($collection)
    {
        $this->collection = $collection;
    }

    /**
     * @return mixed
     */
    public function getCollection()
    {
        return $this->collection;
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
     * @param Google_Notification $notification
     */
    public function setNotification(Google_Notification $notification)
    {
        $this->notification = $notification;
    }

    /**
     * @return mixed
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * @param $operation
     * @throws Google_Exception
     */
    public function setOperation(/* array(Google_string) */
        $operation)
    {
        $this->assertIsArray($operation, 'Google_string', __METHOD__);
        $this->operation = $operation;
    }

    /**
     * @return mixed
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * @param $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param $userToken
     */
    public function setUserToken($userToken)
    {
        $this->userToken = $userToken;
    }

    /**
     * @return mixed
     */
    public function getUserToken()
    {
        return $this->userToken;
    }

    /**
     * @param $verifyToken
     */
    public function setVerifyToken($verifyToken)
    {
        $this->verifyToken = $verifyToken;
    }

    /**
     * @return mixed
     */
    public function getVerifyToken()
    {
        return $this->verifyToken;
    }
}

/**
 * Class Google_SubscriptionsListResponse
 */
class Google_SubscriptionsListResponse extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Subscription';
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
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Subscription) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Subscription', __METHOD__);
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
 * Class Google_TimelineItem
 */
class Google_TimelineItem extends Google_Model
{
    /**
     * @var string
     */
    protected $__attachmentsType = 'Google_Attachment';
    /**
     * @var string
     */
    protected $__attachmentsDataType = 'array';
    /**
     * @var
     */
    public $attachments;
    /**
     * @var
     */
    public $bundleId;
    /**
     * @var
     */
    public $canonicalUrl;
    /**
     * @var
     */
    public $created;
    /**
     * @var string
     */
    protected $__creatorType = 'Google_Contact';
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
    public $displayTime;
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $html;
    /**
     * @var
     */
    public $htmlPages;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $inReplyTo;
    /**
     * @var
     */
    public $isBundleCover;
    /**
     * @var
     */
    public $isDeleted;
    /**
     * @var
     */
    public $isPinned;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__locationType = 'Google_Location';
    /**
     * @var string
     */
    protected $__locationDataType = '';
    /**
     * @var
     */
    public $location;
    /**
     * @var string
     */
    protected $__menuItemsType = 'Google_MenuItem';
    /**
     * @var string
     */
    protected $__menuItemsDataType = 'array';
    /**
     * @var
     */
    public $menuItems;
    /**
     * @var string
     */
    protected $__notificationType = 'Google_NotificationConfig';
    /**
     * @var string
     */
    protected $__notificationDataType = '';
    /**
     * @var
     */
    public $notification;
    /**
     * @var
     */
    public $pinScore;
    /**
     * @var string
     */
    protected $__recipientsType = 'Google_Contact';
    /**
     * @var string
     */
    protected $__recipientsDataType = 'array';
    /**
     * @var
     */
    public $recipients;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $sourceItemId;
    /**
     * @var
     */
    public $speakableText;
    /**
     * @var
     */
    public $speakableType;
    /**
     * @var
     */
    public $text;
    /**
     * @var
     */
    public $title;
    /**
     * @var
     */
    public $updated;

    /**
     * @param $attachments
     * @throws Google_Exception
     */
    public function setAttachments(/* array(Google_Attachment) */
        $attachments)
    {
        $this->assertIsArray($attachments, 'Google_Attachment', __METHOD__);
        $this->attachments = $attachments;
    }

    /**
     * @return mixed
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param $bundleId
     */
    public function setBundleId($bundleId)
    {
        $this->bundleId = $bundleId;
    }

    /**
     * @return mixed
     */
    public function getBundleId()
    {
        return $this->bundleId;
    }

    /**
     * @param $canonicalUrl
     */
    public function setCanonicalUrl($canonicalUrl)
    {
        $this->canonicalUrl = $canonicalUrl;
    }

    /**
     * @return mixed
     */
    public function getCanonicalUrl()
    {
        return $this->canonicalUrl;
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
     * @param Google_Contact $creator
     */
    public function setCreator(Google_Contact $creator)
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
     * @param $displayTime
     */
    public function setDisplayTime($displayTime)
    {
        $this->displayTime = $displayTime;
    }

    /**
     * @return mixed
     */
    public function getDisplayTime()
    {
        return $this->displayTime;
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
     * @param $html
     */
    public function setHtml($html)
    {
        $this->html = $html;
    }

    /**
     * @return mixed
     */
    public function getHtml()
    {
        return $this->html;
    }

    /**
     * @param $htmlPages
     * @throws Google_Exception
     */
    public function setHtmlPages(/* array(Google_string) */
        $htmlPages)
    {
        $this->assertIsArray($htmlPages, 'Google_string', __METHOD__);
        $this->htmlPages = $htmlPages;
    }

    /**
     * @return mixed
     */
    public function getHtmlPages()
    {
        return $this->htmlPages;
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
     * @param $inReplyTo
     */
    public function setInReplyTo($inReplyTo)
    {
        $this->inReplyTo = $inReplyTo;
    }

    /**
     * @return mixed
     */
    public function getInReplyTo()
    {
        return $this->inReplyTo;
    }

    /**
     * @param $isBundleCover
     */
    public function setIsBundleCover($isBundleCover)
    {
        $this->isBundleCover = $isBundleCover;
    }

    /**
     * @return mixed
     */
    public function getIsBundleCover()
    {
        return $this->isBundleCover;
    }

    /**
     * @param $isDeleted
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
    }

    /**
     * @return mixed
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * @param $isPinned
     */
    public function setIsPinned($isPinned)
    {
        $this->isPinned = $isPinned;
    }

    /**
     * @return mixed
     */
    public function getIsPinned()
    {
        return $this->isPinned;
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
     * @param Google_Location $location
     */
    public function setLocation(Google_Location $location)
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
     * @param $menuItems
     * @throws Google_Exception
     */
    public function setMenuItems(/* array(Google_MenuItem) */
        $menuItems)
    {
        $this->assertIsArray($menuItems, 'Google_MenuItem', __METHOD__);
        $this->menuItems = $menuItems;
    }

    /**
     * @return mixed
     */
    public function getMenuItems()
    {
        return $this->menuItems;
    }

    /**
     * @param Google_NotificationConfig $notification
     */
    public function setNotification(Google_NotificationConfig $notification)
    {
        $this->notification = $notification;
    }

    /**
     * @return mixed
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * @param $pinScore
     */
    public function setPinScore($pinScore)
    {
        $this->pinScore = $pinScore;
    }

    /**
     * @return mixed
     */
    public function getPinScore()
    {
        return $this->pinScore;
    }

    /**
     * @param $recipients
     * @throws Google_Exception
     */
    public function setRecipients(/* array(Google_Contact) */
        $recipients)
    {
        $this->assertIsArray($recipients, 'Google_Contact', __METHOD__);
        $this->recipients = $recipients;
    }

    /**
     * @return mixed
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * @param $selfLink
     */
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    /**
     * @param $sourceItemId
     */
    public function setSourceItemId($sourceItemId)
    {
        $this->sourceItemId = $sourceItemId;
    }

    /**
     * @return mixed
     */
    public function getSourceItemId()
    {
        return $this->sourceItemId;
    }

    /**
     * @param $speakableText
     */
    public function setSpeakableText($speakableText)
    {
        $this->speakableText = $speakableText;
    }

    /**
     * @return mixed
     */
    public function getSpeakableText()
    {
        return $this->speakableText;
    }

    /**
     * @param $speakableType
     */
    public function setSpeakableType($speakableType)
    {
        $this->speakableType = $speakableType;
    }

    /**
     * @return mixed
     */
    public function getSpeakableType()
    {
        return $this->speakableType;
    }

    /**
     * @param $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
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
 * Class Google_TimelineListResponse
 */
class Google_TimelineListResponse extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_TimelineItem';
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
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_TimelineItem) */
        $items)
    {
        $this->assertIsArray($items, 'Google_TimelineItem', __METHOD__);
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
 * Class Google_UserAction
 */
class Google_UserAction extends Google_Model
{
    /**
     * @var
     */
    public $payload;
    /**
     * @var
     */
    public $type;

    /**
     * @param $payload
     */
    public function setPayload($payload)
    {
        $this->payload = $payload;
    }

    /**
     * @return mixed
     */
    public function getPayload()
    {
        return $this->payload;
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
}
