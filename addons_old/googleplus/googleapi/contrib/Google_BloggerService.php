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
 * The "blogUserInfos" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bloggerService = new Google_BloggerService(...);
 *   $blogUserInfos = $bloggerService->blogUserInfos;
 *  </code>
 */
class Google_BlogUserInfosServiceResource extends Google_ServiceResource
{

    /**
     * Gets one blog and user info pair by blogId and userId. (blogUserInfos.get)
     *
     * @param string $userId ID of the user whose blogs are to be fetched. Either the word 'self' (sans quote marks) or the user's profile identifier.
     * @param string $blogId The ID of the blog to get.
     * @param array $optParams Optional parameters.
     * @return Google_BlogUserInfo
     * @throws Google_Exception
     * @opt_param string maxPosts Maximum number of posts to pull back with the blog.
     */
    public function get($userId, $blogId, $optParams = [])
    {
        $params = ['userId' => $userId, 'blogId' => $blogId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_BlogUserInfo($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "blogs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bloggerService = new Google_BloggerService(...);
 *   $blogs = $bloggerService->blogs;
 *  </code>
 */
class Google_BlogsServiceResource extends Google_ServiceResource
{

    /**
     * Gets one blog by id. (blogs.get)
     *
     * @param string $blogId The ID of the blog to get.
     * @param array $optParams Optional parameters.
     * @return Google_Blog
     * @throws Google_Exception
     * @opt_param string maxPosts Maximum number of posts to pull back with the blog.
     */
    public function get($blogId, $optParams = [])
    {
        $params = ['blogId' => $blogId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Blog($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieve a Blog by URL. (blogs.getByUrl)
     *
     * @param string $url The URL of the blog to retrieve.
     * @param array $optParams Optional parameters.
     * @return Google_Blog
     * @throws Google_Exception
     */
    public function getByUrl($url, $optParams = [])
    {
        $params = ['url' => $url];
        $params = array_merge($params, $optParams);
        $data = $this->__call('getByUrl', [$params]);
        if ($this->useObjects()) {
            return new Google_Blog($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves a list of blogs, possibly filtered. (blogs.listByUser)
     *
     * @param string $userId ID of the user whose blogs are to be fetched. Either the word 'self' (sans quote marks) or the user's profile identifier.
     * @param array $optParams Optional parameters.
     * @return Google_BlogList
     * @throws Google_Exception
     */
    public function listByUser($userId, $optParams = [])
    {
        $params = ['userId' => $userId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('listByUser', [$params]);
        if ($this->useObjects()) {
            return new Google_BlogList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "comments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bloggerService = new Google_BloggerService(...);
 *   $comments = $bloggerService->comments;
 *  </code>
 */
class Google_CommentsServiceResource extends Google_ServiceResource
{

    /**
     * Gets one comment by id. (comments.get)
     *
     * @param string $blogId ID of the blog to containing the comment.
     * @param string $postId ID of the post to fetch posts from.
     * @param string $commentId The ID of the comment to get.
     * @param array $optParams Optional parameters.
     * @return Google_Comment
     * @throws Google_Exception
     */
    public function get($blogId, $postId, $commentId, $optParams = [])
    {
        $params = ['blogId' => $blogId, 'postId' => $postId, 'commentId' => $commentId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Comment($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the comments for a blog, possibly filtered. (comments.list)
     *
     * @param string $blogId ID of the blog to fetch comments from.
     * @param string $postId ID of the post to fetch posts from.
     * @param array $optParams Optional parameters.
     * @return Google_CommentList
     * @throws Google_Exception
     * @opt_param string endDate Latest date of comment to fetch, a date-time with RFC 3339 formatting.
     * @opt_param bool fetchBodies Whether the body content of the comments is included.
     * @opt_param string maxResults Maximum number of comments to include in the result.
     * @opt_param string pageToken Continuation token if request is paged.
     * @opt_param string startDate Earliest date of comment to fetch, a date-time with RFC 3339 formatting.
     */
    public function listComments($blogId, $postId, $optParams = [])
    {
        $params = ['blogId' => $blogId, 'postId' => $postId];
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
 * The "pages" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bloggerService = new Google_BloggerService(...);
 *   $pages = $bloggerService->pages;
 *  </code>
 */
class Google_PagesServiceResource extends Google_ServiceResource
{

    /**
     * Gets one blog page by id. (pages.get)
     *
     * @param string $blogId ID of the blog containing the page.
     * @param string $pageId The ID of the page to get.
     * @param array $optParams Optional parameters.
     * @return Google_Page
     * @throws Google_Exception
     */
    public function get($blogId, $pageId, $optParams = [])
    {
        $params = ['blogId' => $blogId, 'pageId' => $pageId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Page($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves pages for a blog, possibly filtered. (pages.list)
     *
     * @param string $blogId ID of the blog to fetch pages from.
     * @param array $optParams Optional parameters.
     * @return Google_PageList
     * @throws Google_Exception
     * @opt_param bool fetchBodies Whether to retrieve the Page bodies.
     */
    public function listPages($blogId, $optParams = [])
    {
        $params = ['blogId' => $blogId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_PageList($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "posts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bloggerService = new Google_BloggerService(...);
 *   $posts = $bloggerService->posts;
 *  </code>
 */
class Google_PostsServiceResource extends Google_ServiceResource
{

    /**
     * Delete a post by id. (posts.delete)
     *
     * @param string $blogId The Id of the Blog.
     * @param string $postId The ID of the Post.
     * @param array $optParams Optional parameters.
     * @return array|Google_HttpRequest
     * @throws Google_Exception
     */
    public function delete($blogId, $postId, $optParams = [])
    {
        $params = ['blogId' => $blogId, 'postId' => $postId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('delete', [$params]);
        return $data;
    }

    /**
     * Get a post by id. (posts.get)
     *
     * @param string $blogId ID of the blog to fetch the post from.
     * @param string $postId The ID of the post
     * @param array $optParams Optional parameters.
     * @return Google_Post
     * @throws Google_Exception
     * @opt_param string maxComments Maximum number of comments to pull back on a post.
     */
    public function get($blogId, $postId, $optParams = [])
    {
        $params = ['blogId' => $blogId, 'postId' => $postId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Post($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieve a Post by Path. (posts.getByPath)
     *
     * @param string $blogId ID of the blog to fetch the post from.
     * @param string $path Path of the Post to retrieve.
     * @param array $optParams Optional parameters.
     * @return Google_Post
     * @throws Google_Exception
     * @opt_param string maxComments Maximum number of comments to pull back on a post.
     */
    public function getByPath($blogId, $path, $optParams = [])
    {
        $params = ['blogId' => $blogId, 'path' => $path];
        $params = array_merge($params, $optParams);
        $data = $this->__call('getByPath', [$params]);
        if ($this->useObjects()) {
            return new Google_Post($data);
        } else {
            return $data;
        }
    }

    /**
     * Add a post. (posts.insert)
     *
     * @param string $blogId ID of the blog to add the post to.
     * @param Google_Post $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Post
     * @throws Google_Exception
     */
    public function insert($blogId, Google_Post $postBody, $optParams = [])
    {
        $params = ['blogId' => $blogId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', [$params]);
        if ($this->useObjects()) {
            return new Google_Post($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves a list of posts, possibly filtered. (posts.list)
     *
     * @param string $blogId ID of the blog to fetch posts from.
     * @param array $optParams Optional parameters.
     * @return Google_PostList
     * @throws Google_Exception
     * @opt_param string endDate Latest post date to fetch, a date-time with RFC 3339 formatting.
     * @opt_param bool fetchBodies Whether the body content of posts is included.
     * @opt_param string labels Comma-separated list of labels to search for.
     * @opt_param string maxResults Maximum number of posts to fetch.
     * @opt_param string pageToken Continuation token if the request is paged.
     * @opt_param string startDate Earliest post date to fetch, a date-time with RFC 3339 formatting.
     */
    public function listPosts($blogId, $optParams = [])
    {
        $params = ['blogId' => $blogId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', [$params]);
        if ($this->useObjects()) {
            return new Google_PostList($data);
        } else {
            return $data;
        }
    }

    /**
     * Update a post. This method supports patch semantics. (posts.patch)
     *
     * @param string $blogId The ID of the Blog.
     * @param string $postId The ID of the Post.
     * @param Google_Post $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Post
     * @throws Google_Exception
     */
    public function patch($blogId, $postId, Google_Post $postBody, $optParams = [])
    {
        $params = ['blogId' => $blogId, 'postId' => $postId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', [$params]);
        if ($this->useObjects()) {
            return new Google_Post($data);
        } else {
            return $data;
        }
    }

    /**
     * Search for a post. (posts.search)
     *
     * @param string $blogId ID of the blog to fetch the post from.
     * @param string $q Query terms to search this blog for matching posts.
     * @param array $optParams Optional parameters.
     * @return Google_PostList
     * @throws Google_Exception
     */
    public function search($blogId, $q, $optParams = [])
    {
        $params = ['blogId' => $blogId, 'q' => $q];
        $params = array_merge($params, $optParams);
        $data = $this->__call('search', [$params]);
        if ($this->useObjects()) {
            return new Google_PostList($data);
        } else {
            return $data;
        }
    }

    /**
     * Update a post. (posts.update)
     *
     * @param string $blogId The ID of the Blog.
     * @param string $postId The ID of the Post.
     * @param Google_Post $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Post
     * @throws Google_Exception
     */
    public function update($blogId, $postId, Google_Post $postBody, $optParams = [])
    {
        $params = ['blogId' => $blogId, 'postId' => $postId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', [$params]);
        if ($this->useObjects()) {
            return new Google_Post($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "users" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bloggerService = new Google_BloggerService(...);
 *   $users = $bloggerService->users;
 *  </code>
 */
class Google_UsersServiceResource extends Google_ServiceResource
{

    /**
     * Gets one user by id. (users.get)
     *
     * @param string $userId The ID of the user to get.
     * @param array $optParams Optional parameters.
     * @return Google_User
     * @throws Google_Exception
     */
    public function get($userId, $optParams = [])
    {
        $params = ['userId' => $userId];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_User($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Blogger (v3).
 *
 * <p>
 * API for access to the data within Blogger.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/blogger/docs/3.0/getting_started" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_BloggerService extends Google_Service
{
    /**
     * @var Google_BlogUserInfosServiceResource
     */
    public $blogUserInfos;
    /**
     * @var Google_BlogsServiceResource
     */
    public $blogs;
    /**
     * @var Google_CommentsServiceResource
     */
    public $comments;
    /**
     * @var Google_PagesServiceResource
     */
    public $pages;
    /**
     * @var Google_PostsServiceResource
     */
    public $posts;
    /**
     * @var Google_UsersServiceResource
     */
    public $users;

    /**
     * Constructs the internal representation of the Blogger service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'blogger/v3/';
        $this->version = 'v3';
        $this->serviceName = 'blogger';

        $client->addService($this->serviceName, $this->version);
        $this->blogUserInfos = new Google_BlogUserInfosServiceResource($this, $this->serviceName, 'blogUserInfos', json_decode('{"methods": {"get": {"id": "blogger.blogUserInfos.get", "path": "users/{userId}/blogs/{blogId}", "httpMethod": "GET", "parameters": {"blogId": {"type": "string", "required": true, "location": "path"}, "maxPosts": {"type": "integer", "format": "uint32", "location": "query"}, "userId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "BlogUserInfo"}, "scopes": ["https://www.googleapis.com/auth/blogger", "https://www.googleapis.com/auth/blogger.readonly"]}}}', true));
        $this->blogs = new Google_BlogsServiceResource($this, $this->serviceName, 'blogs', json_decode('{"methods": {"get": {"id": "blogger.blogs.get", "path": "blogs/{blogId}", "httpMethod": "GET", "parameters": {"blogId": {"type": "string", "required": true, "location": "path"}, "maxPosts": {"type": "integer", "format": "uint32", "location": "query"}}, "response": {"$ref": "Blog"}, "scopes": ["https://www.googleapis.com/auth/blogger", "https://www.googleapis.com/auth/blogger.readonly"]}, "getByUrl": {"id": "blogger.blogs.getByUrl", "path": "blogs/byurl", "httpMethod": "GET", "parameters": {"url": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "Blog"}, "scopes": ["https://www.googleapis.com/auth/blogger", "https://www.googleapis.com/auth/blogger.readonly"]}, "listByUser": {"id": "blogger.blogs.listByUser", "path": "users/{userId}/blogs", "httpMethod": "GET", "parameters": {"userId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "BlogList"}, "scopes": ["https://www.googleapis.com/auth/blogger", "https://www.googleapis.com/auth/blogger.readonly"]}}}', true));
        $this->comments = new Google_CommentsServiceResource($this, $this->serviceName, 'comments', json_decode('{"methods": {"get": {"id": "blogger.comments.get", "path": "blogs/{blogId}/posts/{postId}/comments/{commentId}", "httpMethod": "GET", "parameters": {"blogId": {"type": "string", "required": true, "location": "path"}, "commentId": {"type": "string", "required": true, "location": "path"}, "postId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Comment"}, "scopes": ["https://www.googleapis.com/auth/blogger", "https://www.googleapis.com/auth/blogger.readonly"]}, "list": {"id": "blogger.comments.list", "path": "blogs/{blogId}/posts/{postId}/comments", "httpMethod": "GET", "parameters": {"blogId": {"type": "string", "required": true, "location": "path"}, "endDate": {"type": "string", "format": "date-time", "location": "query"}, "fetchBodies": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "postId": {"type": "string", "required": true, "location": "path"}, "startDate": {"type": "string", "format": "date-time", "location": "query"}}, "response": {"$ref": "CommentList"}, "scopes": ["https://www.googleapis.com/auth/blogger", "https://www.googleapis.com/auth/blogger.readonly"]}}}', true));
        $this->pages = new Google_PagesServiceResource($this, $this->serviceName, 'pages', json_decode('{"methods": {"get": {"id": "blogger.pages.get", "path": "blogs/{blogId}/pages/{pageId}", "httpMethod": "GET", "parameters": {"blogId": {"type": "string", "required": true, "location": "path"}, "pageId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Page"}, "scopes": ["https://www.googleapis.com/auth/blogger", "https://www.googleapis.com/auth/blogger.readonly"]}, "list": {"id": "blogger.pages.list", "path": "blogs/{blogId}/pages", "httpMethod": "GET", "parameters": {"blogId": {"type": "string", "required": true, "location": "path"}, "fetchBodies": {"type": "boolean", "location": "query"}}, "response": {"$ref": "PageList"}, "scopes": ["https://www.googleapis.com/auth/blogger", "https://www.googleapis.com/auth/blogger.readonly"]}}}', true));
        $this->posts = new Google_PostsServiceResource($this, $this->serviceName, 'posts', json_decode('{"methods": {"delete": {"id": "blogger.posts.delete", "path": "blogs/{blogId}/posts/{postId}", "httpMethod": "DELETE", "parameters": {"blogId": {"type": "string", "required": true, "location": "path"}, "postId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/blogger"]}, "get": {"id": "blogger.posts.get", "path": "blogs/{blogId}/posts/{postId}", "httpMethod": "GET", "parameters": {"blogId": {"type": "string", "required": true, "location": "path"}, "maxComments": {"type": "integer", "format": "uint32", "location": "query"}, "postId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Post"}, "scopes": ["https://www.googleapis.com/auth/blogger", "https://www.googleapis.com/auth/blogger.readonly"]}, "getByPath": {"id": "blogger.posts.getByPath", "path": "blogs/{blogId}/posts/bypath", "httpMethod": "GET", "parameters": {"blogId": {"type": "string", "required": true, "location": "path"}, "maxComments": {"type": "integer", "format": "uint32", "location": "query"}, "path": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "Post"}, "scopes": ["https://www.googleapis.com/auth/blogger", "https://www.googleapis.com/auth/blogger.readonly"]}, "insert": {"id": "blogger.posts.insert", "path": "blogs/{blogId}/posts", "httpMethod": "POST", "parameters": {"blogId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Post"}, "response": {"$ref": "Post"}, "scopes": ["https://www.googleapis.com/auth/blogger"]}, "list": {"id": "blogger.posts.list", "path": "blogs/{blogId}/posts", "httpMethod": "GET", "parameters": {"blogId": {"type": "string", "required": true, "location": "path"}, "endDate": {"type": "string", "format": "date-time", "location": "query"}, "fetchBodies": {"type": "boolean", "location": "query"}, "labels": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "startDate": {"type": "string", "format": "date-time", "location": "query"}}, "response": {"$ref": "PostList"}, "scopes": ["https://www.googleapis.com/auth/blogger", "https://www.googleapis.com/auth/blogger.readonly"]}, "patch": {"id": "blogger.posts.patch", "path": "blogs/{blogId}/posts/{postId}", "httpMethod": "PATCH", "parameters": {"blogId": {"type": "string", "required": true, "location": "path"}, "postId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Post"}, "response": {"$ref": "Post"}, "scopes": ["https://www.googleapis.com/auth/blogger"]}, "search": {"id": "blogger.posts.search", "path": "blogs/{blogId}/posts/search", "httpMethod": "GET", "parameters": {"blogId": {"type": "string", "required": true, "location": "path"}, "q": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "PostList"}, "scopes": ["https://www.googleapis.com/auth/blogger", "https://www.googleapis.com/auth/blogger.readonly"]}, "update": {"id": "blogger.posts.update", "path": "blogs/{blogId}/posts/{postId}", "httpMethod": "PUT", "parameters": {"blogId": {"type": "string", "required": true, "location": "path"}, "postId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Post"}, "response": {"$ref": "Post"}, "scopes": ["https://www.googleapis.com/auth/blogger"]}}}', true));
        $this->users = new Google_UsersServiceResource($this, $this->serviceName, 'users', json_decode('{"methods": {"get": {"id": "blogger.users.get", "path": "users/{userId}", "httpMethod": "GET", "parameters": {"userId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "User"}, "scopes": ["https://www.googleapis.com/auth/blogger", "https://www.googleapis.com/auth/blogger.readonly"]}}}', true));

    }
}


/**
 * Class Google_Blog
 */
class Google_Blog extends Google_Model
{
    /**
     * @var
     */
    public $customMetaData;
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
    protected $__localeType = 'Google_BlogLocale';
    /**
     * @var string
     */
    protected $__localeDataType = '';
    /**
     * @var
     */
    public $locale;
    /**
     * @var
     */
    public $name;
    /**
     * @var string
     */
    protected $__pagesType = 'Google_BlogPages';
    /**
     * @var string
     */
    protected $__pagesDataType = '';
    /**
     * @var
     */
    public $pages;
    /**
     * @var string
     */
    protected $__postsType = 'Google_BlogPosts';
    /**
     * @var string
     */
    protected $__postsDataType = '';
    /**
     * @var
     */
    public $posts;
    /**
     * @var
     */
    public $published;
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
    public $url;

    /**
     * @param $customMetaData
     */
    public function setCustomMetaData($customMetaData)
    {
        $this->customMetaData = $customMetaData;
    }

    /**
     * @return mixed
     */
    public function getCustomMetaData()
    {
        return $this->customMetaData;
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
     * @param Google_BlogLocale $locale
     */
    public function setLocale(Google_BlogLocale $locale)
    {
        $this->locale = $locale;
    }

    /**
     * @return mixed
     */
    public function getLocale()
    {
        return $this->locale;
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
     * @param Google_BlogPages $pages
     */
    public function setPages(Google_BlogPages $pages)
    {
        $this->pages = $pages;
    }

    /**
     * @return mixed
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * @param Google_BlogPosts $posts
     */
    public function setPosts(Google_BlogPosts $posts)
    {
        $this->posts = $posts;
    }

    /**
     * @return mixed
     */
    public function getPosts()
    {
        return $this->posts;
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
 * Class Google_BlogList
 */
class Google_BlogList extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Blog';
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
    public function setItems(/* array(Google_Blog) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Blog', __METHOD__);
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
 * Class Google_BlogLocale
 */
class Google_BlogLocale extends Google_Model
{
    /**
     * @var
     */
    public $country;
    /**
     * @var
     */
    public $language;
    /**
     * @var
     */
    public $variant;

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
     * @param $variant
     */
    public function setVariant($variant)
    {
        $this->variant = $variant;
    }

    /**
     * @return mixed
     */
    public function getVariant()
    {
        return $this->variant;
    }
}

/**
 * Class Google_BlogPages
 */
class Google_BlogPages extends Google_Model
{
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $totalItems;

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
 * Class Google_BlogPerUserInfo
 */
class Google_BlogPerUserInfo extends Google_Model
{
    /**
     * @var
     */
    public $blogId;
    /**
     * @var
     */
    public $kind;
    /**
     * @var
     */
    public $photosAlbumKey;
    /**
     * @var
     */
    public $userId;

    /**
     * @param $blogId
     */
    public function setBlogId($blogId)
    {
        $this->blogId = $blogId;
    }

    /**
     * @return mixed
     */
    public function getBlogId()
    {
        return $this->blogId;
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
     * @param $photosAlbumKey
     */
    public function setPhotosAlbumKey($photosAlbumKey)
    {
        $this->photosAlbumKey = $photosAlbumKey;
    }

    /**
     * @return mixed
     */
    public function getPhotosAlbumKey()
    {
        return $this->photosAlbumKey;
    }

    /**
     * @param $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }
}

/**
 * Class Google_BlogPosts
 */
class Google_BlogPosts extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Post';
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
    public $selfLink;
    /**
     * @var
     */
    public $totalItems;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Post) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Post', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
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
 * Class Google_BlogUserInfo
 */
class Google_BlogUserInfo extends Google_Model
{
    /**
     * @var string
     */
    protected $__blogType = 'Google_Blog';
    /**
     * @var string
     */
    protected $__blogDataType = '';
    /**
     * @var
     */
    public $blog;
    /**
     * @var
     */
    public $kind;
    /**
     * @var string
     */
    protected $__userType = 'Google_BlogPerUserInfo';
    /**
     * @var string
     */
    protected $__userDataType = '';
    /**
     * @var
     */
    public $user;

    /**
     * @param Google_Blog $blog
     */
    public function setBlog(Google_Blog $blog)
    {
        $this->blog = $blog;
    }

    /**
     * @return mixed
     */
    public function getBlog()
    {
        return $this->blog;
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
     * @param Google_BlogPerUserInfo $user
     */
    public function setUser(Google_BlogPerUserInfo $user)
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
 * Class Google_Comment
 */
class Google_Comment extends Google_Model
{
    /**
     * @var string
     */
    protected $__authorType = 'Google_CommentAuthor';
    /**
     * @var string
     */
    protected $__authorDataType = '';
    /**
     * @var
     */
    public $author;
    /**
     * @var string
     */
    protected $__blogType = 'Google_CommentBlog';
    /**
     * @var string
     */
    protected $__blogDataType = '';
    /**
     * @var
     */
    public $blog;
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
    protected $__postType = 'Google_CommentPost';
    /**
     * @var string
     */
    protected $__postDataType = '';
    /**
     * @var
     */
    public $post;
    /**
     * @var
     */
    public $published;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $updated;

    /**
     * @param Google_CommentAuthor $author
     */
    public function setAuthor(Google_CommentAuthor $author)
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
     * @param Google_CommentBlog $blog
     */
    public function setBlog(Google_CommentBlog $blog)
    {
        $this->blog = $blog;
    }

    /**
     * @return mixed
     */
    public function getBlog()
    {
        return $this->blog;
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
     * @param Google_CommentPost $post
     */
    public function setPost(Google_CommentPost $post)
    {
        $this->post = $post;
    }

    /**
     * @return mixed
     */
    public function getPost()
    {
        return $this->post;
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
 * Class Google_CommentAuthor
 */
class Google_CommentAuthor extends Google_Model
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
    protected $__imageType = 'Google_CommentAuthorImage';
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
     * @param Google_CommentAuthorImage $image
     */
    public function setImage(Google_CommentAuthorImage $image)
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
 * Class Google_CommentAuthorImage
 */
class Google_CommentAuthorImage extends Google_Model
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
 * Class Google_CommentBlog
 */
class Google_CommentBlog extends Google_Model
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
 * Class Google_CommentInReplyTo
 */
class Google_CommentInReplyTo extends Google_Model
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
    public $prevPageToken;

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
 * Class Google_CommentPost
 */
class Google_CommentPost extends Google_Model
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
 * Class Google_Page
 */
class Google_Page extends Google_Model
{
    /**
     * @var string
     */
    protected $__authorType = 'Google_PageAuthor';
    /**
     * @var string
     */
    protected $__authorDataType = '';
    /**
     * @var
     */
    public $author;
    /**
     * @var string
     */
    protected $__blogType = 'Google_PageBlog';
    /**
     * @var string
     */
    protected $__blogDataType = '';
    /**
     * @var
     */
    public $blog;
    /**
     * @var
     */
    public $content;
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
    public $published;
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
    public $url;

    /**
     * @param Google_PageAuthor $author
     */
    public function setAuthor(Google_PageAuthor $author)
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
     * @param Google_PageBlog $blog
     */
    public function setBlog(Google_PageBlog $blog)
    {
        $this->blog = $blog;
    }

    /**
     * @return mixed
     */
    public function getBlog()
    {
        return $this->blog;
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
 * Class Google_PageAuthor
 */
class Google_PageAuthor extends Google_Model
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
    protected $__imageType = 'Google_PageAuthorImage';
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
     * @param Google_PageAuthorImage $image
     */
    public function setImage(Google_PageAuthorImage $image)
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
 * Class Google_PageAuthorImage
 */
class Google_PageAuthorImage extends Google_Model
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
 * Class Google_PageBlog
 */
class Google_PageBlog extends Google_Model
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
 * Class Google_PageList
 */
class Google_PageList extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Page';
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
    public function setItems(/* array(Google_Page) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Page', __METHOD__);
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
 * Class Google_Post
 */
class Google_Post extends Google_Model
{
    /**
     * @var string
     */
    protected $__authorType = 'Google_PostAuthor';
    /**
     * @var string
     */
    protected $__authorDataType = '';
    /**
     * @var
     */
    public $author;
    /**
     * @var string
     */
    protected $__blogType = 'Google_PostBlog';
    /**
     * @var string
     */
    protected $__blogDataType = '';
    /**
     * @var
     */
    public $blog;
    /**
     * @var
     */
    public $content;
    /**
     * @var
     */
    public $customMetaData;
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
    public $labels;
    /**
     * @var string
     */
    protected $__locationType = 'Google_PostLocation';
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
    public $published;
    /**
     * @var string
     */
    protected $__repliesType = 'Google_PostReplies';
    /**
     * @var string
     */
    protected $__repliesDataType = '';
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
    public $title;
    /**
     * @var
     */
    public $updated;
    /**
     * @var
     */
    public $url;

    /**
     * @param Google_PostAuthor $author
     */
    public function setAuthor(Google_PostAuthor $author)
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
     * @param Google_PostBlog $blog
     */
    public function setBlog(Google_PostBlog $blog)
    {
        $this->blog = $blog;
    }

    /**
     * @return mixed
     */
    public function getBlog()
    {
        return $this->blog;
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
     * @param $customMetaData
     */
    public function setCustomMetaData($customMetaData)
    {
        $this->customMetaData = $customMetaData;
    }

    /**
     * @return mixed
     */
    public function getCustomMetaData()
    {
        return $this->customMetaData;
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
     * @param $labels
     * @throws Google_Exception
     */
    public function setLabels(/* array(Google_string) */
        $labels)
    {
        $this->assertIsArray($labels, 'Google_string', __METHOD__);
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
     * @param Google_PostLocation $location
     */
    public function setLocation(Google_PostLocation $location)
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
     * @param Google_PostReplies $replies
     */
    public function setReplies(Google_PostReplies $replies)
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
 * Class Google_PostAuthor
 */
class Google_PostAuthor extends Google_Model
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
    protected $__imageType = 'Google_PostAuthorImage';
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
     * @param Google_PostAuthorImage $image
     */
    public function setImage(Google_PostAuthorImage $image)
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
 * Class Google_PostAuthorImage
 */
class Google_PostAuthorImage extends Google_Model
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
 * Class Google_PostBlog
 */
class Google_PostBlog extends Google_Model
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
 * Class Google_PostList
 */
class Google_PostList extends Google_Model
{
    /**
     * @var string
     */
    protected $__itemsType = 'Google_Post';
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
    public $prevPageToken;

    /**
     * @param $items
     * @throws Google_Exception
     */
    public function setItems(/* array(Google_Post) */
        $items)
    {
        $this->assertIsArray($items, 'Google_Post', __METHOD__);
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
 * Class Google_PostLocation
 */
class Google_PostLocation extends Google_Model
{
    /**
     * @var
     */
    public $lat;
    /**
     * @var
     */
    public $lng;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $span;

    /**
     * @param $lat
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    }

    /**
     * @return mixed
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @param $lng
     */
    public function setLng($lng)
    {
        $this->lng = $lng;
    }

    /**
     * @return mixed
     */
    public function getLng()
    {
        return $this->lng;
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
     * @param $span
     */
    public function setSpan($span)
    {
        $this->span = $span;
    }

    /**
     * @return mixed
     */
    public function getSpan()
    {
        return $this->span;
    }
}

/**
 * Class Google_PostReplies
 */
class Google_PostReplies extends Google_Model
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
    public $selfLink;
    /**
     * @var
     */
    public $totalItems;

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
     * @param $totalItems
     */
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }

    public function getTotalItems()
    {
        return $this->totalItems;
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
    public $about;
    /**
     * @var string
     */
    protected $__blogsType = 'Google_UserBlogs';
    /**
     * @var string
     */
    protected $__blogsDataType = '';
    /**
     * @var
     */
    public $blogs;
    /**
     * @var
     */
    public $created;
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
     * @var string
     */
    protected $__localeType = 'Google_UserLocale';
    /**
     * @var string
     */
    protected $__localeDataType = '';
    /**
     * @var
     */
    public $locale;
    /**
     * @var
     */
    public $selfLink;
    /**
     * @var
     */
    public $url;

    /**
     * @param $about
     */
    public function setAbout($about)
    {
        $this->about = $about;
    }

    /**
     * @return mixed
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * @param Google_UserBlogs $blogs
     */
    public function setBlogs(Google_UserBlogs $blogs)
    {
        $this->blogs = $blogs;
    }

    /**
     * @return mixed
     */
    public function getBlogs()
    {
        return $this->blogs;
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
     * @param Google_UserLocale $locale
     */
    public function setLocale(Google_UserLocale $locale)
    {
        $this->locale = $locale;
    }

    /**
     * @return mixed
     */
    public function getLocale()
    {
        return $this->locale;
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
 * Class Google_UserBlogs
 */
class Google_UserBlogs extends Google_Model
{
    /**
     * @var
     */
    public $selfLink;

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
 * Class Google_UserLocale
 */
class Google_UserLocale extends Google_Model
{
    /**
     * @var
     */
    public $country;
    /**
     * @var
     */
    public $language;
    /**
     * @var
     */
    public $variant;

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
     * @param $variant
     */
    public function setVariant($variant)
    {
        $this->variant = $variant;
    }

    /**
     * @return mixed
     */
    public function getVariant()
    {
        return $this->variant;
    }
}
