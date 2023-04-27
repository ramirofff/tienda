<?php

    session_start();

    if(!isset($_SESSION['nombre_usuario'])){
        header('location: index.html');
    }else{
        $user=$_SESSION['nombre_usuario'];
    }

?>