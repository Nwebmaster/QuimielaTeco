<?php

// Include the database configuration file

require_once 'dbconfig.php';

?>
<table class="table table-striped table-bordered">

        <thead class="thead-dark">

            <tr>

                <th>Jugador</th>

                <th>Nombre</th>

                <th>Game 1</th>

                <th>Game 2</th>

            </tr>

        </thead>

        <tbody>

        <?php

        $result = $db->query("SELECT * FROM week_2 ORDER BY id DESC");

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

        ?>

            <tr>

                <td><?= $row['player_id'] ?></td>

                <td><?= $row['player_name'] ?></td>

                <td><?= $row['game_1'] ?></td>

                <td><?= $row['game_2'] ?></td>

                

            </tr>

        <?php } } else { ?>

            <tr><td colspan="5">No records found...</td></tr>

        <?php } ?>

        </tbody>

    </table>
            