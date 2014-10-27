<?php
$host="localhost";
$user="root";
$password="prisma";
if(!($connect=mysql_connect($host,$user,$password))) die("Error: No se pudo conectar");

//Selecciona la BD
if(!mysql_select_db('datos',$connect)) die("Error: No existe la base de datos");
?>