<?php

// on récupère les requêtes génériques
require('requetes.generiques.php');

/**
 * Vérifie si l'utilisateur existe dans la BDD
 * @param array $utilisateur
 */
function bddContient(PDO $bdd, array $utilisateur)
{
    $query = $bdd->prepare('SELECT nom,prenom,adresse_mail,numero_telephone,login,id,mot_de_passe,type FROM utilisateur WHERE login = :pseudo');
    $query->bindValue(':pseudo', $utilisateur['username'], PDO::PARAM_STR);
    $query->execute();
    return $query->fetch();
}

?>
