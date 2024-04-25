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
    <link rel="stylesheet" href="/quimielateco/css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script type = "text/javascript" src="colorCell.js" async></script>
    <script type = "text/javascript" src="totalPoints.js" async></script>

</head>
<div class="row">

    <div class="col-md-12 head">

        <div class="float-right">

            

            <a href="exportcsvfile.php" class="btn btn-primary"><i class="exp"></i> Export</a>

        </div>

    </div>
<body>
    <table class="table table-bordered table-hover table-responsive table-sm" id="color-cell" >

        <thead class="thead-dark " >

            <tr class>

                <th>Jugador</th>

                <th>Nombre</th>

                <th >Game 1</th>

                <th>Game 2</th>

                <th>Puntos</th>
                

            </tr>
            <tr id="result-1">
                <?php
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <td ><?php echo $row['player_id']; ?></td>
                        <td ><?php echo $row['player_name']; ?></td>
                        <td><?php echo $row['game_1']; ?></td>
                        <td><?php echo $row['game_2']; ?></td>
                        <td id="total-points" ></td>
                        
                         
            </tr>
                <?php
                    }
                }
                ?>
              
    </table>
    

</body>