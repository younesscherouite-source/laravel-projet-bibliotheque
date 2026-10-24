<x-app-layout>
    <x-slot name="header">
        <h1 class="page-title">{{ __('Dashboard') }}</h1>
    </x-slot>

    <div class="card">
        <h2>Bonjour, {{ Auth::user()->name }} 👋</h2>
        <p class="muted">{{ __("You're logged in!") }}</p>

        <a href="{{ route('auteurs.index') }}" class="btn">Voir les auteurs</a>
        <a href="{{ route('livres.index') }}" class="btn">Voir les livres</a>
    </div>
</x-app-layout>
