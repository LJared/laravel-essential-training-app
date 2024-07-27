<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello there from Laravel: {{ $name }}</h1>
    @if($name == 'Some Name')
        <p>You are the admin</p>
    @else
        <p>You are not the admin</p>
    @endif
</body>
</html>