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
                <h4>CONNEXION</h4>
                <hr class="colorgraph">
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <form action="../modele/connexion.php" method="POST" class="row contact_form" enctype="multipart/form-data">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Votre pseudo" required />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Votre mot de passe" required />
                                </div>
                                <div class="form-group">
                                    <button type="submit" value="submit" class="btn btn-primary">
                                        CONNEXION
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