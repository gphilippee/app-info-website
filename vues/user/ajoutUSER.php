<?php
/**
 * Vue : ajouter un utilisateur
 */
?>
<div id="contenuAccueil">
    <h1 class="addFAQ">Ajouter un utilisateur</h1>
    <div id="blocAjout">
        <form class="formAdd" method="POST" action="">
            <table id="addTable">
                <tr>
                    <td class="left"><label for="login">Login</label></td>
                    <td><input type="text" name="login" value=""/></td>
                </tr>
                <tr>
                    <td><label for="nom">Nom</label></td>
                    <td><input type="text" name="nom" value=""/></td>
                </tr>
                <tr>
                    <td><label for="prenom">Prenom</label></td>
                    <td><input type="text" name="prenom" value=""/></td>
                </tr>
                <tr>
                    <td><label for="date">Date de naissance</label></td>
                    <td><input type="date" name="date" value=""/></td>
                </tr>
                <tr>
                    <td><label for="telephone">Telephone</label></td>
                    <td><input type="number" name="telephone" value=""/></td>
                </tr>
                <tr>
                    <td><label for="taille">Taille</label></td>
                    <td><input type="number" name="taille" value=""/></td>
                </tr>
                <tr>
                    <td><label for="poids">Poids</label></td>
                    <td><input type="number" name="poids" value=""/></td>
                </tr>
                <tr>
                    <td><label for="email">Adresse mail</label></td>
                    <td><input type="text" name="email" value=""/></td>
                </tr>
            </table>
            <input type="hidden" name="type" value="candidat"/>
            <div class="blocBTN">
                <input type="submit" value="Ajouter">
                <a class="styleBTN addBTN" href="index.php?cible=admin&fonction=user">Annuler</a>
            </div>
        </form>
    </div>
</div>