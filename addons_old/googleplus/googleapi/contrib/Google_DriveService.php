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
 * The "about" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_DriveService(...);
 *   $about = $driveService->about;
 *  </code>
 */
class Google_AboutServiceResource extends Google_ServiceResource
{

    /**
     * Gets the information about the current user along with Drive API settings (about.get)
     *
     * @param array $optParams Optional parameters.
     * @return Google_About
     * @throws Google_Exception
     * @opt_param bool includeSubscribed When calculating the number of remaining change IDs, whether to include shared files and public files the user has opened. When set to false, this counts only change IDs for owned files and any shared or public files that the user has explictly added to a folder in Drive.
     * @opt_param string maxChangeIdCount Maximum number of remaining change IDs to count
     * @opt_param string startChangeId Change ID to start counting from when calculating number of remaining change IDs
     */
    public function get($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_About($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "apps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_DriveService(...);
 *   $apps = $driveService->apps;
 *  </code>
 */
class Google_AppsServiceResource extends Google_ServiceResource
{

    /**
     * Gets a specific app. (apps.get)
     *
     * @param string $appId The ID of the app.
     * @param array $optParams Optional parameters.
     * @return Google_App
     * @throws Google_Exception
     */
    public function get($appId, $optParams = [])
    {
        $params = ['appId' => $appId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_App($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists a user's installed apps. (apps.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_AppList
     * @throws Google_Exception
     */
    public function listApps($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_AppList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "changes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_DriveService(...);
 *   $changes = $driveService->changes;
 *  </code>
 */
class Google_ChangesServiceResource extends Google_ServiceResource
{

    /**
     * Gets a specific change. (changes.get)
     *
     * @param string $changeId The ID of the change.
     * @param array $optParams Optional parameters.
     * @return Google_Change
     * @throws Google_Exception
     */
    public function get($changeId, $optParams = [])
    {
        $params = ['changeId' => $changeId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Change($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists the changes for a user. (changes.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_ChangeList
     * @throws Google_Exception
     * @opt_param bool includeDeleted Whether to include deleted items.
     * @opt_param bool includeSubscribed Whether to include shared files and public files the user has opened. When set to false, the list will include owned files plus any shared or public files the user has explictly added to a folder in Drive.
     * @opt_param int maxResults Maximum number of changes to return.
     * @opt_param string pageToken Page token for changes.
     * @opt_param string startChangeId Change ID to start listing changes from.
     */
    public function listChanges($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_ChangeList($data);
        } else {
            return $data;
        }
    }

    /**
     * Subscribe to changes for a user. (changes.watch)
     *
     * @param Google_Channel $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Channel
     * @throws Google_Exception
     * @opt_param bool includeDeleted Whether to include deleted items.
     * @opt_param bool includeSubscribed Whether to include shared files and public files the user has opened. When set to false, the list will include owned files plus any shared or public files the user has explictly added to a folder in Drive.
     * @opt_param int maxResults Maximum number of changes to return.
     * @opt_param string pageToken Page token for changes.
     * @opt_param string startChangeId Change ID to start listing changes from.
     */
    public function watch(Google_Channel $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('watch', [$params]);
        if ($this->useObjects()) {
            return new Google_Channel($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "channels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_DriveService(...);
 *   $channels = $driveService->channels;
 *  </code>
 */
class Google_ChannelsServiceResource extends Google_ServiceResource
{

    /**
     * (channels.stop)
     *
     * @param Google_Channel $postBody
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function stop(Google_Channel $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('stop', [$params]);
        return $data;
    }
}

/**
 * The "children" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_DriveService(...);
 *   $children = $driveService->children;
 *  </code>
 */
class Google_ChildrenServiceResource extends Google_ServiceResource
{

    /**
     * Removes a child from a folder. (children.delete)
     *
     * @param string $folderId The ID of the folder.
     * @param string $childId The ID of the child.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($folderId, $childId, $optParams = [])
    {
        $params = ['folderId' => $folderId, 'childId' => $childId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Gets a specific child reference. (children.get)
     *
     * @param string $folderId The ID of the folder.
     * @param string $childId The ID of the child.
     * @param array $optParams Optional parameters.
     * @return Google_ChildReference
     * @throws Google_Exception
     */
    public function get($folderId, $childId, $optParams = [])
    {
        $params = ['folderId' => $folderId, 'childId' => $childId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_ChildReference($data);
        } else {
            return $data;
        }
    }

    /**
     * Inserts a file into a folder. (children.insert)
     *
     * @param string $folderId The ID of the folder.
     * @param Google_ChildReference $postBody
     * @param array $optParams Optional parameters.
     * @return Google_ChildReference
     * @throws Google_Exception
     */
    public function insert($folderId, Google_ChildReference $postBody, $optParams = [])
    {
        $params = ['folderId' => $folderId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_ChildReference($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists a folder's children. (children.list)
     *
     * @param string $folderId The ID of the folder.
     * @param array $optParams Optional parameters.
     * @return Google_ChildList
     * @throws Google_Exception
     * @opt_param int maxResults Maximum number of children to return.
     * @opt_param string pageToken Page token for children.
     * @opt_param string q Query string for searching children.
     */
    public function listChildren($folderId, $optParams = [])
    {
        $params = ['folderId' => $folderId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_ChildList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "comments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_DriveService(...);
 *   $comments = $driveService->comments;
 *  </code>
 */
class Google_CommentsServiceResource extends Google_ServiceResource
{

    /**
     * Deletes a comment. (comments.delete)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($fileId, $commentId, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'commentId' => $commentId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Gets a comment by ID. (comments.get)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param array $optParams Optional parameters.
     * @return Google_Comment
     * @throws Google_Exception
     * @opt_param bool includeDeleted If set, this will succeed when retrieving a deleted comment, and will include any deleted replies.
     */
    public function get($fileId, $commentId, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'commentId' => $commentId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Comment($data);
        } else {
            return $data;
        }
    }

    /**
     * Creates a new comment on the given file. (comments.insert)
     *
     * @param string $fileId The ID of the file.
     * @param Google_Comment $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Comment
     * @throws Google_Exception
     */
    public function insert($fileId, Google_Comment $postBody, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Comment($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists a file's comments. (comments.list)
     *
     * @param string $fileId The ID of the file.
     * @param array $optParams Optional parameters.
     * @return Google_CommentList
     * @throws Google_Exception
     * @opt_param bool includeDeleted If set, all comments and replies, including deleted comments and replies (with content stripped) will be returned.
     * @opt_param int maxResults The maximum number of discussions to include in the response, used for paging.
     * @opt_param string pageToken The continuation token, used to page through large result sets. To get the next page of results, set this parameter to the value of "nextPageToken" from the previous response.
     * @opt_param string updatedMin Only discussions that were updated after this timestamp will be returned. Formatted as an RFC 3339 timestamp.
     */
    public function listComments($fileId, $optParams = [])
    {
        $params = ['fileId' => $fileId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_CommentList($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates an existing comment. This method supports patch semantics. (comments.patch)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param Google_Comment $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Comment
     * @throws Google_Exception
     */
    public function patch($fileId, $commentId, Google_Comment $postBody, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'commentId' => $commentId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Comment($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates an existing comment. (comments.update)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param Google_Comment $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Comment
     * @throws Google_Exception
     */
    public function update($fileId, $commentId, Google_Comment $postBody, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'commentId' => $commentId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Comment($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "files" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_DriveService(...);
 *   $files = $driveService->files;
 *  </code>
 */
class Google_FilesServiceResource extends Google_ServiceResource
{

    /**
     * Creates a copy of the specified file. (files.copy)
     *
     * @param string $fileId The ID of the file to copy.
     * @param Google_DriveFile $postBody
     * @param array $optParams Optional parameters.
     * @return Google_DriveFile
     * @throws Google_Exception
     * @opt_param bool convert Whether to convert this file to the corresponding Google Docs format.
     * @opt_param bool ocr Whether to attempt OCR on .jpg, .png, .gif, or .pdf uploads.
     * @opt_param string ocrLanguage If ocr is true, hints at the language to use. Valid values are ISO 639-1 codes.
     * @opt_param bool pinned Whether to pin the head revision of the new copy.
     * @opt_param string timedTextLanguage The language of the timed text.
     * @opt_param string timedTextTrackName The timed text track name.
     * @opt_param string visibility The visibility of the new file. This parameter is only relevant when the source is not a native Google Doc and convert=false.
     */
    public function copy($fileId, Google_DriveFile $postBody, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('copy', [$params]);
        if ($this->useObjects()) {
            return new Google_DriveFile($data);
        } else {
            return $data;
        }
    }

    /**
     * Permanently deletes a file by ID. Skips the trash. (files.delete)
     *
     * @param string $fileId The ID of the file to delete.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($fileId, $optParams = [])
    {
        $params = ['fileId' => $fileId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Gets a file's metadata by ID. (files.get)
     *
     * @param string $fileId The ID for the file in question.
     * @param array $optParams Optional parameters.
     * @return Google_DriveFile
     * @throws Google_Exception
     * @opt_param string projection This parameter is deprecated and has no function.
     * @opt_param bool updateViewedDate Whether to update the view date after successfully retrieving the file.
     */
    public function get($fileId, $optParams = [])
    {
        $params = ['fileId' => $fileId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_DriveFile($data);
        } else {
            return $data;
        }
    }

    /**
     * Insert a new file. (files.insert)
     *
     * @param Google_DriveFile $postBody
     * @param array $optParams Optional parameters.
     * @return Google_DriveFile
     * @throws Google_Exception
     * @opt_param bool convert Whether to convert this file to the corresponding Google Docs format.
     * @opt_param bool ocr Whether to attempt OCR on .jpg, .png, .gif, or .pdf uploads.
     * @opt_param string ocrLanguage If ocr is true, hints at the language to use. Valid values are ISO 639-1 codes.
     * @opt_param bool pinned Whether to pin the head revision of the uploaded file.
     * @opt_param string timedTextLanguage The language of the timed text.
     * @opt_param string timedTextTrackName The timed text track name.
     * @opt_param bool useContentAsIndexableText Whether to use the content as indexable text.
     * @opt_param string visibility The visibility of the new file. This parameter is only relevant when convert=false.
     */
    public function insert(Google_DriveFile $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_DriveFile($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists the user's files. (files.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_FileList
     * @throws Google_Exception
     * @opt_param int maxResults Maximum number of files to return.
     * @opt_param string pageToken Page token for files.
     * @opt_param string projection This parameter is deprecated and has no function.
     * @opt_param string q Query string for searching files.
     */
    public function listFiles($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_FileList($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates file metadata and/or content. This method supports patch semantics. (files.patch)
     *
     * @param string $fileId The ID of the file to update.
     * @param Google_DriveFile $postBody
     * @param array $optParams Optional parameters.
     * @return Google_DriveFile
     * @throws Google_Exception
     * @opt_param bool convert Whether to convert this file to the corresponding Google Docs format.
     * @opt_param bool newRevision Whether a blob upload should create a new revision. If not set or false, the blob data in the current head revision is replaced. If true, a new blob is created as head revision, and previous revisions are preserved (causing increased use of the user's data storage quota).
     * @opt_param bool ocr Whether to attempt OCR on .jpg, .png, .gif, or .pdf uploads.
     * @opt_param string ocrLanguage If ocr is true, hints at the language to use. Valid values are ISO 639-1 codes.
     * @opt_param bool pinned Whether to pin the new revision.
     * @opt_param bool setModifiedDate Whether to set the modified date with the supplied modified date.
     * @opt_param string timedTextLanguage The language of the timed text.
     * @opt_param string timedTextTrackName The timed text track name.
     * @opt_param bool updateViewedDate Whether to update the view date after successfully updating the file.
     * @opt_param bool useContentAsIndexableText Whether to use the content as indexable text.
     */
    public function patch($fileId, Google_DriveFile $postBody, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_DriveFile($data);
        } else {
            return $data;
        }
    }

    /**
     * Set the file's updated time to the current server time. (files.touch)
     *
     * @param string $fileId The ID of the file to update.
     * @param array $optParams Optional parameters.
     * @return Google_DriveFile
     * @throws Google_Exception
     */
    public function touch($fileId, $optParams = [])
    {
        $params = ['fileId' => $fileId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('touch', [$params]);
        if ($this->useObjects()) {
            return new Google_DriveFile($data);
        } else {
            return $data;
        }
    }

    /**
     * Moves a file to the trash. (files.trash)
     *
     * @param string $fileId The ID of the file to trash.
     * @param array $optParams Optional parameters.
     * @return Google_DriveFile
     * @throws Google_Exception
     */
    public function trash($fileId, $optParams = [])
    {
        $params = ['fileId' => $fileId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('trash', [$params]);
        if ($this->useObjects()) {
            return new Google_DriveFile($data);
        } else {
            return $data;
        }
    }

    /**
     * Restores a file from the trash. (files.untrash)
     *
     * @param string $fileId The ID of the file to untrash.
     * @param array $optParams Optional parameters.
     * @return Google_DriveFile
     * @throws Google_Exception
     */
    public function untrash($fileId, $optParams = [])
    {
        $params = ['fileId' => $fileId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('untrash', [$params]);
        if ($this->useObjects()) {
            return new Google_DriveFile($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates file metadata and/or content. (files.update)
     *
     * @param string $fileId The ID of the file to update.
     * @param Google_DriveFile $postBody
     * @param array $optParams Optional parameters.
     * @return Google_DriveFile
     * @throws Google_Exception
     * @opt_param bool convert Whether to convert this file to the corresponding Google Docs format.
     * @opt_param bool newRevision Whether a blob upload should create a new revision. If not set or false, the blob data in the current head revision is replaced. If true, a new blob is created as head revision, and previous revisions are preserved (causing increased use of the user's data storage quota).
     * @opt_param bool ocr Whether to attempt OCR on .jpg, .png, .gif, or .pdf uploads.
     * @opt_param string ocrLanguage If ocr is true, hints at the language to use. Valid values are ISO 639-1 codes.
     * @opt_param bool pinned Whether to pin the new revision.
     * @opt_param bool setModifiedDate Whether to set the modified date with the supplied modified date.
     * @opt_param string timedTextLanguage The language of the timed text.
     * @opt_param string timedTextTrackName The timed text track name.
     * @opt_param bool updateViewedDate Whether to update the view date after successfully updating the file.
     * @opt_param bool useContentAsIndexableText Whether to use the content as indexable text.
     */
    public function update($fileId, Google_DriveFile $postBody, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_DriveFile($data);
        } else {
            return $data;
        }
    }

    /**
     * Subscribe to changes on a file (files.watch)
     *
     * @param string $fileId The ID for the file in question.
     * @param Google_Channel $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Channel
     * @throws Google_Exception
     * @opt_param string projection This parameter is deprecated and has no function.
     * @opt_param bool updateViewedDate Whether to update the view date after successfully retrieving the file.
     */
    public function watch($fileId, Google_Channel $postBody, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('watch', [$params]);
        if ($this->useObjects()) {
            return new Google_Channel($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "parents" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_DriveService(...);
 *   $parents = $driveService->parents;
 *  </code>
 */
class Google_ParentsServiceResource extends Google_ServiceResource
{

    /**
     * Removes a parent from a file. (parents.delete)
     *
     * @param string $fileId The ID of the file.
     * @param string $parentId The ID of the parent.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($fileId, $parentId, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'parentId' => $parentId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Gets a specific parent reference. (parents.get)
     *
     * @param string $fileId The ID of the file.
     * @param string $parentId The ID of the parent.
     * @param array $optParams Optional parameters.
     * @return Google_ParentReference
     * @throws Google_Exception
     */
    public function get($fileId, $parentId, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'parentId' => $parentId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_ParentReference($data);
        } else {
            return $data;
        }
    }

    /**
     * Adds a parent folder for a file. (parents.insert)
     *
     * @param string $fileId The ID of the file.
     * @param Google_ParentReference $postBody
     * @param array $optParams Optional parameters.
     * @return Google_ParentReference
     * @throws Google_Exception
     */
    public function insert($fileId, Google_ParentReference $postBody, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_ParentReference($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists a file's parents. (parents.list)
     *
     * @param string $fileId The ID of the file.
     * @param array $optParams Optional parameters.
     * @return Google_ParentList
     * @throws Google_Exception
     */
    public function listParents($fileId, $optParams = [])
    {
        $params = ['fileId' => $fileId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_ParentList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "permissions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_DriveService(...);
 *   $permissions = $driveService->permissions;
 *  </code>
 */
class Google_PermissionsServiceResource extends Google_ServiceResource
{

    /**
     * Deletes a permission from a file. (permissions.delete)
     *
     * @param string $fileId The ID for the file.
     * @param string $permissionId The ID for the permission.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($fileId, $permissionId, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'permissionId' => $permissionId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Gets a permission by ID. (permissions.get)
     *
     * @param string $fileId The ID for the file.
     * @param string $permissionId The ID for the permission.
     * @param array $optParams Optional parameters.
     * @return Google_Permission
     * @throws Google_Exception
     */
    public function get($fileId, $permissionId, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'permissionId' => $permissionId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Permission($data);
        } else {
            return $data;
        }
    }

    /**
     * Inserts a permission for a file. (permissions.insert)
     *
     * @param string $fileId The ID for the file.
     * @param Google_Permission $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Permission
     * @throws Google_Exception
     * @opt_param string emailMessage A custom message to include in notification emails.
     * @opt_param bool sendNotificationEmails Whether to send notification emails when sharing to users or groups.
     */
    public function insert($fileId, Google_Permission $postBody, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Permission($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists a file's permissions. (permissions.list)
     *
     * @param string $fileId The ID for the file.
     * @param array $optParams Optional parameters.
     * @return Google_PermissionList
     * @throws Google_Exception
     */
    public function listPermissions($fileId, $optParams = [])
    {
        $params = ['fileId' => $fileId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_PermissionList($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates a permission. This method supports patch semantics. (permissions.patch)
     *
     * @param string $fileId The ID for the file.
     * @param string $permissionId The ID for the permission.
     * @param Google_Permission $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Permission
     * @throws Google_Exception
     * @opt_param bool transferOwnership Whether changing a role to 'owner' should also downgrade the current owners to writers.
     */
    public function patch($fileId, $permissionId, Google_Permission $postBody, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'permissionId' => $permissionId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Permission($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates a permission. (permissions.update)
     *
     * @param string $fileId The ID for the file.
     * @param string $permissionId The ID for the permission.
     * @param Google_Permission $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Permission
     * @throws Google_Exception
     * @opt_param bool transferOwnership Whether changing a role to 'owner' should also downgrade the current owners to writers.
     */
    public function update($fileId, $permissionId, Google_Permission $postBody, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'permissionId' => $permissionId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Permission($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "properties" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_DriveService(...);
 *   $properties = $driveService->properties;
 *  </code>
 */
class Google_PropertiesServiceResource extends Google_ServiceResource
{

    /**
     * Deletes a property. (properties.delete)
     *
     * @param string $fileId The ID of the file.
     * @param string $propertyKey The key of the property.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     * @opt_param string visibility The visibility of the property.
     */
    public function delete($fileId, $propertyKey, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'propertyKey' => $propertyKey];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Gets a property by its key. (properties.get)
     *
     * @param string $fileId The ID of the file.
     * @param string $propertyKey The key of the property.
     * @param array $optParams Optional parameters.
     * @return Google_Property
     * @throws Google_Exception
     * @opt_param string visibility The visibility of the property.
     */
    public function get($fileId, $propertyKey, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'propertyKey' => $propertyKey];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Property($data);
        } else {
            return $data;
        }
    }

    /**
     * Adds a property to a file. (properties.insert)
     *
     * @param string $fileId The ID of the file.
     * @param Google_Property $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Property
     * @throws Google_Exception
     */
    public function insert($fileId, Google_Property $postBody, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Property($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists a file's properties. (properties.list)
     *
     * @param string $fileId The ID of the file.
     * @param array $optParams Optional parameters.
     * @return Google_PropertyList
     * @throws Google_Exception
     */
    public function listProperties($fileId, $optParams = [])
    {
        $params = ['fileId' => $fileId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_PropertyList($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates a property. This method supports patch semantics. (properties.patch)
     *
     * @param string $fileId The ID of the file.
     * @param string $propertyKey The key of the property.
     * @param Google_Property $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Property
     * @throws Google_Exception
     * @opt_param string visibility The visibility of the property.
     */
    public function patch($fileId, $propertyKey, Google_Property $postBody, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'propertyKey' => $propertyKey, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Property($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates a property. (properties.update)
     *
     * @param string $fileId The ID of the file.
     * @param string $propertyKey The key of the property.
     * @param Google_Property $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Property
     * @throws Google_Exception
     * @opt_param string visibility The visibility of the property.
     */
    public function update($fileId, $propertyKey, Google_Property $postBody, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'propertyKey' => $propertyKey, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Property($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "realtime" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_DriveService(...);
 *   $realtime = $driveService->realtime;
 *  </code>
 */
class Google_RealtimeServiceResource extends Google_ServiceResource
{

    /**
     * Exports the contents of the Realtime API data model associated with this file as JSON.
     * (realtime.get)
     *
     * @param string $fileId The ID of the file that the Realtime API data model is associated with.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function get($fileId, $optParams = [])
    {
        $params = ['fileId' => $fileId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        return $data;
    }
}

/**
 * The "replies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_DriveService(...);
 *   $replies = $driveService->replies;
 *  </code>
 */
class Google_RepliesServiceResource extends Google_ServiceResource
{

    /**
     * Deletes a reply. (replies.delete)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param string $replyId The ID of the reply.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($fileId, $commentId, $replyId, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'commentId' => $commentId, 'replyId' => $replyId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Gets a reply. (replies.get)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param string $replyId The ID of the reply.
     * @param array $optParams Optional parameters.
     * @return Google_CommentReply
     * @throws Google_Exception
     * @opt_param bool includeDeleted If set, this will succeed when retrieving a deleted reply.
     */
    public function get($fileId, $commentId, $replyId, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'commentId' => $commentId, 'replyId' => $replyId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_CommentReply($data);
        } else {
            return $data;
        }
    }

    /**
     * Creates a new reply to the given comment. (replies.insert)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param Google_CommentReply $postBody
     * @param array $optParams Optional parameters.
     * @return Google_CommentReply
     * @throws Google_Exception
     */
    public function insert($fileId, $commentId, Google_CommentReply $postBody, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'commentId' => $commentId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_CommentReply($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists all of the replies to a comment. (replies.list)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param array $optParams Optional parameters.
     * @return Google_CommentReplyList
     * @throws Google_Exception
     * @opt_param bool includeDeleted If set, all replies, including deleted replies (with content stripped) will be returned.
     * @opt_param int maxResults The maximum number of replies to include in the response, used for paging.
     * @opt_param string pageToken The continuation token, used to page through large result sets. To get the next page of results, set this parameter to the value of "nextPageToken" from the previous response.
     */
    public function listReplies($fileId, $commentId, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'commentId' => $commentId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_CommentReplyList($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates an existing reply. This method supports patch semantics. (replies.patch)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param string $replyId The ID of the reply.
     * @param Google_CommentReply $postBody
     * @param array $optParams Optional parameters.
     * @return Google_CommentReply
     * @throws Google_Exception
     */
    public function patch($fileId, $commentId, $replyId, Google_CommentReply $postBody, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'commentId' => $commentId, 'replyId' => $replyId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_CommentReply($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates an existing reply. (replies.update)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param string $replyId The ID of the reply.
     * @param Google_CommentReply $postBody
     * @param array $optParams Optional parameters.
     * @return Google_CommentReply
     * @throws Google_Exception
     */
    public function update($fileId, $commentId, $replyId, Google_CommentReply $postBody, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'commentId' => $commentId, 'replyId' => $replyId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_CommentReply($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "revisions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_DriveService(...);
 *   $revisions = $driveService->revisions;
 *  </code>
 */
class Google_RevisionsServiceResource extends Google_ServiceResource
{

    /**
     * Removes a revision. (revisions.delete)
     *
     * @param string $fileId The ID of the file.
     * @param string $revisionId The ID of the revision.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($fileId, $revisionId, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'revisionId' => $revisionId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Gets a specific revision. (revisions.get)
     *
     * @param string $fileId The ID of the file.
     * @param string $revisionId The ID of the revision.
     * @param array $optParams Optional parameters.
     * @return Google_Revision
     * @throws Google_Exception
     */
    public function get($fileId, $revisionId, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'revisionId' => $revisionId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Revision($data);
        } else {
            return $data;
        }
    }

    /**
     * Lists a file's revisions. (revisions.list)
     *
     * @param string $fileId The ID of the file.
     * @param array $optParams Optional parameters.
     * @return Google_RevisionList
     * @throws Google_Exception
     */
    public function listRevisions($fileId, $optParams = [])
    {
        $params = ['fileId' => $fileId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_RevisionList($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates a revision. This method supports patch semantics. (revisions.patch)
     *
     * @param string $fileId The ID for the file.
     * @param string $revisionId The ID for the revision.
     * @param Google_Revision $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Revision
     * @throws Google_Exception
     */
    public function patch($fileId, $revisionId, Google_Revision $postBody, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'revisionId' => $revisionId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Revision($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates a revision. (revisions.update)
     *
     * @param string $fileId The ID for the file.
     * @param string $revisionId The ID for the revision.
     * @param Google_Revision $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Revision
     * @throws Google_Exception
     */
    public function update($fileId, $revisionId, Google_Revision $postBody, $optParams = [])
    {
        $params = ['fileId' => $fileId, 'revisionId' => $revisionId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Revision($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Drive (v2).
 *
 * <p>
 * The API to interact with Drive.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/drive/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_DriveService extends Google_Service
{
    /**
     * @var Google_AboutServiceResource
     */
    public $about;
    /**
     * @var Google_AppsServiceResource
     */
    public $apps;
    /**
     * @var Google_ChangesServiceResource
     */
    public $changes;
    /**
     * @var Google_ChannelsServiceResource
     */
    public $channels;
    /**
     * @var Google_ChildrenServiceResource
     */
    public $children;
    /**
     * @var Google_CommentsServiceResource
     */
    public $comments;
    /**
     * @var Google_FilesServiceResource
     */
    public $files;
    /**
     * @var Google_ParentsServiceResource
     */
    public $parents;
    /**
     * @var Google_PermissionsServiceResource
     */
    public $permissions;
    /**
     * @var Google_PropertiesServiceResource
     */
    public $properties;
    /**
     * @var Google_RealtimeServiceResource
     */
    public $realtime;
    /**
     * @var Google_RepliesServiceResource
     */
    public $replies;
    /**
     * @var Google_RevisionsServiceResource
     */
    public $revisions;

    /**
     * Constructs the internal representation of the Drive service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'drive/v2/';
        $this->version = 'v2';
        $this->serviceName = 'drive';

        $client->addService($this->serviceName, $this->version);
        $this->about = new Google_AboutServiceResource($this, $this->serviceName, 'about', json_decode('{"methods": {"get": {"id": "drive.about.get", "path": "about", "httpMethod": "GET", "parameters": {"includeSubscribed": {"type": "boolean", "default": "true", "location": "query"}, "maxChangeIdCount": {"type": "string", "default": "1", "format": "int64", "location": "query"}, "startChangeId": {"type": "string", "format": "int64", "location": "query"}}, "response": {"$ref": "About"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}}}', true));
        $this->apps = new Google_AppsServiceResource($this, $this->serviceName, 'apps', json_decode('{"methods": {"get": {"id": "drive.apps.get", "path": "apps/{appId}", "httpMethod": "GET", "parameters": {"appId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "App"}, "scopes": ["https://www.googleapis.com/auth/drive.apps.readonly"]}, "list": {"id": "drive.apps.list", "path": "apps", "httpMethod": "GET", "response": {"$ref": "AppList"}, "scopes": ["https://www.googleapis.com/auth/drive.apps.readonly"]}}}', true));
        $this->changes = new Google_ChangesServiceResource($this, $this->serviceName, 'changes', json_decode('{"methods": {"get": {"id": "drive.changes.get", "path": "changes/{changeId}", "httpMethod": "GET", "parameters": {"changeId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Change"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.apps.readonly", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}, "list": {"id": "drive.changes.list", "path": "changes", "httpMethod": "GET", "parameters": {"includeDeleted": {"type": "boolean", "default": "true", "location": "query"}, "includeSubscribed": {"type": "boolean", "default": "true", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "int32", "minimum": "0", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "startChangeId": {"type": "string", "format": "int64", "location": "query"}}, "response": {"$ref": "ChangeList"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.apps.readonly", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"], "supportsSubscription": true}, "watch": {"id": "drive.changes.watch", "path": "changes/watch", "httpMethod": "POST", "parameters": {"includeDeleted": {"type": "boolean", "default": "true", "location": "query"}, "includeSubscribed": {"type": "boolean", "default": "true", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "int32", "minimum": "0", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "startChangeId": {"type": "string", "format": "int64", "location": "query"}}, "request": {"$ref": "Channel"}, "response": {"$ref": "Channel"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.apps.readonly", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"], "supportsSubscription": true}}}', true));
        $this->channels = new Google_ChannelsServiceResource($this, $this->serviceName, 'channels', json_decode('{"methods": {"stop": {"id": "drive.channels.stop", "path": "channels/stop", "httpMethod": "POST", "request": {"$ref": "Channel"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.apps.readonly", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}}}', true));
        $this->children = new Google_ChildrenServiceResource($this, $this->serviceName, 'children', json_decode('{"methods": {"delete": {"id": "drive.children.delete", "path": "files/{folderId}/children/{childId}", "httpMethod": "DELETE", "parameters": {"childId": {"type": "string", "required": true, "location": "path"}, "folderId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "get": {"id": "drive.children.get", "path": "files/{folderId}/children/{childId}", "httpMethod": "GET", "parameters": {"childId": {"type": "string", "required": true, "location": "path"}, "folderId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "ChildReference"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}, "insert": {"id": "drive.children.insert", "path": "files/{folderId}/children", "httpMethod": "POST", "parameters": {"folderId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "ChildReference"}, "response": {"$ref": "ChildReference"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "list": {"id": "drive.children.list", "path": "files/{folderId}/children", "httpMethod": "GET", "parameters": {"folderId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "default": "100", "format": "int32", "minimum": "0", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "q": {"type": "string", "location": "query"}}, "response": {"$ref": "ChildList"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}}}', true));
        $this->comments = new Google_CommentsServiceResource($this, $this->serviceName, 'comments', json_decode('{"methods": {"delete": {"id": "drive.comments.delete", "path": "files/{fileId}/comments/{commentId}", "httpMethod": "DELETE", "parameters": {"commentId": {"type": "string", "required": true, "location": "path"}, "fileId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.readonly"]}, "get": {"id": "drive.comments.get", "path": "files/{fileId}/comments/{commentId}", "httpMethod": "GET", "parameters": {"commentId": {"type": "string", "required": true, "location": "path"}, "fileId": {"type": "string", "required": true, "location": "path"}, "includeDeleted": {"type": "boolean", "default": "false", "location": "query"}}, "response": {"$ref": "Comment"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.readonly"]}, "insert": {"id": "drive.comments.insert", "path": "files/{fileId}/comments", "httpMethod": "POST", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Comment"}, "response": {"$ref": "Comment"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.readonly"]}, "list": {"id": "drive.comments.list", "path": "files/{fileId}/comments", "httpMethod": "GET", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "includeDeleted": {"type": "boolean", "default": "false", "location": "query"}, "maxResults": {"type": "integer", "default": "20", "format": "int32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "updatedMin": {"type": "string", "location": "query"}}, "response": {"$ref": "CommentList"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.readonly"]}, "patch": {"id": "drive.comments.patch", "path": "files/{fileId}/comments/{commentId}", "httpMethod": "PATCH", "parameters": {"commentId": {"type": "string", "required": true, "location": "path"}, "fileId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Comment"}, "response": {"$ref": "Comment"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "update": {"id": "drive.comments.update", "path": "files/{fileId}/comments/{commentId}", "httpMethod": "PUT", "parameters": {"commentId": {"type": "string", "required": true, "location": "path"}, "fileId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Comment"}, "response": {"$ref": "Comment"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}}}', true));
        $this->files = new Google_FilesServiceResource($this, $this->serviceName, 'files', json_decode('{"methods": {"copy": {"id": "drive.files.copy", "path": "files/{fileId}/copy", "httpMethod": "POST", "parameters": {"convert": {"type": "boolean", "default": "false", "location": "query"}, "fileId": {"type": "string", "required": true, "location": "path"}, "ocr": {"type": "boolean", "default": "false", "location": "query"}, "ocrLanguage": {"type": "string", "location": "query"}, "pinned": {"type": "boolean", "default": "false", "location": "query"}, "timedTextLanguage": {"type": "string", "location": "query"}, "timedTextTrackName": {"type": "string", "location": "query"}, "visibility": {"type": "string", "default": "DEFAULT", "enum": ["DEFAULT", "PRIVATE"], "location": "query"}}, "request": {"$ref": "File"}, "response": {"$ref": "File"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.apps.readonly", "https://www.googleapis.com/auth/drive.file"]}, "delete": {"id": "drive.files.delete", "path": "files/{fileId}", "httpMethod": "DELETE", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "get": {"id": "drive.files.get", "path": "files/{fileId}", "httpMethod": "GET", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "projection": {"type": "string", "enum": ["BASIC", "FULL"], "location": "query"}, "updateViewedDate": {"type": "boolean", "default": "false", "location": "query"}}, "response": {"$ref": "File"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.apps.readonly", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"], "supportsSubscription": true}, "insert": {"id": "drive.files.insert", "path": "files", "httpMethod": "POST", "parameters": {"convert": {"type": "boolean", "default": "false", "location": "query"}, "ocr": {"type": "boolean", "default": "false", "location": "query"}, "ocrLanguage": {"type": "string", "location": "query"}, "pinned": {"type": "boolean", "default": "false", "location": "query"}, "timedTextLanguage": {"type": "string", "location": "query"}, "timedTextTrackName": {"type": "string", "location": "query"}, "useContentAsIndexableText": {"type": "boolean", "default": "false", "location": "query"}, "visibility": {"type": "string", "default": "DEFAULT", "enum": ["DEFAULT", "PRIVATE"], "location": "query"}}, "request": {"$ref": "File"}, "response": {"$ref": "File"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.apps.readonly", "https://www.googleapis.com/auth/drive.file"], "supportsMediaUpload": true, "mediaUpload": {"accept": ["*/*"], "maxSize": "10GB", "protocols": {"simple": {"multipart": true, "path": "/upload/drive/v2/files"}, "resumable": {"multipart": true, "path": "/resumable/upload/drive/v2/files"}}}, "supportsSubscription": true}, "list": {"id": "drive.files.list", "path": "files", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "default": "100", "format": "int32", "minimum": "0", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "projection": {"type": "string", "enum": ["BASIC", "FULL"], "location": "query"}, "q": {"type": "string", "location": "query"}}, "response": {"$ref": "FileList"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.apps.readonly", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}, "patch": {"id": "drive.files.patch", "path": "files/{fileId}", "httpMethod": "PATCH", "parameters": {"convert": {"type": "boolean", "default": "false", "location": "query"}, "fileId": {"type": "string", "required": true, "location": "path"}, "newRevision": {"type": "boolean", "default": "true", "location": "query"}, "ocr": {"type": "boolean", "default": "false", "location": "query"}, "ocrLanguage": {"type": "string", "location": "query"}, "pinned": {"type": "boolean", "default": "false", "location": "query"}, "setModifiedDate": {"type": "boolean", "default": "false", "location": "query"}, "timedTextLanguage": {"type": "string", "location": "query"}, "timedTextTrackName": {"type": "string", "location": "query"}, "updateViewedDate": {"type": "boolean", "default": "true", "location": "query"}, "useContentAsIndexableText": {"type": "boolean", "default": "false", "location": "query"}}, "request": {"$ref": "File"}, "response": {"$ref": "File"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.apps.readonly", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.scripts"]}, "touch": {"id": "drive.files.touch", "path": "files/{fileId}/touch", "httpMethod": "POST", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "File"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.apps.readonly", "https://www.googleapis.com/auth/drive.file"]}, "trash": {"id": "drive.files.trash", "path": "files/{fileId}/trash", "httpMethod": "POST", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "File"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.apps.readonly", "https://www.googleapis.com/auth/drive.file"]}, "untrash": {"id": "drive.files.untrash", "path": "files/{fileId}/untrash", "httpMethod": "POST", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "File"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.apps.readonly", "https://www.googleapis.com/auth/drive.file"]}, "update": {"id": "drive.files.update", "path": "files/{fileId}", "httpMethod": "PUT", "parameters": {"convert": {"type": "boolean", "default": "false", "location": "query"}, "fileId": {"type": "string", "required": true, "location": "path"}, "newRevision": {"type": "boolean", "default": "true", "location": "query"}, "ocr": {"type": "boolean", "default": "false", "location": "query"}, "ocrLanguage": {"type": "string", "location": "query"}, "pinned": {"type": "boolean", "default": "false", "location": "query"}, "setModifiedDate": {"type": "boolean", "default": "false", "location": "query"}, "timedTextLanguage": {"type": "string", "location": "query"}, "timedTextTrackName": {"type": "string", "location": "query"}, "updateViewedDate": {"type": "boolean", "default": "true", "location": "query"}, "useContentAsIndexableText": {"type": "boolean", "default": "false", "location": "query"}}, "request": {"$ref": "File"}, "response": {"$ref": "File"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.apps.readonly", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.scripts"], "supportsMediaUpload": true, "mediaUpload": {"accept": ["*/*"], "maxSize": "10GB", "protocols": {"simple": {"multipart": true, "path": "/upload/drive/v2/files/{fileId}"}, "resumable": {"multipart": true, "path": "/resumable/upload/drive/v2/files/{fileId}"}}}}, "watch": {"id": "drive.files.watch", "path": "files/{fileId}/watch", "httpMethod": "POST", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "projection": {"type": "string", "enum": ["BASIC", "FULL"], "location": "query"}, "updateViewedDate": {"type": "boolean", "default": "false", "location": "query"}}, "request": {"$ref": "Channel"}, "response": {"$ref": "Channel"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.apps.readonly", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"], "supportsSubscription": true}}}', true));
        $this->parents = new Google_ParentsServiceResource($this, $this->serviceName, 'parents', json_decode('{"methods": {"delete": {"id": "drive.parents.delete", "path": "files/{fileId}/parents/{parentId}", "httpMethod": "DELETE", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "parentId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "get": {"id": "drive.parents.get", "path": "files/{fileId}/parents/{parentId}", "httpMethod": "GET", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "parentId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "ParentReference"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}, "insert": {"id": "drive.parents.insert", "path": "files/{fileId}/parents", "httpMethod": "POST", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "ParentReference"}, "response": {"$ref": "ParentReference"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "list": {"id": "drive.parents.list", "path": "files/{fileId}/parents", "httpMethod": "GET", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "ParentList"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}}}', true));
        $this->permissions = new Google_PermissionsServiceResource($this, $this->serviceName, 'permissions', json_decode('{"methods": {"delete": {"id": "drive.permissions.delete", "path": "files/{fileId}/permissions/{permissionId}", "httpMethod": "DELETE", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "permissionId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "get": {"id": "drive.permissions.get", "path": "files/{fileId}/permissions/{permissionId}", "httpMethod": "GET", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "permissionId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Permission"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}, "insert": {"id": "drive.permissions.insert", "path": "files/{fileId}/permissions", "httpMethod": "POST", "parameters": {"emailMessage": {"type": "string", "location": "query"}, "fileId": {"type": "string", "required": true, "location": "path"}, "sendNotificationEmails": {"type": "boolean", "default": "true", "location": "query"}}, "request": {"$ref": "Permission"}, "response": {"$ref": "Permission"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "list": {"id": "drive.permissions.list", "path": "files/{fileId}/permissions", "httpMethod": "GET", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "PermissionList"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}, "patch": {"id": "drive.permissions.patch", "path": "files/{fileId}/permissions/{permissionId}", "httpMethod": "PATCH", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "permissionId": {"type": "string", "required": true, "location": "path"}, "transferOwnership": {"type": "boolean", "default": "false", "location": "query"}}, "request": {"$ref": "Permission"}, "response": {"$ref": "Permission"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "update": {"id": "drive.permissions.update", "path": "files/{fileId}/permissions/{permissionId}", "httpMethod": "PUT", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "permissionId": {"type": "string", "required": true, "location": "path"}, "transferOwnership": {"type": "boolean", "default": "false", "location": "query"}}, "request": {"$ref": "Permission"}, "response": {"$ref": "Permission"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}}}', true));
        $this->properties = new Google_PropertiesServiceResource($this, $this->serviceName, 'properties', json_decode('{"methods": {"delete": {"id": "drive.properties.delete", "path": "files/{fileId}/properties/{propertyKey}", "httpMethod": "DELETE", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "propertyKey": {"type": "string", "required": true, "location": "path"}, "visibility": {"type": "string", "default": "private", "location": "query"}}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "get": {"id": "drive.properties.get", "path": "files/{fileId}/properties/{propertyKey}", "httpMethod": "GET", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "propertyKey": {"type": "string", "required": true, "location": "path"}, "visibility": {"type": "string", "default": "private", "location": "query"}}, "response": {"$ref": "Property"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}, "insert": {"id": "drive.properties.insert", "path": "files/{fileId}/properties", "httpMethod": "POST", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Property"}, "response": {"$ref": "Property"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "list": {"id": "drive.properties.list", "path": "files/{fileId}/properties", "httpMethod": "GET", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "PropertyList"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}, "patch": {"id": "drive.properties.patch", "path": "files/{fileId}/properties/{propertyKey}", "httpMethod": "PATCH", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "propertyKey": {"type": "string", "required": true, "location": "path"}, "visibility": {"type": "string", "default": "private", "location": "query"}}, "request": {"$ref": "Property"}, "response": {"$ref": "Property"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "update": {"id": "drive.properties.update", "path": "files/{fileId}/properties/{propertyKey}", "httpMethod": "PUT", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "propertyKey": {"type": "string", "required": true, "location": "path"}, "visibility": {"type": "string", "default": "private", "location": "query"}}, "request": {"$ref": "Property"}, "response": {"$ref": "Property"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}}}', true));
        $this->realtime = new Google_RealtimeServiceResource($this, $this->serviceName, 'realtime', json_decode('{"methods": {"get": {"id": "drive.realtime.get", "path": "files/{fileId}/realtime", "httpMethod": "GET", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.readonly"], "supportsMediaDownload": true}}}', true));
        $this->replies = new Google_RepliesServiceResource($this, $this->serviceName, 'replies', json_decode('{"methods": {"delete": {"id": "drive.replies.delete", "path": "files/{fileId}/comments/{commentId}/replies/{replyId}", "httpMethod": "DELETE", "parameters": {"commentId": {"type": "string", "required": true, "location": "path"}, "fileId": {"type": "string", "required": true, "location": "path"}, "replyId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "get": {"id": "drive.replies.get", "path": "files/{fileId}/comments/{commentId}/replies/{replyId}", "httpMethod": "GET", "parameters": {"commentId": {"type": "string", "required": true, "location": "path"}, "fileId": {"type": "string", "required": true, "location": "path"}, "includeDeleted": {"type": "boolean", "default": "false", "location": "query"}, "replyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CommentReply"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.readonly"]}, "insert": {"id": "drive.replies.insert", "path": "files/{fileId}/comments/{commentId}/replies", "httpMethod": "POST", "parameters": {"commentId": {"type": "string", "required": true, "location": "path"}, "fileId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "CommentReply"}, "response": {"$ref": "CommentReply"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "list": {"id": "drive.replies.list", "path": "files/{fileId}/comments/{commentId}/replies", "httpMethod": "GET", "parameters": {"commentId": {"type": "string", "required": true, "location": "path"}, "fileId": {"type": "string", "required": true, "location": "path"}, "includeDeleted": {"type": "boolean", "default": "false", "location": "query"}, "maxResults": {"type": "integer", "default": "20", "format": "int32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "CommentReplyList"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.readonly"]}, "patch": {"id": "drive.replies.patch", "path": "files/{fileId}/comments/{commentId}/replies/{replyId}", "httpMethod": "PATCH", "parameters": {"commentId": {"type": "string", "required": true, "location": "path"}, "fileId": {"type": "string", "required": true, "location": "path"}, "replyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "CommentReply"}, "response": {"$ref": "CommentReply"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "update": {"id": "drive.replies.update", "path": "files/{fileId}/comments/{commentId}/replies/{replyId}", "httpMethod": "PUT", "parameters": {"commentId": {"type": "string", "required": true, "location": "path"}, "fileId": {"type": "string", "required": true, "location": "path"}, "replyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "CommentReply"}, "response": {"$ref": "CommentReply"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}}}', true));
        $this->revisions = new Google_RevisionsServiceResource($this, $this->serviceName, 'revisions', json_decode('{"methods": {"delete": {"id": "drive.revisions.delete", "path": "files/{fileId}/revisions/{revisionId}", "httpMethod": "DELETE", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "revisionId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "get": {"id": "drive.revisions.get", "path": "files/{fileId}/revisions/{revisionId}", "httpMethod": "GET", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "revisionId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Revision"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}, "list": {"id": "drive.revisions.list", "path": "files/{fileId}/revisions", "httpMethod": "GET", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "RevisionList"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}, "patch": {"id": "drive.revisions.patch", "path": "files/{fileId}/revisions/{revisionId}", "httpMethod": "PATCH", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "revisionId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Revision"}, "response": {"$ref": "Revision"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "update": {"id": "drive.revisions.update", "path": "files/{fileId}/revisions/{revisionId}", "httpMethod": "PUT", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "revisionId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Revision"}, "response": {"$ref": "Revision"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}}}', true));

    }
}


/**
 * Class Google_About
 */
class Google_About extends Google_Model
{
    /**
     * @var string
     */
    protected $__additionalRoleInfoType = 'Google_AboutAdditionalRoleInfo';
    /**
     * @var string
     */
    protected $__additionalRoleInfoDataType = 'array';
    /**
     * @var
     */
    public $additionalRoleInfo;
    /**
     * @var
     */
    public $domainSharingPolicy;
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__exportFormatsType = 'Google_AboutExportFormats';
    /**
     * @var string
     */
    protected $__exportFormatsDataType = 'array';
    /**
     * @var
     */
    public $exportFormats;
    /**
     * @var string
     */
    protected $__featuresType = 'Google_AboutFeatures';
    /**
     * @var string
     */
    protected $__featuresDataType = 'array';
    /**
     * @var
     */
    public $features;
    /**
     * @var string
     */
    protected $__importFormatsType = 'Google_AboutImportFormats';
    /**
     * @var string
     */
    protected $__importFormatsDataType = 'array';
    /**
     * @var
     */
    public $importFormats;
    /**
     * @var
     */
    public $isCurrentAppInstalled;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $largestChangeId;
    /**
     * @var string
     */
    protected $__maxUploadSizesType = 'Google_AboutMaxUploadSizes';
    /**
     * @var string
     */
    protected $__maxUploadSizesDataType = 'array';
    /**
     * @var
     */
    public $maxUploadSizes;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $permissionId;
    /**
     * @var
     */
    public $quotaBytesTotal;
    /**
     * @var
     */
    public $quotaBytesUsed;
    /**
     * @var
     */
    public $quotaBytesUsedAggregate;
    /**
     * @var
     */
    public $quotaBytesUsedInTrash;
    /**
     * @var
     */
    public $remainingChangeIds;
    /**
     * @var
     */
    public $rootFolderId;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var string
     */
    protected $__userType = 'Google_User';
    /**
     * @var string
     */
    protected $__userDataType = '';
    /**
     * @var
     */
    public $user;

    /**
     * @param $additionalRoleInfo
     * @throws Google_Exception
     */
    public function setAdditionalRoleInfo(/* array(Google_AboutAdditionalRoleInfo) */
        $additionalRoleInfo)
    {
        $this->assertIsArray($additionalRoleInfo, 'Google_AboutAdditionalRoleInfo', __METHOD__);
        $this->additionalRoleInfo = $additionalRoleInfo;
    }

    /**
     * @return mixed
     */
    public function getAdditionalRoleInfo()
    {
        return $this->additionalRoleInfo;
    }

    /**
     * @param $domainSharingPolicy
     */
    public function setDomainSharingPolicy($domainSharingPolicy)
    {
        $this->domainSharingPolicy = $domainSharingPolicy;
    }

    /**
     * @return mixed
     */
    public function getDomainSharingPolicy()
    {
        return $this->domainSharingPolicy;
    }

    /**
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    /**
     * @return mixed
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param $exportFormats
     * @throws Google_Exception
     */
    public function setExportFormats(/* array(Google_AboutExportFormats) */
        $exportFormats)
    {
        $this->assertIsArray($exportFormats, 'Google_AboutExportFormats', __METHOD__);
        $this->exportFormats = $exportFormats;
    }

    /**
     * @return mixed
     */
    public function getExportFormats()
    {
        return $this->exportFormats;
    }

    /**
     * @param $features
     * @throws Google_Exception
     */
    public function setFeatures(/* array(Google_AboutFeatures) */
        $features)
    {
        $this->assertIsArray($features, 'Google_AboutFeatures', __METHOD__);
        $this->features = $features;
    }

    /**
     * @return mixed
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * @param $importFormats
     * @throws Google_Exception
     */
    public function setImportFormats(/* array(Google_AboutImportFormats) */
        $importFormats)
    {
        $this->assertIsArray($importFormats, 'Google_AboutImportFormats', __METHOD__);
        $this->importFormats = $importFormats;
    }

    /**
     * @return mixed
     */
    public function getImportFormats()
    {
        return $this->importFormats;
    }

    /**
     * @param $isCurrentAppInstalled
     */
    public function setIsCurrentAppInstalled($isCurrentAppInstalled)
    {
        $this->isCurrentAppInstalled = $isCurrentAppInstalled;
    }

    /**
     * @return mixed
     */
    public function getIsCurrentAppInstalled()
    {
        return $this->isCurrentAppInstalled;
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
     * @param $largestChangeId
     */
    public function setLargestChangeId($largestChangeId)
    {
        $this->largestChangeId = $largestChangeId;
    }

    /**
     * @return mixed
     */
    public function getLargestChangeId()
    {
        return $this->largestChangeId;
    }

    /**
     * @param $maxUploadSizes
     * @throws Google_Exception
     */
    public function setMaxUploadSizes(/* array(Google_AboutMaxUploadSizes) */
        $maxUploadSizes)
    {
        $this->assertIsArray($maxUploadSizes, 'Google_AboutMaxUploadSizes', __METHOD__);
        $this->maxUploadSizes = $maxUploadSizes;
    }

    /**
     * @return mixed
     */
    public function getMaxUploadSizes()
    {
        return $this->maxUploadSizes;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $permissionId
     */
    public function setPermissionId($permissionId)
    {
        $this->permissionId = $permissionId;
    }

    /**
     * @return mixed
     */
    public function getPermissionId()
    {
        return $this->permissionId;
    }

    /**
     * @param $quotaBytesTotal
     */
    public function setQuotaBytesTotal($quotaBytesTotal)
    {
        $this->quotaBytesTotal = $quotaBytesTotal;
    }

    /**
     * @return mixed
     */
    public function getQuotaBytesTotal()
    {
        return $this->quotaBytesTotal;
    }

    /**
     * @param $quotaBytesUsed
     */
    public function setQuotaBytesUsed($quotaBytesUsed)
    {
        $this->quotaBytesUsed = $quotaBytesUsed;
    }

    /**
     * @return mixed
     */
    public function getQuotaBytesUsed()
    {
        return $this->quotaBytesUsed;
    }

    /**
     * @param $quotaBytesUsedAggregate
     */
    public function setQuotaBytesUsedAggregate($quotaBytesUsedAggregate)
    {
        $this->quotaBytesUsedAggregate = $quotaBytesUsedAggregate;
    }

    /**
     * @return mixed
     */
    public function getQuotaBytesUsedAggregate()
    {
        return $this->quotaBytesUsedAggregate;
    }

    /**
     * @param $quotaBytesUsedInTrash
     */
    public function setQuotaBytesUsedInTrash($quotaBytesUsedInTrash)
    {
        $this->quotaBytesUsedInTrash = $quotaBytesUsedInTrash;
    }

    /**
     * @return mixed
     */
    public function getQuotaBytesUsedInTrash()
    {
        return $this->quotaBytesUsedInTrash;
    }

    /**
     * @param $remainingChangeIds
     */
    public function setRemainingChangeIds($remainingChangeIds)
    {
        $this->remainingChangeIds = $remainingChangeIds;
    }

    /**
     * @return mixed
     */
    public function getRemainingChangeIds()
    {
        return $this->remainingChangeIds;
    }

    /**
     * @param $rootFolderId
     */
    public function setRootFolderId($rootFolderId)
    {
        $this->rootFolderId = $rootFolderId;
    }

    /**
     * @return mixed
     */
    public function getRootFolderId()
    {
        return $this->rootFolderId;
    }

    /**
     * @param $selfLink
     */
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    /**
     * @return mixed
     */
    public function getSelfLink()
    {
        return $this->selfLink;
    }

    /**
     * @param Google_User $user
     */
    public function setUser(Google_User $user)
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
 * Class Google_AboutAdditionalRoleInfo
 */
class Google_AboutAdditionalRoleInfo extends Google_Model
{
    /**
     * @var string
     */
    protected $__roleSetsType = 'Google_AboutAdditionalRoleInfoRoleSets';
    /**
     * @var string
     */
    protected $__roleSetsDataType = 'array';
    /**
     * @var
     */
    public $roleSets;
    /**
     * @var
     */
    public $type;

    /**
     * @param $roleSets
     * @throws Google_Exception
     */
    public function setRoleSets(/* array(Google_AboutAdditionalRoleInfoRoleSets) */
        $roleSets)
    {
        $this->assertIsArray($roleSets, 'Google_AboutAdditionalRoleInfoRoleSets', __METHOD__);
        $this->roleSets = $roleSets;
    }

    /**
     * @return mixed
     */
    public function getRoleSets()
    {
        return $this->roleSets;
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
 * Class Google_AboutAdditionalRoleInfoRoleSets
 */
class Google_AboutAdditionalRoleInfoRoleSets extends Google_Model
{
    /**
     * @var
     */
    public $additionalRoles;
    /**
     * @var
     */
    public $primaryRole;

    /**
     * @param $additionalRoles
     * @throws Google_Exception
     */
    public function setAdditionalRoles(/* array(Google_string) */
        $additionalRoles)
    {
        $this->assertIsArray($additionalRoles, 'Google_string', __METHOD__);
        $this->additionalRoles = $additionalRoles;
    }

    /**
     * @return mixed
     */
    public function getAdditionalRoles()
    {
        return $this->additionalRoles;
    }

    /**
     * @param $primaryRole
     */
    public function setPrimaryRole($primaryRole)
    {
        $this->primaryRole = $primaryRole;
    }

    /**
     * @return mixed
     */
    public function getPrimaryRole()
    {
        return $this->primaryRole;
    }
}

/**
 * Class Google_AboutExportFormats
 */
class Google_AboutExportFormats extends Google_Model
{
    /**
     * @var
     */
    public $source;
    /**
     * @var
     */
    public $targets;

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
     * @param $targets
     * @throws Google_Exception
     */
    public function setTargets(/* array(Google_string) */
        $targets)
    {
        $this->assertIsArray($targets, 'Google_string', __METHOD__);
        $this->targets = $targets;
    }

    /**
     * @return mixed
     */
    public function getTargets()
    {
        return $this->targets;
    }
}

/**
 * Class Google_AboutFeatures
 */
class Google_AboutFeatures extends Google_Model
{
    /**
     * @var
     */
    public $featureName;
    /**
     * @var
     */
    public $featureRate;

    /**
     * @param $featureName
     */
    public function setFeatureName($featureName)
    {
        $this->featureName = $featureName;
    }

    /**
     * @return mixed
     */
    public function getFeatureName()
    {
        return $this->featureName;
    }

    /**
     * @param $featureRate
     */
    public function setFeatureRate($featureRate)
    {
        $this->featureRate = $featureRate;
    }

    /**
     * @return mixed
     */
    public function getFeatureRate()
    {
        return $this->featureRate;
    }
}

/**
 * Class Google_AboutImportFormats
 */
class Google_AboutImportFormats extends Google_Model
{
    /**
     * @var
     */
    public $source;
    /**
     * @var
     */
    public $targets;

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
     * @param $targets
     * @throws Google_Exception
     */
    public function setTargets(/* array(Google_string) */
        $targets)
    {
        $this->assertIsArray($targets, 'Google_string', __METHOD__);
        $this->targets = $targets;
    }

    /**
     * @return mixed
     */
    public function getTargets()
    {
        return $this->targets;
    }
}

/**
 * Class Google_AboutMaxUploadSizes
 */
class Google_AboutMaxUploadSizes extends Google_Model
{
    /**
     * @var
     */
    public $size;
    /**
     * @var
     */
    public $type;

    /**
     * @param $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
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
 * Class Google_App
 */
class Google_App extends Google_Model
{
    /**
     * @var
     */
    public $authorized;
    /**
     * @var string
     */
    protected $__iconsType = 'Google_AppIcons';
    /**
     * @var string
     */
    protected $__iconsDataType = 'array';
    /**
     * @var
     */
    public $icons;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $installed;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $longDescription;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $objectType;
    /**
     * @var
     */
    public $openUrlTemplate;
    /**
     * @var
     */
    public $primaryFileExtensions;
    /**
     * @var
     */
    public $primaryMimeTypes;
    /**
     * @var
     */
    public $productId;
    /**
     * @var
     */
    public $productUrl;
    /**
     * @var
     */
    public $secondaryFileExtensions;
    /**
     * @var
     */
    public $secondaryMimeTypes;
    /**
     * @var
     */
    public $shortDescription;
    /**
     * @var
     */
    public $supportsCreate;
    /**
     * @var
     */
    public $supportsImport;
    /**
     * @var
     */
    public $supportsMultiOpen;
    /**
     * @var
     */
    public $useByDefault;

    /**
     * @param $authorized
     */
    public function setAuthorized($authorized)
    {
        $this->authorized = $authorized;
    }

    /**
     * @return mixed
     */
    public function getAuthorized()
    {
        return $this->authorized;
    }

    /**
     * @param $icons
     * @throws Google_Exception
     */
    public function setIcons(/* array(Google_AppIcons) */
        $icons)
    {
        $this->assertIsArray($icons, 'Google_AppIcons', __METHOD__);
        $this->icons = $icons;
    }

    /**
     * @return mixed
     */
    public function getIcons()
    {
        return $this->icons;
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
     * @param $installed
     */
    public function setInstalled($installed)
    {
        $this->installed = $installed;
    }

    /**
     * @return mixed
     */
    public function getInstalled()
    {
        return $this->installed;
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
     * @param $longDescription
     */
    public function setLongDescription($longDescription)
    {
        $this->longDescription = $longDescription;
    }

    /**
     * @return mixed
     */
    public function getLongDescription()
    {
        return $this->longDescription;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
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
     * @param $openUrlTemplate
     */
    public function setOpenUrlTemplate($openUrlTemplate)
    {
        $this->openUrlTemplate = $openUrlTemplate;
    }

    /**
     * @return mixed
     */
    public function getOpenUrlTemplate()
    {
        return $this->openUrlTemplate;
    }

    /**
     * @param $primaryFileExtensions
     * @throws Google_Exception
     */
    public function setPrimaryFileExtensions(/* array(Google_string) */
        $primaryFileExtensions)
    {
        $this->assertIsArray($primaryFileExtensions, 'Google_string', __METHOD__);
        $this->primaryFileExtensions = $primaryFileExtensions;
    }

    /**
     * @return mixed
     */
    public function getPrimaryFileExtensions()
    {
        return $this->primaryFileExtensions;
    }

    /**
     * @param $primaryMimeTypes
     * @throws Google_Exception
     */
    public function setPrimaryMimeTypes(/* array(Google_string) */
        $primaryMimeTypes)
    {
        $this->assertIsArray($primaryMimeTypes, 'Google_string', __METHOD__);
        $this->primaryMimeTypes = $primaryMimeTypes;
    }

    /**
     * @return mixed
     */
    public function getPrimaryMimeTypes()
    {
        return $this->primaryMimeTypes;
    }

    /**
     * @param $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param $productUrl
     */
    public function setProductUrl($productUrl)
    {
        $this->productUrl = $productUrl;
    }

    /**
     * @return mixed
     */
    public function getProductUrl()
    {
        return $this->productUrl;
    }

    /**
     * @param $secondaryFileExtensions
     * @throws Google_Exception
     */
    public function setSecondaryFileExtensions(/* array(Google_string) */
        $secondaryFileExtensions)
    {
        $this->assertIsArray($secondaryFileExtensions, 'Google_string', __METHOD__);
        $this->secondaryFileExtensions = $secondaryFileExtensions;
    }

    /**
     * @return mixed
     */
    public function getSecondaryFileExtensions()
    {
        return $this->secondaryFileExtensions;
    }

    /**
     * @param $secondaryMimeTypes
     * @throws Google_Exception
     */
    public function setSecondaryMimeTypes(/* array(Google_string) */
        $secondaryMimeTypes)
    {
        $this->assertIsArray($secondaryMimeTypes, 'Google_string', __METHOD__);
        $this->secondaryMimeTypes = $secondaryMimeTypes;
    }

    /**
     * @return mixed
     */
    public function getSecondaryMimeTypes()
    {
        return $this->secondaryMimeTypes;
    }

    /**
     * @param $shortDescription
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
    }

    /**
     * @return mixed
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * @param $supportsCreate
     */
    public function setSupportsCreate($supportsCreate)
    {
        $this->supportsCreate = $supportsCreate;
    }

    /**
     * @return mixed
     */
    public function getSupportsCreate()
    {
        return $this->supportsCreate;
    }

    /**
     * @param $supportsImport
     */
    public function setSupportsImport($supportsImport)
    {
        $this->supportsImport = $supportsImport;
    }

    /**
     * @return mixed
     */
    public function getSupportsImport()
    {
        return $this->supportsImport;
    }

    /**
     * @param $supportsMultiOpen
     */
    public function setSupportsMultiOpen($supportsMultiOpen)
    {
        $this->supportsMultiOpen = $supportsMultiOpen;
    }

    /**
     * @return mixed
     */
    public function getSupportsMultiOpen()
    {
        return $this->supportsMultiOpen;
    }

    /**
     * @param $useByDefault
     */
    public function setUseByDefault($useByDefault)
    {
        $this->useByDefault = $useByDefault;
    }

    /**
     * @return mixed
     */
    public function getUseByDefault()
    {
        return $this->useByDefault;
    }
}

/**
 * Class Google_AppIcons
 */
class Google_AppIcons extends Google_Model
{
    /**
     * @var
     */
    public $category;
    /**
     * @var
     */
    public $iconUrl;
    /**
     * @var
     */
    public $size;

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
     * @param $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }
}

/**
 * Class Google_AppList
 */
class Google_AppList extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_App';
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
    public $selfLink;

    /**
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    /**
     * @return mixed
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_App) */
        $items)
    {
        $this->assertIsArray($items, 'Google_App', __METHOD__);
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
     * @param $selfLink
     */
    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    /**
     * @return mixed
     */
    public function getSelfLink()
    {
        return $this->selfLink;
    }
}

/**
 * Class Google_Change
 */
class Google_Change extends Google_Model
{
    /**
     * @var
     */
    public $deleted;
    /**
     * @var string
     */
    protected $__fileType = 'Google_DriveFile';
    /**
     * @var string
     */
    protected $__fileDataType = '';
    /**
     * @var
     */
    public $file;
    /**
     * @var
     */
    public $fileId;
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
    public $selfLink;

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
     * @param Google_DriveFile $file
     */
    public function setFile(Google_DriveFile $file)
    {
        $this->file = $file;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param $fileId
     */
    public function setFileId($fileId)
    {
        $this->fileId = $fileId;
    }

    /**
     * @return mixed
     */
    public function getFileId()
    {
        return $this->fileId;
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
 * Class Google_ChangeList
 */
class Google_ChangeList extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Change';
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
    public $largestChangeId;
    /**
     * @var
     */
    public $nextLink;
    /**
     * @var
     */
    public $nextPageToken;
    /**
     * @var
     */
    public $selfLink;

    /**
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    /**
     * @return mixed
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Change) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Change', __METHOD__);
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
     * @param $largestChangeId
     */
    public function setLargestChangeId($largestChangeId)
    {
        $this->largestChangeId = $largestChangeId;
    }

    /**
     * @return mixed
     */
    public function getLargestChangeId()
    {
        return $this->largestChangeId;
    }

    /**
     * @param $nextLink
     */
    public function setNextLink($nextLink)
    {
        $this->nextLink = $nextLink;
    }

    /**
     * @return mixed
     */
    public function getNextLink()
    {
        return $this->nextLink;
    }

    /**
     * @param $nextPageToken
     */
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    /**
     * @return mixed
     */
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
 * Class Google_Channel
 */
class Google_Channel extends Google_Model
{
    /**
     * @var
     */
    public $address;
    /**
     * @var
     */
    public $expiration;
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
    public $params;
    /**
     * @var
     */
    public $resourceId;
    /**
     * @var
     */
    public $resourceUri;
    /**
     * @var
     */
    public $token;
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
     * @param $expiration
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;
    }

    /**
     * @return mixed
     */
    public function getExpiration()
    {
        return $this->expiration;
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
     * @param $params
     */
    public function setParams($params)
    {
        $this->params = $params;
    }

    /**
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
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
     * @param $resourceUri
     */
    public function setResourceUri($resourceUri)
    {
        $this->resourceUri = $resourceUri;
    }

    /**
     * @return mixed
     */
    public function getResourceUri()
    {
        return $this->resourceUri;
    }

    /**
     * @param $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
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
 * Class Google_ChildList
 */
class Google_ChildList extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_ChildReference';
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
    public $nextLink;
    /**
     * @var
     */
    public $nextPageToken;
    /**
     * @var
     */
    public $selfLink;

    /**
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    /**
     * @return mixed
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_ChildReference) */
        $items)
    {
        $this->assertIsArray($items, 'Google_ChildReference', __METHOD__);
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
     * @param $nextLink
     */
    public function setNextLink($nextLink)
    {
        $this->nextLink = $nextLink;
    }

    /**
     * @return mixed
     */
    public function getNextLink()
    {
        return $this->nextLink;
    }

    /**
     * @param $nextPageToken
     */
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    /**
     * @return mixed
     */
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
 * Class Google_ChildReference
 */
class Google_ChildReference extends Google_Model
{
    /**
     * @var
     */
    public $childLink;
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
    public $selfLink;

    /**
     * @param $childLink
     */
    public function setChildLink($childLink)
    {
        $this->childLink = $childLink;
    }

    /**
     * @return mixed
     */
    public function getChildLink()
    {
        return $this->childLink;
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
 * Class Google_Comment
 */
class Google_Comment extends Google_Model
{
    /**
     * @var
     */
    public $anchor;
    /**
     * @var string
     */
    protected $__authorType = 'Google_User';
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
    public $commentId;
    /**
     * @var
     */
    public $content;
    /**
     * @var string
     */
    protected $__contextType = 'Google_CommentContext';
    /**
     * @var string
     */
    protected $__contextDataType = '';
    /**
     * @var
     */
    public $context;
    /**
     * @var
     */
    public $createdDate;
    /**
     * @var
     */
    public $deleted;
    /**
     * @var
     */
    public $fileId;
    /**
     * @var
     */
    public $fileTitle;
    /**
     * @var
     */
    public $htmlContent;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $modifiedDate;
    /**
     * @var string
     */
    protected $__repliesType = 'Google_CommentReply';
    /**
     * @var string
     */
    protected $__repliesDataType = 'array';
    /**
     * @var
     */
    public $replies;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $status;

    /**
     * @param $anchor
     */
    public function setAnchor($anchor)
    {
        $this->anchor = $anchor;
    }

    /**
     * @return mixed
     */
    public function getAnchor()
    {
        return $this->anchor;
    }

    /**
     * @param Google_User $author
     */
    public function setAuthor(Google_User $author)
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
     * @param $commentId
     */
    public function setCommentId($commentId)
    {
        $this->commentId = $commentId;
    }

    /**
     * @return mixed
     */
    public function getCommentId()
    {
        return $this->commentId;
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
     * @param Google_CommentContext $context
     */
    public function setContext(Google_CommentContext $context)
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
     * @param $createdDate
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
    }

    /**
     * @return mixed
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

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
     * @param $fileId
     */
    public function setFileId($fileId)
    {
        $this->fileId = $fileId;
    }

    /**
     * @return mixed
     */
    public function getFileId()
    {
        return $this->fileId;
    }

    /**
     * @param $fileTitle
     */
    public function setFileTitle($fileTitle)
    {
        $this->fileTitle = $fileTitle;
    }

    /**
     * @return mixed
     */
    public function getFileTitle()
    {
        return $this->fileTitle;
    }

    /**
     * @param $htmlContent
     */
    public function setHtmlContent($htmlContent)
    {
        $this->htmlContent = $htmlContent;
    }

    /**
     * @return mixed
     */
    public function getHtmlContent()
    {
        return $this->htmlContent;
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
     * @param $modifiedDate
     */
    public function setModifiedDate($modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;
    }

    /**
     * @return mixed
     */
    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }

    /**
     * @param $replies
     * @throws Google_Exception
     */
    public function setReplies(/* array(Google_CommentReply) */
        $replies)
    {
        $this->assertIsArray($replies, 'Google_CommentReply', __METHOD__);
        $this->replies = $replies;
    }

    /**
     * @return mixed
     */
    public function getReplies()
    {
        return $this->replies;
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
}

/**
 * Class Google_CommentContext
 */
class Google_CommentContext extends Google_Model
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

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
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
    public $nextLink;
    /**
     * @var
     */
    public $nextPageToken;
    /**
     * @var
     */
    public $selfLink;

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
     * @param $nextLink
     */
    public function setNextLink($nextLink)
    {
        $this->nextLink = $nextLink;
    }

    /**
     * @return mixed
     */
    public function getNextLink()
    {
        return $this->nextLink;
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
 * Class Google_CommentReply
 */
class Google_CommentReply extends Google_Model
{
    /**
     * @var string
     */
    protected $__authorType = 'Google_User';
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
    public $content;
    /**
     * @var
     */
    public $createdDate;
    /**
     * @var
     */
    public $deleted;
    /**
     * @var
     */
    public $htmlContent;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $modifiedDate;
    /**
     * @var
     */
    public $replyId;
    /**
     * @var
     */
    public $verb;

    /**
     * @param Google_User $author
     */
    public function setAuthor(Google_User $author)
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
     * @param $createdDate
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
    }

    /**
     * @return mixed
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

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
     * @param $htmlContent
     */
    public function setHtmlContent($htmlContent)
    {
        $this->htmlContent = $htmlContent;
    }

    /**
     * @return mixed
     */
    public function getHtmlContent()
    {
        return $this->htmlContent;
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
     * @param $modifiedDate
     */
    public function setModifiedDate($modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;
    }

    /**
     * @return mixed
     */
    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }

    /**
     * @param $replyId
     */
    public function setReplyId($replyId)
    {
        $this->replyId = $replyId;
    }

    /**
     * @return mixed
     */
    public function getReplyId()
    {
        return $this->replyId;
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
 * Class Google_CommentReplyList
 */
class Google_CommentReplyList extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_CommentReply';
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
    public $nextLink;
    /**
     * @var
     */
    public $nextPageToken;
    /**
     * @var
     */
    public $selfLink;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_CommentReply) */
        $items)
    {
        $this->assertIsArray($items, 'Google_CommentReply', __METHOD__);
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
     * @param $nextLink
     */
    public function setNextLink($nextLink)
    {
        $this->nextLink = $nextLink;
    }

    /**
     * @return mixed
     */
    public function getNextLink()
    {
        return $this->nextLink;
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
 * Class Google_DriveFile
 */
class Google_DriveFile extends Google_Model
{
    /**
     * @var
     */
    public $alternateLink;
    /**
     * @var
     */
    public $appDataContents;
    /**
     * @var
     */
    public $createdDate;
    /**
     * @var
     */
    public $defaultOpenWithLink;
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $downloadUrl;
    /**
     * @var
     */
    public $editable;
    /**
     * @var
     */
    public $embedLink;
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $explicitlyTrashed;
    /**
     * @var
     */
    public $exportLinks;
    /**
     * @var
     */
    public $fileExtension;
    /**
     * @var
     */
    public $fileSize;
    /**
     * @var
     */
    public $headRevisionId;
    /**
     * @var
     */
    public $iconLink;
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    protected $__imageMediaMetadataType = 'Google_DriveFileImageMediaMetadata';
    /**
     * @var string
     */
    protected $__imageMediaMetadataDataType = '';
    /**
     * @var
     */
    public $imageMediaMetadata;
    /**
     * @var string
     */
    protected $__indexableTextType = 'Google_DriveFileIndexableText';
    /**
     * @var string
     */
    protected $__indexableTextDataType = '';
    /**
     * @var
     */
    public $indexableText;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__labelsType = 'Google_DriveFileLabels';
    /**
     * @var string
     */
    protected $__labelsDataType = '';
    /**
     * @var
     */
    public $labels;
    /**
     * @var string
     */
    protected $__lastModifyingUserType = 'Google_User';
    /**
     * @var string
     */
    protected $__lastModifyingUserDataType = '';
    /**
     * @var
     */
    public $lastModifyingUser;
    /**
     * @var
     */
    public $lastModifyingUserName;
    /**
     * @var
     */
    public $lastViewedByMeDate;
    /**
     * @var
     */
    public $md5Checksum;
    /**
     * @var
     */
    public $mimeType;
    /**
     * @var
     */
    public $modifiedByMeDate;
    /**
     * @var
     */
    public $modifiedDate;
    /**
     * @var
     */
    public $openWithLinks;
    /**
     * @var
     */
    public $originalFilename;
    /**
     * @var
     */
    public $ownerNames;
    /**
     * @var string
     */
    protected $__ownersType = 'Google_User';
    /**
     * @var string
     */
    protected $__ownersDataType = 'array';
    /**
     * @var
     */
    public $owners;
    /**
     * @var string
     */
    protected $__parentsType = 'Google_ParentReference';
    /**
     * @var string
     */
    protected $__parentsDataType = 'array';
    /**
     * @var
     */
    public $parents;
    /**
     * @var
     */
    public $quotaBytesUsed;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $shared;
    /**
     * @var
     */
    public $sharedWithMeDate;
    /**
     * @var string
     */
    protected $__thumbnailType = 'Google_DriveFileThumbnail';
    /**
     * @var string
     */
    protected $__thumbnailDataType = '';
    /**
     * @var
     */
    public $thumbnail;
    /**
     * @var
     */
    public $thumbnailLink;
    /**
     * @var
     */
    public $title;
    /**
     * @var string
     */
    protected $__userPermissionType = 'Google_Permission';
    /**
     * @var string
     */
    protected $__userPermissionDataType = '';
    /**
     * @var
     */
    public $userPermission;
    /**
     * @var
     */
    public $webContentLink;
    /**
     * @var
     */
    public $webViewLink;
    /**
     * @var
     */
    public $writersCanShare;

    /**
     * @param $alternateLink
     */
    public function setAlternateLink($alternateLink)
    {
        $this->alternateLink = $alternateLink;
    }

    /**
     * @return mixed
     */
    public function getAlternateLink()
    {
        return $this->alternateLink;
    }

    /**
     * @param $appDataContents
     */
    public function setAppDataContents($appDataContents)
    {
        $this->appDataContents = $appDataContents;
    }

    /**
     * @return mixed
     */
    public function getAppDataContents()
    {
        return $this->appDataContents;
    }

    /**
     * @param $createdDate
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
    }

    /**
     * @return mixed
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param $defaultOpenWithLink
     */
    public function setDefaultOpenWithLink($defaultOpenWithLink)
    {
        $this->defaultOpenWithLink = $defaultOpenWithLink;
    }

    /**
     * @return mixed
     */
    public function getDefaultOpenWithLink()
    {
        return $this->defaultOpenWithLink;
    }

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
     * @param $downloadUrl
     */
    public function setDownloadUrl($downloadUrl)
    {
        $this->downloadUrl = $downloadUrl;
    }

    /**
     * @return mixed
     */
    public function getDownloadUrl()
    {
        return $this->downloadUrl;
    }

    /**
     * @param $editable
     */
    public function setEditable($editable)
    {
        $this->editable = $editable;
    }

    /**
     * @return mixed
     */
    public function getEditable()
    {
        return $this->editable;
    }

    /**
     * @param $embedLink
     */
    public function setEmbedLink($embedLink)
    {
        $this->embedLink = $embedLink;
    }

    /**
     * @return mixed
     */
    public function getEmbedLink()
    {
        return $this->embedLink;
    }

    /**
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    /**
     * @return mixed
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param $explicitlyTrashed
     */
    public function setExplicitlyTrashed($explicitlyTrashed)
    {
        $this->explicitlyTrashed = $explicitlyTrashed;
    }

    /**
     * @return mixed
     */
    public function getExplicitlyTrashed()
    {
        return $this->explicitlyTrashed;
    }

    /**
     * @param $exportLinks
     */
    public function setExportLinks($exportLinks)
    {
        $this->exportLinks = $exportLinks;
    }

    /**
     * @return mixed
     */
    public function getExportLinks()
    {
        return $this->exportLinks;
    }

    /**
     * @param $fileExtension
     */
    public function setFileExtension($fileExtension)
    {
        $this->fileExtension = $fileExtension;
    }

    /**
     * @return mixed
     */
    public function getFileExtension()
    {
        return $this->fileExtension;
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
     * @param $headRevisionId
     */
    public function setHeadRevisionId($headRevisionId)
    {
        $this->headRevisionId = $headRevisionId;
    }

    /**
     * @return mixed
     */
    public function getHeadRevisionId()
    {
        return $this->headRevisionId;
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
     * @param Google_DriveFileImageMediaMetadata $imageMediaMetadata
     */
    public function setImageMediaMetadata(Google_DriveFileImageMediaMetadata $imageMediaMetadata)
    {
        $this->imageMediaMetadata = $imageMediaMetadata;
    }

    /**
     * @return mixed
     */
    public function getImageMediaMetadata()
    {
        return $this->imageMediaMetadata;
    }

    /**
     * @param Google_DriveFileIndexableText $indexableText
     */
    public function setIndexableText(Google_DriveFileIndexableText $indexableText)
    {
        $this->indexableText = $indexableText;
    }

    /**
     * @return mixed
     */
    public function getIndexableText()
    {
        return $this->indexableText;
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
     * @param Google_DriveFileLabels $labels
     */
    public function setLabels(Google_DriveFileLabels $labels)
    {
        $this->labels = $labels;
    }

    /**
     * @return mixed
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @param Google_User $lastModifyingUser
     */
    public function setLastModifyingUser(Google_User $lastModifyingUser)
    {
        $this->lastModifyingUser = $lastModifyingUser;
    }

    /**
     * @return mixed
     */
    public function getLastModifyingUser()
    {
        return $this->lastModifyingUser;
    }

    /**
     * @param $lastModifyingUserName
     */
    public function setLastModifyingUserName($lastModifyingUserName)
    {
        $this->lastModifyingUserName = $lastModifyingUserName;
    }

    /**
     * @return mixed
     */
    public function getLastModifyingUserName()
    {
        return $this->lastModifyingUserName;
    }

    /**
     * @param $lastViewedByMeDate
     */
    public function setLastViewedByMeDate($lastViewedByMeDate)
    {
        $this->lastViewedByMeDate = $lastViewedByMeDate;
    }

    /**
     * @return mixed
     */
    public function getLastViewedByMeDate()
    {
        return $this->lastViewedByMeDate;
    }

    /**
     * @param $md5Checksum
     */
    public function setMd5Checksum($md5Checksum)
    {
        $this->md5Checksum = $md5Checksum;
    }

    /**
     * @return mixed
     */
    public function getMd5Checksum()
    {
        return $this->md5Checksum;
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
     * @param $modifiedByMeDate
     */
    public function setModifiedByMeDate($modifiedByMeDate)
    {
        $this->modifiedByMeDate = $modifiedByMeDate;
    }

    /**
     * @return mixed
     */
    public function getModifiedByMeDate()
    {
        return $this->modifiedByMeDate;
    }

    /**
     * @param $modifiedDate
     */
    public function setModifiedDate($modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;
    }

    /**
     * @return mixed
     */
    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }

    /**
     * @param $openWithLinks
     */
    public function setOpenWithLinks($openWithLinks)
    {
        $this->openWithLinks = $openWithLinks;
    }

    /**
     * @return mixed
     */
    public function getOpenWithLinks()
    {
        return $this->openWithLinks;
    }

    /**
     * @param $originalFilename
     */
    public function setOriginalFilename($originalFilename)
    {
        $this->originalFilename = $originalFilename;
    }

    /**
     * @return mixed
     */
    public function getOriginalFilename()
    {
        return $this->originalFilename;
    }

    /**
     * @param $ownerNames
     * @throws Google_Exception
     */
    public function setOwnerNames(/* array(Google_string) */
        $ownerNames)
    {
        $this->assertIsArray($ownerNames, 'Google_string', __METHOD__);
        $this->ownerNames = $ownerNames;
    }

    /**
     * @return mixed
     */
    public function getOwnerNames()
    {
        return $this->ownerNames;
    }

    /**
     * @param $owners
     * @throws Google_Exception
     */
    public function setOwners(/* array(Google_User) */
        $owners)
    {
        $this->assertIsArray($owners, 'Google_User', __METHOD__);
        $this->owners = $owners;
    }

    /**
     * @return mixed
     */
    public function getOwners()
    {
        return $this->owners;
    }

    /**
     * @param $parents
     * @throws Google_Exception
     */
    public function setParents(/* array(Google_ParentReference) */
        $parents)
    {
        $this->assertIsArray($parents, 'Google_ParentReference', __METHOD__);
        $this->parents = $parents;
    }

    /**
     * @return mixed
     */
    public function getParents()
    {
        return $this->parents;
    }

    /**
     * @param $quotaBytesUsed
     */
    public function setQuotaBytesUsed($quotaBytesUsed)
    {
        $this->quotaBytesUsed = $quotaBytesUsed;
    }

    /**
     * @return mixed
     */
    public function getQuotaBytesUsed()
    {
        return $this->quotaBytesUsed;
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

    /**
     * @param $sharedWithMeDate
     */
    public function setSharedWithMeDate($sharedWithMeDate)
    {
        $this->sharedWithMeDate = $sharedWithMeDate;
    }

    /**
     * @return mixed
     */
    public function getSharedWithMeDate()
    {
        return $this->sharedWithMeDate;
    }

    /**
     * @param Google_DriveFileThumbnail $thumbnail
     */
    public function setThumbnail(Google_DriveFileThumbnail $thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * @return mixed
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param $thumbnailLink
     */
    public function setThumbnailLink($thumbnailLink)
    {
        $this->thumbnailLink = $thumbnailLink;
    }

    /**
     * @return mixed
     */
    public function getThumbnailLink()
    {
        return $this->thumbnailLink;
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param Google_Permission $userPermission
     */
    public function setUserPermission(Google_Permission $userPermission)
    {
        $this->userPermission = $userPermission;
    }

    /**
     * @return mixed
     */
    public function getUserPermission()
    {
        return $this->userPermission;
    }

    /**
     * @param $webContentLink
     */
    public function setWebContentLink($webContentLink)
    {
        $this->webContentLink = $webContentLink;
    }

    /**
     * @return mixed
     */
    public function getWebContentLink()
    {
        return $this->webContentLink;
    }

    /**
     * @param $webViewLink
     */
    public function setWebViewLink($webViewLink)
    {
        $this->webViewLink = $webViewLink;
    }

    /**
     * @return mixed
     */
    public function getWebViewLink()
    {
        return $this->webViewLink;
    }

    /**
     * @param $writersCanShare
     */
    public function setWritersCanShare($writersCanShare)
    {
        $this->writersCanShare = $writersCanShare;
    }

    /**
     * @return mixed
     */
    public function getWritersCanShare()
    {
        return $this->writersCanShare;
    }
}

/**
 * Class Google_DriveFileImageMediaMetadata
 */
class Google_DriveFileImageMediaMetadata extends Google_Model
{
    /**
     * @var
     */
    public $aperture;
    /**
     * @var
     */
    public $cameraMake;
    /**
     * @var
     */
    public $cameraModel;
    /**
     * @var
     */
    public $colorSpace;
    /**
     * @var
     */
    public $date;
    /**
     * @var
     */
    public $exposureBias;
    /**
     * @var
     */
    public $exposureMode;
    /**
     * @var
     */
    public $exposureTime;
    /**
     * @var
     */
    public $flashUsed;
    /**
     * @var
     */
    public $focalLength;
    /**
     * @var
     */
    public $height;
    /**
     * @var
     */
    public $isoSpeed;
    /**
     * @var
     */
    public $lens;
    /**
     * @var string
     */
    protected $__locationType = 'Google_DriveFileImageMediaMetadataLocation';
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
    public $maxApertureValue;
    /**
     * @var
     */
    public $meteringMode;
    /**
     * @var
     */
    public $rotation;
    /**
     * @var
     */
    public $sensor;
    /**
     * @var
     */
    public $subjectDistance;
    /**
     * @var
     */
    public $whiteBalance;
    /**
     * @var
     */
    public $width;

    /**
     * @param $aperture
     */
    public function setAperture($aperture)
    {
        $this->aperture = $aperture;
    }

    /**
     * @return mixed
     */
    public function getAperture()
    {
        return $this->aperture;
    }

    /**
     * @param $cameraMake
     */
    public function setCameraMake($cameraMake)
    {
        $this->cameraMake = $cameraMake;
    }

    /**
     * @return mixed
     */
    public function getCameraMake()
    {
        return $this->cameraMake;
    }

    /**
     * @param $cameraModel
     */
    public function setCameraModel($cameraModel)
    {
        $this->cameraModel = $cameraModel;
    }

    /**
     * @return mixed
     */
    public function getCameraModel()
    {
        return $this->cameraModel;
    }

    /**
     * @param $colorSpace
     */
    public function setColorSpace($colorSpace)
    {
        $this->colorSpace = $colorSpace;
    }

    /**
     * @return mixed
     */
    public function getColorSpace()
    {
        return $this->colorSpace;
    }

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
     * @param $exposureBias
     */
    public function setExposureBias($exposureBias)
    {
        $this->exposureBias = $exposureBias;
    }

    /**
     * @return mixed
     */
    public function getExposureBias()
    {
        return $this->exposureBias;
    }

    /**
     * @param $exposureMode
     */
    public function setExposureMode($exposureMode)
    {
        $this->exposureMode = $exposureMode;
    }

    /**
     * @return mixed
     */
    public function getExposureMode()
    {
        return $this->exposureMode;
    }

    /**
     * @param $exposureTime
     */
    public function setExposureTime($exposureTime)
    {
        $this->exposureTime = $exposureTime;
    }

    /**
     * @return mixed
     */
    public function getExposureTime()
    {
        return $this->exposureTime;
    }

    /**
     * @param $flashUsed
     */
    public function setFlashUsed($flashUsed)
    {
        $this->flashUsed = $flashUsed;
    }

    /**
     * @return mixed
     */
    public function getFlashUsed()
    {
        return $this->flashUsed;
    }

    /**
     * @param $focalLength
     */
    public function setFocalLength($focalLength)
    {
        $this->focalLength = $focalLength;
    }

    /**
     * @return mixed
     */
    public function getFocalLength()
    {
        return $this->focalLength;
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
     * @param $isoSpeed
     */
    public function setIsoSpeed($isoSpeed)
    {
        $this->isoSpeed = $isoSpeed;
    }

    /**
     * @return mixed
     */
    public function getIsoSpeed()
    {
        return $this->isoSpeed;
    }

    /**
     * @param $lens
     */
    public function setLens($lens)
    {
        $this->lens = $lens;
    }

    /**
     * @return mixed
     */
    public function getLens()
    {
        return $this->lens;
    }

    /**
     * @param Google_DriveFileImageMediaMetadataLocation $location
     */
    public function setLocation(Google_DriveFileImageMediaMetadataLocation $location)
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
     * @param $maxApertureValue
     */
    public function setMaxApertureValue($maxApertureValue)
    {
        $this->maxApertureValue = $maxApertureValue;
    }

    /**
     * @return mixed
     */
    public function getMaxApertureValue()
    {
        return $this->maxApertureValue;
    }

    /**
     * @param $meteringMode
     */
    public function setMeteringMode($meteringMode)
    {
        $this->meteringMode = $meteringMode;
    }

    /**
     * @return mixed
     */
    public function getMeteringMode()
    {
        return $this->meteringMode;
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
     * @param $sensor
     */
    public function setSensor($sensor)
    {
        $this->sensor = $sensor;
    }

    /**
     * @return mixed
     */
    public function getSensor()
    {
        return $this->sensor;
    }

    /**
     * @param $subjectDistance
     */
    public function setSubjectDistance($subjectDistance)
    {
        $this->subjectDistance = $subjectDistance;
    }

    /**
     * @return mixed
     */
    public function getSubjectDistance()
    {
        return $this->subjectDistance;
    }

    /**
     * @param $whiteBalance
     */
    public function setWhiteBalance($whiteBalance)
    {
        $this->whiteBalance = $whiteBalance;
    }

    /**
     * @return mixed
     */
    public function getWhiteBalance()
    {
        return $this->whiteBalance;
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
 * Class Google_DriveFileImageMediaMetadataLocation
 */
class Google_DriveFileImageMediaMetadataLocation extends Google_Model
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
 * Class Google_DriveFileIndexableText
 */
class Google_DriveFileIndexableText extends Google_Model
{
    /**
     * @var
     */
    public $text;

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
 * Class Google_DriveFileLabels
 */
class Google_DriveFileLabels extends Google_Model
{
    /**
     * @var
     */
    public $hidden;
    /**
     * @var
     */
    public $restricted;
    /**
     * @var
     */
    public $starred;
    /**
     * @var
     */
    public $trashed;
    /**
     * @var
     */
    public $viewed;

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
     * @param $starred
     */
    public function setStarred($starred)
    {
        $this->starred = $starred;
    }

    /**
     * @return mixed
     */
    public function getStarred()
    {
        return $this->starred;
    }

    /**
     * @param $trashed
     */
    public function setTrashed($trashed)
    {
        $this->trashed = $trashed;
    }

    /**
     * @return mixed
     */
    public function getTrashed()
    {
        return $this->trashed;
    }

    /**
     * @param $viewed
     */
    public function setViewed($viewed)
    {
        $this->viewed = $viewed;
    }

    /**
     * @return mixed
     */
    public function getViewed()
    {
        return $this->viewed;
    }
}

/**
 * Class Google_DriveFileThumbnail
 */
class Google_DriveFileThumbnail extends Google_Model
{
    /**
     * @var
     */
    public $image;
    /**
     * @var
     */
    public $mimeType;

    /**
     * @param $image
     */
    public function setImage($image)
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
}

/**
 * Class Google_FileList
 */
class Google_FileList extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_DriveFile';
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
    public $nextLink;
    /**
     * @var
     */
    public $nextPageToken;
    /**
     * @var
     */
    public $selfLink;

    /**
     * @param $etag
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    /**
     * @return mixed
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_DriveFile) */
        $items)
    {
        $this->assertIsArray($items, 'Google_DriveFile', __METHOD__);
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
     * @param $nextLink
     */
    public function setNextLink($nextLink)
    {
        $this->nextLink = $nextLink;
    }

    /**
     * @return mixed
     */
    public function getNextLink()
    {
        return $this->nextLink;
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
 * Class Google_ParentList
 */
class Google_ParentList extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_ParentReference';
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
    public $selfLink;

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
    public function setItems(/* array(Google_ParentReference) */
        $items)
    {
        $this->assertIsArray($items, 'Google_ParentReference', __METHOD__);
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
 * Class Google_ParentReference
 */
class Google_ParentReference extends Google_Model
{
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $isRoot;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $parentLink;
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
     * @param $isRoot
     */
    public function setIsRoot($isRoot)
    {
        $this->isRoot = $isRoot;
    }

    /**
     * @return mixed
     */
    public function getIsRoot()
    {
        return $this->isRoot;
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
     * @param $parentLink
     */
    public function setParentLink($parentLink)
    {
        $this->parentLink = $parentLink;
    }

    /**
     * @return mixed
     */
    public function getParentLink()
    {
        return $this->parentLink;
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
 * Class Google_Permission
 */
class Google_Permission extends Google_Model
{
    /**
     * @var
     */
    public $additionalRoles;
    /**
     * @var
     */
    public $authKey;
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
    public $name;
    /**
     * @var
     */
    public $photoLink;
    /**
     * @var
     */
    public $role;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $type;
    /**
     * @var
     */
    public $value;
    /**
     * @var
     */
    public $withLink;

    /**
     * @param $additionalRoles
     * @throws Google_Exception
     */
    public function setAdditionalRoles(/* array(Google_string) */
        $additionalRoles)
    {
        $this->assertIsArray($additionalRoles, 'Google_string', __METHOD__);
        $this->additionalRoles = $additionalRoles;
    }

    /**
     * @return mixed
     */
    public function getAdditionalRoles()
    {
        return $this->additionalRoles;
    }

    /**
     * @param $authKey
     */
    public function setAuthKey($authKey)
    {
        $this->authKey = $authKey;
    }

    /**
     * @return mixed
     */
    public function getAuthKey()
    {
        return $this->authKey;
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
     * @param $photoLink
     */
    public function setPhotoLink($photoLink)
    {
        $this->photoLink = $photoLink;
    }

    /**
     * @return mixed
     */
    public function getPhotoLink()
    {
        return $this->photoLink;
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

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param $withLink
     */
    public function setWithLink($withLink)
    {
        $this->withLink = $withLink;
    }

    /**
     * @return mixed
     */
    public function getWithLink()
    {
        return $this->withLink;
    }
}

/**
 * Class Google_PermissionList
 */
class Google_PermissionList extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Permission';
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
    public $selfLink;

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
    public function setItems(/* array(Google_Permission) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Permission', __METHOD__);
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
 * Class Google_Property
 */
class Google_Property extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $key;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $value;
    /**
     * @var
     */
    public $visibility;

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
 * Class Google_PropertyList
 */
class Google_PropertyList extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Property';
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
    public $selfLink;

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
    public function setItems(/* array(Google_Property) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Property', __METHOD__);
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
 * Class Google_Revision
 */
class Google_Revision extends Google_Model
{
    /**
     * @var
     */
    public $downloadUrl;
    /**
     * @var
     */
    public $etag;
    /**
     * @var
     */
    public $exportLinks;
    /**
     * @var
     */
    public $fileSize;
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
    protected $__lastModifyingUserType = 'Google_User';
    /**
     * @var string
     */
    protected $__lastModifyingUserDataType = '';
    /**
     * @var
     */
    public $lastModifyingUser;
    /**
     * @var
     */
    public $lastModifyingUserName;
    /**
     * @var
     */
    public $md5Checksum;
    /**
     * @var
     */
    public $mimeType;
    /**
     * @var
     */
    public $modifiedDate;
    /**
     * @var
     */
    public $originalFilename;
    /**
     * @var
     */
    public $pinned;
    /**
     * @var
     */
    public $publishAuto;
    /**
     * @var
     */
    public $published;
    /**
     * @var
     */
    public $publishedLink;
    /**
     * @var
     */
    public $publishedOutsideDomain;
    /**
     * @var
     */
    public $selfLink;

    /**
     * @param $downloadUrl
     */
    public function setDownloadUrl($downloadUrl)
    {
        $this->downloadUrl = $downloadUrl;
    }

    /**
     * @return mixed
     */
    public function getDownloadUrl()
    {
        return $this->downloadUrl;
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
     * @param $exportLinks
     */
    public function setExportLinks($exportLinks)
    {
        $this->exportLinks = $exportLinks;
    }

    /**
     * @return mixed
     */
    public function getExportLinks()
    {
        return $this->exportLinks;
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
     * @param Google_User $lastModifyingUser
     */
    public function setLastModifyingUser(Google_User $lastModifyingUser)
    {
        $this->lastModifyingUser = $lastModifyingUser;
    }

    /**
     * @return mixed
     */
    public function getLastModifyingUser()
    {
        return $this->lastModifyingUser;
    }

    /**
     * @param $lastModifyingUserName
     */
    public function setLastModifyingUserName($lastModifyingUserName)
    {
        $this->lastModifyingUserName = $lastModifyingUserName;
    }

    /**
     * @return mixed
     */
    public function getLastModifyingUserName()
    {
        return $this->lastModifyingUserName;
    }

    /**
     * @param $md5Checksum
     */
    public function setMd5Checksum($md5Checksum)
    {
        $this->md5Checksum = $md5Checksum;
    }

    /**
     * @return mixed
     */
    public function getMd5Checksum()
    {
        return $this->md5Checksum;
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
     * @param $modifiedDate
     */
    public function setModifiedDate($modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;
    }

    /**
     * @return mixed
     */
    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }

    /**
     * @param $originalFilename
     */
    public function setOriginalFilename($originalFilename)
    {
        $this->originalFilename = $originalFilename;
    }

    /**
     * @return mixed
     */
    public function getOriginalFilename()
    {
        return $this->originalFilename;
    }

    /**
     * @param $pinned
     */
    public function setPinned($pinned)
    {
        $this->pinned = $pinned;
    }

    /**
     * @return mixed
     */
    public function getPinned()
    {
        return $this->pinned;
    }

    /**
     * @param $publishAuto
     */
    public function setPublishAuto($publishAuto)
    {
        $this->publishAuto = $publishAuto;
    }

    /**
     * @return mixed
     */
    public function getPublishAuto()
    {
        return $this->publishAuto;
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
     * @param $publishedLink
     */
    public function setPublishedLink($publishedLink)
    {
        $this->publishedLink = $publishedLink;
    }

    /**
     * @return mixed
     */
    public function getPublishedLink()
    {
        return $this->publishedLink;
    }

    /**
     * @param $publishedOutsideDomain
     */
    public function setPublishedOutsideDomain($publishedOutsideDomain)
    {
        $this->publishedOutsideDomain = $publishedOutsideDomain;
    }

    /**
     * @return mixed
     */
    public function getPublishedOutsideDomain()
    {
        return $this->publishedOutsideDomain;
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
 * Class Google_RevisionList
 */
class Google_RevisionList extends Google_Model
{
    /**
     * @var
     */
    public $etag;
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Revision';
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
    public $selfLink;

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
    public function setItems(/* array(Google_Revision) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Revision', __METHOD__);
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
 * Class Google_User
 */
class Google_User extends Google_Model
{
    /**
     * @var
     */
    public $displayName;
    /**
     * @var
     */
    public $isAuthenticatedUser;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $permissionId;
    /**
     * @var string
     */
    protected $__pictureType = 'Google_UserPicture';
    /**
     * @var string
     */
    protected $__pictureDataType = '';
    /**
     * @var
     */
    public $picture;

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
     * @param $isAuthenticatedUser
     */
    public function setIsAuthenticatedUser($isAuthenticatedUser)
    {
        $this->isAuthenticatedUser = $isAuthenticatedUser;
    }

    /**
     * @return mixed
     */
    public function getIsAuthenticatedUser()
    {
        return $this->isAuthenticatedUser;
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
     * @param $permissionId
     */
    public function setPermissionId($permissionId)
    {
        $this->permissionId = $permissionId;
    }

    /**
     * @return mixed
     */
    public function getPermissionId()
    {
        return $this->permissionId;
    }

    /**
     * @param Google_UserPicture $picture
     */
    public function setPicture(Google_UserPicture $picture)
    {
        $this->picture = $picture;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }
}

/**
 * Class Google_UserPicture
 */
class Google_UserPicture extends Google_Model
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
