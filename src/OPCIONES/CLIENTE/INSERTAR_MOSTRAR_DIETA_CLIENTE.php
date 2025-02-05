<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Cristian 'GOPE' Ropero"/>
<meta http-equiv="content-language" content="es"/>

<title>Bienvenido a Administrador</title>	

	
    <link type="image/ico" href="../../IMAGENES/Favicon/Favicon.ico" rel="shortcut icon"> <!-- Carga del Favicon -->    
	<link type="text/css" href="../../ESTILOS/ESTILO_BASE.css" rel="stylesheet"/> <!-- CSS Base - Principal -->
	<link type="text/css" href="../../ESTILOS/MENU.css" rel="stylesheet"/> <!-- CSS - Menu -->

    <script type="text/javascript" src="../../SCRIPTS/jquery.js"></script> <!-- Script Utilidad JQuery-->
    <script type="text/javascript" src="../../SCRIPTS/Menu/menu.js"></script> <!-- Script Menu [Animación]-->
    
    <style>
	
	
	#actualizardatos {
		position:relative;
		width:auto; /*Ancho Div*/
		height:auto; /* Alto Div*/
		padding-top:8%;
		padding-left:5%;
		color:#FFF;		
		font-family:'Trebuchet MS', Tahoma, Arial;
		text-shadow: #B1B1B1 0.1em 0.1em 0.2em;
		text-transform:uppercase;
		}
		#actualizardatos table{
		border:#FFFFFF double;
		text-align:center;
		}
		
		#actualizardatos td{
		text-align:center;
		border:#FFFFFF double;}
		
			#actualizardatos legend {
		font-size: 18px;
		padding-top: 20px;
		padding-right: -9px;
		letter-spacing:1px;
		/*padding-bottom:10px;*/
		text-decoration:underline;
		text-align:center;
		}
		
	#actualizardatos label {
		font-size:14px;
		padding-left: 50px;
		padding-right: 50px;
		padding:10px 0 3px;		
	    float: left;		
	  	width: 25%;
		}
		
	#actualizardatos input[type="text"] {
		/*border:medium none !important;
		font-size:12px;*/
		height:20px;
		padding-left:2px;
		text-align:center;
		}
		
	#actualizardatos input[type="radio"] {
		/*border:medium none !important;
		font-size:12px;*/
		padding-left:4px;
		top:2px;
		}
		
	div {
  		margin: 1px 0;
		}
		
	.btenviar{
		position:fixed;
		top: 83%;
		left: 43%;
		} 
		
		
	.color_letra{color: #FFFFFF}
    </style>
    
</head>

<body>
<?php

require("../../seguridad_smartfitness.php");
?>
	<!----- Imagen Fondo CSS ----->
	<img class="fondo" src="../../IMAGENES/fondo.jpg"/> 

    <!----- Bloque Cabecera [SALUDO]----->    
    <div id="tbcabecera">   
          
	  <img class="logo" src="../../IMAGENES/logo-smart.jpg"/>
      <h2 class="bienvenida"> Hola Administrador !! </h2>
      <img class="img-usuario" src="../../IMAGENES/admin.png"/>

	</div>
	
	<!----- Bloque Menu ----->
	<div id="tbmenu">	 
		<!----- Menu Desplegable ----->
		<div id="menu">
		 <ul class="menu">
         	<!-- Opciones Administrador -->
			<li><a href="../../OPC_ADMINISTRADOR.php" class="parent"><span>ADMINISTRADOR</span></a>
				<div>
					<ul>
						<li><a href="../ADMINISTRADOR/CREAR_NUEVO.php"><span>Crear Nuevo Administrador</span></a></li>
						<li><a href="../ADMINISTRADOR/ENVIAR_ACT_DATOS.php"><span>Actualizar Mis Datos</span></a></li>
						<li><a href="../ADMINISTRADOR/VERIFICACION_CAMBIAR_CONTRASENA.php"><span>Cambiar Mi Contraseña</span></a></li>
                        <li><a href="../ADMINISTRADOR/ADMINISTRADORES_DEL_GIMNASIO.PHP"><span>Administradores Del Gimnasio</span></a></li>
						<li><a href="../ADMINISTRADOR/VERIFICACION_ELIMINAR_ADMINISTRADOR.PHP"><span>Eliminar Administrador</span></a></li>
					</ul>
				</div>
           </li>
            <!-- Opciones Entrenador -->    
            <li><a href="#" class="parent"><span>ENTRENADOR</span></a>
				<div>
					<ul>
						<li><a href="../ENTRENADOR/CREAR_NUEVO_ENTRENADOR.php"><span>Crear Nuevo</span></a></li>
						<li><a href="../ENTRENADOR/VERIFICACION_ACTUALIZAR_DATOS_ENTRENADOR.php"><span>Actualizar Datos</span></a></li>
                        <li><a href="../ENTRENADOR/MOSTRAR_LISTA_ENTRENADORES.php"><span>Lista Entrenadores</span></a></li>
                        <li><a href="../ENTRENADOR/VERIFICACION_ELIMINAR_ENTRENADOR.php"><span>Eliminar</span></a></li>
					</ul>
				</div>
            </li>
            <!-- Opciones Cliente -->    
            <li><a href="#" class="parent"><span>CLIENTE</span></a>
				<div>
					<ul>
						<li><a href="CREAR_NUEVO_CLIENTE.php" rel="lightbox_text"><span>Crear Nuevo</span></a></li>
						<li><a href="VERIFICACION_ACTUALIZACION_DATOS.php" rel="lightbox_text"><span>Actualizar Datos</span></a></li>
                        <li><a href="REGISTRAR_PAGO_CLIENTE.php" rel="lightbox_text"><span>Registrar Pago</span></a></li>
						<li><a href="VERIFICACION_MOSTRAR_RUTINA_CLIENTE.php" rel="lightbox_text"><span>Rutina Fisica</span></a></li>
                        <li><a href="VERIFICACION_MOSTRAR_DIETA_CLIENTE.php" rel="lightbox_text"><span>Rutina Alimentaria</span></a></li>
                        <li><a href="VERIFICACION_MOSTRAR_INFORME_CLIENTE.php" rel="lightbox_text"><span>Ver Informe</span></a></li>
                        <li><a href="MOSTRAR_CLIENTES_GIMNASIO.php" rel="lightbox_text">Lista Clientes<span></span></a></li>
                        <li><a href="MOSTRAR_PAGO_CLIENTES.php" rel="lightbox_text"><span>Lista Pagos </span></a></li>
                        <li><a href="VERIFICACION_ELIMINAR_CLIENTE.php" rel="lightbox_text"><span>Eliminar</span></a></li>
                        
					</ul>
				</div> 
            </li>           
            <!----- Opciones Otras [Ayuda-Contacto-Cerrar]----->    		
           <li><a href="../../AYUDAS/AYUDA_ADMINISTRADOR.PHP"><span>AYUDA</span></a></li>           
           <li><a href="../../cerrar_sesion.php"><span>CERRAR SESION</span></a></li>  
                   	
     	</ul>
       </div>       
            
</div>
    
    <!-- Bloque Contenido (Principal) -->
	<div id="tbprincipal">	
	 
          <?php

include("../../CONEXION_BD.php");

$documento=$_POST['documento'];

$mostrar_datos="select documento, desayuno, onces_manana, almuerzo, onces_tarde, cena from rutina_lunes_alimento where documento='$documento' ;";
$enviar_consulta_mostrar=mysql_query($mostrar_datos, $conexion);

if ($datos=mysql_fetch_array($enviar_consulta_mostrar))
{
	
	do   
		{		
			
						
			$ddocumento=stripslashes($datos["documento"]);  //guardo en variables para mostrar luego en tablas
			$ddesayuno=stripslashes($datos["desayuno"]);
			$oonces_manana=stripslashes($datos["onces_manana"]);
			$aalmuerzo=stripslashes($datos["almuerzo"]);
			$oonces_tarde=stripslashes($datos["onces_tarde"]);
			$ccena=stripslashes($datos["cena"]);
			
				echo "
				<fieldset id='actualizardatos'>
				<table  >
				<tr>
				<td colspan='5'>RUTINA ALIMENTICIA DIA LUNES</td>
				</tr>
				<tr>
				<td>DESAYUNO</td>
				<td>ENTREMES</td>
				<td><b>ALMUERZO</b></td>
				<td><b>MEDIAS NUEVES</b></td>
				<td><b>CENA</b></td>
				</tr>
				<tr>
				<td>".$ddesayuno."</td>
				<td>".$oonces_manana."</td>
					<td>".$aalmuerzo."</td>
						<td>".$oonces_tarde."</td>
							<td>".$ccena."</td>
				</tr>
				</table>
				</fieldset>
				 ";
						
		
		}

    	while ($datos=mysql_fetch_array($enviar_consulta_mostrar)); //Hace todo el recorrido por la tabla
			}
	
			
else
{
	echo('<script languaje="javascript">
		document.location=("../../OPC_ADMINISTRADOR.php");
		alert("Documento Incorrecto");
	</script>
	');
}



?>
</p>
        </p>
        <p>
        <?php

include("../../CONEXION_BD.php");


$documento=$_POST['documento'];

$mostrar_datos="select documento, desayuno, onces_manana, almuerzo, onces_tarde, cena from rutina_martes_alimento where documento='$documento' ;";
$enviar_consulta_mostrar=@mysql_query($mostrar_datos, $conexion);

if ($row = mysql_fetch_array($enviar_consulta_mostrar))
{
	
	do   
		{		
			$ddocumento=stripslashes($row["documento"]);  //guardo en variables para mostrar luego en tablas
			$ddesayuno=stripslashes($row["desayuno"]);
			$oonces_manana=stripslashes($row["onces_manana"]);
			$aalmuerzo=stripslashes($row["almuerzo"]);
			$oonces_tarde=stripslashes($row["onces_tarde"]);
			$ccena=stripslashes($row["cena"]);
			
				echo "
					<fieldset id='actualizardatos'>
				<table >
				<tr>
				<td colspan='5'>RUTINA ALIMENTICIA DIA MARTES</td>
				</tr>
				<tr>
				<td>DESAYUNO</td>
				<td>ENTREMES</td>
				<td><b>ALMUERZO</b></td>
				<td><b>MEDIAS NUEVES</b></td>
				<td><b>CENA</b></td>
				</tr>
				<tr>
				<td>".$ddesayuno."</td>
				<td>".$oonces_manana."</td>
					<td>".$aalmuerzo."</td>
						<td>".$oonces_tarde."</td>
							<td>".$ccena."</td>
				</tr>
				</table>
				</fieldset>
				 ";
										
		 }
	
    while ($row = mysql_fetch_array($enviar_consulta_mostrar)); //Hace todo el recorrido por la tabla
}
else
{
	echo('<script languaje="javascript">
		document.location=("../../OPC_ADMINISTRADOR.php");
		alert("Documento Incorrecto");
	</script>
	');
}



?>
	    <p>
  <?php

include("../../CONEXION_BD.php");

$cont_mi=0;
$documento=$_POST['documento'];

$mostrar_datos="select desayuno, onces_manana, almuerzo, onces_tarde, cena from rutina_miercoles_alimento where documento='$documento' ;";
$enviar_consulta_mostrar=@mysql_query($mostrar_datos, $conexion);

if ($row = mysql_fetch_array($enviar_consulta_mostrar))
{
	
	do   
		{		
			
			
				$ddocumento=stripslashes($datos["documento"]);  //guardo en variables para mostrar luego en tablas
			
			$ddesayuno=stripslashes($row["desayuno"]);
			$oonces_manana=stripslashes($row["onces_manana"]);
			$aalmuerzo=stripslashes($row["almuerzo"]);
			$oonces_tarde=stripslashes($row["onces_tarde"]);
			$ccena=stripslashes($row["cena"]);
			
				echo "
					<fieldset id='actualizardatos'>
				<table>
				<tr>
				<td colspan='5'>RUTINA ALIMENTICIA DIA MIERCOLES</td>
				</tr>
				<tr>
				<td>DESAYUNO</td>
				<td>ENTREMES</td>
				<td><b>ALMUERZO</b></td>
				<td><b>MEDIAS NUEVES</b></td>
				<td><b>CENA</b></td>
				</tr>
				<tr>
				<td>".$ddesayuno."</td>
				<td>".$oonces_manana."</td>
					<td>".$aalmuerzo."</td>
						<td>".$oonces_tarde."</td>
							<td>".$ccena."</td>
				</tr>
				</table>
				</fieldset>
				 ";	
			
										
		 }
	

    while ($row = mysql_fetch_array($enviar_consulta_mostrar)); //Hace todo el recorrido por la tabla
}
else
{
	echo('<script languaje="javascript">
		document.location=("../../OPC_ADMINISTRADOR.php");
		alert("Documento Incorrecto");
	</script>
	');
}



?>        
	    <p> 
	      
	      
          <?php

include("../../CONEXION_BD.php");

$cont_ju=0;
$documento=$_POST['documento'];

$mostrar_datos="select desayuno, onces_manana, almuerzo, onces_tarde, cena from rutina_jueves_alimento where documento='$documento' ;";
$enviar_consulta_mostrar=@mysql_query($mostrar_datos, $conexion);

if ($row = mysql_fetch_array($enviar_consulta_mostrar))
{
	
	do   
		{		
			
			$ddocumento=stripslashes($datos["documento"]);  //guardo en variables para mostrar luego en tablas
			
			$ddesayuno=stripslashes($row["desayuno"]);
			$oonces_manana=stripslashes($row["onces_manana"]);
			$aalmuerzo=stripslashes($row["almuerzo"]);
			$oonces_tarde=stripslashes($row["onces_tarde"]);
			$ccena=stripslashes($row["cena"]);
			
				echo "
					<fieldset id='actualizardatos'>
				<table >
				<tr>
				<td colspan='5'>RUTINA ALIMENTICIA DIA JUEVES</td>
				</tr>
				<tr>
				<td>DESAYUNO</td>
				<td>ENTREMES</td>
				<td><b>ALMUERZO</b></td>
				<td><b>MEDIAS NUEVES</b></td>
				<td><b>CENA</b></td>
				</tr>
				<tr>
				<td>".$ddesayuno."</td>
				<td>".$oonces_manana."</td>
					<td>".$aalmuerzo."</td>
						<td>".$oonces_tarde."</td>
							<td>".$ccena."</td>
				</tr>
				</table>
				</fieldset>
				 ";	
			
									
										
		 }
	

    while ($row = mysql_fetch_array($enviar_consulta_mostrar)); //Hace todo el recorrido por la tabla
}
else
{
	echo('<script languaje="javascript">
		document.location=("../../OPC_ADMINISTRADOR.php");
		alert("Documento Incorrecto");
	</script>
	');
}



?>
      <p>
        <?php

include("../../CONEXION_BD.php");

$cont_vi=0;
$documento=$_POST['documento'];

$mostrar_datos="select desayuno, onces_manana, almuerzo, onces_tarde, cena from rutina_viernes_alimento where documento='$documento' ;";
$enviar_consulta_mostrar=@mysql_query($mostrar_datos, $conexion);

if ($row = mysql_fetch_array($enviar_consulta_mostrar))
{
	
	do   
		{	$ddocumento=stripslashes($datos["documento"]);  //guardo en variables para mostrar luego en tablas
			
			$ddesayuno=stripslashes($row["desayuno"]);
			$oonces_manana=stripslashes($row["onces_manana"]);
			$aalmuerzo=stripslashes($row["almuerzo"]);
			$oonces_tarde=stripslashes($row["onces_tarde"]);
			$ccena=stripslashes($row["cena"]);
			
				echo "
					<fieldset id='actualizardatos'>
				<table>
				<tr>
				<td colspan='5'>RUTINA ALIMENTICIA DIA VIERNES</td>
				</tr>
				<tr>
				<td>DESAYUNO</td>
				<td>ENTREMES</td>
				<td><b>ALMUERZO</b></td>
				<td><b>MEDIAS NUEVES</b></td>
				<td><b>CENA</b></td>
				</tr>
				<tr>
				<td>".$ddesayuno."</td>
				<td>".$oonces_manana."</td>
					<td>".$aalmuerzo."</td>
						<td>".$oonces_tarde."</td>
							<td>".$ccena."</td>
				</tr>
				</table>
				</fieldset>
				 ";		
			
										
		 }
	

    while ($row = mysql_fetch_array($enviar_consulta_mostrar)); //Hace todo el recorrido por la tabla
}
else
{
	echo('<script languaje="javascript">
		document.location=("../../OPC_ADMINISTRADOR.php");
		alert("Documento Incorrecto");
	</script>
	');
}

?>
                  <p>
            <?php

include("../../CONEXION_BD.php");

$cont_sa=0;
$documento=$_POST['documento'];

$mostrar_datos="select desayuno, onces_manana, almuerzo, onces_tarde, cena from rutina_sabado_alimento where documento='$documento' ;";
$enviar_consulta_mostrar=@mysql_query($mostrar_datos, $conexion);

if ($row = mysql_fetch_array($enviar_consulta_mostrar))
{
	
	do   
			{		
			$ddocumento=stripslashes($datos["documento"]);  //guardo en variables para mostrar luego en tablas
			
			$ddesayuno=stripslashes($row["desayuno"]);
			$oonces_manana=stripslashes($row["onces_manana"]);
			$aalmuerzo=stripslashes($row["almuerzo"]);
			$oonces_tarde=stripslashes($row["onces_tarde"]);
			$ccena=stripslashes($row["cena"]);
			
				echo "
							
					<fieldset id='actualizardatos'>
				<table >
				<tr>
				<td colspan='5'>RUTINA ALIMENTICIA DIA SABADO</td>
				</tr>
				<tr>
				<td>DESAYUNO</td>
				<td>ENTREMES</td>
				<td><b>ALMUERZO</b></td>
				<td><b>MEDIAS NUEVES</b></td>
				<td><b>CENA</b></td>
				</tr>
				<tr>
				<td>".$ddesayuno."</td>
				<td>".$oonces_manana."</td>
				<td>".$aalmuerzo."</td>
						<td>".$oonces_tarde."</td>
							<td>".$ccena."</td>
				</tr>
				</table>
				</fieldset>
				 ";			
					
		 }
	

    while ($row = mysql_fetch_array($enviar_consulta_mostrar)); //Hace todo el recorrido por la tabla
}
else
{
	echo('<script languaje="javascript">
		document.location=("../../OPC_ADMINISTRADOR.php");
		alert("Documento Incorrecto");
	</script>
	');
}

?>
                  </div>

	<!-- Bloque Copyright -->
	<div id="tbCopyrigth">	  
		<div><span>&copy; Copyright 2012 | Todos los derechos Reservados <strong>  Online Web  </strong> Pol&iacute;tica de privacidad</span></div>	  
</div> 
    	    
</body>

</html>

<!-- Elimina Back-Link de Apycom -->
<div style="visibility:hidden">
<a href="http://apycom.com/">Apycom jQuery Menus</a>
</div>