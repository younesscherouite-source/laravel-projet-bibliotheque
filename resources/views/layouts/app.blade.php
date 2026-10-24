<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Bibliotheque') }}</title>

        <link rel="stylesheet" href="{{ asset('app.css') }}">
    </head>
    <body class="app-body">
        @include('layouts.navigation')

        @isset($header)
            <header class="page-header">
                <div class="container">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <main class="container">
            {{ $slot }}
        </main>
    </body>
</html>
