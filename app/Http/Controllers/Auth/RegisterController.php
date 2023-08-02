<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function getRegister()
    {
        return view('Auth.signup');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            // 'id' => ['required', 'string', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5'],
            'role' => ['required', 'in:admin,training,trainer'],
        ]);
    }

    protected function postRegister(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User();
        // $user->id = $request->input('id');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->role = $request->input('role');
        $user->save();

        // After successful registration, log in the user and redirect to the dashboard
        Auth::login($user);
        return redirect()->route('Auth.getLogin')->with('success', 'Registration successful!'); // Replace 'dashboard' with the desired route name for the dashboard page
    }
}
