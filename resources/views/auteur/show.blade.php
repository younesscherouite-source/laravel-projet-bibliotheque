<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auteur</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('biblio.css') }}">
</head>
<body>
    <h1>Auteur</h1>
    <p>Nom: {{ $auteur->nom }}</p>
    <p>Prenom: {{ $auteur->prenom }}</p>
    <p>Email: {{ $auteur->email }}</p>
    <p>Date de naissance: {{ $auteur->date_naissance }}</p>
    <p>Nationalite: {{ $auteur->nationalite }}</p>
    <p>Actif: {{ $auteur->actif ? 'Oui' : 'Non' }}</p>
    <p><a href="/auteurs">Retour</a></p>
</body>
</html>
