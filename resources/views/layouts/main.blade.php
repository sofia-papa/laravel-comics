<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> DC | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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