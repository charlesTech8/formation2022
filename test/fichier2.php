<?php 
$age = 21;
$nom = 'FORMATION';
if($age < 18){
    echo 'Vous n\'avez pas l\'age';
}else{
    header('Location: fichier1.php?pg='.$nom);
}