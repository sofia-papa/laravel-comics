<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> DC | @yield('title')</title>
    <link rel="stylesheet" href="{{ assets('css/app.css') }}">
</head>
<body>
    @include('partials.header')

    <main>
        @yield('contenuto')
    </main>

    @include('partials.footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>