<?PHP
//LUNES
include("../../CONEXION_BD.php");


$docu=$_POST['DOCUMENTO'];
$actividad1=$_POST['ACTIVIDAD1'];
$descri1=$_POST['DESCRIPCION1'];
$duracion1=$_POST['DURACION1'];
$sesion1=$_POST['SESION1'];
$maquina1=$_POST['MAQUINA1'];
$rutina1=$_POST['rutina_lu'];

$consulta_lunes="insert into rutina_lunes( documento_cliente, nombre_actividad, descripcion_actividad, duracion, sesion, nombre_maquina, rutina) values( '$docu', '$actividad1', '$descri1','$duracion1' , '$sesion1', '$maquina1', '$rutina1');";
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

//Martes

$actividad2=$_POST['ACTIVIDAD2'];
$descri2=$_POST['DESCRIPCION2'];
$duracion2=$_POST['DURACION2'];
$sesion2=$_POST['SESION2'];
$maquina2=$_POST['MAQUINA2'];
$rutina2=$_POST['rutina_ma'];

$consulta_martes="insert into rutina_martes( documento_cliente, nombre_actividad, descripcion_actividad, duracion, sesion, nombre_maquina, rutina) values( '$docu', '$actividad2', '$descri2','$duracion2' , '$sesion2', '$maquina2', '$rutina2');";
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

//Miercoles

$actividad3=$_POST['ACTIVIDAD3'];
$descri3=$_POST['DESCRIPCION3'];
$duracion3=$_POST['DURACION3'];
$sesion3=$_POST['SESION3'];
$maquina3=$_POST['MAQUINA3'];
$rutina3=$_POST['rutina_mi'];

$consulta_miercoles="insert into rutina_miercoles(documento_cliente, nombre_actividad, descripcion_actividad, duracion, sesion, nombre_maquina, rutina) values( '$docu', '$actividad3', '$descri3','$duracion3' , '$sesion3', '$maquina3', '$rutina3');";
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


$actividad4=$_POST['ACTIVIDAD4'];
$descri4=$_POST['DESCRIPCION4'];
$duracion4=$_POST['DURACION4'];
$sesion4=$_POST['SESION4'];
$maquina4=$_POST['MAQUINA4'];
$rutina4=$_POST['rutina_ju'];
$consulta_jueves="insert into rutina_jueves( documento_cliente, nombre_actividad, descripcion_actividad, duracion, sesion, nombre_maquina, rutina) values( '$docu', '$actividad4', '$descri4','$duracion4' , '$sesion4', '$maquina4', '$rutina4');";
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

//viernes

$actividad5=$_POST['ACTIVIDAD5'];
$descri5=$_POST['DESCRIPCION5'];
$duracion5=$_POST['DURACION5'];
$sesion5=$_POST['SESION5'];
$maquina5=$_POST['MAQUINA5'];
$rutina5=$_POST['rutina_vi'];

$consulta_viernes="insert into rutina_viernes( documento_cliente, nombre_actividad, descripcion_actividad, duracion, sesion, nombre_maquina, rutina) values( '$docu', '$actividad5', '$descri5','$duracion5' , '$sesion5', '$maquina5', '$rutina5');";
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


$actividad6=$_POST['ACTIVIDAD6'];
$descri6=$_POST['DESCRIPCION6'];
$duracion6=$_POST['DURACION6'];
$sesion6=$_POST['SESION6'];
$maquina6=$_POST['MAQUINA6'];
$rutina6=$_POST['rutina_sa'];

$consulta_sabado="insert into rutina_sabado( documento_cliente, nombre_actividad, descripcion_actividad, duracion, sesion, nombre_maquina, rutina) values('$docu', '$actividad6', '$descri6','$duracion6' , '$sesion6', '$maquina6', '$rutina6');";
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

