<?php

function recuperResultat(PDO $bdd, array $mesure)
{
    $query = $bdd->prepare('SELECT valeur,instant,unite FROM mesure 
INNER JOIN utilisateur ON mesure.Utilisateur_id=utilisateur.id 
INNER JOIN capteur_actionneur ON Capteur_Actionneur_idCapteur = idCapteur
WHERE utilisateur.id = :qui AND mesure.Capteur_Actionneur_idCapteur = :numeroCapteur');
    $query->bindParam(':numeroCapteur', $mesure['capteur'], PDO::PARAM_INT);
    $query->bindParam(':qui', $mesure['idUtilisateur'], PDO::PARAM_INT);
    $query->execute();
    return $query->fetchAll();
}

function recuperMoyenne(PDO $bdd){
    $query = $bdd->prepare('SELECT AVG(valeur) FROM mesure');
    $query->execute();
    return $query->fetchAll();
}


/*

$values = [
    'capteur' => 1,
    'idUtilisateur' => 6
];
$donneesMesure = recuperResultat($bdd, $values);
foreach ($donneesMesure as $element) { ?>
    <P><?php echo  $element['valeur']; ?></P>
<?php } */
?>