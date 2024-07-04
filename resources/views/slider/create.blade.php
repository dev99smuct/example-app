<!-- resources/views/slider/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Slider Image</title>
</head>
<body>
    <h1>Upload Slider Image</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br><br>

        <label for="image">Image:</label><br>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>

        <button type="submit">Upload</button>
    </form>
</body>
</html>
