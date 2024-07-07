@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-4">SMUCT- Photo Gallery</h1>

    <p class="mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus ultricies magna, at commodo ex hendrerit sit amet.</p>

    <style>
        .grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 4 columns with equal width */
            gap: 20px; /* Gap between grid items */
        }

        .grid .border {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }

        .grid .border img {
            padding: 2px;
            width: 100%; /* Make the image fill its container */
            height: 200px;
            display: block;
            transition: transform 0.3s ease;
            object-fit: cover; /* Smooth transform effect */
        }

        .grid .border:hover img {
            transform: scale(1.05); /* Scale up image on hover */
        }

        .grid .border .p-4 {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
            color: white;
            padding: 8px;
            text-align: center;
        }

        .grid .border .p-4 h2 {
            margin: 0;
            font-size: 1.1rem;
            font-weight: 600;
        }

        .subcategory-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin: 10px 0;
            padding-bottom: 5px;
            border-bottom: 1px solid #ddd;
        }
    </style>

    @foreach ($slides->groupBy('subcategory') as $subcategory => $slidesBySubcategory)
        <div>
            <h3 class="subcategory-title">{{ ucfirst($subcategory) }}</h3>
            <div class="grid">
                @foreach ($slidesBySubcategory as $slide)
                    <div class="border">
                        <img src="{{ asset($slide->image) }}" alt="{{ $slide->title }}">

                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
@endsection
