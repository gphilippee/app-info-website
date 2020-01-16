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

/**
 * Ajoute un nouveau utilisateur dans la base de données
 * @param array $utilisateur
 */
function addUser(PDO $bdd, array $utilisateur)
{
    $query = 'INSERT INTO utilisateur (nom,prenom,date_naissance,numero_telephone,taille,poids,type,login,mot_de_passe,adresse_mail) VALUES (:nom,:prenom,:date,:telephone,:taille,:poids,:type,:login,:password,:email)';
    $donnees = $bdd->prepare($query);
    $donnees->bindParam(":nom", $utilisateur['nom']);
    $donnees->bindParam(":prenom", $utilisateur['prenom']);
    $donnees->bindParam(":date", $utilisateur['date_naissance']);
    $donnees->bindParam(":telephone", $utilisateur['telephone']);
    $donnees->bindParam(":taille", $utilisateur['taille']);
    $donnees->bindParam(":poids", $utilisateur['poids']);
    $donnees->bindParam(":type", $utilisateur['type']);
    $donnees->bindParam(":login", $utilisateur['login']);
    $donnees->bindParam(":password", $utilisateur['password']);
    $donnees->bindParam(":email", $utilisateur['email']);
    return $donnees->execute();
}

function addActionneur(PDO $bdd, array $valeur)
{
    $query = 'INSERT INTO capteur_actionneur (idCapteur, typeActionneur, unite) VALUES (:id, :typeActionneur, :unite)';
    $donnees = $bdd->prepare($query);
    $donnees->bindParam(":id", $valeur['idActionneur']);
    $donnees->bindParam(":typeActionneur", $valeur['typeActionneur']);
    $donnees->bindParam(":unite", $valeur['uniteCapteur']);
    return $donnees->execute();
}

function addCapteur(PDO $bdd, array $valeur)
{
    $query = 'INSERT INTO capteur_actionneur (idCapteur, typeCapteur, unite) VALUES (:id, :typeCapteur, :unite)';
    $donnees = $bdd->prepare($query);
    $donnees->bindParam(":id", $valeur['idCapteur']);
    $donnees->bindParam(":typeCapteur", $valeur['typeCapteur']);
    $donnees->bindParam(":unite", $valeur['uniteCapteur']);
    return $donnees->execute();
}

function recupActionneur(PDO $bdd, array $valeur){
    $query = $bdd->prepare('SELECT idCapteur FROM capteur_actionneur WHERE idCapteur = :id ');
    $query->bindValue(':id', $valeur['idCapteur']);
    $query->execute();
    return $query->fetch();
}

function deleteActionneur(PDO $bdd, $id)
{
    $query = 'DELETE FROM capteur_actionneur WHERE idCapteur = :id ';
    $donnees = $bdd->prepare($query);
    $donnees->bindValue(":id", $id);
    return $donnees->execute();
}

function deleteCapteur(PDO $bdd, $id)
{
    $query = 'DELETE FROM capteur_actionneur WHERE idCapteur = :id ';
    $donnees = $bdd->prepare($query);
    $donnees->bindValue(":id", $id);
    return $donnees->execute();
}

/**
 * Supprimer une question dans la base de données
 * @param $id
 */
function deleteUser(PDO $bdd, $id)
{
    $query = 'DELETE FROM utilisateur WHERE id = :id ';
    $donnees = $bdd->prepare($query);
    $donnees->bindValue(":id", $id);
    return $donnees->execute();
}

/**
 * Modifier une question
 * @param array $question
 */
function modifyUser(PDO $bdd, array $utilisateur)
{
    $query = 'UPDATE utilisateur SET nom = :nom, prenom = :prenom, date_naissance = :date, numero_telephone = :telephone, taille= :taille, poids= :poids, type=:type, login =:login, adresse_mail=:email WHERE id = :id ';
    $donnees = $bdd->prepare($query);
    $donnees->bindParam(":id", $utilisateur['id']);
    $donnees->bindParam(":nom", $utilisateur['nom']);
    $donnees->bindParam(":prenom", $utilisateur['prenom']);
    $donnees->bindParam(":date", $utilisateur['date_naissance']);
    $donnees->bindParam(":telephone", $utilisateur['telephone']);
    $donnees->bindParam(":taille", $utilisateur['taille']);
    $donnees->bindParam(":poids", $utilisateur['poids']);
    $donnees->bindParam(":type", $utilisateur['type']);
    $donnees->bindParam(":login", $utilisateur['login']);
    $donnees->bindParam(":email", $utilisateur['email']);
    return $donnees->execute();
}

/**
 * Recupere la question et la reponse en fonction de l'id
 * @param $id
 */
function recupereUser(PDO $bdd, $id)
{
    $query = $bdd->prepare('SELECT * FROM utilisateur WHERE id = :id ');
    $query->bindValue(':id', $id);
    $query->execute();
    return $query->fetch();
}

/**
 * Vérifie si l'utilisateur existe dans la BDD
 * @param array $utilisateur
 */
function bddPassword(PDO $bdd, array $utilisateur)
{
    $query = $bdd->prepare('SELECT mot_de_passe,type FROM utilisateur WHERE login = :pseudo');
    $query->bindValue(':pseudo', $utilisateur['username'], PDO::PARAM_STR);
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
