<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\HeroCarousel;

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
            'department' => 'required|string',
            'subcategory' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:32768',
        ]);


        $imagePath = $request->file('image')->store('slider_images', 'public');


        Slide::create([
            'title' => $request->title,
            'department' => $request->department,
            'subcategory' => $request->subcategory,
            'image' => '/storage/' . $imagePath,
        ]);

        return redirect()->route('slider.create')->with('success', 'Slide uploaded successfully.');
    }


    public function showDepartment($department)
    {

        $slides = Slide::where('department', $department)->get()->groupBy('subcategory');


        $hero_carousels = HeroCarousel::all();

     
        return view('department.show', compact('slides', 'hero_carousels', 'department'));
    }
}
