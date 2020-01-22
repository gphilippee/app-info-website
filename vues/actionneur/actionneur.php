<div id="contenuAccueil">
    <h1><?php echo _ACT; ?></h1>
    <div class="blocTable">
        <a class="ajoutBTN" href="index.php?cible=gestionnaire&fonction=ajoutActionneur"><img
                    src="pictures/plus.png" height="32" width="32" alt="ajouter"></a>
        <div class="overflow">
            <table id="myTable" class="tableauFAQ">
                <tr>
                    <th><?php echo _ID_ACT; ?></th>
                    <th><?php echo _TYPE_ACT; ?></th>
                    <th><?php echo _ACTION; ?></th>
                </tr>
                <?php foreach ($donneesActionneur as $element) { ?>
                    <?php if (!empty($element['typeActionneur'])) { ?>
                    <tr>
                            <td><?php echo $element['idCapteur']; ?></td>
                            <td><?php echo $element['typeActionneur']; ?></td>
                            <td>
                                <div id="blocAction">
                                    <a href="index.php?cible=gestionnaire&fonction=updateActionneur&id=<?php echo $element['idCapteur']; ?>"
                                       title='Update Record'><img class="stylo" src="pictures/pencil.png" height="32"
                                                                  width="32"
                                                                  alt="modifier"></a>
                                    <a href="index.php?cible=gestionnaire&fonction=deleteActionneur&id=<?php echo $element['idCapteur']; ?>"
                                       title='Delete Record'><img class="trash" src="pictures/trash.png" height="32"
                                                                  width="32"
                                                                  alt="supprimer"></a>
                                </div>
                            </td>
                    </tr>
                    <?php } ?>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
</div>
