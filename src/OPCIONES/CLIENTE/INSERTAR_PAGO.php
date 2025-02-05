<?php

include("../../CONEXION_BD.php");


$nombre=$_POST['nombre'];
$documento=$_POST['documento'];
$pago=$_POST['pago'];
$fecha=$_POST['fecha'];
$valor=$_POST['valor'];

$consulta="insert into pago_cliente values('$documento', '$nombre', '$pago', '$fecha','$valor');";
$enviar_consulta=@mysql_query($consulta, $conexion);

if($enviar_consulta)
{
	echo('pago registrado');
	echo('<script languaje="javascript">
		 alert("Pago Registro");
		 document.location=("../../OPC_ADMINISTRADOR.php"); 
	</script>
	');
}else
{
	echo('<script languaje="javascript">
		 alert("Pago No Registrado");
		 document.location=("../../OPC_ADMINISTRADOR.php"); 
	</script>
	');
}
?>