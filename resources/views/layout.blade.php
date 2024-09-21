<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Load Vite CSS -->
    @vite('resources/css/app.css')
</head>
<body>
    <x-header></x-header>

    <main>
        @yield('content')
    </main>

    <x-footer></x-footer>

    <!-- Load Vite JS -->
    @vite('resources/js/app.js')
</body>
</html>

