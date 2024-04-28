<?php
//hides login form after user logs in
if (!isset($_SESSION['username'])) { ?>


    <!DOCTYPE html>

    <html lang="en-US">

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Iniciar Session</title>
        <link rel="stylesheet" href="/quimielateco/css/style.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


    </head>

    <div class="games d-flex justify-content-center">
        <form action="login.php" method="post">

            <div class=" form-group ">
                <h4>Iniciar Sesion</h4>
                <input name=" username" type="text" class="form-control" placeholder="Enter Username">
            </div>

            <div>
                <input name="password" type="password" class="form-control" placeholder="Enter Password">
            </div>

            <br>

            <div class="justify-content center">
                <button class=" btn btn-success" name="login" type="Submit">Entrar</button>
                <button class="btn btn-warning" name="signup" type="Submit">Registrate</button>
            </div>
        </form>
    </div>
<?php } ?>