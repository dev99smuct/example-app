<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our University</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Slick Slider CSS and JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <style>
        /* Tailwind CSS CDN */
        @import url('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');

        /* Custom CSS for header design */
        nav {
            backdrop-filter: blur(10px); /* Blur effect */
            transition: background-color 0.3s ease; /* Smooth transition for background color */
        }
        nav.scrolled {
            background-color: rgba(74, 85, 104, 0.5); /* More transparent background on scroll */
        }
        nav ul li a:hover {
            text-shadow: 0px 0px 5px rgba(255, 255, 255, 0.5);
        }

        /* Dropdown styles */
        .dropdown-menu {
            display: none;
            position: absolute;
            z-index: 10;
            top: 100%;
            left: 0;
            min-width: 160px;
            background-color: #fff;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px;
            border-radius: 4px;
        }
        .dropdown-menu.show {
            display: block;
        }
        .dropdown-menu a {
            display: block;
            padding: 8px 16px;
            color: #000;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .dropdown-menu a:hover {
            background-color: #f0f0f0;
        }
    </style>
    <script>
        // JavaScript to handle dropdown functionality
        document.addEventListener('DOMContentLoaded', function () {
            // Select the dropdown trigger element
            var departmentDropdown = document.querySelector('.department-dropdown');

            // Select the dropdown menu
            var dropdownMenu = document.querySelector('.dropdown-menu');

            // Event listener for mouseenter to show dropdown
            departmentDropdown.addEventListener('mouseenter', function () {
                dropdownMenu.classList.add('show');
            });

            // Event listener for mouseleave to hide dropdown (modified to keep menu open when moving to dropdown)
            document.addEventListener('mouseover', function (event) {
                // Check if the mouse is outside the dropdown and link
                if (!event.target.closest('.department-dropdown') && !event.target.closest('.dropdown-menu')) {
                    dropdownMenu.classList.remove('show');
                }
            });
        });
    </script>
    <link rel="alternate icon" class="js-site-favicon" type="image/png" href="{{ asset('/images/logo.png') }}">
</head>
<body class="bg-gray-100">

<nav class="text-black py-4 shadow-lg sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/" class="flex items-center space-x-2">
            <img src="{{ asset('/images/logo.png') }}" alt="University Logo" class="h-10">
        </a>

        <!-- Menu -->
        <ul class="flex flex-row space-x-4">

            <li><a href="{{ route('home') }}" class="hover:text-gray-300">Home</a></li>
                 <!-- Department Dropdown -->
                 <li class="relative">
                    <a href="#" class="department-dropdown hover:text-gray-300">Departments</a>
                    <div class="dropdown-menu">
                        <a href="{{ route('department', ['department' => 'CSE']) }}">CSE</a>
                        <a href="{{ route('department', ['department' => 'BBA']) }}">BBA</a>
                        <a href="{{ route('department', ['department' => 'GDM']) }}">GDM</a>
                        <a href="{{ route('department', ['department' => 'ENG']) }}">ENG</a>
                        <a href="{{ route('department', ['department' => 'IA']) }}">IA</a>
                        <a href="{{ route('department', ['department' => 'FDT']) }}">FDT</a>
                    </div>
                </li>
            <li><a href="https://smuct.ac.bd/" class="hover:text-gray-300">Website</a></li>
            <li><a href="https://smuct.ac.bd/contact/" class="hover:text-gray-300">Contact</a></li>


        </ul>
    </div>
</nav>

@include('components.hero_carousel')

<div class="container mx-auto p-4">
    <!-- Main content -->
    <div class="bg-white shadow-lg rounded-lg p-6 mb-4">
        <!-- Example content -->
        <h1 class="text-2xl font-bold text-gray-800">Welcome to Most Popular University in Bangladesh</h1>
        <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla felis odio, venenatis ac justo eget, efficitur vehicula felis. Fusce in tortor vel leo volutpat malesuada non in elit.</p>
    </div>

    <!-- Yielded content from Blade -->
    @yield('content')

    <!-- More content... -->
</div>

<footer class="bg-gray-800 text-white text-center py-4 mt-8">
    <div class="container mx-auto">
        &copy; {{ date('Y') }} Most popular university in Bangladesh | Powered by SMUCT Software Development Department. All rights reserved.
    </div>
</footer>

</body>
</html>
