<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our University</title>
    <style>
        /* Tailwind CSS CDN */
        @import url('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');

        /* Custom CSS for header design */
        nav {
            background-color: rgba(74, 85, 104, 0.9); /* Initial semi-transparent background */
            backdrop-filter: blur(10px); /* Blur effect */
            transition: background-color 0.3s ease; /* Smooth transition for background color */
        }
        nav.scrolled {
            background-color: rgba(74, 85, 104, 0.5); /* More transparent background on scroll */
        }
        nav ul li a:hover {
            text-shadow: 0px 0px 5px rgba(255, 255, 255, 0.5);
        }
    </style>
    <script>
        // JavaScript to add scroll event listener
        document.addEventListener('DOMContentLoaded', function () {
            window.addEventListener('scroll', function () {
                var nav = document.querySelector('nav');
                nav.classList.toggle('scrolled', window.scrollY > 0);
            });
        });
    </script>
</head>
<body class="bg-gray-100">

<nav class="bg-gray-800 text-white py-4 shadow-lg sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/" class="flex items-center space-x-2">
            <img src="{{ asset('app/images/logo.png') }}" alt="University Logo" class="h-10">

        </a>

        <!-- Menu -->
        <ul class="flex flex-row space-x-4">
            <li><a href="{{ route('home') }}" class="hover:text-gray-300">Home</a></li>
            <li><a href="https://smuct.ac.bd/" class="hover:text-gray-300">Website</a></li>
            <li><a href="https://smuct.ac.bd/contact/" class="hover:text-gray-300">Contact</a></li>
        </ul>
    </div>
</nav>


{{-- kamrul aikhan a kaj korba --}}
<div class="container mx-auto p-4">

    <!-- Main content -->
    <div class="h-64 bg-white shadow-lg rounded-lg p-6 mb-4">
        <!-- Example content -->
        <h1 class="text-2xl font-bold text-gray-800">Welcome to Most Popular University in Bangladesh</h1>
        <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla felis odio, venenatis ac justo eget, efficitur vehicula felis. Fusce in tortor vel leo volutpat malesuada non in elit.</p>
    </div>

    <div class="container mx-auto p-4">
        @yield('content')
    </div>

    <!-- More content... -->
</div>

<footer class="bg-gray-800 text-white text-center py-4 mt-8">
    <div class="container mx-auto">
        &copy; {{ date('Y') }}Most popular university in Bangladesh | Powered by SMUCT Software Development Department. All rights reserved.
    </div>
</footer>

</body>
</html>
