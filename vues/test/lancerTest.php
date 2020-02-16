<div id="contenuAccueil">
    <h1><?php echo _GES_TEST;?></h1>

    <div class="blocTable">

        <div class="overflow">
            <select name="candidatTesteur" id="tableau">
                    <?php foreach ($candidats as $candidat ){?>

                        <option value="<?php echo $candidat['id'];?>">
                            <?php echo 'ID n°'.$candidat['id'];
                                  echo ' '.$candidat['nom'];
                                  echo ' '.$candidat['prenom']; ?>
                            </option>
                    <?php }?>
            </select>
        </div>

        <a class="styleBTN"><?php echo _GO_TEST ?></a>   <!--à compléter-->
    </div>

</div>
</div>
