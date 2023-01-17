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
    <h1>Edit table the movies</h1>
    <form action="{{route('Movie.update',$movie->id)}}" method="POST">
        @method('PUT')
        @csrf
<input type="text" name="movie_name" value="{{($movie->movie_name)}}"><br><br>
<input type="text" name="movie_description" value="{{($movie->movie_description)}}"><br><br>
<input type="text" name="movie_generation" value="{{($movie->movie_generation)}}"><br><br>
<button type="submit"> Update </button>
      
    </form>
</body>
</html>