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
 * The "activities" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_YouTubeService(...);
 *   $activities = $youtubeService->activities;
 *  </code>
 */
class Google_ActivitiesServiceResource extends Google_ServiceResource
{

    /**
     * Posts a bulletin for a specific channel. (The user submitting the request must be authorized to
     * act on the channel's behalf.) (activities.insert)
     *
     * @param string $part The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.
     * The part names that you can include in the parameter value are snippet and contentDetails.
     * @param Google_Activity $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Activity
     * @throws Google_Exception
     */
    public function insert($part, Google_Activity $postBody, $optParams = [])
    {
        $params = ['part' => $part, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Activity($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns a list of channel activity events that match the request criteria. For example, you can
     * retrieve events associated with a particular channel, events associated with the user's
     * subscriptions and Google+ friends, or the YouTube home page feed, which is customized for each
     * user. (activities.list)
     *
     * @param string $part The part parameter specifies a comma-separated list of one or more activity resource properties that the API response will include. The part names that you can include in the parameter value are id, snippet, and contentDetails.
     * If the parameter identifies a property that contains child properties, the child properties will be included in the response. For example, in a activity resource, the snippet property contains other properties that identify the type of activity, a display title for the activity, and so forth. If you set part=snippet, the API response will also contain all of those nested properties.
     * @param array $optParams Optional parameters.
     * @return Google_ActivityListResponse
     * @throws Google_Exception
     * @opt_param string channelId The channelId parameter specifies a unique YouTube channel ID. The API will then return a list of that channel's activities.
     * @opt_param bool home Set this parameter's value to true to retrieve the activity feed that displays on the YouTube home page for the currently authenticated user.
     * @opt_param string maxResults USE_DESCRIPTION --- channels:list:maxResults
     * @opt_param bool mine Set this parameter's value to true to retrieve a feed of the authenticated user's activities.
     * @opt_param string pageToken USE_DESCRIPTION --- channels:list:pageToken
     * @opt_param string publishedAfter The publishedAfter parameter specifies the earliest date and time that an activity could have occurred for that activity to be included in the API response. If the parameter value specifies a day, but not a time, then any activities that occurred that day will be included in the result set. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format.
     * @opt_param string publishedBefore The publishedBefore parameter specifies the date and time before which an activity must have occurred for that activity to be included in the API response. If the parameter value specifies a day, but not a time, then any activities that occurred that day will be excluded from the result set. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format.
     * @opt_param string regionCode The regionCode parameter instructs the API to return results for the specified country. The parameter value is an ISO 3166-1 alpha-2 country code.
     */
    public function listActivities($part, $optParams = [])
    {
        $params = ['part' => $part];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_ActivityListResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "channelBanners" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_YouTubeService(...);
 *   $channelBanners = $youtubeService->channelBanners;
 *  </code>
 */
class Google_ChannelBannersServiceResource extends Google_ServiceResource
{

    /**
     * Uploads a channel banner to YouTube. (channelBanners.insert)
     *
     * @param Google_ChannelBannerResource $postBody
     * @param array $optParams Optional parameters.
     * @return Google_ChannelBannerResource
     * @throws Google_Exception
     * @opt_param string onBehalfOfContentOwner USE_DESCRIPTION --- channels:list:onBehalfOfContentOwner
     */
    public function insert(Google_ChannelBannerResource $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_ChannelBannerResource($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "channels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_YouTubeService(...);
 *   $channels = $youtubeService->channels;
 *  </code>
 */
class Google_ChannelsServiceResource extends Google_ServiceResource
{

    /**
     * Returns a collection of zero or more channel resources that match the request criteria.
     * (channels.list)
     *
     * @param string $part The part parameter specifies a comma-separated list of one or more channel resource properties that the API response will include. The part names that you can include in the parameter value are id, snippet, contentDetails, statistics, topicDetails, and invideoPromotion.
     * If the parameter identifies a property that contains child properties, the child properties will be included in the response. For example, in a channel resource, the contentDetails property contains other properties, such as the uploads properties. As such, if you set part=contentDetails, the API response will also contain all of those nested properties.
     * @param array $optParams Optional parameters.
     * @return Google_ChannelListResponse
     * @throws Google_Exception
     * @opt_param string categoryId The categoryId parameter specifies a YouTube guide category, thereby requesting YouTube channels associated with that category.
     * @opt_param string forUsername The forUsername parameter specifies a YouTube username, thereby requesting the channel associated with that username.
     * @opt_param string id The id parameter specifies a comma-separated list of the YouTube channel ID(s) for the resource(s) that are being retrieved. In a channel resource, the id property specifies the channel's YouTube channel ID.
     * @opt_param bool managedByMe Set this parameter's value to true to instruct the API to only return channels managed by the content owner that the onBehalfOfContentOwner parameter specifies. The user must be authenticated as a CMS account linked to the specified content owner and onBehalfOfContentOwner must be provided.
     * @opt_param string maxResults The maxResults parameter specifies the maximum number of items that should be returned in the result set.
     * @opt_param bool mine Set this parameter's value to true to instruct the API to only return channels owned by the authenticated user.
     * @opt_param bool mySubscribers Set this parameter's value to true to retrieve a list of channels that subscribed to the authenticated user's channel.
     * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter indicates that the authenticated user is acting on behalf of the content owner specified in the parameter value. This parameter is intended for YouTube content partners that own and manage many different YouTube channels. It allows content owners to authenticate once and get access to all their video and channel data, without having to provide authentication credentials for each individual channel. The actual CMS account that the user authenticates with needs to be linked to the specified YouTube content owner.
     * @opt_param string pageToken The pageToken parameter identifies a specific page in the result set that should be returned. In an API response, the nextPageToken and prevPageToken properties identify other pages that could be retrieved.
     */
    public function listChannels($part, $optParams = [])
    {
        $params = ['part' => $part];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_ChannelListResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates a channel's metadata. (channels.update)
     *
     * @param string $part The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.
     * The part names that you can include in the parameter value are id and invideoPromotion.
     * Note that this method will override the existing values for all of the mutable properties that are contained in any parts that the parameter value specifies.
     * @param Google_Channel $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Channel
     * @throws Google_Exception
     * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter indicates that the authenticated user is acting on behalf of the content owner specified in the parameter value. This parameter is intended for YouTube content partners that own and manage many different YouTube channels. It allows content owners to authenticate once and get access to all their video and channel data, without having to provide authentication credentials for each individual channel. The actual CMS account that the user authenticates with needs to be linked to the specified YouTube content owner.
     */
    public function update($part, Google_Channel $postBody, $optParams = [])
    {
        $params = ['part' => $part, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Channel($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "guideCategories" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_YouTubeService(...);
 *   $guideCategories = $youtubeService->guideCategories;
 *  </code>
 */
class Google_GuideCategoriesServiceResource extends Google_ServiceResource
{

    /**
     * Returns a list of categories that can be associated with YouTube channels. (guideCategories.list)
     *
     * @param string $part The part parameter specifies a comma-separated list of one or more guideCategory resource properties that the API response will include. The part names that you can include in the parameter value are id and snippet.
     * If the parameter identifies a property that contains child properties, the child properties will be included in the response. For example, in a guideCategory resource, the snippet property contains other properties, such as the category's title. If you set part=snippet, the API response will also contain all of those nested properties.
     * @param array $optParams Optional parameters.
     * @return Google_GuideCategoryListResponse
     * @throws Google_Exception
     * @opt_param string hl The hl parameter specifies the language that will be used for text values in the API response.
     * @opt_param string id The id parameter specifies a comma-separated list of the YouTube channel category ID(s) for the resource(s) that are being retrieved. In a guideCategory resource, the id property specifies the YouTube channel category ID.
     * @opt_param string regionCode The regionCode parameter instructs the API to return the list of guide categories available in the specified country. The parameter value is an ISO 3166-1 alpha-2 country code.
     */
    public function listGuideCategories($part, $optParams = [])
    {
        $params = ['part' => $part];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_GuideCategoryListResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "liveBroadcasts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_YouTubeService(...);
 *   $liveBroadcasts = $youtubeService->liveBroadcasts;
 *  </code>
 */
class Google_LiveBroadcastsServiceResource extends Google_ServiceResource
{

    /**
     * Binds a YouTube broadcast to a stream or removes an existing binding between a broadcast and a
     * stream. A broadcast can only be bound to one video stream. (liveBroadcasts.bind)
     *
     * @param string $id The id parameter specifies the unique ID of the broadcast that is being bound to a video stream.
     * @param string $part The part parameter specifies a comma-separated list of one or more liveBroadcast resource properties that the API response will include. The part names that you can include in the parameter value are id, snippet, contentDetails, and status.
     * @param array $optParams Optional parameters.
     * @return Google_LiveBroadcast
     * @throws Google_Exception
     * @opt_param string onBehalfOfContentOwner USE_DESCRIPTION --- channels:list:onBehalfOfContentOwner
     * @opt_param string streamId The streamId parameter specifies the unique ID of the video stream that is being bound to a broadcast. If this parameter is omitted, the API will remove any existing binding between the broadcast and a video stream.
     */
    public function bind($id, $part, $optParams = [])
    {
        $params = ['id' => $id, 'part' => $part];
        $params = array_merge($params, $optParams);
        $data = $this->__call('bind', [$params]);
        if ($this->useObjects()) {
            return new Google_LiveBroadcast($data);
        } else {
            return $data;
        }
    }

    /**
     * Control the slate of the broadacast. (liveBroadcasts.control)
     *
     * @param string $id The id parameter specifies the YouTube live broadcast ID for the resource that is being deleted.
     * @param string $part The part parameter specifies a comma-separated list of one or more liveBroadcast resource properties that the API response will include. The part names that you can include in the parameter value are id, snippet, contentDetails, and status.
     * @param array $optParams Optional parameters.
     * @return Google_LiveBroadcast
     * @throws Google_Exception
     * @opt_param bool displaySlate The displaySlate parameter specifies whether to enable or disable the slate.
     * @opt_param string offsetTimeMs The offsetTimeMs parameter specifies a point in time in the video when the specified action (e.g. display a slate) is executed. The property value identifies a positive time offset, in milliseconds, from the beginning of the monitor stream. Though measured in milliseconds, the value is actually an approximation, and YouTube will act as closely as possible to that time. If not specified, it indicates that the action should be performed as soon as possible. If your broadcast stream is not delayed, then it should not be specified. However, if your broadcast stream is delayed, then the parameter can specify the time when the operation should be executed. See the Getting started guide for more details. Note: The offset is measured from the time that the testing phase began.
     * @opt_param string onBehalfOfContentOwner USE_DESCRIPTION --- channels:list:onBehalfOfContentOwner
     */
    public function control($id, $part, $optParams = [])
    {
        $params = ['id' => $id, 'part' => $part];
        $params = array_merge($params, $optParams);
        $data = $this->__call('control', [$params]);
        if ($this->useObjects()) {
            return new Google_LiveBroadcast($data);
        } else {
            return $data;
        }
    }

    /**
     * Deletes a broadcast. (liveBroadcasts.delete)
     *
     * @param string $id The id parameter specifies the YouTube live broadcast ID for the resource that is being deleted.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     * @opt_param string onBehalfOfContentOwner USE_DESCRIPTION --- channels:list:onBehalfOfContentOwner
     */
    public function delete($id, $optParams = [])
    {
        $params = ['id' => $id];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Creates a broadcast. (liveBroadcasts.insert)
     *
     * @param string $part The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.
     * The part properties that you can include in the parameter value are id, snippet, contentDetails, and status.
     * @param Google_LiveBroadcast $postBody
     * @param array $optParams Optional parameters.
     * @return Google_LiveBroadcast
     * @throws Google_Exception
     * @opt_param string onBehalfOfContentOwner USE_DESCRIPTION --- channels:list:onBehalfOfContentOwner
     */
    public function insert($part, Google_LiveBroadcast $postBody, $optParams = [])
    {
        $params = ['part' => $part, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_LiveBroadcast($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns a list of YouTube broadcasts that match the API request parameters. (liveBroadcasts.list)
     *
     * @param string $part The part parameter specifies a comma-separated list of one or more liveBroadcast resource properties that the API response will include. The part names that you can include in the parameter value are id, snippet, contentDetails, and status.
     * @param array $optParams Optional parameters.
     * @return Google_LiveBroadcastList
     * @throws Google_Exception
     * @opt_param string broadcastStatus The broadcastStatus parameter filters the API response to only include broadcasts with the specified status.
     * @opt_param string id The id parameter specifies a comma-separated list of YouTube broadcast IDs that identify the broadcasts being retrieved. In a liveBroadcast resource, the id property specifies the broadcast's ID.
     * @opt_param string maxResults The maxResults parameter specifies the maximum number of items that should be returned in the result set. Acceptable values are 0 to 50, inclusive. The default value is 5.
     * @opt_param bool mine The mine parameter can be used to instruct the API to only return broadcasts owned by the authenticated user. Set the parameter value to true to only retrieve your own broadcasts.
     * @opt_param string pageToken The pageToken parameter identifies a specific page in the result set that should be returned. In an API response, the nextPageToken and prevPageToken properties identify other pages that could be retrieved.
     */
    public function listLiveBroadcasts($part, $optParams = [])
    {
        $params = ['part' => $part];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_LiveBroadcastList($data);
        } else {
            return $data;
        }
    }

    /**
     * Changes the status of a YouTube live broadcast and initiates any processes associated with the
     * new status. For example, when you transition a broadcast's status to testing, YouTube starts to
     * transmit video to that broadcast's monitor stream. (liveBroadcasts.transition)
     *
     * @param string $broadcastStatus The broadcastStatus parameter identifies the state to which the broadcast is changing.
     * @param string $id The id parameter specifies the unique ID of the broadcast that is transitioning to another status.
     * @param string $part The part parameter specifies a comma-separated list of one or more liveBroadcast resource properties that the API response will include. The part names that you can include in the parameter value are id, snippet, contentDetails, and status.
     * @param array $optParams Optional parameters.
     * @return Google_LiveBroadcast
     * @throws Google_Exception
     * @opt_param string onBehalfOfContentOwner USE_DESCRIPTION --- channels:list:onBehalfOfContentOwner
     */
    public function transition($broadcastStatus, $id, $part, $optParams = [])
    {
        $params = ['broadcastStatus' => $broadcastStatus, 'id' => $id, 'part' => $part];
        $params = array_merge($params, $optParams);
        $data = $this->__call('transition', [$params]);
        if ($this->useObjects()) {
            return new Google_LiveBroadcast($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates a broadcast. For example, you could modify the broadcast settings defined in the
     * liveBroadcast resource's contentDetails object. (liveBroadcasts.update)
     *
     * @param string $part The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.
     * The part properties that you can include in the parameter value are id, snippet, contentDetails, and status.
     * Note that this method will override the existing values for all of the mutable properties that are contained in any parts that the parameter value specifies. For example, a broadcast's privacy status is defined in the status part. As such, if your request is updating a private or unlisted broadcast, and the request's part parameter value includes the status part, the broadcast's privacy setting will be updated to whatever value the request body specifies. If the request body does not specify a value, the existing privacy setting will be removed and the broadcast will revert to the default privacy setting.
     * @param Google_LiveBroadcast $postBody
     * @param array $optParams Optional parameters.
     * @return Google_LiveBroadcast
     * @throws Google_Exception
     * @opt_param string onBehalfOfContentOwner USE_DESCRIPTION --- channels:list:onBehalfOfContentOwner
     */
    public function update($part, Google_LiveBroadcast $postBody, $optParams = [])
    {
        $params = ['part' => $part, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_LiveBroadcast($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "liveStreams" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_YouTubeService(...);
 *   $liveStreams = $youtubeService->liveStreams;
 *  </code>
 */
class Google_LiveStreamsServiceResource extends Google_ServiceResource
{

    /**
     * Deletes a video stream. (liveStreams.delete)
     *
     * @param string $id The id parameter specifies the YouTube live stream ID for the resource that is being deleted.
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
     * Creates a video stream. The stream enables you to send your video to YouTube, which can then
     * broadcast the video to your audience. (liveStreams.insert)
     *
     * @param string $part The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.
     * The part properties that you can include in the parameter value are id, snippet, cdn, and status.
     * @param Google_LiveStream $postBody
     * @param array $optParams Optional parameters.
     * @return Google_LiveStream
     * @throws Google_Exception
     */
    public function insert($part, Google_LiveStream $postBody, $optParams = [])
    {
        $params = ['part' => $part, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_LiveStream($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns a list of video streams that match the API request parameters. (liveStreams.list)
     *
     * @param string $part The part parameter specifies a comma-separated list of one or more liveStream resource properties that the API response will include. The part names that you can include in the parameter value are id, snippet, cdn, and status.
     * @param array $optParams Optional parameters.
     * @return Google_LiveStreamList
     * @throws Google_Exception
     * @opt_param string id The id parameter specifies a comma-separated list of YouTube stream IDs that identify the streams being retrieved. In a liveStream resource, the id property specifies the stream's ID.
     * @opt_param string maxResults The maxResults parameter specifies the maximum number of items that should be returned in the result set. Acceptable values are 0 to 50, inclusive. The default value is 5.
     * @opt_param bool mine The mine parameter can be used to instruct the API to only return streams owned by the authenticated user. Set the parameter value to true to only retrieve your own streams.
     * @opt_param string pageToken The pageToken parameter identifies a specific page in the result set that should be returned. In an API response, the nextPageToken and prevPageToken properties identify other pages that could be retrieved.
     */
    public function listLiveStreams($part, $optParams = [])
    {
        $params = ['part' => $part];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_LiveStreamList($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates a video stream. If the properties that you want to change cannot be updated, then you
     * need to create a new stream with the proper settings. (liveStreams.update)
     *
     * @param string $part The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.
     * The part properties that you can include in the parameter value are id, snippet, cdn, and status.
     * Note that this method will override the existing values for all of the mutable properties that are contained in any parts that the parameter value specifies. If the request body does not specify a value for a mutable property, the existing value for that property will be removed.
     * @param Google_LiveStream $postBody
     * @param array $optParams Optional parameters.
     * @return Google_LiveStream
     * @throws Google_Exception
     */
    public function update($part, Google_LiveStream $postBody, $optParams = [])
    {
        $params = ['part' => $part, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_LiveStream($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "playlistItems" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_YouTubeService(...);
 *   $playlistItems = $youtubeService->playlistItems;
 *  </code>
 */
class Google_PlaylistItemsServiceResource extends Google_ServiceResource
{

    /**
     * Deletes a playlist item. (playlistItems.delete)
     *
     * @param string $id The id parameter specifies the YouTube playlist item ID for the playlist item that is being deleted. In a playlistItem resource, the id property specifies the playlist item's ID.
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
     * Adds a resource to a playlist. (playlistItems.insert)
     *
     * @param string $part The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.
     * The part names that you can include in the parameter value are snippet and contentDetails.
     * @param Google_PlaylistItem $postBody
     * @param array $optParams Optional parameters.
     * @return Google_PlaylistItem
     * @throws Google_Exception
     */
    public function insert($part, Google_PlaylistItem $postBody, $optParams = [])
    {
        $params = ['part' => $part, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_PlaylistItem($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns a collection of playlist items that match the API request parameters. You can retrieve
     * all of the playlist items in a specified playlist or retrieve one or more playlist items by their
     * unique IDs. (playlistItems.list)
     *
     * @param string $part The part parameter specifies a comma-separated list of one or more playlistItem resource properties that the API response will include. The part names that you can include in the parameter value are id, snippet, and contentDetails.
     * If the parameter identifies a property that contains child properties, the child properties will be included in the response. For example, in a playlistItem resource, the snippet property contains numerous fields, including the title, description, position, and resourceId properties. As such, if you set part=snippet, the API response will contain all of those properties.
     * @param array $optParams Optional parameters.
     * @return Google_PlaylistItemListResponse
     * @throws Google_Exception
     * @opt_param string id The id parameter specifies a comma-separated list of one or more unique playlist item IDs.
     * @opt_param string maxResults USE_DESCRIPTION --- channels:list:maxResults
     * @opt_param string pageToken USE_DESCRIPTION --- channels:list:pageToken
     * @opt_param string playlistId The playlistId parameter specifies the unique ID of the playlist for which you want to retrieve playlist items. Note that even though this is an optional parameter, every request to retrieve playlist items must specify a value for either the id parameter or the playlistId parameter.
     * @opt_param string videoId The videoId parameter specifies that the request should return only the playlist items that contain the specified video.
     */
    public function listPlaylistItems($part, $optParams = [])
    {
        $params = ['part' => $part];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_PlaylistItemListResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Modifies a playlist item. For example, you could update the item's position in the playlist.
     * (playlistItems.update)
     *
     * @param string $part The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.
     * The part names that you can include in the parameter value are snippet and contentDetails.
     * Note that this method will override the existing values for all of the mutable properties that are contained in any parts that the parameter value specifies. For example, a playlist item can specify a start time and end time, which identify the times portion of the video that should play when users watch the video in the playlist. If your request is updating a playlist item that sets these values, and the request's part parameter value includes the contentDetails part, the playlist item's start and end times will be updated to whatever value the request body specifies. If the request body does not specify values, the existing start and end times will be removed and replaced with the default settings.
     * @param Google_PlaylistItem $postBody
     * @param array $optParams Optional parameters.
     * @return Google_PlaylistItem
     * @throws Google_Exception
     */
    public function update($part, Google_PlaylistItem $postBody, $optParams = [])
    {
        $params = ['part' => $part, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_PlaylistItem($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "playlists" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_YouTubeService(...);
 *   $playlists = $youtubeService->playlists;
 *  </code>
 */
class Google_PlaylistsServiceResource extends Google_ServiceResource
{

    /**
     * Deletes a playlist. (playlists.delete)
     *
     * @param string $id The id parameter specifies the YouTube playlist ID for the playlist that is being deleted. In a playlist resource, the id property specifies the playlist's ID.
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
     * Creates a playlist. (playlists.insert)
     *
     * @param string $part The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.
     * The part names that you can include in the parameter value are snippet and status.
     * @param Google_Playlist $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Playlist
     * @throws Google_Exception
     */
    public function insert($part, Google_Playlist $postBody, $optParams = [])
    {
        $params = ['part' => $part, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Playlist($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns a collection of playlists that match the API request parameters. For example, you can
     * retrieve all playlists that the authenticated user owns, or you can retrieve one or more
     * playlists by their unique IDs. (playlists.list)
     *
     * @param string $part The part parameter specifies a comma-separated list of one or more playlist resource properties that the API response will include. The part names that you can include in the parameter value are id, snippet, and status.
     * If the parameter identifies a property that contains child properties, the child properties will be included in the response. For example, in a playlist resource, the snippet property contains properties like author, title, description, tags, and timeCreated. As such, if you set part=snippet, the API response will contain all of those properties.
     * @param array $optParams Optional parameters.
     * @return Google_PlaylistListResponse
     * @throws Google_Exception
     * @opt_param string channelId This value indicates that the API should only return the specified channel's playlists.
     * @opt_param string id The id parameter specifies a comma-separated list of the YouTube playlist ID(s) for the resource(s) that are being retrieved. In a playlist resource, the id property specifies the playlist's YouTube playlist ID.
     * @opt_param string maxResults USE_DESCRIPTION --- channels:list:maxResults
     * @opt_param bool mine Set this parameter's value to true to instruct the API to only return playlists owned by the authenticated user.
     * @opt_param string pageToken USE_DESCRIPTION --- channels:list:pageToken
     */
    public function listPlaylists($part, $optParams = [])
    {
        $params = ['part' => $part];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_PlaylistListResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Modifies a playlist. For example, you could change a playlist's title, description, or privacy
     * status. (playlists.update)
     *
     * @param string $part The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.
     * The part names that you can include in the parameter value are snippet and status.
     * Note that this method will override the existing values for all of the mutable properties that are contained in any parts that the parameter value specifies. For example, a playlist's privacy setting is contained in the status part. As such, if your request is updating a private playlist, and the request's part parameter value includes the status part, the playlist's privacy setting will be updated to whatever value the request body specifies. If the request body does not specify a value, the existing privacy setting will be removed and the playlist will revert to the default privacy setting.
     * @param Google_Playlist $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Playlist
     * @throws Google_Exception
     */
    public function update($part, Google_Playlist $postBody, $optParams = [])
    {
        $params = ['part' => $part, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Playlist($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "search" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_YouTubeService(...);
 *   $search = $youtubeService->search;
 *  </code>
 */
class Google_SearchServiceResource extends Google_ServiceResource
{

    /**
     * Returns a collection of search results that match the query parameters specified in the API
     * request. By default, a search result set identifies matching video, channel, and playlist
     * resources, but you can also configure queries to only retrieve a specific type of resource.
     * (search.list)
     *
     * @param string $part The part parameter specifies a comma-separated list of one or more search resource properties that the API response will include. The part names that you can include in the parameter value are id and snippet.
     * If the parameter identifies a property that contains child properties, the child properties will be included in the response. For example, in a search result, the snippet property contains other properties that identify the result's title, description, and so forth. If you set part=snippet, the API response will also contain all of those nested properties.
     * @param array $optParams Optional parameters.
     * @return Google_SearchListResponse
     * @throws Google_Exception
     * @opt_param string channelId The channelId parameter indicates that the API response should only contain resources created by the channel
     * @opt_param string channelType The channelType parameter lets you restrict a search to a particular type of channel.
     * @opt_param bool forContentOwner The forContentOwner parameter restricts the search to only retrieve resources owned by the content owner specified by the onBehalfOfContentOwner parameter. The user must be authenticated as a CMS account linked to the specified content owner and onBehalfOfContentOwner must be provided.
     * @opt_param bool forMine The forMine parameter restricts the search to only retrieve videos owned by the authenticated user.
     * @opt_param string maxResults USE_DESCRIPTION --- channels:list:maxResults
     * @opt_param string onBehalfOfContentOwner USE_DESCRIPTION --- channels:list:onBehalfOfContentOwner
     * @opt_param string order The order parameter specifies the method that will be used to order resources in the API response.
     * @opt_param string pageToken USE_DESCRIPTION --- channels:list:pageToken
     * @opt_param string publishedAfter The publishedAfter parameter indicates that the API response should only contain resources created after the specified time. The value is an RFC 3339 formatted date-time value (1970-01-01T00:00:00Z).
     * @opt_param string publishedBefore The publishedBefore parameter indicates that the API response should only contain resources created before the specified time. The value is an RFC 3339 formatted date-time value (1970-01-01T00:00:00Z).
     * @opt_param string q The q parameter specifies the query term to search for.
     * @opt_param string regionCode The regionCode parameter instructs the API to return search results for the specified country. The parameter value is an ISO 3166-1 alpha-2 country code.
     * @opt_param string relatedToVideoId The relatedToVideoId parameter retrieves a list of videos that are related to the video that the parameter value identifies. The parameter value must be set to a YouTube video ID and, if you are using this parameter, the type parameter must be set to video.
     * @opt_param string safeSearch The safeSearch parameter indicates whether the search results should include restricted content as well as standard content.
     * @opt_param string topicId The topicId parameter indicates that the API response should only contain resources associated with the specified topic. The value identifies a Freebase topic ID.
     * @opt_param string type The type parameter restricts a search query to only retrieve a particular type of resource.
     * @opt_param string videoCaption The videoCaption parameter indicates whether the API should filter video search results based on whether they have captions.
     * @opt_param string videoCategoryId The videoCategoryId parameter filters video search results based on their category.
     * @opt_param string videoDefinition The videoDefinition parameter lets you restrict a search to only include either high definition (HD) or standard definition (SD) videos. HD videos are available for playback in at least 720p, though higher resolutions, like 1080p, might also be available.
     * @opt_param string videoDimension The videoDimension parameter lets you restrict a search to only retrieve 2D or 3D videos.
     * @opt_param string videoDuration The videoDuration parameter filters video search results based on their duration.
     * @opt_param string videoEmbeddable The videoEmbeddable parameter lets you to restrict a search to only videos that can be embedded into a webpage.
     * @opt_param string videoLicense The videoLicense parameter filters search results to only include videos with a particular license. YouTube lets video uploaders choose to attach either the Creative Commons license or the standard YouTube license to each of their videos.
     * @opt_param string videoSyndicated The videoSyndicated parameter lets you to restrict a search to only videos that can be played outside youtube.com.
     * @opt_param string videoType The videoType parameter lets you restrict a search to a particular type of videos.
     */
    public function listSearch($part, $optParams = [])
    {
        $params = ['part' => $part];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_SearchListResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "subscriptions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_YouTubeService(...);
 *   $subscriptions = $youtubeService->subscriptions;
 *  </code>
 */
class Google_SubscriptionsServiceResource extends Google_ServiceResource
{

    /**
     * Deletes a subscription. (subscriptions.delete)
     *
     * @param string $id The id parameter specifies the YouTube subscription ID for the resource that is being deleted. In a subscription resource, the id property specifies the YouTube subscription ID.
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
     * Adds a subscription for the authenticated user's channel. (subscriptions.insert)
     *
     * @param string $part The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.
     * The part names that you can include in the parameter value are snippet and contentDetails.
     * @param Google_Subscription $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Subscription
     * @throws Google_Exception
     */
    public function insert($part, Google_Subscription $postBody, $optParams = [])
    {
        $params = ['part' => $part, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Subscription($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns subscription resources that match the API request criteria. (subscriptions.list)
     *
     * @param string $part The part parameter specifies a comma-separated list of one or more subscription resource properties that the API response will include. The part names that you can include in the parameter value are id, snippet, and contentDetails.
     * If the parameter identifies a property that contains child properties, the child properties will be included in the response. For example, in a subscription resource, the snippet property contains other properties, such as a display title for the subscription. If you set part=snippet, the API response will also contain all of those nested properties.
     * @param array $optParams Optional parameters.
     * @return Google_SubscriptionListResponse
     * @throws Google_Exception
     * @opt_param string channelId The channelId parameter specifies a YouTube channel ID. The API will only return that channel's subscriptions.
     * @opt_param string forChannelId The forChannelId parameter specifies a comma-separated list of channel IDs. The API response will then only contain subscriptions matching those channels.
     * @opt_param string id The id parameter specifies a comma-separated list of the YouTube subscription ID(s) for the resource(s) that are being retrieved. In a subscription resource, the id property specifies the YouTube subscription ID.
     * @opt_param string maxResults USE_DESCRIPTION --- channels:list:maxResults
     * @opt_param bool mine Set this parameter's value to true to retrieve a feed of the authenticated user's subscriptions.
     * @opt_param bool mySubscribers Set this parameter's value to true to retrieve a feed of the subscribers of the authenticated user.
     * @opt_param string order The order parameter specifies the method that will be used to sort resources in the API response.
     * @opt_param string pageToken USE_DESCRIPTION --- channels:list:pageToken
     */
    public function listSubscriptions($part, $optParams = [])
    {
        $params = ['part' => $part];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_SubscriptionListResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "thumbnails" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_YouTubeService(...);
 *   $thumbnails = $youtubeService->thumbnails;
 *  </code>
 */
class Google_ThumbnailsServiceResource extends Google_ServiceResource
{

    /**
     * Uploads a custom video thumbnail to YouTube and sets it for a video. (thumbnails.set)
     *
     * @param string $videoId The videoId parameter specifies a YouTube video ID for which the custom video thumbnail is being provided.
     * @param array $optParams Optional parameters.
     * @return Google_ThumbnailListResponse
     * @throws Google_Exception
     */
    public function set($videoId, $optParams = [])
    {
        $params = ['videoId' => $videoId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('set', [$params]);
        if ($this->useObjects()) {
            return new Google_ThumbnailListResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "videoCategories" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_YouTubeService(...);
 *   $videoCategories = $youtubeService->videoCategories;
 *  </code>
 */
class Google_VideoCategoriesServiceResource extends Google_ServiceResource
{

    /**
     * Returns a list of categories that can be associated with YouTube videos. (videoCategories.list)
     *
     * @param string $part The part parameter specifies the videoCategory resource parts that the API response will include. Supported values are id and snippet.
     * @param array $optParams Optional parameters.
     * @return Google_VideoCategoryListResponse
     * @throws Google_Exception
     * @opt_param string hl The hl parameter specifies the language that should be used for text values in the API response.
     * @opt_param string id The id parameter specifies a comma-separated list of video category IDs for the resources that you are retrieving.
     * @opt_param string regionCode The regionCode parameter instructs the API to return the list of video categories available in the specified country. The parameter value is an ISO 3166-1 alpha-2 country code.
     */
    public function listVideoCategories($part, $optParams = [])
    {
        $params = ['part' => $part];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_VideoCategoryListResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "videos" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_YouTubeService(...);
 *   $videos = $youtubeService->videos;
 *  </code>
 */
class Google_VideosServiceResource extends Google_ServiceResource
{

    /**
     * Deletes a YouTube video. (videos.delete)
     *
     * @param string $id The id parameter specifies the YouTube video ID for the resource that is being deleted. In a video resource, the id property specifies the video's ID.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     * @opt_param string onBehalfOfContentOwner USE_DESCRIPTION --- channels:list:onBehalfOfContentOwner
     */
    public function delete($id, $optParams = [])
    {
        $params = ['id' => $id];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Get user ratings for videos. (videos.getRating)
     *
     * @param string $id The id parameter specifies a comma-separated list of the YouTube video ID(s) for the resource(s) that are being retrieved. In a video resource, the id property specifies the video's ID.
     * @param array $optParams Optional parameters.
     * @return Google_VideoGetRatingResponse
     * @throws Google_Exception
     * @opt_param string onBehalfOfContentOwner USE_DESCRIPTION --- channels:list:onBehalfOfContentOwner
     */
    public function getRating($id, $optParams = [])
    {
        $params = ['id' => $id];
        $params = array_merge($params, $optParams);
        $data = $this->__call('getRating', [$params]);
        if ($this->useObjects()) {
            return new Google_VideoGetRatingResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Uploads a video to YouTube and optionally sets the video's metadata. (videos.insert)
     *
     * @param string $part The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.
     * The part names that you can include in the parameter value are snippet, contentDetails, player, statistics, status, and topicDetails. However, not all of those parts contain properties that can be set when setting or updating a video's metadata. For example, the statistics object encapsulates statistics that YouTube calculates for a video and does not contain values that you can set or modify. If the parameter value specifies a part that does not contain mutable values, that part will still be included in the API response.
     * @param Google_Video $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Video
     * @throws Google_Exception
     * @opt_param bool autoLevels The autoLevels parameter specifies whether the video should be auto-leveled by YouTube.
     * @opt_param string onBehalfOfContentOwner USE_DESCRIPTION --- channels:list:onBehalfOfContentOwner
     * @opt_param string onBehalfOfContentOwnerChannel This parameter can only be used in a properly authorized request. Note: This parameter is intended exclusively for YouTube content partners.
     * The onBehalfOfContentOwnerChannel parameter indicates that the request's authorization credentials identify a YouTube CMS user who is acting on behalf of the channel specified in the parameter value. This parameter must be used in conjunction with the onBehalfOfContentOwner parameter, and the user must be authenticated using a CMS account that is linked to the content owner that the onBehalfOfContentOwner parameter specifies. In addition, the channel that the onBehalfOfContentOwnerChannel parameter value specifies must be linked to the content owner that the onBehalfOfContentOwner parameter specifies.
     * This parameter is intended for YouTube content partners that own and manage many different YouTube channels. It allows content owners to authenticate once and perform actions on behalf of the channel specified in the parameter value, without having to provide authentication credentials for each separate channel.
     * @opt_param bool stabilize The stabilize parameter specifies whether the video should be stabilized by YouTube.
     */
    public function insert($part, Google_Video $postBody, $optParams = [])
    {
        $params = ['part' => $part, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Video($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns a list of videos that match the API request parameters. (videos.list)
     *
     * @param string $part The part parameter specifies a comma-separated list of one or more video resource properties that the API response will include. The part names that you can include in the parameter value are id, snippet, contentDetails, player, statistics, status, and topicDetails.
     * If the parameter identifies a property that contains child properties, the child properties will be included in the response. For example, in a video resource, the snippet property contains the channelId, title, description, tags, and categoryId properties. As such, if you set part=snippet, the API response will contain all of those properties.
     * @param array $optParams Optional parameters.
     * @return Google_VideoListResponse
     * @throws Google_Exception
     * @opt_param string chart Set this parameter's value to mostPopular to instruct the API to return videos belonging to the chart of most popular videos.
     * @opt_param string id The id parameter specifies a comma-separated list of the YouTube video ID(s) for the resource(s) that are being retrieved. In a video resource, the id property specifies the video's ID.
     * @opt_param string locale The locale parameter selects a video chart available in the specified locale. If using this parameter, chart must also be set. The parameter value is an BCP 47 locale. Supported locales include ar_AE, ar_DZ, ar_EG, ar_JO, ar_MA, ar_SA, ar_TN, ar_YE, cs_CZ, de_DE, el_GR, en_AU, en_BE, en_CA, en_GB, en_GH, en_IE, en_IL, en_IN, en_KE, en_NG, en_NZ, en_SG, en_UG, en_US, en_ZA, es_AR, es_CL, es_CO, es_ES, es_MX, es_PE, fil_PH, fr_FR, hu_HU, id_ID, it_IT, ja_JP, ko_KR, ms_MY, nl_NL, pl_PL, pt_BR, ru_RU, sv_SE, tr_TR, zh_HK, zh_TW
     * @opt_param string maxResults USE_DESCRIPTION --- channels:list:maxResults
     * @opt_param string myRating Set this parameter's value to like or dislike to instruct the API to only return videos liked or disliked by the authenticated user.
     * @opt_param string onBehalfOfContentOwner USE_DESCRIPTION --- channels:list:onBehalfOfContentOwner
     * @opt_param string pageToken USE_DESCRIPTION --- channels:list:pageToken
     * @opt_param string videoCategoryId The videoCategoryId parameter selects a video chart based on the category. If using this parameter, chart must also be set.
     */
    public function listVideos($part, $optParams = [])
    {
        $params = ['part' => $part];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_VideoListResponse($data);
        } else {
            return $data;
        }
    }

    /**
     * Like, dislike, or remove rating from a video. (videos.rate)
     *
     * @param string $id The id parameter specifies the YouTube video ID.
     * @param string $rating Specifies the rating to record.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     * @opt_param string onBehalfOfContentOwner USE_DESCRIPTION --- channels:list:onBehalfOfContentOwner
     */
    public function rate($id, $rating, $optParams = [])
    {
        $params = ['id' => $id, 'rating' => $rating];
        $params = array_merge($params, $optParams);
        $data = $this->__call('rate', [$params]);
        return $data;
    }

    /**
     * Updates a video's metadata. (videos.update)
     *
     * @param string $part The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.
     * The part names that you can include in the parameter value are snippet, contentDetails, player, statistics, status, and topicDetails.
     * Note that this method will override the existing values for all of the mutable properties that are contained in any parts that the parameter value specifies. For example, a video's privacy setting is contained in the status part. As such, if your request is updating a private video, and the request's part parameter value includes the status part, the video's privacy setting will be updated to whatever value the request body specifies. If the request body does not specify a value, the existing privacy setting will be removed and the video will revert to the default privacy setting.
     * In addition, not all of those parts contain properties that can be set when setting or updating a video's metadata. For example, the statistics object encapsulates statistics that YouTube calculates for a video and does not contain values that you can set or modify. If the parameter value specifies a part that does not contain mutable values, that part will still be included in the API response.
     * @param Google_Video $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Video
     * @throws Google_Exception
     * @opt_param string onBehalfOfContentOwner USE_DESCRIPTION --- channels:list:onBehalfOfContentOwner
     */
    public function update($part, Google_Video $postBody, $optParams = [])
    {
        $params = ['part' => $part, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Video($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_YouTube (v3).
 *
 * <p>
 * Programmatic access to YouTube features.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/youtube/v3" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_YouTubeService extends Google_Service
{
    /**
     * @var Google_ActivitiesServiceResource
     */
    public $activities;
    /**
     * @var Google_ChannelBannersServiceResource
     */
    public $channelBanners;
    /**
     * @var Google_ChannelsServiceResource
     */
    public $channels;
    /**
     * @var Google_GuideCategoriesServiceResource
     */
    public $guideCategories;
    /**
     * @var Google_LiveBroadcastsServiceResource
     */
    public $liveBroadcasts;
    /**
     * @var Google_LiveStreamsServiceResource
     */
    public $liveStreams;
    /**
     * @var Google_PlaylistItemsServiceResource
     */
    public $playlistItems;
    /**
     * @var Google_PlaylistsServiceResource
     */
    public $playlists;
    /**
     * @var Google_SearchServiceResource
     */
    public $search;
    /**
     * @var Google_SubscriptionsServiceResource
     */
    public $subscriptions;
    /**
     * @var Google_ThumbnailsServiceResource
     */
    public $thumbnails;
    /**
     * @var Google_VideoCategoriesServiceResource
     */
    public $videoCategories;
    /**
     * @var Google_VideosServiceResource
     */
    public $videos;

    /**
     * Constructs the internal representation of the YouTube service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'youtube/v3/';
        $this->version = 'v3';
        $this->serviceName = 'youtube';

        $client->addService($this->serviceName, $this->version);
        $this->activities = new Google_ActivitiesServiceResource($this, $this->serviceName, 'activities', json_decode('{"methods": {"insert": {"id": "youtube.activities.insert", "path": "activities", "httpMethod": "POST", "parameters": {"part": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "Activity"}, "response": {"$ref": "Activity"}, "scopes": ["https://www.googleapis.com/auth/youtube"]}, "list": {"id": "youtube.activities.list", "path": "activities", "httpMethod": "GET", "parameters": {"channelId": {"type": "string", "location": "query"}, "home": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "default": "5", "format": "uint32", "minimum": "0", "maximum": "50", "location": "query"}, "mine": {"type": "boolean", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}, "publishedAfter": {"type": "string", "format": "date-time", "location": "query"}, "publishedBefore": {"type": "string", "format": "date-time", "location": "query"}, "regionCode": {"type": "string", "location": "query"}}, "response": {"$ref": "ActivityListResponse"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtube.readonly"]}}}', true));
        $this->channelBanners = new Google_ChannelBannersServiceResource($this, $this->serviceName, 'channelBanners', json_decode('{"methods": {"insert": {"id": "youtube.channelBanners.insert", "path": "channelBanners/insert", "httpMethod": "POST", "parameters": {"onBehalfOfContentOwner": {"type": "string", "location": "query"}}, "request": {"$ref": "ChannelBannerResource"}, "response": {"$ref": "ChannelBannerResource"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtube.upload"], "supportsMediaUpload": true, "mediaUpload": {"accept": ["application/octet-stream", "image/jpeg", "image/png"], "maxSize": "6MB", "protocols": {"simple": {"multipart": true, "path": "/upload/youtube/v3/channelBanners/insert"}, "resumable": {"multipart": true, "path": "/resumable/upload/youtube/v3/channelBanners/insert"}}}}}}', true));
        $this->channels = new Google_ChannelsServiceResource($this, $this->serviceName, 'channels', json_decode('{"methods": {"list": {"id": "youtube.channels.list", "path": "channels", "httpMethod": "GET", "parameters": {"categoryId": {"type": "string", "location": "query"}, "forUsername": {"type": "string", "location": "query"}, "id": {"type": "string", "location": "query"}, "managedByMe": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "default": "5", "format": "uint32", "minimum": "0", "maximum": "50", "location": "query"}, "mine": {"type": "boolean", "location": "query"}, "mySubscribers": {"type": "boolean", "location": "query"}, "onBehalfOfContentOwner": {"type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "ChannelListResponse"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtube.readonly", "https://www.googleapis.com/auth/youtubepartner"]}, "update": {"id": "youtube.channels.update", "path": "channels", "httpMethod": "PUT", "parameters": {"onBehalfOfContentOwner": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "Channel"}, "response": {"$ref": "Channel"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtubepartner"]}}}', true));
        $this->guideCategories = new Google_GuideCategoriesServiceResource($this, $this->serviceName, 'guideCategories', json_decode('{"methods": {"list": {"id": "youtube.guideCategories.list", "path": "guideCategories", "httpMethod": "GET", "parameters": {"hl": {"type": "string", "default": "en-US", "location": "query"}, "id": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}, "regionCode": {"type": "string", "location": "query"}}, "response": {"$ref": "GuideCategoryListResponse"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtube.readonly", "https://www.googleapis.com/auth/youtubepartner"]}}}', true));
        $this->liveBroadcasts = new Google_LiveBroadcastsServiceResource($this, $this->serviceName, 'liveBroadcasts', json_decode('{"methods": {"bind": {"id": "youtube.liveBroadcasts.bind", "path": "liveBroadcasts/bind", "httpMethod": "POST", "parameters": {"id": {"type": "string", "required": true, "location": "query"}, "onBehalfOfContentOwner": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}, "streamId": {"type": "string", "location": "query"}}, "response": {"$ref": "LiveBroadcast"}, "scopes": ["https://www.googleapis.com/auth/youtube"]}, "control": {"id": "youtube.liveBroadcasts.control", "path": "liveBroadcasts/control", "httpMethod": "POST", "parameters": {"displaySlate": {"type": "boolean", "location": "query"}, "id": {"type": "string", "required": true, "location": "query"}, "offsetTimeMs": {"type": "string", "format": "uint64", "location": "query"}, "onBehalfOfContentOwner": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "LiveBroadcast"}, "scopes": ["https://www.googleapis.com/auth/youtube"]}, "delete": {"id": "youtube.liveBroadcasts.delete", "path": "liveBroadcasts", "httpMethod": "DELETE", "parameters": {"id": {"type": "string", "required": true, "location": "query"}, "onBehalfOfContentOwner": {"type": "string", "location": "query"}}, "scopes": ["https://www.googleapis.com/auth/youtube"]}, "insert": {"id": "youtube.liveBroadcasts.insert", "path": "liveBroadcasts", "httpMethod": "POST", "parameters": {"onBehalfOfContentOwner": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "LiveBroadcast"}, "response": {"$ref": "LiveBroadcast"}, "scopes": ["https://www.googleapis.com/auth/youtube"]}, "list": {"id": "youtube.liveBroadcasts.list", "path": "liveBroadcasts", "httpMethod": "GET", "parameters": {"broadcastStatus": {"type": "string", "enum": ["active", "all", "completed", "upcoming"], "location": "query"}, "id": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "5", "format": "uint32", "minimum": "0", "maximum": "50", "location": "query"}, "mine": {"type": "boolean", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "LiveBroadcastList"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtube.readonly"]}, "transition": {"id": "youtube.liveBroadcasts.transition", "path": "liveBroadcasts/transition", "httpMethod": "POST", "parameters": {"broadcastStatus": {"type": "string", "required": true, "enum": ["complete", "live", "testing"], "location": "query"}, "id": {"type": "string", "required": true, "location": "query"}, "onBehalfOfContentOwner": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "LiveBroadcast"}, "scopes": ["https://www.googleapis.com/auth/youtube"]}, "update": {"id": "youtube.liveBroadcasts.update", "path": "liveBroadcasts", "httpMethod": "PUT", "parameters": {"onBehalfOfContentOwner": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "LiveBroadcast"}, "response": {"$ref": "LiveBroadcast"}, "scopes": ["https://www.googleapis.com/auth/youtube"]}}}', true));
        $this->liveStreams = new Google_LiveStreamsServiceResource($this, $this->serviceName, 'liveStreams', json_decode('{"methods": {"delete": {"id": "youtube.liveStreams.delete", "path": "liveStreams", "httpMethod": "DELETE", "parameters": {"id": {"type": "string", "required": true, "location": "query"}}, "scopes": ["https://www.googleapis.com/auth/youtube"]}, "insert": {"id": "youtube.liveStreams.insert", "path": "liveStreams", "httpMethod": "POST", "parameters": {"part": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "LiveStream"}, "response": {"$ref": "LiveStream"}, "scopes": ["https://www.googleapis.com/auth/youtube"]}, "list": {"id": "youtube.liveStreams.list", "path": "liveStreams", "httpMethod": "GET", "parameters": {"id": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "5", "format": "uint32", "minimum": "0", "maximum": "50", "location": "query"}, "mine": {"type": "boolean", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "LiveStreamList"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtube.readonly"]}, "update": {"id": "youtube.liveStreams.update", "path": "liveStreams", "httpMethod": "PUT", "parameters": {"part": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "LiveStream"}, "response": {"$ref": "LiveStream"}, "scopes": ["https://www.googleapis.com/auth/youtube"]}}}', true));
        $this->playlistItems = new Google_PlaylistItemsServiceResource($this, $this->serviceName, 'playlistItems', json_decode('{"methods": {"delete": {"id": "youtube.playlistItems.delete", "path": "playlistItems", "httpMethod": "DELETE", "parameters": {"id": {"type": "string", "required": true, "location": "query"}}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtubepartner"]}, "insert": {"id": "youtube.playlistItems.insert", "path": "playlistItems", "httpMethod": "POST", "parameters": {"part": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "PlaylistItem"}, "response": {"$ref": "PlaylistItem"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtubepartner"]}, "list": {"id": "youtube.playlistItems.list", "path": "playlistItems", "httpMethod": "GET", "parameters": {"id": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "5", "format": "uint32", "minimum": "0", "maximum": "50", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}, "playlistId": {"type": "string", "location": "query"}, "videoId": {"type": "string", "location": "query"}}, "response": {"$ref": "PlaylistItemListResponse"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtube.readonly", "https://www.googleapis.com/auth/youtubepartner"], "supportsSubscription": true}, "update": {"id": "youtube.playlistItems.update", "path": "playlistItems", "httpMethod": "PUT", "parameters": {"part": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "PlaylistItem"}, "response": {"$ref": "PlaylistItem"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtubepartner"]}}}', true));
        $this->playlists = new Google_PlaylistsServiceResource($this, $this->serviceName, 'playlists', json_decode('{"methods": {"delete": {"id": "youtube.playlists.delete", "path": "playlists", "httpMethod": "DELETE", "parameters": {"id": {"type": "string", "required": true, "location": "query"}}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtubepartner"]}, "insert": {"id": "youtube.playlists.insert", "path": "playlists", "httpMethod": "POST", "parameters": {"part": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "Playlist"}, "response": {"$ref": "Playlist"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtubepartner"]}, "list": {"id": "youtube.playlists.list", "path": "playlists", "httpMethod": "GET", "parameters": {"channelId": {"type": "string", "location": "query"}, "id": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "5", "format": "uint32", "minimum": "0", "maximum": "50", "location": "query"}, "mine": {"type": "boolean", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "PlaylistListResponse"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtube.readonly", "https://www.googleapis.com/auth/youtubepartner"]}, "update": {"id": "youtube.playlists.update", "path": "playlists", "httpMethod": "PUT", "parameters": {"part": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "Playlist"}, "response": {"$ref": "Playlist"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtubepartner"]}}}', true));
        $this->search = new Google_SearchServiceResource($this, $this->serviceName, 'search', json_decode('{"methods": {"list": {"id": "youtube.search.list", "path": "search", "httpMethod": "GET", "parameters": {"channelId": {"type": "string", "location": "query"}, "channelType": {"type": "string", "enum": ["any", "show"], "location": "query"}, "forContentOwner": {"type": "boolean", "location": "query"}, "forMine": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "default": "5", "format": "uint32", "minimum": "0", "maximum": "50", "location": "query"}, "onBehalfOfContentOwner": {"type": "string", "location": "query"}, "order": {"type": "string", "default": "SEARCH_SORT_RELEVANCE", "enum": ["date", "rating", "relevance", "title", "videoCount", "viewCount"], "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}, "publishedAfter": {"type": "string", "format": "date-time", "location": "query"}, "publishedBefore": {"type": "string", "format": "date-time", "location": "query"}, "q": {"type": "string", "location": "query"}, "regionCode": {"type": "string", "location": "query"}, "relatedToVideoId": {"type": "string", "location": "query"}, "safeSearch": {"type": "string", "enum": ["moderate", "none", "strict"], "location": "query"}, "topicId": {"type": "string", "location": "query"}, "type": {"type": "string", "default": "video,channel,playlist", "location": "query"}, "videoCaption": {"type": "string", "enum": ["any", "closedCaption", "none"], "location": "query"}, "videoCategoryId": {"type": "string", "location": "query"}, "videoDefinition": {"type": "string", "enum": ["any", "high", "standard"], "location": "query"}, "videoDimension": {"type": "string", "enum": ["2d", "3d", "any"], "location": "query"}, "videoDuration": {"type": "string", "enum": ["any", "long", "medium", "short"], "location": "query"}, "videoEmbeddable": {"type": "string", "enum": ["any", "true"], "location": "query"}, "videoLicense": {"type": "string", "enum": ["any", "creativeCommon", "youtube"], "location": "query"}, "videoSyndicated": {"type": "string", "enum": ["any", "true"], "location": "query"}, "videoType": {"type": "string", "enum": ["any", "episode", "movie"], "location": "query"}}, "response": {"$ref": "SearchListResponse"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtube.readonly", "https://www.googleapis.com/auth/youtubepartner"]}}}', true));
        $this->subscriptions = new Google_SubscriptionsServiceResource($this, $this->serviceName, 'subscriptions', json_decode('{"methods": {"delete": {"id": "youtube.subscriptions.delete", "path": "subscriptions", "httpMethod": "DELETE", "parameters": {"id": {"type": "string", "required": true, "location": "query"}}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtubepartner"]}, "insert": {"id": "youtube.subscriptions.insert", "path": "subscriptions", "httpMethod": "POST", "parameters": {"part": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "Subscription"}, "response": {"$ref": "Subscription"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtubepartner"]}, "list": {"id": "youtube.subscriptions.list", "path": "subscriptions", "httpMethod": "GET", "parameters": {"channelId": {"type": "string", "location": "query"}, "forChannelId": {"type": "string", "location": "query"}, "id": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "5", "format": "uint32", "minimum": "0", "maximum": "50", "location": "query"}, "mine": {"type": "boolean", "location": "query"}, "mySubscribers": {"type": "boolean", "location": "query"}, "order": {"type": "string", "default": "SUBSCRIPTION_ORDER_RELEVANCE", "enum": ["alphabetical", "relevance", "unread"], "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "SubscriptionListResponse"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtube.readonly", "https://www.googleapis.com/auth/youtubepartner"]}}}', true));
        $this->thumbnails = new Google_ThumbnailsServiceResource($this, $this->serviceName, 'thumbnails', json_decode('{"methods": {"set": {"id": "youtube.thumbnails.set", "path": "thumbnails/set", "httpMethod": "POST", "parameters": {"videoId": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "ThumbnailListResponse"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtube.upload", "https://www.googleapis.com/auth/youtubepartner"], "supportsMediaUpload": true, "mediaUpload": {"accept": ["application/octet-stream", "image/jpeg", "image/png"], "maxSize": "2MB", "protocols": {"simple": {"multipart": true, "path": "/upload/youtube/v3/thumbnails/set"}, "resumable": {"multipart": true, "path": "/resumable/upload/youtube/v3/thumbnails/set"}}}}}}', true));
        $this->videoCategories = new Google_VideoCategoriesServiceResource($this, $this->serviceName, 'videoCategories', json_decode('{"methods": {"list": {"id": "youtube.videoCategories.list", "path": "videoCategories", "httpMethod": "GET", "parameters": {"hl": {"type": "string", "default": "en_US", "location": "query"}, "id": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}, "regionCode": {"type": "string", "location": "query"}}, "response": {"$ref": "VideoCategoryListResponse"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtube.readonly", "https://www.googleapis.com/auth/youtubepartner"]}}}', true));
        $this->videos = new Google_VideosServiceResource($this, $this->serviceName, 'videos', json_decode('{"methods": {"delete": {"id": "youtube.videos.delete", "path": "videos", "httpMethod": "DELETE", "parameters": {"id": {"type": "string", "required": true, "location": "query"}, "onBehalfOfContentOwner": {"type": "string", "location": "query"}}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtubepartner"]}, "getRating": {"id": "youtube.videos.getRating", "path": "videos/getRating", "httpMethod": "GET", "parameters": {"id": {"type": "string", "required": true, "location": "query"}, "onBehalfOfContentOwner": {"type": "string", "location": "query"}}, "response": {"$ref": "VideoGetRatingResponse"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtubepartner"]}, "insert": {"id": "youtube.videos.insert", "path": "videos", "httpMethod": "POST", "parameters": {"autoLevels": {"type": "boolean", "location": "query"}, "onBehalfOfContentOwner": {"type": "string", "location": "query"}, "onBehalfOfContentOwnerChannel": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}, "stabilize": {"type": "boolean", "location": "query"}}, "request": {"$ref": "Video"}, "response": {"$ref": "Video"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtube.upload", "https://www.googleapis.com/auth/youtubepartner"], "supportsMediaUpload": true, "mediaUpload": {"accept": ["application/octet-stream", "video/*"], "maxSize": "64GB", "protocols": {"simple": {"multipart": true, "path": "/upload/youtube/v3/videos"}, "resumable": {"multipart": true, "path": "/resumable/upload/youtube/v3/videos"}}}}, "list": {"id": "youtube.videos.list", "path": "videos", "httpMethod": "GET", "parameters": {"chart": {"type": "string", "enum": ["mostPopular"], "location": "query"}, "id": {"type": "string", "location": "query"}, "locale": {"type": "string", "default": "en_US", "location": "query"}, "maxResults": {"type": "integer", "default": "5", "format": "uint32", "minimum": "1", "maximum": "50", "location": "query"}, "myRating": {"type": "string", "enum": ["dislike", "like"], "location": "query"}, "onBehalfOfContentOwner": {"type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}, "videoCategoryId": {"type": "string", "default": "0", "location": "query"}}, "response": {"$ref": "VideoListResponse"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtube.readonly", "https://www.googleapis.com/auth/youtubepartner"]}, "rate": {"id": "youtube.videos.rate", "path": "videos/rate", "httpMethod": "POST", "parameters": {"id": {"type": "string", "required": true, "location": "query"}, "onBehalfOfContentOwner": {"type": "string", "location": "query"}, "rating": {"type": "string", "required": true, "enum": ["dislike", "like", "none"], "location": "query"}}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtubepartner"]}, "update": {"id": "youtube.videos.update", "path": "videos", "httpMethod": "PUT", "parameters": {"onBehalfOfContentOwner": {"type": "string", "location": "query"}, "part": {"type": "string", "required": true, "location": "query"}}, "request": {"$ref": "Video"}, "response": {"$ref": "Video"}, "scopes": ["https://www.googleapis.com/auth/youtube", "https://www.googleapis.com/auth/youtubepartner"]}}}', true));

    }
}


/**
 * Class Google_AccessPolicy
 */
class Google_AccessPolicy extends Google_Model
{
    /**
     * @var
     */
    public $allowed;
    /**
     * @var
     */
    public $exception;

    /**
     * @param $allowed
     */
    public function setAllowed($allowed)
    {
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
     * @param $exception
     * @throws Google_Exception
     */
    public function setException(/* array(Google_string) */
        $exception)
    {
        $this->assertIsArray($exception, 'Google_string', __METHOD__);
        $this->exception = $exception;
    }

    /**
     * @return mixed
     */
    public function getException()
    {
        return $this->exception;
    }
}

/**
 * Class Google_Activity
 */
class Google_Activity extends Google_Model
{
    /**
     * @var string
     */
    protected $__contentDetailsType = 'Google_ActivityContentDetails';
    /**
     * @var string
     */
    protected $__contentDetailsDataType = '';
    /**
     * @var
     */
    public $contentDetails;
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
     * @var string
     */
    protected $__snippetType = 'Google_ActivitySnippet';
    /**
     * @var string
     */
    protected $__snippetDataType = '';
    /**
     * @var
     */
    public $snippet;

    /**
     * @param Google_ActivityContentDetails $contentDetails
     */
    public function setContentDetails(Google_ActivityContentDetails $contentDetails)
    {
        $this->contentDetails = $contentDetails;
    }

    /**
     * @return mixed
     */
    public function getContentDetails()
    {
        return $this->contentDetails;
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
     * @param Google_ActivitySnippet $snippet
     */
    public function setSnippet(Google_ActivitySnippet $snippet)
    {
        $this->snippet = $snippet;
    }

    /**
     * @return mixed
     */
    public function getSnippet()
    {
        return $this->snippet;
    }
}

/**
 * Class Google_ActivityContentDetails
 */
class Google_ActivityContentDetails extends Google_Model
{
    /**
     * @var string
     */
    protected $__bulletinType = 'Google_ActivityContentDetailsBulletin';
    /**
     * @var string
     */
    protected $__bulletinDataType = '';
    /**
     * @var
     */
    public $bulletin;
    /**
     * @var string
     */
    protected $__channelItemType = 'Google_ActivityContentDetailsChannelItem';
    /**
     * @var string
     */
    protected $__channelItemDataType = '';
    /**
     * @var
     */
    public $channelItem;
    /**
     * @var string
     */
    protected $__commentType = 'Google_ActivityContentDetailsComment';
    /**
     * @var string
     */
    protected $__commentDataType = '';
    /**
     * @var
     */
    public $comment;
    /**
     * @var string
     */
    protected $__favoriteType = 'Google_ActivityContentDetailsFavorite';
    /**
     * @var string
     */
    protected $__favoriteDataType = '';
    /**
     * @var
     */
    public $favorite;
    /**
     * @var string
     */
    protected $__likeType = 'Google_ActivityContentDetailsLike';
    /**
     * @var string
     */
    protected $__likeDataType = '';
    /**
     * @var
     */
    public $like;
    /**
     * @var string
     */
    protected $__playlistItemType = 'Google_ActivityContentDetailsPlaylistItem';
    /**
     * @var string
     */
    protected $__playlistItemDataType = '';
    /**
     * @var
     */
    public $playlistItem;
    /**
     * @var string
     */
    protected $__promotedItemType = 'Google_ActivityContentDetailsPromotedItem';
    /**
     * @var string
     */
    protected $__promotedItemDataType = '';
    /**
     * @var
     */
    public $promotedItem;
    /**
     * @var string
     */
    protected $__recommendationType = 'Google_ActivityContentDetailsRecommendation';
    /**
     * @var string
     */
    protected $__recommendationDataType = '';
    /**
     * @var
     */
    public $recommendation;
    /**
     * @var string
     */
    protected $__socialType = 'Google_ActivityContentDetailsSocial';
    /**
     * @var string
     */
    protected $__socialDataType = '';
    /**
     * @var
     */
    public $social;
    /**
     * @var string
     */
    protected $__subscriptionType = 'Google_ActivityContentDetailsSubscription';
    /**
     * @var string
     */
    protected $__subscriptionDataType = '';
    /**
     * @var
     */
    public $subscription;
    /**
     * @var string
     */
    protected $__uploadType = 'Google_ActivityContentDetailsUpload';
    /**
     * @var string
     */
    protected $__uploadDataType = '';
    /**
     * @var
     */
    public $upload;

    /**
     * @param Google_ActivityContentDetailsBulletin $bulletin
     */
    public function setBulletin(Google_ActivityContentDetailsBulletin $bulletin)
    {
        $this->bulletin = $bulletin;
    }

    /**
     * @return mixed
     */
    public function getBulletin()
    {
        return $this->bulletin;
    }

    /**
     * @param Google_ActivityContentDetailsChannelItem $channelItem
     */
    public function setChannelItem(Google_ActivityContentDetailsChannelItem $channelItem)
    {
        $this->channelItem = $channelItem;
    }

    /**
     * @return mixed
     */
    public function getChannelItem()
    {
        return $this->channelItem;
    }

    /**
     * @param Google_ActivityContentDetailsComment $comment
     */
    public function setComment(Google_ActivityContentDetailsComment $comment)
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
     * @param Google_ActivityContentDetailsFavorite $favorite
     */
    public function setFavorite(Google_ActivityContentDetailsFavorite $favorite)
    {
        $this->favorite = $favorite;
    }

    /**
     * @return mixed
     */
    public function getFavorite()
    {
        return $this->favorite;
    }

    /**
     * @param Google_ActivityContentDetailsLike $like
     */
    public function setLike(Google_ActivityContentDetailsLike $like)
    {
        $this->like = $like;
    }

    /**
     * @return mixed
     */
    public function getLike()
    {
        return $this->like;
    }

    /**
     * @param Google_ActivityContentDetailsPlaylistItem $playlistItem
     */
    public function setPlaylistItem(Google_ActivityContentDetailsPlaylistItem $playlistItem)
    {
        $this->playlistItem = $playlistItem;
    }

    /**
     * @return mixed
     */
    public function getPlaylistItem()
    {
        return $this->playlistItem;
    }

    /**
     * @param Google_ActivityContentDetailsPromotedItem $promotedItem
     */
    public function setPromotedItem(Google_ActivityContentDetailsPromotedItem $promotedItem)
    {
        $this->promotedItem = $promotedItem;
    }

    /**
     * @return mixed
     */
    public function getPromotedItem()
    {
        return $this->promotedItem;
    }

    /**
     * @param Google_ActivityContentDetailsRecommendation $recommendation
     */
    public function setRecommendation(Google_ActivityContentDetailsRecommendation $recommendation)
    {
        $this->recommendation = $recommendation;
    }

    /**
     * @return mixed
     */
    public function getRecommendation()
    {
        return $this->recommendation;
    }

    /**
     * @param Google_ActivityContentDetailsSocial $social
     */
    public function setSocial(Google_ActivityContentDetailsSocial $social)
    {
        $this->social = $social;
    }

    /**
     * @return mixed
     */
    public function getSocial()
    {
        return $this->social;
    }

    /**
     * @param Google_ActivityContentDetailsSubscription $subscription
     */
    public function setSubscription(Google_ActivityContentDetailsSubscription $subscription)
    {
        $this->subscription = $subscription;
    }

    /**
     * @return mixed
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * @param Google_ActivityContentDetailsUpload $upload
     */
    public function setUpload(Google_ActivityContentDetailsUpload $upload)
    {
        $this->upload = $upload;
    }

    /**
     * @return mixed
     */
    public function getUpload()
    {
        return $this->upload;
    }
}

/**
 * Class Google_ActivityContentDetailsBulletin
 */
class Google_ActivityContentDetailsBulletin extends Google_Model
{
    /**
     * @var string
     */
    protected $__resourceIdType = 'Google_ResourceId';
    /**
     * @var string
     */
    protected $__resourceIdDataType = '';
    /**
     * @var
     */
    public $resourceId;

    /**
     * @param Google_ResourceId $resourceId
     */
    public function setResourceId(Google_ResourceId $resourceId)
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
}

/**
 * Class Google_ActivityContentDetailsChannelItem
 */
class Google_ActivityContentDetailsChannelItem extends Google_Model
{
    /**
     * @var string
     */
    protected $__resourceIdType = 'Google_ResourceId';
    /**
     * @var string
     */
    protected $__resourceIdDataType = '';
    /**
     * @var
     */
    public $resourceId;

    /**
     * @param Google_ResourceId $resourceId
     */
    public function setResourceId(Google_ResourceId $resourceId)
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
}

/**
 * Class Google_ActivityContentDetailsComment
 */
class Google_ActivityContentDetailsComment extends Google_Model
{
    /**
     * @var string
     */
    protected $__resourceIdType = 'Google_ResourceId';
    /**
     * @var string
     */
    protected $__resourceIdDataType = '';
    /**
     * @var
     */
    public $resourceId;

    /**
     * @param Google_ResourceId $resourceId
     */
    public function setResourceId(Google_ResourceId $resourceId)
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
}

/**
 * Class Google_ActivityContentDetailsFavorite
 */
class Google_ActivityContentDetailsFavorite extends Google_Model
{
    /**
     * @var string
     */
    protected $__resourceIdType = 'Google_ResourceId';
    /**
     * @var string
     */
    protected $__resourceIdDataType = '';
    /**
     * @var
     */
    public $resourceId;

    /**
     * @param Google_ResourceId $resourceId
     */
    public function setResourceId(Google_ResourceId $resourceId)
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
}

/**
 * Class Google_ActivityContentDetailsLike
 */
class Google_ActivityContentDetailsLike extends Google_Model
{
    /**
     * @var string
     */
    protected $__resourceIdType = 'Google_ResourceId';
    /**
     * @var string
     */
    protected $__resourceIdDataType = '';
    /**
     * @var
     */
    public $resourceId;

    /**
     * @param Google_ResourceId $resourceId
     */
    public function setResourceId(Google_ResourceId $resourceId)
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
}

/**
 * Class Google_ActivityContentDetailsPlaylistItem
 */
class Google_ActivityContentDetailsPlaylistItem extends Google_Model
{
    /**
     * @var
     */
    public $playlistId;
    /**
     * @var
     */
    public $playlistItemId;
    /**
     * @var string
     */
    protected $__resourceIdType = 'Google_ResourceId';
    /**
     * @var string
     */
    protected $__resourceIdDataType = '';
    /**
     * @var
     */
    public $resourceId;

    /**
     * @param $playlistId
     */
    public function setPlaylistId($playlistId)
    {
        $this->playlistId = $playlistId;
    }

    /**
     * @return mixed
     */
    public function getPlaylistId()
    {
        return $this->playlistId;
    }

    /**
     * @param $playlistItemId
     */
    public function setPlaylistItemId($playlistItemId)
    {
        $this->playlistItemId = $playlistItemId;
    }

    /**
     * @return mixed
     */
    public function getPlaylistItemId()
    {
        return $this->playlistItemId;
    }

    /**
     * @param Google_ResourceId $resourceId
     */
    public function setResourceId(Google_ResourceId $resourceId)
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
}

/**
 * Class Google_ActivityContentDetailsPromotedItem
 */
class Google_ActivityContentDetailsPromotedItem extends Google_Model
{
    /**
     * @var
     */
    public $adTag;
    /**
     * @var
     */
    public $clickTrackingUrl;
    /**
     * @var
     */
    public $creativeViewUrl;
    /**
     * @var
     */
    public $ctaType;
    /**
     * @var
     */
    public $descriptionText;
    /**
     * @var
     */
    public $destinationUrl;
    /**
     * @var
     */
    public $videoId;

    /**
     * @param $adTag
     */
    public function setAdTag($adTag)
    {
        $this->adTag = $adTag;
    }

    /**
     * @return mixed
     */
    public function getAdTag()
    {
        return $this->adTag;
    }

    /**
     * @param $clickTrackingUrl
     */
    public function setClickTrackingUrl($clickTrackingUrl)
    {
        $this->clickTrackingUrl = $clickTrackingUrl;
    }

    /**
     * @return mixed
     */
    public function getClickTrackingUrl()
    {
        return $this->clickTrackingUrl;
    }

    /**
     * @param $creativeViewUrl
     */
    public function setCreativeViewUrl($creativeViewUrl)
    {
        $this->creativeViewUrl = $creativeViewUrl;
    }

    /**
     * @return mixed
     */
    public function getCreativeViewUrl()
    {
        return $this->creativeViewUrl;
    }

    /**
     * @param $ctaType
     */
    public function setCtaType($ctaType)
    {
        $this->ctaType = $ctaType;
    }

    /**
     * @return mixed
     */
    public function getCtaType()
    {
        return $this->ctaType;
    }

    /**
     * @param $descriptionText
     */
    public function setDescriptionText($descriptionText)
    {
        $this->descriptionText = $descriptionText;
    }

    /**
     * @return mixed
     */
    public function getDescriptionText()
    {
        return $this->descriptionText;
    }

    /**
     * @param $destinationUrl
     */
    public function setDestinationUrl($destinationUrl)
    {
        $this->destinationUrl = $destinationUrl;
    }

    /**
     * @return mixed
     */
    public function getDestinationUrl()
    {
        return $this->destinationUrl;
    }

    /**
     * @param $videoId
     */
    public function setVideoId($videoId)
    {
        $this->videoId = $videoId;
    }

    /**
     * @return mixed
     */
    public function getVideoId()
    {
        return $this->videoId;
    }
}

/**
 * Class Google_ActivityContentDetailsRecommendation
 */
class Google_ActivityContentDetailsRecommendation extends Google_Model
{
    /**
     * @var
     */
    public $reason;
    /**
     * @var string
     */
    protected $__resourceIdType = 'Google_ResourceId';
    /**
     * @var string
     */
    protected $__resourceIdDataType = '';
    /**
     * @var
     */
    public $resourceId;
    /**
     * @var string
     */
    protected $__seedResourceIdType = 'Google_ResourceId';
    /**
     * @var string
     */
    protected $__seedResourceIdDataType = '';
    /**
     * @var
     */
    public $seedResourceId;

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

    /**
     * @param Google_ResourceId $resourceId
     */
    public function setResourceId(Google_ResourceId $resourceId)
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
     * @param Google_ResourceId $seedResourceId
     */
    public function setSeedResourceId(Google_ResourceId $seedResourceId)
    {
        $this->seedResourceId = $seedResourceId;
    }

    /**
     * @return mixed
     */
    public function getSeedResourceId()
    {
        return $this->seedResourceId;
    }
}

/**
 * Class Google_ActivityContentDetailsSocial
 */
class Google_ActivityContentDetailsSocial extends Google_Model
{
    /**
     * @var
     */
    public $author;
    /**
     * @var
     */
    public $imageUrl;
    /**
     * @var
     */
    public $referenceUrl;
    /**
     * @var string
     */
    protected $__resourceIdType = 'Google_ResourceId';
    /**
     * @var string
     */
    protected $__resourceIdDataType = '';
    /**
     * @var
     */
    public $resourceId;
    /**
     * @var
     */
    public $type;

    /**
     * @param $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param $imageUrl
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return mixed
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param $referenceUrl
     */
    public function setReferenceUrl($referenceUrl)
    {
        $this->referenceUrl = $referenceUrl;
    }

    /**
     * @return mixed
     */
    public function getReferenceUrl()
    {
        return $this->referenceUrl;
    }

    /**
     * @param Google_ResourceId $resourceId
     */
    public function setResourceId(Google_ResourceId $resourceId)
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
 * Class Google_ActivityContentDetailsSubscription
 */
class Google_ActivityContentDetailsSubscription extends Google_Model
{
    /**
     * @var string
     */
    protected $__resourceIdType = 'Google_ResourceId';
    /**
     * @var string
     */
    protected $__resourceIdDataType = '';
    /**
     * @var
     */
    public $resourceId;

    /**
     * @param Google_ResourceId $resourceId
     */
    public function setResourceId(Google_ResourceId $resourceId)
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
}

/**
 * Class Google_ActivityContentDetailsUpload
 */
class Google_ActivityContentDetailsUpload extends Google_Model
{
    /**
     * @var
     */
    public $videoId;

    /**
     * @param $videoId
     */
    public function setVideoId($videoId)
    {
        $this->videoId = $videoId;
    }

    /**
     * @return mixed
     */
    public function getVideoId()
    {
        return $this->videoId;
    }
}

/**
 * Class Google_ActivityListResponse
 */
class Google_ActivityListResponse extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $eventId;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Activity';
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
     * @var string
     */
    protected $__pageInfoType = 'Google_PageInfo';
    /**
     * @var string
     */
    protected $__pageInfoDataType = '';
    /**
     * @var
     */
    public $pageInfo;
    /**
     * @var
     */
    public $prevPageToken;
    /**
     * @var
     */
    public $visitorId;

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
     * @param $eventId
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    /**
     * @return mixed
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Activity) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Activity', __METHOD__);
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
     * @param Google_PageInfo $pageInfo
     */
    public function setPageInfo(Google_PageInfo $pageInfo)
    {
        $this->pageInfo = $pageInfo;
    }

    /**
     * @return mixed
     */
    public function getPageInfo()
    {
        return $this->pageInfo;
    }

    /**
     * @param $prevPageToken
     */
    public function setPrevPageToken($prevPageToken)
    {
        $this->prevPageToken = $prevPageToken;
    }

    /**
     * @return mixed
     */
    public function getPrevPageToken()
    {
        return $this->prevPageToken;
    }

    /**
     * @param $visitorId
     */
    public function setVisitorId($visitorId)
    {
        $this->visitorId = $visitorId;
    }

    /**
     * @return mixed
     */
    public function getVisitorId()
    {
        return $this->visitorId;
    }
}

/**
 * Class Google_ActivitySnippet
 */
class Google_ActivitySnippet extends Google_Model
{
    /**
     * @var
     */
    public $channelId;
    /**
     * @var
     */
    public $channelTitle;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $groupId;
    /**
     * @var
     */
    public $publishedAt;
    /**
     * @var string
     */
    protected $__thumbnailsType = 'Google_ThumbnailDetails';
    /**
     * @var string
     */
    protected $__thumbnailsDataType = '';
    /**
     * @var
     */
    public $thumbnails;
    /**
     * @var
     */
    public $title;
    /**
     * @var
     */
    public $type;

    /**
     * @param $channelId
     */
    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;
    }

    /**
     * @return mixed
     */
    public function getChannelId()
    {
        return $this->channelId;
    }

    /**
     * @param $channelTitle
     */
    public function setChannelTitle($channelTitle)
    {
        $this->channelTitle = $channelTitle;
    }

    /**
     * @return mixed
     */
    public function getChannelTitle()
    {
        return $this->channelTitle;
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
     * @param $groupId
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
    }

    /**
     * @return mixed
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * @param $publishedAt
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;
    }

    /**
     * @return mixed
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * @param Google_ThumbnailDetails $thumbnails
     */
    public function setThumbnails(Google_ThumbnailDetails $thumbnails)
    {
        $this->thumbnails = $thumbnails;
    }

    /**
     * @return mixed
     */
    public function getThumbnails()
    {
        return $this->thumbnails;
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
 * Class Google_Channel
 */
class Google_Channel extends Google_Model
{
    /**
     * @var string
     */
    protected $__brandingSettingsType = 'Google_ChannelBrandingSettings';
    /**
     * @var string
     */
    protected $__brandingSettingsDataType = '';
    /**
     * @var
     */
    public $brandingSettings;
    /**
     * @var string
     */
    protected $__contentDetailsType = 'Google_ChannelContentDetails';
    /**
     * @var string
     */
    protected $__contentDetailsDataType = '';
    /**
     * @var
     */
    public $contentDetails;
    /**
     * @var string
     */
    protected $__conversionPingsType = 'Google_ChannelConversionPings';
    /**
     * @var string
     */
    protected $__conversionPingsDataType = '';
    /**
     * @var
     */
    public $conversionPings;
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__invideoPromotionType = 'Google_InvideoPromotion';
    /**
     * @var string
     */
    protected $__invideoPromotionDataType = '';
    /**
     * @var
     */
    public $invideoPromotion;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__snippetType = 'Google_ChannelSnippet';
    /**
     * @var string
     */
    protected $__snippetDataType = '';
    /**
     * @var
     */
    public $snippet;
    /**
     * @var string
     */
    protected $__statisticsType = 'Google_ChannelStatistics';
    /**
     * @var string
     */
    protected $__statisticsDataType = '';
    /**
     * @var
     */
    public $statistics;
    /**
     * @var string
     */
    protected $__statusType = 'Google_ChannelStatus';
    /**
     * @var string
     */
    protected $__statusDataType = '';
    /**
     * @var
     */
    public $status;
    /**
     * @var string
     */
    protected $__topicDetailsType = 'Google_ChannelTopicDetails';
    /**
     * @var string
     */
    protected $__topicDetailsDataType = '';
    /**
     * @var
     */
    public $topicDetails;

    /**
     * @param Google_ChannelBrandingSettings $brandingSettings
     */
    public function setBrandingSettings(Google_ChannelBrandingSettings $brandingSettings)
    {
        $this->brandingSettings = $brandingSettings;
    }

    /**
     * @return mixed
     */
    public function getBrandingSettings()
    {
        return $this->brandingSettings;
    }

    /**
     * @param Google_ChannelContentDetails $contentDetails
     */
    public function setContentDetails(Google_ChannelContentDetails $contentDetails)
    {
        $this->contentDetails = $contentDetails;
    }

    /**
     * @return mixed
     */
    public function getContentDetails()
    {
        return $this->contentDetails;
    }

    /**
     * @param Google_ChannelConversionPings $conversionPings
     */
    public function setConversionPings(Google_ChannelConversionPings $conversionPings)
    {
        $this->conversionPings = $conversionPings;
    }

    /**
     * @return mixed
     */
    public function getConversionPings()
    {
        return $this->conversionPings;
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
     * @param Google_InvideoPromotion $invideoPromotion
     */
    public function setInvideoPromotion(Google_InvideoPromotion $invideoPromotion)
    {
        $this->invideoPromotion = $invideoPromotion;
    }

    /**
     * @return mixed
     */
    public function getInvideoPromotion()
    {
        return $this->invideoPromotion;
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
     * @param Google_ChannelSnippet $snippet
     */
    public function setSnippet(Google_ChannelSnippet $snippet)
    {
        $this->snippet = $snippet;
    }

    /**
     * @return mixed
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * @param Google_ChannelStatistics $statistics
     */
    public function setStatistics(Google_ChannelStatistics $statistics)
    {
        $this->statistics = $statistics;
    }

    /**
     * @return mixed
     */
    public function getStatistics()
    {
        return $this->statistics;
    }

    /**
     * @param Google_ChannelStatus $status
     */
    public function setStatus(Google_ChannelStatus $status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param Google_ChannelTopicDetails $topicDetails
     */
    public function setTopicDetails(Google_ChannelTopicDetails $topicDetails)
    {
        $this->topicDetails = $topicDetails;
    }

    /**
     * @return mixed
     */
    public function getTopicDetails()
    {
        return $this->topicDetails;
    }
}

/**
 * Class Google_ChannelBannerResource
 */
class Google_ChannelBannerResource extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $url;

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
 * Class Google_ChannelBrandingSettings
 */
class Google_ChannelBrandingSettings extends Google_Model
{
    /**
     * @var string
     */
    protected $__channelType = 'Google_ChannelSettings';
    /**
     * @var string
     */
    protected $__channelDataType = '';
    /**
     * @var
     */
    public $channel;
    /**
     * @var string
     */
    protected $__hintsType = 'Google_PropertyValue';
    /**
     * @var string
     */
    protected $__hintsDataType = 'array';
    /**
     * @var
     */
    public $hints;
    /**
     * @var string
     */
    protected $__imageType = 'Google_ImageSettings';
    /**
     * @var string
     */
    protected $__imageDataType = '';
    /**
     * @var
     */
    public $image;
    /**
     * @var string
     */
    protected $__watchType = 'Google_WatchSettings';
    /**
     * @var string
     */
    protected $__watchDataType = '';
    /**
     * @var
     */
    public $watch;

    /**
     * @param Google_ChannelSettings $channel
     */
    public function setChannel(Google_ChannelSettings $channel)
    {
        $this->channel = $channel;
    }

    /**
     * @return mixed
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param $hints
     * @throws Google_Exception
     */
    public function setHints(/* array(Google_PropertyValue) */
        $hints)
    {
        $this->assertIsArray($hints, 'Google_PropertyValue', __METHOD__);
        $this->hints = $hints;
    }

    /**
     * @return mixed
     */
    public function getHints()
    {
        return $this->hints;
    }

    /**
     * @param Google_ImageSettings $image
     */
    public function setImage(Google_ImageSettings $image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param Google_WatchSettings $watch
     */
    public function setWatch(Google_WatchSettings $watch)
    {
        $this->watch = $watch;
    }

    /**
     * @return mixed
     */
    public function getWatch()
    {
        return $this->watch;
    }
}

/**
 * Class Google_ChannelContentDetails
 */
class Google_ChannelContentDetails extends Google_Model
{
    /**
     * @var
     */
    public $googlePlusUserId;
    /**
     * @var string
     */
    protected $__relatedPlaylistsType = 'Google_ChannelContentDetailsRelatedPlaylists';
    /**
     * @var string
     */
    protected $__relatedPlaylistsDataType = '';
    /**
     * @var
     */
    public $relatedPlaylists;

    /**
     * @param $googlePlusUserId
     */
    public function setGooglePlusUserId($googlePlusUserId)
    {
        $this->googlePlusUserId = $googlePlusUserId;
    }

    /**
     * @return mixed
     */
    public function getGooglePlusUserId()
    {
        return $this->googlePlusUserId;
    }

    /**
     * @param Google_ChannelContentDetailsRelatedPlaylists $relatedPlaylists
     */
    public function setRelatedPlaylists(Google_ChannelContentDetailsRelatedPlaylists $relatedPlaylists)
    {
        $this->relatedPlaylists = $relatedPlaylists;
    }

    /**
     * @return mixed
     */
    public function getRelatedPlaylists()
    {
        return $this->relatedPlaylists;
    }
}

/**
 * Class Google_ChannelContentDetailsRelatedPlaylists
 */
class Google_ChannelContentDetailsRelatedPlaylists extends Google_Model
{
    /**
     * @var
     */
    public $favorites;
    /**
     * @var
     */
    public $likes;
    /**
     * @var
     */
    public $uploads;
    /**
     * @var
     */
    public $watchHistory;
    /**
     * @var
     */
    public $watchLater;

    /**
     * @param $favorites
     */
    public function setFavorites($favorites)
    {
        $this->favorites = $favorites;
    }

    /**
     * @return mixed
     */
    public function getFavorites()
    {
        return $this->favorites;
    }

    /**
     * @param $likes
     */
    public function setLikes($likes)
    {
        $this->likes = $likes;
    }

    /**
     * @return mixed
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * @param $uploads
     */
    public function setUploads($uploads)
    {
        $this->uploads = $uploads;
    }

    /**
     * @return mixed
     */
    public function getUploads()
    {
        return $this->uploads;
    }

    /**
     * @param $watchHistory
     */
    public function setWatchHistory($watchHistory)
    {
        $this->watchHistory = $watchHistory;
    }

    /**
     * @return mixed
     */
    public function getWatchHistory()
    {
        return $this->watchHistory;
    }

    /**
     * @param $watchLater
     */
    public function setWatchLater($watchLater)
    {
        $this->watchLater = $watchLater;
    }

    /**
     * @return mixed
     */
    public function getWatchLater()
    {
        return $this->watchLater;
    }
}

/**
 * Class Google_ChannelConversionPing
 */
class Google_ChannelConversionPing extends Google_Model
{
    /**
     * @var
     */
    public $context;
    /**
     * @var
     */
    public $conversionUrl;

    /**
     * @param $context
     */
    public function setContext($context)
    {
        $this->context = $context;
    }

    /**
     * @return mixed
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param $conversionUrl
     */
    public function setConversionUrl($conversionUrl)
    {
        $this->conversionUrl = $conversionUrl;
    }

    /**
     * @return mixed
     */
    public function getConversionUrl()
    {
        return $this->conversionUrl;
    }
}

/**
 * Class Google_ChannelConversionPings
 */
class Google_ChannelConversionPings extends Google_Model
{
    /**
     * @var string
     */
    protected $__pingsType = 'Google_ChannelConversionPing';
    /**
     * @var string
     */
    protected $__pingsDataType = 'array';
    /**
     * @var
     */
    public $pings;

    /**
     * @param $pings
     * @throws Google_Exception
     */
    public function setPings(/* array(Google_ChannelConversionPing) */
        $pings)
    {
        $this->assertIsArray($pings, 'Google_ChannelConversionPing', __METHOD__);
        $this->pings = $pings;
    }

    /**
     * @return mixed
     */
    public function getPings()
    {
        return $this->pings;
    }
}

/**
 * Class Google_ChannelListResponse
 */
class Google_ChannelListResponse extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $eventId;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Channel';
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
     * @var string
     */
    protected $__pageInfoType = 'Google_PageInfo';
    /**
     * @var string
     */
    protected $__pageInfoDataType = '';
    /**
     * @var
     */
    public $pageInfo;
    /**
     * @var
     */
    public $prevPageToken;
    /**
     * @var
     */
    public $visitorId;

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
     * @param $eventId
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    /**
     * @return mixed
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Channel) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Channel', __METHOD__);
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
     * @param Google_PageInfo $pageInfo
     */
    public function setPageInfo(Google_PageInfo $pageInfo)
    {
        $this->pageInfo = $pageInfo;
    }

    /**
     * @return mixed
     */
    public function getPageInfo()
    {
        return $this->pageInfo;
    }

    /**
     * @param $prevPageToken
     */
    public function setPrevPageToken($prevPageToken)
    {
        $this->prevPageToken = $prevPageToken;
    }

    /**
     * @return mixed
     */
    public function getPrevPageToken()
    {
        return $this->prevPageToken;
    }

    /**
     * @param $visitorId
     */
    public function setVisitorId($visitorId)
    {
        $this->visitorId = $visitorId;
    }

    /**
     * @return mixed
     */
    public function getVisitorId()
    {
        return $this->visitorId;
    }
}

/**
 * Class Google_ChannelSettings
 */
class Google_ChannelSettings extends Google_Model
{
    /**
     * @var
     */
    public $defaultTab;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $featuredChannelsTitle;
    /**
     * @var
     */
    public $featuredChannelsUrls;
    /**
     * @var
     */
    public $keywords;
    /**
     * @var
     */
    public $moderateComments;
    /**
     * @var
     */
    public $profileColor;
    /**
     * @var
     */
    public $showBrowseView;
    /**
     * @var
     */
    public $showRelatedChannels;
    /**
     * @var
     */
    public $title;
    /**
     * @var
     */
    public $trackingAnalyticsAccountId;
    /**
     * @var
     */
    public $unsubscribedTrailer;

    /**
     * @param $defaultTab
     */
    public function setDefaultTab($defaultTab)
    {
        $this->defaultTab = $defaultTab;
    }

    /**
     * @return mixed
     */
    public function getDefaultTab()
    {
        return $this->defaultTab;
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
     * @param $featuredChannelsTitle
     */
    public function setFeaturedChannelsTitle($featuredChannelsTitle)
    {
        $this->featuredChannelsTitle = $featuredChannelsTitle;
    }

    /**
     * @return mixed
     */
    public function getFeaturedChannelsTitle()
    {
        return $this->featuredChannelsTitle;
    }

    /**
     * @param $featuredChannelsUrls
     * @throws Google_Exception
     */
    public function setFeaturedChannelsUrls(/* array(Google_string) */
        $featuredChannelsUrls)
    {
        $this->assertIsArray($featuredChannelsUrls, 'Google_string', __METHOD__);
        $this->featuredChannelsUrls = $featuredChannelsUrls;
    }

    /**
     * @return mixed
     */
    public function getFeaturedChannelsUrls()
    {
        return $this->featuredChannelsUrls;
    }

    /**
     * @param $keywords
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    }

    /**
     * @return mixed
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param $moderateComments
     */
    public function setModerateComments($moderateComments)
    {
        $this->moderateComments = $moderateComments;
    }

    /**
     * @return mixed
     */
    public function getModerateComments()
    {
        return $this->moderateComments;
    }

    /**
     * @param $profileColor
     */
    public function setProfileColor($profileColor)
    {
        $this->profileColor = $profileColor;
    }

    /**
     * @return mixed
     */
    public function getProfileColor()
    {
        return $this->profileColor;
    }

    /**
     * @param $showBrowseView
     */
    public function setShowBrowseView($showBrowseView)
    {
        $this->showBrowseView = $showBrowseView;
    }

    /**
     * @return mixed
     */
    public function getShowBrowseView()
    {
        return $this->showBrowseView;
    }

    /**
     * @param $showRelatedChannels
     */
    public function setShowRelatedChannels($showRelatedChannels)
    {
        $this->showRelatedChannels = $showRelatedChannels;
    }

    /**
     * @return mixed
     */
    public function getShowRelatedChannels()
    {
        return $this->showRelatedChannels;
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
     * @param $trackingAnalyticsAccountId
     */
    public function setTrackingAnalyticsAccountId($trackingAnalyticsAccountId)
    {
        $this->trackingAnalyticsAccountId = $trackingAnalyticsAccountId;
    }

    /**
     * @return mixed
     */
    public function getTrackingAnalyticsAccountId()
    {
        return $this->trackingAnalyticsAccountId;
    }

    /**
     * @param $unsubscribedTrailer
     */
    public function setUnsubscribedTrailer($unsubscribedTrailer)
    {
        $this->unsubscribedTrailer = $unsubscribedTrailer;
    }

    /**
     * @return mixed
     */
    public function getUnsubscribedTrailer()
    {
        return $this->unsubscribedTrailer;
    }
}

/**
 * Class Google_ChannelSnippet
 */
class Google_ChannelSnippet extends Google_Model
{
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $publishedAt;
    /**
     * @var string
     */
    protected $__thumbnailsType = 'Google_ThumbnailDetails';
    /**
     * @var string
     */
    protected $__thumbnailsDataType = '';
    /**
     * @var
     */
    public $thumbnails;
    /**
     * @var
     */
    public $title;

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
     * @param $publishedAt
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;
    }

    /**
     * @return mixed
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * @param Google_ThumbnailDetails $thumbnails
     */
    public function setThumbnails(Google_ThumbnailDetails $thumbnails)
    {
        $this->thumbnails = $thumbnails;
    }

    /**
     * @return mixed
     */
    public function getThumbnails()
    {
        return $this->thumbnails;
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
}

/**
 * Class Google_ChannelStatistics
 */
class Google_ChannelStatistics extends Google_Model
{
    /**
     * @var
     */
    public $commentCount;
    /**
     * @var
     */
    public $subscriberCount;
    /**
     * @var
     */
    public $videoCount;
    /**
     * @var
     */
    public $viewCount;

    /**
     * @param $commentCount
     */
    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;
    }

    /**
     * @return mixed
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }

    /**
     * @param $subscriberCount
     */
    public function setSubscriberCount($subscriberCount)
    {
        $this->subscriberCount = $subscriberCount;
    }

    /**
     * @return mixed
     */
    public function getSubscriberCount()
    {
        return $this->subscriberCount;
    }

    /**
     * @param $videoCount
     */
    public function setVideoCount($videoCount)
    {
        $this->videoCount = $videoCount;
    }

    /**
     * @return mixed
     */
    public function getVideoCount()
    {
        return $this->videoCount;
    }

    /**
     * @param $viewCount
     */
    public function setViewCount($viewCount)
    {
        $this->viewCount = $viewCount;
    }

    /**
     * @return mixed
     */
    public function getViewCount()
    {
        return $this->viewCount;
    }
}

/**
 * Class Google_ChannelStatus
 */
class Google_ChannelStatus extends Google_Model
{
    /**
     * @var
     */
    public $isLinked;
    /**
     * @var
     */
    public $privacyStatus;

    /**
     * @param $isLinked
     */
    public function setIsLinked($isLinked)
    {
        $this->isLinked = $isLinked;
    }

    /**
     * @return mixed
     */
    public function getIsLinked()
    {
        return $this->isLinked;
    }

    /**
     * @param $privacyStatus
     */
    public function setPrivacyStatus($privacyStatus)
    {
        $this->privacyStatus = $privacyStatus;
    }

    /**
     * @return mixed
     */
    public function getPrivacyStatus()
    {
        return $this->privacyStatus;
    }
}

/**
 * Class Google_ChannelTopicDetails
 */
class Google_ChannelTopicDetails extends Google_Model
{
    /**
     * @var
     */
    public $topicIds;

    /**
     * @param $topicIds
     * @throws Google_Exception
     */
    public function setTopicIds(/* array(Google_string) */
        $topicIds)
    {
        $this->assertIsArray($topicIds, 'Google_string', __METHOD__);
        $this->topicIds = $topicIds;
    }

    /**
     * @return mixed
     */
    public function getTopicIds()
    {
        return $this->topicIds;
    }
}

/**
 * Class Google_ContentRating
 */
class Google_ContentRating extends Google_Model
{
    /**
     * @var
     */
    public $acbRating;
    /**
     * @var
     */
    public $bbfcRating;
    /**
     * @var
     */
    public $cbfcRating;
    /**
     * @var
     */
    public $chvrsRating;
    /**
     * @var
     */
    public $djctqRating;
    /**
     * @var
     */
    public $eirinRating;
    /**
     * @var
     */
    public $fmocRating;
    /**
     * @var
     */
    public $fskRating;
    /**
     * @var
     */
    public $icaaRating;
    /**
     * @var
     */
    public $kmrbRating;
    /**
     * @var
     */
    public $mpaaRating;
    /**
     * @var
     */
    public $oflcRating;
    /**
     * @var
     */
    public $rtcRating;
    /**
     * @var
     */
    public $russiaRating;
    /**
     * @var
     */
    public $tvpgRating;
    /**
     * @var
     */
    public $ytRating;

    /**
     * @param $acbRating
     */
    public function setAcbRating($acbRating)
    {
        $this->acbRating = $acbRating;
    }

    /**
     * @return mixed
     */
    public function getAcbRating()
    {
        return $this->acbRating;
    }

    /**
     * @param $bbfcRating
     */
    public function setBbfcRating($bbfcRating)
    {
        $this->bbfcRating = $bbfcRating;
    }

    /**
     * @return mixed
     */
    public function getBbfcRating()
    {
        return $this->bbfcRating;
    }

    /**
     * @param $cbfcRating
     */
    public function setCbfcRating($cbfcRating)
    {
        $this->cbfcRating = $cbfcRating;
    }

    /**
     * @return mixed
     */
    public function getCbfcRating()
    {
        return $this->cbfcRating;
    }

    /**
     * @param $chvrsRating
     */
    public function setChvrsRating($chvrsRating)
    {
        $this->chvrsRating = $chvrsRating;
    }

    /**
     * @return mixed
     */
    public function getChvrsRating()
    {
        return $this->chvrsRating;
    }

    /**
     * @param $djctqRating
     */
    public function setDjctqRating($djctqRating)
    {
        $this->djctqRating = $djctqRating;
    }

    /**
     * @return mixed
     */
    public function getDjctqRating()
    {
        return $this->djctqRating;
    }

    /**
     * @param $eirinRating
     */
    public function setEirinRating($eirinRating)
    {
        $this->eirinRating = $eirinRating;
    }

    /**
     * @return mixed
     */
    public function getEirinRating()
    {
        return $this->eirinRating;
    }

    /**
     * @param $fmocRating
     */
    public function setFmocRating($fmocRating)
    {
        $this->fmocRating = $fmocRating;
    }

    /**
     * @return mixed
     */
    public function getFmocRating()
    {
        return $this->fmocRating;
    }

    /**
     * @param $fskRating
     */
    public function setFskRating($fskRating)
    {
        $this->fskRating = $fskRating;
    }

    /**
     * @return mixed
     */
    public function getFskRating()
    {
        return $this->fskRating;
    }

    /**
     * @param $icaaRating
     */
    public function setIcaaRating($icaaRating)
    {
        $this->icaaRating = $icaaRating;
    }

    /**
     * @return mixed
     */
    public function getIcaaRating()
    {
        return $this->icaaRating;
    }

    /**
     * @param $kmrbRating
     */
    public function setKmrbRating($kmrbRating)
    {
        $this->kmrbRating = $kmrbRating;
    }

    /**
     * @return mixed
     */
    public function getKmrbRating()
    {
        return $this->kmrbRating;
    }

    /**
     * @param $mpaaRating
     */
    public function setMpaaRating($mpaaRating)
    {
        $this->mpaaRating = $mpaaRating;
    }

    /**
     * @return mixed
     */
    public function getMpaaRating()
    {
        return $this->mpaaRating;
    }

    /**
     * @param $oflcRating
     */
    public function setOflcRating($oflcRating)
    {
        $this->oflcRating = $oflcRating;
    }

    /**
     * @return mixed
     */
    public function getOflcRating()
    {
        return $this->oflcRating;
    }

    /**
     * @param $rtcRating
     */
    public function setRtcRating($rtcRating)
    {
        $this->rtcRating = $rtcRating;
    }

    /**
     * @return mixed
     */
    public function getRtcRating()
    {
        return $this->rtcRating;
    }

    /**
     * @param $russiaRating
     */
    public function setRussiaRating($russiaRating)
    {
        $this->russiaRating = $russiaRating;
    }

    /**
     * @return mixed
     */
    public function getRussiaRating()
    {
        return $this->russiaRating;
    }

    /**
     * @param $tvpgRating
     */
    public function setTvpgRating($tvpgRating)
    {
        $this->tvpgRating = $tvpgRating;
    }

    /**
     * @return mixed
     */
    public function getTvpgRating()
    {
        return $this->tvpgRating;
    }

    /**
     * @param $ytRating
     */
    public function setYtRating($ytRating)
    {
        $this->ytRating = $ytRating;
    }

    /**
     * @return mixed
     */
    public function getYtRating()
    {
        return $this->ytRating;
    }
}

/**
 * Class Google_GeoPoint
 */
class Google_GeoPoint extends Google_Model
{
    /**
     * @var
     */
    public $altitude;
    /**
     * @var
     */
    public $latitude;
    /**
     * @var
     */
    public $longitude;

    /**
     * @param $altitude
     */
    public function setAltitude($altitude)
    {
        $this->altitude = $altitude;
    }

    /**
     * @return mixed
     */
    public function getAltitude()
    {
        return $this->altitude;
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
}

/**
 * Class Google_GuideCategory
 */
class Google_GuideCategory extends Google_Model
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
     * @var string
     */
    protected $__snippetType = 'Google_GuideCategorySnippet';
    /**
     * @var string
     */
    protected $__snippetDataType = '';
    /**
     * @var
     */
    public $snippet;

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
     * @param Google_GuideCategorySnippet $snippet
     */
    public function setSnippet(Google_GuideCategorySnippet $snippet)
    {
        $this->snippet = $snippet;
    }

    /**
     * @return mixed
     */
    public function getSnippet()
    {
        return $this->snippet;
    }
}

/**
 * Class Google_GuideCategoryListResponse
 */
class Google_GuideCategoryListResponse extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $eventId;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_GuideCategory';
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
    public $visitorId;

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
     * @param $eventId
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    /**
     * @return mixed
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_GuideCategory) */
        $items)
    {
        $this->assertIsArray($items, 'Google_GuideCategory', __METHOD__);
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
     * @param $visitorId
     */
    public function setVisitorId($visitorId)
    {
        $this->visitorId = $visitorId;
    }

    /**
     * @return mixed
     */
    public function getVisitorId()
    {
        return $this->visitorId;
    }
}

/**
 * Class Google_GuideCategorySnippet
 */
class Google_GuideCategorySnippet extends Google_Model
{
    /**
     * @var
     */
    public $channelId;
    /**
     * @var
     */
    public $title;

    /**
     * @param $channelId
     */
    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;
    }

    /**
     * @return mixed
     */
    public function getChannelId()
    {
        return $this->channelId;
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
}

/**
 * Class Google_ImageSettings
 */
class Google_ImageSettings extends Google_Model
{
    /**
     * @var string
     */
    protected $__backgroundImageUrlType = 'Google_LocalizedProperty';
    /**
     * @var string
     */
    protected $__backgroundImageUrlDataType = '';
    /**
     * @var
     */
    public $backgroundImageUrl;
    /**
     * @var
     */
    public $bannerExternalUrl;
    /**
     * @var
     */
    public $bannerImageUrl;
    /**
     * @var
     */
    public $bannerMobileExtraHdImageUrl;
    /**
     * @var
     */
    public $bannerMobileHdImageUrl;
    /**
     * @var
     */
    public $bannerMobileImageUrl;
    /**
     * @var
     */
    public $bannerMobileLowImageUrl;
    /**
     * @var
     */
    public $bannerMobileMediumHdImageUrl;
    /**
     * @var
     */
    public $bannerTabletExtraHdImageUrl;
    /**
     * @var
     */
    public $bannerTabletHdImageUrl;
    /**
     * @var
     */
    public $bannerTabletImageUrl;
    /**
     * @var
     */
    public $bannerTabletLowImageUrl;
    /**
     * @var
     */
    public $bannerTvImageUrl;
    /**
     * @var string
     */
    protected $__largeBrandedBannerImageImapScriptType = 'Google_LocalizedProperty';
    /**
     * @var string
     */
    protected $__largeBrandedBannerImageImapScriptDataType = '';
    /**
     * @var
     */
    public $largeBrandedBannerImageImapScript;
    /**
     * @var string
     */
    protected $__largeBrandedBannerImageUrlType = 'Google_LocalizedProperty';
    /**
     * @var string
     */
    protected $__largeBrandedBannerImageUrlDataType = '';
    /**
     * @var
     */
    public $largeBrandedBannerImageUrl;
    /**
     * @var string
     */
    protected $__smallBrandedBannerImageImapScriptType = 'Google_LocalizedProperty';
    /**
     * @var string
     */
    protected $__smallBrandedBannerImageImapScriptDataType = '';
    /**
     * @var
     */
    public $smallBrandedBannerImageImapScript;
    /**
     * @var string
     */
    protected $__smallBrandedBannerImageUrlType = 'Google_LocalizedProperty';
    /**
     * @var string
     */
    protected $__smallBrandedBannerImageUrlDataType = '';
    /**
     * @var
     */
    public $smallBrandedBannerImageUrl;
    /**
     * @var
     */
    public $trackingImageUrl;
    /**
     * @var
     */
    public $watchIconImageUrl;

    /**
     * @param Google_LocalizedProperty $backgroundImageUrl
     */
    public function setBackgroundImageUrl(Google_LocalizedProperty $backgroundImageUrl)
    {
        $this->backgroundImageUrl = $backgroundImageUrl;
    }

    /**
     * @return mixed
     */
    public function getBackgroundImageUrl()
    {
        return $this->backgroundImageUrl;
    }

    /**
     * @param $bannerExternalUrl
     */
    public function setBannerExternalUrl($bannerExternalUrl)
    {
        $this->bannerExternalUrl = $bannerExternalUrl;
    }

    /**
     * @return mixed
     */
    public function getBannerExternalUrl()
    {
        return $this->bannerExternalUrl;
    }

    /**
     * @param $bannerImageUrl
     */
    public function setBannerImageUrl($bannerImageUrl)
    {
        $this->bannerImageUrl = $bannerImageUrl;
    }

    /**
     * @return mixed
     */
    public function getBannerImageUrl()
    {
        return $this->bannerImageUrl;
    }

    /**
     * @param $bannerMobileExtraHdImageUrl
     */
    public function setBannerMobileExtraHdImageUrl($bannerMobileExtraHdImageUrl)
    {
        $this->bannerMobileExtraHdImageUrl = $bannerMobileExtraHdImageUrl;
    }

    /**
     * @return mixed
     */
    public function getBannerMobileExtraHdImageUrl()
    {
        return $this->bannerMobileExtraHdImageUrl;
    }

    /**
     * @param $bannerMobileHdImageUrl
     */
    public function setBannerMobileHdImageUrl($bannerMobileHdImageUrl)
    {
        $this->bannerMobileHdImageUrl = $bannerMobileHdImageUrl;
    }

    /**
     * @return mixed
     */
    public function getBannerMobileHdImageUrl()
    {
        return $this->bannerMobileHdImageUrl;
    }

    /**
     * @param $bannerMobileImageUrl
     */
    public function setBannerMobileImageUrl($bannerMobileImageUrl)
    {
        $this->bannerMobileImageUrl = $bannerMobileImageUrl;
    }

    /**
     * @return mixed
     */
    public function getBannerMobileImageUrl()
    {
        return $this->bannerMobileImageUrl;
    }

    /**
     * @param $bannerMobileLowImageUrl
     */
    public function setBannerMobileLowImageUrl($bannerMobileLowImageUrl)
    {
        $this->bannerMobileLowImageUrl = $bannerMobileLowImageUrl;
    }

    /**
     * @return mixed
     */
    public function getBannerMobileLowImageUrl()
    {
        return $this->bannerMobileLowImageUrl;
    }

    /**
     * @param $bannerMobileMediumHdImageUrl
     */
    public function setBannerMobileMediumHdImageUrl($bannerMobileMediumHdImageUrl)
    {
        $this->bannerMobileMediumHdImageUrl = $bannerMobileMediumHdImageUrl;
    }

    /**
     * @return mixed
     */
    public function getBannerMobileMediumHdImageUrl()
    {
        return $this->bannerMobileMediumHdImageUrl;
    }

    /**
     * @param $bannerTabletExtraHdImageUrl
     */
    public function setBannerTabletExtraHdImageUrl($bannerTabletExtraHdImageUrl)
    {
        $this->bannerTabletExtraHdImageUrl = $bannerTabletExtraHdImageUrl;
    }

    /**
     * @return mixed
     */
    public function getBannerTabletExtraHdImageUrl()
    {
        return $this->bannerTabletExtraHdImageUrl;
    }

    /**
     * @param $bannerTabletHdImageUrl
     */
    public function setBannerTabletHdImageUrl($bannerTabletHdImageUrl)
    {
        $this->bannerTabletHdImageUrl = $bannerTabletHdImageUrl;
    }

    /**
     * @return mixed
     */
    public function getBannerTabletHdImageUrl()
    {
        return $this->bannerTabletHdImageUrl;
    }

    /**
     * @param $bannerTabletImageUrl
     */
    public function setBannerTabletImageUrl($bannerTabletImageUrl)
    {
        $this->bannerTabletImageUrl = $bannerTabletImageUrl;
    }

    /**
     * @return mixed
     */
    public function getBannerTabletImageUrl()
    {
        return $this->bannerTabletImageUrl;
    }

    /**
     * @param $bannerTabletLowImageUrl
     */
    public function setBannerTabletLowImageUrl($bannerTabletLowImageUrl)
    {
        $this->bannerTabletLowImageUrl = $bannerTabletLowImageUrl;
    }

    /**
     * @return mixed
     */
    public function getBannerTabletLowImageUrl()
    {
        return $this->bannerTabletLowImageUrl;
    }

    /**
     * @param $bannerTvImageUrl
     */
    public function setBannerTvImageUrl($bannerTvImageUrl)
    {
        $this->bannerTvImageUrl = $bannerTvImageUrl;
    }

    /**
     * @return mixed
     */
    public function getBannerTvImageUrl()
    {
        return $this->bannerTvImageUrl;
    }

    /**
     * @param Google_LocalizedProperty $largeBrandedBannerImageImapScript
     */
    public function setLargeBrandedBannerImageImapScript(Google_LocalizedProperty $largeBrandedBannerImageImapScript)
    {
        $this->largeBrandedBannerImageImapScript = $largeBrandedBannerImageImapScript;
    }

    /**
     * @return mixed
     */
    public function getLargeBrandedBannerImageImapScript()
    {
        return $this->largeBrandedBannerImageImapScript;
    }

    /**
     * @param Google_LocalizedProperty $largeBrandedBannerImageUrl
     */
    public function setLargeBrandedBannerImageUrl(Google_LocalizedProperty $largeBrandedBannerImageUrl)
    {
        $this->largeBrandedBannerImageUrl = $largeBrandedBannerImageUrl;
    }

    /**
     * @return mixed
     */
    public function getLargeBrandedBannerImageUrl()
    {
        return $this->largeBrandedBannerImageUrl;
    }

    /**
     * @param Google_LocalizedProperty $smallBrandedBannerImageImapScript
     */
    public function setSmallBrandedBannerImageImapScript(Google_LocalizedProperty $smallBrandedBannerImageImapScript)
    {
        $this->smallBrandedBannerImageImapScript = $smallBrandedBannerImageImapScript;
    }

    /**
     * @return mixed
     */
    public function getSmallBrandedBannerImageImapScript()
    {
        return $this->smallBrandedBannerImageImapScript;
    }

    /**
     * @param Google_LocalizedProperty $smallBrandedBannerImageUrl
     */
    public function setSmallBrandedBannerImageUrl(Google_LocalizedProperty $smallBrandedBannerImageUrl)
    {
        $this->smallBrandedBannerImageUrl = $smallBrandedBannerImageUrl;
    }

    /**
     * @return mixed
     */
    public function getSmallBrandedBannerImageUrl()
    {
        return $this->smallBrandedBannerImageUrl;
    }

    /**
     * @param $trackingImageUrl
     */
    public function setTrackingImageUrl($trackingImageUrl)
    {
        $this->trackingImageUrl = $trackingImageUrl;
    }

    /**
     * @return mixed
     */
    public function getTrackingImageUrl()
    {
        return $this->trackingImageUrl;
    }

    /**
     * @param $watchIconImageUrl
     */
    public function setWatchIconImageUrl($watchIconImageUrl)
    {
        $this->watchIconImageUrl = $watchIconImageUrl;
    }

    /**
     * @return mixed
     */
    public function getWatchIconImageUrl()
    {
        return $this->watchIconImageUrl;
    }
}

/**
 * Class Google_IngestionInfo
 */
class Google_IngestionInfo extends Google_Model
{
    /**
     * @var
     */
    public $backupIngestionAddress;
    /**
     * @var
     */
    public $ingestionAddress;
    /**
     * @var
     */
    public $streamName;

    /**
     * @param $backupIngestionAddress
     */
    public function setBackupIngestionAddress($backupIngestionAddress)
    {
        $this->backupIngestionAddress = $backupIngestionAddress;
    }

    /**
     * @return mixed
     */
    public function getBackupIngestionAddress()
    {
        return $this->backupIngestionAddress;
    }

    /**
     * @param $ingestionAddress
     */
    public function setIngestionAddress($ingestionAddress)
    {
        $this->ingestionAddress = $ingestionAddress;
    }

    /**
     * @return mixed
     */
    public function getIngestionAddress()
    {
        return $this->ingestionAddress;
    }

    /**
     * @param $streamName
     */
    public function setStreamName($streamName)
    {
        $this->streamName = $streamName;
    }

    /**
     * @return mixed
     */
    public function getStreamName()
    {
        return $this->streamName;
    }
}

/**
 * Class Google_InvideoPosition
 */
class Google_InvideoPosition extends Google_Model
{
    /**
     * @var
     */
    public $cornerPosition;
    /**
     * @var
     */
    public $type;

    /**
     * @param $cornerPosition
     */
    public function setCornerPosition($cornerPosition)
    {
        $this->cornerPosition = $cornerPosition;
    }

    /**
     * @return mixed
     */
    public function getCornerPosition()
    {
        return $this->cornerPosition;
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
 * Class Google_InvideoPromotion
 */
class Google_InvideoPromotion extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_PromotedItemId';
    /**
     * @var string
     */
    protected $__itemsDataType = 'array';
    /**
     * @var
     */
    public $items;
    /**
     * @var string
     */
    protected $__positionType = 'Google_InvideoPosition';
    /**
     * @var string
     */
    protected $__positionDataType = '';
    /**
     * @var
     */
    public $position;
    /**
     * @var string
     */
    protected $__timingType = 'Google_InvideoTiming';
    /**
     * @var string
     */
    protected $__timingDataType = '';
    /**
     * @var
     */
    public $timing;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_PromotedItemId) */
        $items)
    {
        $this->assertIsArray($items, 'Google_PromotedItemId', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param Google_InvideoPosition $position
     */
    public function setPosition(Google_InvideoPosition $position)
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param Google_InvideoTiming $timing
     */
    public function setTiming(Google_InvideoTiming $timing)
    {
        $this->timing = $timing;
    }

    /**
     * @return mixed
     */
    public function getTiming()
    {
        return $this->timing;
    }
}

/**
 * Class Google_InvideoTiming
 */
class Google_InvideoTiming extends Google_Model
{
    /**
     * @var
     */
    public $offsetMs;
    /**
     * @var
     */
    public $type;

    /**
     * @param $offsetMs
     */
    public function setOffsetMs($offsetMs)
    {
        $this->offsetMs = $offsetMs;
    }

    /**
     * @return mixed
     */
    public function getOffsetMs()
    {
        return $this->offsetMs;
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
 * Class Google_LiveBroadcast
 */
class Google_LiveBroadcast extends Google_Model
{
    /**
     * @var string
     */
    protected $__contentDetailsType = 'Google_LiveBroadcastContentDetails';
    /**
     * @var string
     */
    protected $__contentDetailsDataType = '';
    /**
     * @var
     */
    public $contentDetails;
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
     * @var string
     */
    protected $__snippetType = 'Google_LiveBroadcastSnippet';
    /**
     * @var string
     */
    protected $__snippetDataType = '';
    /**
     * @var
     */
    public $snippet;
    /**
     * @var string
     */
    protected $__statusType = 'Google_LiveBroadcastStatus';
    /**
     * @var string
     */
    protected $__statusDataType = '';
    /**
     * @var
     */
    public $status;

    /**
     * @param Google_LiveBroadcastContentDetails $contentDetails
     */
    public function setContentDetails(Google_LiveBroadcastContentDetails $contentDetails)
    {
        $this->contentDetails = $contentDetails;
    }

    /**
     * @return mixed
     */
    public function getContentDetails()
    {
        return $this->contentDetails;
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
     * @param Google_LiveBroadcastSnippet $snippet
     */
    public function setSnippet(Google_LiveBroadcastSnippet $snippet)
    {
        $this->snippet = $snippet;
    }

    /**
     * @return mixed
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * @param Google_LiveBroadcastStatus $status
     */
    public function setStatus(Google_LiveBroadcastStatus $status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }
}

/**
 * Class Google_LiveBroadcastContentDetails
 */
class Google_LiveBroadcastContentDetails extends Google_Model
{
    /**
     * @var
     */
    public $boundStreamId;
    /**
     * @var
     */
    public $enableContentEncryption;
    /**
     * @var
     */
    public $enableDvr;
    /**
     * @var
     */
    public $enableEmbed;
    /**
     * @var string
     */
    protected $__monitorStreamType = 'Google_MonitorStreamInfo';
    /**
     * @var string
     */
    protected $__monitorStreamDataType = '';
    /**
     * @var
     */
    public $monitorStream;
    /**
     * @var
     */
    public $recordFromStart;
    /**
     * @var
     */
    public $startWithSlate;

    /**
     * @param $boundStreamId
     */
    public function setBoundStreamId($boundStreamId)
    {
        $this->boundStreamId = $boundStreamId;
    }

    /**
     * @return mixed
     */
    public function getBoundStreamId()
    {
        return $this->boundStreamId;
    }

    /**
     * @param $enableContentEncryption
     */
    public function setEnableContentEncryption($enableContentEncryption)
    {
        $this->enableContentEncryption = $enableContentEncryption;
    }

    /**
     * @return mixed
     */
    public function getEnableContentEncryption()
    {
        return $this->enableContentEncryption;
    }

    /**
     * @param $enableDvr
     */
    public function setEnableDvr($enableDvr)
    {
        $this->enableDvr = $enableDvr;
    }

    /**
     * @return mixed
     */
    public function getEnableDvr()
    {
        return $this->enableDvr;
    }

    /**
     * @param $enableEmbed
     */
    public function setEnableEmbed($enableEmbed)
    {
        $this->enableEmbed = $enableEmbed;
    }

    /**
     * @return mixed
     */
    public function getEnableEmbed()
    {
        return $this->enableEmbed;
    }

    /**
     * @param Google_MonitorStreamInfo $monitorStream
     */
    public function setMonitorStream(Google_MonitorStreamInfo $monitorStream)
    {
        $this->monitorStream = $monitorStream;
    }

    /**
     * @return mixed
     */
    public function getMonitorStream()
    {
        return $this->monitorStream;
    }

    /**
     * @param $recordFromStart
     */
    public function setRecordFromStart($recordFromStart)
    {
        $this->recordFromStart = $recordFromStart;
    }

    /**
     * @return mixed
     */
    public function getRecordFromStart()
    {
        return $this->recordFromStart;
    }

    /**
     * @param $startWithSlate
     */
    public function setStartWithSlate($startWithSlate)
    {
        $this->startWithSlate = $startWithSlate;
    }

    /**
     * @return mixed
     */
    public function getStartWithSlate()
    {
        return $this->startWithSlate;
    }
}

/**
 * Class Google_LiveBroadcastList
 */
class Google_LiveBroadcastList extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $eventId;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_LiveBroadcast';
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
     * @var string
     */
    protected $__pageInfoType = 'Google_PageInfo';
    /**
     * @var string
     */
    protected $__pageInfoDataType = '';
    /**
     * @var
     */
    public $pageInfo;
    /**
     * @var
     */
    public $prevPageToken;
    /**
     * @var
     */
    public $visitorId;

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
     * @param $eventId
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    /**
     * @return mixed
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_LiveBroadcast) */
        $items)
    {
        $this->assertIsArray($items, 'Google_LiveBroadcast', __METHOD__);
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
     * @param Google_PageInfo $pageInfo
     */
    public function setPageInfo(Google_PageInfo $pageInfo)
    {
        $this->pageInfo = $pageInfo;
    }

    /**
     * @return mixed
     */
    public function getPageInfo()
    {
        return $this->pageInfo;
    }

    /**
     * @param $prevPageToken
     */
    public function setPrevPageToken($prevPageToken)
    {
        $this->prevPageToken = $prevPageToken;
    }

    /**
     * @return mixed
     */
    public function getPrevPageToken()
    {
        return $this->prevPageToken;
    }

    /**
     * @param $visitorId
     */
    public function setVisitorId($visitorId)
    {
        $this->visitorId = $visitorId;
    }

    /**
     * @return mixed
     */
    public function getVisitorId()
    {
        return $this->visitorId;
    }
}

/**
 * Class Google_LiveBroadcastSnippet
 */
class Google_LiveBroadcastSnippet extends Google_Model
{
    /**
     * @var
     */
    public $actualEndTime;
    /**
     * @var
     */
    public $actualStartTime;
    /**
     * @var
     */
    public $channelId;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $publishedAt;
    /**
     * @var
     */
    public $scheduledEndTime;
    /**
     * @var
     */
    public $scheduledStartTime;
    /**
     * @var string
     */
    protected $__thumbnailsType = 'Google_ThumbnailDetails';
    /**
     * @var string
     */
    protected $__thumbnailsDataType = '';
    /**
     * @var
     */
    public $thumbnails;
    /**
     * @var
     */
    public $title;

    /**
     * @param $actualEndTime
     */
    public function setActualEndTime($actualEndTime)
    {
        $this->actualEndTime = $actualEndTime;
    }

    /**
     * @return mixed
     */
    public function getActualEndTime()
    {
        return $this->actualEndTime;
    }

    /**
     * @param $actualStartTime
     */
    public function setActualStartTime($actualStartTime)
    {
        $this->actualStartTime = $actualStartTime;
    }

    /**
     * @return mixed
     */
    public function getActualStartTime()
    {
        return $this->actualStartTime;
    }

    /**
     * @param $channelId
     */
    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;
    }

    /**
     * @return mixed
     */
    public function getChannelId()
    {
        return $this->channelId;
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
     * @param $publishedAt
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;
    }

    /**
     * @return mixed
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * @param $scheduledEndTime
     */
    public function setScheduledEndTime($scheduledEndTime)
    {
        $this->scheduledEndTime = $scheduledEndTime;
    }

    /**
     * @return mixed
     */
    public function getScheduledEndTime()
    {
        return $this->scheduledEndTime;
    }

    /**
     * @param $scheduledStartTime
     */
    public function setScheduledStartTime($scheduledStartTime)
    {
        $this->scheduledStartTime = $scheduledStartTime;
    }

    /**
     * @return mixed
     */
    public function getScheduledStartTime()
    {
        return $this->scheduledStartTime;
    }

    /**
     * @param Google_ThumbnailDetails $thumbnails
     */
    public function setThumbnails(Google_ThumbnailDetails $thumbnails)
    {
        $this->thumbnails = $thumbnails;
    }

    /**
     * @return mixed
     */
    public function getThumbnails()
    {
        return $this->thumbnails;
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
}

/**
 * Class Google_LiveBroadcastStatus
 */
class Google_LiveBroadcastStatus extends Google_Model
{
    /**
     * @var
     */
    public $lifeCycleStatus;
    /**
     * @var
     */
    public $privacyStatus;
    /**
     * @var
     */
    public $recordingStatus;

    /**
     * @param $lifeCycleStatus
     */
    public function setLifeCycleStatus($lifeCycleStatus)
    {
        $this->lifeCycleStatus = $lifeCycleStatus;
    }

    /**
     * @return mixed
     */
    public function getLifeCycleStatus()
    {
        return $this->lifeCycleStatus;
    }

    /**
     * @param $privacyStatus
     */
    public function setPrivacyStatus($privacyStatus)
    {
        $this->privacyStatus = $privacyStatus;
    }

    /**
     * @return mixed
     */
    public function getPrivacyStatus()
    {
        return $this->privacyStatus;
    }

    /**
     * @param $recordingStatus
     */
    public function setRecordingStatus($recordingStatus)
    {
        $this->recordingStatus = $recordingStatus;
    }

    /**
     * @return mixed
     */
    public function getRecordingStatus()
    {
        return $this->recordingStatus;
    }
}

/**
 * Class Google_LiveStream
 */
class Google_LiveStream extends Google_Model
{
    /**
     * @var string
     */
    protected $__cdnType = 'Google_LiveStreamCdn';
    /**
     * @var string
     */
    protected $__cdnDataType = '';
    /**
     * @var
     */
    public $cdn;
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
     * @var string
     */
    protected $__snippetType = 'Google_LiveStreamSnippet';
    /**
     * @var string
     */
    protected $__snippetDataType = '';
    /**
     * @var
     */
    public $snippet;
    /**
     * @var string
     */
    protected $__statusType = 'Google_LiveStreamStatus';
    /**
     * @var string
     */
    protected $__statusDataType = '';
    /**
     * @var
     */
    public $status;

    /**
     * @param Google_LiveStreamCdn $cdn
     */
    public function setCdn(Google_LiveStreamCdn $cdn)
    {
        $this->cdn = $cdn;
    }

    /**
     * @return mixed
     */
    public function getCdn()
    {
        return $this->cdn;
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
     * @param Google_LiveStreamSnippet $snippet
     */
    public function setSnippet(Google_LiveStreamSnippet $snippet)
    {
        $this->snippet = $snippet;
    }

    /**
     * @return mixed
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * @param Google_LiveStreamStatus $status
     */
    public function setStatus(Google_LiveStreamStatus $status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }
}

/**
 * Class Google_LiveStreamCdn
 */
class Google_LiveStreamCdn extends Google_Model
{
    /**
     * @var
     */
    public $format;
    /**
     * @var string
     */
    protected $__ingestionInfoType = 'Google_IngestionInfo';
    /**
     * @var string
     */
    protected $__ingestionInfoDataType = '';
    /**
     * @var
     */
    public $ingestionInfo;
    /**
     * @var
     */
    public $ingestionType;

    /**
     * @param $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

    /**
     * @return mixed
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param Google_IngestionInfo $ingestionInfo
     */
    public function setIngestionInfo(Google_IngestionInfo $ingestionInfo)
    {
        $this->ingestionInfo = $ingestionInfo;
    }

    /**
     * @return mixed
     */
    public function getIngestionInfo()
    {
        return $this->ingestionInfo;
    }

    /**
     * @param $ingestionType
     */
    public function setIngestionType($ingestionType)
    {
        $this->ingestionType = $ingestionType;
    }

    /**
     * @return mixed
     */
    public function getIngestionType()
    {
        return $this->ingestionType;
    }
}

/**
 * Class Google_LiveStreamList
 */
class Google_LiveStreamList extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $eventId;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_LiveStream';
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
     * @var string
     */
    protected $__pageInfoType = 'Google_PageInfo';
    /**
     * @var string
     */
    protected $__pageInfoDataType = '';
    /**
     * @var
     */
    public $pageInfo;
    /**
     * @var
     */
    public $prevPageToken;
    /**
     * @var
     */
    public $visitorId;

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
     * @param $eventId
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    /**
     * @return mixed
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_LiveStream) */
        $items)
    {
        $this->assertIsArray($items, 'Google_LiveStream', __METHOD__);
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
     * @param Google_PageInfo $pageInfo
     */
    public function setPageInfo(Google_PageInfo $pageInfo)
    {
        $this->pageInfo = $pageInfo;
    }

    /**
     * @return mixed
     */
    public function getPageInfo()
    {
        return $this->pageInfo;
    }

    /**
     * @param $prevPageToken
     */
    public function setPrevPageToken($prevPageToken)
    {
        $this->prevPageToken = $prevPageToken;
    }

    /**
     * @return mixed
     */
    public function getPrevPageToken()
    {
        return $this->prevPageToken;
    }

    /**
     * @param $visitorId
     */
    public function setVisitorId($visitorId)
    {
        $this->visitorId = $visitorId;
    }

    /**
     * @return mixed
     */
    public function getVisitorId()
    {
        return $this->visitorId;
    }
}

/**
 * Class Google_LiveStreamSnippet
 */
class Google_LiveStreamSnippet extends Google_Model
{
    /**
     * @var
     */
    public $channelId;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $publishedAt;
    /**
     * @var
     */
    public $title;

    /**
     * @param $channelId
     */
    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;
    }

    /**
     * @return mixed
     */
    public function getChannelId()
    {
        return $this->channelId;
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
     * @param $publishedAt
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;
    }

    /**
     * @return mixed
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
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
}

/**
 * Class Google_LiveStreamStatus
 */
class Google_LiveStreamStatus extends Google_Model
{
    /**
     * @var
     */
    public $streamStatus;

    /**
     * @param $streamStatus
     */
    public function setStreamStatus($streamStatus)
    {
        $this->streamStatus = $streamStatus;
    }

    /**
     * @return mixed
     */
    public function getStreamStatus()
    {
        return $this->streamStatus;
    }
}

/**
 * Class Google_LocalizedProperty
 */
class Google_LocalizedProperty extends Google_Model
{
    /**
     * @var
     */
    public $default;
    /**
     * @var string
     */
    protected $__localizedType = 'Google_LocalizedString';
    /**
     * @var string
     */
    protected $__localizedDataType = 'array';
    /**
     * @var
     */
    public $localized;

    /**
     * @param $default
     */
    public function setDefault($default)
    {
        $this->default = $default;
    }

    /**
     * @return mixed
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param $localized
     * @throws Google_Exception
     */
    public function setLocalized(/* array(Google_LocalizedString) */
        $localized)
    {
        $this->assertIsArray($localized, 'Google_LocalizedString', __METHOD__);
        $this->localized = $localized;
    }

    /**
     * @return mixed
     */
    public function getLocalized()
    {
        return $this->localized;
    }
}

/**
 * Class Google_LocalizedString
 */
class Google_LocalizedString extends Google_Model
{
    /**
     * @var
     */
    public $language;
    /**
     * @var
     */
    public $value;

    /**
     * @param $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
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
 * Class Google_MonitorStreamInfo
 */
class Google_MonitorStreamInfo extends Google_Model
{
    /**
     * @var
     */
    public $broadcastStreamDelayMs;
    /**
     * @var
     */
    public $embedHtml;
    /**
     * @var
     */
    public $enableMonitorStream;

    /**
     * @param $broadcastStreamDelayMs
     */
    public function setBroadcastStreamDelayMs($broadcastStreamDelayMs)
    {
        $this->broadcastStreamDelayMs = $broadcastStreamDelayMs;
    }

    /**
     * @return mixed
     */
    public function getBroadcastStreamDelayMs()
    {
        return $this->broadcastStreamDelayMs;
    }

    /**
     * @param $embedHtml
     */
    public function setEmbedHtml($embedHtml)
    {
        $this->embedHtml = $embedHtml;
    }

    /**
     * @return mixed
     */
    public function getEmbedHtml()
    {
        return $this->embedHtml;
    }

    /**
     * @param $enableMonitorStream
     */
    public function setEnableMonitorStream($enableMonitorStream)
    {
        $this->enableMonitorStream = $enableMonitorStream;
    }

    /**
     * @return mixed
     */
    public function getEnableMonitorStream()
    {
        return $this->enableMonitorStream;
    }
}

/**
 * Class Google_PageInfo
 */
class Google_PageInfo extends Google_Model
{
    /**
     * @var
     */
    public $resultsPerPage;
    /**
     * @var
     */
    public $totalResults;

    /**
     * @param $resultsPerPage
     */
    public function setResultsPerPage($resultsPerPage)
    {
        $this->resultsPerPage = $resultsPerPage;
    }

    /**
     * @return mixed
     */
    public function getResultsPerPage()
    {
        return $this->resultsPerPage;
    }

    /**
     * @param $totalResults
     */
    public function setTotalResults($totalResults)
    {
        $this->totalResults = $totalResults;
    }

    /**
     * @return mixed
     */
    public function getTotalResults()
    {
        return $this->totalResults;
    }
}

/**
 * Class Google_Playlist
 */
class Google_Playlist extends Google_Model
{
    /**
     * @var string
     */
    protected $__contentDetailsType = 'Google_PlaylistContentDetails';
    /**
     * @var string
     */
    protected $__contentDetailsDataType = '';
    /**
     * @var
     */
    public $contentDetails;
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
     * @var string
     */
    protected $__playerType = 'Google_PlaylistPlayer';
    /**
     * @var string
     */
    protected $__playerDataType = '';
    /**
     * @var
     */
    public $player;
    /**
     * @var string
     */
    protected $__snippetType = 'Google_PlaylistSnippet';
    /**
     * @var string
     */
    protected $__snippetDataType = '';
    /**
     * @var
     */
    public $snippet;
    /**
     * @var string
     */
    protected $__statusType = 'Google_PlaylistStatus';
    /**
     * @var string
     */
    protected $__statusDataType = '';
    /**
     * @var
     */
    public $status;

    /**
     * @param Google_PlaylistContentDetails $contentDetails
     */
    public function setContentDetails(Google_PlaylistContentDetails $contentDetails)
    {
        $this->contentDetails = $contentDetails;
    }

    /**
     * @return mixed
     */
    public function getContentDetails()
    {
        return $this->contentDetails;
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
     * @param Google_PlaylistPlayer $player
     */
    public function setPlayer(Google_PlaylistPlayer $player)
    {
        $this->player = $player;
    }

    /**
     * @return mixed
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * @param Google_PlaylistSnippet $snippet
     */
    public function setSnippet(Google_PlaylistSnippet $snippet)
    {
        $this->snippet = $snippet;
    }

    /**
     * @return mixed
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * @param Google_PlaylistStatus $status
     */
    public function setStatus(Google_PlaylistStatus $status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }
}

/**
 * Class Google_PlaylistContentDetails
 */
class Google_PlaylistContentDetails extends Google_Model
{
    /**
     * @var
     */
    public $itemCount;

    /**
     * @param $itemCount
     */
    public function setItemCount($itemCount)
    {
        $this->itemCount = $itemCount;
    }

    /**
     * @return mixed
     */
    public function getItemCount()
    {
        return $this->itemCount;
    }
}

/**
 * Class Google_PlaylistItem
 */
class Google_PlaylistItem extends Google_Model
{
    /**
     * @var string
     */
    protected $__contentDetailsType = 'Google_PlaylistItemContentDetails';
    /**
     * @var string
     */
    protected $__contentDetailsDataType = '';
    /**
     * @var
     */
    public $contentDetails;
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
     * @var string
     */
    protected $__snippetType = 'Google_PlaylistItemSnippet';
    /**
     * @var string
     */
    protected $__snippetDataType = '';
    /**
     * @var
     */
    public $snippet;
    /**
     * @var string
     */
    protected $__statusType = 'Google_PlaylistItemStatus';
    /**
     * @var string
     */
    protected $__statusDataType = '';
    /**
     * @var
     */
    public $status;

    /**
     * @param Google_PlaylistItemContentDetails $contentDetails
     */
    public function setContentDetails(Google_PlaylistItemContentDetails $contentDetails)
    {
        $this->contentDetails = $contentDetails;
    }

    /**
     * @return mixed
     */
    public function getContentDetails()
    {
        return $this->contentDetails;
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
     * @param Google_PlaylistItemSnippet $snippet
     */
    public function setSnippet(Google_PlaylistItemSnippet $snippet)
    {
        $this->snippet = $snippet;
    }

    /**
     * @return mixed
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * @param Google_PlaylistItemStatus $status
     */
    public function setStatus(Google_PlaylistItemStatus $status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }
}

/**
 * Class Google_PlaylistItemContentDetails
 */
class Google_PlaylistItemContentDetails extends Google_Model
{
    /**
     * @var
     */
    public $endAtMs;
    /**
     * @var
     */
    public $note;
    /**
     * @var
     */
    public $startAtMs;
    /**
     * @var
     */
    public $videoId;

    /**
     * @param $endAtMs
     */
    public function setEndAtMs($endAtMs)
    {
        $this->endAtMs = $endAtMs;
    }

    /**
     * @return mixed
     */
    public function getEndAtMs()
    {
        return $this->endAtMs;
    }

    /**
     * @param $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param $startAtMs
     */
    public function setStartAtMs($startAtMs)
    {
        $this->startAtMs = $startAtMs;
    }

    /**
     * @return mixed
     */
    public function getStartAtMs()
    {
        return $this->startAtMs;
    }

    /**
     * @param $videoId
     */
    public function setVideoId($videoId)
    {
        $this->videoId = $videoId;
    }

    /**
     * @return mixed
     */
    public function getVideoId()
    {
        return $this->videoId;
    }
}

/**
 * Class Google_PlaylistItemListResponse
 */
class Google_PlaylistItemListResponse extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $eventId;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_PlaylistItem';
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
     * @var string
     */
    protected $__pageInfoType = 'Google_PageInfo';
    /**
     * @var string
     */
    protected $__pageInfoDataType = '';
    /**
     * @var
     */
    public $pageInfo;
    /**
     * @var
     */
    public $prevPageToken;
    /**
     * @var
     */
    public $visitorId;

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
     * @param $eventId
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    /**
     * @return mixed
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_PlaylistItem) */
        $items)
    {
        $this->assertIsArray($items, 'Google_PlaylistItem', __METHOD__);
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
     * @param Google_PageInfo $pageInfo
     */
    public function setPageInfo(Google_PageInfo $pageInfo)
    {
        $this->pageInfo = $pageInfo;
    }

    /**
     * @return mixed
     */
    public function getPageInfo()
    {
        return $this->pageInfo;
    }

    /**
     * @param $prevPageToken
     */
    public function setPrevPageToken($prevPageToken)
    {
        $this->prevPageToken = $prevPageToken;
    }

    /**
     * @return mixed
     */
    public function getPrevPageToken()
    {
        return $this->prevPageToken;
    }

    /**
     * @param $visitorId
     */
    public function setVisitorId($visitorId)
    {
        $this->visitorId = $visitorId;
    }

    /**
     * @return mixed
     */
    public function getVisitorId()
    {
        return $this->visitorId;
    }
}

/**
 * Class Google_PlaylistItemSnippet
 */
class Google_PlaylistItemSnippet extends Google_Model
{
    /**
     * @var
     */
    public $channelId;
    /**
     * @var
     */
    public $channelTitle;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $playlistId;
    /**
     * @var
     */
    public $position;
    /**
     * @var
     */
    public $publishedAt;
    /**
     * @var string
     */
    protected $__resourceIdType = 'Google_ResourceId';
    /**
     * @var string
     */
    protected $__resourceIdDataType = '';
    /**
     * @var
     */
    public $resourceId;
    /**
     * @var string
     */
    protected $__thumbnailsType = 'Google_ThumbnailDetails';
    /**
     * @var string
     */
    protected $__thumbnailsDataType = '';
    /**
     * @var
     */
    public $thumbnails;
    /**
     * @var
     */
    public $title;

    /**
     * @param $channelId
     */
    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;
    }

    /**
     * @return mixed
     */
    public function getChannelId()
    {
        return $this->channelId;
    }

    /**
     * @param $channelTitle
     */
    public function setChannelTitle($channelTitle)
    {
        $this->channelTitle = $channelTitle;
    }

    /**
     * @return mixed
     */
    public function getChannelTitle()
    {
        return $this->channelTitle;
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
     * @param $playlistId
     */
    public function setPlaylistId($playlistId)
    {
        $this->playlistId = $playlistId;
    }

    /**
     * @return mixed
     */
    public function getPlaylistId()
    {
        return $this->playlistId;
    }

    /**
     * @param $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param $publishedAt
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;
    }

    /**
     * @return mixed
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * @param Google_ResourceId $resourceId
     */
    public function setResourceId(Google_ResourceId $resourceId)
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
     * @param Google_ThumbnailDetails $thumbnails
     */
    public function setThumbnails(Google_ThumbnailDetails $thumbnails)
    {
        $this->thumbnails = $thumbnails;
    }

    /**
     * @return mixed
     */
    public function getThumbnails()
    {
        return $this->thumbnails;
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
}

/**
 * Class Google_PlaylistItemStatus
 */
class Google_PlaylistItemStatus extends Google_Model
{
    /**
     * @var
     */
    public $privacyStatus;

    /**
     * @param $privacyStatus
     */
    public function setPrivacyStatus($privacyStatus)
    {
        $this->privacyStatus = $privacyStatus;
    }

    /**
     * @return mixed
     */
    public function getPrivacyStatus()
    {
        return $this->privacyStatus;
    }
}

/**
 * Class Google_PlaylistListResponse
 */
class Google_PlaylistListResponse extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $eventId;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Playlist';
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
     * @var string
     */
    protected $__pageInfoType = 'Google_PageInfo';
    /**
     * @var string
     */
    protected $__pageInfoDataType = '';
    /**
     * @var
     */
    public $pageInfo;
    /**
     * @var
     */
    public $prevPageToken;
    /**
     * @var
     */
    public $visitorId;

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
     * @param $eventId
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    /**
     * @return mixed
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Playlist) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Playlist', __METHOD__);
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
     * @param Google_PageInfo $pageInfo
     */
    public function setPageInfo(Google_PageInfo $pageInfo)
    {
        $this->pageInfo = $pageInfo;
    }

    /**
     * @return mixed
     */
    public function getPageInfo()
    {
        return $this->pageInfo;
    }

    /**
     * @param $prevPageToken
     */
    public function setPrevPageToken($prevPageToken)
    {
        $this->prevPageToken = $prevPageToken;
    }

    /**
     * @return mixed
     */
    public function getPrevPageToken()
    {
        return $this->prevPageToken;
    }

    /**
     * @param $visitorId
     */
    public function setVisitorId($visitorId)
    {
        $this->visitorId = $visitorId;
    }

    /**
     * @return mixed
     */
    public function getVisitorId()
    {
        return $this->visitorId;
    }
}

/**
 * Class Google_PlaylistPlayer
 */
class Google_PlaylistPlayer extends Google_Model
{
    /**
     * @var
     */
    public $embedHtml;

    /**
     * @param $embedHtml
     */
    public function setEmbedHtml($embedHtml)
    {
        $this->embedHtml = $embedHtml;
    }

    /**
     * @return mixed
     */
    public function getEmbedHtml()
    {
        return $this->embedHtml;
    }
}

/**
 * Class Google_PlaylistSnippet
 */
class Google_PlaylistSnippet extends Google_Model
{
    /**
     * @var
     */
    public $channelId;
    /**
     * @var
     */
    public $channelTitle;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $publishedAt;
    /**
     * @var
     */
    public $tags;
    /**
     * @var string
     */
    protected $__thumbnailsType = 'Google_ThumbnailDetails';
    /**
     * @var string
     */
    protected $__thumbnailsDataType = '';
    /**
     * @var
     */
    public $thumbnails;
    /**
     * @var
     */
    public $title;

    /**
     * @param $channelId
     */
    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;
    }

    /**
     * @return mixed
     */
    public function getChannelId()
    {
        return $this->channelId;
    }

    /**
     * @param $channelTitle
     */
    public function setChannelTitle($channelTitle)
    {
        $this->channelTitle = $channelTitle;
    }

    /**
     * @return mixed
     */
    public function getChannelTitle()
    {
        return $this->channelTitle;
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
     * @param $publishedAt
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;
    }

    /**
     * @return mixed
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
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
     * @param Google_ThumbnailDetails $thumbnails
     */
    public function setThumbnails(Google_ThumbnailDetails $thumbnails)
    {
        $this->thumbnails = $thumbnails;
    }

    /**
     * @return mixed
     */
    public function getThumbnails()
    {
        return $this->thumbnails;
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
}

/**
 * Class Google_PlaylistStatus
 */
class Google_PlaylistStatus extends Google_Model
{
    /**
     * @var
     */
    public $privacyStatus;

    /**
     * @param $privacyStatus
     */
    public function setPrivacyStatus($privacyStatus)
    {
        $this->privacyStatus = $privacyStatus;
    }

    /**
     * @return mixed
     */
    public function getPrivacyStatus()
    {
        return $this->privacyStatus;
    }
}

/**
 * Class Google_PromotedItemId
 */
class Google_PromotedItemId extends Google_Model
{
    /**
     * @var
     */
    public $type;
    /**
     * @var
     */
    public $videoId;

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
     * @param $videoId
     */
    public function setVideoId($videoId)
    {
        $this->videoId = $videoId;
    }

    /**
     * @return mixed
     */
    public function getVideoId()
    {
        return $this->videoId;
    }
}

/**
 * Class Google_PropertyValue
 */
class Google_PropertyValue extends Google_Model
{
    /**
     * @var
     */
    public $property;
    /**
     * @var
     */
    public $value;

    /**
     * @param $property
     */
    public function setProperty($property)
    {
        $this->property = $property;
    }

    /**
     * @return mixed
     */
    public function getProperty()
    {
        return $this->property;
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
 * Class Google_ResourceId
 */
class Google_ResourceId extends Google_Model
{
    /**
     * @var
     */
    public $channelId;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $playlistId;
    /**
     * @var
     */
    public $videoId;

    /**
     * @param $channelId
     */
    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;
    }

    /**
     * @return mixed
     */
    public function getChannelId()
    {
        return $this->channelId;
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
     * @param $playlistId
     */
    public function setPlaylistId($playlistId)
    {
        $this->playlistId = $playlistId;
    }

    /**
     * @return mixed
     */
    public function getPlaylistId()
    {
        return $this->playlistId;
    }

    /**
     * @param $videoId
     */
    public function setVideoId($videoId)
    {
        $this->videoId = $videoId;
    }

    /**
     * @return mixed
     */
    public function getVideoId()
    {
        return $this->videoId;
    }
}

/**
 * Class Google_SearchListResponse
 */
class Google_SearchListResponse extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $eventId;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_SearchResult';
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
     * @var string
     */
    protected $__pageInfoType = 'Google_PageInfo';
    /**
     * @var string
     */
    protected $__pageInfoDataType = '';
    /**
     * @var
     */
    public $pageInfo;
    /**
     * @var
     */
    public $prevPageToken;
    /**
     * @var
     */
    public $visitorId;

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
     * @param $eventId
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    /**
     * @return mixed
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_SearchResult) */
        $items)
    {
        $this->assertIsArray($items, 'Google_SearchResult', __METHOD__);
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
     * @param Google_PageInfo $pageInfo
     */
    public function setPageInfo(Google_PageInfo $pageInfo)
    {
        $this->pageInfo = $pageInfo;
    }

    /**
     * @return mixed
     */
    public function getPageInfo()
    {
        return $this->pageInfo;
    }

    /**
     * @param $prevPageToken
     */
    public function setPrevPageToken($prevPageToken)
    {
        $this->prevPageToken = $prevPageToken;
    }

    /**
     * @return mixed
     */
    public function getPrevPageToken()
    {
        return $this->prevPageToken;
    }

    /**
     * @param $visitorId
     */
    public function setVisitorId($visitorId)
    {
        $this->visitorId = $visitorId;
    }

    /**
     * @return mixed
     */
    public function getVisitorId()
    {
        return $this->visitorId;
    }
}

/**
 * Class Google_SearchResult
 */
class Google_SearchResult extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__idType = 'Google_ResourceId';
    /**
     * @var string
     */
    protected $__idDataType = '';
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
    protected $__snippetType = 'Google_SearchResultSnippet';
    /**
     * @var string
     */
    protected $__snippetDataType = '';
    /**
     * @var
     */
    public $snippet;

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
     * @param Google_ResourceId $id
     */
    public function setId(Google_ResourceId $id)
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
     * @param Google_SearchResultSnippet $snippet
     */
    public function setSnippet(Google_SearchResultSnippet $snippet)
    {
        $this->snippet = $snippet;
    }

    /**
     * @return mixed
     */
    public function getSnippet()
    {
        return $this->snippet;
    }
}

/**
 * Class Google_SearchResultSnippet
 */
class Google_SearchResultSnippet extends Google_Model
{
    /**
     * @var
     */
    public $channelId;
    /**
     * @var
     */
    public $channelTitle;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $publishedAt;
    /**
     * @var string
     */
    protected $__thumbnailsType = 'Google_ThumbnailDetails';
    /**
     * @var string
     */
    protected $__thumbnailsDataType = '';
    /**
     * @var
     */
    public $thumbnails;
    /**
     * @var
     */
    public $title;

    /**
     * @param $channelId
     */
    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;
    }

    /**
     * @return mixed
     */
    public function getChannelId()
    {
        return $this->channelId;
    }

    /**
     * @param $channelTitle
     */
    public function setChannelTitle($channelTitle)
    {
        $this->channelTitle = $channelTitle;
    }

    /**
     * @return mixed
     */
    public function getChannelTitle()
    {
        return $this->channelTitle;
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
     * @param $publishedAt
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;
    }

    /**
     * @return mixed
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * @param Google_ThumbnailDetails $thumbnails
     */
    public function setThumbnails(Google_ThumbnailDetails $thumbnails)
    {
        $this->thumbnails = $thumbnails;
    }

    /**
     * @return mixed
     */
    public function getThumbnails()
    {
        return $this->thumbnails;
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
}

/**
 * Class Google_Subscription
 */
class Google_Subscription extends Google_Model
{
    /**
     * @var string
     */
    protected $__contentDetailsType = 'Google_SubscriptionContentDetails';
    /**
     * @var string
     */
    protected $__contentDetailsDataType = '';
    /**
     * @var
     */
    public $contentDetails;
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
     * @var string
     */
    protected $__snippetType = 'Google_SubscriptionSnippet';
    /**
     * @var string
     */
    protected $__snippetDataType = '';
    /**
     * @var
     */
    public $snippet;
    /**
     * @var string
     */
    protected $__subscriberSnippetType = 'Google_SubscriptionSubscriberSnippet';
    /**
     * @var string
     */
    protected $__subscriberSnippetDataType = '';
    /**
     * @var
     */
    public $subscriberSnippet;

    /**
     * @param Google_SubscriptionContentDetails $contentDetails
     */
    public function setContentDetails(Google_SubscriptionContentDetails $contentDetails)
    {
        $this->contentDetails = $contentDetails;
    }

    /**
     * @return mixed
     */
    public function getContentDetails()
    {
        return $this->contentDetails;
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
     * @param Google_SubscriptionSnippet $snippet
     */
    public function setSnippet(Google_SubscriptionSnippet $snippet)
    {
        $this->snippet = $snippet;
    }

    /**
     * @return mixed
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * @param Google_SubscriptionSubscriberSnippet $subscriberSnippet
     */
    public function setSubscriberSnippet(Google_SubscriptionSubscriberSnippet $subscriberSnippet)
    {
        $this->subscriberSnippet = $subscriberSnippet;
    }

    /**
     * @return mixed
     */
    public function getSubscriberSnippet()
    {
        return $this->subscriberSnippet;
    }
}

/**
 * Class Google_SubscriptionContentDetails
 */
class Google_SubscriptionContentDetails extends Google_Model
{
    /**
     * @var
     */
    public $activityType;
    /**
     * @var
     */
    public $newItemCount;
    /**
     * @var
     */
    public $totalItemCount;

    /**
     * @param $activityType
     */
    public function setActivityType($activityType)
    {
        $this->activityType = $activityType;
    }

    /**
     * @return mixed
     */
    public function getActivityType()
    {
        return $this->activityType;
    }

    /**
     * @param $newItemCount
     */
    public function setNewItemCount($newItemCount)
    {
        $this->newItemCount = $newItemCount;
    }

    /**
     * @return mixed
     */
    public function getNewItemCount()
    {
        return $this->newItemCount;
    }

    /**
     * @param $totalItemCount
     */
    public function setTotalItemCount($totalItemCount)
    {
        $this->totalItemCount = $totalItemCount;
    }

    /**
     * @return mixed
     */
    public function getTotalItemCount()
    {
        return $this->totalItemCount;
    }
}

/**
 * Class Google_SubscriptionListResponse
 */
class Google_SubscriptionListResponse extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $eventId;
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
     * @var
     */
    public $nextPageToken;
    /**
     * @var string
     */
    protected $__pageInfoType = 'Google_PageInfo';
    /**
     * @var string
     */
    protected $__pageInfoDataType = '';
    /**
     * @var
     */
    public $pageInfo;
    /**
     * @var
     */
    public $prevPageToken;
    /**
     * @var
     */
    public $visitorId;

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
     * @param $eventId
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    /**
     * @return mixed
     */
    public function getEventId()
    {
        return $this->eventId;
    }

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
     * @param Google_PageInfo $pageInfo
     */
    public function setPageInfo(Google_PageInfo $pageInfo)
    {
        $this->pageInfo = $pageInfo;
    }

    /**
     * @return mixed
     */
    public function getPageInfo()
    {
        return $this->pageInfo;
    }

    /**
     * @param $prevPageToken
     */
    public function setPrevPageToken($prevPageToken)
    {
        $this->prevPageToken = $prevPageToken;
    }

    public function getPrevPageToken()
    {
        return $this->prevPageToken;
    }

    /**
     * @param $visitorId
     */
    public function setVisitorId($visitorId)
    {
        $this->visitorId = $visitorId;
    }

    /**
     * @return mixed
     */
    public function getVisitorId()
    {
        return $this->visitorId;
    }
}

/**
 * Class Google_SubscriptionSnippet
 */
class Google_SubscriptionSnippet extends Google_Model
{
    /**
     * @var
     */
    public $channelId;
    /**
     * @var
     */
    public $channelTitle;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $publishedAt;
    /**
     * @var string
     */
    protected $__resourceIdType = 'Google_ResourceId';
    /**
     * @var string
     */
    protected $__resourceIdDataType = '';
    /**
     * @var
     */
    public $resourceId;
    /**
     * @var string
     */
    protected $__thumbnailsType = 'Google_ThumbnailDetails';
    /**
     * @var string
     */
    protected $__thumbnailsDataType = '';
    /**
     * @var
     */
    public $thumbnails;
    /**
     * @var
     */
    public $title;

    /**
     * @param $channelId
     */
    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;
    }

    /**
     * @return mixed
     */
    public function getChannelId()
    {
        return $this->channelId;
    }

    /**
     * @param $channelTitle
     */
    public function setChannelTitle($channelTitle)
    {
        $this->channelTitle = $channelTitle;
    }

    /**
     * @return mixed
     */
    public function getChannelTitle()
    {
        return $this->channelTitle;
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
     * @param $publishedAt
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;
    }

    /**
     * @return mixed
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * @param Google_ResourceId $resourceId
     */
    public function setResourceId(Google_ResourceId $resourceId)
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
     * @param Google_ThumbnailDetails $thumbnails
     */
    public function setThumbnails(Google_ThumbnailDetails $thumbnails)
    {
        $this->thumbnails = $thumbnails;
    }

    /**
     * @return mixed
     */
    public function getThumbnails()
    {
        return $this->thumbnails;
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
}

/**
 * Class Google_SubscriptionSubscriberSnippet
 */
class Google_SubscriptionSubscriberSnippet extends Google_Model
{
    /**
     * @var
     */
    public $channelId;
    /**
     * @var
     */
    public $description;
    /**
     * @var string
     */
    protected $__thumbnailsType = 'Google_ThumbnailDetails';
    /**
     * @var string
     */
    protected $__thumbnailsDataType = '';
    /**
     * @var
     */
    public $thumbnails;
    /**
     * @var
     */
    public $title;

    /**
     * @param $channelId
     */
    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;
    }

    /**
     * @return mixed
     */
    public function getChannelId()
    {
        return $this->channelId;
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
     * @param Google_ThumbnailDetails $thumbnails
     */
    public function setThumbnails(Google_ThumbnailDetails $thumbnails)
    {
        $this->thumbnails = $thumbnails;
    }

    /**
     * @return mixed
     */
    public function getThumbnails()
    {
        return $this->thumbnails;
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
}

/**
 * Class Google_Thumbnail
 */
class Google_Thumbnail extends Google_Model
{
    /**
     * @var
     */
    public $height;
    /**
     * @var
     */
    public $url;
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
 * Class Google_ThumbnailDetails
 */
class Google_ThumbnailDetails extends Google_Model
{
    /**
     * @var string
     */
    protected $__defaultType = 'Google_Thumbnail';
    /**
     * @var string
     */
    protected $__defaultDataType = '';
    /**
     * @var
     */
    public $default;
    /**
     * @var string
     */
    protected $__highType = 'Google_Thumbnail';
    /**
     * @var string
     */
    protected $__highDataType = '';
    /**
     * @var
     */
    public $high;
    /**
     * @var string
     */
    protected $__maxresType = 'Google_Thumbnail';
    /**
     * @var string
     */
    protected $__maxresDataType = '';
    /**
     * @var
     */
    public $maxres;
    /**
     * @var string
     */
    protected $__mediumType = 'Google_Thumbnail';
    /**
     * @var string
     */
    protected $__mediumDataType = '';
    /**
     * @var
     */
    public $medium;
    /**
     * @var string
     */
    protected $__standardType = 'Google_Thumbnail';
    /**
     * @var string
     */
    protected $__standardDataType = '';
    /**
     * @var
     */
    public $standard;

    /**
     * @param Google_Thumbnail $default
     */
    public function setDefault(Google_Thumbnail $default)
    {
        $this->default = $default;
    }

    /**
     * @return mixed
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param Google_Thumbnail $high
     */
    public function setHigh(Google_Thumbnail $high)
    {
        $this->high = $high;
    }

    /**
     * @return mixed
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * @param Google_Thumbnail $maxres
     */
    public function setMaxres(Google_Thumbnail $maxres)
    {
        $this->maxres = $maxres;
    }

    /**
     * @return mixed
     */
    public function getMaxres()
    {
        return $this->maxres;
    }

    /**
     * @param Google_Thumbnail $medium
     */
    public function setMedium(Google_Thumbnail $medium)
    {
        $this->medium = $medium;
    }

    /**
     * @return mixed
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * @param Google_Thumbnail $standard
     */
    public function setStandard(Google_Thumbnail $standard)
    {
        $this->standard = $standard;
    }

    /**
     * @return mixed
     */
    public function getStandard()
    {
        return $this->standard;
    }
}

/**
 * Class Google_ThumbnailListResponse
 */
class Google_ThumbnailListResponse extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_ThumbnailDetails';
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
    public $visitorId;

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
    public function setItems(/* array(Google_ThumbnailDetails) */
        $items)
    {
        $this->assertIsArray($items, 'Google_ThumbnailDetails', __METHOD__);
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
     * @param $visitorId
     */
    public function setVisitorId($visitorId)
    {
        $this->visitorId = $visitorId;
    }

    /**
     * @return mixed
     */
    public function getVisitorId()
    {
        return $this->visitorId;
    }
}

/**
 * Class Google_Video
 */
class Google_Video extends Google_Model
{
    /**
     * @var string
     */
    protected $__ageGatingType = 'Google_VideoAgeGating';
    /**
     * @var string
     */
    protected $__ageGatingDataType = '';
    /**
     * @var
     */
    public $ageGating;
    /**
     * @var string
     */
    protected $__contentDetailsType = 'Google_VideoContentDetails';
    /**
     * @var string
     */
    protected $__contentDetailsDataType = '';
    /**
     * @var
     */
    public $contentDetails;
    /**
     * @var string
     */
    protected $__conversionPingsType = 'Google_VideoConversionPings';
    /**
     * @var string
     */
    protected $__conversionPingsDataType = '';
    /**
     * @var
     */
    public $conversionPings;
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__fileDetailsType = 'Google_VideoFileDetails';
    /**
     * @var string
     */
    protected $__fileDetailsDataType = '';
    /**
     * @var
     */
    public $fileDetails;
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
    protected $__monetizationDetailsType = 'Google_VideoMonetizationDetails';
    /**
     * @var string
     */
    protected $__monetizationDetailsDataType = '';
    /**
     * @var
     */
    public $monetizationDetails;
    /**
     * @var string
     */
    protected $__playerType = 'Google_VideoPlayer';
    /**
     * @var string
     */
    protected $__playerDataType = '';
    /**
     * @var
     */
    public $player;
    /**
     * @var string
     */
    protected $__processingDetailsType = 'Google_VideoProcessingDetails';
    /**
     * @var string
     */
    protected $__processingDetailsDataType = '';
    /**
     * @var
     */
    public $processingDetails;
    /**
     * @var string
     */
    protected $__projectDetailsType = 'Google_VideoProjectDetails';
    /**
     * @var string
     */
    protected $__projectDetailsDataType = '';
    /**
     * @var
     */
    public $projectDetails;
    /**
     * @var string
     */
    protected $__recordingDetailsType = 'Google_VideoRecordingDetails';
    /**
     * @var string
     */
    protected $__recordingDetailsDataType = '';
    /**
     * @var
     */
    public $recordingDetails;
    /**
     * @var string
     */
    protected $__snippetType = 'Google_VideoSnippet';
    /**
     * @var string
     */
    protected $__snippetDataType = '';
    /**
     * @var
     */
    public $snippet;
    /**
     * @var string
     */
    protected $__statisticsType = 'Google_VideoStatistics';
    /**
     * @var string
     */
    protected $__statisticsDataType = '';
    /**
     * @var
     */
    public $statistics;
    /**
     * @var string
     */
    protected $__statusType = 'Google_VideoStatus';
    /**
     * @var string
     */
    protected $__statusDataType = '';
    /**
     * @var
     */
    public $status;
    /**
     * @var string
     */
    protected $__suggestionsType = 'Google_VideoSuggestions';
    /**
     * @var string
     */
    protected $__suggestionsDataType = '';
    /**
     * @var
     */
    public $suggestions;
    /**
     * @var string
     */
    protected $__topicDetailsType = 'Google_VideoTopicDetails';
    /**
     * @var string
     */
    protected $__topicDetailsDataType = '';
    /**
     * @var
     */
    public $topicDetails;

    /**
     * @param Google_VideoAgeGating $ageGating
     */
    public function setAgeGating(Google_VideoAgeGating $ageGating)
    {
        $this->ageGating = $ageGating;
    }

    /**
     * @return mixed
     */
    public function getAgeGating()
    {
        return $this->ageGating;
    }

    /**
     * @param Google_VideoContentDetails $contentDetails
     */
    public function setContentDetails(Google_VideoContentDetails $contentDetails)
    {
        $this->contentDetails = $contentDetails;
    }

    /**
     * @return mixed
     */
    public function getContentDetails()
    {
        return $this->contentDetails;
    }

    /**
     * @param Google_VideoConversionPings $conversionPings
     */
    public function setConversionPings(Google_VideoConversionPings $conversionPings)
    {
        $this->conversionPings = $conversionPings;
    }

    /**
     * @return mixed
     */
    public function getConversionPings()
    {
        return $this->conversionPings;
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
     * @param Google_VideoFileDetails $fileDetails
     */
    public function setFileDetails(Google_VideoFileDetails $fileDetails)
    {
        $this->fileDetails = $fileDetails;
    }

    /**
     * @return mixed
     */
    public function getFileDetails()
    {
        return $this->fileDetails;
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
     * @param Google_VideoMonetizationDetails $monetizationDetails
     */
    public function setMonetizationDetails(Google_VideoMonetizationDetails $monetizationDetails)
    {
        $this->monetizationDetails = $monetizationDetails;
    }

    /**
     * @return mixed
     */
    public function getMonetizationDetails()
    {
        return $this->monetizationDetails;
    }

    /**
     * @param Google_VideoPlayer $player
     */
    public function setPlayer(Google_VideoPlayer $player)
    {
        $this->player = $player;
    }

    /**
     * @return mixed
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * @param Google_VideoProcessingDetails $processingDetails
     */
    public function setProcessingDetails(Google_VideoProcessingDetails $processingDetails)
    {
        $this->processingDetails = $processingDetails;
    }

    /**
     * @return mixed
     */
    public function getProcessingDetails()
    {
        return $this->processingDetails;
    }

    /**
     * @param Google_VideoProjectDetails $projectDetails
     */
    public function setProjectDetails(Google_VideoProjectDetails $projectDetails)
    {
        $this->projectDetails = $projectDetails;
    }

    /**
     * @return mixed
     */
    public function getProjectDetails()
    {
        return $this->projectDetails;
    }

    /**
     * @param Google_VideoRecordingDetails $recordingDetails
     */
    public function setRecordingDetails(Google_VideoRecordingDetails $recordingDetails)
    {
        $this->recordingDetails = $recordingDetails;
    }

    /**
     * @return mixed
     */
    public function getRecordingDetails()
    {
        return $this->recordingDetails;
    }

    /**
     * @param Google_VideoSnippet $snippet
     */
    public function setSnippet(Google_VideoSnippet $snippet)
    {
        $this->snippet = $snippet;
    }

    /**
     * @return mixed
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * @param Google_VideoStatistics $statistics
     */
    public function setStatistics(Google_VideoStatistics $statistics)
    {
        $this->statistics = $statistics;
    }

    /**
     * @return mixed
     */
    public function getStatistics()
    {
        return $this->statistics;
    }

    /**
     * @param Google_VideoStatus $status
     */
    public function setStatus(Google_VideoStatus $status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param Google_VideoSuggestions $suggestions
     */
    public function setSuggestions(Google_VideoSuggestions $suggestions)
    {
        $this->suggestions = $suggestions;
    }

    /**
     * @return mixed
     */
    public function getSuggestions()
    {
        return $this->suggestions;
    }

    /**
     * @param Google_VideoTopicDetails $topicDetails
     */
    public function setTopicDetails(Google_VideoTopicDetails $topicDetails)
    {
        $this->topicDetails = $topicDetails;
    }

    /**
     * @return mixed
     */
    public function getTopicDetails()
    {
        return $this->topicDetails;
    }
}

/**
 * Class Google_VideoAgeGating
 */
class Google_VideoAgeGating extends Google_Model
{
    /**
     * @var
     */
    public $alcoholContent;
    /**
     * @var
     */
    public $restricted;
    /**
     * @var
     */
    public $videoGameRating;

    /**
     * @param $alcoholContent
     */
    public function setAlcoholContent($alcoholContent)
    {
        $this->alcoholContent = $alcoholContent;
    }

    /**
     * @return mixed
     */
    public function getAlcoholContent()
    {
        return $this->alcoholContent;
    }

    /**
     * @param $restricted
     */
    public function setRestricted($restricted)
    {
        $this->restricted = $restricted;
    }

    /**
     * @return mixed
     */
    public function getRestricted()
    {
        return $this->restricted;
    }

    /**
     * @param $videoGameRating
     */
    public function setVideoGameRating($videoGameRating)
    {
        $this->videoGameRating = $videoGameRating;
    }

    /**
     * @return mixed
     */
    public function getVideoGameRating()
    {
        return $this->videoGameRating;
    }
}

/**
 * Class Google_VideoCategory
 */
class Google_VideoCategory extends Google_Model
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
     * @var string
     */
    protected $__snippetType = 'Google_VideoCategorySnippet';
    /**
     * @var string
     */
    protected $__snippetDataType = '';
    /**
     * @var
     */
    public $snippet;

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
     * @param Google_VideoCategorySnippet $snippet
     */
    public function setSnippet(Google_VideoCategorySnippet $snippet)
    {
        $this->snippet = $snippet;
    }

    /**
     * @return mixed
     */
    public function getSnippet()
    {
        return $this->snippet;
    }
}

/**
 * Class Google_VideoCategoryListResponse
 */
class Google_VideoCategoryListResponse extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $eventId;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_VideoCategory';
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
    public $visitorId;

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
     * @param $eventId
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    /**
     * @return mixed
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_VideoCategory) */
        $items)
    {
        $this->assertIsArray($items, 'Google_VideoCategory', __METHOD__);
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
     * @param $visitorId
     */
    public function setVisitorId($visitorId)
    {
        $this->visitorId = $visitorId;
    }

    /**
     * @return mixed
     */
    public function getVisitorId()
    {
        return $this->visitorId;
    }
}

/**
 * Class Google_VideoCategorySnippet
 */
class Google_VideoCategorySnippet extends Google_Model
{
    /**
     * @var
     */
    public $channelId;
    /**
     * @var
     */
    public $title;

    /**
     * @param $channelId
     */
    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;
    }

    /**
     * @return mixed
     */
    public function getChannelId()
    {
        return $this->channelId;
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
}

/**
 * Class Google_VideoContentDetails
 */
class Google_VideoContentDetails extends Google_Model
{
    /**
     * @var
     */
    public $caption;
    /**
     * @var string
     */
    protected $__contentRatingType = 'Google_ContentRating';
    /**
     * @var string
     */
    protected $__contentRatingDataType = '';
    /**
     * @var
     */
    public $contentRating;
    /**
     * @var string
     */
    protected $__countryRestrictionType = 'Google_AccessPolicy';
    /**
     * @var string
     */
    protected $__countryRestrictionDataType = '';
    /**
     * @var
     */
    public $countryRestriction;
    /**
     * @var
     */
    public $definition;
    /**
     * @var
     */
    public $dimension;
    /**
     * @var
     */
    public $duration;
    /**
     * @var
     */
    public $licensedContent;
    /**
     * @var string
     */
    protected $__regionRestrictionType = 'Google_VideoContentDetailsRegionRestriction';
    /**
     * @var string
     */
    protected $__regionRestrictionDataType = '';
    /**
     * @var
     */
    public $regionRestriction;

    /**
     * @param $caption
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
    }

    /**
     * @return mixed
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * @param Google_ContentRating $contentRating
     */
    public function setContentRating(Google_ContentRating $contentRating)
    {
        $this->contentRating = $contentRating;
    }

    /**
     * @return mixed
     */
    public function getContentRating()
    {
        return $this->contentRating;
    }

    /**
     * @param Google_AccessPolicy $countryRestriction
     */
    public function setCountryRestriction(Google_AccessPolicy $countryRestriction)
    {
        $this->countryRestriction = $countryRestriction;
    }

    /**
     * @return mixed
     */
    public function getCountryRestriction()
    {
        return $this->countryRestriction;
    }

    /**
     * @param $definition
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;
    }

    /**
     * @return mixed
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * @param $dimension
     */
    public function setDimension($dimension)
    {
        $this->dimension = $dimension;
    }

    /**
     * @return mixed
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * @param $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param $licensedContent
     */
    public function setLicensedContent($licensedContent)
    {
        $this->licensedContent = $licensedContent;
    }

    /**
     * @return mixed
     */
    public function getLicensedContent()
    {
        return $this->licensedContent;
    }

    /**
     * @param Google_VideoContentDetailsRegionRestriction $regionRestriction
     */
    public function setRegionRestriction(Google_VideoContentDetailsRegionRestriction $regionRestriction)
    {
        $this->regionRestriction = $regionRestriction;
    }

    /**
     * @return mixed
     */
    public function getRegionRestriction()
    {
        return $this->regionRestriction;
    }
}

/**
 * Class Google_VideoContentDetailsRegionRestriction
 */
class Google_VideoContentDetailsRegionRestriction extends Google_Model
{
    /**
     * @var
     */
    public $allowed;
    /**
     * @var
     */
    public $blocked;

    /**
     * @param $allowed
     * @throws Google_Exception
     */
    public function setAllowed(/* array(Google_string) */
        $allowed)
    {
        $this->assertIsArray($allowed, 'Google_string', __METHOD__);
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
     * @param $blocked
     * @throws Google_Exception
     */
    public function setBlocked(/* array(Google_string) */
        $blocked)
    {
        $this->assertIsArray($blocked, 'Google_string', __METHOD__);
        $this->blocked = $blocked;
    }

    /**
     * @return mixed
     */
    public function getBlocked()
    {
        return $this->blocked;
    }
}

/**
 * Class Google_VideoConversionPing
 */
class Google_VideoConversionPing extends Google_Model
{
    /**
     * @var
     */
    public $context;
    /**
     * @var
     */
    public $conversionUrl;

    /**
     * @param $context
     */
    public function setContext($context)
    {
        $this->context = $context;
    }

    /**
     * @return mixed
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param $conversionUrl
     */
    public function setConversionUrl($conversionUrl)
    {
        $this->conversionUrl = $conversionUrl;
    }

    /**
     * @return mixed
     */
    public function getConversionUrl()
    {
        return $this->conversionUrl;
    }
}

/**
 * Class Google_VideoConversionPings
 */
class Google_VideoConversionPings extends Google_Model
{
    /**
     * @var string
     */
    protected $__pingsType = 'Google_VideoConversionPing';
    /**
     * @var string
     */
    protected $__pingsDataType = 'array';
    /**
     * @var
     */
    public $pings;

    /**
     * @param $pings
     * @throws Google_Exception
     */
    public function setPings(/* array(Google_VideoConversionPing) */
        $pings)
    {
        $this->assertIsArray($pings, 'Google_VideoConversionPing', __METHOD__);
        $this->pings = $pings;
    }

    /**
     * @return mixed
     */
    public function getPings()
    {
        return $this->pings;
    }
}

/**
 * Class Google_VideoFileDetails
 */
class Google_VideoFileDetails extends Google_Model
{
    /**
     * @var string
     */
    protected $__audioStreamsType = 'Google_VideoFileDetailsAudioStream';
    /**
     * @var string
     */
    protected $__audioStreamsDataType = 'array';
    /**
     * @var
     */
    public $audioStreams;
    /**
     * @var
     */
    public $bitrateBps;
    /**
     * @var
     */
    public $container;
    /**
     * @var
     */
    public $creationTime;
    /**
     * @var
     */
    public $durationMs;
    /**
     * @var
     */
    public $fileName;
    /**
     * @var
     */
    public $fileSize;
    /**
     * @var
     */
    public $fileType;
    /**
     * @var string
     */
    protected $__recordingLocationType = 'Google_GeoPoint';
    /**
     * @var string
     */
    protected $__recordingLocationDataType = '';
    /**
     * @var
     */
    public $recordingLocation;
    /**
     * @var string
     */
    protected $__videoStreamsType = 'Google_VideoFileDetailsVideoStream';
    /**
     * @var string
     */
    protected $__videoStreamsDataType = 'array';
    /**
     * @var
     */
    public $videoStreams;

    /**
     * @param $audioStreams
     * @throws Google_Exception
     */
    public function setAudioStreams(/* array(Google_VideoFileDetailsAudioStream) */
        $audioStreams)
    {
        $this->assertIsArray($audioStreams, 'Google_VideoFileDetailsAudioStream', __METHOD__);
        $this->audioStreams = $audioStreams;
    }

    /**
     * @return mixed
     */
    public function getAudioStreams()
    {
        return $this->audioStreams;
    }

    /**
     * @param $bitrateBps
     */
    public function setBitrateBps($bitrateBps)
    {
        $this->bitrateBps = $bitrateBps;
    }

    /**
     * @return mixed
     */
    public function getBitrateBps()
    {
        return $this->bitrateBps;
    }

    /**
     * @param $container
     */
    public function setContainer($container)
    {
        $this->container = $container;
    }

    /**
     * @return mixed
     */
    public function getContainer()
    {
        return $this->container;
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
     * @param $durationMs
     */
    public function setDurationMs($durationMs)
    {
        $this->durationMs = $durationMs;
    }

    /**
     * @return mixed
     */
    public function getDurationMs()
    {
        return $this->durationMs;
    }

    /**
     * @param $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param $fileSize
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
    }

    /**
     * @return mixed
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * @param $fileType
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
    }

    /**
     * @return mixed
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * @param Google_GeoPoint $recordingLocation
     */
    public function setRecordingLocation(Google_GeoPoint $recordingLocation)
    {
        $this->recordingLocation = $recordingLocation;
    }

    /**
     * @return mixed
     */
    public function getRecordingLocation()
    {
        return $this->recordingLocation;
    }

    /**
     * @param $videoStreams
     * @throws Google_Exception
     */
    public function setVideoStreams(/* array(Google_VideoFileDetailsVideoStream) */
        $videoStreams)
    {
        $this->assertIsArray($videoStreams, 'Google_VideoFileDetailsVideoStream', __METHOD__);
        $this->videoStreams = $videoStreams;
    }

    /**
     * @return mixed
     */
    public function getVideoStreams()
    {
        return $this->videoStreams;
    }
}

/**
 * Class Google_VideoFileDetailsAudioStream
 */
class Google_VideoFileDetailsAudioStream extends Google_Model
{
    /**
     * @var
     */
    public $bitrateBps;
    /**
     * @var
     */
    public $channelCount;
    /**
     * @var
     */
    public $codec;
    /**
     * @var
     */
    public $vendor;

    /**
     * @param $bitrateBps
     */
    public function setBitrateBps($bitrateBps)
    {
        $this->bitrateBps = $bitrateBps;
    }

    /**
     * @return mixed
     */
    public function getBitrateBps()
    {
        return $this->bitrateBps;
    }

    /**
     * @param $channelCount
     */
    public function setChannelCount($channelCount)
    {
        $this->channelCount = $channelCount;
    }

    /**
     * @return mixed
     */
    public function getChannelCount()
    {
        return $this->channelCount;
    }

    /**
     * @param $codec
     */
    public function setCodec($codec)
    {
        $this->codec = $codec;
    }

    /**
     * @return mixed
     */
    public function getCodec()
    {
        return $this->codec;
    }

    /**
     * @param $vendor
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;
    }

    /**
     * @return mixed
     */
    public function getVendor()
    {
        return $this->vendor;
    }
}

/**
 * Class Google_VideoFileDetailsVideoStream
 */
class Google_VideoFileDetailsVideoStream extends Google_Model
{
    /**
     * @var
     */
    public $aspectRatio;
    /**
     * @var
     */
    public $bitrateBps;
    /**
     * @var
     */
    public $codec;
    /**
     * @var
     */
    public $frameRateFps;
    /**
     * @var
     */
    public $heightPixels;
    /**
     * @var
     */
    public $rotation;
    /**
     * @var
     */
    public $vendor;
    /**
     * @var
     */
    public $widthPixels;

    /**
     * @param $aspectRatio
     */
    public function setAspectRatio($aspectRatio)
    {
        $this->aspectRatio = $aspectRatio;
    }

    /**
     * @return mixed
     */
    public function getAspectRatio()
    {
        return $this->aspectRatio;
    }

    /**
     * @param $bitrateBps
     */
    public function setBitrateBps($bitrateBps)
    {
        $this->bitrateBps = $bitrateBps;
    }

    /**
     * @return mixed
     */
    public function getBitrateBps()
    {
        return $this->bitrateBps;
    }

    /**
     * @param $codec
     */
    public function setCodec($codec)
    {
        $this->codec = $codec;
    }

    /**
     * @return mixed
     */
    public function getCodec()
    {
        return $this->codec;
    }

    /**
     * @param $frameRateFps
     */
    public function setFrameRateFps($frameRateFps)
    {
        $this->frameRateFps = $frameRateFps;
    }

    /**
     * @return mixed
     */
    public function getFrameRateFps()
    {
        return $this->frameRateFps;
    }

    /**
     * @param $heightPixels
     */
    public function setHeightPixels($heightPixels)
    {
        $this->heightPixels = $heightPixels;
    }

    /**
     * @return mixed
     */
    public function getHeightPixels()
    {
        return $this->heightPixels;
    }

    /**
     * @param $rotation
     */
    public function setRotation($rotation)
    {
        $this->rotation = $rotation;
    }

    /**
     * @return mixed
     */
    public function getRotation()
    {
        return $this->rotation;
    }

    /**
     * @param $vendor
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;
    }

    /**
     * @return mixed
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * @param $widthPixels
     */
    public function setWidthPixels($widthPixels)
    {
        $this->widthPixels = $widthPixels;
    }

    /**
     * @return mixed
     */
    public function getWidthPixels()
    {
        return $this->widthPixels;
    }
}

/**
 * Class Google_VideoGetRatingResponse
 */
class Google_VideoGetRatingResponse extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_VideoRating';
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
    public function setItems(/* array(Google_VideoRating) */
        $items)
    {
        $this->assertIsArray($items, 'Google_VideoRating', __METHOD__);
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
 * Class Google_VideoListResponse
 */
class Google_VideoListResponse extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $eventId;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Video';
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
     * @var string
     */
    protected $__pageInfoType = 'Google_PageInfo';
    /**
     * @var string
     */
    protected $__pageInfoDataType = '';
    /**
     * @var
     */
    public $pageInfo;
    /**
     * @var
     */
    public $prevPageToken;
    /**
     * @var
     */
    public $visitorId;

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
     * @param $eventId
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    /**
     * @return mixed
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Video) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Video', __METHOD__);
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
     * @param Google_PageInfo $pageInfo
     */
    public function setPageInfo(Google_PageInfo $pageInfo)
    {
        $this->pageInfo = $pageInfo;
    }

    /**
     * @return mixed
     */
    public function getPageInfo()
    {
        return $this->pageInfo;
    }

    /**
     * @param $prevPageToken
     */
    public function setPrevPageToken($prevPageToken)
    {
        $this->prevPageToken = $prevPageToken;
    }

    public function getPrevPageToken()
    {
        return $this->prevPageToken;
    }

    /**
     * @param $visitorId
     */
    public function setVisitorId($visitorId)
    {
        $this->visitorId = $visitorId;
    }

    /**
     * @return mixed
     */
    public function getVisitorId()
    {
        return $this->visitorId;
    }
}

/**
 * Class Google_VideoMonetizationDetails
 */
class Google_VideoMonetizationDetails extends Google_Model
{
    /**
     * @var string
     */
    protected $__accessType = 'Google_AccessPolicy';
    /**
     * @var string
     */
    protected $__accessDataType = '';
    /**
     * @var
     */
    public $access;

    /**
     * @param Google_AccessPolicy $access
     */
    public function setAccess(Google_AccessPolicy $access)
    {
        $this->access = $access;
    }

    /**
     * @return mixed
     */
    public function getAccess()
    {
        return $this->access;
    }
}

/**
 * Class Google_VideoPlayer
 */
class Google_VideoPlayer extends Google_Model
{
    /**
     * @var
     */
    public $embedHtml;

    /**
     * @param $embedHtml
     */
    public function setEmbedHtml($embedHtml)
    {
        $this->embedHtml = $embedHtml;
    }

    /**
     * @return mixed
     */
    public function getEmbedHtml()
    {
        return $this->embedHtml;
    }
}

/**
 * Class Google_VideoProcessingDetails
 */
class Google_VideoProcessingDetails extends Google_Model
{
    /**
     * @var
     */
    public $editorSuggestionsAvailability;
    /**
     * @var
     */
    public $fileDetailsAvailability;
    /**
     * @var
     */
    public $processingFailureReason;
    /**
     * @var
     */
    public $processingIssuesAvailability;
    /**
     * @var string
     */
    protected $__processingProgressType = 'Google_VideoProcessingDetailsProcessingProgress';
    /**
     * @var string
     */
    protected $__processingProgressDataType = '';
    /**
     * @var
     */
    public $processingProgress;
    /**
     * @var
     */
    public $processingStatus;
    /**
     * @var
     */
    public $tagSuggestionsAvailability;
    /**
     * @var
     */
    public $thumbnailsAvailability;

    /**
     * @param $editorSuggestionsAvailability
     */
    public function setEditorSuggestionsAvailability($editorSuggestionsAvailability)
    {
        $this->editorSuggestionsAvailability = $editorSuggestionsAvailability;
    }

    /**
     * @return mixed
     */
    public function getEditorSuggestionsAvailability()
    {
        return $this->editorSuggestionsAvailability;
    }

    /**
     * @param $fileDetailsAvailability
     */
    public function setFileDetailsAvailability($fileDetailsAvailability)
    {
        $this->fileDetailsAvailability = $fileDetailsAvailability;
    }

    /**
     * @return mixed
     */
    public function getFileDetailsAvailability()
    {
        return $this->fileDetailsAvailability;
    }

    /**
     * @param $processingFailureReason
     */
    public function setProcessingFailureReason($processingFailureReason)
    {
        $this->processingFailureReason = $processingFailureReason;
    }

    /**
     * @return mixed
     */
    public function getProcessingFailureReason()
    {
        return $this->processingFailureReason;
    }

    /**
     * @param $processingIssuesAvailability
     */
    public function setProcessingIssuesAvailability($processingIssuesAvailability)
    {
        $this->processingIssuesAvailability = $processingIssuesAvailability;
    }

    /**
     * @return mixed
     */
    public function getProcessingIssuesAvailability()
    {
        return $this->processingIssuesAvailability;
    }

    /**
     * @param Google_VideoProcessingDetailsProcessingProgress $processingProgress
     */
    public function setProcessingProgress(Google_VideoProcessingDetailsProcessingProgress $processingProgress)
    {
        $this->processingProgress = $processingProgress;
    }

    /**
     * @return mixed
     */
    public function getProcessingProgress()
    {
        return $this->processingProgress;
    }

    /**
     * @param $processingStatus
     */
    public function setProcessingStatus($processingStatus)
    {
        $this->processingStatus = $processingStatus;
    }

    /**
     * @return mixed
     */
    public function getProcessingStatus()
    {
        return $this->processingStatus;
    }

    /**
     * @param $tagSuggestionsAvailability
     */
    public function setTagSuggestionsAvailability($tagSuggestionsAvailability)
    {
        $this->tagSuggestionsAvailability = $tagSuggestionsAvailability;
    }

    /**
     * @return mixed
     */
    public function getTagSuggestionsAvailability()
    {
        return $this->tagSuggestionsAvailability;
    }

    /**
     * @param $thumbnailsAvailability
     */
    public function setThumbnailsAvailability($thumbnailsAvailability)
    {
        $this->thumbnailsAvailability = $thumbnailsAvailability;
    }

    /**
     * @return mixed
     */
    public function getThumbnailsAvailability()
    {
        return $this->thumbnailsAvailability;
    }
}

/**
 * Class Google_VideoProcessingDetailsProcessingProgress
 */
class Google_VideoProcessingDetailsProcessingProgress extends Google_Model
{
    /**
     * @var
     */
    public $partsProcessed;
    /**
     * @var
     */
    public $partsTotal;
    /**
     * @var
     */
    public $timeLeftMs;

    /**
     * @param $partsProcessed
     */
    public function setPartsProcessed($partsProcessed)
    {
        $this->partsProcessed = $partsProcessed;
    }

    /**
     * @return mixed
     */
    public function getPartsProcessed()
    {
        return $this->partsProcessed;
    }

    /**
     * @param $partsTotal
     */
    public function setPartsTotal($partsTotal)
    {
        $this->partsTotal = $partsTotal;
    }

    /**
     * @return mixed
     */
    public function getPartsTotal()
    {
        return $this->partsTotal;
    }

    /**
     * @param $timeLeftMs
     */
    public function setTimeLeftMs($timeLeftMs)
    {
        $this->timeLeftMs = $timeLeftMs;
    }

    /**
     * @return mixed
     */
    public function getTimeLeftMs()
    {
        return $this->timeLeftMs;
    }
}

/**
 * Class Google_VideoProjectDetails
 */
class Google_VideoProjectDetails extends Google_Model
{
    /**
     * @var
     */
    public $tags;

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
}

/**
 * Class Google_VideoRating
 */
class Google_VideoRating extends Google_Model
{
    /**
     * @var
     */
    public $rating;
    /**
     * @var
     */
    public $videoId;

    /**
     * @param $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param $videoId
     */
    public function setVideoId($videoId)
    {
        $this->videoId = $videoId;
    }

    /**
     * @return mixed
     */
    public function getVideoId()
    {
        return $this->videoId;
    }
}

/**
 * Class Google_VideoRecordingDetails
 */
class Google_VideoRecordingDetails extends Google_Model
{
    /**
     * @var string
     */
    protected $__locationType = 'Google_GeoPoint';
    /**
     * @var string
     */
    protected $__locationDataType = '';
    /**
     * @var
     */
    public $location;
    /**
     * @var
     */
    public $locationDescription;
    /**
     * @var
     */
    public $recordingDate;

    /**
     * @param Google_GeoPoint $location
     */
    public function setLocation(Google_GeoPoint $location)
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
     * @param $locationDescription
     */
    public function setLocationDescription($locationDescription)
    {
        $this->locationDescription = $locationDescription;
    }

    /**
     * @return mixed
     */
    public function getLocationDescription()
    {
        return $this->locationDescription;
    }

    /**
     * @param $recordingDate
     */
    public function setRecordingDate($recordingDate)
    {
        $this->recordingDate = $recordingDate;
    }

    /**
     * @return mixed
     */
    public function getRecordingDate()
    {
        return $this->recordingDate;
    }
}

/**
 * Class Google_VideoSnippet
 */
class Google_VideoSnippet extends Google_Model
{
    /**
     * @var
     */
    public $categoryId;
    /**
     * @var
     */
    public $channelId;
    /**
     * @var
     */
    public $channelTitle;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $publishedAt;
    /**
     * @var
     */
    public $tags;
    /**
     * @var string
     */
    protected $__thumbnailsType = 'Google_ThumbnailDetails';
    /**
     * @var string
     */
    protected $__thumbnailsDataType = '';
    /**
     * @var
     */
    public $thumbnails;
    /**
     * @var
     */
    public $title;

    /**
     * @param $categoryId
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param $channelId
     */
    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;
    }

    /**
     * @return mixed
     */
    public function getChannelId()
    {
        return $this->channelId;
    }

    /**
     * @param $channelTitle
     */
    public function setChannelTitle($channelTitle)
    {
        $this->channelTitle = $channelTitle;
    }

    /**
     * @return mixed
     */
    public function getChannelTitle()
    {
        return $this->channelTitle;
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
     * @param $publishedAt
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;
    }

    /**
     * @return mixed
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
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
     * @param Google_ThumbnailDetails $thumbnails
     */
    public function setThumbnails(Google_ThumbnailDetails $thumbnails)
    {
        $this->thumbnails = $thumbnails;
    }

    /**
     * @return mixed
     */
    public function getThumbnails()
    {
        return $this->thumbnails;
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
}

/**
 * Class Google_VideoStatistics
 */
class Google_VideoStatistics extends Google_Model
{
    /**
     * @var
     */
    public $commentCount;
    /**
     * @var
     */
    public $dislikeCount;
    /**
     * @var
     */
    public $favoriteCount;
    /**
     * @var
     */
    public $likeCount;
    /**
     * @var
     */
    public $viewCount;

    /**
     * @param $commentCount
     */
    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;
    }

    /**
     * @return mixed
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }

    /**
     * @param $dislikeCount
     */
    public function setDislikeCount($dislikeCount)
    {
        $this->dislikeCount = $dislikeCount;
    }

    /**
     * @return mixed
     */
    public function getDislikeCount()
    {
        return $this->dislikeCount;
    }

    /**
     * @param $favoriteCount
     */
    public function setFavoriteCount($favoriteCount)
    {
        $this->favoriteCount = $favoriteCount;
    }

    /**
     * @return mixed
     */
    public function getFavoriteCount()
    {
        return $this->favoriteCount;
    }

    /**
     * @param $likeCount
     */
    public function setLikeCount($likeCount)
    {
        $this->likeCount = $likeCount;
    }

    /**
     * @return mixed
     */
    public function getLikeCount()
    {
        return $this->likeCount;
    }

    /**
     * @param $viewCount
     */
    public function setViewCount($viewCount)
    {
        $this->viewCount = $viewCount;
    }

    /**
     * @return mixed
     */
    public function getViewCount()
    {
        return $this->viewCount;
    }
}

/**
 * Class Google_VideoStatus
 */
class Google_VideoStatus extends Google_Model
{
    /**
     * @var
     */
    public $embeddable;
    /**
     * @var
     */
    public $failureReason;
    /**
     * @var
     */
    public $license;
    /**
     * @var
     */
    public $privacyStatus;
    /**
     * @var
     */
    public $publicStatsViewable;
    /**
     * @var
     */
    public $rejectionReason;
    /**
     * @var
     */
    public $uploadStatus;

    /**
     * @param $embeddable
     */
    public function setEmbeddable($embeddable)
    {
        $this->embeddable = $embeddable;
    }

    /**
     * @return mixed
     */
    public function getEmbeddable()
    {
        return $this->embeddable;
    }

    /**
     * @param $failureReason
     */
    public function setFailureReason($failureReason)
    {
        $this->failureReason = $failureReason;
    }

    /**
     * @return mixed
     */
    public function getFailureReason()
    {
        return $this->failureReason;
    }

    /**
     * @param $license
     */
    public function setLicense($license)
    {
        $this->license = $license;
    }

    /**
     * @return mixed
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * @param $privacyStatus
     */
    public function setPrivacyStatus($privacyStatus)
    {
        $this->privacyStatus = $privacyStatus;
    }

    /**
     * @return mixed
     */
    public function getPrivacyStatus()
    {
        return $this->privacyStatus;
    }

    /**
     * @param $publicStatsViewable
     */
    public function setPublicStatsViewable($publicStatsViewable)
    {
        $this->publicStatsViewable = $publicStatsViewable;
    }

    /**
     * @return mixed
     */
    public function getPublicStatsViewable()
    {
        return $this->publicStatsViewable;
    }

    /**
     * @param $rejectionReason
     */
    public function setRejectionReason($rejectionReason)
    {
        $this->rejectionReason = $rejectionReason;
    }

    /**
     * @return mixed
     */
    public function getRejectionReason()
    {
        return $this->rejectionReason;
    }

    /**
     * @param $uploadStatus
     */
    public function setUploadStatus($uploadStatus)
    {
        $this->uploadStatus = $uploadStatus;
    }

    /**
     * @return mixed
     */
    public function getUploadStatus()
    {
        return $this->uploadStatus;
    }
}

/**
 * Class Google_VideoSuggestions
 */
class Google_VideoSuggestions extends Google_Model
{
    /**
     * @var
     */
    public $editorSuggestions;
    /**
     * @var
     */
    public $processingErrors;
    /**
     * @var
     */
    public $processingHints;
    /**
     * @var
     */
    public $processingWarnings;
    /**
     * @var string
     */
    protected $__tagSuggestionsType = 'Google_VideoSuggestionsTagSuggestion';
    /**
     * @var string
     */
    protected $__tagSuggestionsDataType = 'array';
    /**
     * @var
     */
    public $tagSuggestions;

    /**
     * @param $editorSuggestions
     * @throws Google_Exception
     */
    public function setEditorSuggestions(/* array(Google_string) */
        $editorSuggestions)
    {
        $this->assertIsArray($editorSuggestions, 'Google_string', __METHOD__);
        $this->editorSuggestions = $editorSuggestions;
    }

    /**
     * @return mixed
     */
    public function getEditorSuggestions()
    {
        return $this->editorSuggestions;
    }

    /**
     * @param $processingErrors
     * @throws Google_Exception
     */
    public function setProcessingErrors(/* array(Google_string) */
        $processingErrors)
    {
        $this->assertIsArray($processingErrors, 'Google_string', __METHOD__);
        $this->processingErrors = $processingErrors;
    }

    /**
     * @return mixed
     */
    public function getProcessingErrors()
    {
        return $this->processingErrors;
    }

    /**
     * @param $processingHints
     * @throws Google_Exception
     */
    public function setProcessingHints(/* array(Google_string) */
        $processingHints)
    {
        $this->assertIsArray($processingHints, 'Google_string', __METHOD__);
        $this->processingHints = $processingHints;
    }

    /**
     * @return mixed
     */
    public function getProcessingHints()
    {
        return $this->processingHints;
    }

    /**
     * @param $processingWarnings
     * @throws Google_Exception
     */
    public function setProcessingWarnings(/* array(Google_string) */
        $processingWarnings)
    {
        $this->assertIsArray($processingWarnings, 'Google_string', __METHOD__);
        $this->processingWarnings = $processingWarnings;
    }

    /**
     * @return mixed
     */
    public function getProcessingWarnings()
    {
        return $this->processingWarnings;
    }

    /**
     * @param $tagSuggestions
     * @throws Google_Exception
     */
    public function setTagSuggestions(/* array(Google_VideoSuggestionsTagSuggestion) */
        $tagSuggestions)
    {
        $this->assertIsArray($tagSuggestions, 'Google_VideoSuggestionsTagSuggestion', __METHOD__);
        $this->tagSuggestions = $tagSuggestions;
    }

    /**
     * @return mixed
     */
    public function getTagSuggestions()
    {
        return $this->tagSuggestions;
    }
}

/**
 * Class Google_VideoSuggestionsTagSuggestion
 */
class Google_VideoSuggestionsTagSuggestion extends Google_Model
{
    /**
     * @var
     */
    public $categoryRestricts;
    /**
     * @var
     */
    public $tag;

    /**
     * @param $categoryRestricts
     * @throws Google_Exception
     */
    public function setCategoryRestricts(/* array(Google_string) */
        $categoryRestricts)
    {
        $this->assertIsArray($categoryRestricts, 'Google_string', __METHOD__);
        $this->categoryRestricts = $categoryRestricts;
    }

    /**
     * @return mixed
     */
    public function getCategoryRestricts()
    {
        return $this->categoryRestricts;
    }

    /**
     * @param $tag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    }

    /**
     * @return mixed
     */
    public function getTag()
    {
        return $this->tag;
    }
}

/**
 * Class Google_VideoTopicDetails
 */
class Google_VideoTopicDetails extends Google_Model
{
    /**
     * @var
     */
    public $topicIds;

    /**
     * @param $topicIds
     * @throws Google_Exception
     */
    public function setTopicIds(/* array(Google_string) */
        $topicIds)
    {
        $this->assertIsArray($topicIds, 'Google_string', __METHOD__);
        $this->topicIds = $topicIds;
    }

    /**
     * @return mixed
     */
    public function getTopicIds()
    {
        return $this->topicIds;
    }
}

/**
 * Class Google_WatchSettings
 */
class Google_WatchSettings extends Google_Model
{
    /**
     * @var
     */
    public $backgroundColor;
    /**
     * @var
     */
    public $featuredPlaylistId;
    /**
     * @var
     */
    public $textColor;

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
     * @param $featuredPlaylistId
     */
    public function setFeaturedPlaylistId($featuredPlaylistId)
    {
        $this->featuredPlaylistId = $featuredPlaylistId;
    }

    /**
     * @return mixed
     */
    public function getFeaturedPlaylistId()
    {
        return $this->featuredPlaylistId;
    }

    /**
     * @param $textColor
     */
    public function setTextColor($textColor)
    {
        $this->textColor = $textColor;
    }

    /**
     * @return mixed
     */
    public function getTextColor()
    {
        return $this->textColor;
    }
}
