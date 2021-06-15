<?php
	ob_start();
   	session_start();
    require_once("../modelo/modelo.php");

    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];

    $services = new Service();
    $datos = $services->getValidUser($email, $pass);
    
    if(!empty($datos)){
    	$_SESSION['valid'] = true;
    }else{
    	$_SESSION['valid'] = false;
    }
    echo json_encode($datos);
    
?>