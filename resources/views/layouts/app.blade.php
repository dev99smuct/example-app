<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our University</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>


<body class="bg-gray-100">


<nav class="bg-gray-800 text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="/" class="flex items-center space-x-2">
            <img src="{{ asset('resources/images/logo.png') }}" alt="University Logo" class="h-8">
            <span class="font-semibold text-lg">University Name</span>
        </a>

        <!-- Menu -->
        <ul class="flex space-x-4">
            <li><a href="{{ route('home') }}" class="hover:text-gray-300">Home</a></li>
            <li><a href="" class="hover:text-gray-300">Website</a></li>
            <li><a href="" class="hover:text-gray-300">Contact</a></li>
        </ul>
    </div>
</nav>



    <div class="container mx-auto p-4">
        @yield('content')
    </div>

    <footer class="bg-gray-800 text-white text-center py-4">
        <div class="container mx-auto">
            &copy; {{ date('Y') }} University Name. All rights reserved.
        </div>
    </footer>
</body>
</html>
