@extends('layouts.mas')

@section('title', 'Profil')

@section('content')
    <h1>{{ $titre }}</h1>

    <h2>Informations personnelles :</h2>
    <table border="1" style="border-collapse: collapse; width: 100%;">
        <thead>
        <tr style="background-color: #f2f2f2;">
            <th style="padding: 8px;">Label</th>
            <th style="padding: 8px;">Valeur</th>
        </tr>
        </thead>
        <tbody>
        @foreach($informations as $info)
            <tr>
                <td style="padding: 8px;"><strong>{{ $info['label'] }}</strong></td>
                <td style="padding: 8px;">{{ $info['value'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
