@extends('layouts.mas')

@section('title', 'Paramètres')

@section('content')
    <h1>{{ $titre }}</h1>

    <h2>Configuration :</h2>
    <ul>
        @foreach($parametres as $param)
            <li><strong>{{ $param['option'] }} :</strong> {{ $param['statut'] }}</li>
        @endforeach
    </ul>
@endsection
