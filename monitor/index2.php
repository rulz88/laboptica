<?php
print_r(SQLite::version());

$bd = new SQLite3( "sqlite.db" );
$resultado = $bd->query('SELECT * from temperatura');
var_dump($resultado->fetchArray());
?>
