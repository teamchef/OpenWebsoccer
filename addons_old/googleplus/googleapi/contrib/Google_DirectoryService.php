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
 * The "chromeosdevices" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_DirectoryService(...);
 *   $chromeosdevices = $adminService->chromeosdevices;
 *  </code>
 */
class Google_ChromeosdevicesServiceResource extends Google_ServiceResource
{


    /**
     * Retrieve Chrome OS Device (chromeosdevices.get)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param string $deviceId Immutable id of Chrome OS Device
     * @param array $optParams Optional parameters.
     * @return Google_ChromeOsDevice
     * @throws Google_Exception
     * @opt_param string projection Restrict information returned to a set of selected fields.
     */
    public function get($customerId, $deviceId, $optParams = [])
    {
        $params = ['customerId' => $customerId, 'deviceId' => $deviceId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_ChromeOsDevice($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieve all Chrome OS Devices of a customer (paginated) (chromeosdevices.list)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param array $optParams Optional parameters.
     * @return Google_ChromeOsDevices
     * @throws Google_Exception
     * @opt_param int maxResults Maximum number of results to return. Default is 100
     * @opt_param string orderBy Column to use for sorting results
     * @opt_param string pageToken Token to specify next page in the list
     * @opt_param string projection Restrict information returned to a set of selected fields.
     * @opt_param string query Search string in the format given at http://support.google.com/chromeos/a/bin/answer.py?hl=en=1698333
     * @opt_param string sortOrder Whether to return results in ascending or descending order. Only of use when orderBy is also used
     */
    public function listChromeosdevices($customerId, $optParams = [])
    {
        $params = ['customerId' => $customerId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_ChromeOsDevices($data);
        } else {
            return $data;
        }
    }

    /**
     * Update Chrome OS Device. This method supports patch semantics. (chromeosdevices.patch)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param string $deviceId Immutable id of Chrome OS Device
     * @param Google_ChromeOsDevice $postBody
     * @param array $optParams Optional parameters.
     * @return Google_ChromeOsDevice
     * @throws Google_Exception
     * @opt_param string projection Restrict information returned to a set of selected fields.
     */
    public function patch($customerId, $deviceId, Google_ChromeOsDevice $postBody, $optParams = [])
    {
        $params = ['customerId' => $customerId, 'deviceId' => $deviceId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_ChromeOsDevice($data);
        } else {
            return $data;
        }
    }

    /**
     * Update Chrome OS Device (chromeosdevices.update)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param string $deviceId Immutable id of Chrome OS Device
     * @param Google_ChromeOsDevice $postBody
     * @param array $optParams Optional parameters.
     * @return Google_ChromeOsDevice
     * @throws Google_Exception
     * @opt_param string projection Restrict information returned to a set of selected fields.
     */
    public function update($customerId, $deviceId, Google_ChromeOsDevice $postBody, $optParams = [])
    {
        $params = ['customerId' => $customerId, 'deviceId' => $deviceId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_ChromeOsDevice($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "groups" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_DirectoryService(...);
 *   $groups = $adminService->groups;
 *  </code>
 */
class Google_GroupsServiceResource extends Google_ServiceResource
{


    /**
     * Delete Group (groups.delete)
     *
     * @param string $groupKey Email or immutable Id of the group
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($groupKey, $optParams = [])
    {
        $params = ['groupKey' => $groupKey];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Retrieve Group (groups.get)
     *
     * @param string $groupKey Email or immutable Id of the group
     * @param array $optParams Optional parameters.
     * @return Google_Group
     * @throws Google_Exception
     */
    public function get($groupKey, $optParams = [])
    {
        $params = ['groupKey' => $groupKey];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Group($data);
        } else {
            return $data;
        }
    }

    /**
     * Create Group (groups.insert)
     *
     * @param Google_Group $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Group
     * @throws Google_Exception
     */
    public function insert(Google_Group $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Group($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieve all groups in a domain (paginated) (groups.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Groups
     * @throws Google_Exception
     * @opt_param string customer Immutable id of the Google Apps account. In case of multi-domain, to fetch all groups for a customer, fill this field instead of domain.
     * @opt_param string domain Name of the domain. Fill this field to get groups from only this domain. To return all groups in a multi-domain fill customer field instead.
     * @opt_param int maxResults Maximum number of results to return. Default is 200
     * @opt_param string pageToken Token to specify next page in the list
     * @opt_param string userKey Email or immutable Id of the user if only those groups are to be listed, the given user is a member of. If Id, it should match with id of user object
     */
    public function listGroups($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Groups($data);
        } else {
            return $data;
        }
    }

    /**
     * Update Group. This method supports patch semantics. (groups.patch)
     *
     * @param string $groupKey Email or immutable Id of the group. If Id, it should match with id of group object
     * @param Google_Group $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Group
     * @throws Google_Exception
     */
    public function patch($groupKey, Google_Group $postBody, $optParams = [])
    {
        $params = ['groupKey' => $groupKey, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Group($data);
        } else {
            return $data;
        }
    }

    /**
     * Update Group (groups.update)
     *
     * @param string $groupKey Email or immutable Id of the group. If Id, it should match with id of group object
     * @param Google_Group $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Group
     * @throws Google_Exception
     */
    public function update($groupKey, Google_Group $postBody, $optParams = [])
    {
        $params = ['groupKey' => $groupKey, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Group($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "aliases" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_DirectoryService(...);
 *   $aliases = $adminService->aliases;
 *  </code>
 */
class Google_GroupsAliasesServiceResource extends Google_ServiceResource
{


    /**
     * Remove a alias for the group (aliases.delete)
     *
     * @param string $groupKey Email or immutable Id of the group
     * @param string $alias The alias to be removed
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($groupKey, $alias, $optParams = [])
    {
        $params = ['groupKey' => $groupKey, 'alias' => $alias];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Add a alias for the group (aliases.insert)
     *
     * @param string $groupKey Email or immutable Id of the group
     * @param Google_Alias $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Alias
     * @throws Google_Exception
     */
    public function insert($groupKey, Google_Alias $postBody, $optParams = [])
    {
        $params = ['groupKey' => $groupKey, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Alias($data);
        } else {
            return $data;
        }
    }

    /**
     * List all aliases for a group (aliases.list)
     *
     * @param string $groupKey Email or immutable Id of the group
     * @param array $optParams Optional parameters.
     * @return Google_Aliases
     * @throws Google_Exception
     */
    public function listGroupsAliases($groupKey, $optParams = [])
    {
        $params = ['groupKey' => $groupKey];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Aliases($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "members" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_DirectoryService(...);
 *   $members = $adminService->members;
 *  </code>
 */
class Google_MembersServiceResource extends Google_ServiceResource
{


    /**
     * Remove membership. (members.delete)
     *
     * @param string $groupKey Email or immutable Id of the group
     * @param string $memberKey Email or immutable Id of the member
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($groupKey, $memberKey, $optParams = [])
    {
        $params = ['groupKey' => $groupKey, 'memberKey' => $memberKey];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Retrieve Group Member (members.get)
     *
     * @param string $groupKey Email or immutable Id of the group
     * @param string $memberKey Email or immutable Id of the member
     * @param array $optParams Optional parameters.
     * @return Google_Member
     * @throws Google_Exception
     */
    public function get($groupKey, $memberKey, $optParams = [])
    {
        $params = ['groupKey' => $groupKey, 'memberKey' => $memberKey];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Member($data);
        } else {
            return $data;
        }
    }

    /**
     * Add user to the specified group. (members.insert)
     *
     * @param string $groupKey Email or immutable Id of the group
     * @param Google_Member $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Member
     * @throws Google_Exception
     */
    public function insert($groupKey, Google_Member $postBody, $optParams = [])
    {
        $params = ['groupKey' => $groupKey, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Member($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieve all members in a group (paginated) (members.list)
     *
     * @param string $groupKey Email or immutable Id of the group
     * @param array $optParams Optional parameters.
     * @return Google_Members
     * @throws Google_Exception
     * @opt_param int maxResults Maximum number of results to return. Default is 200
     * @opt_param string pageToken Token to specify next page in the list
     * @opt_param string roles Comma separated role values to filter list results on.
     */
    public function listMembers($groupKey, $optParams = [])
    {
        $params = ['groupKey' => $groupKey];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Members($data);
        } else {
            return $data;
        }
    }

    /**
     * Update membership of a user in the specified group. This method supports patch semantics.
     * (members.patch)
     *
     * @param string $groupKey Email or immutable Id of the group. If Id, it should match with id of group object
     * @param string $memberKey Email or immutable Id of the user. If Id, it should match with id of member object
     * @param Google_Member $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Member
     * @throws Google_Exception
     */
    public function patch($groupKey, $memberKey, Google_Member $postBody, $optParams = [])
    {
        $params = ['groupKey' => $groupKey, 'memberKey' => $memberKey, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Member($data);
        } else {
            return $data;
        }
    }

    /**
     * Update membership of a user in the specified group. (members.update)
     *
     * @param string $groupKey Email or immutable Id of the group. If Id, it should match with id of group object
     * @param string $memberKey Email or immutable Id of the user. If Id, it should match with id of member object
     * @param Google_Member $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Member
     * @throws Google_Exception
     */
    public function update($groupKey, $memberKey, Google_Member $postBody, $optParams = [])
    {
        $params = ['groupKey' => $groupKey, 'memberKey' => $memberKey, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Member($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "mobiledevices" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_DirectoryService(...);
 *   $mobiledevices = $adminService->mobiledevices;
 *  </code>
 */
class Google_MobiledevicesServiceResource extends Google_ServiceResource
{


    /**
     * Take action on Mobile Device (mobiledevices.action)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param string $resourceId Immutable id of Mobile Device
     * @param Google_MobileDeviceAction $postBody
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function action($customerId, $resourceId, Google_MobileDeviceAction $postBody, $optParams = [])
    {
        $params = ['customerId' => $customerId, 'resourceId' => $resourceId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('action', [$params]);
        return $data;
    }

    /**
     * Delete Mobile Device (mobiledevices.delete)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param string $resourceId Immutable id of Mobile Device
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($customerId, $resourceId, $optParams = [])
    {
        $params = ['customerId' => $customerId, 'resourceId' => $resourceId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Retrieve Mobile Device (mobiledevices.get)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param string $resourceId Immutable id of Mobile Device
     * @param array $optParams Optional parameters.
     * @return Google_MobileDevice
     * @throws Google_Exception
     * @opt_param string projection Restrict information returned to a set of selected fields.
     */
    public function get($customerId, $resourceId, $optParams = [])
    {
        $params = ['customerId' => $customerId, 'resourceId' => $resourceId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_MobileDevice($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieve all Mobile Devices of a customer (paginated) (mobiledevices.list)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param array $optParams Optional parameters.
     * @return Google_MobileDevices
     * @throws Google_Exception
     * @opt_param int maxResults Maximum number of results to return. Default is 100
     * @opt_param string orderBy Column to use for sorting results
     * @opt_param string pageToken Token to specify next page in the list
     * @opt_param string projection Restrict information returned to a set of selected fields.
     * @opt_param string query Search string in the format given at http://support.google.com/a/bin/answer.py?hl=en=1408863#search
     * @opt_param string sortOrder Whether to return results in ascending or descending order. Only of use when orderBy is also used
     */
    public function listMobiledevices($customerId, $optParams = [])
    {
        $params = ['customerId' => $customerId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_MobileDevices($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "orgunits" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_DirectoryService(...);
 *   $orgunits = $adminService->orgunits;
 *  </code>
 */
class Google_OrgunitsServiceResource extends Google_ServiceResource
{


    /**
     * Remove Organization Unit (orgunits.delete)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param string $orgUnitPath Full path of the organization unit
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($customerId, $orgUnitPath, $optParams = [])
    {
        $params = ['customerId' => $customerId, 'orgUnitPath' => $orgUnitPath];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Retrieve Organization Unit (orgunits.get)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param string $orgUnitPath Full path of the organization unit
     * @param array $optParams Optional parameters.
     * @return Google_OrgUnit
     * @throws Google_Exception
     */
    public function get($customerId, $orgUnitPath, $optParams = [])
    {
        $params = ['customerId' => $customerId, 'orgUnitPath' => $orgUnitPath];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_OrgUnit($data);
        } else {
            return $data;
        }
    }

    /**
     * Add Organization Unit (orgunits.insert)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param Google_OrgUnit $postBody
     * @param array $optParams Optional parameters.
     * @return Google_OrgUnit
     * @throws Google_Exception
     */
    public function insert($customerId, Google_OrgUnit $postBody, $optParams = [])
    {
        $params = ['customerId' => $customerId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_OrgUnit($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieve all Organization Units (orgunits.list)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param array $optParams Optional parameters.
     * @return Google_OrgUnits
     * @throws Google_Exception
     * @opt_param string orgUnitPath the URL-encoded organization unit
     * @opt_param string type Whether to return all sub-organizations or just immediate children
     */
    public function listOrgunits($customerId, $optParams = [])
    {
        $params = ['customerId' => $customerId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_OrgUnits($data);
        } else {
            return $data;
        }
    }

    /**
     * Update Organization Unit. This method supports patch semantics. (orgunits.patch)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param string $orgUnitPath Full path of the organization unit
     * @param Google_OrgUnit $postBody
     * @param array $optParams Optional parameters.
     * @return Google_OrgUnit
     * @throws Google_Exception
     */
    public function patch($customerId, $orgUnitPath, Google_OrgUnit $postBody, $optParams = [])
    {
        $params = ['customerId' => $customerId, 'orgUnitPath' => $orgUnitPath, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_OrgUnit($data);
        } else {
            return $data;
        }
    }

    /**
     * Update Organization Unit (orgunits.update)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param string $orgUnitPath Full path of the organization unit
     * @param Google_OrgUnit $postBody
     * @param array $optParams Optional parameters.
     * @return Google_OrgUnit
     * @throws Google_Exception
     */
    public function update($customerId, $orgUnitPath, Google_OrgUnit $postBody, $optParams = [])
    {
        $params = ['customerId' => $customerId, 'orgUnitPath' => $orgUnitPath, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_OrgUnit($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "users" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_DirectoryService(...);
 *   $users = $adminService->users;
 *  </code>
 */
class Google_UsersServiceResource extends Google_ServiceResource
{


    /**
     * Delete user (users.delete)
     *
     * @param string $userKey Email or immutable Id of the user
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($userKey, $optParams = [])
    {
        $params = ['userKey' => $userKey];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * retrieve user (users.get)
     *
     * @param string $userKey Email or immutable Id of the user
     * @param array $optParams Optional parameters.
     * @return Google_User
     * @throws Google_Exception
     */
    public function get($userKey, $optParams = [])
    {
        $params = ['userKey' => $userKey];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_User($data);
        } else {
            return $data;
        }
    }

    /**
     * create user. (users.insert)
     *
     * @param Google_User $postBody
     * @param array $optParams Optional parameters.
     * @return Google_User
     * @throws Google_Exception
     */
    public function insert(Google_User $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_User($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieve either deleted users or all users in a domain (paginated) (users.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Users
     * @throws Google_Exception
     * @opt_param string customer Immutable id of the Google Apps account. In case of multi-domain, to fetch all users for a customer, fill this field instead of domain.
     * @opt_param string domain Name of the domain. Fill this field to get users from only this domain. To return all users in a multi-domain fill customer field instead.
     * @opt_param int maxResults Maximum number of results to return. Default is 100. Max allowed is 500
     * @opt_param string orderBy Column to use for sorting results
     * @opt_param string pageToken Token to specify next page in the list
     * @opt_param string query Query string for prefix matching searches. Should be of the form "key:value*" where key can be "email", "givenName" or "familyName". The asterisk is required, for example: "givenName:Ann*" is a valid query.
     * @opt_param string showDeleted If set to true retrieves the list of deleted users. Default is false
     * @opt_param string sortOrder Whether to return results in ascending or descending order.
     */
    public function listUsers($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Users($data);
        } else {
            return $data;
        }
    }

    /**
     * change admin status of a user (users.makeAdmin)
     *
     * @param string $userKey Email or immutable Id of the user as admin
     * @param Google_UserMakeAdmin $postBody
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function makeAdmin($userKey, Google_UserMakeAdmin $postBody, $optParams = [])
    {
        $params = ['userKey' => $userKey, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('makeAdmin', [$params]);
        return $data;
    }

    /**
     * update user. This method supports patch semantics. (users.patch)
     *
     * @param string $userKey Email or immutable Id of the user. If Id, it should match with id of user object
     * @param Google_User $postBody
     * @param array $optParams Optional parameters.
     * @return Google_User
     * @throws Google_Exception
     */
    public function patch($userKey, Google_User $postBody, $optParams = [])
    {
        $params = ['userKey' => $userKey, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_User($data);
        } else {
            return $data;
        }
    }

    /**
     * Undelete a deleted user (users.undelete)
     *
     * @param string $userKey The immutable id of the user
     * @param Google_UserUndelete $postBody
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function undelete($userKey, Google_UserUndelete $postBody, $optParams = [])
    {
        $params = ['userKey' => $userKey, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('undelete', [$params]);
        return $data;
    }

    /**
     * update user (users.update)
     *
     * @param string $userKey Email or immutable Id of the user. If Id, it should match with id of user object
     * @param Google_User $postBody
     * @param array $optParams Optional parameters.
     * @return Google_User
     * @throws Google_Exception
     */
    public function update($userKey, Google_User $postBody, $optParams = [])
    {
        $params = ['userKey' => $userKey, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_User($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "aliases" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_DirectoryService(...);
 *   $aliases = $adminService->aliases;
 *  </code>
 */
class Google_UsersAliasesServiceResource extends Google_ServiceResource
{


    /**
     * Remove a alias for the user (aliases.delete)
     *
     * @param string $userKey Email or immutable Id of the user
     * @param string $alias The alias to be removed
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($userKey, $alias, $optParams = [])
    {
        $params = ['userKey' => $userKey, 'alias' => $alias];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Add a alias for the user (aliases.insert)
     *
     * @param string $userKey Email or immutable Id of the user
     * @param Google_Alias $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Alias
     * @throws Google_Exception
     */
    public function insert($userKey, Google_Alias $postBody, $optParams = [])
    {
        $params = ['userKey' => $userKey, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Alias($data);
        } else {
            return $data;
        }
    }

    /**
     * List all aliases for a user (aliases.list)
     *
     * @param string $userKey Email or immutable Id of the user
     * @param array $optParams Optional parameters.
     * @return Google_Aliases
     * @throws Google_Exception
     */
    public function listUsersAliases($userKey, $optParams = [])
    {
        $params = ['userKey' => $userKey];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Aliases($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "photos" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_DirectoryService(...);
 *   $photos = $adminService->photos;
 *  </code>
 */
class Google_UsersPhotosServiceResource extends Google_ServiceResource
{


    /**
     * Remove photos for the user (photos.delete)
     *
     * @param string $userKey Email or immutable Id of the user
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($userKey, $optParams = [])
    {
        $params = ['userKey' => $userKey];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Retrieve photo of a user (photos.get)
     *
     * @param string $userKey Email or immutable Id of the user
     * @param array $optParams Optional parameters.
     * @return Google_UserPhoto
     * @throws Google_Exception
     */
    public function get($userKey, $optParams = [])
    {
        $params = ['userKey' => $userKey];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_UserPhoto($data);
        } else {
            return $data;
        }
    }

    /**
     * Add a photo for the user. This method supports patch semantics. (photos.patch)
     *
     * @param string $userKey Email or immutable Id of the user
     * @param Google_UserPhoto $postBody
     * @param array $optParams Optional parameters.
     * @return Google_UserPhoto
     * @throws Google_Exception
     */
    public function patch($userKey, Google_UserPhoto $postBody, $optParams = [])
    {
        $params = ['userKey' => $userKey, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_UserPhoto($data);
        } else {
            return $data;
        }
    }

    /**
     * Add a photo for the user (photos.update)
     *
     * @param string $userKey Email or immutable Id of the user
     * @param Google_UserPhoto $postBody
     * @param array $optParams Optional parameters.
     * @return Google_UserPhoto
     * @throws Google_Exception
     */
    public function update($userKey, Google_UserPhoto $postBody, $optParams = [])
    {
        $params = ['userKey' => $userKey, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_UserPhoto($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Directory (directory_v1).
 *
 * <p>
 * Apps Directory API lets you view and manage enterprise resources like user, groups, OrgUnit, devices.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/admin-sdk/directory/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_DirectoryService extends Google_Service
{
    /**
     * @var Google_ChromeosdevicesServiceResource
     */
    public $chromeosdevices;
    /**
     * @var Google_GroupsServiceResource
     */
    public $groups;
    /**
     * @var Google_GroupsAliasesServiceResource
     */
    public $groups_aliases;
    /**
     * @var Google_MembersServiceResource
     */
    public $members;
    /**
     * @var Google_MobiledevicesServiceResource
     */
    public $mobiledevices;
    /**
     * @var Google_OrgunitsServiceResource
     */
    public $orgunits;
    /**
     * @var Google_UsersServiceResource
     */
    public $users;
    /**
     * @var Google_UsersAliasesServiceResource
     */
    public $users_aliases;
    /**
     * @var Google_UsersPhotosServiceResource
     */
    public $users_photos;

    /**
     * Constructs the internal representation of the Directory service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'admin/directory/v1/';
        $this->version = 'directory_v1';
        $this->serviceName = 'admin';

        $client->addService($this->serviceName, $this->version);
        $this->chromeosdevices = new Google_ChromeosdevicesServiceResource($this, $this->serviceName, 'chromeosdevices', json_decode('{"methods": {"get": {"id": "directory.chromeosdevices.get", "path": "customer/{customerId}/devices/chromeos/{deviceId}", "httpMethod": "GET", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "deviceId": {"type": "string", "required": true, "location": "path"}, "projection": {"type": "string", "enum": ["BASIC", "FULL"], "location": "query"}}, "response": {"$ref": "ChromeOsDevice"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.device.chromeos", "https://www.googleapis.com/auth/admin.directory.device.chromeos.readonly"]}, "list": {"id": "directory.chromeosdevices.list", "path": "customer/{customerId}/devices/chromeos", "httpMethod": "GET", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "orderBy": {"type": "string", "enum": ["annotatedLocation", "annotatedUser", "lastSync", "notes", "serialNumber", "status", "supportEndDate"], "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "projection": {"type": "string", "enum": ["BASIC", "FULL"], "location": "query"}, "query": {"type": "string", "location": "query"}, "sortOrder": {"type": "string", "enum": ["ASCENDING", "DESCENDING"], "location": "query"}}, "response": {"$ref": "ChromeOsDevices"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.device.chromeos", "https://www.googleapis.com/auth/admin.directory.device.chromeos.readonly"]}, "patch": {"id": "directory.chromeosdevices.patch", "path": "customer/{customerId}/devices/chromeos/{deviceId}", "httpMethod": "PATCH", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "deviceId": {"type": "string", "required": true, "location": "path"}, "projection": {"type": "string", "enum": ["BASIC", "FULL"], "location": "query"}}, "request": {"$ref": "ChromeOsDevice"}, "response": {"$ref": "ChromeOsDevice"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.device.chromeos"]}, "update": {"id": "directory.chromeosdevices.update", "path": "customer/{customerId}/devices/chromeos/{deviceId}", "httpMethod": "PUT", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "deviceId": {"type": "string", "required": true, "location": "path"}, "projection": {"type": "string", "enum": ["BASIC", "FULL"], "location": "query"}}, "request": {"$ref": "ChromeOsDevice"}, "response": {"$ref": "ChromeOsDevice"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.device.chromeos"]}}}', true));
        $this->groups = new Google_GroupsServiceResource($this, $this->serviceName, 'groups', json_decode('{"methods": {"delete": {"id": "directory.groups.delete", "path": "groups/{groupKey}", "httpMethod": "DELETE", "parameters": {"groupKey": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group"]}, "get": {"id": "directory.groups.get", "path": "groups/{groupKey}", "httpMethod": "GET", "parameters": {"groupKey": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Group"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group", "https://www.googleapis.com/auth/admin.directory.group.readonly"]}, "insert": {"id": "directory.groups.insert", "path": "groups", "httpMethod": "POST", "request": {"$ref": "Group"}, "response": {"$ref": "Group"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group"]}, "list": {"id": "directory.groups.list", "path": "groups", "httpMethod": "GET", "parameters": {"customer": {"type": "string", "location": "query"}, "domain": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "userKey": {"type": "string", "location": "query"}}, "response": {"$ref": "Groups"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group", "https://www.googleapis.com/auth/admin.directory.group.readonly"]}, "patch": {"id": "directory.groups.patch", "path": "groups/{groupKey}", "httpMethod": "PATCH", "parameters": {"groupKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Group"}, "response": {"$ref": "Group"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group"]}, "update": {"id": "directory.groups.update", "path": "groups/{groupKey}", "httpMethod": "PUT", "parameters": {"groupKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Group"}, "response": {"$ref": "Group"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group"]}}}', true));
        $this->groups_aliases = new Google_GroupsAliasesServiceResource($this, $this->serviceName, 'aliases', json_decode('{"methods": {"delete": {"id": "directory.groups.aliases.delete", "path": "groups/{groupKey}/aliases/{alias}", "httpMethod": "DELETE", "parameters": {"alias": {"type": "string", "required": true, "location": "path"}, "groupKey": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group"]}, "insert": {"id": "directory.groups.aliases.insert", "path": "groups/{groupKey}/aliases", "httpMethod": "POST", "parameters": {"groupKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Alias"}, "response": {"$ref": "Alias"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group"]}, "list": {"id": "directory.groups.aliases.list", "path": "groups/{groupKey}/aliases", "httpMethod": "GET", "parameters": {"groupKey": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Aliases"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group", "https://www.googleapis.com/auth/admin.directory.group.readonly"]}}}', true));
        $this->members = new Google_MembersServiceResource($this, $this->serviceName, 'members', json_decode('{"methods": {"delete": {"id": "directory.members.delete", "path": "groups/{groupKey}/members/{memberKey}", "httpMethod": "DELETE", "parameters": {"groupKey": {"type": "string", "required": true, "location": "path"}, "memberKey": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group", "https://www.googleapis.com/auth/admin.directory.group.member"]}, "get": {"id": "directory.members.get", "path": "groups/{groupKey}/members/{memberKey}", "httpMethod": "GET", "parameters": {"groupKey": {"type": "string", "required": true, "location": "path"}, "memberKey": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Member"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group", "https://www.googleapis.com/auth/admin.directory.group.member", "https://www.googleapis.com/auth/admin.directory.group.member.readonly", "https://www.googleapis.com/auth/admin.directory.group.readonly"]}, "insert": {"id": "directory.members.insert", "path": "groups/{groupKey}/members", "httpMethod": "POST", "parameters": {"groupKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Member"}, "response": {"$ref": "Member"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group", "https://www.googleapis.com/auth/admin.directory.group.member"]}, "list": {"id": "directory.members.list", "path": "groups/{groupKey}/members", "httpMethod": "GET", "parameters": {"groupKey": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "roles": {"type": "string", "location": "query"}}, "response": {"$ref": "Members"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group", "https://www.googleapis.com/auth/admin.directory.group.member", "https://www.googleapis.com/auth/admin.directory.group.member.readonly", "https://www.googleapis.com/auth/admin.directory.group.readonly"]}, "patch": {"id": "directory.members.patch", "path": "groups/{groupKey}/members/{memberKey}", "httpMethod": "PATCH", "parameters": {"groupKey": {"type": "string", "required": true, "location": "path"}, "memberKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Member"}, "response": {"$ref": "Member"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group", "https://www.googleapis.com/auth/admin.directory.group.member"]}, "update": {"id": "directory.members.update", "path": "groups/{groupKey}/members/{memberKey}", "httpMethod": "PUT", "parameters": {"groupKey": {"type": "string", "required": true, "location": "path"}, "memberKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Member"}, "response": {"$ref": "Member"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group", "https://www.googleapis.com/auth/admin.directory.group.member"]}}}', true));
        $this->mobiledevices = new Google_MobiledevicesServiceResource($this, $this->serviceName, 'mobiledevices', json_decode('{"methods": {"action": {"id": "directory.mobiledevices.action", "path": "customer/{customerId}/devices/mobile/{resourceId}/action", "httpMethod": "POST", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "MobileDeviceAction"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.device.mobile", "https://www.googleapis.com/auth/admin.directory.device.mobile.action"]}, "delete": {"id": "directory.mobiledevices.delete", "path": "customer/{customerId}/devices/mobile/{resourceId}", "httpMethod": "DELETE", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "resourceId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/admin.directory.device.mobile"]}, "get": {"id": "directory.mobiledevices.get", "path": "customer/{customerId}/devices/mobile/{resourceId}", "httpMethod": "GET", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "projection": {"type": "string", "enum": ["BASIC", "FULL"], "location": "query"}, "resourceId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "MobileDevice"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.device.mobile", "https://www.googleapis.com/auth/admin.directory.device.mobile.action", "https://www.googleapis.com/auth/admin.directory.device.mobile.readonly"]}, "list": {"id": "directory.mobiledevices.list", "path": "customer/{customerId}/devices/mobile", "httpMethod": "GET", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "orderBy": {"type": "string", "enum": ["deviceId", "email", "lastSync", "model", "name", "os", "status", "type"], "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "projection": {"type": "string", "enum": ["BASIC", "FULL"], "location": "query"}, "query": {"type": "string", "location": "query"}, "sortOrder": {"type": "string", "enum": ["ASCENDING", "DESCENDING"], "location": "query"}}, "response": {"$ref": "MobileDevices"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.device.mobile", "https://www.googleapis.com/auth/admin.directory.device.mobile.action", "https://www.googleapis.com/auth/admin.directory.device.mobile.readonly"]}}}', true));
        $this->orgunits = new Google_OrgunitsServiceResource($this, $this->serviceName, 'orgunits', json_decode('{"methods": {"delete": {"id": "directory.orgunits.delete", "path": "customer/{customerId}/orgunits{/orgUnitPath*}", "httpMethod": "DELETE", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "orgUnitPath": {"type": "string", "required": true, "repeated": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/admin.directory.orgunit"]}, "get": {"id": "directory.orgunits.get", "path": "customer/{customerId}/orgunits{/orgUnitPath*}", "httpMethod": "GET", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "orgUnitPath": {"type": "string", "required": true, "repeated": true, "location": "path"}}, "response": {"$ref": "OrgUnit"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.orgunit", "https://www.googleapis.com/auth/admin.directory.orgunit.readonly"]}, "insert": {"id": "directory.orgunits.insert", "path": "customer/{customerId}/orgunits", "httpMethod": "POST", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "OrgUnit"}, "response": {"$ref": "OrgUnit"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.orgunit"]}, "list": {"id": "directory.orgunits.list", "path": "customer/{customerId}/orgunits", "httpMethod": "GET", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "orgUnitPath": {"type": "string", "default": "", "location": "query"}, "type": {"type": "string", "enum": ["all", "children"], "location": "query"}}, "response": {"$ref": "OrgUnits"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.orgunit", "https://www.googleapis.com/auth/admin.directory.orgunit.readonly"]}, "patch": {"id": "directory.orgunits.patch", "path": "customer/{customerId}/orgunits{/orgUnitPath*}", "httpMethod": "PATCH", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "orgUnitPath": {"type": "string", "required": true, "repeated": true, "location": "path"}}, "request": {"$ref": "OrgUnit"}, "response": {"$ref": "OrgUnit"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.orgunit"]}, "update": {"id": "directory.orgunits.update", "path": "customer/{customerId}/orgunits{/orgUnitPath*}", "httpMethod": "PUT", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "orgUnitPath": {"type": "string", "required": true, "repeated": true, "location": "path"}}, "request": {"$ref": "OrgUnit"}, "response": {"$ref": "OrgUnit"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.orgunit"]}}}', true));
        $this->users = new Google_UsersServiceResource($this, $this->serviceName, 'users', json_decode('{"methods": {"delete": {"id": "directory.users.delete", "path": "users/{userKey}", "httpMethod": "DELETE", "parameters": {"userKey": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user"]}, "get": {"id": "directory.users.get", "path": "users/{userKey}", "httpMethod": "GET", "parameters": {"userKey": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "User"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user", "https://www.googleapis.com/auth/admin.directory.user.readonly"]}, "insert": {"id": "directory.users.insert", "path": "users", "httpMethod": "POST", "request": {"$ref": "User"}, "response": {"$ref": "User"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user"]}, "list": {"id": "directory.users.list", "path": "users", "httpMethod": "GET", "parameters": {"customer": {"type": "string", "location": "query"}, "domain": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "1", "maximum": "500", "location": "query"}, "orderBy": {"type": "string", "enum": ["email", "familyName", "givenName"], "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "query": {"type": "string", "location": "query"}, "showDeleted": {"type": "string", "location": "query"}, "sortOrder": {"type": "string", "enum": ["ASCENDING", "DESCENDING"], "location": "query"}}, "response": {"$ref": "Users"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user", "https://www.googleapis.com/auth/admin.directory.user.readonly"]}, "makeAdmin": {"id": "directory.users.makeAdmin", "path": "users/{userKey}/makeAdmin", "httpMethod": "POST", "parameters": {"userKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "UserMakeAdmin"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user"]}, "patch": {"id": "directory.users.patch", "path": "users/{userKey}", "httpMethod": "PATCH", "parameters": {"userKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "User"}, "response": {"$ref": "User"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user"]}, "undelete": {"id": "directory.users.undelete", "path": "users/{userKey}/undelete", "httpMethod": "POST", "parameters": {"userKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "UserUndelete"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user"]}, "update": {"id": "directory.users.update", "path": "users/{userKey}", "httpMethod": "PUT", "parameters": {"userKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "User"}, "response": {"$ref": "User"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user"]}}}', true));
        $this->users_aliases = new Google_UsersAliasesServiceResource($this, $this->serviceName, 'aliases', json_decode('{"methods": {"delete": {"id": "directory.users.aliases.delete", "path": "users/{userKey}/aliases/{alias}", "httpMethod": "DELETE", "parameters": {"alias": {"type": "string", "required": true, "location": "path"}, "userKey": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user", "https://www.googleapis.com/auth/admin.directory.user.alias"]}, "insert": {"id": "directory.users.aliases.insert", "path": "users/{userKey}/aliases", "httpMethod": "POST", "parameters": {"userKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Alias"}, "response": {"$ref": "Alias"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user", "https://www.googleapis.com/auth/admin.directory.user.alias"]}, "list": {"id": "directory.users.aliases.list", "path": "users/{userKey}/aliases", "httpMethod": "GET", "parameters": {"userKey": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Aliases"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user", "https://www.googleapis.com/auth/admin.directory.user.alias", "https://www.googleapis.com/auth/admin.directory.user.alias.readonly", "https://www.googleapis.com/auth/admin.directory.user.readonly"]}}}', true));
        $this->users_photos = new Google_UsersPhotosServiceResource($this, $this->serviceName, 'photos', json_decode('{"methods": {"delete": {"id": "directory.users.photos.delete", "path": "users/{userKey}/photos/thumbnail", "httpMethod": "DELETE", "parameters": {"userKey": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user"]}, "get": {"id": "directory.users.photos.get", "path": "users/{userKey}/photos/thumbnail", "httpMethod": "GET", "parameters": {"userKey": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "UserPhoto"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user", "https://www.googleapis.com/auth/admin.directory.user.readonly"]}, "patch": {"id": "directory.users.photos.patch", "path": "users/{userKey}/photos/thumbnail", "httpMethod": "PATCH", "parameters": {"userKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "UserPhoto"}, "response": {"$ref": "UserPhoto"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user"]}, "update": {"id": "directory.users.photos.update", "path": "users/{userKey}/photos/thumbnail", "httpMethod": "PUT", "parameters": {"userKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "UserPhoto"}, "response": {"$ref": "UserPhoto"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user"]}}}', true));

    }
}


/**
 * Class Google_Alias
 */
class Google_Alias extends Google_Model
{
    /**
     * @var
     */
    public $alias;
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
    public $primaryEmail;

    /**
     * @param $alias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * @return mixed
     */
    public function getAlias()
    {
        return $this->alias;
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
     * @param $primaryEmail
     */
    public function setPrimaryEmail($primaryEmail)
    {
        $this->primaryEmail = $primaryEmail;
    }

    /**
     * @return mixed
     */
    public function getPrimaryEmail()
    {
        return $this->primaryEmail;
    }
}

/**
 * Class Google_Aliases
 */
class Google_Aliases extends Google_Model
{
    /**
     * @var string
     */
    protected $__aliasesType = 'Google_Alias';
    /**
     * @var string
     */
    protected $__aliasesDataType = 'array';
    /**
     * @var
     */
    public $aliases;
    /**
     * @var
     */
    public $kind;

    /**
     * @param $aliases
     * @throws Google_Exception
     */
    public function setAliases(/* array(Google_Alias) */
        $aliases)
    {
        $this->assertIsArray($aliases, 'Google_Alias', __METHOD__);
        $this->aliases = $aliases;
    }

    /**
     * @return mixed
     */
    public function getAliases()
    {
        return $this->aliases;
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
 * Class Google_ChromeOsDevice
 */
class Google_ChromeOsDevice extends Google_Model
{
    /**
     * @var
     */
    public $annotatedLocation;
    /**
     * @var
     */
    public $annotatedUser;
    /**
     * @var
     */
    public $bootMode;
    /**
     * @var
     */
    public $deviceId;
    /**
     * @var
     */
    public $firmwareVersion;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $lastEnrollmentTime;
    /**
     * @var
     */
    public $lastSync;
    /**
     * @var
     */
    public $macAddress;
    /**
     * @var
     */
    public $meid;
    /**
     * @var
     */
    public $model;
    /**
     * @var
     */
    public $notes;
    /**
     * @var
     */
    public $orderNumber;
    /**
     * @var
     */
    public $orgUnitPath;
    /**
     * @var
     */
    public $osVersion;
    /**
     * @var
     */
    public $platformVersion;
    /**
     * @var
     */
    public $serialNumber;
    /**
     * @var
     */
    public $status;
    /**
     * @var
     */
    public $supportEndDate;
    /**
     * @var
     */
    public $willAutoRenew;

    /**
     * @param $annotatedLocation
     */
    public function setAnnotatedLocation($annotatedLocation)
    {
        $this->annotatedLocation = $annotatedLocation;
    }

    /**
     * @return mixed
     */
    public function getAnnotatedLocation()
    {
        return $this->annotatedLocation;
    }

    /**
     * @param $annotatedUser
     */
    public function setAnnotatedUser($annotatedUser)
    {
        $this->annotatedUser = $annotatedUser;
    }

    /**
     * @return mixed
     */
    public function getAnnotatedUser()
    {
        return $this->annotatedUser;
    }

    /**
     * @param $bootMode
     */
    public function setBootMode($bootMode)
    {
        $this->bootMode = $bootMode;
    }

    /**
     * @return mixed
     */
    public function getBootMode()
    {
        return $this->bootMode;
    }

    /**
     * @param $deviceId
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;
    }

    /**
     * @return mixed
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * @param $firmwareVersion
     */
    public function setFirmwareVersion($firmwareVersion)
    {
        $this->firmwareVersion = $firmwareVersion;
    }

    /**
     * @return mixed
     */
    public function getFirmwareVersion()
    {
        return $this->firmwareVersion;
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
     * @param $lastEnrollmentTime
     */
    public function setLastEnrollmentTime($lastEnrollmentTime)
    {
        $this->lastEnrollmentTime = $lastEnrollmentTime;
    }

    /**
     * @return mixed
     */
    public function getLastEnrollmentTime()
    {
        return $this->lastEnrollmentTime;
    }

    /**
     * @param $lastSync
     */
    public function setLastSync($lastSync)
    {
        $this->lastSync = $lastSync;
    }

    /**
     * @return mixed
     */
    public function getLastSync()
    {
        return $this->lastSync;
    }

    /**
     * @param $macAddress
     */
    public function setMacAddress($macAddress)
    {
        $this->macAddress = $macAddress;
    }

    /**
     * @return mixed
     */
    public function getMacAddress()
    {
        return $this->macAddress;
    }

    /**
     * @param $meid
     */
    public function setMeid($meid)
    {
        $this->meid = $meid;
    }

    /**
     * @return mixed
     */
    public function getMeid()
    {
        return $this->meid;
    }

    /**
     * @param $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * @return mixed
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param $orderNumber
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
    }

    /**
     * @return mixed
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @param $orgUnitPath
     */
    public function setOrgUnitPath($orgUnitPath)
    {
        $this->orgUnitPath = $orgUnitPath;
    }

    /**
     * @return mixed
     */
    public function getOrgUnitPath()
    {
        return $this->orgUnitPath;
    }

    /**
     * @param $osVersion
     */
    public function setOsVersion($osVersion)
    {
        $this->osVersion = $osVersion;
    }

    /**
     * @return mixed
     */
    public function getOsVersion()
    {
        return $this->osVersion;
    }

    /**
     * @param $platformVersion
     */
    public function setPlatformVersion($platformVersion)
    {
        $this->platformVersion = $platformVersion;
    }

    /**
     * @return mixed
     */
    public function getPlatformVersion()
    {
        return $this->platformVersion;
    }

    /**
     * @param $serialNumber
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
    }

    /**
     * @return mixed
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
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
     * @param $supportEndDate
     */
    public function setSupportEndDate($supportEndDate)
    {
        $this->supportEndDate = $supportEndDate;
    }

    /**
     * @return mixed
     */
    public function getSupportEndDate()
    {
        return $this->supportEndDate;
    }

    /**
     * @param $willAutoRenew
     */
    public function setWillAutoRenew($willAutoRenew)
    {
        $this->willAutoRenew = $willAutoRenew;
    }

    /**
     * @return mixed
     */
    public function getWillAutoRenew()
    {
        return $this->willAutoRenew;
    }
}

/**
 * Class Google_ChromeOsDevices
 */
class Google_ChromeOsDevices extends Google_Model
{
    /**
     * @var string
     */
    protected $__chromeosdevicesType = 'Google_ChromeOsDevice';
    /**
     * @var string
     */
    protected $__chromeosdevicesDataType = 'array';
    /**
     * @var
     */
    public $chromeosdevices;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $nextPageToken;

    /**
     * @param $chromeosdevices
     * @throws Google_Exception
     */
    public function setChromeosdevices(/* array(Google_ChromeOsDevice) */
        $chromeosdevices)
    {
        $this->assertIsArray($chromeosdevices, 'Google_ChromeOsDevice', __METHOD__);
        $this->chromeosdevices = $chromeosdevices;
    }

    /**
     * @return mixed
     */
    public function getChromeosdevices()
    {
        return $this->chromeosdevices;
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
 * Class Google_Group
 */
class Google_Group extends Google_Model
{
    /**
     * @var
     */
    public $adminCreated;
    /**
     * @var
     */
    public $aliases;
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
    public $id;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $nonEditableAliases;

    /**
     * @param $adminCreated
     */
    public function setAdminCreated($adminCreated)
    {
        $this->adminCreated = $adminCreated;
    }

    /**
     * @return mixed
     */
    public function getAdminCreated()
    {
        return $this->adminCreated;
    }

    /**
     * @param $aliases
     * @throws Google_Exception
     */
    public function setAliases(/* array(Google_string) */
        $aliases)
    {
        $this->assertIsArray($aliases, 'Google_string', __METHOD__);
        $this->aliases = $aliases;
    }

    /**
     * @return mixed
     */
    public function getAliases()
    {
        return $this->aliases;
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
     * @param $nonEditableAliases
     * @throws Google_Exception
     */
    public function setNonEditableAliases(/* array(Google_string) */
        $nonEditableAliases)
    {
        $this->assertIsArray($nonEditableAliases, 'Google_string', __METHOD__);
        $this->nonEditableAliases = $nonEditableAliases;
    }

    /**
     * @return mixed
     */
    public function getNonEditableAliases()
    {
        return $this->nonEditableAliases;
    }
}

/**
 * Class Google_Groups
 */
class Google_Groups extends Google_Model
{
    /**
     * @var string
     */
    protected $__groupsType = 'Google_Group';
    /**
     * @var string
     */
    protected $__groupsDataType = 'array';
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
    public $nextPageToken;

    /**
     * @param $groups
     * @throws Google_Exception
     */
    public function setGroups(/* array(Google_Group) */
        $groups)
    {
        $this->assertIsArray($groups, 'Google_Group', __METHOD__);
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
 * Class Google_Member
 */
class Google_Member extends Google_Model
{
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
    public $kind;
    /**
     * @var
     */
    public $role;
    /**
     * @var
     */
    public $type;

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
 * Class Google_Members
 */
class Google_Members extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__membersType = 'Google_Member';
    /**
     * @var string
     */
    protected $__membersDataType = 'array';
    /**
     * @var
     */
    public $members;
    /**
     * @var
     */
    public $nextPageToken;

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
     * @param $members
     * @throws Google_Exception
     */
    public function setMembers(/* array(Google_Member) */
        $members)
    {
        $this->assertIsArray($members, 'Google_Member', __METHOD__);
        $this->members = $members;
    }

    /**
     * @return mixed
     */
    public function getMembers()
    {
        return $this->members;
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
 * Class Google_MobileDevice
 */
class Google_MobileDevice extends Google_Model
{
    /**
     * @var string
     */
    protected $__applicationsType = 'Google_MobileDeviceApplications';
    /**
     * @var string
     */
    protected $__applicationsDataType = 'array';
    /**
     * @var
     */
    public $applications;
    /**
     * @var
     */
    public $deviceId;
    /**
     * @var
     */
    public $email;
    /**
     * @var
     */
    public $firstSync;
    /**
     * @var
     */
    public $hardwareId;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $lastSync;
    /**
     * @var
     */
    public $model;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $os;
    /**
     * @var
     */
    public $resourceId;
    /**
     * @var
     */
    public $status;
    /**
     * @var
     */
    public $type;
    /**
     * @var
     */
    public $userAgent;

    /**
     * @param $applications
     * @throws Google_Exception
     */
    public function setApplications(/* array(Google_MobileDeviceApplications) */
        $applications)
    {
        $this->assertIsArray($applications, 'Google_MobileDeviceApplications', __METHOD__);
        $this->applications = $applications;
    }

    /**
     * @return mixed
     */
    public function getApplications()
    {
        return $this->applications;
    }

    /**
     * @param $deviceId
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;
    }

    /**
     * @return mixed
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * @param $email
     * @throws Google_Exception
     */
    public function setEmail(/* array(Google_string) */
        $email)
    {
        $this->assertIsArray($email, 'Google_string', __METHOD__);
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
     * @param $firstSync
     */
    public function setFirstSync($firstSync)
    {
        $this->firstSync = $firstSync;
    }

    /**
     * @return mixed
     */
    public function getFirstSync()
    {
        return $this->firstSync;
    }

    /**
     * @param $hardwareId
     */
    public function setHardwareId($hardwareId)
    {
        $this->hardwareId = $hardwareId;
    }

    /**
     * @return mixed
     */
    public function getHardwareId()
    {
        return $this->hardwareId;
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
     * @param $lastSync
     */
    public function setLastSync($lastSync)
    {
        $this->lastSync = $lastSync;
    }

    /**
     * @return mixed
     */
    public function getLastSync()
    {
        return $this->lastSync;
    }

    /**
     * @param $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param $name
     * @throws Google_Exception
     */
    public function setName(/* array(Google_string) */
        $name)
    {
        $this->assertIsArray($name, 'Google_string', __METHOD__);
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $os
     */
    public function setOs($os)
    {
        $this->os = $os;
    }

    /**
     * @return mixed
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * @param $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;
    }

    /**
     * @return mixed
     */
    public function getResourceId()
    {
        return $this->resourceId;
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
     * @param $userAgent
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
    }

    /**
     * @return mixed
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }
}

/**
 * Class Google_MobileDeviceAction
 */
class Google_MobileDeviceAction extends Google_Model
{
    /**
     * @var
     */
    public $action;

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
}

/**
 * Class Google_MobileDeviceApplications
 */
class Google_MobileDeviceApplications extends Google_Model
{
    /**
     * @var
     */
    public $displayName;
    /**
     * @var
     */
    public $packageName;
    /**
     * @var
     */
    public $permission;
    /**
     * @var
     */
    public $versionCode;
    /**
     * @var
     */
    public $versionName;

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
     * @param $packageName
     */
    public function setPackageName($packageName)
    {
        $this->packageName = $packageName;
    }

    /**
     * @return mixed
     */
    public function getPackageName()
    {
        return $this->packageName;
    }

    /**
     * @param $permission
     * @throws Google_Exception
     */
    public function setPermission(/* array(Google_string) */
        $permission)
    {
        $this->assertIsArray($permission, 'Google_string', __METHOD__);
        $this->permission = $permission;
    }

    /**
     * @return mixed
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * @param $versionCode
     */
    public function setVersionCode($versionCode)
    {
        $this->versionCode = $versionCode;
    }

    /**
     * @return mixed
     */
    public function getVersionCode()
    {
        return $this->versionCode;
    }

    /**
     * @param $versionName
     */
    public function setVersionName($versionName)
    {
        $this->versionName = $versionName;
    }

    /**
     * @return mixed
     */
    public function getVersionName()
    {
        return $this->versionName;
    }
}

/**
 * Class Google_MobileDevices
 */
class Google_MobileDevices extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__mobiledevicesType = 'Google_MobileDevice';
    /**
     * @var string
     */
    protected $__mobiledevicesDataType = 'array';
    /**
     * @var
     */
    public $mobiledevices;
    /**
     * @var
     */
    public $nextPageToken;

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
     * @param $mobiledevices
     * @throws Google_Exception
     */
    public function setMobiledevices(/* array(Google_MobileDevice) */
        $mobiledevices)
    {
        $this->assertIsArray($mobiledevices, 'Google_MobileDevice', __METHOD__);
        $this->mobiledevices = $mobiledevices;
    }

    /**
     * @return mixed
     */
    public function getMobiledevices()
    {
        return $this->mobiledevices;
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
 * Class Google_OrgUnit
 */
class Google_OrgUnit extends Google_Model
{
    /**
     * @var
     */
    public $blockInheritance;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $orgUnitPath;
    /**
     * @var
     */
    public $parentOrgUnitPath;

    /**
     * @param $blockInheritance
     */
    public function setBlockInheritance($blockInheritance)
    {
        $this->blockInheritance = $blockInheritance;
    }

    /**
     * @return mixed
     */
    public function getBlockInheritance()
    {
        return $this->blockInheritance;
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
     * @param $orgUnitPath
     */
    public function setOrgUnitPath($orgUnitPath)
    {
        $this->orgUnitPath = $orgUnitPath;
    }

    /**
     * @return mixed
     */
    public function getOrgUnitPath()
    {
        return $this->orgUnitPath;
    }

    /**
     * @param $parentOrgUnitPath
     */
    public function setParentOrgUnitPath($parentOrgUnitPath)
    {
        $this->parentOrgUnitPath = $parentOrgUnitPath;
    }

    /**
     * @return mixed
     */
    public function getParentOrgUnitPath()
    {
        return $this->parentOrgUnitPath;
    }
}

/**
 * Class Google_OrgUnits
 */
class Google_OrgUnits extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__organizationUnitsType = 'Google_OrgUnit';
    /**
     * @var string
     */
    protected $__organizationUnitsDataType = 'array';
    /**
     * @var
     */
    public $organizationUnits;

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
     * @param $organizationUnits
     * @throws Google_Exception
     */
    public function setOrganizationUnits(/* array(Google_OrgUnit) */
        $organizationUnits)
    {
        $this->assertIsArray($organizationUnits, 'Google_OrgUnit', __METHOD__);
        $this->organizationUnits = $organizationUnits;
    }

    /**
     * @return mixed
     */
    public function getOrganizationUnits()
    {
        return $this->organizationUnits;
    }
}

/**
 * Class Google_User
 */
class Google_User extends Google_Model
{
    /**
     * @var string
     */
    protected $__addressesType = 'Google_UserAddress';
    /**
     * @var string
     */
    protected $__addressesDataType = 'array';
    /**
     * @var
     */
    public $addresses;
    /**
     * @var
     */
    public $agreedToTerms;
    /**
     * @var
     */
    public $aliases;
    /**
     * @var
     */
    public $changePasswordAtNextLogin;
    /**
     * @var
     */
    public $creationTime;
    /**
     * @var
     */
    public $customerId;
    /**
     * @var string
     */
    protected $__emailsType = 'Google_UserEmail';
    /**
     * @var string
     */
    protected $__emailsDataType = 'array';
    /**
     * @var
     */
    public $emails;
    /**
     * @var string
     */
    protected $__externalIdsType = 'Google_UserExternalId';
    /**
     * @var string
     */
    protected $__externalIdsDataType = 'array';
    /**
     * @var
     */
    public $externalIds;
    /**
     * @var
     */
    public $hashFunction;
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__imsType = 'Google_UserIm';
    /**
     * @var string
     */
    protected $__imsDataType = 'array';
    /**
     * @var
     */
    public $ims;
    /**
     * @var
     */
    public $includeInGlobalAddressList;
    /**
     * @var
     */
    public $ipWhitelisted;
    /**
     * @var
     */
    public $isAdmin;
    /**
     * @var
     */
    public $isDelegatedAdmin;
    /**
     * @var
     */
    public $isMailboxSetup;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $lastLoginTime;
    /**
     * @var string
     */
    protected $__nameType = 'Google_UserName';
    /**
     * @var string
     */
    protected $__nameDataType = '';
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $nonEditableAliases;
    /**
     * @var
     */
    public $orgUnitPath;
    /**
     * @var string
     */
    protected $__organizationsType = 'Google_UserOrganization';
    /**
     * @var string
     */
    protected $__organizationsDataType = 'array';
    /**
     * @var
     */
    public $organizations;
    /**
     * @var
     */
    public $password;
    /**
     * @var string
     */
    protected $__phonesType = 'Google_UserPhone';
    /**
     * @var string
     */
    protected $__phonesDataType = 'array';
    /**
     * @var
     */
    public $phones;
    /**
     * @var
     */
    public $primaryEmail;
    /**
     * @var string
     */
    protected $__relationsType = 'Google_UserRelation';
    /**
     * @var string
     */
    protected $__relationsDataType = 'array';
    /**
     * @var
     */
    public $relations;
    /**
     * @var
     */
    public $suspended;
    /**
     * @var
     */
    public $suspensionReason;
    /**
     * @var
     */
    public $thumbnailPhotoUrl;

    /**
     * @param $addresses
     * @throws Google_Exception
     */
    public function setAddresses(/* array(Google_UserAddress) */
        $addresses)
    {
        $this->assertIsArray($addresses, 'Google_UserAddress', __METHOD__);
        $this->addresses = $addresses;
    }

    /**
     * @return mixed
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @param $agreedToTerms
     */
    public function setAgreedToTerms($agreedToTerms)
    {
        $this->agreedToTerms = $agreedToTerms;
    }

    /**
     * @return mixed
     */
    public function getAgreedToTerms()
    {
        return $this->agreedToTerms;
    }

    /**
     * @param $aliases
     * @throws Google_Exception
     */
    public function setAliases(/* array(Google_string) */
        $aliases)
    {
        $this->assertIsArray($aliases, 'Google_string', __METHOD__);
        $this->aliases = $aliases;
    }

    /**
     * @return mixed
     */
    public function getAliases()
    {
        return $this->aliases;
    }

    /**
     * @param $changePasswordAtNextLogin
     */
    public function setChangePasswordAtNextLogin($changePasswordAtNextLogin)
    {
        $this->changePasswordAtNextLogin = $changePasswordAtNextLogin;
    }

    /**
     * @return mixed
     */
    public function getChangePasswordAtNextLogin()
    {
        return $this->changePasswordAtNextLogin;
    }

    /**
     * @param $creationTime
     */
    public function setCreationTime($creationTime)
    {
        $this->creationTime = $creationTime;
    }

    /**
     * @return mixed
     */
    public function getCreationTime()
    {
        return $this->creationTime;
    }

    /**
     * @param $customerId
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }

    /**
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param $emails
     * @throws Google_Exception
     */
    public function setEmails(/* array(Google_UserEmail) */
        $emails)
    {
        $this->assertIsArray($emails, 'Google_UserEmail', __METHOD__);
        $this->emails = $emails;
    }

    /**
     * @return mixed
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * @param $externalIds
     * @throws Google_Exception
     */
    public function setExternalIds(/* array(Google_UserExternalId) */
        $externalIds)
    {
        $this->assertIsArray($externalIds, 'Google_UserExternalId', __METHOD__);
        $this->externalIds = $externalIds;
    }

    /**
     * @return mixed
     */
    public function getExternalIds()
    {
        return $this->externalIds;
    }

    /**
     * @param $hashFunction
     */
    public function setHashFunction($hashFunction)
    {
        $this->hashFunction = $hashFunction;
    }

    /**
     * @return mixed
     */
    public function getHashFunction()
    {
        return $this->hashFunction;
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
     * @param $ims
     * @throws Google_Exception
     */
    public function setIms(/* array(Google_UserIm) */
        $ims)
    {
        $this->assertIsArray($ims, 'Google_UserIm', __METHOD__);
        $this->ims = $ims;
    }

    /**
     * @return mixed
     */
    public function getIms()
    {
        return $this->ims;
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
     * @param $ipWhitelisted
     */
    public function setIpWhitelisted($ipWhitelisted)
    {
        $this->ipWhitelisted = $ipWhitelisted;
    }

    /**
     * @return mixed
     */
    public function getIpWhitelisted()
    {
        return $this->ipWhitelisted;
    }

    /**
     * @param $isAdmin
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;
    }

    /**
     * @return mixed
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * @param $isDelegatedAdmin
     */
    public function setIsDelegatedAdmin($isDelegatedAdmin)
    {
        $this->isDelegatedAdmin = $isDelegatedAdmin;
    }

    /**
     * @return mixed
     */
    public function getIsDelegatedAdmin()
    {
        return $this->isDelegatedAdmin;
    }

    /**
     * @param $isMailboxSetup
     */
    public function setIsMailboxSetup($isMailboxSetup)
    {
        $this->isMailboxSetup = $isMailboxSetup;
    }

    /**
     * @return mixed
     */
    public function getIsMailboxSetup()
    {
        return $this->isMailboxSetup;
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
     * @param $lastLoginTime
     */
    public function setLastLoginTime($lastLoginTime)
    {
        $this->lastLoginTime = $lastLoginTime;
    }

    /**
     * @return mixed
     */
    public function getLastLoginTime()
    {
        return $this->lastLoginTime;
    }

    /**
     * @param Google_UserName $name
     */
    public function setName(Google_UserName $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $nonEditableAliases
     * @throws Google_Exception
     */
    public function setNonEditableAliases(/* array(Google_string) */
        $nonEditableAliases)
    {
        $this->assertIsArray($nonEditableAliases, 'Google_string', __METHOD__);
        $this->nonEditableAliases = $nonEditableAliases;
    }

    /**
     * @return mixed
     */
    public function getNonEditableAliases()
    {
        return $this->nonEditableAliases;
    }

    /**
     * @param $orgUnitPath
     */
    public function setOrgUnitPath($orgUnitPath)
    {
        $this->orgUnitPath = $orgUnitPath;
    }

    /**
     * @return mixed
     */
    public function getOrgUnitPath()
    {
        return $this->orgUnitPath;
    }

    /**
     * @param $organizations
     * @throws Google_Exception
     */
    public function setOrganizations(/* array(Google_UserOrganization) */
        $organizations)
    {
        $this->assertIsArray($organizations, 'Google_UserOrganization', __METHOD__);
        $this->organizations = $organizations;
    }

    /**
     * @return mixed
     */
    public function getOrganizations()
    {
        return $this->organizations;
    }

    /**
     * @param $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param $phones
     * @throws Google_Exception
     */
    public function setPhones(/* array(Google_UserPhone) */
        $phones)
    {
        $this->assertIsArray($phones, 'Google_UserPhone', __METHOD__);
        $this->phones = $phones;
    }

    /**
     * @return mixed
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * @param $primaryEmail
     */
    public function setPrimaryEmail($primaryEmail)
    {
        $this->primaryEmail = $primaryEmail;
    }

    /**
     * @return mixed
     */
    public function getPrimaryEmail()
    {
        return $this->primaryEmail;
    }

    /**
     * @param $relations
     * @throws Google_Exception
     */
    public function setRelations(/* array(Google_UserRelation) */
        $relations)
    {
        $this->assertIsArray($relations, 'Google_UserRelation', __METHOD__);
        $this->relations = $relations;
    }

    /**
     * @return mixed
     */
    public function getRelations()
    {
        return $this->relations;
    }

    /**
     * @param $suspended
     */
    public function setSuspended($suspended)
    {
        $this->suspended = $suspended;
    }

    /**
     * @return mixed
     */
    public function getSuspended()
    {
        return $this->suspended;
    }

    /**
     * @param $suspensionReason
     */
    public function setSuspensionReason($suspensionReason)
    {
        $this->suspensionReason = $suspensionReason;
    }

    /**
     * @return mixed
     */
    public function getSuspensionReason()
    {
        return $this->suspensionReason;
    }

    /**
     * @param $thumbnailPhotoUrl
     */
    public function setThumbnailPhotoUrl($thumbnailPhotoUrl)
    {
        $this->thumbnailPhotoUrl = $thumbnailPhotoUrl;
    }

    /**
     * @return mixed
     */
    public function getThumbnailPhotoUrl()
    {
        return $this->thumbnailPhotoUrl;
    }
}

/**
 * Class Google_UserAddress
 */
class Google_UserAddress extends Google_Model
{
    /**
     * @var
     */
    public $country;
    /**
     * @var
     */
    public $countryCode;
    /**
     * @var
     */
    public $customType;
    /**
     * @var
     */
    public $extendedAddress;
    /**
     * @var
     */
    public $formatted;
    /**
     * @var
     */
    public $locality;
    /**
     * @var
     */
    public $poBox;
    /**
     * @var
     */
    public $postalCode;
    /**
     * @var
     */
    public $primary;
    /**
     * @var
     */
    public $region;
    /**
     * @var
     */
    public $sourceIsStructured;
    /**
     * @var
     */
    public $streetAddress;
    /**
     * @var
     */
    public $type;

    /**
     * @param $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param $customType
     */
    public function setCustomType($customType)
    {
        $this->customType = $customType;
    }

    /**
     * @return mixed
     */
    public function getCustomType()
    {
        return $this->customType;
    }

    /**
     * @param $extendedAddress
     */
    public function setExtendedAddress($extendedAddress)
    {
        $this->extendedAddress = $extendedAddress;
    }

    /**
     * @return mixed
     */
    public function getExtendedAddress()
    {
        return $this->extendedAddress;
    }

    /**
     * @param $formatted
     */
    public function setFormatted($formatted)
    {
        $this->formatted = $formatted;
    }

    /**
     * @return mixed
     */
    public function getFormatted()
    {
        return $this->formatted;
    }

    /**
     * @param $locality
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;
    }

    /**
     * @return mixed
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * @param $poBox
     */
    public function setPoBox($poBox)
    {
        $this->poBox = $poBox;
    }

    /**
     * @return mixed
     */
    public function getPoBox()
    {
        return $this->poBox;
    }

    /**
     * @param $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
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
     * @param $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param $sourceIsStructured
     */
    public function setSourceIsStructured($sourceIsStructured)
    {
        $this->sourceIsStructured = $sourceIsStructured;
    }

    /**
     * @return mixed
     */
    public function getSourceIsStructured()
    {
        return $this->sourceIsStructured;
    }

    /**
     * @param $streetAddress
     */
    public function setStreetAddress($streetAddress)
    {
        $this->streetAddress = $streetAddress;
    }

    /**
     * @return mixed
     */
    public function getStreetAddress()
    {
        return $this->streetAddress;
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
 * Class Google_UserEmail
 */
class Google_UserEmail extends Google_Model
{
    /**
     * @var
     */
    public $address;
    /**
     * @var
     */
    public $customType;
    /**
     * @var
     */
    public $primary;
    /**
     * @var
     */
    public $type;

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
     * @param $customType
     */
    public function setCustomType($customType)
    {
        $this->customType = $customType;
    }

    /**
     * @return mixed
     */
    public function getCustomType()
    {
        return $this->customType;
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
 * Class Google_UserExternalId
 */
class Google_UserExternalId extends Google_Model
{
    /**
     * @var
     */
    public $customType;
    /**
     * @var
     */
    public $type;
    /**
     * @var
     */
    public $value;

    /**
     * @param $customType
     */
    public function setCustomType($customType)
    {
        $this->customType = $customType;
    }

    /**
     * @return mixed
     */
    public function getCustomType()
    {
        return $this->customType;
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
 * Class Google_UserIm
 */
class Google_UserIm extends Google_Model
{
    /**
     * @var
     */
    public $customProtocol;
    /**
     * @var
     */
    public $customType;
    /**
     * @var
     */
    public $im;
    /**
     * @var
     */
    public $primary;
    /**
     * @var
     */
    public $protocol;
    /**
     * @var
     */
    public $type;

    /**
     * @param $customProtocol
     */
    public function setCustomProtocol($customProtocol)
    {
        $this->customProtocol = $customProtocol;
    }

    /**
     * @return mixed
     */
    public function getCustomProtocol()
    {
        return $this->customProtocol;
    }

    /**
     * @param $customType
     */
    public function setCustomType($customType)
    {
        $this->customType = $customType;
    }

    /**
     * @return mixed
     */
    public function getCustomType()
    {
        return $this->customType;
    }

    /**
     * @param $im
     */
    public function setIm($im)
    {
        $this->im = $im;
    }

    /**
     * @return mixed
     */
    public function getIm()
    {
        return $this->im;
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
     * @param $protocol
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
    }

    /**
     * @return mixed
     */
    public function getProtocol()
    {
        return $this->protocol;
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
 * Class Google_UserMakeAdmin
 */
class Google_UserMakeAdmin extends Google_Model
{
    /**
     * @var
     */
    public $status;

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
}

/**
 * Class Google_UserName
 */
class Google_UserName extends Google_Model
{
    /**
     * @var
     */
    public $familyName;
    /**
     * @var
     */
    public $fullName;
    /**
     * @var
     */
    public $givenName;

    /**
     * @param $familyName
     */
    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
    }

    /**
     * @return mixed
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * @param $fullName
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param $givenName
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }

    /**
     * @return mixed
     */
    public function getGivenName()
    {
        return $this->givenName;
    }
}

/**
 * Class Google_UserOrganization
 */
class Google_UserOrganization extends Google_Model
{
    /**
     * @var
     */
    public $costCenter;
    /**
     * @var
     */
    public $customType;
    /**
     * @var
     */
    public $department;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $domain;
    /**
     * @var
     */
    public $location;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $primary;
    /**
     * @var
     */
    public $symbol;
    /**
     * @var
     */
    public $title;
    /**
     * @var
     */
    public $type;

    /**
     * @param $costCenter
     */
    public function setCostCenter($costCenter)
    {
        $this->costCenter = $costCenter;
    }

    /**
     * @return mixed
     */
    public function getCostCenter()
    {
        return $this->costCenter;
    }

    /**
     * @param $customType
     */
    public function setCustomType($customType)
    {
        $this->customType = $customType;
    }

    /**
     * @return mixed
     */
    public function getCustomType()
    {
        return $this->customType;
    }

    /**
     * @param $department
     */
    public function setDepartment($department)
    {
        $this->department = $department;
    }

    /**
     * @return mixed
     */
    public function getDepartment()
    {
        return $this->department;
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
     * @param $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getLocation()
    {
        return $this->location;
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
     * @param $symbol
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
    }

    /**
     * @return mixed
     */
    public function getSymbol()
    {
        return $this->symbol;
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
}

/**
 * Class Google_UserPhone
 */
class Google_UserPhone extends Google_Model
{
    /**
     * @var
     */
    public $customType;
    /**
     * @var
     */
    public $primary;
    /**
     * @var
     */
    public $type;
    /**
     * @var
     */
    public $value;

    /**
     * @param $customType
     */
    public function setCustomType($customType)
    {
        $this->customType = $customType;
    }

    /**
     * @return mixed
     */
    public function getCustomType()
    {
        return $this->customType;
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
 * Class Google_UserPhoto
 */
class Google_UserPhoto extends Google_Model
{
    /**
     * @var
     */
    public $height;
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
    public $mimeType;
    /**
     * @var
     */
    public $photoData;
    /**
     * @var
     */
    public $primaryEmail;
    /**
     * @var
     */
    public $width;

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
     * @param $mimeType
     */
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
    }

    /**
     * @return mixed
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * @param $photoData
     */
    public function setPhotoData($photoData)
    {
        $this->photoData = $photoData;
    }

    /**
     * @return mixed
     */
    public function getPhotoData()
    {
        return $this->photoData;
    }

    /**
     * @param $primaryEmail
     */
    public function setPrimaryEmail($primaryEmail)
    {
        $this->primaryEmail = $primaryEmail;
    }

    /**
     * @return mixed
     */
    public function getPrimaryEmail()
    {
        return $this->primaryEmail;
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
 * Class Google_UserRelation
 */
class Google_UserRelation extends Google_Model
{
    /**
     * @var
     */
    public $customType;
    /**
     * @var
     */
    public $type;
    /**
     * @var
     */
    public $value;

    /**
     * @param $customType
     */
    public function setCustomType($customType)
    {
        $this->customType = $customType;
    }

    /**
     * @return mixed
     */
    public function getCustomType()
    {
        return $this->customType;
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
 * Class Google_UserUndelete
 */
class Google_UserUndelete extends Google_Model
{
    /**
     * @var
     */
    public $orgUnitPath;

    /**
     * @param $orgUnitPath
     */
    public function setOrgUnitPath($orgUnitPath)
    {
        $this->orgUnitPath = $orgUnitPath;
    }

    /**
     * @return mixed
     */
    public function getOrgUnitPath()
    {
        return $this->orgUnitPath;
    }
}

/**
 * Class Google_Users
 */
class Google_Users extends Google_Model
{
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
    public $trigger_event;
    /**
     * @var string
     */
    protected $__usersType = 'Google_User';
    /**
     * @var string
     */
    protected $__usersDataType = 'array';
    /**
     * @var
     */
    public $users;

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
     * @param $trigger_event
     */
    public function setTrigger_event($trigger_event)
    {
        $this->trigger_event = $trigger_event;
    }

    /**
     * @return mixed
     */
    public function getTrigger_event()
    {
        return $this->trigger_event;
    }

    /**
     * @param $users
     * @throws Google_Exception
     */
    public function setUsers(/* array(Google_User) */
        $users)
    {
        $this->assertIsArray($users, 'Google_User', __METHOD__);
        $this->users = $users;
    }

    /**
     * @return mixed
     */
    public function getUsers()
    {
        return $this->users;
    }
}
