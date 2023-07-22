<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Role; // Import the Role model

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
            // Authentication successful, redirect based on user's role
            $users = Auth::users();
            
            switch ($users->role) {
                case 'admin':
                    return redirect()->route('admin.Dashboard');
                    break;
                case 'Training Staff':
                    return redirect()->route('trainingstaff.dashboard');
                    break;
                case 'Trainer':
                    return redirect()->route('trainer.dashboard');
                    break;
                default:
                    // Handle the default case, such as for regular users
                    return redirect()->route('user.dashboard');
                    break;
            }
        } else {
            // Authentication failed, redirect back to login with error message
            return redirect()->route('Vip.login')->with('error', 'Invalid username or password');
        }
    }
}




// namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class LoginController extends Controller
// {
//     public function showLoginForm()
//     {
//         return view('SignGo.signin');
//     }

//     public function login(Request $request)
//     {
//         $credentials = $request->only('username', 'password');

//         if (Auth::attempt($credentials)) {
//             // Authentication successful, redirect to the dashboard page or any other page
//             return redirect()->route('All.Dashboard'); // Replace 'dashboard' with the desired route name
//         } else {
//             // Authentication failed, redirect back to login with error message
//             return redirect()->route('Vip.login')->with('error', 'Invalid username or password');
//         }
//     }
// }

