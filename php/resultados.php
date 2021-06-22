<?php
    //Evitamos los warning y errors de PHP
    error_reporting(0);
    //Conectamos con la BD MySQL
    include("mysql.php");
    $mysql_select = mysqli_query($conexion, "SELECT * FROM forms ORDER BY id DESC");
?>