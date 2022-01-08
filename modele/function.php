<?php
/**
* Ecrire l'ensemble des functions.
*/
$user = "root";
$pass = "";
try {
    $connexion = new PDO('mysql:host=localhost;dbname=formation', $user, $pass);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() ;
    die();
}

/**
 * Récupération de l'ensemble des articles
 *
 * @return array
 */
function listeArticle(  ):array{
    global $connexion;
    $sql_affiche = $connexion->prepare(
        'SELECT id, nomArticle, descriptionArticle, prixUnitaire FROM article'
    );
    $sql_affiche->execute();
    $resulut = $sql_affiche->fetchAll();
    if( $resulut != NULL )
        return $resulut;
    else
        return array();
    $sql_affiche->closeCursor();
}

function get_article( int $id ):array{
    global $connexion;
    $sql = $connexion->prepare(
        'SELECT * FROM article WHERE id = ' .$id
    );
    $sql->execute();
    $resulut = $sql->fetch();
    if( $resulut != NULL )
        return $resulut;
    else
        return array();
    $sql->closeCursor();
}

/**
 * Mise a jour du prix promotionnel
 *
 * @param integer $id
 * @param integer $prix
 * @return void
 */
function updatePrixPromo( int $id, int $prix ){
    global $connexion;
    $update = $connexion->prepare(
        'UPDATE article SET prixPromo = :prixP WHERE id = '.$id
    );
    $update->execute(array(
        'prixP' => $prix
    ));
}

/**
 * Supprimer un article
 *
 * @param integer $id
 * @return void
 */
function deleteArticle( int $id ){
    global $connexion;
    $update = $connexion->prepare(
        'DELETE FROM article WHERE id = '.$id
    );
    $update->execute();
}

function get_link_img( int $id_article ):String{
    global $connexion;
    $sql_link = $connexion->prepare('SELECT lien_img FROM img WHERE id_article = ' . $id_article);
    $sql_link->execute();
    $resultat = $sql_link->fetch();
    if( $resultat != null )
        return $resultat['lien_img'];
    else
        return '';
    $sql_link->closeCursor();
}