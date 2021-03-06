<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/dk009dk/ChemHunt-2.0@master/public/css/app.css">

    <!-- Scripts  -->
    <script src="https://cdn.jsdelivr.net/gh/dk009dk/ChemHunt-2.0@master/public/js/app.js" defer></script>
</head>
<body class="font-sans font-bold bg-blue-300">
<div class="antialiased">
    <div class="antialiased">
        <div>
            @include('layouts.chemhunt-logo')
            {{ $slot }}
            @include('layouts.footer')
        </div>
    </div>
</div>
</body>
</html>
