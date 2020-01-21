<?php

// on récupère les requêtes génériques
require('requetes.generiques.php');

function recupereDonneesUtilisateurs(PDO $bdd): array
{
    $query = 'SELECT id, nom, prenom, valeur, instant, unite FROM utilisateur 
INNER JOIN mesure ON mesure.Utilisateur_id = utilisateur.id
INNER JOIN capteur_actionneur ON Capteur_Actionneur_idCapteur = idCapteur ORDER BY nom,prenom';
    return $bdd->query($query)->fetchAll();
}

/**
 * Ajoute une nouvelle question dans la base de données
 * @param array $question
 */
function addQuestion(PDO $bdd, array $question)
{
    $query = 'INSERT INTO faq (contenuQuestion,contenuReponse) VALUES (:question, :reponse)';
    $donnees = $bdd->prepare($query);
    $donnees->bindParam(":question", $question['question'], PDO::PARAM_STR);
    $donnees->bindParam(":reponse", $question['reponse'], PDO::PARAM_STR);
    return $donnees->execute();

}

/**
 * Supprimer une question dans la base de données
 * @param $id
 */
function deleteQuestion(PDO $bdd, $id)
{
    $query = 'DELETE FROM faq WHERE idQA = :id ';
    $donnees = $bdd->prepare($query);
    $donnees->bindValue(":id", $id);
    return $donnees->execute();
}


/**
 * Modifier une question
 * @param array $question
 */
function modifyQuestion(PDO $bdd, array $question)
{
    $query = 'UPDATE faq SET contenuQuestion = :question, contenuReponse = :reponse WHERE idQA = :id ';
    $donnees = $bdd->prepare($query);
    $donnees->bindParam(":id", $question['id'], PDO::PARAM_STR);
    $donnees->bindParam(":question", $question['question'], PDO::PARAM_STR);
    $donnees->bindParam(":reponse", $question['reponse'], PDO::PARAM_STR);
    return $donnees->execute();
}

/**
 * Recupere la question et la reponse en fonction de l'id
 * @param $id
 */
function recupereQuestion(PDO $bdd, $id)
{
    $query = $bdd->prepare('SELECT * FROM faq WHERE idQA = :id ');
    $query->bindValue(':id', $id);
    $query->execute();
    return $query->fetch();
}

function modifierCGU(PDO $bdd, $contenuCGU)
{
    $req = $bdd->prepare('UPDATE donneesfixes SET donneeFixe = :newCGU WHERE (idFixe = 1)');
    $req->bindValue(':newCGU', $contenuCGU, PDO::PARAM_STR);
    return $req->execute();
}

function modifierMentionLegale(PDO $bdd, $contenuML)
{
    $req = $bdd->prepare('UPDATE donneesfixes SET donneeFixe = :newML WHERE (idFixe = 2)');
    $req->bindValue(':newML', $contenuML, PDO::PARAM_STR);
    return $req->execute();
}

function modifierNumeroSite(PDO $bdd, $numero)
{    //le numéro affiché sur la page Nous contacter
    $req = $bdd->prepare('UPDATE donneesfixes SET donneeFixe = :newNumero WHERE (idFixe = 3)');
    $req->bindValue(':newNumero', $numero, PDO::PARAM_STR);
    return $req->execute();
}

function modifierMailSite(PDO $bdd, $mail)
{      //le mail affiché sur la page Nous contacter
    $req = $bdd->prepare('UPDATE donneesfixes SET donneeFixe = :newMail WHERE (idFixe = 4)');
    $req->bindValue(':newMail', $mail, PDO::PARAM_STR);
    return $req->execute();
}

function modifierQSN(PDO $bdd, $contenuQSN)
{      //modifier le qui sommes-nous
    $req = $bdd->prepare('UPDATE donneesfixes SET donneeFixe = :newQSN WHERE (idFixe = 5)');
    $req->bindValue(':newQSN', $contenuQSN, PDO::PARAM_STR);
    return $req->execute();
}

?>
