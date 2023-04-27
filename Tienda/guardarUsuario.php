<!DOCTYPE html>
<html lang="es">
<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<?php

    include "conexion.php";

    // datos ingresados en el formulario
    $nombre = $_REQUEST['nombre'];
    $email = $_REQUEST['email'];
    $usuario = $_REQUEST['usuario'];
    $contraseña = $_REQUEST['contraseña'];

    $repetido = false;

    // verifico que el email ingresado no este en la base de datos
    $query="SELECT * FROM usuarios WHERE email='$email'";
    $consulta=mysqli_query($conexion,$query);
    $cantidad=mysqli_num_rows($consulta);

    if($cantidad > 0){
        echo '<script>Swal.fire({
            icon: "error",
            title: "El email ingresado ya se encuentra registrado",
            text: "Intente otro",
            backdrop: `url("https://www.ionos.es/digitalguide/fileadmin/DigitalGuide/Teaser/mail-exchange-t.jpg")`
        }).then(function() {
            window.location.href = "registro.html";
        });</script>';
        $repetido = true;
    }

    // verifico que el usuario ingresado no este en la base de datos
    $query="SELECT * FROM usuarios WHERE usuario='$usuario'";
    $consulta=mysqli_query($conexion,$query);
    $cantidad=mysqli_num_rows($consulta);

    if($cantidad > 0){
        echo '<script>Swal.fire({
            icon: "error",
            title: "El usuario ingresado ya se encuentra registrado",
            text: "Intente otro",
            backdrop: `url("https://us.123rf.com/450wm/ylivdesign/ylivdesign1507/ylivdesign150700780/41834049-imagen-del-icono-del-usuario-en-c%C3%ADrculo-repetido-en-fondo-azul.jpg")`
        }).then(function() {
            window.location.href = "registro.html";
        });</script>';
        $repetido = true;
    }

    // guardo los datos en la base de datos
    if($repetido == false){
	    $query=("INSERT INTO usuarios(nombre,email,usuario,contraseña) 
            VALUES('$nombre','$email','$usuario','$contraseña')");
        $consulta=mysqli_query($conexion,$query);
        echo '<script>Swal.fire({
            icon: "success",
            title: "Usuario guardado correctamente",
            text: "Nuevo usuario",
        }).then(function() {
            window.location.href = "index.html";
        });</script>';
        //echo '<script>alert("Usuario guardado correctamente");
        //    window.location.href="index.html"</script>';
    }

?>
</body>
</html>