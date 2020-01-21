<?php
/**
 * Contrôleur de l'utilisateur
 */

// on vérifie bien que l'utilisateur est connecté
if ($_SESSION['type'] == "gestionnaire" OR $_SESSION['type'] == "admin" OR $_SESSION['type'] == "candidat" ) {
    include('./modele/requetes.utilisateurs.php');
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

    case 'profil':
        $css = "profil/CSSprofil";
        $vue = "profil/profil";
        $title = "Profil";
        break;

    case 'changementMdp':
        $css = "profil/CSSchangement";
        $vue = "profil/changementMdp";
        $title = "Changement mot de passe";
        $values = ['username' => $_SESSION['login']];
        $ancienMdp = implode(recupereMdp($bdd, $values));
        if (isset($_POST['ancienMdp']) && isset($_POST['nouveauMdp']) && isset($_POST['confirmationNouveauMdp'])) {
            $a = hachagePassword($_POST['ancienMdp']);
            $b = $a . $a;
            if (($b == $ancienMdp) && ($_POST['nouveauMdp'] == $_POST['confirmationNouveauMdp'])) {
                modifierMdp($bdd, hachagePassword($_POST['nouveauMdp']));
                header('Refresh: 0.5,index.php?cible=utilisateurs&fonction=profil');
                $alerte = 'Mot de passe correctement changé';
            } else {
                $alerte = 'Une ou plusieurs saisie(s) incorrecte(s)';
            }
        }
        break;

    case 'changementNumero':
        $css = "profil/CSSchangement";
        $vue = "profil/changementNumero";
        $title = "Changement Numero";
        $values = ['username' => $_SESSION['login']];
        if (isset($_POST['nouveauNumero'])) {
            $nouveauNumero = htmlspecialchars($_POST['nouveauNumero']);
            if (preg_match("#[+]?[0-9]{2}([-. ]?[0-9]){2}$#", $nouveauNumero)) {   ////requiert un numéro de 4 chiffres minimum
                $retour = modifierNumero($bdd, $nouveauNumero);
                $_SESSION['numero_telephone'] = htmlspecialchars($_POST['nouveauNumero']);
                if ($retour) {
                    $alerte = "Modification réussie";
                    header('Refresh: 0.5,index.php?cible=utilisateurs&fonction=profil');
                } else {
                    $alerte = "La modification du numéro n'a pas fonctionné";
                }
            } else {
                $alerte = "Saisie incorrecte";
            }
        }
        break;

    case 'changementEmail':
        $css = "profil/CSSchangement";
        $vue = "profil/changementEmail";
        $title = "Changement Email";
        $values = ['username' => $_SESSION['login']];
        if (isset($_POST['nouvelEmail'])) {
            if (!filter_var(htmlspecialchars($_POST['nouvelEmail']), FILTER_VALIDATE_EMAIL)) {
                $alerte = "Adresse email invalide";
            }else{
                modifierMail($bdd, $_POST['nouvelEmail']);
                $_SESSION['email'] = htmlspecialchars($_POST['nouvelEmail']);
                header('Refresh: 0.5,index.php?cible=utilisateurs&fonction=profil');
                $alerte = 'Changement correctement effectué';
            }
        }
        break;

    case 'resultats':
        $title = "Résultat";
        $css = "user/CSSuser";
        $vue = "resultat/resultats";
        $values = [
            'capteur' => 1,
            'idUtilisateur' => $_SESSION['id']
        ];
        $donneesMesure = recuperResultat($bdd, $values);
        $moyenneResultats = recuperMoyenne($bdd);
        break;

    default:
        // si aucune fonction ne correspond au paramètre function passé en GET
        $vue = "erreur404";
        $css = "CSSerreur";
        $title = "error404";
        $message = "Erreur 404 : la page recherchée n'existe pas.";
}

include('vues/header/header.php');
include('vues/' . $vue . '.php');
if ($vue == 'accueil/accueilClient') {
    include('vues/header/footer.php');
} else {
    include('vues/header/footerFixed.php');
}
