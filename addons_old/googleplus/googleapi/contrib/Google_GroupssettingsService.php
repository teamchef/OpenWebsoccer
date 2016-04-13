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
 * The "groups" collection of methods.
 * Typical usage is:
 *  <code>
 *   $groupssettingsService = new Google_GroupssettingsService(...);
 *   $groups = $groupssettingsService->groups;
 *  </code>
 */
class Google_GroupsServiceResource extends Google_ServiceResource
{

    /**
     * Gets one resource by id. (groups.get)
     *
     * @param string $groupUniqueId The resource ID
     * @param array $optParams Optional parameters.
     * @return Google_Groups
     * @throws Google_Exception
     */
    public function get($groupUniqueId, $optParams = [])
    {
        $params = ['groupUniqueId' => $groupUniqueId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Groups($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates an existing resource. This method supports patch semantics. (groups.patch)
     *
     * @param string $groupUniqueId The resource ID
     * @param Google_Groups $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Groups
     * @throws Google_Exception
     */
    public function patch($groupUniqueId, Google_Groups $postBody, $optParams = [])
    {
        $params = ['groupUniqueId' => $groupUniqueId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Groups($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates an existing resource. (groups.update)
     *
     * @param string $groupUniqueId The resource ID
     * @param Google_Groups $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Groups
     * @throws Google_Exception
     */
    public function update($groupUniqueId, Google_Groups $postBody, $optParams = [])
    {
        $params = ['groupUniqueId' => $groupUniqueId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Groups($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Groupssettings (v1).
 *
 * <p>
 * Lets you manage permission levels and related settings of a group.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/google-apps/groups-settings/get_started" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_GroupssettingsService extends Google_Service
{
    /**
     * @var Google_GroupsServiceResource
     */
    public $groups;

    /**
     * Constructs the internal representation of the Groupssettings service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'groups/v1/groups/';
        $this->version = 'v1';
        $this->serviceName = 'groupssettings';

        $client->addService($this->serviceName, $this->version);
        $this->groups = new Google_GroupsServiceResource($this, $this->serviceName, 'groups', json_decode('{"methods": {"get": {"id": "groupsSettings.groups.get", "path": "{groupUniqueId}", "httpMethod": "GET", "parameters": {"groupUniqueId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Groups"}, "scopes": ["https://www.googleapis.com/auth/apps.groups.settings"]}, "patch": {"id": "groupsSettings.groups.patch", "path": "{groupUniqueId}", "httpMethod": "PATCH", "parameters": {"groupUniqueId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Groups"}, "response": {"$ref": "Groups"}, "scopes": ["https://www.googleapis.com/auth/apps.groups.settings"]}, "update": {"id": "groupsSettings.groups.update", "path": "{groupUniqueId}", "httpMethod": "PUT", "parameters": {"groupUniqueId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Groups"}, "response": {"$ref": "Groups"}, "scopes": ["https://www.googleapis.com/auth/apps.groups.settings"]}}}', true));

    }
}


/**
 * Class Google_Groups
 */
class Google_Groups extends Google_Model
{
    /**
     * @var
     */
    public $allowExternalMembers;
    /**
     * @var
     */
    public $allowGoogleCommunication;
    /**
     * @var
     */
    public $allowWebPosting;
    /**
     * @var
     */
    public $archiveOnly;
    /**
     * @var
     */
    public $customReplyTo;
    /**
     * @var
     */
    public $defaultMessageDenyNotificationText;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $email;
    /**
     * @var
     */
    public $includeInGlobalAddressList;
    /**
     * @var
     */
    public $isArchived;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $maxMessageBytes;
    /**
     * @var
     */
    public $membersCanPostAsTheGroup;
    /**
     * @var
     */
    public $messageDisplayFont;
    /**
     * @var
     */
    public $messageModerationLevel;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $primaryLanguage;
    /**
     * @var
     */
    public $replyTo;
    /**
     * @var
     */
    public $sendMessageDenyNotification;
    /**
     * @var
     */
    public $showInGroupDirectory;
    /**
     * @var
     */
    public $spamModerationLevel;
    /**
     * @var
     */
    public $whoCanInvite;
    /**
     * @var
     */
    public $whoCanJoin;
    /**
     * @var
     */
    public $whoCanPostMessage;
    /**
     * @var
     */
    public $whoCanViewGroup;
    /**
     * @var
     */
    public $whoCanViewMembership;

    /**
     * @param $allowExternalMembers
     */
    public function setAllowExternalMembers($allowExternalMembers)
    {
        $this->allowExternalMembers = $allowExternalMembers;
    }

    /**
     * @return mixed
     */
    public function getAllowExternalMembers()
    {
        return $this->allowExternalMembers;
    }

    /**
     * @param $allowGoogleCommunication
     */
    public function setAllowGoogleCommunication($allowGoogleCommunication)
    {
        $this->allowGoogleCommunication = $allowGoogleCommunication;
    }

    /**
     * @return mixed
     */
    public function getAllowGoogleCommunication()
    {
        return $this->allowGoogleCommunication;
    }

    /**
     * @param $allowWebPosting
     */
    public function setAllowWebPosting($allowWebPosting)
    {
        $this->allowWebPosting = $allowWebPosting;
    }

    /**
     * @return mixed
     */
    public function getAllowWebPosting()
    {
        return $this->allowWebPosting;
    }

    /**
     * @param $archiveOnly
     */
    public function setArchiveOnly($archiveOnly)
    {
        $this->archiveOnly = $archiveOnly;
    }

    /**
     * @return mixed
     */
    public function getArchiveOnly()
    {
        return $this->archiveOnly;
    }

    /**
     * @param $customReplyTo
     */
    public function setCustomReplyTo($customReplyTo)
    {
        $this->customReplyTo = $customReplyTo;
    }

    /**
     * @return mixed
     */
    public function getCustomReplyTo()
    {
        return $this->customReplyTo;
    }

    /**
     * @param $defaultMessageDenyNotificationText
     */
    public function setDefaultMessageDenyNotificationText($defaultMessageDenyNotificationText)
    {
        $this->defaultMessageDenyNotificationText = $defaultMessageDenyNotificationText;
    }

    /**
     * @return mixed
     */
    public function getDefaultMessageDenyNotificationText()
    {
        return $this->defaultMessageDenyNotificationText;
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
     * @param $includeInGlobalAddressList
     */
    public function setIncludeInGlobalAddressList($includeInGlobalAddressList)
    {
        $this->includeInGlobalAddressList = $includeInGlobalAddressList;
    }

    /**
     * @return mixed
     */
    public function getIncludeInGlobalAddressList()
    {
        return $this->includeInGlobalAddressList;
    }

    /**
     * @param $isArchived
     */
    public function setIsArchived($isArchived)
    {
        $this->isArchived = $isArchived;
    }

    /**
     * @return mixed
     */
    public function getIsArchived()
    {
        return $this->isArchived;
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
     * @param $maxMessageBytes
     */
    public function setMaxMessageBytes($maxMessageBytes)
    {
        $this->maxMessageBytes = $maxMessageBytes;
    }

    /**
     * @return mixed
     */
    public function getMaxMessageBytes()
    {
        return $this->maxMessageBytes;
    }

    /**
     * @param $membersCanPostAsTheGroup
     */
    public function setMembersCanPostAsTheGroup($membersCanPostAsTheGroup)
    {
        $this->membersCanPostAsTheGroup = $membersCanPostAsTheGroup;
    }

    /**
     * @return mixed
     */
    public function getMembersCanPostAsTheGroup()
    {
        return $this->membersCanPostAsTheGroup;
    }

    /**
     * @param $messageDisplayFont
     */
    public function setMessageDisplayFont($messageDisplayFont)
    {
        $this->messageDisplayFont = $messageDisplayFont;
    }

    /**
     * @return mixed
     */
    public function getMessageDisplayFont()
    {
        return $this->messageDisplayFont;
    }

    /**
     * @param $messageModerationLevel
     */
    public function setMessageModerationLevel($messageModerationLevel)
    {
        $this->messageModerationLevel = $messageModerationLevel;
    }

    /**
     * @return mixed
     */
    public function getMessageModerationLevel()
    {
        return $this->messageModerationLevel;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $primaryLanguage
     */
    public function setPrimaryLanguage($primaryLanguage)
    {
        $this->primaryLanguage = $primaryLanguage;
    }

    /**
     * @return mixed
     */
    public function getPrimaryLanguage()
    {
        return $this->primaryLanguage;
    }

    /**
     * @param $replyTo
     */
    public function setReplyTo($replyTo)
    {
        $this->replyTo = $replyTo;
    }

    /**
     * @return mixed
     */
    public function getReplyTo()
    {
        return $this->replyTo;
    }

    /**
     * @param $sendMessageDenyNotification
     */
    public function setSendMessageDenyNotification($sendMessageDenyNotification)
    {
        $this->sendMessageDenyNotification = $sendMessageDenyNotification;
    }

    /**
     * @return mixed
     */
    public function getSendMessageDenyNotification()
    {
        return $this->sendMessageDenyNotification;
    }

    /**
     * @param $showInGroupDirectory
     */
    public function setShowInGroupDirectory($showInGroupDirectory)
    {
        $this->showInGroupDirectory = $showInGroupDirectory;
    }

    /**
     * @return mixed
     */
    public function getShowInGroupDirectory()
    {
        return $this->showInGroupDirectory;
    }

    /**
     * @param $spamModerationLevel
     */
    public function setSpamModerationLevel($spamModerationLevel)
    {
        $this->spamModerationLevel = $spamModerationLevel;
    }

    /**
     * @return mixed
     */
    public function getSpamModerationLevel()
    {
        return $this->spamModerationLevel;
    }

    /**
     * @param $whoCanInvite
     */
    public function setWhoCanInvite($whoCanInvite)
    {
        $this->whoCanInvite = $whoCanInvite;
    }

    /**
     * @return mixed
     */
    public function getWhoCanInvite()
    {
        return $this->whoCanInvite;
    }

    /**
     * @param $whoCanJoin
     */
    public function setWhoCanJoin($whoCanJoin)
    {
        $this->whoCanJoin = $whoCanJoin;
    }

    /**
     * @return mixed
     */
    public function getWhoCanJoin()
    {
        return $this->whoCanJoin;
    }

    /**
     * @param $whoCanPostMessage
     */
    public function setWhoCanPostMessage($whoCanPostMessage)
    {
        $this->whoCanPostMessage = $whoCanPostMessage;
    }

    /**
     * @return mixed
     */
    public function getWhoCanPostMessage()
    {
        return $this->whoCanPostMessage;
    }

    /**
     * @param $whoCanViewGroup
     */
    public function setWhoCanViewGroup($whoCanViewGroup)
    {
        $this->whoCanViewGroup = $whoCanViewGroup;
    }

    /**
     * @return mixed
     */
    public function getWhoCanViewGroup()
    {
        return $this->whoCanViewGroup;
    }

    /**
     * @param $whoCanViewMembership
     */
    public function setWhoCanViewMembership($whoCanViewMembership)
    {
        $this->whoCanViewMembership = $whoCanViewMembership;
    }

    /**
     * @return mixed
     */
    public function getWhoCanViewMembership()
    {
        return $this->whoCanViewMembership;
    }
}
