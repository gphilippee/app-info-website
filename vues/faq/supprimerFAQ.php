<?php
/**
 * Vue : supprimer une question de la FAQ
 */
?>
<div>
<form action="" method="POST">
    <div>
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET["id"]); ?>"/>
        <p>Are you sure you want to delete this record?</p><br>
        <p>
            <input type="submit" value="Yes">
            <a href="index.php?cible=admin&fonction=faq">No</a>
        </p>
    </div>
</form>
</div>
</div>
