<x-app-layout>
    <x-slot name="header">
        <h1 class="page-title">{{ __('Profile') }}</h1>
    </x-slot>

    <div class="card">
        @include('profile.partials.update-profile-information-form')
    </div>

    <div class="card">
        @include('profile.partials.update-password-form')
    </div>

    <div class="card">
        @include('profile.partials.delete-user-form')
    </div>
</x-app-layout>
