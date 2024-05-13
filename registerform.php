

<!DOCTYPE html>

<html lang="en-US">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registrate</title>
    <link rel="stylesheet" href="/quimielateco/css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


</head>
<main> 
    <section class="container-md">
    <?php
        if(isset($_SESSION['username'])) {
           
            include "quiniela.php";
           
        }
        ?>
        <div class="games d-flex justify-content-center">
            <form action="signup.php" method="post">

                <div class=" form-group ">
                    <h4>Llena el formulario</h4><br>
                    <input name="username" type="text" class="form-control" placeholder="Nombre de Usuario">
                </div>
                <div class=" form-group ">
                    <input name="password" type="password" class="form-control" placeholder="Contrasena" >

                </div>
                <div class=" form-group ">
                    <input name="first_name" type="text" class="form-control" placeholder="Nombre">

                </div>
                <div class=" form-group ">
                    <input name="last_name" type="text" class="form-control" placeholder="Apellido">

                </div>
                <div class=" form-group ">
                    <input name="cellphone" type="text" class="form-control" placeholder="Telefono">
                    <span>Formato: 000-00-0000</span>
                </div>
                <div class="justify-content center">
                    <button type="submit" value="Submit" class=" btn btn-success">Registrate</button>
                    <button type="reset" value="Reset" class="btn btn-warning">Borrar</button>
                    <a href="/QuimielaTeco/index.php"><button type="button" class="btn btn-danger">Salir</button></a>
                </div>
            </form>
        </div>
       
    </section>
</main>
<?php
include 'footer.php';
?>