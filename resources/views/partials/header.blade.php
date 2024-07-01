<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>

        <div class="header-container">
            <div>
                <img src="/comic-art-logo.jpg" alt="">
            </div>
            <div>
                @if (Route::currentRouteName() !== 'hompage')
                    <a href="{{ route('hompage') }}">HOME</a>
                @endif
                @if (Route::currentRouteName() !== 'comics-list')
                    <a href="{{ route('comics-list') }}">COMICS</a>
                @endif
            </div>
        </div>

    </section>

</body>

</html>
