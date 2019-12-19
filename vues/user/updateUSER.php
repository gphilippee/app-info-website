<?php
/**
 * Vue : modifier un utilisateur
 */
?>
<div id="contenuAccueil">
    <h1 class="addFAQ">Modifier un utilisateur</h1>
    <div id="blocAjout">
        <form class="formAdd" action="" method="POST">
            <?php if ($user['type'] != "admin") { ?>
                <table id="addTable">
                    <tr>
                        <td class="left"><label for="login">Login</label></td>
                        <td><input type="text" name="login" value="<?php echo $user['login']; ?>"/></td>
                    </tr>
                    <tr>
                        <td><label for="nom">Nom</label></td>
                        <td><input type="text" name="nom" value="<?php echo $user['nom']; ?>"/></td>
                    </tr>
                    <tr>
                        <td><label for="prenom">Prenom</label></td>
                        <td><input type="text" name="prenom" value="<?php echo $user['prenom']; ?>"/></td>
                    </tr>
                    <tr>
                        <td><label for="type">Type</label></td>
                        <td><select name="type">
                                <?php if ($user['type'] == "gestionnaire") { ?>
                                    <option value="gestionnaire">Gestionnaire</option>
                                    <option value="candidat">Candidat</option>
                                <?php } else { ?>
                                    <option value="candidat">Candidat</option>
                                    <option value="gestionnaire">Gestionnaire</option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="date">Date de naissance</label></td>
                        <td><input type="date" name="date" value="<?php echo $user['date_naissance']; ?>"/></td>
                    </tr>
                    <tr>
                        <td><label for="telephone">Telephone</label></td>
                        <td><input type="number" name="telephone" value="<?php echo $user['numero_telephone']; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="taille">Taille</label></td>
                        <td><input type="number" name="taille" value="<?php echo $user['taille']; ?>"/></td>
                    </tr>
                    <tr>
                        <td><label for="poids">Poids</label></td>
                        <td><input type="number" name="poids" value="<?php echo $user['poids']; ?>"/></td>
                    </tr>
                    <tr>
                        <td><label for="email">Adresse mail</label></td>
                        <td><input type="text" name="email" value="<?php echo $user['adresse_mail']; ?>"/></td>
                    </tr>
                </table>
            <?php } else { ?>
                <h3>Vous n'êtes pas autorisé à modifier un administrateur</h3>
            <?php } ?>
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>

            <div class="blocBTN">
                <input type="submit" value="Valider">
                <a class="styleBTN addBTN"
                   href="index.php?cible=<?php echo $_SESSION['type']; ?>&fonction=user">Annuler</a>
            </div>
        </form>
    </div>
</div>
</div>