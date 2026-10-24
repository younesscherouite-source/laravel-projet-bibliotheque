<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Auteur</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('biblio.css') }}">
</head>
<body>
    <h1>Modifier Auteur</h1>

    <form action="/auteurs/{{ $auteur->id }}/update" method="POST">
        @csrf
        @method('PUT')

        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" value="{{ $auteur->nom }}" required>
        <br>

        <label for="prenom">Prenom:</label>
        <input type="text" name="prenom" id="prenom" value="{{ $auteur->prenom }}" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $auteur->email }}" required>
        <br>

        <label for="date_naissance">Date de naissance:</label>
        <input type="date" name="date_naissance" id="date_naissance" value="{{ $auteur->date_naissance }}">
        <br>

        <label for="nationalite">Nationalite:</label>
        <input type="text" name="nationalite" id="nationalite" value="{{ $auteur->nationalite }}">
        <br>

        <label for="actif">Actif:</label>
        <input type="checkbox" name="actif" id="actif" value="1" {{ $auteur->actif ? 'checked' : '' }}>
        <br>

        <button type="submit">Modifier</button>
    </form>
</body>
</html>
