<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuteurController;
use App\Http\Controllers\LivreController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::group(['prefix' => 'auteurs',
'middleware'=>'auth'], function () {
#Route Diyal Auteur
Route::get('/', [AuteurController::class, 'index'])->name('auteurs.index');
Route::get('/create', [AuteurController::class, 'create'])->name('auteurs.create');
Route::post('/store', [AuteurController::class, 'store'])->name('auteurs.store');
Route::get('/{auteur}/show', [AuteurController::class, 'show'])->name('auteurs.show');
Route::get('/{auteur}/edit', [AuteurController::class, 'edit'])->name('auteurs.edit');
Route::put('/{auteur}/update', [AuteurController::class, 'update'])->name('auteurs.update');
Route::delete('/{auteur}/delete', [AuteurController::class, 'destroy'])->name('auteurs.destroy');
});

Route::group(['prefix' => 'livres'], function () {
#Route Diyal Livre
Route::get('/', [LivreController::class, 'index'])->name('livres.index');
Route::get('/create', [LivreController::class, 'create'])->name('livres.create');
Route::post('/store', [LivreController::class, 'store'])->name('livres.store');
Route::get('/{livre}/show', [LivreController::class, 'show'])->name('livres.show');
Route::get('/{livre}/edit', [LivreController::class, 'edit'])->name('livres.edit');
Route::put('/{livre}/update', [LivreController::class, 'update'])->name('livres.update');
Route::delete('/{livre}/delete', [LivreController::class, 'destroy'])->name('livres.destroy');
});
