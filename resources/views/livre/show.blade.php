<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('biblio.css') }}">
</head>
<body>
    <h1>Livre</h1>

    <p>Auteur ID: {{ $livre->auteur_id }}</p>
    <p>Titre: {{ $livre->titre }}</p>
    <p>ISBN: {{ $livre->isbn }}</p>
    <p>Prix: {{ $livre->prix }}</p>
    <p>Stock: {{ $livre->stock }}</p>
    <p>Date publication: {{ $livre->date_publication }}</p>
    <p>Disponible: {{ $livre->disponible ? 'Oui' : 'Non' }}</p>

    <p><a href="/livres">Retour</a></p>
</body>
</html>
