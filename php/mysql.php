<?php
    //Obtenemos los parametros de conexion a la BD
    include("config.php");
    //Creamos la conexion a la BD
    $conexion = new mysqli($servidor, $usuario, $password, $bd);
    //Comprobamos la conexión
    //Si da error la conexion mostramos un mensaje al usuario
    if ($conexion->connect_errno) {
    echo "Error en la conexión con la Base de Datos: ".$conexion->connect_errno . " - " . $conexion->connect_error;
    }
?>