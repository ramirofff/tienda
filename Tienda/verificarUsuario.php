<!DOCTYPE html>
<html lang="es">
<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <?php

    include "conexion.php";

    session_start();

    // usuario y contraseña ingresados 
    $usuario=$_REQUEST['usuario'];
    $contraseña=$_REQUEST['contraseña'];

    // busco en la base de datos los datos ingresados
    $query=("SELECT * FROM usuarios WHERE usuario='$usuario' AND contraseña='$contraseña'");

    $consulta=mysqli_query($conexion,$query);

    // mysqli_num_rows --> numero de registros de la consulta
    $cantidad=mysqli_num_rows($consulta);

    // si $cantidad = 0, entonces los datos ingresados no estan en la base de datos
    // si $cantidad > 0, entonces el usuario esta guardado y soy dirigido a la pagina de la tienda
    if($cantidad > 0){
        $_SESSION['nombre_usuario']=$usuario;

        $query="UPDATE productos
                SET cantidad = 0,
                    stock = 10";
    
        $consulta=mysqli_query($conexion,$query);

        header('Location:tienda.php');
    }else{
        echo '<script>Swal.fire({
                icon: "error",
                title: "ERROR",
                text: "Los datos ingresados son incorrectos",
            }).then(function() {
                window.location.href = "index.html";
            });</script>';
    }

    ?>
</body>
</html>