<?php

namespace App\Http\Controllers;

use App\Models\Merch;
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
}
