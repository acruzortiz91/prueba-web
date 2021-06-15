$('.login').click(function(){
    $('.login').fadeOut("slow",function(){
        $(".rawcontent").fadeIn();
    });
});

$(".close").click(function(){
    $(".rawcontent, .rawcontra, .rawregistro").fadeOut(800, function(){
        $(".login").fadeIn(800);
    });
});


$('#recpass').click(function(){
    $(".rawcontent").fadeOut(function(){
        $(".rawcontra").fadeIn();
    });
});

$('#registro').click(function(){
    $(".rawcontent").fadeOut(function(){
        $(".rawregistro").fadeIn();
    });
});

$('#form1').on('submit', function (e) {
    e.preventDefault();
    $("#alert1").html("");
    $("#alert1").css('display', 'none');

    var fd = new FormData();

    fd.append('email',$("#email").val());
    fd.append('pass',$("#pass").val());

    $.ajax({
        url: 'controlador/controlador.php',
        method: 'POST',
        data: fd,  
        cache: false,
        contentType: false,
        processData: false,
    }).done(function(data) {
        obj = JSON.parse(data);
        obj = obj[0];
        
        if($.isEmptyObject(obj)){
            $("#alert1").html("Usuario o contraseña inválidos");
            $("#alert1").css('display', 'block');
            return false;
        }else{
            if(obj.t_user_active == "0"){
                $("#alert1").html("Usuario inactivo");
                $("#alert1").css('display', 'block');
                return false;
            }else{
                window.location.href = "vista/vista.php";
            }
        }
    });
});



$('#form2').on('submit', function (e) {
    e.preventDefault();
    $("#alert2").html("");
    $("#alert2").css('display', 'none');

    if($("#pass1").val() != $("#passc1").val()){
        $("#alert2").html("Las contraseñas deben coincidir");
        $("#alert2").css('display', 'block');
        return false;
    }
    var fd = new FormData();

    fd.append('email',$("#email1").val());
    fd.append('pass',$("#pass1").val());

    $.ajax({
        url: 'controlador/registro.php',
        method: 'POST',
        data: fd,  
        cache: false,
        contentType: false,
        processData: false,
    }).done(function(data) {
        obj = JSON.parse(data);
        console.log(obj);
        if(obj){
            $("#alerts2").html("Usuario registrado de forma correcta");
            $("#alerts2").css('display', 'block');
        }
    });
});


$('#form3').on('submit', function (e) {
    e.preventDefault();

    var fd = new FormData();

    fd.append('email',$("#email3").val());

    $.ajax({
        url: 'controlador/password.php',
        method: 'POST',
        data: fd,  
        cache: false,
        contentType: false,
        processData: false,
    }).done(function(data) {
        obj = JSON.parse(data);
        console.log(obj);
        if(obj){
            $("#alerts3").html("Hemos enviado una contraseña temporal a tu correo");
            $("#alerts3").css('display', 'block');
        }
    });
});