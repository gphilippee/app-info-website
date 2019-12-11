<div id="contenuAccueil">
    <div id="vide"></div>
    <div id="contenuFaq">
        <h1>FAQ</h1>
        <a href="index.php?cible=admin&fonction=ajoutFAQ" >Ajouter</a>
        <table>
            <thead>
            <tr>
                <th>Question</th>
                <th>Reponse</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($faq as $element) { ?>
                <tr>
                    <td><?php echo $element['contenuQuestion']; ?></td>
                    <td><?php echo $element['contenuReponse']; ?></td>
                    <td>
                        <a href="index.php?cible=admin&fonction=updateFAQ&id=<?php echo $element['idQA']; ?>" title='Update Record'><img class="stylo" src="pictures/pencil.png" height="32" width="32" alt="modifier"></a>
                        <a href="index.php?cible=admin&fonction=supprimerFAQ&id=<?php echo $element['idQA']; ?>" title='Delete Record'><img class="trash" src="pictures/trash.png" height="32" width="32" alt="supprimer"></a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</div>

