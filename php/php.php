<?php
    //Evitamos los warning y errors de PHP
    // error_reporting(0);
    //Conectamos con la BD MySQL
    include("mysql.php");
    //Obtenemos por POST del form los datos de los campos
    $campo1 = $_POST['campo1'];
    $campo2 = $_POST['campo2'];
    $campo3 = $_POST['campo3'];
    $campo4 = $_POST['campo4'];
    $campo5 = $_POST['campo5'];

    $mysql_insert = mysqli_query($conexion, "INSERT INTO forms
     (campo1, campo2, campo3, campo4, campo5) 
     VALUES 
     ('$campo1', '$campo2', '$campo3', '$campo4', '$campo5')");