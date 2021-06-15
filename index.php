<?php
   ob_start();
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PRUEBA | PHP - Bootstrap</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="public/css/bootstrap.min.css">
        <link rel="stylesheet" href="public/css/main.css">
    </head>

    <body>
        <div class="col-12">
            <div class="login">
                <img class="circle" src="public/img/desbloquear.png">
                <br>
                <h5>Iniciar Sesión</h5>
            </div>
        </div>
        

        <div class="rawcontent">
            <h1>Iniciar Sesión</h1>
            <span class="close">
                <img class="circlemin" src="public/img/delete.png">
            </span>

            <form action="" method="post" id="form1">
                <input type="email" name="email"  id="email" placeholder="Email" required="">
                <input type="password" name="pass" id="pass" placeholder="Contraseña" required="">

                <div class="alert alert-danger" role="alert" id="alert1" style="display: none"></div>

                <button type="submit" form="form1" value="Submit" class="btnForm">Entrar</button>

                <div class="rawcontentpass">
                    <span id="registro">Registrarse</span>
                    <span id="recpass">¿Se te olvidó la contraseña?</span>
                </div>
            </form>
        </div>

        
        <div class="rawcontra">
            <h2>Recuperar contraseña</h2>
            <span class="close">
                <img class="circlemin" src="public/img/delete.png">
            </span>

            <form action="" method="post" id="form3">
                <input type="email" name="email3" id="email3" placeholder="Email" required="">
                <div class="alert alert-success" role="alert" id="alerts3" style="display: none"></div>
                <button type="submit" form="form3" value="Submit" class="btnForm">Enviar contraseña</button>
            </form>
        </div>



        <div class="rawregistro">
            <h2>Registrarse</h2>
            <span class="close">
                <img class="circlemin" src="public/img/delete.png">
            </span>

            <form action="" method="post" id="form2" >
                <input type="email" name="email1"  id="email1" placeholder="Email" required="">
                <input type="password" name="pass1" id="pass1" placeholder="Contraseña" required="">
                <input type="password" name="passc1" id="passc1" placeholder="Confirmar Contraseña" required="">

                <div class="alert alert-danger" role="alert" id="alert2" style="display: none"></div>
                <div class="alert alert-success" role="alert" id="alerts2" style="display: none"></div>

                <button type="submit" form="form2" value="Submit" class="btnForm">Enviar</button>
            </form>
        </div>

        <script src="public/js/jquery-3.6.0.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
        <script src="public/js/main.js"></script>
 
    </body>
</html>