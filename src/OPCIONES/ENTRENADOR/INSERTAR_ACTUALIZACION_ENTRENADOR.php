<?php


include("../../CONEXION_BD.php");


$nombre=$_POST['nombre'];
$documento=$_POST['documento'];
$fecha=$_POST['fecha'];
$sexo=$_POST['sexo'];
$edad=$_POST['edad'];
$mail=$_POST['mail'];
$telefono=$_POST['tele'];
$celu=$_POST['celu'];
$login=$_POST['login'];
$contrasena=$_POST['contrasena'];
$horario=$_POST['horario'];

$consulta="Update entrenador set nombre='$nombre', documento='$documento',  fecha_nacimiento='$fecha', edad='$edad', sexo='$sexo', mail='$mail', login='$login', contrasena='$contrasena',  horario='$horario'  where documento='$documento';";
$error=mysql_error();

echo('error'.$error);
$enviar_consulta=@mysql_query($consulta, $conexion);

if($enviar_consulta)
{
	echo('<script languaje="javascript">
		 alert("Datos Actualizados");
		 document.location=("../../OPC_ADMINISTRADOR.php");
	</script>
	');
}
else
{
	echo('<script languaje="javascript">
		 alert("Datos No Actualizados");
		 document.location=("../../OPC_ADMINISTRADOR.php");
	</script>
	');
}

?>
