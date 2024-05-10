<?php
session_start();
include 'header.php';
?>
<main>
    <section class="container-md">
        <?php
        if(isset($_SESSION['username'])) {
           
            include "quiniela.php";
           
        }
        ?>
        
    </section>
</main>

<?php
include 'footer.php';
?>