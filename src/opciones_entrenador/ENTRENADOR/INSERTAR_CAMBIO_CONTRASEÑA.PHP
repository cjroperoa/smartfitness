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
		alert("Contraseņa Modificada");
	</script>
	');
}
else
{
	echo('<script languaje="javascript">
		 alert("Contraseņa No Modificada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}
?>