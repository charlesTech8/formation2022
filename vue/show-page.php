<?php
require_once('../modele/function.php');
if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {
    $id = htmlentities($_REQUEST['id']);
    if (get_article($id) != null) {
        $affiche = get_article($id);
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
            <title>FORMATION</title>
        </head>

        <body>
            <?php include_once('menu.php'); ?>
            <div class="jumbotron">
                <?php if(isset( $_REQUEST['message'] )){
                    ?>
                    <div class="alert alert-success" role="alert">
                    Ajout avec succes
                    </div>
                    <?php
                } ?>
                <h3 class="text-center"><?= $affiche['nomArticle'] ?></h3>
                <hr>
                <div class="row">
                    <di class="col-sm-2"></di>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6"><img class="card-img-top" src="image/formation.jpg" alt="Card image cap"></div>
                        </div>
                        <hr>
                        <h5>Description</h5>
                        <p><?= $affiche['descriptionArticle'] ?></p>
                        <div class="row">
                            <?php if ($affiche['prixPromo'] == 0) {
                            ?>
                                <p class="alert alert-danger"><strong>Prix Unitaire : <?= $affiche['prixUnitaire'] ?></strong></p>
                            <?php
                            } else {
                            ?>
                                <div class="col-sm-6">
                                    <p class="alert alert-danger"><strong>Prix Unitaire : <del><?= $affiche['prixUnitaire'] ?></del></strong></p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="alert alert-info"><strong>Prix Promo : <?= $affiche['prixPromo'] ?></strong></p>
                                </div>
                            <?php
                            } ?>
                        </div>
                        <div class="input-group mb-3">
                            <form method="POST" action="../modele/panier.php">
                            <input type="text" class="form-control" value="0" name="qte" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <input type="hidden" name="idarticle" value="<?= $affiche['id'] ?>">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">Button</button>
                            </div>
                            </form>
                        </div>
                        <hr>
                        <h5>Détails</h5>
                        <p><?= $affiche['detailArticle'] ?></p>
                    </div>
                </div>
            </div>
        </body>
        </htm>
<?php
    } else {
        header('Location: error.page.html');
    }
} else {
    header('Location: error.page.html');
}
