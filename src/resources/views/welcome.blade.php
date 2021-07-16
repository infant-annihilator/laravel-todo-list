<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-gradient-to-r from-pink-300 to-red-300">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>// TODO</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            body {
                font-family: 'Consolas', monospace;
            }
        </style>
    </head>

    <body>
        <div id="app">
            <app></app>
        </div>
    </body>

    <script src="{{ mix('js/app.js') }}"></script>
</html>
