<div id="contenuAccueil">
    <h1><?php echo _CAPT; ?></h1>
    <div class="blocTable">
        <a class="ajoutBTN" href="index.php?cible=gestionnaire&fonction=ajoutCapteur"><img
                    src="pictures/plus.png" height="32" width="32" alt="ajouter"></a>
        <div class="overflow">
            <table id="myTable">
                <tr>
                    <th><?php echo _ID; ?></th>
                    <th><?php echo _TYPE; ?></th>
                    <th><?php echo _ACTION; ?></th>
                </tr>
                <?php
                foreach ($donneesCapteur as $element) { ?>
                    <?php if (!empty($element['typeCapteur'])){ ?>
                        <tr>
                            <td><?php echo $element['idCapteur']; ?></td>
                            <td><?php echo $element['typeCapteur']; ?></td>
                            <td>
                                <div id="blocAction">
                                    <a href="index.php?cible=gestionnaire&fonction=updateCapteur&id=<?php echo $element['idCapteur']; ?>"
                                       title='Update Record'><img class="stylo" src="pictures/pencil.png" height="32"
                                                                  width="32"
                                                                  alt="modifier"></a>
                                    <a href="index.php?cible=gestionnaire&fonction=deleteCapteur&id=<?php echo $element['idCapteur']; ?>"
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

