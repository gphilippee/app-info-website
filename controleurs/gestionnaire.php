<?php

/**
 * Le contrôleur :
 * - définit le contenu des variables à afficher
 * - identifie et appelle la vue
 */

/**
 * Contrôleur du gestionnaire
 */
// on vérifie bien que le visiteur est un gestionnaire, puis on appelle le modèle qui fait appel aux requetes génériques
if ($_SESSION['type'] == "gestionnaire") {
    require('./modele/requetes.gestionnaire.php');
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

    case 'accueil':
        //affichage de l'accueil
        $css = "accueil/CSSnav";
        $vue = "accueil/accueilGestionnaire";
        $title = "Accueil Gestionnaire";
        break;

    case 'alerteTemperature':
        $title = "Alertes des Capteurs de températures";
        $vue = "alerte/alerteTemperature";
        $css = "alerte/CSSalertes";
        break;

    case 'alerteCardiaque':
        $title = "Alertes des Capteurs cardiaques";
        $vue = "alerte/alerteCardiaque";
        $css = "alerte/CSSalertes";
        break;

    case 'alerteSonore':
        $title = "Alertes des Capteurs sonores";
        $vue = "alerte/alerteSonore";
        $css = "alerte/CSSalertes";
        break;

    case 'actionneurLumineux':
        $title = "Actionneur Lumineux";
        $vue = "actionneur/actionneurLumineux";
        $css = "actionneur/CSSactionneur";
        break;

    case 'actionneurSonore':
        $title = "Actionneur Sonore";
        $vue = "actionneur/actionneurSonore";
        $css = "actionneur/CSSactionneur";
        break;

    case 'donneesUtilisateursAnonymes' :
        $title = "Données des Utilisateurs Anonymes";
        $donneesUtilisateurs = recupereDonneesUtilisateurs($bdd);
        $vue = "resultat/donnees_des_candidats_anonymes";
        $css = "user/CSSuser";
        break;
    /**
     * Actionneur
     */

    case 'actionneur':
        $title = "Actionneur";
        $vue = "actionneur/actionneur";
        $css = "actionneur/CSSactionneur";
        $donneesActionneur = recupereTous($bdd, "capteur_actionneur");
        break;

    case 'ajoutActionneur':
        $title ="Ajout actionneur";
        $vue = "actionneur/ajoutActionneur";
        $css = "actionneur/CSSactionneur";
        // Cette partie du code est appelée si le formulaire a été posté
        if (isset($_POST['idActionneur']) && isset($_POST['typeActionneur'])) {
            if (empty($_POST['idActionneur']) OR empty($_POST['typeActionneur'])) {
                $alerte = "Aucune saisie";
            }
            else {
                $values = [
                    'idActionneur' => htmlspecialchars($_POST['idActionneur']),
                    'typeActionneur' => htmlspecialchars($_POST['typeActionneur']),
                    'uniteCapteur' => htmlspecialchars($_POST['uniteCapteur'])
                ];
                // Appel à la BDD à travers une fonction du modèle.
                $retour = addActionneur($bdd, $values);
                if ($retour) {
                    $alerte = "Ajout réussie";
                    header('Refresh: 0.5,index.php?cible=admin&fonction=actionneur');  // refresh dans 0.5sec
                } else {
                    $alerte = "L'ajout n'a pas fonctionné";
                }
            }
        }
        break;

    case 'updateActionneur':
        $title ="Modifier les actionneurs";
        $vue ="actionneur/updateActionneur";
        $css="actionneur/CSSactionneur";
        $valeursActionneurs = recupereTous($bdd, "capteur_actionneur");
        break;

    case 'deleteActionneur':
        $title ="Supprimer un actionneur";
        $vue ="actionneur/deleteActionneur";
        $css ="actionneur/CSSActionneur";
        if (isset($_POST['id'])) {
            if (empty($_POST["id"])) {
                $alerte = "Aucune saisie";
            } else {
                // Appel à la BDD à travers une fonction du modèle.
                $retour = deleteActionneur($bdd, htmlspecialchars($_POST['id']));
                if ($retour) {
                    $alerte = "Suppression réussie";
                    header('Refresh: 0.5,index.php?cible=admin&fonction=actionneur');  // refresh dans 0.5sec
                } else {
                    $alerte = "La suppression dans la FAQ n'a pas fonctionné";
                }
            }
        }
        break;
    /**
     * Capteur
     */
    case 'capteur':
        $title = 'Capteur';
        $vue = 'actionneur/capteur';
        $css ='actionneur/CSSactionneur';
        $donneesCapteur = recupereTous($bdd, "capteur_actionneur");
        break;

    case 'ajoutCapteur':
        $title ="Ajout capteurs";
        $vue = "actionneur/ajoutCapteur";
        $css = "actionneur/CSSactionneur";
        // Cette partie du code est appelée si le formulaire a été posté
        if (isset($_POST['idCapteur']) && isset($_POST['typeCapteur'])) {
            if (empty($_POST['idCapteur']) OR empty($_POST['typeCapteur'])) {
                $alerte = "Aucune saisie";
            }
            else {
                $values = [
                    'idCapteur' => htmlspecialchars($_POST['idCapteur']),
                    'typeCapteur' => htmlspecialchars($_POST['typeCapteur']),
                    'uniteCapteur' => htmlspecialchars($_POST['uniteCapteur'])
                ];
                // Appel à la BDD à travers une fonction du modèle.
                $retour = addCapteur($bdd, $values);
                if ($retour) {
                    $alerte = "Ajout réussie";
                    header('Refresh: 0.5,index.php?cible=admin&fonction=capteur');  // refresh dans 0.5sec
                } else {
                    $alerte = "L'ajout n'a pas fonctionné";
                }
            }
        }
        break;

    case 'updateCapteur':
        $title ="Modifier les capteurs";
        $vue ="actionneur/updateCapteur";
        $css="actionneur/CSSactionneur";
        $valeursCapteurs = recupereTous($bdd, "capteur_actionneur");
        break;

    case 'deleteCapteur':
        $title ="Supprimer un capteur";
        $vue ="actionneur/deleteCapteur";
        $css ="actionneur/CSSActionneur";
        if (isset($_POST['id'])) {
            if (empty($_POST["id"])) {
                $alerte = "Aucune saisie";
            } else {
                // Appel à la BDD à travers une fonction du modèle.
                $retour = deleteCapteur($bdd, htmlspecialchars($_POST['id']));
                if ($retour) {
                    $alerte = "Suppression réussie";
                    header('Refresh: 0.5,index.php?cible=admin&fonction=capteur');  // refresh dans 0.5sec
                } else {
                    $alerte = "La suppression dans la FAQ n'a pas fonctionné";
                }
            }
        }
        break;

    /**
     *  Utilisateur
     */
    case 'user' :
        $title = "Liste des Utilisateurs";
        $user = recupereTous($bdd, "utilisateur");
        $vue = "user/user";
        $css = "user/CSSuser";
        break;

    case 'ajoutUSER':
        $vue = "user/ajoutUSER";
        $css = "user/CSSuser";
        // Cette partie du code est appelée si le formulaire a été posté
        if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date']) && isset($_POST['telephone']) && isset($_POST['taille']) && isset($_POST['poids']) && isset($_POST['type']) && isset($_POST['login']) && isset($_POST['email'])) {
            if (empty($_POST['nom']) OR empty($_POST['prenom']) OR empty($_POST['date']) OR empty($_POST['telephone']) OR empty($_POST['taille']) OR empty($_POST['poids']) OR empty($_POST['type']) OR empty($_POST['login']) OR empty($_POST['email'])) {
                $alerte = "Aucune saisie";
            } elseif (!filter_var(htmlspecialchars($_POST['email']), FILTER_VALIDATE_EMAIL)) {
                $alerte = "Adresse email invalide";
            } else {
                $values = [
                    'nom' => htmlspecialchars($_POST['nom']),
                    'prenom' => htmlspecialchars($_POST['prenom']),
                    'date_naissance' => htmlspecialchars($_POST['date']),
                    'telephone' => htmlspecialchars($_POST['telephone']),
                    'taille' => htmlspecialchars($_POST['taille']),
                    'poids' => htmlspecialchars($_POST['poids']),
                    'type' => htmlspecialchars($_POST['type']),
                    'login' => htmlspecialchars($_POST['login']),
                    'email' => htmlspecialchars($_POST['email']),
                    'password' => hachagePassword(chaine_aleatoire(8))
                ];
                // Appel à la BDD à travers une fonction du modèle.
                $retour = addUser($bdd, $values);
                if ($retour) {
                    $alerte = "Ajout réussie";
                    header('Refresh: 0.5,index.php?cible=gestionnaire&fonction=user');  // refresh dans 0.5sec
                } else {
                    $alerte = "L'ajout n'a pas fonctionné";
                }
            }
        }
        break;

    case 'updateUSER':
        $vue = "user/updateUSER";
        $css = "user/CSSuser";
        $user = recupereUser($bdd, $_GET['id']);
        // Cette partie du code est appelée si le formulaire a été posté
        if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date']) && isset($_POST['telephone']) && isset($_POST['taille']) && isset($_POST['poids']) && isset($_POST['type']) && isset($_POST['login']) && isset($_POST['email'])) {
            if (empty($_POST['nom']) OR empty($_POST['prenom']) OR empty($_POST['date']) OR empty($_POST['telephone']) OR empty($_POST['taille']) OR empty($_POST['poids']) OR empty($_POST['type']) OR empty($_POST['login']) OR empty($_POST['email'])) {
                $alerte = "Aucune saisie";
            } elseif (!filter_var(htmlspecialchars($_POST['email']), FILTER_VALIDATE_EMAIL)) {
                $alerte = "Adresse email invalide";
            } else {
                // Appel à la BDD à travers une fonction du modèle.
                $values = [
                    'id' => htmlspecialchars($_POST['id']),
                    'nom' => htmlspecialchars($_POST['nom']),
                    'prenom' => htmlspecialchars($_POST['prenom']),
                    'date_naissance' => htmlspecialchars($_POST['date']),
                    'telephone' => htmlspecialchars($_POST['telephone']),
                    'taille' => htmlspecialchars($_POST['taille']),
                    'poids' => htmlspecialchars($_POST['poids']),
                    'type' => htmlspecialchars($_POST['type']),
                    'login' => htmlspecialchars($_POST['login']),
                    'email' => htmlspecialchars($_POST['email'])
                ];
                $retour = modifyUser($bdd, $values);
                if ($retour) {
                    $alerte = "La modification a réussie";
                    header('Refresh: 0.5,index.php?cible=gestionnaire&fonction=user');  // refresh dans 0.5sec
                } else {
                    $alerte = "La modification n'a pas fonctionné";
                }
            }
        }
        break;

    case 'deleteUSER':
        $vue = "user/deleteUSER";
        $css = "user/CSSuser";
        // Cette partie du code est appelée si le formulaire a été posté
        if (isset($_POST['id'])) {
            if (empty($_POST["id"])) {
                $alerte = "Aucune saisie";
            } else {
                // Appel à la BDD à travers une fonction du modèle.
                $retour = deleteUser($bdd, htmlspecialchars($_POST['id']));
                if ($retour) {
                    $alerte = "Suppression réussie";
                    header('Refresh: 0.5,index.php?cible=gestionnaire&fonction=user');  // refresh dans 0.5sec
                } else {
                    $alerte = "La suppression n'a pas fonctionné";
                }
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
if ($vue !== 'accueil/accueilGestionnaire') {
    require('vues/accueil/accueilGestionnaire.php');
}
require('vues/' . $vue . '.php');
if ($vue == 'accueil/accueilGestionnaire') {
    require('vues/header/footer.php');
} else {
    require('vues/header/footerFixed.php');
}


