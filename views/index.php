<!DOCTYPE html>
<html lang="en">
<title>Little Games - Main Page</title>
<!--Select statement and include the head-->
<?php
            
    require_once '../config/conexion.php';
    $query = "select * from users";
    $resultado = mysqli_query($conexion,$query);
    include 'head.php';
?>
<style>
    body{
        background-color: #7e7c7c;
    }
</style>
    <body>
        <!--Importar el NAV-->
        <?php
        include 'nav.php';
        ?>
        <!-- Header-->
        <header class="py-5"
            style="background-image:  url('../public/assets/vgs.png');>
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-black">
                    <h1 class="display-4 fw-bolder">Browse between our games!</h1>
                    <p class="lead fw-normal text-black-50 mb-0">Search in our large variety of games, in your hands is the choice to play what you'd like!</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5 d-flex">
            <?php
            $query = "SELECT * FROM games Limit 9;";
            $Rproduct = mysqli_query($conexion,$query);
                foreach($Rproduct as $row){
            ?>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <h5>

                        <?php echo $row['name']; ?>
                        </h5>
                        <p>
                        <h6>Duration:</h6>
                        <?php echo $row['duration']; ?>
                        </p>
                        <div class="options">
                        <h6>
                        <?php echo $row['description']; ?>
                        </h6>
                        </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="game.php">Play!</a></div>
                            </div>
                        </div>
                        </div>                                                                                                           
                </div>
                
            </div>
            <?php } ?>
        </section>
         <!--Importar el Footer-->
        <?php
        include 'footer.php';
        ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../public/js/scripts.js"></script>
</body>
</html>
