<?php
/**
 * Vue : supprimer un utilisateur
 */
?>
<div id="contenuAccueil">
    <h1 class="suppFAQ"><?php echo _SUP_USER ?></h1>
    <div id="blocSupprimer">
        <form class="formSupprimer" action="" method="POST">
            <?php if (($_SESSION['type'] == 'gestionnaire' && $user['type'] == "candidat") || $_SESSION['type'] == 'admin') { ?>
                <div>
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET["id"]); ?>"/>
                    <label><?php echo _SUPPRIMER ?></label>
                    <p>
                        <input type="submit" value="<?php echo _YES ?>">
                        <a class="styleBTN"
                           href="index.php?cible=<?php echo $_SESSION['type']; ?>&fonction=user"><?php echo _NO ?></a>
                    </p>
                </div>
            <?php } else { ?>
                <div>
                    <label><?php echo _AUTORISATION ?></label>
                    <a class="styleBTN" href="index.php?cible=gestionnaire&fonction=user"><?php echo _ANNULER ?></a>
                </div>
            <?php } ?>
        </form>
    </div>
</div>
</div>
