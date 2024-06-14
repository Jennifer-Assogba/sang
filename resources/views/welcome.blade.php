<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <title> Page d'acceuil</title>
    
    <link href="css/bootstrap.css" rel="stylesheet" />
	<link href="css/coming-sssoon.css" rel="stylesheet" />    
   <style>
    h1{
      font-family: 'Times New Roman', Times, serif;
      font-size: 900px;
    }
   </style> 
  
    
  
</head>

<body>

<div class="main" style="background-image: url('images/sang.jpeg')">

<!--    Change the image source '/images/default.jpg' with your favourite image.     -->
    
    <div class="cover black" data-color="black"></div>
     
<!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->

    <div class="container">
        <h1 class="logo cursive">
            Bienvenue sur la plateforme
        </h1> 
<!--  H1 can have 2 designs: "logo" and "logo cursive"           -->
        
        <div class="content">
            <div class="subscribe">
                <h3 class="info-text">
                    Recherchez en toute sécurité votre poche de sang. 
                </h3>

                      
                      <button class="btn btn- btn-fill center-block">
                        <a href=href="{{ route('connexion') }}" class="btn btn-danger btn-fill center-block">Se connecter</a> 
                      </button>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <div class="footer">
      <div class="container">
      </div>
    </div>
 </div>
 </body>
   <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
   <script src="js/bootstrap.min.js" type="text/javascript"></script>

</html>