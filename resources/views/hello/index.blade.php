<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INI adalah views</title>
</head>
<body>
    <h1>Nama Saya adalah : {{ $nama }}</h1>
    <ul>
        @foreach ($pelajaran as $pl)
            <li>{{ $pl }}</li>
        @endforeach
    </ul>
</body>
</html>