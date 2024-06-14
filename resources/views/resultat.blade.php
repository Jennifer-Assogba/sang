
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de la recherche</title>
    <!-- Lien CDN de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            margin: 20px;
            border: 1px solid #ce2323;
            border-radius: 10px;
            background-image: url('images/sang.jpeg');
            background-size: cover;
            background-color: rgba(243, 242, 242, 0.9);

        }
        caption {
            font-size: 1.5em;
            margin-bottom: 10px;
            font-weight: bold;
        }
        h1{
            color: black;
            font-family: 'Times New Roman', Times, serif;
            font-size: 2.5em;
            margin-bottom: 10px;
            font-weight: bold;
            text-align: center;
        }
        table{
            border: 1px solid #8998a8;
            border-radius: 50px;
            background-color: rgba(243, 242, 242, 0.4);

        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <h1 class="mb-4">Résultats de la recherche</h1>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Nom banque de sang</th>
                    <th>Ville</th>
                    <th>Groupe sanguin</th>
                    <th>Produits sanguins</th>
                    <th>Commande</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>CNHU</td>
                    <td>Cotonou</td>
                    <td>O+</td>
                    <td>Globules rouges, Plasma</td>
                    <td><button class="btn btn-primary">Commander</button></td>
                </tr>
                <tr>
                    <td>CNHU-MEL</td>
                    <td>Porto-Novo</td>
                    <td>A-</td>
                    <td>Plaquettes, Plasma</td>
                    <td><button class="btn btn-primary">Commander</button></td>
                </tr>
                <tr>
                    <td>Hôpital de zone</td>
                    <td>Abomey-calavi</td>
                    <td>A-</td>
                    <td>Plaquettes, Plasma</td>
                    <td><button class="btn btn-primary">Commander</button></td>
                </tr>
                <!-- Ajoutez d'autres lignes de données ici -->
            </tbody>
        </table>
    </div>

    <!-- Script JavaScript de Bootstrap (facultatif) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
