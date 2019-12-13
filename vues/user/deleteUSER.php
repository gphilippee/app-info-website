<?php
/**
 * Vue : supprimer un utilisateur
 */
?>
<div id="contenuAccueil">
    <h1 class="suppFAQ">Supprimer un utilisateur</h1>
    <div id="blocSupprimer">
        <form class="formSupprimer"action="" method="POST">
            <div>
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET["id"]); ?>"/>
                <label>Êtes-vous sure de vouloir supprimer cette utilisateur ?</label>
                <p>
                    <input type="submit" value="Oui">
                    <a class="styleBTN" href="index.php?cible=admin&fonction=user">Non</a>
                </p>
            </div>
        </form>
    </div>
</div>
</div>
