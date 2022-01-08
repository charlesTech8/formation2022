<?php
require_once('function.php');
if( isset( $_POST['nom'], $_POST['description'] ) && ( !empty( $_POST['nom'] ) &&  !empty( $_POST['description'] )) ){
    $nom = htmlentities( addslashes( $_POST['nom'] ) );
    $description = htmlentities( addslashes( $_POST['description'] ) );
    $prixUnitaire = htmlentities( addslashes( $_POST['pu'] ) );
    $prixPromo = htmlentities( addslashes( $_POST['pp'] ) );
    $detail = htmlentities( addslashes( $_POST['detail'] ) );
    $img = htmlentities( addslashes( $_FILES['img']['name'] ) );

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
        $id_art = $connexion->lastInsertId();
        $sql_insertion->closeCursor();

        $sql_insert_img = $connexion->prepare('INSERT INTO img(lien_img, id_article) VALUES(:lien, :id_art)');
        $sql_insert_img->execute( array(
            'lien' =>  $img,
            'id_art' => $id_art
        ) );

        $upload = "../vue/image/" . $img;
        move_uploaded_file( $_FILES['img']['tmp_name'], $upload );

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
}else{
    header('Location: ../vue/error.page.php');
    exit;
}