<?php

namespace App\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $user;

    public function __construct(UserService $user)
    {
        $this->user = $user;
    }

    public function index(Request $request)
    {
        return view('profile.index');
    }

    public function singOut()
    {

        return view('profile/singOut');
    }

    public function getUser()
    {
        return $this->user->getUser();
    }
}
