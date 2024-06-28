<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Card Laravel</title>
</head>

<body>
    <div class="container">
        @foreach ($list as $element)
            <div class="card">
                <img src="{{ $element['thumb'] }}" alt="">
                <h3>{{ $element['series'] }}</h3>
                <p>{{ $element['description'] }}</p>
            </div>
        @endforeach

    </div>
</body>

</html>
