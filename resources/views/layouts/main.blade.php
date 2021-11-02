<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> DC | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@200;300;700&display=swap" rel="stylesheet"> 
    @yield('cdn-import')
</head>
<body>
    @include('partials.header', ['header_links' => config ('header_main_menu')])

    <main>
        @yield('contenuto')
    </main>

    @include('partials.footer', ['dc_comics'=> config('footer_dc_comics'), 'dc_only' => config('footer_dc'),
     'sites_comics' => config('footer_sites')])

    @yield('script-adder')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>