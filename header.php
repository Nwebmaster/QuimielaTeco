<?php  ?>
<!DOCTYPE HTML>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ki-Niela</title>
  <link rel="stylesheet" href="/quimielateco/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script>
    window.setTimeout(function() {
      window.location = window.location.href;
    }, 1800000);
  </script>

</head>

<body>
  <header>


    <?php if (isset($_SESSION['user_role']) == 'Admin') { ?>

      <span style="padding-right:0;">Bienvenido: <?php echo $_SESSION['username']; ?></span>
      <span style="font-style: italic; padding-left:0;">(<?php echo $_SESSION['user_role']; ?>)</span>
      <span> <a href="admin/index.php" class="btn btn-primary">Admin Panel</a></span>

      <div><a href="logout.php" class="btn btn-danger">Salir</a></div>


    <?php } else { ?>

      <span>Bienvenido: <?php

                        if (!empty($_SESSION['username'])) {
                          $_SESSION['username'];
                        }
                        ?></span>

      <div><a href="logout.php" class="btn btn-danger">Salir</a></div>
    <?php
    }
    ?>
    </div>

  </header>