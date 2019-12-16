<div id="vide">

</div>
<div id="allinone">
<nav id="naviguation">
    <div id="margin"></div>
    <form id="FORMfaqAdmin" action="index.php" method="post">
        <input type="hidden" name="cible" value="admin"/>
        <input type="hidden" name="fonction" value="faq"/>
    </form>
    <h3 class="titre"><a href="#" onclick='document.getElementById("FORMfaqAdmin").submit()'><span class="ruban">GERER LA FAQ</span></a></h3>
    <form id="FORMuser" action="index.php" method="post">
        <input type="hidden" name="cible" value="admin"/>
        <input type="hidden" name="fonction" value="user"/>
    </form>
    <h3 class="titre"><a href="#" onclick='document.getElementById("FORMuser").submit()'><span class="ruban">GERER LES UTILISATEURS</span></a></h3>
    <h3 class="titre"><span class="ruban">ALERTE</span></h3>
    <form id="FORMalertTemp" action="index.php" method="post">
        <input type="hidden" name="cible" value="admin"/>
        <input type="hidden" name="fonction" value="alerteTemperature"/>
    </form>
    <form id="FORMalertCard" action="index.php" method="post">
        <input type="hidden" name="cible" value="admin"/>
        <input type="hidden" name="fonction" value="alerteCardiaque"/>
    </form>
    <form id="FORMalertSon" action="index.php" method="post">
        <input type="hidden" name="cible" value="admin"/>
        <input type="hidden" name="fonction" value="alerteSonore"/>
    </form>
    <ul>
        <li><a class="sous-titre" href="#" onclick='document.getElementById("FORMalertTemp").submit()'>Alerte capteur température</a></li>
        <li><a class="sous-titre" href="#" onclick='document.getElementById("FORMalertCard").submit()'>Alerte capteur rythme cardiaque</a></li>
        <li><a class="sous-titre" href="#" onclick='document.getElementById("FORMalertSon").submit()'>Alerte capteur sonore</a></li>
    </ul>
    <h3 class="titre"><span class="ruban">GESTION CAPTEURS</span></h3>
    <ul>
        <li><a class="sous-titre" href="#">Modifier les seuils</a></li>
        <li><a class="sous-titre" href="#">Ajouter un capteur</a></li>
        <li><a class="sous-titre" href="#">Enlever un capteur</a></li>
    </ul>
    <form id="FORMresultat" action="index.php" method="post">
        <input type="hidden" name="cible" value="admin"/>
        <input type="hidden" name="fonction" value="donneesUtilisateurs"/>
    </form>
    <h3 class="titre"><a href="#" onclick='document.getElementById("FORMresultat").submit()'><span class="ruban">RESULTATS CANDIDATS</span></a></h3>
    <h3 class="titre"><span class="ruban">GESTION ACTIONNEURS</span></h3>
    <ul>
        <li><a class="sous-titre" href="#">Modifier les seuils</a></li>
        <li><a class="sous-titre" href="#">Ajouter un Actionneur</a></li>
        <li><a class="sous-titre" href="#">Enlever un Actionneur</a></li>
    </ul>
    <h3 class="titre"><span class="ruban">MODIFIER LES DONNÉES FIXES</span></h3>
    <form id="FORMmodifCGU" action="index.php" method="post">
        <input type="hidden" name="cible" value="admin"/>
        <input type="hidden" name="fonction" value="modifCGU"/>
    </form>
    <form id="FORMmodifMention" action="index.php" method="post">
        <input type="hidden" name="cible" value="admin"/>
        <input type="hidden" name="fonction" value="modifMentionsLegales"/>
    </form>
    <form id="FORMmodifContacter" action="index.php" method="post">
        <input type="hidden" name="cible" value="admin"/>
        <input type="hidden" name="fonction" value="modifNousContacter"/>
    </form>
    <form id="FORMmodifQSN" action="index.php" method="post">
        <input type="hidden" name="cible" value="admin"/>
        <input type="hidden" name="fonction" value="modifQSN"/>
    </form>
    <ul>
        <li class="sous-titre"><a href="#" onclick='document.getElementById("FORMmodifCGU").submit()' >Modifier la CGU</a></li>
        <li class="sous-titre"><a href="#" onclick='document.getElementById("FORMmodifMention").submit()'>Modifier les mentions légales</a></li>
        <li class="sous-titre"><a href="#" onclick='document.getElementById("FORMmodifContacter").submit()'>Modifier la page nous contacter</a></li>
        <li class="sous-titre"><a href="#" onclick='document.getElementById("FORMmodifQSN").submit()'>Modifier le contenu de Qui sommes-nous</a></li>
    </ul>
    <div id="margin"></div>
</nav>
