<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('SignGo.signin');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication successful
            $user = Auth::user();

            // Redirect to the dashboard route, passing the username as a query parameter
            return redirect()->route('All.Dashboard', ['username' => $user->role]);
        } else {
            // Authentication failed, redirect back to login with error message
            return redirect()->back()->withErrors([
                'email' => 'Invalid credentials',
            ]);
        }
    }


    // public function postLogin(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         // Authentication successful
    //         $user = Auth::user();

    //         // Redirect based on the user's role
    //         switch ($user->role) 
    //         {
    //             case 'admin':
    //                 return redirect()->route('All.index.admin');
    //             case 'training':
    //                 return redirect()->route('All.index.training');
    //             case 'trainer':
    //                 return redirect()->route('All.index.trainer');
    //                 // Add more cases for other roles if needed
    //             default:
    //                 // Redirect to a default page or dashboard if role not matched
    //                 return redirect()->route('Auth.getLogin');
    //         }
    //     } else {
    //         // Authentication failed, redirect back to login with error message
    //         return redirect()->back()->withErrors([
    //             'email' => 'Invalid credentials',
    //         ]);
    //     }
}
