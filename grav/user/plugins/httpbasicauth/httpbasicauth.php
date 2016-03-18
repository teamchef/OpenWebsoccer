<?php
namespace Grav\Plugin;

use Grav\Common\File\CompiledYamlFile;
use Grav\Common\Plugin;
use Grav\Common\User\User;

class HttpbasicauthPlugin extends Plugin
{
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPageInitialized' => ['checkAuthentication', 1], // before LoginPlugin
        ];
    }

    /**
     * Check user authentication
     *
     * @return bool
     */
    public function checkAuthentication()
    {
        /** @var User $user */
        $user = $this->grav['user'];

        // Already identified
        if ($user->authenticated) {
            return;
        }

        // HTTP Basic Auth values
        $auth = self::extractFromHeaders();

        // Nothing to read
        if (empty($auth['username']) || empty($auth['password'])) {
            return;
        }

        $this->authenticate($auth['username'], $auth['password']);
    }

    /**
     * Authenticate user
     *
     * @param  string $username
     * @param  string $password
     * @return bool
     */
    protected function authenticate($username, $password)
    {
        if (empty($username) || empty($password)) {
            return false;
        }

        // Normal login process
        $user = User::load($username);
        if (!$user->exists()) {
            return false;
        }

        // Failed authentication
        if (!$result = $user->authenticate($password)) {
            return false;
        }

        // Success
        $this->grav['session']->user = $user;
        unset($this->grav['user']);
        $this->grav['user'] = $user;
        return $user->authenticated = $user->authorize('site.login');
    }

    /**
     * Extract username/password from headers
     *
     * @return array
     */
    public static function extractFromHeaders()
    {
        $username = !empty($_SERVER['PHP_AUTH_USER']) ? $_SERVER['PHP_AUTH_USER'] : null;
        $password = !empty($_SERVER['PHP_AUTH_PWD']) ? $_SERVER['PHP_AUTH_PWD'] : null;
        $httpAuth = !empty($_SERVER['HTTP_AUTHORIZATION']) ? $_SERVER['HTTP_AUTHORIZATION'] : null;
        
        if ((empty($username) || empty($password)) && !empty($httpAuth)) {
            list($type, $authString) = explode(' ', $httpAuth);
            if (strcasecmp($type, 'Basic') === 0) {
                list($username, $password) = explode(':', base64_decode($authString));
            }
        }

        return ['username' => $username, 'password' => $password];
    }
}
