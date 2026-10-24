<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auteurs</title>
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
    <p><a href="/auteurs/create">Ajouter Auteur</a></p>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Date Naissance</th>
                <th>Nationalite</th>
                <th>Actif</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($auteurs as $auteur)
                <tr>
                    <td>{{ $auteur->nom }}</td>
                    <td>{{ $auteur->prenom }}</td>
                    <td>{{ $auteur->email }}</td>
                    <td>{{ $auteur->date_naissance }}</td>
                    <td>{{ $auteur->nationalite }}</td>
                    <td>{{ $auteur->actif ? 'Oui' : 'Non' }}</td>
                    <td>
                        <a href="{{ route('auteurs.show', ['auteur' => $auteur]) }}">Voir</a>
                        <a href="{{ route('auteurs.edit', ['auteur' => $auteur]) }}">Modifier</a>
                        <a href="{{ route('auteurs.destroy', ['auteur' => $auteur]) }}">Supprimer</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
 