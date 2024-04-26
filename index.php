<?php
//require_once 'dbconfig.php';
session_start();
?>
<?php
include "header.php";
?>
    <main>
        <section class="container-md">

            <div class="games">
                <h2>Jornada #</h2>
                <div class="form ">

                    <form action="insertBet.php" method="post">


                        <label class=" w-50">Nombre
                            <input type="text" name="player_name" class="w-50">
                            
                        </label>
                        <br>
                        <table class="table table-success table-striped w-25">
                        
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
                                    <td >
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