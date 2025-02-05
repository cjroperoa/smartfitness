<?php

require("/../../CONEXION_BD.php");

$documento=$_POST['documento'];
$fecha=$_POST['fecha'];
$peso=$_POST['peso'];
$esta=$_POST['esta'];
$valome=$_POST['valome'];
$valofi=$_POST['valofi'];
$ritmo=$_POST['ritmo'];


$consulta="Update smartfitness.informe_cliente set  fecha_informe='$fecha', peso='$peso', estatura='$esta', valoracion_medica='$valome', valoracion_fisica='$valofi' , ritmo_cardiaco='$ritmo'  where documento='$documento';";
$enviar_consulta=@mysql_query($consulta, $conexion);

if($enviar_consulta)
	{
		echo('<script languaje="javascript">
				 alert("Informe De Cliente Actualizado");
 				 document.location=("http://localhost/smartfitness/OPC_ENTRENADOR.php");
			</script>
			');
	}
else
{
	echo('<script languaje="javascript">
				 alert("Informe De Cliente No  Actualizado");
 				 document.location=("http://localhost/smartfitness/OPC_ENTRENADOR.php");
			</script>
			');
}
?>