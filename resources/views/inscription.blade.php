







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url('images/sang.jpeg');
        }
        h1 {
            color: #fff; /* Couleur du texte blanc */
        }
        .justify-content-center {
            background-color: rgba(250, 66, 94, 0.5); /* Utilisation d'une opacité pour le fond du formulaire */
            padding: 20px;
            border-radius: 10px;
        }
        .form-column {
            background-color: #160303; /* Couleur de fond plus sombre */
            color: #140808; /* Couleur du texte blanc */
            border-radius: 0.5rem;
            margin-left: 120px; /* Ajout d'une marge à gauche pour créer de l'espace horizontal */
        }
        .img-fluid {
            max-width: 300px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-radius: 0.5rem; 
        }
        .container {
            background-color: #d26e7d; /* Couleur de fond plus sombre */
            color: #1b0b0b; /* Couleur du texte blanc */
            padding: 2rem;
            border-radius: 0.5rem;
        }
        .form-container {
            width: 500px;
            background-color: #fff; /* Couleur de fond plus sombre */
            color: #140808; /* Couleur du texte blanc */
            border-radius: 0.5rem;
            padding: 20px;
            margin-left: 1px; /* Ajout d'une marge à gauche pour créer de l'espace horizontal */
        }
    </style>
</head>
<body class="container">
    <div class="row justify-content-center">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-center">Inscription</h1>
                <hr class="my-9">
                <img src="images/il.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <form action="/path/to/your/server/script" method="post" class="form-container">
                    <div class="mb-3 row">
                        <label for="nom" class="col-sm-2 col-form-label">Nom:</label>
                        <div class="col-sm-10">
                            <input type="text" name="nom" id="nom" class="form-control" placeholder="Saississez votre nom" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="prenom" class="col-sm-2 col-form-label">Prénom:</label>
                        <div class="col-sm-10">
                            <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Saississez votre prénom" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="adresse" class="col-sm-2 col-form-label">Adresse:</label>
                        <div class="col-sm-10">
                            <input type="text" name="adresse" id="adresse" class="form-control" placeholder="Saississez votre adresse" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="contact" class="col-sm-2 col-form-label">Contact:</label>
                        <div class="col-sm-10">
                            <input type="number" name="contact" id="contact" class="form-control" placeholder="Saississez votre contact" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Mail:</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Saississez votre mail" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">Password:</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Saississez votre mot de passe" required>
                        </div>
                    </div>
                    <div class="text-center">
                        <input class="btn btn-danger" type="reset" value="Annuler">
                        <button type="submit" class="btn btn-primary btn-fill center-block">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
