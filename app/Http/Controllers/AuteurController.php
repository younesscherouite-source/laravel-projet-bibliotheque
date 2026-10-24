<?php

namespace App\Http\Controllers;

use App\Models\Auteur;
use Illuminate\Http\Request;

class AuteurController extends Controller
{
    public function index()
    {
        $auteurs = Auteur::all();

        return view('auteur.index', compact('auteurs'));
    }

    public function create()
    {
        return view('auteur.create');
    }

    public function store(Request $request)
    {
        $auteur = new Auteur();

        $auteur->nom = $request->nom;
        $auteur->prenom = $request->prenom;
        $auteur->email = $request->email;
        $auteur->date_naissance = $request->date_naissance;
        $auteur->nationalite = $request->nationalite;
        $auteur->actif = $request->has('actif');

        $auteur->save();

        return redirect('/auteurs');
    }

    public function show(Auteur $auteur )
    {

        return view('auteur.show', compact('auteur'));
    }

    public function edit(Auteur $auteur)
    {
        return view('auteur.edit', compact('auteur'));
    }

    public function update(Request $request, Auteur $auteur)
    {
        $auteur->nom = $request->nom;
        $auteur->prenom = $request->prenom;
        $auteur->email = $request->email;
        $auteur->date_naissance = $request->date_naissance;
        $auteur->nationalite = $request->nationalite;
        $auteur->actif = $request->has('actif');

        $auteur->save();

        return redirect('/auteurs');
    }
    public function destroy(Auteur $auteur)
    {
        $auteur->delete();

        return redirect('/auteurs');
    }
}
