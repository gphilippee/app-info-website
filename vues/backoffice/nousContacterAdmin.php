<div class="conteneurNousContacter">
        <div id="vide">

        </div>
    <?php
    require(__DIR__."/../header/nousContacter.php");
    ?>
    <div class="contact">
        <div class="parametrer">
            <form method="POST" action="">
                <div class="input">
                    <p>
                    <input type="email" name="contenuMail" placeholder="Modifier votre mail ici">
                    <input type="submit" value="Modifier l'adresse mail">
                    </p>
                </div>
            </form>
        </div>

        <div class="parametrer">
            <form method="POST" action="">
                <div class="input">
                    <p>
                        <input type="text" name="numeroTelephone" placeholder="Modifier le numéro de téléphone ici" size="28">
                        <input type="submit" value="Modifier le numéro de téléphone">
                    </p>
                </div>
            </form>
        </div>
    </div>

    <div id="vide"> </div>
    </div>
</div>
