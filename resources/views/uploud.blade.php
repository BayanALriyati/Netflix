<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <form action="{{route('photo.save')}}" method="POST" enctype="multipart/form-data" class="form">

        @csrf
     
        <input type="file" name="photo"><br>
        <button type="submit">Submit</button>
        
    </form>
    
</body>
</html>





