<?php
/**
 * Contrôleur de l'admin
 */

// on vérifie bien que le visiteur est un admin.
if ($_SESSION['type'] == "admin") {
    include('./modele/requetes.admin.php');
} else {
    throw new Exception("Vous vous êtes égaré.");
}

// si la fonction n'est pas définie, on choisit d'afficher l'accueil
if (!isset($_GET['fonction']) || empty($_GET['fonction'])) {
    $function = "accueil";
} else {
    $function = htmlspecialchars($_GET['fonction']);
}
$alerte = false;

switch ($function) {

    case 'donneesUtilisateurs' :
        $title = "Données des Utilisateurs";
        $donneesUtilisateurs = recupereDonneesUtilisateurs($bdd);
        $vue = "resultat/donnees_des_candidats";
        $css = "user/CSSuser";
        break;

    case 'modifDonneesFixes':
        $title = "Modifier les données fixes";
        $vue = "backoffice/modifierDonneesFixes";
        $css = "backoffice/CSSdonneesFixes";
        break;

    case 'modifCGU':
        $title = "Modifier les CGU";
        $vue = "backoffice/cguAdmin";
        $css = "header/CSSlegal";
        $donneesCGU = recupereTous($bdd, "donneesfixes");
        if (isset($_POST['contenuCGU'])) {
            $contenuCGU = htmlspecialchars($_POST['contenuCGU']);
            $retour = modifierCGU($bdd, $contenuCGU);
            if ($retour) {
                $alerte = "Modification réussie";
                header('Refresh: 0.5, index.php?cible=admin&fonction=modifDonneesFixes');  // refresh dans 0.5sec
            } else {
                $alerte = "La modification des CGU n'a pas fonctionné";
            }
        }
        break;

    case 'modifMentionsLegales':
        $title = "Modifier les Mentions légales";
        $vue = "backoffice/mentionLegaleAdmin";
        $css = "header/CSSlegal";
        $donneesML = recupereTous($bdd, "donneesfixes");
        if (isset($_POST['contenuML'])) {
            $contenuML = htmlspecialchars($_POST['contenuML']);
            $retour = modifierMentionLegale($bdd, $contenuML);
            if ($retour) {
                $alerte = "Modification réussie";
                header('Refresh: 0.5, index.php?cible=admin&fonction=modifDonneesFixes');  //refresh dans 0.5sec
            } else {
                $alerte = "La modification des mentions légales n'a pas fonctionné";
            }
        }
        break;

    case 'modifNousContacter':
        $title = "Modifier la page Nous contacter";
        $vue = "backoffice/nousContacterAdmin";
        $css = "header/CSSlegal";
        $donneesNousContacter = recupereTous($bdd, "donneesfixes");
        if (isset($_POST['contenuMail'])) {
            $contenuMail = htmlspecialchars($_POST['contenuMail']);
            $retour = modifierMailSite($bdd, $contenuMail);
            if ($retour) {
                $alerte = "Modification réussie";
                header('Refresh: 0.5, index.php?cible=admin&fonction=modifNousContacter');  //refresh dans 0.5sec
            } else {
                $alerte = "La modification du mail n'a pas fonctionné";
            }
        } elseif (isset($_POST['numeroTelephone'])) {
            $numeroTelephone = htmlspecialchars($_POST['numeroTelephone']);
            if (preg_match("#[+]?[0-9]{2}([-. ]?[0-9]){4,5}$#", $numeroTelephone)) {    //utilisation des expressions régulières pour controler la saisie de l'utilisateur
                $retour = modifierNumeroSite($bdd, $numeroTelephone);
                if ($retour) {
                    $alerte = "Modification réussie";
                    header('Refresh: 0.5, index.php?cible=admin&fonction=modifNousContacter');
                } else {
                    $alerte = "La modification du numéro de contact n'a pas fonctionné";
                }
            } else {
                $alerte = "Saisie incorrecte";
            }
        }
        break;


    case 'modifQSN':
        $title = "Modifier le contenu de Qui sommes-nous";
        $vue = "backoffice/quisommesnousAdmin";
        $css = "header/CSSlegal";
        $donneesQSN = recupereTous($bdd, "donneesfixes");
        if (isset($_POST['contenuQSN'])) {
            $contenuQSN = htmlspecialchars($_POST['contenuQSN']);
            $retour = modifierQSN($bdd, $contenuQSN);
            if ($retour) {
                $alerte = "Modification réussie";
                header('Refresh: 0.5, index.php?cible=admin&fonction=modifDonneesFixes');
            } else {
                $alerte = "La modification du contenu Qui sommes-nous n'a pas fonctionné";
            }
        }
        break;

    case 'faq':
        $title = "Modifier FAQ";
        $vue = "faq/faqAdmin";
        $css = "faq/CSSfaq";
        $faq = recupereTous($bdd, "faq");
        break;

    case 'ajoutFAQ':
        $vue = "faq/ajoutFAQ";
        $css = "faq/CSSfaq";
        if (isset($_POST['ajoutQuestion']) and isset($_POST['ajoutReponse'])) {
            $values = [
                'question' => htmlspecialchars($_POST['ajoutQuestion']),
                'reponse' => htmlspecialchars($_POST['ajoutReponse'])
            ];
            $retour = addQuestion($bdd, $values);
            if ($retour) {
                $alerte = "Ajout réussie";
                header('Refresh: 0.5,index.php?cible=admin&fonction=faq');
            } else {
                $alerte = "L'ajout dans la FAQ n'a pas fonctionné";
            }
        }
        break;

    case 'supprimerFAQ':
        $vue = "faq/supprimerFAQ";
        $css = "faq/CSSfaq";
        if (isset($_POST['id'])) {
            $retour = deleteQuestion($bdd, htmlspecialchars($_POST['id']));
            if ($retour) {
                $alerte = "Suppression réussie";
                header('Refresh: 0.5,index.php?cible=admin&fonction=faq');
            } else {
                $alerte = "La suppression dans la FAQ n'a pas fonctionné";
            }
        }
        break;

    case 'updateFAQ':
        $vue = "faq/updateFAQ";
        $css = "faq/CSSfaq";
        $faq = recupereQuestion($bdd, $_GET['id']);
        if (isset($_POST['question']) && isset($_POST['reponse'])) {
            $values = [
                'id' => htmlspecialchars($_POST['id']),
                'question' => htmlspecialchars($_POST['question']),
                'reponse' => htmlspecialchars($_POST['reponse'])
            ];
            $retour = modifyQuestion($bdd, $values);
            if ($retour) {
                $alerte = "La modification a réussie";
                header('Refresh: 0.5,index.php?cible=admin&fonction=faq');  // refresh dans 0.5sec
            } else {
                $alerte = "La modification dans la FAQ n'a pas fonctionné";
            }
        }
        break;

    default:
        // si aucune fonction ne correspond au paramètre function passé en GET
        $vue = "erreur404";
        $title = "error404";
        $message = "Erreur 404 : la page recherchée n'existe pas.";
}

require('vues/header/header.php');
if ($vue !== 'accueil/accueilAdmin') {
    require('vues/accueil/accueilAdmin.php');
}
require('vues/' . $vue . '.php');
require('vues/header/footerFixed.php');
