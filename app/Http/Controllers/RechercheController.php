<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Importez la classe DB

class RechercheController extends Controller
{
    public function resultat(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'bloodGroupRh' => 'required',
            'bloodProduct' => 'required',
        ]);

        // Récupérer les données du formulaire
        $bloodGroupRh = $request->input('bloodGroupRh');
        $bloodProduct = $request->input('bloodProduct');

        // Effectuer la recherche dans la base de données
        $resultats = DB::table('banque_de_sang')
            ->join('poche_de_sang', 'banque_de_sang.id_poche_de_sang', '=', 'poche_de_sang.id_poche_de_sang')
            ->where('poche_de_sang.groupe_sanguin', $bloodGroupRh)
            ->where('poche_de_sang.type_produit_sanguin', $bloodProduct)
            ->select(
                'banque_de_sang.id_banque_de_sang as banque_id',
                'banque_de_sang.nom as nom_banque',
                'banque_de_sang.ville',
                'poche_de_sang.groupe_sanguin',
                'poche_de_sang.type_produit_sanguin',
                DB::raw('COUNT(poche_de_sang.id_poche_de_sang) as nombre_poches')
            )
            ->groupBy(
                'banque_de_sang.id_banque_de_sang',
                'banque_de_sang.nom',
                'banque_de_sang.ville',
                'poche_de_sang.groupe_sanguin',
                'poche_de_sang.type_produit_sanguin'
            )
            ->get();

        // Afficher les résultats
        return view('resultats', ['resultats' => $resultats]);
    }
}