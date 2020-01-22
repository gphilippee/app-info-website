<div class="ConteneurMdp">
    <h1><?php echo _MOD_MDP ?></h1>
    <form method="post" action="">
        <label for="ancienMdp"><?php echo _MDP; ?></label>
        <input type="password" name="ancienMdp" placeholder="<?php echo _ANC_MDP?>" required>

        <label for="nouveauMdp"><?php echo _NOUVEAUMDP; ?></label>
        <input type="password" id="mdp1"  name="nouveauMdp" placeholder="<?php echo _NEW_MDP ?>" required>

        <label for="confirmationNouveauMdp"><?php echo _CMDP; ?></label>
        <input type="password" id="mdp2" name="confirmationNouveauMdp" placeholder="<?php echo _CONF_MDP ?>" required>

        <div class="blocBouton">
            <input type="submit" value="<?php echo _CONFIRM?>"/>
            <a class="styleBTN addBTN" href="index.php?cible=utilisateurs&fonction=profil"><?php echo _ANNULER ?></a>
        </div>
    </form>
</div>

<script>

    document.getElementById("mdp1").addEventListener("input",function (e){
        var mdp1=e.target.value;
        if (mdp1.length>7){
            e.target.style.color ="green";
        }
        else{
            e.target.style.color ="red";
        }
    });

    document.getElementById("mdp2").addEventListener("input",function (e){
        var mdp1=document.getElementById("mdp1").value;
        var mdp2=e.target.value;
        if (mdp1==mdp2){
            e.target.style.color ="green";
        }
        else{
            e.target.style.color ="red";
        }
    });
</script>
