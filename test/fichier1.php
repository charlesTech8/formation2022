<?php

//Gestions des pages
// switch ($_GET['pg']) {
//     case 'FORMATION':
//             header('Location: fichier3.php');
//         break;
    
//     default:
//         echo 'ERROR 404';
//     break;
// }


// //Les tableaux(array) à deux dimensions 
// $tableau = array(
//     '1' => array('nom' => 'GBOYOU', 'prenom' => 'Charles', 'pays' => 'Bénin'),
//     '2' => array('nom' => 'TOTO', 'prenom' => 'Lili', 'pays' => 'Congo')
// );

// //Récupération du contenu du tableau avec foreach
// foreach ($tableau as $key => $value) {
//     echo 'Je m\'appelle '. $value['nom'] .
//     ' ' . $value['prenom'] . ' et je viens du ' . $value['pays'];
//     echo '<br>';
// }

/**
 * Sortie : 
 * Je m'appelle GBOYOU Charles et je viens du Bénin
 * Je m'appelle TOTO Lili et je viens du Congo
 */

//echo $tab['nom'];
//var_dump( $tab );
//Les redirections

// $article = array(
//     '1' => array( 'nom' => 'Formation', 'content' => 'Formation 2022' ),
//     '2' => array( 'nom' => 'Formation 1 ', 'content' => 'Formation 2022 1' )
// ); 

// // if( isset( $_GET['id'] ) ){
// //     print_r( $article[$_GET['id']] );
// // }

// // // if(isset( $_GET['nom'] )){
// // //     echo 'Bonjour '.$_GET['nom'];
// // // }else{
// // //     echo 'Le nom n\'existe pas';
// // // }

// //Les functions
// function nom_fonction( int $id ):array{
//     global $article;
//     return $article[$id];
// }

// var_dump( nom_fonction( 2 ) );

