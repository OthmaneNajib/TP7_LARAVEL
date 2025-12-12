<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index()
    {
        $titre = "Bienvenue sur mon site";
        $users = ['A','B','C'];
        $messages = [
            ['type' => 'success', 'text' => 'Bienvenue !'],
            ['type' => 'danger', 'text' => 'Problème détecté !'],
        ];
        return view('home', compact('titre','users','messages'));
    }
    public function home()
    {
        $titre = "Bienvenue sur mon site";
        $users = ['A', 'B', 'C', 'D'];
        return view('accueil', compact('titre', 'users'));
    }
}
