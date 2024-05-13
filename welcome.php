<?php
include 'welcomeheader.php';
?>
<main>
    <section class="container-md">
    <div class="games d-flex justify-content-center">
        <div>
            <h1>Bienvenido!</h1>
            <span style="font-size:3em">
                <?php echo $_SESSION['username'] ?>  
            </span>
        
            <div style="margin-top: 3em;">
                <a href="index.php" class=" btn btn-success">Jugar Quiniela</a>
            </div> 
        </div>
    </div>
    </section>
</main>

<?php
include 'footer.php';
?>