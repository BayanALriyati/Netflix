<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie</title>
</head>
<body>
    {{-- dd("hello") --}}

    <h1>Create table the movies</h1>
    <form action="{{route('Movie.index')}}" method="POST">
        @csrf
<input type="text" name="movie_name" placeholder="Enter Name Movie"><br><br>
<input type="text" name="movie_description" placeholder="Enter Description"><br><br>
<input type="text" name="movie_generation" placeholder="Enter Generation"><br><br>
<button type="submit"> Submit </button>
      
    </form>
</body>
</html>