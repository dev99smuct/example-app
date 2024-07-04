<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;

class SliderController extends Controller
{
    public function create()
    {
        return view('slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max file size if needed
        ]);

        // Handle file upload
        $imagePath = $request->file('image')->store('slider_images', 'public');

        // Save to database
        Slide::create([
            'title' => $request->title,
            'image' => '/storage/' . $imagePath,
        ]);

        return redirect()->route('slider.create')->with('success', 'Slide uploaded successfully.');
    }
}
