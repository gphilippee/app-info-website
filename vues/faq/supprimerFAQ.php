<?php
/**
 * Vue : supprimer une question de la FAQ
 */
?>
<div id="contenuAccueil">
    <h1 class="suppFAQ"><?php echo _SUP_QUESTION ?></h1>
    <div id="blocSupprimer">
        <form class="formSupprimer" action="" method="POST">
            <div>
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET["id"]); ?>">
                <label><?php echo _SUPPRIMER ?></label>
                <p>
                    <input type="submit" value="<?php echo _YES ?>">
                    <a class="styleBTN" href="index.php?cible=admin&fonction=faq"><?php echo _NO ?></a>
                </p>
            </div>
        </form>
    </div>
</div>
</div>
