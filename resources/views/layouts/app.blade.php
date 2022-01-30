<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        @stack('styles')

        <style>
         @import url('https://fonts.googleapis.com/css2?family=Raleway&family=Ubuntu+Mono:wght@700&display=swap');
            body {
                font-family: 'Raleway', sans-serif;
            }
            h1, h2, h3, h4, h5, h6 {
                font-family: 'Ubuntu Mono', monospace;
            }
        </style>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
    </head>
    <body class="">
        <div>
            @include('layouts.includes.nav')   
            @yield('content')

        </div>
        @stack('scripts')
    </body>
</html>
