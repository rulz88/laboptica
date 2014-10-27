<?php
$host="mysql.hostinger.es";
$user="u365232212_solar";
$password="opticasolar";
if(!($connect=mysql_connect($host,$user,$password))) die("Error: No se pudo conectar");

//Selecciona la BD
if(!mysql_select_db('u365232212_optic',$connect)) die("Error: No existe la base de datos");
?>