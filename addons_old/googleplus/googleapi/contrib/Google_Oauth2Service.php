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
 * The "userinfo" collection of methods.
 * Typical usage is:
 *  <code>
 *   $oauth2Service = new Google_Oauth2Service(...);
 *   $userinfo = $oauth2Service->userinfo;
 *  </code>
 */
class Google_UserinfoServiceResource extends Google_ServiceResource
{

    /**
     * (userinfo.get)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Userinfo
     * @throws Google_Exception
     */
    public function get($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Userinfo($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "v2" collection of methods.
 * Typical usage is:
 *  <code>
 *   $oauth2Service = new Google_Oauth2Service(...);
 *   $v2 = $oauth2Service->v2;
 *  </code>
 */
class Google_UserinfoV2ServiceResource extends Google_ServiceResource
{

}

/**
 * The "me" collection of methods.
 * Typical usage is:
 *  <code>
 *   $oauth2Service = new Google_Oauth2Service(...);
 *   $me = $oauth2Service->me;
 *  </code>
 */
class Google_UserinfoV2MeServiceResource extends Google_ServiceResource
{

    /**
     * (me.get)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Userinfo
     * @throws Google_Exception
     */
    public function get($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', [$params]);
        if ($this->useObjects()) {
            return new Google_Userinfo($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Oauth2 (v2).
 *
 * <p>
 * Lets you access OAuth2 protocol related APIs.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/accounts/docs/OAuth2" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Oauth2Service extends Google_Service
{
    /**
     * @var Google_UserinfoServiceResource
     */
    public $userinfo;
    /**
     * @var Google_UserinfoV2MeServiceResource
     */
    public $userinfo_v2_me;

    /**
     * Constructs the internal representation of the Oauth2 service.
     *
     * @param Google_Client $client
     * @throws Google_Exception
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = '';
        $this->version = 'v2';
        $this->serviceName = 'oauth2';

        $client->addService($this->serviceName, $this->version);
        $this->userinfo = new Google_UserinfoServiceResource($this, $this->serviceName, 'userinfo', json_decode('{"methods": {"get": {"id": "oauth2.userinfo.get", "path": "oauth2/v2/userinfo", "httpMethod": "GET", "response": {"$ref": "Userinfo"}, "scopes": ["https://www.googleapis.com/auth/plus.login", "https://www.googleapis.com/auth/plus.me", "https://www.googleapis.com/auth/userinfo.email", "https://www.googleapis.com/auth/userinfo.profile"]}}}', true));
        $this->userinfo_v2_me = new Google_UserinfoV2MeServiceResource($this, $this->serviceName, 'me', json_decode('{"methods": {"get": {"id": "oauth2.userinfo.v2.me.get", "path": "userinfo/v2/me", "httpMethod": "GET", "response": {"$ref": "Userinfo"}, "scopes": ["https://www.googleapis.com/auth/plus.login", "https://www.googleapis.com/auth/plus.me", "https://www.googleapis.com/auth/userinfo.email", "https://www.googleapis.com/auth/userinfo.profile"]}}}', true));

    }
}


/**
 * Class Google_Tokeninfo
 */
class Google_Tokeninfo extends Google_Model
{
    /**
     * @var
     */
    public $access_type;
    /**
     * @var
     */
    public $audience;
    /**
     * @var
     */
    public $email;
    /**
     * @var
     */
    public $expires_in;
    /**
     * @var
     */
    public $issued_to;
    /**
     * @var
     */
    public $scope;
    /**
     * @var
     */
    public $user_id;
    /**
     * @var
     */
    public $verified_email;

    /**
     * @param $access_type
     */
    public function setAccess_type($access_type)
    {
        $this->access_type = $access_type;
    }

    /**
     * @return mixed
     */
    public function getAccess_type()
    {
        return $this->access_type;
    }

    /**
     * @param $audience
     */
    public function setAudience($audience)
    {
        $this->audience = $audience;
    }

    /**
     * @return mixed
     */
    public function getAudience()
    {
        return $this->audience;
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
     * @param $expires_in
     */
    public function setExpires_in($expires_in)
    {
        $this->expires_in = $expires_in;
    }

    /**
     * @return mixed
     */
    public function getExpires_in()
    {
        return $this->expires_in;
    }

    /**
     * @param $issued_to
     */
    public function setIssued_to($issued_to)
    {
        $this->issued_to = $issued_to;
    }

    /**
     * @return mixed
     */
    public function getIssued_to()
    {
        return $this->issued_to;
    }

    /**
     * @param $scope
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
    }

    /**
     * @return mixed
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param $user_id
     */
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * @param $verified_email
     */
    public function setVerified_email($verified_email)
    {
        $this->verified_email = $verified_email;
    }

    /**
     * @return mixed
     */
    public function getVerified_email()
    {
        return $this->verified_email;
    }
}

/**
 * Class Google_Userinfo
 */
class Google_Userinfo extends Google_Model
{
    /**
     * @var
     */
    public $birthday;
    /**
     * @var
     */
    public $email;
    /**
     * @var
     */
    public $family_name;
    /**
     * @var
     */
    public $gender;
    /**
     * @var
     */
    public $given_name;
    /**
     * @var
     */
    public $hd;
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $link;
    /**
     * @var
     */
    public $locale;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $picture;
    /**
     * @var
     */
    public $timezone;
    /**
     * @var
     */
    public $verified_email;

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
     * @param $family_name
     */
    public function setFamily_name($family_name)
    {
        $this->family_name = $family_name;
    }

    /**
     * @return mixed
     */
    public function getFamily_name()
    {
        return $this->family_name;
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
     * @param $given_name
     */
    public function setGiven_name($given_name)
    {
        $this->given_name = $given_name;
    }

    /**
     * @return mixed
     */
    public function getGiven_name()
    {
        return $this->given_name;
    }

    /**
     * @param $hd
     */
    public function setHd($hd)
    {
        $this->hd = $hd;
    }

    /**
     * @return mixed
     */
    public function getHd()
    {
        return $this->hd;
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
     * @param $link
     */
    public function setLink($link)
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
     * @param $locale
     */
    public function setLocale($locale)
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
     * @param $picture
     */
    public function setPicture($picture)
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

    /**
     * @param $timezone
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
    }

    /**
     * @return mixed
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @param $verified_email
     */
    public function setVerified_email($verified_email)
    {
        $this->verified_email = $verified_email;
    }

    /**
     * @return mixed
     */
    public function getVerified_email()
    {
        return $this->verified_email;
    }
}
