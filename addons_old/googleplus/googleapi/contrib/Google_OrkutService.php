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
 *   $orkutService = new Google_OrkutService(...);
 *   $acl = $orkutService->acl;
 *  </code>
 */
class Google_AclServiceResource extends Google_ServiceResource
{

    /**
     * Excludes an element from the ACL of the activity. (acl.delete)
     *
     * @param string $activityId ID of the activity.
     * @param string $userId ID of the user to be removed from the activity.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($activityId, $userId, $optParams = [])
    {
        $params = ['activityId' => $activityId, 'userId' => $userId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }
}

/**
 * The "activities" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_OrkutService(...);
 *   $activities = $orkutService->activities;
 *  </code>
 */
class Google_ActivitiesServiceResource extends Google_ServiceResource
{

    /**
     * Deletes an existing activity, if the access controls allow it. (activities.delete)
     *
     * @param string $activityId ID of the activity to remove.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($activityId, $optParams = [])
    {
        $params = ['activityId' => $activityId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Retrieves a list of activities. (activities.list)
     *
     * @param string $userId The ID of the user whose activities will be listed. Can be me to refer to the viewer (i.e. the authenticated user).
     * @param string $collection The collection of activities to list.
     * @param array $optParams Optional parameters.
     * @return Google_ActivityList
     * @throws Google_Exception
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     * @opt_param string maxResults The maximum number of activities to include in the response.
     * @opt_param string pageToken A continuation token that allows pagination.
     */
    public function listActivities($userId, $collection, $optParams = [])
    {
        $params = ['userId' => $userId, 'collection' => $collection];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_ActivityList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "activityVisibility" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_OrkutService(...);
 *   $activityVisibility = $orkutService->activityVisibility;
 *  </code>
 */
class Google_ActivityVisibilityServiceResource extends Google_ServiceResource
{

    /**
     * Gets the visibility of an existing activity. (activityVisibility.get)
     *
     * @param string $activityId ID of the activity to get the visibility.
     * @param array $optParams Optional parameters.
     * @return Google_Visibility
     * @throws Google_Exception
     */
    public function get($activityId, $optParams = [])
    {
        $params = ['activityId' => $activityId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Visibility($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates the visibility of an existing activity. This method supports patch semantics.
     * (activityVisibility.patch)
     *
     * @param string $activityId ID of the activity.
     * @param Google_Visibility $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Visibility
     * @throws Google_Exception
     */
    public function patch($activityId, Google_Visibility $postBody, $optParams = [])
    {
        $params = ['activityId' => $activityId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Visibility($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates the visibility of an existing activity. (activityVisibility.update)
     *
     * @param string $activityId ID of the activity.
     * @param Google_Visibility $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Visibility
     * @throws Google_Exception
     */
    public function update($activityId, Google_Visibility $postBody, $optParams = [])
    {
        $params = ['activityId' => $activityId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Visibility($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "badges" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_OrkutService(...);
 *   $badges = $orkutService->badges;
 *  </code>
 */
class Google_BadgesServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves a badge from a user. (badges.get)
     *
     * @param string $userId The ID of the user whose badges will be listed. Can be me to refer to caller.
     * @param string $badgeId The ID of the badge that will be retrieved.
     * @param array $optParams Optional parameters.
     * @return Google_Badge
     * @throws Google_Exception
     */
    public function get($userId, $badgeId, $optParams = [])
    {
        $params = ['userId' => $userId, 'badgeId' => $badgeId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Badge($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the list of visible badges of a user. (badges.list)
     *
     * @param string $userId The id of the user whose badges will be listed. Can be me to refer to caller.
     * @param array $optParams Optional parameters.
     * @return Google_BadgeList
     * @throws Google_Exception
     */
    public function listBadges($userId, $optParams = [])
    {
        $params = ['userId' => $userId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_BadgeList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "comments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_OrkutService(...);
 *   $comments = $orkutService->comments;
 *  </code>
 */
class Google_CommentsServiceResource extends Google_ServiceResource
{

    /**
     * Deletes an existing comment. (comments.delete)
     *
     * @param string $commentId ID of the comment to remove.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($commentId, $optParams = [])
    {
        $params = ['commentId' => $commentId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Retrieves an existing comment. (comments.get)
     *
     * @param string $commentId ID of the comment to get.
     * @param array $optParams Optional parameters.
     * @return Google_Comment
     * @throws Google_Exception
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     */
    public function get($commentId, $optParams = [])
    {
        $params = ['commentId' => $commentId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Comment($data);
        } else {
            return $data;
        }
    }

    /**
     * Inserts a new comment to an activity. (comments.insert)
     *
     * @param string $activityId The ID of the activity to contain the new comment.
     * @param Google_Comment $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Comment
     * @throws Google_Exception
     */
    public function insert($activityId, Google_Comment $postBody, $optParams = [])
    {
        $params = ['activityId' => $activityId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Comment($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves a list of comments, possibly filtered. (comments.list)
     *
     * @param string $activityId The ID of the activity containing the comments.
     * @param array $optParams Optional parameters.
     * @return Google_CommentList
     * @throws Google_Exception
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     * @opt_param string maxResults The maximum number of activities to include in the response.
     * @opt_param string orderBy Sort search results.
     * @opt_param string pageToken A continuation token that allows pagination.
     */
    public function listComments($activityId, $optParams = [])
    {
        $params = ['activityId' => $activityId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_CommentList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "communities" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_OrkutService(...);
 *   $communities = $orkutService->communities;
 *  </code>
 */
class Google_CommunitiesServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves the basic information (aka. profile) of a community. (communities.get)
     *
     * @param int $communityId The ID of the community to get.
     * @param array $optParams Optional parameters.
     * @return Google_Community
     * @throws Google_Exception
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     */
    public function get($communityId, $optParams = [])
    {
        $params = ['communityId' => $communityId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Community($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the list of communities the current user is a member of. (communities.list)
     *
     * @param string $userId The ID of the user whose communities will be listed. Can be me to refer to caller.
     * @param array $optParams Optional parameters.
     * @return Google_CommunityList
     * @throws Google_Exception
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     * @opt_param string maxResults The maximum number of communities to include in the response.
     * @opt_param string orderBy How to order the communities by.
     */
    public function listCommunities($userId, $optParams = [])
    {
        $params = ['userId' => $userId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_CommunityList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "communityFollow" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_OrkutService(...);
 *   $communityFollow = $orkutService->communityFollow;
 *  </code>
 */
class Google_CommunityFollowServiceResource extends Google_ServiceResource
{

    /**
     * Removes a user from the followers of a community. (communityFollow.delete)
     *
     * @param int $communityId ID of the community.
     * @param string $userId ID of the user.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($communityId, $userId, $optParams = [])
    {
        $params = ['communityId' => $communityId, 'userId' => $userId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Adds a user as a follower of a community. (communityFollow.insert)
     *
     * @param int $communityId ID of the community.
     * @param string $userId ID of the user.
     * @param array $optParams Optional parameters.
     * @return Google_CommunityMembers
     * @throws Google_Exception
     */
    public function insert($communityId, $userId, $optParams = [])
    {
        $params = ['communityId' => $communityId, 'userId' => $userId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_CommunityMembers($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "communityMembers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_OrkutService(...);
 *   $communityMembers = $orkutService->communityMembers;
 *  </code>
 */
class Google_CommunityMembersServiceResource extends Google_ServiceResource
{

    /**
     * Makes the user leave a community. (communityMembers.delete)
     *
     * @param int $communityId ID of the community.
     * @param string $userId ID of the user.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($communityId, $userId, $optParams = [])
    {
        $params = ['communityId' => $communityId, 'userId' => $userId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Retrieves the relationship between a user and a community. (communityMembers.get)
     *
     * @param int $communityId ID of the community.
     * @param string $userId ID of the user.
     * @param array $optParams Optional parameters.
     * @return Google_CommunityMembers
     * @throws Google_Exception
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     */
    public function get($communityId, $userId, $optParams = [])
    {
        $params = ['communityId' => $communityId, 'userId' => $userId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_CommunityMembers($data);
        } else {
            return $data;
        }
    }

    /**
     * Makes the user join a community. (communityMembers.insert)
     *
     * @param int $communityId ID of the community.
     * @param string $userId ID of the user.
     * @param array $optParams Optional parameters.
     * @return Google_CommunityMembers
     * @throws Google_Exception
     */
    public function insert($communityId, $userId, $optParams = [])
    {
        $params = ['communityId' => $communityId, 'userId' => $userId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_CommunityMembers($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists members of a community. Use the pagination tokens to retrieve the full list; do not rely on
     * the member count available in the community profile information to know when to stop iterating,
     * as that count may be approximate. (communityMembers.list)
     *
     * @param int $communityId The ID of the community whose members will be listed.
     * @param array $optParams Optional parameters.
     * @return Google_CommunityMembersList
     * @throws Google_Exception
     * @opt_param bool friendsOnly Whether to list only community members who are friends of the user.
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     * @opt_param string maxResults The maximum number of members to include in the response.
     * @opt_param string pageToken A continuation token that allows pagination.
     */
    public function listCommunityMembers($communityId, $optParams = [])
    {
        $params = ['communityId' => $communityId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_CommunityMembersList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "communityMessages" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_OrkutService(...);
 *   $communityMessages = $orkutService->communityMessages;
 *  </code>
 */
class Google_CommunityMessagesServiceResource extends Google_ServiceResource
{

    /**
     * Moves a message of the community to the trash folder. (communityMessages.delete)
     *
     * @param int $communityId The ID of the community whose message will be moved to the trash folder.
     * @param string $topicId The ID of the topic whose message will be moved to the trash folder.
     * @param string $messageId The ID of the message to be moved to the trash folder.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($communityId, $topicId, $messageId, $optParams = [])
    {
        $params = ['communityId' => $communityId, 'topicId' => $topicId, 'messageId' => $messageId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Adds a message to a given community topic. (communityMessages.insert)
     *
     * @param int $communityId The ID of the community the message should be added to.
     * @param string $topicId The ID of the topic the message should be added to.
     * @param Google_CommunityMessage $postBody
     * @param array $optParams Optional parameters.
     * @return Google_CommunityMessage
     * @throws Google_Exception
     */
    public function insert($communityId, $topicId, Google_CommunityMessage $postBody, $optParams = [])
    {
        $params = ['communityId' => $communityId, 'topicId' => $topicId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_CommunityMessage($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the messages of a topic of a community. (communityMessages.list)
     *
     * @param int $communityId The ID of the community which messages will be listed.
     * @param string $topicId The ID of the topic which messages will be listed.
     * @param array $optParams Optional parameters.
     * @return Google_CommunityMessageList
     * @throws Google_Exception
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     * @opt_param string maxResults The maximum number of messages to include in the response.
     * @opt_param string pageToken A continuation token that allows pagination.
     */
    public function listCommunityMessages($communityId, $topicId, $optParams = [])
    {
        $params = ['communityId' => $communityId, 'topicId' => $topicId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_CommunityMessageList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "communityPollComments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_OrkutService(...);
 *   $communityPollComments = $orkutService->communityPollComments;
 *  </code>
 */
class Google_CommunityPollCommentsServiceResource extends Google_ServiceResource
{

    /**
     * Adds a comment on a community poll. (communityPollComments.insert)
     *
     * @param int $communityId The ID of the community whose poll is being commented.
     * @param string $pollId The ID of the poll being commented.
     * @param Google_CommunityPollComment $postBody
     * @param array $optParams Optional parameters.
     * @return Google_CommunityPollComment
     * @throws Google_Exception
     */
    public function insert($communityId, $pollId, Google_CommunityPollComment $postBody, $optParams = [])
    {
        $params = ['communityId' => $communityId, 'pollId' => $pollId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_CommunityPollComment($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the comments of a community poll. (communityPollComments.list)
     *
     * @param int $communityId The ID of the community whose poll is having its comments listed.
     * @param string $pollId The ID of the community whose polls will be listed.
     * @param array $optParams Optional parameters.
     * @return Google_CommunityPollCommentList
     * @throws Google_Exception
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     * @opt_param string maxResults The maximum number of comments to include in the response.
     * @opt_param string pageToken A continuation token that allows pagination.
     */
    public function listCommunityPollComments($communityId, $pollId, $optParams = [])
    {
        $params = ['communityId' => $communityId, 'pollId' => $pollId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_CommunityPollCommentList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "communityPollVotes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_OrkutService(...);
 *   $communityPollVotes = $orkutService->communityPollVotes;
 *  </code>
 */
class Google_CommunityPollVotesServiceResource extends Google_ServiceResource
{

    /**
     * Votes on a community poll. (communityPollVotes.insert)
     *
     * @param int $communityId The ID of the community whose poll is being voted.
     * @param string $pollId The ID of the poll being voted.
     * @param Google_CommunityPollVote $postBody
     * @param array $optParams Optional parameters.
     * @return Google_CommunityPollVote
     * @throws Google_Exception
     */
    public function insert($communityId, $pollId, Google_CommunityPollVote $postBody, $optParams = [])
    {
        $params = ['communityId' => $communityId, 'pollId' => $pollId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_CommunityPollVote($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "communityPolls" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_OrkutService(...);
 *   $communityPolls = $orkutService->communityPolls;
 *  </code>
 */
class Google_CommunityPollsServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves one specific poll of a community. (communityPolls.get)
     *
     * @param int $communityId The ID of the community for whose poll will be retrieved.
     * @param string $pollId The ID of the poll to get.
     * @param array $optParams Optional parameters.
     * @return Google_CommunityPoll
     * @throws Google_Exception
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     */
    public function get($communityId, $pollId, $optParams = [])
    {
        $params = ['communityId' => $communityId, 'pollId' => $pollId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_CommunityPoll($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the polls of a community. (communityPolls.list)
     *
     * @param int $communityId The ID of the community which polls will be listed.
     * @param array $optParams Optional parameters.
     * @return Google_CommunityPollList
     * @throws Google_Exception
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     * @opt_param string maxResults The maximum number of polls to include in the response.
     * @opt_param string pageToken A continuation token that allows pagination.
     */
    public function listCommunityPolls($communityId, $optParams = [])
    {
        $params = ['communityId' => $communityId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_CommunityPollList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "communityRelated" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_OrkutService(...);
 *   $communityRelated = $orkutService->communityRelated;
 *  </code>
 */
class Google_CommunityRelatedServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves the communities related to another one. (communityRelated.list)
     *
     * @param int $communityId The ID of the community whose related communities will be listed.
     * @param array $optParams Optional parameters.
     * @return Google_CommunityList
     * @throws Google_Exception
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     */
    public function listCommunityRelated($communityId, $optParams = [])
    {
        $params = ['communityId' => $communityId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_CommunityList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "communityTopics" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_OrkutService(...);
 *   $communityTopics = $orkutService->communityTopics;
 *  </code>
 */
class Google_CommunityTopicsServiceResource extends Google_ServiceResource
{

    /**
     * Moves a topic of the community to the trash folder. (communityTopics.delete)
     *
     * @param int $communityId The ID of the community whose topic will be moved to the trash folder.
     * @param string $topicId The ID of the topic to be moved to the trash folder.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($communityId, $topicId, $optParams = [])
    {
        $params = ['communityId' => $communityId, 'topicId' => $topicId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Retrieves a topic of a community. (communityTopics.get)
     *
     * @param int $communityId The ID of the community whose topic will be retrieved.
     * @param string $topicId The ID of the topic to get.
     * @param array $optParams Optional parameters.
     * @return Google_CommunityTopic
     * @throws Google_Exception
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     */
    public function get($communityId, $topicId, $optParams = [])
    {
        $params = ['communityId' => $communityId, 'topicId' => $topicId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_CommunityTopic($data);
        } else {
            return $data;
        }
    }

    /**
     * Adds a topic to a given community. (communityTopics.insert)
     *
     * @param int $communityId The ID of the community the topic should be added to.
     * @param Google_CommunityTopic $postBody
     * @param array $optParams Optional parameters.
     * @return Google_CommunityTopic
     * @throws Google_Exception
     * @opt_param bool isShout Whether this topic is a shout.
     */
    public function insert($communityId, Google_CommunityTopic $postBody, $optParams = [])
    {
        $params = ['communityId' => $communityId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_CommunityTopic($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the topics of a community. (communityTopics.list)
     *
     * @param int $communityId The ID of the community which topics will be listed.
     * @param array $optParams Optional parameters.
     * @return Google_CommunityTopicList
     * @throws Google_Exception
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     * @opt_param string maxResults The maximum number of topics to include in the response.
     * @opt_param string pageToken A continuation token that allows pagination.
     */
    public function listCommunityTopics($communityId, $optParams = [])
    {
        $params = ['communityId' => $communityId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_CommunityTopicList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "counters" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_OrkutService(...);
 *   $counters = $orkutService->counters;
 *  </code>
 */
class Google_CountersServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves the counters of a user. (counters.list)
     *
     * @param string $userId The ID of the user whose counters will be listed. Can be me to refer to caller.
     * @param array $optParams Optional parameters.
     * @return Google_Counters
     * @throws Google_Exception
     */
    public function listCounters($userId, $optParams = [])
    {
        $params = ['userId' => $userId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Counters($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "scraps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $orkutService = new Google_OrkutService(...);
 *   $scraps = $orkutService->scraps;
 *  </code>
 */
class Google_ScrapsServiceResource extends Google_ServiceResource
{

    /**
     * Creates a new scrap. (scraps.insert)
     *
     * @param Google_Activity $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Activity
     * @throws Google_Exception
     */
    public function insert(Google_Activity $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Activity($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Orkut (v2).
 *
 * <p>
 * Lets you manage activities, comments and badges in Orkut. More stuff coming in time.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="http://code.google.com/apis/orkut/v2/reference.html" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_OrkutService extends Google_Service
{
    /**
     * @var Google_AclServiceResource
     */
    public $acl;
    /**
     * @var Google_ActivitiesServiceResource
     */
    public $activities;
    /**
     * @var Google_ActivityVisibilityServiceResource
     */
    public $activityVisibility;
    /**
     * @var Google_BadgesServiceResource
     */
    public $badges;
    /**
     * @var Google_CommentsServiceResource
     */
    public $comments;
    /**
     * @var Google_CommunitiesServiceResource
     */
    public $communities;
    /**
     * @var Google_CommunityFollowServiceResource
     */
    public $communityFollow;
    /**
     * @var Google_CommunityMembersServiceResource
     */
    public $communityMembers;
    /**
     * @var Google_CommunityMessagesServiceResource
     */
    public $communityMessages;
    /**
     * @var Google_CommunityPollCommentsServiceResource
     */
    public $communityPollComments;
    /**
     * @var Google_CommunityPollVotesServiceResource
     */
    public $communityPollVotes;
    /**
     * @var Google_CommunityPollsServiceResource
     */
    public $communityPolls;
    /**
     * @var Google_CommunityRelatedServiceResource
     */
    public $communityRelated;
    /**
     * @var Google_CommunityTopicsServiceResource
     */
    public $communityTopics;
    /**
     * @var Google_CountersServiceResource
     */
    public $counters;
    /**
     * @var Google_ScrapsServiceResource
     */
    public $scraps;

    /**
     * Constructs the internal representation of the Orkut service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'orkut/v2/';
        $this->version = 'v2';
        $this->serviceName = 'orkut';

        $client->addService($this->serviceName, $this->version);
        $this->acl = new Google_AclServiceResource($this, $this->serviceName, 'acl', json_decode('{"methods": {"delete": {"id": "orkut.acl.delete", "path": "activities/{activityId}/acl/{userId}", "httpMethod": "DELETE", "parameters": {"activityId": {"type": "string", "required": true, "location": "path"}, "userId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/orkut"]}}}', true));
        $this->activities = new Google_ActivitiesServiceResource($this, $this->serviceName, 'activities', json_decode('{"methods": {"delete": {"id": "orkut.activities.delete", "path": "activities/{activityId}", "httpMethod": "DELETE", "parameters": {"activityId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/orkut"]}, "list": {"id": "orkut.activities.list", "path": "people/{userId}/activities/{collection}", "httpMethod": "GET", "parameters": {"collection": {"type": "string", "required": true, "enum": ["all", "scraps", "stream"], "location": "path"}, "hl": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "1", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "userId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "ActivityList"}, "scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"]}}}', true));
        $this->activityVisibility = new Google_ActivityVisibilityServiceResource($this, $this->serviceName, 'activityVisibility', json_decode('{"methods": {"get": {"id": "orkut.activityVisibility.get", "path": "activities/{activityId}/visibility", "httpMethod": "GET", "parameters": {"activityId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Visibility"}, "scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"]}, "patch": {"id": "orkut.activityVisibility.patch", "path": "activities/{activityId}/visibility", "httpMethod": "PATCH", "parameters": {"activityId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Visibility"}, "response": {"$ref": "Visibility"}, "scopes": ["https://www.googleapis.com/auth/orkut"]}, "update": {"id": "orkut.activityVisibility.update", "path": "activities/{activityId}/visibility", "httpMethod": "PUT", "parameters": {"activityId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Visibility"}, "response": {"$ref": "Visibility"}, "scopes": ["https://www.googleapis.com/auth/orkut"]}}}', true));
        $this->badges = new Google_BadgesServiceResource($this, $this->serviceName, 'badges', json_decode('{"methods": {"get": {"id": "orkut.badges.get", "path": "people/{userId}/badges/{badgeId}", "httpMethod": "GET", "parameters": {"badgeId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "userId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Badge"}, "scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"]}, "list": {"id": "orkut.badges.list", "path": "people/{userId}/badges", "httpMethod": "GET", "parameters": {"userId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "BadgeList"}, "scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"]}}}', true));
        $this->comments = new Google_CommentsServiceResource($this, $this->serviceName, 'comments', json_decode('{"methods": {"delete": {"id": "orkut.comments.delete", "path": "comments/{commentId}", "httpMethod": "DELETE", "parameters": {"commentId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/orkut"]}, "get": {"id": "orkut.comments.get", "path": "comments/{commentId}", "httpMethod": "GET", "parameters": {"commentId": {"type": "string", "required": true, "location": "path"}, "hl": {"type": "string", "location": "query"}}, "response": {"$ref": "Comment"}, "scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"]}, "insert": {"id": "orkut.comments.insert", "path": "activities/{activityId}/comments", "httpMethod": "POST", "parameters": {"activityId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Comment"}, "response": {"$ref": "Comment"}, "scopes": ["https://www.googleapis.com/auth/orkut"]}, "list": {"id": "orkut.comments.list", "path": "activities/{activityId}/comments", "httpMethod": "GET", "parameters": {"activityId": {"type": "string", "required": true, "location": "path"}, "hl": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "1", "location": "query"}, "orderBy": {"type": "string", "default": "DESCENDING_SORT", "enum": ["ascending", "descending"], "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "CommentList"}, "scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"]}}}', true));
        $this->communities = new Google_CommunitiesServiceResource($this, $this->serviceName, 'communities', json_decode('{"methods": {"get": {"id": "orkut.communities.get", "path": "communities/{communityId}", "httpMethod": "GET", "parameters": {"communityId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "hl": {"type": "string", "location": "query"}}, "response": {"$ref": "Community"}, "scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"]}, "list": {"id": "orkut.communities.list", "path": "people/{userId}/communities", "httpMethod": "GET", "parameters": {"hl": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "1", "location": "query"}, "orderBy": {"type": "string", "enum": ["id", "ranked"], "location": "query"}, "userId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CommunityList"}, "scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"]}}}', true));
        $this->communityFollow = new Google_CommunityFollowServiceResource($this, $this->serviceName, 'communityFollow', json_decode('{"methods": {"delete": {"id": "orkut.communityFollow.delete", "path": "communities/{communityId}/followers/{userId}", "httpMethod": "DELETE", "parameters": {"communityId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "userId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/orkut"]}, "insert": {"id": "orkut.communityFollow.insert", "path": "communities/{communityId}/followers/{userId}", "httpMethod": "POST", "parameters": {"communityId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "userId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CommunityMembers"}, "scopes": ["https://www.googleapis.com/auth/orkut"]}}}', true));
        $this->communityMembers = new Google_CommunityMembersServiceResource($this, $this->serviceName, 'communityMembers', json_decode('{"methods": {"delete": {"id": "orkut.communityMembers.delete", "path": "communities/{communityId}/members/{userId}", "httpMethod": "DELETE", "parameters": {"communityId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "userId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/orkut"]}, "get": {"id": "orkut.communityMembers.get", "path": "communities/{communityId}/members/{userId}", "httpMethod": "GET", "parameters": {"communityId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "hl": {"type": "string", "location": "query"}, "userId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CommunityMembers"}, "scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"]}, "insert": {"id": "orkut.communityMembers.insert", "path": "communities/{communityId}/members/{userId}", "httpMethod": "POST", "parameters": {"communityId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "userId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CommunityMembers"}, "scopes": ["https://www.googleapis.com/auth/orkut"]}, "list": {"id": "orkut.communityMembers.list", "path": "communities/{communityId}/members", "httpMethod": "GET", "parameters": {"communityId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "friendsOnly": {"type": "boolean", "location": "query"}, "hl": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "1", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "CommunityMembersList"}, "scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"]}}}', true));
        $this->communityMessages = new Google_CommunityMessagesServiceResource($this, $this->serviceName, 'communityMessages', json_decode('{"methods": {"delete": {"id": "orkut.communityMessages.delete", "path": "communities/{communityId}/topics/{topicId}/messages/{messageId}", "httpMethod": "DELETE", "parameters": {"communityId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "messageId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "topicId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/orkut"]}, "insert": {"id": "orkut.communityMessages.insert", "path": "communities/{communityId}/topics/{topicId}/messages", "httpMethod": "POST", "parameters": {"communityId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "topicId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "request": {"$ref": "CommunityMessage"}, "response": {"$ref": "CommunityMessage"}, "scopes": ["https://www.googleapis.com/auth/orkut"]}, "list": {"id": "orkut.communityMessages.list", "path": "communities/{communityId}/topics/{topicId}/messages", "httpMethod": "GET", "parameters": {"communityId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "hl": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "1", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "topicId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "response": {"$ref": "CommunityMessageList"}, "scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"]}}}', true));
        $this->communityPollComments = new Google_CommunityPollCommentsServiceResource($this, $this->serviceName, 'communityPollComments', json_decode('{"methods": {"insert": {"id": "orkut.communityPollComments.insert", "path": "communities/{communityId}/polls/{pollId}/comments", "httpMethod": "POST", "parameters": {"communityId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "pollId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "CommunityPollComment"}, "response": {"$ref": "CommunityPollComment"}, "scopes": ["https://www.googleapis.com/auth/orkut"]}, "list": {"id": "orkut.communityPollComments.list", "path": "communities/{communityId}/polls/{pollId}/comments", "httpMethod": "GET", "parameters": {"communityId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "hl": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "1", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "pollId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CommunityPollCommentList"}, "scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"]}}}', true));
        $this->communityPollVotes = new Google_CommunityPollVotesServiceResource($this, $this->serviceName, 'communityPollVotes', json_decode('{"methods": {"insert": {"id": "orkut.communityPollVotes.insert", "path": "communities/{communityId}/polls/{pollId}/votes", "httpMethod": "POST", "parameters": {"communityId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "pollId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "CommunityPollVote"}, "response": {"$ref": "CommunityPollVote"}, "scopes": ["https://www.googleapis.com/auth/orkut"]}}}', true));
        $this->communityPolls = new Google_CommunityPollsServiceResource($this, $this->serviceName, 'communityPolls', json_decode('{"methods": {"get": {"id": "orkut.communityPolls.get", "path": "communities/{communityId}/polls/{pollId}", "httpMethod": "GET", "parameters": {"communityId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "hl": {"type": "string", "location": "query"}, "pollId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CommunityPoll"}, "scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"]}, "list": {"id": "orkut.communityPolls.list", "path": "communities/{communityId}/polls", "httpMethod": "GET", "parameters": {"communityId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "hl": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "1", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "CommunityPollList"}, "scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"]}}}', true));
        $this->communityRelated = new Google_CommunityRelatedServiceResource($this, $this->serviceName, 'communityRelated', json_decode('{"methods": {"list": {"id": "orkut.communityRelated.list", "path": "communities/{communityId}/related", "httpMethod": "GET", "parameters": {"communityId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "hl": {"type": "string", "location": "query"}}, "response": {"$ref": "CommunityList"}, "scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"]}}}', true));
        $this->communityTopics = new Google_CommunityTopicsServiceResource($this, $this->serviceName, 'communityTopics', json_decode('{"methods": {"delete": {"id": "orkut.communityTopics.delete", "path": "communities/{communityId}/topics/{topicId}", "httpMethod": "DELETE", "parameters": {"communityId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "topicId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/orkut"]}, "get": {"id": "orkut.communityTopics.get", "path": "communities/{communityId}/topics/{topicId}", "httpMethod": "GET", "parameters": {"communityId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "hl": {"type": "string", "location": "query"}, "topicId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "response": {"$ref": "CommunityTopic"}, "scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"]}, "insert": {"id": "orkut.communityTopics.insert", "path": "communities/{communityId}/topics", "httpMethod": "POST", "parameters": {"communityId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "isShout": {"type": "boolean", "location": "query"}}, "request": {"$ref": "CommunityTopic"}, "response": {"$ref": "CommunityTopic"}, "scopes": ["https://www.googleapis.com/auth/orkut"]}, "list": {"id": "orkut.communityTopics.list", "path": "communities/{communityId}/topics", "httpMethod": "GET", "parameters": {"communityId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "hl": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "1", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "CommunityTopicList"}, "scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"]}}}', true));
        $this->counters = new Google_CountersServiceResource($this, $this->serviceName, 'counters', json_decode('{"methods": {"list": {"id": "orkut.counters.list", "path": "people/{userId}/counters", "httpMethod": "GET", "parameters": {"userId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Counters"}, "scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"]}}}', true));
        $this->scraps = new Google_ScrapsServiceResource($this, $this->serviceName, 'scraps', json_decode('{"methods": {"insert": {"id": "orkut.scraps.insert", "path": "activities/scraps", "httpMethod": "POST", "request": {"$ref": "Activity"}, "response": {"$ref": "Activity"}, "scopes": ["https://www.googleapis.com/auth/orkut"]}}}', true));

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
    public $description;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_AclItems';
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
    public $totalParticipants;

    /**
     * @param $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_AclItems) */
        $items)
    {
        $this->assertIsArray($items, 'Google_AclItems', __METHOD__);
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
     * @param $totalParticipants
     */
    public function setTotalParticipants($totalParticipants)
    {
        $this->totalParticipants = $totalParticipants;
    }

    /**
     * @return mixed
     */
    public function getTotalParticipants()
    {
        return $this->totalParticipants;
    }
}

/**
 * Class Google_AclItems
 */
class Google_AclItems extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $type;

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
 * Class Google_Activity
 */
class Google_Activity extends Google_Model
{
    /**
     * @var string
     */
    protected $__accessType = 'Google_Acl';
    /**
     * @var string
     */
    protected $__accessDataType = '';
    /**
     * @var
     */
    public $access;
    /**
     * @var string
     */
    protected $__actorType = 'Google_OrkutAuthorResource';
    /**
     * @var string
     */
    protected $__actorDataType = '';
    /**
     * @var
     */
    public $actor;
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
    protected $__linksType = 'Google_OrkutLinkResource';
    /**
     * @var string
     */
    protected $__linksDataType = 'array';
    /**
     * @var
     */
    public $links;
    /**
     * @var string
     */
    protected $__objectType = 'Google_ActivityObject';
    /**
     * @var string
     */
    protected $__objectDataType = '';
    /**
     * @var
     */
    public $object;
    /**
     * @var
     */
    public $published;
    /**
     * @var
     */
    public $title;
    /**
     * @var
     */
    public $updated;
    /**
     * @var
     */
    public $verb;

    /**
     * @param Google_Acl $access
     */
    public function setAccess(Google_Acl $access)
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

    /**
     * @param Google_OrkutAuthorResource $actor
     */
    public function setActor(Google_OrkutAuthorResource $actor)
    {
        $this->actor = $actor;
    }

    /**
     * @return mixed
     */
    public function getActor()
    {
        return $this->actor;
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
     * @param $links
     * @throws Google_Exception
     */
    public function setLinks(/* array(Google_OrkutLinkResource) */
        $links)
    {
        $this->assertIsArray($links, 'Google_OrkutLinkResource', __METHOD__);
        $this->links = $links;
    }

    /**
     * @return mixed
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param Google_ActivityObject $object
     */
    public function setObject(Google_ActivityObject $object)
    {
        $this->object = $object;
    }

    /**
     * @return mixed
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param $published
     */
    public function setPublished($published)
    {
        $this->published = $published;
    }

    /**
     * @return mixed
     */
    public function getPublished()
    {
        return $this->published;
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

    /**
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param $verb
     */
    public function setVerb($verb)
    {
        $this->verb = $verb;
    }

    /**
     * @return mixed
     */
    public function getVerb()
    {
        return $this->verb;
    }
}

/**
 * Class Google_ActivityList
 */
class Google_ActivityList extends Google_Model
{
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
}

/**
 * Class Google_ActivityObject
 */
class Google_ActivityObject extends Google_Model
{
    /**
     * @var
     */
    public $content;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_OrkutActivityobjectsResource';
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
    public $objectType;
    /**
     * @var string
     */
    protected $__repliesType = 'Google_ActivityObjectReplies';
    /**
     * @var string
     */
    protected $__repliesDataType = '';
    /**
     * @var
     */
    public $replies;

    /**
     * @param $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_OrkutActivityobjectsResource) */
        $items)
    {
        $this->assertIsArray($items, 'Google_OrkutActivityobjectsResource', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param $objectType
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    }

    /**
     * @return mixed
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * @param Google_ActivityObjectReplies $replies
     */
    public function setReplies(Google_ActivityObjectReplies $replies)
    {
        $this->replies = $replies;
    }

    /**
     * @return mixed
     */
    public function getReplies()
    {
        return $this->replies;
    }
}

/**
 * Class Google_ActivityObjectReplies
 */
class Google_ActivityObjectReplies extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Comment';
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
    public $totalItems;
    /**
     * @var
     */
    public $url;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Comment) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Comment', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param $totalItems
     */
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }

    /**
     * @return mixed
     */
    public function getTotalItems()
    {
        return $this->totalItems;
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
 * Class Google_Badge
 */
class Google_Badge extends Google_Model
{
    /**
     * @var
     */
    public $badgeLargeLogo;
    /**
     * @var
     */
    public $badgeSmallLogo;
    /**
     * @var
     */
    public $caption;
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
    public $sponsorLogo;
    /**
     * @var
     */
    public $sponsorName;
    /**
     * @var
     */
    public $sponsorUrl;

    /**
     * @param $badgeLargeLogo
     */
    public function setBadgeLargeLogo($badgeLargeLogo)
    {
        $this->badgeLargeLogo = $badgeLargeLogo;
    }

    /**
     * @return mixed
     */
    public function getBadgeLargeLogo()
    {
        return $this->badgeLargeLogo;
    }

    /**
     * @param $badgeSmallLogo
     */
    public function setBadgeSmallLogo($badgeSmallLogo)
    {
        $this->badgeSmallLogo = $badgeSmallLogo;
    }

    /**
     * @return mixed
     */
    public function getBadgeSmallLogo()
    {
        return $this->badgeSmallLogo;
    }

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
     * @param $sponsorLogo
     */
    public function setSponsorLogo($sponsorLogo)
    {
        $this->sponsorLogo = $sponsorLogo;
    }

    /**
     * @return mixed
     */
    public function getSponsorLogo()
    {
        return $this->sponsorLogo;
    }

    /**
     * @param $sponsorName
     */
    public function setSponsorName($sponsorName)
    {
        $this->sponsorName = $sponsorName;
    }

    /**
     * @return mixed
     */
    public function getSponsorName()
    {
        return $this->sponsorName;
    }

    /**
     * @param $sponsorUrl
     */
    public function setSponsorUrl($sponsorUrl)
    {
        $this->sponsorUrl = $sponsorUrl;
    }

    /**
     * @return mixed
     */
    public function getSponsorUrl()
    {
        return $this->sponsorUrl;
    }
}

/**
 * Class Google_BadgeList
 */
class Google_BadgeList extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Badge';
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
    public function setItems(/* array(Google_Badge) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Badge', __METHOD__);
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
 * Class Google_Comment
 */
class Google_Comment extends Google_Model
{
    /**
     * @var string
     */
    protected $__actorType = 'Google_OrkutAuthorResource';
    /**
     * @var string
     */
    protected $__actorDataType = '';
    /**
     * @var
     */
    public $actor;
    /**
     * @var
     */
    public $content;
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__inReplyToType = 'Google_CommentInReplyTo';
    /**
     * @var string
     */
    protected $__inReplyToDataType = '';
    /**
     * @var
     */
    public $inReplyTo;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__linksType = 'Google_OrkutLinkResource';
    /**
     * @var string
     */
    protected $__linksDataType = 'array';
    /**
     * @var
     */
    public $links;
    /**
     * @var
     */
    public $published;

    /**
     * @param Google_OrkutAuthorResource $actor
     */
    public function setActor(Google_OrkutAuthorResource $actor)
    {
        $this->actor = $actor;
    }

    /**
     * @return mixed
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @param $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
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
     * @param Google_CommentInReplyTo $inReplyTo
     */
    public function setInReplyTo(Google_CommentInReplyTo $inReplyTo)
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
     * @param $links
     * @throws Google_Exception
     */
    public function setLinks(/* array(Google_OrkutLinkResource) */
        $links)
    {
        $this->assertIsArray($links, 'Google_OrkutLinkResource', __METHOD__);
        $this->links = $links;
    }

    /**
     * @return mixed
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param $published
     */
    public function setPublished($published)
    {
        $this->published = $published;
    }

    /**
     * @return mixed
     */
    public function getPublished()
    {
        return $this->published;
    }
}

/**
 * Class Google_CommentInReplyTo
 */
class Google_CommentInReplyTo extends Google_Model
{
    /**
     * @var
     */
    public $href;
    /**
     * @var
     */
    public $ref;
    /**
     * @var
     */
    public $rel;
    /**
     * @var
     */
    public $type;

    /**
     * @param $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }

    /**
     * @return mixed
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * @param $ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    /**
     * @return mixed
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param $rel
     */
    public function setRel($rel)
    {
        $this->rel = $rel;
    }

    /**
     * @return mixed
     */
    public function getRel()
    {
        return $this->rel;
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
 * Class Google_CommentList
 */
class Google_CommentList extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Comment';
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
    public $previousPageToken;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Comment) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Comment', __METHOD__);
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
     * @param $previousPageToken
     */
    public function setPreviousPageToken($previousPageToken)
    {
        $this->previousPageToken = $previousPageToken;
    }

    /**
     * @return mixed
     */
    public function getPreviousPageToken()
    {
        return $this->previousPageToken;
    }
}

/**
 * Class Google_Community
 */
class Google_Community extends Google_Model
{
    /**
     * @var
     */
    public $category;
    /**
     * @var string
     */
    protected $__co_ownersType = 'Google_OrkutAuthorResource';
    /**
     * @var string
     */
    protected $__co_ownersDataType = 'array';
    /**
     * @var
     */
    public $co_owners;
    /**
     * @var
     */
    public $creation_date;
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
    public $language;
    /**
     * @var string
     */
    protected $__linksType = 'Google_OrkutLinkResource';
    /**
     * @var string
     */
    protected $__linksDataType = 'array';
    /**
     * @var
     */
    public $links;
    /**
     * @var
     */
    public $location;
    /**
     * @var
     */
    public $member_count;
    /**
     * @var string
     */
    protected $__moderatorsType = 'Google_OrkutAuthorResource';
    /**
     * @var string
     */
    protected $__moderatorsDataType = 'array';
    /**
     * @var
     */
    public $moderators;
    /**
     * @var
     */
    public $name;
    /**
     * @var string
     */
    protected $__ownerType = 'Google_OrkutAuthorResource';
    /**
     * @var string
     */
    protected $__ownerDataType = '';
    /**
     * @var
     */
    public $owner;
    /**
     * @var
     */
    public $photo_url;

    /**
     * @param $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param $co_owners
     * @throws Google_Exception
     */
    public function setCo_owners(/* array(Google_OrkutAuthorResource) */
        $co_owners)
    {
        $this->assertIsArray($co_owners, 'Google_OrkutAuthorResource', __METHOD__);
        $this->co_owners = $co_owners;
    }

    /**
     * @return mixed
     */
    public function getCo_owners()
    {
        return $this->co_owners;
    }

    /**
     * @param $creation_date
     */
    public function setCreation_date($creation_date)
    {
        $this->creation_date = $creation_date;
    }

    /**
     * @return mixed
     */
    public function getCreation_date()
    {
        return $this->creation_date;
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
     * @param $links
     * @throws Google_Exception
     */
    public function setLinks(/* array(Google_OrkutLinkResource) */
        $links)
    {
        $this->assertIsArray($links, 'Google_OrkutLinkResource', __METHOD__);
        $this->links = $links;
    }

    /**
     * @return mixed
     */
    public function getLinks()
    {
        return $this->links;
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
     * @param $member_count
     */
    public function setMember_count($member_count)
    {
        $this->member_count = $member_count;
    }

    /**
     * @return mixed
     */
    public function getMember_count()
    {
        return $this->member_count;
    }

    /**
     * @param $moderators
     * @throws Google_Exception
     */
    public function setModerators(/* array(Google_OrkutAuthorResource) */
        $moderators)
    {
        $this->assertIsArray($moderators, 'Google_OrkutAuthorResource', __METHOD__);
        $this->moderators = $moderators;
    }

    /**
     * @return mixed
     */
    public function getModerators()
    {
        return $this->moderators;
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
     * @param Google_OrkutAuthorResource $owner
     */
    public function setOwner(Google_OrkutAuthorResource $owner)
    {
        $this->owner = $owner;
    }

    /**
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param $photo_url
     */
    public function setPhoto_url($photo_url)
    {
        $this->photo_url = $photo_url;
    }

    /**
     * @return mixed
     */
    public function getPhoto_url()
    {
        return $this->photo_url;
    }
}

/**
 * Class Google_CommunityList
 */
class Google_CommunityList extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Community';
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
    public function setItems(/* array(Google_Community) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Community', __METHOD__);
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
 * Class Google_CommunityMembers
 */
class Google_CommunityMembers extends Google_Model
{
    /**
     * @var string
     */
    protected $__communityMembershipStatusType = 'Google_CommunityMembershipStatus';
    /**
     * @var string
     */
    protected $__communityMembershipStatusDataType = '';
    /**
     * @var
     */
    public $communityMembershipStatus;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__personType = 'Google_OrkutActivitypersonResource';
    /**
     * @var string
     */
    protected $__personDataType = '';
    /**
     * @var
     */
    public $person;

    /**
     * @param Google_CommunityMembershipStatus $communityMembershipStatus
     */
    public function setCommunityMembershipStatus(Google_CommunityMembershipStatus $communityMembershipStatus)
    {
        $this->communityMembershipStatus = $communityMembershipStatus;
    }

    /**
     * @return mixed
     */
    public function getCommunityMembershipStatus()
    {
        return $this->communityMembershipStatus;
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
     * @param Google_OrkutActivitypersonResource $person
     */
    public function setPerson(Google_OrkutActivitypersonResource $person)
    {
        $this->person = $person;
    }

    /**
     * @return mixed
     */
    public function getPerson()
    {
        return $this->person;
    }
}

/**
 * Class Google_CommunityMembersList
 */
class Google_CommunityMembersList extends Google_Model
{
    /**
     * @var
     */
    public $firstPageToken;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_CommunityMembers';
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
    public $lastPageToken;
    /**
     * @var
     */
    public $nextPageToken;
    /**
     * @var
     */
    public $prevPageToken;

    /**
     * @param $firstPageToken
     */
    public function setFirstPageToken($firstPageToken)
    {
        $this->firstPageToken = $firstPageToken;
    }

    /**
     * @return mixed
     */
    public function getFirstPageToken()
    {
        return $this->firstPageToken;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_CommunityMembers) */
        $items)
    {
        $this->assertIsArray($items, 'Google_CommunityMembers', __METHOD__);
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
     * @param $lastPageToken
     */
    public function setLastPageToken($lastPageToken)
    {
        $this->lastPageToken = $lastPageToken;
    }

    /**
     * @return mixed
     */
    public function getLastPageToken()
    {
        return $this->lastPageToken;
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
}

/**
 * Class Google_CommunityMembershipStatus
 */
class Google_CommunityMembershipStatus extends Google_Model
{
    /**
     * @var
     */
    public $canCreatePoll;
    /**
     * @var
     */
    public $canCreateTopic;
    /**
     * @var
     */
    public $canShout;
    /**
     * @var
     */
    public $isCoOwner;
    /**
     * @var
     */
    public $isFollowing;
    /**
     * @var
     */
    public $isModerator;
    /**
     * @var
     */
    public $isOwner;
    /**
     * @var
     */
    public $isRestoreAvailable;
    /**
     * @var
     */
    public $isTakebackAvailable;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $status;

    /**
     * @param $canCreatePoll
     */
    public function setCanCreatePoll($canCreatePoll)
    {
        $this->canCreatePoll = $canCreatePoll;
    }

    /**
     * @return mixed
     */
    public function getCanCreatePoll()
    {
        return $this->canCreatePoll;
    }

    /**
     * @param $canCreateTopic
     */
    public function setCanCreateTopic($canCreateTopic)
    {
        $this->canCreateTopic = $canCreateTopic;
    }

    /**
     * @return mixed
     */
    public function getCanCreateTopic()
    {
        return $this->canCreateTopic;
    }

    /**
     * @param $canShout
     */
    public function setCanShout($canShout)
    {
        $this->canShout = $canShout;
    }

    /**
     * @return mixed
     */
    public function getCanShout()
    {
        return $this->canShout;
    }

    /**
     * @param $isCoOwner
     */
    public function setIsCoOwner($isCoOwner)
    {
        $this->isCoOwner = $isCoOwner;
    }

    /**
     * @return mixed
     */
    public function getIsCoOwner()
    {
        return $this->isCoOwner;
    }

    /**
     * @param $isFollowing
     */
    public function setIsFollowing($isFollowing)
    {
        $this->isFollowing = $isFollowing;
    }

    /**
     * @return mixed
     */
    public function getIsFollowing()
    {
        return $this->isFollowing;
    }

    /**
     * @param $isModerator
     */
    public function setIsModerator($isModerator)
    {
        $this->isModerator = $isModerator;
    }

    /**
     * @return mixed
     */
    public function getIsModerator()
    {
        return $this->isModerator;
    }

    /**
     * @param $isOwner
     */
    public function setIsOwner($isOwner)
    {
        $this->isOwner = $isOwner;
    }

    /**
     * @return mixed
     */
    public function getIsOwner()
    {
        return $this->isOwner;
    }

    /**
     * @param $isRestoreAvailable
     */
    public function setIsRestoreAvailable($isRestoreAvailable)
    {
        $this->isRestoreAvailable = $isRestoreAvailable;
    }

    /**
     * @return mixed
     */
    public function getIsRestoreAvailable()
    {
        return $this->isRestoreAvailable;
    }

    /**
     * @param $isTakebackAvailable
     */
    public function setIsTakebackAvailable($isTakebackAvailable)
    {
        $this->isTakebackAvailable = $isTakebackAvailable;
    }

    /**
     * @return mixed
     */
    public function getIsTakebackAvailable()
    {
        return $this->isTakebackAvailable;
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
 * Class Google_CommunityMessage
 */
class Google_CommunityMessage extends Google_Model
{
    /**
     * @var
     */
    public $addedDate;
    /**
     * @var string
     */
    protected $__authorType = 'Google_OrkutAuthorResource';
    /**
     * @var string
     */
    protected $__authorDataType = '';
    /**
     * @var
     */
    public $author;
    /**
     * @var
     */
    public $body;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $isSpam;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__linksType = 'Google_OrkutLinkResource';
    /**
     * @var string
     */
    protected $__linksDataType = 'array';
    /**
     * @var
     */
    public $links;
    /**
     * @var
     */
    public $subject;

    /**
     * @param $addedDate
     */
    public function setAddedDate($addedDate)
    {
        $this->addedDate = $addedDate;
    }

    /**
     * @return mixed
     */
    public function getAddedDate()
    {
        return $this->addedDate;
    }

    /**
     * @param Google_OrkutAuthorResource $author
     */
    public function setAuthor(Google_OrkutAuthorResource $author)
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
     * @param $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
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
     * @param $isSpam
     */
    public function setIsSpam($isSpam)
    {
        $this->isSpam = $isSpam;
    }

    /**
     * @return mixed
     */
    public function getIsSpam()
    {
        return $this->isSpam;
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
     * @param $links
     * @throws Google_Exception
     */
    public function setLinks(/* array(Google_OrkutLinkResource) */
        $links)
    {
        $this->assertIsArray($links, 'Google_OrkutLinkResource', __METHOD__);
        $this->links = $links;
    }

    /**
     * @return mixed
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }
}

/**
 * Class Google_CommunityMessageList
 */
class Google_CommunityMessageList extends Google_Model
{
    /**
     * @var
     */
    public $firstPageToken;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_CommunityMessage';
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
    public $lastPageToken;
    /**
     * @var
     */
    public $nextPageToken;
    /**
     * @var
     */
    public $prevPageToken;

    /**
     * @param $firstPageToken
     */
    public function setFirstPageToken($firstPageToken)
    {
        $this->firstPageToken = $firstPageToken;
    }

    /**
     * @return mixed
     */
    public function getFirstPageToken()
    {
        return $this->firstPageToken;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_CommunityMessage) */
        $items)
    {
        $this->assertIsArray($items, 'Google_CommunityMessage', __METHOD__);
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
     * @param $lastPageToken
     */
    public function setLastPageToken($lastPageToken)
    {
        $this->lastPageToken = $lastPageToken;
    }

    /**
     * @return mixed
     */
    public function getLastPageToken()
    {
        return $this->lastPageToken;
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
}

/**
 * Class Google_CommunityPoll
 */
class Google_CommunityPoll extends Google_Model
{
    /**
     * @var string
     */
    protected $__authorType = 'Google_OrkutAuthorResource';
    /**
     * @var string
     */
    protected $__authorDataType = '';
    /**
     * @var
     */
    public $author;
    /**
     * @var
     */
    public $communityId;
    /**
     * @var
     */
    public $creationTime;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $endingTime;
    /**
     * @var
     */
    public $hasVoted;
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__imageType = 'Google_CommunityPollImage';
    /**
     * @var string
     */
    protected $__imageDataType = '';
    /**
     * @var
     */
    public $image;
    /**
     * @var
     */
    public $isClosed;
    /**
     * @var
     */
    public $isMultipleAnswers;
    /**
     * @var
     */
    public $isOpenForVoting;
    /**
     * @var
     */
    public $isRestricted;
    /**
     * @var
     */
    public $isSpam;
    /**
     * @var
     */
    public $isUsersVotePublic;
    /**
     * @var
     */
    public $isVotingAllowedForNonMembers;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $lastUpdate;
    /**
     * @var string
     */
    protected $__linksType = 'Google_OrkutLinkResource';
    /**
     * @var string
     */
    protected $__linksDataType = 'array';
    /**
     * @var
     */
    public $links;
    /**
     * @var string
     */
    protected $__optionsType = 'Google_OrkutCommunitypolloptionResource';
    /**
     * @var string
     */
    protected $__optionsDataType = 'array';
    /**
     * @var
     */
    public $options;
    /**
     * @var
     */
    public $question;
    /**
     * @var
     */
    public $totalNumberOfVotes;
    /**
     * @var
     */
    public $votedOptions;

    /**
     * @param Google_OrkutAuthorResource $author
     */
    public function setAuthor(Google_OrkutAuthorResource $author)
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
     * @param $communityId
     */
    public function setCommunityId($communityId)
    {
        $this->communityId = $communityId;
    }

    /**
     * @return mixed
     */
    public function getCommunityId()
    {
        return $this->communityId;
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
     * @param $endingTime
     */
    public function setEndingTime($endingTime)
    {
        $this->endingTime = $endingTime;
    }

    /**
     * @return mixed
     */
    public function getEndingTime()
    {
        return $this->endingTime;
    }

    /**
     * @param $hasVoted
     */
    public function setHasVoted($hasVoted)
    {
        $this->hasVoted = $hasVoted;
    }

    /**
     * @return mixed
     */
    public function getHasVoted()
    {
        return $this->hasVoted;
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
     * @param Google_CommunityPollImage $image
     */
    public function setImage(Google_CommunityPollImage $image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param $isClosed
     */
    public function setIsClosed($isClosed)
    {
        $this->isClosed = $isClosed;
    }

    /**
     * @return mixed
     */
    public function getIsClosed()
    {
        return $this->isClosed;
    }

    /**
     * @param $isMultipleAnswers
     */
    public function setIsMultipleAnswers($isMultipleAnswers)
    {
        $this->isMultipleAnswers = $isMultipleAnswers;
    }

    /**
     * @return mixed
     */
    public function getIsMultipleAnswers()
    {
        return $this->isMultipleAnswers;
    }

    /**
     * @param $isOpenForVoting
     */
    public function setIsOpenForVoting($isOpenForVoting)
    {
        $this->isOpenForVoting = $isOpenForVoting;
    }

    /**
     * @return mixed
     */
    public function getIsOpenForVoting()
    {
        return $this->isOpenForVoting;
    }

    /**
     * @param $isRestricted
     */
    public function setIsRestricted($isRestricted)
    {
        $this->isRestricted = $isRestricted;
    }

    /**
     * @return mixed
     */
    public function getIsRestricted()
    {
        return $this->isRestricted;
    }

    /**
     * @param $isSpam
     */
    public function setIsSpam($isSpam)
    {
        $this->isSpam = $isSpam;
    }

    /**
     * @return mixed
     */
    public function getIsSpam()
    {
        return $this->isSpam;
    }

    /**
     * @param $isUsersVotePublic
     */
    public function setIsUsersVotePublic($isUsersVotePublic)
    {
        $this->isUsersVotePublic = $isUsersVotePublic;
    }

    /**
     * @return mixed
     */
    public function getIsUsersVotePublic()
    {
        return $this->isUsersVotePublic;
    }

    /**
     * @param $isVotingAllowedForNonMembers
     */
    public function setIsVotingAllowedForNonMembers($isVotingAllowedForNonMembers)
    {
        $this->isVotingAllowedForNonMembers = $isVotingAllowedForNonMembers;
    }

    /**
     * @return mixed
     */
    public function getIsVotingAllowedForNonMembers()
    {
        return $this->isVotingAllowedForNonMembers;
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
     * @param $lastUpdate
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;
    }

    /**
     * @return mixed
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * @param $links
     * @throws Google_Exception
     */
    public function setLinks(/* array(Google_OrkutLinkResource) */
        $links)
    {
        $this->assertIsArray($links, 'Google_OrkutLinkResource', __METHOD__);
        $this->links = $links;
    }

    /**
     * @return mixed
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param $options
     * @throws Google_Exception
     */
    public function setOptions(/* array(Google_OrkutCommunitypolloptionResource) */
        $options)
    {
        $this->assertIsArray($options, 'Google_OrkutCommunitypolloptionResource', __METHOD__);
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
     * @param $question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    }

    /**
     * @return mixed
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param $totalNumberOfVotes
     */
    public function setTotalNumberOfVotes($totalNumberOfVotes)
    {
        $this->totalNumberOfVotes = $totalNumberOfVotes;
    }

    /**
     * @return mixed
     */
    public function getTotalNumberOfVotes()
    {
        return $this->totalNumberOfVotes;
    }

    /**
     * @param $votedOptions
     * @throws Google_Exception
     */
    public function setVotedOptions(/* array(Google_int) */
        $votedOptions)
    {
        $this->assertIsArray($votedOptions, 'Google_int', __METHOD__);
        $this->votedOptions = $votedOptions;
    }

    /**
     * @return mixed
     */
    public function getVotedOptions()
    {
        return $this->votedOptions;
    }
}

/**
 * Class Google_CommunityPollComment
 */
class Google_CommunityPollComment extends Google_Model
{
    /**
     * @var
     */
    public $addedDate;
    /**
     * @var string
     */
    protected $__authorType = 'Google_OrkutAuthorResource';
    /**
     * @var string
     */
    protected $__authorDataType = '';
    /**
     * @var
     */
    public $author;
    /**
     * @var
     */
    public $body;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $kind;

    /**
     * @param $addedDate
     */
    public function setAddedDate($addedDate)
    {
        $this->addedDate = $addedDate;
    }

    /**
     * @return mixed
     */
    public function getAddedDate()
    {
        return $this->addedDate;
    }

    /**
     * @param Google_OrkutAuthorResource $author
     */
    public function setAuthor(Google_OrkutAuthorResource $author)
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
     * @param $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
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
}

/**
 * Class Google_CommunityPollCommentList
 */
class Google_CommunityPollCommentList extends Google_Model
{
    /**
     * @var
     */
    public $firstPageToken;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_CommunityPollComment';
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
    public $lastPageToken;
    /**
     * @var
     */
    public $nextPageToken;
    /**
     * @var
     */
    public $prevPageToken;

    /**
     * @param $firstPageToken
     */
    public function setFirstPageToken($firstPageToken)
    {
        $this->firstPageToken = $firstPageToken;
    }

    /**
     * @return mixed
     */
    public function getFirstPageToken()
    {
        return $this->firstPageToken;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_CommunityPollComment) */
        $items)
    {
        $this->assertIsArray($items, 'Google_CommunityPollComment', __METHOD__);
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
     * @param $lastPageToken
     */
    public function setLastPageToken($lastPageToken)
    {
        $this->lastPageToken = $lastPageToken;
    }

    /**
     * @return mixed
     */
    public function getLastPageToken()
    {
        return $this->lastPageToken;
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
}

/**
 * Class Google_CommunityPollImage
 */
class Google_CommunityPollImage extends Google_Model
{
    /**
     * @var
     */
    public $url;

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
 * Class Google_CommunityPollList
 */
class Google_CommunityPollList extends Google_Model
{
    /**
     * @var
     */
    public $firstPageToken;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_CommunityPoll';
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
    public $lastPageToken;
    /**
     * @var
     */
    public $nextPageToken;
    /**
     * @var
     */
    public $prevPageToken;

    /**
     * @param $firstPageToken
     */
    public function setFirstPageToken($firstPageToken)
    {
        $this->firstPageToken = $firstPageToken;
    }

    /**
     * @return mixed
     */
    public function getFirstPageToken()
    {
        return $this->firstPageToken;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_CommunityPoll) */
        $items)
    {
        $this->assertIsArray($items, 'Google_CommunityPoll', __METHOD__);
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
     * @param $lastPageToken
     */
    public function setLastPageToken($lastPageToken)
    {
        $this->lastPageToken = $lastPageToken;
    }

    /**
     * @return mixed
     */
    public function getLastPageToken()
    {
        return $this->lastPageToken;
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
}

/**
 * Class Google_CommunityPollVote
 */
class Google_CommunityPollVote extends Google_Model
{
    /**
     * @var
     */
    public $isVotevisible;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $optionIds;

    /**
     * @param $isVotevisible
     */
    public function setIsVotevisible($isVotevisible)
    {
        $this->isVotevisible = $isVotevisible;
    }

    /**
     * @return mixed
     */
    public function getIsVotevisible()
    {
        return $this->isVotevisible;
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
     * @param $optionIds
     * @throws Google_Exception
     */
    public function setOptionIds(/* array(Google_int) */
        $optionIds)
    {
        $this->assertIsArray($optionIds, 'Google_int', __METHOD__);
        $this->optionIds = $optionIds;
    }

    /**
     * @return mixed
     */
    public function getOptionIds()
    {
        return $this->optionIds;
    }
}

/**
 * Class Google_CommunityTopic
 */
class Google_CommunityTopic extends Google_Model
{
    /**
     * @var string
     */
    protected $__authorType = 'Google_OrkutAuthorResource';
    /**
     * @var string
     */
    protected $__authorDataType = '';
    /**
     * @var
     */
    public $author;
    /**
     * @var
     */
    public $body;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $isClosed;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $lastUpdate;
    /**
     * @var
     */
    public $latestMessageSnippet;
    /**
     * @var string
     */
    protected $__linksType = 'Google_OrkutLinkResource';
    /**
     * @var string
     */
    protected $__linksDataType = 'array';
    /**
     * @var
     */
    public $links;
    /**
     * @var string
     */
    protected $__messagesType = 'Google_CommunityMessage';
    /**
     * @var string
     */
    protected $__messagesDataType = 'array';
    /**
     * @var
     */
    public $messages;
    /**
     * @var
     */
    public $numberOfReplies;
    /**
     * @var
     */
    public $title;

    /**
     * @param Google_OrkutAuthorResource $author
     */
    public function setAuthor(Google_OrkutAuthorResource $author)
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
     * @param $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
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
     * @param $isClosed
     */
    public function setIsClosed($isClosed)
    {
        $this->isClosed = $isClosed;
    }

    /**
     * @return mixed
     */
    public function getIsClosed()
    {
        return $this->isClosed;
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
     * @param $lastUpdate
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;
    }

    /**
     * @return mixed
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * @param $latestMessageSnippet
     */
    public function setLatestMessageSnippet($latestMessageSnippet)
    {
        $this->latestMessageSnippet = $latestMessageSnippet;
    }

    /**
     * @return mixed
     */
    public function getLatestMessageSnippet()
    {
        return $this->latestMessageSnippet;
    }

    /**
     * @param $links
     * @throws Google_Exception
     */
    public function setLinks(/* array(Google_OrkutLinkResource) */
        $links)
    {
        $this->assertIsArray($links, 'Google_OrkutLinkResource', __METHOD__);
        $this->links = $links;
    }

    /**
     * @return mixed
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param $messages
     * @throws Google_Exception
     */
    public function setMessages(/* array(Google_CommunityMessage) */
        $messages)
    {
        $this->assertIsArray($messages, 'Google_CommunityMessage', __METHOD__);
        $this->messages = $messages;
    }

    /**
     * @return mixed
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @param $numberOfReplies
     */
    public function setNumberOfReplies($numberOfReplies)
    {
        $this->numberOfReplies = $numberOfReplies;
    }

    /**
     * @return mixed
     */
    public function getNumberOfReplies()
    {
        return $this->numberOfReplies;
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
 * Class Google_CommunityTopicList
 */
class Google_CommunityTopicList extends Google_Model
{
    /**
     * @var
     */
    public $firstPageToken;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_CommunityTopic';
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
    public $lastPageToken;
    /**
     * @var
     */
    public $nextPageToken;
    /**
     * @var
     */
    public $prevPageToken;

    /**
     * @param $firstPageToken
     */
    public function setFirstPageToken($firstPageToken)
    {
        $this->firstPageToken = $firstPageToken;
    }

    /**
     * @return mixed
     */
    public function getFirstPageToken()
    {
        return $this->firstPageToken;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_CommunityTopic) */
        $items)
    {
        $this->assertIsArray($items, 'Google_CommunityTopic', __METHOD__);
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
     * @param $lastPageToken
     */
    public function setLastPageToken($lastPageToken)
    {
        $this->lastPageToken = $lastPageToken;
    }

    /**
     * @return mixed
     */
    public function getLastPageToken()
    {
        return $this->lastPageToken;
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
}

/**
 * Class Google_Counters
 */
class Google_Counters extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_OrkutCounterResource';
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
    public function setItems(/* array(Google_OrkutCounterResource) */
        $items)
    {
        $this->assertIsArray($items, 'Google_OrkutCounterResource', __METHOD__);
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
 * Class Google_OrkutActivityobjectsResource
 */
class Google_OrkutActivityobjectsResource extends Google_Model
{
    /**
     * @var string
     */
    protected $__communityType = 'Google_Community';
    /**
     * @var string
     */
    protected $__communityDataType = '';
    /**
     * @var
     */
    public $community;
    /**
     * @var
     */
    public $content;
    /**
     * @var
     */
    public $displayName;
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__linksType = 'Google_OrkutLinkResource';
    /**
     * @var string
     */
    protected $__linksDataType = 'array';
    /**
     * @var
     */
    public $links;
    /**
     * @var
     */
    public $objectType;
    /**
     * @var string
     */
    protected $__personType = 'Google_OrkutActivitypersonResource';
    /**
     * @var string
     */
    protected $__personDataType = '';
    /**
     * @var
     */
    public $person;

    /**
     * @param Google_Community $community
     */
    public function setCommunity(Google_Community $community)
    {
        $this->community = $community;
    }

    /**
     * @return mixed
     */
    public function getCommunity()
    {
        return $this->community;
    }

    /**
     * @param $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
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
     * @param $links
     * @throws Google_Exception
     */
    public function setLinks(/* array(Google_OrkutLinkResource) */
        $links)
    {
        $this->assertIsArray($links, 'Google_OrkutLinkResource', __METHOD__);
        $this->links = $links;
    }

    /**
     * @return mixed
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param $objectType
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    }

    /**
     * @return mixed
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * @param Google_OrkutActivitypersonResource $person
     */
    public function setPerson(Google_OrkutActivitypersonResource $person)
    {
        $this->person = $person;
    }

    /**
     * @return mixed
     */
    public function getPerson()
    {
        return $this->person;
    }
}

/**
 * Class Google_OrkutActivitypersonResource
 */
class Google_OrkutActivitypersonResource extends Google_Model
{
    /**
     * @var
     */
    public $birthday;
    /**
     * @var
     */
    public $gender;
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__imageType = 'Google_OrkutActivitypersonResourceImage';
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
    protected $__nameType = 'Google_OrkutActivitypersonResourceName';
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
    public $url;

    /**
     * @param $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
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
     * @param Google_OrkutActivitypersonResourceImage $image
     */
    public function setImage(Google_OrkutActivitypersonResourceImage $image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param Google_OrkutActivitypersonResourceName $name
     */
    public function setName(Google_OrkutActivitypersonResourceName $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
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
 * Class Google_OrkutActivitypersonResourceImage
 */
class Google_OrkutActivitypersonResourceImage extends Google_Model
{
    /**
     * @var
     */
    public $url;

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
 * Class Google_OrkutActivitypersonResourceName
 */
class Google_OrkutActivitypersonResourceName extends Google_Model
{
    /**
     * @var
     */
    public $familyName;
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
 * Class Google_OrkutAuthorResource
 */
class Google_OrkutAuthorResource extends Google_Model
{
    /**
     * @var
     */
    public $displayName;
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__imageType = 'Google_OrkutAuthorResourceImage';
    /**
     * @var string
     */
    protected $__imageDataType = '';
    /**
     * @var
     */
    public $image;
    /**
     * @var
     */
    public $url;

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
     * @param Google_OrkutAuthorResourceImage $image
     */
    public function setImage(Google_OrkutAuthorResourceImage $image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
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
 * Class Google_OrkutAuthorResourceImage
 */
class Google_OrkutAuthorResourceImage extends Google_Model
{
    /**
     * @var
     */
    public $url;

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
 * Class Google_OrkutCommunitypolloptionResource
 */
class Google_OrkutCommunitypolloptionResource extends Google_Model
{
    /**
     * @var
     */
    public $description;
    /**
     * @var string
     */
    protected $__imageType = 'Google_OrkutCommunitypolloptionResourceImage';
    /**
     * @var string
     */
    protected $__imageDataType = '';
    /**
     * @var
     */
    public $image;
    /**
     * @var
     */
    public $numberOfVotes;
    /**
     * @var
     */
    public $optionId;

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
     * @param Google_OrkutCommunitypolloptionResourceImage $image
     */
    public function setImage(Google_OrkutCommunitypolloptionResourceImage $image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param $numberOfVotes
     */
    public function setNumberOfVotes($numberOfVotes)
    {
        $this->numberOfVotes = $numberOfVotes;
    }

    /**
     * @return mixed
     */
    public function getNumberOfVotes()
    {
        return $this->numberOfVotes;
    }

    /**
     * @param $optionId
     */
    public function setOptionId($optionId)
    {
        $this->optionId = $optionId;
    }

    /**
     * @return mixed
     */
    public function getOptionId()
    {
        return $this->optionId;
    }
}

/**
 * Class Google_OrkutCommunitypolloptionResourceImage
 */
class Google_OrkutCommunitypolloptionResourceImage extends Google_Model
{
    /**
     * @var
     */
    public $url;

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
 * Class Google_OrkutCounterResource
 */
class Google_OrkutCounterResource extends Google_Model
{
    /**
     * @var string
     */
    protected $__linkType = 'Google_OrkutLinkResource';
    /**
     * @var string
     */
    protected $__linkDataType = '';
    /**
     * @var
     */
    public $link;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $total;

    /**
     * @param Google_OrkutLinkResource $link
     */
    public function setLink(Google_OrkutLinkResource $link)
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
     * @param $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }
}

/**
 * Class Google_OrkutLinkResource
 */
class Google_OrkutLinkResource extends Google_Model
{
    /**
     * @var
     */
    public $href;
    /**
     * @var
     */
    public $rel;
    /**
     * @var
     */
    public $title;
    /**
     * @var
     */
    public $type;

    /**
     * @param $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }

    /**
     * @return mixed
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * @param $rel
     */
    public function setRel($rel)
    {
        $this->rel = $rel;
    }

    /**
     * @return mixed
     */
    public function getRel()
    {
        return $this->rel;
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
 * Class Google_Visibility
 */
class Google_Visibility extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__linksType = 'Google_OrkutLinkResource';
    /**
     * @var string
     */
    protected $__linksDataType = 'array';
    /**
     * @var
     */
    public $links;
    /**
     * @var
     */
    public $visibility;

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
     * @param $links
     * @throws Google_Exception
     */
    public function setLinks(/* array(Google_OrkutLinkResource) */
        $links)
    {
        $this->assertIsArray($links, 'Google_OrkutLinkResource', __METHOD__);
        $this->links = $links;
    }

    /**
     * @return mixed
     */
    public function getLinks()
    {
        return $this->links;
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
