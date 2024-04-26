<?php
//require_once 'dbconfig.php';
session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ki-Niela</title>
    <link rel="stylesheet" href="/quimielateco/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>



        <span>Bienvenido: <?php echo $_SESSION['username'] ?></span>

        <div><a class="btn btn-danger">Salir</a></div>




        </div>
    </header>
    <main>
        <section class="container-md">

            <div class="games">
                <h2>Jornada #</h2>
                <div class="form">

                    <form action="insertBet.php" method="post">


                        <label class="form-control">Nombre
                            <input type="text" name="player_name">
                        </label>


                        <table class="table table-success table-striped">

                            <thead>

                                <tr>
                                    <th></th>
                                    <th>Local</th>
                                    <th>Empate</th>
                                    <th>Visita</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th><img src="/quimielateco/TeamLogos/RiverPlate2.png"><br>Team1</th>
                                    <td>
                                        <label>
                                            <input type="radio" name="radio_1" value="L">
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="radio" name="radio_1" value="E">
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="radio" name="radio_1" value="V">
                                            <span></span>
                                        </label>
                                    </td>
                                    <th><img src="/quimielateco/TeamLogos/Boca2.png"><br>Team2</th>
                                </tr>

                                <tr>
                                    <th><img src="/quimielateco/TeamLogos/RealMadrid2.png"><br>Team3</th>
                                    <td>
                                        <label class>
                                            <input type="radio" name="radio_2" value="L">
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class>
                                            <input type="radio" name="radio_2" value="E">
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class>
                                            <input type="radio" name="radio_2" value="V">
                                            <span></span>
                                        </label>
                                    <th><img src="/quimielateco/TeamLogos/barca2.png"><br>Team4</th>
                                    </td>
                                </tr>
                                <!--    
                            <tr>
                                <th>Team3</th>
                                <td>
                                    <label class>
                                        <input type="radio" name="radio_25">
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <label class>
                                        <input type="radio" name="radio_25">
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <label class>
                                        <input type="radio" name="radio_25">
                                        <span></span>
                                    </label>
                                <th>Team4</th>
                                </td>
                            </tr <tr>
                            <th>Team3</th>
                            <td>
                                <label class>
                                    <input type="radio" name="radio_26">
                                    <span></span>
                                </label>
                            </td>
                            <td>
                                <label class>
                                    <input type="radio" name="radio_26">
                                    <span></span>
                                </label>
                            </td>
                            <td>
                                <label class>
                                    <input type="radio" name="radio_26">
                                    <span></span>
                                </label>
                            <th>Team4</th>
                            </td>
                            </tr>
                            <tr>
                                <th>Team3</th>
                                <td>
                                    <label class>
                                        <input type="radio" name="radio_27">
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <label class>
                                        <input type="radio" name="radio_27">
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <label class>
                                        <input type="radio" name="radio_27">
                                        <span></span>
                                    </label>
                                <th>Team4</th>
                                </td>
                            </tr>
                            <tr>
                                <th>Team3</th>
                                <td>
                                    <label class>
                                        <input type="radio" name="radio_28">
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <label class>
                                        <input type="radio" name="radio_28">
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <label class>
                                        <input type="radio" name="radio_28">
                                        <span></span>
                                    </label>
                                <th>Team4</th>
                                </td>
                            </tr>
                            <tr>
                                <th>Team3</th>
                                <td>
                                    <label class>
                                        <input type="radio" name="radio_29">
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <label class>
                                        <input type="radio" name="radio_29">
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <label class>
                                        <input type="radio" name="radio_29">
                                        <span></span>
                                    </label>
                                <th>Team4</th>
                                </td>
                            </tr>
                            <tr>
                                <th>Team3</th>
                                <td>
                                    <label class>
                                        <input type="radio" name="radio_30">
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <label class>
                                        <input type="radio" name="radio_30">
                                        <span></span>
                                    </label>
                                </td>
                                <td>
                                    <label class>
                                        <input type="radio" name="radio_30">
                                        <span></span>
                                    </label>
                                <th>Team4</th>
                                </td>
                            </tr>
                            -->
                            </tbody>
                        </table>

                        <button type="submit" value="Submit" class="btn btn-primary">Enviar</button>
                        <button type="reset" value="Reset" class="btn btn-danger">Borrar</button>
                        <a href="/QuimielaTeco/displaytable.php"><button type="button" class="btn btn-light">Tabla</button></a>
                    </form>
                </div>
            </div>

        </section>
    </main>
</body>
<footer>
    <p>All Rights May Not Be Reserved</p>
</footer>

</html>