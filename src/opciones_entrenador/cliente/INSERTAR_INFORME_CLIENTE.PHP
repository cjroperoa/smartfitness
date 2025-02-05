<?php

require("/../../CONEXION_BD.php");

$documento=$_POST['documento'];
$fecha=$_POST['fecha'];
$peso=$_POST['peso'];
$esta=$_POST['esta'];
$valome=$_POST['valome'];
$valofi=$_POST['valofi'];
$ritmo=$_POST['ritmo'];


$consulta="insert into informe_cliente( documento, fecha_informe, peso, estatura, valoracion_medica, valoracion_fisica, ritmo_cardiaco)values( '$documento', '$fecha', '$peso', '$esta', '$valome', '$valofi', '$ritmo');";
$enviar_consulta=@mysql_query($consulta, $conexion);

if($enviar_consulta)
	{
		echo('<script languaje="javascript">
				 alert("Informe De Cliente Registrado");
 				 document.location=("http://localhost/smartfitness/OPC_ENTRENADOR.php");
			</script>
			');
	}
else
{
	echo('<script languaje="javascript">
				 alert("Informe De Cliente No Registrado");
 				 document.location=("http://localhost/smartfitness/OPC_ENTRENADOR.php");
			</script>
			');
}
?>