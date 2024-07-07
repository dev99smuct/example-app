<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Slider Image</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        .card h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .card form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card form label {
            margin-bottom: 8px;
        }

        .card form input[type="text"],
        .card form select,
        .card form input[type="file"],
        .card form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .card form button {
            background-color: #0836cc;
            color: white;
            border: none;
            cursor: pointer;
        }

        .card form button:hover {
            background-color: #6fc5f7;
        }

        .success-message {
            color: #0836cc;
            margin-top: 10px;
        }

        .home-link {
            display: inline-block;
            margin-top: 10px;
            color: #333;
            text-decoration: none;
            border: 1px solid #ccc;
            padding: 8px 16px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .home-link:hover {
            background-color: #f0f0f0;
        }
    </style>
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

            <label for="category">Category:</label>
            <select id="category" name="category" required>
                <option value="Sports">Sports</option>
                <option value="Study">Study</option>
                <option value="Fest">Fest</option>
            </select>

            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required>

            <button type="submit">Upload</button>
        </form>

        <a href="{{ route('home') }}" class="home-link">Home</a>
    </div>
</body>
</html>
