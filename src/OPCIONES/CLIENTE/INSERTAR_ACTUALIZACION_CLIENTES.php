<?php


include("../../CONEXION_BD.php");


$nombre=$_POST['nombre'];
$documento=$_POST['documento'];
$fecha_nacimiento=$_POST['fecha'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$mail=$_POST['mail'];
$telefono=$_POST['tele'];
$celu=$_POST['celu'];
$login=$_POST['login'];
$contrasena=$_POST['contrasena'];

$consulta="Update cliente set nombre='$nombre', documento='$documento', fecha_nacimiento='$fecha_nacimiento', sexo='$sexo', edad='$edad',  mail='$mail', login='$login', contrasena='$contrasena', telefono='$telefono', celular='$celu'  where documento='$documento';";



$enviar_consulta=@mysql_query($consulta, $conexion);

if($enviar_consulta)
{
	echo('<script languaje="javascript">
		 alert("Datos Actualizados.");
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
