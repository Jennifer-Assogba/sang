<?php
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RechercheController;
use App\Http\Controllers\PaiementController;

route::get('/', function () {
    return view('welcome');
})->name('accueil');



Route::get('/inscription', function () {
    return view('inscription');
})->name('inscription');

Route::get('/deconnexion', function () {
    // Ajoutez le code pour déconnecter l'utilisateur ici, si nécessaire
    return redirect()->route('accueil');
})->name('deconnexion');

Route::get('/connexion', function () {
    // Votre logique de traitement icix
    return ('admin.dashboard');
})->name('connexion');


// Route::get('/dashboard', function () { return view('admin.dashboard');})->name('admin');

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/formulaire', function () {
    return view('formulaire');
})->name('formulaire');

Route::get('/resultats', function () {
    return view('resultast');
})->name('resultats');

Route::get('/recherche', [RechercheController::class, 'formulaire'])->name('recherche');
Route::post('/resultat', [RechercheController::class, 'resultat'])->name('resultat');
Route::post('/recherche', [RechercheController::class, 'rechercher'])->name('recherche');
Route::post('/commander', [PaiementController::class, 'commander'])->name('commander');
Route::post('/paiement/callback', [PaiementController::class, 'callback'])->name('callback');
