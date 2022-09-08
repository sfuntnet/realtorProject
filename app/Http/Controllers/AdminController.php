<?php

namespace App\Http\Controllers;

use App\Http\Services\AdminService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $adminService;

    public function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }

    public function index(Request $request)
    {
        return view('admin.index');
    }

    public function singOut()
    {
        return view('admin.singOut');
    }

    public function login(Request $request)
    {
        return $this->adminService->login($request);
    }

    public function logout()
    {
        return $this->adminService->logout();
    }

    public function refresh()
    {
        return $this->adminService->refresh();
    }

    public function userProfile()
    {
        return $this->adminService->userProfile();
    }

    protected function createNewToken($token)
    {
        return $this->adminService->createNewToken($token);
    }
}
