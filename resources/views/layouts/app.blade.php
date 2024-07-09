<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our University</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    <script>

        document.addEventListener('DOMContentLoaded', function () {

            var departmentDropdown = document.querySelector('.department-dropdown');


            var dropdownMenu = document.querySelector('.dropdown-menu');


            departmentDropdown.addEventListener('mouseenter', function () {
                dropdownMenu.classList.add('show');
            });


            document.addEventListener('mouseover', function (event) {

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


        <ul class="flex flex-row space-x-4">

            <li><a href="{{ route('home') }}" class="hover:text-gray-300">Home</a></li>

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

    <div class="bg-white shadow-lg rounded-lg p-6 mb-4">
        <!-- Example content -->
        <h1 class="text-2xl font-bold text-gray-800">SMUCT PHOTO GALLERY</h1>
        <p class="mt-2 text-gray-600">Welcome to Most Popular University in Bangladesh</p>
    </div>


    @yield('content')

 
</div>

<footer class="bg-gray-800 text-white text-center py-4 mt-8">
    <div class="container mx-auto">
        &copy; {{ date('Y') }} Most popular university in Bangladesh | Powered by SMUCT Software Development Department. All rights reserved.
    </div>
</footer>

</body>
</html>
