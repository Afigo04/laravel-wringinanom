<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        return view('home');
    }

    public function profile()
    {
        return view('profile');
    }

    public function history()
    {
        return view('history');
    }

    public function agenda()
    {
        return view('agenda');
    }
}
