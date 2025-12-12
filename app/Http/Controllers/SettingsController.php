<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $titre = "Paramètres";
        $parametres = [
            ['option' => 'Notifications', 'statut' => 'Activées'],
            ['option' => 'Langue', 'statut' => 'Français'],
            ['option' => 'Thème', 'statut' => 'Clair'],
            ['option' => 'Confidentialité', 'statut' => 'Privé'],
            ['option' => 'Sauvegarde automatique', 'statut' => 'Désactivée'],
        ];

        return view('settings', compact('titre', 'parametres'));
    }
}
