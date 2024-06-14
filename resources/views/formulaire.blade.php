
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
<body  >
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>Recherche</h2>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="bloodGroupRh"><b>Choisissez le groupe sanguin rhésus (GS-Rh):</b></label>
                        <select class="form-control" id="bloodGroupRh" required>
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
                    </div>
                    <div class="form-group">
                        <label for="bloodProduct"><b>Choisissez votre produit sanguin:</b></label>
                        <select class="form-control" id="bloodProduct" required>
                            <option value="">Sélectionnez un produit sanguin</option>
                            <option value="sang complet">Sang complet</option>
                            <option value="CGR">Concentré de globules rouges (CGR)</option>
                            <option value="PFC">Plasma frais congelés (PFC)</option>
                            <option value="CPS">Concentrés de plasma standard (CPS)</option>
                        </select>
                    </div>
                    <div class="form-group">    
                        <label for="bloodProduct"><b>Nombre de poche:</b></label>
                        <input type="number" class="form-control" id="bloodProduct" placeholder="Saississez le nombre de poche de sang que vous voulez" required>
                    </div>
                    
                    <div class="form-group">    
                        <label for="bloodProduct"><b>Ville actuelle:</b></label>
                        <select class="form-control" id="bloodProduct" required>
                            <option value="">Sélectionnez votre ville actuelle</option>
                            <option value="sang complet">Porto-Novo</option>
                            <option value="CGR">Cotonou</option>
                            <option value="PFC">Ouidah</option>
                            <option value="CPS">Kalavi</option>
                            <option value="CPS">Lokossa</option>
                            <option value="CPS">Parakou</option>
                        </select>
                    </div>
                    <div class="text-right">
                        <button class="btn btn- btn-fill center-block">
                            <a href="{{'/resultat'}}" class="btn btn-primary"> Soumettre</a> 
                          </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
