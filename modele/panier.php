<?php 
require_once('function.php');
if (!isset($_SESSION['iduser'])){
    header("Location: ../vue/connexion.php" );
}else{
    $iduser = htmlentities( $_SESSION['iduser'] );
    $idarticle = htmlentities( $_POST['idarticle'] );
    $qte = htmlentities( $_POST['qte'] );

    $sql = $connexion->prepare('INSERT INTO panier(idart, idclient, qte) VALUES(?,?,?)');
    $sql->execute(array($idarticle, $iduser, $qte));

    $url = '../vue/show-page.php?message&id=' . $idarticle;
    header('Location:'.$url);
}