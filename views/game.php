<!DOCTYPE html>
<title>Game Title</title>
<html lang="en">
    <!-- include the database connection-->
    <?php
            
    require_once '../config/conexion.php';
    $query = "select * from users";
    $resultado = mysqli_query($conexion,$query);
    
?>
<?php
include 'head.php';
include 'nav.php';
?>
<style>
    body{
        background: #7e7c7c;
    }
</style>

<body>
    




<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../public/js/scripts.js"></script>
</body>
</html>