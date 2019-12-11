<?php
/**
 * Vue : ajouter une question à la FAQ
 */
?>
<div id="faq">
    <form method="POST" action="">
        <div class="label">
            <label for="ajoutQuestion">Veuillez saisir la question </label>
            <label for="ajoutReponse">Veuillez saisir la réponse </label>
        </div>
        <div class="input">
            <textarea name="ajoutQuestion" class="ajoutQuestion" rows="5" cols="60"></textarea>
            <textarea name="ajoutReponse" class="ajoutReponse" rows="5" cols="60"></textarea>
        </div>
        <input type="submit" value="PUBLIER">
        <a href="index.php?cible=admin&fonction=faq">Cancel</a>
    </form>
</div>
</div>