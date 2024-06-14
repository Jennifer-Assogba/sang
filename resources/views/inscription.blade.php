<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('images/sang.jpeg');
        }
        h1 {
            color: #fff;
        }
        .justify-content-center {
            background-color: rgba(250, 66, 94, 0.5);
            padding: 20px;
            border-radius: 10px;
        }
        .form-column {
            background-color: #160303;
            color: #140808;
            border-radius: 0.5rem;
            margin-left: 120px;
        }
        .img-fluid {
            max-width: 300px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-radius: 0.5rem;
        }
        .container {
            background-color: #d26e7d;
            color: #1b0b0b;
            padding: 2rem;
            border-radius: 0.5rem;
        }
        .form-container {
            width: 500px;
            background-color: #fff;
            color: #140808;
            border-radius: 0.5rem;
            padding: 20px;
            margin-left: 1px;
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
                <form action="{{'/inscr'}}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="nom" class="col-sm-2 col-form-label">Nom:</label>
                        <div class="col-sm-10">
                            <input type="text" name="nom" id="nom" class="form-control" placeholder="Saisissez votre nom" >
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="prenom" class="col-sm-2 col-form-label">Prénom:</label>
                        <div class="col-sm-10">
                            <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Saisissez votre prénom" >
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="adresse" class="col-sm-2 col-form-label">Adresse:</label>
                        <div class="col-sm-10">
                            <input type="text" name="adresse" id="adresse" class="form-control" placeholder="Saisissez votre adresse" >
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="contact" class="col-sm-2 col-form-label">Contact:</label>
                        <div class="col-sm-10">
                            <input type="text" name="contact" id="contact" class="form-control" placeholder="Saisissez votre contact" >
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Saisissez votre mail" >
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ville" class="col-sm-2 col-form-label">Ville:</label>
                        <div class="col-sm-10">
                            <input type="text" name="ville" id="ville" class="form-control" placeholder="Saisissez votre ville">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">Password:</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Saisissez votre mot de passe">
                        </div>
                    </div>
                    <div class="text-center">
                        <input class="btn btn-danger" type="reset" value="Annuler">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                    

                </form>
                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
