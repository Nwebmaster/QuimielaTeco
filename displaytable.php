<?php

// Include the database configuration file

require_once 'dbconfig.php';

//Set MySQL Error Reporting Mode
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//Create query

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
<div class="row">

    <div class="col-md-12 head">

        <div class="float-right">

            <a href="javascript:void(0);" class="btn btn-success" onclick="formToggle('importFrm');"><i class="plus"></i> Import</a>

            <a href="exportcsvfile.php" class="btn btn-primary"><i class="exp"></i> Export</a>

        </div>

    </div>
<body>
    <table class="table table-striped table-bordered">

        <thead class="thead-dark">

            <tr class>

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
                        <td><?php echo $row['player_name']; ?></td>
                        <td><?php echo $row['game_1']; ?></td>
                        <td><?php echo $row['game_2']; ?></td>
            </tr>
                <?php
                    }
                }
                ?>
    </table>

</body>