<?php

include ("../../CONEXION_BD.php");

session_start();

$documento=$_SESSION['entrenador'];

$contrasena=$_POST['contrasena'];

$consulta="Update entrenador set contrasena='$contrasena' where documento='$documento';";
$enviar_consulta=@mysql_query($consulta, $conexion);

if($enviar_consulta)
{
	echo('<script languaje="javascript">
		document.location=("../../OPC_ENTRENADOR.php");
		alert("Contraseña Modificada");
	</script>
	');
}
else
{
	echo('<script languaje="javascript">
		 alert("Contraseña No Modificada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}
?>