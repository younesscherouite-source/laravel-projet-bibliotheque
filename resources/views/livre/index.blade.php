<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livres</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('biblio.css') }}">
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>
    <p><a href="/livres/create">Ajouter Livre</a></p>

    <table>
        <thead>
            <tr>
                <th>Auteur ID</th>
                <th>Titre</th>
                <th>ISBN</th>
                <th>Prix</th>
                <th>Stock</th>
                <th>Date Publication</th>
                <th>Disponible</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($livres as $livre)
                <tr>
                    <td>{{ $livre->auteur_id }}</td>
                    <td>{{ $livre->titre }}</td>
                    <td>{{ $livre->isbn }}</td>
                    <td>{{ $livre->prix }}</td>
                    <td>{{ $livre->stock }}</td>
                    <td>{{ $livre->date_publication }}</td>
                    <td>{{ $livre->disponible ? 'Oui' : 'Non' }}</td>
                    <td>
                        <a href="{{ route('livres.show', ['livre' => $livre]) }}">Voir</a>
                        <a href="{{ route('livres.edit', ['livre' => $livre]) }}">Modifier</a>
                        <a href="{{ route('livres.destroy', ['livre' => $livre]) }}">Supprimer</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
