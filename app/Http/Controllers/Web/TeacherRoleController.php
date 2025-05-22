<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherRoleController extends BaseAuthController
{
    public function index()
    {
        return view('admin.teacherRole');
    }
}
