<?php 
require_once('function.php');
if( isset( $_POST['nom'], $_POST['description'] ) && ( !empty( $_POST['nom'] ) &&  !empty( $_POST['description'] )) ){
    $nom = htmlentities( addslashes( $_POST['nom'] ) );
    $description = htmlentities( addslashes( $_POST['description'] ) );
    $prixUnitaire = htmlentities( addslashes( $_POST['pu'] ) );
    $prixPromo = htmlentities( addslashes( $_POST['pp'] ) );
    $detail = htmlentities( addslashes( $_POST['detail'] ) );
    //$img = htmlentities( addslashes( $_FILES['img']['name'] ) );

    $sql_insertion = $connexion->prepare(
        'INSERT INTO article(
            nomArticle, descriptionArticle, prixUnitaire, prixPromo, detailArticle
        ) 
        VALUES (
            :nom, :descrip, :pu, :pp, :details
        )'
    );
    try {
        $sql_insertion->execute(
        array(
            'nom'       => $nom,
            'descrip'   => $description,
            'pu'        => $prixUnitaire,
            'pp'        => $prixPromo,
            'details'   => $detail
        ));
    header('Location: ../vue/index.php');
    exit;
    } catch (\Throwable $th) {
        echo 'Erreur d\'ajout';
    }
}

if( isset( $_REQUEST['actionDelete'] ) ){
    $id = htmlentities( $_GET['id'] );
    deleteArticle( $id );
    header('Location: ../vue/index.php');
    exit;
}