<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1> {{ $pageTitle }} </h1>

    <p>{{ $description }}</p>

    <ul>
        @foreach ($games as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    <a href="/">Home</a>

</body>

</html>
