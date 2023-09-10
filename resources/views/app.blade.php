<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comic App</title>
    <!-- Includi stili CSS con Sass -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    @include('header')

    <div class="container">
        @yield('content')
    </div>

    @include('footer')
</body>
</html>
