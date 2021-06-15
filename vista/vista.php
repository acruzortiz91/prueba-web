<?php
ob_start();
session_start();

$band = isset($_SESSION["valid"]) && $_SESSION["valid"] == true ? true : false;
if(!$band) {
    header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PRUEBA | PHP - Bootstrap</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../public/css/bootstrap.min.css">
        <link rel="stylesheet" href="../public/css/main.css">
    </head>

    <body>
        <div class="col-12">
            <div class="entra">
                <br>
                <h1>Bienvenid@ <br>
                    <?php echo date('d-m-Y');?> 
                </h1>
                <a href="../logout.php" tite="Logout">Logout.</a>
            </div>
        </div>
        

        <script src="../public/js/jquery-3.6.0.min.js"></script>
        <script src="../public/js/bootstrap.min.js"></script>
        <script src="../public/js/main.js"></script>
 
    </body>
</html>