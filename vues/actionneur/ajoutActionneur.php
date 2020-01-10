
<h1>Ajouter un actionneur</h1>
<h2>Actionneur déjà existants</h2>
<div class="blocTable">
    <div class="overflow">
        <table id="myTable" class="tableauActionneur">
            <thead>
            <tr>
                <th>ID</th>
                <th>Type Actionneur</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($donneesActionneur as $element) { ?>
                <tr>
                    <?php if($element['typeActionneur'] != ""){?>
                    <td><?php echo $element['idCapteur']; ?></td>
                    <td><?php echo $element['typeActionneur']; ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>


<p>Type et Id de l'actionneur</p>
<form method="post" action="">
    <div>
        <input type="text" name="idActionneur" value="Id de l'actionneur"/>
        <input type="text" name="typeActionneur" value="Type de l'actionneur"/>
        <button>Ajouter le capteur</button>
    </div>
</form>

<?php if(isset($_POST['idActionneur']) AND isset($_POST['typeActionneur'])){
    $query = 'INSERT INTO capteur_actionneur VALUES(:id, :nom)';
    $donnees = $bdd->prepare($query);
    $donnees->bindParam(":id", $_POST['idActionneur']);
    $donnees->bindParam(":nom", $_POST['typeActionneur']);
    $donnees->execute();
}
