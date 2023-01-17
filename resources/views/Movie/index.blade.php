<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie</title>
</head>
<body>
    <table border="2">
    <tr>
      <thead>
        <th>Movie Name</th>      
        <th>Movie Description</th>
        <th>Movie Generation</th>
        <th>Action</th>
      </thead>
      @foreach ($movie as $item)
      <tbody> 
        <td>{{$item->movie_name}}</td>
        <td>{{$item->movie_description}}</td>
        <td>{{$item->movie_generation}}</td>
        <td>
            <a href="{{route('Movie.edit' , $item->id)}}">Edit</a><br>
            <a href="">Delate</a>
        </td>
      </tbody>
      @endforeach
    </tr>
</table>
</body>
</html>