<?php
require_once('../modele/function.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>FORMATION</title>
</head>

<body>
<?php include_once('menu.php'); ?>
    <!--================Contact Area =================-->
    <div class="jumbotron">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h4>AJOUTER UN ARTICLE</h4>
                <hr class="colorgraph">
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <form action="../modele/traitement.php" method="POST" class="row contact_form" enctype="multipart/form-data">
                            <input type="hidden" value="add_produit" name="action" id="action">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Le nom de l'article" required />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="description" name="description" rows="2" placeholder="Description sur l'article..." required></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <input type="number" name="pu" id="pu" class="form-control" placeholder="Prix Unitaire" aria-label="Prix Unitaire" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="button">FCFA</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <input type="number" name="pp" id="pp" value="0" class="form-control" placeholder="Prix Promo" aria-label="Prix Promo" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="button">FCFA</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="detail" name="detail" rows="8" placeholder="Détails sur l'article..." required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image de l'article</label>
                                    <input type="file" class="form-control" id="img" name="img" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" value="submit" class="btn btn-primary">
                                        AJOUTER ARTICLE
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================Contact Area =================-->
</body>
</htm>