<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NewHome</title>
</head>
<body>
    <h1>{{$benvenuto}}</h1>

    <h3>to do list</h3>

    <p>  
        @foreach ($lista as $item) 
         {{$item}}
         @endforeach
    </p>  
   
</body>
</html>