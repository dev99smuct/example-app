<?php

namespace App\Http\Controllers;
use App\Models\HeroCarousel;

use Illuminate\Http\Request;

class HeroCarouselController extends Controller
{
    public function create()
    {
        return view('hero_carousel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:32768',
        ]);

      
        $imagePath = $request->file('image')->store('hero_carousel', 'public');


        HeroCarousel::create([
            'title' => $request->title,
            'image' => '/storage/' . $imagePath,
        ]);

        return redirect()->route('hero_carousel.create')->with('success', 'Slide uploaded successfully.');
    }
}
