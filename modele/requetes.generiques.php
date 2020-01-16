<?php

// requêtes génériques pour récupérer les données de la BDD

// Appel du fichier déclarant PDO
require("modele/connexion.php");
require("modele/requetes.mesures.php");
/**
 * Récupère tous les éléments d'une table
 * @param PDO $bdd
 * @param string $table
 * @return array
 */
function recupereTous(PDO $bdd, string $table): array
{
    $query = 'SELECT * FROM ' . $table;
    return $bdd->query($query)->fetchAll();
}

/**
 * Recherche des éléments en fonction des attributs passés en paramètre
 * @param PDO $bdd
 * @param string $table
 * @param array $attributs
 * @return array
 */
function recherche(PDO $bdd, string $table, array $attributs): array
{

    $where = "";
    foreach ($attributs as $key => $value) {
        $where .= "$key = :$key" . ", ";
    }
    $where = substr_replace($where, '', -2, 2);

    $statement = $bdd->prepare('SELECT * FROM ' . $table . ' WHERE ' . $where);


    foreach ($attributs as $key => $value) {
        $statement->bindParam(":$key", $value);
    }
    $statement->execute();

    return $statement->fetchAll();

}

/**
 * Insère un nouvel élément dans une table
 * @param PDO $bdd
 * @param array $values
 * @param string $table
 * @return boolean
 */
function insertion(PDO $bdd, array $values, string $table): bool
{

    $attributs = '';
    $valeurs = '';
    foreach ($values as $key => $value) {

        $attributs .= $key . ', ';
        $valeurs .= ':' . $key . ', ';
        $v[] = $value;
    }
    $attributs = substr_replace($attributs, '', -2, 2);
    $valeurs = substr_replace($valeurs, '', -2, 2);

    $query = ' INSERT INTO ' . $table . ' (' . $attributs . ') VALUES (' . $valeurs . ')';

    $donnees = $bdd->prepare($query);
    $requete = "";
    foreach ($values as $key => $value) {
        $requete = $requete . $key . ' : ' . $value . ', ';
        $donnees->bindParam($key, $values[$key], PDO::PARAM_STR);
    }

    return $donnees->execute();
}

function recupereChamp(PDO $bdd, $table, $champ)
{
    $query = 'SELECT ' . $champ . ' FROM ' . $table;
    return $bdd->query($query)->fetchAll();
}

/**
 * Modifie l'adresse mail
 * @param string $nouvelEMail
 */
function modifierMail(PDO $bdd, string $nouvelEmail)
{
    $req = $bdd->prepare('UPDATE utilisateur SET adresse_mail = :nve WHERE login = :lgn');
    $req->execute(array(
        'nve' => $nouvelEmail,
        'lgn' => $_SESSION['login']
    ));
}

/**
 * Modifie le mdp
 * @param string $nouveauMdp
 */
function modifierMdp(PDO $bdd, string $nouveauMdp)
{
    $req = $bdd->prepare('UPDATE utilisateur SET mot_de_passe = :nvmdp WHERE login = :lgn');
    $req->execute(array(
        'nvmdp' => $nouveauMdp,
        'lgn' => $_SESSION['login']
    ));
}

/**
 * Modifie le numéro de téléphone
 * @param string $nouveauNum
 */
function modifierNumero(PDO $bdd, string $nouveauNum)
{
    $req = $bdd->prepare('UPDATE utilisateur SET numero_telephone = :nve WHERE login = :lgn');
    return $req->execute(array(
        'nve' => $nouveauNum,
        'lgn' => $_SESSION['login']));
}

/**
 * Renvoie le mdp
 * @param string $username
 */
function recupereMdp(PDO $bdd, array $utilisateur)
{
    $query = $bdd->prepare('SELECT mot_de_passe FROM utilisateur WHERE login = :pseudo');
    $query->bindValue(':pseudo', $utilisateur['username'], PDO::PARAM_STR);
    $query->execute();
    return $query->fetch();
}

/**
 * Hache un mot de passe
 * @param $mdp
 * @return string
 */
function hachagePassword($mdp): string
{
    $part1 = strlen($mdp);
    $part1 = ((((($part1 ** $part1) + 5) / 3) + 30) / $part1);

    $part2 = strlen($part1 . $mdp);
    $part2 = (((($part2 + 65) / 3) * $part2) ** 3);

    $part3 = strlen($part2 . $part1 . $mdp . $part2);
    $part3 = ((((($part2 * $part3) + 19) / $part1) + 6) * 5);

    $texthash = md5($part1 . $mdp . $part3);
    $texthash2 = sha1($part2 . $mdp . $part3 . $texthash);
    $texthash3 = hash('sha512', $texthash . $mdp . $texthash2 . $part3);

    $lol = $texthash . $texthash3 . $texthash2;
    return $lol;
}

?>

