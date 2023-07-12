<?php

namespace App\Http\Controllers\Display;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function index()
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
