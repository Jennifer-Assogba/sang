<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Recherche</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-image: url('images/image4.jpg');
            background-size: cover;
            background-color: rgba(7, 68, 5, 0.1); 
        }
        .card{
            background-color: rgba(246, 247, 248, 0.2);
            border: 2px solid rgb(25, 20, 19); 
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>Recherche de produits sanguins</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('resultat') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="bloodGroupRh"><b>Choisissez le groupe sanguin rhésus (GS-Rh):</b></label>
                        <select class="form-control" name="bloodGroupRh" id="bloodGroupRh" required>
                            <option value="">Sélectionnez un groupe sanguin</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                        <div class="invalid-feedback">
                            Veuillez sélectionner un groupe sanguin.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bloodProduct"><b>Choisissez votre produit sanguin:</b></label>
                        <select class="form-control" name="bloodProduct" id="bloodProduct" required>
                            <option value="">Sélectionnez un produit sanguin</option>
                            <option value="sang complet">Sang complet</option>
                            <option value="concentré de globules rouges">Concentré de globules rouges</option>
                            <option value="Plasma frais congelés">Plasma frais congelés</option>
                            <option value="concentrées de plasma standard">Concentrés de plasma standard</option>
                        </select>
                        <div class="invalid-feedback">
                            Veuillez sélectionner un produit sanguin.
                        </div>
                    </div>
                    <div class="form-group">    
                        <label for="nombrePoche"><b>Nombre de poches:</b></label>
                        <input type="number" class="form-control" name="nombrePoche" id="nombrePoche" placeholder="Saisissez le nombre de poches de sang que vous voulez" pattern="[0-9]*" required>
                        <div class="invalid-feedback">
                            Veuillez saisir un nombre valide.
                        </div>
                    </div>
                    
                    <div class="form-group">    
                        <label for="ville"><b>Ville :</b></label>
                        <select class="form-control" name="ville" id="ville" required>
                            <option value="">Sélectionnez une ville </option>
                            <option value="Porto-Novo">Porto-Novo</option>
                            <option value="Cotonou">Cotonou</option>
                            <option value="Ouidah">Ouidah</option>
                            <option value="Abomey-Calavi">Abomey-Calavi</option>
                            <option value="Lokossa">Lokossa</option>
                            <option value="Parakou">Parakou</option>
                        </select>
                        <div class="invalid-feedback">
                            Veuillez sélectionner une ville.
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Rechercher</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
