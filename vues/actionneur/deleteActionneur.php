<div id="contenuAccueil">
    <h1 class="suppCapteur"><?php echo _SUP_CAPT; ?></h1>
    <div id="blocSupprimer">
        <form class="formSupprimer" action="" method="POST">
            <div>
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET["id"]); ?>"/>
                <label><?php echo _SUPPRIMER; ?></label>
                <p>
                    <input type="submit" value="<?php echo _YES; ?>">
                    <a class="styleBTN" href="index.php?cible=gestionnaire&fonction=actionneur"><?php echo _NO; ?></a>
                </p>
            </div>
        </form>
    </div>
</div>
</div>