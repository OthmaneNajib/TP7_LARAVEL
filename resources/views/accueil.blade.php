@extends('layouts.mas')

@section('title', 'Accueil avec Layout')

@section('content')
    <h1>{{ $titre }}</h1>
    <p>Bienvenue sur ma première page Laravel ! (version avec layout)</p>

    <h2>Liste des utilisateurs :</h2>
    <ul>
        @foreach($users as $user)
            <li>{{ $user }}</li>
        @endforeach
    </ul>
@endsection
