<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide; // Import the Slide model

class HomeController extends Controller
{
    public function index()
    {
        $slides = Slide::all(); // Fetch all slides from the database

        return view('welcome', compact('slides'));
    }
}
