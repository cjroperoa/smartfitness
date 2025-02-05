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
		padding-top:3%;
		padding-left: 3%;
		border:medium none;
		color:#FFF;		
		font-family:'Trebuchet MS', Tahoma, Arial;
		text-shadow: #B1B1B1 0.1em 0.1em 0.2em;
		text-transform:uppercase;
		}
		#actualizardatos table{
		border:#FFFFFF double;
		text-align:center;}
		
		#actualizardatos td{
		text-align:center;
		border:#FFFFFF double;}
	#actualizardatos legend {
		font-size: 21px;
		padding-top: 20px;
		padding-right: -9px;
		letter-spacing:1px;
		padding-bottom:10px;
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
    <span class="color_letra"></span>
    <!-- Bloque Contenido (Principal) -->
	<div id="tbprincipal">
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>
	  
	 
	    <?php

include("../../CONEXION_BD.php");


$documento=$_POST['documento'];
$mostrar_datos="select  nombre, documento  from cliente where documento='$documento' ;";
$enviar_consulta_mostrar=@mysql_query($mostrar_datos, $conexion);

if ($row = mysql_fetch_array($enviar_consulta_mostrar))
{
	
	do   
		{
				$nnombre=stripslashes($row["nombre"]);
				$ddocumento=stripslashes($row["documento"]);  //guardo en variables para mostrar luego en tablas
				
							
		
				echo '<fieldset id="actualizardatos">
				<table>
				<tr>
				<td colspan="2">Datos Cliente</td>
				</tr>
				<tr>
				<td>NOMBRE</td> 
				<td>DOCUMENTO</td> 
				</tr> 
				<td>'.$nnombre.'</td>
				<td>'.$ddocumento.'</td>
				</tr>
				</table>
				</fieldset>
				 ';
										
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
	 
	    <?php



$mostrar_datos="select documento, fecha_ingreso, peso, estatura, valoracion_medica, valoracion_fisica, ritmo_cardiaco  from cliente where documento='$documento' ;";
$enviar_consulta_mostrar=@mysql_query($mostrar_datos, $conexion);

if ($row = mysql_fetch_array($enviar_consulta_mostrar))
{
	
	do   
		{
				$ddocumento=stripslashes($row["documento"]);
				$ffecha_ingreso=stripslashes($row["fecha_ingreso"]);  //guardo en variables para mostrar luego en tablas
				$ppeso=stripslashes($row["peso"]);
				$eestatura=stripslashes($row["estatura"]);
				$vvaloracion_medica=stripslashes($row["valoracion_medica"]);
				$vvaloracion_fisica=stripslashes($row["valoracion_fisica"]);
				$rritmo_cardiaco=stripslashes($row["ritmo_cardiaco"]);
				
				echo'
				<fieldset id="actualizardatos">
				<table >
				<tr>
				<td colspan="6">PRIMER INFORME REGISTRADO</td>
				</tr>
				
				<tr>
				<td>FECHA DE INGRESO</td>
				<td>PESO</td>
				<td>ESTATURA</td>
				<td>VALORACION MEDICA</td>
				<td>VALORACION FISICA</td>
				<td>RITMO CARDIACO</td>
				</tr>
				
				<tr>
				<td>'.$ffecha_ingreso.'</td>
				<td>'.$ppeso.'</td>
				<td>'.$eestatura.'</td>
				<td>'.$vvaloracion_medica.'</td>
				<td>'.$vvaloracion_fisica.'</td>
				<td>'.$rritmo_cardiaco.'</td>
				</tr>
				</table>
				</fieldset>
				 ';

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
	  
	    <?php


$mostrar_datos="select  fecha_informe, peso, estatura, valoracion_medica, valoracion_fisica, ritmo_cardiaco from informe_cliente where documento='$documento' ;";
$enviar_consulta_mostrar=@mysql_query($mostrar_datos, $conexion);


if ($row = mysql_fetch_array($enviar_consulta_mostrar))
{
	
	do   
		{
				$ffecha_informe=stripslashes($row["fecha_informe"]);  //guardo en variables para mostrar luego en tablas
				$ppeso=stripslashes($row["peso"]);
				$eestatura=stripslashes($row["estatura"]);
				$vvaloracion_medica=stripslashes($row["valoracion_medica"]);
				$vvaloracion_fisica=stripslashes($row["valoracion_fisica"]);
				$rritmo_cardiaco=stripslashes($row["ritmo_cardiaco"]);
				
				echo'
				<fieldset id="actualizardatos">
				<table >
				<tr>
				<td colspan="6">PRIMER INFORME REGISTRADO</td>
				</tr>
				<tr>
				<td>FECHA DE INFORME></td>
				<td>PESO</td>
				<td><b>ESTATURA</b></td>
				<td><b>VALORACION MEDICA</b></td>
				<td><b>VALORACION FISICA</b></td>
				<td><b>RITMO CARDIACO</b></td>
				</tr>
				
				<tr>
				<td>'.$ffecha_informe.'</td>
				<td>'.$ppeso.'</td>
				<td>'.$eestatura.'</td>
				<td>'.$vvaloracion_medica.'</td>
				<td>'.$vvaloracion_fisica.'</td>
				<td>'.$rritmo_cardiaco.'</td>
				</tr>
				</table>
				</fieldset>
				 ';

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
        </p>
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