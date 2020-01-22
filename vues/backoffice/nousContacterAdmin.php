<div class="conteneurNousContacter">
    <?php
    require(__DIR__ . "/../header/nousContacter.php");
    ?>
    <div class="contact">
        <div class="parametrerContact">
            <form method="POST" action="">
                <div class="input">
                    <input type="email" name="contenuMail" required>
                    <input type="submit" value="<?php echo _MODIF_MAIL?>">
                </div>
            </form>
        </div>

        <div class="parametrerContact">
            <form method="POST" action="">
                <div class="input">
                    <input type="text" name="numeroTelephone" size="28" required>
                    <input type="submit" value="<?php echo _MODIF_TEL ?>"/>
                </div>
            </form>
        </div>
    </div>

    <div id="vide"></div>
</div>
</div>
