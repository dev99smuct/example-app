<!-- resources/views/slider/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Slider Image</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">

</head>
<body>
    <div class="card">
        <h1>Smuct Image Gallery</h1>

        @if(session('success'))
            <p class="success-message">{{ session('success') }}</p>
        @endif

        <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="department">Department:</label>
            <select id="department" name="department" required>
                <option value="CSE">CSE</option>
                <option value="BBA">BBA</option>
                <option value="FDT">FDT</option>
                <option value="GDM">GDM</option>
                <option value="ENG">ENG</option>
                <option value="IA">IA</option>
                <!-- Add more departments as needed -->
            </select>

            <label for="subcategory">Subcategory:</label>
            <select id="subcategory" name="subcategory" required>
                <option value="sports">Sports</option>
                <option value="study">Study</option>
                <option value="fest">Fest</option>
                <!-- Add more subcategories as needed -->
            </select>

            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required>

            <button type="submit">Upload</button>
        </form>

        <a href="{{ route('home') }}" class="home-link">Home</a>
    </div>
</body>
</html>
