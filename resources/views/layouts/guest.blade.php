<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Bibliotheque') }}</title>

        <link rel="stylesheet" href="{{ asset('auth.css') }}">
    </head>
    <body class="auth-page">
        <div class="auth-wrapper">
            <a href="/" class="auth-brand">
                <span>📚</span>
                Bibliotheque
            </a>

            <div class="auth-card">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
