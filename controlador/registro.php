<?php
	
    require_once("../modelo/modelo.php");

    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];

    $services = new Service();
    $datos = $services->insertUser($email, $pass);
    
    echo json_encode($datos);
    
?>