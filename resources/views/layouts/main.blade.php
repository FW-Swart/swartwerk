<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>

    <body class="">

        <div class="flex flex-col h-screen justify-between">

            <!-- Page Header -->
            <header class="h-20 bg-red-500">
                @include('layouts.partials.header')
            </header>

            <!-- Page Content -->
            <main class="h-full overflow-y-auto bg-yellow-200">
                @yield('content')
            </main>

            <!-- Page Footer -->
            <footer class="h-20 bg-blue-500">
                @include('layouts.partials.footer')
            </footer>

        </div>

         <!-- Scripts -->

    </body>
</html>
