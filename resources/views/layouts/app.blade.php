<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Penguins on Road') }}</title>
        <link rel="stylesheet" href="{{ asset('css/styles-menu.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles-bus.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles-ticket.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles-login.css') }}">
        <link rel="stylesheet" href="{{ asset ('css/style-menu.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,300&display=swap" rel="stylesheet">
        @yield ('css-personalizado')

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @if (Auth::check())
                @role('Administrador')
                    @include('layouts.navigation')
                @endrole

                @role('Chofer')
                     @include('layouts.navigation_chofer')
                @endrole

                @role('Pasajero')
                      @include('layouts.navigation_pasajero')
                @endrole
            @endif

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{$slot}}
            </main>
        </div>
    </body>
</html>
