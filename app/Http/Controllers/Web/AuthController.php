<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{


    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed',
            'role' => 'required|string|in:student,trainer',
            'phone' => 'string|max:10',
            'address' => 'nullable|string|max:255',
            'institute_code' => 'required|string|max:50|not_in:select',
            'status' => 'required|string|in:active,inactive',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'institute_code' => $request->institute_code,
            'status' => $request->status ?? 'pending',
        ]);

        if ($request->role === 'student') {
            Student::create([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'phone' => $request->phone,
                'status' => $request->status ?? 'pending',
                'institute_code' => $request->institute_code,
            ]);
        } elseif ($request->role === 'trainer') {
            Trainer::create([
                'name' => $request->name,
                'email_id' => $request->email,
                'mobile_no' => $request->phone,
                'status' => $request->status ?? 'pending',
                'institute_code' => $request->institute_code,
            ]);
        }

        Auth::login($user);
        $request->session()->regenerate();

        return redirect('/login')->with('success', 'User registered successfully');
    }



    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->status !== 'active') {
                Auth::logout();
                return back()->withErrors([
                    'email' => 'Account is not active.',
                ]);
            }

            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }



        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Logged out successfully');
    }
}
