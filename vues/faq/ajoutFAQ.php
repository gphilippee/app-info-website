<?php
/**
 * Vue : ajouter une question à la FAQ
 */
?>
<div id="contenuAccueil">
    <h1 class="addFAQ"><?php echo _ADD_QUESTION ?></h1>
    <div id="blocAjout">
        <form class="formAdd" method="POST" action="">
            <label for="ajoutQuestion"><?php echo _SAISIR_QUESTION ?></label>
            <textarea name="ajoutQuestion" rows="5" cols="120" required></textarea>
            <label for="ajoutReponse"><?php echo _SAISIR_REPONSE ?></label>
            <textarea name="ajoutReponse" rows="5" cols="120" required></textarea>
            <div class="blocBTN">
                <input type="submit" value="<?php echo _CONFIRM ?>">
                <a class="styleBTN addBTN" href="index.php?cible=admin&fonction=faq"><?php echo _ANNULER ?></a>
            </div>
        </form>
    </div>
</div>