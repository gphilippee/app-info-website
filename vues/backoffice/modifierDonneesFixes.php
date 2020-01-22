<div id="contenuAccueil">
    <h1 class="donneesFixes"><?php echo _MODIF_FIXE ?></h1>
    <div id="selectionner">
        <form class="formAdd" method="POST" action="">
            <h3 class="titreDF"><?php echo _DONNE_MODIF ?></h3>
            <table id="addTable">
                <tr>
                    <td><label><?php echo _CGU ?></label></td>
                    <td>
                        <a href="index.php?cible=<?php echo $_SESSION['type']; ?>&fonction=modifCGU"
                           title='Modifier la CGU'><img class="stylo" src="pictures/pencil.png" height="32" width="32"
                                                        alt="modifier"></a>
                    </td>
                </tr>
                <tr>
                    <td><label><?php echo _MENTIONS_LEGALES ?></label></td>
                    <td>
                        <a href="index.php?cible=<?php echo $_SESSION['type']; ?>&fonction=modifMentionsLegales"
                           title='Modifier la CGU'><img class="stylo" src="pictures/pencil.png" height="32" width="32"
                                                        alt="modifier"></a>
                    </td>
                </tr>
                <tr>
                    <td><label><?php echo _NOUS_CONTACTER?></label></td>
                    <td>
                        <a href="index.php?cible=<?php echo $_SESSION['type']; ?>&fonction=modifNousContacter"
                           title='Modifier la CGU'><img class="stylo" src="pictures/pencil.png" height="32" width="32"
                                                        alt="modifier"></a>
                    </td>
                </tr>
                <tr>
                    <td><label><?php echo _QSN ?></label></td>
                    <td>
                        <a href="index.php?cible=<?php echo $_SESSION['type']; ?>&fonction=modifQSN"
                           title='Modifier la CGU'><img class="stylo" src="pictures/pencil.png" height="32" width="32"
                                                        alt="modifier"></a>
                    </td>
                </tr>
            </table>

        </form>
    </div>
</div>
