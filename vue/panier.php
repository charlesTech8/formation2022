<?php 
require_once('../modele/function.php');
if (!isset($_SESSION['iduser'])){
    header("Location: ../vue/connexion.php" );
}else{
    echo 'Bienvenue dans panier';
}