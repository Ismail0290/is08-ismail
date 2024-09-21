<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Portfolio' }}</title>

    <!-- Load Vite CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 dark:bg-gray-800">

    <x-header />

    <main class="max-w-7xl mx-auto py-8 px-6">
        {{ $slot }}
    </main>

    <x-footer />

    <!-- Load Vite JS -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
</body>
</html>
