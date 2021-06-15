<?php
    require_once("../modelo/modelo.php");

    $email = $_REQUEST['email'];

    $services = new Service();
    $datos = $services->updateUser($email);
    
    echo json_encode($datos);
    
?>