<?php

namespace App\Http\Services;

use App\Models\User;

class UserService
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user->getUser();
    }
}
