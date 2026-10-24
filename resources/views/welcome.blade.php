<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

       <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('biblio.css') }}">
    </head>
    <body>
        <h1>Bienvenue sur la page d'accueil</h1>
        <a href="{{ route('auteurs.index') }}">Voir la liste des auteurs</a>
        <a href="{{ route('auteurs.create') }}">Ajouter un auteur</a>
        <a href="{{ route('livres.index') }}">Voir la liste des livres</a>
        <a href="{{ route('livres.create') }}">Ajouter un livre</a>
    </body>
</html>