<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscrController;
use App\Http\Controllers\LoginController;

// Route vers la page d'accueil
Route::get('/', function () {
    return view('accueil');
})->name('accueil');

// Route vers la page admin
Route::get('/admin', [InscrController::class, 'index'])->name('admin');

Route::get('/inscription', function () {
    return view('inscription');
})->name('inscription');

Route::get('/formulaire', function () {
    return view('formulaire');
})->name('formulaire');

// Route vers la page de connexion
Route::get('/connexion', function () {
    return view('connexion');
})->name('connexion');

// Route pour gérer l'inscription
Route::get('/inscr', [InscrController::class, 'create'])->name('inscription');
Route::post('/inscr', [InscrController::class, 'store']);

// Route pour afficher les utilisateurs

Route::post('/utilisateur/{id_utilisateur}', [LoginController::class, 'Users'])->name('shUsers');

// Route pour la connexion
Route::post('/connexion', [LoginController::class, 'login'])->name('login'); // Correction ici

// Route pour désactiver le compte
Route::put('/utilisateurs/{id_utilisateur}/disable', [InscrController::class, 'disable'])->name('disable.user');

// Route pour activer le compte
Route::get('/utilisateurs/{id_utilisateur}/activer', [InscrController::class, 'activer'])->name('activer.utilisateur');

// Route pour la déconnexion
Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); // Correction ici

// Route pour afficher un utilisateur spécifique
Route::get('/utilisateur/{id}', [InscrController::class, 'show'])->name('user.show');

// Route pour le tableau de bord
Route::get('/dashboard', [InscrController::class, 'index'])->name('dashboard');

// Route pour afficher la liste des utilisateurs (avec middleware auth)
Route::get('/userlist', [UserController::class, 'index'])->name('userlist')->middleware('auth');

Route::get('/admin/dashboard', [InscrController::class, 'dashboard'])->name('admin.dashboard');
