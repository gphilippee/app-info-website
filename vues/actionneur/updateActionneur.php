<div class="modifActionneur">
    <div id="titre">
        <h1><?php echo _MODIF_ACT; ?></h1>
    </div>
    <form>             <!--ajouter method="post" action="traitement.php"-->
        <fieldset class="fieldset">
            <legend><?php echo _ACTI_NB; ?><?php echo $_GET['id']; ?> </legend>
            <div class="haut">
                <div>
                    <label><?php echo _TEMPS; ?><input type="number" min="1" max="20" step="1" required/><br/></label>
                </div>
            </div>
            <div id="conteneur">
                <div class="element">
                    <p><?php echo _FREQ_EMISSION; ?> 0.8 Hz</p><!--la valeur doit être modifiable-->
                    <div class="inputRadio">
                        <input type="radio" name="freqlumineux" value="aleatoire" id="aleatoire" checked/><label
                                class="labelRadio" for="aleatoire"><?php echo _EMIS_ALEATOIRE; ?></label>
                        <input type="radio" name="freqlumineux" value="rythmee" id="rythmee"/><label class="labelRadio"
                                                                                                     for="aleatoire"><?php echo _EMIS_RYTHME; ?></label>
                    </div>
                    <input class="buttonModif" type="submit" value="Modifier"/>
                </div>
            </div>


            <p><?php echo _DERN_MODIF; ?></p>
            <p>../../..</p>
            <p><br/><?php echo _PAR; ?></p>

            <span class="barre"></span>
            <!--pour la barre verticale , MAIS NE S'ADAPTE PAS LORSQU'ON CHANGE LA TAILLE DE L'ECRAN!-->
            <!--<input type="submit" value="Confirmer" />-->
            <a class="styleBTN" href="index.php?cible=gestionnaire&fonction=actionneur">Confirmer</a>
        </fieldset>

    </form>
</div>

