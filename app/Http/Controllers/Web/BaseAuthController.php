<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BaseAuthController extends Controller
{
    public function showLoginForm(Request $request)
    {
        session(['url.intended' => $request->fullUrl()]);
        return view('auth.login');
    }
}
