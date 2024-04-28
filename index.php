<?php
//require_once 'dbconfig.php';
session_start();
?>
<?php
include "header.php";
?>
<main>
    <section class="container-md">
        <?php include "loginform.php"; ?>


        <?php
        //Display quiniela after user logs in
        if (isset($_SESSION['username'])) {

            include "quiniela.php";
        }


        ?>



    </section>
</main>
</body>
<footer>
    <p>All Rights May Not Be Reserved</p>
</footer>

</html>