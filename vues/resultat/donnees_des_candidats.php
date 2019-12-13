<div id="contenuAccueil">
    <h1>Données des Utilisateurs</h1>
    <div class="blocTable">
        <div class="overflow">
            <table id="myTable" class="tableauFAQ">
                <tr>
                    <th onclick="sortTable(0)">ID</th>
                    <th onclick="sortTable(1)">Nom</th>
                    <th onclick="sortTable(2)">Prenom</th>
                    <th onclick="sortTable(3)">Resultat</th>
                    <th onclick="sortTable(4)">Date</th>
                </tr>

                <?php
                foreach ($donneesUtilisateurs as $element) { ?>
                    <tr>
                        <td><?php echo $element['id']; ?></td>
                        <td><?php echo $element['nom']; ?></td>
                        <td><?php echo $element['prenom']; ?></td>
                        <td><?php echo $element['valeur']; ?></td>
                        <td><?php echo $element['instant']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
</div>