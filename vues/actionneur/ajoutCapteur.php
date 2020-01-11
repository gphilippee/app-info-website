<?php
/**
 * Vue : ajouter un Actionneur
 */
?>
<div id="contenuAccueil">
    <h1 class="addFAQ">Ajouter un Capteur</h1>
    <div id="blocAjout">
        <form class="formAdd" method="POST" action="">
            <table id="addTable">
                <tr>
                    <td class="left"><label for="idCapteur">Id Capteur</label></td>
                    <td><input type="text" name="idCapteur" value=""/></td>
                </tr>
                <tr>
                    <td><label for="typeCapteur">Type Capteur</label></td>
                    <td><select name="typeCapteur">
                            <option>
                                lumineux
                            </option>
                            <option>
                                sonore
                            </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="uniteCapteur">Unité du Capteur</label></td>
                    <td><input type="text" name="uniteCapteur" value=""/></td>
                </tr>
            </table>
            <div class="blocBTN">
                <input type="submit" value="Ajouter">
                <a class="styleBTN addBTN"
                   href="index.php?cible=<?php echo $_SESSION['type']; ?>&fonction=capteur">Annuler</a>
            </div>
        </form>
    </div>
</div>
