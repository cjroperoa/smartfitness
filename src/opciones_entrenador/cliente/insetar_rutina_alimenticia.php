<?PHP
//Lunes
include("../../CONEXION_BD.php");

$docu=$_POST['DOCUMENTO'];

$dasuyu1=$_POST['DESAYUNO1'];
$onces1=$_POST['ONCES1'];
$almu1=$_POST['ALMUERZO1'];
$once1=$_POST['ONCE1'];
$cena1=$_POST['CENA1'];

$consulta_lunes="insert into rutina_lunes_alimento(documento, desayuno, onces_manana, almuerzo, onces_tarde, cena) values('$docu', '$dasuyu1', '$onces1', '$almu1','$once1' , '$cena1');";
$enviar_consulta_lunes=@mysql_query($consulta_lunes, $conexion);

if($enviar_consulta_lunes)
{
	echo('<script languaje="javascript">
		 alert("Rutina De Cliente Ingresada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}
else 
{
	echo('<script languaje="javascript">
		 alert("Rutina De Cliente No Ingresada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}
?>
<?PHP

//MARTES

$dasuyu2=$_POST['DESAYUNO2'];
$onces2=$_POST['ONCES2'];
$almu2=$_POST['ALMUERZO2'];
$once2=$_POST['ONCE2'];
$cena2=$_POST['CENA2'];

$consulta_martes="insert into rutina_martes_alimento(documento, desayuno, onces_manana, almuerzo, onces_tarde, cena) values('$docu', '$dasuyu2', '$onces2', '$almu2','$once2' , '$cena2');";
$enviar_consulta_martes=@mysql_query($consulta_martes, $conexion);


	if($enviar_consulta_martes)
{
	echo('<script languaje="javascript">
		 alert("Rutina De Cliente Ingresada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}
else 
{
	echo('<script languaje="javascript">
		 alert("Rutina De Cliente No Ingresada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}


?>
<?PHP
//miercoles

$dasuyu3=$_POST['DESAYUNO3'];
$onces3=$_POST['ONCES3'];
$almu3=$_POST['ALMUERZO3'];
$once3=$_POST['ONCE3'];
$cena3=$_POST['CENA3'];

$consulta_miercoles="insert into rutina_miercoles_alimento(documento, desayuno, onces_manana, almuerzo, onces_tarde, cena) values('$docu', '$dasuyu3', '$onces3', '$almu3','$once3' , '$cena3');";
$enviar_consulta_miercoles=@mysql_query($consulta_miercoles, $conexion);


	if($enviar_consulta_miercoles)
{
	echo('<script languaje="javascript">
		 alert("Rutina De Cliente Ingresada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}
else 
{
	echo('<script languaje="javascript">
		 alert("Rutina De Cliente No Ingresada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}


?>
<?PHP

//Jueves

$dasuyu4=$_POST['DESAYUNO4'];
$onces4=$_POST['ONCES4'];
$almu4=$_POST['ALMUERZO4'];
$once4=$_POST['ONCE4'];
$cena4=$_POST['CENA4'];

$consulta_jueves="insert into rutina_jueves_alimento(documento, desayuno, onces_manana, almuerzo, onces_tarde, cena) values('$docu', '$dasuyu4', '$onces4', '$almu4','$once4' , '$cena4');";
$enviar_consulta_jueves=@mysql_query($consulta_jueves, $conexion);


	if($enviar_consulta_jueves)
{
	echo('<script languaje="javascript">
		 alert("Rutina De Cliente Ingresada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}
else 
{
	echo('<script languaje="javascript">
		 alert("Rutina De Cliente No Ingresada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}
?>
<?PHP

//Viernes


$dasuyu5=$_POST['DESAYUNO5'];
$onces5=$_POST['ONCES5'];
$almu5=$_POST['ALMUERZO5'];
$once5=$_POST['ONCE5'];
$cena5=$_POST['CENA5'];

$consulta_viernes="insert into rutina_viernes_alimento(documento, desayuno, onces_manana, almuerzo, onces_tarde, cena) values('$docu', '$dasuyu5', '$onces5', '$almu5','$once5' , '$cena5');";
$enviar_consulta_viernes=@mysql_query($consulta_viernes, $conexion);


		if($enviar_consulta_viernes)
{
	echo('<script languaje="javascript">
		 alert("Rutina De Cliente Ingresada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}
else 
{
	echo('<script languaje="javascript">
		 alert("Rutina De Cliente No Ingresada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}
?>
<?PHP
//Sabado

$dasuyu6=$_POST['DESAYUNO6'];
$onces6=$_POST['ONCES6'];
$almu6=$_POST['ALMUERZO6'];
$once6=$_POST['ONCE6'];
$cena6=$_POST['CENA6'];

$consulta_sabado="insert into rutina_sabado_alimento(documento, desayuno, onces_manana, almuerzo, onces_tarde, cena) values('$docu', '$dasuyu6', '$onces6', '$almu6','$once6' , '$cena6');";
$enviar_consulta_sabado=@mysql_query($consulta_sabado, $conexion);


	
		if($enviar_consulta_sabado)
{
	echo('<script languaje="javascript">
		 alert("Rutina De Cliente Ingresada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}
else 
{
	echo('<script languaje="javascript">
		 alert("Rutina De Cliente No Ingresada");
		 document.location=("../../OPC_ENTRENADOR.php");
	</script>
	');
}

?>
