<?php

include("../../CONEXION_BD.php");




$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$documento=$_POST['documento'];
$sexo=$_POST['sexo'];
$edad=$_POST['edad'];
$mail=$_POST['mail'];
$login=$_POST['login'];
$pasword=$_POST['contrasena'];
$tele=$_POST['tele'];
$celu=$_POST['celu'];
$nombre_completo=($nombre.' '.$apellido);

$consulta="insert into administrador(nombre, documento, sexo, edad, mail, login, contrasena, telefono, celular) values('$nombre_completo', '$documento', '$sexo','$edad' , '$mail', '$login', '$pasword', '$tele', '$celu');";
$enviar_consulta=@mysql_query($consulta, $conexion);


	if($enviar_consulta)
	{
		echo('<script languaje="javascript">
		 	alert("Nuevo Administrador Creado");
			document.location=("../../OPC_ADMINISTRADOR.php");
			</script>
			');
	}
else
{
	echo('<script languaje="javascript">
		 alert("Administrador No fue Creado");
		 document.location=("../../OPC_ADMINISTRADOR.php");
	</script>
	');
}



?>
