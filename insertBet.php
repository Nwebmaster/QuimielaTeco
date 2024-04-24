<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <?php
    $db['db_host'] = 'localhost';
    $db['db_user'] = 'root';
    $db['db_pass'] = '';
    $db['db_name'] = 'jornadas';

    foreach ($db as $key => $value) {
        define(strtoupper($key), $value);
    }


    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if ($connection) {

        echo "We are connected";
    }



    //Take Data from form
    $player_name = $_REQUEST['player_name'];
    $radio_1 = $_REQUEST['radio_1'];
    $radio_2 = $_REQUEST['radio_2'];
  


    $sql = "INSERT INTO week_2 VALUES (default, '$player_name', '$radio_1', '$radio_2')";
    if (mysqli_query($connection, $sql)) {
        echo "<h3>data stored in a database successfully</h3>";
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($connection);
    }

    // Close connection
    mysqli_close($connection);
    ?>

</body>

</html>