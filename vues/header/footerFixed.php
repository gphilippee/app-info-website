<?php
/**
 * Vue : pied de page
 */
?>
<footer id="Fixed">
    <div class="Fin">
        <a class="MenuP2" href="#" onclick='document.getElementById("FORMcontacter").submit()'><?php echo _NOUS_CONTACTER; ?></a>
        <a class="MenuP2" href="#" onclick='document.getElementById("FORMcgu").submit()'><?php echo _CGU; ?></a>
        <a class="MenuP2" href="#" onclick='document.getElementById("FORMmention").submit()'><?php echo _MENTIONS_LEGALES; ?></a>
    </div>
    <form id="FORMcontacter" action="index.php" method="post">
        <input type="hidden" name="cible" value="utilisateurs"/>
        <input type="hidden" name="fonction" value="contacter"/>
    </form>
    <form id="FORMcgu" action="index.php" method="post">
        <input type="hidden" name="cible" value="utilisateurs"/>
        <input type="hidden" name="fonction" value="cgu"/>
    </form>
    <form id="FORMmention" action="index.php" method="post">
        <input type="hidden" name="cible" value="utilisateurs"/>
        <input type="hidden" name="fonction" value="mentionLegale"/>
    </form>
</footer>
</body>
</html>
