<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <title>Page d'accueil</title>
    
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/coming-sssoon.css" rel="stylesheet" />
    <style>
        h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: 60px; /* Taille de la police pour h1 */
            margin-bottom: 20px; /* Espacement en bas de h1 */
            margin-top: 80px; /* Espacement en haut de h1 */
            color: white; /* Couleur du texte */
            text-align: center; /* Alignement du texte */
        }
        h3 {
            font-size: 24px; /* Taille de la police pour h3 */
            color: white; /* Couleur du texte */
            font-weight: normal; /* Retire le gras */
        }
        .subscribe {
            text-align: center; /* Alignement du contenu */
            margin-top: 30px; /* Espacement en haut de .subscribe */
            margin-bottom: 50px; /* Espacement en bas de .subscribe */
        }
        .btn {
            margin-top: 30px; /* Espacement au-dessus du bouton */
            background-color: red; /* Couleur de fond rouge */
            border-color: red; /* Couleur de la bordure rouge */
            font-size: 18px; /* Taille de la police pour le bouton */
            padding: 10px 20px; /* Espacement à l'intérieur du bouton */
        }
        .btn a {
            color: white !important; /* Couleur du texte du lien en blanc */
            text-decoration: none; /* Suppression du soulignement du lien */
        }
        .info-text {
            color: white; /* Couleur du texte */
        }
        .main {
            position: relative;
            background-size: cover;
            background-position: center;
            height: 100vh;
            overflow: hidden;
        }
        .cover {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Opacité réduite */
        }
        .container {
            position: relative;
            z-index: 1;
        }
    </style> 
</head>

<body>

<div class="main" style="background-image: url('images/sang.jpeg')">
    <div class="cover"></div>
    <div class="container">
        <h1 class="logo cursive">
            Bienvenue sur la plateforme
        </h1> 
        <div class="content">
            <div class="subscribe">
                <h3 class="info-text">
                    Recherchez en toute sécurité votre poche de sang. 
                </h3>
                <button class="btn btn-danger btn-fill center-block">
                    <a href="{{'/connexion'}}">Se connecter</a> 
                </button>
            </div>
        </div> 
    </div>
</div>
<div class="footer">
    <div class="container">
    </div>
</div>

<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>
