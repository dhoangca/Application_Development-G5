<?php

namespace App\Http\Controllers\Display;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserModel;

class ProfileMGMTController extends Controller
{
    public function ViewProfile()
    {
        // Get the currently logged-in user
        $user = auth()->user();

        // Get the trainers associated with the user
        $trainers = $user->trainers;

        return view('TrainerRole.profile', compact('trainers'));
    }

    // public function updateProfile(Request $request)
    // {
    //     // Validate the form data for User section (username and email)
    //     // dd($GLOBALS);
    //     $request->validate([
    //         'username' => 'required|unique:users,username,' . Auth::user()->id,
    //         'email' => 'required|email|unique:users,email,' . Auth::user()->id,
    //         // Add validation rules for Trainer section fields as needed
    //         'fname' => 'required',
    //         'lname' => 'required',
    //         'age' => 'nullable|integer',
    //         'date_of_birth' => 'nullable|date',
    //         'telephone' => 'nullable|string',
    //         'working_place' => 'nullable|string',
    //         'address' => 'nullable|string',
    //         'about' => 'nullable|string',
    //     ]);

    //     // Get the currently logged-in user
    //     $user = Auth::user();

    //     // Update User section data (username and email)

    //     $user->username = $request->input('username');
    //     $user->email = $request->input('email');
    //     $user->save();

    //     // Update Trainer section data
    //     if ($user->trainers) {
    //         $trainerData = $request->only(['fname', 'lname', 'age', 'date_of_birth', 'telephone', 'working_place', 'address', 'about']);
    //         $user->trainers()->update($trainerData);
    //     } else {
    //         $trainerData = $request->only(['fname', 'lname', 'age', 'date_of_birth', 'telephone', 'working_place', 'address', 'about']);
    //         $user->trainers()->create($trainerData);
    //     }

    //     return redirect()->route('Trainer.ViewProfile')->with('success', 'Profile updated successfully.');
    // }

    public function updateProfile(Request $request)
    {
        // Validate the form data for User section (username and email)
        $request->validate([
            'username' => 'required|unique:users,username,' . Auth::user()->id,
            'email' => 'required|email|unique:users,email,' . Auth::user()->id,
            // Add validation rules for Trainer section fields as needed
            'fname' => 'required',
            'lname' => 'required',
            'age' => 'nullable|integer',
            'date_of_birth' => 'nullable|date',
            'telephone' => 'nullable|string',
            'working_place' => 'nullable|string',
            'address' => 'nullable|string',
            'about' => 'nullable|string',
        ]);

        // Get the currently logged-in user
        $user = UserModel::findOrFail(Auth::user()->id);

        // Update User section data (username and email)
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->save();

        // Update Trainer section data
        if ($user->trainers()->count()) {
            $trainerData = $request->only(['fname', 'lname', 'age', 'date_of_birth', 'telephone', 'working_place', 'address', 'about']);
            $user->trainers()->update($trainerData);
        } else {
            $trainerData = $request->only(['fname', 'lname', 'age', 'date_of_birth', 'telephone', 'working_place', 'address', 'about']);
            $user->trainers()->create($trainerData);
        }

        return redirect()->route('Trainer.ViewProfile')->with('success', 'Profile updated successfully.');
    }
}
