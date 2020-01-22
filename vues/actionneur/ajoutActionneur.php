<?php
/**
 * Vue : ajouter un actionneur
 */
?>
<div id="contenuAccueil">
    <h1 class="addFAQ"><?php echo _ADD_ACT; ?></h1>
    <div id="blocAjout">
        <form class="formAdd" method="POST" action="">
            <table id="addTable">
                <tr>
                    <td class="left"><label for="idActionneur"><?php echo _ID; ?></label></td>
                    <td><input type="text" name="idActionneur" value="" required/></td>
                </tr>
                <tr>
                    <td><label for="typeActionneur"><?php echo _TYPE; ?></label></td>
                    <td><select name="typeActionneur">
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
                   href="index.php?cible=gestionnaire&fonction=actionneur"><?php echo _ANNULER; ?></a>
            </div>
        </form>
    </div>
</div>