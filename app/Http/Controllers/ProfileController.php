<?php

namespace App\Http\Controllers;


class ProfileController extends Controller
{
    public function show()
    {
        $titre = "Mon Profil";
        $informations = [
            ['label' => 'Nom', 'value' => 'aya'],
            ['label' => 'Prénom', 'value' => 'moualda'],
            ['label' => 'Email', 'value' => 'ayamoualda@example.com'],
            ['label' => 'Téléphone', 'value' => '01 23 45 67 89'],
            ['label' => 'Ville', 'value' => 'maroc'],
        ];

        return view('profile', compact('titre', 'informations'));
    }
}
