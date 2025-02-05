<?PHP
require("/../../CONEXION_BD.php");
//Lunes

$docu=$_POST['documento'];
$actividad1=$_POST['ACTIVIDAD1'];
$descri1=$_POST['DESCRIPCION1'];
$duracion1=$_POST['DURACION1'];
$sesion1=$_POST['SESION1'];
$maquina1=$_POST['MAQUINA1'];
$error=mysql_error();

$consulta_lunes="Update rutina_lunes set nombre_actividad='$actividad1', descripcion_actividad='$descri1', duracion='$duracion1', sesion='$sesion1', nombre_maquina='$maquina1' where documento_cliente='$docu';";
$enviar_consulta_lunes=@mysql_query($consulta_lunes, $conexion);


	if($enviar_consulta_lunes)
{
	echo('<script languaje="javascript">
		 alert("Rutina De Cliente Actualizada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}
else 
{
	echo('<script languaje="javascript">
		 alert("Rutina De Cliente No  Actualizada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}



?>
<?PHP
//Martes

$actividad2=$_POST["activi"];
$descripcion_actividad2=$_POST['descri'];
$duracion2=$_POST['dura'];
$sesion2=$_POST['sesion'];
$maquina2=$_POST['maqui'];

echo "$actividad2";



$error=mysql_error();
echo('error'.$error);

$consulta_martes="Update rutina_martes set nombre_actividad='$actividad2', descripcion_actividad='$descripcion_actividad2', duracion='$duracion2', sesion='$sesion2', nombre_maquina='$maquina2' where documento_cliente='$docu';";
$enviar_consulta_martes=@mysql_query($consulta_martes, $conexion);


	if($enviar_consulta_martes)
{
	echo('<script languaje="javascript">
		 alert("Rutina De Cliente  Actualizada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}
else 
{
	echo('<script languaje="javascript">
		 alert("Rutina De Cliente No  Actualizada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}


?>
<?PHP
//Lunes

$actividad3=$_POST['ACTIVIDAD3'];
$descri3=$_POST['DESCRIPCION3'];
$duracion3=$_POST['DURACION3'];
$sesion3=$_POST['SESION3'];
$maquina3=$_POST['MAQUINA3'];


$consulta_miercoles="Update rutina_miercoles set nombre_actividad='$actividad3', descripcion_actividad='$descri3', duracion='$duracion3', sesion='$sesion3', nombre_maquina='$maquina3' where documento_cliente='$docu';";
$enviar_consulta_miercoles=@mysql_query($consulta_miercoles, $conexion);


	if($enviar_consulta_miercoles)
{
	echo('<script languaje="javascript">
		 alert("Rutina De Cliente  Actualizada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}
else 
{
	echo('<script languaje="javascript">
		 alert("Rutina De Cliente No  Actualizada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}


?>
<?PHP

//Jueves 
$actividad4=$_POST['ACTIVIDAD4'];
$descri4=$_POST['DESCRIPCION4'];
$duracion4=$_POST['DURACION4'];
$sesion4=$_POST['SESION4'];
$maquina4=$_POST['MAQUINA4'];

$consulta_jueves="Update rutina_jueves set nombre_actividad='$actividad4', descripcion_actividad='$descri4', duracion='$duracion4', sesion='$sesion4', nombre_maquina='$maquina4' where documento_cliente='$docu';";
$enviar_consulta_jueves=@mysql_query($consulta_jueves, $conexion);


if($enviar_consulta_jueves)
{
	echo('<script languaje="javascript">
		 alert("Rutina De Cliente  Actualizada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}
else 
{
	echo('<script languaje="javascript">
		 alert("Rutina De Cliente No  Actualizada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}


?>
<?PHP
//Viernes

$actividad5=$_POST['ACTIVIDAD5'];
$descri5=$_POST['DESCRIPCION5'];
$duracion5=$_POST['DURACION5'];
$sesion5=$_POST['SESION5'];
$maquina5=$_POST['MAQUINA5'];

$consulta_viernes="Update rutina_viernes set nombre_actividad='$actividad5', descripcion_actividad='$descri5', duracion='$duracion5', sesion='$sesion5', nombre_maquina='$maquina5' where documento_cliente='$docu';";
$enviar_consulta_viernes=@mysql_query($consulta_viernes, $conexion);


	if($enviar_consulta_viernes)
{
	echo('<script languaje="javascript">
		 alert("Rutina De Cliente Actualizada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}
else 
{
	echo('<script languaje="javascript">
		 alert("Rutina De Cliente No  Actualizada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}
?>
<?PHP
//Sabado

$actividad6=$_POST['ACTIVIDAD6'];
$descri6=$_POST['DESCRIPCION6'];
$duracion6=$_POST['DURACION6'];
$sesion6=$_POST['SESION6'];
$maquina6=$_POST['MAQUINA6'];


$consulta_sabado="Update rutina_sabado set nombre_actividad='$actividad6', descripcion_actividad='$descri6', duracion='$duracion6', sesion='$sesion6', nombre_maquina='$maquina6' where documento_cliente='$docu';";

$enviar_consulta_sabado=@mysql_query($consulta_sabado, $conexion);


	if($enviar_consulta_sabado)
{
	echo('<script languaje="javascript">
		 alert("Rutina De Cliente  Actualizada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}
else 
{
	echo('<script languaje="javascript">
		 alert("Rutina De Cliente No  Actualizada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}

?>
