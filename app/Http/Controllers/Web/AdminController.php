<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends BaseAuthController
{
    public function index()
    {
        return view('admin.index');
    }

    public function test()
    {
        return view('admin.test');
    }
}
