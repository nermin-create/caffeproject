<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online shopping-@yield('title')</title>
</head>
<body>
    <div class="container">

    <header class="row">
        @include('header')
    </header>

    <div class="row">
        @yield('content')
    </div>
    <footer class="row">
        @include('footer')
    </footer>
    </div>
</body>
</html>