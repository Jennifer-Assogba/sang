<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Utilisateur;

class LoginController extends Controller
{
    public function __construct()
    {
        set_time_limit(120); // Augmente la limite de temps d'exécution à 120 secondes
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $request->validate([
            'contact' => 'required|string',
            'password' => 'required|string',
        ]);
    
        $user = Utilisateur::where('contact', $request->contact)->first();
    
        if ($user) {
            if ($user->active != 1) {
                return redirect()->back()->withErrors(['error' => 'Votre compte n\'est pas actif. Veuillez contacter le médecin.']);
            }
    
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user);
                if ($user->role === 'admin') {
                    return redirect()->route('dashboard'); // Redirection vers le tableau de bord admin
                } elseif ($user->role === 'user') {
                    return redirect()->route('shUsers', ['id_utilisateur' => $user->id_utilisateur]);
                }
            } else {
                return redirect()->back()->withErrors(['error' => 'Contact ou mot de passe incorrect.']);
            }
        } else {
            return redirect()->back()->withErrors(['error' => 'Contact ou mot de passe incorrect.']);
        }
    }
    
    
    public function Users($id)
    {
        $utilisateur = Utilisateur::findOrFail($id);
        return view('utilisateur', compact('utilisateur'));
    }
    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     
    public function logout(Request $request)
    {
        

        return redirect('/'); // Redirige vers la page d'accueil après déconnexion
    }
}
