<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Livre</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('biblio.css') }}">
</head>
<body>
    <h1>Modifier Livre</h1>

    <form action="/livres/{{ $livre->id }}/update" method="POST">
        @csrf
        @method('PUT')

        <label for="auteur_id">Auteur:</label>
        <select name="auteur_id" id="auteur_id" required>
            @foreach($auteurs as $auteur)
                <option value="{{ $auteur->id }}" {{ $livre->auteur_id == $auteur->id ? 'selected' : '' }}>
                    {{ $auteur->nom }} {{ $auteur->prenom }}
                </option>
            @endforeach
        </select>
        <br>

        <label for="titre">Titre:</label>
        <input type="text" name="titre" id="titre" value="{{ $livre->titre }}" required>
        <br>

        <label for="isbn">ISBN:</label>
        <input type="text" name="isbn" id="isbn" value="{{ $livre->isbn }}" required>
        <br>

        <label for="prix">Prix:</label>
        <input type="number" step="0.01" name="prix" id="prix" value="{{ $livre->prix }}" required>
        <br>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock" value="{{ $livre->stock }}">
        <br>

        <label for="date_publication">Date de publication:</label>
        <input type="date" name="date_publication" id="date_publication" value="{{ $livre->date_publication }}">
        <br>

        <label for="disponible">Disponible:</label>
        <input type="checkbox" name="disponible" id="disponible" value="1" {{ $livre->disponible ? 'checked' : '' }}>
        <br>

        <button type="submit">Modifier</button>
    </form>
</body>
</html>
