<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Livre</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('biblio.css') }}">
</head>
<body>
    <h1>Ajouter Livre</h1>

    <form action="/livres/store" method="POST">
        @csrf

        <label for="auteur_id">Auteur:</label>
        <select name="auteur_id" id="auteur_id" required>
            <option value="">Choisir un auteur</option>
            @foreach($auteurs as $auteur)
                <option value="{{ $auteur->id }}">{{ $auteur->nom }} {{ $auteur->prenom }}</option>
            @endforeach
        </select>
        <br>

        <label for="titre">Titre:</label>
        <input type="text" name="titre" id="titre" required>
        <br>

        <label for="isbn">ISBN:</label>
        <input type="text" name="isbn" id="isbn" required>
        <br>

        <label for="prix">Prix:</label>
        <input type="number" step="0.01" name="prix" id="prix" required>
        <br>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock" value="0">
        <br>

        <label for="date_publication">Date de publication:</label>
        <input type="date" name="date_publication" id="date_publication">
        <br>

        <label for="disponible">Disponible:</label>
        <input type="checkbox" name="disponible" id="disponible" value="1">
        <br>

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
