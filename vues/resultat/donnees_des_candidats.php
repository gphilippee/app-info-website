<div id="contenuAccueil">
    <h1><?php echo _DONNE_UTILI?></h1>
    <input type="text" id="myInput" onkeyup="triFunction()" placeholder="Search for names..">
    <div class="blocTable">
        <div class="overflow">
            <table id="myTable" class="tableauFAQ">
                <tr>
                    <th onclick="sortTable(0)"><?php echo _ID?></th>
                    <th onclick="sortTable(1)"><?php echo _NOM?></th>
                    <th onclick="sortTable(2)"><?php echo _PRENOM?></th>
                    <th onclick="sortTable(3)"><?php echo _RESULTAT?></th>
                    <th onclick="sortTable(4)"><?php echo _DATE?></th>
                </tr>
                <?php
                foreach ($donneesUtilisateurs as $element) { ?>
                    <tr>
                        <td><?php echo $element['id']; ?></td>
                        <td><?php echo $element['nom']; ?></td>
                        <td><?php echo $element['prenom']; ?></td>
                        <td><?php echo $element['valeur'] . ' '; ?><?php echo $element['unite']; ?></td>
                        <td><?php echo $element['instant']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
</div>

<script>
    function triFunction() {
        // Declare variables
        var input, table, filter, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    function sortTable(n) {
        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        table = document.getElementById("myTable");
        switching = true;
        // Set the sorting direction to ascending:
        dir = "asc";
        /* Make a loop that will continue until
        no switching has been done: */
        while (switching) {
            // Start by saying: no switching is done:
            switching = false;
            rows = table.rows;
            /* Loop through all table rows (except the
            first, which contains table headers): */
            for (i = 1; i < (rows.length - 1); i++) {
                // Start by saying there should be no switching:
                shouldSwitch = false;
                /* Get the two elements you want to compare,
                one from current row and one from the next: */
                x = rows[i].getElementsByTagName("TD")[n];
                y = rows[i + 1].getElementsByTagName("TD")[n];
                /* Check if the two rows should switch place,
                based on the direction, asc or desc: */
                if (dir == "asc") {
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        // If so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }

                } else if (dir == "desc") {
                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        // If so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                }
            }
            if (shouldSwitch) {
                /* If a switch has been marked, make the switch
                and mark that a switch has been done: */
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
                // Each time a switch is done, increase this count by 1:
                switchcount++;
            } else {
                /* If no switching has been done AND the direction is "asc",
                set the direction to "desc" and run the while loop again. */
                if (switchcount == 0 && dir == "asc") {
                    dir = "desc";
                    switching = true;
                }
            }
        }
    }
</script>
