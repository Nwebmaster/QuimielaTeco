<?php

// Include the database configuration file

require_once 'dbconfig.php';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$query = "SELECT * FROM week_2 ORDER BY player_id ASC";
$result = mysqli_query($db, $query);

?>

<!DOCTYPE html>

<html lang="en-US">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tabla</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>
    <table class="table table-striped table-bordered">

        <thead class="thead-dark">

            <tr>

                <th>Jugador</th>

                <th>Nombre</th>

                <th>Game 1</th>

                <th>Game 2</th>

            </tr>
            <tr>
                <?php
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <td><?php echo $row['player_id']; ?></td>




            </tr>
    <?php
                    }
                }

    ?>


    </table>

</body>