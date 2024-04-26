<!DOCTYPE html>

<html lang="en-US">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Iniciar Session</title>
    <link rel="stylesheet" href="/quimielateco/css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


</head>

<div class="games">
    <h4>Login</h4>
    <form action="login.php" method="post">

        <div class="form-group col-sm-7">
            <input name="username" type="text" class="form-control" placeholder="Enter Username">
        </div>

        <div class="col-sm-7">
            <input name="password" type="password" class="form-control" placeholder="Enter Password">
        </div>

        <br>

        <div style="text-align: center;">
            <button class=" btn btn-success" name="login" type="Submit">Entrar</button>
            <button class="btn btn-warning" name="signup" type="Submit">Registrate</button>
        </div>
    </form>
</div>