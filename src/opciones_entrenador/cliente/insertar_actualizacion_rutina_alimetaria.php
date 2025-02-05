<?PHP
require("/../../CONEXION_BD.php");

$docu1=$_POST['documento'];
$desayuno1=$_POST['desayuno1'];
$onces1=$_POST['onces1'];
$almu1=$_POST['almuerzo1'];
$once1=$_POST['once1'];
$cena1=$_POST['cena1'];

$consulta_lunes="Update rutina_lunes_alimento set desayuno='$desayuno1', onces_manana='$onces1', almuerzo='$almu1', onces_tarde='$once1', cena='$cena1' where documento='$docu1';";


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



$desayuno2=$_POST['desayuno2'];
$onces2=$_POST['onces2'];
$almu2=$_POST['almuerzo2'];
$once2=$_POST['once2'];
$cena2=$_POST['cena2'];

$consulta_martes="Update rutina_martes_alimento set desayuno='$desayuno2', onces_manana='$onces2', almuerzo='$almu2', onces_tarde='$once2', cena='$cena2' where documento='$docu1';";
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


$desayuno3=$_POST['desayuno3'];
$onces3=$_POST['onces3'];
$almu3=$_POST['almuerzo3'];
$once3=$_POST['once3'];
$cena3=$_POST['cena3'];

$consulta_miercoles="Update rutina_miercoles_alimento set desayuno='$desayuno3', onces_manana='$onces3', almuerzo='$almu3', onces_tarde='$once3', cena='$cena3' where documento='$docu1';";
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

$desayuno4=$_POST['desayuno4'];
$onces4=$_POST['onces4'];
$almu4=$_POST['almuerzo4'];
$once4=$_POST['once4'];
$cena4=$_POST['cena4'];

$consulta_jueves="Update rutina_jueves_alimento set desayuno='$desayuno4', onces_manana='$onces4', almuerzo='$almu4', onces_tarde='$once4', cena='$cena4' where documento='$docu1';";
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

$desayuno5=$_POST['desayuno5'];
$onces5=$_POST['onces5'];
$almu5=$_POST['almuerzo5'];
$once5=$_POST['once5'];
$cena5=$_POST['cena5'];

$consulta_viernes="Update rutina_viernes_alimento set desayuno='$desayuno5', onces_manana='$onces5', almuerzo='$almu5', onces_tarde='$once5', cena='$cena5' where documento='$docu1';";
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

$desayuno6=$_POST['desayuno6'];
$onces6=$_POST['onces6'];
$almu6=$_POST['almuerzo6'];
$once6=$_POST['once6'];
$cena6=$_POST['cena6'];

$consulta_sabado="Update rutina_sabado_alimento set desayuno='$desayuno6', onces_manana='$onces6', almuerzo='$almu6', onces_tarde='$once6', cena='$cena6' where documento='$docu1';";
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
