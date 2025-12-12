<!DOCTYPE html>
<html>
    <head>
        <title>Page d'accueil</title>
    </head>
    <body>
        <h1>{{ $titre }}</h1>
        <p>Bienvenue sur ma première page Laravel !</p>


        <h2>Liste des utilisateurs :</h2>
        <ul>
            @foreach($users as $user)
                <li>{{ $user }}</li>
            @endforeach
        </ul>

        <h2>Messages dynamiques :</h2>
            @foreach($messages as $message)
                <x-alert :type="$message['type']">{{ $message['text'] }}</x-alert>
            @endforeach
        <br>
        <h2>Les alertes pour exercice 4 </h2>
        <x-alert type="success">Opération réussie !</x-alert>
        <x-alert type="warning">Attention !</x-alert>
        <x-alert type="danger">Erreur !</x-alert>
    </body>
</html>
