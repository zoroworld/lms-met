<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PageController extends Controller
{
    public function home()
    {
        if (Auth::check()) {
            if (Auth::user()->status === 'active') {
                $redirectUrl = session('url.intended', route('admin.dashboard'));
                session()->forget('url.intended');
                return redirect($redirectUrl);
            }
        }

        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function trainers()
    {
        return view('trainers');
    }
    public function courses()
    {
        return view('courses');
    }
    public function events()
    {
        return view('events');
    }

}
