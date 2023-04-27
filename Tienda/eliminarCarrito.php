<?php

    include "conexion.php";

    $nombre=$_REQUEST['nombre'];

    $query="UPDATE productos
            SET cantidad = 0,
                stock = 10
            WHERE nombre = '$nombre'";

    $consulta=mysqli_query($conexion,$query);

    if($consulta){
        // regresa a la pagina anterior
        header("location:".$_SERVER['HTTP_REFERER']."");
    }else{
        echo '<script>alert("ERROR");
            window.location.href="tienda.php"</script>';
    }
?>