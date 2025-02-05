 <?php

include("../../CONEXION_BD.php");

$documento=$_POST['documento'];



$consulta="delete from smartfitness.cliente where documento='$documento';";
$enviar_consulta=mysql_query($consulta, $conexion);

if($datos=@mysql_fetch_array($enviar_consulta))
{
		do   
		{
			echo('<script languaje="javascript">
			 alert("Cliente Eliminado");
		 	document.location=("../../OPC_ADMINISTRADOR.php");
			</script>
			');
		}		
    		while ($datos=mysql_fetch_array($enviar_consulta)); //Hace todo el recorrido por la tabla
}
	
else 
{
	echo('<script languaje="javascript">
					 alert("Documento Del Cliente Invalido.... Vuelva Intentarlo");
					 document.location=("../../OPC_ADMINISTRADOR.php");
				</script>
				');
}
	

?>
</body>
</html>
