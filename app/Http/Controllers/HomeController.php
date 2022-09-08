<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function userLogin()
    {
        return view('auth.userLogin');
    }

    public function userRegister()
    {
        return view('auth.userRegister');
    }


}
