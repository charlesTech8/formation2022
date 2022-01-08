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
    <!--================Contact Area =================-->
    <div class="jumbotron">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center">Les articles</h3>
                <a href="../vue/add-article.php"><button class="btn btn-outline-warning">AJOUTER ARTICLE</button></a>
                <div class="row pt-5">
                    <?php
                    //updatePrixPromo( 3, 300 );
                    //deleteArticle( 3 );

                    foreach (listeArticle() as $key => $value) {
                    ?>
                        <div class="col-sm-4">
                            <div class="card">
                                <?php 
                                    if( get_link_img( $value['id'] ) != '' ){
                                        ?>
                                        <img class="card-img-top" src="image/<?= get_link_img( $value['id'] ) ?>" alt="Card image cap">
                                        <?php
                                    }
                                ?>
                                <div class="card-body">
                                    <a href="show.page.php?id=<?= $value['id'] ?>"><h5 class="card-title"><?= $value['nomArticle'] ?></h5></a>
                                    <p class="card-text"><?= $value['descriptionArticle'] ?></p>
                                    <a href="#" class="btn btn-primary">Prix Unitaire: <?= $value['prixUnitaire'] ?></a>
                                    <a href="../modele/traitement.php?id=<?= $value['id'] ?>&actionDelete" class="btn btn-outline-danger">Delete</a>
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