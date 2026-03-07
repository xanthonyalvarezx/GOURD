<?php

namespace App\Http\Controllers;

use App\Models\Merch;
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
        $merch = Merch::orderBy('created_at', 'desc')->get();
        return view('merch', ['merch' => $merch]);
    }
    public function contact()
    {
        return view('contact');
    }
}
