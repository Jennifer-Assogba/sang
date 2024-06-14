<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BloodBank;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class BloodBankController extends Controller
{
    public function resultat(Request $request)
    {
        $bloodGroupRh = $request->input('bloodGroupRh');
        $bloodProduct = $request->input('bloodProduct');
        $nombrePoche = $request->input('nombrePoche');
        $ville = $request->input('ville');

        // Récupérez les résultats de la base de données
        $resultats = BloodBank::where('blood_group', $bloodGroupRh)
                    ->where('blood_product', $bloodProduct)
                    ->get();

        // Coordonnées des villes (à ajuster selon vos besoins)
        $coordinates = [
            'Porto-Novo' => [6.3663, 2.4256],
            'Cotonou' => [6.3733, 2.3912],
            'Ouidah' => [6.3663, 2.0833],
            'Abomey-Calavi' => [6.4485, 2.3557],
            'Lokossa' => [6.6384, 1.7166],
            'Parakou' => [9.3372, 2.6303],
        ];

       
}
}