<?php
/**
 * Vue : modifier un utilisateur
 */
?>
<div id="contenuAccueil">
    <h1 class="addFAQ">Modifier un utilisateur</h1>
    <div id="blocAjout">
        <form class="formAdd" action="" method="POST">
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
                    <td><label for="date">Date de naissance</label></td>
                    <td><input type="date" name="date" value="<?php echo $user['date_naissance']; ?>"/></td>
                </tr>
                <tr>
                    <td><label for="telephone">Telephone</label></td>
                    <td><input type="number" name="telephone" value="<?php echo $user['numero_telephone']; ?>"/></td>
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


            <input type="hidden" name="type" value="candidat"/>
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>

            <div class="blocBTN">
                <input type="submit" value="Valider">
                <a class="styleBTN addBTN" href="index.php?cible=admin&fonction=user">Annuler</a>
            </div>
        </form>
    </div>
</div>
</div>