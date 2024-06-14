<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord Admin</title>
    <!-- Lien CDN de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f3f2f2;
            opacity: 3;
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
            background-color: #007bff;
            background-color: rgba(243, 242, 242, 0.5);

        }
        .main-content {
            background-image:  url('images/sng.jpeg');
            background-color: rgba(16, 1, 1, 0.5);
            margin-left: 210px;
            padding: 20px;
        }
        
        table{
            font-weight: bold;
            font-size: 20px;
            opacity: 10PX;
        }
        h2 ,h4{
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h3 class="text-center">Admin Dashboard</h3>
        <a href="#">Accueil</a>
        <button class="btn btn- btn-fill center-block"> 
            <a href="{{ route('formulaire') }}" class="btn btn-success btn-fill center-block">Faite une Rcherche</a>
        </button>
        <button class="btn btn- btn-fill center-block">
            <a href="{{ route('inscription') }}" class="btn btn-info btn-fill center-block">Crear un utlisateur</a> 
          </button> 
         <button class="btn btn- btn-fill center-block">
            <a href="{{ route('accueil') }}" class="btn btn-danger btn-fill center-block">Se deconnecter</a> 
          </button>
    </div>

    <div class="main-content">
        <h2 class="text-center">NOM DE L'HOPITAL</h2>
        <h4>Gestion des Utilisateurs</h4>
        <button class="btn btn-primary my-3" onclick="toggleUserList()">Liste des utilisateurs</button>
        
        <div id="userList" class="d-none">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Adresse</th>
                        <th>Ville</th>
                    </tr>
                </thead>
                <tbody>
                   
                    
                    <!-- Ajoutez d'autres lignes de données ici -->
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function toggleUserList() {
            var userList = document.getElementById('userList');
            if (userList.classList.contains('d-none')) {
                userList.classList.remove('d-none');
            } else {
                userList.classList.add('d-none');
            }
        }
    </script>

    <!-- Script JavaScript de Bootstrap (facultatif) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>








