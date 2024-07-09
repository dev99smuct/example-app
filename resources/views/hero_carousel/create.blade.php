

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Slider Image</title>
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">

</head>
<body>
    <div class="card">
        <h1>Home Image Slider</h1>

        @if(session('success'))
            <p class="success-message">{{ session('success') }}</p>
        @endif

        <form action="{{ route('hero_carousel.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>


            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required>

            <button type="submit">Upload</button>
        </form>

        <a href="{{ route('home') }}" class="home-link">Home</a>
    </div>
</body>
</html>
