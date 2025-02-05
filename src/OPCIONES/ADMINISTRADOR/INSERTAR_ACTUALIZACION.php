<?php

include("/../../CONEXION_BD.php");
session_start();
	
$documento_ad =$_SESSION['administrador'];

$nombre=$_POST['nombre'];
$sexo=$_POST['sexo'];
$edad=$_POST['edad'];
$mail=$_POST['mail'];
$login=$_POST['login'];
$telefono=$_POST['tele'];
$celu=$_POST['celu'];

$consulta="Update administrador set  nombre='$nombre', documento=$documento_ad, sexo='$sexo', edad='$edad', mail='$mail', login='$login', telefono='$telefono', celular='$celu'  where documento='$documento_ad';";
$error=mysql_error();

$enviar_consulta=@mysql_query($consulta, $conexion);

if($enviar_consulta)
{
	echo('
			<script languaje="javascript">
				 alert("Datos Actualizados");
 				 document.location=("../../OPC_ADMINISTRADOR.php");
			</script>
		');
}
else
{
		echo('
				<script languaje="javascript">
					alert("Datos No Actualizados");
					document.location=("../../ENVIAR_ACT_DATOS.php");
				</script>
			');
	
}

?>
