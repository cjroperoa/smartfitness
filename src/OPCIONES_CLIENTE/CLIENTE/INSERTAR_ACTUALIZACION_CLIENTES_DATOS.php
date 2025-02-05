<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php


include("../../CONEXION_BD.php");


$nombre=$_POST['nombre'];
$documento=$_POST['documento'];
$fecha_nacimiento=$_POST['fecha'];;
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$mail=$_POST['mail'];
$telefono=$_POST['tele'];
$celu=$_POST['celu'];
$contrasena=$_POST['pass'];





$consulta="Update cliente set nombre='$nombre', fecha_nacimiento='$fecha_nacimiento', sexo='$sexo', edad='$edad', mail='$mail',  contrasena='$contrasena', telefono='$telefono', celular='$celu'  where documento='$documento';";

$enviar_consulta=@mysql_query($consulta, $conexion);

if($enviar_consulta)
{
	echo('<script languaje="javascript">
		 alert("Datos Actualizados")
		 document.location=("../../OPC_CLIENTE.php");
	</script>
	');
	
}
else
{
	echo('<script languaje="javascript">
		 alert("Datos No Actualizados")
		 document.location=("../../ENVIAR_ACTUALIZACION_CLIENTE_DATOS.php");
	</script>
	');
}

?>
</body>
</html>
