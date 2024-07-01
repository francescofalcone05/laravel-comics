<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Laravel Comics</title>
</head>

<body>
    <header>
        @include('partials/header')
        {{-- provo ad accedere ad un altra pagina tramite il link --}}
        <a href="{{ url('/about') }}">go to this page</a>
    </header>

    <main>
        @include('card')
    </main>
</body>

</html>
