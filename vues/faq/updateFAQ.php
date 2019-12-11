<?php
/**
 * Vue : modifier une question de la FAQ
 */
?>
<form action="" method="post">
        <label for="question">Question</label>
        <textarea name="question"><?php echo $faq['contenuQuestion']; ?></textarea>
        <label for="reponse">Reponse</label>
        <textarea name="reponse"><?php echo $faq['contenuReponse']; ?></textarea>
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
    <input type="submit" value="Submit">
    <a href="index.php?cible=admin&fonction=faq">Cancel</a>
</form>
</div>
