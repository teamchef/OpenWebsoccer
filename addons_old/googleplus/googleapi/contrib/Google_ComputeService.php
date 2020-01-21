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
 * The "addresses" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_ComputeService(...);
 *   $addresses = $computeService->addresses;
 *  </code>
 */
class Google_AddressesServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves the list of addresses grouped by scope. (addresses.aggregatedList)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     * @return Google_AddressAggregatedList
     * @throws Google_Exception
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     */
    public function aggregatedList($project, $optParams = [])
    {
        $params = ['project' => $project];
        $params = array_merge($params, $optParams);
        $data = $this->__call('aggregatedList', [$params]);
        if ($this->useObjects()) {
            return new Google_AddressAggregatedList($data);
        } else {
            return $data;
        }
    }

    /**
     * Deletes the specified address resource. (addresses.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param string $address Name of the address resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function delete($project, $region, $address, $optParams = [])
    {
        $params = ['project' => $project, 'region' => $region, 'address' => $address];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns the specified address resource. (addresses.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param string $address Name of the address resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Address
     * @throws Google_Exception
     */
    public function get($project, $region, $address, $optParams = [])
    {
        $params = ['project' => $project, 'region' => $region, 'address' => $address];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Address($data);
        } else {
            return $data;
        }
    }

    /**
     * Creates an address resource in the specified project using the data included in the request.
     * (addresses.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param Google_Address $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function insert($project, $region, Google_Address $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'region' => $region, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the list of address resources contained within the specified region. (addresses.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param array $optParams Optional parameters.
     * @return Google_AddressList
     * @throws Google_Exception
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     */
    public function listAddresses($project, $region, $optParams = [])
    {
        $params = ['project' => $project, 'region' => $region];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_AddressList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "disks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_ComputeService(...);
 *   $disks = $computeService->disks;
 *  </code>
 */
class Google_DisksServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves the list of disks grouped by scope. (disks.aggregatedList)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     * @return Google_DiskAggregatedList
     * @throws Google_Exception
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     */
    public function aggregatedList($project, $optParams = [])
    {
        $params = ['project' => $project];
        $params = array_merge($params, $optParams);
        $data = $this->__call('aggregatedList', [$params]);
        if ($this->useObjects()) {
            return new Google_DiskAggregatedList($data);
        } else {
            return $data;
        }
    }

    /**
     * (disks.createSnapshot)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $disk Name of the persistent disk resource to delete.
     * @param Google_Snapshot $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function createSnapshot($project, $zone, $disk, Google_Snapshot $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone, 'disk' => $disk, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('createSnapshot', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Deletes the specified persistent disk resource. (disks.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $disk Name of the persistent disk resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function delete($project, $zone, $disk, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone, 'disk' => $disk];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns the specified persistent disk resource. (disks.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $disk Name of the persistent disk resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Disk
     * @throws Google_Exception
     */
    public function get($project, $zone, $disk, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone, 'disk' => $disk];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Disk($data);
        } else {
            return $data;
        }
    }

    /**
     * Creates a persistent disk resource in the specified project using the data included in the
     * request. (disks.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param Google_Disk $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     * @opt_param string sourceImage Optional. Source image to restore onto a disk.
     */
    public function insert($project, $zone, Google_Disk $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the list of persistent disk resources contained within the specified zone. (disks.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param array $optParams Optional parameters.
     * @return Google_DiskList
     * @throws Google_Exception
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     */
    public function listDisks($project, $zone, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_DiskList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "firewalls" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_ComputeService(...);
 *   $firewalls = $computeService->firewalls;
 *  </code>
 */
class Google_FirewallsServiceResource extends Google_ServiceResource
{

    /**
     * Deletes the specified firewall resource. (firewalls.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $firewall Name of the firewall resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function delete($project, $firewall, $optParams = [])
    {
        $params = ['project' => $project, 'firewall' => $firewall];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns the specified firewall resource. (firewalls.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $firewall Name of the firewall resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Firewall
     * @throws Google_Exception
     */
    public function get($project, $firewall, $optParams = [])
    {
        $params = ['project' => $project, 'firewall' => $firewall];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Firewall($data);
        } else {
            return $data;
        }
    }

    /**
     * Creates a firewall resource in the specified project using the data included in the request.
     * (firewalls.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param Google_Firewall $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function insert($project, Google_Firewall $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the list of firewall resources available to the specified project. (firewalls.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     * @return Google_FirewallList
     * @throws Google_Exception
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     */
    public function listFirewalls($project, $optParams = [])
    {
        $params = ['project' => $project];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_FirewallList($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates the specified firewall resource with the data included in the request. This method
     * supports patch semantics. (firewalls.patch)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $firewall Name of the firewall resource to update.
     * @param Google_Firewall $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function patch($project, $firewall, Google_Firewall $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'firewall' => $firewall, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates the specified firewall resource with the data included in the request. (firewalls.update)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $firewall Name of the firewall resource to update.
     * @param Google_Firewall $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function update($project, $firewall, Google_Firewall $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'firewall' => $firewall, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "globalOperations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_ComputeService(...);
 *   $globalOperations = $computeService->globalOperations;
 *  </code>
 */
class Google_GlobalOperationsServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves the list of all operations grouped by scope. (globalOperations.aggregatedList)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     * @return Google_OperationAggregatedList
     * @throws Google_Exception
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     */
    public function aggregatedList($project, $optParams = [])
    {
        $params = ['project' => $project];
        $params = array_merge($params, $optParams);
        $data = $this->__call('aggregatedList', [$params]);
        if ($this->useObjects()) {
            return new Google_OperationAggregatedList($data);
        } else {
            return $data;
        }
    }

    /**
     * Deletes the specified operation resource. (globalOperations.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $operation Name of the operation resource to delete.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($project, $operation, $optParams = [])
    {
        $params = ['project' => $project, 'operation' => $operation];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Retrieves the specified operation resource. (globalOperations.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $operation Name of the operation resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function get($project, $operation, $optParams = [])
    {
        $params = ['project' => $project, 'operation' => $operation];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the list of operation resources contained within the specified project.
     * (globalOperations.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     * @return Google_OperationList
     * @throws Google_Exception
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     */
    public function listGlobalOperations($project, $optParams = [])
    {
        $params = ['project' => $project];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_OperationList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "images" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_ComputeService(...);
 *   $images = $computeService->images;
 *  </code>
 */
class Google_ImagesServiceResource extends Google_ServiceResource
{

    /**
     * Deletes the specified image resource. (images.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $image Name of the image resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function delete($project, $image, $optParams = [])
    {
        $params = ['project' => $project, 'image' => $image];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Sets the deprecation status of an image. If no message body is given, clears the deprecation
     * status instead. (images.deprecate)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $image Image name.
     * @param Google_DeprecationStatus $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function deprecate($project, $image, Google_DeprecationStatus $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'image' => $image, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('deprecate', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns the specified image resource. (images.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $image Name of the image resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Image
     * @throws Google_Exception
     */
    public function get($project, $image, $optParams = [])
    {
        $params = ['project' => $project, 'image' => $image];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Image($data);
        } else {
            return $data;
        }
    }

    /**
     * Creates an image resource in the specified project using the data included in the request.
     * (images.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param Google_Image $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function insert($project, Google_Image $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the list of image resources available to the specified project. (images.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     * @return Google_ImageList
     * @throws Google_Exception
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     */
    public function listImages($project, $optParams = [])
    {
        $params = ['project' => $project];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_ImageList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "instances" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_ComputeService(...);
 *   $instances = $computeService->instances;
 *  </code>
 */
class Google_InstancesServiceResource extends Google_ServiceResource
{

    /**
     * Adds an access config to an instance's network interface. (instances.addAccessConfig)
     *
     * @param string $project Project name.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Instance name.
     * @param string $networkInterface Network interface name.
     * @param Google_AccessConfig $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function addAccessConfig($project, $zone, $instance, $networkInterface, Google_AccessConfig $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone, 'instance' => $instance, 'networkInterface' => $networkInterface, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('addAccessConfig', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * (instances.aggregatedList)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     * @return Google_InstanceAggregatedList
     * @throws Google_Exception
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     */
    public function aggregatedList($project, $optParams = [])
    {
        $params = ['project' => $project];
        $params = array_merge($params, $optParams);
        $data = $this->__call('aggregatedList', [$params]);
        if ($this->useObjects()) {
            return new Google_InstanceAggregatedList($data);
        } else {
            return $data;
        }
    }

    /**
     * Attaches a disk resource to an instance. (instances.attachDisk)
     *
     * @param string $project Project name.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Instance name.
     * @param Google_AttachedDisk $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function attachDisk($project, $zone, $instance, Google_AttachedDisk $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone, 'instance' => $instance, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('attachDisk', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Deletes the specified instance resource. (instances.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Name of the instance resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function delete($project, $zone, $instance, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone, 'instance' => $instance];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Deletes an access config from an instance's network interface. (instances.deleteAccessConfig)
     *
     * @param string $project Project name.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Instance name.
     * @param string $accessConfig Access config name.
     * @param string $networkInterface Network interface name.
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function deleteAccessConfig($project, $zone, $instance, $accessConfig, $networkInterface, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone, 'instance' => $instance, 'accessConfig' => $accessConfig, 'networkInterface' => $networkInterface];
        $params = array_merge($params, $optParams);
        $data = $this->__call('deleteAccessConfig', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Detaches a disk from an instance. (instances.detachDisk)
     *
     * @param string $project Project name.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Instance name.
     * @param string $deviceName Disk device name to detach.
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function detachDisk($project, $zone, $instance, $deviceName, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone, 'instance' => $instance, 'deviceName' => $deviceName];
        $params = array_merge($params, $optParams);
        $data = $this->__call('detachDisk', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns the specified instance resource. (instances.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Name of the instance resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Instance
     * @throws Google_Exception
     */
    public function get($project, $zone, $instance, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone, 'instance' => $instance];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Instance($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns the specified instance's serial port output. (instances.getSerialPortOutput)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Name of the instance scoping this request.
     * @param array $optParams Optional parameters.
     * @return Google_SerialPortOutput
     * @throws Google_Exception
     */
    public function getSerialPortOutput($project, $zone, $instance, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone, 'instance' => $instance];
        $params = array_merge($params, $optParams);
        $data = $this->__call('getSerialPortOutput', [$params]);
        if ($this->useObjects()) {
            return new Google_SerialPortOutput($data);
        } else {
            return $data;
        }
    }

    /**
     * Creates an instance resource in the specified project using the data included in the request.
     * (instances.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param Google_Instance $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function insert($project, $zone, Google_Instance $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the list of instance resources contained within the specified zone. (instances.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param array $optParams Optional parameters.
     * @return Google_InstanceList
     * @throws Google_Exception
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     */
    public function listInstances($project, $zone, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_InstanceList($data);
        } else {
            return $data;
        }
    }

    /**
     * Performs a hard reset on the instance. (instances.reset)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Name of the instance scoping this request.
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function reset($project, $zone, $instance, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone, 'instance' => $instance];
        $params = array_merge($params, $optParams);
        $data = $this->__call('reset', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Sets metadata for the specified instance to the data included in the request.
     * (instances.setMetadata)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Name of the instance scoping this request.
     * @param Google_Metadata $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function setMetadata($project, $zone, $instance, Google_Metadata $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone, 'instance' => $instance, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('setMetadata', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Sets tags for the specified instance to the data included in the request. (instances.setTags)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Name of the instance scoping this request.
     * @param Google_Tags $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function setTags($project, $zone, $instance, Google_Tags $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone, 'instance' => $instance, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('setTags', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "kernels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_ComputeService(...);
 *   $kernels = $computeService->kernels;
 *  </code>
 */
class Google_KernelsServiceResource extends Google_ServiceResource
{

    /**
     * Returns the specified kernel resource. (kernels.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $kernel Name of the kernel resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Kernel
     * @throws Google_Exception
     */
    public function get($project, $kernel, $optParams = [])
    {
        $params = ['project' => $project, 'kernel' => $kernel];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Kernel($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the list of kernel resources available to the specified project. (kernels.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     * @return Google_KernelList
     * @throws Google_Exception
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     */
    public function listKernels($project, $optParams = [])
    {
        $params = ['project' => $project];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_KernelList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "machineTypes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_ComputeService(...);
 *   $machineTypes = $computeService->machineTypes;
 *  </code>
 */
class Google_MachineTypesServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves the list of machine type resources grouped by scope. (machineTypes.aggregatedList)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     * @return Google_MachineTypeAggregatedList
     * @throws Google_Exception
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     */
    public function aggregatedList($project, $optParams = [])
    {
        $params = ['project' => $project];
        $params = array_merge($params, $optParams);
        $data = $this->__call('aggregatedList', [$params]);
        if ($this->useObjects()) {
            return new Google_MachineTypeAggregatedList($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns the specified machine type resource. (machineTypes.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $machineType Name of the machine type resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_MachineType
     * @throws Google_Exception
     */
    public function get($project, $zone, $machineType, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone, 'machineType' => $machineType];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_MachineType($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the list of machine type resources available to the specified project.
     * (machineTypes.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param array $optParams Optional parameters.
     * @return Google_MachineTypeList
     * @throws Google_Exception
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     */
    public function listMachineTypes($project, $zone, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_MachineTypeList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "networks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_ComputeService(...);
 *   $networks = $computeService->networks;
 *  </code>
 */
class Google_NetworksServiceResource extends Google_ServiceResource
{

    /**
     * Deletes the specified network resource. (networks.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $network Name of the network resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function delete($project, $network, $optParams = [])
    {
        $params = ['project' => $project, 'network' => $network];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns the specified network resource. (networks.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $network Name of the network resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Network
     * @throws Google_Exception
     */
    public function get($project, $network, $optParams = [])
    {
        $params = ['project' => $project, 'network' => $network];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Network($data);
        } else {
            return $data;
        }
    }

    /**
     * Creates a network resource in the specified project using the data included in the request.
     * (networks.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param Google_Network $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function insert($project, Google_Network $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the list of network resources available to the specified project. (networks.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     * @return Google_NetworkList
     * @throws Google_Exception
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     */
    public function listNetworks($project, $optParams = [])
    {
        $params = ['project' => $project];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_NetworkList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "projects" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_ComputeService(...);
 *   $projects = $computeService->projects;
 *  </code>
 */
class Google_ProjectsServiceResource extends Google_ServiceResource
{

    /**
     * Returns the specified project resource. (projects.get)
     *
     * @param string $project Name of the project resource to retrieve.
     * @param array $optParams Optional parameters.
     * @return Google_Project
     * @throws Google_Exception
     */
    public function get($project, $optParams = [])
    {
        $params = ['project' => $project];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Project($data);
        } else {
            return $data;
        }
    }

    /**
     * Sets metadata common to all instances within the specified project using the data included in the
     * request. (projects.setCommonInstanceMetadata)
     *
     * @param string $project Name of the project scoping this request.
     * @param Google_Metadata $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function setCommonInstanceMetadata($project, Google_Metadata $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('setCommonInstanceMetadata', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "regionOperations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_ComputeService(...);
 *   $regionOperations = $computeService->regionOperations;
 *  </code>
 */
class Google_RegionOperationsServiceResource extends Google_ServiceResource
{

    /**
     * Deletes the specified region-specific operation resource. (regionOperations.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param string $operation Name of the operation resource to delete.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($project, $region, $operation, $optParams = [])
    {
        $params = ['project' => $project, 'region' => $region, 'operation' => $operation];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Retrieves the specified region-specific operation resource. (regionOperations.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the zone scoping this request.
     * @param string $operation Name of the operation resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function get($project, $region, $operation, $optParams = [])
    {
        $params = ['project' => $project, 'region' => $region, 'operation' => $operation];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the list of operation resources contained within the specified region.
     * (regionOperations.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param array $optParams Optional parameters.
     * @return Google_OperationList
     * @throws Google_Exception
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     */
    public function listRegionOperations($project, $region, $optParams = [])
    {
        $params = ['project' => $project, 'region' => $region];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_OperationList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "regions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_ComputeService(...);
 *   $regions = $computeService->regions;
 *  </code>
 */
class Google_RegionsServiceResource extends Google_ServiceResource
{

    /**
     * Returns the specified region resource. (regions.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Region
     * @throws Google_Exception
     */
    public function get($project, $region, $optParams = [])
    {
        $params = ['project' => $project, 'region' => $region];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Region($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the list of region resources available to the specified project. (regions.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     * @return Google_RegionList
     * @throws Google_Exception
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     */
    public function listRegions($project, $optParams = [])
    {
        $params = ['project' => $project];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_RegionList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "routes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_ComputeService(...);
 *   $routes = $computeService->routes;
 *  </code>
 */
class Google_RoutesServiceResource extends Google_ServiceResource
{

    /**
     * Deletes the specified route resource. (routes.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $route Name of the route resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function delete($project, $route, $optParams = [])
    {
        $params = ['project' => $project, 'route' => $route];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns the specified route resource. (routes.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $route Name of the route resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Route
     * @throws Google_Exception
     */
    public function get($project, $route, $optParams = [])
    {
        $params = ['project' => $project, 'route' => $route];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Route($data);
        } else {
            return $data;
        }
    }

    /**
     * Creates a route resource in the specified project using the data included in the request.
     * (routes.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param Google_Route $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function insert($project, Google_Route $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the list of route resources available to the specified project. (routes.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     * @return Google_RouteList
     * @throws Google_Exception
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     */
    public function listRoutes($project, $optParams = [])
    {
        $params = ['project' => $project];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_RouteList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "snapshots" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_ComputeService(...);
 *   $snapshots = $computeService->snapshots;
 *  </code>
 */
class Google_SnapshotsServiceResource extends Google_ServiceResource
{

    /**
     * Deletes the specified persistent disk snapshot resource. (snapshots.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $snapshot Name of the persistent disk snapshot resource to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function delete($project, $snapshot, $optParams = [])
    {
        $params = ['project' => $project, 'snapshot' => $snapshot];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns the specified persistent disk snapshot resource. (snapshots.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $snapshot Name of the persistent disk snapshot resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Snapshot
     * @throws Google_Exception
     */
    public function get($project, $snapshot, $optParams = [])
    {
        $params = ['project' => $project, 'snapshot' => $snapshot];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Snapshot($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the list of persistent disk snapshot resources contained within the specified project.
     * (snapshots.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     * @return Google_SnapshotList
     * @throws Google_Exception
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     */
    public function listSnapshots($project, $optParams = [])
    {
        $params = ['project' => $project];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_SnapshotList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "zoneOperations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_ComputeService(...);
 *   $zoneOperations = $computeService->zoneOperations;
 *  </code>
 */
class Google_ZoneOperationsServiceResource extends Google_ServiceResource
{

    /**
     * Deletes the specified zone-specific operation resource. (zoneOperations.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $operation Name of the operation resource to delete.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($project, $zone, $operation, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone, 'operation' => $operation];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Retrieves the specified zone-specific operation resource. (zoneOperations.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $operation Name of the operation resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Operation
     * @throws Google_Exception
     */
    public function get($project, $zone, $operation, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone, 'operation' => $operation];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Operation($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the list of operation resources contained within the specified zone.
     * (zoneOperations.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param array $optParams Optional parameters.
     * @return Google_OperationList
     * @throws Google_Exception
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     */
    public function listZoneOperations($project, $zone, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_OperationList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "zones" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_ComputeService(...);
 *   $zones = $computeService->zones;
 *  </code>
 */
class Google_ZonesServiceResource extends Google_ServiceResource
{

    /**
     * Returns the specified zone resource. (zones.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Zone
     * @throws Google_Exception
     */
    public function get($project, $zone, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Zone($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the list of zone resources available to the specified project. (zones.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     * @return Google_ZoneList
     * @throws Google_Exception
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     */
    public function listZones($project, $optParams = [])
    {
        $params = ['project' => $project];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_ZoneList($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Compute (v1beta15).
 *
 * <p>
 * API for the Google Compute Engine service.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/compute/docs/reference/v1beta15" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_ComputeService extends Google_Service
{
    /**
     * @var Google_AddressesServiceResource
     */
    public $addresses;
    /**
     * @var Google_DisksServiceResource
     */
    public $disks;
    /**
     * @var Google_FirewallsServiceResource
     */
    public $firewalls;
    /**
     * @var Google_GlobalOperationsServiceResource
     */
    public $globalOperations;
    /**
     * @var Google_ImagesServiceResource
     */
    public $images;
    /**
     * @var Google_InstancesServiceResource
     */
    public $instances;
    /**
     * @var Google_KernelsServiceResource
     */
    public $kernels;
    /**
     * @var Google_MachineTypesServiceResource
     */
    public $machineTypes;
    /**
     * @var Google_NetworksServiceResource
     */
    public $networks;
    /**
     * @var Google_ProjectsServiceResource
     */
    public $projects;
    /**
     * @var Google_RegionOperationsServiceResource
     */
    public $regionOperations;
    /**
     * @var Google_RegionsServiceResource
     */
    public $regions;
    /**
     * @var Google_RoutesServiceResource
     */
    public $routes;
    /**
     * @var Google_SnapshotsServiceResource
     */
    public $snapshots;
    /**
     * @var Google_ZoneOperationsServiceResource
     */
    public $zoneOperations;
    /**
     * @var Google_ZonesServiceResource
     */
    public $zones;

    /**
     * Constructs the internal representation of the Compute service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'compute/v1beta15/projects/';
        $this->version = 'v1beta15';
        $this->serviceName = 'compute';

        $client->addService($this->serviceName, $this->version);
        $this->addresses = new Google_AddressesServiceResource($this, $this->serviceName, 'addresses', json_decode('{"methods": {"aggregatedList": {"id": "compute.addresses.aggregatedList", "path": "{project}/aggregated/addresses", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "AddressAggregatedList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "delete": {"id": "compute.addresses.delete", "path": "{project}/regions/{region}/addresses/{address}", "httpMethod": "DELETE", "parameters": {"address": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.addresses.get", "path": "{project}/regions/{region}/addresses/{address}", "httpMethod": "GET", "parameters": {"address": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Address"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "insert": {"id": "compute.addresses.insert", "path": "{project}/regions/{region}/addresses", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Address"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "list": {"id": "compute.addresses.list", "path": "{project}/regions/{region}/addresses", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "AddressList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));
        $this->disks = new Google_DisksServiceResource($this, $this->serviceName, 'disks', json_decode('{"methods": {"aggregatedList": {"id": "compute.disks.aggregatedList", "path": "{project}/aggregated/disks", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "DiskAggregatedList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "createSnapshot": {"id": "compute.disks.createSnapshot", "path": "{project}/zones/{zone}/disks/{disk}/createSnapshot", "httpMethod": "POST", "parameters": {"disk": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Snapshot"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "delete": {"id": "compute.disks.delete", "path": "{project}/zones/{zone}/disks/{disk}", "httpMethod": "DELETE", "parameters": {"disk": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.disks.get", "path": "{project}/zones/{zone}/disks/{disk}", "httpMethod": "GET", "parameters": {"disk": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Disk"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "insert": {"id": "compute.disks.insert", "path": "{project}/zones/{zone}/disks", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "sourceImage": {"type": "string", "location": "query"}, "zone": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Disk"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "list": {"id": "compute.disks.list", "path": "{project}/zones/{zone}/disks", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "DiskList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));
        $this->firewalls = new Google_FirewallsServiceResource($this, $this->serviceName, 'firewalls', json_decode('{"methods": {"delete": {"id": "compute.firewalls.delete", "path": "{project}/global/firewalls/{firewall}", "httpMethod": "DELETE", "parameters": {"firewall": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.firewalls.get", "path": "{project}/global/firewalls/{firewall}", "httpMethod": "GET", "parameters": {"firewall": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Firewall"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "insert": {"id": "compute.firewalls.insert", "path": "{project}/global/firewalls", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Firewall"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "list": {"id": "compute.firewalls.list", "path": "{project}/global/firewalls", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "FirewallList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "patch": {"id": "compute.firewalls.patch", "path": "{project}/global/firewalls/{firewall}", "httpMethod": "PATCH", "parameters": {"firewall": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Firewall"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "update": {"id": "compute.firewalls.update", "path": "{project}/global/firewalls/{firewall}", "httpMethod": "PUT", "parameters": {"firewall": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Firewall"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}}}', true));
        $this->globalOperations = new Google_GlobalOperationsServiceResource($this, $this->serviceName, 'globalOperations', json_decode('{"methods": {"aggregatedList": {"id": "compute.globalOperations.aggregatedList", "path": "{project}/aggregated/operations", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "OperationAggregatedList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "delete": {"id": "compute.globalOperations.delete", "path": "{project}/global/operations/{operation}", "httpMethod": "DELETE", "parameters": {"operation": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.globalOperations.get", "path": "{project}/global/operations/{operation}", "httpMethod": "GET", "parameters": {"operation": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "list": {"id": "compute.globalOperations.list", "path": "{project}/global/operations", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "OperationList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));
        $this->images = new Google_ImagesServiceResource($this, $this->serviceName, 'images', json_decode('{"methods": {"delete": {"id": "compute.images.delete", "path": "{project}/global/images/{image}", "httpMethod": "DELETE", "parameters": {"image": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "deprecate": {"id": "compute.images.deprecate", "path": "{project}/global/images/{image}/deprecate", "httpMethod": "POST", "parameters": {"image": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "DeprecationStatus"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.images.get", "path": "{project}/global/images/{image}", "httpMethod": "GET", "parameters": {"image": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Image"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "insert": {"id": "compute.images.insert", "path": "{project}/global/images", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Image"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/devstorage.read_only"]}, "list": {"id": "compute.images.list", "path": "{project}/global/images", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "ImageList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));
        $this->instances = new Google_InstancesServiceResource($this, $this->serviceName, 'instances', json_decode('{"methods": {"addAccessConfig": {"id": "compute.instances.addAccessConfig", "path": "{project}/zones/{zone}/instances/{instance}/addAccessConfig", "httpMethod": "POST", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "networkInterface": {"type": "string", "required": true, "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "AccessConfig"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "aggregatedList": {"id": "compute.instances.aggregatedList", "path": "{project}/aggregated/instances", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "InstanceAggregatedList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "attachDisk": {"id": "compute.instances.attachDisk", "path": "{project}/zones/{zone}/instances/{instance}/attachDisk", "httpMethod": "POST", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "AttachedDisk"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "delete": {"id": "compute.instances.delete", "path": "{project}/zones/{zone}/instances/{instance}", "httpMethod": "DELETE", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "deleteAccessConfig": {"id": "compute.instances.deleteAccessConfig", "path": "{project}/zones/{zone}/instances/{instance}/deleteAccessConfig", "httpMethod": "POST", "parameters": {"accessConfig": {"type": "string", "required": true, "location": "query"}, "instance": {"type": "string", "required": true, "location": "path"}, "networkInterface": {"type": "string", "required": true, "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "detachDisk": {"id": "compute.instances.detachDisk", "path": "{project}/zones/{zone}/instances/{instance}/detachDisk", "httpMethod": "POST", "parameters": {"deviceName": {"type": "string", "required": true, "location": "query"}, "instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.instances.get", "path": "{project}/zones/{zone}/instances/{instance}", "httpMethod": "GET", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Instance"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "getSerialPortOutput": {"id": "compute.instances.getSerialPortOutput", "path": "{project}/zones/{zone}/instances/{instance}/serialPort", "httpMethod": "GET", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "SerialPortOutput"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "insert": {"id": "compute.instances.insert", "path": "{project}/zones/{zone}/instances", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Instance"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "list": {"id": "compute.instances.list", "path": "{project}/zones/{zone}/instances", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "InstanceList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "reset": {"id": "compute.instances.reset", "path": "{project}/zones/{zone}/instances/{instance}/reset", "httpMethod": "POST", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "setMetadata": {"id": "compute.instances.setMetadata", "path": "{project}/zones/{zone}/instances/{instance}/setMetadata", "httpMethod": "POST", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Metadata"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "setTags": {"id": "compute.instances.setTags", "path": "{project}/zones/{zone}/instances/{instance}/setTags", "httpMethod": "POST", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Tags"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}}}', true));
        $this->kernels = new Google_KernelsServiceResource($this, $this->serviceName, 'kernels', json_decode('{"methods": {"get": {"id": "compute.kernels.get", "path": "{project}/global/kernels/{kernel}", "httpMethod": "GET", "parameters": {"kernel": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Kernel"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "list": {"id": "compute.kernels.list", "path": "{project}/global/kernels", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "KernelList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));
        $this->machineTypes = new Google_MachineTypesServiceResource($this, $this->serviceName, 'machineTypes', json_decode('{"methods": {"aggregatedList": {"id": "compute.machineTypes.aggregatedList", "path": "{project}/aggregated/machineTypes", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "MachineTypeAggregatedList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "get": {"id": "compute.machineTypes.get", "path": "{project}/zones/{zone}/machineTypes/{machineType}", "httpMethod": "GET", "parameters": {"machineType": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "MachineType"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "list": {"id": "compute.machineTypes.list", "path": "{project}/zones/{zone}/machineTypes", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "MachineTypeList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));
        $this->networks = new Google_NetworksServiceResource($this, $this->serviceName, 'networks', json_decode('{"methods": {"delete": {"id": "compute.networks.delete", "path": "{project}/global/networks/{network}", "httpMethod": "DELETE", "parameters": {"network": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.networks.get", "path": "{project}/global/networks/{network}", "httpMethod": "GET", "parameters": {"network": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Network"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "insert": {"id": "compute.networks.insert", "path": "{project}/global/networks", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Network"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "list": {"id": "compute.networks.list", "path": "{project}/global/networks", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "NetworkList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));
        $this->projects = new Google_ProjectsServiceResource($this, $this->serviceName, 'projects', json_decode('{"methods": {"get": {"id": "compute.projects.get", "path": "{project}", "httpMethod": "GET", "parameters": {"project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Project"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "setCommonInstanceMetadata": {"id": "compute.projects.setCommonInstanceMetadata", "path": "{project}/setCommonInstanceMetadata", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Metadata"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}}}', true));
        $this->regionOperations = new Google_RegionOperationsServiceResource($this, $this->serviceName, 'regionOperations', json_decode('{"methods": {"delete": {"id": "compute.regionOperations.delete", "path": "{project}/regions/{region}/operations/{operation}", "httpMethod": "DELETE", "parameters": {"operation": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.regionOperations.get", "path": "{project}/regions/{region}/operations/{operation}", "httpMethod": "GET", "parameters": {"operation": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "list": {"id": "compute.regionOperations.list", "path": "{project}/regions/{region}/operations", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "OperationList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));
        $this->regions = new Google_RegionsServiceResource($this, $this->serviceName, 'regions', json_decode('{"methods": {"get": {"id": "compute.regions.get", "path": "{project}/regions/{region}", "httpMethod": "GET", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Region"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "list": {"id": "compute.regions.list", "path": "{project}/regions", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "RegionList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));
        $this->routes = new Google_RoutesServiceResource($this, $this->serviceName, 'routes', json_decode('{"methods": {"delete": {"id": "compute.routes.delete", "path": "{project}/global/routes/{route}", "httpMethod": "DELETE", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "route": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.routes.get", "path": "{project}/global/routes/{route}", "httpMethod": "GET", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "route": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Route"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "insert": {"id": "compute.routes.insert", "path": "{project}/global/routes", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Route"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "list": {"id": "compute.routes.list", "path": "{project}/global/routes", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "RouteList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));
        $this->snapshots = new Google_SnapshotsServiceResource($this, $this->serviceName, 'snapshots', json_decode('{"methods": {"delete": {"id": "compute.snapshots.delete", "path": "{project}/global/snapshots/{snapshot}", "httpMethod": "DELETE", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "snapshot": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.snapshots.get", "path": "{project}/global/snapshots/{snapshot}", "httpMethod": "GET", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "snapshot": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Snapshot"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "list": {"id": "compute.snapshots.list", "path": "{project}/global/snapshots", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "SnapshotList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));
        $this->zoneOperations = new Google_ZoneOperationsServiceResource($this, $this->serviceName, 'zoneOperations', json_decode('{"methods": {"delete": {"id": "compute.zoneOperations.delete", "path": "{project}/zones/{zone}/operations/{operation}", "httpMethod": "DELETE", "parameters": {"operation": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.zoneOperations.get", "path": "{project}/zones/{zone}/operations/{operation}", "httpMethod": "GET", "parameters": {"operation": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "list": {"id": "compute.zoneOperations.list", "path": "{project}/zones/{zone}/operations", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "OperationList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));
        $this->zones = new Google_ZonesServiceResource($this, $this->serviceName, 'zones', json_decode('{"methods": {"get": {"id": "compute.zones.get", "path": "{project}/zones/{zone}", "httpMethod": "GET", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Zone"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "list": {"id": "compute.zones.list", "path": "{project}/zones", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "ZoneList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));

    }
}


/**
 * Class Google_AccessConfig
 */
class Google_AccessConfig extends Google_Model
{
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
    public $natIP;
    /**
     * @var
     */
    public $type;

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
     * @param $natIP
     */
    public function setNatIP($natIP)
    {
        $this->natIP = $natIP;
    }

    /**
     * @return mixed
     */
    public function getNatIP()
    {
        return $this->natIP;
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
 * Class Google_Address
 */
class Google_Address extends Google_Model
{
    /**
     * @var
     */
    public $address;
    /**
     * @var
     */
    public $creationTimestamp;
    /**
     * @var
     */
    public $description;
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
    public $region;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $status;
    /**
     * @var
     */
    public $user;

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
     * @param $creationTimestamp
     */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }

    /**
     * @return mixed
     */
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
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
     * @param $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }
}

/**
 * Class Google_AddressAggregatedList
 */
class Google_AddressAggregatedList extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_AddressesScopedList';
    /**
     * @var string
     */
    protected $__itemsDataType = 'map';
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
    public $selfLink;

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
     * @param Google_AddressesScopedList $items
     */
    public function setItems(Google_AddressesScopedList $items)
    {
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
}

/**
 * Class Google_AddressList
 */
class Google_AddressList extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Address';
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
    public $selfLink;

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
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Address) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Address', __METHOD__);
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
}

/**
 * Class Google_AddressesScopedList
 */
class Google_AddressesScopedList extends Google_Model
{
    /**
     * @var string
     */
    protected $__addressesType = 'Google_Address';
    /**
     * @var string
     */
    protected $__addressesDataType = 'array';
    /**
     * @var
     */
    public $addresses;
    /**
     * @var string
     */
    protected $__warningType = 'Google_AddressesScopedListWarning';
    /**
     * @var string
     */
    protected $__warningDataType = '';
    /**
     * @var
     */
    public $warning;

    /**
     * @param $addresses
     * @throws Google_Exception
     */
    public function setAddresses(/* array(Google_Address) */
        $addresses)
    {
        $this->assertIsArray($addresses, 'Google_Address', __METHOD__);
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
     * @param Google_AddressesScopedListWarning $warning
     */
    public function setWarning(Google_AddressesScopedListWarning $warning)
    {
        $this->warning = $warning;
    }

    /**
     * @return mixed
     */
    public function getWarning()
    {
        return $this->warning;
    }
}

/**
 * Class Google_AddressesScopedListWarning
 */
class Google_AddressesScopedListWarning extends Google_Model
{
    /**
     * @var
     */
    public $code;
    /**
     * @var string
     */
    protected $__dataType = 'Google_AddressesScopedListWarningData';
    /**
     * @var string
     */
    protected $__dataDataType = 'array';
    /**
     * @var
     */
    public $data;
    /**
     * @var
     */
    public $message;

    /**
     * @param $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param $data
     * @throws Google_Exception
     */
    public function setData(/* array(Google_AddressesScopedListWarningData) */
        $data)
    {
        $this->assertIsArray($data, 'Google_AddressesScopedListWarningData', __METHOD__);
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
}

/**
 * Class Google_AddressesScopedListWarningData
 */
class Google_AddressesScopedListWarningData extends Google_Model
{
    /**
     * @var
     */
    public $key;
    /**
     * @var
     */
    public $value;

    /**
     * @param $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}

/**
 * Class Google_AttachedDisk
 */
class Google_AttachedDisk extends Google_Model
{
    /**
     * @var
     */
    public $boot;
    /**
     * @var
     */
    public $deviceName;
    /**
     * @var
     */
    public $index;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $mode;
    /**
     * @var
     */
    public $source;
    /**
     * @var
     */
    public $type;

    /**
     * @param $boot
     */
    public function setBoot($boot)
    {
        $this->boot = $boot;
    }

    /**
     * @return mixed
     */
    public function getBoot()
    {
        return $this->boot;
    }

    /**
     * @param $deviceName
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
    }

    /**
     * @return mixed
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * @param $index
     */
    public function setIndex($index)
    {
        $this->index = $index;
    }

    /**
     * @return mixed
     */
    public function getIndex()
    {
        return $this->index;
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
     * @param $mode
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    }

    /**
     * @return mixed
     */
    public function getMode()
    {
        return $this->mode;
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
 * Class Google_DeprecationStatus
 */
class Google_DeprecationStatus extends Google_Model
{
    /**
     * @var
     */
    public $deleted;
    /**
     * @var
     */
    public $deprecated;
    /**
     * @var
     */
    public $obsolete;
    /**
     * @var
     */
    public $replacement;
    /**
     * @var
     */
    public $state;

    /**
     * @param $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    /**
     * @return mixed
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param $deprecated
     */
    public function setDeprecated($deprecated)
    {
        $this->deprecated = $deprecated;
    }

    /**
     * @return mixed
     */
    public function getDeprecated()
    {
        return $this->deprecated;
    }

    /**
     * @param $obsolete
     */
    public function setObsolete($obsolete)
    {
        $this->obsolete = $obsolete;
    }

    /**
     * @return mixed
     */
    public function getObsolete()
    {
        return $this->obsolete;
    }

    /**
     * @param $replacement
     */
    public function setReplacement($replacement)
    {
        $this->replacement = $replacement;
    }

    /**
     * @return mixed
     */
    public function getReplacement()
    {
        return $this->replacement;
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
 * Class Google_Disk
 */
class Google_Disk extends Google_Model
{
    /**
     * @var
     */
    public $creationTimestamp;
    /**
     * @var
     */
    public $description;
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
    public $options;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $sizeGb;
    /**
     * @var
     */
    public $sourceSnapshot;
    /**
     * @var
     */
    public $sourceSnapshotId;
    /**
     * @var
     */
    public $status;
    /**
     * @var
     */
    public $zone;

    /**
     * @param $creationTimestamp
     */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }

    /**
     * @return mixed
     */
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
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
     * @param $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

    /**
     * @return mixed
     */
    public function getOptions()
    {
        return $this->options;
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
     * @param $sizeGb
     */
    public function setSizeGb($sizeGb)
    {
        $this->sizeGb = $sizeGb;
    }

    /**
     * @return mixed
     */
    public function getSizeGb()
    {
        return $this->sizeGb;
    }

    /**
     * @param $sourceSnapshot
     */
    public function setSourceSnapshot($sourceSnapshot)
    {
        $this->sourceSnapshot = $sourceSnapshot;
    }

    /**
     * @return mixed
     */
    public function getSourceSnapshot()
    {
        return $this->sourceSnapshot;
    }

    /**
     * @param $sourceSnapshotId
     */
    public function setSourceSnapshotId($sourceSnapshotId)
    {
        $this->sourceSnapshotId = $sourceSnapshotId;
    }

    /**
     * @return mixed
     */
    public function getSourceSnapshotId()
    {
        return $this->sourceSnapshotId;
    }

    /**
     * @param $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param $zone
     */
    public function setZone($zone)
    {
        $this->zone = $zone;
    }

    /**
     * @return mixed
     */
    public function getZone()
    {
        return $this->zone;
    }
}

/**
 * Class Google_DiskAggregatedList
 */
class Google_DiskAggregatedList extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_DisksScopedList';
    /**
     * @var string
     */
    protected $__itemsDataType = 'map';
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
    public $selfLink;

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
     * @param Google_DisksScopedList $items
     */
    public function setItems(Google_DisksScopedList $items)
    {
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
}

/**
 * Class Google_DiskList
 */
class Google_DiskList extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Disk';
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
    public $selfLink;

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
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Disk) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Disk', __METHOD__);
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
}

/**
 * Class Google_DisksScopedList
 */
class Google_DisksScopedList extends Google_Model
{
    /**
     * @var string
     */
    protected $__disksType = 'Google_Disk';
    /**
     * @var string
     */
    protected $__disksDataType = 'array';
    /**
     * @var
     */
    public $disks;
    /**
     * @var string
     */
    protected $__warningType = 'Google_DisksScopedListWarning';
    /**
     * @var string
     */
    protected $__warningDataType = '';
    /**
     * @var
     */
    public $warning;

    /**
     * @param $disks
     * @throws Google_Exception
     */
    public function setDisks(/* array(Google_Disk) */
        $disks)
    {
        $this->assertIsArray($disks, 'Google_Disk', __METHOD__);
        $this->disks = $disks;
    }

    /**
     * @return mixed
     */
    public function getDisks()
    {
        return $this->disks;
    }

    /**
     * @param Google_DisksScopedListWarning $warning
     */
    public function setWarning(Google_DisksScopedListWarning $warning)
    {
        $this->warning = $warning;
    }

    /**
     * @return mixed
     */
    public function getWarning()
    {
        return $this->warning;
    }
}

/**
 * Class Google_DisksScopedListWarning
 */
class Google_DisksScopedListWarning extends Google_Model
{
    /**
     * @var
     */
    public $code;
    /**
     * @var string
     */
    protected $__dataType = 'Google_DisksScopedListWarningData';
    /**
     * @var string
     */
    protected $__dataDataType = 'array';
    /**
     * @var
     */
    public $data;
    /**
     * @var
     */
    public $message;

    /**
     * @param $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param $data
     * @throws Google_Exception
     */
    public function setData(/* array(Google_DisksScopedListWarningData) */
        $data)
    {
        $this->assertIsArray($data, 'Google_DisksScopedListWarningData', __METHOD__);
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
}

/**
 * Class Google_DisksScopedListWarningData
 */
class Google_DisksScopedListWarningData extends Google_Model
{
    /**
     * @var
     */
    public $key;
    /**
     * @var
     */
    public $value;

    /**
     * @param $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}

/**
 * Class Google_Firewall
 */
class Google_Firewall extends Google_Model
{
    /**
     * @var string
     */
    protected $__allowedType = 'Google_FirewallAllowed';
    /**
     * @var string
     */
    protected $__allowedDataType = 'array';
    /**
     * @var
     */
    public $allowed;
    /**
     * @var
     */
    public $creationTimestamp;
    /**
     * @var
     */
    public $description;
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
    public $network;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $sourceRanges;
    /**
     * @var
     */
    public $sourceTags;
    /**
     * @var
     */
    public $targetTags;

    /**
     * @param $allowed
     * @throws Google_Exception
     */
    public function setAllowed(/* array(Google_FirewallAllowed) */
        $allowed)
    {
        $this->assertIsArray($allowed, 'Google_FirewallAllowed', __METHOD__);
        $this->allowed = $allowed;
    }

    /**
     * @return mixed
     */
    public function getAllowed()
    {
        return $this->allowed;
    }

    /**
     * @param $creationTimestamp
     */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }

    /**
     * @return mixed
     */
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
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
     * @param $network
     */
    public function setNetwork($network)
    {
        $this->network = $network;
    }

    /**
     * @return mixed
     */
    public function getNetwork()
    {
        return $this->network;
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
     * @param $sourceRanges
     * @throws Google_Exception
     */
    public function setSourceRanges(/* array(Google_string) */
        $sourceRanges)
    {
        $this->assertIsArray($sourceRanges, 'Google_string', __METHOD__);
        $this->sourceRanges = $sourceRanges;
    }

    /**
     * @return mixed
     */
    public function getSourceRanges()
    {
        return $this->sourceRanges;
    }

    /**
     * @param $sourceTags
     * @throws Google_Exception
     */
    public function setSourceTags(/* array(Google_string) */
        $sourceTags)
    {
        $this->assertIsArray($sourceTags, 'Google_string', __METHOD__);
        $this->sourceTags = $sourceTags;
    }

    /**
     * @return mixed
     */
    public function getSourceTags()
    {
        return $this->sourceTags;
    }

    /**
     * @param $targetTags
     * @throws Google_Exception
     */
    public function setTargetTags(/* array(Google_string) */
        $targetTags)
    {
        $this->assertIsArray($targetTags, 'Google_string', __METHOD__);
        $this->targetTags = $targetTags;
    }

    /**
     * @return mixed
     */
    public function getTargetTags()
    {
        return $this->targetTags;
    }
}

/**
 * Class Google_FirewallAllowed
 */
class Google_FirewallAllowed extends Google_Model
{
    /**
     * @var
     */
    public $IPProtocol;
    /**
     * @var
     */
    public $ports;

    /**
     * @param $IPProtocol
     */
    public function setIPProtocol($IPProtocol)
    {
        $this->IPProtocol = $IPProtocol;
    }

    /**
     * @return mixed
     */
    public function getIPProtocol()
    {
        return $this->IPProtocol;
    }

    /**
     * @param $ports
     * @throws Google_Exception
     */
    public function setPorts(/* array(Google_string) */
        $ports)
    {
        $this->assertIsArray($ports, 'Google_string', __METHOD__);
        $this->ports = $ports;
    }

    /**
     * @return mixed
     */
    public function getPorts()
    {
        return $this->ports;
    }
}

/**
 * Class Google_FirewallList
 */
class Google_FirewallList extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Firewall';
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
    public $selfLink;

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
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Firewall) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Firewall', __METHOD__);
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
}

/**
 * Class Google_Image
 */
class Google_Image extends Google_Model
{
    /**
     * @var
     */
    public $creationTimestamp;
    /**
     * @var string
     */
    protected $__deprecatedType = 'Google_DeprecationStatus';
    /**
     * @var string
     */
    protected $__deprecatedDataType = '';
    /**
     * @var
     */
    public $deprecated;
    /**
     * @var
     */
    public $description;
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
    public $preferredKernel;
    /**
     * @var string
     */
    protected $__rawDiskType = 'Google_ImageRawDisk';
    /**
     * @var string
     */
    protected $__rawDiskDataType = '';
    /**
     * @var
     */
    public $rawDisk;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $sourceType;
    /**
     * @var
     */
    public $status;

    /**
     * @param $creationTimestamp
     */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }

    /**
     * @return mixed
     */
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }

    /**
     * @param Google_DeprecationStatus $deprecated
     */
    public function setDeprecated(Google_DeprecationStatus $deprecated)
    {
        $this->deprecated = $deprecated;
    }

    /**
     * @return mixed
     */
    public function getDeprecated()
    {
        return $this->deprecated;
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
     * @param $preferredKernel
     */
    public function setPreferredKernel($preferredKernel)
    {
        $this->preferredKernel = $preferredKernel;
    }

    /**
     * @return mixed
     */
    public function getPreferredKernel()
    {
        return $this->preferredKernel;
    }

    /**
     * @param Google_ImageRawDisk $rawDisk
     */
    public function setRawDisk(Google_ImageRawDisk $rawDisk)
    {
        $this->rawDisk = $rawDisk;
    }

    /**
     * @return mixed
     */
    public function getRawDisk()
    {
        return $this->rawDisk;
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
     * @param $sourceType
     */
    public function setSourceType($sourceType)
    {
        $this->sourceType = $sourceType;
    }

    /**
     * @return mixed
     */
    public function getSourceType()
    {
        return $this->sourceType;
    }

    /**
     * @param $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }
}

/**
 * Class Google_ImageList
 */
class Google_ImageList extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Image';
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
    public $selfLink;

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
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Image) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Image', __METHOD__);
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
}

/**
 * Class Google_ImageRawDisk
 */
class Google_ImageRawDisk extends Google_Model
{
    /**
     * @var
     */
    public $containerType;
    /**
     * @var
     */
    public $sha1Checksum;
    /**
     * @var
     */
    public $source;

    /**
     * @param $containerType
     */
    public function setContainerType($containerType)
    {
        $this->containerType = $containerType;
    }

    /**
     * @return mixed
     */
    public function getContainerType()
    {
        return $this->containerType;
    }

    /**
     * @param $sha1Checksum
     */
    public function setSha1Checksum($sha1Checksum)
    {
        $this->sha1Checksum = $sha1Checksum;
    }

    /**
     * @return mixed
     */
    public function getSha1Checksum()
    {
        return $this->sha1Checksum;
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
}

/**
 * Class Google_Instance
 */
class Google_Instance extends Google_Model
{
    /**
     * @var
     */
    public $canIpForward;
    /**
     * @var
     */
    public $creationTimestamp;
    /**
     * @var
     */
    public $description;
    /**
     * @var string
     */
    protected $__disksType = 'Google_AttachedDisk';
    /**
     * @var string
     */
    protected $__disksDataType = 'array';
    /**
     * @var
     */
    public $disks;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $image;
    /**
     * @var
     */
    public $kernel;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $machineType;
    /**
     * @var string
     */
    protected $__metadataType = 'Google_Metadata';
    /**
     * @var string
     */
    protected $__metadataDataType = '';
    /**
     * @var
     */
    public $metadata;
    /**
     * @var
     */
    public $name;
    /**
     * @var string
     */
    protected $__networkInterfacesType = 'Google_NetworkInterface';
    /**
     * @var string
     */
    protected $__networkInterfacesDataType = 'array';
    /**
     * @var
     */
    public $networkInterfaces;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var string
     */
    protected $__serviceAccountsType = 'Google_ServiceAccount';
    /**
     * @var string
     */
    protected $__serviceAccountsDataType = 'array';
    /**
     * @var
     */
    public $serviceAccounts;
    /**
     * @var
     */
    public $status;
    /**
     * @var
     */
    public $statusMessage;
    /**
     * @var string
     */
    protected $__tagsType = 'Google_Tags';
    /**
     * @var string
     */
    protected $__tagsDataType = '';
    /**
     * @var
     */
    public $tags;
    /**
     * @var
     */
    public $zone;

    /**
     * @param $canIpForward
     */
    public function setCanIpForward($canIpForward)
    {
        $this->canIpForward = $canIpForward;
    }

    /**
     * @return mixed
     */
    public function getCanIpForward()
    {
        return $this->canIpForward;
    }

    /**
     * @param $creationTimestamp
     */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }

    /**
     * @return mixed
     */
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
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
     * @param $disks
     * @throws Google_Exception
     */
    public function setDisks(/* array(Google_AttachedDisk) */
        $disks)
    {
        $this->assertIsArray($disks, 'Google_AttachedDisk', __METHOD__);
        $this->disks = $disks;
    }

    /**
     * @return mixed
     */
    public function getDisks()
    {
        return $this->disks;
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
     * @param $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param $kernel
     */
    public function setKernel($kernel)
    {
        $this->kernel = $kernel;
    }

    /**
     * @return mixed
     */
    public function getKernel()
    {
        return $this->kernel;
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
     * @param $machineType
     */
    public function setMachineType($machineType)
    {
        $this->machineType = $machineType;
    }

    /**
     * @return mixed
     */
    public function getMachineType()
    {
        return $this->machineType;
    }

    /**
     * @param Google_Metadata $metadata
     */
    public function setMetadata(Google_Metadata $metadata)
    {
        $this->metadata = $metadata;
    }

    /**
     * @return mixed
     */
    public function getMetadata()
    {
        return $this->metadata;
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
     * @param $networkInterfaces
     * @throws Google_Exception
     */
    public function setNetworkInterfaces(/* array(Google_NetworkInterface) */
        $networkInterfaces)
    {
        $this->assertIsArray($networkInterfaces, 'Google_NetworkInterface', __METHOD__);
        $this->networkInterfaces = $networkInterfaces;
    }

    /**
     * @return mixed
     */
    public function getNetworkInterfaces()
    {
        return $this->networkInterfaces;
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
     * @param $serviceAccounts
     * @throws Google_Exception
     */
    public function setServiceAccounts(/* array(Google_ServiceAccount) */
        $serviceAccounts)
    {
        $this->assertIsArray($serviceAccounts, 'Google_ServiceAccount', __METHOD__);
        $this->serviceAccounts = $serviceAccounts;
    }

    /**
     * @return mixed
     */
    public function getServiceAccounts()
    {
        return $this->serviceAccounts;
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
     * @param $statusMessage
     */
    public function setStatusMessage($statusMessage)
    {
        $this->statusMessage = $statusMessage;
    }

    /**
     * @return mixed
     */
    public function getStatusMessage()
    {
        return $this->statusMessage;
    }

    /**
     * @param Google_Tags $tags
     */
    public function setTags(Google_Tags $tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param $zone
     */
    public function setZone($zone)
    {
        $this->zone = $zone;
    }

    /**
     * @return mixed
     */
    public function getZone()
    {
        return $this->zone;
    }
}

/**
 * Class Google_InstanceAggregatedList
 */
class Google_InstanceAggregatedList extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_InstancesScopedList';
    /**
     * @var string
     */
    protected $__itemsDataType = 'map';
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
    public $selfLink;

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
     * @param Google_InstancesScopedList $items
     */
    public function setItems(Google_InstancesScopedList $items)
    {
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
}

/**
 * Class Google_InstanceList
 */
class Google_InstanceList extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Instance';
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
    public $selfLink;

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
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Instance) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Instance', __METHOD__);
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
}

/**
 * Class Google_InstancesScopedList
 */
class Google_InstancesScopedList extends Google_Model
{
    /**
     * @var string
     */
    protected $__instancesType = 'Google_Instance';
    /**
     * @var string
     */
    protected $__instancesDataType = 'array';
    /**
     * @var
     */
    public $instances;
    /**
     * @var string
     */
    protected $__warningType = 'Google_InstancesScopedListWarning';
    /**
     * @var string
     */
    protected $__warningDataType = '';
    /**
     * @var
     */
    public $warning;

    /**
     * @param $instances
     * @throws Google_Exception
     */
    public function setInstances(/* array(Google_Instance) */
        $instances)
    {
        $this->assertIsArray($instances, 'Google_Instance', __METHOD__);
        $this->instances = $instances;
    }

    /**
     * @return mixed
     */
    public function getInstances()
    {
        return $this->instances;
    }

    /**
     * @param Google_InstancesScopedListWarning $warning
     */
    public function setWarning(Google_InstancesScopedListWarning $warning)
    {
        $this->warning = $warning;
    }

    /**
     * @return mixed
     */
    public function getWarning()
    {
        return $this->warning;
    }
}

/**
 * Class Google_InstancesScopedListWarning
 */
class Google_InstancesScopedListWarning extends Google_Model
{
    /**
     * @var
     */
    public $code;
    /**
     * @var string
     */
    protected $__dataType = 'Google_InstancesScopedListWarningData';
    /**
     * @var string
     */
    protected $__dataDataType = 'array';
    /**
     * @var
     */
    public $data;
    /**
     * @var
     */
    public $message;

    /**
     * @param $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param $data
     * @throws Google_Exception
     */
    public function setData(/* array(Google_InstancesScopedListWarningData) */
        $data)
    {
        $this->assertIsArray($data, 'Google_InstancesScopedListWarningData', __METHOD__);
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
}

/**
 * Class Google_InstancesScopedListWarningData
 */
class Google_InstancesScopedListWarningData extends Google_Model
{
    /**
     * @var
     */
    public $key;
    /**
     * @var
     */
    public $value;

    /**
     * @param $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}

/**
 * Class Google_Kernel
 */
class Google_Kernel extends Google_Model
{
    /**
     * @var
     */
    public $creationTimestamp;
    /**
     * @var string
     */
    protected $__deprecatedType = 'Google_DeprecationStatus';
    /**
     * @var string
     */
    protected $__deprecatedDataType = '';
    /**
     * @var
     */
    public $deprecated;
    /**
     * @var
     */
    public $description;
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
    public $selfLink;

    /**
     * @param $creationTimestamp
     */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }

    /**
     * @return mixed
     */
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }

    /**
     * @param Google_DeprecationStatus $deprecated
     */
    public function setDeprecated(Google_DeprecationStatus $deprecated)
    {
        $this->deprecated = $deprecated;
    }

    /**
     * @return mixed
     */
    public function getDeprecated()
    {
        return $this->deprecated;
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
}

/**
 * Class Google_KernelList
 */
class Google_KernelList extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Kernel';
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
    public $selfLink;

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
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Kernel) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Kernel', __METHOD__);
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
}

/**
 * Class Google_MachineType
 */
class Google_MachineType extends Google_Model
{
    /**
     * @var
     */
    public $creationTimestamp;
    /**
     * @var string
     */
    protected $__deprecatedType = 'Google_DeprecationStatus';
    /**
     * @var string
     */
    protected $__deprecatedDataType = '';
    /**
     * @var
     */
    public $deprecated;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $guestCpus;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $imageSpaceGb;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $maximumPersistentDisks;
    /**
     * @var
     */
    public $maximumPersistentDisksSizeGb;
    /**
     * @var
     */
    public $memoryMb;
    /**
     * @var
     */
    public $name;
    /**
     * @var string
     */
    protected $__scratchDisksType = 'Google_MachineTypeScratchDisks';
    /**
     * @var string
     */
    protected $__scratchDisksDataType = 'array';
    /**
     * @var
     */
    public $scratchDisks;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $zone;

    /**
     * @param $creationTimestamp
     */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }

    /**
     * @return mixed
     */
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }

    /**
     * @param Google_DeprecationStatus $deprecated
     */
    public function setDeprecated(Google_DeprecationStatus $deprecated)
    {
        $this->deprecated = $deprecated;
    }

    /**
     * @return mixed
     */
    public function getDeprecated()
    {
        return $this->deprecated;
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
     * @param $guestCpus
     */
    public function setGuestCpus($guestCpus)
    {
        $this->guestCpus = $guestCpus;
    }

    /**
     * @return mixed
     */
    public function getGuestCpus()
    {
        return $this->guestCpus;
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
     * @param $imageSpaceGb
     */
    public function setImageSpaceGb($imageSpaceGb)
    {
        $this->imageSpaceGb = $imageSpaceGb;
    }

    /**
     * @return mixed
     */
    public function getImageSpaceGb()
    {
        return $this->imageSpaceGb;
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
     * @param $maximumPersistentDisks
     */
    public function setMaximumPersistentDisks($maximumPersistentDisks)
    {
        $this->maximumPersistentDisks = $maximumPersistentDisks;
    }

    /**
     * @return mixed
     */
    public function getMaximumPersistentDisks()
    {
        return $this->maximumPersistentDisks;
    }

    /**
     * @param $maximumPersistentDisksSizeGb
     */
    public function setMaximumPersistentDisksSizeGb($maximumPersistentDisksSizeGb)
    {
        $this->maximumPersistentDisksSizeGb = $maximumPersistentDisksSizeGb;
    }

    /**
     * @return mixed
     */
    public function getMaximumPersistentDisksSizeGb()
    {
        return $this->maximumPersistentDisksSizeGb;
    }

    /**
     * @param $memoryMb
     */
    public function setMemoryMb($memoryMb)
    {
        $this->memoryMb = $memoryMb;
    }

    /**
     * @return mixed
     */
    public function getMemoryMb()
    {
        return $this->memoryMb;
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
     * @param $scratchDisks
     * @throws Google_Exception
     */
    public function setScratchDisks(/* array(Google_MachineTypeScratchDisks) */
        $scratchDisks)
    {
        $this->assertIsArray($scratchDisks, 'Google_MachineTypeScratchDisks', __METHOD__);
        $this->scratchDisks = $scratchDisks;
    }

    /**
     * @return mixed
     */
    public function getScratchDisks()
    {
        return $this->scratchDisks;
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
     * @param $zone
     */
    public function setZone($zone)
    {
        $this->zone = $zone;
    }

    /**
     * @return mixed
     */
    public function getZone()
    {
        return $this->zone;
    }
}

/**
 * Class Google_MachineTypeAggregatedList
 */
class Google_MachineTypeAggregatedList extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_MachineTypesScopedList';
    /**
     * @var string
     */
    protected $__itemsDataType = 'map';
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
    public $selfLink;

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
     * @param Google_MachineTypesScopedList $items
     */
    public function setItems(Google_MachineTypesScopedList $items)
    {
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
}

/**
 * Class Google_MachineTypeList
 */
class Google_MachineTypeList extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_MachineType';
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
    public $selfLink;

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
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_MachineType) */
        $items)
    {
        $this->assertIsArray($items, 'Google_MachineType', __METHOD__);
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
}

/**
 * Class Google_MachineTypeScratchDisks
 */
class Google_MachineTypeScratchDisks extends Google_Model
{
    /**
     * @var
     */
    public $diskGb;

    /**
     * @param $diskGb
     */
    public function setDiskGb($diskGb)
    {
        $this->diskGb = $diskGb;
    }

    /**
     * @return mixed
     */
    public function getDiskGb()
    {
        return $this->diskGb;
    }
}

/**
 * Class Google_MachineTypesScopedList
 */
class Google_MachineTypesScopedList extends Google_Model
{
    /**
     * @var string
     */
    protected $__machineTypesType = 'Google_MachineType';
    /**
     * @var string
     */
    protected $__machineTypesDataType = 'array';
    /**
     * @var
     */
    public $machineTypes;
    /**
     * @var string
     */
    protected $__warningType = 'Google_MachineTypesScopedListWarning';
    /**
     * @var string
     */
    protected $__warningDataType = '';
    /**
     * @var
     */
    public $warning;

    /**
     * @param $machineTypes
     * @throws Google_Exception
     */
    public function setMachineTypes(/* array(Google_MachineType) */
        $machineTypes)
    {
        $this->assertIsArray($machineTypes, 'Google_MachineType', __METHOD__);
        $this->machineTypes = $machineTypes;
    }

    /**
     * @return mixed
     */
    public function getMachineTypes()
    {
        return $this->machineTypes;
    }

    /**
     * @param Google_MachineTypesScopedListWarning $warning
     */
    public function setWarning(Google_MachineTypesScopedListWarning $warning)
    {
        $this->warning = $warning;
    }

    /**
     * @return mixed
     */
    public function getWarning()
    {
        return $this->warning;
    }
}

/**
 * Class Google_MachineTypesScopedListWarning
 */
class Google_MachineTypesScopedListWarning extends Google_Model
{
    /**
     * @var
     */
    public $code;
    /**
     * @var string
     */
    protected $__dataType = 'Google_MachineTypesScopedListWarningData';
    /**
     * @var string
     */
    protected $__dataDataType = 'array';
    /**
     * @var
     */
    public $data;
    /**
     * @var
     */
    public $message;

    /**
     * @param $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param $data
     * @throws Google_Exception
     */
    public function setData(/* array(Google_MachineTypesScopedListWarningData) */
        $data)
    {
        $this->assertIsArray($data, 'Google_MachineTypesScopedListWarningData', __METHOD__);
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
}

/**
 * Class Google_MachineTypesScopedListWarningData
 */
class Google_MachineTypesScopedListWarningData extends Google_Model
{
    /**
     * @var
     */
    public $key;
    /**
     * @var
     */
    public $value;

    /**
     * @param $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}

/**
 * Class Google_Metadata
 */
class Google_Metadata extends Google_Model
{
    /**
     * @var
     */
    public $fingerprint;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_MetadataItems';
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
     * @param $fingerprint
     */
    public function setFingerprint($fingerprint)
    {
        $this->fingerprint = $fingerprint;
    }

    /**
     * @return mixed
     */
    public function getFingerprint()
    {
        return $this->fingerprint;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_MetadataItems) */
        $items)
    {
        $this->assertIsArray($items, 'Google_MetadataItems', __METHOD__);
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
 * Class Google_MetadataItems
 */
class Google_MetadataItems extends Google_Model
{
    /**
     * @var
     */
    public $key;
    /**
     * @var
     */
    public $value;

    /**
     * @param $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}

/**
 * Class Google_Network
 */
class Google_Network extends Google_Model
{
    /**
     * @var
     */
    public $IPv4Range;
    /**
     * @var
     */
    public $creationTimestamp;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $gatewayIPv4;
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
    public $selfLink;

    /**
     * @param $IPv4Range
     */
    public function setIPv4Range($IPv4Range)
    {
        $this->IPv4Range = $IPv4Range;
    }

    /**
     * @return mixed
     */
    public function getIPv4Range()
    {
        return $this->IPv4Range;
    }

    /**
     * @param $creationTimestamp
     */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }

    /**
     * @return mixed
     */
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
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
     * @param $gatewayIPv4
     */
    public function setGatewayIPv4($gatewayIPv4)
    {
        $this->gatewayIPv4 = $gatewayIPv4;
    }

    /**
     * @return mixed
     */
    public function getGatewayIPv4()
    {
        return $this->gatewayIPv4;
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
}

/**
 * Class Google_NetworkInterface
 */
class Google_NetworkInterface extends Google_Model
{
    /**
     * @var string
     */
    protected $__accessConfigsType = 'Google_AccessConfig';
    /**
     * @var string
     */
    protected $__accessConfigsDataType = 'array';
    /**
     * @var
     */
    public $accessConfigs;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $network;
    /**
     * @var
     */
    public $networkIP;

    /**
     * @param $accessConfigs
     * @throws Google_Exception
     */
    public function setAccessConfigs(/* array(Google_AccessConfig) */
        $accessConfigs)
    {
        $this->assertIsArray($accessConfigs, 'Google_AccessConfig', __METHOD__);
        $this->accessConfigs = $accessConfigs;
    }

    /**
     * @return mixed
     */
    public function getAccessConfigs()
    {
        return $this->accessConfigs;
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
     * @param $network
     */
    public function setNetwork($network)
    {
        $this->network = $network;
    }

    /**
     * @return mixed
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * @param $networkIP
     */
    public function setNetworkIP($networkIP)
    {
        $this->networkIP = $networkIP;
    }

    /**
     * @return mixed
     */
    public function getNetworkIP()
    {
        return $this->networkIP;
    }
}

/**
 * Class Google_NetworkList
 */
class Google_NetworkList extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Network';
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
    public $selfLink;

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
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Network) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Network', __METHOD__);
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
}

/**
 * Class Google_Operation
 */
class Google_Operation extends Google_Model
{
    /**
     * @var
     */
    public $clientOperationId;
    /**
     * @var
     */
    public $creationTimestamp;
    /**
     * @var
     */
    public $endTime;
    /**
     * @var string
     */
    protected $__errorType = 'Google_OperationError';
    /**
     * @var string
     */
    protected $__errorDataType = '';
    /**
     * @var
     */
    public $error;
    /**
     * @var
     */
    public $httpErrorMessage;
    /**
     * @var
     */
    public $httpErrorStatusCode;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $insertTime;
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
    public $operationType;
    /**
     * @var
     */
    public $progress;
    /**
     * @var
     */
    public $region;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $startTime;
    /**
     * @var
     */
    public $status;
    /**
     * @var
     */
    public $statusMessage;
    /**
     * @var
     */
    public $targetId;
    /**
     * @var
     */
    public $targetLink;
    /**
     * @var
     */
    public $user;
    /**
     * @var string
     */
    protected $__warningsType = 'Google_OperationWarnings';
    /**
     * @var string
     */
    protected $__warningsDataType = 'array';
    /**
     * @var
     */
    public $warnings;
    /**
     * @var
     */
    public $zone;

    /**
     * @param $clientOperationId
     */
    public function setClientOperationId($clientOperationId)
    {
        $this->clientOperationId = $clientOperationId;
    }

    /**
     * @return mixed
     */
    public function getClientOperationId()
    {
        return $this->clientOperationId;
    }

    /**
     * @param $creationTimestamp
     */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }

    /**
     * @return mixed
     */
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }

    /**
     * @param $endTime
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param Google_OperationError $error
     */
    public function setError(Google_OperationError $error)
    {
        $this->error = $error;
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param $httpErrorMessage
     */
    public function setHttpErrorMessage($httpErrorMessage)
    {
        $this->httpErrorMessage = $httpErrorMessage;
    }

    /**
     * @return mixed
     */
    public function getHttpErrorMessage()
    {
        return $this->httpErrorMessage;
    }

    /**
     * @param $httpErrorStatusCode
     */
    public function setHttpErrorStatusCode($httpErrorStatusCode)
    {
        $this->httpErrorStatusCode = $httpErrorStatusCode;
    }

    /**
     * @return mixed
     */
    public function getHttpErrorStatusCode()
    {
        return $this->httpErrorStatusCode;
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
     * @param $insertTime
     */
    public function setInsertTime($insertTime)
    {
        $this->insertTime = $insertTime;
    }

    /**
     * @return mixed
     */
    public function getInsertTime()
    {
        return $this->insertTime;
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
     * @param $operationType
     */
    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;
    }

    /**
     * @return mixed
     */
    public function getOperationType()
    {
        return $this->operationType;
    }

    /**
     * @param $progress
     */
    public function setProgress($progress)
    {
        $this->progress = $progress;
    }

    /**
     * @return mixed
     */
    public function getProgress()
    {
        return $this->progress;
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
     * @param $startTime
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
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
     * @param $statusMessage
     */
    public function setStatusMessage($statusMessage)
    {
        $this->statusMessage = $statusMessage;
    }

    /**
     * @return mixed
     */
    public function getStatusMessage()
    {
        return $this->statusMessage;
    }

    /**
     * @param $targetId
     */
    public function setTargetId($targetId)
    {
        $this->targetId = $targetId;
    }

    /**
     * @return mixed
     */
    public function getTargetId()
    {
        return $this->targetId;
    }

    /**
     * @param $targetLink
     */
    public function setTargetLink($targetLink)
    {
        $this->targetLink = $targetLink;
    }

    /**
     * @return mixed
     */
    public function getTargetLink()
    {
        return $this->targetLink;
    }

    /**
     * @param $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param $warnings
     * @throws Google_Exception
     */
    public function setWarnings(/* array(Google_OperationWarnings) */
        $warnings)
    {
        $this->assertIsArray($warnings, 'Google_OperationWarnings', __METHOD__);
        $this->warnings = $warnings;
    }

    /**
     * @return mixed
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * @param $zone
     */
    public function setZone($zone)
    {
        $this->zone = $zone;
    }

    /**
     * @return mixed
     */
    public function getZone()
    {
        return $this->zone;
    }
}

/**
 * Class Google_OperationAggregatedList
 */
class Google_OperationAggregatedList extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_OperationsScopedList';
    /**
     * @var string
     */
    protected $__itemsDataType = 'map';
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
    public $selfLink;

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
     * @param Google_OperationsScopedList $items
     */
    public function setItems(Google_OperationsScopedList $items)
    {
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
}

/**
 * Class Google_OperationError
 */
class Google_OperationError extends Google_Model
{
    /**
     * @var string
     */
    protected $__errorsType = 'Google_OperationErrorErrors';
    /**
     * @var string
     */
    protected $__errorsDataType = 'array';
    /**
     * @var
     */
    public $errors;

    /**
     * @param $errors
     * @throws Google_Exception
     */
    public function setErrors(/* array(Google_OperationErrorErrors) */
        $errors)
    {
        $this->assertIsArray($errors, 'Google_OperationErrorErrors', __METHOD__);
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
 * Class Google_OperationErrorErrors
 */
class Google_OperationErrorErrors extends Google_Model
{
    /**
     * @var
     */
    public $code;
    /**
     * @var
     */
    public $location;
    /**
     * @var
     */
    public $message;

    /**
     * @param $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
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
     * @param $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
}

/**
 * Class Google_OperationList
 */
class Google_OperationList extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Operation';
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
    public $selfLink;

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
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Operation) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Operation', __METHOD__);
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
}

/**
 * Class Google_OperationWarnings
 */
class Google_OperationWarnings extends Google_Model
{
    /**
     * @var
     */
    public $code;
    /**
     * @var string
     */
    protected $__dataType = 'Google_OperationWarningsData';
    /**
     * @var string
     */
    protected $__dataDataType = 'array';
    /**
     * @var
     */
    public $data;
    /**
     * @var
     */
    public $message;

    /**
     * @param $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param $data
     * @throws Google_Exception
     */
    public function setData(/* array(Google_OperationWarningsData) */
        $data)
    {
        $this->assertIsArray($data, 'Google_OperationWarningsData', __METHOD__);
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
}

/**
 * Class Google_OperationWarningsData
 */
class Google_OperationWarningsData extends Google_Model
{
    /**
     * @var
     */
    public $key;
    /**
     * @var
     */
    public $value;

    /**
     * @param $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
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
 * Class Google_OperationsScopedList
 */
class Google_OperationsScopedList extends Google_Model
{
    /**
     * @var string
     */
    protected $__operationsType = 'Google_Operation';
    /**
     * @var string
     */
    protected $__operationsDataType = 'array';
    /**
     * @var
     */
    public $operations;
    /**
     * @var string
     */
    protected $__warningType = 'Google_OperationsScopedListWarning';
    /**
     * @var string
     */
    protected $__warningDataType = '';
    /**
     * @var
     */
    public $warning;

    /**
     * @param $operations
     * @throws Google_Exception
     */
    public function setOperations(/* array(Google_Operation) */
        $operations)
    {
        $this->assertIsArray($operations, 'Google_Operation', __METHOD__);
        $this->operations = $operations;
    }

    /**
     * @return mixed
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * @param Google_OperationsScopedListWarning $warning
     */
    public function setWarning(Google_OperationsScopedListWarning $warning)
    {
        $this->warning = $warning;
    }

    /**
     * @return mixed
     */
    public function getWarning()
    {
        return $this->warning;
    }
}

/**
 * Class Google_OperationsScopedListWarning
 */
class Google_OperationsScopedListWarning extends Google_Model
{
    /**
     * @var
     */
    public $code;
    /**
     * @var string
     */
    protected $__dataType = 'Google_OperationsScopedListWarningData';
    /**
     * @var string
     */
    protected $__dataDataType = 'array';
    /**
     * @var
     */
    public $data;
    /**
     * @var
     */
    public $message;

    /**
     * @param $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param $data
     * @throws Google_Exception
     */
    public function setData(/* array(Google_OperationsScopedListWarningData) */
        $data)
    {
        $this->assertIsArray($data, 'Google_OperationsScopedListWarningData', __METHOD__);
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
}

/**
 * Class Google_OperationsScopedListWarningData
 */
class Google_OperationsScopedListWarningData extends Google_Model
{
    /**
     * @var
     */
    public $key;
    /**
     * @var
     */
    public $value;

    /**
     * @param $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
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
 * Class Google_Project
 */
class Google_Project extends Google_Model
{
    /**
     * @var string
     */
    protected $__commonInstanceMetadataType = 'Google_Metadata';
    /**
     * @var string
     */
    protected $__commonInstanceMetadataDataType = '';
    /**
     * @var
     */
    public $commonInstanceMetadata;
    /**
     * @var
     */
    public $creationTimestamp;
    /**
     * @var
     */
    public $description;
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
     * @var string
     */
    protected $__quotasType = 'Google_Quota';
    /**
     * @var string
     */
    protected $__quotasDataType = 'array';
    /**
     * @var
     */
    public $quotas;
    /**
     * @var
     */
    public $selfLink;

    /**
     * @param Google_Metadata $commonInstanceMetadata
     */
    public function setCommonInstanceMetadata(Google_Metadata $commonInstanceMetadata)
    {
        $this->commonInstanceMetadata = $commonInstanceMetadata;
    }

    /**
     * @return mixed
     */
    public function getCommonInstanceMetadata()
    {
        return $this->commonInstanceMetadata;
    }

    /**
     * @param $creationTimestamp
     */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }

    /**
     * @return mixed
     */
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
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
     * @param $quotas
     * @throws Google_Exception
     */
    public function setQuotas(/* array(Google_Quota) */
        $quotas)
    {
        $this->assertIsArray($quotas, 'Google_Quota', __METHOD__);
        $this->quotas = $quotas;
    }

    /**
     * @return mixed
     */
    public function getQuotas()
    {
        return $this->quotas;
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
}

/**
 * Class Google_Quota
 */
class Google_Quota extends Google_Model
{
    /**
     * @var
     */
    public $limit;
    /**
     * @var
     */
    public $metric;
    /**
     * @var
     */
    public $usage;

    /**
     * @param $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    /**
     * @return mixed
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param $metric
     */
    public function setMetric($metric)
    {
        $this->metric = $metric;
    }

    /**
     * @return mixed
     */
    public function getMetric()
    {
        return $this->metric;
    }

    /**
     * @param $usage
     */
    public function setUsage($usage)
    {
        $this->usage = $usage;
    }

    /**
     * @return mixed
     */
    public function getUsage()
    {
        return $this->usage;
    }
}

/**
 * Class Google_Region
 */
class Google_Region extends Google_Model
{
    /**
     * @var
     */
    public $creationTimestamp;
    /**
     * @var string
     */
    protected $__deprecatedType = 'Google_DeprecationStatus';
    /**
     * @var string
     */
    protected $__deprecatedDataType = '';
    /**
     * @var
     */
    public $deprecated;
    /**
     * @var
     */
    public $description;
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
     * @var string
     */
    protected $__quotasType = 'Google_Quota';
    /**
     * @var string
     */
    protected $__quotasDataType = 'array';
    /**
     * @var
     */
    public $quotas;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $status;
    /**
     * @var
     */
    public $zones;

    /**
     * @param $creationTimestamp
     */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }

    /**
     * @return mixed
     */
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }

    /**
     * @param Google_DeprecationStatus $deprecated
     */
    public function setDeprecated(Google_DeprecationStatus $deprecated)
    {
        $this->deprecated = $deprecated;
    }

    /**
     * @return mixed
     */
    public function getDeprecated()
    {
        return $this->deprecated;
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
     * @param $quotas
     * @throws Google_Exception
     */
    public function setQuotas(/* array(Google_Quota) */
        $quotas)
    {
        $this->assertIsArray($quotas, 'Google_Quota', __METHOD__);
        $this->quotas = $quotas;
    }

    /**
     * @return mixed
     */
    public function getQuotas()
    {
        return $this->quotas;
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
     * @param $zones
     * @throws Google_Exception
     */
    public function setZones(/* array(Google_string) */
        $zones)
    {
        $this->assertIsArray($zones, 'Google_string', __METHOD__);
        $this->zones = $zones;
    }

    /**
     * @return mixed
     */
    public function getZones()
    {
        return $this->zones;
    }
}

/**
 * Class Google_RegionList
 */
class Google_RegionList extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Region';
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
    public $selfLink;

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
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Region) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Region', __METHOD__);
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
}

/**
 * Class Google_Route
 */
class Google_Route extends Google_Model
{
    /**
     * @var
     */
    public $creationTimestamp;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $destRange;
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
    public $network;
    /**
     * @var
     */
    public $nextHopGateway;
    /**
     * @var
     */
    public $nextHopInstance;
    /**
     * @var
     */
    public $nextHopIp;
    /**
     * @var
     */
    public $nextHopNetwork;
    /**
     * @var
     */
    public $priority;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $tags;
    /**
     * @var string
     */
    protected $__warningsType = 'Google_RouteWarnings';
    /**
     * @var string
     */
    protected $__warningsDataType = 'array';
    /**
     * @var
     */
    public $warnings;

    /**
     * @param $creationTimestamp
     */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }

    /**
     * @return mixed
     */
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
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
     * @param $destRange
     */
    public function setDestRange($destRange)
    {
        $this->destRange = $destRange;
    }

    /**
     * @return mixed
     */
    public function getDestRange()
    {
        return $this->destRange;
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
     * @param $network
     */
    public function setNetwork($network)
    {
        $this->network = $network;
    }

    /**
     * @return mixed
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * @param $nextHopGateway
     */
    public function setNextHopGateway($nextHopGateway)
    {
        $this->nextHopGateway = $nextHopGateway;
    }

    /**
     * @return mixed
     */
    public function getNextHopGateway()
    {
        return $this->nextHopGateway;
    }

    /**
     * @param $nextHopInstance
     */
    public function setNextHopInstance($nextHopInstance)
    {
        $this->nextHopInstance = $nextHopInstance;
    }

    /**
     * @return mixed
     */
    public function getNextHopInstance()
    {
        return $this->nextHopInstance;
    }

    /**
     * @param $nextHopIp
     */
    public function setNextHopIp($nextHopIp)
    {
        $this->nextHopIp = $nextHopIp;
    }

    /**
     * @return mixed
     */
    public function getNextHopIp()
    {
        return $this->nextHopIp;
    }

    /**
     * @param $nextHopNetwork
     */
    public function setNextHopNetwork($nextHopNetwork)
    {
        $this->nextHopNetwork = $nextHopNetwork;
    }

    /**
     * @return mixed
     */
    public function getNextHopNetwork()
    {
        return $this->nextHopNetwork;
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
     * @param $tags
     * @throws Google_Exception
     */
    public function setTags(/* array(Google_string) */
        $tags)
    {
        $this->assertIsArray($tags, 'Google_string', __METHOD__);
        $this->tags = $tags;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param $warnings
     * @throws Google_Exception
     */
    public function setWarnings(/* array(Google_RouteWarnings) */
        $warnings)
    {
        $this->assertIsArray($warnings, 'Google_RouteWarnings', __METHOD__);
        $this->warnings = $warnings;
    }

    /**
     * @return mixed
     */
    public function getWarnings()
    {
        return $this->warnings;
    }
}

/**
 * Class Google_RouteList
 */
class Google_RouteList extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Route';
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
    public $selfLink;

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
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Route) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Route', __METHOD__);
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
}

/**
 * Class Google_RouteWarnings
 */
class Google_RouteWarnings extends Google_Model
{
    /**
     * @var
     */
    public $code;
    /**
     * @var string
     */
    protected $__dataType = 'Google_RouteWarningsData';
    /**
     * @var string
     */
    protected $__dataDataType = 'array';
    /**
     * @var
     */
    public $data;
    /**
     * @var
     */
    public $message;

    /**
     * @param $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param $data
     * @throws Google_Exception
     */
    public function setData(/* array(Google_RouteWarningsData) */
        $data)
    {
        $this->assertIsArray($data, 'Google_RouteWarningsData', __METHOD__);
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
}

/**
 * Class Google_RouteWarningsData
 */
class Google_RouteWarningsData extends Google_Model
{
    /**
     * @var
     */
    public $key;
    /**
     * @var
     */
    public $value;

    /**
     * @param $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
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
 * Class Google_SerialPortOutput
 */
class Google_SerialPortOutput extends Google_Model
{
    /**
     * @var
     */
    public $contents;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $selfLink;

    /**
     * @param $contents
     */
    public function setContents($contents)
    {
        $this->contents = $contents;
    }

    /**
     * @return mixed
     */
    public function getContents()
    {
        return $this->contents;
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
}

/**
 * Class Google_ServiceAccount
 */
class Google_ServiceAccount extends Google_Model
{
    /**
     * @var
     */
    public $email;
    /**
     * @var
     */
    public $scopes;

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
     * @param $scopes
     * @throws Google_Exception
     */
    public function setScopes(/* array(Google_string) */
        $scopes)
    {
        $this->assertIsArray($scopes, 'Google_string', __METHOD__);
        $this->scopes = $scopes;
    }

    /**
     * @return mixed
     */
    public function getScopes()
    {
        return $this->scopes;
    }
}

/**
 * Class Google_Snapshot
 */
class Google_Snapshot extends Google_Model
{
    /**
     * @var
     */
    public $creationTimestamp;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $diskSizeGb;
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
    public $selfLink;
    /**
     * @var
     */
    public $sourceDisk;
    /**
     * @var
     */
    public $sourceDiskId;
    /**
     * @var
     */
    public $status;

    /**
     * @param $creationTimestamp
     */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }

    /**
     * @return mixed
     */
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
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
     * @param $diskSizeGb
     */
    public function setDiskSizeGb($diskSizeGb)
    {
        $this->diskSizeGb = $diskSizeGb;
    }

    /**
     * @return mixed
     */
    public function getDiskSizeGb()
    {
        return $this->diskSizeGb;
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
     * @param $sourceDisk
     */
    public function setSourceDisk($sourceDisk)
    {
        $this->sourceDisk = $sourceDisk;
    }

    /**
     * @return mixed
     */
    public function getSourceDisk()
    {
        return $this->sourceDisk;
    }

    /**
     * @param $sourceDiskId
     */
    public function setSourceDiskId($sourceDiskId)
    {
        $this->sourceDiskId = $sourceDiskId;
    }

    /**
     * @return mixed
     */
    public function getSourceDiskId()
    {
        return $this->sourceDiskId;
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
}

/**
 * Class Google_SnapshotList
 */
class Google_SnapshotList extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Snapshot';
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
    public $selfLink;

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
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Snapshot) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Snapshot', __METHOD__);
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
}

/**
 * Class Google_Tags
 */
class Google_Tags extends Google_Model
{
    /**
     * @var
     */
    public $fingerprint;
    /**
     * @var
     */
    public $items;

    /**
     * @param $fingerprint
     */
    public function setFingerprint($fingerprint)
    {
        $this->fingerprint = $fingerprint;
    }

    /**
     * @return mixed
     */
    public function getFingerprint()
    {
        return $this->fingerprint;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_string) */
        $items)
    {
        $this->assertIsArray($items, 'Google_string', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }
}

/**
 * Class Google_Zone
 */
class Google_Zone extends Google_Model
{
    /**
     * @var
     */
    public $creationTimestamp;
    /**
     * @var string
     */
    protected $__deprecatedType = 'Google_DeprecationStatus';
    /**
     * @var string
     */
    protected $__deprecatedDataType = '';
    /**
     * @var
     */
    public $deprecated;
    /**
     * @var
     */
    public $description;
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
    protected $__maintenanceWindowsType = 'Google_ZoneMaintenanceWindows';
    /**
     * @var string
     */
    protected $__maintenanceWindowsDataType = 'array';
    /**
     * @var
     */
    public $maintenanceWindows;
    /**
     * @var
     */
    public $name;
    /**
     * @var string
     */
    protected $__quotasType = 'Google_Quota';
    /**
     * @var string
     */
    protected $__quotasDataType = 'array';
    /**
     * @var
     */
    public $quotas;
    /**
     * @var
     */
    public $region;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $status;

    /**
     * @param $creationTimestamp
     */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }

    /**
     * @return mixed
     */
    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }

    /**
     * @param Google_DeprecationStatus $deprecated
     */
    public function setDeprecated(Google_DeprecationStatus $deprecated)
    {
        $this->deprecated = $deprecated;
    }

    /**
     * @return mixed
     */
    public function getDeprecated()
    {
        return $this->deprecated;
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
     * @param $maintenanceWindows
     * @throws Google_Exception
     */
    public function setMaintenanceWindows(/* array(Google_ZoneMaintenanceWindows) */
        $maintenanceWindows)
    {
        $this->assertIsArray($maintenanceWindows, 'Google_ZoneMaintenanceWindows', __METHOD__);
        $this->maintenanceWindows = $maintenanceWindows;
    }

    /**
     * @return mixed
     */
    public function getMaintenanceWindows()
    {
        return $this->maintenanceWindows;
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
     * @param $quotas
     * @throws Google_Exception
     */
    public function setQuotas(/* array(Google_Quota) */
        $quotas)
    {
        $this->assertIsArray($quotas, 'Google_Quota', __METHOD__);
        $this->quotas = $quotas;
    }

    /**
     * @return mixed
     */
    public function getQuotas()
    {
        return $this->quotas;
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
 * Class Google_ZoneList
 */
class Google_ZoneList extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Zone';
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
    public $selfLink;

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
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Zone) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Zone', __METHOD__);
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
}

/**
 * Class Google_ZoneMaintenanceWindows
 */
class Google_ZoneMaintenanceWindows extends Google_Model
{
    /**
     * @var
     */
    public $beginTime;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $endTime;
    /**
     * @var
     */
    public $name;

    /**
     * @param $beginTime
     */
    public function setBeginTime($beginTime)
    {
        $this->beginTime = $beginTime;
    }

    /**
     * @return mixed
     */
    public function getBeginTime()
    {
        return $this->beginTime;
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
     * @param $endTime
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
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
}
