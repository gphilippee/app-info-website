<div class="blocChangement">
    <fieldset class="fieldset" style="z-index:5">
        <form method="post" action="">
            <p><?php echo _MDP; ?></p><input type="password" name="ancienMdp">
            <p><?php echo _NOUVEAUMDP; ?></p><input type="password" name="nouveauMdp">
            <p><?php echo _CMDP; ?></p><input type="password" name="confirmationNouveauMdp">
            <p><a href="index.php?cible=admin&fonction=modifierMdp"><button type="submit" name="submit">Valider</button></a></p>
            <p><?php $values = ['username' => $_SESSION['login']];
        $ancienMdp = implode(recupereMdp($bdd, $values)); echo $ancienMdp; ?></p>
            <p> <?php            $a=hachagePassword($_POST['ancienMdp']);
                $b= $a.$a;echo $b; ?></p>
        </form>
    </fieldset>
</div>