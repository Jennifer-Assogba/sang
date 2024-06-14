<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .dashboard-container {
            background-image: url('http://localhost:8000/images/image4.jpg');
            background-size: cover;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .dashboard-section {
            padding: 20px;
            border: 2px solid #8998a8;
            border-radius: 10px;
            background-color: rgba(243, 242, 242, 0);
           
            display: flex;
            align-items: center;
            justify-content: space-between; /* Ajustement de l'espacement entre les sections */
        }
        .dashboard-section .profile-info {
            background-color: rgba(248, 245, 245, 0.5);
            background-size: cover;
            text-align: center;
            margin-right: 10px; /* Ajout de marges pour l'espace entre les sections */
            border-radius: 10px;
        }
        .dashboard-section .search-section-content {
            background-color: rgba(248, 245, 245, 0.5);
            text-align: center;
            border-radius: 10px;
        }
        .dashboard-section .profile-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="dashboard-container">
        <div class="dashboard-section">
            <div class="profile-info">
                <img src="{{ asset('images/icons.jpg') }}" alt="Image de profil" class="profile-image">
                @if($utilisateur)
                    <div class="profile-info">
                        <div>
                            <p><strong>Nom:</strong> {{ $utilisateur->nom }}</p>
                            <p><strong>Prénom:</strong> {{ $utilisateur->prenom }}</p>
                            <p><strong>Adresse:</strong> {{ $utilisateur->adresse }}</p>
                            <p><strong>Contact:</strong> {{ $utilisateur->contact }}</p>
                            <p><strong>Ville:</strong> {{ $utilisateur->ville }}</p>
                            <p><strong>Email:</strong> {{ $utilisateur->email }}</p>
                        </div>
                    </div>
                @else
                    <p>Aucun utilisateur n'est connecté.</p>
                @endif
            </div>
            <div class="search-section-content">
                <h5 class="mb-4">Effectuez votre recherche</h5>
                <button class="btn btn-primary">
                    <a href="{{ url('/formulaire') }}" class="btn btn-primary">Rechercher</a>
                </button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
