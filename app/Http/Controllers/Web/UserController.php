<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends BaseAuthController
{
    public function index()
    {
        return  view('admin.users.user');
    }
}
