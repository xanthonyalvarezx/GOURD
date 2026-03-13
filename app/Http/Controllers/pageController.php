<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Merch;
use App\Models\Messages;
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
    public function events()
    {
        $events = Events::orderBy('date', 'desc')->get();
        return view('events', ['events' => $events]);
    }
    public function viewMessages()
    {
        $messages = Messages::orderBy('created_at', 'desc')->get();
        return view('dashboard.view-messages', ['messages' => $messages]);
    }

    public function loginPage()
    {
        return view('auth.login');
    }
}
