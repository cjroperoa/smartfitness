<?php

include("../../CONEXION_BD.php");

$documento=$_POST['documento'];



$consulta="delete from administrador where documento='".$documento."';";
$enviar_consulta=mysql_query($consulta, $conexion);

if($datos=@mysql_fetch_array($enviar_consulta))
{
	do   
		{	
			echo('<script languaje="javascript">
				 alert("Administrador Eliminado");
				 document.location=("../../OPC_ADMINISTRADOR.php");
			</script>
			');
		}
		while ($datos=mysql_fetch_array($enviar_consulta));
}
else 
{
	echo('<script languaje="javascript">
		 alert("Documento de Administrador No Registrado.........Vuelva a Intentarlo");
		 document.location=("../../OPC_ADMINISTRADOR.php");
	</script>
	');
}
?>
</body>
</html>
