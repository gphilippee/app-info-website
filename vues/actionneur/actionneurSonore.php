<div id="titre">
    <img class="photo" src="../../pictures/son.PNG" alt="Son" height="60" width="60"/>
    <h3><?php echo _ACT_SON; ?></h3>
</div>
<form>    <!--ajouter method="post" action="traitement.php"-->
    <fieldset class="fieldset">
        <legend><?php echo _ACTI_NB; ?></legend>
        <div class="haut">
            <div class="phaseControl">
                <input type="range" min="1" max="100" step="1"/><br/>
            </div>
            <div>
                <label><?php echo _TEMPS; ?><input type="number" min="1" max="20" step="1"/><br/></label>
            </div>

        </div>
        <span class="phase1">Phase 1</span>
        <span>Phase 2</span>

        <div id="conteneur">
            <div class="element">                                                       <!--phase 1-->
                <p><?php echo _FREQ_EMISSION; ?><input type="submit" value="Modifier"/></p>

                <p>0.8 Hz</p>                        <!--la valeur doit être modifiable-->

                <p>
                    <input type="radio" name="freqsonore" value="aleatoire" id="aleatoire" checked/><label
                            for="aleatoire"><?php echo _EMIS_ALEATOIRE; ?></label><br/>
                    <input type="radio" name="freqsonore" value="rythmee" id="rythmee"/><label for="aleatoire"><?php echo _EMIS_RYTHME; ?></label>
                </p>
            </div>

            <div class="element">                           <!--phase 2-->
                <p><?php echo _FREQ_EMISSION; ?><input type="submit" value="Modifier"/></p>

                <p>1.5 Hz</p>                        <!--la valeur doit être modifiable-->

                <p>
                    <input type="radio" name="freqsonore2" value="aleatoire" id="aleatoire2"/><label for="aleatoire"><?php echo _EMIS_ALEATOIRE; ?></label><br/>
                    <input type="radio" name="freqsonore2" value="rythmee" id="rythmee2" checked/><label
                            for="aleatoire"><?php echo _EMIS_RYTHME; ?></label>
                </p>
            </div>
        </div>
        <p><?php echo _DERN_MODIF; ?></p>
        <p>../../..</p>
        <p><br/><?php echo _BY; ?></p>
        <p>...</p>
        <span class="barre"></span>
        <!--pour la barre verticale , MAIS NE S'ADAPTE PAS LORSQU'ON CHANGE LA TAILLE DE L'ECRAN!-->

    </fieldset>
    <input type="submit" value="Confirmer"/>
</form>