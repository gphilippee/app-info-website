<div id="contenuAccueil">
    <h1>Page des actionneurs</h1>
    <div class="blocTable">
        <a class="ajoutBTN" href="index.php?cible=<?php echo $_SESSION['type']; ?>&fonction=ajoutActionneur"><img
                    src="pictures/plus.png" height="32" width="32" alt="ajouter"></a>
        <div class="overflow">
            <table id="myTable" class="tableauFAQ">
                <tr>
                    <th>Id Actionneur</th>
                    <th>Type Actionneur</th>
                    <th>Action</th>
                </tr>
                <?php
                foreach ($donneesActionneur as $element) { ?>
                    <tr>
                        <?php if ($element['typeActionneur'] != "") { ?>
                            <td><?php echo $element['idCapteur']; ?></td>
                            <td><?php echo $element['typeActionneur']; ?></td>
                            <td>
                                <div id="blocAction">
                                    <a href="index.php?cible=<?php echo $_SESSION['type']; ?>&fonction=updateActionneur&id=<?php echo $element['idCapteur']; ?>"
                                       title='Update Record'><img class="stylo" src="pictures/pencil.png" height="32"
                                                                  width="32"
                                                                  alt="modifier"></a>
                                    <a href="index.php?cible=<?php echo $_SESSION['type']; ?>&fonction=deleteActionneur&id=<?php echo $element['idCapteur']; ?>"
                                       title='Delete Record'><img class="trash" src="pictures/trash.png" height="32"
                                                                  width="32"
                                                                  alt="supprimer"></a>
                                </div>
                            </td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
</div>
