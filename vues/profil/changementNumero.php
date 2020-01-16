<div class="conteneurTelephone">
    <form method="post" action="">
        <h1><label for="nouveauNumero" class="profil"><?php echo _NUMERO; ?></label></h1>
        <input type="text" name="nouveauNumero" placeholder="Nouveau numéro de téléphone">
        <div class="blocBouton">
            <button class="styleBTN" type="submit" name="submit" value="Numéro de téléphone">Valider</button>
            <a class="styleBTN addBTN" href="index.php?cible=utilisateurs&fonction=profil">Annuler</a>
        </div>
    </form>
</div>
