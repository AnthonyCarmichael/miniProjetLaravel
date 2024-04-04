<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="py-12 bg-white">
            <div class="p-6 text-gray-900 space-y-4">
                <h2>Merci pour votre {{ $choix }}</h1>
                <p><b>Sujet </b>: {{ $sujet }}</p>
                <p><b>Message </b>: {{ $messages }}</p>
                <p class="text-xs">* Il est possible qu'un agent vous contacte éventuellement.</p>
            </div>
        </div>
    </body>
</html>

