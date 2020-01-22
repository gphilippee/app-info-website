<div class="conteneurTelephone">
    <form method="post" action="">
        <h1><label for="nouveauNumero" class="profil"><?php echo _NUMERO; ?></label></h1>
        <input type="tel" name="nouveauNumero" placeholder="<?php echo _NEW_TEL?>" required>
        <div class="blocBouton">
            <button class="styleBTN" type="submit" name="submit" value="Numéro de téléphone"><?php echo _CONFIRM ?></button>
            <a class="styleBTN addBTN" href="index.php?cible=utilisateurs&fonction=profil"><?php echo _ANNULER ?></a>
        </div>
    </form>
</div>
