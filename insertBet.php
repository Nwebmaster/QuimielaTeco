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
    $radio_21 = $_REQUEST['radio_21'];
    $radio_22 = $_REQUEST['radio_22'];
    $radio_23 = $_REQUEST['radio_23'];
    $radio_25 = $_REQUEST['radio_25'];
    $radio_26 = $_REQUEST['radio_26'];
    $radio_27 = $_REQUEST['radio_27'];
    $radio_28 = $_REQUEST['radio_28'];
    $radio_29 = $_REQUEST['radio_29'];
    $radio_30 = $_REQUEST['radio_30'];


    $sql = "INSERT INTO week_2 VALUES (default, '$player_name', '$radio_21', '$radio_22', '$radio_23', '$radio_25',
        '$radio_26', '$radio_27', '$radio_28', '$radio_29', '$radio_30')";
    if (mysqli_query($connection, $sql)) {
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($connection);
    }

    // Close connection
    mysqli_close($connection);
    ?>

</body>

</html>