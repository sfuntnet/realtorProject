<?php

namespace App\Http\Services;

use App\Models\User as Auth;


class AuthService
{
    private $auth;

    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    public function login($request)
    {
        return $this->auth->login($request);
    }

    public function register($request)
    {
        return $this->auth->register($request);
    }

    public function logout()
    {
        return $this->auth->logout();
    }

    public function refresh()
    {
        return $this->auth->refresh();
    }

    public function userProfile()
    {
        return $this->auth->userProfile();
    }

    public function createNewToken($token)
    {
        return $this->auth->createNewToken($token);
    }
}
