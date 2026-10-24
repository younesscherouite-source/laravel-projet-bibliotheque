<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Livre;

class Auteur extends Model
{
    protected $table = 'auteurs';

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'date_naissance',
        'nationalite',
        'actif',
    ];

    protected $casts = [
        'date_naissance' => 'date',
        'actif' => 'boolean',
    ];

    public function livres()
    {
        return $this->hasMany(Livre::class);
    }
}
