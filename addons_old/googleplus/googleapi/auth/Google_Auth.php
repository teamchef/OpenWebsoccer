<?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

require_once "Google_AuthNone.php";
require_once "Google_OAuth2.php";

/**
 * Abstract class for the Authentication in the API client
 * @author Chris Chabot <chabotc@google.com>
 *
 */
abstract class Google_Auth
{
    /**
     * @param $service
     * @return mixed
     */
    abstract public function authenticate($service);

    /**
     * @param Google_HttpRequest $request
     * @return mixed
     */
    abstract public function sign(Google_HttpRequest $request);

    /**
     * @param $scope
     * @return mixed
     */
    abstract public function createAuthUrl($scope);

    abstract public function getAccessToken();

    /**
     * @param $accessToken
     * @return mixed
     */
    abstract public function setAccessToken($accessToken);

    /**
     * @param $developerKey
     * @return mixed
     */
    abstract public function setDeveloperKey($developerKey);

    /**
     * @param $refreshToken
     * @return mixed
     */
    abstract public function refreshToken($refreshToken);

    abstract public function revokeToken();
}
