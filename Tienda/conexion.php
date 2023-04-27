<?php

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $bd = 'tienda';

        // me conecto a la base de datos 
        $conexion = mysqli_connect($host, $user, $pass, $bd)
        or die( "Error al conectarse a la base de datos: ".mysqli_error() );

?>