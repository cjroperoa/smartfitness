<?php

include ("../../CONEXION_BD.php");

session_start();
	
$documento_contrasena=$_SESSION['administrador'];
$contrasena=$_POST['contrasena'];

$consulta="Update administrador set contrasena='$contrasena' where documento='$documento_contrasena';";
$enviar_consulta=mysql_query($consulta, $conexion);

if($enviar_consulta)
{
		
			echo('<script languaje="javascript">
				document.location=("../../OPC_ADMINISTRADOR.php");
				alert("Contrase�a Modificada");
			</script>
			');
		
}		
else 
{
	echo('<script languaje="javascript">
		 alert("Contrase�a No Actualizada");
		 document.location=("../../OPC_ADMINISTRADOR.php");
	</script>
	');
}
?>