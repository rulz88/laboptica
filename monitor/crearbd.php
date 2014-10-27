<?php
$bd = new SQLite3( "sqlite.db" );
$create = "CREATE TABLE temperatura(tiempo TIME, entrada REAL, salida REAL)";
$query = "INSERT INTO temperatura values((SELECT datetime('now')), 32, 320);";

$bd->exec($create);
$bd->exec($query);
?>
