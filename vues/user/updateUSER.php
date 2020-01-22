<?php
/**
 * Vue : modifier un utilisateur
 */
?>
<div id="contenuAccueil">
    <div id="blocAjout">
        <h1 class="addFAQ"><?php echo _MOD_USER ?></h1>
        <form class="formAdd" action="" method="POST">
            <?php if (($_SESSION['type'] == 'gestionnaire' && $user['type'] == "candidat") || $_SESSION['type'] == 'admin') { ?>
                <table id="addTable">
                    <tr>
                        <td class="left"><label for="login">Login</label></td>
                        <td><input type="text" name="login" value="<?php echo $user['login']; ?>" required/></td>
                    </tr>
                    <tr>
                        <td><label for="nom"><?php echo _NOM ?></label></td>
                        <td><input type="text" name="nom" value="<?php echo $user['nom']; ?>" required/></td>
                    </tr>
                    <tr>
                        <td><label for="prenom"><?php echo _PRENOM ?></label></td>
                        <td><input type="text" name="prenom" value="<?php echo $user['prenom']; ?>" required/></td>
                    </tr>
                    <tr>
                        <td><label for="type"><?php echo _TYPE ?></label></td>
                        <td><select name="type">
                                <?php if ($user['type'] == "gestionnaire") { ?>
                                    <option value="gestionnaire"><?php echo _GESTIONNAIRE ?></option>
                                    <option value="candidat"><?php echo _CANDIDAT ?></option>
                                    <option value="admin"><?php echo _ADMINISTRATEUR ?></option>
                                <?php } else if ($user['type'] == "admin") { ?>
                                    <option value="admin"><?php echo _ADMINISTRATEUR ?></option>
                                    <option value="gestionnaire"><?php echo _GESTIONNAIRE?></option>
                                    <option value="candidat"><?php echo _CANDIDAT?></option>
                                <?php } else if ($_SESSION['type'] == "admin") { ?>
                                    <option value="candidat"><?php echo _CANDIDAT?></option>
                                    <option value="admin"><?php echo _ADMINISTRATEUR ?></option>
                                    <option value="gestionnaire"><?php echo _GESTIONNAIRE ?></option>
                                <?php } else { ?>
                                    <option value="candidat"><?php echo _CANDIDAT ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="date"><?php echo _DATE_NAISSANCE ?></label></td>
                        <td><input type="date" name="date" value="<?php echo $user['date_naissance']; ?>" required/>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="telephone"><?php echo _TEL ?></label></td>
                        <td><input type="tel" name="telephone" value="<?php echo $user['numero_telephone']; ?>"
                                   required/>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="taille"><?php echo _TAILLE?></label></td>
                        <td><input type="number" name="taille" value="<?php echo $user['taille']; ?>" required/></td>
                    </tr>
                    <tr>
                        <td><label for="poids"><?php echo _POIDS ?></label></td>
                        <td><input type="number" name="poids" value="<?php echo $user['poids']; ?>" required/></td>
                    </tr>
                    <tr>
                        <td><label for="email"><?php echo _ADRESSE_EMAIL ?></label></td>
                        <td><input id="email" type="email" name="email" value="<?php echo $user['adresse_mail']; ?>" required/>
                        </td>
                    </tr>
                </table>
            <?php } else { ?>
                <h3 class="alerte"><?php echo _AUTORISATION?></h3>
            <?php } ?>
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>

            <div class="blocBTN">
                <input type="submit" value="<?php echo _CONFIRM ?>">
                <a class="styleBTN addBTN"
                   href="index.php?cible=gestionnaire&fonction=user"><?php echo _ANNULER ?></a>
            </div>
        </form>
    </div>
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
