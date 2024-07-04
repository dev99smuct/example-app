<!-- resources/views/welcome.blade.php -->

@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Welcome to Our University</h1>

    <p class="mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus ultricies magna, at commodo ex hendrerit sit amet.</p>

    <div class="grid grid-cols-4 gap-4">
        @foreach ($slides as $slide)
            <div class="border rounded overflow-hidden">
                <img src="{{ asset($slide->image) }}" alt="{{ $slide->title }}" class="w-full">
                <div class="p-4">
                    <h2 class="font-semibold text-lg">{{ $slide->title }}</h2>
                </div>
            </div>
        @endforeach
    </div>
@endsection
