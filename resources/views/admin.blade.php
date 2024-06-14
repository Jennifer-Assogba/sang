<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord Admin</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f3f2f2;
            background-color: rgba(7, 68, 5, 0.1); 
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 200px;
            background-color: #343a40;
            color: white;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            padding: 15px;
            text-decoration: none;
            display: block;
        }
        .sidebar a:hover {
            background-color: rgba(243, 242, 242, 0.5);
        }
        .main-content {
            background-image: url('images/sng.jpeg');
            background-color: rgba(16, 1, 1, 0.5);
            margin-left: 210px;
            padding: 20px;
        }
        table {
            font-weight: bold;
            font-size: 20px;
        }
        table td, table th {
            color: white;
            border: 2px solid black;
            border-color: black;
        }
        h2, h4 {
            color: white;
            font-weight: bold;
        }
        .user-cell {
            border: 2px solid black;
        }
        .btn-container {
            display: flex;
            justify-content: center;
            margin-top: 1rem;
        }
        .btn-container a, .btn-container button {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h3 class="text-center">Admin Dashboard</h3>
        <a href="{{ route('accueil') }}">Accueil</a>
        <a href="{{ route('formulaire') }}">Rechercher</a>
        <div class="btn-container">
            <a href="{{ route('inscription') }}" class="btn btn-primary">Créer un utilisateur</a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <div class="btn-container">
            <button onclick="document.getElementById('logout-form').submit();" class="btn btn-danger">Se déconnecter</button>
        </div>
    </div>

    <div class="main-content">
        <h2 class="text-center">NOM DE L'HOPITAL</h2>
        <h4>Gestion des Utilisateurs</h4>
        <button class="btn btn-primary my-3" onclick="toggleUserList()">Liste des utilisateurs</button>
        
        <div id="utilisateurListe" class="d-none">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Ville</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($utilisateurs as $utilisateur)
                    @if($utilisateur->role != 'admin')
                    <tr>
                        <td>{{$utilisateur->nom}}</td>
                        <td>{{$utilisateur->prenom}}</td>
                        <td>{{$utilisateur->adresse}}</td>
                        <td>{{$utilisateur->contact}}</td>
                        <td>{{$utilisateur->email}}</td>
                        <td>{{$utilisateur->ville}}</td>
                        <td>
                            @if ($utilisateur->active)
                            <form action="{{ route('disable.user', ['id_utilisateur' => $utilisateur->id_utilisateur]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-danger">Désactiver</button>
                            </form>
                            @else
                            <a href="{{ route('activer.utilisateur', ['id_utilisateur' => $utilisateur->id_utilisateur]) }}" class="btn btn-success">Activer</a>
                            @endif
                        </td>
                    </tr>
                    @endif
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <script>
        function toggleUserList() {
            var userList = document.getElementById('utilisateurListe');
            userList.classList.toggle('d-none');
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
