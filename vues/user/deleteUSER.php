<?php
/**
 * Vue : supprimer un utilisateur
 */
?>
<div id="contenuAccueil">
    <?php if (($_SESSION['type'] == 'gestionnaire' && $user['type'] == "candidat") || $_SESSION['type'] == 'admin') { ?>
    <h1 class="suppFAQ">Supprimer un utilisateur</h1>
    <div id="blocSupprimer">
        <form class="formSupprimer"action="" method="POST">
            <div>
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET["id"]); ?>"/>
                <label>Êtes-vous sure de vouloir supprimer cette utilisateur ?</label>
                <p>
                    <input type="submit" value="Oui">
                    <a class="styleBTN" href="index.php?cible=<?php echo $_SESSION['type']; ?>&fonction=user">Non</a>
                </p>
            </div>
        </form>
    </div>
    <?php } else {  ?>
        <label>Vous n'avez pas l'autorisation ?</label>
        <a class="styleBTN" href="index.php?cible=gestionnaire&fonction=user">Annuler</a>
    <?php } ?>
</div>
</div>
