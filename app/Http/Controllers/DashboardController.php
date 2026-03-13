<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Merch;
use App\Models\Messages;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function adminPage()
    {
        return view('dashboard.admin');
    }

    public function addMerch()
    {
        return view('dashboard.add-merch');
    }

    public function storeMerch(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'description' => 'nullable|string',
        ]);

        $data = [
            'title' => $validated['title'],
            'price' => $validated['price'],
            'quantity' => $validated['quantity'],
            'description' => $validated['description'] ?? null,
        ];

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('merch', 'public');
            $data['image'] = $path;
        }

        Merch::create($data);

        return redirect()->route('addMerch')->with('success', 'Merch added successfully.');
    }

    public function getMerch()
    {
        $merch = Merch::all();
        return view('merch', ['merch' => $merch]);
    }

    public function addEvents()
    {
        return view('dashboard.add-events');
    }

    public function storeEvents(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'location' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'ticket_link' => 'nullable|string',
        ], [
            'title.required' => 'Please enter an event title.',
            'date.required' => 'Please select a date.',
            'time.required' => 'Please select a time.',
            'time.date_format' => 'Time must be in HH:MM format.',
        ]);

        $data = [
            'title' => $validated['title'],
            'date' => $validated['date'],
            'time' => $validated['time'],
            'location' => $validated['location'] ?? '',
            'description' => $validated['description'] ?? '',
            'ticket_link' => $validated['ticket_link'] ?? '',
        ];

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('events', 'public');
        } else {
            $data['image'] = '';
        }

        Events::create($data);

        return redirect()->route('addEvents')->with('success', 'Event added successfully.');
    }

    public function saveMessage(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ], [
            'name.required' => 'Please enter your name.',
            'email.required' => 'Please enter your email.',
            'email.email' => 'Please enter a valid email address.',
            'message.required' => 'Please enter a message.',
        ]);

        Messages::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);

        return redirect()->route('contact')->with('success', 'Message sent successfully.');
    }

    public function deleteMessage($id)
    {
        Messages::find($id)->delete();
        return redirect()->route('viewMessages')->with('success', 'Message deleted successfully.');
    }
}
