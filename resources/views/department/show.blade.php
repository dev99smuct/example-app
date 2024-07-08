@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-4">{{ ucfirst($department) }} Department</h1>

    <link rel="stylesheet" href="{{ asset('css/department.css') }}">



    @foreach ($slides as $subcategory => $slidesBySubcategory)
    <div>
        <h3 class="subcategory-title">{{ ucfirst($subcategory) }}</h3>
        <div class="grid">
            @foreach ($slidesBySubcategory as $slide)
                <div class="border">
                    <a href="{{ asset($slide->image) }}" data-lightbox="image-{{ $slide->id }}" data-title="{{ $slide->title }}">
                        <img src="{{ asset($slide->image) }}" alt="{{ $slide->title }}">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endforeach

<!-- Include necessary JavaScript for lightbox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
@endsection
