<?php

	/*Datos de conexion a la base de datos*/
	define('DB_HOST', 'localhost');//DB_HOST:  generalmente suele ser "127.0.0.1"
	define('DB_USER', 'root');//Usuario de tu base de datos
	define('DB_PASS', '123456');//Contraseña del usuario de la base de datos
	define('DB_NAME', 'test_portfolio');//Nombre de la base de datos

	$con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    if(!$con){
        @die("<h2 style='text-align:center'>Imposible conectarse a la base de datos! </h2>".mysqli_error($con));
    } /* else if ($con) {
        header('Location: ./views/inicio.php');
        exit();
    } */

    if (@mysqli_connect_errno()) {
        @die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }

    /*Codigo ingresado por Carlos Bejarano: para mostrar los acentos de las palabras (Set names) Al crear la conexión de PHP con MySQL, 
    envía esta consulta justo tras la conexión: */
    mysqli_query($con, "SET NAMES 'utf8'");
