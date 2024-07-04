<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our University</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="bg-gray-100">
    <nav class="bg-gray-800 text-white p-4">
        <div class="container mx-auto">
            <a href="/" class="font-semibold text-lg">University Name</a>
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
