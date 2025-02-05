<?php

require("CONEXION_BD.php");

session_start();

$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

echo "verificando";
$_SESSION['login'] = "0"; //VERIFICACION
$_SESSION['administrador'] = $clave;
$_SESSION['entrenador'] = $clave;
$_SESSION["cliente"] = $clave;

//ADMINISTRADOR
$administrador = "SELECT documento FROM administrador WHERE login = '$usuario' AND contrasena = '$clave';";
$consulta_administrador = mysql_query($administrador);
//ENTRENADOR
$entrenador = "SELECT documento FROM entrenador WHERE login = '$usuario' AND contrasena = '$clave';";
$consulta_entrenador = mysql_query($entrenador);
//CLIENTE
$cliente = "SELECT documento FROM cliente WHERE login = '$usuario' AND contrasena='$clave';";
$consulta_cliente = mysql_query($cliente);

if ($row = mysql_fetch_array($consulta_administrador)) {
	do {
		$ddocumento_administrador = stripslashes($row["documento"]);
		$_SESSION['administrador'] = $ddocumento_administrador;
		$_SESSION['login'] = 1;
		echo ('<script languaje="javascript"> document.location=("http://Localhost/smartfitness/OPC_ADMINISTRADOR.php");</script>');
	} while ($row = mysql_fetch_array($consulta_administrador));
} else {
	//ENTRENADOR
	if ($row1 = mysql_fetch_array($consulta_entrenador)) {
		do {
			$ddocumento_entrenador = stripslashes($row1["documento"]);
			$_SESSION['entrenador'] = $ddocumento_entrenador;
			$_SESSION['login'] = 1;
			echo ('<script languaje="javascript">document.location=("http://Localhost/smartfitness/OPC_ENTRENADOR.php");</script>');
		} while ($row1 = mysql_fetch_array($consulta_entrenador));
	} else {
		if ($row2 = mysql_fetch_array($consulta_cliente)) {
			do {
				$ddocumento_cliente = stripslashes($row2["documento"]);
				$_SESSION['cliente'] = $ddocumento_cliente;
				$_SESSION['login'] = 1;
				echo ('<script languaje="javascript">document.location=("http://localhost/smartfitness/OPC_CLIENTE.PHP");</script>');
			} while ($row2 = mysql_fetch_array($consulta_cliente));
		} else {
			echo ('<script languaje="javascript">document.location=("http://Localhost/smartfitness");</script>');
		}
	}
}

?>
