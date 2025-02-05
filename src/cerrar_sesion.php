<?php

include("CONEXION_BD.php");

session_start();
session_unset();
/*
unset($_SESSION['administrador']);
unset( $_SESSION['entrenador']);
unset( $_SESSION['cliente']);
*/
$_SESSION['administrador'] = 0;
$_SESSION['entrenador'] = 0;
$_SESSION['cliente'] = 0;
$_SESSION['login'] = 0;

if ($_SESSION['administrador'] = 0 || $_SESSION['entrenador'] = 0  || $_SESSION['cliente'] = 123444444 )
	{
		echo'Cerrando Sesion';
		echo('<script languaje="javascript">document.location=("http://Localhost/smartfitness");</script>');
	}

header ("Location: http://Localhost/smartfitness");

?>