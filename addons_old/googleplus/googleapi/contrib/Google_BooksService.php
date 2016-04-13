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
 * The "bookshelves" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $bookshelves = $booksService->bookshelves;
 *  </code>
 */
class Google_BookshelvesServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves metadata for a specific bookshelf for the specified user. (bookshelves.get)
     *
     * @param string $userId ID of user for whom to retrieve bookshelves.
     * @param string $shelf ID of bookshelf to retrieve.
     * @param array $optParams Optional parameters.
     * @return Google_Bookshelf
     * @throws Google_Exception
     * @opt_param string source String to identify the originator of this request.
     */
    public function get($userId, $shelf, $optParams = [])
    {
        $params = ['userId' => $userId, 'shelf' => $shelf];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Bookshelf($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves a list of public bookshelves for the specified user. (bookshelves.list)
     *
     * @param string $userId ID of user for whom to retrieve bookshelves.
     * @param array $optParams Optional parameters.
     * @return Google_Bookshelves
     * @throws Google_Exception
     * @opt_param string source String to identify the originator of this request.
     */
    public function listBookshelves($userId, $optParams = [])
    {
        $params = ['userId' => $userId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Bookshelves($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "volumes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $volumes = $booksService->volumes;
 *  </code>
 */
class Google_BookshelvesVolumesServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves volumes in a specific bookshelf for the specified user. (volumes.list)
     *
     * @param string $userId ID of user for whom to retrieve bookshelf volumes.
     * @param string $shelf ID of bookshelf to retrieve volumes.
     * @param array $optParams Optional parameters.
     * @return Google_Volumes
     * @throws Google_Exception
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param bool showPreorders Set to true to show pre-ordered books. Defaults to false.
     * @opt_param string source String to identify the originator of this request.
     * @opt_param string startIndex Index of the first element to return (starts at 0)
     */
    public function listBookshelvesVolumes($userId, $shelf, $optParams = [])
    {
        $params = ['userId' => $userId, 'shelf' => $shelf];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Volumes($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "cloudloading" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $cloudloading = $booksService->cloudloading;
 *  </code>
 */
class Google_CloudloadingServiceResource extends Google_ServiceResource
{

    /**
     * (cloudloading.addBook)
     *
     * @param array $optParams Optional parameters.
     * @return Google_BooksCloudloadingResource
     * @throws Google_Exception
     * @opt_param string drive_document_id A drive document id. The upload_client_token must not be set.
     * @opt_param string mime_type The document MIME type. It can be set only if the drive_document_id is set.
     * @opt_param string name The document name. It can be set only if the drive_document_id is set.
     * @opt_param string upload_client_token
     */
    public function addBook($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('addBook', [$params]);
        if ($this->useObjects()) {
            return new Google_BooksCloudloadingResource($data);
        } else {
            return $data;
        }
    }

    /**
     * Remove the book and its contents (cloudloading.deleteBook)
     *
     * @param string $volumeId The id of the book to be removed.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function deleteBook($volumeId, $optParams = [])
    {
        $params = ['volumeId' => $volumeId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('deleteBook', [$params]);
        return $data;
    }

    /**
     * (cloudloading.updateBook)
     *
     * @param Google_BooksCloudloadingResource $postBody
     * @param array $optParams Optional parameters.
     * @return Google_BooksCloudloadingResource
     * @throws Google_Exception
     */
    public function updateBook(Google_BooksCloudloadingResource $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('updateBook', [$params]);
        if ($this->useObjects()) {
            return new Google_BooksCloudloadingResource($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "layers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $layers = $booksService->layers;
 *  </code>
 */
class Google_LayersServiceResource extends Google_ServiceResource
{

    /**
     * Gets the layer summary for a volume. (layers.get)
     *
     * @param string $volumeId The volume to retrieve layers for.
     * @param string $summaryId The ID for the layer to get the summary for.
     * @param array $optParams Optional parameters.
     * @return Google_Layersummary
     * @throws Google_Exception
     * @opt_param string contentVersion The content version for the requested volume.
     * @opt_param string source String to identify the originator of this request.
     */
    public function get($volumeId, $summaryId, $optParams = [])
    {
        $params = ['volumeId' => $volumeId, 'summaryId' => $summaryId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Layersummary($data);
        } else {
            return $data;
        }
    }

    /**
     * List the layer summaries for a volume. (layers.list)
     *
     * @param string $volumeId The volume to retrieve layers for.
     * @param array $optParams Optional parameters.
     * @return Google_Layersummaries
     * @throws Google_Exception
     * @opt_param string contentVersion The content version for the requested volume.
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string pageToken The value of the nextToken from the previous page.
     * @opt_param string source String to identify the originator of this request.
     */
    public function listLayers($volumeId, $optParams = [])
    {
        $params = ['volumeId' => $volumeId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Layersummaries($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "annotationData" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $annotationData = $booksService->annotationData;
 *  </code>
 */
class Google_LayersAnnotationDataServiceResource extends Google_ServiceResource
{

    /**
     * Gets the annotation data. (annotationData.get)
     *
     * @param string $volumeId The volume to retrieve annotations for.
     * @param string $layerId The ID for the layer to get the annotations.
     * @param string $annotationDataId The ID of the annotation data to retrieve.
     * @param string $contentVersion The content version for the volume you are trying to retrieve.
     * @param array $optParams Optional parameters.
     * @return Google_Annotationdata
     * @throws Google_Exception
     * @opt_param int h The requested pixel height for any images. If height is provided width must also be provided.
     * @opt_param string locale The locale information for the data. ISO-639-1 language and ISO-3166-1 country code. Ex: 'en_US'.
     * @opt_param int scale The requested scale for the image.
     * @opt_param string source String to identify the originator of this request.
     * @opt_param int w The requested pixel width for any images. If width is provided height must also be provided.
     */
    public function get($volumeId, $layerId, $annotationDataId, $contentVersion, $optParams = [])
    {
        $params = ['volumeId' => $volumeId, 'layerId' => $layerId, 'annotationDataId' => $annotationDataId, 'contentVersion' => $contentVersion];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Annotationdata($data);
        } else {
            return $data;
        }
    }

    /**
     * Gets the annotation data for a volume and layer. (annotationData.list)
     *
     * @param string $volumeId The volume to retrieve annotation data for.
     * @param string $layerId The ID for the layer to get the annotation data.
     * @param string $contentVersion The content version for the requested volume.
     * @param array $optParams Optional parameters.
     * @return Google_Annotationsdata
     * @throws Google_Exception
     * @opt_param string annotationDataId The list of Annotation Data Ids to retrieve. Pagination is ignored if this is set.
     * @opt_param int h The requested pixel height for any images. If height is provided width must also be provided.
     * @opt_param string locale The locale information for the data. ISO-639-1 language and ISO-3166-1 country code. Ex: 'en_US'.
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string pageToken The value of the nextToken from the previous page.
     * @opt_param int scale The requested scale for the image.
     * @opt_param string source String to identify the originator of this request.
     * @opt_param string updatedMax RFC 3339 timestamp to restrict to items updated prior to this timestamp (exclusive).
     * @opt_param string updatedMin RFC 3339 timestamp to restrict to items updated since this timestamp (inclusive).
     * @opt_param int w The requested pixel width for any images. If width is provided height must also be provided.
     */
    public function listLayersAnnotationData($volumeId, $layerId, $contentVersion, $optParams = [])
    {
        $params = ['volumeId' => $volumeId, 'layerId' => $layerId, 'contentVersion' => $contentVersion];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Annotationsdata($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "volumeAnnotations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $volumeAnnotations = $booksService->volumeAnnotations;
 *  </code>
 */
class Google_LayersVolumeAnnotationsServiceResource extends Google_ServiceResource
{

    /**
     * Gets the volume annotation. (volumeAnnotations.get)
     *
     * @param string $volumeId The volume to retrieve annotations for.
     * @param string $layerId The ID for the layer to get the annotations.
     * @param string $annotationId The ID of the volume annotation to retrieve.
     * @param array $optParams Optional parameters.
     * @return Google_Volumeannotation
     * @throws Google_Exception
     * @opt_param string locale The locale information for the data. ISO-639-1 language and ISO-3166-1 country code. Ex: 'en_US'.
     * @opt_param string source String to identify the originator of this request.
     */
    public function get($volumeId, $layerId, $annotationId, $optParams = [])
    {
        $params = ['volumeId' => $volumeId, 'layerId' => $layerId, 'annotationId' => $annotationId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Volumeannotation($data);
        } else {
            return $data;
        }
    }

    /**
     * Gets the volume annotations for a volume and layer. (volumeAnnotations.list)
     *
     * @param string $volumeId The volume to retrieve annotations for.
     * @param string $layerId The ID for the layer to get the annotations.
     * @param string $contentVersion The content version for the requested volume.
     * @param array $optParams Optional parameters.
     * @return Google_Volumeannotations
     * @throws Google_Exception
     * @opt_param string endOffset The end offset to end retrieving data from.
     * @opt_param string endPosition The end position to end retrieving data from.
     * @opt_param string locale The locale information for the data. ISO-639-1 language and ISO-3166-1 country code. Ex: 'en_US'.
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string pageToken The value of the nextToken from the previous page.
     * @opt_param bool showDeleted Set to true to return deleted annotations. updatedMin must be in the request to use this. Defaults to false.
     * @opt_param string source String to identify the originator of this request.
     * @opt_param string startOffset The start offset to start retrieving data from.
     * @opt_param string startPosition The start position to start retrieving data from.
     * @opt_param string updatedMax RFC 3339 timestamp to restrict to items updated prior to this timestamp (exclusive).
     * @opt_param string updatedMin RFC 3339 timestamp to restrict to items updated since this timestamp (inclusive).
     * @opt_param string volumeAnnotationsVersion The version of the volume annotations that you are requesting.
     */
    public function listLayersVolumeAnnotations($volumeId, $layerId, $contentVersion, $optParams = [])
    {
        $params = ['volumeId' => $volumeId, 'layerId' => $layerId, 'contentVersion' => $contentVersion];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Volumeannotations($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "myconfig" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $myconfig = $booksService->myconfig;
 *  </code>
 */
class Google_MyconfigServiceResource extends Google_ServiceResource
{

    /**
     * Release downloaded content access restriction. (myconfig.releaseDownloadAccess)
     *
     * @param string $volumeIds The volume(s) to release restrictions for.
     * @param string $cpksver The device/version ID from which to release the restriction.
     * @param array $optParams Optional parameters.
     * @return Google_DownloadAccesses
     * @throws Google_Exception
     * @opt_param string locale ISO-639-1, ISO-3166-1 codes for message localization, i.e. en_US.
     * @opt_param string source String to identify the originator of this request.
     */
    public function releaseDownloadAccess($volumeIds, $cpksver, $optParams = [])
    {
        $params = ['volumeIds' => $volumeIds, 'cpksver' => $cpksver];
        $params = array_merge($params, $optParams);
        $data = $this->__call('releaseDownloadAccess', [$params]);
        if ($this->useObjects()) {
            return new Google_DownloadAccesses($data);
        } else {
            return $data;
        }
    }

    /**
     * Request concurrent and download access restrictions. (myconfig.requestAccess)
     *
     * @param string $source String to identify the originator of this request.
     * @param string $volumeId The volume to request concurrent/download restrictions for.
     * @param string $nonce The client nonce value.
     * @param string $cpksver The device/version ID from which to request the restrictions.
     * @param array $optParams Optional parameters.
     * @return Google_RequestAccess
     * @throws Google_Exception
     * @opt_param string locale ISO-639-1, ISO-3166-1 codes for message localization, i.e. en_US.
     */
    public function requestAccess($source, $volumeId, $nonce, $cpksver, $optParams = [])
    {
        $params = ['source' => $source, 'volumeId' => $volumeId, 'nonce' => $nonce, 'cpksver' => $cpksver];
        $params = array_merge($params, $optParams);
        $data = $this->__call('requestAccess', [$params]);
        if ($this->useObjects()) {
            return new Google_RequestAccess($data);
        } else {
            return $data;
        }
    }

    /**
     * Request downloaded content access for specified volumes on the My eBooks shelf.
     * (myconfig.syncVolumeLicenses)
     *
     * @param string $source String to identify the originator of this request.
     * @param string $nonce The client nonce value.
     * @param string $cpksver The device/version ID from which to release the restriction.
     * @param array $optParams Optional parameters.
     * @return Google_Volumes
     * @throws Google_Exception
     * @opt_param string locale ISO-639-1, ISO-3166-1 codes for message localization, i.e. en_US.
     * @opt_param bool showPreorders Set to true to show pre-ordered books. Defaults to false.
     * @opt_param string volumeIds The volume(s) to request download restrictions for.
     */
    public function syncVolumeLicenses($source, $nonce, $cpksver, $optParams = [])
    {
        $params = ['source' => $source, 'nonce' => $nonce, 'cpksver' => $cpksver];
        $params = array_merge($params, $optParams);
        $data = $this->__call('syncVolumeLicenses', [$params]);
        if ($this->useObjects()) {
            return new Google_Volumes($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "mylibrary" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $mylibrary = $booksService->mylibrary;
 *  </code>
 */
class Google_MylibraryServiceResource extends Google_ServiceResource
{

}

/**
 * The "annotations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $annotations = $booksService->annotations;
 *  </code>
 */
class Google_MylibraryAnnotationsServiceResource extends Google_ServiceResource
{

    /**
     * Deletes an annotation. (annotations.delete)
     *
     * @param string $annotationId The ID for the annotation to delete.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     * @opt_param string source String to identify the originator of this request.
     */
    public function delete($annotationId, $optParams = [])
    {
        $params = ['annotationId' => $annotationId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Gets an annotation by its ID. (annotations.get)
     *
     * @param string $annotationId The ID for the annotation to retrieve.
     * @param array $optParams Optional parameters.
     * @return Google_Annotation
     * @throws Google_Exception
     * @opt_param string source String to identify the originator of this request.
     */
    public function get($annotationId, $optParams = [])
    {
        $params = ['annotationId' => $annotationId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Annotation($data);
        } else {
            return $data;
        }
    }

    /**
     * Inserts a new annotation. (annotations.insert)
     *
     * @param Google_Annotation $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Annotation
     * @throws Google_Exception
     * @opt_param string source String to identify the originator of this request.
     */
    public function insert(Google_Annotation $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Annotation($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves a list of annotations, possibly filtered. (annotations.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Annotations
     * @throws Google_Exception
     * @opt_param string contentVersion The content version for the requested volume.
     * @opt_param string layerId The layer ID to limit annotation by.
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string pageIds The page ID(s) for the volume that is being queried.
     * @opt_param string pageToken The value of the nextToken from the previous page.
     * @opt_param bool showDeleted Set to true to return deleted annotations. updatedMin must be in the request to use this. Defaults to false.
     * @opt_param string source String to identify the originator of this request.
     * @opt_param string updatedMax RFC 3339 timestamp to restrict to items updated prior to this timestamp (exclusive).
     * @opt_param string updatedMin RFC 3339 timestamp to restrict to items updated since this timestamp (inclusive).
     * @opt_param string volumeId The volume to restrict annotations to.
     */
    public function listMylibraryAnnotations($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Annotations($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates an existing annotation. (annotations.update)
     *
     * @param string $annotationId The ID for the annotation to update.
     * @param Google_Annotation $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Annotation
     * @throws Google_Exception
     * @opt_param string source String to identify the originator of this request.
     */
    public function update($annotationId, Google_Annotation $postBody, $optParams = [])
    {
        $params = ['annotationId' => $annotationId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Annotation($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "bookshelves" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $bookshelves = $booksService->bookshelves;
 *  </code>
 */
class Google_MylibraryBookshelvesServiceResource extends Google_ServiceResource
{

    /**
     * Adds a volume to a bookshelf. (bookshelves.addVolume)
     *
     * @param string $shelf ID of bookshelf to which to add a volume.
     * @param string $volumeId ID of volume to add.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     * @opt_param string source String to identify the originator of this request.
     */
    public function addVolume($shelf, $volumeId, $optParams = [])
    {
        $params = ['shelf' => $shelf, 'volumeId' => $volumeId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('addVolume', [$params]);
        return $data;
    }

    /**
     * Clears all volumes from a bookshelf. (bookshelves.clearVolumes)
     *
     * @param string $shelf ID of bookshelf from which to remove a volume.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     * @opt_param string source String to identify the originator of this request.
     */
    public function clearVolumes($shelf, $optParams = [])
    {
        $params = ['shelf' => $shelf];
        $params = array_merge($params, $optParams);
        $data = $this->__call('clearVolumes', [$params]);
        return $data;
    }

    /**
     * Retrieves metadata for a specific bookshelf belonging to the authenticated user.
     * (bookshelves.get)
     *
     * @param string $shelf ID of bookshelf to retrieve.
     * @param array $optParams Optional parameters.
     * @return Google_Bookshelf
     * @throws Google_Exception
     * @opt_param string source String to identify the originator of this request.
     */
    public function get($shelf, $optParams = [])
    {
        $params = ['shelf' => $shelf];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Bookshelf($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves a list of bookshelves belonging to the authenticated user. (bookshelves.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Bookshelves
     * @throws Google_Exception
     * @opt_param string source String to identify the originator of this request.
     */
    public function listMylibraryBookshelves($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Bookshelves($data);
        } else {
            return $data;
        }
    }

    /**
     * Moves a volume within a bookshelf. (bookshelves.moveVolume)
     *
     * @param string $shelf ID of bookshelf with the volume.
     * @param string $volumeId ID of volume to move.
     * @param int $volumePosition Position on shelf to move the item (0 puts the item before the current first item, 1 puts it between the first and the second and so on.)
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     * @opt_param string source String to identify the originator of this request.
     */
    public function moveVolume($shelf, $volumeId, $volumePosition, $optParams = [])
    {
        $params = ['shelf' => $shelf, 'volumeId' => $volumeId, 'volumePosition' => $volumePosition];
        $params = array_merge($params, $optParams);
        $data = $this->__call('moveVolume', [$params]);
        return $data;
    }

    /**
     * Removes a volume from a bookshelf. (bookshelves.removeVolume)
     *
     * @param string $shelf ID of bookshelf from which to remove a volume.
     * @param string $volumeId ID of volume to remove.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     * @opt_param string source String to identify the originator of this request.
     */
    public function removeVolume($shelf, $volumeId, $optParams = [])
    {
        $params = ['shelf' => $shelf, 'volumeId' => $volumeId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('removeVolume', [$params]);
        return $data;
    }
}

/**
 * The "volumes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $volumes = $booksService->volumes;
 *  </code>
 */
class Google_MylibraryBookshelvesVolumesServiceResource extends Google_ServiceResource
{

    /**
     * Gets volume information for volumes on a bookshelf. (volumes.list)
     *
     * @param string $shelf The bookshelf ID or name retrieve volumes for.
     * @param array $optParams Optional parameters.
     * @return Google_Volumes
     * @throws Google_Exception
     * @opt_param string country ISO-3166-1 code to override the IP-based location.
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string projection Restrict information returned to a set of selected fields.
     * @opt_param string q Full-text search query string in this bookshelf.
     * @opt_param bool showPreorders Set to true to show pre-ordered books. Defaults to false.
     * @opt_param string source String to identify the originator of this request.
     * @opt_param string startIndex Index of the first element to return (starts at 0)
     */
    public function listMylibraryBookshelvesVolumes($shelf, $optParams = [])
    {
        $params = ['shelf' => $shelf];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Volumes($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "readingpositions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $readingpositions = $booksService->readingpositions;
 *  </code>
 */
class Google_MylibraryReadingpositionsServiceResource extends Google_ServiceResource
{

    /**
     * Retrieves my reading position information for a volume. (readingpositions.get)
     *
     * @param string $volumeId ID of volume for which to retrieve a reading position.
     * @param array $optParams Optional parameters.
     * @return Google_ReadingPosition
     * @throws Google_Exception
     * @opt_param string contentVersion Volume content version for which this reading position is requested.
     * @opt_param string source String to identify the originator of this request.
     */
    public function get($volumeId, $optParams = [])
    {
        $params = ['volumeId' => $volumeId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_ReadingPosition($data);
        } else {
            return $data;
        }
    }

    /**
     * Sets my reading position information for a volume. (readingpositions.setPosition)
     *
     * @param string $volumeId ID of volume for which to update the reading position.
     * @param string $timestamp RFC 3339 UTC format timestamp associated with this reading position.
     * @param string $position Position string for the new volume reading position.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     * @opt_param string action Action that caused this reading position to be set.
     * @opt_param string contentVersion Volume content version for which this reading position applies.
     * @opt_param string deviceCookie Random persistent device cookie optional on set position.
     * @opt_param string source String to identify the originator of this request.
     */
    public function setPosition($volumeId, $timestamp, $position, $optParams = [])
    {
        $params = ['volumeId' => $volumeId, 'timestamp' => $timestamp, 'position' => $position];
        $params = array_merge($params, $optParams);
        $data = $this->__call('setPosition', [$params]);
        return $data;
    }
}

/**
 * The "volumes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $volumes = $booksService->volumes;
 *  </code>
 */
class Google_VolumesServiceResource extends Google_ServiceResource
{

    /**
     * Gets volume information for a single volume. (volumes.get)
     *
     * @param string $volumeId ID of volume to retrieve.
     * @param array $optParams Optional parameters.
     * @return Google_Volume
     * @throws Google_Exception
     * @opt_param string country ISO-3166-1 code to override the IP-based location.
     * @opt_param string partner Brand results for partner ID.
     * @opt_param string projection Restrict information returned to a set of selected fields.
     * @opt_param string source String to identify the originator of this request.
     */
    public function get($volumeId, $optParams = [])
    {
        $params = ['volumeId' => $volumeId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Volume($data);
        } else {
            return $data;
        }
    }

    /**
     * Performs a book search. (volumes.list)
     *
     * @param string $q Full-text search query string.
     * @param array $optParams Optional parameters.
     * @return Google_Volumes
     * @throws Google_Exception
     * @opt_param string download Restrict to volumes by download availability.
     * @opt_param string filter Filter search results.
     * @opt_param string langRestrict Restrict results to books with this language code.
     * @opt_param string libraryRestrict Restrict search to this user's library.
     * @opt_param string maxResults Maximum number of results to return.
     * @opt_param string orderBy Sort search results.
     * @opt_param string partner Restrict and brand results for partner ID.
     * @opt_param string printType Restrict to books or magazines.
     * @opt_param string projection Restrict information returned to a set of selected fields.
     * @opt_param bool showPreorders Set to true to show books available for preorder. Defaults to false.
     * @opt_param string source String to identify the originator of this request.
     * @opt_param string startIndex Index of the first result to return (starts at 0)
     */
    public function listVolumes($q, $optParams = [])
    {
        $params = ['q' => $q];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Volumes($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "associated" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $associated = $booksService->associated;
 *  </code>
 */
class Google_VolumesAssociatedServiceResource extends Google_ServiceResource
{

    /**
     * Return a list of associated books. (associated.list)
     *
     * @param string $volumeId ID of the source volume.
     * @param array $optParams Optional parameters.
     * @return Google_Volumes
     * @throws Google_Exception
     * @opt_param string association Association type.
     * @opt_param string locale ISO-639-1 language and ISO-3166-1 country code. Ex: 'en_US'. Used for generating recommendations.
     * @opt_param string source String to identify the originator of this request.
     */
    public function listVolumesAssociated($volumeId, $optParams = [])
    {
        $params = ['volumeId' => $volumeId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Volumes($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "mybooks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $mybooks = $booksService->mybooks;
 *  </code>
 */
class Google_VolumesMybooksServiceResource extends Google_ServiceResource
{

    /**
     * Return a list of books in My Library. (mybooks.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Volumes
     * @throws Google_Exception
     * @opt_param string acquireMethod How the book was aquired
     * @opt_param string locale ISO-639-1 language and ISO-3166-1 country code. Ex:'en_US'. Used for generating recommendations.
     * @opt_param string maxResults Maximum number of results to return.
     * @opt_param string processingState The processing state of the user uploaded volumes to be returned. Applicable only if the UPLOADED is specified in the acquireMethod.
     * @opt_param string source String to identify the originator of this request.
     * @opt_param string startIndex Index of the first result to return (starts at 0)
     */
    public function listVolumesMybooks($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Volumes($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "recommended" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $recommended = $booksService->recommended;
 *  </code>
 */
class Google_VolumesRecommendedServiceResource extends Google_ServiceResource
{

    /**
     * Return a list of recommended books for the current user. (recommended.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Volumes
     * @throws Google_Exception
     * @opt_param string locale ISO-639-1 language and ISO-3166-1 country code. Ex: 'en_US'. Used for generating recommendations.
     * @opt_param string source String to identify the originator of this request.
     */
    public function listVolumesRecommended($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Volumes($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "useruploaded" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new Google_BooksService(...);
 *   $useruploaded = $booksService->useruploaded;
 *  </code>
 */
class Google_VolumesUseruploadedServiceResource extends Google_ServiceResource
{

    /**
     * Return a list of books uploaded by the current user. (useruploaded.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Volumes
     * @throws Google_Exception
     * @opt_param string locale ISO-639-1 language and ISO-3166-1 country code. Ex: 'en_US'. Used for generating recommendations.
     * @opt_param string maxResults Maximum number of results to return.
     * @opt_param string processingState The processing state of the user uploaded volumes to be returned.
     * @opt_param string source String to identify the originator of this request.
     * @opt_param string startIndex Index of the first result to return (starts at 0)
     * @opt_param string volumeId The ids of the volumes to be returned. If not specified all that match the processingState are returned.
     */
    public function listVolumesUseruploaded($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_Volumes($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Books (v1).
 *
 * <p>
 * Lets you search for books and manage your Google Books library.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/books/docs/v1/getting_started" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_BooksService extends Google_Service
{
    /**
     * @var Google_BookshelvesServiceResource
     */
    public $bookshelves;
    /**
     * @var Google_BookshelvesVolumesServiceResource
     */
    public $bookshelves_volumes;
    /**
     * @var Google_CloudloadingServiceResource
     */
    public $cloudloading;
    /**
     * @var Google_LayersServiceResource
     */
    public $layers;
    /**
     * @var Google_LayersAnnotationDataServiceResource
     */
    public $layers_annotationData;
    /**
     * @var Google_LayersVolumeAnnotationsServiceResource
     */
    public $layers_volumeAnnotations;
    /**
     * @var Google_MyconfigServiceResource
     */
    public $myconfig;
    /**
     * @var Google_MylibraryAnnotationsServiceResource
     */
    public $mylibrary_annotations;
    /**
     * @var Google_MylibraryBookshelvesServiceResource
     */
    public $mylibrary_bookshelves;
    /**
     * @var Google_MylibraryBookshelvesVolumesServiceResource
     */
    public $mylibrary_bookshelves_volumes;
    /**
     * @var Google_MylibraryReadingpositionsServiceResource
     */
    public $mylibrary_readingpositions;
    /**
     * @var Google_VolumesServiceResource
     */
    public $volumes;
    /**
     * @var Google_VolumesAssociatedServiceResource
     */
    public $volumes_associated;
    /**
     * @var Google_VolumesMybooksServiceResource
     */
    public $volumes_mybooks;
    /**
     * @var Google_VolumesRecommendedServiceResource
     */
    public $volumes_recommended;
    /**
     * @var Google_VolumesUseruploadedServiceResource
     */
    public $volumes_useruploaded;

    /**
     * Constructs the internal representation of the Books service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'books/v1/';
        $this->version = 'v1';
        $this->serviceName = 'books';

        $client->addService($this->serviceName, $this->version);
        $this->bookshelves = new Google_BookshelvesServiceResource($this, $this->serviceName, 'bookshelves', json_decode('{"methods": {"get": {"id": "books.bookshelves.get", "path": "users/{userId}/bookshelves/{shelf}", "httpMethod": "GET", "parameters": {"shelf": {"type": "string", "required": true, "location": "path"}, "source": {"type": "string", "location": "query"}, "userId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Bookshelf"}, "scopes": ["https://www.googleapis.com/auth/books"]}, "list": {"id": "books.bookshelves.list", "path": "users/{userId}/bookshelves", "httpMethod": "GET", "parameters": {"source": {"type": "string", "location": "query"}, "userId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Bookshelves"}, "scopes": ["https://www.googleapis.com/auth/books"]}}}', true));
        $this->bookshelves_volumes = new Google_BookshelvesVolumesServiceResource($this, $this->serviceName, 'volumes', json_decode('{"methods": {"list": {"id": "books.bookshelves.volumes.list", "path": "users/{userId}/bookshelves/{shelf}/volumes", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "location": "query"}, "shelf": {"type": "string", "required": true, "location": "path"}, "showPreorders": {"type": "boolean", "location": "query"}, "source": {"type": "string", "location": "query"}, "startIndex": {"type": "integer", "format": "uint32", "minimum": "0", "location": "query"}, "userId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Volumes"}, "scopes": ["https://www.googleapis.com/auth/books"]}}}', true));
        $this->cloudloading = new Google_CloudloadingServiceResource($this, $this->serviceName, 'cloudloading', json_decode('{"methods": {"addBook": {"id": "books.cloudloading.addBook", "path": "cloudloading/addBook", "httpMethod": "POST", "parameters": {"drive_document_id": {"type": "string", "location": "query"}, "mime_type": {"type": "string", "location": "query"}, "name": {"type": "string", "location": "query"}, "upload_client_token": {"type": "string", "location": "query"}}, "response": {"$ref": "BooksCloudloadingResource"}, "scopes": ["https://www.googleapis.com/auth/books"]}, "deleteBook": {"id": "books.cloudloading.deleteBook", "path": "cloudloading/deleteBook", "httpMethod": "POST", "parameters": {"volumeId": {"type": "string", "required": true, "location": "query"}}, "scopes": ["https://www.googleapis.com/auth/books"]}, "updateBook": {"id": "books.cloudloading.updateBook", "path": "cloudloading/updateBook", "httpMethod": "POST", "request": {"$ref": "BooksCloudloadingResource"}, "response": {"$ref": "BooksCloudloadingResource"}, "scopes": ["https://www.googleapis.com/auth/books"]}}}', true));
        $this->layers = new Google_LayersServiceResource($this, $this->serviceName, 'layers', json_decode('{"methods": {"get": {"id": "books.layers.get", "path": "volumes/{volumeId}/layersummary/{summaryId}", "httpMethod": "GET", "parameters": {"contentVersion": {"type": "string", "location": "query"}, "source": {"type": "string", "location": "query"}, "summaryId": {"type": "string", "required": true, "location": "path"}, "volumeId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Layersummary"}, "scopes": ["https://www.googleapis.com/auth/books"]}, "list": {"id": "books.layers.list", "path": "volumes/{volumeId}/layersummary", "httpMethod": "GET", "parameters": {"contentVersion": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "200", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "source": {"type": "string", "location": "query"}, "volumeId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Layersummaries"}, "scopes": ["https://www.googleapis.com/auth/books"]}}}', true));
        $this->layers_annotationData = new Google_LayersAnnotationDataServiceResource($this, $this->serviceName, 'annotationData', json_decode('{"methods": {"get": {"id": "books.layers.annotationData.get", "path": "volumes/{volumeId}/layers/{layerId}/data/{annotationDataId}", "httpMethod": "GET", "parameters": {"annotationDataId": {"type": "string", "required": true, "location": "path"}, "contentVersion": {"type": "string", "required": true, "location": "query"}, "h": {"type": "integer", "format": "int32", "location": "query"}, "layerId": {"type": "string", "required": true, "location": "path"}, "locale": {"type": "string", "location": "query"}, "scale": {"type": "integer", "format": "int32", "minimum": "0", "location": "query"}, "source": {"type": "string", "location": "query"}, "volumeId": {"type": "string", "required": true, "location": "path"}, "w": {"type": "integer", "format": "int32", "location": "query"}}, "response": {"$ref": "Annotationdata"}, "scopes": ["https://www.googleapis.com/auth/books"]}, "list": {"id": "books.layers.annotationData.list", "path": "volumes/{volumeId}/layers/{layerId}/data", "httpMethod": "GET", "parameters": {"annotationDataId": {"type": "string", "repeated": true, "location": "query"}, "contentVersion": {"type": "string", "required": true, "location": "query"}, "h": {"type": "integer", "format": "int32", "location": "query"}, "layerId": {"type": "string", "required": true, "location": "path"}, "locale": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "200", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "scale": {"type": "integer", "format": "int32", "minimum": "0", "location": "query"}, "source": {"type": "string", "location": "query"}, "updatedMax": {"type": "string", "location": "query"}, "updatedMin": {"type": "string", "location": "query"}, "volumeId": {"type": "string", "required": true, "location": "path"}, "w": {"type": "integer", "format": "int32", "location": "query"}}, "response": {"$ref": "Annotationsdata"}, "scopes": ["https://www.googleapis.com/auth/books"]}}}', true));
        $this->layers_volumeAnnotations = new Google_LayersVolumeAnnotationsServiceResource($this, $this->serviceName, 'volumeAnnotations', json_decode('{"methods": {"get": {"id": "books.layers.volumeAnnotations.get", "path": "volumes/{volumeId}/layers/{layerId}/annotations/{annotationId}", "httpMethod": "GET", "parameters": {"annotationId": {"type": "string", "required": true, "location": "path"}, "layerId": {"type": "string", "required": true, "location": "path"}, "locale": {"type": "string", "location": "query"}, "source": {"type": "string", "location": "query"}, "volumeId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Volumeannotation"}, "scopes": ["https://www.googleapis.com/auth/books"]}, "list": {"id": "books.layers.volumeAnnotations.list", "path": "volumes/{volumeId}/layers/{layerId}", "httpMethod": "GET", "parameters": {"contentVersion": {"type": "string", "required": true, "location": "query"}, "endOffset": {"type": "string", "location": "query"}, "endPosition": {"type": "string", "location": "query"}, "layerId": {"type": "string", "required": true, "location": "path"}, "locale": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "200", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "showDeleted": {"type": "boolean", "location": "query"}, "source": {"type": "string", "location": "query"}, "startOffset": {"type": "string", "location": "query"}, "startPosition": {"type": "string", "location": "query"}, "updatedMax": {"type": "string", "location": "query"}, "updatedMin": {"type": "string", "location": "query"}, "volumeAnnotationsVersion": {"type": "string", "location": "query"}, "volumeId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Volumeannotations"}, "scopes": ["https://www.googleapis.com/auth/books"]}}}', true));
        $this->myconfig = new Google_MyconfigServiceResource($this, $this->serviceName, 'myconfig', json_decode('{"methods": {"releaseDownloadAccess": {"id": "books.myconfig.releaseDownloadAccess", "path": "myconfig/releaseDownloadAccess", "httpMethod": "POST", "parameters": {"cpksver": {"type": "string", "required": true, "location": "query"}, "locale": {"type": "string", "location": "query"}, "source": {"type": "string", "location": "query"}, "volumeIds": {"type": "string", "required": true, "repeated": true, "location": "query"}}, "response": {"$ref": "DownloadAccesses"}, "scopes": ["https://www.googleapis.com/auth/books"]}, "requestAccess": {"id": "books.myconfig.requestAccess", "path": "myconfig/requestAccess", "httpMethod": "POST", "parameters": {"cpksver": {"type": "string", "required": true, "location": "query"}, "locale": {"type": "string", "location": "query"}, "nonce": {"type": "string", "required": true, "location": "query"}, "source": {"type": "string", "required": true, "location": "query"}, "volumeId": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "RequestAccess"}, "scopes": ["https://www.googleapis.com/auth/books"]}, "syncVolumeLicenses": {"id": "books.myconfig.syncVolumeLicenses", "path": "myconfig/syncVolumeLicenses", "httpMethod": "POST", "parameters": {"cpksver": {"type": "string", "required": true, "location": "query"}, "locale": {"type": "string", "location": "query"}, "nonce": {"type": "string", "required": true, "location": "query"}, "showPreorders": {"type": "boolean", "location": "query"}, "source": {"type": "string", "required": true, "location": "query"}, "volumeIds": {"type": "string", "repeated": true, "location": "query"}}, "response": {"$ref": "Volumes"}, "scopes": ["https://www.googleapis.com/auth/books"]}}}', true));
        $this->mylibrary_annotations = new Google_MylibraryAnnotationsServiceResource($this, $this->serviceName, 'annotations', json_decode('{"methods": {"delete": {"id": "books.mylibrary.annotations.delete", "path": "mylibrary/annotations/{annotationId}", "httpMethod": "DELETE", "parameters": {"annotationId": {"type": "string", "required": true, "location": "path"}, "source": {"type": "string", "location": "query"}}, "scopes": ["https://www.googleapis.com/auth/books"]}, "get": {"id": "books.mylibrary.annotations.get", "path": "mylibrary/annotations/{annotationId}", "httpMethod": "GET", "parameters": {"annotationId": {"type": "string", "required": true, "location": "path"}, "source": {"type": "string", "location": "query"}}, "response": {"$ref": "Annotation"}, "scopes": ["https://www.googleapis.com/auth/books"]}, "insert": {"id": "books.mylibrary.annotations.insert", "path": "mylibrary/annotations", "httpMethod": "POST", "parameters": {"source": {"type": "string", "location": "query"}}, "request": {"$ref": "Annotation"}, "response": {"$ref": "Annotation"}, "scopes": ["https://www.googleapis.com/auth/books"]}, "list": {"id": "books.mylibrary.annotations.list", "path": "mylibrary/annotations", "httpMethod": "GET", "parameters": {"contentVersion": {"type": "string", "location": "query"}, "layerId": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "40", "location": "query"}, "pageIds": {"type": "string", "repeated": true, "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "showDeleted": {"type": "boolean", "location": "query"}, "source": {"type": "string", "location": "query"}, "updatedMax": {"type": "string", "location": "query"}, "updatedMin": {"type": "string", "location": "query"}, "volumeId": {"type": "string", "location": "query"}}, "response": {"$ref": "Annotations"}, "scopes": ["https://www.googleapis.com/auth/books"]}, "update": {"id": "books.mylibrary.annotations.update", "path": "mylibrary/annotations/{annotationId}", "httpMethod": "PUT", "parameters": {"annotationId": {"type": "string", "required": true, "location": "path"}, "source": {"type": "string", "location": "query"}}, "request": {"$ref": "Annotation"}, "response": {"$ref": "Annotation"}, "scopes": ["https://www.googleapis.com/auth/books"]}}}', true));
        $this->mylibrary_bookshelves = new Google_MylibraryBookshelvesServiceResource($this, $this->serviceName, 'bookshelves', json_decode('{"methods": {"addVolume": {"id": "books.mylibrary.bookshelves.addVolume", "path": "mylibrary/bookshelves/{shelf}/addVolume", "httpMethod": "POST", "parameters": {"shelf": {"type": "string", "required": true, "location": "path"}, "source": {"type": "string", "location": "query"}, "volumeId": {"type": "string", "required": true, "location": "query"}}, "scopes": ["https://www.googleapis.com/auth/books"]}, "clearVolumes": {"id": "books.mylibrary.bookshelves.clearVolumes", "path": "mylibrary/bookshelves/{shelf}/clearVolumes", "httpMethod": "POST", "parameters": {"shelf": {"type": "string", "required": true, "location": "path"}, "source": {"type": "string", "location": "query"}}, "scopes": ["https://www.googleapis.com/auth/books"]}, "get": {"id": "books.mylibrary.bookshelves.get", "path": "mylibrary/bookshelves/{shelf}", "httpMethod": "GET", "parameters": {"shelf": {"type": "string", "required": true, "location": "path"}, "source": {"type": "string", "location": "query"}}, "response": {"$ref": "Bookshelf"}, "scopes": ["https://www.googleapis.com/auth/books"]}, "list": {"id": "books.mylibrary.bookshelves.list", "path": "mylibrary/bookshelves", "httpMethod": "GET", "parameters": {"source": {"type": "string", "location": "query"}}, "response": {"$ref": "Bookshelves"}, "scopes": ["https://www.googleapis.com/auth/books"]}, "moveVolume": {"id": "books.mylibrary.bookshelves.moveVolume", "path": "mylibrary/bookshelves/{shelf}/moveVolume", "httpMethod": "POST", "parameters": {"shelf": {"type": "string", "required": true, "location": "path"}, "source": {"type": "string", "location": "query"}, "volumeId": {"type": "string", "required": true, "location": "query"}, "volumePosition": {"type": "integer", "required": true, "format": "int32", "location": "query"}}, "scopes": ["https://www.googleapis.com/auth/books"]}, "removeVolume": {"id": "books.mylibrary.bookshelves.removeVolume", "path": "mylibrary/bookshelves/{shelf}/removeVolume", "httpMethod": "POST", "parameters": {"shelf": {"type": "string", "required": true, "location": "path"}, "source": {"type": "string", "location": "query"}, "volumeId": {"type": "string", "required": true, "location": "query"}}, "scopes": ["https://www.googleapis.com/auth/books"]}}}', true));
        $this->mylibrary_bookshelves_volumes = new Google_MylibraryBookshelvesVolumesServiceResource($this, $this->serviceName, 'volumes', json_decode('{"methods": {"list": {"id": "books.mylibrary.bookshelves.volumes.list", "path": "mylibrary/bookshelves/{shelf}/volumes", "httpMethod": "GET", "parameters": {"country": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "location": "query"}, "projection": {"type": "string", "enum": ["full", "lite"], "location": "query"}, "q": {"type": "string", "location": "query"}, "shelf": {"type": "string", "required": true, "location": "path"}, "showPreorders": {"type": "boolean", "location": "query"}, "source": {"type": "string", "location": "query"}, "startIndex": {"type": "integer", "format": "uint32", "minimum": "0", "location": "query"}}, "response": {"$ref": "Volumes"}, "scopes": ["https://www.googleapis.com/auth/books"]}}}', true));
        $this->mylibrary_readingpositions = new Google_MylibraryReadingpositionsServiceResource($this, $this->serviceName, 'readingpositions', json_decode('{"methods": {"get": {"id": "books.mylibrary.readingpositions.get", "path": "mylibrary/readingpositions/{volumeId}", "httpMethod": "GET", "parameters": {"contentVersion": {"type": "string", "location": "query"}, "source": {"type": "string", "location": "query"}, "volumeId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "ReadingPosition"}, "scopes": ["https://www.googleapis.com/auth/books"]}, "setPosition": {"id": "books.mylibrary.readingpositions.setPosition", "path": "mylibrary/readingpositions/{volumeId}/setPosition", "httpMethod": "POST", "parameters": {"action": {"type": "string", "enum": ["bookmark", "chapter", "next-page", "prev-page", "scroll", "search"], "location": "query"}, "contentVersion": {"type": "string", "location": "query"}, "deviceCookie": {"type": "string", "location": "query"}, "position": {"type": "string", "required": true, "location": "query"}, "source": {"type": "string", "location": "query"}, "timestamp": {"type": "string", "required": true, "location": "query"}, "volumeId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/books"]}}}', true));
        $this->volumes = new Google_VolumesServiceResource($this, $this->serviceName, 'volumes', json_decode('{"methods": {"get": {"id": "books.volumes.get", "path": "volumes/{volumeId}", "httpMethod": "GET", "parameters": {"country": {"type": "string", "location": "query"}, "partner": {"type": "string", "location": "query"}, "projection": {"type": "string", "enum": ["full", "lite"], "location": "query"}, "source": {"type": "string", "location": "query"}, "volumeId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Volume"}, "scopes": ["https://www.googleapis.com/auth/books"]}, "list": {"id": "books.volumes.list", "path": "volumes", "httpMethod": "GET", "parameters": {"download": {"type": "string", "enum": ["epub"], "location": "query"}, "filter": {"type": "string", "enum": ["ebooks", "free-ebooks", "full", "paid-ebooks", "partial"], "location": "query"}, "langRestrict": {"type": "string", "location": "query"}, "libraryRestrict": {"type": "string", "enum": ["my-library", "no-restrict"], "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "40", "location": "query"}, "orderBy": {"type": "string", "enum": ["newest", "relevance"], "location": "query"}, "partner": {"type": "string", "location": "query"}, "printType": {"type": "string", "enum": ["all", "books", "magazines"], "location": "query"}, "projection": {"type": "string", "enum": ["full", "lite"], "location": "query"}, "q": {"type": "string", "required": true, "location": "query"}, "showPreorders": {"type": "boolean", "location": "query"}, "source": {"type": "string", "location": "query"}, "startIndex": {"type": "integer", "format": "uint32", "minimum": "0", "location": "query"}}, "response": {"$ref": "Volumes"}, "scopes": ["https://www.googleapis.com/auth/books"]}}}', true));
        $this->volumes_associated = new Google_VolumesAssociatedServiceResource($this, $this->serviceName, 'associated', json_decode('{"methods": {"list": {"id": "books.volumes.associated.list", "path": "volumes/{volumeId}/associated", "httpMethod": "GET", "parameters": {"association": {"type": "string", "enum": ["end-of-sample", "end-of-volume"], "location": "query"}, "locale": {"type": "string", "location": "query"}, "source": {"type": "string", "location": "query"}, "volumeId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Volumes"}, "scopes": ["https://www.googleapis.com/auth/books"]}}}', true));
        $this->volumes_mybooks = new Google_VolumesMybooksServiceResource($this, $this->serviceName, 'mybooks', json_decode('{"methods": {"list": {"id": "books.volumes.mybooks.list", "path": "volumes/mybooks", "httpMethod": "GET", "parameters": {"acquireMethod": {"type": "string", "enum": ["PREORDERED", "PUBLIC_DOMAIN", "PURCHASED", "SAMPLE", "UPLOADED"], "repeated": true, "location": "query"}, "locale": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "processingState": {"type": "string", "enum": ["COMPLETED_FAILED", "COMPLETED_SUCCESS", "RUNNING"], "repeated": true, "location": "query"}, "source": {"type": "string", "location": "query"}, "startIndex": {"type": "integer", "format": "uint32", "minimum": "0", "location": "query"}}, "response": {"$ref": "Volumes"}, "scopes": ["https://www.googleapis.com/auth/books"]}}}', true));
        $this->volumes_recommended = new Google_VolumesRecommendedServiceResource($this, $this->serviceName, 'recommended', json_decode('{"methods": {"list": {"id": "books.volumes.recommended.list", "path": "volumes/recommended", "httpMethod": "GET", "parameters": {"locale": {"type": "string", "location": "query"}, "source": {"type": "string", "location": "query"}}, "response": {"$ref": "Volumes"}, "scopes": ["https://www.googleapis.com/auth/books"]}}}', true));
        $this->volumes_useruploaded = new Google_VolumesUseruploadedServiceResource($this, $this->serviceName, 'useruploaded', json_decode('{"methods": {"list": {"id": "books.volumes.useruploaded.list", "path": "volumes/useruploaded", "httpMethod": "GET", "parameters": {"locale": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "40", "location": "query"}, "processingState": {"type": "string", "enum": ["COMPLETED_FAILED", "COMPLETED_SUCCESS", "RUNNING"], "repeated": true, "location": "query"}, "source": {"type": "string", "location": "query"}, "startIndex": {"type": "integer", "format": "uint32", "minimum": "0", "location": "query"}, "volumeId": {"type": "string", "repeated": true, "location": "query"}}, "response": {"$ref": "Volumes"}, "scopes": ["https://www.googleapis.com/auth/books"]}}}', true));

    }
}


/**
 * Class Google_Annotation
 */
class Google_Annotation extends Google_Model
{
    /**
     * @var
     */
    public $afterSelectedText;
    /**
     * @var
     */
    public $beforeSelectedText;
    /**
     * @var string
     */
    protected $__clientVersionRangesType = 'Google_AnnotationClientVersionRanges';
    /**
     * @var string
     */
    protected $__clientVersionRangesDataType = '';
    /**
     * @var
     */
    public $clientVersionRanges;
    /**
     * @var
     */
    public $created;
    /**
     * @var string
     */
    protected $__currentVersionRangesType = 'Google_AnnotationCurrentVersionRanges';
    /**
     * @var string
     */
    protected $__currentVersionRangesDataType = '';
    /**
     * @var
     */
    public $currentVersionRanges;
    /**
     * @var
     */
    public $data;
    /**
     * @var
     */
    public $deleted;
    /**
     * @var
     */
    public $highlightStyle;
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
    public $layerId;
    /**
     * @var
     */
    public $pageIds;
    /**
     * @var
     */
    public $selectedText;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $updated;
    /**
     * @var
     */
    public $volumeId;

    /**
     * @param $afterSelectedText
     */
    public function setAfterSelectedText($afterSelectedText)
    {
        $this->afterSelectedText = $afterSelectedText;
    }

    /**
     * @return mixed
     */
    public function getAfterSelectedText()
    {
        return $this->afterSelectedText;
    }

    /**
     * @param $beforeSelectedText
     */
    public function setBeforeSelectedText($beforeSelectedText)
    {
        $this->beforeSelectedText = $beforeSelectedText;
    }

    /**
     * @return mixed
     */
    public function getBeforeSelectedText()
    {
        return $this->beforeSelectedText;
    }

    /**
     * @param Google_AnnotationClientVersionRanges $clientVersionRanges
     */
    public function setClientVersionRanges(Google_AnnotationClientVersionRanges $clientVersionRanges)
    {
        $this->clientVersionRanges = $clientVersionRanges;
    }

    /**
     * @return mixed
     */
    public function getClientVersionRanges()
    {
        return $this->clientVersionRanges;
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
     * @param Google_AnnotationCurrentVersionRanges $currentVersionRanges
     */
    public function setCurrentVersionRanges(Google_AnnotationCurrentVersionRanges $currentVersionRanges)
    {
        $this->currentVersionRanges = $currentVersionRanges;
    }

    /**
     * @return mixed
     */
    public function getCurrentVersionRanges()
    {
        return $this->currentVersionRanges;
    }

    /**
     * @param $data
     */
    public function setData($data)
    {
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
     * @param $highlightStyle
     */
    public function setHighlightStyle($highlightStyle)
    {
        $this->highlightStyle = $highlightStyle;
    }

    /**
     * @return mixed
     */
    public function getHighlightStyle()
    {
        return $this->highlightStyle;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
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
     * @param $layerId
     */
    public function setLayerId($layerId)
    {
        $this->layerId = $layerId;
    }

    /**
     * @return mixed
     */
    public function getLayerId()
    {
        return $this->layerId;
    }

    /**
     * @param $pageIds
     * @throws Google_Exception
     */
    public function setPageIds(/* array(Google_string) */
        $pageIds)
    {
        $this->assertIsArray($pageIds, 'Google_string', __METHOD__);
        $this->pageIds = $pageIds;
    }

    /**
     * @return mixed
     */
    public function getPageIds()
    {
        return $this->pageIds;
    }

    /**
     * @param $selectedText
     */
    public function setSelectedText($selectedText)
    {
        $this->selectedText = $selectedText;
    }

    /**
     * @return mixed
     */
    public function getSelectedText()
    {
        return $this->selectedText;
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
     * @param $volumeId
     */
    public function setVolumeId($volumeId)
    {
        $this->volumeId = $volumeId;
    }

    /**
     * @return mixed
     */
    public function getVolumeId()
    {
        return $this->volumeId;
    }
}

/**
 * Class Google_AnnotationClientVersionRanges
 */
class Google_AnnotationClientVersionRanges extends Google_Model
{
    /**
     * @var string
     */
    protected $__cfiRangeType = 'Google_BooksAnnotationsRange';
    /**
     * @var string
     */
    protected $__cfiRangeDataType = '';
    /**
     * @var
     */
    public $cfiRange;
    /**
     * @var
     */
    public $contentVersion;
    /**
     * @var string
     */
    protected $__gbImageRangeType = 'Google_BooksAnnotationsRange';
    /**
     * @var string
     */
    protected $__gbImageRangeDataType = '';
    /**
     * @var
     */
    public $gbImageRange;
    /**
     * @var string
     */
    protected $__gbTextRangeType = 'Google_BooksAnnotationsRange';
    /**
     * @var string
     */
    protected $__gbTextRangeDataType = '';
    /**
     * @var
     */
    public $gbTextRange;
    /**
     * @var string
     */
    protected $__imageCfiRangeType = 'Google_BooksAnnotationsRange';
    /**
     * @var string
     */
    protected $__imageCfiRangeDataType = '';
    /**
     * @var
     */
    public $imageCfiRange;

    /**
     * @param Google_BooksAnnotationsRange $cfiRange
     */
    public function setCfiRange(Google_BooksAnnotationsRange $cfiRange)
    {
        $this->cfiRange = $cfiRange;
    }

    /**
     * @return mixed
     */
    public function getCfiRange()
    {
        return $this->cfiRange;
    }

    /**
     * @param $contentVersion
     */
    public function setContentVersion($contentVersion)
    {
        $this->contentVersion = $contentVersion;
    }

    /**
     * @return mixed
     */
    public function getContentVersion()
    {
        return $this->contentVersion;
    }

    /**
     * @param Google_BooksAnnotationsRange $gbImageRange
     */
    public function setGbImageRange(Google_BooksAnnotationsRange $gbImageRange)
    {
        $this->gbImageRange = $gbImageRange;
    }

    /**
     * @return mixed
     */
    public function getGbImageRange()
    {
        return $this->gbImageRange;
    }

    /**
     * @param Google_BooksAnnotationsRange $gbTextRange
     */
    public function setGbTextRange(Google_BooksAnnotationsRange $gbTextRange)
    {
        $this->gbTextRange = $gbTextRange;
    }

    /**
     * @return mixed
     */
    public function getGbTextRange()
    {
        return $this->gbTextRange;
    }

    /**
     * @param Google_BooksAnnotationsRange $imageCfiRange
     */
    public function setImageCfiRange(Google_BooksAnnotationsRange $imageCfiRange)
    {
        $this->imageCfiRange = $imageCfiRange;
    }

    /**
     * @return mixed
     */
    public function getImageCfiRange()
    {
        return $this->imageCfiRange;
    }
}

/**
 * Class Google_AnnotationCurrentVersionRanges
 */
class Google_AnnotationCurrentVersionRanges extends Google_Model
{
    /**
     * @var string
     */
    protected $__cfiRangeType = 'Google_BooksAnnotationsRange';
    /**
     * @var string
     */
    protected $__cfiRangeDataType = '';
    /**
     * @var
     */
    public $cfiRange;
    /**
     * @var
     */
    public $contentVersion;
    /**
     * @var string
     */
    protected $__gbImageRangeType = 'Google_BooksAnnotationsRange';
    /**
     * @var string
     */
    protected $__gbImageRangeDataType = '';
    /**
     * @var
     */
    public $gbImageRange;
    /**
     * @var string
     */
    protected $__gbTextRangeType = 'Google_BooksAnnotationsRange';
    /**
     * @var string
     */
    protected $__gbTextRangeDataType = '';
    /**
     * @var
     */
    public $gbTextRange;
    /**
     * @var string
     */
    protected $__imageCfiRangeType = 'Google_BooksAnnotationsRange';
    /**
     * @var string
     */
    protected $__imageCfiRangeDataType = '';
    /**
     * @var
     */
    public $imageCfiRange;

    /**
     * @param Google_BooksAnnotationsRange $cfiRange
     */
    public function setCfiRange(Google_BooksAnnotationsRange $cfiRange)
    {
        $this->cfiRange = $cfiRange;
    }

    /**
     * @return mixed
     */
    public function getCfiRange()
    {
        return $this->cfiRange;
    }

    /**
     * @param $contentVersion
     */
    public function setContentVersion($contentVersion)
    {
        $this->contentVersion = $contentVersion;
    }

    /**
     * @return mixed
     */
    public function getContentVersion()
    {
        return $this->contentVersion;
    }

    /**
     * @param Google_BooksAnnotationsRange $gbImageRange
     */
    public function setGbImageRange(Google_BooksAnnotationsRange $gbImageRange)
    {
        $this->gbImageRange = $gbImageRange;
    }

    /**
     * @return mixed
     */
    public function getGbImageRange()
    {
        return $this->gbImageRange;
    }

    /**
     * @param Google_BooksAnnotationsRange $gbTextRange
     */
    public function setGbTextRange(Google_BooksAnnotationsRange $gbTextRange)
    {
        $this->gbTextRange = $gbTextRange;
    }

    /**
     * @return mixed
     */
    public function getGbTextRange()
    {
        return $this->gbTextRange;
    }

    /**
     * @param Google_BooksAnnotationsRange $imageCfiRange
     */
    public function setImageCfiRange(Google_BooksAnnotationsRange $imageCfiRange)
    {
        $this->imageCfiRange = $imageCfiRange;
    }

    /**
     * @return mixed
     */
    public function getImageCfiRange()
    {
        return $this->imageCfiRange;
    }
}

/**
 * Class Google_Annotationdata
 */
class Google_Annotationdata extends Google_Model
{
    /**
     * @var
     */
    public $annotationType;
    /**
     * @var
     */
    public $data;
    /**
     * @var
     */
    public $encoded_data;
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
    public $layerId;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $updated;
    /**
     * @var
     */
    public $volumeId;

    /**
     * @param $annotationType
     */
    public function setAnnotationType($annotationType)
    {
        $this->annotationType = $annotationType;
    }

    /**
     * @return mixed
     */
    public function getAnnotationType()
    {
        return $this->annotationType;
    }

    /**
     * @param $data
     */
    public function setData($data)
    {
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
     * @param $encoded_data
     */
    public function setEncoded_data($encoded_data)
    {
        $this->encoded_data = $encoded_data;
    }

    /**
     * @return mixed
     */
    public function getEncoded_data()
    {
        return $this->encoded_data;
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
     * @param $layerId
     */
    public function setLayerId($layerId)
    {
        $this->layerId = $layerId;
    }

    /**
     * @return mixed
     */
    public function getLayerId()
    {
        return $this->layerId;
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
     * @param $volumeId
     */
    public function setVolumeId($volumeId)
    {
        $this->volumeId = $volumeId;
    }

    /**
     * @return mixed
     */
    public function getVolumeId()
    {
        return $this->volumeId;
    }
}

/**
 * Class Google_Annotations
 */
class Google_Annotations extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Annotation';
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
    public $totalItems;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Annotation) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Annotation', __METHOD__);
        $this->items = $items;
    }

    /**
     * @return mixed
     */
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

    /**
     * @return mixed
     */
    public function getNextPageToken()
    {
        return $this->nextPageToken;
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
}

/**
 * Class Google_Annotationsdata
 */
class Google_Annotationsdata extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Annotationdata';
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
    public $totalItems;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Annotationdata) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Annotationdata', __METHOD__);
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

    /**
     * @return mixed
     */
    public function getNextPageToken()
    {
        return $this->nextPageToken;
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
}

/**
 * Class Google_BooksAnnotationsRange
 */
class Google_BooksAnnotationsRange extends Google_Model
{
    /**
     * @var
     */
    public $endOffset;
    /**
     * @var
     */
    public $endPosition;
    /**
     * @var
     */
    public $startOffset;
    /**
     * @var
     */
    public $startPosition;

    /**
     * @param $endOffset
     */
    public function setEndOffset($endOffset)
    {
        $this->endOffset = $endOffset;
    }

    /**
     * @return mixed
     */
    public function getEndOffset()
    {
        return $this->endOffset;
    }

    /**
     * @param $endPosition
     */
    public function setEndPosition($endPosition)
    {
        $this->endPosition = $endPosition;
    }

    /**
     * @return mixed
     */
    public function getEndPosition()
    {
        return $this->endPosition;
    }

    /**
     * @param $startOffset
     */
    public function setStartOffset($startOffset)
    {
        $this->startOffset = $startOffset;
    }

    /**
     * @return mixed
     */
    public function getStartOffset()
    {
        return $this->startOffset;
    }

    /**
     * @param $startPosition
     */
    public function setStartPosition($startPosition)
    {
        $this->startPosition = $startPosition;
    }

    /**
     * @return mixed
     */
    public function getStartPosition()
    {
        return $this->startPosition;
    }
}

/**
 * Class Google_BooksCloudloadingResource
 */
class Google_BooksCloudloadingResource extends Google_Model
{
    /**
     * @var
     */
    public $author;
    /**
     * @var
     */
    public $processingState;
    /**
     * @var
     */
    public $title;
    /**
     * @var
     */
    public $volumeId;

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
     * @param $processingState
     */
    public function setProcessingState($processingState)
    {
        $this->processingState = $processingState;
    }

    /**
     * @return mixed
     */
    public function getProcessingState()
    {
        return $this->processingState;
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
     * @param $volumeId
     */
    public function setVolumeId($volumeId)
    {
        $this->volumeId = $volumeId;
    }

    /**
     * @return mixed
     */
    public function getVolumeId()
    {
        return $this->volumeId;
    }
}

/**
 * Class Google_BooksLayerDictData
 */
class Google_BooksLayerDictData extends Google_Model
{
    /**
     * @var string
     */
    protected $__commonType = 'Google_BooksLayerDictDataCommon';
    /**
     * @var string
     */
    protected $__commonDataType = '';
    /**
     * @var
     */
    public $common;
    /**
     * @var string
     */
    protected $__dictType = 'Google_BooksLayerDictDataDict';
    /**
     * @var string
     */
    protected $__dictDataType = '';
    /**
     * @var
     */
    public $dict;

    /**
     * @param Google_BooksLayerDictDataCommon $common
     */
    public function setCommon(Google_BooksLayerDictDataCommon $common)
    {
        $this->common = $common;
    }

    /**
     * @return mixed
     */
    public function getCommon()
    {
        return $this->common;
    }

    /**
     * @param Google_BooksLayerDictDataDict $dict
     */
    public function setDict(Google_BooksLayerDictDataDict $dict)
    {
        $this->dict = $dict;
    }

    /**
     * @return mixed
     */
    public function getDict()
    {
        return $this->dict;
    }
}

/**
 * Class Google_BooksLayerDictDataCommon
 */
class Google_BooksLayerDictDataCommon extends Google_Model
{
    /**
     * @var
     */
    public $title;

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
}

/**
 * Class Google_BooksLayerDictDataDict
 */
class Google_BooksLayerDictDataDict extends Google_Model
{
    /**
     * @var string
     */
    protected $__sourceType = 'Google_BooksLayerDictDataDictSource';
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
    protected $__wordsType = 'Google_BooksLayerDictDataDictWords';
    /**
     * @var string
     */
    protected $__wordsDataType = 'array';
    /**
     * @var
     */
    public $words;

    /**
     * @param Google_BooksLayerDictDataDictSource $source
     */
    public function setSource(Google_BooksLayerDictDataDictSource $source)
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
     * @param $words
     * @throws Google_Exception
     */
    public function setWords(/* array(Google_BooksLayerDictDataDictWords) */
        $words)
    {
        $this->assertIsArray($words, 'Google_BooksLayerDictDataDictWords', __METHOD__);
        $this->words = $words;
    }

    /**
     * @return mixed
     */
    public function getWords()
    {
        return $this->words;
    }
}

/**
 * Class Google_BooksLayerDictDataDictSource
 */
class Google_BooksLayerDictDataDictSource extends Google_Model
{
    /**
     * @var
     */
    public $attribution;
    /**
     * @var
     */
    public $url;

    /**
     * @param $attribution
     */
    public function setAttribution($attribution)
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
     * @param $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }
}

/**
 * Class Google_BooksLayerDictDataDictWords
 */
class Google_BooksLayerDictDataDictWords extends Google_Model
{
    /**
     * @var string
     */
    protected $__derivativesType = 'Google_BooksLayerDictDataDictWordsDerivatives';
    /**
     * @var string
     */
    protected $__derivativesDataType = 'array';
    /**
     * @var
     */
    public $derivatives;
    /**
     * @var string
     */
    protected $__examplesType = 'Google_BooksLayerDictDataDictWordsExamples';
    /**
     * @var string
     */
    protected $__examplesDataType = 'array';
    /**
     * @var
     */
    public $examples;
    /**
     * @var string
     */
    protected $__sensesType = 'Google_BooksLayerDictDataDictWordsSenses';
    /**
     * @var string
     */
    protected $__sensesDataType = 'array';
    /**
     * @var
     */
    public $senses;
    /**
     * @var string
     */
    protected $__sourceType = 'Google_BooksLayerDictDataDictWordsSource';
    /**
     * @var string
     */
    protected $__sourceDataType = '';
    /**
     * @var
     */
    public $source;

    /**
     * @param $derivatives
     * @throws Google_Exception
     */
    public function setDerivatives(/* array(Google_BooksLayerDictDataDictWordsDerivatives) */
        $derivatives)
    {
        $this->assertIsArray($derivatives, 'Google_BooksLayerDictDataDictWordsDerivatives', __METHOD__);
        $this->derivatives = $derivatives;
    }

    /**
     * @return mixed
     */
    public function getDerivatives()
    {
        return $this->derivatives;
    }

    /**
     * @param $examples
     * @throws Google_Exception
     */
    public function setExamples(/* array(Google_BooksLayerDictDataDictWordsExamples) */
        $examples)
    {
        $this->assertIsArray($examples, 'Google_BooksLayerDictDataDictWordsExamples', __METHOD__);
        $this->examples = $examples;
    }

    /**
     * @return mixed
     */
    public function getExamples()
    {
        return $this->examples;
    }

    /**
     * @param $senses
     * @throws Google_Exception
     */
    public function setSenses(/* array(Google_BooksLayerDictDataDictWordsSenses) */
        $senses)
    {
        $this->assertIsArray($senses, 'Google_BooksLayerDictDataDictWordsSenses', __METHOD__);
        $this->senses = $senses;
    }

    /**
     * @return mixed
     */
    public function getSenses()
    {
        return $this->senses;
    }

    /**
     * @param Google_BooksLayerDictDataDictWordsSource $source
     */
    public function setSource(Google_BooksLayerDictDataDictWordsSource $source)
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
 * Class Google_BooksLayerDictDataDictWordsDerivatives
 */
class Google_BooksLayerDictDataDictWordsDerivatives extends Google_Model
{
    /**
     * @var string
     */
    protected $__sourceType = 'Google_BooksLayerDictDataDictWordsDerivativesSource';
    /**
     * @var string
     */
    protected $__sourceDataType = '';
    /**
     * @var
     */
    public $source;
    /**
     * @var
     */
    public $text;

    /**
     * @param Google_BooksLayerDictDataDictWordsDerivativesSource $source
     */
    public function setSource(Google_BooksLayerDictDataDictWordsDerivativesSource $source)
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
 * Class Google_BooksLayerDictDataDictWordsDerivativesSource
 */
class Google_BooksLayerDictDataDictWordsDerivativesSource extends Google_Model
{
    /**
     * @var
     */
    public $attribution;
    /**
     * @var
     */
    public $url;

    /**
     * @param $attribution
     */
    public function setAttribution($attribution)
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
 * Class Google_BooksLayerDictDataDictWordsExamples
 */
class Google_BooksLayerDictDataDictWordsExamples extends Google_Model
{
    /**
     * @var string
     */
    protected $__sourceType = 'Google_BooksLayerDictDataDictWordsExamplesSource';
    /**
     * @var string
     */
    protected $__sourceDataType = '';
    /**
     * @var
     */
    public $source;
    /**
     * @var
     */
    public $text;

    /**
     * @param Google_BooksLayerDictDataDictWordsExamplesSource $source
     */
    public function setSource(Google_BooksLayerDictDataDictWordsExamplesSource $source)
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
 * Class Google_BooksLayerDictDataDictWordsExamplesSource
 */
class Google_BooksLayerDictDataDictWordsExamplesSource extends Google_Model
{
    /**
     * @var
     */
    public $attribution;
    /**
     * @var
     */
    public $url;

    /**
     * @param $attribution
     */
    public function setAttribution($attribution)
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
 * Class Google_BooksLayerDictDataDictWordsSenses
 */
class Google_BooksLayerDictDataDictWordsSenses extends Google_Model
{
    /**
     * @var string
     */
    protected $__conjugationsType = 'Google_BooksLayerDictDataDictWordsSensesConjugations';
    /**
     * @var string
     */
    protected $__conjugationsDataType = 'array';
    /**
     * @var
     */
    public $conjugations;
    /**
     * @var string
     */
    protected $__definitionsType = 'Google_BooksLayerDictDataDictWordsSensesDefinitions';
    /**
     * @var string
     */
    protected $__definitionsDataType = 'array';
    /**
     * @var
     */
    public $definitions;
    /**
     * @var
     */
    public $partOfSpeech;
    /**
     * @var
     */
    public $pronunciation;
    /**
     * @var
     */
    public $pronunciationUrl;
    /**
     * @var string
     */
    protected $__sourceType = 'Google_BooksLayerDictDataDictWordsSensesSource';
    /**
     * @var string
     */
    protected $__sourceDataType = '';
    /**
     * @var
     */
    public $source;
    /**
     * @var
     */
    public $syllabification;
    /**
     * @var string
     */
    protected $__synonymsType = 'Google_BooksLayerDictDataDictWordsSensesSynonyms';
    /**
     * @var string
     */
    protected $__synonymsDataType = 'array';
    /**
     * @var
     */
    public $synonyms;

    /**
     * @param $conjugations
     * @throws Google_Exception
     */
    public function setConjugations(/* array(Google_BooksLayerDictDataDictWordsSensesConjugations) */
        $conjugations)
    {
        $this->assertIsArray($conjugations, 'Google_BooksLayerDictDataDictWordsSensesConjugations', __METHOD__);
        $this->conjugations = $conjugations;
    }

    /**
     * @return mixed
     */
    public function getConjugations()
    {
        return $this->conjugations;
    }

    /**
     * @param $definitions
     * @throws Google_Exception
     */
    public function setDefinitions(/* array(Google_BooksLayerDictDataDictWordsSensesDefinitions) */
        $definitions)
    {
        $this->assertIsArray($definitions, 'Google_BooksLayerDictDataDictWordsSensesDefinitions', __METHOD__);
        $this->definitions = $definitions;
    }

    /**
     * @return mixed
     */
    public function getDefinitions()
    {
        return $this->definitions;
    }

    /**
     * @param $partOfSpeech
     */
    public function setPartOfSpeech($partOfSpeech)
    {
        $this->partOfSpeech = $partOfSpeech;
    }

    /**
     * @return mixed
     */
    public function getPartOfSpeech()
    {
        return $this->partOfSpeech;
    }

    /**
     * @param $pronunciation
     */
    public function setPronunciation($pronunciation)
    {
        $this->pronunciation = $pronunciation;
    }

    /**
     * @return mixed
     */
    public function getPronunciation()
    {
        return $this->pronunciation;
    }

    /**
     * @param $pronunciationUrl
     */
    public function setPronunciationUrl($pronunciationUrl)
    {
        $this->pronunciationUrl = $pronunciationUrl;
    }

    /**
     * @return mixed
     */
    public function getPronunciationUrl()
    {
        return $this->pronunciationUrl;
    }

    /**
     * @param Google_BooksLayerDictDataDictWordsSensesSource $source
     */
    public function setSource(Google_BooksLayerDictDataDictWordsSensesSource $source)
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
     * @param $syllabification
     */
    public function setSyllabification($syllabification)
    {
        $this->syllabification = $syllabification;
    }

    /**
     * @return mixed
     */
    public function getSyllabification()
    {
        return $this->syllabification;
    }

    /**
     * @param $synonyms
     * @throws Google_Exception
     */
    public function setSynonyms(/* array(Google_BooksLayerDictDataDictWordsSensesSynonyms) */
        $synonyms)
    {
        $this->assertIsArray($synonyms, 'Google_BooksLayerDictDataDictWordsSensesSynonyms', __METHOD__);
        $this->synonyms = $synonyms;
    }

    /**
     * @return mixed
     */
    public function getSynonyms()
    {
        return $this->synonyms;
    }
}

/**
 * Class Google_BooksLayerDictDataDictWordsSensesConjugations
 */
class Google_BooksLayerDictDataDictWordsSensesConjugations extends Google_Model
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

    /**
     * @return mixed
     */
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
 * Class Google_BooksLayerDictDataDictWordsSensesDefinitions
 */
class Google_BooksLayerDictDataDictWordsSensesDefinitions extends Google_Model
{
    /**
     * @var
     */
    public $definition;
    /**
     * @var string
     */
    protected $__examplesType = 'Google_BooksLayerDictDataDictWordsSensesDefinitionsExamples';
    /**
     * @var string
     */
    protected $__examplesDataType = 'array';
    /**
     * @var
     */
    public $examples;

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
     * @param $examples
     * @throws Google_Exception
     */
    public function setExamples(/* array(Google_BooksLayerDictDataDictWordsSensesDefinitionsExamples) */
        $examples)
    {
        $this->assertIsArray($examples, 'Google_BooksLayerDictDataDictWordsSensesDefinitionsExamples', __METHOD__);
        $this->examples = $examples;
    }

    /**
     * @return mixed
     */
    public function getExamples()
    {
        return $this->examples;
    }
}

/**
 * Class Google_BooksLayerDictDataDictWordsSensesDefinitionsExamples
 */
class Google_BooksLayerDictDataDictWordsSensesDefinitionsExamples extends Google_Model
{
    /**
     * @var string
     */
    protected $__sourceType = 'Google_BooksLayerDictDataDictWordsSensesDefinitionsExamplesSource';
    /**
     * @var string
     */
    protected $__sourceDataType = '';
    /**
     * @var
     */
    public $source;
    /**
     * @var
     */
    public $text;

    /**
     * @param Google_BooksLayerDictDataDictWordsSensesDefinitionsExamplesSource $source
     */
    public function setSource(Google_BooksLayerDictDataDictWordsSensesDefinitionsExamplesSource $source)
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
 * Class Google_BooksLayerDictDataDictWordsSensesDefinitionsExamplesSource
 */
class Google_BooksLayerDictDataDictWordsSensesDefinitionsExamplesSource extends Google_Model
{
    /**
     * @var
     */
    public $attribution;
    /**
     * @var
     */
    public $url;

    /**
     * @param $attribution
     */
    public function setAttribution($attribution)
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
 * Class Google_BooksLayerDictDataDictWordsSensesSource
 */
class Google_BooksLayerDictDataDictWordsSensesSource extends Google_Model
{
    /**
     * @var
     */
    public $attribution;
    /**
     * @var
     */
    public $url;

    /**
     * @param $attribution
     */
    public function setAttribution($attribution)
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
 * Class Google_BooksLayerDictDataDictWordsSensesSynonyms
 */
class Google_BooksLayerDictDataDictWordsSensesSynonyms extends Google_Model
{
    /**
     * @var string
     */
    protected $__sourceType = 'Google_BooksLayerDictDataDictWordsSensesSynonymsSource';
    /**
     * @var string
     */
    protected $__sourceDataType = '';
    /**
     * @var
     */
    public $source;
    /**
     * @var
     */
    public $text;

    /**
     * @param Google_BooksLayerDictDataDictWordsSensesSynonymsSource $source
     */
    public function setSource(Google_BooksLayerDictDataDictWordsSensesSynonymsSource $source)
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
 * Class Google_BooksLayerDictDataDictWordsSensesSynonymsSource
 */
class Google_BooksLayerDictDataDictWordsSensesSynonymsSource extends Google_Model
{
    /**
     * @var
     */
    public $attribution;
    /**
     * @var
     */
    public $url;

    /**
     * @param $attribution
     */
    public function setAttribution($attribution)
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
 * Class Google_BooksLayerDictDataDictWordsSource
 */
class Google_BooksLayerDictDataDictWordsSource extends Google_Model
{
    /**
     * @var
     */
    public $attribution;
    /**
     * @var
     */
    public $url;

    /**
     * @param $attribution
     */
    public function setAttribution($attribution)
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
 * Class Google_BooksLayerGeoData
 */
class Google_BooksLayerGeoData extends Google_Model
{
    /**
     * @var string
     */
    protected $__commonType = 'Google_BooksLayerGeoDataCommon';
    /**
     * @var string
     */
    protected $__commonDataType = '';
    /**
     * @var
     */
    public $common;
    /**
     * @var string
     */
    protected $__geoType = 'Google_BooksLayerGeoDataGeo';
    /**
     * @var string
     */
    protected $__geoDataType = '';
    /**
     * @var
     */
    public $geo;

    /**
     * @param Google_BooksLayerGeoDataCommon $common
     */
    public function setCommon(Google_BooksLayerGeoDataCommon $common)
    {
        $this->common = $common;
    }

    /**
     * @return mixed
     */
    public function getCommon()
    {
        return $this->common;
    }

    /**
     * @param Google_BooksLayerGeoDataGeo $geo
     */
    public function setGeo(Google_BooksLayerGeoDataGeo $geo)
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
}

/**
 * Class Google_BooksLayerGeoDataCommon
 */
class Google_BooksLayerGeoDataCommon extends Google_Model
{
    /**
     * @var
     */
    public $lang;
    /**
     * @var
     */
    public $previewImageUrl;
    /**
     * @var
     */
    public $snippet;
    /**
     * @var
     */
    public $snippetUrl;
    /**
     * @var
     */
    public $title;

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
     * @param $previewImageUrl
     */
    public function setPreviewImageUrl($previewImageUrl)
    {
        $this->previewImageUrl = $previewImageUrl;
    }

    /**
     * @return mixed
     */
    public function getPreviewImageUrl()
    {
        return $this->previewImageUrl;
    }

    /**
     * @param $snippet
     */
    public function setSnippet($snippet)
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
     * @param $snippetUrl
     */
    public function setSnippetUrl($snippetUrl)
    {
        $this->snippetUrl = $snippetUrl;
    }

    /**
     * @return mixed
     */
    public function getSnippetUrl()
    {
        return $this->snippetUrl;
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
}

/**
 * Class Google_BooksLayerGeoDataGeo
 */
class Google_BooksLayerGeoDataGeo extends Google_Model
{
    /**
     * @var string
     */
    protected $__boundaryType = 'Google_BooksLayerGeoDataGeoBoundary';
    /**
     * @var string
     */
    protected $__boundaryDataType = 'array';
    /**
     * @var
     */
    public $boundary;
    /**
     * @var
     */
    public $cachePolicy;
    /**
     * @var
     */
    public $countryCode;
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
    public $mapType;
    /**
     * @var string
     */
    protected $__viewportType = 'Google_BooksLayerGeoDataGeoViewport';
    /**
     * @var string
     */
    protected $__viewportDataType = '';
    /**
     * @var
     */
    public $viewport;
    /**
     * @var
     */
    public $zoom;

    /**
     * @param $boundary
     * @throws Google_Exception
     */
    public function setBoundary(/* array(Google_BooksLayerGeoDataGeoBoundary) */
        $boundary)
    {
        $this->assertIsArray($boundary, 'Google_BooksLayerGeoDataGeoBoundary', __METHOD__);
        $this->boundary = $boundary;
    }

    /**
     * @return mixed
     */
    public function getBoundary()
    {
        return $this->boundary;
    }

    /**
     * @param $cachePolicy
     */
    public function setCachePolicy($cachePolicy)
    {
        $this->cachePolicy = $cachePolicy;
    }

    /**
     * @return mixed
     */
    public function getCachePolicy()
    {
        return $this->cachePolicy;
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
     * @param $mapType
     */
    public function setMapType($mapType)
    {
        $this->mapType = $mapType;
    }

    /**
     * @return mixed
     */
    public function getMapType()
    {
        return $this->mapType;
    }

    /**
     * @param Google_BooksLayerGeoDataGeoViewport $viewport
     */
    public function setViewport(Google_BooksLayerGeoDataGeoViewport $viewport)
    {
        $this->viewport = $viewport;
    }

    /**
     * @return mixed
     */
    public function getViewport()
    {
        return $this->viewport;
    }

    /**
     * @param $zoom
     */
    public function setZoom($zoom)
    {
        $this->zoom = $zoom;
    }

    /**
     * @return mixed
     */
    public function getZoom()
    {
        return $this->zoom;
    }
}

/**
 * Class Google_BooksLayerGeoDataGeoBoundary
 */
class Google_BooksLayerGeoDataGeoBoundary extends Google_Model
{
    /**
     * @var
     */
    public $latitude;
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
 * Class Google_BooksLayerGeoDataGeoViewport
 */
class Google_BooksLayerGeoDataGeoViewport extends Google_Model
{
    /**
     * @var string
     */
    protected $__hiType = 'Google_BooksLayerGeoDataGeoViewportHi';
    /**
     * @var string
     */
    protected $__hiDataType = '';
    /**
     * @var
     */
    public $hi;
    /**
     * @var string
     */
    protected $__loType = 'Google_BooksLayerGeoDataGeoViewportLo';
    /**
     * @var string
     */
    protected $__loDataType = '';
    /**
     * @var
     */
    public $lo;

    /**
     * @param Google_BooksLayerGeoDataGeoViewportHi $hi
     */
    public function setHi(Google_BooksLayerGeoDataGeoViewportHi $hi)
    {
        $this->hi = $hi;
    }

    /**
     * @return mixed
     */
    public function getHi()
    {
        return $this->hi;
    }

    /**
     * @param Google_BooksLayerGeoDataGeoViewportLo $lo
     */
    public function setLo(Google_BooksLayerGeoDataGeoViewportLo $lo)
    {
        $this->lo = $lo;
    }

    /**
     * @return mixed
     */
    public function getLo()
    {
        return $this->lo;
    }
}

/**
 * Class Google_BooksLayerGeoDataGeoViewportHi
 */
class Google_BooksLayerGeoDataGeoViewportHi extends Google_Model
{
    /**
     * @var
     */
    public $latitude;
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
 * Class Google_BooksLayerGeoDataGeoViewportLo
 */
class Google_BooksLayerGeoDataGeoViewportLo extends Google_Model
{
    /**
     * @var
     */
    public $latitude;
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
 * Class Google_Bookshelf
 */
class Google_Bookshelf extends Google_Model
{
    /**
     * @var
     */
    public $access;
    /**
     * @var
     */
    public $created;
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
    public $selfLink;
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
    public $volumeCount;
    /**
     * @var
     */
    public $volumesLastUpdated;

    /**
     * @param $access
     */
    public function setAccess($access)
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

    /**
     * @return mixed
     */
    public function getSelfLink()
    {
        return $this->selfLink;
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
     * @param $volumeCount
     */
    public function setVolumeCount($volumeCount)
    {
        $this->volumeCount = $volumeCount;
    }

    /**
     * @return mixed
     */
    public function getVolumeCount()
    {
        return $this->volumeCount;
    }

    /**
     * @param $volumesLastUpdated
     */
    public function setVolumesLastUpdated($volumesLastUpdated)
    {
        $this->volumesLastUpdated = $volumesLastUpdated;
    }

    /**
     * @return mixed
     */
    public function getVolumesLastUpdated()
    {
        return $this->volumesLastUpdated;
    }
}

/**
 * Class Google_Bookshelves
 */
class Google_Bookshelves extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Bookshelf';
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
    public function setItems(/* array(Google_Bookshelf) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Bookshelf', __METHOD__);
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
 * Class Google_ConcurrentAccessRestriction
 */
class Google_ConcurrentAccessRestriction extends Google_Model
{
    /**
     * @var
     */
    public $deviceAllowed;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $maxConcurrentDevices;
    /**
     * @var
     */
    public $message;
    /**
     * @var
     */
    public $nonce;
    /**
     * @var
     */
    public $reasonCode;
    /**
     * @var
     */
    public $restricted;
    /**
     * @var
     */
    public $signature;
    /**
     * @var
     */
    public $source;
    /**
     * @var
     */
    public $timeWindowSeconds;
    /**
     * @var
     */
    public $volumeId;

    /**
     * @param $deviceAllowed
     */
    public function setDeviceAllowed($deviceAllowed)
    {
        $this->deviceAllowed = $deviceAllowed;
    }

    /**
     * @return mixed
     */
    public function getDeviceAllowed()
    {
        return $this->deviceAllowed;
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
     * @param $maxConcurrentDevices
     */
    public function setMaxConcurrentDevices($maxConcurrentDevices)
    {
        $this->maxConcurrentDevices = $maxConcurrentDevices;
    }

    /**
     * @return mixed
     */
    public function getMaxConcurrentDevices()
    {
        return $this->maxConcurrentDevices;
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

    /**
     * @param $nonce
     */
    public function setNonce($nonce)
    {
        $this->nonce = $nonce;
    }

    /**
     * @return mixed
     */
    public function getNonce()
    {
        return $this->nonce;
    }

    /**
     * @param $reasonCode
     */
    public function setReasonCode($reasonCode)
    {
        $this->reasonCode = $reasonCode;
    }

    /**
     * @return mixed
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
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
     * @param $signature
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
    }

    /**
     * @return mixed
     */
    public function getSignature()
    {
        return $this->signature;
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
     * @param $timeWindowSeconds
     */
    public function setTimeWindowSeconds($timeWindowSeconds)
    {
        $this->timeWindowSeconds = $timeWindowSeconds;
    }

    /**
     * @return mixed
     */
    public function getTimeWindowSeconds()
    {
        return $this->timeWindowSeconds;
    }

    /**
     * @param $volumeId
     */
    public function setVolumeId($volumeId)
    {
        $this->volumeId = $volumeId;
    }

    /**
     * @return mixed
     */
    public function getVolumeId()
    {
        return $this->volumeId;
    }
}

/**
 * Class Google_DownloadAccessRestriction
 */
class Google_DownloadAccessRestriction extends Google_Model
{
    /**
     * @var
     */
    public $deviceAllowed;
    /**
     * @var
     */
    public $downloadsAcquired;
    /**
     * @var
     */
    public $justAcquired;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $maxDownloadDevices;
    /**
     * @var
     */
    public $message;
    /**
     * @var
     */
    public $nonce;
    /**
     * @var
     */
    public $reasonCode;
    /**
     * @var
     */
    public $restricted;
    /**
     * @var
     */
    public $signature;
    /**
     * @var
     */
    public $source;
    /**
     * @var
     */
    public $volumeId;

    /**
     * @param $deviceAllowed
     */
    public function setDeviceAllowed($deviceAllowed)
    {
        $this->deviceAllowed = $deviceAllowed;
    }

    /**
     * @return mixed
     */
    public function getDeviceAllowed()
    {
        return $this->deviceAllowed;
    }

    /**
     * @param $downloadsAcquired
     */
    public function setDownloadsAcquired($downloadsAcquired)
    {
        $this->downloadsAcquired = $downloadsAcquired;
    }

    /**
     * @return mixed
     */
    public function getDownloadsAcquired()
    {
        return $this->downloadsAcquired;
    }

    /**
     * @param $justAcquired
     */
    public function setJustAcquired($justAcquired)
    {
        $this->justAcquired = $justAcquired;
    }

    /**
     * @return mixed
     */
    public function getJustAcquired()
    {
        return $this->justAcquired;
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
     * @param $maxDownloadDevices
     */
    public function setMaxDownloadDevices($maxDownloadDevices)
    {
        $this->maxDownloadDevices = $maxDownloadDevices;
    }

    /**
     * @return mixed
     */
    public function getMaxDownloadDevices()
    {
        return $this->maxDownloadDevices;
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

    /**
     * @param $nonce
     */
    public function setNonce($nonce)
    {
        $this->nonce = $nonce;
    }

    /**
     * @return mixed
     */
    public function getNonce()
    {
        return $this->nonce;
    }

    /**
     * @param $reasonCode
     */
    public function setReasonCode($reasonCode)
    {
        $this->reasonCode = $reasonCode;
    }

    /**
     * @return mixed
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
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
     * @param $signature
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
    }

    /**
     * @return mixed
     */
    public function getSignature()
    {
        return $this->signature;
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
     * @param $volumeId
     */
    public function setVolumeId($volumeId)
    {
        $this->volumeId = $volumeId;
    }

    /**
     * @return mixed
     */
    public function getVolumeId()
    {
        return $this->volumeId;
    }
}

/**
 * Class Google_DownloadAccesses
 */
class Google_DownloadAccesses extends Google_Model
{
    /**
     * @var string
     */
    protected $__downloadAccessListType = 'Google_DownloadAccessRestriction';
    /**
     * @var string
     */
    protected $__downloadAccessListDataType = 'array';
    /**
     * @var
     */
    public $downloadAccessList;
    /**
     * @var
     */
    public $kind;

    /**
     * @param $downloadAccessList
     * @throws Google_Exception
     */
    public function setDownloadAccessList(/* array(Google_DownloadAccessRestriction) */
        $downloadAccessList)
    {
        $this->assertIsArray($downloadAccessList, 'Google_DownloadAccessRestriction', __METHOD__);
        $this->downloadAccessList = $downloadAccessList;
    }

    /**
     * @return mixed
     */
    public function getDownloadAccessList()
    {
        return $this->downloadAccessList;
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
 * Class Google_Layersummaries
 */
class Google_Layersummaries extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Layersummary';
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
    public $totalItems;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Layersummary) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Layersummary', __METHOD__);
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
}

/**
 * Class Google_Layersummary
 */
class Google_Layersummary extends Google_Model
{
    /**
     * @var
     */
    public $annotationCount;
    /**
     * @var
     */
    public $annotationTypes;
    /**
     * @var
     */
    public $annotationsDataLink;
    /**
     * @var
     */
    public $annotationsLink;
    /**
     * @var
     */
    public $contentVersion;
    /**
     * @var
     */
    public $dataCount;
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
    public $layerId;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $updated;
    /**
     * @var
     */
    public $volumeAnnotationsVersion;
    /**
     * @var
     */
    public $volumeId;

    /**
     * @param $annotationCount
     */
    public function setAnnotationCount($annotationCount)
    {
        $this->annotationCount = $annotationCount;
    }

    /**
     * @return mixed
     */
    public function getAnnotationCount()
    {
        return $this->annotationCount;
    }

    /**
     * @param $annotationTypes
     * @throws Google_Exception
     */
    public function setAnnotationTypes(/* array(Google_string) */
        $annotationTypes)
    {
        $this->assertIsArray($annotationTypes, 'Google_string', __METHOD__);
        $this->annotationTypes = $annotationTypes;
    }

    /**
     * @return mixed
     */
    public function getAnnotationTypes()
    {
        return $this->annotationTypes;
    }

    /**
     * @param $annotationsDataLink
     */
    public function setAnnotationsDataLink($annotationsDataLink)
    {
        $this->annotationsDataLink = $annotationsDataLink;
    }

    /**
     * @return mixed
     */
    public function getAnnotationsDataLink()
    {
        return $this->annotationsDataLink;
    }

    /**
     * @param $annotationsLink
     */
    public function setAnnotationsLink($annotationsLink)
    {
        $this->annotationsLink = $annotationsLink;
    }

    /**
     * @return mixed
     */
    public function getAnnotationsLink()
    {
        return $this->annotationsLink;
    }

    /**
     * @param $contentVersion
     */
    public function setContentVersion($contentVersion)
    {
        $this->contentVersion = $contentVersion;
    }

    /**
     * @return mixed
     */
    public function getContentVersion()
    {
        return $this->contentVersion;
    }

    /**
     * @param $dataCount
     */
    public function setDataCount($dataCount)
    {
        $this->dataCount = $dataCount;
    }

    /**
     * @return mixed
     */
    public function getDataCount()
    {
        return $this->dataCount;
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
     * @param $layerId
     */
    public function setLayerId($layerId)
    {
        $this->layerId = $layerId;
    }

    /**
     * @return mixed
     */
    public function getLayerId()
    {
        return $this->layerId;
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
     * @param $volumeAnnotationsVersion
     */
    public function setVolumeAnnotationsVersion($volumeAnnotationsVersion)
    {
        $this->volumeAnnotationsVersion = $volumeAnnotationsVersion;
    }

    /**
     * @return mixed
     */
    public function getVolumeAnnotationsVersion()
    {
        return $this->volumeAnnotationsVersion;
    }

    /**
     * @param $volumeId
     */
    public function setVolumeId($volumeId)
    {
        $this->volumeId = $volumeId;
    }

    /**
     * @return mixed
     */
    public function getVolumeId()
    {
        return $this->volumeId;
    }
}

/**
 * Class Google_ReadingPosition
 */
class Google_ReadingPosition extends Google_Model
{
    /**
     * @var
     */
    public $epubCfiPosition;
    /**
     * @var
     */
    public $gbImagePosition;
    /**
     * @var
     */
    public $gbTextPosition;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $pdfPosition;
    /**
     * @var
     */
    public $updated;
    /**
     * @var
     */
    public $volumeId;

    /**
     * @param $epubCfiPosition
     */
    public function setEpubCfiPosition($epubCfiPosition)
    {
        $this->epubCfiPosition = $epubCfiPosition;
    }

    /**
     * @return mixed
     */
    public function getEpubCfiPosition()
    {
        return $this->epubCfiPosition;
    }

    /**
     * @param $gbImagePosition
     */
    public function setGbImagePosition($gbImagePosition)
    {
        $this->gbImagePosition = $gbImagePosition;
    }

    /**
     * @return mixed
     */
    public function getGbImagePosition()
    {
        return $this->gbImagePosition;
    }

    /**
     * @param $gbTextPosition
     */
    public function setGbTextPosition($gbTextPosition)
    {
        $this->gbTextPosition = $gbTextPosition;
    }

    /**
     * @return mixed
     */
    public function getGbTextPosition()
    {
        return $this->gbTextPosition;
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
     * @param $pdfPosition
     */
    public function setPdfPosition($pdfPosition)
    {
        $this->pdfPosition = $pdfPosition;
    }

    /**
     * @return mixed
     */
    public function getPdfPosition()
    {
        return $this->pdfPosition;
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
     * @param $volumeId
     */
    public function setVolumeId($volumeId)
    {
        $this->volumeId = $volumeId;
    }

    /**
     * @return mixed
     */
    public function getVolumeId()
    {
        return $this->volumeId;
    }
}

/**
 * Class Google_RequestAccess
 */
class Google_RequestAccess extends Google_Model
{
    /**
     * @var string
     */
    protected $__concurrentAccessType = 'Google_ConcurrentAccessRestriction';
    /**
     * @var string
     */
    protected $__concurrentAccessDataType = '';
    /**
     * @var
     */
    public $concurrentAccess;
    /**
     * @var string
     */
    protected $__downloadAccessType = 'Google_DownloadAccessRestriction';
    /**
     * @var string
     */
    protected $__downloadAccessDataType = '';
    /**
     * @var
     */
    public $downloadAccess;
    /**
     * @var
     */
    public $kind;

    /**
     * @param Google_ConcurrentAccessRestriction $concurrentAccess
     */
    public function setConcurrentAccess(Google_ConcurrentAccessRestriction $concurrentAccess)
    {
        $this->concurrentAccess = $concurrentAccess;
    }

    /**
     * @return mixed
     */
    public function getConcurrentAccess()
    {
        return $this->concurrentAccess;
    }

    /**
     * @param Google_DownloadAccessRestriction $downloadAccess
     */
    public function setDownloadAccess(Google_DownloadAccessRestriction $downloadAccess)
    {
        $this->downloadAccess = $downloadAccess;
    }

    /**
     * @return mixed
     */
    public function getDownloadAccess()
    {
        return $this->downloadAccess;
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
 * Class Google_Review
 */
class Google_Review extends Google_Model
{
    /**
     * @var string
     */
    protected $__authorType = 'Google_ReviewAuthor';
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
    public $date;
    /**
     * @var
     */
    public $fullTextUrl;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $rating;
    /**
     * @var string
     */
    protected $__sourceType = 'Google_ReviewSource';
    /**
     * @var string
     */
    protected $__sourceDataType = '';
    /**
     * @var
     */
    public $source;
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
    public $volumeId;

    /**
     * @param Google_ReviewAuthor $author
     */
    public function setAuthor(Google_ReviewAuthor $author)
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
     * @param $fullTextUrl
     */
    public function setFullTextUrl($fullTextUrl)
    {
        $this->fullTextUrl = $fullTextUrl;
    }

    /**
     * @return mixed
     */
    public function getFullTextUrl()
    {
        return $this->fullTextUrl;
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
     * @param Google_ReviewSource $source
     */
    public function setSource(Google_ReviewSource $source)
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
     * @param $volumeId
     */
    public function setVolumeId($volumeId)
    {
        $this->volumeId = $volumeId;
    }

    /**
     * @return mixed
     */
    public function getVolumeId()
    {
        return $this->volumeId;
    }
}

/**
 * Class Google_ReviewAuthor
 */
class Google_ReviewAuthor extends Google_Model
{
    /**
     * @var
     */
    public $displayName;

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
}

/**
 * Class Google_ReviewSource
 */
class Google_ReviewSource extends Google_Model
{
    /**
     * @var
     */
    public $description;
    /**
     * @var
     */
    public $extraDescription;
    /**
     * @var
     */
    public $url;

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
     * @param $extraDescription
     */
    public function setExtraDescription($extraDescription)
    {
        $this->extraDescription = $extraDescription;
    }

    /**
     * @return mixed
     */
    public function getExtraDescription()
    {
        return $this->extraDescription;
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
 * Class Google_Volume
 */
class Google_Volume extends Google_Model
{
    /**
     * @var string
     */
    protected $__accessInfoType = 'Google_VolumeAccessInfo';
    /**
     * @var string
     */
    protected $__accessInfoDataType = '';
    /**
     * @var
     */
    public $accessInfo;
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
    protected $__layerInfoType = 'Google_VolumeLayerInfo';
    /**
     * @var string
     */
    protected $__layerInfoDataType = '';
    /**
     * @var
     */
    public $layerInfo;
    /**
     * @var string
     */
    protected $__recommendedInfoType = 'Google_VolumeRecommendedInfo';
    /**
     * @var string
     */
    protected $__recommendedInfoDataType = '';
    /**
     * @var
     */
    public $recommendedInfo;
    /**
     * @var string
     */
    protected $__saleInfoType = 'Google_VolumeSaleInfo';
    /**
     * @var string
     */
    protected $__saleInfoDataType = '';
    /**
     * @var
     */
    public $saleInfo;
    /**
     * @var string
     */
    protected $__searchInfoType = 'Google_VolumeSearchInfo';
    /**
     * @var string
     */
    protected $__searchInfoDataType = '';
    /**
     * @var
     */
    public $searchInfo;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var string
     */
    protected $__userInfoType = 'Google_VolumeUserInfo';
    /**
     * @var string
     */
    protected $__userInfoDataType = '';
    /**
     * @var
     */
    public $userInfo;
    /**
     * @var string
     */
    protected $__volumeInfoType = 'Google_VolumeVolumeInfo';
    /**
     * @var string
     */
    protected $__volumeInfoDataType = '';
    /**
     * @var
     */
    public $volumeInfo;

    /**
     * @param Google_VolumeAccessInfo $accessInfo
     */
    public function setAccessInfo(Google_VolumeAccessInfo $accessInfo)
    {
        $this->accessInfo = $accessInfo;
    }

    /**
     * @return mixed
     */
    public function getAccessInfo()
    {
        return $this->accessInfo;
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
     * @param Google_VolumeLayerInfo $layerInfo
     */
    public function setLayerInfo(Google_VolumeLayerInfo $layerInfo)
    {
        $this->layerInfo = $layerInfo;
    }

    /**
     * @return mixed
     */
    public function getLayerInfo()
    {
        return $this->layerInfo;
    }

    /**
     * @param Google_VolumeRecommendedInfo $recommendedInfo
     */
    public function setRecommendedInfo(Google_VolumeRecommendedInfo $recommendedInfo)
    {
        $this->recommendedInfo = $recommendedInfo;
    }

    /**
     * @return mixed
     */
    public function getRecommendedInfo()
    {
        return $this->recommendedInfo;
    }

    /**
     * @param Google_VolumeSaleInfo $saleInfo
     */
    public function setSaleInfo(Google_VolumeSaleInfo $saleInfo)
    {
        $this->saleInfo = $saleInfo;
    }

    /**
     * @return mixed
     */
    public function getSaleInfo()
    {
        return $this->saleInfo;
    }

    /**
     * @param Google_VolumeSearchInfo $searchInfo
     */
    public function setSearchInfo(Google_VolumeSearchInfo $searchInfo)
    {
        $this->searchInfo = $searchInfo;
    }

    /**
     * @return mixed
     */
    public function getSearchInfo()
    {
        return $this->searchInfo;
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
     * @param Google_VolumeUserInfo $userInfo
     */
    public function setUserInfo(Google_VolumeUserInfo $userInfo)
    {
        $this->userInfo = $userInfo;
    }

    /**
     * @return mixed
     */
    public function getUserInfo()
    {
        return $this->userInfo;
    }

    /**
     * @param Google_VolumeVolumeInfo $volumeInfo
     */
    public function setVolumeInfo(Google_VolumeVolumeInfo $volumeInfo)
    {
        $this->volumeInfo = $volumeInfo;
    }

    /**
     * @return mixed
     */
    public function getVolumeInfo()
    {
        return $this->volumeInfo;
    }
}

/**
 * Class Google_VolumeAccessInfo
 */
class Google_VolumeAccessInfo extends Google_Model
{
    /**
     * @var
     */
    public $accessViewStatus;
    /**
     * @var
     */
    public $country;
    /**
     * @var string
     */
    protected $__downloadAccessType = 'Google_DownloadAccessRestriction';
    /**
     * @var string
     */
    protected $__downloadAccessDataType = '';
    /**
     * @var
     */
    public $downloadAccess;
    /**
     * @var
     */
    public $embeddable;
    /**
     * @var string
     */
    protected $__epubType = 'Google_VolumeAccessInfoEpub';
    /**
     * @var string
     */
    protected $__epubDataType = '';
    /**
     * @var
     */
    public $epub;
    /**
     * @var string
     */
    protected $__pdfType = 'Google_VolumeAccessInfoPdf';
    /**
     * @var string
     */
    protected $__pdfDataType = '';
    /**
     * @var
     */
    public $pdf;
    /**
     * @var
     */
    public $publicDomain;
    /**
     * @var
     */
    public $textToSpeechPermission;
    /**
     * @var
     */
    public $viewOrderUrl;
    /**
     * @var
     */
    public $viewability;
    /**
     * @var
     */
    public $webReaderLink;

    /**
     * @param $accessViewStatus
     */
    public function setAccessViewStatus($accessViewStatus)
    {
        $this->accessViewStatus = $accessViewStatus;
    }

    /**
     * @return mixed
     */
    public function getAccessViewStatus()
    {
        return $this->accessViewStatus;
    }

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
     * @param Google_DownloadAccessRestriction $downloadAccess
     */
    public function setDownloadAccess(Google_DownloadAccessRestriction $downloadAccess)
    {
        $this->downloadAccess = $downloadAccess;
    }

    /**
     * @return mixed
     */
    public function getDownloadAccess()
    {
        return $this->downloadAccess;
    }

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
     * @param Google_VolumeAccessInfoEpub $epub
     */
    public function setEpub(Google_VolumeAccessInfoEpub $epub)
    {
        $this->epub = $epub;
    }

    /**
     * @return mixed
     */
    public function getEpub()
    {
        return $this->epub;
    }

    /**
     * @param Google_VolumeAccessInfoPdf $pdf
     */
    public function setPdf(Google_VolumeAccessInfoPdf $pdf)
    {
        $this->pdf = $pdf;
    }

    /**
     * @return mixed
     */
    public function getPdf()
    {
        return $this->pdf;
    }

    /**
     * @param $publicDomain
     */
    public function setPublicDomain($publicDomain)
    {
        $this->publicDomain = $publicDomain;
    }

    /**
     * @return mixed
     */
    public function getPublicDomain()
    {
        return $this->publicDomain;
    }

    /**
     * @param $textToSpeechPermission
     */
    public function setTextToSpeechPermission($textToSpeechPermission)
    {
        $this->textToSpeechPermission = $textToSpeechPermission;
    }

    /**
     * @return mixed
     */
    public function getTextToSpeechPermission()
    {
        return $this->textToSpeechPermission;
    }

    /**
     * @param $viewOrderUrl
     */
    public function setViewOrderUrl($viewOrderUrl)
    {
        $this->viewOrderUrl = $viewOrderUrl;
    }

    /**
     * @return mixed
     */
    public function getViewOrderUrl()
    {
        return $this->viewOrderUrl;
    }

    /**
     * @param $viewability
     */
    public function setViewability($viewability)
    {
        $this->viewability = $viewability;
    }

    /**
     * @return mixed
     */
    public function getViewability()
    {
        return $this->viewability;
    }

    /**
     * @param $webReaderLink
     */
    public function setWebReaderLink($webReaderLink)
    {
        $this->webReaderLink = $webReaderLink;
    }

    /**
     * @return mixed
     */
    public function getWebReaderLink()
    {
        return $this->webReaderLink;
    }
}

/**
 * Class Google_VolumeAccessInfoEpub
 */
class Google_VolumeAccessInfoEpub extends Google_Model
{
    /**
     * @var
     */
    public $acsTokenLink;
    /**
     * @var
     */
    public $downloadLink;
    /**
     * @var
     */
    public $isAvailable;

    /**
     * @param $acsTokenLink
     */
    public function setAcsTokenLink($acsTokenLink)
    {
        $this->acsTokenLink = $acsTokenLink;
    }

    /**
     * @return mixed
     */
    public function getAcsTokenLink()
    {
        return $this->acsTokenLink;
    }

    /**
     * @param $downloadLink
     */
    public function setDownloadLink($downloadLink)
    {
        $this->downloadLink = $downloadLink;
    }

    /**
     * @return mixed
     */
    public function getDownloadLink()
    {
        return $this->downloadLink;
    }

    /**
     * @param $isAvailable
     */
    public function setIsAvailable($isAvailable)
    {
        $this->isAvailable = $isAvailable;
    }

    /**
     * @return mixed
     */
    public function getIsAvailable()
    {
        return $this->isAvailable;
    }
}

/**
 * Class Google_VolumeAccessInfoPdf
 */
class Google_VolumeAccessInfoPdf extends Google_Model
{
    /**
     * @var
     */
    public $acsTokenLink;
    /**
     * @var
     */
    public $downloadLink;
    /**
     * @var
     */
    public $isAvailable;

    /**
     * @param $acsTokenLink
     */
    public function setAcsTokenLink($acsTokenLink)
    {
        $this->acsTokenLink = $acsTokenLink;
    }

    /**
     * @return mixed
     */
    public function getAcsTokenLink()
    {
        return $this->acsTokenLink;
    }

    /**
     * @param $downloadLink
     */
    public function setDownloadLink($downloadLink)
    {
        $this->downloadLink = $downloadLink;
    }

    /**
     * @return mixed
     */
    public function getDownloadLink()
    {
        return $this->downloadLink;
    }

    /**
     * @param $isAvailable
     */
    public function setIsAvailable($isAvailable)
    {
        $this->isAvailable = $isAvailable;
    }

    /**
     * @return mixed
     */
    public function getIsAvailable()
    {
        return $this->isAvailable;
    }
}

/**
 * Class Google_VolumeLayerInfo
 */
class Google_VolumeLayerInfo extends Google_Model
{
    /**
     * @var string
     */
    protected $__layersType = 'Google_VolumeLayerInfoLayers';
    /**
     * @var string
     */
    protected $__layersDataType = 'array';
    /**
     * @var
     */
    public $layers;

    /**
     * @param $layers
     * @throws Google_Exception
     */
    public function setLayers(/* array(Google_VolumeLayerInfoLayers) */
        $layers)
    {
        $this->assertIsArray($layers, 'Google_VolumeLayerInfoLayers', __METHOD__);
        $this->layers = $layers;
    }

    /**
     * @return mixed
     */
    public function getLayers()
    {
        return $this->layers;
    }
}

/**
 * Class Google_VolumeLayerInfoLayers
 */
class Google_VolumeLayerInfoLayers extends Google_Model
{
    /**
     * @var
     */
    public $layerId;
    /**
     * @var
     */
    public $volumeAnnotationsVersion;

    /**
     * @param $layerId
     */
    public function setLayerId($layerId)
    {
        $this->layerId = $layerId;
    }

    /**
     * @return mixed
     */
    public function getLayerId()
    {
        return $this->layerId;
    }

    /**
     * @param $volumeAnnotationsVersion
     */
    public function setVolumeAnnotationsVersion($volumeAnnotationsVersion)
    {
        $this->volumeAnnotationsVersion = $volumeAnnotationsVersion;
    }

    /**
     * @return mixed
     */
    public function getVolumeAnnotationsVersion()
    {
        return $this->volumeAnnotationsVersion;
    }
}

/**
 * Class Google_VolumeRecommendedInfo
 */
class Google_VolumeRecommendedInfo extends Google_Model
{
    /**
     * @var
     */
    public $explanation;

    /**
     * @param $explanation
     */
    public function setExplanation($explanation)
    {
        $this->explanation = $explanation;
    }

    /**
     * @return mixed
     */
    public function getExplanation()
    {
        return $this->explanation;
    }
}

/**
 * Class Google_VolumeSaleInfo
 */
class Google_VolumeSaleInfo extends Google_Model
{
    /**
     * @var
     */
    public $buyLink;
    /**
     * @var
     */
    public $country;
    /**
     * @var
     */
    public $isEbook;
    /**
     * @var string
     */
    protected $__listPriceType = 'Google_VolumeSaleInfoListPrice';
    /**
     * @var string
     */
    protected $__listPriceDataType = '';
    /**
     * @var
     */
    public $listPrice;
    /**
     * @var
     */
    public $onSaleDate;
    /**
     * @var string
     */
    protected $__retailPriceType = 'Google_VolumeSaleInfoRetailPrice';
    /**
     * @var string
     */
    protected $__retailPriceDataType = '';
    /**
     * @var
     */
    public $retailPrice;
    /**
     * @var
     */
    public $saleability;

    /**
     * @param $buyLink
     */
    public function setBuyLink($buyLink)
    {
        $this->buyLink = $buyLink;
    }

    /**
     * @return mixed
     */
    public function getBuyLink()
    {
        return $this->buyLink;
    }

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
     * @param $isEbook
     */
    public function setIsEbook($isEbook)
    {
        $this->isEbook = $isEbook;
    }

    /**
     * @return mixed
     */
    public function getIsEbook()
    {
        return $this->isEbook;
    }

    /**
     * @param Google_VolumeSaleInfoListPrice $listPrice
     */
    public function setListPrice(Google_VolumeSaleInfoListPrice $listPrice)
    {
        $this->listPrice = $listPrice;
    }

    /**
     * @return mixed
     */
    public function getListPrice()
    {
        return $this->listPrice;
    }

    /**
     * @param $onSaleDate
     */
    public function setOnSaleDate($onSaleDate)
    {
        $this->onSaleDate = $onSaleDate;
    }

    /**
     * @return mixed
     */
    public function getOnSaleDate()
    {
        return $this->onSaleDate;
    }

    /**
     * @param Google_VolumeSaleInfoRetailPrice $retailPrice
     */
    public function setRetailPrice(Google_VolumeSaleInfoRetailPrice $retailPrice)
    {
        $this->retailPrice = $retailPrice;
    }

    /**
     * @return mixed
     */
    public function getRetailPrice()
    {
        return $this->retailPrice;
    }

    /**
     * @param $saleability
     */
    public function setSaleability($saleability)
    {
        $this->saleability = $saleability;
    }

    /**
     * @return mixed
     */
    public function getSaleability()
    {
        return $this->saleability;
    }
}

/**
 * Class Google_VolumeSaleInfoListPrice
 */
class Google_VolumeSaleInfoListPrice extends Google_Model
{
    /**
     * @var
     */
    public $amount;
    /**
     * @var
     */
    public $currencyCode;

    /**
     * @param $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param $currencyCode
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return mixed
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }
}

/**
 * Class Google_VolumeSaleInfoRetailPrice
 */
class Google_VolumeSaleInfoRetailPrice extends Google_Model
{
    /**
     * @var
     */
    public $amount;
    /**
     * @var
     */
    public $currencyCode;

    /**
     * @param $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param $currencyCode
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return mixed
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }
}

/**
 * Class Google_VolumeSearchInfo
 */
class Google_VolumeSearchInfo extends Google_Model
{
    /**
     * @var
     */
    public $textSnippet;

    /**
     * @param $textSnippet
     */
    public function setTextSnippet($textSnippet)
    {
        $this->textSnippet = $textSnippet;
    }

    /**
     * @return mixed
     */
    public function getTextSnippet()
    {
        return $this->textSnippet;
    }
}

/**
 * Class Google_VolumeUserInfo
 */
class Google_VolumeUserInfo extends Google_Model
{
    /**
     * @var
     */
    public $isInMyBooks;
    /**
     * @var
     */
    public $isPreordered;
    /**
     * @var
     */
    public $isPurchased;
    /**
     * @var
     */
    public $isUploaded;
    /**
     * @var string
     */
    protected $__readingPositionType = 'Google_ReadingPosition';
    /**
     * @var string
     */
    protected $__readingPositionDataType = '';
    /**
     * @var
     */
    public $readingPosition;
    /**
     * @var string
     */
    protected $__reviewType = 'Google_Review';
    /**
     * @var string
     */
    protected $__reviewDataType = '';
    /**
     * @var
     */
    public $review;
    /**
     * @var
     */
    public $updated;
    /**
     * @var string
     */
    protected $__userUploadedVolumeInfoType = 'Google_VolumeUserInfoUserUploadedVolumeInfo';
    /**
     * @var string
     */
    protected $__userUploadedVolumeInfoDataType = '';
    /**
     * @var
     */
    public $userUploadedVolumeInfo;

    /**
     * @param $isInMyBooks
     */
    public function setIsInMyBooks($isInMyBooks)
    {
        $this->isInMyBooks = $isInMyBooks;
    }

    /**
     * @return mixed
     */
    public function getIsInMyBooks()
    {
        return $this->isInMyBooks;
    }

    /**
     * @param $isPreordered
     */
    public function setIsPreordered($isPreordered)
    {
        $this->isPreordered = $isPreordered;
    }

    /**
     * @return mixed
     */
    public function getIsPreordered()
    {
        return $this->isPreordered;
    }

    /**
     * @param $isPurchased
     */
    public function setIsPurchased($isPurchased)
    {
        $this->isPurchased = $isPurchased;
    }

    /**
     * @return mixed
     */
    public function getIsPurchased()
    {
        return $this->isPurchased;
    }

    /**
     * @param $isUploaded
     */
    public function setIsUploaded($isUploaded)
    {
        $this->isUploaded = $isUploaded;
    }

    /**
     * @return mixed
     */
    public function getIsUploaded()
    {
        return $this->isUploaded;
    }

    /**
     * @param Google_ReadingPosition $readingPosition
     */
    public function setReadingPosition(Google_ReadingPosition $readingPosition)
    {
        $this->readingPosition = $readingPosition;
    }

    /**
     * @return mixed
     */
    public function getReadingPosition()
    {
        return $this->readingPosition;
    }

    /**
     * @param Google_Review $review
     */
    public function setReview(Google_Review $review)
    {
        $this->review = $review;
    }

    /**
     * @return mixed
     */
    public function getReview()
    {
        return $this->review;
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
     * @param Google_VolumeUserInfoUserUploadedVolumeInfo $userUploadedVolumeInfo
     */
    public function setUserUploadedVolumeInfo(Google_VolumeUserInfoUserUploadedVolumeInfo $userUploadedVolumeInfo)
    {
        $this->userUploadedVolumeInfo = $userUploadedVolumeInfo;
    }

    /**
     * @return mixed
     */
    public function getUserUploadedVolumeInfo()
    {
        return $this->userUploadedVolumeInfo;
    }
}

/**
 * Class Google_VolumeUserInfoUserUploadedVolumeInfo
 */
class Google_VolumeUserInfoUserUploadedVolumeInfo extends Google_Model
{
    /**
     * @var
     */
    public $processingState;

    /**
     * @param $processingState
     */
    public function setProcessingState($processingState)
    {
        $this->processingState = $processingState;
    }

    /**
     * @return mixed
     */
    public function getProcessingState()
    {
        return $this->processingState;
    }
}

/**
 * Class Google_VolumeVolumeInfo
 */
class Google_VolumeVolumeInfo extends Google_Model
{
    /**
     * @var
     */
    public $authors;
    /**
     * @var
     */
    public $averageRating;
    /**
     * @var
     */
    public $canonicalVolumeLink;
    /**
     * @var
     */
    public $categories;
    /**
     * @var
     */
    public $contentVersion;
    /**
     * @var
     */
    public $description;
    /**
     * @var string
     */
    protected $__dimensionsType = 'Google_VolumeVolumeInfoDimensions';
    /**
     * @var string
     */
    protected $__dimensionsDataType = '';
    /**
     * @var
     */
    public $dimensions;
    /**
     * @var string
     */
    protected $__imageLinksType = 'Google_VolumeVolumeInfoImageLinks';
    /**
     * @var string
     */
    protected $__imageLinksDataType = '';
    /**
     * @var
     */
    public $imageLinks;
    /**
     * @var string
     */
    protected $__industryIdentifiersType = 'Google_VolumeVolumeInfoIndustryIdentifiers';
    /**
     * @var string
     */
    protected $__industryIdentifiersDataType = 'array';
    /**
     * @var
     */
    public $industryIdentifiers;
    /**
     * @var
     */
    public $infoLink;
    /**
     * @var
     */
    public $language;
    /**
     * @var
     */
    public $mainCategory;
    /**
     * @var
     */
    public $pageCount;
    /**
     * @var
     */
    public $previewLink;
    /**
     * @var
     */
    public $printType;
    /**
     * @var
     */
    public $publishedDate;
    /**
     * @var
     */
    public $publisher;
    /**
     * @var
     */
    public $ratingsCount;
    /**
     * @var
     */
    public $subtitle;
    /**
     * @var
     */
    public $title;

    /**
     * @param $authors
     * @throws Google_Exception
     */
    public function setAuthors(/* array(Google_string) */
        $authors)
    {
        $this->assertIsArray($authors, 'Google_string', __METHOD__);
        $this->authors = $authors;
    }

    /**
     * @return mixed
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * @param $averageRating
     */
    public function setAverageRating($averageRating)
    {
        $this->averageRating = $averageRating;
    }

    /**
     * @return mixed
     */
    public function getAverageRating()
    {
        return $this->averageRating;
    }

    /**
     * @param $canonicalVolumeLink
     */
    public function setCanonicalVolumeLink($canonicalVolumeLink)
    {
        $this->canonicalVolumeLink = $canonicalVolumeLink;
    }

    /**
     * @return mixed
     */
    public function getCanonicalVolumeLink()
    {
        return $this->canonicalVolumeLink;
    }

    /**
     * @param $categories
     * @throws Google_Exception
     */
    public function setCategories(/* array(Google_string) */
        $categories)
    {
        $this->assertIsArray($categories, 'Google_string', __METHOD__);
        $this->categories = $categories;
    }

    /**
     * @return mixed
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param $contentVersion
     */
    public function setContentVersion($contentVersion)
    {
        $this->contentVersion = $contentVersion;
    }

    /**
     * @return mixed
     */
    public function getContentVersion()
    {
        return $this->contentVersion;
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
     * @param Google_VolumeVolumeInfoDimensions $dimensions
     */
    public function setDimensions(Google_VolumeVolumeInfoDimensions $dimensions)
    {
        $this->dimensions = $dimensions;
    }

    /**
     * @return mixed
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * @param Google_VolumeVolumeInfoImageLinks $imageLinks
     */
    public function setImageLinks(Google_VolumeVolumeInfoImageLinks $imageLinks)
    {
        $this->imageLinks = $imageLinks;
    }

    /**
     * @return mixed
     */
    public function getImageLinks()
    {
        return $this->imageLinks;
    }

    /**
     * @param $industryIdentifiers
     * @throws Google_Exception
     */
    public function setIndustryIdentifiers(/* array(Google_VolumeVolumeInfoIndustryIdentifiers) */
        $industryIdentifiers)
    {
        $this->assertIsArray($industryIdentifiers, 'Google_VolumeVolumeInfoIndustryIdentifiers', __METHOD__);
        $this->industryIdentifiers = $industryIdentifiers;
    }

    /**
     * @return mixed
     */
    public function getIndustryIdentifiers()
    {
        return $this->industryIdentifiers;
    }

    /**
     * @param $infoLink
     */
    public function setInfoLink($infoLink)
    {
        $this->infoLink = $infoLink;
    }

    /**
     * @return mixed
     */
    public function getInfoLink()
    {
        return $this->infoLink;
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
     * @param $mainCategory
     */
    public function setMainCategory($mainCategory)
    {
        $this->mainCategory = $mainCategory;
    }

    /**
     * @return mixed
     */
    public function getMainCategory()
    {
        return $this->mainCategory;
    }

    /**
     * @param $pageCount
     */
    public function setPageCount($pageCount)
    {
        $this->pageCount = $pageCount;
    }

    /**
     * @return mixed
     */
    public function getPageCount()
    {
        return $this->pageCount;
    }

    /**
     * @param $previewLink
     */
    public function setPreviewLink($previewLink)
    {
        $this->previewLink = $previewLink;
    }

    /**
     * @return mixed
     */
    public function getPreviewLink()
    {
        return $this->previewLink;
    }

    /**
     * @param $printType
     */
    public function setPrintType($printType)
    {
        $this->printType = $printType;
    }

    /**
     * @return mixed
     */
    public function getPrintType()
    {
        return $this->printType;
    }

    /**
     * @param $publishedDate
     */
    public function setPublishedDate($publishedDate)
    {
        $this->publishedDate = $publishedDate;
    }

    /**
     * @return mixed
     */
    public function getPublishedDate()
    {
        return $this->publishedDate;
    }

    /**
     * @param $publisher
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    /**
     * @return mixed
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param $ratingsCount
     */
    public function setRatingsCount($ratingsCount)
    {
        $this->ratingsCount = $ratingsCount;
    }

    /**
     * @return mixed
     */
    public function getRatingsCount()
    {
        return $this->ratingsCount;
    }

    /**
     * @param $subtitle
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }

    /**
     * @return mixed
     */
    public function getSubtitle()
    {
        return $this->subtitle;
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
}

/**
 * Class Google_VolumeVolumeInfoDimensions
 */
class Google_VolumeVolumeInfoDimensions extends Google_Model
{
    /**
     * @var
     */
    public $height;
    /**
     * @var
     */
    public $thickness;
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
     * @param $thickness
     */
    public function setThickness($thickness)
    {
        $this->thickness = $thickness;
    }

    /**
     * @return mixed
     */
    public function getThickness()
    {
        return $this->thickness;
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
 * Class Google_VolumeVolumeInfoImageLinks
 */
class Google_VolumeVolumeInfoImageLinks extends Google_Model
{
    /**
     * @var
     */
    public $extraLarge;
    /**
     * @var
     */
    public $large;
    /**
     * @var
     */
    public $medium;
    /**
     * @var
     */
    public $small;
    /**
     * @var
     */
    public $smallThumbnail;
    /**
     * @var
     */
    public $thumbnail;

    /**
     * @param $extraLarge
     */
    public function setExtraLarge($extraLarge)
    {
        $this->extraLarge = $extraLarge;
    }

    /**
     * @return mixed
     */
    public function getExtraLarge()
    {
        return $this->extraLarge;
    }

    /**
     * @param $large
     */
    public function setLarge($large)
    {
        $this->large = $large;
    }

    /**
     * @return mixed
     */
    public function getLarge()
    {
        return $this->large;
    }

    /**
     * @param $medium
     */
    public function setMedium($medium)
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
     * @param $small
     */
    public function setSmall($small)
    {
        $this->small = $small;
    }

    /**
     * @return mixed
     */
    public function getSmall()
    {
        return $this->small;
    }

    /**
     * @param $smallThumbnail
     */
    public function setSmallThumbnail($smallThumbnail)
    {
        $this->smallThumbnail = $smallThumbnail;
    }

    /**
     * @return mixed
     */
    public function getSmallThumbnail()
    {
        return $this->smallThumbnail;
    }

    /**
     * @param $thumbnail
     */
    public function setThumbnail($thumbnail)
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
}

/**
 * Class Google_VolumeVolumeInfoIndustryIdentifiers
 */
class Google_VolumeVolumeInfoIndustryIdentifiers extends Google_Model
{
    /**
     * @var
     */
    public $identifier;
    /**
     * @var
     */
    public $type;

    /**
     * @param $identifier
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * @return mixed
     */
    public function getIdentifier()
    {
        return $this->identifier;
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
 * Class Google_Volumeannotation
 */
class Google_Volumeannotation extends Google_Model
{
    /**
     * @var
     */
    public $annotationDataId;
    /**
     * @var
     */
    public $annotationDataLink;
    /**
     * @var
     */
    public $annotationType;
    /**
     * @var string
     */
    protected $__contentRangesType = 'Google_VolumeannotationContentRanges';
    /**
     * @var string
     */
    protected $__contentRangesDataType = '';
    /**
     * @var
     */
    public $contentRanges;
    /**
     * @var
     */
    public $data;
    /**
     * @var
     */
    public $deleted;
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
    public $layerId;
    /**
     * @var
     */
    public $pageIds;
    /**
     * @var
     */
    public $selectedText;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $updated;
    /**
     * @var
     */
    public $volumeId;

    /**
     * @param $annotationDataId
     */
    public function setAnnotationDataId($annotationDataId)
    {
        $this->annotationDataId = $annotationDataId;
    }

    /**
     * @return mixed
     */
    public function getAnnotationDataId()
    {
        return $this->annotationDataId;
    }

    /**
     * @param $annotationDataLink
     */
    public function setAnnotationDataLink($annotationDataLink)
    {
        $this->annotationDataLink = $annotationDataLink;
    }

    /**
     * @return mixed
     */
    public function getAnnotationDataLink()
    {
        return $this->annotationDataLink;
    }

    /**
     * @param $annotationType
     */
    public function setAnnotationType($annotationType)
    {
        $this->annotationType = $annotationType;
    }

    /**
     * @return mixed
     */
    public function getAnnotationType()
    {
        return $this->annotationType;
    }

    /**
     * @param Google_VolumeannotationContentRanges $contentRanges
     */
    public function setContentRanges(Google_VolumeannotationContentRanges $contentRanges)
    {
        $this->contentRanges = $contentRanges;
    }

    /**
     * @return mixed
     */
    public function getContentRanges()
    {
        return $this->contentRanges;
    }

    /**
     * @param $data
     */
    public function setData($data)
    {
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
     * @param $layerId
     */
    public function setLayerId($layerId)
    {
        $this->layerId = $layerId;
    }

    /**
     * @return mixed
     */
    public function getLayerId()
    {
        return $this->layerId;
    }

    /**
     * @param $pageIds
     * @throws Google_Exception
     */
    public function setPageIds(/* array(Google_string) */
        $pageIds)
    {
        $this->assertIsArray($pageIds, 'Google_string', __METHOD__);
        $this->pageIds = $pageIds;
    }

    /**
     * @return mixed
     */
    public function getPageIds()
    {
        return $this->pageIds;
    }

    /**
     * @param $selectedText
     */
    public function setSelectedText($selectedText)
    {
        $this->selectedText = $selectedText;
    }

    /**
     * @return mixed
     */
    public function getSelectedText()
    {
        return $this->selectedText;
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
     * @param $volumeId
     */
    public function setVolumeId($volumeId)
    {
        $this->volumeId = $volumeId;
    }

    /**
     * @return mixed
     */
    public function getVolumeId()
    {
        return $this->volumeId;
    }
}

/**
 * Class Google_VolumeannotationContentRanges
 */
class Google_VolumeannotationContentRanges extends Google_Model
{
    /**
     * @var string
     */
    protected $__cfiRangeType = 'Google_BooksAnnotationsRange';
    /**
     * @var string
     */
    protected $__cfiRangeDataType = '';
    /**
     * @var
     */
    public $cfiRange;
    /**
     * @var
     */
    public $contentVersion;
    /**
     * @var string
     */
    protected $__gbImageRangeType = 'Google_BooksAnnotationsRange';
    /**
     * @var string
     */
    protected $__gbImageRangeDataType = '';
    /**
     * @var
     */
    public $gbImageRange;
    /**
     * @var string
     */
    protected $__gbTextRangeType = 'Google_BooksAnnotationsRange';
    /**
     * @var string
     */
    protected $__gbTextRangeDataType = '';
    /**
     * @var
     */
    public $gbTextRange;

    /**
     * @param Google_BooksAnnotationsRange $cfiRange
     */
    public function setCfiRange(Google_BooksAnnotationsRange $cfiRange)
    {
        $this->cfiRange = $cfiRange;
    }

    /**
     * @return mixed
     */
    public function getCfiRange()
    {
        return $this->cfiRange;
    }

    /**
     * @param $contentVersion
     */
    public function setContentVersion($contentVersion)
    {
        $this->contentVersion = $contentVersion;
    }

    /**
     * @return mixed
     */
    public function getContentVersion()
    {
        return $this->contentVersion;
    }

    /**
     * @param Google_BooksAnnotationsRange $gbImageRange
     */
    public function setGbImageRange(Google_BooksAnnotationsRange $gbImageRange)
    {
        $this->gbImageRange = $gbImageRange;
    }

    /**
     * @return mixed
     */
    public function getGbImageRange()
    {
        return $this->gbImageRange;
    }

    /**
     * @param Google_BooksAnnotationsRange $gbTextRange
     */
    public function setGbTextRange(Google_BooksAnnotationsRange $gbTextRange)
    {
        $this->gbTextRange = $gbTextRange;
    }

    /**
     * @return mixed
     */
    public function getGbTextRange()
    {
        return $this->gbTextRange;
    }
}

/**
 * Class Google_Volumeannotations
 */
class Google_Volumeannotations extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Volumeannotation';
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
    public $totalItems;
    /**
     * @var
     */
    public $version;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Volumeannotation) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Volumeannotation', __METHOD__);
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

    /**
     * @return mixed
     */
    public function getNextPageToken()
    {
        return $this->nextPageToken;
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
     * @param $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }
}

/**
 * Class Google_Volumes
 */
class Google_Volumes extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Volume';
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
    public $totalItems;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Volume) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Volume', __METHOD__);
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
}
