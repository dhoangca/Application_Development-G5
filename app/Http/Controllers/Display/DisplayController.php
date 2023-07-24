<?php

namespace App\Http\Controllers\Display;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function welcome()
    {
        return view('Contents.welcome');
    }
    
    public function indexAdmin()
    {
        return view('Contents.indexAdmin');
    }

    public function indexTraining()
    {
        return view('Contents.dashboard');
    }

    public function indexTrainer()
    {
        return view('Contents.dashboard');
    }

    public function dashboard()
    {
        return view('Contents.Dashboard');
    }
    public function notifications()
    {
        return view('Contents.notifications');
    }
    public function tables()
    {
        return view('Contents.tables');
    }
    public function user()
    {
        return view('Contents.user');
    }

}
