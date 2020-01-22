<?php
/**
 * Vue : modifier une question de la FAQ
 */
?>
<div id="contenuAccueil">
    <h1 class="addFAQ"><?php echo _MODIF_QUESTION ?></h1>
    <div id="blocAjout">
        <form class="formAdd" action="" method="post">
            <label for="question"><?php echo _MOD_QUESTION ?></label>
            <textarea name="question" rows="5" cols="60" required><?php echo $faq['contenuQuestion']; ?></textarea>
            <label for="reponse"><?php echo _MOD_REPONSE ?></label>
            <textarea name="reponse" rows="5" cols="60" required><?php echo $faq['contenuReponse']; ?></textarea>
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
            <div class="blocBTN">
                <input type="submit" value="<?php echo _CONFIRM ?>">
                <a class="styleBTN addBTN" href="index.php?cible=admin&fonction=faq"><?php echo _ANNULER ?></a>
            </div>
        </form>
    </div>
</div>
</div>