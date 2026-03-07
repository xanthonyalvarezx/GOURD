<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function landing()
    {
        return view('landing');
    }
    public function about()
    {
        return view('about');
    }
    public function merch()
    {
        return view('merch');
    }
    public function contact()
    {
        return view('contact');
    }
}
