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
            <div class="col-sm-12">
                <h3 class="text-center">Les articles</h3>
                <div class="row pt-5">
                    <?php
                    //updatePrixPromo( 3, 300 );
                    //deleteArticle( 3 );

                    foreach (listeArticle() as $key => $value) {
                    ?>
                        <div class="col-sm-3">
                            <div class="card">
                                <img class="card-img-top" src="image/formation.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <a href="show-page.php?id=<?= $value['id'] ?>"><h5 class="card-title"><?= $value['nomArticle'] ?></h5></a>
                                    <p class="card-text"><?= $value['descriptionArticle'] ?></p>
                                    <p class="card-text"> PRIX UNITAIRE : <?= $value['prixUnitaire'] ?></p>
                                    <a href="../vue/show-page.php?id=<?= $value['id'] ?>" class="btn btn-primary">AJOUTER PANIER</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!--================Contact Area =================-->
</body>
</htm>