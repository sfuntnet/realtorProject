<?php

namespace App\Http\Controllers;

use App\Http\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $authservice;

    public function __construct(AuthService $authservice)
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
        $this->authservice = $authservice;
    }

    public function login(Request $request)
    {
        return $this->authservice->login($request);
    }

    public function register(Request $request)
    {
        return $this->authservice->register($request);
    }

    public function logout()
    {
        return $this->authservice->logout();
    }

    public function refresh()
    {
        return $this->authservice->refresh();
    }

    public function userProfile()
    {
        return $this->authservice->userProfile();
    }

    protected function createNewToken($token)
    {
        return $this->authservice->createNewToken($token);
    }
}
