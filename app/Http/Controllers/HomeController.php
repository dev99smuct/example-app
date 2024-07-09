<?php

namespace App\Http\Controllers;
use App\Models\HeroCarousel;

use Illuminate\Http\Request;
use App\Models\Slide; 

class HomeController extends Controller
{
    public function index()
    {
        $slides = Slide::all();

        $hero_carousels = HeroCarousel::all();

        return view('welcome', compact('slides', 'hero_carousels'));
    }
}
