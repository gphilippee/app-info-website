<?php
/**
 * Vue : ajouter un utilisateur
 */
?>
<div id="contenuAccueil">
    <h1 class="addFAQ"><?php echo _ADD_USER ?></h1>
    <div id="blocAjout">
        <form class="formAdd" method="POST" action="">
            <table id="addTable">
                <tr>
                    <td class="left"><label for="login">Login</label></td>
                    <td><input type="text" name="login" value="" required/></td>
                </tr>
                <tr>
                    <td><label for="nom"><?php echo _NOM ?></label></td>
                    <td><input type="text" name="nom" value="" required/></td>
                </tr>
                <tr>
                    <td><label for="prenom"><?php echo _PRENOM ?></label></td>
                    <td><input type="text" name="prenom" value="" required/></td>
                </tr>
                <tr>
                    <td><label for="type"><?php echo _TYPE ?></label></td>
                    <td><select name="type">
                           <?php if($_SESSION['type'] == 'admin'){ ?>
                                <option value="gestionnaire"><?php echo _GESTIONNAIRE ?></option>
                                <option value="candidat"><?php echo _CANDIDAT ?></option>
                                <option value="admin"><?php echo _ADMINISTRATEUR ?></option>
                            <?php } else { ?>
                                <option value="candidat"><?php echo _CANDIDAT ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="date"><?php echo _DATE_NAISSANCE ?></label></td>
                    <td><input type="date" name="date" value="" required/></td>
                </tr>
                <tr>
                    <td><label for="telephone"><?php echo _TEL ?></label></td>
                    <td><input type="tel" name="telephone" value="" required/></td>
                </tr>
                <tr>
                    <td><label for="taille"><?php echo _TAILLE ?></label></td>
                    <td><input type="number" name="taille" value="" required/></td>
                </tr>
                <tr>
                    <td><label for="poids"><?php echo _POIDS ?></label></td>
                    <td><input type="number" name="poids" value="" required/></td>
                </tr>
                <tr>
                    <td><label for="email"><?php echo _QSN ?></label></td>
                    <td><input id="email" type="email" name="email" value="" required/></td>
                </tr>
            </table>
            <div class="blocBTN">
                <input type="submit" value="<?php echo _CONFIRM ?>">
                <a class="styleBTN addBTN"
                   href="index.php?cible=gestionnaire&fonction=user"><?php echo _ANNULER ?></a>
            </div>
        </form>
    </div>
</div>

<script>
    function emailValid (email) {
        return /\S+@\S+\.\S+/.test(email)
    }

    document.getElementById("email").addEventListener("input",function(e){
        var email1=e.target.value;
        if (emailValid(email1)){
            e.target.style.color = "green";
        }
        else{
            e.target.style.color = "red";
        }
    });
</script>
