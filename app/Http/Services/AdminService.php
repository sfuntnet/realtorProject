<?php

namespace App\Http\Services;

use App\Models\Admin;


class AdminService
{
    private $admin;

    public function __construct(Admin $admin)
    {
        $this->admin = $admin;
    }

    public function login($request)
    {
        return $this->admin->login($request);
    }


    public function logout()
    {
        return $this->admin->logout();
    }

    public function refresh()
    {
        return $this->admin->refresh();
    }

    public function userProfile()
    {
        return $this->admin->userProfile();
    }

    public function createNewToken($token)
    {
        return $this->admin->createNewToken($token);
    }
}
