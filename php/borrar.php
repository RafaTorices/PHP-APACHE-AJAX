<?php
    //Evitamos los warning y errors de PHP
    error_reporting(0);
    //Conectamos con la BD MySQL
    include("mysql.php");
    //Obtenemos por POST el id
    $id = $_POST['id'];
    $mysql_delete = mysqli_query($conexion, "DELETE FROM forms WHERE id = '$id'");