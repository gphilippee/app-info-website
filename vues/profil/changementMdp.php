<div class="ConteneurMdp">
    <h1>Modifier le mot de passe</h1>
        <form method="post" action="">
            <label for="ancienMdp"><?php echo _MDP; ?></label>
            <input type="password" name="ancienMdp" placeholder="Ancien mot de passe"/>

            <label for="nouveauMdp"><?php echo _NOUVEAUMDP; ?></label>
            <input type="password" name="nouveauMdp" placeholder="Nouveau mot de passe"/>

            <label for="confirmationNouveauMdp"><?php echo _CMDP; ?></label>
            <input type="password" name="confirmationNouveauMdp" placeholder="Confirmer votre nouveau mot de passe"/>

            <div class="blocBouton">
                <input type="submit" value="SUBMIT"/>
                <a class="styleBTN addBTN" href="index.php?cible=utilisateurs&fonction=profil">Annuler</a>
            </div>
        </form>
</div>
