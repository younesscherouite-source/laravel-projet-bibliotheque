<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Auteur</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('biblio.css') }}">
</head>
<body>
    <h1>Ajouter Auteur</h1>

    <form action="/auteurs/store" method="POST">
        @csrf

        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" required>
        <br>

        <label for="prenom">Prenom:</label>
        <input type="text" name="prenom" id="prenom" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>

        <label for="date_naissance">Date de naissance:</label>
        <input type="date" name="date_naissance" id="date_naissance">
        <br>

        <label for="nationalite">Nationalite:</label>
        <input type="text" name="nationalite" id="nationalite">
        <br>

        <label for="actif">Actif:</label>
        <input type="checkbox" name="actif" id="actif" value="1">
        <br>

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
