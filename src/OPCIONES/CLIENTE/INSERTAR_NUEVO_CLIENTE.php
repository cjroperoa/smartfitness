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
$peso=$_POST['peso'];
$estatura=$_POST['esta'];
$valoracion_me=$_POST['valome'];
$valoracion_fi=$_POST['valofi'];
$ritmo=$_POST['ritmo'];
$tel=$_POST['tele'];
$celu=$_POST['celu'];
$nomentrenador=$_POST['nomen'];
$celuentrenador=$_POST['celuen'];
$fecha_ingreso=$_POST['fecha_ingreso'];

$nombre_completo=($nombre.' '.$apellido);
$fecha_nacimiento=($axo.'/'.$mes.'/'.$dia);

$consulta="insert into cliente (nombre, documento, fecha_nacimiento, sexo, edad, mail, login, contrasena, peso, estatura, valoracion_medica, valoracion_fisica, ritmo_cardiaco, telefono, celular, nombre_entrenador, celular_entrenador, fecha_ingreso) values('$nombre_completo', '$documento', '$fecha_nacimiento', '$sexo','$edad' , '$mail', '$login', '$pasword', '$peso', '$estatura', '$valoracion_me', '$valoracion_fi', '$ritmo', '$tel', '$celu', '$nomentrenador', '$celuentrenador', '$fecha_ingreso');";
$enviar_consulta=@mysql_query($consulta, $conexion);


	if($enviar_consulta)
	{
		echo('cliente registrado');
		echo('<script languaje="javascript">
		 	alert("Cliente Registrado");
			document.location=("../../OPC_ADMINISTRADOR.php");			
			</script>
			');
	}
else
{
	echo('<script languaje="javascript">
		 alert("Cliente No Registrado");
		document.location=("../../OPC_ADMINISTRADOR.php"); 
	</script>
	');
}



?>
