<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 800px;
            margin: 50px auto;
        }
        .center {
            text-align: center;
        }
        .image, h1 {
            max-width: 300px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-radius: 0.5rem;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        .form-column {
            background-color: #fff;
            color: #140808;
            border-radius: 1rem;
            margin-left: 120px;
            padding: 1rem;
        }
        .jumbotron {
            background-color: rgba(250, 66, 94, 0.5);
            color: #fff;
            padding: 2rem;
            border-radius: 0.5rem;
        }
        .btn-submit {
            margin-top: 1rem;
        }
    </style>
</head>
<body style="background-image: url('images/sang.jpeg')">
    <div class="container">
        <div class="jumbotron mt-5">
            <div class="row">
                <div class="col-md-6 text-center">
                    <h1 class="blue-text mb-9">Connexion</h1>
                    <hr class="my-9">
                    <img src="images/IL.jpg" alt="Image" class="image">
                </div>
                <div class="col-md-4 form-column">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="contact">Contact:</label>
                            <input type="text" class="form-control" id="contact" name="contact" placeholder="Votre contact" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe:</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Votre mot de passe" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block mt-5">Se connecter</button>
                        </div>
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                    </form>
                    <hr class="my-9">
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
