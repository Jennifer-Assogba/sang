
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadre avec Bootstrap</title>
    <!-- Inclure le CSS de Bootstrap depuis un CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-container {
            background-image: url('images/image4.jpg');

            margin-left: 5%; /* Ajustez ce pourcentage pour laisser plus ou moins d'espace à gauche */
        }
        .small-card {
            width: 12rem; /* Ajustez la largeur pour réduire la taille des cartes */
        }
        .main-card {
            width: 90%; /* Ajustez la largeur du cadre principal */
            margin: 0 auto; /* Centrer le cadre principal */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card main-card">
            <div class="card-header text-center" style="background-image: url('images/sang.jpeg')">
                  <h3>BANQUE DE SANG DU CNHU-MEL</h3>
            </div>
            <div class="card-body">
                <h5 class="card-title"></h5>

                <!-- Cadres imbriqués -->
                <div class="row card-container">
                    <!-- Créer 8 cartes imbriquées dans une grille -->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card small-card">
                            <div class="card-header"><b>O+</b></div>
                            <div class="card-body">
                                <select class="form-control" id="bloodProduct" required>
                                    <option value="sang complet">Sang complet</option>
                                    <option value="CGR">Concentré de globules rouges (CGR)</option>
                                    <option value="PFC">Plasma frais congelés (PFC)</option>
                                    <option value="CPS">Concentrés de plasma standard (CPS)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card small-card">
                            <div class="card-header"><b>O-</b></div>
                            <div class="card-body">
                                <select class="form-control" id="bloodProduct" required>
                                    <option value="sang complet">Sang complet</option>
                                    <option value="CGR">Concentré de globules rouges (CGR)</option>
                                    <option value="PFC">Plasma frais congelés (PFC)</option>
                                    <option value="CPS">Concentrés de plasma standard (CPS)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card small-card">
                            <div class="card-header"><b>B+</b></div>
                            <div class="card-body">
                                <select class="form-control" id="bloodProduct" required>
                                    <option value="sang complet">Sang complet</option>
                                    <option value="CGR">Concentré de globules rouges (CGR)</option>
                                    <option value="PFC">Plasma frais congelés (PFC)</option>
                                    <option value="CPS">Concentrés de plasma standard (CPS)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card small-card">
                            <div class="card-header"><b>B-</b></div>
                            <div class="card-body">
                                <select class="form-control" id="bloodProduct" required>
                                    <option value="sang complet">Sang complet</option>
                                    <option value="CGR">Concentré de globules rouges (CGR)</option>
                                    <option value="PFC">Plasma frais congelés (PFC)</option>
                                    <option value="CPS">Concentrés de plasma standard (CPS)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card small-card">
                            <div class="card-header"><b>A+</b></div>
                            <div class="card-body">
                                <select class="form-control" id="bloodProduct" required>
                                    <option value="sang complet">Sang complet</option>
                                    <option value="CGR">Concentré de globules rouges (CGR)</option>
                                    <option value="PFC">Plasma frais congelés (PFC)</option>
                                    <option value="CPS">Concentrés de plasma standard (CPS)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card small-card">
                            <div class="card-header"><b>A-</b></div>
                            <div class="card-body">
                                <select class="form-control" id="bloodProduct" required>
                                    <option value="sang complet">Sang complet</option>
                                    <option value="CGR">Concentré de globules rouges (CGR)</option>
                                    <option value="PFC">Plasma frais congelés (PFC)</option>
                                    <option value="CPS">Concentrés de plasma standard (CPS)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card small-card">
                            <div class="card-header"><b>AB+</b></div>
                            <div class="card-body">
                                <select class="form-control" id="bloodProduct" required>
                                    <option value="sang complet">Sang complet</option>
                                    <option value="CGR">Concentré de globules rouges (CGR)</option>
                                    <option value="PFC">Plasma frais congelés (PFC)</option>
                                    <option value="CPS">Concentrés de plasma standard (CPS)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card small-card">
                            <div class="card-header"><b>AB-</b></div>
                            <div class="card-body">
                                <select class="form-control" id="bloodProduct" required>
                                    <option value="sang complet">Sang complet</option>
                                    <option value="CGR">Concentré de globules rouges (CGR)</option>
                                    <option value="PFC">Plasma frais congelés (PFC)</option>
                                    <option value="CPS">Concentrés de plasma standard (CPS)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted" style="background-image: url('images/sang.jpeg')">
                Pied de carte principal
            </div>
        </div>
    </div>

    <!-- Inclure le JavaScript de Bootstrap depuis un CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>






