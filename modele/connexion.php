<?php 
require_once('function.php');
if(isset($_POST['pseudo'], $_POST['pwd']) && !empty($_POST['pseudo']) && !empty($_POST['pwd'])){
    $pseudo= htmlentities($_POST['pseudo']);
    $pwd = htmlentities( md5( $_POST['pwd'] ) );
    
    $sql = $connexion->prepare('SELECT iduser FROM client WHERE pseudo = :pseudo AND pwd = :pwd');
    $sql->execute(array(
        'pseudo' => $pseudo,
        'pwd' => $pwd
    ));
    $resultat = $sql->fetch();
    if($resultat != null){
        $id = $resultat['iduser']; 
        $_SESSION['iduser'] = $id;
        header("Location: ../vue/index.php");
        $sql->closeCursor();
    }
    else{
        header("Location: ../vue/connexion.php" );
    }
}