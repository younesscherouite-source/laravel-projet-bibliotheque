<?php

namespace App\Http\Controllers;

use App\Models\Auteur;
use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function index()
    {
        $livres = Livre::all();

        return view('livre.index', compact('livres'));
    }

    public function create()
    {
        $auteurs = Auteur::all();

        return view('livre.create', compact('auteurs'));
    }

    public function store(Request $request)
    {
        $livre = new Livre();

        $livre->auteur_id = $request->auteur_id;
        $livre->titre = $request->titre;
        $livre->isbn = $request->isbn;
        $livre->prix = $request->prix;
        $livre->stock = $request->stock;
        $livre->date_publication = $request->date_publication;
        $livre->disponible = $request->has('disponible');

        $livre->save();

        return redirect('/livres');
    }

    public function show(Livre $livre)
    {

        return view('livre.show', compact('livre'));
    }

    public function edit(Livre $livre)
    {
        $auteurs = Auteur::all();

        return view('livre.edit', compact('livre', 'auteurs'));
    }

    public function update(Request $request, Livre $livre)
    {
        $livre->auteur_id = $request->auteur_id;
        $livre->titre = $request->titre;
        $livre->isbn = $request->isbn;
        $livre->prix = $request->prix;
        $livre->stock = $request->stock;
        $livre->date_publication = $request->date_publication;
        $livre->disponible = $request->has('disponible');

        $livre->save();

        return redirect('/livres');
    }

    public function destroy(Livre $livre)
    {
        $livre->delete();

        return redirect('/livres');
    }
}
