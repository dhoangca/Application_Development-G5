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



        return view('TrainerRole.profile');
    }

    public function updateProfile(Request $request)
    {
       
        return redirect()->route('Trainer.ViewProfile')->with('success', 'Profile updated successfully.');
    }
}
