<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Utilisateur;
use Illuminate\Contracts\Auth\Authenticatable;

class InscrController extends Controller implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    public function index()
    { 
        $utilisateurs = Utilisateur::all(); // Récupérer la liste des utilisateurs
        return view('admin', ['utilisateurs' => $utilisateurs]); // Passer la liste des utilisateurs à la vue
    }
    
    public function create()
    {
        return view('inscription');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'email' => 'required|string|email|max:255', 
            'ville' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        $hashedPassword = Hash::make($request->input('password'));

        $utilisateur = Utilisateur::create([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'adresse' => $request->input('adresse'),
            'contact' =>  $request->input('contact'),
            'email' => $request->input('email'), 
            'ville' => $request->input('ville'), 
            'password' => $hashedPassword,
        ]);

        return redirect("/admin")->with('success', 'Utilisateur créé avec succès');
    }

    public function showUsers($id)
    {
        $utilisateur = Utilisateur::findOrFail($id);
        return view('utilisateur', compact('utilisateur'));
    }

    public function activer($id_utilisateur)
    {
        // Rechercher l'utilisateur par son ID
        $utilisateur = Utilisateur::find($id_utilisateur);
    
        // Vérifier si l'utilisateur existe
        if (!$utilisateur) {
            return redirect()->back()->with('error', 'Utilisateur non trouvé.');
        }
    
        // Modifier l'état d'activation de l'utilisateur
        $utilisateur->active = true; // Mettre à vrai (ou à 1) selon votre logique
        $utilisateur->save();
    
        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Utilisateur activé avec succès.');
    }

    public function disable($id_utilisateur)
    {
        $utilisateur = Utilisateur::find($id_utilisateur);
        if (!$utilisateur) {
            // Gérer le cas où l'utilisateur n'est pas trouvé
            return redirect()->back()->with('error', 'Utilisateur non trouvé.');
        }
    
        // Modifier l'état d'activation de l'utilisateur
        $utilisateur->active = false; // Ou 0, selon votre logique
        $utilisateur->save();
    
        return redirect()->back()->with('success', 'Utilisateur désactivé avec succès.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/connexion')->with('success', 'Vous êtes déconnecté.');
    }

    public function show($id)
    {
        $utilisateur = Utilisateur::findOrFail($id);
        return view('utilisateur', compact('utilisateur'));
    }

    public function dashboard()
    {
        $utilisateurs = Utilisateur::where('role', '!=', 'admin')->get();
        return view('admin.dashboard', compact('utilisateurs'));
    }
}