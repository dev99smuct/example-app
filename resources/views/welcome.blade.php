<!-- Example: welcome.blade.php -->
@extends('layouts.app')

@section('content')

      <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">

    @foreach ($slides->groupBy('subcategory') as $subcategory => $slidesBySubcategory)
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
