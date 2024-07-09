<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\HeroCarousel;

class SliderController extends Controller
{
    // Method to return the slider creation view
    public function create()
    {
        return view('slider.create');
    }

    // Method to store a new slide record
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'department' => 'required|string',
            'subcategory' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:32768',
        ]);

        // Handle file upload
        $imagePath = $request->file('image')->store('slider_images', 'public');

        // Save to database
        Slide::create([
            'title' => $request->title,
            'department' => $request->department,
            'subcategory' => $request->subcategory,
            'image' => '/storage/' . $imagePath,
        ]);

        return redirect()->route('slider.create')->with('success', 'Slide uploaded successfully.');
    }

    // Method to show slides grouped by subcategory for a department
    public function showDepartment($department)
    {
        // Fetch slides grouped by subcategory for the specified department
        $slides = Slide::where('department', $department)->get()->groupBy('subcategory');

        // Fetch all hero carousels (you may adjust this query based on your application logic)
        $hero_carousels = HeroCarousel::all();

        // Return view with data
        return view('department.show', compact('slides', 'hero_carousels', 'department'));
    }
}
