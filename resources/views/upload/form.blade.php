<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meta Post Upload</title>
</head>
<body>
    <form method="POST" action="{{route('upload.post')}}">
        @csrf
        <div>
            <label for="content">Content:</label>
            <input type="text" name="content" id="content" required>
        </div>
        <div>
            <label for="image">Image</label>
            <input type="file" required name="image" id="image">
        </div>
        <div>
            <button type="submit">Post</button>
        </div>
    </form>
</body>
</html>