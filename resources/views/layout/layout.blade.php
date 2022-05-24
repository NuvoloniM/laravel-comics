<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- collego file stile che si crea in public -->
    <link rel="stylesheet" href=" {{ asset('css/app.css') }}">
    <title>DC Comics : @yield('title')</title>
</head>
<body>
    <!-- header -->
    @include('partials.header')
    <!-- main -->
    <main>

        <!-- sezione jumbotron -->
        @include('partials.hero')
        <!-- seztione del contenuto principale, uso yield perchè varia a seconda della pagina -->
        @yield('content')
        <!-- sezione link per lo shop -->
        @include('partials.shop')
    </main>

    <!-- Footer -->
    @include('partials.footer')

</body>
</html>