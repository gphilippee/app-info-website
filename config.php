<?php
$drapeau =null;
if(empty($_COOKIE['lang'])){
    setcookie("lang", "fr", time()+3600);  /* expire dans 1 heure */
}
switch($_COOKIE['lang']){
    case "fr":
        $fichier_langage = "traduction/fr.inc";
        break;
    case "en":
        $fichier_langage = "traduction/en.inc";
        break;
}


if ($_COOKIE['lang'] == "fr") {
    $drapeau="pictures/drapeau_FR.png";
} else {
    $drapeau="pictures/drapeau_EN.png";
}

require($fichier_langage);
?>

