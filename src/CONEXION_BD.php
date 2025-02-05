<?php

$servidor = "db";
$usuario = "root";
$clave = "rootpassword";
$conexion = mysql_connect($servidor, $usuario, $clave);

$seleccionarBD = mysql_select_db("smartfitness");

if (!$conexion) {
    die("No se pudo conectar a la base de datos: " . mysql_error());
}
$seleccionarBD = @mysql_select_db("smartfitness", $conexion);
if (!$seleccionarBD) {
    die("No se pudo seleccionar la base de datos: " . mysql_error());
}
