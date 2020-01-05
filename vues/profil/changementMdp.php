<div class="Conteneur">
        <form method="post" action="">
            <p><span class="profil"><?php echo _MDP; ?></p><input type="password" name="ancienMdp">
            <p><span class="profil"><?php echo _NOUVEAUMDP; ?></p><input type="password" name="nouveauMdp">
            <p><span class="profil"><?php echo _CMDP; ?></p><input type="password" name="confirmationNouveauMdp">
            <p><a href="index.php?cible=utilisateurs&fonction=modifierMdp">
                    <button type="submit" name="submit">Valider</button>
                </a></p>
        </form>
</div>