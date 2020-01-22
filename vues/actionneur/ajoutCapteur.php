<?php
/**
 * Vue : ajouter un capteur
 */
?>
<div id="contenuAccueil">
    <h1 class="addFAQ"><?php echo _ADD_CAPT; ?></h1>
    <div id="blocAjout">
        <form class="formAdd" method="POST" action="">
            <table id="addTable">
                <tr>
                    <td class="left"><label for="idCapteur"><?php echo _ID; ?></label></td>
                    <td><input type="text" name="idCapteur" value="" required/></td>
                </tr>
                <tr>
                    <td><label for="typeCapteur"><?php echo _TYPE; ?></label></td>
                    <td><select name="typeCapteur">
                            <option>
                                <?php echo _LUM; ?>
                            </option>
                            <option>
                                <?php echo _SON; ?>
                            </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="uniteCapteur"><?php echo _UNITE; ?></label></td>
                    <td><input type="text" name="uniteCapteur" value="" required/></td>
                </tr>
            </table>
            <div class="blocBTN">
                <input id="inputAjout" type="submit" value="Ajouter">
                <a class="styleBTN addBTN"
                   href="index.php?cible=gestionnaire&fonction=capteur"><?php echo _ANNULER; ?></a>
            </div>
        </form>
    </div>
</div>
