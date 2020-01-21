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
 * The "votes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $moderatorService = new Google_ModeratorService(...);
 *   $votes = $moderatorService->votes;
 *  </code>
 */
class Google_VotesServiceResource extends Google_ServiceResource
{


    /**
     * Inserts a new vote by the authenticated user for the specified submission within the specified
     * series. (votes.insert)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $submissionId The decimal ID of the Submission within the Series.
     * @param Google_Vote $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Vote
     * @throws Google_Exception
     * @opt_param string unauthToken User identifier for unauthenticated usage mode
     */
    public function insert($seriesId, $submissionId, Google_Vote $postBody, $optParams = [])
    {
        $params = ['seriesId' => $seriesId, 'submissionId' => $submissionId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Vote($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates the votes by the authenticated user for the specified submission within the specified
     * series. This method supports patch semantics. (votes.patch)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $submissionId The decimal ID of the Submission within the Series.
     * @param Google_Vote $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Vote
     * @throws Google_Exception
     * @opt_param string userId
     * @opt_param string unauthToken User identifier for unauthenticated usage mode
     */
    public function patch($seriesId, $submissionId, Google_Vote $postBody, $optParams = [])
    {
        $params = ['seriesId' => $seriesId, 'submissionId' => $submissionId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Vote($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists the votes by the authenticated user for the given series. (votes.list)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param array $optParams Optional parameters.
     * @return Google_VoteList
     * @throws Google_Exception
     * @opt_param string max-results Maximum number of results to return.
     * @opt_param string start-index Index of the first result to be retrieved.
     */
    public function listVotes($seriesId, $optParams = [])
    {
        $params = ['seriesId' => $seriesId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_VoteList($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates the votes by the authenticated user for the specified submission within the specified
     * series. (votes.update)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $submissionId The decimal ID of the Submission within the Series.
     * @param Google_Vote $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Vote
     * @throws Google_Exception
     * @opt_param string userId
     * @opt_param string unauthToken User identifier for unauthenticated usage mode
     */
    public function update($seriesId, $submissionId, Google_Vote $postBody, $optParams = [])
    {
        $params = ['seriesId' => $seriesId, 'submissionId' => $submissionId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Vote($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns the votes by the authenticated user for the specified submission within the specified
     * series. (votes.get)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $submissionId The decimal ID of the Submission within the Series.
     * @param array $optParams Optional parameters.
     * @return Google_Vote
     * @throws Google_Exception
     * @opt_param string userId
     * @opt_param string unauthToken User identifier for unauthenticated usage mode
     */
    public function get($seriesId, $submissionId, $optParams = [])
    {
        $params = ['seriesId' => $seriesId, 'submissionId' => $submissionId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Vote($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "responses" collection of methods.
 * Typical usage is:
 *  <code>
 *   $moderatorService = new Google_ModeratorService(...);
 *   $responses = $moderatorService->responses;
 *  </code>
 */
class Google_ResponsesServiceResource extends Google_ServiceResource
{


    /**
     * Inserts a response for the specified submission in the specified topic within the specified
     * series. (responses.insert)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $topicId The decimal ID of the Topic within the Series.
     * @param string $parentSubmissionId The decimal ID of the parent Submission within the Series.
     * @param Google_Submission $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Submission
     * @throws Google_Exception
     * @opt_param string unauthToken User identifier for unauthenticated usage mode
     * @opt_param bool anonymous Set to true to mark the new submission as anonymous.
     */
    public function insert($seriesId, $topicId, $parentSubmissionId, Google_Submission $postBody, $optParams = [])
    {
        $params = ['seriesId' => $seriesId, 'topicId' => $topicId, 'parentSubmissionId' => $parentSubmissionId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Submission($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists or searches the responses for the specified submission within the specified series and
     * returns the search results. (responses.list)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $submissionId The decimal ID of the Submission within the Series.
     * @param array $optParams Optional parameters.
     * @return Google_SubmissionList
     * @throws Google_Exception
     * @opt_param string max-results Maximum number of results to return.
     * @opt_param string sort Sort order.
     * @opt_param string author Restricts the results to submissions by a specific author.
     * @opt_param string start-index Index of the first result to be retrieved.
     * @opt_param string q Search query.
     * @opt_param bool hasAttachedVideo Specifies whether to restrict to submissions that have videos attached.
     */
    public function listResponses($seriesId, $submissionId, $optParams = [])
    {
        $params = ['seriesId' => $seriesId, 'submissionId' => $submissionId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_SubmissionList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "tags" collection of methods.
 * Typical usage is:
 *  <code>
 *   $moderatorService = new Google_ModeratorService(...);
 *   $tags = $moderatorService->tags;
 *  </code>
 */
class Google_TagsServiceResource extends Google_ServiceResource
{


    /**
     * Inserts a new tag for the specified submission within the specified series. (tags.insert)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $submissionId The decimal ID of the Submission within the Series.
     * @param Google_Tag $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Tag
     * @throws Google_Exception
     */
    public function insert($seriesId, $submissionId, Google_Tag $postBody, $optParams = [])
    {
        $params = ['seriesId' => $seriesId, 'submissionId' => $submissionId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Tag($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists all tags for the specified submission within the specified series. (tags.list)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $submissionId The decimal ID of the Submission within the Series.
     * @param array $optParams Optional parameters.
     * @return Google_TagList
     * @throws Google_Exception
     */
    public function listTags($seriesId, $submissionId, $optParams = [])
    {
        $params = ['seriesId' => $seriesId, 'submissionId' => $submissionId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_TagList($data);
        } else {
            return $data;
        }
    }

    /**
     * Deletes the specified tag from the specified submission within the specified series.
     * (tags.delete)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $submissionId The decimal ID of the Submission within the Series.
     * @param string $tagId
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($seriesId, $submissionId, $tagId, $optParams = [])
    {
        $params = ['seriesId' => $seriesId, 'submissionId' => $submissionId, 'tagId' => $tagId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }
}

/**
 * The "series" collection of methods.
 * Typical usage is:
 *  <code>
 *   $moderatorService = new Google_ModeratorService(...);
 *   $series = $moderatorService->series;
 *  </code>
 */
class Google_SeriesServiceResource extends Google_ServiceResource
{


    /**
     * Inserts a new series. (series.insert)
     *
     * @param Google_Series $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Series
     * @throws Google_Exception
     */
    public function insert(Google_Series $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Series($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates the specified series. This method supports patch semantics. (series.patch)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param Google_Series $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Series
     * @throws Google_Exception
     */
    public function patch($seriesId, Google_Series $postBody, $optParams = [])
    {
        $params = ['seriesId' => $seriesId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Series($data);
        } else {
            return $data;
        }
    }

    /**
     * Searches the series and returns the search results. (series.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_SeriesList
     * @throws Google_Exception
     * @opt_param string max-results Maximum number of results to return.
     * @opt_param string q Search query.
     * @opt_param string start-index Index of the first result to be retrieved.
     */
    public function listSeries($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_SeriesList($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates the specified series. (series.update)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param Google_Series $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Series
     * @throws Google_Exception
     */
    public function update($seriesId, Google_Series $postBody, $optParams = [])
    {
        $params = ['seriesId' => $seriesId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Series($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns the specified series. (series.get)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param array $optParams Optional parameters.
     * @return Google_Series
     * @throws Google_Exception
     */
    public function get($seriesId, $optParams = [])
    {
        $params = ['seriesId' => $seriesId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Series($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "submissions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $moderatorService = new Google_ModeratorService(...);
 *   $submissions = $moderatorService->submissions;
 *  </code>
 */
class Google_SeriesSubmissionsServiceResource extends Google_ServiceResource
{


    /**
     * Searches the submissions for the specified series and returns the search results.
     * (submissions.list)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param array $optParams Optional parameters.
     * @return Google_SubmissionList
     * @throws Google_Exception
     * @opt_param string lang The language code for the language the client prefers results in.
     * @opt_param string max-results Maximum number of results to return.
     * @opt_param bool includeVotes Specifies whether to include the current user's vote
     * @opt_param string start-index Index of the first result to be retrieved.
     * @opt_param string author Restricts the results to submissions by a specific author.
     * @opt_param string sort Sort order.
     * @opt_param string q Search query.
     * @opt_param bool hasAttachedVideo Specifies whether to restrict to submissions that have videos attached.
     */
    public function listSeriesSubmissions($seriesId, $optParams = [])
    {
        $params = ['seriesId' => $seriesId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_SubmissionList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "responses" collection of methods.
 * Typical usage is:
 *  <code>
 *   $moderatorService = new Google_ModeratorService(...);
 *   $responses = $moderatorService->responses;
 *  </code>
 */
class Google_SeriesResponsesServiceResource extends Google_ServiceResource
{


    /**
     * Searches the responses for the specified series and returns the search results. (responses.list)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param array $optParams Optional parameters.
     * @return Google_SeriesList
     * @throws Google_Exception
     * @opt_param string max-results Maximum number of results to return.
     * @opt_param string sort Sort order.
     * @opt_param string author Restricts the results to submissions by a specific author.
     * @opt_param string start-index Index of the first result to be retrieved.
     * @opt_param string q Search query.
     * @opt_param bool hasAttachedVideo Specifies whether to restrict to submissions that have videos attached.
     */
    public function listSeriesResponses($seriesId, $optParams = [])
    {
        $params = ['seriesId' => $seriesId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_SeriesList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "topics" collection of methods.
 * Typical usage is:
 *  <code>
 *   $moderatorService = new Google_ModeratorService(...);
 *   $topics = $moderatorService->topics;
 *  </code>
 */
class Google_TopicsServiceResource extends Google_ServiceResource
{


    /**
     * Inserts a new topic into the specified series. (topics.insert)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param Google_Topic $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Topic
     * @throws Google_Exception
     */
    public function insert($seriesId, Google_Topic $postBody, $optParams = [])
    {
        $params = ['seriesId' => $seriesId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Topic($data);
        } else {
            return $data;
        }
    }

    /**
     * Searches the topics within the specified series and returns the search results. (topics.list)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param array $optParams Optional parameters.
     * @return Google_TopicList
     * @throws Google_Exception
     * @opt_param string max-results Maximum number of results to return.
     * @opt_param string q Search query.
     * @opt_param string start-index Index of the first result to be retrieved.
     * @opt_param string mode
     */
    public function listTopics($seriesId, $optParams = [])
    {
        $params = ['seriesId' => $seriesId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_TopicList($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates the specified topic within the specified series. (topics.update)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $topicId The decimal ID of the Topic within the Series.
     * @param Google_Topic $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Topic
     * @throws Google_Exception
     */
    public function update($seriesId, $topicId, Google_Topic $postBody, $optParams = [])
    {
        $params = ['seriesId' => $seriesId, 'topicId' => $topicId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Topic($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns the specified topic from the specified series. (topics.get)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $topicId The decimal ID of the Topic within the Series.
     * @param array $optParams Optional parameters.
     * @return Google_Topic
     * @throws Google_Exception
     */
    public function get($seriesId, $topicId, $optParams = [])
    {
        $params = ['seriesId' => $seriesId, 'topicId' => $topicId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Topic($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "submissions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $moderatorService = new Google_ModeratorService(...);
 *   $submissions = $moderatorService->submissions;
 *  </code>
 */
class Google_TopicsSubmissionsServiceResource extends Google_ServiceResource
{


    /**
     * Searches the submissions for the specified topic within the specified series and returns the
     * search results. (submissions.list)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $topicId The decimal ID of the Topic within the Series.
     * @param array $optParams Optional parameters.
     * @return Google_SubmissionList
     * @throws Google_Exception
     * @opt_param string max-results Maximum number of results to return.
     * @opt_param bool includeVotes Specifies whether to include the current user's vote
     * @opt_param string start-index Index of the first result to be retrieved.
     * @opt_param string author Restricts the results to submissions by a specific author.
     * @opt_param string sort Sort order.
     * @opt_param string q Search query.
     * @opt_param bool hasAttachedVideo Specifies whether to restrict to submissions that have videos attached.
     */
    public function listTopicsSubmissions($seriesId, $topicId, $optParams = [])
    {
        $params = ['seriesId' => $seriesId, 'topicId' => $topicId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_SubmissionList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "global" collection of methods.
 * Typical usage is:
 *  <code>
 *   $moderatorService = new Google_ModeratorService(...);
 *   $global = $moderatorService->global;
 *  </code>
 */
class Google_ModeratorGlobalServiceResource extends Google_ServiceResource
{


}

/**
 * The "series" collection of methods.
 * Typical usage is:
 *  <code>
 *   $moderatorService = new Google_ModeratorService(...);
 *   $series = $moderatorService->series;
 *  </code>
 */
class Google_ModeratorGlobalSeriesServiceResource extends Google_ServiceResource
{


    /**
     * Searches the public series and returns the search results. (series.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_SeriesList
     * @throws Google_Exception
     * @opt_param string max-results Maximum number of results to return.
     * @opt_param string q Search query.
     * @opt_param string start-index Index of the first result to be retrieved.
     */
    public function listModeratorGlobalSeries($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_SeriesList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "profiles" collection of methods.
 * Typical usage is:
 *  <code>
 *   $moderatorService = new Google_ModeratorService(...);
 *   $profiles = $moderatorService->profiles;
 *  </code>
 */
class Google_ProfilesServiceResource extends Google_ServiceResource
{


    /**
     * Updates the profile information for the authenticated user. This method supports patch semantics.
     * (profiles.patch)
     *
     * @param Google_Profile $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Profile
     * @throws Google_Exception
     */
    public function patch(Google_Profile $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Profile($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates the profile information for the authenticated user. (profiles.update)
     *
     * @param Google_Profile $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Profile
     * @throws Google_Exception
     */
    public function update(Google_Profile $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Profile($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns the profile information for the authenticated user. (profiles.get)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Profile
     * @throws Google_Exception
     */
    public function get($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Profile($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "featured" collection of methods.
 * Typical usage is:
 *  <code>
 *   $moderatorService = new Google_ModeratorService(...);
 *   $featured = $moderatorService->featured;
 *  </code>
 */
class Google_FeaturedServiceResource extends Google_ServiceResource
{


}

/**
 * The "series" collection of methods.
 * Typical usage is:
 *  <code>
 *   $moderatorService = new Google_ModeratorService(...);
 *   $series = $moderatorService->series;
 *  </code>
 */
class Google_FeaturedSeriesServiceResource extends Google_ServiceResource
{


    /**
     * Lists the featured series. (series.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_SeriesList
     * @throws Google_Exception
     */
    public function listFeaturedSeries($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_SeriesList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "myrecent" collection of methods.
 * Typical usage is:
 *  <code>
 *   $moderatorService = new Google_ModeratorService(...);
 *   $myrecent = $moderatorService->myrecent;
 *  </code>
 */
class Google_MyrecentServiceResource extends Google_ServiceResource
{


}

/**
 * The "series" collection of methods.
 * Typical usage is:
 *  <code>
 *   $moderatorService = new Google_ModeratorService(...);
 *   $series = $moderatorService->series;
 *  </code>
 */
class Google_MyrecentSeriesServiceResource extends Google_ServiceResource
{


    /**
     * Lists the series the authenticated user has visited. (series.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_SeriesList
     * @throws Google_Exception
     */
    public function listMyrecentSeries($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_SeriesList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "my" collection of methods.
 * Typical usage is:
 *  <code>
 *   $moderatorService = new Google_ModeratorService(...);
 *   $my = $moderatorService->my;
 *  </code>
 */
class Google_MyServiceResource extends Google_ServiceResource
{


}

/**
 * The "series" collection of methods.
 * Typical usage is:
 *  <code>
 *   $moderatorService = new Google_ModeratorService(...);
 *   $series = $moderatorService->series;
 *  </code>
 */
class Google_MySeriesServiceResource extends Google_ServiceResource
{


    /**
     * Lists all series created by the authenticated user. (series.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_SeriesList
     * @throws Google_Exception
     */
    public function listMySeries($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_SeriesList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "submissions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $moderatorService = new Google_ModeratorService(...);
 *   $submissions = $moderatorService->submissions;
 *  </code>
 */
class Google_SubmissionsServiceResource extends Google_ServiceResource
{


    /**
     * Inserts a new submission in the specified topic within the specified series. (submissions.insert)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $topicId The decimal ID of the Topic within the Series.
     * @param Google_Submission $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Submission
     * @throws Google_Exception
     * @opt_param string unauthToken User identifier for unauthenticated usage mode
     * @opt_param bool anonymous Set to true to mark the new submission as anonymous.
     */
    public function insert($seriesId, $topicId, Google_Submission $postBody, $optParams = [])
    {
        $params = ['seriesId' => $seriesId, 'topicId' => $topicId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Submission($data);
        } else {
            return $data;
        }
    }

    /**
     * Returns the specified submission within the specified series. (submissions.get)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $submissionId The decimal ID of the Submission within the Series.
     * @param array $optParams Optional parameters.
     * @return Google_Submission
     * @throws Google_Exception
     * @opt_param string lang The language code for the language the client prefers results in.
     * @opt_param bool includeVotes Specifies whether to include the current user's vote
     */
    public function get($seriesId, $submissionId, $optParams = [])
    {
        $params = ['seriesId' => $seriesId, 'submissionId' => $submissionId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Submission($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Moderator (v1).
 *
 * <p>
 * Moderator API
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="http://code.google.com/apis/moderator/v1/using_rest.html" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_ModeratorService extends Google_Service
{
    /**
     * @var Google_VotesServiceResource
     */
    public $votes;
    /**
     * @var Google_ResponsesServiceResource
     */
    public $responses;
    /**
     * @var Google_TagsServiceResource
     */
    public $tags;
    /**
     * @var Google_SeriesServiceResource
     */
    public $series;
    /**
     * @var Google_SeriesSubmissionsServiceResource
     */
    public $series_submissions;
    /**
     * @var Google_SeriesResponsesServiceResource
     */
    public $series_responses;
    /**
     * @var Google_TopicsServiceResource
     */
    public $topics;
    /**
     * @var Google_TopicsSubmissionsServiceResource
     */
    public $topics_submissions;
    /**
     * @var Google_ModeratorGlobalSeriesServiceResource
     */
    public $global_series;
    /**
     * @var Google_ProfilesServiceResource
     */
    public $profiles;
    /**
     * @var Google_FeaturedSeriesServiceResource
     */
    public $featured_series;
    /**
     * @var Google_MyrecentSeriesServiceResource
     */
    public $myrecent_series;
    /**
     * @var Google_MySeriesServiceResource
     */
    public $my_series;
    /**
     * @var Google_SubmissionsServiceResource
     */
    public $submissions;

    /**
     * Constructs the internal representation of the Moderator service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'moderator/v1/';
        $this->version = 'v1';
        $this->serviceName = 'moderator';

        $client->addService($this->serviceName, $this->version);
        $this->votes = new Google_VotesServiceResource($this, $this->serviceName, 'votes', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "unauthToken": {"type": "string", "location": "query"}, "submissionId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "request": {"$ref": "Vote"}, "response": {"$ref": "Vote"}, "httpMethod": "POST", "path": "series/{seriesId}/submissions/{submissionId}/votes/@me", "id": "moderator.votes.insert"}, "patch": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "userId": {"type": "string", "location": "query"}, "unauthToken": {"type": "string", "location": "query"}, "submissionId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "request": {"$ref": "Vote"}, "response": {"$ref": "Vote"}, "httpMethod": "PATCH", "path": "series/{seriesId}/submissions/{submissionId}/votes/@me", "id": "moderator.votes.patch"}, "list": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"max-results": {"type": "integer", "location": "query", "format": "uint32"}, "seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "start-index": {"type": "integer", "location": "query", "format": "uint32"}}, "id": "moderator.votes.list", "httpMethod": "GET", "path": "series/{seriesId}/votes/@me", "response": {"$ref": "VoteList"}}, "update": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "userId": {"type": "string", "location": "query"}, "unauthToken": {"type": "string", "location": "query"}, "submissionId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "request": {"$ref": "Vote"}, "response": {"$ref": "Vote"}, "httpMethod": "PUT", "path": "series/{seriesId}/submissions/{submissionId}/votes/@me", "id": "moderator.votes.update"}, "get": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "userId": {"type": "string", "location": "query"}, "unauthToken": {"type": "string", "location": "query"}, "submissionId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "id": "moderator.votes.get", "httpMethod": "GET", "path": "series/{seriesId}/submissions/{submissionId}/votes/@me", "response": {"$ref": "Vote"}}}}', true));
        $this->responses = new Google_ResponsesServiceResource($this, $this->serviceName, 'responses', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "parentSubmissionId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "unauthToken": {"type": "string", "location": "query"}, "anonymous": {"type": "boolean", "location": "query"}, "topicId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "request": {"$ref": "Submission"}, "response": {"$ref": "Submission"}, "httpMethod": "POST", "path": "series/{seriesId}/topics/{topicId}/submissions/{parentSubmissionId}/responses", "id": "moderator.responses.insert"}, "list": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"max-results": {"type": "integer", "location": "query", "format": "uint32"}, "sort": {"type": "string", "location": "query"}, "seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "author": {"type": "string", "location": "query"}, "start-index": {"type": "integer", "location": "query", "format": "uint32"}, "submissionId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "q": {"type": "string", "location": "query"}, "hasAttachedVideo": {"type": "boolean", "location": "query"}}, "id": "moderator.responses.list", "httpMethod": "GET", "path": "series/{seriesId}/submissions/{submissionId}/responses", "response": {"$ref": "SubmissionList"}}}}', true));
        $this->tags = new Google_TagsServiceResource($this, $this->serviceName, 'tags', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "submissionId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "request": {"$ref": "Tag"}, "response": {"$ref": "Tag"}, "httpMethod": "POST", "path": "series/{seriesId}/submissions/{submissionId}/tags", "id": "moderator.tags.insert"}, "list": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "submissionId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "id": "moderator.tags.list", "httpMethod": "GET", "path": "series/{seriesId}/submissions/{submissionId}/tags", "response": {"$ref": "TagList"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/moderator"], "path": "series/{seriesId}/submissions/{submissionId}/tags/{tagId}", "id": "moderator.tags.delete", "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "tagId": {"required": true, "type": "string", "location": "path"}, "submissionId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "httpMethod": "DELETE"}}}', true));
        $this->series = new Google_SeriesServiceResource($this, $this->serviceName, 'series', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/moderator"], "request": {"$ref": "Series"}, "response": {"$ref": "Series"}, "httpMethod": "POST", "path": "series", "id": "moderator.series.insert"}, "patch": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "request": {"$ref": "Series"}, "response": {"$ref": "Series"}, "httpMethod": "PATCH", "path": "series/{seriesId}", "id": "moderator.series.patch"}, "list": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"max-results": {"type": "integer", "location": "query", "format": "uint32"}, "q": {"type": "string", "location": "query"}, "start-index": {"type": "integer", "location": "query", "format": "uint32"}}, "response": {"$ref": "SeriesList"}, "httpMethod": "GET", "path": "series", "id": "moderator.series.list"}, "update": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "request": {"$ref": "Series"}, "response": {"$ref": "Series"}, "httpMethod": "PUT", "path": "series/{seriesId}", "id": "moderator.series.update"}, "get": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "id": "moderator.series.get", "httpMethod": "GET", "path": "series/{seriesId}", "response": {"$ref": "Series"}}}}', true));
        $this->series_submissions = new Google_SeriesSubmissionsServiceResource($this, $this->serviceName, 'submissions', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"lang": {"type": "string", "location": "query"}, "max-results": {"type": "integer", "location": "query", "format": "uint32"}, "seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "includeVotes": {"type": "boolean", "location": "query"}, "start-index": {"type": "integer", "location": "query", "format": "uint32"}, "author": {"type": "string", "location": "query"}, "sort": {"type": "string", "location": "query"}, "q": {"type": "string", "location": "query"}, "hasAttachedVideo": {"type": "boolean", "location": "query"}}, "id": "moderator.series.submissions.list", "httpMethod": "GET", "path": "series/{seriesId}/submissions", "response": {"$ref": "SubmissionList"}}}}', true));
        $this->series_responses = new Google_SeriesResponsesServiceResource($this, $this->serviceName, 'responses', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"max-results": {"type": "integer", "location": "query", "format": "uint32"}, "sort": {"type": "string", "location": "query"}, "seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "author": {"type": "string", "location": "query"}, "start-index": {"type": "integer", "location": "query", "format": "uint32"}, "q": {"type": "string", "location": "query"}, "hasAttachedVideo": {"type": "boolean", "location": "query"}}, "id": "moderator.series.responses.list", "httpMethod": "GET", "path": "series/{seriesId}/responses", "response": {"$ref": "SeriesList"}}}}', true));
        $this->topics = new Google_TopicsServiceResource($this, $this->serviceName, 'topics', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "request": {"$ref": "Topic"}, "response": {"$ref": "Topic"}, "httpMethod": "POST", "path": "series/{seriesId}/topics", "id": "moderator.topics.insert"}, "list": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"max-results": {"type": "integer", "location": "query", "format": "uint32"}, "q": {"type": "string", "location": "query"}, "start-index": {"type": "integer", "location": "query", "format": "uint32"}, "mode": {"type": "string", "location": "query"}, "seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "id": "moderator.topics.list", "httpMethod": "GET", "path": "series/{seriesId}/topics", "response": {"$ref": "TopicList"}}, "update": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "topicId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "request": {"$ref": "Topic"}, "response": {"$ref": "Topic"}, "httpMethod": "PUT", "path": "series/{seriesId}/topics/{topicId}", "id": "moderator.topics.update"}, "get": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "topicId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "id": "moderator.topics.get", "httpMethod": "GET", "path": "series/{seriesId}/topics/{topicId}", "response": {"$ref": "Topic"}}}}', true));
        $this->topics_submissions = new Google_TopicsSubmissionsServiceResource($this, $this->serviceName, 'submissions', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"max-results": {"type": "integer", "location": "query", "format": "uint32"}, "seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "includeVotes": {"type": "boolean", "location": "query"}, "topicId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "start-index": {"type": "integer", "location": "query", "format": "uint32"}, "author": {"type": "string", "location": "query"}, "sort": {"type": "string", "location": "query"}, "q": {"type": "string", "location": "query"}, "hasAttachedVideo": {"type": "boolean", "location": "query"}}, "id": "moderator.topics.submissions.list", "httpMethod": "GET", "path": "series/{seriesId}/topics/{topicId}/submissions", "response": {"$ref": "SubmissionList"}}}}', true));
        $this->global_series = new Google_ModeratorGlobalSeriesServiceResource($this, $this->serviceName, 'series', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"max-results": {"type": "integer", "location": "query", "format": "uint32"}, "q": {"type": "string", "location": "query"}, "start-index": {"type": "integer", "location": "query", "format": "uint32"}}, "response": {"$ref": "SeriesList"}, "httpMethod": "GET", "path": "search", "id": "moderator.global.series.list"}}}', true));
        $this->profiles = new Google_ProfilesServiceResource($this, $this->serviceName, 'profiles', json_decode('{"methods": {"patch": {"scopes": ["https://www.googleapis.com/auth/moderator"], "request": {"$ref": "Profile"}, "response": {"$ref": "Profile"}, "httpMethod": "PATCH", "path": "profiles/@me", "id": "moderator.profiles.patch"}, "update": {"scopes": ["https://www.googleapis.com/auth/moderator"], "request": {"$ref": "Profile"}, "response": {"$ref": "Profile"}, "httpMethod": "PUT", "path": "profiles/@me", "id": "moderator.profiles.update"}, "get": {"scopes": ["https://www.googleapis.com/auth/moderator"], "path": "profiles/@me", "response": {"$ref": "Profile"}, "id": "moderator.profiles.get", "httpMethod": "GET"}}}', true));
        $this->featured_series = new Google_FeaturedSeriesServiceResource($this, $this->serviceName, 'series', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/moderator"], "path": "series/featured", "response": {"$ref": "SeriesList"}, "id": "moderator.featured.series.list", "httpMethod": "GET"}}}', true));
        $this->myrecent_series = new Google_MyrecentSeriesServiceResource($this, $this->serviceName, 'series', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/moderator"], "path": "series/@me/recent", "response": {"$ref": "SeriesList"}, "id": "moderator.myrecent.series.list", "httpMethod": "GET"}}}', true));
        $this->my_series = new Google_MySeriesServiceResource($this, $this->serviceName, 'series', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/moderator"], "path": "series/@me/mine", "response": {"$ref": "SeriesList"}, "id": "moderator.my.series.list", "httpMethod": "GET"}}}', true));
        $this->submissions = new Google_SubmissionsServiceResource($this, $this->serviceName, 'submissions', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "topicId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "unauthToken": {"type": "string", "location": "query"}, "anonymous": {"type": "boolean", "location": "query"}}, "request": {"$ref": "Submission"}, "response": {"$ref": "Submission"}, "httpMethod": "POST", "path": "series/{seriesId}/topics/{topicId}/submissions", "id": "moderator.submissions.insert"}, "get": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"lang": {"type": "string", "location": "query"}, "seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "submissionId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "includeVotes": {"type": "boolean", "location": "query"}}, "id": "moderator.submissions.get", "httpMethod": "GET", "path": "series/{seriesId}/submissions/{submissionId}", "response": {"$ref": "Submission"}}}}', true));

    }
}

/**
 * Class Google_ModeratorTopicsResourcePartial
 */
class Google_ModeratorTopicsResourcePartial extends Google_Model
{
    /**
     * @var string
     */
    protected $__idType = 'Google_ModeratorTopicsResourcePartialId';
    /**
     * @var string
     */
    protected $__idDataType = '';
    /**
     * @var
     */
    public $id;

    /**
     * @param Google_ModeratorTopicsResourcePartialId $id
     */
    public function setId(Google_ModeratorTopicsResourcePartialId $id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}

/**
 * Class Google_ModeratorTopicsResourcePartialId
 */
class Google_ModeratorTopicsResourcePartialId extends Google_Model
{
    /**
     * @var
     */
    public $seriesId;
    /**
     * @var
     */
    public $topicId;

    /**
     * @param $seriesId
     */
    public function setSeriesId($seriesId)
    {
        $this->seriesId = $seriesId;
    }

    /**
     * @return mixed
     */
    public function getSeriesId()
    {
        return $this->seriesId;
    }

    /**
     * @param $topicId
     */
    public function setTopicId($topicId)
    {
        $this->topicId = $topicId;
    }

    /**
     * @return mixed
     */
    public function getTopicId()
    {
        return $this->topicId;
    }
}

/**
 * Class Google_ModeratorVotesResourcePartial
 */
class Google_ModeratorVotesResourcePartial extends Google_Model
{
    /**
     * @var
     */
    public $vote;
    /**
     * @var
     */
    public $flag;

    /**
     * @param $vote
     */
    public function setVote($vote)
    {
        $this->vote = $vote;
    }

    /**
     * @return mixed
     */
    public function getVote()
    {
        return $this->vote;
    }

    /**
     * @param $flag
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;
    }

    /**
     * @return mixed
     */
    public function getFlag()
    {
        return $this->flag;
    }
}

/**
 * Class Google_Profile
 */
class Google_Profile extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__attributionType = 'Google_ProfileAttribution';
    /**
     * @var string
     */
    protected $__attributionDataType = '';
    /**
     * @var
     */
    public $attribution;
    /**
     * @var string
     */
    protected $__idType = 'Google_ProfileId';
    /**
     * @var string
     */
    protected $__idDataType = '';
    /**
     * @var
     */
    public $id;

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
     * @param Google_ProfileAttribution $attribution
     */
    public function setAttribution(Google_ProfileAttribution $attribution)
    {
        $this->attribution = $attribution;
    }

    /**
     * @return mixed
     */
    public function getAttribution()
    {
        return $this->attribution;
    }

    /**
     * @param Google_ProfileId $id
     */
    public function setId(Google_ProfileId $id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}

/**
 * Class Google_ProfileAttribution
 */
class Google_ProfileAttribution extends Google_Model
{
    /**
     * @var string
     */
    protected $__geoType = 'Google_ProfileAttributionGeo';
    /**
     * @var string
     */
    protected $__geoDataType = '';
    /**
     * @var
     */
    public $geo;
    /**
     * @var
     */
    public $displayName;
    /**
     * @var
     */
    public $location;
    /**
     * @var
     */
    public $avatarUrl;

    /**
     * @param Google_ProfileAttributionGeo $geo
     */
    public function setGeo(Google_ProfileAttributionGeo $geo)
    {
        $this->geo = $geo;
    }

    /**
     * @return mixed
     */
    public function getGeo()
    {
        return $this->geo;
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
     * @param $avatarUrl
     */
    public function setAvatarUrl($avatarUrl)
    {
        $this->avatarUrl = $avatarUrl;
    }

    /**
     * @return mixed
     */
    public function getAvatarUrl()
    {
        return $this->avatarUrl;
    }
}

/**
 * Class Google_ProfileAttributionGeo
 */
class Google_ProfileAttributionGeo extends Google_Model
{
    /**
     * @var
     */
    public $latitude;
    /**
     * @var
     */
    public $location;
    /**
     * @var
     */
    public $longitude;

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
 * Class Google_ProfileId
 */
class Google_ProfileId extends Google_Model
{
    /**
     * @var
     */
    public $user;

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
 * Class Google_Series
 */
class Google_Series extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $description;
    /**
     * @var string
     */
    protected $__rulesType = 'Google_SeriesRules';
    /**
     * @var string
     */
    protected $__rulesDataType = '';
    /**
     * @var
     */
    public $rules;
    /**
     * @var
     */
    public $unauthVotingAllowed;
    /**
     * @var
     */
    public $videoSubmissionAllowed;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $numTopics;
    /**
     * @var
     */
    public $anonymousSubmissionAllowed;
    /**
     * @var
     */
    public $unauthSubmissionAllowed;
    /**
     * @var string
     */
    protected $__idType = 'Google_SeriesId';
    /**
     * @var string
     */
    protected $__idDataType = '';
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__countersType = 'Google_SeriesCounters';
    /**
     * @var string
     */
    protected $__countersDataType = '';
    /**
     * @var
     */
    public $counters;

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
     * @param Google_SeriesRules $rules
     */
    public function setRules(Google_SeriesRules $rules)
    {
        $this->rules = $rules;
    }

    /**
     * @return mixed
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * @param $unauthVotingAllowed
     */
    public function setUnauthVotingAllowed($unauthVotingAllowed)
    {
        $this->unauthVotingAllowed = $unauthVotingAllowed;
    }

    /**
     * @return mixed
     */
    public function getUnauthVotingAllowed()
    {
        return $this->unauthVotingAllowed;
    }

    /**
     * @param $videoSubmissionAllowed
     */
    public function setVideoSubmissionAllowed($videoSubmissionAllowed)
    {
        $this->videoSubmissionAllowed = $videoSubmissionAllowed;
    }

    /**
     * @return mixed
     */
    public function getVideoSubmissionAllowed()
    {
        return $this->videoSubmissionAllowed;
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
     * @param $numTopics
     */
    public function setNumTopics($numTopics)
    {
        $this->numTopics = $numTopics;
    }

    /**
     * @return mixed
     */
    public function getNumTopics()
    {
        return $this->numTopics;
    }

    /**
     * @param $anonymousSubmissionAllowed
     */
    public function setAnonymousSubmissionAllowed($anonymousSubmissionAllowed)
    {
        $this->anonymousSubmissionAllowed = $anonymousSubmissionAllowed;
    }

    /**
     * @return mixed
     */
    public function getAnonymousSubmissionAllowed()
    {
        return $this->anonymousSubmissionAllowed;
    }

    /**
     * @param $unauthSubmissionAllowed
     */
    public function setUnauthSubmissionAllowed($unauthSubmissionAllowed)
    {
        $this->unauthSubmissionAllowed = $unauthSubmissionAllowed;
    }

    /**
     * @return mixed
     */
    public function getUnauthSubmissionAllowed()
    {
        return $this->unauthSubmissionAllowed;
    }

    /**
     * @param Google_SeriesId $id
     */
    public function setId(Google_SeriesId $id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Google_SeriesCounters $counters
     */
    public function setCounters(Google_SeriesCounters $counters)
    {
        $this->counters = $counters;
    }

    /**
     * @return mixed
     */
    public function getCounters()
    {
        return $this->counters;
    }
}

/**
 * Class Google_SeriesCounters
 */
class Google_SeriesCounters extends Google_Model
{
    /**
     * @var
     */
    public $users;
    /**
     * @var
     */
    public $noneVotes;
    /**
     * @var
     */
    public $videoSubmissions;
    /**
     * @var
     */
    public $minusVotes;
    /**
     * @var
     */
    public $anonymousSubmissions;
    /**
     * @var
     */
    public $submissions;
    /**
     * @var
     */
    public $plusVotes;

    /**
     * @param $users
     */
    public function setUsers($users)
    {
        $this->users = $users;
    }

    /**
     * @return mixed
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param $noneVotes
     */
    public function setNoneVotes($noneVotes)
    {
        $this->noneVotes = $noneVotes;
    }

    /**
     * @return mixed
     */
    public function getNoneVotes()
    {
        return $this->noneVotes;
    }

    /**
     * @param $videoSubmissions
     */
    public function setVideoSubmissions($videoSubmissions)
    {
        $this->videoSubmissions = $videoSubmissions;
    }

    /**
     * @return mixed
     */
    public function getVideoSubmissions()
    {
        return $this->videoSubmissions;
    }

    /**
     * @param $minusVotes
     */
    public function setMinusVotes($minusVotes)
    {
        $this->minusVotes = $minusVotes;
    }

    /**
     * @return mixed
     */
    public function getMinusVotes()
    {
        return $this->minusVotes;
    }

    /**
     * @param $anonymousSubmissions
     */
    public function setAnonymousSubmissions($anonymousSubmissions)
    {
        $this->anonymousSubmissions = $anonymousSubmissions;
    }

    /**
     * @return mixed
     */
    public function getAnonymousSubmissions()
    {
        return $this->anonymousSubmissions;
    }

    /**
     * @param $submissions
     */
    public function setSubmissions($submissions)
    {
        $this->submissions = $submissions;
    }

    /**
     * @return mixed
     */
    public function getSubmissions()
    {
        return $this->submissions;
    }

    /**
     * @param $plusVotes
     */
    public function setPlusVotes($plusVotes)
    {
        $this->plusVotes = $plusVotes;
    }

    /**
     * @return mixed
     */
    public function getPlusVotes()
    {
        return $this->plusVotes;
    }
}

/**
 * Class Google_SeriesId
 */
class Google_SeriesId extends Google_Model
{
    /**
     * @var
     */
    public $seriesId;

    /**
     * @param $seriesId
     */
    public function setSeriesId($seriesId)
    {
        $this->seriesId = $seriesId;
    }

    /**
     * @return mixed
     */
    public function getSeriesId()
    {
        return $this->seriesId;
    }
}

/**
 * Class Google_SeriesList
 */
class Google_SeriesList extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Series';
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
    public function setItems(/* array(Google_Series) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Series', __METHOD__);
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
 * Class Google_SeriesRules
 */
class Google_SeriesRules extends Google_Model
{
    /**
     * @var string
     */
    protected $__votesType = 'Google_SeriesRulesVotes';
    /**
     * @var string
     */
    protected $__votesDataType = '';
    /**
     * @var
     */
    public $votes;
    /**
     * @var string
     */
    protected $__submissionsType = 'Google_SeriesRulesSubmissions';
    /**
     * @var string
     */
    protected $__submissionsDataType = '';
    /**
     * @var
     */
    public $submissions;

    /**
     * @param Google_SeriesRulesVotes $votes
     */
    public function setVotes(Google_SeriesRulesVotes $votes)
    {
        $this->votes = $votes;
    }

    /**
     * @return mixed
     */
    public function getVotes()
    {
        return $this->votes;
    }

    /**
     * @param Google_SeriesRulesSubmissions $submissions
     */
    public function setSubmissions(Google_SeriesRulesSubmissions $submissions)
    {
        $this->submissions = $submissions;
    }

    /**
     * @return mixed
     */
    public function getSubmissions()
    {
        return $this->submissions;
    }
}

/**
 * Class Google_SeriesRulesSubmissions
 */
class Google_SeriesRulesSubmissions extends Google_Model
{
    /**
     * @var
     */
    public $close;
    /**
     * @var
     */
    public $open;

    /**
     * @param $close
     */
    public function setClose($close)
    {
        $this->close = $close;
    }

    /**
     * @return mixed
     */
    public function getClose()
    {
        return $this->close;
    }

    /**
     * @param $open
     */
    public function setOpen($open)
    {
        $this->open = $open;
    }

    /**
     * @return mixed
     */
    public function getOpen()
    {
        return $this->open;
    }
}

/**
 * Class Google_SeriesRulesVotes
 */
class Google_SeriesRulesVotes extends Google_Model
{
    /**
     * @var
     */
    public $close;
    /**
     * @var
     */
    public $open;

    /**
     * @param $close
     */
    public function setClose($close)
    {
        $this->close = $close;
    }

    /**
     * @return mixed
     */
    public function getClose()
    {
        return $this->close;
    }

    /**
     * @param $open
     */
    public function setOpen($open)
    {
        $this->open = $open;
    }

    /**
     * @return mixed
     */
    public function getOpen()
    {
        return $this->open;
    }
}

/**
 * Class Google_Submission
 */
class Google_Submission extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__attributionType = 'Google_SubmissionAttribution';
    /**
     * @var string
     */
    protected $__attributionDataType = '';
    /**
     * @var
     */
    public $attribution;
    /**
     * @var
     */
    public $created;
    /**
     * @var
     */
    public $text;
    /**
     * @var string
     */
    protected $__topicsType = 'Google_ModeratorTopicsResourcePartial';
    /**
     * @var string
     */
    protected $__topicsDataType = 'array';
    /**
     * @var
     */
    public $topics;
    /**
     * @var
     */
    public $author;
    /**
     * @var string
     */
    protected $__translationsType = 'Google_SubmissionTranslations';
    /**
     * @var string
     */
    protected $__translationsDataType = 'array';
    /**
     * @var
     */
    public $translations;
    /**
     * @var string
     */
    protected $__parentSubmissionIdType = 'Google_SubmissionParentSubmissionId';
    /**
     * @var string
     */
    protected $__parentSubmissionIdDataType = '';
    /**
     * @var
     */
    public $parentSubmissionId;
    /**
     * @var string
     */
    protected $__voteType = 'Google_ModeratorVotesResourcePartial';
    /**
     * @var string
     */
    protected $__voteDataType = '';
    /**
     * @var
     */
    public $vote;
    /**
     * @var
     */
    public $attachmentUrl;
    /**
     * @var string
     */
    protected $__geoType = 'Google_SubmissionGeo';
    /**
     * @var string
     */
    protected $__geoDataType = '';
    /**
     * @var
     */
    public $geo;
    /**
     * @var string
     */
    protected $__idType = 'Google_SubmissionId';
    /**
     * @var string
     */
    protected $__idDataType = '';
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__countersType = 'Google_SubmissionCounters';
    /**
     * @var string
     */
    protected $__countersDataType = '';
    /**
     * @var
     */
    public $counters;

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
     * @param Google_SubmissionAttribution $attribution
     */
    public function setAttribution(Google_SubmissionAttribution $attribution)
    {
        $this->attribution = $attribution;
    }

    /**
     * @return mixed
     */
    public function getAttribution()
    {
        return $this->attribution;
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
     * @param $topics
     * @throws Google_Exception
     */
    public function setTopics(/* array(Google_ModeratorTopicsResourcePartial) */
        $topics)
    {
        $this->assertIsArray($topics, 'Google_ModeratorTopicsResourcePartial', __METHOD__);
        $this->topics = $topics;
    }

    /**
     * @return mixed
     */
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     * @param $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param $translations
     * @throws Google_Exception
     */
    public function setTranslations(/* array(Google_SubmissionTranslations) */
        $translations)
    {
        $this->assertIsArray($translations, 'Google_SubmissionTranslations', __METHOD__);
        $this->translations = $translations;
    }

    /**
     * @return mixed
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * @param Google_SubmissionParentSubmissionId $parentSubmissionId
     */
    public function setParentSubmissionId(Google_SubmissionParentSubmissionId $parentSubmissionId)
    {
        $this->parentSubmissionId = $parentSubmissionId;
    }

    /**
     * @return mixed
     */
    public function getParentSubmissionId()
    {
        return $this->parentSubmissionId;
    }

    /**
     * @param Google_ModeratorVotesResourcePartial $vote
     */
    public function setVote(Google_ModeratorVotesResourcePartial $vote)
    {
        $this->vote = $vote;
    }

    /**
     * @return mixed
     */
    public function getVote()
    {
        return $this->vote;
    }

    /**
     * @param $attachmentUrl
     */
    public function setAttachmentUrl($attachmentUrl)
    {
        $this->attachmentUrl = $attachmentUrl;
    }

    /**
     * @return mixed
     */
    public function getAttachmentUrl()
    {
        return $this->attachmentUrl;
    }

    /**
     * @param Google_SubmissionGeo $geo
     */
    public function setGeo(Google_SubmissionGeo $geo)
    {
        $this->geo = $geo;
    }

    /**
     * @return mixed
     */
    public function getGeo()
    {
        return $this->geo;
    }

    /**
     * @param Google_SubmissionId $id
     */
    public function setId(Google_SubmissionId $id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Google_SubmissionCounters $counters
     */
    public function setCounters(Google_SubmissionCounters $counters)
    {
        $this->counters = $counters;
    }

    /**
     * @return mixed
     */
    public function getCounters()
    {
        return $this->counters;
    }
}

/**
 * Class Google_SubmissionAttribution
 */
class Google_SubmissionAttribution extends Google_Model
{
    /**
     * @var
     */
    public $displayName;
    /**
     * @var
     */
    public $location;
    /**
     * @var
     */
    public $avatarUrl;

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
     * @param $avatarUrl
     */
    public function setAvatarUrl($avatarUrl)
    {
        $this->avatarUrl = $avatarUrl;
    }

    /**
     * @return mixed
     */
    public function getAvatarUrl()
    {
        return $this->avatarUrl;
    }
}

/**
 * Class Google_SubmissionCounters
 */
class Google_SubmissionCounters extends Google_Model
{
    /**
     * @var
     */
    public $noneVotes;
    /**
     * @var
     */
    public $minusVotes;
    /**
     * @var
     */
    public $plusVotes;

    /**
     * @param $noneVotes
     */
    public function setNoneVotes($noneVotes)
    {
        $this->noneVotes = $noneVotes;
    }

    /**
     * @return mixed
     */
    public function getNoneVotes()
    {
        return $this->noneVotes;
    }

    /**
     * @param $minusVotes
     */
    public function setMinusVotes($minusVotes)
    {
        $this->minusVotes = $minusVotes;
    }

    /**
     * @return mixed
     */
    public function getMinusVotes()
    {
        return $this->minusVotes;
    }

    /**
     * @param $plusVotes
     */
    public function setPlusVotes($plusVotes)
    {
        $this->plusVotes = $plusVotes;
    }

    /**
     * @return mixed
     */
    public function getPlusVotes()
    {
        return $this->plusVotes;
    }
}

/**
 * Class Google_SubmissionGeo
 */
class Google_SubmissionGeo extends Google_Model
{
    /**
     * @var
     */
    public $latitude;
    /**
     * @var
     */
    public $location;
    /**
     * @var
     */
    public $longitude;

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
 * Class Google_SubmissionId
 */
class Google_SubmissionId extends Google_Model
{
    /**
     * @var
     */
    public $seriesId;
    /**
     * @var
     */
    public $submissionId;

    /**
     * @param $seriesId
     */
    public function setSeriesId($seriesId)
    {
        $this->seriesId = $seriesId;
    }

    /**
     * @return mixed
     */
    public function getSeriesId()
    {
        return $this->seriesId;
    }

    /**
     * @param $submissionId
     */
    public function setSubmissionId($submissionId)
    {
        $this->submissionId = $submissionId;
    }

    /**
     * @return mixed
     */
    public function getSubmissionId()
    {
        return $this->submissionId;
    }
}

/**
 * Class Google_SubmissionList
 */
class Google_SubmissionList extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Submission';
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
    public function setItems(/* array(Google_Submission) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Submission', __METHOD__);
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
 * Class Google_SubmissionParentSubmissionId
 */
class Google_SubmissionParentSubmissionId extends Google_Model
{
    /**
     * @var
     */
    public $seriesId;
    /**
     * @var
     */
    public $submissionId;

    /**
     * @param $seriesId
     */
    public function setSeriesId($seriesId)
    {
        $this->seriesId = $seriesId;
    }

    /**
     * @return mixed
     */
    public function getSeriesId()
    {
        return $this->seriesId;
    }

    /**
     * @param $submissionId
     */
    public function setSubmissionId($submissionId)
    {
        $this->submissionId = $submissionId;
    }

    /**
     * @return mixed
     */
    public function getSubmissionId()
    {
        return $this->submissionId;
    }
}

/**
 * Class Google_SubmissionTranslations
 */
class Google_SubmissionTranslations extends Google_Model
{
    /**
     * @var
     */
    public $lang;
    /**
     * @var
     */
    public $text;

    /**
     * @param $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }

    /**
     * @return mixed
     */
    public function getLang()
    {
        return $this->lang;
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
}

/**
 * Class Google_Tag
 */
class Google_Tag extends Google_Model
{
    /**
     * @var
     */
    public $text;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__idType = 'Google_TagId';
    /**
     * @var string
     */
    protected $__idDataType = '';
    /**
     * @var
     */
    public $id;

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
     * @param Google_TagId $id
     */
    public function setId(Google_TagId $id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}

/**
 * Class Google_TagId
 */
class Google_TagId extends Google_Model
{
    /**
     * @var
     */
    public $seriesId;
    /**
     * @var
     */
    public $tagId;
    /**
     * @var
     */
    public $submissionId;

    /**
     * @param $seriesId
     */
    public function setSeriesId($seriesId)
    {
        $this->seriesId = $seriesId;
    }

    /**
     * @return mixed
     */
    public function getSeriesId()
    {
        return $this->seriesId;
    }

    /**
     * @param $tagId
     */
    public function setTagId($tagId)
    {
        $this->tagId = $tagId;
    }

    /**
     * @return mixed
     */
    public function getTagId()
    {
        return $this->tagId;
    }

    /**
     * @param $submissionId
     */
    public function setSubmissionId($submissionId)
    {
        $this->submissionId = $submissionId;
    }

    /**
     * @return mixed
     */
    public function getSubmissionId()
    {
        return $this->submissionId;
    }
}

/**
 * Class Google_TagList
 */
class Google_TagList extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Tag';
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
    public function setItems(/* array(Google_Tag) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Tag', __METHOD__);
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
 * Class Google_Topic
 */
class Google_Topic extends Google_Model
{
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $description;
    /**
     * @var string
     */
    protected $__rulesType = 'Google_TopicRules';
    /**
     * @var string
     */
    protected $__rulesDataType = '';
    /**
     * @var
     */
    public $rules;
    /**
     * @var string
     */
    protected $__featuredSubmissionType = 'Google_Submission';
    /**
     * @var string
     */
    protected $__featuredSubmissionDataType = '';
    /**
     * @var
     */
    public $featuredSubmission;
    /**
     * @var
     */
    public $presenter;
    /**
     * @var string
     */
    protected $__countersType = 'Google_TopicCounters';
    /**
     * @var string
     */
    protected $__countersDataType = '';
    /**
     * @var
     */
    public $counters;
    /**
     * @var string
     */
    protected $__idType = 'Google_TopicId';
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
    public $name;

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
     * @param Google_TopicRules $rules
     */
    public function setRules(Google_TopicRules $rules)
    {
        $this->rules = $rules;
    }

    /**
     * @return mixed
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * @param Google_Submission $featuredSubmission
     */
    public function setFeaturedSubmission(Google_Submission $featuredSubmission)
    {
        $this->featuredSubmission = $featuredSubmission;
    }

    /**
     * @return mixed
     */
    public function getFeaturedSubmission()
    {
        return $this->featuredSubmission;
    }

    /**
     * @param $presenter
     */
    public function setPresenter($presenter)
    {
        $this->presenter = $presenter;
    }

    /**
     * @return mixed
     */
    public function getPresenter()
    {
        return $this->presenter;
    }

    /**
     * @param Google_TopicCounters $counters
     */
    public function setCounters(Google_TopicCounters $counters)
    {
        $this->counters = $counters;
    }

    /**
     * @return mixed
     */
    public function getCounters()
    {
        return $this->counters;
    }

    /**
     * @param Google_TopicId $id
     */
    public function setId(Google_TopicId $id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
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

/**
 * Class Google_TopicCounters
 */
class Google_TopicCounters extends Google_Model
{
    /**
     * @var
     */
    public $users;
    /**
     * @var
     */
    public $noneVotes;
    /**
     * @var
     */
    public $videoSubmissions;
    /**
     * @var
     */
    public $minusVotes;
    /**
     * @var
     */
    public $submissions;
    /**
     * @var
     */
    public $plusVotes;

    /**
     * @param $users
     */
    public function setUsers($users)
    {
        $this->users = $users;
    }

    /**
     * @return mixed
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param $noneVotes
     */
    public function setNoneVotes($noneVotes)
    {
        $this->noneVotes = $noneVotes;
    }

    /**
     * @return mixed
     */
    public function getNoneVotes()
    {
        return $this->noneVotes;
    }

    /**
     * @param $videoSubmissions
     */
    public function setVideoSubmissions($videoSubmissions)
    {
        $this->videoSubmissions = $videoSubmissions;
    }

    /**
     * @return mixed
     */
    public function getVideoSubmissions()
    {
        return $this->videoSubmissions;
    }

    /**
     * @param $minusVotes
     */
    public function setMinusVotes($minusVotes)
    {
        $this->minusVotes = $minusVotes;
    }

    /**
     * @return mixed
     */
    public function getMinusVotes()
    {
        return $this->minusVotes;
    }

    /**
     * @param $submissions
     */
    public function setSubmissions($submissions)
    {
        $this->submissions = $submissions;
    }

    /**
     * @return mixed
     */
    public function getSubmissions()
    {
        return $this->submissions;
    }

    /**
     * @param $plusVotes
     */
    public function setPlusVotes($plusVotes)
    {
        $this->plusVotes = $plusVotes;
    }

    /**
     * @return mixed
     */
    public function getPlusVotes()
    {
        return $this->plusVotes;
    }
}

/**
 * Class Google_TopicId
 */
class Google_TopicId extends Google_Model
{
    /**
     * @var
     */
    public $seriesId;
    /**
     * @var
     */
    public $topicId;

    /**
     * @param $seriesId
     */
    public function setSeriesId($seriesId)
    {
        $this->seriesId = $seriesId;
    }

    /**
     * @return mixed
     */
    public function getSeriesId()
    {
        return $this->seriesId;
    }

    /**
     * @param $topicId
     */
    public function setTopicId($topicId)
    {
        $this->topicId = $topicId;
    }

    /**
     * @return mixed
     */
    public function getTopicId()
    {
        return $this->topicId;
    }
}

/**
 * Class Google_TopicList
 */
class Google_TopicList extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Topic';
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
    public function setItems(/* array(Google_Topic) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Topic', __METHOD__);
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
 * Class Google_TopicRules
 */
class Google_TopicRules extends Google_Model
{
    /**
     * @var string
     */
    protected $__votesType = 'Google_TopicRulesVotes';
    /**
     * @var string
     */
    protected $__votesDataType = '';
    /**
     * @var
     */
    public $votes;
    /**
     * @var string
     */
    protected $__submissionsType = 'Google_TopicRulesSubmissions';
    /**
     * @var string
     */
    protected $__submissionsDataType = '';
    /**
     * @var
     */
    public $submissions;

    /**
     * @param Google_TopicRulesVotes $votes
     */
    public function setVotes(Google_TopicRulesVotes $votes)
    {
        $this->votes = $votes;
    }

    /**
     * @return mixed
     */
    public function getVotes()
    {
        return $this->votes;
    }

    /**
     * @param Google_TopicRulesSubmissions $submissions
     */
    public function setSubmissions(Google_TopicRulesSubmissions $submissions)
    {
        $this->submissions = $submissions;
    }

    /**
     * @return mixed
     */
    public function getSubmissions()
    {
        return $this->submissions;
    }
}

/**
 * Class Google_TopicRulesSubmissions
 */
class Google_TopicRulesSubmissions extends Google_Model
{
    /**
     * @var
     */
    public $close;
    /**
     * @var
     */
    public $open;

    /**
     * @param $close
     */
    public function setClose($close)
    {
        $this->close = $close;
    }

    /**
     * @return mixed
     */
    public function getClose()
    {
        return $this->close;
    }

    /**
     * @param $open
     */
    public function setOpen($open)
    {
        $this->open = $open;
    }

    /**
     * @return mixed
     */
    public function getOpen()
    {
        return $this->open;
    }
}

/**
 * Class Google_TopicRulesVotes
 */
class Google_TopicRulesVotes extends Google_Model
{
    /**
     * @var
     */
    public $close;
    /**
     * @var
     */
    public $open;

    /**
     * @param $close
     */
    public function setClose($close)
    {
        $this->close = $close;
    }

    /**
     * @return mixed
     */
    public function getClose()
    {
        return $this->close;
    }

    /**
     * @param $open
     */
    public function setOpen($open)
    {
        $this->open = $open;
    }

    /**
     * @return mixed
     */
    public function getOpen()
    {
        return $this->open;
    }
}

/**
 * Class Google_Vote
 */
class Google_Vote extends Google_Model
{
    /**
     * @var
     */
    public $vote;
    /**
     * @var
     */
    public $flag;
    /**
     * @var string
     */
    protected $__idType = 'Google_VoteId';
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
     * @param $vote
     */
    public function setVote($vote)
    {
        $this->vote = $vote;
    }

    /**
     * @return mixed
     */
    public function getVote()
    {
        return $this->vote;
    }

    /**
     * @param $flag
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;
    }

    /**
     * @return mixed
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * @param Google_VoteId $id
     */
    public function setId(Google_VoteId $id)
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
 * Class Google_VoteId
 */
class Google_VoteId extends Google_Model
{
    /**
     * @var
     */
    public $seriesId;
    /**
     * @var
     */
    public $submissionId;

    /**
     * @param $seriesId
     */
    public function setSeriesId($seriesId)
    {
        $this->seriesId = $seriesId;
    }

    /**
     * @return mixed
     */
    public function getSeriesId()
    {
        return $this->seriesId;
    }

    /**
     * @param $submissionId
     */
    public function setSubmissionId($submissionId)
    {
        $this->submissionId = $submissionId;
    }

    /**
     * @return mixed
     */
    public function getSubmissionId()
    {
        return $this->submissionId;
    }
}

/**
 * Class Google_VoteList
 */
class Google_VoteList extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Vote';
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
    public function setItems(/* array(Google_Vote) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Vote', __METHOD__);
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
