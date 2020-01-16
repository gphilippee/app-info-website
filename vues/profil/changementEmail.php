<div class="conteneurMail">
        <form method="post" action="">
            <h1><label for="nouvelEmail" class="profil"><?php echo _ADRESSE_EMAIL; ?></label></h1>
            <input type="email" name="nouvelEmail" placeholder="Nouvelle adresse mail"/>
            <div class="blocBouton">
                <button class="styleBTN"   type="submit" >Valider</button>
                <a class="styleBTN addBTN" href="index.php?cible=utilisateurs&fonction=profil">Annuler</a>
            </div>
        </form>
</div>
