<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('SignGo.signin');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful
            $user = Auth::user();

            // Redirect based on the user's role
            switch ($user->role) {
                case 'admin':
                    return redirect()->route('admin.dashboard');
                case 'training_staff':
                    return redirect()->route('training_staff.dashboard');
                case 'trainer':
                    return redirect()->route('trainer.dashboard');
                    // Add more cases for other roles if needed
                default:
                    // Redirect to a default page or dashboard if role not matched
                    return redirect()->route('dashboard');
            }
        } else {
            // Authentication failed, redirect back to login with error message
            return redirect()->route('vip.login')->with('error', 'Invalid username or password');
        }
    }
}
