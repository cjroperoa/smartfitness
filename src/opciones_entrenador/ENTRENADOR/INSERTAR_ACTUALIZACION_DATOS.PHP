<?php

include("/../../CONEXION_BD.php");


session_start();

$nombre=$_POST['nombre'];
$documento=$_POST['documento'];
$fecha_nacimiento=$_POST['fecha'];
$sexo=$_POST['sexo'];
$edad=$_POST['edad'];
$mail=$_POST['mail'];
$telefono=$_POST['tele'];
$celu=$_POST['celu'];

$consulta="Update smartfitness.entrenador set  nombre='$nombre', documento='$documento', fecha_nacimiento='$fecha_nacimiento', edad='$edad', sexo='$sexo' , mail='$mail', telefono='$telefono', celular='$celu'  where documento='$documento';";
$error=mysql_error();

$enviar_consulta=@mysql_query($consulta, $conexion);

if($enviar_consulta)
{
	echo('
			<script languaje="javascript">
				 alert("Datos Actualizados");
 				 document.location=("http://localhost/smartfitness/OPC_ENTRENADOR.php");
			</script>
		');
}
else
{
		echo('
				<script languaje="javascript">
					alert("Datos No Actualizados");
					document.location=("ENVIAR_ACTUALIZACION_DATOS.PHP");
				</script>
			');
	
}

?>
