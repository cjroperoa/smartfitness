<?php

include("../../CONEXION_BD.php");


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$documento=$_POST['docu'];
$dia=$_POST['dia'];
$mes=$_POST['mes'];
$axo=$_POST['axo'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$mail=$_POST['mail'];
$login=$_POST['login'];
$pasword=$_POST['pass'];
$horario=$_POST['horario'];
$telefono=$_POST['tele'];
$celular=$_POST['celu'];


$nombre_completo=($nombre.' '.$apellido );
$fecha_nacimiento=($axo.'/'.$mes.'/'.$dia);

$error=@mysql_error();


$consulta="insert into entrenador (nombre, documento, fecha_nacimiento, edad, sexo, mail, login, contrasena,  horario, telefono, celular) values('$nombre_completo', '$documento', '$fecha_nacimiento', '$edad' ,'$sexo', '$mail', '$login', '$pasword', '$horario',  '$telefono', '$celular');";
$enviar_consulta=@mysql_query($consulta, $conexion);


	if($enviar_consulta)
	{
		echo('Entrenador registrado');
		echo('<script languaje="javascript">
		 	alert("Entrenador Registrado");
			document.location=("../../OPC_ADMINISTRADOR.php");
			</script>
			');
	}
else
{
	echo('<script languaje="javascript">
		 alert("Entrenador No Registrado");
		 document.location=("../../OPC_ADMINISTRADOR.php");
	</script>
	');
}



?>
